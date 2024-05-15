export class Comparison {
  constructor(params) {
    this.params = {
      ...{
        selectors: {
          wrapper: '',
          item: '',
          image: '',
          cursor: '',
        },
        classes: {}
      },
      ...params
    }

    this.init()
  }

  init() {
    this.selectors = this.params.selectors
    this.classes = this.params.classes

    if (this.selectors.wrapper) {
      this.wrapper = typeof this.selectors.wrapper === 'object' ? this.selectors.wrapper : document.querySelector(this.selectors.wrapper)
    }

    if (this.wrapper) {
      this.timer = null
      this.active = false
      this.item = this.wrapper.querySelector(this.selectors.item)
      this.image = this.wrapper.querySelector(this.selectors.image)
      this.cursor = this.wrapper.querySelector(this.selectors.cursor)

      this.checkWidth();
      this.attachEvents();
    }
  }

  attachEvents() {
    window.addEventListener('resize', this.resizeHandler.bind(this))

    this.cursor.addEventListener('mousedown', this.cursorMouseDownHandler.bind(this))
    this.cursor.addEventListener('touchstart', this.cursorMouseDownHandler.bind(this))

    document.addEventListener('mouseup', this.docMouseUpHandler.bind(this))
    document.addEventListener('touchend', this.docMouseUpHandler.bind(this))

    document.addEventListener('mouseleave', this.docMouseLeaveHandler.bind(this))
    document.addEventListener('touchcancel', this.docMouseLeaveHandler.bind(this))

    document.addEventListener('mousemove', this.docMouseMoveHandler.bind(this), {passive: false})
    document.addEventListener('touchmove', this.docTouchMoveHandler.bind(this), {passive: false})
  }

  checkWidth() {
    this.image.style.width = this.wrapper.offsetWidth + 'px';
  }

  resizeHandler() {
    clearTimeout(this.timer)

    this.timer = setTimeout(() => {
      this.checkWidth()
    }, 250)
  }

  cursorMouseDownHandler() {
    this.activateCursor()
  }

  docMouseUpHandler() {
    this.deactivateCursor()
  }

  docMouseLeaveHandler() {
    this.deactivateCursor()
  }

  docMouseMoveHandler(e) {
    if (!this.active) return

    let x = e.pageX

    x -= this.wrapper.getBoundingClientRect().left

    this.slideIt(x)
    this.pauseEvent(e)
  }

  docTouchMoveHandler(e) {
    if (!this.active) return

    let x, i

    for (i = 0; i < e.changedTouches.length; i++) {
      x = e.changedTouches[i].pageX
    }

    x -= this.wrapper.getBoundingClientRect().left

    this.slideIt(x)
    this.pauseEvent(e)
  }

  slideIt(x) {
    let transform = Math.max(0, (Math.min(x, this.wrapper.offsetWidth)))

    this.item.style.width = transform + "px"
    this.cursor.style.left = transform + "px"
  }

  pauseEvent(e) {
    if (e.stopPropagation) e.stopPropagation()
    if (e.preventDefault) e.preventDefault()

    e.cancelBubble = true
    e.returnValue = false

    return false
  }

  activateCursor() {
    this.active = true
    this.cursor.classList.add('resize')
  }

  deactivateCursor() {
    this.active = false
    this.cursor.classList.remove('resize')
  }
}