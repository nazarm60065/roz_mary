import { slideDown, slideUp } from '../helpers/jqueryFunctioins'

export class Accordion2 {
  constructor(params) {
    this.params = {
      ...{
        selectors: {
          accordion: '.accordion',
          item: '.accordion-item',
          trigger: '.accordion__trigger',
          hidden: '.accordion-hidden'
        },
        classes: {
          opened: 'accordion-hidden_opened',
          initialItem: ''
        },
        transitionDuration: 300,
        defaultOpenIndexes: [],
        oneOpen: true,
        hideOnStart: true,
        onExpand: null,
        onCollapse: null,
        _active: true
      },
      ...params
    }

    this.init()
  }

  init() {
    this.selectors = this.params.selectors
    this.classes = this.params.classes
    this.openDefaultItemByIndex = this.openDefaultItemByIndex.bind(this)
    this.openDefaultItemByClass = this.openDefaultItemByClass.bind(this)

    this.initAccordion()
  }

  initAccordion() {
    this.accordion = document.querySelector(this.selectors.accordion)

    if (this.accordion) {
      this.triggerList = Array.from(this.accordion.querySelectorAll(this.selectors.trigger))
      this.panelList = Array.from(this.accordion.querySelectorAll(this.selectors.panel))
      this.params._active = true

      this.attachEvents()

      if (this.params.hideOnStart) {
        this.panelList.forEach(panel => (panel.style.display = 'none'))
      }

      this.checkDefault()
    }
  }

  hideAll() {
    this.panelList.forEach(panel => this.collapse(panel))
  }

  openAll() {
    this.panelList.forEach(panel => this.expand(panel))
  }

  attachEvents() {
    this.accordion.addEventListener(
      'click',
      this.accordionClickHandler.bind(this)
    )

    if (this.params.oneOpen) {
      document.addEventListener(
        'accordion.closeAll',
        this.closeAllHandler.bind(this)
      )
    }
  }

  checkDefault() {
    if (this.params.defaultOpenIndexes) {
      this.params.defaultOpenIndexes.forEach(this.openDefaultItemByIndex)
    } else if (this.params.classes.initialItem) {
      this.openDefaultItemByClass()
    }
  }

  openDefaultItemByIndex(itemIndex) {
    this.expand(this.panelList[itemIndex])
  }

  openDefaultItemByClass() {
    const panel = Array.prototype.find.call(this.panelList, panel =>
      panel.classList.contains(this.params.classes.initialItem)
    )

    if (panel) this.expand(panel)
  }

  accordionClickHandler(event) {
    if (this.params._active) {
      let clickedTrigger = event.target.closest(this.selectors.trigger)

      if (clickedTrigger) {
        const tab = clickedTrigger.dataset['tab']

        if (tab) {
          let panel = this.panelList.find(panel => panel.dataset['tab'] === tab)

          if (panel.classList.contains(this.classes.opened)) {
            this.collapse(clickedTrigger, panel)
          } else {
            if (this.params.oneOpen) {
              document.dispatchEvent(new Event('accordion.closeAll'))
            }

            this.expand(clickedTrigger, panel)
          }
        }
      }
    }
  }

  expand(trigger, panel) {
    slideDown(panel, this.params.transitionDuration)

    trigger.classList.add(this.classes.opened)

    if (this.params.onExpand && typeof this.params.onExpand === 'function') {
      this.params.onExpand(trigger, panel)
    }
  }

  collapse(trigger, panel) {
    slideUp(panel, this.params.transitionDuration)

    trigger.classList.remove(this.classes.opened)

    if (
      this.params.onCollapse &&
      typeof this.params.onCollapse === 'function'
    ) {
      this.params.onCollapse(trigger, panel)
    }
  }

  destroy() {
    this.accordion.removeEventListener('click', this.accordionClickHandler)
    this.panelList.forEach(panel => (panel.style.display = ''))
    this.triggerList.forEach(trigger => trigger.classList.remove(this.classes.opened))
  }

  closeAllHandler() {
    this.panelList.forEach(panel => this.collapse(panel))
  }
}