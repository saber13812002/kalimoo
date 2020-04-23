<template>
        <div class="col-xs col-sm col- col-md col-lg col-xl-12 header-main delete-padding">
            <div class="col-xs col-sm col- col-md col-lg-12 col-xl-12 header-main-content flex">
                <div class="col-xs col-sm col- col-md-4 col-lg-2 col-xl-2 header-main-logo-buy flex">
                    <div class="col-xs col-2 col-sm-2 col-md col-lg-1 col-xl menu-line">
                        <input type="checkbox" id="menu-hamburguer" class="input-none">
                        <label for="menu-hamburguer">
                            <div class="menu-responsive">
                                <span class="hamburguer"></span>
                            </div>
                        </label>
                       <nav class="nav-nav">
                           <ul v-if="user === 1">
                               <li v-if="ok1 === 0">
                                   <router-link v-if="user_firstName && user_lastName" class="text-white" to="/user/profile" style="color: #676767;font-size: 13px">{{user_firstName}} {{user_lastName}}</router-link>
                                   <router-link v-else class="text-white" to="/user/profile" style="color: #676767;font-size: 13px">حساب کاربری</router-link>
                               </li>
                               <li v-if="ok1 === 1">
                                   <a v-if="user_firstName && user_lastName" class="text-white" href="/user/profile" style="color: #676767;font-size: 13px">{{user_firstName}} {{user_lastName}}</a>
                                   <a v-else class="text-white" href="/user/profile" style="color: #676767;font-size: 13px">حساب کاربری</a>
                               </li>
                           </ul>
                           <nav class="main-nav">
                               <ul v-if="user === 0">
                                   <li style="float: none"><a href="#0" class="sign-up text-white" style="font-size: 15px" >ثبت نام</a></li>
                                   <li style="float: none"><a href="#0" class="sign-in text-white" style="font-size: 15px" >ورود</a></li>
                               </ul>
                           </nav>


                           <div class="user-modal">
                               <div class="user-modal-container">
                                   <ul class="switcher">
                                       <li><a href="#0">ورود </a></li>
                                       <li><a href="#0">ساخت اکانت</a></li>
                                   </ul>

                                   <div id="login">
                                       <form class="form">
                                           <p class="fieldset">
                                               <label class="image-replace email" for="signin-email">E-mail</label>
                                               <input class="full-width has-padding has-border" id="signin-email" type="text" v-model="login" placeholder="شماره موبایل یا ایمیل خود را وارد کنید ...">
                                               <span class="error-message">An account with this email address does not exist!</span>
                                           </p>

                                           <p class="fieldset">
                                               <label class="image-replace password" for="signin-password">Password</label>
                                               <input class="full-width has-padding has-border" v-model="password" id="signin-password" type="password"  placeholder="پسورد">
                                               <a href="#0" class="hide-password">نمایش</a>
                                               <span class="error-message">Wrong password! Try again.</span>
                                           </p>

                                           <div class="alert alert-danger" v-if="error1 === 1">
                                               {{errorMessage1}}
                                           </div>

                                           <p class="fieldset">
                                               <input class="full-width auth-button" type="button" value="ورود" @click="login1">
                                           </p>


                                       </form>

                                       <p class="form-bottom-message">
                                           <a href="#0">رمز عبور خود را فراموش کرده اید ؟</a>
                                       </p>
                                       <!-- <a href="#0" class="close-form">Close</a> -->
                                   </div>
                                   <div id="signup" >
                                       <form class="form" v-if="level === 0">
                                           <p class="fieldset">
                                               <label class="image-replace email" for="signin-email1">E-mail</label>
                                               <input class="full-width has-padding has-border" id="signin-email1" v-model="email" type="email" placeholder="ایمیل">
                                               <!--<span class="error-message">An account with this email address does not exist!</span>-->
                                           </p>

                                           <p class="fieldset">
                                               <label class="image-replace password" for="signin-password1">Password</label>
                                               <input class="full-width has-padding has-border" id="signin-password1" v-model="password" type="password"  placeholder="رمز عبور">
                                               <a href="#0" class="hide-password">نمایش</a>
                                               <!--<span class="error-message">Wrong password! Try again.</span>-->
                                           </p>

                                           <p class="fieldset">
                                               <label class="image-replace " for="signin-password2">phone</label>
                                               <input class="full-width has-padding has-border" v-model="phone_number" id="signin-password2" type="text"  placeholder="شماره همراه">
                                               <!--<span class="error-message">Wrong password! Try again.</span>-->
                                           </p>

                                           <!--<p class="fieldset">-->
                                           <!--<input type="checkbox" id="remember-me1" checked>-->
                                           <!--<label for="remember-me1">فراموشی رمز عبور </label>-->
                                           <!--</p>-->

                                           <p class="fieldset">
                                               <input class="full-width auth-button" type="button" value="ثبت نام" @click="getcode">
                                           </p>


                                           <div class="alert alert-warning" v-if="error === 0">
                                               <div>
                                                   <span style="float: right"> در حال ارسال اطلاعات شما ...</span>
                                               </div>
                                               <div class="loader"></div>
                                           </div>


                                           <div class="alert alert-danger" v-if="error === 1">
                                               {{errorMessage}}
                                           </div>


                                       </form>
                                       <form class="form" v-if="level === 1">
                                           <p class="fieldset">
                                               <label class="image-replace email" for="signin-email11">code</label>
                                               <input class="full-width has-padding has-border" id="signin-email11" v-model="code" type="email" placeholder="کد تایید را وارد کنید">
                                               <!--<span class="error-message">An account with this email address does not exist!</span>-->
                                           </p>

                                           <p class="fieldset">
                                               <input class="full-width auth-button" type="button" value="تایید" @click="verify">
                                           </p>

                                           <div class="alert alert-danger" v-if="error1 === 1">
                                               {{errorMessage1}}
                                           </div>

                                       </form>
                                   </div>
                                   <div id="reset-password">
                                       <p class="form-message">Lost your password? Please enter your email address.
                                           </br> You will receive a link to create a new password.
                                       </p>

                                       <form class="form">
                                           <p class="fieldset">
                                               <label class="image-replace email" for="reset-email">E-mail</label>
                                               <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                                               <span class="error-message">An account with this email does not exist!</span>
                                           </p>

                                           <p class="fieldset">
                                               <input class="full-width has-padding" type="submit" value="Reset password">
                                           </p>
                                       </form>

                                       <p class="form-bottom-message"><a href="#0">Back to log-in</a></p>
                                   </div>
                                   <a href="#0" class="close-form">Close</a>
                               </div>
                           </div>

                            <ul>
                                <li><a href="/" class="ttogle">صفحه اصلی </a></li>
                                <li><a href="" class="ttogle">تماس با ما </a></li>
                                <li><a href="" class="ttogle">درباره ما</a></li>
                            </ul>
                           </nav>
                    </div>

                    <div class="col-xs col-sm-9 col-9 col-md col-lg col-xl-2 header-main-content-logo">
                        <a href="/"><img :src="'/img/logo/' + setting_data.logo"></a>
                    </div>
                   <div class="col-xs col-sm-1 col-1 col-md col-lg col-xl-1 buy-icon-res flex">
                      <router-link v-if="ok === 0 && show !== 0" to="/card/products">
                        <div class="flex">
                          <div>
                              <i class="fas fa-shopping-cart"></i>
                          </div>
                          <div style="color: red"><span>{{show}}</span></div>
                        </div>
                      </router-link>
                        <a v-if="ok === 1 && show !== 0" href="/card/products">
                          <div class="flex">
                            <div>
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div style="color: red"><span>{{show}}</span></div>
                          </div>
                        </a>
                       <a v-if="!show">
                           <div class="flex">
                               <div>
                                   <i class="fas fa-shopping-cart"></i>
                               </div>
                               <div style="color: red"><span>{{show}}</span></div>
                           </div>
                       </a>
                    </div>
                </div>

                <search-box></search-box>
                <div class="col-xs col-sm col- col-md-3 col-lg-3 col-xl-3 header-main-content-profile flex delete-padding-left">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-6 profile-qstion">
                        <router-link to="/contact-us" v-if="ok === 0 && admin === 0"><span class="title-4 text-black">  تماس با ما </span></router-link>

                        <a href="/contact-us" v-if="ok === 1 && admin === 0"><span class="title-4 text-black"> تماس با ما </span></a>
                        <a href="/admin/orders-list" v-if="admin === 1 && unreadnotifications"><span class="title-4 text-black"><i class="fas fas fa-bell icon-left" style="color: red"></i> {{unreadnotifications.length}} سفارش جدید </span></a>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-6 header-main-top-login flex delete-padding">
                        <nav class="main-nav">
                            <ul v-if="user === 0">
                                <li><a class="signup text-black" href="#0">ثبت نام</a></li>
                                <li><a class="signin text-black" href="#0">ورود  </a></li>
                            </ul>
                        </nav>
                        <div class="col-xs col-sm col- col-md col-lg col-xl-11 delete-padding" v-if="user === 1" >
                            <ul class="profile-acc">
                                <li v-if="ok1 === 0">
                                    <router-link v-if="user_firstName && user_lastName" class="signup text-black" to="/user/profile" style="color: #676767;font-size: 13px">{{user_firstName}} {{user_lastName}}</router-link>
                                    <router-link v-else class="signup text-black" to="/user/profile" style="color: #676767;font-size: 13px">حساب کاربری</router-link>
                                </li>
                                <li v-if="ok1 === 1">
                                    <a v-if="user_firstName && user_lastName" class="signup text-black" href="/user/profile" style="color: #676767;font-size: 13px">{{user_firstName}} {{user_lastName}}</a>
                                    <a v-else class="signup text-black" href="/user/profile" style="color: #676767;font-size: 13px">حساب کاربری</a>
                                </li>
                            </ul>
                        </div>
                        <div class="user-modal">
                            <div class="user-modal-container">
                                <ul class="switcher">
                                    <li><a href="#0">ورود </a></li>
                                    <li><a href="#0">ساخت اکانت</a></li>
                                </ul>

                                <div id="login">
                                    <form class="form">
                                        <p class="fieldset">
                                            <label class="image-replace email" for="signin-email">E-mail</label>
                                            <input class="full-width has-padding has-border" id="signin-email" type="text" v-model="login" placeholder="شماره موبایل یا ایمیل خود را وارد کنید ...">
                                            <span class="error-message">An account with this email address does not exist!</span>
                                        </p>

                                        <p class="fieldset">
                                            <label class="image-replace password" for="signin-password">Password</label>
                                            <input class="full-width has-padding has-border" v-model="password" id="signin-password" type="password"  placeholder="پسورد">
                                            <a href="#0" class="hide-password">نمایش</a>
                                            <span class="error-message">Wrong password! Try again.</span>
                                        </p>

                                        <div class="alert alert-danger" v-if="error1 === 1">
                                            {{errorMessage1}}
                                        </div>

                                        <p class="fieldset">
                                            <input class="full-width auth-button" type="button" value="ورود" @click="login1">
                                        </p>


                                    </form>

                                    <p class="form-bottom-message">
                                        <a href="#0">رمز عبور خود را فراموش کرده اید ؟</a>
                                    </p>
                                    <!-- <a href="#0" class="close-form">Close</a> -->
                                </div>
                                <div id="signup" >
                                    <form class="form" v-if="level === 0">
                                        <p class="fieldset">
                                            <label class="image-replace email" for="signin-email1">E-mail</label>
                                            <input class="full-width has-padding has-border" id="signin-email1" v-model="email" type="email" placeholder="ایمیل">
                                            <!--<span class="error-message">An account with this email address does not exist!</span>-->
                                        </p>

                                        <p class="fieldset">
                                            <label class="image-replace password" for="signin-password1">Password</label>
                                            <input class="full-width has-padding has-border" id="signin-password1" v-model="password" type="password"  placeholder="رمز عبور">
                                            <a href="#0" class="hide-password">نمایش</a>
                                            <!--<span class="error-message">Wrong password! Try again.</span>-->
                                        </p>

                                        <p class="fieldset">
                                            <label class="image-replace " for="signin-password2">phone</label>
                                            <input class="full-width has-padding has-border" v-model="phone_number" id="signin-password2" type="text"  placeholder="شماره همراه">
                                            <!--<span class="error-message">Wrong password! Try again.</span>-->
                                        </p>

                                        <!--<p class="fieldset">-->
                                            <!--<input type="checkbox" id="remember-me1" checked>-->
                                            <!--<label for="remember-me1">فراموشی رمز عبور </label>-->
                                        <!--</p>-->

                                        <p class="fieldset">
                                            <input class="full-width auth-button" type="button" value="ثبت نام" @click="getcode">
                                        </p>


                                        <div class="alert alert-warning" v-if="error === 0">
                                            <div>
                                                <span style="float: right"> در حال ارسال اطلاعات شما ...</span>
                                            </div>
                                            <div class="loader"></div>
                                        </div>


                                        <div class="alert alert-danger" v-for="err in errorMessage" v-if="error === 1">
                                            {{err}}
                                        </div>


                                    </form>
                                    <form class="form" v-if="level === 1">
                                        <p class="fieldset">
                                            <label class="image-replace email" for="signin-email11">code</label>
                                            <input class="full-width has-padding has-border" id="signin-email11" v-model="code" type="email" placeholder="کد تایید را وارد کنید">
                                            <!--<span class="error-message">An account with this email address does not exist!</span>-->
                                        </p>

                                        <p class="fieldset">
                                            <input class="full-width auth-button" type="button" value="تایید" @click="verify">
                                        </p>

                                        <div class="alert alert-danger" v-for="err in errorMessage1" v-if="error1 === 1">
                                            {{err}}
                                        </div>

                                    </form>
                                </div>
                                <div id="reset-password" >
                                    <p class="form-message"  v-if="allow !== 1">در صورت تایید شماره همراه رمز عبور جدید شما برابر با شماره همراهتان خواهد بود
                                        </br> و در صورت تمایل می توانید رمز عبور را از طریق وارد شدن به پنل کاربری خود تغییر دهید
                                    </p>

                                    <form class="form" v-if="allow !== 1">
                                        <p class="fieldset">
                                            <label class="image-replace email" for="reset-email">E-mail</label>
                                            <input class="full-width has-padding has-border" v-model="phone_number" id="reset-email" type="number" placeholder="شماره همراه خود را وارد کنید">
                                            <span class="error-message">An account with this email does not exist!</span>
                                        </p>

                                        <p class="fieldset">
                                            <input class="full-width auth-button" type="button" @click="forgetCode" value="دریافت کد تایید">
                                        </p>

                                        <div class="alert alert-warning" v-if="loadingForget === 0">
                                            <div>
                                                <span style="float: right"> در حال ارسال اطلاعات شما ...</span>
                                            </div>
                                            <div class="loader"></div>
                                        </div>

                                        <p class="form-bottom-message"><a href="#0">بازگشت به ورود</a></p>
                                    </form>


                                    <form class="form" v-if="allow === 1">
                                        <p class="fieldset">
                                            <label class="image-replace email" for="reset-email">E-mail</label>
                                            <input class="full-width has-padding has-border" v-model="code" id="reset-email" type="number" placeholder="کد تایید را وارد کنید">
                                            <span class="error-message">An account with this email does not exist!</span>
                                        </p>

                                        <p class="fieldset">
                                            <input class="full-width auth-button" type="button" @click="forgetCodeVerify" value="تایید">
                                        </p>
                                    </form>

                                </div>
                                <a href="#0" class="close-form">Close</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xs col-sm col- col-md col-lg-3 col-xl-2 header-main-content-buy delete-padding flex">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-3 content-buy-right">
                        <a href="#"><i class="fas fa-angle-down text-black"></i></a>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-9 content-buy-left" style="cursor: pointer">
                        <router-link to="/card/products" v-if="ok === 0 && show !== 0">
                            <div class="col-xs col-sm col- col-md col-lg col-xl-12 box-buy flex">
                                <div class="box-buy1 col-xs col-sm col- col-md col-lg-2 col-xl-2 delete-padding">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <div class="box-buy2 col-xs col-sm col- col-md col-lg-8 col-xl-8 delete-padding">
                                    <span style="font-size: 13px">  سبد خرید  </span>
                                </div>
                                <div class="box-buy3 col-xs col-sm col- col-md col-lg-2 col-xl-2 delete-padding">
                                    <span class="buy-number" style="font-size: 13px"> {{show}}  </span>
                                </div>
                            </div>
                        </router-link>

                        <a href="/card/products" v-if="ok === 1 && show !== 0">
                            <div class="col-xs col-sm col- col-md col-lg col-xl-12 box-buy flex">
                                <div class="box-buy1 col-xs col-sm col- col-md col-lg-2 col-xl-2 delete-padding">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <div class="box-buy2 col-xs col-sm col- col-md col-lg-8 col-xl-8 delete-padding">
                                    <span class="">  سبد خرید  </span>
                                </div>
                                <div class="box-buy3 col-xs col-sm col- col-md col-lg-2 col-xl-2 delete-padding">
                                    <span class="buy-number"> {{show}}  </span>
                                </div>
                            </div>
                        </a>

                        <a v-if="!show">
                            <div class="col-xs col-sm col- col-md col-lg col-xl-12 box-buy flex">
                                <div class="box-buy1 col-xs col-sm col- col-md col-lg-2 col-xl-2 delete-padding">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <div class="box-buy2 col-xs col-sm col- col-md col-lg-8 col-xl-8 delete-padding">
                                    <span class="">  سبد خرید  </span>
                                </div>
                                <div class="box-buy3 col-xs col-sm col- col-md col-lg-2 col-xl-2 delete-padding">
                                    <span class="buy-number"> {{show}}  </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        <category-menu @first-emit-cat="get_cat_emit($event)"></category-menu>
            <audio id="myAudio">
                <source src="/sound/deduction.mp3" type="audio/ogg">
            </audio>
        </div>
</template>

<script>
    import SearchBox from "./searchBox";
    export default {
        components: {SearchBox},

        created() {
            this.callForNewOrders();

            console.log('header component');
            if (this.$route.path === '/' || this.$route.name === 'admin' || this.$route.name === 'user' || this.$route.path === '/payment-success' || this.$route.path === '/payment-error')
            {
                this.ok = 1;
            }
            else
            {
                this.ok = 0;
            }

            if (this.$route.path === '/' || this.$route.name === 'product' || this.$route.name === 'admin' || this.$route.path === '/payment-success' || this.$route.path === '/payment-error')
            {
                this.ok1 = 1;
            }
            else
            {
                this.ok1 = 0;
            }

            this.get_setting();
            this.get_number1();
        } ,

        data() {
            return {
                ok: 0 ,
                ok1: 0 ,
                sum: 0 ,
                orders: '' ,
                show: 0 ,
                phone_number: '' ,
                loadingForget: '' ,
                password: '' ,
                level: 0 ,
                code: '' ,
                email: '' ,
                error: '' ,
                errorMessage: [] ,
                errorMessage1: [] ,
                setting_data: [] ,
                error1: '' ,
                user: '' ,
                login: '' ,
                user_firstName: '' ,
                user_lastName: '' ,
                allow: '' ,
                admin: 0 ,
                flag: 0 ,
                unreadnotifications: []
            }
        } ,

        props: ['number'] ,

        watch:{
           number: function () {
             this.get_number();
           } ,
        } ,

        methods: {
            callForNewOrders() {
                if (this.$route.path === '/admin/orders-list')
                {
                    this.getUser();
                    setInterval(() => {
                        this.getUser();
                    } , 30000);
                }
                else
                {
                    this.getUser();
                }

            } ,
            forgetCodeVerify() {
                axios({
                    url: '/api/forgetPassword/verify' ,
                    method: 'post' ,
                    headers: {
                        accept: 'application/json'
                    } ,
                    data: {
                        phone_number: this.phone_number ,
                        code: this.code
                    }
                })
                    .then(res => {
                        console.log(res);
                        this.$toasted.success(res.data.message, {
                            position: 'bottom-center' ,
                            theme: 'bubble' ,
                            fitToScreen: true ,
                            className: ['your-custom-class']
                        }).goAway(3000);

                        this.$toasted.success(res.data.password, {
                            position: 'bottom-center' ,
                            theme: 'bubble' ,
                            fitToScreen: true ,
                            className: ['your-custom-class']
                        }).goAway(5000);

                        setTimeout(function () {
                            window.location = '/'
                        } , 5000)

                    })
                    .catch(err => {
                        console.log(err.response);
                        this.$toasted.error(err.response.data.message, {
                            position: 'bottom-center' ,
                            theme: 'bubble' ,
                            fitToScreen: true ,
                            className: ['your-custom-class']
                        }).goAway(3000);
                    })
            } ,
            forgetCode() {
                this.loadingForget = 0;
                axios({
                    url: '/api/forgetPassword' ,
                    method: 'post' ,
                    headers: {
                        accept: 'application/json'
                    } ,
                    data: {
                        phone_number: this.phone_number
                    }
                })
                    .then(res => {
                        console.log(res);
                        this.$toasted.success(res.data.message, {
                            position: 'bottom-center' ,
                            theme: 'bubble' ,
                            fitToScreen: true ,
                            className: ['your-custom-class']
                        }).goAway(3000);
                        this.allow = 1;
                        this.loadingForget = 1;
                    })
                    .catch(err => {
                        this.loadingForget = 1;
                        console.log(err.response);
                        this.$toasted.error(err.response.data, {
                            position: 'bottom-center' ,
                            theme: 'bubble' ,
                            fitToScreen: true ,
                            className: ['your-custom-class']
                        }).goAway(3000);
                    })
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
                            fitToScreen: true ,
                            className: ['your-custom-class']
                        }).goAway(3000);
                    })
            } ,
            login1() {
                axios({
                    method: 'post' ,
                    url: '/api/login' ,
                    data: {
                        login: this.login ,
                        password: this.password
                    }
                })
                    .then(res => {
                        this.user = 1;
                        this.user_firstName = res.data.first_name;
                        this.user_lastName = res.data.last_name;
                        this.error1 = 0;
                        localStorage.setItem('token' , res.data.api_token);
                        window.location = '/'
                    })
                    .catch(err => {
                        this.errorMessage1 = '';
                        console.log(err.response);
                        this.error1 = 1;
                        this.errorMessage1 = err.response.data;
                        this.user = 0;
                    })
            } ,
            getUser() {
                axios({
                    url: '/api/user' ,
                    method: 'get' ,
                    headers: {
                        accept: 'application/json' ,
                        Authorization: `Bearer ${localStorage.token}`
                    }
                })
                    .then(res => {
                        if (res.data.type === 'admin')
                        {
                            this.admin = 1
                        }
                        else
                        {
                            this.admin = 0
                        }

                        let lng = this.unreadnotifications.length;
                        this.unreadnotifications = res.data.notifications;
                        if (this.unreadnotifications.length > lng)
                        {
                            this.flag = 1;
                            if (this.admin === 1)
                            {
                                let x = document.getElementById("myAudio");
                                x.play();
                            }
                        }
                        else
                        {
                            this.flag = 0;
                        }
                        this.user = 1;
                        this.user_firstName = res.data.first_name;
                        this.user_lastName = res.data.last_name;
                        this.$emit('send-user' , res.data);
                        this.$emit('flag' , this.flag);
                    })
                    .catch(err => {
                        console.log(err.response);
                        this.$emit('send-user' , 0);
                        this.user = 0;
                    })
            } ,
            verify() {
                axios({
                    method: 'post' ,
                    url: '/api/verification' ,
                    data: {
                        phone_number: this.phone_number ,
                        code: this.code ,
                        password: this.password ,
                        email: this.email
                    }
                })
                    .then(res => {
                        console.log(res);
                        this.error1 = 0;
                        localStorage.setItem('token' , res.data.user.api_token);
                        window.location = '/'
                    })
                    .catch(err => {
                        this.errorMessage1 = '';
                        console.log(err.response);
                        if (err.response.status === 404 || err.response.status === 500 || err.response.status === 400 || err.response.status === 401 )
                        {
                            this.error1 = 1;
                        }
                        this.errorMessage1 = err.response.data.message
                    })
            } ,
            getcode() {
                this.error = 0;
                if (this.email === '')
                {
                    axios({
                        url: '/api/getcode' ,
                        method: 'post' ,
                        data: {
                            phone_number: this.phone_number ,
                            password: this.password
                        }
                    })
                        .then(res => {
                            console.log(res);
                            this.level = 1;
                        })
                        .catch(err => {
                            this.errorMessage = '';
                            console.log(err.response);
                            if (err.response.status === 404 || err.response.status === 500 || err.response.status === 400 || err.response.status === 401 )
                            {
                                this.error = 1;
                            }
                            this.errorMessage = err.response.data
                        })
                }

                else
                {
                    axios({
                    url: '/api/getcode' ,
                    method: 'post' ,
                    data: {
                        phone_number: this.phone_number ,
                        email: this.email ,
                        password: this.password
                    }
                })
                    .then(res => {
                        console.log(res);
                        this.level = 1;
                    })
                    .catch(err => {
                        this.errorMessage = '';
                        console.log(err.response);
                        if (err.response.status === 404 || err.response.status === 500 || err.response.status === 400 || err.response.status === 401 )
                        {
                            this.error = 1;
                        }
                        this.errorMessage = err.response.data
                    })
                }

            } ,
            get_number1() {
                if (! localStorage.order)
                {
                    this.show = 0;
                }
                else {
                    this.orders = JSON.parse(localStorage.order);
                    const add = (a , b) => a + b ;
                    this.sum = [];
                    this.orders.forEach(item => {
                        this.sum.push(item.order_number)
                    });
                    this.sum = this.sum.reduce(add);
                    this.show = this.sum;
                    this.$emit('add-order' , this.orders);
                }
            } ,
            get_number() {
                const add = (a , b) => a + b ;
                this.sum = [];
                this.number.forEach(item => {
                    this.sum.push(item.order_number)
                });
                this.sum = this.sum.reduce(add);
                this.show = this.sum;
                this.$emit('add-order' , this.number);
            } ,
            get_cat_emit(event) {
                this.$emit('second-emit-cat' , event);
            }
        }
    }
</script>

<style scoped>
    .loader {
        border: 5px solid #f3f3f3; /* Light grey */
        border-top: 5px solid deeppink; /* Blue */
        border-radius: 50%;
        width: 30px;
        height: 30px;
        animation: spin 1s linear infinite;
        float: left;
    }
    .alert-warning {
        height: 60px;
        background-color: #dee2e6;
        color: black;
        border: 1px solid #dee2e6;
    }
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>
