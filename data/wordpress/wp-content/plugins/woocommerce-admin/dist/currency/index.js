this.wc=this.wc||{},this.wc.currency=function(e){var t={};function r(o){if(t[o])return t[o].exports;var n=t[o]={i:o,l:!1,exports:{}};return e[o].call(n.exports,n,n.exports,r),n.l=!0,n.exports}return r.m=e,r.c=t,r.d=function(e,t,o){r.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},r.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.t=function(e,t){if(1&t&&(e=r(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(r.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)r.d(o,n,function(t){return e[t]}.bind(null,n));return o},r.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,"a",t),t},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r.p="",r(r.s=744)}({0:function(e,t){!function(){e.exports=this.wp.element}()},1:function(e,t){!function(){e.exports=this.wp.i18n}()},14:function(e,t,r){"use strict";function o(e,t){for(var r=0;r<t.length;r++){var o=t[r];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}function n(e,t,r){return t&&o(e.prototype,t),r&&o(e,r),e}r.d(t,"a",(function(){return n}))},15:function(e,t,r){"use strict";function o(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}r.d(t,"a",(function(){return o}))},31:function(e,t,r){"use strict";function o(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}r.d(t,"a",(function(){return o}))},744:function(e,t,r){"use strict";r.r(t),r.d(t,"default",(function(){return l})),r.d(t,"getCurrencyData",(function(){return p}));var o=r(31),n=r(15),i=r(14),a=r(0),s=r(1),c=r(97);function u(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);t&&(o=o.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,o)}return r}var l=function(){function e(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null;Object(n.a)(this,e),this.code||this.setCurrency(t)}return Object(i.a)(e,[{key:"setCurrency",value:function(e){var t=function(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?u(Object(r),!0).forEach((function(t){Object(o.a)(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):u(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}({},{code:"USD",symbol:"$",symbolPosition:"left",thousandSeparator:",",decimalSeparator:".",precision:2},{},e);this.code=t.code.toString(),this.symbol=t.symbol.toString(),this.symbolPosition=t.symbolPosition.toString(),this.decimalSeparator=t.decimalSeparator.toString(),this.priceFormat=this.getPriceFormat(t),this.thousandSeparator=t.thousandSeparator.toString();var r=parseInt(t.precision,10);this.precision=r}},{key:"stripTags",value:function(e){var t=document.createElement("DIV");return t.innerHTML=e,t.textContent||t.innerText||""}},{key:"getPriceFormat",value:function(e){if(e.priceFormat)return this.stripTags(e.priceFormat.toString());switch(e.symbolPosition){case"left":return"%1$s%2$s";case"right":return"%2$s%1$s";case"left_space":return"%1$s&nbsp;%2$s";case"right_space":return"%2$s&nbsp;%1$s"}return"%1$s%2$s"}},{key:"formatCurrency",value:function(e){var t=Object(c.numberFormat)(this,e);return""===t?t:Object(s.sprintf)(this.priceFormat,this.symbol,t)}},{key:"formatDecimal",value:function(e){return"number"!=typeof e&&(e=parseFloat(e)),Number.isNaN(e)?0:Math.round(e*Math.pow(10,this.precision))/Math.pow(10,this.precision)}},{key:"formatDecimalString",value:function(e){return"number"!=typeof e&&(e=parseFloat(e)),Number.isNaN(e)?"":e.toFixed(this.precision)}},{key:"render",value:function(e){return"number"!=typeof e&&(e=parseFloat(e)),e<0?Object(a.createElement)("span",{className:"is-negative"},this.formatCurrency(e)):this.formatCurrency(e)}}]),e}();function p(){return{US:{code:"USD",symbol:"$",symbolPosition:"left",thousandSeparator:",",decimalSeparator:".",precision:2},EU:{code:"EUR",symbol:"€",symbolPosition:"left",thousandSeparator:".",decimalSeparator:",",precision:2},IN:{code:"INR",symbol:"₹",symbolPosition:"left",thousandSeparator:",",decimalSeparator:".",precision:2},GB:{code:"GBP",symbol:"£",symbolPosition:"left",thousandSeparator:",",decimalSeparator:".",precision:2},BR:{code:"BRL",symbol:"R$",symbolPosition:"left",thousandSeparator:".",decimalSeparator:",",precision:2},VN:{code:"VND",symbol:"₫",symbolPosition:"right",thousandSeparator:".",decimalSeparator:",",precision:1},ID:{code:"IDR",symbol:"Rp",symbolPosition:"left",thousandSeparator:".",decimalSeparator:",",precision:0},BD:{code:"BDT",symbol:"৳",symbolPosition:"left",thousandSeparator:",",decimalSeparator:".",precision:0},PK:{code:"PKR",symbol:"₨",symbolPosition:"left",thousandSeparator:",",decimalSeparator:".",precision:2},RU:{code:"RUB",symbol:"₽",symbolPosition:"right",thousandSeparator:" ",decimalSeparator:",",precision:2},TR:{code:"TRY",symbol:"₺",symbolPosition:"left",thousandSeparator:".",decimalSeparator:",",precision:2},MX:{code:"MXN",symbol:"$",symbolPosition:"left",thousandSeparator:",",decimalSeparator:".",precision:2},CA:{code:"CAD",symbol:"$",symbolPosition:"left",thousandSeparator:",",decimalSeparator:".",precision:2}}}},97:function(e,t){!function(){e.exports=this.wc.number}()}});