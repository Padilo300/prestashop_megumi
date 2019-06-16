<?php
/**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author    SeoSA <885588@bk.ru>
 *  @copyright 2012-2017 SeoSA
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

class SeosaShopReviewsReviewModuleFrontController extends ModuleFrontController
{
	/**
	 * @var SeosaShopReviews
	 */
	public $module;

	/**
	 * @var array
	 */
	public $allowed_image_types = array('jpg', 'jpeg', 'png', 'gif');

	/**
	 * SeosaShopReviewsReviewModuleFrontController constructor.
	 */
	public function __construct()
	{
		parent::__construct();

		SeosaShopReviews::registerAutoloader();
		SeosaShopReviews::registerSmartyFunction();
	}

	/**
	 * @return bool
	 */
	public function setMedia()
	{
		parent::setMedia();

		if (SSRTools::isPs15())
			$this->addJquery();

		$this->context->controller->addJqueryPlugin('fancybox');
		$this->module->addBxSlider();

		$this->context->controller->addJS($this->module->getPathUri().'views/js/'.$this->module->name.'.js');
		$this->context->controller->addCSS($this->module->getPathUri().'views/css/'.$this->module->name.'.css');
        $this->addJS($this->module->getPathUri().'views/js/jquery.rating.pack.js');
	}

	/**
	 * @throws \PrestaShopException
	 */
	public function initContent()
	{
		parent::initContent();

		$nb_reviews = SSRShopReview::getActiveObjectsCount(
			(bool)SSRConfiguration::get('SPLIT_BY_LANG') ? (int)$this->context->language->id : null
		);

		if (version_compare(_PS_VERSION_, '1.7.0.0', '<')) {
            $this->pagination($nb_reviews);
        } else {
		    $this->pagination17($nb_reviews);
        }

		$reviews = SSRShopReview::collection($this->context->language->id);
		$reviews->where('active', '=', '1');
		$reviews->setPageNumber($this->p);
		$reviews->setPageSize($this->n);

		$id_product = (int)Tools::getValue('id_product');
		if ($id_product)
			$reviews->where('id_product', '=', $id_product);

		$this->context->smarty->assign(array(
			'requestNb'    => $this->context->link->getModuleLink(
				$this->module->name,
				'review'
			),
		));

		$this->context->smarty->assign(array(
			'pagination_tpl_path'  => _PS_THEME_DIR_.'pagination.tpl',
			'path'                 => $this->l('Reviews'),
			'reviews'              => $reviews->getAll(),
			'errors'               => $this->errors,
			'nb_reviews_per_page' => $this->n,
			'nb_reviews' => $nb_reviews,
            'vars_form' => array(
                'php_self' => 'seosa-review',
                'form_url' => $this->context->link->getModuleLink($this->module->name, 'review'),
                'hook_type' => 'home form-visible'
            ),
            'saved_review' => Tools::getValue('review_add') ? new SSRShopReview(Tools::getValue('review_add')) : false,
            'gdpr' => Module::isEnabled('psgdpr'),
            'id_module' => $this->module->id
		));

		$this->setTemplate(
            version_compare(
                _PS_VERSION_, '1.7.0.0', '<'
            ) ? 'review.tpl' : 'module:seosashopreviews/views/templates/front/review_17.tpl'
        );
	}

	public function process()
	{
		if ('POST' !== $this->getRequestMethod())
			return;

		if (!SeosaShopReviews::canAddReview())
		{
			$this->errors[] = Tools::displayError(
				$this->module->l('Access denied.')
			);

			return;
		}

		if (Module::isEnabled('psgdpr') && !Tools::getValue('psgdpr_consent_checkbox')) {
            $this->errors[] = Tools::displayError(
                $this->module->l('Confirm the processing of personal data.')
            );

            return;
        }

		$text = Tools::getValue('text');
		if (!$text || !Validate::isMessage($text))
			$this->errors[] = Tools::displayError(
				$this->l('Review text is not valid.')
			);

        $image = isset($_FILES['image']) ? $_FILES['image'] : null;
if ($image['name'] != "") {
    if ($image) {
        $type = Tools::strtolower(Tools::substr(strrchr($image['name'], '.'), 1));
        $image_info = getimagesize($image['tmp_name']);
        $short_mime = $image_info ? Tools::strtolower(Tools::substr(strrchr($image_info['mime'], '/'), 1)) : '';
        if (!empty($image_info)
            && in_array($short_mime, $this->allowed_image_types, true)
            && in_array($type, $this->allowed_image_types, true)) {
            $image_error = ImageManager::validateUpload($image);
            if ($image_error)
                $this->errors[] = $image_error;
        };
    } else {
        $this->errors[] = Tools::displayError(
            $this->module->l('Image is required.')
        );
    };

}
		if (empty($this->errors))
		{
			$review = new SSRShopReview();
			$review->active = (bool)SSRConfiguration::get('AUTO_VALIDATION');
			$review->text = $text;
			$review->id_lang = $this->context->language->id;
			$review->id_customer = $this->context->customer->id;
			$review->id_product = Tools::getValue('id_product', 0);
			$review->name = Tools::getValue('name');
			$review->rating =Tools::getValue('rating');

			if ($review->save())
			{
				$tmp_name = tempnam(_PS_TMP_IMG_DIR_, 'PS');
				if (move_uploaded_file($image['tmp_name'], $tmp_name))
				{
					$image = _PS_IMG_DIR_.'/seosashopreviews/'.$review->id.'.jpg';

					if (ImageManager::resize($tmp_name, $image, null, null, 'jpg') && $review->createThumbnails()) {
                        $this->context->smarty->assign('saved_review', $review);
                    } else {
					    $this->errors[] = Tools::displayError($this->l('An error occurred during image resize.'));
                    }

					if ($tmp_name && file_exists($tmp_name)) {
					    unlink($tmp_name);
                    }
				}
				Tools::redirectLink($this->context->link->getModuleLink($this->module->name, 'review', array('review_add' => $review->id)));
			} else {
			    $this->errors[] = Tools::displayError($this->l('An error occurred during the creation of review.'));
            }
		}
	}

	protected function getRequestMethod()
	{
		return Tools::strtoupper(array_key_exists('REQUEST_METHOD', $_SERVER) ? $_SERVER['REQUEST_METHOD'] : 'GET');
	}

	/**
	 * @param string $string
	 * @return string
	 */
	public function l($string, $specific = false, $class = null, $addslashes = false, $htmlentities = true)
	{
		return Translate::getModuleTranslation(
			$this->module->name,
			$string,
			'review'
		);
	}

    /**
     * Assigns product list page pagination variables
     *
     * @param int|null $total_products
     * @throws PrestaShopException
     */
    public function pagination17($total_products = null)
    {
        if (!self::$initialized) {
            $this->init();
        } elseif (!$this->context) {
            $this->context = Context::getContext();
        }

        // Retrieve the default number of products per page and the other available selections
        $default_products_per_page = max(1, (int)Configuration::get('PS_PRODUCTS_PER_PAGE'));
        $n_array = array($default_products_per_page, $default_products_per_page * 2, $default_products_per_page * 5);

        if ((int)Tools::getValue('n') && (int)$total_products > 0) {
            $n_array[] = $total_products;
        }
        // Retrieve the current number of products per page (either the default, the GET parameter or the one in the cookie)
        $this->n = $default_products_per_page;
        if (isset($this->context->cookie->nb_item_per_page) && in_array($this->context->cookie->nb_item_per_page, $n_array)) {
            $this->n = (int)$this->context->cookie->nb_item_per_page;
        }

        if ((int)Tools::getValue('n') && in_array((int)Tools::getValue('n'), $n_array)) {
            $this->n = (int)Tools::getValue('n');
        }

        // Retrieve the page number (either the GET parameter or the first page)
        $this->p = (int)Tools::getValue('p', 1);
        // If the parameter is not correct then redirect (do not merge with the previous line, the redirect is required in order to avoid duplicate content)
        if (!is_numeric($this->p) || $this->p < 1) {
            Tools::redirect($this->context->link->getPaginationLink(false, false, $this->n, false, 1, false));
        }

        // Remove the page parameter in order to get a clean URL for the pagination template
        $current_url = preg_replace('/(?:(\?)|&amp;)p=\d+/', '$1', Tools::htmlentitiesUTF8($_SERVER['REQUEST_URI']));

        if ($this->n != $default_products_per_page || isset($this->context->cookie->nb_item_per_page)) {
            $this->context->cookie->nb_item_per_page = $this->n;
        }

        $pages_nb = ceil($total_products / (int)$this->n);
        if ($this->p > $pages_nb && $total_products != 0) {
            Tools::redirect($this->context->link->getPaginationLink(false, false, $this->n, false, $pages_nb, false));
        }

        $range = 2; /* how many pages around page selected */
        $start = (int)($this->p - $range);
        if ($start < 1) {
            $start = 1;
        }

        $stop = (int)($this->p + $range);
        if ($stop > $pages_nb) {
            $stop = (int)$pages_nb;
        }

        $this->context->smarty->assign(array(
            'nb_products'       => $total_products,
            'products_per_page' => $this->n,
            'pages_nb'          => $pages_nb,
            'p'                 => $this->p,
            'n'                 => $this->n,
            'nArray'            => $n_array,
            'range'             => $range,
            'start'             => $start,
            'stop'              => $stop,
            'current_url'       => $current_url,
        ));
    }
}