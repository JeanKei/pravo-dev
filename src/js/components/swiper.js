
// Import Swiper and modules
import Swiper, { Navigation, Pagination, Autoplay } from 'swiper';

// Now you can use Swiper
const swiper = new Swiper('.slider-one-swiper', {
  // Install modules
  modules: [Navigation, Pagination, Autoplay],
  loop: true,
  speed: 500,
  navigation: {
    nextEl: '.slider-btn-next',
    prevEl: '.slider-btn-prev',
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
    nextEl: '.slider-btn-next',
    prevEl: '.slider-btn-prev',
  },
  // autoplay: {
  //   delay: 5000,
  // },
  pagination: {
    el: '.swiper-pagination',
  },
});
