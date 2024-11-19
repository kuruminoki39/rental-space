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

// voice
// const slideWrapper = document.querySelector(".voice__slide-wrapper");
// const slideContainer = document.querySelector(".voice__slide");
// const cards = document.querySelectorAll(".voice__slide--card");
// const arrowLeft = document.querySelector(".arrow-left");
// const arrowRight = document.querySelector(".arrow-right");

// let currentSlide = 0;

// // カードの幅を取得
// const cardWidth = cards[0].offsetWidth + parseInt(getComputedStyle(cards[0]).marginRight);

// // スライダー全体の幅を計算
// const totalWidth = cardWidth * cards.length;
// slideContainer.style.width = `${totalWidth}px`;

// // 左矢印クリック
// arrowLeft.addEventListener("click", () => {
//   if (currentSlide > 0) {
//     currentSlide--;
//     slideContainer.style.transform = `translateX(-${cardWidth * currentSlide}px)`;
//   }
// });

// // 右矢印クリック
// arrowRight.addEventListener("click", () => {
//   const maxSlide = cards.length - Math.floor(slideWrapper.offsetWidth / cardWidth);
//   if (currentSlide < maxSlide) {
//     currentSlide++;
//     slideContainer.style.transform = `translateX(-${cardWidth * currentSlide}px)`;
//   }
// });
const voiceSwiper = new Swiper(".voice__slide-wrapper", {
  // 画像同士の間隔
  // spaceBetween: 20,
  // // 画像の表示数
  // slidesPerView: auto,
  // // 画像の表示方向
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  // // 画像の表示スピード
  // speed: 2000,
  // autoplay: {
  //   delay: 0,
  //   disableOnInteraction: false,
  // },
});

// gallery
// const gallerySwiper = new Swiper(".gallery__swiper", {
//   // 画像同士の間隔
//   spaceBetween: 20,
//   // 画像の表示数
//   slidesPerView: "auto",
//   // 画像の表示方向
//   loop: true,
//   // 画像の表示スピード
//   speed: 2000,

//   autoplay: {
//     delay: 0,
//     disableOnInteraction: false,
//   },
// });
