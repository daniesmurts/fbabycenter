/*! modernizr 3.6.0 (Custom Build) | MIT *
 * https://modernizr.com/download/?-MessageChannel-audio-backgroundblendmode-backgroundcliptext-backgroundsize-bgpositionshorthand-bgpositionxy-bgrepeatspace_bgrepeatround-bgsizecover-borderimage-borderradius-boxsizing-canvas-contenteditable-cssall-cssanimations-filereader-filesystem-flexbox-fontface-formvalidation-hovermq-htmlimports-ie8compat-indexeddb-inputtypes-json-mediaqueries-objectfit-opacity-overflowscrolling-placeholder-scriptasync-search-sessionstorage-speechrecognition-speechsynthesis-srcdoc-svg-urlparser-urlsearchparams-videocrossorigin-xhr2-xhrresponsetypearraybuffer-xhrresponsetypeblob-xhrresponsetypejson-xhrresponsetypetext-setclasses !*/
!function(e,t,n){function r(e,t){return typeof e===t}function o(){var e,t,n,o,i,a,s;for(var d in S)if(S.hasOwnProperty(d)){if(e=[],t=S[d],t.name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(o=r(t.fn,"function")?t.fn():t.fn,i=0;i<e.length;i++)a=e[i],s=a.split("."),1===s.length?Modernizr[s[0]]=o:(!Modernizr[s[0]]||Modernizr[s[0]]instanceof Boolean||(Modernizr[s[0]]=new Boolean(Modernizr[s[0]])),Modernizr[s[0]][s[1]]=o),x.push((o?"":"no-")+s.join("-"))}}function i(e){var t=C.className,n=Modernizr._config.classPrefix||"";if(_&&(t=t.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(r,"$1"+n+"js$2")}Modernizr._config.enableClasses&&(t+=" "+n+e.join(" "+n),_?C.className.baseVal=t:C.className=t)}function a(){return"function"!=typeof t.createElement?t.createElement(arguments[0]):_?t.createElementNS.call(t,"http://www.w3.org/2000/svg",arguments[0]):t.createElement.apply(t,arguments)}function s(e){return e.replace(/([a-z])-([a-z])/g,function(e,t,n){return t+n.toUpperCase()}).replace(/^-/,"")}function d(e,t){if("object"==typeof e)for(var n in e)M(e,n)&&d(n,e[n]);else{e=e.toLowerCase();var r=e.split("."),o=Modernizr[r[0]];if(2==r.length&&(o=o[r[1]]),"undefined"!=typeof o)return Modernizr;t="function"==typeof t?t():t,1==r.length?Modernizr[r[0]]=t:(!Modernizr[r[0]]||Modernizr[r[0]]instanceof Boolean||(Modernizr[r[0]]=new Boolean(Modernizr[r[0]])),Modernizr[r[0]][r[1]]=t),i([(t&&0!=t?"":"no-")+r.join("-")]),Modernizr._trigger(e,t)}return Modernizr}function u(){var e=t.body;return e||(e=a(_?"svg":"body"),e.fake=!0),e}function l(e,n,r,o){var i,s,d,l,c="modernizr",f=a("div"),p=u();if(parseInt(r,10))for(;r--;)d=a("div"),d.id=o?o[r]:c+(r+1),f.appendChild(d);return i=a("style"),i.type="text/css",i.id="s"+c,(p.fake?p:f).appendChild(i),p.appendChild(f),i.styleSheet?i.styleSheet.cssText=e:i.appendChild(t.createTextNode(e)),f.id=c,p.fake&&(p.style.background="",p.style.overflow="hidden",l=C.style.overflow,C.style.overflow="hidden",C.appendChild(p)),s=n(f,e),p.fake?(p.parentNode.removeChild(p),C.style.overflow=l,C.offsetHeight):f.parentNode.removeChild(f),!!s}function c(e,t){return!!~(""+e).indexOf(t)}function f(e,t){return function(){return e.apply(t,arguments)}}function p(e,t,n){var o;for(var i in e)if(e[i]in t)return n===!1?e[i]:(o=t[e[i]],r(o,"function")?f(o,n||t):o);return!1}function m(e){return e.replace(/([A-Z])/g,function(e,t){return"-"+t.toLowerCase()}).replace(/^ms-/,"-ms-")}function g(t,n,r){var o;if("getComputedStyle"in e){o=getComputedStyle.call(e,t,n);var i=e.console;if(null!==o)r&&(o=o.getPropertyValue(r));else if(i){var a=i.error?"error":"log";i[a].call(i,"getComputedStyle returning null, its possible modernizr test results are inaccurate")}}else o=!n&&t.currentStyle&&t.currentStyle[r];return o}function v(t,r){var o=t.length;if("CSS"in e&&"supports"in e.CSS){for(;o--;)if(e.CSS.supports(m(t[o]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var i=[];o--;)i.push("("+m(t[o])+":"+r+")");return i=i.join(" or "),l("@supports ("+i+") { #modernizr { position: absolute; } }",function(e){return"absolute"==g(e,null,"position")})}return n}function y(e,t,o,i){function d(){l&&(delete U.style,delete U.modElem)}if(i=r(i,"undefined")?!1:i,!r(o,"undefined")){var u=v(e,o);if(!r(u,"undefined"))return u}for(var l,f,p,m,g,y=["modernizr","tspan","samp"];!U.style&&y.length;)l=!0,U.modElem=a(y.shift()),U.style=U.modElem.style;for(p=e.length,f=0;p>f;f++)if(m=e[f],g=U.style[m],c(m,"-")&&(m=s(m)),U.style[m]!==n){if(i||r(o,"undefined"))return d(),"pfx"==t?m:!0;try{U.style[m]=o}catch(h){}if(U.style[m]!=g)return d(),"pfx"==t?m:!0}return d(),!1}function h(e,t,n,o,i){var a=e.charAt(0).toUpperCase()+e.slice(1),s=(e+" "+j.join(a+" ")+a).split(" ");return r(t,"string")||r(t,"undefined")?y(s,t,o,i):(s=(e+" "+A.join(a+" ")+a).split(" "),p(s,t,n))}function b(e,t,r){return h(e,n,n,t,r)}function T(e,t){var n=e.deleteDatabase(t);n.onsuccess=function(){d("indexeddb.deletedatabase",!0)},n.onerror=function(){d("indexeddb.deletedatabase",!1)}}var x=[],S=[],w={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){S.push({name:e,fn:t,options:n})},addAsyncTest:function(e){S.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=w,Modernizr=new Modernizr,Modernizr.addTest("json","JSON"in e&&"parse"in JSON&&"stringify"in JSON),Modernizr.addTest("messagechannel","MessageChannel"in e),Modernizr.addTest("svg",!!t.createElementNS&&!!t.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect),Modernizr.addTest("ie8compat",!e.addEventListener&&!!t.documentMode&&7===t.documentMode),Modernizr.addTest("filereader",!!(e.File&&e.FileList&&e.FileReader)),Modernizr.addTest("xhr2","XMLHttpRequest"in e&&"withCredentials"in new XMLHttpRequest),Modernizr.addTest("speechsynthesis","SpeechSynthesisUtterance"in e),Modernizr.addTest("sessionstorage",function(){var e="modernizr";try{return sessionStorage.setItem(e,e),sessionStorage.removeItem(e),!0}catch(t){return!1}}),Modernizr.addTest("urlparser",function(){var e;try{return e=new URL("http://modernizr.com/"),"http://modernizr.com/"===e.href}catch(t){return!1}}),Modernizr.addTest("urlsearchparams","URLSearchParams"in e);var C=t.documentElement;Modernizr.addTest("cssall","all"in C.style);var _="svg"===C.nodeName.toLowerCase();Modernizr.addTest("audio",function(){var e=a("audio"),t=!1;try{t=!!e.canPlayType,t&&(t=new Boolean(t),t.ogg=e.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/,""),t.mp3=e.canPlayType('audio/mpeg; codecs="mp3"').replace(/^no$/,""),t.opus=e.canPlayType('audio/ogg; codecs="opus"')||e.canPlayType('audio/webm; codecs="opus"').replace(/^no$/,""),t.wav=e.canPlayType('audio/wav; codecs="1"').replace(/^no$/,""),t.m4a=(e.canPlayType("audio/x-m4a;")||e.canPlayType("audio/aac;")).replace(/^no$/,""))}catch(n){}return t}),Modernizr.addTest("canvas",function(){var e=a("canvas");return!(!e.getContext||!e.getContext("2d"))}),Modernizr.addTest("contenteditable",function(){if("contentEditable"in C){var e=a("div");return e.contentEditable=!0,"true"===e.contentEditable}}),Modernizr.addTest("bgpositionshorthand",function(){var e=a("a"),t=e.style,n="right 10px bottom 10px";return t.cssText="background-position: "+n+";",t.backgroundPosition===n}),Modernizr.addTest("placeholder","placeholder"in a("input")&&"placeholder"in a("textarea")),Modernizr.addTest("srcdoc","srcdoc"in a("iframe")),Modernizr.addTest("scriptasync","async"in a("script")),Modernizr.addTest("videocrossorigin","crossOrigin"in a("video"));var k=a("input"),P="search tel url email datetime date month week time datetime-local number range color".split(" "),E={};Modernizr.inputtypes=function(e){for(var r,o,i,a=e.length,s="1)",d=0;a>d;d++)k.setAttribute("type",r=e[d]),i="text"!==k.type&&"style"in k,i&&(k.value=s,k.style.cssText="position:absolute;visibility:hidden;",/^range$/.test(r)&&k.style.WebkitAppearance!==n?(C.appendChild(k),o=t.defaultView,i=o.getComputedStyle&&"textfield"!==o.getComputedStyle(k,null).WebkitAppearance&&0!==k.offsetHeight,C.removeChild(k)):/^(search|tel)$/.test(r)||(i=/^(url|email)$/.test(r)?k.checkValidity&&k.checkValidity()===!1:k.value!=s)),E[e[d]]=!!i;return E}(P);var z=function(){function e(e,t){var o;return e?(t&&"string"!=typeof t||(t=a(t||"div")),e="on"+e,o=e in t,!o&&r&&(t.setAttribute||(t=a("div")),t.setAttribute(e,""),o="function"==typeof t[e],t[e]!==n&&(t[e]=n),t.removeAttribute(e)),o):!1}var r=!("onblur"in t.documentElement);return e}();w.hasEvent=z,Modernizr.addTest("inputsearchevent",z("search"));var R=w._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):["",""];w._prefixes=R,Modernizr.addTest("opacity",function(){var e=a("a").style;return e.cssText=R.join("opacity:.55;"),/^0.55$/.test(e.opacity)});var L=function(e){if("undefined"==typeof XMLHttpRequest)return!1;var t=new XMLHttpRequest;t.open("get","/",!0);try{t.responseType=e}catch(n){return!1}return"response"in t&&t.responseType==e};Modernizr.addTest("xhrresponsetypearraybuffer",L("arraybuffer")),Modernizr.addTest("xhrresponsetypeblob",L("blob")),Modernizr.addTest("xhrresponsetypejson",L("json")),Modernizr.addTest("xhrresponsetypetext",L("text"));var M;!function(){var e={}.hasOwnProperty;M=r(e,"undefined")||r(e.call,"undefined")?function(e,t){return t in e&&r(e.constructor.prototype[t],"undefined")}:function(t,n){return e.call(t,n)}}(),w._l={},w.on=function(e,t){this._l[e]||(this._l[e]=[]),this._l[e].push(t),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},w._trigger=function(e,t){if(this._l[e]){var n=this._l[e];setTimeout(function(){var e,r;for(e=0;e<n.length;e++)(r=n[e])(t)},0),delete this._l[e]}},Modernizr._q.push(function(){w.addTest=d}),d("htmlimports","import"in a("link"));var N="Moz O ms Webkit",j=w._config.usePrefixes?N.split(" "):[];w._cssomPrefixes=j;var q=function(t){var r,o=R.length,i=e.CSSRule;if("undefined"==typeof i)return n;if(!t)return!1;if(t=t.replace(/^@/,""),r=t.replace(/-/g,"_").toUpperCase()+"_RULE",r in i)return"@"+t;for(var a=0;o>a;a++){var s=R[a],d=s.toUpperCase()+"_"+r;if(d in i)return"@-"+s.toLowerCase()+"-"+t}return!1};w.atRule=q;var A=w._config.usePrefixes?N.toLowerCase().split(" "):[];w._domPrefixes=A;var O=w.testStyles=l,$=function(){var e=navigator.userAgent,t=e.match(/w(eb)?osbrowser/gi),n=e.match(/windows phone/gi)&&e.match(/iemobile\/([0-9])+/gi)&&parseFloat(RegExp.$1)>=9;return t||n}();$?Modernizr.addTest("fontface",!1):O('@font-face {font-family:"font";src:url("https://")}',function(e,n){var r=t.getElementById("smodernizr"),o=r.sheet||r.styleSheet,i=o?o.cssRules&&o.cssRules[0]?o.cssRules[0].cssText:o.cssText||"":"",a=/src/i.test(i)&&0===i.indexOf(n.split(" ")[0]);Modernizr.addTest("fontface",a)}),Modernizr.addTest("formvalidation",function(){var t=a("form");if(!("checkValidity"in t&&"addEventListener"in t))return!1;if("reportValidity"in t)return!0;var n,r=!1;return Modernizr.formvalidationapi=!0,t.addEventListener("submit",function(t){(!e.opera||e.operamini)&&t.preventDefault(),t.stopPropagation()},!1),t.innerHTML='<input name="modTest" required="required" /><button></button>',O("#modernizr form{position:absolute;top:-99999em}",function(e){e.appendChild(t),n=t.getElementsByTagName("input")[0],n.addEventListener("invalid",function(e){r=!0,e.preventDefault(),e.stopPropagation()},!1),Modernizr.formvalidationmessage=!!n.validationMessage,t.getElementsByTagName("button")[0].click()}),r});var B=function(){var t=e.matchMedia||e.msMatchMedia;return t?function(e){var n=t(e);return n&&n.matches||!1}:function(t){var n=!1;return l("@media "+t+" { #modernizr { position: absolute; } }",function(t){n="absolute"==(e.getComputedStyle?e.getComputedStyle(t,null):t.currentStyle).position}),n}}();w.mq=B,Modernizr.addTest("mediaqueries",B("only all")),Modernizr.addTest("hovermq",B("(hover)"));var V={elem:a("modernizr")};Modernizr._q.push(function(){delete V.elem});var U={style:V.elem.style};Modernizr._q.unshift(function(){delete U.style}),w.testAllProps=h,w.testAllProps=b,Modernizr.addTest("cssanimations",b("animationName","a",!0)),Modernizr.addTest("bgpositionxy",function(){return b("backgroundPositionX","3px",!0)&&b("backgroundPositionY","5px",!0)}),Modernizr.addTest("backgroundsize",b("backgroundSize","100%",!0)),Modernizr.addTest("bgsizecover",b("backgroundSize","cover")),Modernizr.addTest("borderradius",b("borderRadius","0px",!0)),Modernizr.addTest("flexbox",b("flexBasis","1px",!0)),Modernizr.addTest("overflowscrolling",b("overflowScrolling","touch",!0));var H=w.prefixed=function(e,t,n){return 0===e.indexOf("@")?q(e):(-1!=e.indexOf("-")&&(e=s(e)),t?h(e,t,n):h(e,"pfx"))};Modernizr.addAsyncTest(function(){var t;try{t=H("indexedDB",e)}catch(n){}if(t){var r="modernizr-"+Math.random(),o=t.open(r);o.onerror=function(){o.error&&"InvalidStateError"===o.error.name?d("indexeddb",!1):(d("indexeddb",!0),T(t,r))},o.onsuccess=function(){d("indexeddb",!0),T(t,r)}}else d("indexeddb",!1)}),Modernizr.addTest("backgroundblendmode",H("backgroundBlendMode","text")),Modernizr.addTest("objectfit",!!H("objectFit"),{aliases:["object-fit"]}),Modernizr.addTest("filesystem",!!H("requestFileSystem",e)),Modernizr.addTest("speechrecognition",!!H("SpeechRecognition",e)),Modernizr.addTest("backgroundcliptext",function(){return b("backgroundClip","text")}),Modernizr.addTest("bgrepeatround",b("backgroundRepeat","round")),Modernizr.addTest("bgrepeatspace",b("backgroundRepeat","space")),Modernizr.addTest("borderimage",b("borderImage","url() 1",!0)),Modernizr.addTest("boxsizing",b("boxSizing","border-box",!0)&&(t.documentMode===n||t.documentMode>7)),o(),i(x),delete w.addTest,delete w.addAsyncTest;for(var I=0;I<Modernizr._q.length;I++)Modernizr._q[I]();e.Modernizr=Modernizr}(window,document);