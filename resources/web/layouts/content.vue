<template>
    <el-container>
        <div class="container">
            <el-card class="box-card my-2" shadow="hover" v-for="item in items">
                <div class="header d-flex">
                    <div class="profile d-flex">
                        <img class="avatar" src="https://scontent.fsgn2-4.fna.fbcdn.net/v/t1.0-1/p200x200/97787057_612037019396005_7516687320599232512_o.jpg?_nc_cat=101&_nc_sid=7206a8&_nc_ohc=BeW1FmIOOgwAX-BaPw7&_nc_ht=scontent.fsgn2-4.fna&_nc_tp=6&oh=5c8bb217fd9bd059f54b47110d58a1a7&oe=5F4661CD">
                        <div class="ml-2">
                            <b>{{ item.user.name }}</b>
                            <p class="mt-0">{{ item.created_at }}</p>
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
        </div>
    </el-container>
</template>

<script>
    export default {
        name: "content"
    }
</script>

<style scoped>

</style>
