/* custom script */
!function(){"use strict";function t(){return"cf-marker-"+Math.random().toString().slice(2)}function e(){for(var t=[],e=0;e<arguments.length;e++)t[e]=arguments[e];(n=console.warn||console.log).call.apply(n,[console,"[ROCKET LOADER] "].concat(t));var n}function n(t,e){var n=e.parentNode;n&&h(t,n,e)}function r(t,e){h(t,e,e.childNodes[0])}function o(t){var e=t.parentNode;e&&e.removeChild(t)}function i(t){var e=t.namespaceURI===E?"xlink:href":"src";return t.getAttribute(e)}function a(t,e){var n=t.type.substr(e.length);return!(n&&!A[n.trim()])&&((!k||!t.hasAttribute("nomodule"))&&!(!k&&"module"===n))}function c(t){return a(t,"")}function s(t,e){return function(n){if(e(),t)return t.call(this,n)}}function u(t,e){t.onload=s(t.onload,e),t.onerror=s(t.onerror,e)}function p(t){var e=document.createElementNS(t.namespaceURI,"script");e.async=t.hasAttribute("async"),e.textContent=t.textContent;for(var n=0;n<t.attributes.length;n++){var r=t.attributes[n];try{r.namespaceURI?e.setAttributeNS(r.namespaceURI,r.name,r.value):e.setAttribute(r.name,r.value)}catch(o){}}return e}function l(t,e){var n=new I(e);t.dispatchEvent(n)}function d(e){var n=e.namespaceURI===E,r=t();e.setAttribute(r,"");var i=n?"<svg>"+e.outerHTML+"</svg>":e.outerHTML;L.call(document,i);var a=document.querySelector("["+r+"]");if(a){a.removeAttribute(r);var c=n&&a.parentNode;c&&o(c)}return a}function f(t){if(t&&"handleEvent"in t){var e=t.handleEvent;return"function"==typeof e?e.bind(t):e}return t}function h(t,e,n){var r=n?function(t){return e.insertBefore(t,n)}:function(t){return e.appendChild(t)};Array.prototype.slice.call(t).forEach(r)}function v(){return/chrome/i.test(navigator.userAgent)&&/google/i.test(navigator.vendor)}function y(t,e){function n(){this.constructor=t}H(t,e),t.prototype=null===e?Object.create(e):(n.prototype=e.prototype,new n)}function m(t){return t instanceof Window?["load"]:t instanceof Document?["DOMContentLoaded","readystatechange"]:[]}function b(t){var e=t.getAttribute(R);if(!e)return null;var n=e.split(T);return{nonce:n[0],handlerPrefixLength:+n[1],bailout:!t.hasAttribute("defer")}}function g(t){var e=B+t.nonce;Array.prototype.forEach.call(document.querySelectorAll("["+e+"]"),function(n){n.removeAttribute(e),Array.prototype.forEach.call(n.attributes,function(e){/^on/.test(e.name)&&"function"!=typeof n[e.name]&&n.setAttribute(e.name,e.value.substring(t.handlerPrefixLength))})})}function S(){var t=window;"undefined"!=typeof Promise&&(t.__cfQR={done:new Promise(function(t){return U=t})})}function w(t){var e=new N(t),n=new C(e);e.harvestScriptsInDocument(),new W(e,{nonce:t,blocking:!0,docWriteSimulator:n,callback:function(){}}).run()}function x(t){var e=new N(t),n=new C(e);e.harvestScriptsInDocument();var r=new W(e,{nonce:t,blocking:!1,docWriteSimulator:n,callback:function(){window.__cfRLUnblockHandlers=!0,r.removePreloadHints(),P(t)}});r.insertPreloadHints(),M.runOnLoad(function(){r.run()})}function P(t){var e=new O(t);M.simulateStateBeforeDeferScriptsActivation(),e.harvestDeferScriptsInDocument(),new W(e,{nonce:t,blocking:!1,callback:function(){M.simulateStateAfterDeferScriptsActivation(),U&&U()}}).run()}var E="http://www.w3.org/2000/svg",A={"application/ecmascript":!0,"application/javascript":!0,"application/x-ecmascript":!0,"application/x-javascript":!0,"text/ecmascript":!0,"text/javascript":!0,"text/javascript1.0":!0,"text/javascript1.1":!0,"text/javascript1.2":!0,"text/javascript1.3":!0,"text/javascript1.4":!0,"text/javascript1.5":!0,"text/jscript":!0,"text/livescript":!0,"text/x-ecmascript":!0,"text/x-javascript":!0,module:!0},k=void 0!==document.createElement("script").noModule,I=function(){var t=window;return t.__rocketLoaderEventCtor||Object.defineProperty(t,"__rocketLoaderEventCtor",{value:Event}),t.__rocketLoaderEventCtor}(),L=document.write,_=document.writeln,H=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var n in e)e.hasOwnProperty(n)&&(t[n]=e[n])},D=function(){function t(t){this.nonce=t,this.items=[]}return Object.defineProperty(t.prototype,"hasItems",{get:function(){return this.items.length>0},enumerable:!0,configurable:!0}),t.prototype.pop=function(){return this.items.pop()},t.prototype.forEach=function(t){this.items.forEach(function(e){var n=e.script;return t(n)})},t.prototype.harvestScripts=function(t,e){var n=this,r=e.filter,o=e.mutate;Array.prototype.slice.call(t.querySelectorAll("script")).filter(r).reverse().forEach(function(t){o(t),n.pushScriptOnStack(t)})},t.prototype.pushScriptOnStack=function(t){var e=t.parentNode,n=this.createPlaceholder(t),r=!!i(t);e.replaceChild(n,t),this.items.push({script:t,placeholder:n,external:r,async:r&&t.hasAttribute("async"),executable:c(t)})},t.prototype.hasNonce=function(t){return 0===t.type.indexOf(this.nonce)},t.prototype.removeNonce=function(t){t.type=t.type.substr(this.nonce.length)},t.prototype.makeNonExecutable=function(t){t.type=this.nonce+t.type},t.prototype.isPendingDeferScript=function(t){return t.hasAttribute("defer")||t.type===this.nonce+"module"&&!t.hasAttribute("async")},t}(),N=function(t){function e(){return null!==t&&t.apply(this,arguments)||this}return y(e,t),e.prototype.harvestScriptsInDocument=function(){var t=this;this.harvestScripts(document,{filter:function(e){return t.hasNonce(e)},mutate:function(e){t.isPendingDeferScript(e)||t.removeNonce(e)}})},e.prototype.harvestScriptsAfterDocWrite=function(t){var e=this;this.harvestScripts(t,{filter:c,mutate:function(t){e.isPendingDeferScript(t)&&e.makeNonExecutable(t)}})},e.prototype.createPlaceholder=function(t){return document.createComment(t.outerHTML)},e}(D),O=function(t){function e(){return null!==t&&t.apply(this,arguments)||this}return y(e,t),e.prototype.harvestDeferScriptsInDocument=function(){var t=this;this.harvestScripts(document,{filter:function(e){return t.hasNonce(e)&&t.isPendingDeferScript(e)},mutate:function(e){return t.removeNonce(e)}})},e.prototype.createPlaceholder=function(t){var e=p(t);return this.makeNonExecutable(e),e},e}(D),C=function(){function t(t){this.scriptStack=t}return t.prototype.enable=function(t){var e=this;this.insertionPointMarker=t,this.buffer="",document.write=function(){for(var t=[],n=0;n<arguments.length;n++)t[n]=arguments[n];return e.write(t,!1)},document.writeln=function(){for(var t=[],n=0;n<arguments.length;n++)t[n]=arguments[n];return e.write(t,!0)}},t.prototype.flushWrittenContentAndDisable=function(){document.write=L,document.writeln=_,this.buffer.length&&(document.contains(this.insertionPointMarker)?this.insertionPointMarker.parentNode===document.head?this.insertContentInHead():this.insertContentInBody():e("Insertion point marker for document.write was detached from document:","Markup will not be inserted"))},t.prototype.insertContentInHead=function(){var t=new DOMParser,e="<!DOCTYPE html><head>"+this.buffer+"</head>",o=t.parseFromString(e,"text/html");if(this.scriptStack.harvestScriptsAfterDocWrite(o),n(o.head.childNodes,this.insertionPointMarker),o.body.childNodes.length){for(var i=Array.prototype.slice.call(o.body.childNodes),a=this.insertionPointMarker.nextSibling;a;)i.push(a),a=a.nextSibling;document.body||L.call(document,"<body>"),r(i,document.body)}},t.prototype.insertContentInBody=function(){var t=this.insertionPointMarker.parentElement,e=document.createElement(t.tagName);e.innerHTML=this.buffer,this.scriptStack.harvestScriptsAfterDocWrite(e),n(e.childNodes,this.insertionPointMarker)},t.prototype.write=function(t,e){var n=document.currentScript;n&&i(n)&&n.hasAttribute("async")?(r=e?_:L).call.apply(r,[document].concat(t)):this.buffer+=t.map(String).join(e?"\n":"");var r},t}(),j=function(){function t(){var t=this;this.simulatedReadyState="loading",this.bypassEventsInProxies=!1,this.nativeWindowAddEventListener=window.addEventListener;try{Object.defineProperty(document,"readyState",{get:function(){return t.simulatedReadyState}})}catch(e){}this.setupEventListenerProxy(),this.updateInlineHandlers()}return t.prototype.runOnLoad=function(t){var e=this;this.nativeWindowAddEventListener.call(window,"load",function(n){if(!e.bypassEventsInProxies)return t(n)})},t.prototype.updateInlineHandlers=function(){this.proxyInlineHandler(document,"onreadystatechange"),this.proxyInlineHandler(window,"onload"),document.body&&this.proxyInlineHandler(document.body,"onload")},t.prototype.simulateStateBeforeDeferScriptsActivation=function(){this.bypassEventsInProxies=!0,this.simulatedReadyState="interactive",l(document,"readystatechange"),this.bypassEventsInProxies=!1},t.prototype.simulateStateAfterDeferScriptsActivation=function(){var t=this;this.bypassEventsInProxies=!0,l(document,"DOMContentLoaded"),this.simulatedReadyState="complete",l(document,"readystatechange"),l(window,"load"),this.bypassEventsInProxies=!1,window.setTimeout(function(){return t.bypassEventsInProxies=!0},0)},t.prototype.setupEventListenerProxy=function(){var t=this;("undefined"!=typeof EventTarget?[EventTarget.prototype]:[Node.prototype,Window.prototype]).forEach(function(e){return t.patchEventTargetMethods(e)})},t.prototype.patchEventTargetMethods=function(t){var e=this,n=t.addEventListener,r=t.removeEventListener;t.addEventListener=function(t,r){for(var o=[],i=2;i<arguments.length;i++)o[i-2]=arguments[i];var a=m(this),c=r&&r.__rocketLoaderProxiedHandler;if(!c){var s=f(r);"function"==typeof s?(c=function(n){if(e.bypassEventsInProxies||a.indexOf(t)<0)return s.call(this,n)},Object.defineProperty(r,"__rocketLoaderProxiedHandler",{value:c})):c=r}n.call.apply(n,[this,t,c].concat(o))},t.removeEventListener=function(t,e){for(var n=[],o=2;o<arguments.length;o++)n[o-2]=arguments[o];var i=e&&e.__rocketLoaderProxiedHandler||e;r.call.apply(r,[this,t,i].concat(n))}},t.prototype.proxyInlineHandler=function(t,e){try{var n=t[e];if(n&&!n.__rocketLoaderInlineHandlerProxy){var r=this;t[e]=function(t){if(r.bypassEventsInProxies)return n.call(this,t)},Object.defineProperty(t[e],"__rocketLoaderInlineHandlerProxy",{value:!0})}}catch(o){return void console.warn("encountered an error when accessing "+e+" handler:",o.message)}},t}(),M=function(){var t=window;return t.__rocketLoaderLoadProgressSimulator||Object.defineProperty(t,"__rocketLoaderLoadProgressSimulator",{value:new j}),t.__rocketLoaderLoadProgressSimulator}(),W=function(){function t(t,e){this.scriptStack=t,this.settings=e,this.preloadHints=[]}return t.prototype.insertPreloadHints=function(){var t=this;this.scriptStack.forEach(function(e){if(a(e,t.settings.nonce)){var n=i(e),r=v()&&e.hasAttribute("integrity");if(n&&!r){var o=document.createElement("link");o.setAttribute("rel","preload"),o.setAttribute("as","script"),o.setAttribute("href",n),e.crossOrigin&&o.setAttribute("crossorigin",e.crossOrigin),document.head.appendChild(o),t.preloadHints.push(o)}}})},t.prototype.removePreloadHints=function(){this.preloadHints.forEach(function(t){return o(t)})},t.prototype.run=function(){for(var t=this,e=this;this.scriptStack.hasItems;){var n=function(){var n=e.settings.docWriteSimulator,r=e.scriptStack.pop();n&&!r.async&&n.enable(r.placeholder);var o=e.activateScript(r);return o?r.external&&r.executable&&!r.async?(u(o,function(){t.finalizeActivation(r),t.run()}),{value:void 0}):void e.finalizeActivation(r):(n&&n.flushWrittenContentAndDisable(),"continue")}();if("object"==typeof n)return n.value}this.scriptStack.hasItems||this.settings.callback()},t.prototype.finalizeActivation=function(t){this.settings.docWriteSimulator&&!t.async&&this.settings.docWriteSimulator.flushWrittenContentAndDisable(),M.updateInlineHandlers(),o(t.placeholder)},t.prototype.activateScript=function(t){var n=t.script,r=t.placeholder,o=t.external,i=t.async,a=r.parentNode;if(!document.contains(r))return e("Placeholder for script \n"+n.outerHTML+"\n was detached from document.","Script will not be executed."),null;var c=this.settings.blocking&&o&&!i?d(n):p(n);return c?(a.insertBefore(c,r),c):(e("Failed to create activatable copy of script \n"+n.outerHTML+"\n","Script will not be executed."),null)},t}(),R="data-cf-settings",T="|",B="data-cf-modified-",U=void 0;!function(){var t=document.currentScript;if(t){var n=b(t);n?(o(t),g(n),M.updateInlineHandlers(),n.bailout?w(n.nonce):(S(),x(n.nonce))):e("Activator script doesn't have settings. No scripts will be executed.")}else e("Can't obtain activator script. No scripts will be executed.")}()}();


//custom js for passport size photograph
function passImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#image').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#photograph").change(function(){
    passImage(this);
});

//custom js for signature
function signa(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#signatureup').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#signature").change(function(){
    signa(this);
});


!function(t,e){"object"==typeof exports&&"undefined"!=typeof module?e(exports):"function"==typeof define&&define.amd?define(["exports"],e):e((t=t||self).adminlte={})}(this,(function(t){"use strict";var e=function(t){var e="ControlSidebar",i="lte.controlsidebar",n=t.fn[e],s={COLLAPSED:"collapsed.lte.controlsidebar",EXPANDED:"expanded.lte.controlsidebar"},o=".control-sidebar",a=".control-sidebar-content",r='[data-widget="control-sidebar"]',l=".main-header",d=".main-footer",c="control-sidebar-animate",h="control-sidebar-open",f="control-sidebar-slide-open",u="layout-fixed",g="layout-navbar-fixed",p="layout-sm-navbar-fixed",_="layout-md-navbar-fixed",m="layout-lg-navbar-fixed",C="layout-xl-navbar-fixed",v="layout-footer-fixed",y="layout-sm-footer-fixed",b="layout-md-footer-fixed",w="layout-lg-footer-fixed",D="layout-xl-footer-fixed",E={controlsidebarSlide:!0,scrollbarTheme:"os-theme-light",scrollbarAutoHide:"l"},A=function(){function e(t,e){this._element=t,this._config=e,this._init()}var n=e.prototype;return n.collapse=function(){this._config.controlsidebarSlide?(t("html").addClass(c),t("body").removeClass(f).delay(300).queue((function(){t(o).hide(),t("html").removeClass(c),t(this).dequeue()}))):t("body").removeClass(h);var e=t.Event(s.COLLAPSED);t(this._element).trigger(e)},n.show=function(){this._config.controlsidebarSlide?(t("html").addClass(c),t(o).show().delay(10).queue((function(){t("body").addClass(f).delay(300).queue((function(){t("html").removeClass(c),t(this).dequeue()})),t(this).dequeue()}))):t("body").addClass(h);var e=t.Event(s.EXPANDED);t(this._element).trigger(e)},n.toggle=function(){t("body").hasClass(h)||t("body").hasClass(f)?this.collapse():this.show()},n._init=function(){var e=this;this._fixHeight(),this._fixScrollHeight(),t(window).resize((function(){e._fixHeight(),e._fixScrollHeight()})),t(window).scroll((function(){(t("body").hasClass(h)||t("body").hasClass(f))&&e._fixScrollHeight()}))},n._fixScrollHeight=function(){var e={scroll:t(document).height(),window:t(window).height(),header:t(l).outerHeight(),footer:t(d).outerHeight()},i=Math.abs(e.window+t(window).scrollTop()-e.scroll),n=t(window).scrollTop(),s=!1,r=!1;t("body").hasClass(u)&&((t("body").hasClass(g)||t("body").hasClass(p)||t("body").hasClass(_)||t("body").hasClass(m)||t("body").hasClass(C))&&"fixed"===t(l).css("position")&&(s=!0),(t("body").hasClass(v)||t("body").hasClass(y)||t("body").hasClass(b)||t("body").hasClass(w)||t("body").hasClass(D))&&"fixed"===t(d).css("position")&&(r=!0),0===n&&0===i?(t(o).css("bottom",e.footer),t(o).css("top",e.header),t(o+", "+o+" "+a).css("height",e.window-(e.header+e.footer))):i<=e.footer?!1===r?(t(o).css("bottom",e.footer-i),t(o+", "+o+" "+a).css("height",e.window-(e.footer-i))):t(o).css("bottom",e.footer):n<=e.header?!1===s?(t(o).css("top",e.header-n),t(o+", "+o+" "+a).css("height",e.window-(e.header-n))):t(o).css("top",e.header):!1===s?(t(o).css("top",0),t(o+", "+o+" "+a).css("height",e.window)):t(o).css("top",e.header))},n._fixHeight=function(){var e=t(window).height(),i=t(l).outerHeight(),n=t(d).outerHeight();if(t("body").hasClass(u)){var s=e-i;(t("body").hasClass(v)||t("body").hasClass(y)||t("body").hasClass(b)||t("body").hasClass(w)||t("body").hasClass(D))&&"fixed"===t(d).css("position")&&(s=e-i-n),t(o+" "+a).css("height",s),"undefined"!=typeof t.fn.overlayScrollbars&&t(o+" "+a).overlayScrollbars({className:this._config.scrollbarTheme,sizeAutoCapable:!0,scrollbars:{autoHide:this._config.scrollbarAutoHide,clickScrolling:!0}})}},e._jQueryInterface=function(n){return this.each((function(){var s=t(this).data(i),o=t.extend({},E,t(this).data());if(s||(s=new e(this,o),t(this).data(i,s)),"undefined"===s[n])throw new Error(n+" is not a function");s[n]()}))},e}();return t(document).on("click",r,(function(e){e.preventDefault(),A._jQueryInterface.call(t(this),"toggle")})),t.fn[e]=A._jQueryInterface,t.fn[e].Constructor=A,t.fn[e].noConflict=function(){return t.fn[e]=n,A._jQueryInterface},A}(jQuery),i=function(t){var e="Layout",i=t.fn[e],n=".main-header",s=".main-sidebar",o=".main-sidebar .sidebar",a=".content-wrapper",r=".control-sidebar-content",l='[data-widget="control-sidebar"]',d=".main-footer",c='[data-widget="pushmenu"]',h=".login-box",f=".register-box",u="sidebar-focused",g="layout-fixed",p="login-page",_="register-page",m="control-sidebar-slide-open",C="control-sidebar-open",v={scrollbarTheme:"os-theme-light",scrollbarAutoHide:"l"},y=function(){function e(t,e){this._config=e,this._element=t,this._init()}var i=e.prototype;return i.fixLayoutHeight=function(e){void 0===e&&(e=null);var i=0;(t("body").hasClass(m)||t("body").hasClass(C)||"control_sidebar"==e)&&(i=t(r).height());var s={window:t(window).height(),header:0!==t(n).length?t(n).outerHeight():0,footer:0!==t(d).length?t(d).outerHeight():0,sidebar:0!==t(o).length?t(o).height():0,control_sidebar:i},l=this._max(s);l==s.control_sidebar?t(a).css("min-height",l):l==s.window?t(a).css("min-height",l-s.header-s.footer):t(a).css("min-height",l-s.header),t("body").hasClass(g)&&(t(a).css("min-height",l-s.header-s.footer),"undefined"!=typeof t.fn.overlayScrollbars&&t(o).overlayScrollbars({className:this._config.scrollbarTheme,sizeAutoCapable:!0,scrollbars:{autoHide:this._config.scrollbarAutoHide,clickScrolling:!0}}))},i._init=function(){var e=this;if(this.fixLayoutHeight(),t(o).on("collapsed.lte.treeview expanded.lte.treeview",(function(){e.fixLayoutHeight()})),t(c).on("collapsed.lte.pushmenu shown.lte.pushmenu",(function(){e.fixLayoutHeight()})),t(l).on("collapsed.lte.controlsidebar",(function(){e.fixLayoutHeight()})).on("expanded.lte.controlsidebar",(function(){e.fixLayoutHeight("control_sidebar")})),t(window).resize((function(){e.fixLayoutHeight()})),t("body").hasClass(p)||t("body").hasClass(_)){if(t("body").hasClass(p)||t("body").hasClass(_)){var i=t(h+", "+f).height();t("body").css("min-height",i)}}else t("body, html").css("height","auto");t("body.hold-transition").removeClass("hold-transition")},i._max=function(t){var e=0;return Object.keys(t).forEach((function(i){t[i]>e&&(e=t[i])})),e},e._jQueryInterface=function(i){return void 0===i&&(i=""),this.each((function(){var n=t(this).data("lte.layout"),s=t.extend({},v,t(this).data());n||(n=new e(t(this),s),t(this).data("lte.layout",n)),"init"!==i&&""!==i||n._init()}))},e}();return t(window).on("load",(function(){y._jQueryInterface.call(t("body"))})),t(o+" a").on("focusin",(function(){t(s).addClass(u)})),t(o+" a").on("focusout",(function(){t(s).removeClass(u)})),t.fn[e]=y._jQueryInterface,t.fn[e].Constructor=y,t.fn[e].noConflict=function(){return t.fn[e]=i,y._jQueryInterface},y}(jQuery),n=function(t){var e="PushMenu",i=".lte.pushmenu",n=t.fn[e],s={COLLAPSED:"collapsed"+i,SHOWN:"shown"+i},o={autoCollapseSize:992,enableRemember:!1,noTransitionAfterReload:!0},a={TOGGLE_BUTTON:'[data-widget="pushmenu"]',SIDEBAR_MINI:".sidebar-mini",SIDEBAR_COLLAPSED:".sidebar-collapse",BODY:"body",OVERLAY:"#sidebar-overlay",WRAPPER:".wrapper"},r="sidebar-collapse",l="sidebar-open",d=function(){function e(e,i){this._element=e,this._options=t.extend({},o,i),t(a.OVERLAY).length||this._addOverlay(),this._init()}var n=e.prototype;return n.expand=function(){this._options.autoCollapseSize&&t(window).width()<=this._options.autoCollapseSize&&t(a.BODY).addClass(l),t(a.BODY).removeClass(r),this._options.enableRemember&&localStorage.setItem("remember"+i,l);var e=t.Event(s.SHOWN);t(this._element).trigger(e)},n.collapse=function(){this._options.autoCollapseSize&&t(window).width()<=this._options.autoCollapseSize&&t(a.BODY).removeClass(l),t(a.BODY).addClass(r),this._options.enableRemember&&localStorage.setItem("remember"+i,r);var e=t.Event(s.COLLAPSED);t(this._element).trigger(e)},n.toggle=function(){t(a.BODY).hasClass(r)?this.expand():this.collapse()},n.autoCollapse=function(e){void 0===e&&(e=!1),this._options.autoCollapseSize&&(t(window).width()<=this._options.autoCollapseSize?t(a.BODY).hasClass(l)||this.collapse():1==e&&t(a.BODY).hasClass(l)&&t(a.BODY).removeClass(l))},n.remember=function(){this._options.enableRemember&&(localStorage.getItem("remember"+i)==r?this._options.noTransitionAfterReload?t("body").addClass("hold-transition").addClass(r).delay(50).queue((function(){t(this).removeClass("hold-transition"),t(this).dequeue()})):t("body").addClass(r):this._options.noTransitionAfterReload?t("body").addClass("hold-transition").removeClass(r).delay(50).queue((function(){t(this).removeClass("hold-transition"),t(this).dequeue()})):t("body").removeClass(r))},n._init=function(){var e=this;this.remember(),this.autoCollapse(),t(window).resize((function(){e.autoCollapse(!0)}))},n._addOverlay=function(){var e=this,i=t("<div />",{id:"sidebar-overlay"});i.on("click",(function(){e.collapse()})),t(a.WRAPPER).append(i)},e._jQueryInterface=function(i){return this.each((function(){var n=t(this).data("lte.pushmenu"),s=t.extend({},o,t(this).data());n||(n=new e(this,s),t(this).data("lte.pushmenu",n)),"string"==typeof i&&i.match(/collapse|expand|toggle/)&&n[i]()}))},e}();return t(document).on("click",a.TOGGLE_BUTTON,(function(e){e.preventDefault();var i=e.currentTarget;"pushmenu"!==t(i).data("widget")&&(i=t(i).closest(a.TOGGLE_BUTTON)),d._jQueryInterface.call(t(i),"toggle")})),t(window).on("load",(function(){d._jQueryInterface.call(t(a.TOGGLE_BUTTON))})),t.fn[e]=d._jQueryInterface,t.fn[e].Constructor=d,t.fn[e].noConflict=function(){return t.fn[e]=n,d._jQueryInterface},d}(jQuery),s=function(t){var e="Treeview",i=t.fn[e],n={SELECTED:"selected.lte.treeview",EXPANDED:"expanded.lte.treeview",COLLAPSED:"collapsed.lte.treeview",LOAD_DATA_API:"load.lte.treeview"},s=".nav-item",o=".nav-treeview",a=".menu-open",r='[data-widget="treeview"]',l="menu-open",d="sidebar-collapse",c={trigger:r+" "+".nav-link",animationSpeed:300,accordion:!0,expandSidebar:!1,sidebarButtonSelector:'[data-widget="pushmenu"]'},h=function(){function e(t,e){this._config=e,this._element=t}var i=e.prototype;return i.init=function(){this._setupListeners()},i.expand=function(e,i){var s=this,r=t.Event(n.EXPANDED);if(this._config.accordion){var d=i.siblings(a).first(),c=d.find(o).first();this.collapse(c,d)}e.stop().slideDown(this._config.animationSpeed,(function(){i.addClass(l),t(s._element).trigger(r)})),this._config.expandSidebar&&this._expandSidebar()},i.collapse=function(e,i){var s=this,r=t.Event(n.COLLAPSED);e.stop().slideUp(this._config.animationSpeed,(function(){i.removeClass(l),t(s._element).trigger(r),e.find(a+" > "+o).slideUp(),e.find(a).removeClass(l)}))},i.toggle=function(e){var i=t(e.currentTarget),n=i.parent(),a=n.find("> "+o);if(a.is(o)||(n.is(s)||(a=n.parent().find("> "+o)),a.is(o))){e.preventDefault();var r=i.parents(s).first();r.hasClass(l)?this.collapse(t(a),r):this.expand(t(a),r)}},i._setupListeners=function(){var e=this;t(document).on("click",this._config.trigger,(function(t){e.toggle(t)}))},i._expandSidebar=function(){t("body").hasClass(d)&&t(this._config.sidebarButtonSelector).PushMenu("expand")},e._jQueryInterface=function(i){return this.each((function(){var n=t(this).data("lte.treeview"),s=t.extend({},c,t(this).data());n||(n=new e(t(this),s),t(this).data("lte.treeview",n)),"init"===i&&n[i]()}))},e}();return t(window).on(n.LOAD_DATA_API,(function(){t(r).each((function(){h._jQueryInterface.call(t(this),"init")}))})),t.fn[e]=h._jQueryInterface,t.fn[e].Constructor=h,t.fn[e].noConflict=function(){return t.fn[e]=i,h._jQueryInterface},h}(jQuery),o=function(t){var e="DirectChat",i=t.fn[e],n="toggled{EVENT_KEY}",s='[data-widget="chat-pane-toggle"]',o=".direct-chat",a="direct-chat-contacts-open",r=function(){function e(t,e){this._element=t}return e.prototype.toggle=function(){t(this._element).parents(o).first().toggleClass(a);var e=t.Event(n);t(this._element).trigger(e)},e._jQueryInterface=function(i){return this.each((function(){var n=t(this).data("lte.directchat");n||(n=new e(t(this)),t(this).data("lte.directchat",n)),n[i]()}))},e}();return t(document).on("click",s,(function(e){e&&e.preventDefault(),r._jQueryInterface.call(t(this),"toggle")})),t.fn[e]=r._jQueryInterface,t.fn[e].Constructor=r,t.fn[e].noConflict=function(){return t.fn[e]=i,r._jQueryInterface},r}(jQuery),a=function(t){var e="TodoList",i=t.fn[e],n='[data-widget="todo-list"]',s="done",o={onCheck:function(t){return t},onUnCheck:function(t){return t}},a=function(){function e(t,e){this._config=e,this._element=t,this._init()}var i=e.prototype;return i.toggle=function(e){e.parents("li").toggleClass(s),t(e).prop("checked")?this.check(e):this.unCheck(t(e))},i.check=function(t){this._config.onCheck.call(t)},i.unCheck=function(t){this._config.onUnCheck.call(t)},i._init=function(){var e=this;t(n).find("input:checkbox:checked").parents("li").toggleClass(s),t(n).on("change","input:checkbox",(function(i){e.toggle(t(i.target))}))},e._jQueryInterface=function(i){return this.each((function(){var n=t(this).data("lte.todolist"),s=t.extend({},o,t(this).data());n||(n=new e(t(this),s),t(this).data("lte.todolist",n)),"init"===i&&n[i]()}))},e}();return t(window).on("load",(function(){a._jQueryInterface.call(t(n))})),t.fn[e]=a._jQueryInterface,t.fn[e].Constructor=a,t.fn[e].noConflict=function(){return t.fn[e]=i,a._jQueryInterface},a}(jQuery),r=function(t){var e="CardWidget",i=".lte.cardwidget",n=t.fn[e],s={EXPANDED:"expanded"+i,COLLAPSED:"collapsed"+i,MAXIMIZED:"maximized"+i,MINIMIZED:"minimized"+i,REMOVED:"removed"+i},o={CARD:"card",COLLAPSED:"collapsed-card",WAS_COLLAPSED:"was-collapsed",MAXIMIZED:"maximized-card"},a={DATA_REMOVE:'[data-card-widget="remove"]',DATA_COLLAPSE:'[data-card-widget="collapse"]',DATA_MAXIMIZE:'[data-card-widget="maximize"]',CARD:"."+o.CARD,CARD_HEADER:".card-header",CARD_BODY:".card-body",CARD_FOOTER:".card-footer",COLLAPSED:"."+o.COLLAPSED},r={animationSpeed:"normal",collapseTrigger:a.DATA_COLLAPSE,removeTrigger:a.DATA_REMOVE,maximizeTrigger:a.DATA_MAXIMIZE,collapseIcon:"fa-minus",expandIcon:"fa-plus",maximizeIcon:"fa-expand",minimizeIcon:"fa-compress"},l=function(){function e(e,i){this._element=e,this._parent=e.parents(a.CARD).first(),e.hasClass(o.CARD)&&(this._parent=e),this._settings=t.extend({},r,i)}var i=e.prototype;return i.collapse=function(){var e=this;this._parent.children(a.CARD_BODY+", "+a.CARD_FOOTER).slideUp(this._settings.animationSpeed,(function(){e._parent.addClass(o.COLLAPSED)})),this._parent.find(this._settings.collapseTrigger+" ."+this._settings.collapseIcon).addClass(this._settings.expandIcon).removeClass(this._settings.collapseIcon);var i=t.Event(s.COLLAPSED);this._element.trigger(i,this._parent)},i.expand=function(){var e=this;this._parent.children(a.CARD_BODY+", "+a.CARD_FOOTER).slideDown(this._settings.animationSpeed,(function(){e._parent.removeClass(o.COLLAPSED)})),this._parent.find(this._settings.collapseTrigger+" ."+this._settings.expandIcon).addClass(this._settings.collapseIcon).removeClass(this._settings.expandIcon);var i=t.Event(s.EXPANDED);this._element.trigger(i,this._parent)},i.remove=function(){this._parent.slideUp();var e=t.Event(s.REMOVED);this._element.trigger(e,this._parent)},i.toggle=function(){this._parent.hasClass(o.COLLAPSED)?this.expand():this.collapse()},i.maximize=function(){this._parent.find(this._settings.maximizeTrigger+" ."+this._settings.maximizeIcon).addClass(this._settings.minimizeIcon).removeClass(this._settings.maximizeIcon),this._parent.css({height:this._parent.height(),width:this._parent.width(),transition:"all .15s"}).delay(150).queue((function(){t(this).addClass(o.MAXIMIZED),t("html").addClass(o.MAXIMIZED),t(this).hasClass(o.COLLAPSED)&&t(this).addClass(o.WAS_COLLAPSED),t(this).dequeue()}));var e=t.Event(s.MAXIMIZED);this._element.trigger(e,this._parent)},i.minimize=function(){this._parent.find(this._settings.maximizeTrigger+" ."+this._settings.minimizeIcon).addClass(this._settings.maximizeIcon).removeClass(this._settings.minimizeIcon),this._parent.css("cssText","height:"+this._parent[0].style.height+" !important;width:"+this._parent[0].style.width+" !important; transition: all .15s;").delay(10).queue((function(){t(this).removeClass(o.MAXIMIZED),t("html").removeClass(o.MAXIMIZED),t(this).css({height:"inherit",width:"inherit"}),t(this).hasClass(o.WAS_COLLAPSED)&&t(this).removeClass(o.WAS_COLLAPSED),t(this).dequeue()}));var e=t.Event(s.MINIMIZED);this._element.trigger(e,this._parent)},i.toggleMaximize=function(){this._parent.hasClass(o.MAXIMIZED)?this.minimize():this.maximize()},i._init=function(e){var i=this;this._parent=e,t(this).find(this._settings.collapseTrigger).click((function(){i.toggle()})),t(this).find(this._settings.maximizeTrigger).click((function(){i.toggleMaximize()})),t(this).find(this._settings.removeTrigger).click((function(){i.remove()}))},e._jQueryInterface=function(i){var n=t(this).data("lte.cardwidget"),s=t.extend({},r,t(this).data());n||(n=new e(t(this),s),t(this).data("lte.cardwidget","string"==typeof i?n:i)),"string"==typeof i&&i.match(/collapse|expand|remove|toggle|maximize|minimize|toggleMaximize/)?n[i]():"object"==typeof i&&n._init(t(this))},e}();return t(document).on("click",a.DATA_COLLAPSE,(function(e){e&&e.preventDefault(),l._jQueryInterface.call(t(this),"toggle")})),t(document).on("click",a.DATA_REMOVE,(function(e){e&&e.preventDefault(),l._jQueryInterface.call(t(this),"remove")})),t(document).on("click",a.DATA_MAXIMIZE,(function(e){e&&e.preventDefault(),l._jQueryInterface.call(t(this),"toggleMaximize")})),t.fn[e]=l._jQueryInterface,t.fn[e].Constructor=l,t.fn[e].noConflict=function(){return t.fn[e]=n,l._jQueryInterface},l}(jQuery),l=function(t){var e="CardRefresh",i=t.fn[e],n={LOADED:"loaded.lte.cardrefresh",OVERLAY_ADDED:"overlay.added.lte.cardrefresh",OVERLAY_REMOVED:"overlay.removed.lte.cardrefresh"},s={CARD:"card"},o={CARD:"."+s.CARD,DATA_REFRESH:'[data-card-widget="card-refresh"]'},a={source:"",sourceSelector:"",params:{},trigger:o.DATA_REFRESH,content:".card-body",loadInContent:!0,loadOnInit:!0,responseType:"",overlayTemplate:'<div class="overlay"><i class="fas fa-2x fa-sync-alt fa-spin"></i></div>',onLoadStart:function(){},onLoadDone:function(t){return t}},r=function(){function e(e,i){if(this._element=e,this._parent=e.parents(o.CARD).first(),this._settings=t.extend({},a,i),this._overlay=t(this._settings.overlayTemplate),e.hasClass(s.CARD)&&(this._parent=e),""===this._settings.source)throw new Error("Source url was not defined. Please specify a url in your CardRefresh source option.");this._init(),this._settings.loadOnInit&&this.load()}var i=e.prototype;return i.load=function(){this._addOverlay(),this._settings.onLoadStart.call(t(this)),t.get(this._settings.source,this._settings.params,function(e){this._settings.loadInContent&&(""!=this._settings.sourceSelector&&(e=t(e).find(this._settings.sourceSelector).html()),this._parent.find(this._settings.content).html(e)),this._settings.onLoadDone.call(t(this),e),this._removeOverlay()}.bind(this),""!==this._settings.responseType&&this._settings.responseType);var e=t.Event(n.LOADED);t(this._element).trigger(e)},i._addOverlay=function(){this._parent.append(this._overlay);var e=t.Event(n.OVERLAY_ADDED);t(this._element).trigger(e)},i._removeOverlay=function(){this._parent.find(this._overlay).remove();var e=t.Event(n.OVERLAY_REMOVED);t(this._element).trigger(e)},i._init=function(e){var i=this;t(this).find(this._settings.trigger).on("click",(function(){i.load()}))},e._jQueryInterface=function(i){var n=t(this).data("lte.cardrefresh"),s=t.extend({},a,t(this).data());n||(n=new e(t(this),s),t(this).data("lte.cardrefresh","string"==typeof i?n:i)),"string"==typeof i&&i.match(/load/)?n[i]():"object"==typeof i&&n._init(t(this))},e}();return t(document).on("click",o.DATA_REFRESH,(function(e){e&&e.preventDefault(),r._jQueryInterface.call(t(this),"load")})),t.fn[e]=r._jQueryInterface,t.fn[e].Constructor=r,t.fn[e].noConflict=function(){return t.fn[e]=i,r._jQueryInterface},r}(jQuery),d=function(t){var e="Dropdown",i=t.fn[e],n="ul.dropdown-menu",s='[data-toggle="dropdown"]',o={},a=function(){function e(t,e){this._config=e,this._element=t}return e.prototype.toggleSubmenu=function(){this._element.siblings().show().toggleClass("show"),this._element.next().hasClass("show")||this._element.parents(".dropdown-menu").first().find(".show").removeClass("show").hide(),this._element.parents("li.nav-item.dropdown.show").on("hidden.bs.dropdown",(function(e){t(".dropdown-submenu .show").removeClass("show").hide()}))},e._jQueryInterface=function(i){return this.each((function(){var n=t(this).data("lte.dropdown"),s=t.extend({},o,t(this).data());n||(n=new e(t(this),s),t(this).data("lte.dropdown",n)),"toggleSubmenu"===i&&n[i]()}))},e}();return t(n+" "+s).on("click",(function(e){e.preventDefault(),e.stopPropagation(),a._jQueryInterface.call(t(this),"toggleSubmenu")})),t.fn[e]=a._jQueryInterface,t.fn[e].Constructor=a,t.fn[e].noConflict=function(){return t.fn[e]=i,a._jQueryInterface},a}(jQuery),c=function(t){var e="Toasts",i=t.fn[e],n={INIT:"init.lte.toasts",CREATED:"created.lte.toasts",REMOVED:"removed.lte.toasts"},s="#toastsContainerTopRight",o="#toastsContainerTopLeft",a="#toastsContainerBottomRight",r="#toastsContainerBottomLeft",l="toasts-top-right",d="toasts-top-left",c="toasts-bottom-right",h="toasts-bottom-left",f="topRight",u="topLeft",g="bottomRight",p="bottomLeft",_={position:f,fixed:!0,autohide:!1,autoremove:!0,delay:1e3,fade:!0,icon:null,image:null,imageAlt:null,imageHeight:"25px",title:null,subtitle:null,close:!0,body:null,class:null},m=function(){function e(e,i){this._config=i,this._prepareContainer();var s=t.Event(n.INIT);t("body").trigger(s)}var i=e.prototype;return i.create=function(){var e=t('<div class="toast" role="alert" aria-live="assertive" aria-atomic="true"/>');e.data("autohide",this._config.autohide),e.data("animation",this._config.fade),this._config.class&&e.addClass(this._config.class),this._config.delay&&500!=this._config.delay&&e.data("delay",this._config.delay);var i=t('<div class="toast-header">');if(null!=this._config.image){var s=t("<img />").addClass("rounded mr-2").attr("src",this._config.image).attr("alt",this._config.imageAlt);null!=this._config.imageHeight&&s.height(this._config.imageHeight).width("auto"),i.append(s)}if(null!=this._config.icon&&i.append(t("<i />").addClass("mr-2").addClass(this._config.icon)),null!=this._config.title&&i.append(t("<strong />").addClass("mr-auto").html(this._config.title)),null!=this._config.subtitle&&i.append(t("<small />").html(this._config.subtitle)),1==this._config.close){var o=t('<button data-dismiss="toast" />').attr("type","button").addClass("ml-2 mb-1 close").attr("aria-label","Close").append('<span aria-hidden="true">&times;</span>');null==this._config.title&&o.toggleClass("ml-2 ml-auto"),i.append(o)}e.append(i),null!=this._config.body&&e.append(t('<div class="toast-body" />').html(this._config.body)),t(this._getContainerId()).prepend(e);var a=t.Event(n.CREATED);t("body").trigger(a),e.toast("show"),this._config.autoremove&&e.on("hidden.bs.toast",(function(){t(this).delay(200).remove();var e=t.Event(n.REMOVED);t("body").trigger(e)}))},i._getContainerId=function(){return this._config.position==f?s:this._config.position==u?o:this._config.position==g?a:this._config.position==p?r:void 0},i._prepareContainer=function(){if(0===t(this._getContainerId()).length){var e=t("<div />").attr("id",this._getContainerId().replace("#",""));this._config.position==f?e.addClass(l):this._config.position==u?e.addClass(d):this._config.position==g?e.addClass(c):this._config.position==p&&e.addClass(h),t("body").append(e)}this._config.fixed?t(this._getContainerId()).addClass("fixed"):t(this._getContainerId()).removeClass("fixed")},e._jQueryInterface=function(i,n){return this.each((function(){var s=t.extend({},_,n),o=new e(t(this),s);"create"===i&&o[i]()}))},e}();return t.fn[e]=m._jQueryInterface,t.fn[e].Constructor=m,t.fn[e].noConflict=function(){return t.fn[e]=i,m._jQueryInterface},m}(jQuery);t.CardRefresh=l,t.CardWidget=r,t.ControlSidebar=e,t.DirectChat=o,t.Dropdown=d,t.Layout=i,t.PushMenu=n,t.Toasts=c,t.TodoList=a,t.Treeview=s,Object.defineProperty(t,"__esModule",{value:!0})}));
//# sourceMappingURL=adminlte.min.js.map

/**
 * AdminLTE Demo Menu
 * ------------------
 * You should not use this file in production.
 * This file is for demo purposes only.
 */
(function ($) {
    'use strict'

    var $sidebar   = $('.control-sidebar')
    var $container = $('<div />', {
      class: 'p-3 control-sidebar-content'
    })

    $sidebar.append($container)

    var navbar_dark_skins = [
      'navbar-primary',
      'navbar-secondary',
      'navbar-info',
      'navbar-success',
      'navbar-danger',
      'navbar-indigo',
      'navbar-purple',
      'navbar-pink',
      'navbar-navy',
      'navbar-lightblue',
      'navbar-teal',
      'navbar-cyan',
      'navbar-dark',
      'navbar-gray-dark',
      'navbar-gray',
    ]

    var navbar_light_skins = [
      'navbar-light',
      'navbar-warning',
      'navbar-white',
      'navbar-orange',
    ]

    $container.append(
      '<h5>Customize AdminLTE</h5><hr class="mb-2"/>'
    )

    var $no_border_checkbox = $('<input />', {
      type   : 'checkbox',
      value  : 1,
      checked: $('.main-header').hasClass('border-bottom-0'),
      'class': 'mr-1'
    }).on('click', function () {
      if ($(this).is(':checked')) {
        $('.main-header').addClass('border-bottom-0')
      } else {
        $('.main-header').removeClass('border-bottom-0')
      }
    })
    var $no_border_container = $('<div />', {'class': 'mb-1'}).append($no_border_checkbox).append('<span>No Navbar border</span>')
    $container.append($no_border_container)

    var $text_sm_body_checkbox = $('<input />', {
      type   : 'checkbox',
      value  : 1,
      checked: $('body').hasClass('text-sm'),
      'class': 'mr-1'
    }).on('click', function () {
      if ($(this).is(':checked')) {
        $('body').addClass('text-sm')
      } else {
        $('body').removeClass('text-sm')
      }
    })
    var $text_sm_body_container = $('<div />', {'class': 'mb-1'}).append($text_sm_body_checkbox).append('<span>Body small text</span>')
    $container.append($text_sm_body_container)

    var $text_sm_header_checkbox = $('<input />', {
      type   : 'checkbox',
      value  : 1,
      checked: $('.main-header').hasClass('text-sm'),
      'class': 'mr-1'
    }).on('click', function () {
      if ($(this).is(':checked')) {
        $('.main-header').addClass('text-sm')
      } else {
        $('.main-header').removeClass('text-sm')
      }
    })
    var $text_sm_header_container = $('<div />', {'class': 'mb-1'}).append($text_sm_header_checkbox).append('<span>Navbar small text</span>')
    $container.append($text_sm_header_container)

    var $text_sm_sidebar_checkbox = $('<input />', {
      type   : 'checkbox',
      value  : 1,
      checked: $('.nav-sidebar').hasClass('text-sm'),
      'class': 'mr-1'
    }).on('click', function () {
      if ($(this).is(':checked')) {
        $('.nav-sidebar').addClass('text-sm')
      } else {
        $('.nav-sidebar').removeClass('text-sm')
      }
    })
    var $text_sm_sidebar_container = $('<div />', {'class': 'mb-1'}).append($text_sm_sidebar_checkbox).append('<span>Sidebar nav small text</span>')
    $container.append($text_sm_sidebar_container)

    var $text_sm_footer_checkbox = $('<input />', {
      type   : 'checkbox',
      value  : 1,
      checked: $('.main-footer').hasClass('text-sm'),
      'class': 'mr-1'
    }).on('click', function () {
      if ($(this).is(':checked')) {
        $('.main-footer').addClass('text-sm')
      } else {
        $('.main-footer').removeClass('text-sm')
      }
    })
    var $text_sm_footer_container = $('<div />', {'class': 'mb-1'}).append($text_sm_footer_checkbox).append('<span>Footer small text</span>')
    $container.append($text_sm_footer_container)

    var $flat_sidebar_checkbox = $('<input />', {
      type   : 'checkbox',
      value  : 1,
      checked: $('.nav-sidebar').hasClass('nav-flat'),
      'class': 'mr-1'
    }).on('click', function () {
      if ($(this).is(':checked')) {
        $('.nav-sidebar').addClass('nav-flat')
      } else {
        $('.nav-sidebar').removeClass('nav-flat')
      }
    })
    var $flat_sidebar_container = $('<div />', {'class': 'mb-1'}).append($flat_sidebar_checkbox).append('<span>Sidebar nav flat style</span>')
    $container.append($flat_sidebar_container)

    var $legacy_sidebar_checkbox = $('<input />', {
      type   : 'checkbox',
      value  : 1,
      checked: $('.nav-sidebar').hasClass('nav-legacy'),
      'class': 'mr-1'
    }).on('click', function () {
      if ($(this).is(':checked')) {
        $('.nav-sidebar').addClass('nav-legacy')
      } else {
        $('.nav-sidebar').removeClass('nav-legacy')
      }
    })
    var $legacy_sidebar_container = $('<div />', {'class': 'mb-1'}).append($legacy_sidebar_checkbox).append('<span>Sidebar nav legacy style</span>')
    $container.append($legacy_sidebar_container)

    var $compact_sidebar_checkbox = $('<input />', {
      type   : 'checkbox',
      value  : 1,
      checked: $('.nav-sidebar').hasClass('nav-compact'),
      'class': 'mr-1'
    }).on('click', function () {
      if ($(this).is(':checked')) {
        $('.nav-sidebar').addClass('nav-compact')
      } else {
        $('.nav-sidebar').removeClass('nav-compact')
      }
    })
    var $compact_sidebar_container = $('<div />', {'class': 'mb-1'}).append($compact_sidebar_checkbox).append('<span>Sidebar nav compact</span>')
    $container.append($compact_sidebar_container)

    var $child_indent_sidebar_checkbox = $('<input />', {
      type   : 'checkbox',
      value  : 1,
      checked: $('.nav-sidebar').hasClass('nav-child-indent'),
      'class': 'mr-1'
    }).on('click', function () {
      if ($(this).is(':checked')) {
        $('.nav-sidebar').addClass('nav-child-indent')
      } else {
        $('.nav-sidebar').removeClass('nav-child-indent')
      }
    })
    var $child_indent_sidebar_container = $('<div />', {'class': 'mb-1'}).append($child_indent_sidebar_checkbox).append('<span>Sidebar nav child indent</span>')
    $container.append($child_indent_sidebar_container)

    var $no_expand_sidebar_checkbox = $('<input />', {
      type   : 'checkbox',
      value  : 1,
      checked: $('.main-sidebar').hasClass('sidebar-no-expand'),
      'class': 'mr-1'
    }).on('click', function () {
      if ($(this).is(':checked')) {
        $('.main-sidebar').addClass('sidebar-no-expand')
      } else {
        $('.main-sidebar').removeClass('sidebar-no-expand')
      }
    })
    var $no_expand_sidebar_container = $('<div />', {'class': 'mb-1'}).append($no_expand_sidebar_checkbox).append('<span>Main Sidebar disable hover/focus auto expand</span>')
    $container.append($no_expand_sidebar_container)

    var $text_sm_brand_checkbox = $('<input />', {
      type   : 'checkbox',
      value  : 1,
      checked: $('.brand-link').hasClass('text-sm'),
      'class': 'mr-1'
    }).on('click', function () {
      if ($(this).is(':checked')) {
        $('.brand-link').addClass('text-sm')
      } else {
        $('.brand-link').removeClass('text-sm')
      }
    })
    var $text_sm_brand_container = $('<div />', {'class': 'mb-4'}).append($text_sm_brand_checkbox).append('<span>Brand small text</span>')
    $container.append($text_sm_brand_container)

    $container.append('<h6>Navbar Variants</h6>')

    var $navbar_variants        = $('<div />', {
      'class': 'd-flex'
    })
    var navbar_all_colors       = navbar_dark_skins.concat(navbar_light_skins)
    var $navbar_variants_colors = createSkinBlock(navbar_all_colors, function (e) {
      var color = $(this).data('color')
      var $main_header = $('.main-header')
      $main_header.removeClass('navbar-dark').removeClass('navbar-light')
      navbar_all_colors.map(function (color) {
        $main_header.removeClass(color)
      })

      if (navbar_dark_skins.indexOf(color) > -1) {
        $main_header.addClass('navbar-dark')
      } else {
        $main_header.addClass('navbar-light')
      }

      $main_header.addClass(color)
    })

    $navbar_variants.append($navbar_variants_colors)

    $container.append($navbar_variants)

    var sidebar_colors = [
      'bg-primary',
      'bg-warning',
      'bg-info',
      'bg-danger',
      'bg-success',
      'bg-indigo',
      'bg-lightblue',
      'bg-navy',
      'bg-purple',
      'bg-fuchsia',
      'bg-pink',
      'bg-maroon',
      'bg-orange',
      'bg-lime',
      'bg-teal',
      'bg-olive'
    ]

    var accent_colors = [
      'accent-primary',
      'accent-warning',
      'accent-info',
      'accent-danger',
      'accent-success',
      'accent-indigo',
      'accent-lightblue',
      'accent-navy',
      'accent-purple',
      'accent-fuchsia',
      'accent-pink',
      'accent-maroon',
      'accent-orange',
      'accent-lime',
      'accent-teal',
      'accent-olive'
    ]

    var sidebar_skins = [
      'sidebar-dark-primary',
      'sidebar-dark-warning',
      'sidebar-dark-info',
      'sidebar-dark-danger',
      'sidebar-dark-success',
      'sidebar-dark-indigo',
      'sidebar-dark-lightblue',
      'sidebar-dark-navy',
      'sidebar-dark-purple',
      'sidebar-dark-fuchsia',
      'sidebar-dark-pink',
      'sidebar-dark-maroon',
      'sidebar-dark-orange',
      'sidebar-dark-lime',
      'sidebar-dark-teal',
      'sidebar-dark-olive',
      'sidebar-light-primary',
      'sidebar-light-warning',
      'sidebar-light-info',
      'sidebar-light-danger',
      'sidebar-light-success',
      'sidebar-light-indigo',
      'sidebar-light-lightblue',
      'sidebar-light-navy',
      'sidebar-light-purple',
      'sidebar-light-fuchsia',
      'sidebar-light-pink',
      'sidebar-light-maroon',
      'sidebar-light-orange',
      'sidebar-light-lime',
      'sidebar-light-teal',
      'sidebar-light-olive'
    ]

    $container.append('<h6>Accent Color Variants</h6>')
    var $accent_variants = $('<div />', {
      'class': 'd-flex'
    })
    $container.append($accent_variants)
    $container.append(createSkinBlock(accent_colors, function () {
      var color         = $(this).data('color')
      var accent_class = color
      var $body      = $('body')
      accent_colors.map(function (skin) {
        $body.removeClass(skin)
      })

      $body.addClass(accent_class)
    }))

    $container.append('<h6>Dark Sidebar Variants</h6>')
    var $sidebar_variants_dark = $('<div />', {
      'class': 'd-flex'
    })
    $container.append($sidebar_variants_dark)
    $container.append(createSkinBlock(sidebar_colors, function () {
      var color         = $(this).data('color')
      var sidebar_class = 'sidebar-dark-' + color.replace('bg-', '')
      var $sidebar      = $('.main-sidebar')
      sidebar_skins.map(function (skin) {
        $sidebar.removeClass(skin)
      })

      $sidebar.addClass(sidebar_class)
    }))

    $container.append('<h6>Light Sidebar Variants</h6>')
    var $sidebar_variants_light = $('<div />', {
      'class': 'd-flex'
    })
    $container.append($sidebar_variants_light)
    $container.append(createSkinBlock(sidebar_colors, function () {
      var color         = $(this).data('color')
      var sidebar_class = 'sidebar-light-' + color.replace('bg-', '')
      var $sidebar      = $('.main-sidebar')
      sidebar_skins.map(function (skin) {
        $sidebar.removeClass(skin)
      })

      $sidebar.addClass(sidebar_class)
    }))

    var logo_skins = navbar_all_colors
    $container.append('<h6>Brand Logo Variants</h6>')
    var $logo_variants = $('<div />', {
      'class': 'd-flex'
    })
    $container.append($logo_variants)
    var $clear_btn = $('<a />', {
      href: 'javascript:void(0)'
    }).text('clear').on('click', function () {
      var $logo = $('.brand-link')
      logo_skins.map(function (skin) {
        $logo.removeClass(skin)
      })
    })
    $container.append(createSkinBlock(logo_skins, function () {
      var color = $(this).data('color')
      var $logo = $('.brand-link')
      logo_skins.map(function (skin) {
        $logo.removeClass(skin)
      })
      $logo.addClass(color)
    }).append($clear_btn))

    function createSkinBlock(colors, callback) {
      var $block = $('<div />', {
        'class': 'd-flex flex-wrap mb-3'
      })

      colors.map(function (color) {
        var $color = $('<div />', {
          'class': (typeof color === 'object' ? color.join(' ') : color).replace('navbar-', 'bg-').replace('accent-', 'bg-') + ' elevation-2'
        })

        $block.append($color)

        $color.data('color', color)

        $color.css({
          width       : '40px',
          height      : '20px',
          borderRadius: '25px',
          marginRight : 10,
          marginBottom: 10,
          opacity     : 0.8,
          cursor      : 'pointer'
        })

        $color.hover(function () {
          $(this).css({ opacity: 1 }).removeClass('elevation-2').addClass('elevation-4')
        }, function () {
          $(this).css({ opacity: 0.8 }).removeClass('elevation-4').addClass('elevation-2')
        })

        if (callback) {
          $color.on('click', callback)
        }
      })

      return $block
    }
  })(jQuery)


  //unknown

  $(document).ready(function(){
    $('form input[name="spouseName"]').prop("disabled", true);
$('form input[name="children"]').prop("disabled", true);

    $("form select").change(function(){
      if($(this).val() == 'Married'){
        $('form input[name="spouseName"]').removeAttr("disabled")
        $('form input[name="children"]').removeAttr("disabled")
        } else if($(this).val() == 'UnMarried'){
        	 $('form input[name="spouseName"]').prop("disabled", true)
        $('form input[name="children"]').prop("disabled", true)
        } else if($(this).val() == 'Male Widow' || 'FeMale Widow' || 'Divorcee'){
        $('form input[name="spouseName"]').prop("disabled", true);
        $('form input[name="children"]').removeAttr("disabled")
        }
    });


});

//javascript
$(document).ready(function() {
    $('#senrollNumber').prop('disabled', true);
    $('#sentotalMarks').prop('disabled', true);
    $('#senobtainedmarks').prop('disabled', true);
    $('#senpassingYear').prop('disabled', true);
    $('#twelfthMarksheetCopy').prop('disabled', true);

    //

    $('#twelfthClassStatus').change(function(){
        if($(this).val() == 'Passed'){
            $('#senboardName').prop('disabled', false);
            $('#senschoolName').prop('disabled', false);
            $('#senschoolAddress').prop('disabled', false);
            $('#streamOfStudyInSecondaryEducation').prop('disabled', false);
            $('#senrollNumber').prop('disabled', false);
            $('#sentotalMarks').prop('disabled', false);
            $('#senobtainedmarks').prop('disabled', false);
            $('#senpassingYear').prop('disabled', false);
        }else if($(this).val() == 'Not Studying'){
            $('#senboardName').prop('disabled', true);
            $('#senschoolName').prop('disabled', true);
            $('#senschoolAddress').prop('disabled', true);
            $('#streamOfStudyInSecondaryEducation').prop('disabled', true);
            $('#senrollNumber').prop('disabled', true);
            $('#sentotalMarks').prop('disabled', true);
            $('#senobtainedmarks').prop('disabled', true);
            $('#senpassingYear').prop('disabled', true);
        }else{
            $('#senboardName').prop('disabled', false);
            $('#senschoolName').prop('disabled', false);
            $('#senschoolAddress').prop('disabled', false);
            $('#streamOfStudyInSecondaryEducation').prop('disabled', false);
            $('#senrollNumber').prop('disabled', true);
            $('#sentotalMarks').prop('disabled', true);
            $('#senobtainedmarks').prop('disabled', true);
            $('#senpassingYear').prop('disabled', true);
            $('#twelfthMarksheetCopy').prop('disabled', true);
        }
    });
});


$(document).ready(function(){
                $('#finalYearRollNumberUg').prop('disabled',true);
                $('#finalyearmarsksheetUG').prop('disabled',true);
                $('#ugFinalYearObtainedMarks').prop('disabled',true);
                $('#ugFinalMarksheet').prop('disabled',true);
   //
   $("#underGraduationStatus").change(function() {
         if($(this).val() =='Passed'){
                $('#ugCollageName').prop('disabled',false);
                $('#ugUniversityName').prop('disabled',false);
                $('#streamOfStudyUg').prop('disabled',false);
                $('#ugCollageAddress').prop('disabled',false);
                $('#finalYearRollNumberUg').prop('disabled',false);
                $('#finalyearmarsksheetUG').prop('disabled',false);
                $('#ugFinalYearObtainedMarks').prop('disabled',false);
                $('#ugFinalMarksheet').prop('disabled',false);
         }else if($(this).val() == 'Not Studying'){
                $('#ugCollageName').prop('disabled',true);
                $('#ugUniversityName').prop('disabled',true);
                $('#streamOfStudyUg').prop('disabled',true);
                $('#ugCollageAddress').prop('disabled',true);
                $('#finalYearRollNumberUg').prop('disabled',true);
                $('#finalyearmarsksheetUG').prop('disabled',true);
                $('#ugFinalYearObtainedMarks').prop('disabled',true);
                $('#ugFinalMarksheet').prop('disabled',true);
         }else{
                $('#ugCollageName').prop('disabled',false);
                $('#ugUniversityName').prop('disabled',false);
                $('#streamOfStudyUg').prop('disabled',false);
                $('#ugCollageAddress').prop('disabled',false);
                $('#finalYearRollNumberUg').prop('disabled',true);
                $('#finalyearmarsksheetUG').prop('disabled',true);
                $('#ugFinalYearObtainedMarks').prop('disabled',true);
                $('#ugFinalMarksheet').prop('disabled',true);
         }
 });
});



$(document).ready(function(){
    $('#finalYearRollNumberPg').prop('disabled',true);
   $('#finalyearmarsksheetPG').prop('disabled',true);
   $('#pgFinalYearObtainedMarks').prop('disabled',true);
    $('#pgFinalMarksheet').prop('disabled',true);

   //
   $("#postGraduationStatus").change(function() {
         if($(this).val() =='Passed'){
            $('#pgCollageName').prop('disabled',false);
            $('#pgUniversityName').prop('disabled',false);
            $('#streamOfStudyPg').prop('disabled',false);
            $('#pgCollageAddress').prop('disabled',false);
            $('#finalYearRollNumberPg').prop('disabled',false);
            $('#finalyearmarsksheetPG').prop('disabled',false);
            $('#pgFinalYearObtainedMarks').prop('disabled',false);
            $('#pgFinalMarksheet').prop('disabled',false);
         }else if($(this).val() == 'Not Studying'){
            $('#pgCollageName').prop('disabled',true);
            $('#pgUniversityName').prop('disabled',true);
            $('#streamOfStudyPg').prop('disabled',true);
            $('#pgCollageAddress').prop('disabled',true);
            $('#finalYearRollNumberPg').prop('disabled',true);
            $('#finalyearmarsksheetPG').prop('disabled',true);
            $('#pgFinalYearObtainedMarks').prop('disabled',true);
            $('#pgFinalMarksheet').prop('disabled',true);
         }else{
            $('#pgCollageName').prop('disabled',false);
            $('#pgUniversityName').prop('disabled',false);
            $('#streamOfStudyPg').prop('disabled',false);
            $('#pgCollageAddress').prop('disabled',false);
            $('#finalYearRollNumberPg').prop('disabled',true);
            $('#finalyearmarsksheetPG').prop('disabled',true);
            $('#pgFinalYearObtainedMarks').prop('disabled',true);
            $('#pgFinalMarksheet').prop('disabled',true);
         }
 });
});
  //end
