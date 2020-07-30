import Vue from 'vue'
import router from './routes'
import store from './store'
import './plugins/element-ui'
import 'toastr/build/toastr.css'
import './style.css'
import App from './App'
import axios from './plugins/axios'
import './filters'

Vue.config.productionTip = false

window.axios = axios;

new Vue({
    el: '#app',
    router,
    store,
    render: h => h(App)
})
