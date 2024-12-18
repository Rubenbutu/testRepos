(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2d209218"],{a86a:function(t,e,s){"use strict";s.r(e);var n=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("section",{staticClass:"login"},[s("div",{staticClass:"container-scroller"},[s("div",{staticClass:"container-fluid page-body-wrapper full-page-wrapper"},[s("div",{staticClass:"content-wrapper d-flex align-items-center auth"},[s("div",{staticClass:"row w-100 flex-grow"},[s("div",{staticClass:"col-lg-5 col-md-6 mx-auto"},[s("div",{staticClass:"auth-form-light text-left p-5"},[t._m(0),s("h3",[t._v("Connexion")]),s("form",{staticClass:"pt-3 mt-4"},[s("fieldset",{attrs:{disabled:t.is_loging}},[s("div",{staticClass:"form-group"},[s("input",{directives:[{name:"model",rawName:"v-model",value:t.username,expression:"username"}],staticClass:"form-control form-control-lg",attrs:{type:"email",id:"exampleInputEmail1",placeholder:"Nom d'utilisateur"},domProps:{value:t.username},on:{input:function(e){e.target.composing||(t.username=e.target.value)}}})]),s("div",{staticClass:"form-group"},[s("input",{directives:[{name:"model",rawName:"v-model",value:t.password,expression:"password"}],staticClass:"form-control form-control-lg",attrs:{type:"password",id:"exampleInputPassword1",placeholder:"Mot de passe"},domProps:{value:t.password},on:{input:function(e){e.target.composing||(t.password=e.target.value)}}})]),s("div",{staticClass:"mb-2"},[s("button",{staticClass:"btn btn-block btn-facebook auth-form-btn",attrs:{type:"button",disabled:""==t.username||""==t.password||t.is_loging},on:{click:t.doAction}},[t._v(" Se connecter ")])])]),s("div",{staticClass:"text-center mt-4 font-weight-light"},[t._v(" Vous n'avez pas de compte ? "),s("router-link",{staticClass:"text-primary",attrs:{to:"/signup"}},[t._v("Inscrivez-vous")])],1)])]),t._m(1)])])])])])])},r=[function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"mb-5 text-center d-none"},[s("h3",[t._v("Connexion")])])},function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"text-center mt-5 navbar-brand-wrapper flex-column d-flex align-items-center justify-content-center"},[s("p",{staticClass:"mt-3 text-3"},[t._v("Lelisa App")])])}],o=(s("a4d3"),s("4de4"),s("4160"),s("e439"),s("dbb4"),s("b64b"),s("d3b7"),s("159b"),s("2fa7")),i=(s("96cf"),s("89ba")),a=s("1503");function c(t,e){var s=Object.keys(t);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(t);e&&(n=n.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),s.push.apply(s,n)}return s}function l(t){for(var e=1;e<arguments.length;e++){var s=null!=arguments[e]?arguments[e]:{};e%2?c(s,!0).forEach((function(e){Object(o["a"])(t,e,s[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(s)):c(s).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(s,e))}))}return t}var u={name:"login",data:function(){return{constants:a["a"],username:"",password:"",is_loging:!1}},methods:{getUserLocalisation:function(t){var e=this;this.action_message="Localisation en cours",this.is_loging=!0;var s=function(s){var n=s.coords.latitude,r=s.coords.longitude;e.is_loging=!1,t&&t({latitude:n,longitude:r})},n=function(t){e.is_loging=!1;var s="";t.code==t.PERMISSION_DENIED?s="Autorisation refusée":t.code==t.POSITION_UNAVAILABLE?s="Les informations de localisation sont indisponibles":t.code==t.TIMEOUT?s="La demande de localisation a expirée":t.code==t.UNKNOWN_ERROR&&(s="Une erreur inconnue s'est produite"),""!=s&&e.$swal({type:"error",title:"Erreur",text:s})};if(!navigator.geolocation)return alert("La géolocalisation est désactivée. Veuillez la réactiver"),void this.$swal({type:"error",title:"Géolocalisation désactivée",text:"La géolocalisation est désactivée. Veuillez la réactiver"});navigator.geolocation.getCurrentPosition(s,n)},doAction:function(){var t=this;this.getUserLocalisation((function(e){return t.doLogin(e)}))},doLogin:function(){var t=Object(i["a"])(regeneratorRuntime.mark((function t(e){var s,n,r;return regeneratorRuntime.wrap((function(t){while(1)switch(t.prev=t.next){case 0:return sessionStorage.clear(),this.is_loging=!0,s=a["a"].api_url+"/auth",t.next=5,fetch(s,{headers:{"Content-Type":"application/json"},body:JSON.stringify({email:this.username,password:this.password,user_lat:e.latitude,user_long:e.longitude}),method:"post"});case 5:return n=t.sent,t.next=8,n.json();case 8:r=t.sent,this.is_loging=!1,1!=r.success?this.$snotify.warning("Erreur : "+r.message,{showProgressBar:!1,closeOnClick:!0,pauseOnHover:!0}):1==r.success&&(this.$store.commit("change_connected",l({},r.user,{nom_utilisateur:r.user.email,nomUtilisateur:r.user.email,id_utilisateur:r.user.id,is_connected:!0,est_admin:1})),this.$snotify.success("Connexion effectuée avec succès",{timeout:1500,showProgressBar:!0,closeOnClick:!0,pauseOnHover:!0}),this.$router.push("/admin"));case 11:case"end":return t.stop()}}),t,this)})));function e(e){return t.apply(this,arguments)}return e}()}},d=u,p=s("2877"),m=Object(p["a"])(d,n,r,!1,null,null,null);e["default"]=m.exports}}]);
//# sourceMappingURL=chunk-2d209218.b1bb49a4.js.map