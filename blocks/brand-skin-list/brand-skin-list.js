import Swiper from 'swiper'
import {EffectFade} from "swiper/modules"

export class BrandSkinList {
    constructor() {
        this.selectors = {
            wrapper: '.brand-skin',
            rail: '.brand-skin-rail',
            content: '.brand-skin-inner',
            slider: '.brand-skin-list',
            slide: '.brand-skin-card',
            feature: '.brand-skin-feature',
        }

        this.classes = {
            featureActive: 'brand-skin-feature_active'
        }

        this.init()
    }

    init() {
        this.slider = document.querySelector(this.selectors.slider)

        if (this.slider) {
            this.step = 0
            this.activeFeature = null
            this.wrapper = document.querySelector(this.selectors.wrapper)
            this.content = this.wrapper.querySelector(this.selectors.content)
            this.rail = this.wrapper.querySelector(this.selectors.rail)
            this.featureList = this.wrapper.querySelectorAll(this.selectors.feature)
            this.slideList = this.wrapper.querySelectorAll(this.selectors.slide)

            this.prepareWrapperHeight()
            this.prepareFeatures()
            this.prepareSlides()
            this.attachEvents()
            this.initSwiper()
        }
    }

    attachEvents() {
        window.addEventListener('scroll', this.scrollHandler.bind(this), {passive: true})
    }

    prepareFeatures() {
        this.featureList.forEach((feature, index) => feature.dataset['index'] = index)
    }

    prepareSlides() {
        this.slideList.forEach((slide, index) => slide.dataset['index'] = index)
    }

    prepareWrapperHeight() {
        if (this.featureList) {
            this.step = this.content.clientHeight
            this.rail.style.height = ((this.featureList.length + 2) * this.step) + 'px'
        }
    }

    initSwiper() {
        this.swiper = new Swiper(this.slider, {
            modules: [EffectFade],
            allowTouchMove: false,
            effect: "fade",
            crossFade: true,
        })
    }

    scrollHandler() {
        const viewportOffsetTop = window.scrollY,
            viewportOffsetBottom = window.scrollY + window.innerHeight,
            wrapperViewportOffset = this.wrapper.getBoundingClientRect(),
            wrapperViewportOffsetTop = viewportOffsetTop + wrapperViewportOffset.top,
            wrapperViewportOffsetBottom = wrapperViewportOffsetTop + wrapperViewportOffset.height

        if ((viewportOffsetTop >= wrapperViewportOffsetTop) && (viewportOffsetBottom <= wrapperViewportOffsetBottom)) {
            const progress = Math.floor((viewportOffsetTop - wrapperViewportOffsetTop) / this.step)

            this.calculateProgress(progress)
        } else {
            this.deactivateFeatures()
        }
    }

    calculateProgress(progress) {
        if (this.activeFeature && this.activeFeature.dataset['index'] !== progress) {
            this.activeFeature.classList.remove(this.classes.featureActive)
        }

        this.activateFeature(progress)
        this.checkSlider()
    }

    checkSlider() {
        if (this.activeFeature) {
            const activeSlide = this.activeFeature.closest(this.selectors.slide)

            if (!activeSlide.classList.contains('swiper-slide-active')) {
                if (this.swiper) this.swiper.slideTo(+activeSlide.dataset['index'])
            }
        }
    }

    deactivateFeatures() {
        this.featureList.forEach(feature => feature.classList.remove(this.classes.featureActive))
    }

    activateFeature(index) {
        if (this.featureList[index]) {
            this.activeFeature = this.featureList[index]
            this.activeFeature.classList.add(this.classes.featureActive)
        }
    }
}