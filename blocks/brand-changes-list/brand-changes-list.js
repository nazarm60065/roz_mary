import {Swiper} from "swiper"
import {EffectFade} from "swiper/modules"

export class BrandChangesList {
    constructor() {
        this.selectors = {
            wrapper: '.brand-changes',
            rail: '.brand-changes-rail',
            content: '.brand-changes-list',
            card: '.brand-changes-card',
            bg: '.brand-changes-bg',
            slider: '.brand-changes-photos',
            slide: '.brand-changes-photo',
        }

        this.classes = {
            cardActive: 'brand-changes-card_active',
            bgActive: 'brand-changes-bg_active',
        }

        this.init()
    }

    init() {
        this.wrapper = document.querySelector(this.selectors.wrapper)

        if (this.wrapper) {
            this.resizeTimer = null
            this.content = this.wrapper.querySelector(this.selectors.content)
            this.rail = this.wrapper.querySelector(this.selectors.rail)
            this.cardList = this.wrapper.querySelectorAll(this.selectors.card)
            this.bg = this.wrapper.querySelector(this.selectors.bg)
            this.slider = this.wrapper.querySelector(this.selectors.slider)
            this.slideList = this.wrapper.querySelectorAll(this.selectors.slide)
            this.activeCard = null
            this.swiper = null

            if (this.cardList.length) {

                //this.prepareWrapperHeight()
                this.prepareCards()
                this.prepareSlides()
                this.attachEvents()
                this.initSwiper()
            }
        }
    }

    prepareWrapperHeight() {
        this.rail.style.height = (this.content.clientHeight * 2) + 'px'
    }

    initSwiper() {
        if (this.slider && window.innerWidth >= 1280) {
            this.swiper = new Swiper(this.slider, {
                modules: [EffectFade],
                effect: "fade",
                fadeEffect: {
                    crossFade: true,
                }
            })
        }
    }

    prepareCards() {
        this.cardList.forEach((card, index) => card.dataset['index'] = index)
    }

    prepareSlides() {
        this.slideList.forEach((slide, index) => slide.dataset['index'] = index)
    }

    attachEvents() {
        window.addEventListener('scroll', this.scrollHandler.bind(this), {passive: true})
        window.addEventListener('resize', this.resizeHandler.bind(this))
    }

    scrollHandler() {
        const viewportOffsetTop = window.scrollY,
            viewportOffsetCenter = window.scrollY + window.innerHeight / 2,
            contentViewportOffset = this.content.getBoundingClientRect(),
            contentViewportOffsetTop = viewportOffsetTop + contentViewportOffset.top,
            contentViewportOffsetBottom = contentViewportOffsetTop + contentViewportOffset.height

        if ((viewportOffsetCenter >= contentViewportOffsetTop) && (viewportOffsetCenter <= contentViewportOffsetBottom)) {
            const avgCardHeight = Math.round(contentViewportOffset.height / this.cardList.length)
            const progress = Math.floor((viewportOffsetCenter - contentViewportOffsetTop) / avgCardHeight)

            this.calculateProgress(progress)
        } else {
            if (viewportOffsetCenter < contentViewportOffsetTop) {
                this.activeCard = this.cardList[0]
            }

            if (viewportOffsetCenter > contentViewportOffsetBottom) {
                this.activeCard = this.cardList[this.cardList.length - 1]
            }

            this.activeCard.classList.add(this.classes.cardActive)
            this.activateSlide(this.activeCard.dataset['index'])
            this.handleBG()
        }
    }

    resizeHandler() {
        clearTimeout(this.resizeTimer)

        this.resizeTimer = setTimeout(() => {
            this.prepareWrapperHeight()
            this.scrollHandler()

            if (window.innerWidth >= 1280 && !this.swiper) {
                this.initSwiper()
            }

            if (window.innerWidth < 1280 && this.swiper) {
                this.swiper.destroy()
                this.swiper = null
            }
        }, 250)
    }

    calculateProgress(progress) {
        if (this.activeCard && this.activeCard.dataset['index'] !== progress) {
            this.activeCard.classList.remove(this.classes.cardActive)
        }

        this.activateCard(progress)
        this.activateSlide(progress)
        this.handleBG()
    }

    activateCard(index = 0) {
        if (this.cardList[index]) {
            this.activeCard = this.cardList[index]
            this.activeCard.classList.add(this.classes.cardActive)
        }
    }

    activateSlide(index = 0) {
        if (this.swiper) {
            this.swiper.slideTo(index)
        }
    }

    handleBG() {
        if (!this.bg) return false

        if (this.activeCard) {
            this.bg.classList.add(this.classes.bgActive)
            this.bg.children[0].style.height = this.activeCard.clientHeight + 'px'
            this.bg.style.transform = `translate3d(0,${this.activeCard.offsetTop + 'px'},0)`
        }
    }
}