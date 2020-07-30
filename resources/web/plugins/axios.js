import axios from 'axios'
import {getToken, hasToken} from "../services/tokenService";

axios.defaults.baseURL = 'http://api.social-network.test/v1/';

axios.interceptors.request.use(
    function (config) {
        let headers = {
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
            'Content-Type': 'application/json'
        }

        if (hasToken()) {
            headers['Authorization'] = `Bearer ${getToken()}`
        }

        config.headers = headers

        return config;
    },
    function (error) {
        throw error;
    }
)

axios.interceptors.response.use(
    function (config) {
        return config;
    },
    function (error) {
        throw error;
    }
)

export default axios
