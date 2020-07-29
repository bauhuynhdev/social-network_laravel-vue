<template>
    <div>
        <header-component/>
        <router-view/>
    </div>
</template>

<script>
    import headerComponent from "./header";

    export default {
        name: "default",
        components: {
            headerComponent
        }
    }
</script>

<style scoped>

</style>
