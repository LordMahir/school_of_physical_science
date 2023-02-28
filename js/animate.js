var carouselContainer = $('.carousel');

function toggleCaption() {
    $('.carousel-caption').hide();
    var caption = carouselContainer.find('.active').find('.carousel-caption');
    caption.delay(0).toggle("slide", {direction:'right'});
}


carouselContainer.carousel({
    interval: 0,
    cycle: true,
    
}).on('slid.bs.carousel', function() {
    toggleCaption();
});