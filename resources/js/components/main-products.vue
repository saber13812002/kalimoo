<template>
    <div>
        <div class="col-xs col-sm col- col-md col-lg col-xl-12 slideshow-index">
            <div class="col-xs col-sm col- col-md col-lg col-xl-12 slideshow-index-subject">
                <span class="">محصولات پر فروش</span>
            </div>
            <div class="col-xs col-sm col- col-md col-lg col-xl-12 slideshow-index-content">
                <section class="pt-5 circle-1">
                    <div class="pb-5 position-relative">
                        <div class="carousel slide position-relative" data-ride="carousel" id="demo">
                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li class="" data-slide-to="0" data-target="#demo"></li>
                                <li class="active" data-slide-to="1" data-target="#demo"></li>
                                <li class="" data-slide-to="2" data-target="#demo"></li>
                            </ul>


                            <!-- The slideshow -->
                            <div class="carousel-inner">

                                <!--slideshow-1-->
                                <div class="carousel-item">
                                    <div class="d-flex">
                                        <div class="col-xs col-sm col- col-md col-lg col-xl-2">
                                            <div class="product-box-hover">
                                                <div class="product-box">
                                                    <div class="action-btn-slideshow">
                                                        <div class="box" v-if="products[0][0].number">
                                                            <a @click="sent_to_card(products[0][0])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                        <!--<span class="text-white">99%-</span>-->
                                                    <!--</div>-->
                                                    <a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[0][0].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[0][0].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[0][0].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}تومان</span>
                                                        </div>
                                                    </div>
                                                    <div class="review">
                                                        <hr class="hr-review-slideshow">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs col-sm col- col-md col-lg col-xl-2">
                                            <div class="product-box-hover">
                                                <div class="product-box">
                                                    <div class="action-btn-slideshow">
                                                        <div class="box"  v-if="products[0][1].number">
                                                            <a @click="sent_to_card(products[0][1])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                        <!--<span class="text-white">99%-</span>-->
                                                    <!--</div>-->
                                                    <a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[0][1].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[0][1].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[0][1].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}تومان</span>
                                                        </div>
                                                    </div>
                                                    <div class="review">
                                                        <hr class="hr-review-slideshow">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs col-sm col- col-md col-lg col-xl-2">
                                            <div class="product-box-hover">
                                                <div class="product-box">
                                                    <div class="action-btn-slideshow">
                                                        <div class="box"  v-if="products[0][2].number">
                                                            <a @click="sent_to_card(products[0][2])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                        <!--<span class="text-white">99%-</span>-->
                                                    <!--</div>-->
                                                    <a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[0][2].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[0][2].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[0][2].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}تومان</span>
                                                        </div>
                                                    </div>
                                                    <div class="review">
                                                        <hr class="hr-review-slideshow">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs col-sm col- col-md col-lg col-xl-2">
                                            <div class="product-box-hover">
                                                <div class="product-box">
                                                    <div class="action-btn-slideshow">
                                                        <div class="box"  v-if="products[0][3].number">
                                                            <a @click="sent_to_card(products[0][3])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                        <!--<span class="text-white">99%-</span>-->
                                                    <!--</div>-->
                                                    <a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[0][3].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[0][3].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[0][3].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}تومان</span>
                                                        </div>
                                                    </div>
                                                    <div class="review">
                                                        <hr class="hr-review-slideshow">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs col-sm col- col-md col-lg col-xl-2">
                                            <div class="product-box-hover">
                                                <div class="product-box">
                                                    <div class="action-btn-slideshow">
                                                        <div class="box"  v-if="products[0][4].number">
                                                            <a @click="sent_to_card(products[0][4])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                        <!--<span class="text-white">99%-</span>-->
                                                    <!--</div>-->
                                                    <a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[0][4].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="/img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[0][4].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[0][4].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}تومان</span>
                                                        </div>
                                                    </div>
                                                    <div class="review">
                                                        <hr class="hr-review-slideshow">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs col-sm col- col-md col-lg col-xl-2">
                                            <div class="product-box-hover">
                                                <div class="product-box">
                                                    <div class="action-btn-slideshow">
                                                        <div class="box"  v-if="products[0][5].number">
                                                            <a @click="sent_to_card(products[0][5])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                        <!--<span class="text-white">99%-</span>-->
                                                    <!--</div>-->
                                                    <a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[0][5].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[0][5].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[0][5].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}تومان</span>
                                                        </div>
                                                    </div>
                                                    <div class="review">
                                                        <hr class="hr-review-slideshow">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--slideshow-2-->
                                <div class="carousel-item active">
                                    <div class="d-flex">
                                        <div class="col-xs col-sm col- col-md col-lg col-xl-2">
                                            <div class="product-box-hover">
                                                <div class="product-box">
                                                    <div class="action-btn-slideshow">
                                                        <div class="box"  v-if="products[1][0].number">
                                                            <a @click="sent_to_card(products[1][0])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                        <!--<span class="text-white">99%-</span>-->
                                                    <!--</div>-->
                                                    <a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[1][0].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[1][0].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[1][0].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
                                                        </div>
                                                    </div>
                                                    <div class="review">
                                                        <hr class="hr-review-slideshow">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs col-sm col- col-md col-lg col-xl-2">
                                            <div class="product-box-hover">
                                                <div class="product-box">
                                                    <div class="action-btn-slideshow">
                                                        <div class="box"  v-if="products[1][1].number">
                                                            <a @click="sent_to_card(products[1][1])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                        <!--<span class="text-white">99%-</span>-->
                                                    <!--</div>-->
                                                    <a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[1][1].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[1][1].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[1][1].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
                                                        </div>
                                                    </div>
                                                    <div class="review">
                                                        <hr class="hr-review-slideshow">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs col-sm col- col-md col-lg col-xl-2">
                                            <div class="product-box-hover">
                                                <div class="product-box">
                                                    <div class="action-btn-slideshow">
                                                        <div class="box"  v-if="products[1][2].number">
                                                            <a @click="sent_to_card(products[1][2])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                        <!--<span class="text-white">99%-</span>-->
                                                    <!--</div>-->
                                                    <a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[1][2].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[1][2].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[1][2].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
                                                        </div>
                                                    </div>
                                                    <div class="review">
                                                        <hr class="hr-review-slideshow">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs col-sm col- col-md col-lg col-xl-2">
                                            <div class="product-box-hover">
                                                <div class="product-box">
                                                    <div class="action-btn-slideshow">
                                                        <div class="box"  v-if="products[1][3].number">
                                                            <a @click="sent_to_card(products[1][3])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                        <!--<span class="text-white">99%-</span>-->
                                                    <!--</div>-->
                                                    <a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[1][3].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[1][3].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[1][3].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
                                                        </div>
                                                    </div>
                                                    <div class="review">
                                                        <hr class="hr-review-slideshow">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs col-sm col- col-md col-lg col-xl-2">
                                            <div class="product-box-hover">
                                                <div class="product-box">
                                                    <div class="action-btn-slideshow">
                                                        <div class="box"  v-if="products[1][4].number">
                                                            <a @click="sent_to_card(products[1][4])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                        <!--<span class="text-white">99%-</span>-->
                                                    <!--</div>-->
                                                    <a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[1][4].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[1][4].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[1][4].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
                                                        </div>
                                                    </div>
                                                    <div class="review">
                                                        <hr class="hr-review-slideshow">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs col-sm col- col-md col-lg col-xl-2">
                                            <div class="product-box-hover">
                                                <div class="product-box">
                                                    <div class="action-btn-slideshow">
                                                        <div class="box"  v-if="products[1][5].number">
                                                            <a @click="sent_to_card(products[1][5])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                        <!--<span class="text-white">99%-</span>-->
                                                    <!--</div>-->
                                                    <a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[1][5].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[1][5].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[1][5].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
                                                        </div>
                                                    </div>
                                                    <div class="review">
                                                        <hr class="hr-review-slideshow">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--slideshow-3-->
                                <div class="carousel-item">
                                    <div class="d-flex">
                                        <div class="col-xs col-sm col- col-md col-lg col-xl-2">
                                            <div class="product-box-hover">
                                                <div class="product-box">
                                                    <div class="action-btn-slideshow">
                                                        <div class="box"  v-if="products[2][0].number">
                                                            <a @click="sent_to_card(products[2][0])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                        <!--<span class="text-white">99%-</span>-->
                                                    <!--</div>-->
                                                    <a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[2][0].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[2][0].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[2][0].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
                                                        </div>
                                                    </div>
                                                    <div class="review">
                                                        <hr class="hr-review-slideshow">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs col-sm col- col-md col-lg col-xl-2">
                                            <div class="product-box-hover">
                                                <div class="product-box">
                                                    <div class="action-btn-slideshow">
                                                        <div class="box" v-if="products[2][1].number">
                                                            <a @click="sent_to_card(products[2][1])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                        <!--<span class="text-white">99%-</span>-->
                                                    <!--</div>-->
                                                    <a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[2][1].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[2][1].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[2][1].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
                                                        </div>
                                                    </div>
                                                    <div class="review">
                                                        <hr class="hr-review-slideshow">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs col-sm col- col-md col-lg col-xl-2">
                                            <div class="product-box-hover">
                                                <div class="product-box">
                                                    <div class="action-btn-slideshow">
                                                        <div class="box" v-if="products[2][2].number">
                                                            <a @click="sent_to_card(products[2][2])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                        <!--<span class="text-white">99%-</span>-->
                                                    <!--</div>-->
                                                    <a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[2][2].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[2][2].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[2][2].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
                                                        </div>
                                                    </div>
                                                    <div class="review">
                                                        <hr class="hr-review-slideshow">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs col-sm col- col-md col-lg col-xl-2">
                                            <div class="product-box-hover">
                                                <div class="product-box">
                                                    <div class="action-btn-slideshow">
                                                        <div class="box" v-if="products[2][3].number">
                                                            <a @click="sent_to_card(products[2][3])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                        <!--<span class="text-white">99%-</span>-->
                                                    <!--</div>-->
                                                    <a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[2][3].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[2][3].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[2][3].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
                                                        </div>
                                                    </div>
                                                    <div class="review">
                                                        <hr class="hr-review-slideshow">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs col-sm col- col-md col-lg col-xl-2">
                                            <div class="product-box-hover">
                                                <div class="product-box">
                                                    <div class="action-btn-slideshow">
                                                        <div class="box" v-if="products[2][4].number">
                                                            <a @click="sent_to_card(products[2][4])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                        <!--<span class="text-white">99%-</span>-->
                                                    <!--</div>-->
                                                    <a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[2][4].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[2][4].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[2][4].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
                                                        </div>
                                                    </div>
                                                    <div class="review">
                                                        <hr class="hr-review-slideshow">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs col-sm col- col-md col-lg col-xl-2">
                                            <div class="product-box-hover">
                                                <div class="product-box">
                                                    <div class="action-btn-slideshow">
                                                        <div class="box" v-if="products[2][5].number">
                                                            <a @click="sent_to_card(products[2][5])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                        <!--<span class="text-white">99%-</span>-->
                                                    <!--</div>-->
                                                    <a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[2][5].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[2][5].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[2][5].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
                                                        </div>
                                                    </div>
                                                    <div class="review">
                                                        <hr class="hr-review-slideshow">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "main-products" ,
        created() {
            console.log('main-products component');
            this.mostSales();
        } ,

        data() {
            return {
                products: []
            }
        } ,

        methods: {
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
            mostSales() {
                axios({
                    url: `/api/mostSale` ,
                    method: 'get' ,
                })
                    .then(res => {
                        console.log(res);
                        this.products = res.data;
                    })
                    .catch(err => {
                        console.log(err.response);
                    })
            }
        }
    }
</script>
