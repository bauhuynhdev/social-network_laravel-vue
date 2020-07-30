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
            <div class="d-flex mt-2">
                <span><i class="el-icon-sugar mr-1"></i>{{ item.likes }}</span>
                <span><i class="el-icon-chat-dot-round ml-2 mr-1"></i>{{ item.comments }}</span>
            </div>
        </div>
    </el-card>
</template>

<script>
    import AvatarComponent from "./AvatarComponent";
    export default {
        name: "BoxCardComponent",
        components: {AvatarComponent},
        props: ['item']
    }
</script>
