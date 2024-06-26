import './templates'
import 'swiper/css'
import 'swiper/css/effect-fade'
import 'swiper/css/pagination'

import {BrandSkinList} from "../../brand-skin-list/brand-skin-list"
import {BrandDispensers} from "../../brand-dispensers/brand-dispensers"
import brandTechSlider from "../../brand-tech-slider/brand-tech-slider"
import {BrandChangesList} from "../../brand-changes-list/brand-changes-list"
import {BrandPoints} from "../../brand-points/brand-points"
import {BrandCatalogSlider} from "../../brand-catalog-slider/brand-catalog-slider"
import brandComp from "../../brand-comp/brand-comp"
import brandReviewsSlider from "../../brand-reviews-slider/brand-reviews-slider"

import './brand.sass'

document.addEventListener('DOMContentLoaded', () => {
    const anchorList = document.querySelectorAll('.brand__anchor')

    new BrandSkinList()
    new BrandCatalogSlider()
    brandTechSlider()
    new BrandDispensers()
    new BrandChangesList()
    new BrandPoints()
    brandComp()
    brandReviewsSlider()

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