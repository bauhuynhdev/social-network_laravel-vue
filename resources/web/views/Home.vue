<template>
    <h1>Home</h1>
</template>

<script>
    import axios from 'axios'

    export default {
        name: "Home",
        data() {
            return {
                input: null,
                items: []
            }
        },
        async created() {
            const respond = await axios.get('http://api.social-network.test/v1/posts');
            this.items = respond.data.data.data
        }
    }
</script>

<style scoped>
    .profile .avatar {
        width: 50px;
        height: 50px;
        border-radius: 100%;
    }
</style>
