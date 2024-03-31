import loadingAttributePolyfill from 'loading-attribute-polyfill/dist/loading-attribute-polyfill.module'

import './common.sass'
import './templates'

window.loadingAttributePolyfill = loadingAttributePolyfill

document.addEventListener('DOMContentLoaded', () => {
  setTimeout(setCssVariables)
})

function setCssVariables() {
  const scrollbarWidth = window.innerWidth - document.body.clientWidth
  document.body.style.setProperty('--scrollbar-width', `${scrollbarWidth}px`)
}