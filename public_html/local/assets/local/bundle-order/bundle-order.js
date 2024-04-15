(()=>{"use strict";class e{constructor(e){this.params={selectors:{placeholder:".form__placeholder",control:".form__control",group:".form-group"},classes:{groupFilled:"form-group_filled"},...e},this.init()}init(){this.selectors=this.params.selectors,this.classes=this.params.classes,this.placeholderList=document.querySelectorAll(this.selectors.placeholder),this.controlResetHandler=this.controlResetHandler.bind(this),this.placeholderList.length&&(this.placeholderList.forEach((e=>{let s=e.closest(this.selectors.group);if(s){let e=s.querySelector(this.selectors.control);e&&(this.checkControlFilled(e,s),e.addEventListener("reset",this.controlResetHandler))}})),this.attachEvents())}attachEvents(){document.addEventListener("click",this.docClickHandler.bind(this)),document.addEventListener("change",this.docChangeHandler.bind(this))}docClickHandler(e){let s=e.target.closest(this.selectors.placeholder);s&&this.placeholderClickHandler(s)}placeholderClickHandler(e){let s=e.closest(this.selectors.group);if(s){let e=s.querySelector(this.selectors.control);e&&e.focus()}}docChangeHandler(e){let s=e.target.closest(this.selectors.control);s&&this.controlChangeHandler(s)}controlChangeHandler(e){this.checkControlFilled(e)}checkControlFilled(e,s){(s=s||e.closest(this.selectors.group))&&(""===e.value?s.classList.remove(this.classes.groupFilled):(s.classList.add(this.classes.groupFilled),this.onFill(e,s)))}controlResetHandler(e){const s=e.target.closest(this.selectors.group);s&&s.classList.remove(this.classes.groupFilled)}onFill(e,s){if("file"===e.type){const t=s.querySelector(".form__filename"),l=e.files.length,o=e.files.length>1?`Файлы (${l} шт.)`:e.files[0].name;t&&(t.innerText=o)}}destroy(){document.removeEventListener("click",this.docClickHandler),document.removeEventListener("change",this.docChangeHandler)}}document.addEventListener("DOMContentLoaded",(()=>{new e({selectors:{placeholder:".order-props__placeholder",control:".order-props__control",group:".order-props-group"},classes:{groupFilled:"order-props-group_filled"}})}))})();