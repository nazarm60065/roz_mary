import {Comparison} from "./Comparison"

export default () => {
  const compList = document.querySelectorAll('.brand-comp')

  if (compList.length) {
    compList.forEach(compEl => {
      new Comparison({
        selectors: {
          wrapper: compEl,
          item: '.brand-comp-item_before',
          image: '.brand-comp-image__img',
          cursor: '.brand-comp__cursor',
        }
      })
    })
  }
}
