<template>
    <div class="col-xs col-sm col- col-md-9 col-lg-9 col-xl-9  buy-card-right">

        <!--1-->
        <div class="buy-card-right-onee col-xs col-sm col- col-md-12 col-lg-12 col-xl-12 delete-padding">
            <div class="col-xs col-sm col- col-md col-lg col-xl-12  buy-card-right-top">
                <span>  انتخاب شیوه پرداخت </span>
            </div>
            <div class="col-xs col-sm col- col-md col-lg col-xl-12 card-right-bottom delete-padding">
                <div class="col-xs col-sm col- col-md col-lg col-xl-12 card-right-bottom-one delete-padding">
                    <input type="radio" name="gender" value="online" v-model="payMethod" @change="isAvailable">
                    <i class="fas fa-credit-card"></i>
                    <span class="title-3"> پرداخت اینترنتی هوشمند کالیمو  <span class="title-6"> (آنلاین با تمامی کارت های بانکی) </span></span>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-12 card-right-bottom-two delete-padding">
                    <input type="radio" name="gender" value="offline" v-model="payMethod" @change="isAvailable">
                    <i class="fab fa-cc-amazon-pay"></i>
                    <span class="title-3">پرداخت در محل با کارت بانکی   <span class="title-6"> (پرداخت در هنگام تحویل سفارش  با تمامی کارت های بانکی عضو شتاب )</span></span>
                </div>
            </div>
        </div>
        <!--end-1-->
        <!--2-->

        <div class="col-xs col-sm col- col-md col-lg col-xl-12 card-factor">
            <div class="col-xs col-sm col- col-md col-lg col-xl-12  card-factor-top">
                <span> صدور فاکتور  </span>
            </div>
            <div class="col-xs col-sm col- col-md col-lg col-xl-12 card-factor-bottom">
                <div class="col-xs col-sm col- col-md col-lg col-xl-4 card-factor-bottom-inside">
                    <input type="checkbox" v-model="factor" name="gender"> درخواست ارسال فاکتور  خرید<br>
                </div>
            </div>
        </div>

        <div class="buy-card-right-onee col-xs col-sm col- col-md-12 col-lg-12 col-xl-12 delete-padding">
            <div class="col-xs col-sm col- col-md col-lg col-xl-12  buy-card-right-top">
                <span> خلاصه سفارش </span>
            </div>
            <ul id="basics" class="faq-group" style="margin-top: 20px;">
                <li>
                    <a class="trigger colorgray" href="#0">
                        <div class="col-xs col-sm col- col-md col-lg col-xl-12 card-right-bottom-1 delete-padding">
                            <div class="col-xs col-sm col- col-md col-lg col-xl-12 card-right-bottom-1-top flex">
                                <div class="col-xs col-sm col- col-md-2 col-lg-2 col-xl-2 card-right-marsule-1">
                                    <span class="text-black"> مرسوله  </span>
                                </div>
                                <div class="col-xs col-sm col- col-md-2 col-lg-2 col-xl-2 card-right-time-1">
                                    <span class="text-black">  زمان ارسال </span>
                                </div>
                                <div class="col-xs col-sm col- col-md-6 col-lg-6 col-xl-4 card-right-How-send-1">
                                    <span class="text-black"> نحوه ارسال  </span>
                                </div>
                                <div class="col-xs col-sm col- col-md-1 col-lg-1 col-xl-2 card-right-send-of-1">
                                    <span class="text-black">  ارسال از کالیمو </span>
                                </div>
                                <div class="col-xs col-sm col- col-md-1 col-lg-1 col-xl-2 card-right-money-1">
                                    <span class="text-black">  هزینه ارسال   </span>
                                </div>

                            </div>
                            <div class="col-xs col-sm col- col-md col-lg col-xl-12 card-right-bottom-1-bottom flex">
                                <div class="col-xs col-sm col- col-md-2 col-lg-2 col-xl-2 card-right-marsule">
                                    <span class="text-black"> ({{orders1.length}} کالا) </span>
                                </div>
                                <div class="col-xs col-sm col- col-md-2 col-lg-2 col-xl-2 card-right-time">
                                    <span class="text-black"> {{date}} </span>
                                </div>
                                <div class="col-xs col-sm col- col-md-6 col-lg-6 col-xl-4 card-right-How-send">
                                    <span class="text-black">تحویل اکسپرس  کالیمو   </span>
                                </div>
                                <div class="col-xs col-sm col- col-md-1 col-lg-1 col-xl-2 card-right-send-of">
                                    <span class="text-black"> آماده ارسال </span>
                                </div>
                                <div class="col-xs col-sm col- col-md-1 col-lg-1 col-xl-2 card-right-money">
                                    <span class="text-black" v-if="sending_cost"> {{sending_cost.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان </span>
                                    <span class="text-black" v-else> رایگان</span>
                                </div>

                            </div>

                        </div>
                    </a>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 faq-content" style="display: block">
                        <div v-for="item  in chunk(orders1 , 4)" class="col-xs col-sm col- col-md col-lg col-xl-12 div-test flex table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
                        <div v-for="product in item" class="col-xs col-sm col- col-md col-lg col-xl-3 faq-content-main">
                            <div class="col-xs col-sm col- col-md col-lg col-xl-12 faq-content-main-img">
                                <img :src="'/images/products/' + product.product_img">
                                </div>
                                <div class="col-xs col-sm col- col-md col-lg col-xl-12 faq-content-main-name">
                                    <span class="text-black"> {{product.title}} </span>
                                </div>
                                <div class="col-xs col-sm col- col-md col-lg col-xl-12 faq-content-main-number">
                                    <span class="text-black"> تعداد : <span class="text-black"> عدد </span> {{product.order_number}} </span>
                                </div>
                                <div class="col-xs col-sm col- col-md col-lg col-xl-12 faq-content-main-number">
                                    <span class="text-black"> قیمت : <span class="text-black"> تومان </span> {{product.final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} </span>
                                </div>
                           
                        </div>
                        </div>
                    </div>

                </li>
            </ul>
        </div>


        <!--end-2-->

        <!--3-->
        <div v-if="check === 1" class="buy-card-right-onee col-xs col-sm col- col-md-12 col-lg-12 col-xl-12 delete-padding">
            <div class="col-xs col-sm col- col-md col-lg col-xl-12  buy-card-right-top">
                <span>  استفاده از کد تخفیف کالیمو </span>
            </div>
            <div class="col-xs col-sm col- col-md col-lg col-xl-12 card-right-bottom-offer delete-padding flex">
                <div class="col-xs col-sm col- col-md col-lg col-xl-6 card-right-bottom-offer-right">
                    <span class="text-black title-3">  با ثبت کد تخفیف , مبلغ کد تخفیف از "مبلغ قابل پرداخت" کم می شود  </span>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-6 card-right-bottom-offer-left flex">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-8 card-right-bottom-offer-left-1">
                        <input type="text" v-model="name" class="form-control" id="validationCustom04" placeholder="مثلا 123456" required="">
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-4 card-right-bottom-offer-left-2">
                        <button class="btn btn-primary" type="button" @click="checkDiscount">ثبت کد تخفیف</button>
                    </div>
                </div>
            </div>
        </div>
        <!--end-3-->

        <div class="col-xs col-sm col- col-md col-lg col-xl-12 card-factor-end flex">
            <div class="col-xs col-sm col- col-md col-lg col-xl-6 card-factor-end-right">
                <span><i class="fas fa-angle-double-right"></i></span>
                <router-link to="/card/address"><span class="title-4">  بازگشت به سبد خرید  </span></router-link>
            </div>

        </div>

    </div>
</template>

<script>
    let moment = require('jalali-moment');
    export default {
        name: "card-pay-right" ,

        created() {
            console.log('card-pay-right component');
            this.cost();
            this.faq();
            this.which_discount_to_use();
        } ,

        watch: {
            factor() {
                this.$emit('factor' , this.factor)
            }
        } ,

        props:['orders1' , 'price' , 'sending_cost'] ,

        data() {
            return {
                name: '' ,
                factor: false ,
                sum: '' ,
                payMethod: '' ,
                date: moment().locale('fa').format('Do MMMM  YYYY') ,
                flag: 0 ,
                check: ''
            }
        } ,

        methods: {
            isAvailable() {
                axios({
                    url: '/api/isAvailable' ,
                    method: 'post' ,
                    headers: {
                        Accept: 'application/json' ,
                    } ,
                    data: {
                        products: this.orders1
                    }
                })
                    .then(res => {
                        console.log(res);
                        if (res.data.status === 'success')
                        {
                            this.checkPayMethod();
                        }
                        else if (res.data.status === 'error')
                        {
                            res.data.message.forEach(error => {
                                this.$toasted.error(error , {
                                    position: 'bottom-center' ,
                                    theme: 'bubble' ,
                                    fitToScreen: true ,
                                    fullWidth: true ,
                                    className: ['your-custom-class']
                                }).goAway(3000);
                            })
                        }

                    })
                    .catch(err => {
                        console.log(err.response);
                    });
            } ,
            chunk(myArray , chunk_size) {
                var index = 0;
                var arrayLength = myArray.length;
                var tempArray = [];
                var myChunk = [];
                for (index = 0; index < arrayLength; index += chunk_size) {
                    myChunk = myArray.slice(index, index+chunk_size);
                    tempArray.push(myChunk);
                }

                return tempArray;
            },
            which_discount_to_use() {
                axios({
                    url: '/api/check/discounts' ,
                    method: 'get' ,
                    headers: {
                        Accept: 'application/json' ,
                    }
                })
                    .then(res => {
                        console.log(res);
                        this.$toasted.success(res.data.discount , {
                            position: 'bottom-center' ,
                            theme: 'bubble' ,
                            fitToScreen: true ,
                            fullWidth: true ,
                            className: ['your-custom-class']
                        }).goAway(7000);
                        this.check = res.data.check;
                    })
                    .catch(err => {
                        console.log(err.response);
                    })
            } ,
            run_special_discount() {
                if (this.check !== 1)
                {
                    if (this.flag === 0)
                    {
                        axios({
                            url: '/api/use/special_discount' ,
                            method: 'post' ,
                            data: {
                                base: this.price
                            } ,
                            headers: {
                                Accept: 'application/json' ,
                            }
                        })
                            .then(res => {
                                console.log(res);
                                this.$toasted.success(`${Math.ceil(this.price - res.data)} تومان از مبلغ سفارش شما کم شد` , {
                                    position: 'bottom-center' ,
                                    theme: 'bubble' ,
                                    fitToScreen: true ,
                                    className: ['your-custom-class']
                                }).goAway(4000);
                                this.$emit('cost-after-off' , res.data);
                                this.flag = 1;
                            })
                            .catch(err => {
                                console.log(err.response);
                                this.$toasted.error(err.response.data , {
                                    position: 'bottom-center' ,
                                    theme: 'bubble' ,
                                    fitToScreen: true ,
                                    className: ['your-custom-class']
                                }).goAway(4000);
                            })
                    }
                }
            } ,
            checkDiscount() {
                axios({
                    url: '/api/use/discount' ,
                    method: 'post' ,
                    data: {
                        name: this.name ,
                        base: this.price
                    } ,
                    headers: {
                        Accept: 'application/json' ,
                        Authorization: `Bearer ${localStorage.token}`
                    }
                })
                    .then(res => {
                        console.log(res);
                        this.$toasted.success(`${Math.ceil(this.price - res.data.cost)} تومان از مبلغ سفارش شما کم شد` , {
                            position: 'bottom-center' ,
                            theme: 'bubble' ,
                            fitToScreen: true ,
                            className: ['your-custom-class']
                        }).goAway(4000);
                        this.$emit('cost-after-off' , res.data.cost);
                        this.$emit('discount_id' , res.data.discount.id);
                    })
                    .catch(err => {
                        console.log(err.response);
                        this.$toasted.error(err.response.data , {
                            position: 'bottom-center' ,
                            theme: 'bubble' ,
                            fitToScreen: true ,
                            className: ['your-custom-class']
                        }).goAway(4000);
                    })
            } ,
            faq() {
                jQuery(document).ready(function($){

                    var MqM= 768,
                        MqL = 1024;

                    var faqsSections = $('.faq-group'),
                        faqTrigger = $('.trigger'),
                        faqsContainer = $('.faq-items'),
                        faqsCategoriesContainer = $('.categories'),
                        faqsCategories = faqsCategoriesContainer.find('a'),
                        closeFaqsContainer = $('.cd-close-panel');

                    //select a faq section
                    faqsCategories.on('click', function(event){
                        event.preventDefault();
                        var selectedHref = $(this).attr('href'),
                            target= $(selectedHref);
                        if( $(window).width() < MqM) {
                            faqsContainer.scrollTop(0).addClass('slide-in').children('ul').removeClass('selected').end().children(selectedHref).addClass('selected');
                            closeFaqsContainer.addClass('move-left');
                            $('body').addClass('cd-overlay');
                        } else {
                            $('body,html').animate({ 'scrollTop': target.offset().top - 19}, 200);
                        }
                    });

                    //close faq lateral panel - mobile only
                    $('body').bind('click touchstart', function(event){
                        if( $(event.target).is('body.cd-overlay') || $(event.target).is('.cd-close-panel')) {
                            closePanel(event);
                        }
                    });
                    faqsContainer.on('swiperight', function(event){
                        closePanel(event);
                    });


                    faqTrigger.on('click', function(event){
                        event.preventDefault();
                        $(this).next('.faq-content').slideToggle(200).end().parent('li').toggleClass('content-visible');
                    });

                    $(window).on('scroll', function(){
                        if ( $(window).width() > MqL ) {
                            (!window.requestAnimationFrame) ? updateCategory() : window.requestAnimationFrame(updateCategory);
                        }
                    });

                    $(window).on('resize', function(){
                        if($(window).width() <= MqL) {
                            faqsCategoriesContainer.removeClass('is-fixed').css({
                                '-moz-transform': 'translateY(0)',
                                '-webkit-transform': 'translateY(0)',
                                '-ms-transform': 'translateY(0)',
                                '-o-transform': 'translateY(0)',
                                'transform': 'translateY(0)',
                            });
                        }
                        if( faqsCategoriesContainer.hasClass('is-fixed') ) {
                            faqsCategoriesContainer.css({
                                'left': faqsContainer.offset().left,
                            });
                        }
                    });

                    function closePanel(e) {
                        e.preventDefault();
                        faqsContainer.removeClass('slide-in').find('li').show();
                        closeFaqsContainer.removeClass('move-left');
                        $('body').removeClass('cd-overlay');
                    }

                    function updateCategory(){
                        updateCategoryPosition();
                        updateSelectedCategory();
                    }

                    function updateCategoryPosition() {
                        var top = $('.faq').offset().top,
                            height = jQuery('.faq').height() - jQuery('.categories').height(),
                            margin = 20;
                        if( top - margin <= $(window).scrollTop() && top - margin + height > $(window).scrollTop() ) {
                            var leftValue = faqsCategoriesContainer.offset().left,
                                widthValue = faqsCategoriesContainer.width();
                            faqsCategoriesContainer.addClass('is-fixed').css({
                                'left': leftValue,
                                'top': margin,
                                '-moz-transform': 'translateZ(0)',
                                '-webkit-transform': 'translateZ(0)',
                                '-ms-transform': 'translateZ(0)',
                                '-o-transform': 'translateZ(0)',
                                'transform': 'translateZ(0)',
                            });
                        } else if( top - margin + height <= $(window).scrollTop()) {
                            var delta = top - margin + height - $(window).scrollTop();
                            faqsCategoriesContainer.css({
                                '-moz-transform': 'translateZ(0) translateY('+delta+'px)',
                                '-webkit-transform': 'translateZ(0) translateY('+delta+'px)',
                                '-ms-transform': 'translateZ(0) translateY('+delta+'px)',
                                '-o-transform': 'translateZ(0) translateY('+delta+'px)',
                                'transform': 'translateZ(0) translateY('+delta+'px)',
                            });
                        } else {
                            faqsCategoriesContainer.removeClass('is-fixed').css({
                                'left': 0,
                                'top': 0,
                            });
                        }
                    }

                    function updateSelectedCategory() {
                        faqsSections.each(function(){
                            var actual = $(this),
                                margin = parseInt($('.faq-title').eq(1).css('marginTop').replace('px', '')),
                                activeCategory = $('.categories a[href="#'+actual.attr('id')+'"]'),
                                topSection = (activeCategory.parent('li').is(':first-child')) ? 0 : Math.round(actual.offset().top);

                            if ( ( topSection - 20 <= $(window).scrollTop() ) && ( Math.round(actual.offset().top) + actual.height() + margin - 20 > $(window).scrollTop() ) ) {
                                activeCategory.addClass('selected');
                            }else {
                                activeCategory.removeClass('selected');
                            }
                        });
                    }
                });
            } ,
            checkPayMethod() {
                this.run_special_discount();
               this.$emit('send-pay-method' , this.payMethod)
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