<?php

/* __string_template__6f1effe396cd5ecbb928bb7daec4b5924f4259a49d7a37741ec9b01eb8a234cc */
class __TwigTemplate_c3ff93ccf5f30ed899048ef681dacb84837b6c4293e0adbc9a7536eca5b8a76b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>SEO и URL • test</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminMeta';
    var iso_user = 'ru';
    var lang_is_rtl = '0';
    var full_language_code = 'ru-ru';
    var full_cldr_language_code = 'ru-RU';
    var country_iso_code = 'UA';
    var _PS_VERSION_ = '1.7.5.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'В вашем магазине появился новый заказ.';
    var order_number_msg = 'Номер заказа: ';
    var total_msg = 'Всего: ';
    var from_msg = 'С: ';
    var see_order_msg = 'Смотреть заказ';
    var new_customer_msg = 'Новый клиент зарегистрировался в вашем магазине.';
    var customer_name_msg = 'Имя клиента: ';
    var new_msg = 'Новая сообщение было отправлено в ваш магазин.';
    var see_msg = 'Прочитать это сообщение';
    var token = '3497e77cf3351293ef9d299afc09c620';
    var token_admin_orders = '441230d2c24a2ac76d141f82112f90c8';
    var token_admin_customers = 'b0430b148aa97fb4db2b99492b5eada5';
    var token_admin_customer_threads = '0d1f4deaaa8b2b2590e460f60f3c6e6f';
    var currentIndex = 'index.php?controller=AdminMeta';
    var employee_token = '3242da8b7c447cd66dfc713c94d7e52d';
    var choose_language_translate = 'Выберите язык';
    var default_language = '1';
    var admin_modules_link = '/admin5225jw75b/index.php/improve/modules/catalog/recommended?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8';
    var tab_modules_list = 'gadwords,seohelping,ganalytics,pm_seointernallinking,ec_seo404,gmerchantcenter,gsitemap,etranslation,bablic';
    var update_success_msg = 'Успешно обновлено';
    var errorLogin = 'PrestaShop не может войти в систему Addons, пожалуйста, проверьте свои данные и интернет-соединение.';
    var search_product_msg = 'Искать товар';
  </script>

      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin5225jw75b/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin5225jw75b/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin5225jw75b\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"UAH\",\"sign\":\"\\u20b4\",\"name\":\"\\u0423\\u043a\\u0440\\u0430\\u0438\\u043d\\u0441\\u043a\\u0430\\u044f \\u0433\\u0440\\u0438\\u0432\\u043d\\u0430\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/admin5225jw75b/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.5.2\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.5.2\"></script>
<script type=\"text/javascript\" src=\"/admin5225jw75b/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin5225jw75b/themes/default/js/vendor/nv.d3.min.js\"></script>

  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminGamification&token=0d734752d362bb1d54b54c2aa15819c6';
\t\t\t\tvar current_id_tab = 95;
\t\t\t</script><style>
.icon-AdminSmartBlog:before{
  content: \"\\f14b\";
   }
 
</style>
<link rel=\"stylesheet\" type=\"text/css\" href=\"/modules/smartblog/views/css/bootstrap-grid.css\">
<script type=\"text/javascript\">
\t\t\t\t\tvar PS_ALLOW_ACCENTED_CHARS_URL = 0;
\t\t</script>

";
        // line 91
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-ru adminmeta\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminDashboard&amp;token=735cc32126470dee51944a38494c203d\"></a>
    <span id=\"shop_version\">1.7.5.2</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Быстрый доступ
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminModules&amp;&amp;configure=smartblog&amp;token=01060dff6c4c061098bcbd951adea52a\"
                 data-item=\"Smart Blog Setting\"
      >Smart Blog Setting</a>
          <a class=\"dropdown-item\"
         href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminOrders&amp;token=441230d2c24a2ac76d141f82112f90c8\"
                 data-item=\"Заказы\"
      >Заказы</a>
          <a class=\"dropdown-item\"
         href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminCategories&amp;addcategory&amp;token=5524d57150e79b98742d4cf1688acbf5\"
                 data-item=\"Новая категория\"
      >Новая категория</a>
          <a class=\"dropdown-item\"
         href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=a6020b807ce05adb006c5917af3a71c2\"
                 data-item=\"Новый купон\"
      >Новый купон</a>
          <a class=\"dropdown-item\"
         href=\"http://presta.padilo.pro/admin5225jw75b/index.php/sell/catalog/products/new?token=d2323dffdc4912c59852897ae01a2dbe\"
                 data-item=\"Новый товар\"
      >Новый товар</a>
          <a class=\"dropdown-item\"
         href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=ccb1ab96ca2d561f25b9e351bba7baa8\"
                 data-item=\"Оценка каталога\"
      >Оценка каталога</a>
          <a class=\"dropdown-item\"
         href=\"http://presta.padilo.pro/admin5225jw75b/index.php/improve/modules/manage?token=d2323dffdc4912c59852897ae01a2dbe\"
                 data-item=\"Установленные модули\"
      >Установленные модули</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"55\"
        data-icon=\"icon-AdminParentMeta\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/seo-urls/?-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\"
        data-post-link=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminQuickAccesses&token=dce5f77adf0983fa6e81becd1acc0a58\"
        data-prompt-text=\"Задайте название ярлыка:\"
        data-link=\"SEO и URL - Список\"
      >
        <i class=\"material-icons\">add_circle</i>
        Добавить текущую страницу в Быстрый Доступ
      </a>
        <a class=\"dropdown-item\" href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminQuickAccesses&token=dce5f77adf0983fa6e81becd1acc0a58\">
      <i class=\"material-icons\">settings</i>
      Управление быстрым доступом
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin5225jw75b/index.php?controller=AdminSearch&amp;token=71d8573451a70019e0710eceb720116f\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Поиск (например, артикул, имя пользователя...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Везде
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Везде\" href=\"#\" data-value=\"0\" data-placeholder=\"Что вы ищете?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Везде</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Каталог\" href=\"#\" data-value=\"1\" data-placeholder=\"Название товара, артикул, ссылка...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Каталог</a>
        <a class=\"dropdown-item\" data-item=\"Клиенты по имени\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, имя...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Клиенты по имени</a>
        <a class=\"dropdown-item\" data-item=\"Клиенты по IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Клиенты по IP-адресу</a>
        <a class=\"dropdown-item\" data-item=\"Заказы\" href=\"#\" data-value=\"3\" data-placeholder=\"№ заказа\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Заказы</a>
        <a class=\"dropdown-item\" data-item=\"По счетам\" href=\"#\" data-value=\"4\" data-placeholder=\"Номер накладной\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> По счетам</a>
        <a class=\"dropdown-item\" data-item=\"Корзины\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Корзины\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Корзины</a>
        <a class=\"dropdown-item\" data-item=\"Модули\" href=\"#\" data-value=\"7\" data-placeholder=\"Название модуля\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Модули</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">Поиск</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
    </div>

            <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://presta.padilo.pro/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Перейти в магазин
    </a>
  </div>
    </div>
          <div class=\"component header-right-component\" id=\"header-notifications-container\">
        <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Заказы<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Клиенты<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Сообщения<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Сейчас нет новых заказов :(<br>
              Вы проверяли <strong><a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=d815ac21779f4495d90b00530feadfb8\">брошенные корзины</a></strong>?<br>Ваш следующий заказ может скрываться там!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Пока нет новых клиентов :(<br>
              Рассматривали ли вы продажу на рынках?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Пока нет сообщений.<br>
              Нет новостей - уже хорошая новость, ведь так?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      c <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - зарегистрировано <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
      </div>
        <div class=\"component\" id=\"header-employee-container\">
      <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/padilo300%40gmail.com.jpg\" />
      <span>Константин Падило</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminEmployees&amp;id_employee=1&amp;updateemployee=1&amp;token=3242da8b7c447cd66dfc713c94d7e52d\">
      <i class=\"material-icons\">settings_applications</i>
      Ваш профиль
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminLogin&amp;logout=1&amp;token=8d4b74daa3b852b384b9bef368b99b4b\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Выход</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminDashboard&amp;token=735cc32126470dee51944a38494c203d\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Пульт</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Продажа</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminOrders&amp;token=441230d2c24a2ac76d141f82112f90c8\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Заказы
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminOrders&amp;token=441230d2c24a2ac76d141f82112f90c8\" class=\"link\"> Заказы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/admin5225jw75b/index.php/sell/orders/invoices/?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\"> По счетам
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminSlip&amp;token=10539004d1c627af77851917d9c12e90\" class=\"link\"> Платежные квитанции
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/admin5225jw75b/index.php/sell/orders/delivery-slips/?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\"> Транспортные накладные
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminCarts&amp;token=d815ac21779f4495d90b00530feadfb8\" class=\"link\"> Корзины
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/admin5225jw75b/index.php/sell/catalog/products?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Каталог
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/admin5225jw75b/index.php/sell/catalog/products?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\"> Товары
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminCategories&amp;token=5524d57150e79b98742d4cf1688acbf5\" class=\"link\"> Категории
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminTracking&amp;token=4c85aa64c97884b5790c15fd855e1abd\" class=\"link\"> Мониторинг
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminAttributesGroups&amp;token=39515c5040eb4ac404eb0e044c00ddd3\" class=\"link\"> Атрибуты и характеристики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminManufacturers&amp;token=18350207bb5e9405db9503462297e434\" class=\"link\"> Бренды и Поставщики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminAttachments&amp;token=f8bdcadfb0d78d4dd3643d2670fe0ed1\" class=\"link\"> Файлы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminCartRules&amp;token=a6020b807ce05adb006c5917af3a71c2\" class=\"link\"> Скидки
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/admin5225jw75b/index.php/sell/stocks/?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"145\" id=\"subtab-AdminSSRShopReviews\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminSSRShopReviews&amp;token=928a8331516c059c333d5d570b0f1e4d\" class=\"link\"> Reviews
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminCustomers&amp;token=b0430b148aa97fb4db2b99492b5eada5\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Клиенты
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminCustomers&amp;token=b0430b148aa97fb4db2b99492b5eada5\" class=\"link\"> Клиенты
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminAddresses&amp;token=13afbdf600bc7cdc7da3a0e3b7a28846\" class=\"link\"> Адреса
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminCustomerThreads&amp;token=0d1f4deaaa8b2b2590e460f60f3c6e6f\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Клиентская служба
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminCustomerThreads&amp;token=0d1f4deaaa8b2b2590e460f60f3c6e6f\" class=\"link\"> Клиентская служба
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminOrderMessage&amp;token=62ae105a1bc7fb43dc978a607aada929\" class=\"link\"> Сообщения о заказах
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminReturn&amp;token=08d038bced2a7eea888566bd1ea6fba8\" class=\"link\"> Возвраты товаров
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminStats&amp;token=ccb1ab96ca2d561f25b9e351bba7baa8\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Статистика
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Улучшения</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminPsMboModule&amp;token=37f5ee4b71e7830ef8653f6cfe6b1175\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Модули
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminPsMboModule&amp;token=37f5ee4b71e7830ef8653f6cfe6b1175\" class=\"link\"> Каталог модулей
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/admin5225jw75b/index.php/improve/modules/manage?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminThemes&amp;token=520e51a734686f4e3a739cf08f5636e7\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Дизайн
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"123\" id=\"subtab-AdminThemesParent\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminThemes&amp;token=520e51a734686f4e3a739cf08f5636e7\" class=\"link\"> Шаблон и логотип
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminPsMboTheme&amp;token=23f8e6b30fe83be227dcccc6a418e254\" class=\"link\"> Каталог шаблонов
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminCmsContent&amp;token=b32846588e36a90a1081a9210f995915\" class=\"link\"> Страницы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/admin5225jw75b/index.php/improve/design/modules/positions/?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\"> Расположение блоков
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminImages\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminImages&amp;token=3b8f46d85523df7739820911e39a85c4\" class=\"link\"> Настройки изображений
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"122\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminLinkWidget&amp;token=0daf5154451127678378fa483e391387\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"58\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminCarriers&amp;token=305bb73989be3acdcb16847d36d2f0a1\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Доставка
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-58\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminCarriers&amp;token=305bb73989be3acdcb16847d36d2f0a1\" class=\"link\"> Перевозчики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminShipping\">
                              <a href=\"/admin5225jw75b/index.php/improve/shipping/preferences?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\"> Настройки
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"134\" id=\"subtab-AdminCdekSetting\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminCdekSetting&amp;token=ae5082e200075db2dee0521ccc3effd2\" class=\"link\"> CDEK способ доставки
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"61\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/admin5225jw75b/index.php/improve/payment/payment_methods?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Оплата
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-61\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminPayment\">
                              <a href=\"/admin5225jw75b/index.php/improve/payment/payment_methods?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\"> Способы оплаты
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"63\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/admin5225jw75b/index.php/improve/payment/preferences?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\"> Настройки
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"64\" id=\"subtab-AdminInternational\">
                  <a href=\"/admin5225jw75b/index.php/improve/international/localization/?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Интернационализация
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-64\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/admin5225jw75b/index.php/improve/international/localization/?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\"> Локализация
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"70\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminZones&amp;token=dd5223b2fa8a30f1246a3166089d431b\" class=\"link\"> География
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminTaxes&amp;token=7b27cf4762e0bed4cc873b420ea52fbd\" class=\"link\"> Налоги
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\" id=\"subtab-AdminTranslations\">
                              <a href=\"/admin5225jw75b/index.php/improve/international/translations/settings?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\"> Переводы
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"78\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Настроить</span>
          </li>

                          
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"79\" id=\"subtab-ShopParameters\">
                  <a href=\"/admin5225jw75b/index.php/configure/shop/preferences/preferences?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Параметры магазина
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-79\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/admin5225jw75b/index.php/configure/shop/preferences/preferences?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\"> Общее
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"83\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/admin5225jw75b/index.php/configure/shop/order-preferences/?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\"> Настройки заказов
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/admin5225jw75b/index.php/configure/shop/product-preferences/?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\"> Настройки товаров
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"87\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/admin5225jw75b/index.php/configure/shop/customer-preferences/?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\"> Настройки клиента
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"91\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminContacts&amp;token=9945741b277a8d8dbe11c08ec2c05f33\" class=\"link\"> Контакты
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"94\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/admin5225jw75b/index.php/configure/shop/seo-urls/?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\"> Трафик и SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminSearchConf&amp;token=59c0a12dabd891dab62fa9d5ebe48e9d\" class=\"link\"> Поиск
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"127\" id=\"subtab-AdminGamification\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminGamification&amp;token=0d734752d362bb1d54b54c2aa15819c6\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"101\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/admin5225jw75b/index.php/configure/advanced/system-information/?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Расширенные параметры
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-101\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminInformation\">
                              <a href=\"/admin5225jw75b/index.php/configure/advanced/system-information/?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\"> Информация
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"103\" id=\"subtab-AdminPerformance\">
                              <a href=\"/admin5225jw75b/index.php/configure/advanced/performance/?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\"> Производительность
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/admin5225jw75b/index.php/configure/advanced/administration/?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\"> Администрирование
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminEmails\">
                              <a href=\"/admin5225jw75b/index.php/configure/advanced/emails/?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\"> E-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminImport\">
                              <a href=\"/admin5225jw75b/index.php/configure/advanced/import/?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\"> Импорт
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminEmployees&amp;token=3242da8b7c447cd66dfc713c94d7e52d\" class=\"link\"> Сотрудники
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"111\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminRequestSql&amp;token=57266c0cae97ce5e0766173e93cd2c5b\" class=\"link\"> База данных
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"114\" id=\"subtab-AdminLogs\">
                              <a href=\"/admin5225jw75b/index.php/configure/advanced/logs/?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" class=\"link\"> Журнал событий
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"115\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminWebservice&amp;token=bb072358354e91eaf5be024d5b96c54d\" class=\"link\"> Веб службы
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"136\" id=\"tab-AdminSmartBlog\">
              <span class=\"title\">Blog</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"137\" id=\"subtab-AdminBlogCategory\">
                  <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminBlogCategory&amp;token=24e345054265253eab6f0d3fbefb2bc8\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Blog Category
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"138\" id=\"subtab-AdminBlogcomment\">
                  <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminBlogcomment&amp;token=ae6e6e27d1d4cf7db8377b59baea8802\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Blog Comments
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"139\" id=\"subtab-AdminBlogPost\">
                  <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminBlogPost&amp;token=73f8f98bef35ca94d6b976ff470bd9c5\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Blog Post
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"140\" id=\"subtab-AdminImageType\">
                  <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminImageType&amp;token=66602b35d9c2fd2e174ae638fcd5d7a1\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Image Type
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"141\" id=\"subtab-AdminAboutUs\">
                  <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminAboutUs&amp;token=3b604fa9ec1a4d74c487a1da4405a341\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    AboutUs
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Трафик и SEO</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin5225jw75b/index.php/configure/shop/seo-urls/?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" aria-current=\"page\">SEO и URL</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            SEO и URL          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
             

<script>
    
    var isSymfonyContext = true;
    var admin_module_ajax_url_psmbo = 'http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminPsMboModule&token=37f5ee4b71e7830ef8653f6cfe6b1175';
    var controller = 'AdminMeta';
    
    if (isSymfonyContext === false) {
        
        \$(document).ready(function() {
            
            \$('.process-icon-modules-list').parent('a').prop('href', admin_module_ajax_url_psmbo);
            
            \$('.fancybox-quick-view').fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    }
\t
\t\$(document).on('click', '#page-header-desc-configuration-modules-list', function(event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
\t
\t\$('.process-icon-modules-list').parent('a').unbind().bind('click', function (event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
    
    function openModalOrRedirect(isSymfonyContext) {
        if (isSymfonyContext === false) {
            \$('#modules_list_container').modal('show');
            openModulesList();
        } else {
            window.location.href = admin_module_ajax_url_psmbo;
        }
    }
\t
    function openModulesList() {
        \$.ajax({
            type: 'POST',
            url: admin_module_ajax_url_psmbo,
            data: {
                ajax : true,
                action : 'GetTabModulesList',
                controllerName: controller
            },
            success : function(data) {
                \$('#modules_list_container_tab_modal').html(data).slideDown();
                \$('#modules_list_loader').hide();
            },
        });
    }
\t
\t
</script>

                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminMeta&amp;addmeta=&amp;token=3497e77cf3351293ef9d299afc09c620\"                  title=\"Добавить страницу\"                >
                  <i class=\"material-icons\">add_circle_outline</i>
                  Добавить страницу
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/admin5225jw75b/index.php/improve/modules/catalog?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\"                title=\"Рекомендуемые модули\"
                              >
                Рекомендуемые модули
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Помощь\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin5225jw75b/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fru%252Fdoc%252FAdminMeta%253Fversion%253D1.7.5.2%2526country%253Dru/%D0%9F%D0%BE%D0%BC%D0%BE%D1%89%D1%8C?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\"
                   id=\"product_form_open_help\"
                >
                  Помощь
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <li class=\"nav-item\">
                    <a href=\"/admin5225jw75b/index.php/configure/shop/seo-urls/?_token=t6bG4s7_JXKC-eQTtcJDE5UfuhyZBVCbXR3UFGfz2D8\" id=\"subtab-AdminMeta\" class=\"nav-link tab active current\" data-submenu=\"95\">
                      SEO и URL
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminSearchEngines&token=8216aecf57d48e4cee020d943829f0f9\" id=\"subtab-AdminSearchEngines\" class=\"nav-link tab \" data-submenu=\"96\">
                      Поисковые системы
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminReferrers&token=3e077cc30835a509aa54d251bb4b8eb1\" id=\"subtab-AdminReferrers\" class=\"nav-link tab \" data-submenu=\"97\">
                      Рефереры
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </ul>
    </div>
    
</div>
    
    <div class=\"content-div  with-tabs\">

      

      
                        
      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1262
        $this->displayBlock('content_header', $context, $blocks);
        // line 1263
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1264
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1265
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1266
        echo "
           
<div class=\"modal fade\" id=\"modules_list_container\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h3 class=\"modal-title\">Рекомендованные Модули и Сервисы</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"modules_list_container_tab_modal\" style=\"display:none;\"></div>
\t\t\t\t<div id=\"modules_list_loader\"><i class=\"icon-refresh icon-spin\"></i></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>О, нет!</h1>
  <p class=\"mt-3\">
    Мобильная версия этой страницы еще не доступна.
  </p>
  <p class=\"mt-2\">
    Используйте настольный компьютер для просмотра этой страницы, пока она не адаптирована для мобильных устройств.
  </p>
  <p class=\"mt-2\">
    Спасибо.
  </p>
  <a href=\"http://presta.padilo.pro/admin5225jw75b/index.php?controller=AdminDashboard&amp;token=735cc32126470dee51944a38494c203d\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Назад
  </a>
</div>
<div class=\"mobile-layer\"></div>

  <div id=\"footer\" class=\"bootstrap\">
    
</div>


  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-RU&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/ru/login?email=padilo300%40gmail.com&amp;firstname=%D0%9A%D0%BE%D0%BD%D1%81%D1%82%D0%B0%D0%BD%D1%82%D0%B8%D0%BD&amp;lastname=%D0%9F%D0%B0%D0%B4%D0%B8%D0%BB%D0%BE&amp;website=http%3A%2F%2Fpresta.padilo.pro%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RU&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin5225jw75b/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Подключите Ваш магазин к маркету PrestaShop для автоматического импорта приобретенных дополнений.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Нет учетной записи?</h4>
\t\t\t\t\t\t<p class='text-justify'>Откройте для себя мощь PrestaShop Addons! Исследуйте официальный PrestaShop-маркет.  В нем более 3500 инновационных модулей и шаблонов, оптимизирующих коэффициент конверсии, повышающих посещаемость, укрепляющих лояльность, повышающих вашу производительность</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Присоединиться к PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/ru/forgot-your-password\">Я забыл пароль</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/ru/login?email=padilo300%40gmail.com&amp;firstname=%D0%9A%D0%BE%D0%BD%D1%81%D1%82%D0%B0%D0%BD%D1%82%D0%B8%D0%BD&amp;lastname=%D0%9F%D0%B0%D0%B4%D0%B8%D0%BB%D0%BE&amp;website=http%3A%2F%2Fpresta.padilo.pro%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RU&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tСоздать учетную запись
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Войти
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1389
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 91
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1262
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1263
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1264
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1265
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1389
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__6f1effe396cd5ecbb928bb7daec4b5924f4259a49d7a37741ec9b01eb8a234cc";
    }

    public function getDebugInfo()
    {
        return array (  1468 => 1389,  1463 => 1265,  1458 => 1264,  1453 => 1263,  1448 => 1262,  1439 => 91,  1431 => 1389,  1306 => 1266,  1303 => 1265,  1300 => 1264,  1297 => 1263,  1295 => 1262,  120 => 91,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__6f1effe396cd5ecbb928bb7daec4b5924f4259a49d7a37741ec9b01eb8a234cc", "");
    }
}
