import './templates'
import 'swiper/css'
import 'swiper/css/effect-fade'
import 'swiper/css/pagination'

import {BrandSkinList} from "../../brand-skin-list/brand-skin-list"
import {BrandDispensers} from "../../brand-dispensers/brand-dispensers"
import brandTechSlider from "../../brand-tech-slider/brand-tech-slider"

import './brand.sass'

document.addEventListener('DOMContentLoaded', () => {
    const anchorList = document.querySelectorAll('.brand__anchor')

    new BrandSkinList()
    brandTechSlider()
    new BrandDispensers()

    if (anchorList.length) {
        anchorList.forEach(anchor => {
            anchor.addEventListener('click', () => {
                const href = anchor.dataset['src']

                if (href) {
                    const el = document.querySelector(href)

                    if (el) {
                        el.scrollIntoView({behavior: 'smooth', block: 'start'})
                    }
                }
            })
        })
    }
})