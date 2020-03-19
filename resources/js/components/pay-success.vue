<template>
    <div>
        <main-header @second-emit-cat="get_cat($event)" @send-user="get_user($event)"></main-header>
        <div class="col-xs col-sm col- col-md col-lg col-xl-12 pay-Successful">
            <center v-if="loading === 0">
                <div v-if="success === 1" class="col-xs col-sm col- col-md col-lg col-xl-10 pay-Successful-inside">
                    <div   class="col-xs col-sm col- col-md col-lg col-xl-10 pay-Successful-inside-img">
                        <img src="/img/pay/success.png">
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-10 pay-Successful-inside-text-top">
                        <span>   سفارش شما با موفقیت ثبت شد :)  </span>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-10 pay-Successful-inside-text-end">
                        <span class="text-black" v-if="code">  شماره پیگیری  سفارش  :  <span>  {{code}} </span>  </span>
                        <span class="text-black" v-if="code1">  شماره پیگیری  سفارش  :  <span>  {{code1}} </span>  </span>
                    </div>
                </div>
            </center>
            <center v-if="loading === 1">
                <div class="col-xs col-sm col- col-md col-lg col-xl-10 pay-Successful-inside">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-10 text-gray">
                        <span >  لطفا منتظر بمانید  </span>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-10 pay-Successful-inside-img">
                        <div class="lds-ellipsis" ><div></div><div></div><div></div><div></div></div>
                    </div>

                </div>

            </center>
        </div>
        <main-footer :menu="main_cat"></main-footer>
    </div>
</template>

<script>
    export default {
        name: "pay-success" ,
        props:['code' ,'pay_id'] ,

        data() {
            return {
                code1: '' ,
                loading: 0 ,
                user: null ,
                success: 0 ,
                main_cat: [] ,
            }
        } ,

        // created() {
        //
        // } ,

        methods: {
            get_cat(event) {
                this.main_cat = event
            } ,
            get_user(event) {
                this.user = event;
                if (this.$route.path === '/payment-success') {
                    this.create_orders();
                }
                else
                {
                    if (this.code)
                    {
                        this.success = 1;
                        this.loading = 0;
                    }
                }

            } ,
            sendMessage(code) {
                console.log(this.user);
                axios({
                    url: '/api/sendMessage' ,
                    method: 'post' ,
                    data: {
                        phone_number: this.user.phone_number,
                        first_name: this.user.first_name,
                        code: code,
                    } ,
                    headers: {
                        Accept: 'application/json' ,
                    }
                })
                    .then(res => {
                        console.log(res);
                    })
                    .catch(err => {
                        console.log(err.response);
                    })
            } ,
            create_orders() {
                this.loading = 1;
                let obj = JSON.parse(localStorage.getItem('online_payment')) || null;
                if (obj)
                {
                    obj.payment_method = 'online';
                    if (this.pay_id)
                    {
                        obj.pay_id = this.pay_id;
                    }
                    else
                    {
                        obj.pay_id = 'error'
                    }


                    axios({
                        url: '/api/order/create' ,
                        method: 'post' ,
                        data: obj ,
                        headers: {
                            Accept: 'application/json' ,
                            Authorization: `Bearer ${localStorage.token}`
                        }
                    })
                        .then(res => {
                            console.log(res);
                            this.success = 1;
                            this.loading = 0;
                            this.code1 = res.data.order.tracking_code;
                            this.sendMessage(this.code1);
                            localStorage.removeItem('online_payment');
                            localStorage.removeItem('order');
                        })
                        .catch(err => {
                            this.success = 0;
                            console.log(err.response);
                            localStorage.removeItem('online_payment');
                            localStorage.removeItem('order');
                            this.loading = 0;
                        })
                }
                else
                {
                    this.success = 0;
                    window.location = '/'
                }
            }
        }
    }
</script>

<style scoped>
    .lds-ellipsis {
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
    }
    .lds-ellipsis div {
        position: absolute;
        top: 33px;
        width: 13px;
        height: 13px;
        border-radius: 50%;
        background: #1b73f4;
        animation-timing-function: cubic-bezier(0, 1, 1, 0);
    }
    .lds-ellipsis div:nth-child(1) {
        left: 8px;
        animation: lds-ellipsis1 0.6s infinite;
    }
    .lds-ellipsis div:nth-child(2) {
        left: 8px;
        animation: lds-ellipsis2 0.6s infinite;
    }
    .lds-ellipsis div:nth-child(3) {
        left: 32px;
        animation: lds-ellipsis2 0.6s infinite;
    }
    .lds-ellipsis div:nth-child(4) {
        left: 56px;
        animation: lds-ellipsis3 0.6s infinite;
    }
    @keyframes lds-ellipsis1 {
        0% {
            transform: scale(0);
        }
        100% {
            transform: scale(1);
        }
    }
    @keyframes lds-ellipsis3 {
        0% {
            transform: scale(1);
        }
        100% {
            transform: scale(0);
        }
    }
    @keyframes lds-ellipsis2 {
        0% {
            transform: translate(0, 0);
        }
        100% {
            transform: translate(24px, 0);
        }
    }

</style>