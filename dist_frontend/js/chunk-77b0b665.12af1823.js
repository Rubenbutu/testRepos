(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-77b0b665"],{"13d5":function(e,r,t){"use strict";var s=t("23e7"),o=t("d58f").left,a=t("b301");s({target:"Array",proto:!0,forced:a("reduce")},{reduce:function(e){return o(this,e,arguments.length,arguments.length>1?arguments[1]:void 0)}})},"2fd3":function(e,r,t){"use strict";t.r(r);var s=function(){var e=this,r=e.$createElement,t=e._self._c||r;return t("div",[t("h3",{staticClass:"mb-3 mt-5 text-center"},[e._v("Lelisa-App")]),t("div",{staticClass:"card  mx-3 mx-md-0"},[t("div",{staticClass:"card-body"},[e.is_doing_action?t("div",{staticClass:"row"},[t("div",{staticClass:"col-md-12"},[t("div",{staticClass:"card"},[t("div",{staticClass:"card-body"},[t("div",{staticClass:"square-path-loader"}),t("p",{staticClass:"text-center mt-4"},[e._v(e._s(e.action_message))])])])])]):t("form",{staticClass:"forms-sample mt-4"},[t("fieldset",{attrs:{disabled:e.is_doing_action}},[t("div",{staticClass:"row"},[t("div",{staticClass:"col-md-6"},[t("h4",[e._v("Inscription")]),t("hr"),t("b-form-group",{attrs:{label:"Prénom :","label-for":"prenom"}},[t("b-form-input",{attrs:{type:"text",id:"prenom",placeholder:"Prénom"},model:{value:e.register_form.prenom,callback:function(r){e.$set(e.register_form,"prenom",r)},expression:"register_form.prenom"}})],1),t("b-form-group",{attrs:{label:"Nom :","label-for":"nom"}},[t("b-form-input",{attrs:{type:"text",id:"nom",placeholder:"Nom"},model:{value:e.register_form.nom,callback:function(r){e.$set(e.register_form,"nom",r)},expression:"register_form.nom"}})],1),t("b-form-group",{attrs:{label:"Postnom :","label-for":"postnom"}},[t("b-form-input",{attrs:{type:"text",id:"postnom",placeholder:"Post-nom"},model:{value:e.register_form.postnom,callback:function(r){e.$set(e.register_form,"postnom",r)},expression:"register_form.postnom"}})],1),t("b-form-group",{attrs:{label:"Votre sexe :","label-for":"sexe"}},[t("select",{directives:[{name:"model",rawName:"v-model",value:e.register_form.sexe,expression:"register_form.sexe"}],staticClass:"custom-select",attrs:{id:"sexe",placeholder:"Sexe"},on:{change:function(r){var t=Array.prototype.filter.call(r.target.options,(function(e){return e.selected})).map((function(e){var r="_value"in e?e._value:e.value;return r}));e.$set(e.register_form,"sexe",r.target.multiple?t:t[0])}}},[t("option",{attrs:{value:"Masculin"}},[e._v("Masculin")]),t("option",{attrs:{value:"Feminin"}},[e._v("Féminin")])])]),t("b-form-group",{attrs:{label:"Adresse :","label-for":"phone"}},[t("b-form-input",{attrs:{type:"text",id:"phone",placeholder:"Adresse"},model:{value:e.register_form.adresse,callback:function(r){e.$set(e.register_form,"adresse",r)},expression:"register_form.adresse"}})],1),t("b-form-group",{attrs:{label:"Adresse email :","label-for":"email"}},[t("b-form-input",{attrs:{type:"email",id:"email",placeholder:"Email"},model:{value:e.register_form.email,callback:function(r){e.$set(e.register_form,"email",r)},expression:"register_form.email"}})],1),t("b-form-group",{attrs:{label:"Téléphone :","label-for":"phone"}},[t("b-form-input",{attrs:{type:"text",id:"phone",placeholder:"Téléphone"},model:{value:e.register_form.phone,callback:function(r){e.$set(e.register_form,"phone",r)},expression:"register_form.phone"}})],1),t("b-form-group",{attrs:{label:"Mot de passe :","label-for":"password"}},[t("b-form-input",{attrs:{type:"password",id:"password",placeholder:"Mot de passe"},model:{value:e.register_form.password,callback:function(r){e.$set(e.register_form,"password",r)},expression:"register_form.password"}})],1),t("b-form-group",{attrs:{label:"Répétez votre mot de passe :","label-for":"conf_password"}},[t("b-form-input",{attrs:{type:"password",id:"conf_password",placeholder:"Répétez votre !ot de passe"},model:{value:e.register_form.conf_password,callback:function(r){e.$set(e.register_form,"conf_password",r)},expression:"register_form.conf_password"}})],1),t("b-button",{staticClass:"mr-2 btn-lg",attrs:{type:"button",variant:"success"},on:{click:e.doRegister}},[e._v("S'inscrire")]),t("p",{staticClass:"mt-4"},[e._v(" Vous avez déjà un compte ? "),t("router-link",{attrs:{to:"/login"}},[e._v("Connectez-vous")])],1)],1),t("div",{staticClass:"col-md-6 d-none"},[t("h5",{staticClass:"mt-5 mb-3"},[e._v("Informations supplémentaires")]),t("b-form-group",{attrs:{label:"Pays de résidence :","label-for":"pays"}},[t("b-form-input",{attrs:{type:"text",id:"pays",placeholder:"Pays"},model:{value:e.register_form.pays,callback:function(r){e.$set(e.register_form,"pays",r)},expression:"register_form.pays"}})],1),t("b-form-group",{attrs:{label:"Province (Etat) :","label-for":"province"}},[t("b-form-input",{attrs:{type:"text",id:"province",placeholder:"Province / Etat"},model:{value:e.register_form.province,callback:function(r){e.$set(e.register_form,"province",r)},expression:"register_form.province"}})],1),t("b-form-group",{attrs:{label:"Ville :","label-for":"ville"}},[t("b-form-input",{attrs:{type:"text",id:"ville",placeholder:"Ville"},model:{value:e.register_form.ville,callback:function(r){e.$set(e.register_form,"ville",r)},expression:"register_form.ville"}})],1),t("b-form-group",{attrs:{label:"Adresse :","label-for":"adresse"}},[t("b-form-input",{attrs:{type:"text",id:"adresse",placeholder:"Adresse (Commune, Quartier, Rue, numéro domicile)"},model:{value:e.register_form.adresse,callback:function(r){e.$set(e.register_form,"adresse",r)},expression:"register_form.adresse"}})],1),t("b-form-group",{attrs:{label:"Téléphone :","label-for":"telephone"}},[t("b-form-input",{attrs:{type:"tel",id:"telephone",placeholder:"Votre numéro de téléphone"},model:{value:e.register_form.telephone,callback:function(r){e.$set(e.register_form,"telephone",r)},expression:"register_form.telephone"}})],1)],1)])])])])])])},o=[],a=(t("a4d3"),t("4de4"),t("4160"),t("13d5"),t("e439"),t("dbb4"),t("b64b"),t("d3b7"),t("159b"),t("2fa7")),n=(t("96cf"),t("89ba")),i=t("1503"),l=t("2f62");function c(e,r){var t=Object.keys(e);if(Object.getOwnPropertySymbols){var s=Object.getOwnPropertySymbols(e);r&&(s=s.filter((function(r){return Object.getOwnPropertyDescriptor(e,r).enumerable}))),t.push.apply(t,s)}return t}function p(e){for(var r=1;r<arguments.length;r++){var t=null!=arguments[r]?arguments[r]:{};r%2?c(t,!0).forEach((function(r){Object(a["a"])(e,r,t[r])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(t)):c(t).forEach((function(r){Object.defineProperty(e,r,Object.getOwnPropertyDescriptor(t,r))}))}return e}var u={name:"signup",data:function(){return{is_doing_action:!1,register_form:{nom:"",prenom:"",sexe:"m",email:"",password:"",conf_password:"",service_id:5,type:"User",status:"1",phone:""},action_message:""}},methods:{verifierAgent:function(e){var r="";return void 0==e.nom||""==e.nom?r="Veuillez entrer un nom correcte svp":void 0==e.postnom||""==e.postnom?r="Veuillez entrer un postnom correcte svp":void 0==e.prenom||""==e.prenom?r="Veuillez entrer un prénom correcte svp":void 0==e.sexe||""==e.sexe?r="Veuillez sélectionner un sexe svp":void 0==e.phone||""==e.phone?r="Veuillez entrer un numéro de téléphone correcte svp":void 0==e.email||""==e.email?r="Veuillez entrer une adresse email correcte svp":void 0==e.password||e.password.length<5?r="Veuillez entrer un mot de passe ayant au moins 5 caractères":e.password!==e.conf_password?r="Les deux mots de passe ne concordent pas":void 0!=e.type&&""!=e.type||(r="Veuillez sélectionner un type de compte"),""!=r&&this.$swal({type:"warning",title:"Les données fournies sont incorrcetes",text:r}),{status:""===r,message:r}},doRegister:function(){var e=Object(n["a"])(regeneratorRuntime.mark((function e(){var r,t,s,o,a;return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:if(this.verifierAgent(this.register_form).status){e.next=2;break}return e.abrupt("return");case 2:return this.action_message="Création de votre compte utilisateur en cours",this.is_doing_action=!0,r=i["a"].api_url+"/users",t=p({},this.register_form,{service_id:5}),delete t.conf_password,e.prev=7,s=new Headers,s.append("Content-type","application/x-www-form-urlencoded"),e.next=12,fetch(r,{headers:{"Content-Type":"application/json"},body:JSON.stringify(t),method:"post"});case 12:return o=e.sent,e.next=15,o.json();case 15:if(a=e.sent,console.log(a),!a.success){e.next=23;break}return this.$snotify.success("Votre compte a été créé avec succès",{timeout:1500,showProgressBar:!1,closeOnClick:!1,pauseOnHover:!0}),this.$route.query.next?this.$router.push(this.$route.query.next):this.$router.push("/"),e.abrupt("return");case 23:this.$snotify.error("Erreur :"+a.message,{timeout:0,showProgressBar:!1,closeOnClick:!0,pauseOnHover:!0});case 24:e.next=29;break;case 26:e.prev=26,e.t0=e["catch"](7),alert("Erruer : "+e.t0.message);case 29:this.is_doing_action=!1;case 30:case"end":return e.stop()}}),e,this,[[7,26]])})));function r(){return e.apply(this,arguments)}return r}()},computed:p({},Object(l["b"])(["is_connected","nom_utilisateur","id_utilisateur","est_admin","paniers"]),{prix_total:function(){return this.paniers.reduce((function(e,r){return r.prix_unitaire*r.quantite+e}),0)}}),created:function(){this.is_connected&&this.$router.push("/")}},m=u,d=t("2877"),f=Object(d["a"])(m,s,o,!1,null,null,null);r["default"]=f.exports},d58f:function(e,r,t){var s=t("1c0b"),o=t("7b0b"),a=t("44ad"),n=t("50c4"),i=function(e){return function(r,t,i,l){s(t);var c=o(r),p=a(c),u=n(c.length),m=e?u-1:0,d=e?-1:1;if(i<2)while(1){if(m in p){l=p[m],m+=d;break}if(m+=d,e?m<0:u<=m)throw TypeError("Reduce of empty array with no initial value")}for(;e?m>=0:u>m;m+=d)m in p&&(l=t(l,p[m],m,c));return l}};e.exports={left:i(!1),right:i(!0)}}}]);
//# sourceMappingURL=chunk-77b0b665.12af1823.js.map