<template>
    <div>
        <el-button @click="dialog = !dialog" class="float-right" icon="el-icon-user-solid" type="primary">
            Login
        </el-button>
        <el-dialog :close-on-click-modal="false" :visible.sync="dialog" width="24%">
            <div ref="login">
                <el-input placeholder="Email address" type="email" v-model="auth.email">
                    <i class="el-input__icon el-icon-user" slot="prefix"></i>
                </el-input>
                <span class="text-danger" v-if="errors.email">{{ errors.email.toString() }}</span>
                <el-input class="mt-2" placeholder="Password" type="password" v-model="auth.password">
                    <i class="el-input__icon el-icon-lock" slot="prefix"></i>
                </el-input>
                <span class="text-danger" v-if="errors.password">{{ errors.password.toString() }}</span>
            </div>
            <div class="mt-4 d-flex justify-content-center">
                <el-button @click.prevent="submit" icon="el-icon-unlock" type="primary">
                    Login
                </el-button>
            </div>
        </el-dialog>
    </div>
</template>

<script>
    import {mapActions} from 'vuex'

    export default {
        name: "LoginComponent",
        data() {
            return {
                dialog: false,
                auth: {
                    email: 'lea45@kiehn.com',
                    password: '123456'
                },
                errors: {}
            }
        },
        methods: {
            ...mapActions('auth', ['login']),
            submit() {
                this.login(this.auth);
            }
        }
    }
</script>

<style scoped>

</style>
