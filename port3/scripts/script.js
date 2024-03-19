$(function () {
  $(".slider").slick({
      autoplay: false,
      dots: true,
      centerMode: true,
      centerPadding: "10%",
      slidesToShow: 3,
      responsive: [
          {
          breakpoint: 768,
              settings: {
                  arrows: false,
                  slidesToShow: 1,
                //   centerPadding: "10%",
                  centerMode: false,
              },
          },
      ],
  });
});
