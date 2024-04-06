export default () => {
  const listContainer = document.querySelector('.catalog-list-container'),
    list = document.querySelector('.catalog-list'),
    filterList = Array.from(document.querySelectorAll('.catalog-filter__button')),
    cardList = Array.from(document.querySelectorAll('.catalog-card'))

  let currentFilter = '',
    currentFilterEl = null,
    timer

  if (listContainer && list && filterList.length && cardList.length) {
    currentFilterEl = filterList.find(filter => filter.dataset['filter'] === 'all')

    if (currentFilterEl) currentFilter = 'all'

    filterList.forEach(filter => filter.addEventListener('click', filterClickHandler))
  }

  function filterClickHandler(event) {
    const el = event.target,
      filter = el.dataset['filter']

    if (currentFilter !== filter) {
      currentFilterEl.classList.remove('catalog-filter__button_active')
      el.classList.add('catalog-filter__button_active')
      currentFilterEl = el
      currentFilter = filter
      list.classList.add('catalog-list_hide')

      clearTimeout(timer)
      timer = setTimeout(() => {
        listContainer.style.height = list.clientHeight + 'px'
        filterCards(filter)
        listContainer.style.height = list.clientHeight + 'px'

        timer = setTimeout(() => {
          listContainer.style.height = ''
          list.classList.remove('catalog-list_hide')
        }, 500)
      }, 300)
    }
  }

  function filterCards() {
    list.innerHTML = ""

    cardList.forEach(filterEl => {
      if (currentFilter === 'all' || filterEl.dataset['filter'] === currentFilter) {
        list.append(filterEl)
      }
    })
  }
}
