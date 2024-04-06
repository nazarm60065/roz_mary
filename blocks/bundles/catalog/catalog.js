import './templates'

import catalogList from '../../catalog-list/catalog-list'
import {Counter} from '../../counter/counter'

import './catalog.sass'

document.addEventListener('DOMContentLoaded', () => {
  catalogList()
  new Counter({
    selectors: {
      wrapper: '.catalog-card-to-cart',
      toCart: '.catalog-card-to-cart__button',
      counter: '.counter',
      minusBtn: '.counter__btn_minus',
      plusBtn: '.counter__btn_plus',
      control: '.counter__control',
    },
    classes: {
      wrapperCounterShow: 'catalog-card-to-cart_show-counter'
    }
  })

  const anchorList = document.querySelectorAll('.catalog__anchor')

  if (anchorList.length) {
    anchorList.forEach(anchor => {
      anchor.addEventListener('click', () => {
        const href = anchor.dataset['src']

        if (href) {
          const el = document.querySelector(href)

          if (el) {
            el.scrollIntoView({behavior: 'smooth', block: 'start'})
          }
        }
      })
    })
  }
})