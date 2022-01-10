jQuery('.completed_sales_carousel').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
  prevArrow: '<div class="arrow_prev"><img src="/image/arrow_left.svg"></div>',
  nextArrow: '<div class="arrow_next"><img src="/image/arrow_right.svg"></div>',
   responsive: [
    {
      breakpoint: 650,
      settings: {
        slidesToShow: 1,
      }
    }
  ]
});