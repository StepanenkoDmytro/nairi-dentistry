$(function(){

  $('.carousel__inner').slick({
    arrows: true,
    dots: false,
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 841,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 601,
        settings: {
          slidesToShow: 1
        }
      },
    ],
    prevArrow: '<div class="carousel__arrow slick-prev"><img src="./images/arrow.png"></div>',
    nextArrow: '<div class="carousel__arrow slick-next"><img src="./images/arrow.png"></div>'
  });

  wow = new WOW(
    {
      boxClass: 'wow',      // default
      animateClass: 'animate__animated', // default
      offset: 0,          // default
      mobile: true,       // default
      live: true        // default
    }
  )
  wow.init();


});