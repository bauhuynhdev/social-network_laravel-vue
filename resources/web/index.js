import Vue from 'vue'
import router from './routes'
import store from './store'
import './plugins/element-ui'
import './style.css'
import App from './App'

Vue.config.productionTip = false

new Vue({
    el: '#app',
    router,
    store,
    render: h => h(App)
})
