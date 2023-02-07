/* Client
========================================================================== */
jQuery(document).ready(function ($) {

    /**
     * Partner tabs carousel
     */
    function update_partners_carousel(){
        let partners_tabs = jQuery('#partners .tabs-wrapper.onscreen.is-onscreen');
        if(partners_tabs && !jQuery(partners_tabs).hasClass('user-interaction'))
        {
            let maxIndex = jQuery(partners_tabs).find('.tab-menu-item').length -1;
            if(maxIndex){
                partnersCarouselIndex++;
                if(partnersCarouselIndex > maxIndex){
                    partnersCarouselIndex = 0;
                }
                jQuery(partners_tabs).find('.tab-menu-item').removeClass('active in');
                jQuery(partners_tabs).find('.tabs-item').removeClass('active in');
                jQuery(partners_tabs).find('.tab-menu-item').eq(partnersCarouselIndex).addClass('active in');
                jQuery(partners_tabs).find('.tabs-item').eq(partnersCarouselIndex).addClass('active in');
            }
        }
        else if(partners_tabs && jQuery(partners_tabs).hasClass('user-interaction')){
            window.clearInterval(partnersTimer);
        }
    }
    var partnersTimer = setInterval(update_partners_carousel, 7500);
    var partnersCarouselIndex = 0;


    /**
     * Our Mission parallax
     */
    var mission = document.getElementById('our-mission');
    if(mission){
        var missionPosHeight = jQuery(mission).offset().top + jQuery(mission).outerHeight();
        var figureH = jQuery('#our-mission .inner-picture .shape-img svg').height();
        console.log(missionPosHeight);
        console.log(figureH);

        window.onscroll = function(event)
        {
            var wpos = Math.min(1, window.scrollY / missionPosHeight);
            var p1 = figureH / 3 * wpos;
            var p2 = figureH / 2 * wpos;
            jQuery('#our-mission .inner-picture .shape-one').css('transform', 'translateY(-'+p1+'px)');
            jQuery('#our-mission .inner-picture .shape-two').css('transform', 'translateY('+p2+'px)');
        }
    }
})
