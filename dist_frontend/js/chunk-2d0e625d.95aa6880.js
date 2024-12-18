(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2d0e625d"],{9808:function(t,e,r){"use strict";r.r(e);var a=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("section",{staticClass:"mt-5"},[t._m(0),t.is_loading_articles?r("div",{staticClass:"mt-5 pt-4"},[t._m(1)]):r("div",[r("div",{staticClass:" "},[r("div",{staticClass:"card"},[r("div",{staticClass:"card-body"},[r("div",{staticClass:"row mb-4 d-flex justify-content-start"},[r("div",{staticClass:"col-md-7 justify-content-start"},[r("button",{staticClass:"btn-icon-text d-none btn btn-primary mb-3 mb-md-0",attrs:{type:"button",disabled:t.is_doing_action},on:{click:function(e){return t.$router.push("/admin/alertes/nouveau")}}},[r("i",{staticClass:"fa fa-plus btn-icon-prepend"}),t._v(" Nouvelle Alerte ")])]),r("div",{staticClass:"col-md-5 d-none"},[r("b-form-group",{attrs:{label:"","label-for":"input5"}},[r("b-form-input",{attrs:{type:"text",placeholder:"Rechercher"},model:{value:t.search_text,callback:function(e){t.search_text=e},expression:"search_text"}})],1)],1)]),r("div",{staticClass:"table-responsive"},[r("b-table",{attrs:{items:t.articles,id:"table-list",responsive:"","per-page":t.perPage,"current-page":t.currentPage,fields:t.fields,"sort-by":t.sortBy,"sort-desc":t.sortDesc},on:{"update:sortBy":function(e){t.sortBy=e},"update:sort-by":function(e){t.sortBy=e},"update:sortDesc":function(e){t.sortDesc=e},"update:sort-desc":function(e){t.sortDesc=e}},scopedSlots:t._u([{key:"cell(status)",fn:function(e){return[r("span",{domProps:{innerHTML:t._s(e.value)}})]}},{key:"cell(action)",fn:function(e){return[r("div",{staticClass:"d-flex justify-content-center"},[r("button",{staticClass:"btn btn-sm d-none btn-outline-primary py-1 mr-1",attrs:{title:"Modifier ce article",disabled:t.is_doing_action},on:{click:function(){return t.$router.push("/admin/articles/editer/"+e.value)}}},[r("i",{staticClass:"fa fa-pencil"})]),r("button",{directives:[{name:"b-modal",rawName:"v-b-modal.modalcarte",modifiers:{modalcarte:!0}}],staticClass:"btn btn-sm btn-outline-primary p-2",attrs:{title:"Voir dans la carte",disabled:t.is_doing_action},on:{mouseenter:function(){return t.doSetCurAlert(e.value)}}},[r("i",{staticClass:"fa fa-map"})])])]}},{key:"cell(profil)",fn:function(e){return[r("span",{domProps:{innerHTML:t._s(e.value)}})]}}],null,!1,1390883858)}),r("b-pagination",{attrs:{"total-rows":t.rows,"per-page":t.perPage,"aria-controls":"table-list",align:"right"},model:{value:t.currentPage,callback:function(e){t.currentPage=e},expression:"currentPage"}})],1)])])])]),r("div",[r("div",[r("b-modal",{attrs:{id:"modalcarte",title:"Localisation de l'alerte",size:"lg"}},[t.is_doing_action?r("div",[r("div",{staticClass:"card mb-4"},[r("div",{staticClass:"card-body"},[r("div",{staticClass:"circle-loader"}),r("p",{staticClass:"text-center mt-4"},[t._v(t._s(t.action_message))])])])]):r("div",[r("div",{staticClass:"card"},[r("div",{staticClass:"card-body"},[r("h6",{staticClass:"card-title"},[t._v("Carte")]),r("div",{staticClass:"map-container"},[r("p",{staticClass:"my-4"},[t._v(" "+t._s(t.curAlerte().latitude)+", "+t._s(t.curAlerte().longitude)+" ")]),r("GmapMap",{staticStyle:{width:"100%",height:"500px"},attrs:{center:{lat:t.curAlerte().latitude,lng:t.curAlerte().longitude},zoom:15,options:{zoomControl:!0,mapTypeControl:!0,scaleControl:!0,streetViewControl:!0,rotateControl:!0,fullscreenControl:!0,disableDefaultUi:!0}}},[r("GmapMarker",{attrs:{position:t.google&&new t.google.maps.LatLng(t.curAlerte().latitude,t.curAlerte().longitude),clickable:!0,draggable:!1}})],1)],1)])])])])],1)])])},s=[function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"page-header"},[r("h3",{staticClass:"page-title"},[t._v("Toutes les Alerts")]),r("nav",{attrs:{"aria-label":"breadcrumb"}},[r("ol",{staticClass:"breadcrumb"},[r("li",{staticClass:"breadcrumb-item"},[r("a",{attrs:{href:"javascript:void(0);"}},[t._v("Alertes")])]),r("li",{staticClass:"breadcrumb-item active",attrs:{"aria-current":"page"}},[t._v(" Mes Alertes ")])])])])},function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"card"},[r("div",{staticClass:"card-body"},[r("div",{staticClass:"circle-loader"}),r("p",{staticClass:"text-center mt-4"},[t._v("Chargement des données en cours")])])])}],i=(r("a4d3"),r("4de4"),r("7db0"),r("4160"),r("caad"),r("d81d"),r("e439"),r("dbb4"),r("b64b"),r("d3b7"),r("acd8"),r("2532"),r("159b"),r("2fa7")),n=(r("96cf"),r("89ba")),o=r("2b0e"),l=r("9871"),c=r.n(l),u=r("42bc"),d=r("1503"),p=r("755e"),b=r("2f62");function f(t,e){var r=Object.keys(t);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(t);e&&(a=a.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),r.push.apply(r,a)}return r}function m(t){for(var e=1;e<arguments.length;e++){var r=null!=arguments[e]?arguments[e]:{};e%2?f(r,!0).forEach((function(e){Object(i["a"])(t,e,r[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(r)):f(r).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(r,e))}))}return t}o["default"].use(p,{load:{key:"AIzaSyAT9uAsuQPTgLew4c2CmAceEeaLXYeHhsk",libraries:"places"}}),o["default"].use(c.a,{ascIcon:'<i class="mdi mdi-arrow-down"></i>',descIcon:'<i class="mdi mdi-arrow-up"></i>'});var v={data:function(){return{constants:d["a"],position:{latitude:10,longitude:10},currentAlertId:-1,type_agent:"",is_doing_action:!1,action_message:"En cours",sortBy:"Nom & prénom",perPage:10,currentPage:1,sortDesc:!1,sortByFormatted:!0,filterByFormatted:!0,sortable:!0,is_loading_articles:!0,utilisateur:{},fields:[{key:"n",sortable:!1},{key:"action",sortable:!0},{key:"date",sortable:!0},{key:"type_alerte",sortable:!0},{key:"coordonnes",sortable:!0},{key:"observation",sortable:!0}],all_articles:[],list_categories_articles:[],search_text:""}},created:function(){var t=Object(n["a"])(regeneratorRuntime.mark((function t(){return regeneratorRuntime.wrap((function(t){while(1)switch(t.prev=t.next){case 0:try{this.utilisateur=JSON.parse(sessionStorage.getItem("utilisateur"))}catch(e){this.utilisateur={id:-1}}this.doLoadAlerts({});case 2:case"end":return t.stop()}}),t,this)})));function e(){return t.apply(this,arguments)}return e}(),computed:m({google:p["gmapApi"]},Object(b["b"])(["is_connected","nom_utilisateur","id_utilisateur","est_admin"]),{rows:function(){return this.all_articles.length},articles:function(){var t=this;return this.all_articles.filter((function(e){if(""==t.search_text)return t.all_articles;for(var r=["date","type_alerte","observation"],a=0,s=r;a<s.length;a++){var i=s[a];if(void 0!=e[i]&&e[i].toLowerCase().toLowerCase().includes(t.search_text.toLowerCase()))return!0}}))}}),methods:m({},u["a"],{doLoadAlerts:function(){var t=Object(n["a"])(regeneratorRuntime.mark((function t(){var e,r,a,s,i;return regeneratorRuntime.wrap((function(t){while(1)switch(t.prev=t.next){case 0:return this.is_loading_articles=!0,e=this.constants.api_url+"/serviceAlerts/"+this.utilisateur.service_id,t.next=4,fetch(e,{method:"get",cache:"no-cache"});case 4:return r=t.sent,t.next=7,r.json();case 7:a=t.sent,a.alerts?(s=[{libelle:"Alerte Police",id:1},{libelle:"Police Incendie",id:2},{libelle:"Service Social",id:3},{libelle:"Croix rouge",id:4}],i=0,this.all_articles=a.alerts.map((function(t){i++;var e=i,r=s.find((function(e){return e.id==t.service_id}));return r=r?r.libelle:t.service_id,m({},t,{n:e,date:u["a"].obtenirDateEtHeureEnFrancais(t.created_at),type_alerte:r,coordonnes:"( "+t.latitude+","+t.longitude+" )",observation:"non sécourue",localisation:t.Ville+", "+t.Commune+", "+t.Quartier,action:t.id})}))):this.$swal({type:"error",title:"Une erreur est survenue",text:"Status : "+a.status+"\nMessage : "+a.message}),this.is_loading_articles=!1;case 10:case"end":return t.stop()}}),t,this)})));function e(){return t.apply(this,arguments)}return e}(),curAlerte:function(){var t=this,e=this.all_articles.find((function(e){return e.id==t.currentAlertId}));return e?m({},e,{longitude:parseFloat(e.longitude),latitude:parseFloat(e.latitude)}):{longitude:10,latitude:10}},doSetCurAlert:function(t){this.currentAlertId=t},doDeleteFaq:function(){var t=Object(n["a"])(regeneratorRuntime.mark((function t(e){var r,a,s,i;return regeneratorRuntime.wrap((function(t){while(1)switch(t.prev=t.next){case 0:return t.next=2,this.$swal({title:"Supprimer ?",text:"Voulez-vous vraiment supprimer cet alerte ?",type:"question",showCancelButton:!0,confirmButtonColor:"#d33",cancelButtonColor:"#3085d6",confirmButtonText:"Supprimer",cancelButtonText:"Annuler"});case 2:if(r=t.sent,r.value){t.next=5;break}return t.abrupt("return");case 5:return this.action_message="Suppression  en cours",this.is_doing_action=!0,a=this.constants.api_url+"/get_my_alerts/"+e,s=null,t.prev=9,t.next=12,fetch(a,{method:"delete",cache:"no-cache",body:JSON.stringify(this.article),credentials:"include"});case 12:s=t.sent,t.next=19;break;case 15:return t.prev=15,t.t0=t["catch"](9),this.$swal({type:"error",title:"La connexion au serveur a échoué",text:t.t0.message}),t.abrupt("return");case 19:return t.next=21,s.json();case 21:i=t.sent,"SUCCESS"==i.status?(this.all_articles=this.all_articles.filter((function(t){return t.id!=e})),this.$swal({type:"success",title:"Effectué",text:"La article a été supprimée avec succès. "})):this.$swal({type:"error",title:"Une erreur est survenue",text:"Status : "+i.status+"<br/>Message : "+i.message}),this.is_doing_action=!1;case 24:case"end":return t.stop()}}),t,this,[[9,15]])})));function e(e){return t.apply(this,arguments)}return e}(),getUserLocalisation:function(t){var e=this;this.action_message="Localisation en cours",this.is_loading_articles=!0;var r=function(r){var a=r.coords.latitude,s=r.coords.longitude;e.is_loading_articles=!1,t&&t({latitude:a,longitude:s})},a=function(t){e.is_loading_articles=!1;var r="";t.code==t.PERMISSION_DENIED?r="Autorisation refusée":t.code==t.POSITION_UNAVAILABLE?r="Les informations de localisation sont indisponibles":t.code==t.TIMEOUT?r="La demande de localisation a expirée":t.code==t.UNKNOWN_ERROR&&(r="Une erreur inconnue s'est produite"),""!=r&&(alert(r),e.$swal({type:"error",title:"Erreur",text:r}))};if(!navigator.geolocation)return alert("La géolocalisation est désactivée. Veuillez la réactiver"),void this.$swal({type:"error",title:"Géolocalisation désactivée",text:"La géolocalisation est désactivée. Veuillez la réactiver"});navigator.geolocation.getCurrentPosition(r,a)}})},g=v,_=r("2877"),h=Object(_["a"])(g,a,s,!1,null,null,null);e["default"]=h.exports}}]);
//# sourceMappingURL=chunk-2d0e625d.95aa6880.js.map