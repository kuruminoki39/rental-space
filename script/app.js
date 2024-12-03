// fv swiper
const fvSwiper = new Swiper(".fv__swiper", {
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
});

// voice swiper
const voiceSwiper = new Swiper(".voice__slide-wrapper", {
  loop: true,
  slidesPerView: "auto",
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// gallery swiper
const gallerySwiperTop = new Swiper(".gallery__swiper-top", {
  spaceBetween: 20,
  slidesPerView: "auto",
  loop: true,
  speed: 4000,

  autoplay: {
    delay: 0,
  },
});

const gallerySwiperBottom = new Swiper(".gallery__swiper-bottom", {
  spaceBetween: 20,
  slidesPerView: "auto",
  loop: true,
  speed: 6000,

  autoplay: {
    delay: 0,
    reverseDirection: true,
  },
});

// scroll event
const pageTopButton = document.querySelector("#js-pagetop");
const handleScroll = () => {
  if (window.scrollY > 300) {
    pageTopButton.classList.add("is-show");
  } else {
    pageTopButton.classList.remove("is-show");
  }
};

let timeout;
window.addEventListener("scroll", () => {
  clearTimeout(timeout);
  timeout = setTimeout(handleScroll, 50);
});
