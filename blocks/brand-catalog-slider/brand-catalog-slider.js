import Swiper from 'swiper'
import {Navigation} from "swiper/modules"

export class BrandCatalogSlider {
  constructor() {
    this.selectors = {
      wrapper: '.brand-catalog',
      slider: '.brand-catalog-slider',
      slide: '.brand-catalog-slide',
      filter: '.brand-catalog-filter__button',
    }

    this.classes = {
      sliderHide: 'brand-catalog-slider_hide',
      filterActive: 'brand-catalog-filter__button_active',
    }

    this.init()
  }

  init() {
    this.slider = document.querySelector(this.selectors.slider)

    if (this.slider) {
      this.wrapper = document.querySelector(this.selectors.wrapper)
      this.filterList = this.wrapper.querySelectorAll(this.selectors.filter)
      this.slideList = this.wrapper.querySelectorAll(this.selectors.slide)
      this.resizeTimer = null
      this.prevWindowWidth = window.innerWidth
      this.filter = this.filterList[0]

      this.filterClickHandler = this.filterClickHandler.bind(this)

      this.attachEvents()
      this.filterSlides()
    }
  }

  attachEvents() {
    this.filterList.forEach(filter => filter.addEventListener('click', this.filterClickHandler))
    window.addEventListener('resize', this.resizeHandler.bind(this))
  }

  resizeHandler() {
    clearTimeout(this.resizeTimer)

    this.resizeTimer = setTimeout(() => {
      if (this.swiper) this.swiper.destroy()

      this.initSwiper()
    }, 250)
  }

  initSwiper() {
    this.swiper = new Swiper(this.slider, {
      modules: [Navigation],
      spaceBetween: 20,
      navigation: {
        prevEl: '.brand-catalog-slider__arrow_prev',
        nextEl: '.brand-catalog-slider__arrow_next',
        disabledClass: 'brand-catalog-slider__arrow_disabled',
        lockClass: 'brand-catalog-slider__arrow_lock',
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

  filterClickHandler(event) {
    if (this.filter !== event.target) {
      this.filter.classList.remove(this.classes.filterActive)
      this.filter = event.target
      this.filter.classList.add(this.classes.filterActive)

      this.filterSlides()
    }
  }

  filterSlides() {
    this.slider.classList.add(this.classes.sliderHide)

    setTimeout(() => {
      if (this.swiper) this.swiper.destroy()

      this.slideList.forEach(slide => {
        if (slide.dataset['filter'] === this.filter.dataset['filter']) {
          slide.style.display = ''
          slide.classList.add('swiper-slide')
        } else {
          slide.style.display = 'none'
          slide.classList.remove('swiper-slide')
        }
      })

      this.initSwiper()
      this.slider.classList.remove(this.classes.sliderHide)
    }, 300)
  }
}