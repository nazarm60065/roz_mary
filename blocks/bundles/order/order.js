import {FormPlaceholder} from "../../form-placeholder/form-placeholder"

import './order.sass'

document.addEventListener('DOMContentLoaded', () => {
    new FormPlaceholder({
      selectors: {
        placeholder: '.order-props__placeholder',
        control: '.order-props__control',
        group: '.order-props-group'
      },
      classes: {
        groupFilled: 'order-props-group_filled'
      }
    })
})