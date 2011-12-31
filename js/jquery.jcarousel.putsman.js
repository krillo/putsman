/**
 * Custom jquery for the big carousel on first page
 */
function bigcarousel_initCallback(carousel){
    // Disable autoscrolling if the user clicks the prev or next button.
    carousel.buttonNext.bind('click', function() {
        carousel.startAuto(0);
    });

    carousel.buttonPrev.bind('click', function() {
        carousel.startAuto(0);
    });

    // Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
};

jQuery(document).ready(function() {
    jQuery('#bigcarousel').jcarousel({
        auto: 2,
        scroll: 1,
        wrap: 'circular',
        buttonPrevHTML: '<div id="prev" style="position:relative; top:-300px; width:50px; height:60px;"></div>',
        buttonNextHTML: '<div id="next" style="position:relative; top:-360px;left:890px; width:50px; height:60px;"></div>',
        initCallback: bigcarousel_initCallback
    });
});



function testimonialcarousel_initCallback(carousel){
    // Disable autoscrolling if the user clicks the prev or next button.
    carousel.buttonNext.bind('click', function() {
        carousel.startAuto(0);
    });

    carousel.buttonPrev.bind('click', function() {
        carousel.startAuto(0);
    });

    // Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
};

jQuery(document).ready(function() {
    jQuery('#testimonial-carousel').jcarousel({
        auto: 5,
        scroll: 1,
        wrap: 'circular',
        initCallback: testimonialcarousel_initCallback
    });
});



