(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-75deaa5c"],{2532:function(t,e,r){"use strict";var s=r("23e7"),a=r("5a34"),n=r("1d80"),i=r("ab13");s({target:"String",proto:!0,forced:!i("includes")},{includes:function(t){return!!~String(n(this)).indexOf(a(t),arguments.length>1?arguments[1]:void 0)}})},"5a34":function(t,e,r){var s=r("44e7");t.exports=function(t){if(s(t))throw TypeError("The method doesn't accept regular expressions");return t}},ab13:function(t,e,r){var s=r("b622"),a=s("match");t.exports=function(t){var e=/./;try{"/./"[t](e)}catch(r){try{return e[a]=!1,"/./"[t](e)}catch(s){}}return!1}},c73d:function(t,e,r){"use strict";r.r(e);var s=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("section",{staticClass:"mt-5"},[t._m(0),t.is_loading_articles?r("div",{staticClass:"mt-5 pt-4"},[t._m(1)]):r("div",[t.is_doing_action?r("div",[r("div",{staticClass:"card mb-4"},[r("div",{staticClass:"card-body"},[r("div",{staticClass:"circle-loader"}),r("p",{staticClass:"text-center mt-4"},[t._v(t._s(t.action_message))])])])]):t._e(),r("div",{staticClass:" "},[r("div",{staticClass:"card"},[r("div",{staticClass:"card-body"},[r("div",{staticClass:"row mb-4 d-flex justify-content-start"},[r("div",{staticClass:"col-md-7 justify-content-start"},[r("button",{staticClass:"btn-icon-text btn btn-primary mb-3 mb-md-0",attrs:{type:"button",disabled:t.is_doing_action},on:{click:function(e){return t.$router.push("/admin/alertes/nouveau")}}},[r("i",{staticClass:"fa fa-plus btn-icon-prepend"}),t._v(" Nouvelle Alerte ")])]),r("div",{staticClass:"col-md-5 d-none"},[r("b-form-group",{attrs:{label:"","label-for":"input5"}},[r("b-form-input",{attrs:{type:"text",placeholder:"Rechercher"},model:{value:t.search_text,callback:function(e){t.search_text=e},expression:"search_text"}})],1)],1)]),r("div",{staticClass:"table-responsive"},[r("b-table",{attrs:{items:t.articles,id:"table-list",responsive:"","per-page":t.perPage,"current-page":t.currentPage,fields:t.fields,"sort-by":t.sortBy,"sort-desc":t.sortDesc},on:{"update:sortBy":function(e){t.sortBy=e},"update:sort-by":function(e){t.sortBy=e},"update:sortDesc":function(e){t.sortDesc=e},"update:sort-desc":function(e){t.sortDesc=e}},scopedSlots:t._u([{key:"cell(status)",fn:function(e){return[r("span",{domProps:{innerHTML:t._s(e.value)}})]}},{key:"cell(action)",fn:function(e){return[r("div",{staticClass:"d-flex justify-content-center"},[r("button",{staticClass:"btn btn-sm d-none btn-outline-primary py-1 mr-1",attrs:{title:"Modifier ce article",disabled:t.is_doing_action},on:{click:function(){return t.$router.push("/admin/articles/editer/"+e.value)}}},[r("i",{staticClass:"fa fa-pencil"})]),r("button",{staticClass:"btn btn-sm btn-outline-danger py-1",attrs:{title:"Supprimer ce article",disabled:t.is_doing_action},on:{click:function(r){return t.doDeleteFaq(e.value)}}},[r("i",{staticClass:"fa fa-trash"})])])]}},{key:"cell(profil)",fn:function(e){return[r("span",{domProps:{innerHTML:t._s(e.value)}})]}}],null,!1,1014028638)}),r("b-pagination",{attrs:{"total-rows":t.rows,"per-page":t.perPage,"aria-controls":"table-list",align:"right"},model:{value:t.currentPage,callback:function(e){t.currentPage=e},expression:"currentPage"}})],1)])])])]),r("div")])},a=[function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"page-header"},[r("h3",{staticClass:"page-title"},[t._v("Mes Alertes")]),r("nav",{attrs:{"aria-label":"breadcrumb"}},[r("ol",{staticClass:"breadcrumb"},[r("li",{staticClass:"breadcrumb-item"},[r("a",{attrs:{href:"javascript:void(0);"}},[t._v("Alertes")])]),r("li",{staticClass:"breadcrumb-item active",attrs:{"aria-current":"page"}},[t._v(" Mes Alertes ")])])])])},function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"card"},[r("div",{staticClass:"card-body"},[r("div",{staticClass:"circle-loader"}),r("p",{staticClass:"text-center mt-4"},[t._v("Chargement des données en cours")])])])}],n=(r("a4d3"),r("4de4"),r("7db0"),r("4160"),r("caad"),r("d81d"),r("e439"),r("dbb4"),r("b64b"),r("d3b7"),r("2532"),r("159b"),r("2fa7")),i=(r("96cf"),r("89ba")),c=r("2b0e"),o=r("9871"),l=r.n(o),u=r("42bc"),d=r("1503"),p=r("2f62");function f(t,e){var r=Object.keys(t);if(Object.getOwnPropertySymbols){var s=Object.getOwnPropertySymbols(t);e&&(s=s.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),r.push.apply(r,s)}return r}function b(t){for(var e=1;e<arguments.length;e++){var r=null!=arguments[e]?arguments[e]:{};e%2?f(r,!0).forEach((function(e){Object(n["a"])(t,e,r[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(r)):f(r).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(r,e))}))}return t}c["default"].use(l.a,{ascIcon:'<i class="mdi mdi-arrow-down"></i>',descIcon:'<i class="mdi mdi-arrow-up"></i>'});var m={data:function(){return{constants:d["a"],is_doing_action:!1,action_message:"En cours",sortBy:"Nom & prénom",perPage:10,currentPage:1,sortDesc:!1,sortByFormatted:!0,filterByFormatted:!0,sortable:!0,is_loading_articles:!0,fields:[{key:"n",sortable:!1},{key:"date",sortable:!0},{key:"type_alerte",sortable:!0},{key:"coordonnes",sortable:!0},{key:"observation",sortable:!0}],all_articles:[],list_categories_articles:[],search_text:""}},created:function(){var t=Object(i["a"])(regeneratorRuntime.mark((function t(){var e,r,s,a,n;return regeneratorRuntime.wrap((function(t){while(1)switch(t.prev=t.next){case 0:return this.is_loading_articles=!0,e=this.constants.api_url+"/get_my_alerts/",t.next=4,fetch(e,{method:"post",headers:{"Content-Type":"application/json"},body:JSON.stringify({user_id:this.id_utilisateur,user_lat:-1,user_long:-1}),cache:"no-cache"});case 4:return r=t.sent,t.next=7,r.json();case 7:s=t.sent,s.Alerts?(a=[{libelle:"Alerte Police",id:1},{libelle:"Police Incendie",id:2},{libelle:"Service Social",id:3},{libelle:"Croix rouge",id:4}],n=0,this.all_articles=s.Alerts.map((function(t){n++;var e=n,r=a.find((function(e){return e.id==t.service_id}));return r=r?r.libelle:t.service_id,b({},t,{n:e,date:u["a"].obtenirDateEtHeureEnFrancais(t.created_at),type_alerte:r,coordonnes:"( "+t.latitude+","+t.longitude+" )",observation:"",localisation:t.Ville+", "+t.Commune+", "+t.Quartier,action:t.id})}))):this.$swal({type:"error",title:"Une erreur est survenue",text:"Status : "+s.status+"\nMessage : "+s.message}),this.is_loading_articles=!1;case 10:case"end":return t.stop()}}),t,this)})));function e(){return t.apply(this,arguments)}return e}(),computed:b({},Object(p["b"])(["is_connected","nom_utilisateur","id_utilisateur","est_admin"]),{rows:function(){return this.all_articles.length},articles:function(){var t=this;return this.all_articles.filter((function(e){if(""==t.search_text)return t.all_articles;for(var r=["date","type_alerte","observation"],s=0,a=r;s<a.length;s++){var n=a[s];if(void 0!=e[n]&&e[n].toLowerCase().toLowerCase().includes(t.search_text.toLowerCase()))return!0}}))}}),methods:b({},u["a"],{doDeleteFaq:function(){var t=Object(i["a"])(regeneratorRuntime.mark((function t(e){var r,s,a,n;return regeneratorRuntime.wrap((function(t){while(1)switch(t.prev=t.next){case 0:return t.next=2,this.$swal({title:"Supprimer ?",text:"Voulez-vous vraiment supprimer cet alerte ?",type:"question",showCancelButton:!0,confirmButtonColor:"#d33",cancelButtonColor:"#3085d6",confirmButtonText:"Supprimer",cancelButtonText:"Annuler"});case 2:if(r=t.sent,r.value){t.next=5;break}return t.abrupt("return");case 5:return this.action_message="Suppression  en cours",this.is_doing_action=!0,s=this.constants.api_url+"/alert/"+e,a=null,t.prev=9,t.next=12,fetch(s,{method:"delete",cache:"no-cache",body:JSON.stringify(this.article),credentials:"include"});case 12:a=t.sent,t.next=19;break;case 15:return t.prev=15,t.t0=t["catch"](9),this.$swal({type:"error",title:"La connexion au serveur a échoué",text:t.t0.message}),t.abrupt("return");case 19:return t.next=21,a.json();case 21:n=t.sent,"SUCCESS"==n.status?(this.all_articles=this.all_articles.filter((function(t){return t.id!=e})),this.$swal({type:"success",title:"Effectué",text:"La article a été supprimée avec succès. "})):this.$swal({type:"error",title:"Une erreur est survenue",text:"Status : "+n.status+"<br/>Message : "+n.message}),this.is_doing_action=!1;case 24:case"end":return t.stop()}}),t,this,[[9,15]])})));function e(e){return t.apply(this,arguments)}return e}()})},v=m,h=r("2877"),_=Object(h["a"])(v,s,a,!1,null,null,null);e["default"]=_.exports},caad:function(t,e,r){"use strict";var s=r("23e7"),a=r("4d64").includes,n=r("44d2");s({target:"Array",proto:!0},{includes:function(t){return a(this,t,arguments.length>1?arguments[1]:void 0)}}),n("includes")},d81d:function(t,e,r){"use strict";var s=r("23e7"),a=r("b727").map,n=r("1dde");s({target:"Array",proto:!0,forced:!n("map")},{map:function(t){return a(this,t,arguments.length>1?arguments[1]:void 0)}})}}]);
//# sourceMappingURL=chunk-75deaa5c.6a6d2d0c.js.map