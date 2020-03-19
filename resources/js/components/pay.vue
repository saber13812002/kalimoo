<template>
    <div v-if="ok === 1">
        <!--<main-header @second-emit-cat="get_cat($event)"></main-header>-->
        <pay-success :code="code"></pay-success>
        <!--<main-footer :menu="main_cat"></main-footer>-->
    </div>
</template>

<script>
    export default {
        name: "pay" ,
        created() {
            this.makeSure(this.$route.params.order_id)
        } ,

        data() {
            return {
                ok: '' ,
                code: '' ,
                main_cat: [] ,
            }
        } ,

        methods: {
            get_cat(event) {
                this.main_cat = event
            } ,
            makeSure(id) {
                axios({
                    url: `/api/check/order/${id}` ,
                    method: 'get' ,
                    headers: {
                        Accept: 'application/json' ,
                        Authorization: `Bearer ${localStorage.token}`
                    }
                })
                    .then(res => {
                        console.log(res.data);
                        this.ok = 1;
                        this.code = res.data.tracking_code
                    })
                    .catch(err => {
                        console.log(err.response);
                        window.location = '/404'
                    })
            }
        }
    }
</script>

<style scoped>

</style>