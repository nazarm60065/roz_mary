(()=>{"use strict";var e,t={p:"/local/assets/"},r="loading"in HTMLImageElement.prototype,o="loading"in HTMLIFrameElement.prototype,a="onscroll"in window;function n(e){var t,r,o=[];"picture"===e.parentNode.tagName.toLowerCase()&&((r=(t=e.parentNode).querySelector("source[data-lazy-remove]"))&&t.removeChild(r),o=Array.prototype.slice.call(e.parentNode.querySelectorAll("source"))),o.push(e),o.forEach((function(e){e.hasAttribute("data-lazy-srcset")&&(e.setAttribute("srcset",e.getAttribute("data-lazy-srcset")),e.removeAttribute("data-lazy-srcset"))})),e.setAttribute("src",e.getAttribute("data-lazy-src")),e.removeAttribute("data-lazy-src")}function i(t){var n=document.createElement("div");for(n.innerHTML=function(t){var n=t.textContent||t.innerHTML,i="data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 "+((n.match(/width=['"](\d+)['"]/)||!1)[1]||1)+" "+((n.match(/height=['"](\d+)['"]/)||!1)[1]||1)+"%27%3E%3C/svg%3E";return(/<img/gim.test(n)&&!r||/<iframe/gim.test(n)&&!o)&&a&&(n=void 0===e?n.replace(/(?:\r\n|\r|\n|\t| )src=/g,' lazyload="1" src='):(n=n.replace("<source",'<source srcset="'+i+'" data-lazy-remove="true"></source>\n<source')).replace(/(?:\r\n|\r|\n|\t| )srcset=/g," data-lazy-srcset=").replace(/(?:\r\n|\r|\n|\t| )src=/g,' src="'+i+'" data-lazy-src=')),n}(t);n.firstChild;){var i=n.firstChild;if(a&&void 0!==e&&i.tagName&&(("img"===i.tagName.toLowerCase()||"picture"===i.tagName.toLowerCase())&&!r||"iframe"===i.tagName.toLowerCase()&&!o)){var c="picture"===i.tagName.toLowerCase()?n.querySelector("img"):i;e.observe(c)}t.parentNode.insertBefore(i,t)}t.parentNode.removeChild(t)}window.NodeList&&!NodeList.prototype.forEach&&(NodeList.prototype.forEach=Array.prototype.forEach),"IntersectionObserver"in window&&(e=new IntersectionObserver((function(e,t){e.forEach((function(e){if(0!==e.intersectionRatio){var r=e.target;t.unobserve(r),n(r)}}))}),{rootMargin:"0px 0px 256px 0px",threshold:.01}));var c=function(){document.querySelectorAll("noscript.loading-lazy").forEach((function(e){return i(e)})),void 0!==window.matchMedia&&window.matchMedia("print").addListener((function(e){e.matches&&document.querySelectorAll('img[loading="lazy"][data-lazy-src],iframe[loading="lazy"][data-lazy-src]').forEach((function(e){n(e)}))}))};/comp|inter/.test(document.readyState)?c():"addEventListener"in document?document.addEventListener("DOMContentLoaded",(function(){c()})):document.attachEvent("onreadystatechange",(function(){"complete"===document.readyState&&c()}));var s={prepareElement:i};t.p,t.p,t.p;function d(){const e=window.innerWidth-document.body.clientWidth;document.body.style.setProperty("--scrollbar-width",`${e}px`)}window.loadingAttributePolyfill=s,document.addEventListener("DOMContentLoaded",(()=>{const e=document.querySelector(".footer-up__button");e&&e.addEventListener("click",(()=>{window.scroll({behavior:"smooth",top:0})})),setTimeout(d)}))})();