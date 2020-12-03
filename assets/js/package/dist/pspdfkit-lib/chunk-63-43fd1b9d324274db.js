/*! For license information please see chunk-63-43fd1b9d324274db.js.LICENSE.txt */
/*!
 * PSPDFKit for Web 2020.6.1 (https://pspdfkit.com/web)
 * 
 * Copyright (c) 2016-2019 PSPDFKit GmbH. All rights reserved.
 * 
 * THIS SOURCE CODE AND ANY ACCOMPANYING DOCUMENTATION ARE PROTECTED BY INTERNATIONAL COPYRIGHT LAW
 * AND MAY NOT BE RESOLD OR REDISTRIBUTED. USAGE IS BOUND TO THE PSPDFKIT LICENSE AGREEMENT.
 * UNAUTHORIZED REPRODUCTION OR DISTRIBUTION IS SUBJECT TO CIVIL AND CRIMINAL PENALTIES.
 * This notice may not be removed from this file.
 * 
 * PSPDFKit uses several open source third-party components: https://pspdfkit.com/acknowledgements/web/
 */
(window.__PSPDFKitChunk=window.__PSPDFKitChunk||[]).push([[63],{918:function(e,t,a){"use strict";a.r(t);var n=a(20),r=a.n(n),o=a(7),i=a.n(o),l=a(33),s=a.n(l),c=a(16),u=a.n(c),d=a(1),f=a.n(d),g=a(26),m=a.n(g),p=a(482),v=a(15),b=a(2),y=a(214),h=a(35),P=a(138),I=a(31),w=a(61),O=a(6),x=a(3),E=a(30),N=a(0),k=a(13),C=a.n(k),D=a(14),j=a(484),S=a(56),M=a(105),A=a(161);function z(e,t){var a;if("undefined"==typeof Symbol||null==e[Symbol.iterator]){if(Array.isArray(e)||(a=function(e,t){if(!e)return;if("string"==typeof e)return B(e,t);var a=Object.prototype.toString.call(e).slice(8,-1);"Object"===a&&e.constructor&&(a=e.constructor.name);if("Map"===a||"Set"===a)return Array.from(e);if("Arguments"===a||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(a))return B(e,t)}(e))||t&&e&&"number"==typeof e.length){a&&(e=a);var n=0,r=function(){};return{s:r,n:function(){return n>=e.length?{done:!0}:{done:!1,value:e[n++]}},e:function(e){throw e},f:r}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var o,i=!0,l=!1;return{s:function(){a=e[Symbol.iterator]()},n:function(){var e=a.next();return i=e.done,e},e:function(e){l=!0,o=e},f:function(){try{i||null==a.return||a.return()}finally{if(l)throw o}}}}function B(e,t){(null==t||t>e.length)&&(t=e.length);for(var a=0,n=new Array(t);a<t;a++)n[a]=e[a];return n}function R(e,t){var a=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),a.push.apply(a,n)}return a}function T(e){for(var t=1;t<arguments.length;t++){var a=null!=arguments[t]?arguments[t]:{};t%2?R(Object(a),!0).forEach((function(t){f()(e,t,a[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(a)):R(Object(a)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(a,t))}))}return e}var K=new x.O({width:v.b,height:v.a}),L=N.createElement(M.a,null),F=function(e){var t=e.styles,n=e.formatMessage,r=e.movePreview;return N.createElement("div",{style:{width:e.width,height:e.height},className:C()(t.importedDocument,f()({},t.importedDocumentMovePreview,r))},N.createElement("div",{className:t.importedDocumentIconCircle},N.createElement(S.a,{src:a(511)})),N.createElement("span",{className:t.importedDocumentInfo},n(_.documentMergedHere)))},H=function(e,t,a,n){var r,o=t.flatten(),i=e.map((function(e){return{type:"page",page:e,rotation:0,label:e.pageLabel}})),l=function(e){var t,a=e.dupeOf||e.label,n=0,r=z(i);try{for(r.s();!(t=r.n()).done;){var o=t.value;null!=o.dupeOf&&o.dupeOf===a&&null!=o.dupeNumber&&o.dupeNumber>n&&(n=o.dupeNumber)}}catch(e){r.e(e)}finally{r.f()}return n+1},s=0,c=z(o);try{for(c.s();!(r=c.n()).done;){var u=r.value;switch(u.type){case"addPage":var d=void 0;null!=u.afterPageIndex?d=u.afterPageIndex+1:(Object(b.i)(null!=u.beforePageIndex),d=u.beforePageIndex),++s,i=i.insert(d,{type:"newPage",label:"".concat(a(_.newPage)," ").concat(s),rotation:0,size:new x.O({width:u.pageWidth,height:u.pageHeight})});break;case"removePages":var f,g=z(u.pageIndexes.map((function(e){return i.get(e)})));try{for(g.s();!(f=g.n()).done;){var m=f.value;Object(b.i)(null!=m);var p=i.indexOf(m);i=i.delete(p)}}catch(e){g.e(e)}finally{g.f()}break;case"rotatePages":var v,y=z(u.pageIndexes);try{for(y.s();!(v=y.n()).done;){var h=v.value,P=i.get(h);Object(b.i)(null!=P);var I=void 0,w=void 0;Object(b.i)("page"===P.type||"newPage"===P.type);var O=P.rotation;if(w=90===u.rotateBy?270===O?0:O+u.rotateBy:90===O?0:180===O?90:270===O?180:O+u.rotateBy,Object(b.i)(0===w||90===w||180===w||270===w),"page"===P.type)I=T(T({},P),{},{rotation:w});else{if("newPage"!=P.type)throw new b.a("Rotation is not allowed on imported documents");I=T(T({},P),{},{rotation:w})}i=i.set(h,I)}}catch(e){y.e(e)}finally{y.f()}break;case"duplicatePages":var E,N=z(u.pageIndexes.map((function(e){return i.get(e)})));try{for(N.s();!(E=N.n()).done;){var k=E.value;Object(b.i)(null!=k),Object(b.i)("page"===k.type);var C=l(k),D=k.dupeOf||k.label,j=i.indexOf(k);i=i.insert(j+1,Object.assign({},k,{label:"".concat(D," (").concat(C,")"),dupeOf:D,dupeNumber:C}))}}catch(e){N.e(e)}finally{N.f()}break;case"movePages":var S=u.pageIndexes;if(1===S.length){var M=S[0],A=void 0;null!=u.beforePageIndex?A=u.beforePageIndex:(Object(b.i)(null!=u.afterPageIndex),A=u.afterPageIndex+1);var B=i.get(M);Object(b.i)(null!=B);var R=i.get(A),K=i.size;i=i.delete(M),A===K?i=i.push(B):0===A?i=i.unshift(B):(Object(b.i)(null!=R),i=i.insert(i.indexOf(R),B))}else{var L=S.slice().sort();if(null!=u.beforePageIndex){Object(b.i)(0===u.beforePageIndex);var F,H=z(L.map((function(e){return i.get(e)})).reverse());try{for(H.s();!(F=H.n()).done;){var W=F.value;Object(b.i)(null!=W),i=(i=i.delete(i.indexOf(W))).unshift(W)}}catch(e){H.e(e)}finally{H.f()}}else{Object(b.i)(null!=u.afterPageIndex);var V=i.get(u.afterPageIndex);Object(b.i)(null!=V);var G,U=z(L.map((function(e){return i.get(e)})).reverse());try{for(U.s();!(G=U.n()).done;){var Y=G.value;Object(b.i)(null!=Y),i=(i=i.delete(i.indexOf(Y))).insert(i.indexOf(V)+1,Y)}}catch(e){U.e(e)}finally{U.f()}}}break;case"importDocument":var q=void 0;null!=u.beforePageIndex?q=u.beforePageIndex:(Object(b.i)(null!=u.afterPageIndex),q=u.afterPageIndex+1);var J=void 0;if("string"==typeof u.document){var X=u.document;Object(b.i)(n.has(X)),J=n.get(X,"Imported Document")}else Object(b.i)("string"==typeof u.document.name),J=u.document.name;i=i.insert(q,{type:"importedDocument",label:J});break;case"keepPages":case"applyInstantJson":case"applyXfdf":case"flattenAnnotations":throw Error("Unknown document operation");default:Object(b.b)(u.type)}}}catch(e){c.e(e)}finally{c.f()}return i},W=function(e){var t=e.pages,a=e.style,n=e.styles;return N.createElement("div",{className:n.movePreview},N.createElement("div",{className:C()(n.movePreviewPages,f()({},n.movePreviewPagesLoose,"loose"===a))},t),N.createElement("div",{className:n.movePreviewCount},t.length))};t.default=Object(P.c)((function(e){var t,n,o=e.onCancel,l=e.pages,c=e.dispatch,d=e.backend,g=e.frameWindow,P=e.intl.formatMessage,I=e.onDialog,k=e.CSS_HACK.styles,M=N.useState(Object(O.b)()),B=m()(M,2),R=B[0],V=(B[1],N.useState(Object(O.a)())),G=m()(V,2),U=G[0],Y=G[1],q=N.useState(0),J=m()(q,2),X=J[0],$=J[1],Q=U.slice(0,U.size-X),Z=H(e.pages,Q,P,R),ee=N.useState(Object(O.g)()),te=m()(ee,2),ae=te[0],ne=te[1],re=N.useState(!1),oe=m()(re,2),ie=oe[0],le=oe[1],se=N.useState(!1),ce=m()(se,2),ue=ce[0],de=ce[1],fe=N.useRef(null),ge=N.useRef(null),me=N.useState(!1),pe=m()(me,2),ve=pe[0],be=pe[1],ye=N.useState(""),he=m()(ye,2),Pe=he[0],Ie=he[1],we=N.useCallback((function(e){be(e);var t=ge.current;null!=t&&t.focus(),I(e)}),[I]),Oe=N.useCallback((function(e){Y(Q.push(e)),$(0)}),[Q]),xe=N.useRef(!0);N.useLayoutEffect((function(){return function(){xe.current&&(xe.current=!1)}}),[]);var Ee=N.useCallback((function(){var e=l.get(0),t=e?e.pageSize:K,a={type:"addPage",backgroundColor:x.j.WHITE,pageWidth:t.width,pageHeight:t.height,rotateBy:0};1===ae.size?a.afterPageIndex=ae.first():a.beforePageIndex=0,Oe(a),ne(ae.clear())}),[l,ae,Oe]),Ne=N.useCallback((function(){Oe({type:"removePages",pageIndexes:ae.toArray()}),ne(ae.clear())}),[Oe,ae]),ke=N.useCallback((function(){Oe({type:"duplicatePages",pageIndexes:ae.toArray()}),ne(ae.clear())}),[Oe,ae]),Ce=N.useCallback((function(){Oe({type:"rotatePages",pageIndexes:ae.toArray(),rotateBy:270})}),[Oe,ae]),De=N.useCallback((function(){Oe({type:"rotatePages",pageIndexes:ae.toArray(),rotateBy:90})}),[Oe,ae]),je=N.useCallback((function(){we(!ve)}),[ve,we]),Se=N.useCallback((function(e){var t=e.target.value,a=t,n=parseInt(t,10);isNaN(n)||(a=Math.min(Math.max(n,0),Z.size).toString()),Ie(a)}),[Z.size]),Me=parseInt(Pe,10),Ae=N.useCallback((function(e){var t;return 1===e.size||null==e.sort().find((function(e){var a=!1;return null!=t&&(a=e!==t+1),t=e,a}))}),[]),ze=N.useCallback((function(e,t){var a=null!=t?t:ae,n=Ae(a);return!(a.includes(e-1)||0===e&&n&&a.includes(0)||n&&a.sort().first()===e)}),[ae,Ae]),Be=!isNaN(Me)&&ze(Me),Re=N.useCallback((function(e,t){var a=null!=t?t:ae,n=e-1;Oe(T({type:"movePages",pageIndexes:a.toArray()},0===e?{beforePageIndex:0}:{afterPageIndex:n}));var r=Object(O.g)(),o=0;0!==e&&(o=n+1,a.forEach((function(e){e<n&&--o})));var i=o;a.forEach((function(){r=r.add(i),++i})),ne(r)}),[ae,Oe,ne]),Te=N.useCallback((function(e){e.preventDefault(),Be&&(Re(Me),we(!1))}),[Be,Me,we,Re]),Ke=N.useCallback((function(e){var t=e.target;if(ve&&!t.classList.contains(k.moveToolbarButton)){var a=fe.current;Object(b.i)(null!=a),a.contains(t)||we(!1)}}),[ve,we,k.moveToolbarButton]),Le=N.useCallback((function(){var e=ae.sort().toList().map((function(e){return{type:"movePages",pageIndexes:[e],beforePageIndex:e-1}}));Oe(e),ne(Object(O.g)(ae.toArray().map((function(e){return e-1}))))}),[Oe,ae]),Fe=N.useCallback((function(){var e=ae.sort().toList().map((function(e){return{type:"movePages",pageIndexes:[e],afterPageIndex:e+1}}));Oe(e),ne(Object(O.g)(ae.toArray().map((function(e){return e+1}))))}),[Oe,ae]),He=N.useCallback((function(){ne(ae.clear()),$(X+1)}),[ae,X]),We=N.useCallback((function(){ne(ae.clear()),$(X-1)}),[ae,X]),_e=N.useCallback(u()(i.a.mark((function e(){var t,a;return i.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:t={},1===ae.size?t.afterPageIndex=ae.first():t.beforePageIndex=0,(a=document.createElement("input")).type="file",a.accept="application/pdf",a.onclick=function(e){e.target.value=""},a.onchange=function(e){if(0!==e.target.files.length){var a,n=Q,r=z(e.target.files);try{var o=function(){var e=a.value;return"string"!=typeof e.name||0===e.name.length?{v:void 0}:"application/pdf"!==e.type?(Object(b.m)("The uploaded file must be a PDF."),{v:void 0}):-1!==Z.findIndex((function(t){return"importedDocument"===t.type&&t.label===e.name}))?{v:void 0}:void(n=n.push(T({type:"importDocument",treatImportedDocumentAsOnePage:!0,document:e},t)))};for(r.s();!(a=r.n()).done;){var i=o();if("object"===s()(i))return i.v}}catch(e){r.e(e)}finally{r.f()}Y(n),$(0),ne(ae.clear())}},a.click();case 8:case"end":return e.stop()}}),e)}))),[ae,R,Oe,Q,Z]),Ve=N.useCallback((function(){ne(Z.keySeq().toSet())}),[Z,ne]),Ge=N.useCallback((function(){ne(ae.clear())}),[ae,ne]),Ue=N.useCallback((function(e){ae.has(e)?ne(ae.delete(e)):ne(ae.add(e))}),[ae,ne]),Ye=N.useCallback((function(){o()}),[o]),qe=N.useCallback((function(){le(!0),c(Object(y.a)(Q.flatten().toArray(),(function(){xe.current&&le(!1)}),(function(e){throw xe.current&&le(!1),e})))}),[c,Q]),Je=N.useCallback(u()(i.a.mark((function e(){var t;return i.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return le(!0),e.prev=1,e.next=4,d.exportPDFWithOperations(Q.flatten().toArray().map(E.q));case 4:t=e.sent,Object(w.e)(t,g),e.next=11;break;case 8:throw e.prev=8,e.t0=e.catch(1),e.t0;case 11:return e.prev=11,xe.current&&le(!1),e.finish(11);case 14:case"end":return e.stop()}}),e,null,[[1,8,11,14]])}))),[d,Q,g]),Xe=function(e,t,a,n){var r,o=Z.get(e);switch(Object(b.i)(null!=o),o.type){case"page":r=N.createElement(p.b,{key:"page-".concat(o.label),page:o.page,size:t,maxSize:a,rotation:o.rotation});break;case"newPage":var i=Object(p.a)(o.size,o.rotation,t,a),l=i.rotatedWidth,s=i.rotatedHeight;r=N.createElement("div",{key:"newPage-".concat(o.label),className:k.newPage,style:{width:l,height:s}});break;case"importedDocument":var c=Object(p.a)(K,0,t,a),u=c.containerWidth,d=c.containerHeight;r=N.createElement(F,{width:u,height:d,movePreview:n,key:"importedDoc-".concat(o.label),styles:k,formatMessage:P});break;default:r=N.createElement(N.Fragment,null),Object(b.b)(o.type)}return{item:r,label:o.label}},$e=ae.size>0&&ae.size!==Z.size&&!ie,Qe=ae.size>0&&void 0===ae.find((function(e){var t=Z.get(e);return Object(b.i)(null!=t),"page"!==t.type&&"newPage"!==t.type})),Ze=ae.size>0&&void 0===ae.find((function(e){var t=Z.get(e);return Object(b.i)(null!=t),"page"!==t.type})),et=!ae.isEmpty()&&ae.size!==Z.size&&!ie,tt=!ae.isEmpty()&&!ae.includes(0),at=!ae.isEmpty()&&!ae.includes(Z.size-1),nt=X<U.size,rt=X>0,ot=ae.size<Z.size&&!ie,it=!ae.isEmpty()&&!ie,lt=N.useRef(null),st=N.useRef(!1);N.useLayoutEffect((function(){var e=lt.current;if(null!=e){st.current||(e.focus(),st.current=!0);var t=function(e){if((null==document.activeElement||"INPUT"!==document.activeElement.tagName)&&!ie){var t=e.key.toLowerCase(),a=e.metaKey||e.ctrlKey,n=a&&!e.shiftKey&&!e.altKey,r=e.altKey&&!a&&!e.shiftKey,o=!a&&!e.shiftKey&&!e.altKey;if(e.altKey&&e.shiftKey&&!a&&"arrowleft"===t&&Qe)Ce();else if(e.altKey&&e.shiftKey&&!a&&"arrowright"===t&&Qe)De();else if(r&&"arrowleft"===t&&tt)Le();else if(r&&"arrowright"===t&&at)Fe();else if(a&&e.shiftKey&&!e.altKey&&"z"===t&&rt)We();else if(n&&"z"===t&&nt)He();else if(n&&"a"===t&&ot)Ve();else if(n&&"d"===t&&it)Ge();else if(o&&"n"===t)Ee();else if(o&&"d"===t&&$e)Ne();else if(o&&"c"===t&&Ze)ke();else if(o&&"l"===t&&Qe)Ce();else if(o&&"r"===t&&Qe)De();else if(o&&"m"===t&&et)we(!0);else{if(!o||"i"!==t)return;_e()}e.preventDefault()}};return e.addEventListener("keydown",t),function(){e.removeEventListener("keydown",t)}}}),[Ze,et,tt,at,rt,$e,Qe,ot,it,nt,Ee,ke,_e,Le,Fe,We,Ne,Ce,De,Ve,Ge,He,ie,we]);var ct=k.toolbar.toolbarButton,ut=N.useMemo((function(){return[{type:"editor/add",onPress:Ee,className:ct,disabled:ie,children:P(_.newPage)},{type:"editor/remove",onPress:Ne,className:ct,disabled:!$e,children:P(_.removePage)},{type:"editor/duplicate",onPress:ke,className:ct,children:P(_.duplicatePage),disabled:!Ze||ie},{type:"editor/rotateLeft",onPress:Ce,className:ct,children:P(_.rotatePageLeft),disabled:!Qe||ie},{type:"editor/rotateRight",onPress:De,className:ct,children:P(_.rotatePageRight),disabled:!Qe||ie},{type:"editor/move",onPress:je,className:C()(ct,k.moveToolbarButton),children:P(_.openMoveDialog),disabled:!et},{type:"editor/moveLeft",onPress:Le,className:k.toolbar.toolbarButton,children:P(_.moveBefore),disabled:!tt||ie},{type:"editor/moveRight",onPress:Fe,className:ct,children:P(_.moveAfter),disabled:!at||ie},{type:"editor/importDocument",onPress:_e,className:ct,children:P(_.mergeDocument),disabled:ie},{type:"spacer"},{type:"editor/undo",onPress:He,className:ct,children:P(D.a.undo),disabled:!nt||ie},{type:"editor/redo",onPress:We,className:ct,children:P(D.a.redo),disabled:!rt||ie},{type:"editor/selectAll",onPress:Ve,className:ct,children:P(_.selectAll),disabled:!ot},{type:"editor/selectNone",onPress:Ge,className:ct,children:P(_.selectNone),disabled:!it}]}),[Ee,ct,ie,P,Ne,$e,ke,Ze,Ce,Qe,De,je,k.moveToolbarButton,k.toolbar.toolbarButton,et,Le,tt,Fe,at,_e,He,nt,We,rt,Ve,ot,Ge,it]),dt=N.useState(Number.POSITIVE_INFINITY),ft=m()(dt,2),gt=ft[0],mt=ft[1],pt=N.useMemo((function(){return gt===Number.POSITIVE_INFINITY?[ut,[]]:[ut.slice(0,gt),ut.slice(gt).filter((function(e){return"spacer"!==e.type})).map((function(e,t){return{index:t,item:T(T({},e),{},{dropdownGroup:"documentEditor"})}}))]}),[ut,gt]),vt=m()(pt,2),bt=vt[0],yt=vt[1],ht=N.useState(new x.O),Pt=m()(ht,2),It=Pt[0],wt=Pt[1],Ot=N.useCallback((function(e){mt(Number.POSITIVE_INFINITY),wt(new x.O({width:e.width,height:e.height}))}),[wt,mt]),xt=N.useRef(null);N.useLayoutEffect((function(){var e=xt.current;if(e&&0!==It.width){var t=e.children;if(t.length!==gt){var a=e.ownerDocument.defaultView.getComputedStyle(e),n=44+(parseInt(a.getPropertyValue("padding-left"))||0)+(parseInt(a.getPropertyValue("padding-right"))||0),r=[].findIndex.call(t,(function(e,t){return"spacer"!==ut[t].type&&(n+=e.clientWidth)>It.width}));mt(-1===r?Number.POSITIVE_INFINITY:r),e.ownerDocument.defaultView.innerWidth>=v.e?de(!0):de(!1)}}}),[It,gt,mt,ut]);var Et,Nt=null!=bt.find((function(e){return"editor/move"===e.type})),kt=N.useCallback((function(e){"Escape"===e.key&&ve&&(we(!1),e.stopPropagation())}),[ve,we]),Ct=N.createElement("div",{className:C()(k.moveDialog,(t={},f()(t,k.moveDialogShown,ve),f()(t,k.moveDialogDetached,!Nt),t)),ref:fe},N.createElement("form",{onSubmit:Te,className:k.moveDialogForm},N.createElement("span",{className:k.moveDialogFormLabel},P(_.insertAfterPage)),N.createElement("input",{className:k.moveDialogFormInput,type:"number",min:"0",max:Z.size,value:Pe,onChange:Se,ref:ge}),N.createElement(h.b,{type:"submit",className:k.moveDialogMoveButton,disabled:!Be},P(_.move))),N.createElement("div",{className:k.moveDialogHint},N.createElement("p",{className:k.moveDialogHintText},P(_.moveBeginningHint)))),Dt=N.useState(null),jt=m()(Dt,2),St=jt[0],Mt=jt[1],At=N.useState(Object(O.g)()),zt=m()(At,2),Bt=zt[0],Rt=zt[1],Tt=N.useCallback((function(e){if(null==e.beforePageIndex&&null==e.afterPageIndex)Mt(null);else{var t=e.beforePageIndex,a=e.afterPageIndex,n=e.firstInRow;Mt({beforePageIndex:t,afterPageIndex:a,firstInRow:n})}var r=e.dragState;null!=r&&("singleUnselected"===r.origin?(Object(b.i)(null!=r.page),Rt(Object(O.g)([r.page]))):Rt(ae))}),[Mt,ae]);if(null!=St){var Kt=St.beforePageIndex,Lt=St.afterPageIndex;null!=Kt&&0===Kt?Et=0:null!=Kt?Et=Kt:(Object(b.i)(null!=Lt),Et=Lt+1)}var Ft,Ht=null!=Et&&ze(Et,Bt),Wt=N.useCallback((function(){Ht&&(Object(b.i)(null!=Et),Re(Et,Bt),Mt(null))}),[Et,Re,Ht,Bt]),_t=N.useCallback((function(){Mt(null)}),[Mt]),Vt=ve&&!isNaN(Me);if(Vt||null!=St){var Gt=ae.toList().sort().map((function(e){return Xe(e,160,160,!0).item})).toArray(),Ut=N.createElement(W,{pages:Gt,style:"straight",styles:k});if(Vt)Ft=0===Me?{previewContent:Ut,pageIndex:0,position:"left"}:{previewContent:Ut,pageIndex:Me-1,position:"right"},Be||(Ft.disabled=!0);else{Object(b.i)(null!=St);var Yt=St.beforePageIndex,qt=St.afterPageIndex,Jt=St.firstInRow;null!=Yt?Ft=0===Yt||Jt?{previewContent:null,pageIndex:Yt,position:"left"}:{previewContent:null,pageIndex:Yt-1,position:"right"}:(Object(b.i)(null!=qt),Ft={previewContent:null,pageIndex:qt,position:"right"}),Ht||(Ft.disabled=!0)}}var Xt="ontouchstart"in window||navigator.maxTouchPoints>0||navigator.msMaxTouchPoints>0,$t=e.CSS_HACK.components,Qt=$t.ToolbarButtonComponent,Zt=$t.ToolbarDropdownGroupComponent;return N.createElement("div",{className:C()(k.docEditor,"PSPDFKit-DocumentEditor"),onClick:Ke,onKeyDown:kt,tabIndex:"-1",ref:lt},N.createElement("div",{className:C()(k.toolbar.root,k.toolbarRoot),style:{flex:0}},N.createElement("div",{ref:xt,className:k.toolbarContainer},bt.map((function(e,t){return"spacer"===e.type?N.createElement("div",{style:{flex:1},key:"spacer-".concat(t)}):"editor/move"===e.type?N.createElement("div",{key:e.type,className:k.moveButtonContainer},N.createElement(Qt,e),Ct):N.createElement(Qt,r()({},e,{key:e.type}))}))),yt.length>0&&N.createElement(N.Fragment,null,N.createElement("div",{style:{flex:1},key:"spacer-responsive"}),N.createElement(Zt,{icon:{type:"more",size:{width:20,height:20}},items:yt,discreteDropdown:!0,caretDirection:"down",role:"menu",ItemComponent:function(e){var t=e.item,a=e.isSelectedItem,n=e.state,o=e.itemComponentProps;return a?null:N.createElement(Qt,r()({},t.item,{role:"menuitem",className:C()(t.item.className,k.toolbar.dropdownButton,"Focused"===n&&k.toolbar["dropdownButton"+n]),itemComponentProps:o}))},onSelect:function(e,t){var a=t.item,n=a.onPress;a.disabled||n&&n(e)},noInitialSelection:!0,frameWindow:g}))),N.createElement("div",{className:k.pagesView},N.createElement(A.a,{onResize:Ot}),!Nt&&Ct,N.createElement("div",{className:C()(k.pagesGrid,f()({},k.pagesGridLargeThumbnails,ue)),onDragOver:function(e){e.preventDefault(),e.stopPropagation(),Mt(null)}},N.createElement(j.a,{totalItems:Z.size,width:It.width,height:It.height,itemScale:e.scale,renderItemCallback:Xe,onItemPress:Ue,selectedItemIndexes:ae,cssPrefix:"PSPDFKit-DocumentEditor",moveCursor:null!=Ft?Ft:void 0,onDragOver:Tt,onDragEnd:_t,onDrop:Xt||ve?void 0:Wt}))),N.createElement("div",{className:k.bottomBar},N.createElement(h.b,{onClick:Ye},P(D.a.cancel)),N.createElement("div",{className:C()((n={},f()(n,k.pagesSelectedIndicator,!0),f()(n,k.pagesSelectedIndicatorShown,ae.size>0),n))},N.createElement("div",{className:k.pagesSelectedIcon},N.createElement(S.a,{src:a(512)})),P(_.pagesSelected,{arg0:ae.size})),N.createElement("div",{className:k.spacer}),ie&&L,N.createElement(h.b,{disabled:ie,onClick:Je},P(D.a.saveAs)),N.createElement(h.b,{primary:!0,disabled:Q.isEmpty()||ie,onClick:qe},P(D.a.save))))}));var _=Object(I.a)({newPage:{id:"newPage",defaultMessage:"New Page",description:"Add new page"},removePage:{id:"removePage",defaultMessage:"Remove Page",description:"Remove page"},duplicatePage:{id:"duplicatePage",defaultMessage:"Duplicate Page",description:"Duplicate page"},rotatePageLeft:{id:"rotatePageLeft",defaultMessage:"Rotate Page Left",description:"Rotate Page Left"},rotatePageRight:{id:"rotatePageRight",defaultMessage:"Rotate Page Right",description:"Rotate Page Right"},mergeDocument:{id:"mergeDocument",defaultMessage:"Merge Document",description:"Merge Document"},selectAll:{id:"selectAll",defaultMessage:"Select All",description:"Select All Pages"},selectNone:{id:"selectNone",defaultMessage:"Select None",description:"Deselect All Pages"},openMoveDialog:{id:"openMoveDialog",defaultMessage:"Move…",description:"Open dialog for moving pages to specific location in the document"},move:{id:"move",defaultMessage:"Move",description:"Move pages to specific location in the document"},moveBefore:{id:"moveBefore",defaultMessage:"Move Before",description:"Move page before previous one"},moveAfter:{id:"moveAfter",defaultMessage:"Move After",description:"Move page after next one"},documentMergedHere:{id:"documentMergedHere",defaultMessage:"Document will be merged here",description:"Placeholder for the imported document"},pagesSelected:{id:"pagesSelected",defaultMessage:"{arg0, plural,\n      =0 {{arg0} Pages}\n      one {{arg0} Page}\n      two {{arg0} Pages}\n      other {{arg0} Pages}\n    }",description:"Number of pages selected."},insertAfterPage:{id:"insertAfterPage",defaultMessage:"Insert after page",description:"Move selected pages after designated page index."},moveBeginningHint:{id:"docEditorMoveBeginningHint",defaultMessage:"Type “0” to move selected pages to the beginning of the document.",description:"Instructions for how to move pages to the beginning of the document when using the Move button in the Document Editor."}})}}]);