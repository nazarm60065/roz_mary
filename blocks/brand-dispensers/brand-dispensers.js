export class BrandDispensers {
    constructor() {
        this.selectors = {
            wrapper: '.brand-dispensers',
            rail: '.brand-dispensers-rail',
            content: '.brand-dispensers-inner',
            quote: '.brand-quote',
            bottle: '.brand-dispensers-bottle',
            bottleTop: '.brand-dispensers-bottle-top',
            bottleMiddle: '.brand-dispensers-bottle-middle',
        }

        this.classes = {}

        this.init()
    }

    init() {
        this.wrapper = document.querySelector(this.selectors.wrapper)

        if (this.wrapper) {
            this.content = this.wrapper.querySelector(this.selectors.content)
            this.rail = this.wrapper.querySelector(this.selectors.rail)
            this.quote = this.wrapper.querySelector(this.selectors.quote)
            this.bottleTopList = this.wrapper.querySelectorAll(this.selectors.bottleTop)
            this.bottleMiddleList = this.wrapper.querySelectorAll(this.selectors.bottleMiddle)

            this.prepareWrapperHeight()
            this.attachEvents()
        }
    }

    prepareWrapperHeight() {
        this.rail.style.height = (this.content.clientHeight * 2) + 'px'
    }

    attachEvents() {
        window.addEventListener('scroll', this.scrollHandler.bind(this), {passive: true})
        window.addEventListener('resize', this.resizeHandler.bind(this))
    }

    scrollHandler() {
        const viewportOffsetTop = window.scrollY,
            viewportOffsetBottom = window.scrollY + window.innerHeight,
            wrapperViewportOffset = this.wrapper.getBoundingClientRect(),
            wrapperViewportOffsetTop = viewportOffsetTop + wrapperViewportOffset.top,
            wrapperViewportOffsetBottom = wrapperViewportOffsetTop + wrapperViewportOffset.height

        if ((viewportOffsetTop >= wrapperViewportOffsetTop) && (viewportOffsetBottom <= wrapperViewportOffsetBottom)) {
            const progress = Math.floor((viewportOffsetTop - wrapperViewportOffsetTop) / wrapperViewportOffset.height * 100) / 100
            const progressPath = Math.floor(this.content.clientHeight * progress)

            this.calculateProgress(progress, progressPath)
        } else {

        }
    }

    resizeHandler() {
        clearTimeout(this.resizeTimer)

        this.resizeTimer = setTimeout(() => {
            this.prepareWrapperHeight()
            this.scrollHandler()
        }, 250)
    }

    calculateProgress(progress, progressPath) {
        this.moveQuote(progressPath)
        this.moveBottleTop(progress)
        this.moveBottleMiddle(progress)
    }

    moveQuote(progress) {
        if (this.quote) {
            const coef = 0.6

            this.quote.style.transform = `translate3d(0,${coef * progress}px,0)`
        }
    }

    moveBottleTop(progress) {
        if (this.bottleTopList.length) {
            const coef = 0.93

            this.bottleTopList.forEach(item => {
                const bottle = item.closest(this.selectors.bottle)

                if (bottle) {
                    item.style.transform = `translate3d(0,${bottle.clientHeight * coef * progress}px,0)`
                }
            })
        }
    }

    moveBottleMiddle(progress) {
        if (this.bottleMiddleList.length) {
            const coef = 1.8

            this.bottleMiddleList.forEach(item => item.style.transform = `translate3d(0,${100 * coef * progress}%,0)`)
        }
    }
}