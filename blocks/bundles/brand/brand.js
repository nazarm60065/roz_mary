import './templates'
import 'swiper/css'
import 'swiper/css/effect-fade'

import {BrandSkinList} from "../../brand-skin-list/brand-skin-list"

import './brand.sass'

document.addEventListener('DOMContentLoaded', () => {
    const anchor = document.querySelector('.brand-top__anchor')

    new BrandSkinList()

    if (anchor) {
        anchor.addEventListener('click', () => {
            const href = anchor.dataset['src']

            if (href) {
                const el = document.querySelector(href)

                if (el) {
                    el.scrollIntoView({behavior: 'smooth', block: 'start'})
                }
            }
        })
    }
})