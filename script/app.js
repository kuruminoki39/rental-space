window.onload = function () {
  const swiper = new Swiper(".swiper", {
    spaceBetween: 20,
    slidesPerView: 1,
    loop: true,
    speed: 4000,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
};
