// fv swiper
const fvSwiper = new Swiper(".fv__swiper", {
  // 画像同士の間隔
  spaceBetween: 20,
  // 画像の表示数
  slidesPerView: 1,
  // 画像の表示方向
  loop: true,
  // 画像の表示スピード
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
  // 画像同士の間隔
  spaceBetween: 20,
  // 画像の表示数
  slidesPerView: "auto",
  // 画像の表示方向
  loop: true,
  // 画像の表示スピード
  speed: 4000,

  autoplay: {
    delay: 0,
  },
});

const gallerySwiperBottom = new Swiper(".gallery__swiper-bottom", {
  // 画像同士の間隔
  spaceBetween: 20,
  // 画像の表示数
  slidesPerView: "auto",
  // 画像の表示方向
  loop: true,
  // 画像の表示スピード
  speed: 6000,

  autoplay: {
    delay: 0,
    reverseDirection: true,
  },
});

//topへ戻る
jQuery(window).on("scroll", function () {
  if (300 < jQuery(window).scrollTop()) {
    jQuery("#js-pagetop").addClass("is-show");
  } else {
    jQuery("#js-pagetop").removeClass("is-show");
  }
});
