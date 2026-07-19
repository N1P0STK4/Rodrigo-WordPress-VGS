import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';

export function initReviewsSlider() {
	const slider = document.querySelector('.reviews-slider');

	if (!slider) {
		return;
	}

	new Swiper(slider, {
		modules: [Navigation],

		slidesPerView: 1,
		spaceBetween: 16,
		speed: 600,

		navigation: {
			nextEl: '.reviews-slider-next',
			prevEl: '.reviews-slider-prev',
		},

		breakpoints: {
			640: {
				slidesPerView: 2,
				spaceBetween: 16,
			},

			1024: {
				slidesPerView: 3,
				spaceBetween: 15,
			},
		},
	});
}