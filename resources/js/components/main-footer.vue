<template>
    <div class="col-xs col-sm col- col-md col-lg col-xl-12 footer-main delete-padding">
        <div class="col-xs col-sm col- col-md col-lg col-xl-11 footer-main-content flex">
            <div class="col-xs col-sm col- col-md-4 col-lg col-xl-4 footer-description">
                <div class="footer-description-name">
                    <img :src="'/img/logo/' + setting_data.logo" alt="کالیمو" style="float: right">
                </div>
                <div class="footer-description-comment">
                    <p class="">{{setting_data.description}}</p>
                </div>
                <div class="footer-description-images">
                    <img src="/img/footer/logo-saman.png">
                    <img src="/img/footer/logo-enmad.png">
                    <img src="/img/footer/logo-saman.png">
                    <a target="_blank" href="https://trustseal.enamad.ir/?id=148757&amp;Code=8z8qz8CsHDwRf26ucrXe"><img src="https://Trustseal.eNamad.ir/logo.aspx?id=148757&amp;Code=8z8qz8CsHDwRf26ucrXe" alt="" style="cursor:pointer" id="8z8qz8CsHDwRf26ucrXe"></a>
                </div>
            </div>
            <div class="col-xs col-sm col- col-md-2 col-lg col-xl-2 footer-subject">
                <div class="footer-subject-name">
                    <span class="">  منوی سایت </span>
                </div>
                <div class="footer-subject-des">

                    <ul>
                        <a v-for="item in menu" :href="'/products/category/' + item.id" ><li class="">{{item.name}} </li></a>

                    </ul>
                </div>
            </div>
            <div class="col-xs col-sm col- col-md-2 col-lg col-xl-2 footer-blog">
                <div class="footer-blog-name">
                    <span class="">فهرست عناوین</span>
                </div>
                <div class="footer-blog-des">
                    <a href="#">
                        <ul>
                            <a href="/"><li class="">صفحه اصلی</li></a>
                            <!--<li style="list-style: none; display: inline"></li>-->
                            <!--&lt;!&ndash;<li class="">محصولات</li>&ndash;&gt;-->
                            <!--<li style="list-style: none; display: inline"></li>-->
                            <a href="/contact-us"><li class="">تماس با ما</li></a>
                            <!--<li style="list-style: none; display: inline"></li>-->
                            <a href="/about-us"><li class="">درباره ما</li></a>
                            <!--<li style="list-style: none; display: inline"></li>-->
                            <li class="">اپلیکیشن</li>
                        </ul></a>
                </div>
            </div>
            <div class="col-xs col-sm col- col-md-4 col-lg col-xl-4 footer-permit">


                <div class="col-xs col-sm col- col-md col-lg col-xl-12 footer-permit-end">
                    <div class="footer-permit-top-name">
                        <span class="">  ارتباط با ما  </span>
                    </div>
                    <div class="footer-permit-end-address">
                        <span class="">آدرس : {{setting_data.address}}</span>
                    </div>
                    <div class="footer-permit-end-tell">
                        <span class="">تلفن : {{setting_data.consultant_number}}</span>
                    </div>
                    <div class="footer-permit-end-email">
                        <span class="">ایمیل : {{setting_data.email_info}}</span>
                    </div>
                </div>

                <div class="footer-description-icon">
                    <a :href="setting_data.telegram"><i class="fab fa-telegram-plane"></i></a> <a :href="setting_data.email"><i class="fab fa-twitter"></i></a> <a :href="setting_data.instagram"><i class="fab fa-instagram"></i></a><a :href="setting_data.consultant_mobile"><i class="fab fa-linkedin"></i></a>
                </div>


            </div>
        </div>
        <div class="col-xs col-sm col- col-md col-lg col-xl-12 footer-main-end flex">
            <div class="col-xs col-sm col- col-md col-lg col-xl-6 footer-main-end-law">
                <span class="">تمام حقوق مادی و معنوی این سایت متعلق به کالیمو می باشد.</span>
            </div>

            <div class="col-xs col-sm col- col-md col-lg col-xl-6 footer-main-end-webdesign">
            <span>
                <a href="http://sarinweb.com">طراحی سایت</a> و  <a href="http://sarinweb.com">سئو</a>
                توسط   <a href="http://sarinweb.com">سارین وب  </a></span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "main-footer" ,
        created() {
            console.log('main-footer component');
            this.get_setting();
        } ,

        props: ['menu'] ,

        data() {
            return {
                setting_data: []
            }
        } ,

        methods: {
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
                        this.$emit('get_setting' , this.setting_data);
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