<template>
    <div>
        <div v-if="user === 1">
            <main-header @second-emit-cat="get_cat($event)"></main-header>
            <user-content></user-content>
            <main-footer :menu="main_cat"></main-footer>
        </div>
        <div v-if="user === 0">
            <not-found-error></not-found-error>
        </div>
    </div>
</template>

<script>
    export default {
        name: "user" ,
        created() {
            document.title = this.$route.meta.title;
            this.checkUser();
        } ,
        watch: {
            $route(to, from) {
                document.title = to.meta.title;
            },
        } ,

        data() {
            return {
                user: '' ,
                main_cat: []
            }
        } ,

        methods:{
            get_cat(event) {
                this.main_cat = event
            } ,
            checkUser() {
                axios({
                    url: '/api/user' ,
                    method: 'get' ,
                    headers: {
                        accept: 'application/json' ,
                        Authorization: `Bearer ${localStorage.token}`
                    }
                })
                    .then(res => {
                        this.user = 1
                    })
                    .catch(err => {
                        console.log(err.response);
                        this.user = 0
                    })
            }
        }
    }
</script>

<style scoped>

</style>