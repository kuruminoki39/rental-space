const swiper = new Swiper(".swiper", {
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
// スライドコンテナと矢印要素を取得
const slideContainer = document.querySelector(".voice__slide");
const arrowLeft = document.querySelector(".arrow-left");
const arrowRight = document.querySelector(".arrow-right");

// 現在のスライド位置を管理
let currentSlide = 0;

// 1つのカードの幅（CSSで指定したものに一致させる）
const cardWidth = 300 + 20; // カード幅(300px) + margin-right(20px)

// 左矢印クリックイベント
arrowLeft.addEventListener("click", () => {
  if (currentSlide > 0) {
    currentSlide--;
    slideContainer.style.transform = `translateX(-${cardWidth * currentSlide}px)`;
  }
});

// 右矢印クリックイベント
arrowRight.addEventListener("click", () => {
  const totalCards = slideContainer.children.length; // カードの総数

  // 最大スライド制限なしで右側にはみ出す
  if (currentSlide < totalCards - 1) {
    currentSlide++;
    slideContainer.style.transform = `translateX(-${cardWidth * currentSlide}px)`;
  }
});
