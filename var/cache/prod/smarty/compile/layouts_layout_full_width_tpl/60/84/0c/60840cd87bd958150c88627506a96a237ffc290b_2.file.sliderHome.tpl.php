<?php
/* Smarty version 3.1.33, created on 2019-07-05 13:56:15
  from '/home/padilo00/padilo.pro/presta/themes/classic/templates/_partials/sliderHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1f2ccf0a14f6_62181671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60840cd87bd958150c88627506a96a237ffc290b' => 
    array (
      0 => '/home/padilo00/padilo.pro/presta/themes/classic/templates/_partials/sliderHome.tpl',
      1 => 1559307712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1f2ccf0a14f6_62181671 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="mg-main-popular">
  <div class="container">
    <h2>Бестселлеры</h2>
    <ul class="nav nav-pills mb-3 mg-nav-pills" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Со скидкой</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Новинки</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-profile-tab2" data-toggle="pill" href="#pills-profile2" role="tab" aria-controls="pills-profile" aria-selected="false">В подарок</a>
      </li>
    </ul>
    <div class="tab-content mg-tab-content" id="pills-tabContent">
      
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="mg-main-slider mg-main-slider-popular" id="mg-main-slider-popular-1">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displaySpecial"),$_smarty_tpl ) );?>

        </div>
      </div>


      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="mg-main-slider mg-main-slider-popular" id="mg-main-slider-popular-2">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayNewproduct"),$_smarty_tpl ) );?>

        </div>
      </div>

      <div class="tab-pane fade" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile-tab2">
        <div class="mg-main-slider mg-main-slider-popular" id="mg-main-slider-popular-3">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFeaturedproduct"),$_smarty_tpl ) );?>


        </div>
    </div>
  </div>
</section>
<?php echo '<script'; ?>
>
  'use strict';

  var Shuffle = window.Shuffle;

  var Demo = function (element) {
    this.element = element;
    this.initShuffle();
    this.setupEvents();
  };

  // Column width and gutter width options can be functions
  Demo.prototype.initShuffle = function () {
    this.shuffle = new Shuffle(this.element, {
      itemSelector: '.box',
      speed: 250,
      sizer: '.my-sizer-element',
      easing: 'ease'
    });
  };

  Demo.prototype.setupEvents = function () {
    document.querySelector('#filterer').addEventListener('change', this.onFilterChange.bind(this));

    // Show off some shuffle events
    this.shuffle.on(Shuffle.EventType.REMOVED, function (data) {
      console.log(data);
    });
  };




  Demo.prototype.toggleActiveClasses = function (event) {
    // Add and remove `active` class from buttons.
    var buttons = Array.from(event.currentTarget.children);
    buttons.forEach(function (button) {
      if (button.querySelector('input').value === event.target.value) {
        button.classList.add('active');
      } else {
        button.classList.remove('active');
      }
    });
  };

  Demo.prototype.getReviews = function (element) {
    return parseInt(element.getAttribute('data-reviews'), 10);
  };


  Demo.prototype.onFilterChange = function (event) {
    this.toggleActiveClasses(event);
    this.filterBy(event.target.value);
  };

  Demo.prototype.filterBy = function (value) {
    var filterBy;
    var _this = this;

    if (value === 'none') {
      filterBy = Shuffle.ALL_ITEMS;
    } else {
      filterBy = function (element) {
        return _this.getReviews(element) == value;
      };
    }

    this.shuffle.filter(filterBy);
  };



  document.addEventListener('DOMContentLoaded', function () {
    window.demo = new Demo(document.getElementById('my-shuffle'));
  });
<?php echo '</script'; ?>
><?php }
}
