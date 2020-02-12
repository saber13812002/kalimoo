<template>
    <div>
        <main-header @second-emit-cat="get_cat($event)"></main-header>
        <div class="col-xs col-sm col- col-md col-lg col-xl-12 information-contact-us delete-padding margin-top-fixd">
            <div class="col-xs col-sm col- col-md col-lg col-xl-12 information-contact-us-start flex">
                <div class="col-xs col-sm col- col-md col-lg col-xl-6 box-contact-us">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-9 box-contact-us-inside">
                        <div class="form_style2">
                            <form>
                                <ul class="step none_list_style">
                                    <li class="item">
                                        <div class="icon"><i class="far fa-user"></i></div>
                                        <input type="text" placeholder="نام و نام خانوادگی" name="name" class="title-4">
                                        <span class="focus_bg"></span>
                                    </li>
                                    <li class="item">
                                        <div class="icon"><i class="far fa-envelope-open"></i></div>
                                        <input type="text" placeholder="ایمیل" name="email">
                                        <span class="focus_bg"></span>
                                    </li>
                                    <li class="item textarea">
                                        <div class="icon"><i class="far fa-comments"></i></div>
                                        <textarea placeholder="متن پیام شما..." name="message"></textarea>
                                        <span class="focus_bg"></span>
                                    </li>
                                    <li class="item submit">
                                        <button>ارسال پیام</button>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-6 des-contact-us">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 des-contact-us-subject">
                        <span>  راه های ارتباطی  </span>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 des-contact-us-text title-4">
                        <p>   اتومبیل شما در مسافرت جاده ای همواره با خطر از کار افتادگی در اثر تصادفات، سانحه یا خرابی روبور است. در این مواقع انتقال اتومبیل به تعمیرگاه مناسب، تهیه لوازم یدکی برای تعمیر آن، انتقال سرنشینان به مقصد مورد نظر و مطمئن اولین و مهم ترین مشکل شما و خانواده شما است.  </p>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 des-contact-us-number flex delete-padding">
                        <div class="col-xs col-sm col- col-md col-lg col-xl-6 des-contact-us-number-tell delete-padding">
                            <div class="all-tell">
                                <div class="contact-us-tell">
                                    <span><i class="fas fa-tty"></i></span>
                                    <span class="title-4"> {{setting_data.consultant_number}} </span>
                                </div>
                                <div class="contact-us-emaill">
                                    <span><i class="far fa-envelope"></i></span>
                                    <span class="title-4">{{setting_data.email_info}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs col-sm col- col-md col-lg col-xl-6 des-contact-us-number-img">
                            <div class="icon-img-contact-us">
                                <div class="hand_range">
                                    <div class="hand" style="left: -5.08006px; top: -2.91053px;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs col-sm col- col-md col-lg col-xl-12 information-contact-us-end">
                <div class="col-xs col-sm col- col-md col-lg col-xl-5 contact-us-end">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 contact-us-end-top">
                        <span class="text-white title-4">  برای پیگیری سفارش خود به صفحه زیر مراجعه کنید.  </span>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 contact-us-end-box">
                        <span class="input-site title-4">  ابتدا در سایت وارد شوید </span>
                    </div>
                </div>
            </div>
        </div>
        <main-footer :menu="main_cat"></main-footer>
    </div>
</template>

<script>
    export default {
        name: "contact-us" ,

        created() {
            this.get_setting();
        } ,

        data() {
            return {
                setting_data: [] ,
                main_cat: []
            }
        } ,


        methods: {
            get_cat(event) {
                this.main_cat = event
            } ,
            get_setting() {
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
        }
    }
}
</script>

<style scoped>

</style>