<template>
    <el-header class="h-auto border-bottom">
        <div class="container">
            <el-row class="d-flex align-items-center py-1">
                <el-col :span="4">
                    <el-autocomplete :fetch-suggestions="fetchSuggestions" placeholder="Search" v-model="keyword">
                        <i class="el-input__icon el-icon-search" slot="prefix"></i>
                    </el-autocomplete>
                </el-col>
                <div class="d-flex ml-auto align-items-center">
                    <template v-if="checkAuth">
                        <el-button type="primary">
                            <i class="el-icon-edit"></i> Create Post
                        </el-button>
                        <AvatarComponent class="mr-2 ml-2" height="35px" width="35px"/>
                        <el-dropdown trigger="click">
                        <span class="el-dropdown-link">
                            <a @click.prevent="" href="">{{ getName }} <i class="el-icon-arrow-down el-icon--right"></i></a>
                        </span>
                            <el-dropdown-menu slot="dropdown">
                                <el-dropdown-item>
                                    <a @click.prevent="logout" href=""><i class="el-icon-caret-left"></i> Logout</a>
                                </el-dropdown-item>
                            </el-dropdown-menu>
                        </el-dropdown>
                    </template>
                    <template v-else>
                        <LoginComponent/>
                    </template>
                </div>
            </el-row>
        </div>
    </el-header>
</template>

<script>
    import LoginComponent from "../components/LoginComponent";
    import AvatarComponent from "../components/AvatarComponent";

    import {mapActions, mapGetters} from 'vuex'

    export default {
        name: "HeaderBlock",
        data() {
            return {
                keyword: ''
            }
        },
        components: {AvatarComponent, LoginComponent},
        methods: {
            ...mapActions('auth', ['logout']),
            fetchSuggestions(queryString, cb) {
                console.log(queryString, cb)
            }
        },
        computed: {
            ...mapGetters('auth', ['checkAuth', 'getName'])
        }
    }
</script>
