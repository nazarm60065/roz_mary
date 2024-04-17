import ClipboardJS from "clipboard"

import './partner.sass'

document.addEventListener('DOMContentLoaded', () => {
  new ClipboardJS('.partner-share__copy')
})