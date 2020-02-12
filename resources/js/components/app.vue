<template>
    <router-view></router-view>
</template>

<script>
    export default {
        name: "app" ,
        created() {
            document.title = this.$route.meta.title;
        } ,
        watch: {
            $route(to, from) {
                document.title = to.meta.title;
            },
        }
    }
</script>

<style scoped>

</style>