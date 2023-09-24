
//import { createRouter, createWebHistory } from 'vue-router';
import { createApp } from 'vue/dist/vue.esm-bundler';
// import './bootstrap';
import Dashboard from './components/Dashboard.vue';
import agent from './components/agents/agents.vue';
import paiement from './components/paiements/paiement.vue';
//import typepaiement from './components/paiements/typepaiement.vue';
import adresse from './components/passagers/adresse.vue';
import passager from './components/passagers/passagers.vue';
import avion from './components/vols/avions.vue';
import compagnie from './components/vols/compagnie.vue';
import vol from './components/vols/vols.vue';

 const App = createApp({
                
    components:{
     
        Dashboard,
        agent,
        adresse,
        passager,
        vol,
        avion,
        compagnie,
        paiement, 
      
    }
  });
  App.mount("#content");
  
  