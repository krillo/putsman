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
        buttonPrevHTML: '<div id="prev" ></div>',
        buttonNextHTML: '<div id="next" ></div>',
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
        auto: 6,
        scroll: 1,
        vertical: true,
        wrap: 'circular',
        initCallback: testimonialcarousel_initCallback
    });
});



