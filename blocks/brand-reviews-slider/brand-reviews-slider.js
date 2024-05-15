import {Swiper} from 'swiper'
import {Navigation, Pagination} from "swiper/modules"

export default () => {
  const productsSlider = document.querySelector('.brand-reviews-products')

  if (productsSlider) {
    const reviewsSliderList = document.querySelectorAll('.brand-reviews-slider')

    if (reviewsSliderList.length) {
      const triggerList = document.querySelectorAll('.brand-reviews-product-trigger')
      const closeList = document.querySelectorAll('.brand-reviews-product-close')

      reviewsSliderList.forEach(slider => {
        const prevEl = slider.querySelector('.brand-reviews-slider__arrow_prev'),
          nextEl = slider.querySelector('.brand-reviews-slider__arrow_next'),
          counter = slider.querySelector('.brand-reviews-slider-counter')

        new Swiper(slider, {
          modules: [Navigation],
          spaceBetween: 20,
          nested: true,
          navigation: {
            prevEl,
            nextEl,
            disabledClass: 'brand-reviews-slider__arrow_disabled',
            lockClass: 'brand-reviews-slider__arrow_lock',
          },
          pagination: {
            el: counter,
            type: 'fraction',
            lockClass: 'brand-reviews-slider_lock',
          },
        })
      })

      if (triggerList.length) {
        triggerList.forEach(trigger => {
          trigger.addEventListener('click', triggerClickHandler)
        })
      }

      if (closeList.length) {
        closeList.forEach(close => {
          close.addEventListener('click', closeClickHandler)
        })
      }
    }

    const progressbar = document.querySelector('.brand-reviews-products-progress')

    new Swiper(productsSlider, {
      modules: [Navigation, Pagination],
      spaceBetween: 20,
      allowTouchMove: false,
      navigation: {
        prevEl: '.brand-reviews-products__arrow_prev',
        nextEl: '.brand-reviews-products__arrow_next',
        disabledClass: 'brand-reviews-products__arrow_disabled',
        lockClass: 'brand-reviews-products__arrow_lock',
      },
      pagination: {
        el: progressbar,
        type: 'progressbar',
        lockClass: 'brand-reviews-products-progress_lock',
      },
      breakpoints: {
        768: {
          slidesPerView: 'auto',
          centerInsufficientSlides: true,
          centeredSlides: true,
          centeredSlidesBounds: true,
          spaceBetween: 40,
        },
        1280: {
          slidesPerView: 'auto',
          centerInsufficientSlides: true,
          centeredSlides: true,
          centeredSlidesBounds: true,
          spaceBetween: 56,
        }
      }
    })
  }

  function triggerClickHandler(event) {
    const trigger = event.target.closest('.brand-reviews-product-trigger')
    const slide = trigger.closest('.brand-reviews-product')
    const slider = trigger.closest('.brand-reviews-products')

    if (slide) {
      slide.classList.add('brand-reviews-product_show-reviews')
    }

    if (slider) {
      slider.classList.add('brand-reviews-products_show-reviews')
    }
  }

  function closeClickHandler(event) {
    const close = event.target.closest('.brand-reviews-product-close')
    const slide = close.closest('.brand-reviews-product')
    const slider = close.closest('.brand-reviews-products')

    if (slide) {
      slide.classList.remove('brand-reviews-product_show-reviews')
    }

    if (slider) {
      slider.classList.remove('brand-reviews-products_show-reviews')
    }
  }
}
