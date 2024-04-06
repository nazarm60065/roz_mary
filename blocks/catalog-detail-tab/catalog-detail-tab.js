import {Tab} from '../tab/Tab'

export default () => {
  const wrapper = document.querySelector('.catalog-detail-tab-wrapper')

  if (wrapper) {
    new Tab({
      selectors: {
        tab: '.catalog-detail-tab-wrapper',
        link: '.catalog-detail-tab-item__button',
        panel: '.catalog-detail-tab-panel',
        panelContainer: '.catalog-detail-tab-panels'
      },
      classes: {
        panelIn: "tab-panel_in",
        panelActive: "tab-panel_active",
        panel: "tab-panel",
        linkActive: 'catalog-detail-tab-item__button_active'
      },
      onInit: false,
      onChange: false,
      onPanelShow: false,
      initialTab: false,
      handleURI: false,
      animationSpeed: 300,
      _animationInProgress: false,
      _resizeTimer: null,
      _resizeContainerTimer: null,
      _active: true
    })
  }
}
