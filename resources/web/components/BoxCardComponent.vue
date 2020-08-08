<template>
    <el-card class="box-card my-2" shadow="hover">
        <div class="header d-flex">
            <div class="profile d-flex">
                <AvatarComponent/>
                <div class="ml-2">
                    <b>{{ item.user.name }}</b>
                    <p class="mt-0">{{ item.created_at | fromNow }}</p>
                </div>
            </div>
            <div class="more ml-auto">
                <i class="el-icon-more"></i>
            </div>
        </div>
        <div class="body mt-2">
            <div>
                <p>{{ item.content}}</p>
            </div>
            <div class="d-flex mt-2 align-items-center">
                <span><i class="el-icon-sugar mr-1"></i>{{ item.likes.length }}</span>
                <span><i class="el-icon-chat-dot-round ml-2 mr-1"></i>{{ item.comments.length }}</span>
                <el-button v-if="isAuthenticated" type="primary" class="ml-auto" icon="el-icon-chat-dot-round" circle></el-button>
            </div>
        </div>
    </el-card>
</template>

<script>
    import AvatarComponent from "./AvatarComponent";
    import {mapGetters} from 'vuex'
    export default {
        name: "BoxCardComponent",
        components: {AvatarComponent},
        props: ['item'],
        computed: {
            ...mapGetters('auth', ['isAuthenticated'])
        }
    }
</script>
