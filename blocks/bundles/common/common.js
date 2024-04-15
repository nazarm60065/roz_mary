import loadingAttributePolyfill from 'loading-attribute-polyfill/dist/loading-attribute-polyfill.module'

import './common.sass'
import './templates'

window.loadingAttributePolyfill = loadingAttributePolyfill

document.addEventListener('DOMContentLoaded', () => {
  const footerUpButton = document.querySelector('.footer-up__button')

  if (footerUpButton) {
    footerUpButton.addEventListener('click', () => {
      window.scroll({
        behavior: 'smooth',
        top: 0
      })
    })
  }

  setTimeout(setCssVariables)
})

function setCssVariables() {
  const scrollbarWidth = window.innerWidth - document.body.clientWidth
  document.body.style.setProperty('--scrollbar-width', `${scrollbarWidth}px`)
}