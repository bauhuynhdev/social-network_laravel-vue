import Vue from 'vue';
import VueX from 'vuex';
import auth from "./modules/auth";
import home from "./modules/home";

Vue.use(VueX);

export default new VueX.Store({
    modules: {
        auth: auth,
        home: home
    }
})
