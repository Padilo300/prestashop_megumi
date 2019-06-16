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

(function ($) {
    $(function () {
        $('.seosashopreviews').each(function () {
            var block = $(this);
            var slider = block.find('.reviews-list-slider');
            if (slider.length)
            {
                var config = JSON.parse(block.find('[data-slider-config]').html());
                var block_content = block.find('.block_content');

                var fixHeight = function () {
                    block_content.height(
                        block.find('.bx-viewport').height() +
                        block.find('.bx-controls').height() +
                        (config.type === 'left' ? block.find('.controls').height() : 0)
                    );
                };

                $('.reviews > .reviews-list-slider').bxSlider($.extend(config, {
                    adaptiveHeight: true,
                    captions: false,
                    onSliderLoad: fixHeight,
                    onSlideAfter: fixHeight,
                    onSlideBefore: function () {
                        block_content.css('height', 'auto');
                    }
                }));


                block.find('.read-more').on('click', function (e) {
                    e.preventDefault();
                    var review  =  $(this).closest('.review');
                    review.find('.short-text').hide();
                    review.find('.full-text').show();
                    slider.redrawSlider();
                });
            }

            var showForm = function (e) {
                e.preventDefault();
                block.find('.shopreviews_form').css('position', 'static');
                block.addClass('form-visible')
            };
            var hideForm = function (e) {
                e.preventDefault();
                block.find('.shopreviews_form').css('position', 'static');
                block.removeClass('form-visible')
            };
            var toggleForm = function (e) {
                e.preventDefault();
                block.toggleClass('form-visible')
            };

            block.find('.fancybox').fancybox();
            block.on('click', '[data-show-form]', showForm);
            block.on('click', '[data-hide-form]', hideForm);
            block.on('click', '[data-toggle-form]', toggleForm);
        });



        //$('.seosa-shops-reviews-new-review').bind('click', function () {
        //    var $this = $(this);
        //    $this.hide();
        //    $this.closest('.seosa-shops-reviews-block').find('.show-all').hide();
        //    $this.closest('.seosa-shops-reviews-block').find('.seosa-shops-reviews-review-form').show();
        //});
        //
        //$('.seosa-shops-reviews-cancel-new-review').bind('click', function () {
        //    var $this = $(this);
        //    $this.closest('.seosa-shops-reviews-block').find('.seosa-shops-reviews-review-form').hide();
        //    $this.closest('.seosa-shops-reviews-block').find('.seosa-shops-reviews-new-review').show();
        //    $this.closest('.seosa-shops-reviews-block').find('.show-all').show();
        //});
        //
        //$('.seosa-shops-reviews-block .reviews-list').each(function () {
        //    var $list = $(this);
        //    var items = $list.find('.review-item');
        //    var count = items.length;
        //    var current = 0;
        //    var speed = parseInt($list.data('speed')) || 3500;
        //    var $playStop = $list.find('.play-stop');
        //    var $prev = $list.find('.prev');
        //    var $next = $list.find('.next');
        //
        //    var interval = null;
        //
        //    var show = function (index) {
        //        if (index >= count) index = 0;
        //        if (index < 0) index = count - 1;
        //
        //        items.removeClass('current');
        //        $(items[index]).addClass('current');
        //        current = index;
        //    };
        //
        //    var stopInterval = function () {
        //        if (interval) {
        //            clearInterval(interval);
        //            if ($playStop.length) $playStop.toggleClass('playing');
        //            interval = null;
        //        }
        //    };
        //    var startInterval = function () {
        //        if (!interval) {
        //            interval = setInterval(next, speed);
        //            if ($playStop.length) $playStop.addClass('playing');
        //        }
        //    };
        //
        //    var toggleInterval = function () {
        //        if (interval)
        //            stopInterval();
        //        else
        //            startInterval();
        //    };
        //
        //    var next = function () {
        //        show(current + 1);
        //    };
        //
        //    var prev = function () {
        //        show(current - 1);
        //    };
        //
        //    if ($playStop.length) $playStop.bind('click', toggleInterval);
        //    if ($prev.length) $prev.bind('click', function () {
        //        stopInterval();
        //        prev();
        //    });
        //    if ($next.length) $next.bind('click', function () {
        //        stopInterval();
        //        next();
        //    });
        //    if (count > 1) startInterval();
        //})

    });
})(jQuery);
