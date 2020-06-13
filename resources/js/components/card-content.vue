<template>
    <div class="col-xs col-sm col- col-md col-lg col-xl-12 content-card margin-top-fixd">
        <div class="col-xs col-sm col- col-md col-lg col-xl-12  buy-card flex">
            <card-right v-if="ok === 1" :orders1="orders" @send_number="get1($event)" @final-cost="get2($event)"></card-right>
            <card-address-content-right v-if="ok === 0"  @final-cost="get2($event)" @check-user="check_user($event)"></card-address-content-right>
            <card-pay-right @factor="get_factor($event)" :sending_cost="sending_cost" v-if="ok === 3" @discount_id="get_discount($event)" @cost-after-off="getNewPrice($event)" @send-pay-method="payMethod($event)" :price="price" :orders1="orders" @final-cost="get2($event)"></card-pay-right>
            <card-left :discountId="discountId" :factor="factor" :sending_cost="sending_cost" :minimum_price="minimum_price" :P_method="P_method" :user="user" :price="price" :off="off" :orders1="orders" :check="check"></card-left>
        </div>
    </div>
</template>

<script>
    export default {
        name: "card-content" ,
        props: ['orders' , 'user' , 'minimum_price' , 'sending_cost'] ,

        created() {
           if (this.$route.path === '/card/products')
           {
               this.ok = 1
           }
            else if (this.$route.path === '/card/address')
            {
                this.ok = 0;
            }
           else if (this.$route.path === '/card/pay')
           {
               this.ok = 3;
           }
        } ,

        watch:{
            '$route' (to , from) {
                if (to.path === '/card/products')
                {
                    this.ok = 1
                }
                else if (to.path === '/card/address')
                {
                    this.ok = 0;
                }
                else if (to.path === '/card/pay')
                {
                    this.ok = 3;
                }
             }
        } ,

        data() {
            return {
                price: '' ,
                ok: '' ,
                P_method: '' ,
                check: '' ,
                off: 0 ,
                factor: false ,
                discountId: ''
            }
        } ,

        methods: {
            get_discount(event) {
                this.discountId = event
            } ,
            get_factor(event) {
               this.factor = event
            } ,
            getNewPrice(event) {
               this.off = event
            } ,
            check_user(event) {
               if (event.first_name === null || event.first_name === '' || event.last_name === null || event.last_name === ''
                   || event.address === null || event.address === '' ||  event.postal_code === '' ||  event.postal_code === null)
               {
                   this.check = 0;
               }
               else
               {
                   this.check = 1;
               }
            } ,
            payMethod(event) {
                this.P_method = event
            } ,
            get1(event) {
                this.$emit('send-number1' , event)
            } ,
            get2(event) {
                this.off = 0;
                this.price = event;
            }
        }
    }
</script>

<style scoped>

</style>