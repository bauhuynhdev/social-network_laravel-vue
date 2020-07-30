<template>
    <div>
        <HeaderBlock/>
        <router-view/>
    </div>
</template>

<script>
    import HeaderBlock from "./HeaderBlock";

    export default {
        name: "Default",
        components: {HeaderBlock}
    }
</script>

<style scoped>

</style>
