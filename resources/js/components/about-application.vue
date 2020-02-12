<template>
    <div class="col-xs col-sm col- col-md col-lg col-xl-9 delete-padding">
        <div class="col-xs col-sm col-10 col-md-11 col-lg-9 col-xl-9 users-main delete-padding-left">
            <div data-v-77a5c9cc="" class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                <label data-v-77a5c9cc="" for="inputname">عنوان</label>
                <input data-v-77a5c9cc="" type="text" v-model="setting_data.app_title" id="inputname"  class="form-control">
            </div>
            <div class="form-group col-md-12">
                <label for="validationTextarea"> توضیحات اپلیکیشن </label>
                <textarea id="validationTextarea" v-model="setting_data.app_text"  required="required" class="form-control"></textarea> <div data-v-6ccae7d5="" class="invalid-feedback">
                لطفا توضیحات اپلیکیشن را واد کنید
            </div>


                <div data-v-77a5c9cc="" class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                    <label data-v-77a5c9cc="" for="inputnafme">لینک گوگل پلی</label>
                    <input data-v-77a5c9cc="" type="text" v-model="setting_data.app_googleplay_link" id="inputnafme"  class="form-control">
                </div>

                <div data-v-77a5c9cc="" class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                    <label data-v-77a5c9cc="" for="inputnffame">لین کافه بازار</label>
                    <input data-v-77a5c9cc="" type="text" v-model="setting_data.app_Bazar_link" id="inputnffame" class="form-control">
                </div>

                <div data-v-77a5c9cc="" class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                    <label data-v-77a5c9cc="" for="inputnaeme">لینک سیب اپ</label>
                    <input data-v-77a5c9cc="" type="text" v-model="setting_data.app_sibapp_link" id="inputnaeme"  class="form-control">
                </div>

                <button class="btn btn-primary" v-on:click="update_setting" type="button" style="margin-top: 20px;font-size: 13px;margin-right: 15px;">  ذخیره تغییرات </button>



                <!--<div class="custom-file"  style="margin-top: 20px;">-->
                    <!--<input type="file"  class="custom-file-input" id="google"  @change="handle('app_googleplay' ,'google')">-->
                    <!--<label for="google" class="custom-file-label">انتخاب عکس گوگل پلی</label>-->
                <!--</div>-->
                <!--<div class="custom-file"  style="margin-top: 20px;">-->
                    <!--<input type="file" id="bazar" class="custom-file-input" @change="handle('app_Bazar' ,'bazar')">-->
                    <!--<label for="bazar" class="custom-file-label">انتخاب عکس کافه بازار</label>-->
                <!--</div>-->
                <!--<div class="custom-file"  style="margin-top: 20px;">-->
                    <!--<input type="file" id="sibapp" class="custom-file-input"  @change="handle('app_sibapp' ,'bazar')">-->
                    <!--<label for="sibapp" class="custom-file-label">انتخاب عکس سیب اپ</label>-->
                <!--</div>-->
                <div class="custom-file"  style="margin-top: 20px;">
                    <input type="file" id="img1" class="custom-file-input" @change="handle('app_first_image' ,'img1')">
                    <label for="img1" class="custom-file-label">انتخاب عکس اپ اول</label>
                </div>
                <div class="custom-file"  style="margin-top: 20px;">
                    <input type="file" id="img2" class="custom-file-input" @change="handle('app_second_image' ,'img2')">
                    <label for="img2" class="custom-file-label">انتخاب عکس اپ دوم</label>
                </div>
                <div class="custom-file"  style="margin-top: 20px;">
                    <input type="file" id="background" class="custom-file-input" @change="handle('app_background' ,'background')">
                    <label for="background" class="custom-file-label">انتخاب عکس بک گراند</label>
                </div>
            </div>
        </div>


        <div class="col-xs col-sm col- col-md col-lg col-xl-12 div-app flex delete-padding">

            <div class="col-xs col-sm col- col-md col-lg col-xl-6 div-app-right">
                <div class="col-xs col-sm col- col-md col-lg col-xl-11 div-app-right-subject">
                    <div class="col-md-7 div-app-right-subject-top">
                        <span class="title-1"> {{setting_data.app_title}}   </span>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-7 div-app-right-subject-buttom">
                        <span class="title-1">  همیشه در دسترسه !  </span>
                    </div>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-11 div-app-right-des">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-9 div-app-right-description">
                        <p class="title-4" style="text-align: justify"> {{setting_data.app_text}} </p>
                    </div>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-11 div-app-right-download flex">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-4 div-app-right-downloadapp">
                        <a :href="setting_data.app_googleplay_link"><img src="/img/app/google-play.png"></a>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-4 div-app-right-downloadapp">
                        <a :href="setting_data.app_Bazar_link"><img src="/img/app/cafebazzar.png"></a>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-4 div-app-right-downloadapp">
                        <a :href="setting_data.app_sibapp_link"><img src="/img/app/sibapp.png"></a>
                    </div>
                </div>
            </div>
            <div class="col-xs col-sm col- col-md col-lg col-xl-6 div-app-left flex">
                <div class="col-xs col-sm col- col-md col-lg col-xl-5 div-app-left-img1">
                    <img :src="'/images/application/' + setting_data.app_first_image">
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-7 div-app-left-img2">
                    <img :src="'/images/application/' + setting_data.app_first_image">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "about-application" ,
      //  props: ['setting_data'] ,

        created() {
            this.update_local()
        } ,

        data() {
            return {
                setting_data: [] ,
            }
        } ,

        methods: {
            handle(param , id) {
                let file = document.getElementById(id).files[0];
                let data = new FormData();

                if (file !== '' && file !== null)
                {
                    swal({
                        title: 'در حال آپلود' ,
                        text: ' لطفا منتظر بمانید ...' ,
                        className: 'your-custom-class' ,
                        icon: 'warning'
                    });
                    data.append('file' , file);
                    data.append('param' , param);
                    axios({
                        url: '/api/setting/app/image' ,
                        method: 'post' ,
                        headers: {
                            accept: 'application/json'
                        } ,
                        data: data
                    })
                        .then(res => {
                            console.log(res.data);
                            this.update_local();
                            swal({
                                title: 'تغییرات با موفقیت اعمال شد' ,
                                text: 'تصویر با موفقیت تغییر کرد' ,
                                className: 'your-custom-class' ,
                                icon: 'success'
                            });
                        })
                        .catch(err => {
                            console.log(err.response);
                            swal({
                                title: 'خطا' ,
                                text: err.response.data[0] ,
                                className: 'your-custom-class' ,
                                icon: 'error'
                            });
                        })
                }
             console.log(file)
            } ,
            update_local() {
                axios({
                    url: '/api/setting/index' ,
                    method: 'get' ,
                    headers: {
                        accept: 'application/json'
                    } ,
                })
                    .then(res => {
                        console.log(res);
                        this.setting_data = res.data[0];
                    })
                    .catch(err => {
                        console.log(err.response);
                        this.$toasted.error(err.response.data, {
                            position: 'bottom-center' ,
                            theme: 'bubble' ,
                            fitToScreen: true
                        }).goAway(3000);
                    })
            } ,
            update_setting() {
                axios({
                    url: '/api/setting/app' ,
                    method: 'post' ,
                    headers: {
                        accept: 'application/json'
                    } ,
                    data: {
                        app_title: this.setting_data.app_title ,
                        app_text: this.setting_data.app_text ,
                        app_googleplay_link: this.setting_data.app_googleplay_link ,
                        app_Bazar_link: this.setting_data.app_Bazar_link ,
                        app_sibapp_link: this.setting_data.app_sibapp_link ,




                        // description: this.setting_data.description ,
                        // keywords: this.setting_data.keywords ,
                        // address: this.setting_data.address ,
                        // consultant_mobile: this.setting_data.consultant_mobile ,
                        // consultant_number: this.setting_data.consultant_number ,
                        // telegram: this.setting_data.telegram,
                        // email: this.setting_data.email ,
                        // email_info: this.setting_data.email_info ,
                        // sending_cost: this.setting_data.sending_cost ,
                        // instagram: this.setting_data.instagram ,
                        // minimum_order_cost: this.setting_data.minimum_order_cost ,
                        // account_number: this.setting_data.account_number ,
                        // card_number: this.setting_data.card_number ,
                        // account_owner: this.setting_data.account_owner ,

                    }
                })
                    .then(res => {
                        console.log(res);
                        this.setting_data = res.data;
                        this.$toasted.success('تنظیمات اعمال شد' , {
                            position: 'bottom-center' ,
                            theme: 'bubble' ,
                            fitToScreen: true ,
                            className: ['your-custom-class']
                        }).goAway(2000);
                    })
                    .catch(err => {
                        console.log(err.response);
                        err.response.data.forEach(error => {
                            this.$toasted.error(error.toString() , {
                                position: 'bottom-center' ,
                                theme: 'bubble' ,
                                fitToScreen: true ,
                                className: ['your-custom-class']
                            }).goAway(3000);
                        })
                    })
            }
        }
    }
</script>

<style scoped>

</style>