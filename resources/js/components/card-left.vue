<template>
    <div class="col-xs col-sm col- col-md-3 col-lg-3 col-xl-3  buy-card-left">
        <div class="col-xs col-sm col- col-md col-lg col-xl-12  buy-card-left-top delete-padding">
            <div class="col-xs col-sm col- col-md col-lg col-xl-12  buy-card-left-top-filter">
                <div class="col-xs col-sm col- col-md col-lg col-xl-12 buy-card-left-top-filter-main flex delete-padding">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-6 buy-card-left-top-filter-main-inside-right">
                        <span class="title-4 text-black"> مبلغ کل  <span class="title-4 text-black">  </span> </span>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-6 buy-card-left-top-filter-main-inside-left">
                        <span class="title-4 text-black">  {{price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
                    </div>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-12 buy-card-left-top-filter-main flex delete-padding">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-6 buy-card-left-top-filter-main-inside-right">
                        <span class="title-4" style="color: #3bb4d5;">تخفیف </span>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-6 buy-card-left-top-filter-main-inside-left">
                        <span v-if="off" class="title-4" style="color: #3bb4d5;">  {{(price - off).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
                        <span v-else class="title-4" style="color: #3bb4d5;">  0 تومان</span>
                    </div>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-12 buy-card-left-top-filter-main flex delete-padding">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-6 buy-card-left-top-filter-main-inside-right">
                        <span class="title-4 text-black"> هزینه ارسال  </span>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-6 buy-card-left-top-filter-main-inside-left">
                        <span class="title-4 text-black" v-if="sending_cost"> {{sending_cost.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}  </span>
                        <span class="title-4 text-black" v-else> رایگان  </span>
                    </div>
                </div>
            </div>
            <hr class="hr-price">
            <div class="col-xs col-sm col- col-md col-lg col-xl-12  buy-card-left-top-price delete-padding">
                <div class="col-xs col-sm col- col-md col-lg col-xl-12 buy-card-left-top-price-1">
                    <span class="text-black">  مبلغ قابل پرداخت  : </span>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-12 buy-card-left-top-price-2">
                    <span class="text-black" v-if="off > 0 && !sending_cost"> {{off.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان  </span>
                    <span class="text-black" v-if="off === 0 && !sending_cost"> {{price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان  </span>
                    <span class="text-black" v-if="off < 0"> رایگان </span>
                    <span class="text-black" v-if="off > 0 && sending_cost">{{(off + sending_cost).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان  </span>
                    <span class="text-black" v-if="off === 0 && sending_cost">{{(price + sending_cost).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان  </span>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-12 buy-card-left-top-price-3" v-if="ok === 1">
                    <a @click="checkLogin"><div class="col-xs col-sm col- col-md-12 col-lg col-xl-12 pay-price">
                        <span><i class="fas fa-arrow-left"></i></span>
                        <span>  ادامه   </span>
                    </div></a>
                </div>

                <div class="col-xs col-sm col- col-md col-lg col-xl-12 buy-card-left-top-price-3" v-if="ok === 0">
                    <router-link v-if="check === 1" to="/card/pay"><div class="col-xs col-sm col- col-md-12 col-lg col-xl-12 pay-price">
                        <span><i class="fas fa-arrow-left"></i></span>
                        <span>  پرداخت  </span>
                    </div></router-link>
                    <a v-if="check === 0" @click="showAlert">
                    <div class="col-xs col-sm col- col-md-12 col-lg col-xl-12 pay-price">
                        <span><i class="fas fa-arrow-left"></i></span>
                        <span>  پرداخت  </span>
                    </div></a>
                </div>


                <div style="cursor: pointer" class="col-xs col-sm col- col-md col-lg col-xl-12 buy-card-left-top-price-3" v-if="ok === 2">
                    <a v-if="P_method === 'online'" @click="go_to_pay"><div class="col-xs col-sm col- col-md-12 col-lg col-xl-12 pay-price">
                    <span><i class="fas fa-arrow-left"></i></span>
                    <span> پرداخت </span>
                    </div></a>
                    <a v-if="P_method === 'offline'" @click="create_orders"><div class="col-xs col-sm col- col-md-12 col-lg col-xl-12 pay-price">
                        <span><i class="fas fa-arrow-left"></i></span>
                        <span> ثبت سفارش  </span>
                    </div></a>
                </div>
            </div>
        </div>
        <div class="col-xs col-sm col- col-md col-lg col-xl-12  buy-card-left-bottom delete-padding">
            <div class="col-xs col-sm col- col-md col-lg col-xl-12  buy-card-left-bottom-1">
                <span><i class="fas fa-shipping-fast"></i></span>
                <span class="title-5 text-gray">  هفت روز ضمانت تعویض </span>
            </div>
            <div class="col-xs col-sm col- col-md col-lg col-xl-12  buy-card-left-bottom-1">
                <span><i class="fas fa-shipping-fast"></i></span>
                <span class="title-5 text-gray">  پرداخت در محل با کارت بانکی   </span>
            </div>
            <div class="col-xs col-sm col- col-md col-lg col-xl-12  buy-card-left-bottom-1">
                <span><i class="fas fa-shipping-fast"></i></span>
                <span class="title-5 text-gray">  تحویل اکسپرس   </span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "card-left" ,
        props: ['price' , 'discountId' , 'factor', 'P_method' , 'orders1' , 'check' , 'off' , 'user' , 'minimum_price' , 'sending_cost'] ,

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
                this.ok = 2;
            }

            //this.cost();
        } ,

        watch:{

            check() {
                if (this.check === 0)
                {
                    swal("خطا", "اطلاعات را کامل کنید", "error");
                }
            } ,
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
                    this.ok = 2;
                }
            }
        } ,

        data() {
            return {
                ok: '' ,
                sum: '' ,

            }
        } ,

        methods: {
            checkPrice() {
                if (this.price < this.minimum_price)
                {
                    this.$toasted.error(`حداقل مبلغ سفارش باید ${this.minimum_price} باشد`, {
                        position: 'bottom-center' ,
                        theme: 'bubble' ,
                        fitToScreen: true ,
                        fullWidth: true ,
                        className: ['your-custom-class']
                    }).goAway(3000);
                    return 0;
                }
                else
                {
                    return 1;
                }
            } ,
            checkLogin() {
                if (this.user)
                {
                    if (this.checkPrice())
                    {
                        this.$router.push({ path: '/card/address' })
                    }
                }
                else
                {
                            this.$toasted.error('لطفا وارد سایت شوید', {
                                position: 'top-center' ,
                                theme: 'bubble' ,
                                fitToScreen: true ,
                                fullWidth: true ,
                                className: ['your-custom-class']
                            }).goAway(5000);
                }
            } ,
            cost() {
                let s = 0;
                let a = JSON.parse(localStorage.order);
                a.forEach(item => {
                    s += item.final_price1;
                });
                this.sum = s;
                console.log(this.sum)
            } ,
            showAlert() {
                swal("خطا", "اطلاعات را کامل کنید", "error");
            } ,
            sendMessage(code) {
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
            go_to_pay() {
                let cost = '';
                let factor = '';
                let discountId = '';
                if (this.off > 0)
                {
                    cost = this.off
                }
                else if (this.off < 0)
                {
                    cost = 0;
                }
                else
                {
                    cost = this.price
                }

                if (this.sending_cost)
                {
                    cost += this.sending_cost;
                }
                if (!this.factor)
                {
                    factor = 0;
                }
                else
                {
                    factor = this.factor;
                }

                if (!this.discountId)
                {
                    discountId = null
                }
                else
                {
                    discountId = this.discountId
                }

                let finalorder = {
                    total: cost ,
                    products: this.orders1 ,
                    factor: factor ,
                    discountId: discountId
                };
                localStorage.setItem('online_payment' , JSON.stringify(finalorder));
                axios({
                    url: '/api/zarinpal/request' ,
                    method: 'post' ,
                    data: {
                        price: cost ,
                    } ,
                    headers: {
                        Accept: 'application/json' ,
                        Authorization: `Bearer ${localStorage.token}`
                    }
                })
                    .then(res => {
                        window.open(res.data)
                    })
                    .catch(err => {
                        console.log(err.response);
                    })
            } ,
            create_orders() {
                let cost = '';
                let factor = '';
                let discountId = '';
                if (this.off > 0)
                {
                    cost = this.off
                }
                else if (this.off < 0)
                {
                    cost = 0;
                }
                else
                {
                    cost = this.price
                }

                if (this.sending_cost)
                {
                    cost += this.sending_cost;
                }
                if (!this.factor)
                {
                    factor = 0;
                }
                else
                {
                    factor = this.factor;
                }

                if (! this.discountId)
                {
                    discountId = null
                }
                else
                {
                    discountId = this.discountId
                }

                axios({
                    url: '/api/order/create' ,
                    method: 'post' ,
                    data: {
                        total: cost ,
                        products: this.orders1 ,
                        factor: factor ,
                        payment_method: this.P_method ,
                        discountId: discountId
                    } ,
                    headers: {
                        Accept: 'application/json' ,
                        Authorization: `Bearer ${localStorage.token}`
                    }
                })
                    .then(res => {
                        console.log(res);
                        localStorage.removeItem('order');
                        this.sendMessage(res.data.order.tracking_code);
                        this.$router.push({ path: `/${res.data.order.id}/order/pay`})
                    })
                    .catch(err => {
                        console.log(err.response);
                        localStorage.removeItem('order');
                        this.$router.push({ path: '/order/pay/error'})
                    })
            }
        }
    }
</script>

<style>
    .swal-text {
        background-color: #ffffff;
        padding: 17px;
        border: 1px solid #ffffff;
        display: block;
        margin: 22px;
        font-family: irs;
        text-align: center;
    }
</style>