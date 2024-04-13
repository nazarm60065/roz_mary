import './templates'
import { FormPlaceholder } from '../../form-placeholder/form-placeholder'
import { fbInitAll } from '../../custom-fancybox/custom-fancybox'

import './form.sass'

document.addEventListener('DOMContentLoaded', () => {
  new FormPlaceholder()

  // инициализация fancybox
  fbInitAll()
})