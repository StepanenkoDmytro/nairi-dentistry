$(function(){
  
  $('.carousel__inner').slick({
    arrows: true,
    dots: true,
    centerMode: true,
    mobileFirst: true,
    swipeToSlide: true,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 801,
        settings: {
          slidesToShow: 1.65,
          centerPadding: '20%',
        }
      },
    ],
      prevArrow: '<div class="carousel__arrow slick-prev"><img src="' + themeData.arrowImageUrl + '"></div>',
      nextArrow: '<div class="carousel__arrow slick-next"><img src="' + themeData.arrowImageUrl + '"></div>'
  });

  wow = new WOW(
    {
      boxClass: 'wow',
      animateClass: 'animate__animated',
      offset: 0,
      mobile: true,
      live: true
    }
  )
  wow.init();
});