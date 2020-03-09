<template>
    <div class="col-xs col-sm col- col-md-9 col-lg-9 col-xl-9  buy-card-right">
        <div class="col-xs col-sm col- col-md-12 col-lg-12 col-xl-12">
            <div id="map" style="width: 400px; height: 300px;"></div>
            <div class="col-xs col-sm col- col-md col-lg col-xl-12  buy-card-right-top">
                <span>  انتخاب آدرس تحویل سفارش </span>
            </div>

            <div class="col-xs col-sm col- col-md col-lg col-xl-12  card-address-right-bottom delete-padding">
                <div class="col-xs col-sm col- col-md col-lg col-xl-12  card-address-right-bottom-1 delete-padding flex">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-3 card-address-right-bottom-1-right">
                        <span class="title-4 text-black">  گیرنده : <span class="title-4 text-black"> {{show.first_name}} {{show.last_name}}  </span> </span>
                    </div>

                    <!--<div  v-if="check === 0" class="col-xs col-sm col- col-md col-lg col-xl-7 card-address-right-bottom-1-left">-->
                        <!--<div class="input-Change-address error-color">-->
                            <!--<span class="title-4 tablinks"> اطلاعات را تکمیل کنید ! </span>-->
                        <!--</div>-->
                    <!--</div>-->
                    <div class="col-xs col-sm col- col-md col-lg col-xl-9 card-address-right-bottom-1-left">
                        <div class="input-Change-address">
                            <a href="#"><span class="title-4 text-black tablinks" onclick="openCity(event, 'Horizontal')"> تغییر ادرس ارسال  </span></a>
                        </div>
                    </div>
                </div>


                <div class="col-xs col-sm col- col-md col-lg col-xl-12  card-address-right-bottom-2 delete-padding flex">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-3 card-address-right-bottom-2-right">
                        <span class="title-4 text-black">  شماره تماس  : {{show.phone_number}}  </span>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-9 card-address-right-bottom-2-left">
                        <span class="title-4 text-black">  کد پستی  : <span> {{show.postal_code}} </span> </span>
                    </div>
                </div>


                <div class="col-xs col-sm col- col-md col-lg col-xl-12  card-address-right-bottom-3 delete-padding">
                    <span class="title-4 text-black"><span> آدرس :</span> {{show.address}} </span>
                </div>
            </div>

            <div class="col-xs col-sm col- col-md col-lg col-xl-12 edite-form tabcontent" id="Horizontal">
                <div class="col-xs col-sm col- col-md col-lg col-xl-12  buy-card-right-top">
                    <span>  ویرایش اطلاعات </span>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-12 edite-form-inside">


                    <div class="form-row">
                        <div class="col-xl-10 mb-3">
                            <input type="text" v-model="show.first_name" class="form-control" id="validationTooltip011" placeholder ="نام" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-xl-10 mb-3">
                            <input type="text" class="form-control" v-model="show.last_name" id="validationTooltip013" placeholder ="نام خانوادگی" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-xl-10 mb-3">
                            <input type="text" class="form-control" v-model="show.address" id="validationTooltip014" placeholder ="آدرس جدید را وارد کنید" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-xl-10 mb-3">
                            <input type="text" class="form-control" v-model="show.postal_code" id="validationTooltip0145" placeholder ="کدپستی" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div v-if="error === 1" class="alert alert-danger">
                        {{errorMessage}}
                    </div>
                    <div v-if="error === 0" class="alert alert-success">
                        <i class="fas fa-check-circle"><span>تغییرات با موفقیت اعمال شد</span></i>
                    </div>

                    <div class="col-xs col-sm col- col-md col-lg col-xl-10 inside-page-input margin-bottom" style="margin-bottom: 20px">
                        <button class="btn btn-primary" type="button" @click="edit_user" style="margin-top: 20px;font-size: 13px;margin-right: 15px;"><span>ذخیره تغییرات</span></button>
                    </div>

                </div>

            </div>

        </div>


        <div class="col-xs col-sm col- col-md col-lg col-xl-12 card-factor-end flex">
            <div class="col-xs col-sm col- col-md col-lg col-xl-6 card-factor-end-right">
                <span><i class="fas fa-angle-double-right"></i></span>
                <router-link to="/card/products"><span class="title-4">  بازگشت به سبد خرید  </span></router-link>
            </div>
            <div class="col-xs col-sm col- col-md col-lg col-xl-6 card-factor-end-left">
                <router-link to="/card/pay"><span class="title-4"> تایید و ادامه ثبت سفارش  </span></router-link>
                <span><i class="fas fa-angle-double-left"></i></span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "card-address-content-right" ,
        // props:['user'] ,

      created() {
         this.cost();
         this.user();
      } ,
        data() {
            return {
                check: '' ,
                sum: '' ,
                show: {
                    first_name: '' ,
                    last_name: '' ,
                    phone_number: '' ,
                    postal_code: '' ,
                    address: '' ,
                } ,
                error: '' ,
                errorMessage: ''
            }
        } ,
        methods: {
            user() {
                axios({
                    url: '/api/user' ,
                    method: 'get' ,
                    headers: {
                        Accept: 'application/json' ,
                        Authorization: `Bearer ${localStorage.token}`
                    } ,
                })
                    .then(res => {
                        console.log(res);
                        this.show = res.data;
                        this.$emit('check-user' , this.show);
                    })
                    .catch(err => {
                        console.log(err.response);
                        this.error = 1;
                        this.errorMessage = err.response.data;
                        this.$emit('check-user' , this.show);
                    });
            } ,
            edit_user() {
                axios({
                    url: '/api/edit' ,
                    method: 'post' ,
                    headers: {
                        Accept: 'application/json' ,
                        Authorization: `Bearer ${localStorage.token}`
                    } ,
                    data: {
                        first_name: this.show.first_name ,
                        last_name: this.show.last_name ,
                        phone: this.show.phone ,
                        phone_number: this.show.phone_number ,
                        email: this.show.email ,
                        postal_code: this.show.postal_code ,
                        city: this.show.city ,
                        state: this.show.state ,
                        address: this.show.address ,
                    }
                })
                    .then(res => {
                        console.log(res);
                        this.show = res.data;
                        this.error = 0;
                        this.$emit('check-user' , this.show);
                    })
                    .catch(err => {
                        console.log(err.response);
                        this.error = 1;
                        this.errorMessage = err.response.data;
                        this.$emit('check-user' , this.show);
                    });
            } ,
            cost() {
                let s = 0;
                let a = JSON.parse(localStorage.order);
                a.forEach(item => {
                    s += item.final_price1;
                });
                this.sum = s;
                this.$emit('final-cost' , this.sum);
            } ,
        }
    }
</script>

<style scoped>

</style>