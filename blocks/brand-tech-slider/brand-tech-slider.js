import './brand-tech-slider.mustache'
import {Swiper} from 'swiper'
import {Pagination, FreeMode} from 'swiper/modules'
export default () => {
    const slider = document.querySelector('.brand-tech-slider')

    if (slider) {
        const swiper = new Swiper(slider, {
            modules: [Pagination, FreeMode],
            /*freeMode: {
                enabled: true,
                momentum: false,
            },*/
            spaceBetween: 16,
            slidesPerView: 'auto',
            watchOverflow: true,
            pagination: {
                el: '.brand-tech-progress',
                type: 'progressbar',
                lockClass: 'brand-tech-progress_lock'
            }
        })
    }
}