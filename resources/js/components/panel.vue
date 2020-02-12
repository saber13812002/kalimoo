<template>
    <div>
        <admin v-if="panel === 1"></admin>
        <user v-if="panel === 0"></user>
    </div>

</template>

<script>
    export default {
        name: "panel" ,
        data() {
            return {
                panel: ''
            }
        } ,
        created() {
            if (this.$route.name === 'admin')
            {
                this.panel = 1
            }
            if (this.$route.name === 'user')
            {
                this.panel = 0
            }
        }
    }
</script>

<style scoped>

</style>