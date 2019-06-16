/*
 ### jQuery Star Rating Plugin v2.0 - 2008-03-12 ###
 By Diego A, http://www.fyneworks.com, diego@fyneworks.com
 - v2 by Keith Wood, kbwood@virginbroadband.com.au

 Project: http://plugins.jquery.com/project/MultipleFriendlyStarRating
 Website: http://www.fyneworks.com/jquery/star-rating/

 This is a modified version of the star rating plugin from:
 http://www.phpletter.com/Demo/Jquery-Star-Rating-Plugin/
 */

$(document).ready(function(){

    function functionStarSr() {
        star_sr.mouseover(function() {
            $(this)
                .closest(".seosashopreviews_rating").children(".star_sr")
                .slice($(this).attr('title')).removeClass('star_sr_on');
            $(this)
                .closest(".seosashopreviews_rating").children(".star_sr")
                .slice(0, $(this).attr('title')).addClass('star_sr_on');
        });
        star_sr.mouseout(function() {
            $(this)
                .closest(".seosashopreviews_rating").children(".star_sr")
                .removeClass('star_sr_on');
            $(this)
                .closest(".seosashopreviews_rating").children(".star_sr")
                .slice(0, $('[name="rating"]').val()).addClass('star_sr_on');
        });
        star_sr.click(function() {
            $('[name="rating"]').val($(this).attr('title'));
        });
    }

    var star_sr = $('.star_sr1'); functionStarSr();
    var star_sr = $('.star_sr2'); functionStarSr();
    var star_sr = $('.star_sr3'); functionStarSr();
    var star_sr = $('.star_sr4'); functionStarSr();
    var star_sr = $('.star_sr5'); functionStarSr();

    $('a.delete_star').on('click', function(){
        $('a.star_sr').removeClass('star_sr_on');
        $('[name="rating"]').val(0);
        return false;
    });

});