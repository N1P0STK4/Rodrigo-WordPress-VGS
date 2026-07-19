import Swiper from 'swiper';
import { Navigation, Autoplay, Pagination } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

export function initHomeSlider() {
	const slider = document.querySelector('.home-hero-slider');

	if (!slider) {
		return;
	}

	new Swiper(slider, {
		modules: [Navigation, Autoplay, Pagination],

		loop: true,
		speed: 800,

		/*autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},*/

		navigation: {
			nextEl: '.home-slider-next',
			prevEl: '.home-slider-prev',
		},

		pagination: {
			el: '.home-slider-pagination',
			clickable: true,
		},
	});
}