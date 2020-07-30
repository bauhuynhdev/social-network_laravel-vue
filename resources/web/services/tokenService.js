import {TOKEN_NAME} from "../utils/constants";

export const setToken = token => {
    localStorage.setItem(TOKEN_NAME, token)
}

export const getToken = () => {
    return localStorage.getItem(TOKEN_NAME)
}

export const hasToken = () => {
    return localStorage.getItem(TOKEN_NAME) !== null
}

export const deleteToken = () => {
    localStorage.removeItem(TOKEN_NAME)
}
