<template>
    <img :style="[baseStyle]"
         src="https://scontent.fsgn2-4.fna.fbcdn.net/v/t1.0-1/p200x200/97787057_612037019396005_7516687320599232512_o.jpg?_nc_cat=101&_nc_sid=7206a8&_nc_ohc=BeW1FmIOOgwAX-BaPw7&_nc_ht=scontent.fsgn2-4.fna&_nc_tp=6&oh=5c8bb217fd9bd059f54b47110d58a1a7&oe=5F4661CD">
</template>

<script>
    export default {
        name: "AvatarComponent",
        props: {
            width: {
                type: String,
                default: '50px'
            },
            height: {
                type: String,
                default: '50px'
            }
        },
        computed: {
            baseStyle() {
                return {
                    width: this.width,
                    height: this.height,
                    borderRadius: '100%'
                }
            }
        }
    }
</script>

<style scoped>

</style>
