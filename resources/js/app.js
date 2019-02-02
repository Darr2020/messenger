require('./bootstrap');

window.Vue = require('vue');

import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue);

Vue.component('MessageConversation', require('./components/MessageConversation.vue').default);
Vue.component('Contacts', require('./components/Contacts.vue').default);
Vue.component('Conversation', require('./components/Conversation.vue').default);
Vue.component('list-contact', require('./components/listContact.vue').default);



const app = new Vue({
    el: '#app',
    methods: {
    	logout() {
            document.getElementById('logout-form').submit();
    	}
    }

});
