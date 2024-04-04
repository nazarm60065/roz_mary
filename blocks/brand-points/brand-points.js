import Swiper from 'swiper'
import {EffectFade} from "swiper/modules"

export class BrandPoints {
  constructor() {
    this.selectors = {
      wrapper: '.brand-points',
      rail: '.brand-points-rail',
      content: '.brand-points-inner',
      slider: '.brand-points-slider',
      slide: '.brand-points-slide',
      point: '.brand-point',
    }

    this.classes = {
      sliderActive: 'brand-points-slider_active',
      pointActive: 'brand-point_active'
    }

    this.positions = {
      'mobile': [
        {
          top: -10,
          left: 0,
        },
        {
          top: 1,
          left: 0,
        },
        {
          top: 43,
          left: 0,
        },
        {
          top: 5,
          left: 0,
        },
      ],
      'tablet': [
        {
          top: -4,
          left: 0,
        },
        {
          top: -2,
          left: 0,
        },
        {
          top: 19,
          left: 0,
        },
        {
          top: 4,
          left: 0,
        },
      ],
      'desktop': [
        {
          top: -21,
          left: 2,
        },
        {
          top: -7,
          left: 1,
        },
        {
          top: 7.5,
          left: -6,
        },
        {
          top: 22,
          left: -1.5,
        },
      ],
    }

    this.init()
  }

  init() {
    this.slider = document.querySelector(this.selectors.slider)

    if (this.slider) {
      this.step = 0
      this.activePoint = null
      this.wrapper = document.querySelector(this.selectors.wrapper)
      this.content = this.wrapper.querySelector(this.selectors.content)
      this.rail = this.wrapper.querySelector(this.selectors.rail)
      this.pointList = this.wrapper.querySelectorAll(this.selectors.point)
      this.slideList = this.wrapper.querySelectorAll(this.selectors.slide)

      this.prepareWrapperHeight()
      this.preparePoints()
      this.prepareSlides()
      this.attachEvents()
      this.initSwiper()
    }
  }

  attachEvents() {
    window.addEventListener('scroll', this.scrollHandler.bind(this), {passive: true})
    window.addEventListener('resize', this.resizeHandler.bind(this))
  }

  preparePoints() {
    this.pointList.forEach((point, index) => point.dataset['index'] = index)
  }

  prepareSlides() {
    this.slideList.forEach((slide, index) => slide.dataset['index'] = index)
  }

  prepareWrapperHeight() {
    if (this.pointList) {
      this.step = this.content.clientHeight
      this.rail.style.height = ((this.pointList.length) * this.step) + 'px'
    }
  }

  resizeHandler() {
    clearTimeout(this.resizeTimer)

    this.resizeTimer = setTimeout(() => {
      this.prepareWrapperHeight()
      this.scrollHandler()
    }, 250)
  }

  initSwiper() {
    this.swiper = new Swiper(this.slider, {
      modules: [EffectFade],
      allowTouchMove: false,
      effect: "fade",
      autoHeight: true,
      fadeEffect: {
        crossFade: true,
      }
    })
  }

  scrollHandler() {
    const viewportOffsetTop = window.scrollY,
      viewportOffsetCenter = window.scrollY + window.innerHeight / 2,
      wrapperViewportOffset = this.wrapper.getBoundingClientRect(),
      wrapperViewportOffsetTop = viewportOffsetTop + wrapperViewportOffset.top,
      wrapperViewportOffsetBottom = wrapperViewportOffsetTop + wrapperViewportOffset.height

    if ((viewportOffsetCenter >= wrapperViewportOffsetTop) && (viewportOffsetCenter <= wrapperViewportOffsetBottom)) {

      const progress = Math.floor((viewportOffsetCenter - wrapperViewportOffsetTop) / this.step)

      this.calculateProgress(progress)
    } else {
      if (viewportOffsetCenter < wrapperViewportOffsetTop) {
        this.moveSlider(0)
      }

      if (viewportOffsetCenter > wrapperViewportOffsetBottom) {
        this.moveSlider(this.pointList.length - 1)
      }

      this.deactivatePoints()
    }
  }

  calculateProgress(progress) {
    if (this.activePoint && this.activePoint.dataset['index'] !== progress) {
      this.activePoint.classList.remove(this.classes.pointActive)
    }

    this.activatePoint(progress)
    this.activateSlider()
    this.moveSlider(progress)
    this.activateSlide(progress)
  }

  activateSlide(index) {
    if (this.swiper && this.slideList[index]) {
      this.swiper.slideTo(index)
    }
  }

  deactivatePoints() {
    this.pointList.forEach(point => point.classList.remove(this.classes.pointActive))
  }

  activatePoint(index) {
    if (this.pointList[index]) {
      this.activePoint = this.pointList[index]
      this.activePoint.classList.add(this.classes.pointActive)
    }
  }

  activateSlider() {
    if (this.slider) {
      this.slider.classList.add(this.classes.sliderActive)
    }
  }

  moveSlider(index) {
    if (this.slider) {
      let screen = 'mobile'

      if (window.innerWidth >= 1280) {
        screen = 'desktop'
      } else if (window.innerWidth >= 768) {
        screen = 'tablet'
      }
      let translate =  this.positions[screen][index]

      if (translate) {
        this.slider.style.marginTop = `${translate.top}%`
        this.slider.style.marginLeft = `${translate.left}%`
      }
    }
  }

  deactivateSlider() {
    if (this.slider) this.slider.classList.remove(this.classes.sliderActive)
  }
}