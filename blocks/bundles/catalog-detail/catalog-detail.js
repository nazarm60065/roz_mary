import './templates'

import {Counter} from "../../counter/counter"
import catalogDetailTab from "../../catalog-detail-tab/catalog-detail-tab"
import catalogDetailAccordion from "../../catalog-detail-accordion/catalog-detail-accordion"
import {fbInitAll} from 'custom-fancybox/custom-fancybox'


import './catalog-detail.sass'

document.addEventListener('DOMContentLoaded', () => {
  let timer, isAccordion, isTab

  new Counter({
    selectors: {
      wrapper: '.catalog-detail-price-and-counter',
      toCart: '.catalog-detail__to-cart',
      counter: '.counter',
      minusBtn: '.counter__btn_minus',
      plusBtn: '.counter__btn_plus',
      control: '.counter__control',
    },
    classes: {
      wrapperCounterShow: 'catalog-detail-price-and-counter_show-counter'
    }
  })
  fbInitAll()

  check()
  window.addEventListener('resize', () => {
    clearTimeout(timer)

    timer = setTimeout(() => {
      check()
    }, 250)
  })

  function check() {
    if (!isTab && window.innerWidth >= 1280) {
      isTab = true

      catalogDetailTab()
    }
    if (!isAccordion && window.innerWidth < 1280){
      isAccordion = true

      catalogDetailAccordion()
    }
  }
})