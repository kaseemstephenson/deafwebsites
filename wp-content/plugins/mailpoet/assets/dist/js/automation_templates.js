"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[457],{57384:function(e,t,a){var s=a(99581),o=a(7936),n=a(93743),l=a(85241),i=a(38313),r=a(25283),c=a(96854),u=a(44259),m=a(70079),d=a(19382),p=a(84209),h=a(85180),x=a(45820),j=a(20174),_=a(82299),f=a(35250);function C(e){let{showModal:t,onClose:a}=e;return t?(0,f.jsx)(j.ZG,{onRequestClose:a,tracking:{utm_medium:"upsell_modal",utm_campaign:"create_automation_from_scratch"},children:(0,o.__)("You cannot create automation from scratch.","mailpoet")}):null}function g(e,t){p.Hooks.applyFilters("mailpoet.automation.templates.from_scratch_button",(()=>{e()}))(t)}function k(){const[e,t]=(0,m.useState)(!1),[a,s]=(0,m.useState)(null),[n,l]=(0,m.useState)(!1),i=(0,m.useCallback)((()=>{g((()=>{t(!0)}),s)}),[]);return(0,f.jsxs)(f.Fragment,{children:[a&&(0,f.jsx)(_.q,{type:"error",closable:!0,timeout:!1,children:(0,f.jsx)("p",{children:a})}),(0,f.jsx)(d.ZP,{variant:"secondary",isBusy:n,disabled:n,onClick:()=>{l(!0),i()},children:(0,o.__)("From scratch","mailpoet")}),(0,f.jsx)(C,{showModal:e,onClose:()=>{t(!1),l(!1)}})]})}function b(){const[e,t]=(0,m.useState)(!1),[a,s]=(0,m.useState)(!1),[n,l]=(0,m.useState)(null),i=(0,m.useCallback)((()=>{g((()=>{t(!0)}),l)}),[]);return(0,f.jsxs)("li",{className:"mailpoet-automation-template-list-item mailpoet-automation-from-scratch",children:[n&&(0,f.jsx)(_.q,{type:"error",closable:!0,timeout:!1,children:(0,f.jsx)("p",{children:n})}),(0,f.jsxs)(d.ZP,{isBusy:a,disabled:a,onClick:()=>{s(!0),i()},children:[(0,f.jsx)(h.Z,{width:"50px",height:"50px",icon:x.Z}),(0,o.__)("Create from scratch","mailpoet")]}),(0,f.jsx)(C,{showModal:e,onClose:()=>{t(!1),s(!1)}})]})}function w(){return(0,f.jsxs)(f.Fragment,{children:[(0,f.jsx)(u.Q,{}),(0,f.jsxs)(n.Z,{className:"mailpoet-automation-templates-heading",children:[(0,f.jsx)("h1",{className:"wp-heading-inline",children:(0,o.__)("Choose your automation template","mailpoet")}),(0,f.jsx)(k,{})]}),(0,f.jsxs)("ul",{className:"mailpoet-automation-templates",children:[i.U.map((e=>(0,f.jsx)(r.v,{template:e},e.slug))),(0,f.jsx)(b,{})]})]})}window.addEventListener("DOMContentLoaded",(()=>{const e=document.getElementById("mailpoet_automation_templates");e&&((0,l.registerTranslations)(),(0,c.q)(),s.render((0,f.jsx)(w,{}),e))}))},65311:function(e){e.exports=jQuery}},function(e){e.O(0,[351],(function(){return 57384,e(e.s=57384)})),e.O()}]);