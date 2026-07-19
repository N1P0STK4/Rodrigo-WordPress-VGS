import { initHomeSlider } from './swiper-home';
import { initReviewsSlider } from './swiper-reviews';
import { initMobileMenu } from './mobile-menu';

document.addEventListener('DOMContentLoaded', () => {
	initHomeSlider();
	initReviewsSlider();
	initMobileMenu();
});