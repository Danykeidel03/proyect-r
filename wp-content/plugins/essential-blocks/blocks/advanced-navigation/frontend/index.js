(()=>{function t(t,n){(null==n||n>t.length)&&(n=t.length);for(var e=0,r=new Array(n);e<n;e++)r[e]=t[e];return r}window.addEventListener("DOMContentLoaded",(function(){var n,e=function(n,e){var r="undefined"!=typeof Symbol&&n[Symbol.iterator]||n["@@iterator"];if(!r){if(Array.isArray(n)||(r=function(n,e){if(n){if("string"==typeof n)return t(n,e);var r=Object.prototype.toString.call(n).slice(8,-1);return"Object"===r&&n.constructor&&(r=n.constructor.name),"Map"===r||"Set"===r?Array.from(n):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?t(n,e):void 0}}(n))||e&&n&&"number"==typeof n.length){r&&(n=r);var o=0,i=function(){};return{s:i,n:function(){return o>=n.length?{done:!0}:{done:!1,value:n[o++]}},e:function(t){throw t},f:i}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var a,c=!0,l=!1;return{s:function(){r=r.call(n)},n:function(){var t=r.next();return c=t.done,t},e:function(t){l=!0,a=t},f:function(){try{c||null==r.return||r.return()}finally{if(l)throw a}}}}(document.querySelectorAll(".eb-advanced-navigation-wrapper"));try{var r=function(){var t=n.value,e=t.querySelectorAll(".wp-block-navigation-item__content");window.matchMedia("(max-width: 767px)"),e.forEach((function(n){n.addEventListener("click",(function(e){if(""!==n.hash){e.preventDefault(),t.querySelector(".wp-block-navigation__responsive-container").classList.remove("is-menu-open","has-modal-open");var r=this.getAttribute("href");window.open(r,"_self")}}))})),e.forEach((function(t){t.closest(".wp-block-navigation-item").classList.remove("active"),t.addEventListener("click",(function(n){e.forEach((function(t){t.closest(".wp-block-navigation-item").classList.remove("current-menu-item")})),""!==t.hash&&t.closest(".wp-block-navigation-item").classList.add("current-menu-item")}))}))};for(e.s();!(n=e.n()).done;)r()}catch(t){e.e(t)}finally{e.f()}}))})();