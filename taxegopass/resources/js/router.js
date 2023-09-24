import Vue from 'vue';
import VueRouter from "vue-router";
Vue.use(VueRouter)

import Agent from 'agents/agents.vue';


  export default{
    mode:'history',
    routes:[
        
        {
          path:'/agents',
          name:'agents',
          component:Agent
        }
      ]
  }
