<template>
    <el-container>
        <div class="container">
            <BoxCardComponent :item="item" :key="item.id" v-for="item in items"/>
        </div>
    </el-container>
</template>

<script>
    import BoxCardComponent from "../components/BoxCardComponent";

    export default {
        name: "Home",
        components: {BoxCardComponent},
        data() {
            return {
                input: null,
                items: []
            }
        },
        async created() {
            const respond = await axios.get('posts');
            this.items = respond.data.data.data
        }
    }
</script>

<style scoped>

</style>
