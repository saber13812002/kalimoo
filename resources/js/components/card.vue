<template>
    <div>
        <main-header @add-order="orders($event)" @second-emit-cat="get_cat($event)" :number="NO" @send-user="user($event)"></main-header>

        <card-content :sending_cost="setting_data.sending_cost" :minimum_price="setting_data.minimum_order_cost" :orders="order" @send-number1="getNO($event)" :user="user1"></card-content>

        <main-footer :menu="main_cat" @get_setting="getSet($event)"></main-footer>
    </div>
    <!--<not-found-error v-else></not-found-error>-->
</template>

<script>
    export default {
        name: "card" ,

        data() {
            return {
                order: '' ,
                NO: '' ,
                user1:'' ,
                main_cat: [] ,
                setting_data: []
            }
        } ,


        methods: {
            getSet(event) {
               this.setting_data = event;
            } ,
            get_cat(event) {
                this.main_cat = event
            } ,
            getNO(event) {
                this.NO = event
            } ,
            orders(event) {
                this.order = event
            } ,
            user(event) {
                this.user1 = event;
            }
        }
    }
</script>

<style scoped>

</style>