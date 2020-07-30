import {deleteToken, setToken} from "../../services/tokenService";
import {toastrSuccess} from "../../plugins/toastr";

export default {
    namespaced: true,
    state: {
        authenticated: false,
        auth: undefined
    },
    mutations: {
        SET_AUTHENTICATED(state, condition = false) {
            state.authenticated = condition;
        },
        SET_AUTH(state, payload = undefined) {
            state.auth = payload
        }
    },
    actions: {
        async login({commit, dispatch}, params) {
            try {
                const respond = await axios.post('auth/login', params)
                setToken(respond.data.access_token);
                commit('SET_AUTHENTICATED', true)
                toastrSuccess('You have successfully logged in');
                dispatch('me');
            } catch (e) {

            }
        },
        async me({commit}) {
            try {
                const respond = await axios.get('auth/me')
                commit('SET_AUTH', respond.data.data)
            } catch (e) {

            }
        },
        async logout({commit}) {
            try {
                const respond = await axios.get('auth/logout')
                commit('SET_AUTHENTICATED')
                commit('SET_AUTH')
                deleteToken();
                toastrSuccess('You have been successfully logged out');
            } catch (e) {

            }
        }
    },
    getters: {
        isAuthenticated(state) {
            return state.authenticated
        },
        getName(state) {
            if (state.auth !== undefined) {
                return state.auth.name
            }
        },
        checkAuth(state) {
            return state.auth !== undefined;
        }
    }
}
