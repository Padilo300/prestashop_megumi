<?php
/*************************************************************
 *	FME Home Comment Module.
 *	Welcome to FME Modules.
 *	Glad to see you.
 *************************************************************
 */

 if (!defined('_PS_VERSION_')) 
 	exit;

 include_once(dirname(__FILE__) . '/models/homeBlock.php');

 class FMMHomeComments extends Module
 {
 	public $_html = '';
 	public function __construct()
	{
		$this ->name = 'fmmhomecomments';
		$this ->tab = 'front_office_features';
		$this ->version = "2.0.0";
		$this ->author = 'UnitedSol(Pvt.)';
		$this ->need_instance = 0;
		$this ->ps_versions_compliancy = array('min' => '1.5' , 'max' => '1.6');

		$this->bootstrap = true;
		parent::__construct();

		$this->displayName = $this->l('Home Comments');
		$this ->description = $this-> l('Display user comments on home page.');

	 	$this ->confirmUninstall = $this->l('Are you sure you want to uninstall?');

	 	if (!Configuration::get('FMM_Home_COMMENTS'))
			$this->warning = $this->l('No name provided');
	}

	public function install()
		{
		
			if (!parent::install()
				|| !$this->registerHook('home')
				|| !$this->registerHook('header')
				|| !Configuration::updateValue('FMM_Home_COMMENTS',8)
				|| !Configuration::updateValue('SHOW_CUSTOMER_NAME',1)
				|| !Configuration::updateValue('SHOW_STARS',1)
				|| !Configuration::updateValue('SHOW_COMMENT_TITLE',1)
				|| !homeBlock::insertTitle(327,'Latest reviews from our Customers')
				)
				return true;

			return false;
		}

	public function uninstall()
	{
		if (parent::uninstall()
			&& Configuration::deleteByName('FMM_Home_COMMENTS')
			&& Configuration::deleteByName('SHOW_CUSTOMER_NAME')
			&& Configuration::deleteByName('SHOW_STARS')
			&& Configuration::deleteByName('SHOW_COMMENT_TITLE')
			&& homeBlock::deleteTitle(327)
			&& $this->unregisterHook('header')
			&& $this->unregisterHook('home')
			) 
			return false;

		return true;
	}

	public function _postProcess()
	{
		if(Tools::isSubmit('submitComment')) 
		{	
			

            homeBlock::updateTitle(Tools::getValue('module_title'));
        	Configuration::updateValue(('FMM_Home_COMMENTS'),Tools::getValue('product_minimal_comments'));
      		Configuration::updateValue(('SHOW_CUSTOMER_NAME'),Tools::getValue('allow_cust'));
      		Configuration::updateValue(('SHOW_STARS'),Tools::getValue('allow_stars'));
      		Configuration::updateValue(('SHOW_COMMENT_TITLE'),Tools::getValue('allow_title'));

      		$this->_html .= '<div class="conf confirm">'.$this->l('Settings Successfully Updated').'</div>';
       		
   		}

	}

	public function getContent()
	{
	
		$this->_postProcess();
		$this->displayForm();
		
		return $this->_html;

	}

	public function displayForm()
	{

		$updateVal = Configuration::get('FMM_Home_COMMENTS');
		$title = homeBlock::getTitle();
		$this->_html = '

			<h2>'.$this->displayName.'</h2>
			<fieldset class="width2">
				<legend><img src="../img/admin/cog.gif" alt="" title="" />'.$this->l('Configuration').'</legend>
				<form action="'.$_SERVER['REQUEST_URI'].'" method="post" name="comment_configuration">
					<div class="clear" style="height: 20px;"></div>
					<label style="padding-top: 0;">'.$this->l('Number of comments to show : ').'</label>
					<div class="margin-form">
						<input name="product_minimal_comments" type="text" class="text" value="'.$updateVal.'" style="width: 40px; text-align: right;" />
					</div>
					<div class="clear" style="height: 20px;"></div>
					<label style="padding-top: 0;">'.$this->l('Module\'s Title : ').'</label>
					<div class="margin-form">
						<input name="module_title" type="text" class="text" value="'.$title.'" style="width: auto; text-align: left;" />
					</div>
					<div class="clear" style="height: 20px;"></div>
					<label style="padding-top: 0;">'.$this->l('Show Customer Name :').'</label>
					<div class="margin-form">
						<input type="radio" name="allow_cust" id="allow_cust_on" value="1" '.(Configuration::get('SHOW_CUSTOMER_NAME') ? 'checked="checked" ' : '').'/>
						<label class="t" for="allow_cust_on"> <img src="../img/admin/enabled.gif" alt="'.$this->l('Enabled').'" title="'.$this->l('Enabled').'" /></label>
						<input type="radio" name="allow_cust" id="allow_cust_off" value="0" '.(!Configuration::get('SHOW_CUSTOMER_NAME') ? 'checked="checked" ' : '').'/>
						<label class="t" for="allow_cust_off"> <img src="../img/admin/disabled.gif" alt="'.$this->l('Disabled').'" title="'.$this->l('Disabled').'" /></label>
					</div>
					<div class="clear" style="height: 20px;"></div>
					<label style="padding-top: 0;">'.$this->l('Show Ratting :').'</label>
					<div class="margin-form">
						<input type="radio" name="allow_stars" id="allow_stars_on" value="1" '.(Configuration::get('SHOW_STARS') ? 'checked="checked" ' : '').'/>
						<label class="t" for="allow_stars_on"> <img src="../img/admin/enabled.gif" alt="'.$this->l('Enabled').'" title="'.$this->l('Enabled').'" /></label>
						<input type="radio" name="allow_stars" id="allow_stars_off" value="0" '.(!Configuration::get('SHOW_STARS') ? 'checked="checked" ' : '').'/>
						<label class="t" for="allow_stars_off"> <img src="../img/admin/disabled.gif" alt="'.$this->l('Disabled').'" title="'.$this->l('Disabled').'" /></label>
					</div>
					<div class="clear" style="height: 20px;"></div>
					<label style="padding-top: 0;">'.$this->l('Show Comment Title :').'</label>
					<div class="margin-form">
						<input type="radio" name="allow_title" id="allow_title_on" value="1" '.(Configuration::get('SHOW_COMMENT_TITLE') ? 'checked="checked" ' : '').'/>
						<label class="t" for="allow_title_on"> <img src="../img/admin/enabled.gif" alt="'.$this->l('Enabled').'" title="'.$this->l('Enabled').'" /></label>
						<input type="radio" name="allow_title" id="allow_title_off" value="0" '.(!Configuration::get('SHOW_COMMENT_TITLE') ? 'checked="checked" ' : '').'/>
						<label class="t" for="allow_title_off"> <img src="../img/admin/disabled.gif" alt="'.$this->l('Disabled').'" title="'.$this->l('Disabled').'" /></label>
					</div>
					<div class="clear"></div>
					<div class="margin-form clear">
						<input type="submit" name="submitComment" value="'.$this->l('Save').'" class="button" />
					</div>
				</form>';
				
		$this->_html .= '</fieldset><br />';
	}

	public function hookHeader()
	{
		$this->context->controller->addCSS($this->_path.'fmmhomecomments.css', 'all');
	}

	public function hookDisplayHome()
	{	

		$id_lang = $this->context->language->id;
		$id_shop = $this->context->shop->id;
		$myTitle = homeBlock::getTitle();

		$myData = homeBlock::getAll($id_lang);

		foreach ($myData as $key=>$data)
		{
			for ($i = $key; $i < count($myData); $i++)
			{
				$a = $myData[$key];
				$b = $myData[$i + 1];
				$one = $myData[$key]["date_add"];
				$two = $myData[$i + 1]["date_add"];
				if ($one < $two)
				{
					$temp = $a;
					$myData[$key] = $myData[$i + 1];
					$myData[$i + 1] = $temp;
				}
			}
		}

		$this->context->smarty->assign(array(
										'nbComments' =>  Configuration::get('FMM_Home_COMMENTS'),
										'allow_cust' =>  Configuration::get('SHOW_CUSTOMER_NAME'),
										'allow_stars' => Configuration::get('SHOW_STARS'),
										'allow_title' => Configuration::get('SHOW_COMMENT_TITLE'),
										'module_title'=> $myTitle,
										'cmt_data' 	=>	 $myData,
										));

		return ($this->display(__FILE__, 'fmmhomecomments.tpl'));
	}

}

?>