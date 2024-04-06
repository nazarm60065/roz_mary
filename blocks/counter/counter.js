import './counter.mustache'

export class Counter {
  constructor(params) {
    this.params = {
      ...{
        selectors: {
          wrapper: '',
          toCart: '',
          counter: '.counter',
          minusBtn: '.counter__btn_minus',
          plusBtn: '.counter__btn_plus',
          control: '.counter__control',
        },
        classes: {
          wrapperCounterShow: ''
        }
      },
      ...params
    }

    this.INTERVAL = 200

    this.init()
  }

  init() {
    this.selectors = this.params.selectors
    this.classes = this.params.classes

    if (this.selectors.wrapper && this.selectors.toCart) {
      this.intervalTimer = null
      this.decrement = this.decrement.bind(this)
      this.increment = this.increment.bind(this)

      this.attachEvents()
    }
  }

  attachEvents() {
    document.addEventListener('click', this.docClickHandler.bind(this))
    document.addEventListener('mousedown', this.mouseDownHandler.bind(this))
    document.addEventListener('mouseup', this.mouseUpHandler.bind(this))
  }

  docClickHandler(event) {
    const toCart = event.target.closest(this.selectors.toCart)

    if (toCart) {
      this.showCounter(toCart)

      return true
    }

    const btnMinus = event.target.closest(this.selectors.minusBtn)

    if (btnMinus) {
      this.decrementClickHandler(btnMinus)

      return true
    }


    const btnPlus = event.target.closest(this.selectors.plusBtn)

    if (btnPlus) {
      this.incrementClickHandler(btnPlus)

      return true
    }
  }

  mouseDownHandler(event) {
    const btnMinus = event.target.closest(this.selectors.minusBtn)

    if (btnMinus) {
      const counter = btnMinus.closest(this.selectors.counter)
      const control = counter.querySelector(this.selectors.control)

      this.createIntervalIncrement(() => {
        this.decrement(control, counter)
      })

      return true
    }


    const btnPlus = event.target.closest(this.selectors.plusBtn)

    if (btnPlus) {
      const counter = btnPlus.closest(this.selectors.counter)
      const control = counter.querySelector(this.selectors.control)

      this.createIntervalIncrement(() => {
        this.increment(control, counter)
      })

      return true
    }
  }

  mouseUpHandler(event) {
    const btnMinus = event.target.closest(this.selectors.minusBtn)

    if (btnMinus) {
      this.clearIntervalIncrement()

      return true
    }


    const btnPlus = event.target.closest(this.selectors.plusBtn)

    if (btnPlus) {
      this.clearIntervalIncrement()

      return true
    }
  }

  decrementClickHandler(btn) {
    const counter = btn.closest(this.selectors.counter)
    const control = counter.querySelector(this.selectors.control)

    if (control) {
      this.decrement(control, counter)
    }
  }

  decrement(control, counter) {
    let value = +control.value - 1

    if (value > 0) {
      control.value = value
    } else {
      this.hideCounter(counter)
      this.clearIntervalIncrement()
    }
  }

  incrementClickHandler(btn) {
    const counter = btn.closest(this.selectors.counter)
    const control = counter.querySelector(this.selectors.control)

    if (control) {
      this.increment(control, counter)
    }
  }

  increment(control, counter) {
    let value = +control.value + 1

    if (control.max && value >= control.max ) {
      value = control.max
      this.clearIntervalIncrement()
    }

    control.value = value
  }

  showCounter(toCart) {
    const wrapper = toCart.closest(this.selectors.wrapper)

    if (wrapper) wrapper.classList.add(this.classes.wrapperCounterShow)
  }

  hideCounter(counter) {
    const wrapper = counter.closest(this.selectors.wrapper)

    if (wrapper) wrapper.classList.remove(this.classes.wrapperCounterShow)
  }

  createIntervalIncrement(callback) {
    this.clearIntervalIncrement()

    this.intervalTimer = setInterval(callback, this.INTERVAL)
  }
  clearIntervalIncrement() {
    clearInterval(this.intervalTimer)
  }
}