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
            bottleBottom: '.brand-dispensers-bottle-bottom',
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
        if (window.innerWidth < 768) {
            this.rail.style.height = (this.wrapper.clientHeight * 2) + 'px'
        } else {
            this.rail.style.height = (this.wrapper.clientHeight) + 'px'
        }
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
            const progress = Math.floor((viewportOffsetTop - wrapperViewportOffsetTop) / (wrapperViewportOffset.height - window.innerHeight) * 100) / 100

            this.calculateProgress(progress)
        } else {
            if (viewportOffsetTop < wrapperViewportOffsetTop) {
                this.calculateProgress(0)
            }

            if (viewportOffsetBottom > wrapperViewportOffsetBottom) {
                this.calculateProgress(1)
            }
        }
    }

    resizeHandler() {
        clearTimeout(this.resizeTimer)

        this.resizeTimer = setTimeout(() => {
            this.prepareWrapperHeight()
            this.scrollHandler()
        }, 250)
    }

    calculateProgress(progress) {
        this.moveQuote(progress)
        this.moveBottleTop(progress)
        this.moveBottleMiddle(progress)
    }

    moveQuote(progress) {
        if (this.quote) {
            let path = (this.content.clientHeight - this.quote.clientHeight) * progress

            if (window.innerWidth < 1280) path /= 2

            this.quote.style.transform = `translate3d(0,${path}px,0)`
        }
    }

    moveBottleTop(progress) {
        if (this.bottleTopList.length) {

            this.bottleTopList.forEach(item => {
                const bottle = item.closest(this.selectors.bottle),
                  bottom = bottle.querySelector(this.selectors.bottleBottom)

                  let path = (bottle.clientHeight - bottom.clientHeight - (item.clientHeight * 0.9)) * progress

                if (bottle) {
                    item.style.transform = `translate3d(0,${path}px,0)`
                }
            })
        }
    }

    moveBottleMiddle(progress) {
        if (this.bottleMiddleList.length) {
            this.bottleMiddleList.forEach((item, index) => {
                const bottle = item.closest(this.selectors.bottle),
                  bottom = bottle.querySelector(this.selectors.bottleBottom)

                let path = (bottle.clientHeight - bottom.clientHeight - item.offsetTop - (item.clientHeight * 0.5)) * progress

                item.style.transform = `translate3d(0,${path}px,0)`
            })
        }
    }
}