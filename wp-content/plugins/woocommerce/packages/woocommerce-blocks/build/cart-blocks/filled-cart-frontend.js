(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[25],{224:function(e,t){},269:function(e,t,c){"use strict";c.d(t,"b",(function(){return o})),c.d(t,"a",(function(){return l}));var s=c(0),a=c(9),r=c(6),i=c.n(r);const n=Object(s.createContext)({hasContainerWidth:!1,containerClassName:"",isMobile:!1,isSmall:!1,isMedium:!1,isLarge:!1}),o=()=>Object(s.useContext)(n),l=e=>{let{children:t,className:c=""}=e;const[r,o]=(()=>{const[e,{width:t}]=Object(a.useResizeObserver)();let c="";return t>700?c="is-large":t>520?c="is-medium":t>400?c="is-small":t&&(c="is-mobile"),[e,c]})(),l={hasContainerWidth:""!==o,containerClassName:o,isMobile:"is-mobile"===o,isSmall:"is-small"===o,isMedium:"is-medium"===o,isLarge:"is-large"===o};return Object(s.createElement)(n.Provider,{value:l},Object(s.createElement)("div",{className:i()(c,o)},r,t))}},272:function(e,t,c){"use strict";var s=c(0),a=c(6),r=c.n(a),i=c(269);c(224),t.a=e=>{let{children:t,className:c}=e;return Object(s.createElement)(i.a,{className:r()("wc-block-components-sidebar-layout",c)},t)}},473:function(e,t,c){"use strict";c.r(t);var s=c(0),a=c(6),r=c.n(a),i=c(272),n=c(43),o=c(31),l=c(7),m=c(165);t.default=e=>{let{children:t,className:c}=e;const{cartItems:a,cartIsLoading:u,cartItemErrors:b}=Object(n.a)(),{hasDarkControls:d}=Object(m.b)(),{createErrorNotice:h,removeNotice:O}=Object(l.useDispatch)("core/notices");return Object(s.useEffect)(()=>{Object(l.select)("core/notices").getNotices("wc/cart").filter(e=>"error"===e.status&&"default"===e.type).map(e=>e.id).forEach(e=>{O(e,"wc/cart")}),b.forEach(e=>{h(Object(o.decodeEntities)(e.message),{isDismissible:!0,id:e.code,context:"wc/cart"})})},[h,b,O]),u||a.length>=1?Object(s.createElement)(i.a,{className:r()("wc-block-cart",c,{"has-dark-controls":d})},t):null}}}]);