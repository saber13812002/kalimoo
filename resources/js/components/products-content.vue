<template>
    <div class="col-xs-12 col- col-sm col-md-9 col-lg-9 col-xl-9 block-content">
        <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-image delete-padding">
            <a :href="baner.link"><img :src="'/img/product-images/' + baner.image" class="img-fluid" alt="Responsive image"></a>
        </div>
        <div class="col-xs col-sm col- col-md col-lg col-xl-12 filter-panle delete-padding flex">
            <div class="col-xs col-sm col- col-md col-lg col-xl-6 delete-padding">
                <div class="product-sort">
                    <section>
                        <div class="dropdown">
                            <label>
                                <select v-model="param" style="font-size: 12px">
                                        <option value="newest"> جدیدترین محصولات</option>
                                        <option value="the-most-expensive">گرانترین محصولات</option>
                                        <option value="cheaper"> ارزان ترین محصولات</option>
                                </select>
                            </label>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-xs col-sm col- col-md col-lg col-xl-6 show-product delete-padding">
                <span class="tablinks" @click="verticalOrHarizonal(1)" id="defaultOpen"><i class="fas fa-align-right"></i></span>

                <span class="tablinks" @click="verticalOrHarizonal(2)"><i class="fas fa-align-justify"></i></span>
            </div>
        </div>


            <!------product-amudy------->
            <div v-if="click === 1" id="Vertical" class="col-xs col-sm col- col-md col-lg col-xl-12 all-product tabcontent delete-padding">
                <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-list flex delete-padding table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl"
                     v-for="(item , index) in products" v-bind:key="item.id">
                    <div v-for="product in products[index]" class="col-xs col-sm col- col-md col-lg col-xl-3">
                        <div class="product-box-hover">
                            <div class="product-box">
                                <div class="action-btn" v-if="product.number !== 0">
                                    <div class="box">
                                        <span style="cursor: pointer"><i class="fas fa-shopping-basket" @click="sent_to_card(product)"></i></span>
                                        <span style="cursor: pointer"><i class="fas fa-exchange-alt"></i></span>
                                        <span style="cursor: pointer"><i class="fas fa-heart"></i></span>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview delete-padding">
                                        <div class="preview-image">
                                            <img :src="'/images/products/' + product.product_img" class="product-image-size">
                                        </div>
                                        <div class="preveiew-shape">
                                            <img src="/img/shap-small2.png" class="shape-main-site">
                                            <img src="/img/shap-bigres.png" class="shape-responsive">
                                        </div>
                                    </div>
                                </a>
                                <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info delete-padding">
                                    <a href="#">   <div class="product-info-name">
                                        <span class="text-span-big black">  {{product.title}}  </span>
                                    </div></a>
                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-price">
                                        <div  class="col-xs col-sm col- col-md col-lg col-xl-6 product-info-price-off delete-padding">
                                            <span v-if="product.price !== product.final_price" class="text-gray"> {{product.price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}</span>
                                        </div>
                                        <div class="col-xs col-sm col- col-md col-lg col-xl-6 product-info-price-main delete-padding">
                                            <span class=" text-span-small green"> {{product.final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان  </span>
                                        </div>
                                        <div v-if="product.number === 0" class="col-xs col-sm col- col-md col-lg col-xl-6 product-info-price-main delete-padding">
                                            <span class=" text-span-small green"> نا موجود  </span>
                                        </div>
                                        <div v-if="product.number !== 0" class="col-xs col-sm col- col-md col-lg col-xl-6 product-info-price-main delete-padding">
                                            <span class=" text-span-small green">  موجود  </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="review">
                                    <hr class="hr-review">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!------product-amudy-responsive------->
            <div v-if="click === 2" id="Horizontal" class="col-xs col-sm col- col-md col-lg col-xl-12 product-list-Horizontal tabcontent delete-padding">
                <!--1-->
                <div class="col-xs col-sm col- col-md col-lg col-xl-12" v-for="item in pro" v-bind:key="item.id">
                    <div class="product-box-hover-Horizontal">
                        <div class="product-box-Horizontal flex">
                            <div class="action-btn-Horizontal" v-if="item.number !== 0">
                                <div class="box">
                                    <span style="cursor: pointer"><i class="fas fa-shopping-basket" @click="sent_to_card(item)"></i></span>
                                    <span style="cursor: pointer"><i class="fas fa-exchange-alt"></i></span>
                                    <span style="cursor: pointer"><i class="fas fa-heart"></i></span>
                                </div>
                            </div>

                            <div class="col-xs col-sm col-6 col-md col-lg col-xl-4 preview-image-Horizontal">
                                <a href="#">
                                    <img :src="'/images/products/' + item.product_img" class="product-image-size-Horizontal">
                                </a>
                            </div>

                            <div class="col-xs col-sm col-6 col-md col-lg col-xl-8 product-info-Horizontal">
                                <div class="col-md-12 product-info-Horizontal-name">
                                    <a href="#"><span class="" style="color: black"> {{item.title}}  </span></a>
                                </div>
                                <div class="col-md-12 product-info-Horizontal-name">
                                    <span class="title-3" v-if="item.number !== 0"> موجود  </span>
                                    <span class="title-3" v-if="item.number === 0"> نا موجود  </span>
                                </div>
                                <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-Horizontal-price">
                                    <span class="title-3"> {{item.final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان  </span>

                                </div>
                                <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-Horizontal-rating">
                                    <span class="star-font color-star-yellow"><i class="fas fa-star"></i></span>
                                    <span class="star-font color-star-yellow"><i class="fas fa-star"></i></span>
                                    <span class="star-font color-star-yellow"><i class="fas fa-star"></i></span>
                                    <span class="star-font color-star-yellow"><i class="fas fa-star"></i></span>
                                    <span class="star-font color-star-yellow"><i class="fas fa-star"></i></span>
                                </div>
                                <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-Horizontal-description">
                                    <p class="title-3"> {{item.description}}  </p>
                                </div>
                                <div class="review-Horizontal">
                                    <hr class="hr-review-Horizontal">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-----end-product-amudy-responsive------->

            <!--product-Horizontal-responsive-->
            <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-H-res delete-padding">
                <div class="subject-product-H-res">
                    <span class="title-3"> محصولات</span>
                </div>

                <div v-for="item in pro" v-bind:key="item.id" class="col-xs col-sm col-12 col-md col-lg col-xl-12 product-list-Horizontal-res flex delete-padding">
                    <div class="col-xs-4 col-sm-4 col-4 col-md col-lg col-xl-12 product-list-Horizontal-res-img">
                        <span><img :src="'/images/products/' + item.product_img" class="product-img-res"></span>
                    </div>

                    <div class="col-xs-7 col-sm-7 col-7 col-md col-lg col-xl-11 product-list-Horizontal-res-des delete-padding-right">
                        <div class="flex">
                           <div class="col-xs col-sm col-9 col-md col-lg col-xl-8 product-list-Horizontal-res-des-name delete-padding">
                            <a href="#"><span class="text-black title-5"> {{item.title}}</span></a>
                        </div>
                        <div class="col-xs col-sm col-3 col-md col-lg col-xl-4 Available-no delete-padding">
                            <span class="green title-4" v-if="item.number === 0"> نا موجود</span>
                            <span class="green title-4" v-if="item.number !== 0"> موجود</span>
                        </div>
                        </div>
                        <hr class="hr-product-res">
                        <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-list-Horizontal-res-des-price delete-padding">
                          <div class="product-list-Horizontal-res-des-price-right col-xs col-sm col- col-md col-lg col-xl-6">
                            <span class="green title-4"> {{item.final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
                          </div>
                          
                        </div>
                    </div>
                    <div class="col-xs-1 col-sm-1 col-1 col-md col-lg col-xl-11 add-cardd" v-if="item.number !== 0">
                        <span @click="sent_to_card(item)"><i class="fas fa-shopping-basket"></i></span>
                    </div>
                </div>
            </div>

        <!--end-product-Horizontal-responsive-->
            <!-----end-product-amudy------->
        <div v-if="ok === 0" class="alert alert-danger">
            محصولی وجود ندارد
        </div>

    </div>
</template>

<script>
    import Product from "./product";
    export default {
        name: "products-content" ,
        components: {Product},

        created() {
            console.log('products-content component');
            this.get_baner();
            this.$emit('send_number' , JSON.parse(localStorage.getItem('number')));
            if (this.$route.params.id)
            {
                this.productsByCat(this.$route.params.id , this.param);
            }

            if (this.$route.params.title)
            {
                this.search(this.$route.params.title , this.param);
            }

            if (this.$route.params.sec)
            {
                this.productsBySec(this.$route.params.main,this.$route.params.sec , this.param);
                this.findBrands(this.$route.params.main);
            }

            if (this.$route.params.thirdCat)
            {
                this.productsByThird(this.$route.params.maincat,this.$route.params.thirdCat , this.param);
                this.findBrands(this.$route.params.maincat);
            }
        } ,



        props: ['brands_filter'] ,

        watch: {

            param() {
                if (this.$route.params.id)
                {
                    this.productsByCat(this.$route.params.id , this.param);
                }

                if (this.$route.params.title)
                {
                    this.search(this.$route.params.title , this.param);
                }

                if (this.$route.params.sec)
                {
                    this.productsBySec(this.$route.params.main,this.$route.params.sec , this.param);
                }

                if (this.$route.params.thirdCat)
                {
                    this.productsByThird(this.$route.params.maincat,this.$route.params.thirdCat , this.param);
                }

            } ,

            '$route' (to , from) {
                this.$emit('send_number' , JSON.parse(localStorage.getItem('number')));


                if (to.params.id)
                {
                    this.productsByCat(to.params.id , this.param);
                }

                if (to.params.title)
                {
                    this.search(to.params.title , this.param);
                }

                if (to.params.sec)
                {
                    this.productsBySec(to.params.main  , to.params.sec , this.param);
                    this.findBrands(to.params.main);
                }

                if (to.params.maincat)
                {
                    this.productsByThird(to.params.maincat , to.params.thirdCat , this.param);
                    this.findBrands(to.params.maincat);
                }
            } ,

            brands_filter: function () {

                if (! this.brands_filter.length)
                {
                    this.productsByCat(this.$route.params.id)
                }
                else
                {
                    this.products = this.brands_filter;
                    this.get_other_products(this.brands_filter)
                }
            }
        } ,


        data() {
            return {
                param: 'newest' ,
                products: [] ,
                pro: [] ,
                ok: '' ,
                brands: [] ,
                baner: '' ,
                click: 1 ,
            }
        } ,

        methods:{
            verticalOrHarizonal(type) {
                this.click = type;
            },
            get_baner() {
                axios({
                    url: '/api/baners' ,
                    method: 'get' ,
                })
                    .then(res => {
                        this.baner = res.data.products_baner;
                    })
                    .catch(err => {
                        console.log(err.response);
                    })
            } ,
            sent_to_card(product) {
                let arr = JSON.parse(localStorage.getItem('order')) || [];

                if (product.order_number)
                {
                    product.order_number ++;
                    product.final_price1 = product.final_price * product.order_number;
                }
                else
                {
                    this.$toasted.show('محصول اضافه شد', {
                        position: 'bottom-center' ,
                        type: 'success' ,
                        theme: 'bubble' ,
                        fitToScreen: true ,
                        className: ['your-custom-class']
                    }).goAway(1500);
                    product.order_number = 1;
                    product.final_price1 = product.final_price * product.order_number;
                }

                let flag = 0;
                arr.forEach(item => {
                    if (item.id === product.id)
                    {
                        flag = 1;
                        if (item.order_number)
                        {
                            if (item.limit !== null)
                            {
                                if (item.limit > item.order_number)
                                {
                                    this.$toasted.show('محصول اضافه شد', {
                                        position: 'bottom-center' ,
                                        type: 'success' ,
                                        theme: 'bubble' ,
                                        fitToScreen: true ,
                                        className: ['your-custom-class']
                                    }).goAway(1500);
                                    item.order_number ++;
                                    item.final_price1 = item.final_price * item.order_number;
                                }
                                else
                                {
                                    this.$toasted.show('برای این محصول محدودیت خرید وجود دارد', {
                                        position: 'bottom-center' ,
                                        type: 'error' ,
                                        theme: 'bubble' ,
                                        fitToScreen: true ,
                                        className: ['your-custom-class']
                                    }).goAway(1500);
                                }
                            }
                            else
                            {
                                this.$toasted.show('محصول اضافه شد', {
                                    position: 'bottom-center' ,
                                    type: 'success' ,
                                    theme: 'bubble' ,
                                    fitToScreen: true ,
                                    className: ['your-custom-class']
                                }).goAway(1500);
                                item.order_number ++;
                                item.final_price1 = item.final_price * item.order_number;
                            }
                        }
                        else
                        {
                            this.$toasted.show('محصول اضافه شد', {
                                position: 'bottom-center' ,
                                type: 'success' ,
                                theme: 'bubble' ,
                                fitToScreen: true ,
                                className: ['your-custom-class']
                            }).goAway(1500);
                            item.order_number = 1;
                            item.final_price1 = item.final_price * item.order_number;
                        }
                    }
                });

                if (flag === 0)
                {
                    arr.push(product);
                }


                 localStorage.setItem('order' , JSON.stringify(arr));
                 this.$emit('send_number' , JSON.parse(localStorage.getItem('order')));
            } ,
            productsByThird(main , third , param) {
                axios({
                    url: `/api/filters/category/${main}/${third}/third/${param}` ,
                    method: 'get' ,
                })
                    .then(res => {
                        this.ok = 1;
                        console.log(res);
                        this.products = res.data;
                        this.get_other_products(this.products)
                    })
                    .catch(err => {
                        console.log(err.response);
                        this.ok = 0;
                        this.products = [];
                        this.pro = [];
                    })
            } ,
            productsBySec(main , sec , param) {
                axios({
                    url: `/api/filters/category/${main}/${sec}/${param}` ,
                    method: 'get' ,
                })
                    .then(res => {
                        this.ok = 1;
                        this.products = res.data;
                        this.get_other_products(this.products)
                    })
                    .catch(err => {
                        console.log(err.response);
                        this.ok = 0;
                        this.products = [];
                        this.pro = [];
                    })
            } ,
            search(title , param) {
                axios({
                    url: `/api/search/${param}` ,
                    method: 'post' ,
                    data: {
                        title: title
                    }
                })
                    .then(res => {
                        this.ok = 1;
                        this.products = res.data;
                        this.get_other_products(this.products)
                    })
                    .catch(err => {
                        console.log(err.response);
                        this.ok = 0;
                        this.products = [];
                        this.pro = [];
                    })
            },
            findBrands(id) {
                    axios({
                        url: `/api/${id}/findBrands` ,
                        method: 'get' ,
                    })
                        .then(res => {
                            console.log(res);
                            this.brands = res.data;
                            this.$emit('BR' , this.brands);
                        })
                        .catch(err => {
                            console.log(err.response);
                            this.brands = [];
                            this.$emit('BR' , this.brands);
                        });
            } ,
            productsByCat(id , param) {
                axios({
                    url: `/api/filters/category/${id}/${param}` ,
                    method: 'get' ,
                })
                    .then(res => {
                        this.ok = 1;
                        console.log(res);
                        this.products = res.data;
                        this.get_other_products(this.products);
                    })
                    .catch(err => {
                        console.log(err.response);
                        this.ok = 0;
                        this.products = [];
                        this.pro = [];
                    });


                this.findBrands(id);
            } ,
            get_other_products(obj) {
                this.pro = [];
                obj.forEach(product => {
                   product.forEach(proo => {
                       this.pro.push(proo);
                   });
                });
                console.log(this.pro)
            } ,
        }
    }
</script>