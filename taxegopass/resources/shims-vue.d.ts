declare module '*.vue' {
    import { DefineComponent } from 'vue';
    
    const component: DefineComponent<{}, {}, any>;
    export default component;
  }
declare module '*.vue';

declare module "@vue/runtime-core" {
  interface ComponentCustomProperties {
    $store: Store<State>;
  }
}