import {Swiper} from 'swiper'
import {Pagination, Navigation} from 'swiper/modules'

export default () => {
  const slider = document.querySelector('.catalog-slider')

  if (slider) {
    const wrapper = slider.closest('.catalog-slider-wrapper'),
      prevEl = wrapper.querySelector('.catalog-slider__arrow_prev'),
      nextEl = wrapper.querySelector('.catalog-slider__arrow_next')

    new Swiper(slider, {
      modules: [Navigation, Pagination],
      slidesPerView: 2,
      spaceBetween: 8,
      navigation: {
        prevEl,
        nextEl,
        disabledClass: 'catalog-slider__arrow_disabled',
        lockClass: 'catalog-slider__arrow_lock',
      },
      pagination: {
        el: '.catalog-slider-pagination',
        type: 'progressbar',
        lockClass: 'catalog-slider-pagination_lock',
      },
      breakpoints: {
        768: {
          slidesPerView: 3,
        },
        900: {
          slidesPerView: 4,
        },
        1280: {
          slidesPerView: 3,
          spaceBetween: 16,
        },
        1500: {
          slidesPerView: 3,
          spaceBetween: 26,
        }
      }
    })
  }
}
