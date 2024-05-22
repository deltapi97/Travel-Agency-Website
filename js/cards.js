      var swiper = new Swiper(".card-container", {
        slidesPerView: 4,
        spaceBetween: 30,
        slidesPerGroup: 4,
        loop: true,
        centerSlide: 'true',
        fade: 'true',
        grabCursor: 'true',
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        breakpoints:{
          0: {
            slidesPerView: 1,
          },

          520:{
            slidesPerView: 2,
          },

          950: {
            slidesPerView:3,
          },
          1500:{
            slidesPerView:4,
          },

       },
});
