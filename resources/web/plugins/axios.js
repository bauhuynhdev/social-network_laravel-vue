import axios from 'axios'

axios.defaults.baseURL = 'api.social-network.test:8081/v1/';

axios.interceptors.request.use(
    function (config) {
        config.headers = {
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
            'Content-Type': 'application/json',
            'Access-Control-Allow-Origin': '*'
            // 'Authorization': `Bearer ${token}`
        }

        return config;
    },
    function (error) {
        throw error
    }
)

export default axios
