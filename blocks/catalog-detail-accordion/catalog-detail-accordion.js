import {Accordion} from "../accordion/Accordion"

export default () => {
  const wrapper = document.querySelector('.catalog-detail-accordion')

  if (wrapper) {
    new Accordion({
      selectors: {
        accordion: '.catalog-detail-accordion',
        item: '.catalog-detail-accordion-item',
        trigger: '.catalog-detail-accordion-item__button',
        hidden: '.catalog-detail-accordion-hidden'
      },
      classes: {
        opened: 'catalog-detail-accordion-item_opened',
      },
      transitionDuration: 500,
    })
  }
}
