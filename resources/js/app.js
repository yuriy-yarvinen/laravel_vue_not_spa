require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('vue-component', require('./components/VueComponent.vue').default);
Vue.component('vue-json-component', require('./components/VueJsonComponent.vue').default);


const app = new Vue({
    el: '#app',
});
