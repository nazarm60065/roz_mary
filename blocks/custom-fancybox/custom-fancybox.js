import {Fancybox} from "@fancyapps/ui"
import '@fancyapps/ui/dist/fancybox/fancybox.css'

window.Fancybox = Fancybox

export const fbInit = () => {
  Fancybox.bind("[data-fancybox]", {
    mainClass: "custom-fancybox",
    dragToClose: false,
    trapFocus: false,
    autoFocus: false,
  })

  Fancybox.bind(".link-modal-form", {
    mainClass: "fancybox-modal-form",
    dragToClose: false,
    trapFocus: false,
    autoFocus: false,
    closeButton: false,
    on: {
      reveal() {
        document.querySelector('.page').classList.add('page_modal-opened')
      },
      destroy() {
        document.querySelector('.page').classList.remove('page_modal-opened')
      }
    }
  })
}

export const fbCLickCloseHandler = () => {
  document.addEventListener('click', event => {
    let close = event.target.closest('[data-fancybox-close]')

    if (close) Fancybox.close()
  })
}

export const fbInitAll = () => {
  fbInit()
  fbCLickCloseHandler()
}