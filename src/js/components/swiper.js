
// Import Swiper and modules
import Swiper, { Navigation, Pagination, Autoplay } from 'swiper';

// Now you can use Swiper
const swiper = new Swiper('.slider-one-swiper', {
  // Install modules
  modules: [Navigation, Pagination, Autoplay],
  loop: true,
  speed: 500,
  navigation: {
    nextEl: '.slider-btn-prev',
    prevEl: '.slider-btn-next',
  },
  autoplay: {
    delay: 5000,
  },
  pagination: {
    el: '.swiper-pagination',
  },
});


// Now you can use Swiper
const swiperTwo = new Swiper('.slider-two-swiper', {
  // Install modules
  modules: [Navigation, Pagination, Autoplay],
  loop: true,
  speed: 500,
  navigation: {
    nextEl: '.slider-btn-prev',
    prevEl: '.slider-btn-next',
  },
  autoplay: {
    delay: 5000,
  },
  pagination: {
    el: '.swiper-pagination',
  },
});


// Now you can use Swiper
const swiperOnas = new Swiper('.slider-onas', {
  // Install modules
  modules: [Navigation, Pagination, Autoplay],
  loop: true,
  speed: 500,
  slidesPerView: 1,
  navigation: {
    nextEl: '.slider-btn-prev',
    prevEl: '.slider-btn-next',
  },
  // autoplay: {
  //   delay: 5000,
  // },
  pagination: {
    el: '.swiper-pagination',
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
    },
    // when window width is >= 480px
    768: {
      slidesPerView: 2,
    },
    // when window width is >= 640px
    1088: {
      slidesPerView: 3,
    }
  }
});
