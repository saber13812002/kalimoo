<template>
    <div class="col-xs col-sm col- col-md col-lg col-xl-12 all-category-image delete-padding">
        <div class="col-xs col-sm col- col-md col-lg col-xl-12 category-full">
            <a :href="baners[0].link"><img :src="'/img/product-images/' + baners[0].image" class="img-fluid" alt="Responsive image"></a>
        </div>
        <div class="col-xs col-sm col- col-md col-lg col-xl-12 gallery-images delete-padding">
            <div class="col-xs col-sm col- col-md col-lg col-xl-12 gallery-images-start flex delete-padding">
                <div  class="col-xs col-sm col- col-md col-lg col-xl-4 g-img-start-right">
                    <a :href="baners[1].link"><img :src="'/img/product-images/' + baners[1].image" class="image-size-small img-fluid" alt="Responsive image"></a>
                </div>
                <div  class="col-xs col-sm col- col-md col-lg col-xl-4 g-img-start-beetween">
                    <a :href="baners[2].link"><img :src="'/img/product-images/' + baners[2].image" class="image-size-small img-fluid" alt="Responsive image"></a>
                </div>
                <div  class="col-xs col-sm col- col-md col-lg col-xl-4 g-img-start-left">
                    <a :href="baners[3].link"><img :src="'/img/product-images/' + baners[3].image" class="image-size-small img-fluid" alt="Responsive image"></a>
                </div>
            </div>
            <div class="col-xs col-sm col- col-md col-lg col-xl-12 gallery-images-end flex delete-padding">
                <div class="col-xs col-sm col- col-md col-lg col-xl-12 gallery-images-start flex delete-padding">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-4 g-img-start-right">
                        <a :href="baners[4].link"><img :src="'/img/product-images/' + baners[4].image" class="image-size-small img-fluid" alt="Responsive image"></a>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-4 g-img-start-beetween">
                        <a :href="baners[5].link"><img :src="'/img/product-images/' + baners[5].image" class="image-size-small img-fluid" alt="Responsive image"></a>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-4 g-img-start-left">
                        <a :href="baners[6].link"><img :src="'/img/product-images/' + baners[6].image" class="image-size-small img-fluid" alt="Responsive image"></a>
                    </div>
                </div>
            </div>
        </div>





        <!--<div class="col- col-xs col-sm col-md col-lg col-xl-12" style="direction: ltr;">-->
            <!--<center>-->
                <!--<div class="col- col-xs col-sm col-md col-lg col-xl-12">-->
                    <!--<div class="owl-carousel owl-theme vertical-divider">-->
                        <!--<div class="col-xs col-sm col- col-md col-lg col-xl- item">-->
                            <!--<div class="product-box-hover">-->
                                <!--<div class="product-box">-->
                                    <!--<div class="action-btn-slideshow">-->
                                        <!--<div class="box">-->
                                            <!--<a href="#"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="product-offer-slideshow">-->
                                        <!--<span class="text-white">99%-</span>-->
                                    <!--</div><a href="#">-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">-->
                                        <!--<div class="preview-image-slideshow"><img class="product-image-size-slideshow" src="img/product/large3.png"></div>-->
                                        <!--<div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>-->
                                    <!--</div></a>-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">-->
                                        <!--<a href="#">-->
                                            <!--<div class="product-info-name">-->
                                                <!--<span class="text-span-big-slideshow black">گیلاس درجه یک</span>-->
                                            <!--</div></a>-->
                                        <!--<div class="product-info-price">-->
                                            <!--<span class="text-span-small-slideshow green">155/000تومان</span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="review">-->
                                        <!--<hr class="hr-review-slideshow">-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->


                        <!--<div class="col-xs col-sm col- col-md col-lg col-xl- item">-->
                            <!--<div class="product-box-hover">-->
                                <!--<div class="product-box">-->
                                    <!--<div class="action-btn-slideshow">-->
                                        <!--<div class="box">-->
                                            <!--<a href="#"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="product-offer-slideshow">-->
                                        <!--<span class="text-white">99%-</span>-->
                                    <!--</div><a href="#">-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">-->
                                        <!--<div class="preview-image-slideshow"><img class="product-image-size-slideshow" src="img/product/large3.png"></div>-->
                                        <!--<div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>-->
                                    <!--</div></a>-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">-->
                                        <!--<a href="#">-->
                                            <!--<div class="product-info-name">-->
                                                <!--<span class="text-span-big-slideshow black">گیلاس درجه یک</span>-->
                                            <!--</div></a>-->
                                        <!--<div class="product-info-price">-->
                                            <!--<span class="text-span-small-slideshow green">155/000تومان</span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="review">-->
                                        <!--<hr class="hr-review-slideshow">-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->


                        <!--<div class="col-xs col-sm col- col-md col-lg col-xl- item">-->
                            <!--<div class="product-box-hover">-->
                                <!--<div class="product-box">-->
                                    <!--<div class="action-btn-slideshow">-->
                                        <!--<div class="box">-->
                                            <!--<a href="#"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="product-offer-slideshow">-->
                                        <!--<span class="text-white">99%-</span>-->
                                    <!--</div><a href="#">-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">-->
                                        <!--<div class="preview-image-slideshow"><img class="product-image-size-slideshow" src="img/product/large3.png"></div>-->
                                        <!--<div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>-->
                                    <!--</div></a>-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">-->
                                        <!--<a href="#">-->
                                            <!--<div class="product-info-name">-->
                                                <!--<span class="text-span-big-slideshow black">گیلاس درجه یک</span>-->
                                            <!--</div></a>-->
                                        <!--<div class="product-info-price">-->
                                            <!--<span class="text-span-small-slideshow green">155/000تومان</span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="review">-->
                                        <!--<hr class="hr-review-slideshow">-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->

                        <!--<div class="col-xs col-sm col- col-md col-lg col-xl- item">-->
                            <!--<div class="product-box-hover">-->
                                <!--<div class="product-box">-->
                                    <!--<div class="action-btn-slideshow">-->
                                        <!--<div class="box">-->
                                            <!--<a href="#"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="product-offer-slideshow">-->
                                        <!--<span class="text-white">99%-</span>-->
                                    <!--</div><a href="#">-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">-->
                                        <!--<div class="preview-image-slideshow"><img class="product-image-size-slideshow" src="img/product/large3.png"></div>-->
                                        <!--<div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>-->
                                    <!--</div></a>-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">-->
                                        <!--<a href="#">-->
                                            <!--<div class="product-info-name">-->
                                                <!--<span class="text-span-big-slideshow black">گیلاس درجه یک</span>-->
                                            <!--</div></a>-->
                                        <!--<div class="product-info-price">-->
                                            <!--<span class="text-span-small-slideshow green">155/000تومان</span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="review">-->
                                        <!--<hr class="hr-review-slideshow">-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->

                        <!--<div class="col-xs col-sm col- col-md col-lg col-xl- item">-->
                            <!--<div class="product-box-hover">-->
                                <!--<div class="product-box">-->
                                    <!--<div class="action-btn-slideshow">-->
                                        <!--<div class="box">-->
                                            <!--<a href="#"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="product-offer-slideshow">-->
                                        <!--<span class="text-white">99%-</span>-->
                                    <!--</div><a href="#">-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">-->
                                        <!--<div class="preview-image-slideshow"><img class="product-image-size-slideshow" src="img/product/large3.png"></div>-->
                                        <!--<div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>-->
                                    <!--</div></a>-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">-->
                                        <!--<a href="#">-->
                                            <!--<div class="product-info-name">-->
                                                <!--<span class="text-span-big-slideshow black">گیلاس درجه یک</span>-->
                                            <!--</div></a>-->
                                        <!--<div class="product-info-price">-->
                                            <!--<span class="text-span-small-slideshow green">155/000تومان</span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="review">-->
                                        <!--<hr class="hr-review-slideshow">-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->

                        <!--<div class="col-xs col-sm col- col-md col-lg col-xl- item">-->
                            <!--<div class="product-box-hover">-->
                                <!--<div class="product-box">-->
                                    <!--<div class="action-btn-slideshow">-->
                                        <!--<div class="box">-->
                                            <!--<a href="#"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="product-offer-slideshow">-->
                                        <!--<span class="text-white">99%-</span>-->
                                    <!--</div><a href="#">-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">-->
                                        <!--<div class="preview-image-slideshow"><img class="product-image-size-slideshow" src="img/product/large3.png"></div>-->
                                        <!--<div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>-->
                                    <!--</div></a>-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">-->
                                        <!--<a href="#">-->
                                            <!--<div class="product-info-name">-->
                                                <!--<span class="text-span-big-slideshow black">گیلاس درجه یک</span>-->
                                            <!--</div></a>-->
                                        <!--<div class="product-info-price">-->
                                            <!--<span class="text-span-small-slideshow green">155/000تومان</span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="review">-->
                                        <!--<hr class="hr-review-slideshow">-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->

                        <!--<div class="col-xs col-sm col- col-md col-lg col-xl- item">-->
                            <!--<div class="product-box-hover">-->
                                <!--<div class="product-box">-->
                                    <!--<div class="action-btn-slideshow">-->
                                        <!--<div class="box">-->
                                            <!--<a href="#"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="product-offer-slideshow">-->
                                        <!--<span class="text-white">99%-</span>-->
                                    <!--</div><a href="#">-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">-->
                                        <!--<div class="preview-image-slideshow"><img class="product-image-size-slideshow" src="img/product/large3.png"></div>-->
                                        <!--<div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>-->
                                    <!--</div></a>-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">-->
                                        <!--<a href="#">-->
                                            <!--<div class="product-info-name">-->
                                                <!--<span class="text-span-big-slideshow black">گیلاس درجه یک</span>-->
                                            <!--</div></a>-->
                                        <!--<div class="product-info-price">-->
                                            <!--<span class="text-span-small-slideshow green">155/000تومان</span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="review">-->
                                        <!--<hr class="hr-review-slideshow">-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->

                        <!--<div class="col-xs col-sm col- col-md col-lg col-xl- item">-->
                            <!--<div class="product-box-hover">-->
                                <!--<div class="product-box">-->
                                    <!--<div class="action-btn-slideshow">-->
                                        <!--<div class="box">-->
                                            <!--<a href="#"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="product-offer-slideshow">-->
                                        <!--<span class="text-white">99%-</span>-->
                                    <!--</div><a href="#">-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">-->
                                        <!--<div class="preview-image-slideshow"><img class="product-image-size-slideshow" src="img/product/large3.png"></div>-->
                                        <!--<div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>-->
                                    <!--</div></a>-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">-->
                                        <!--<a href="#">-->
                                            <!--<div class="product-info-name">-->
                                                <!--<span class="text-span-big-slideshow black">گیلاس درجه یک</span>-->
                                            <!--</div></a>-->
                                        <!--<div class="product-info-price">-->
                                            <!--<span class="text-span-small-slideshow green">155/000تومان</span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="review">-->
                                        <!--<hr class="hr-review-slideshow">-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->

                        <!--<div class="col-xs col-sm col- col-md col-lg col-xl- item">-->
                            <!--<div class="product-box-hover">-->
                                <!--<div class="product-box">-->
                                    <!--<div class="action-btn-slideshow">-->
                                        <!--<div class="box">-->
                                            <!--<a href="#"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="product-offer-slideshow">-->
                                        <!--<span class="text-white">99%-</span>-->
                                    <!--</div><a href="#">-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">-->
                                        <!--<div class="preview-image-slideshow"><img class="product-image-size-slideshow" src="img/product/large3.png"></div>-->
                                        <!--<div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>-->
                                    <!--</div></a>-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">-->
                                        <!--<a href="#">-->
                                            <!--<div class="product-info-name">-->
                                                <!--<span class="text-span-big-slideshow black">گیلاس درجه یک</span>-->
                                            <!--</div></a>-->
                                        <!--<div class="product-info-price">-->
                                            <!--<span class="text-span-small-slideshow green">155/000تومان</span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="review">-->
                                        <!--<hr class="hr-review-slideshow">-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="col-xs col-sm col- col-md col-lg col-xl- item">-->
                            <!--<div class="product-box-hover">-->
                                <!--<div class="product-box">-->
                                    <!--<div class="action-btn-slideshow">-->
                                        <!--<div class="box">-->
                                            <!--<a href="#"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="product-offer-slideshow">-->
                                        <!--<span class="text-white">99%-</span>-->
                                    <!--</div><a href="#">-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">-->
                                        <!--<div class="preview-image-slideshow"><img class="product-image-size-slideshow" src="img/product/large3.png"></div>-->
                                        <!--<div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>-->
                                    <!--</div></a>-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">-->
                                        <!--<a href="#">-->
                                            <!--<div class="product-info-name">-->
                                                <!--<span class="text-span-big-slideshow black">گیلاس درجه یک</span>-->
                                            <!--</div></a>-->
                                        <!--<div class="product-info-price">-->
                                            <!--<span class="text-span-small-slideshow green">155/000تومان</span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="review">-->
                                        <!--<hr class="hr-review-slideshow">-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->

                        <!--<div class="col-xs col-sm col- col-md col-lg col-xl- item">-->
                            <!--<div class="product-box-hover">-->
                                <!--<div class="product-box">-->
                                    <!--<div class="action-btn-slideshow">-->
                                        <!--<div class="box">-->
                                            <!--<a href="#"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="product-offer-slideshow">-->
                                        <!--<span class="text-white">99%-</span>-->
                                    <!--</div><a href="#">-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">-->
                                        <!--<div class="preview-image-slideshow"><img class="product-image-size-slideshow" src="img/product/large3.png"></div>-->
                                        <!--<div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>-->
                                    <!--</div></a>-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">-->
                                        <!--<a href="#">-->
                                            <!--<div class="product-info-name">-->
                                                <!--<span class="text-span-big-slideshow black">گیلاس درجه یک</span>-->
                                            <!--</div></a>-->
                                        <!--<div class="product-info-price">-->
                                            <!--<span class="text-span-small-slideshow green">155/000تومان</span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="review">-->
                                        <!--<hr class="hr-review-slideshow">-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->

                        <!--<div class="col-xs col-sm col- col-md col-lg col-xl- item">-->
                            <!--<div class="product-box-hover">-->
                                <!--<div class="product-box">-->
                                    <!--<div class="action-btn-slideshow">-->
                                        <!--<div class="box">-->
                                            <!--<a href="#"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="product-offer-slideshow">-->
                                        <!--<span class="text-white">99%-</span>-->
                                    <!--</div><a href="#">-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">-->
                                        <!--<div class="preview-image-slideshow"><img class="product-image-size-slideshow" src="img/product/large3.png"></div>-->
                                        <!--<div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>-->
                                    <!--</div></a>-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">-->
                                        <!--<a href="#">-->
                                            <!--<div class="product-info-name">-->
                                                <!--<span class="text-span-big-slideshow black">گیلاس درجه یک</span>-->
                                            <!--</div></a>-->
                                        <!--<div class="product-info-price">-->
                                            <!--<span class="text-span-small-slideshow green">155/000تومان</span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="review">-->
                                        <!--<hr class="hr-review-slideshow">-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->

                        <!--<div class="col-xs col-sm col- col-md col-lg col-xl- item">-->
                            <!--<div class="product-box-hover">-->
                                <!--<div class="product-box">-->
                                    <!--<div class="action-btn-slideshow">-->
                                        <!--<div class="box">-->
                                            <!--<a href="#"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="product-offer-slideshow">-->
                                        <!--<span class="text-white">99%-</span>-->
                                    <!--</div><a href="#">-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">-->
                                        <!--<div class="preview-image-slideshow"><img class="product-image-size-slideshow" src="img/product/large3.png"></div>-->
                                        <!--<div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>-->
                                    <!--</div></a>-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">-->
                                        <!--<a href="#">-->
                                            <!--<div class="product-info-name">-->
                                                <!--<span class="text-span-big-slideshow black">گیلاس درجه یک</span>-->
                                            <!--</div></a>-->
                                        <!--<div class="product-info-price">-->
                                            <!--<span class="text-span-small-slideshow green">155/000تومان</span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="review">-->
                                        <!--<hr class="hr-review-slideshow">-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->


                        <!--<div class="col-xs col-sm col- col-md col-lg col-xl- item">-->
                            <!--<div class="product-box-hover">-->
                                <!--<div class="product-box">-->
                                    <!--<div class="action-btn-slideshow">-->
                                        <!--<div class="box">-->
                                            <!--<a href="#"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="product-offer-slideshow">-->
                                        <!--<span class="text-white">99%-</span>-->
                                    <!--</div><a href="#">-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">-->
                                        <!--<div class="preview-image-slideshow"><img class="product-image-size-slideshow" src="img/product/large3.png"></div>-->
                                        <!--<div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>-->
                                    <!--</div></a>-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">-->
                                        <!--<a href="#">-->
                                            <!--<div class="product-info-name">-->
                                                <!--<span class="text-span-big-slideshow black">گیلاس درجه یک</span>-->
                                            <!--</div></a>-->
                                        <!--<div class="product-info-price">-->
                                            <!--<span class="text-span-small-slideshow green">155/000تومان</span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="review">-->
                                        <!--<hr class="hr-review-slideshow">-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->

                        <!--<div class="col-xs col-sm col- col-md col-lg col-xl- item">-->
                            <!--<div class="product-box-hover">-->
                                <!--<div class="product-box">-->
                                    <!--<div class="action-btn-slideshow">-->
                                        <!--<div class="box">-->
                                            <!--<a href="#"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="product-offer-slideshow">-->
                                        <!--<span class="text-white">99%-</span>-->
                                    <!--</div><a href="#">-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">-->
                                        <!--<div class="preview-image-slideshow"><img class="product-image-size-slideshow" src="img/product/large3.png"></div>-->
                                        <!--<div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>-->
                                    <!--</div></a>-->
                                    <!--<div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">-->
                                        <!--<a href="#">-->
                                            <!--<div class="product-info-name">-->
                                                <!--<span class="text-span-big-slideshow black">گیلاس درجه یک</span>-->
                                            <!--</div></a>-->
                                        <!--<div class="product-info-price">-->
                                            <!--<span class="text-span-small-slideshow green">155/000تومان</span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="review">-->
                                        <!--<hr class="hr-review-slideshow">-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</center>-->
        <!--</div>-->

        <div class="col-xs col-sm col- col-md col-lg col-xl-12 slideshow-index">
            <div class="col-xs col-sm col- col-md col-lg col-xl-12 slideshow-index-subject">
                <span class="">جدیدترین محصولات </span>
            </div>
            <div class="col-xs col-sm col- col-md col-lg col-xl-12 slideshow-index-content">
                <section class="pt-5 circle-1">
                    <div class="pb-5 position-relative">
                        <div class="carousel slide position-relative" data-ride="carousel" id="demo">

                            <!-- The slideshow -->
                            <div class="carousel-inner">

                                <!--slideshow-1-->
                                <div class="carousel-item">
                                    <div class="d-flex">
                                        <div class="col-xs col-sm col- col-md col-lg col-xl-2">
                                            <div class="product-box-hover">
                                                <div class="product-box">
                                                    <div class="action-btn-slideshow">
                                                        <div class="box" v-if="products[0].number">
                                                            <a @click="sent_to_card(products[0])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                        <!--<span class="text-white">99%-</span>-->
                                                    <!--</div><a href="#">-->
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[0].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a>
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[0].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[0].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}تومان</span>
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
                                                        <div class="box" v-if="products[1].number">
                                                            <a @click="sent_to_card(products[1])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                    <!--<span class="text-white">99%-</span>-->
                                                    <!--</div><a href="#">-->
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[1].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a>
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[1].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[1].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}تومان</span>
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
                                                    <div class="box" v-if="products[2].number">
                                                        <a @click="sent_to_card(products[2])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                    </div>
                                                </div>
                                                <!--<div class="product-offer-slideshow">-->
                                                <!--<span class="text-white">99%-</span>-->
                                                <!--</div><a href="#">-->
                                                <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                    <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[2].product_img"></div>
                                                    <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                </div>
                                                <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                    <a>
                                                        <div class="product-info-name">
                                                            <span class="text-span-big-slideshow black">{{products[2].title}}</span>
                                                        </div></a>
                                                    <div class="product-info-price">
                                                        <span class="text-span-small-slideshow green">{{products[2].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}تومان</span>
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
                                                        <div class="box" v-if="products[3].number">
                                                            <a @click="sent_to_card(products[3])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                    <!--<span class="text-white">99%-</span>-->
                                                    <!--</div><a href="#">-->
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[3].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a>
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[3].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[3].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}تومان</span>
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
                                                        <div class="box" v-if="products[4].number">
                                                            <a @click="sent_to_card(products[4])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                    <!--<span class="text-white">99%-</span>-->
                                                    <!--</div><a href="#">-->
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[4].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a>
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[4].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[4].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}تومان</span>
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
                                                        <div class="box" v-if="products[5].number">
                                                            <a @click="sent_to_card(products[5])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                    <!--<span class="text-white">99%-</span>-->
                                                    <!--</div><a href="#">-->
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[5].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a>
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[5].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[5].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}تومان</span>
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
                                                        <div class="box"  v-if="products[6].number">
                                                            <a @click="sent_to_card(products[6])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                        <!--<span class="text-white">99%-</span>-->
                                                    <!--</div><a href="#">-->
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[6].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[6].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[6].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
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
                                                        <div class="box"  v-if="products[7].number">
                                                            <a @click="sent_to_card(products[7])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                    <!--<span class="text-white">99%-</span>-->
                                                    <!--</div><a href="#">-->
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[7].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[7].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[7].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
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
                                                        <div class="box"  v-if="products[8].number">
                                                            <a @click="sent_to_card(products[8])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                    <!--<span class="text-white">99%-</span>-->
                                                    <!--</div><a href="#">-->
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[8].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[8].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[8].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
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
                                                        <div class="box"  v-if="products[9].number">
                                                            <a @click="sent_to_card(products[9])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                    <!--<span class="text-white">99%-</span>-->
                                                    <!--</div><a href="#">-->
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[9].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[9].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[9].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
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
                                                        <div class="box"  v-if="products[10].number">
                                                            <a @click="sent_to_card(products[10])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                    <!--<span class="text-white">99%-</span>-->
                                                    <!--</div><a href="#">-->
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[10].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[10].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[10].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
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
                                                        <div class="box"  v-if="products[11].number">
                                                            <a @click="sent_to_card(products[11])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                    <!--<span class="text-white">99%-</span>-->
                                                    <!--</div><a href="#">-->
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[11].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[11].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[11].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
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
                                                        <div class="box"  v-if="products[12].number">
                                                            <a @click="sent_to_card(products[12])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                        <!--<span class="text-white">99%-</span>-->
                                                    <!--</div><a href="#">-->
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[12].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[12].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[12].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
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
                                                        <div class="box"  v-if="products[13].number">
                                                            <a @click="sent_to_card(products[13])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                    <!--<span class="text-white">99%-</span>-->
                                                    <!--</div><a href="#">-->
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[13].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[13].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[13].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
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
                                                        <div class="box"  v-if="products[14].number">
                                                            <a @click="sent_to_card(products[14])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                    <!--<span class="text-white">99%-</span>-->
                                                    <!--</div><a href="#">-->
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[14].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[14].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[14].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
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
                                                        <div class="box"  v-if="products[15].number">
                                                            <a @click="sent_to_card(products[15])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                    <!--<span class="text-white">99%-</span>-->
                                                    <!--</div><a href="#">-->
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[15].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[15].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[15].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
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
                                                        <div class="box"  v-if="products[16].number">
                                                            <a @click="sent_to_card(products[16])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                    <!--<span class="text-white">99%-</span>-->
                                                    <!--</div><a href="#">-->
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[16].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[16].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[16].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
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
                                                        <div class="box"  v-if="products[17].number">
                                                            <a @click="sent_to_card(products[17])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--<div class="product-offer-slideshow">-->
                                                    <!--<span class="text-white">99%-</span>-->
                                                    <!--</div><a href="#">-->
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + products[17].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{products[17].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{products[17].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
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

        <div class="col-xs col-sm col- col-md col-lg col-xl-12 gallery-offer delete-padding">
            <div class="col-xs col-sm col- col-md col-lg col-xl-12 gallery-offer-start flex">
                <div  class="col-xs col-sm col- col-md col-lg col-xl-3 gallery-offer-img1 delete-padding">
                    <a :href="baners[7].link"><img :src="'/img/product-images/' + baners[7].image" class="img-fluid" alt="Responsive image"></a>
                </div>
                <div  class="col-xs col-sm col- col-md col-lg col-xl-3 gallery-offer-img2 delete-padding" alt="Responsive image">
                    <a :href="baners[8].link"><img :src="'/img/product-images/' + baners[8].image" class="img-fluid" alt="Responsive image"></a>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-3 gallery-offer-img3 delete-padding">
                    <a :href="baners[9].link"><img :src="'/img/product-images/' + baners[9].image" class="img-fluid" alt="Responsive image"></a>
                </div>
                <div  class="col-xs col-sm col- col-md col-lg col-xl-3 gallery-offer-img4 delete-padding">
                    <a :href="baners[10].link"><img :src="'/img/product-images/' + baners[10].image" class="img-fluid" alt="Responsive image"></a>
                </div>
            </div>
            <div class="col-xs col-sm col- col-md col-lg col-xl-12 gallery-offer-end flex">
                <div class="col-xs col-sm col- col-md col-lg col-xl-6 gallery-offer-right delete-padding">
                    <a :href="baners[11].link"><img :src="'/img/product-images/' + baners[11].image" class="img-fluid" alt="Responsive image"></a>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-6 gallery-offer-left delete-padding">
                    <a :href="baners[12].link"><img :src="'/img/product-images/' + baners[12].image" class="img-fluid" alt="Responsive image"></a>
                </div>
            </div>
        </div>


        <div class="col-xs col-sm col- col-md col-lg col-xl-12 slideshow-index">
            <div class="col-xs col-sm col- col-md col-lg col-xl-12 slideshow-index-subject">
                <span class="">بیشترین تخفیف </span>
            </div>
            <div class="col-xs col-sm col- col-md col-lg col-xl-12 slideshow-index-content">
                <section class="pt-5 circle-1">
                    <div class="pb-5 position-relative">
                        <div class="carousel slide position-relative" data-ride="carousel" id="demo">



                            <!-- The slideshow -->
                            <div class="carousel-inner">

                                <!--slideshow-1-->
                                <div class="carousel-item">
                                    <div class="d-flex">
                                        <div class="col-xs col-sm col- col-md col-lg col-xl-2">
                                            <div class="product-box-hover">
                                                <div class="product-box">
                                                    <div class="action-btn-slideshow">
                                                        <div class="box" v-if="discounted[0].number">
                                                            <a @click="sent_to_card(discounted[0])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-offer-slideshow">
                                                        <span class="text-white">{{(1 - discounted[0].discount) * 100}}%</span>
                                                    </div><a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + discounted[0].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{discounted[0].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{discounted[0].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}تومان</span>
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
                                                        <div class="box" v-if="discounted[1].number">
                                                            <a @click="sent_to_card(discounted[1])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-offer-slideshow">
                                                        <span class="text-white">{{(1 - discounted[1].discount) * 100}}%</span>
                                                    </div><a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + discounted[1].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{discounted[1].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{discounted[1].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}تومان</span>
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
                                                        <div class="box" v-if="discounted[2].number">
                                                            <a @click="sent_to_card(discounted[2])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-offer-slideshow">
                                                        <span class="text-white">{{(1 - discounted[2].discount) * 100}}%</span>
                                                    </div><a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + discounted[2].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{discounted[2].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{discounted[2].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}تومان</span>
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
                                                        <div class="box" v-if="discounted[3].number">
                                                            <a @click="sent_to_card(discounted[3])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-offer-slideshow">
                                                        <span class="text-white">{{(1 - discounted[3].discount) * 100}}%</span>
                                                    </div><a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + discounted[3].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{discounted[3].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{discounted[3].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}تومان</span>
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
                                                        <div class="box" v-if="discounted[4].number">
                                                            <a @click="sent_to_card(discounted[4])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-offer-slideshow">
                                                        <span class="text-white">{{(1 - discounted[4].discount) * 100}}%</span>
                                                    </div><a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + discounted[4].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{discounted[4].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{discounted[4].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}تومان</span>
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
                                                        <div class="box" v-if="discounted[5].number">
                                                            <a @click="sent_to_card(discounted[5])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-offer-slideshow">
                                                        <span class="text-white">{{(1 - discounted[5].discount) * 100}}%</span>
                                                    </div><a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + discounted[5].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{discounted[5].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{discounted[5].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}تومان</span>
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
                                                        <div class="box"  v-if="discounted[6].number">
                                                            <a @click="sent_to_card(discounted[6])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-offer-slideshow">
                                                        <span class="text-white">{{(1 - discounted[6].discount) * 100}}%</span>
                                                    </div><a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + discounted[6].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{discounted[6].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{discounted[6].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
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
                                                        <div class="box"  v-if="discounted[7].number">
                                                            <a @click="sent_to_card(discounted[7])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-offer-slideshow">
                                                        <span class="text-white">{{(1 - discounted[7].discount) * 100}}%</span>
                                                    </div><a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + discounted[7].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{discounted[7].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{discounted[7].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
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
                                                        <div class="box"  v-if="discounted[8].number">
                                                            <a @click="sent_to_card(discounted[8])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-offer-slideshow">
                                                        <span class="text-white">{{(1 - discounted[8].discount) * 100}}%</span>
                                                    </div><a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + discounted[8].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{discounted[8].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{discounted[8].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
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
                                                        <div class="box"  v-if="discounted[9].number">
                                                            <a @click="sent_to_card(discounted[9])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-offer-slideshow">
                                                        <span class="text-white">{{(1 - discounted[9].discount) * 100}}%</span>
                                                    </div><a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + discounted[9].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{discounted[9].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{discounted[9].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
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
                                                        <div class="box"  v-if="discounted[10].number">
                                                            <a @click="sent_to_card(discounted[10])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-offer-slideshow">
                                                        <span class="text-white">{{(1 - discounted[10].discount) * 100}}%</span>
                                                    </div><a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + discounted[10].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{discounted[10].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{discounted[10].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
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
                                                        <div class="box"  v-if="discounted[11].number">
                                                            <a @click="sent_to_card(discounted[11])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-offer-slideshow">
                                                        <span class="text-white">{{(1 - discounted[11].discount) * 100}}%</span>
                                                    </div><a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + discounted[11].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{discounted[11].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{discounted[11].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
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
                                                        <div class="box"  v-if="discounted[12].number">
                                                            <a @click="sent_to_card(discounted[12])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-offer-slideshow">
                                                        <span class="text-white">{{(1 - discounted[12].discount) * 100}}%</span>
                                                    </div><a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + discounted[12].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{discounted[12].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{discounted[12].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
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
                                                        <div class="box"  v-if="discounted[13].number">
                                                            <a @click="sent_to_card(discounted[13])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-offer-slideshow">
                                                        <span class="text-white">{{(1 - discounted[13].discount) * 100}}%</span>
                                                    </div><a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + discounted[13].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{discounted[13].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{discounted[13].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
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
                                                        <div class="box"  v-if="discounted[14].number">
                                                            <a @click="sent_to_card(discounted[14])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-offer-slideshow">
                                                        <span class="text-white">{{(1 - discounted[14].discount) * 100}}%</span>
                                                    </div><a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + discounted[14].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{discounted[14].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{discounted[14].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
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
                                                        <div class="box"  v-if="discounted[15].number">
                                                            <a @click="sent_to_card(discounted[15])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-offer-slideshow">
                                                        <span class="text-white">{{(1 - discounted[15].discount) * 100}}%</span>
                                                    </div><a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + discounted[15].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{discounted[15].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{discounted[15].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
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
                                                        <div class="box"  v-if="discounted[16].number">
                                                            <a @click="sent_to_card(discounted[16])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-offer-slideshow">
                                                        <span class="text-white">{{(1 - discounted[16].discount) * 100}}%</span>
                                                    </div><a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + discounted[16].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{discounted[16].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{discounted[16].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
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
                                                        <div class="box"  v-if="discounted[17].number">
                                                            <a @click="sent_to_card(discounted[17])"><i class="fas fa-shopping-basket"></i></a> <a href="#"><i class="fas fa-exchange-alt"></i></a> <a href="#"><i class="fas fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-offer-slideshow">
                                                        <span class="text-white">{{(1 - discounted[17].discount) * 100}}%</span>
                                                    </div><a href="#">
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 preview-slideshow delete-padding">
                                                        <div class="preview-image-slideshow"><img class="product-image-size-slideshow" :src="'/images/products/' + discounted[17].product_img"></div>
                                                        <div class="preveiew-shape-slideshow"><img class="shape-main-site-slideshow" src="img/shap-1smallslideshow.png"> <img class="shape-responsive-slideshow" src="img/shap-bigres.png"></div>
                                                    </div></a>
                                                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 product-info-slideshow delete-padding">
                                                        <a href="#">
                                                            <div class="product-info-name">
                                                                <span class="text-span-big-slideshow black">{{discounted[17].title}}</span>
                                                            </div></a>
                                                        <div class="product-info-price">
                                                            <span class="text-span-small-slideshow green">{{discounted[17].final_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان</span>
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


        <div class="col-xs col-sm col- col-md col-lg col-xl-12 all-category-important table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
            <div class="col-xs col-sm col- col-md col-lg col-xl-12 all-category-important-image flex">
                <div class="card-indeex col-xs col-sm col- col-md col-lg col-xl-3">
                    <div class="card card-second">
                        <img :src="'/img/product-images/' + baners[13].image">
                        <div class="card--hidden"></div>
                        <div class="card__content">
                            <h2>لبنیات</h2>
                            <p>شیر و پنیر</p>
                            <a :href="baners[13].link" class="card__info">50% تخفیف</a>
                        </div>
                    </div>
                </div>

                <div class="col-xs col-sm col- col-md col-lg col-xl-3">
                    <div class="card card-second">
                        <img :src="'/img/product-images/' + baners[14].image">
                        <div class="card--hidden"></div>
                        <div class="card__content">
                            <h2>خشکبار</h2>
                            <p>گردو و پسته</p>
                            <a :href="baners[14].link" class="card__info">50% تخفیف</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-3">
                    <div class="card card-second">
                        <img :src="'/img/product-images/' + baners[15].image">
                        <div class="card--hidden"></div>
                        <div class="card__content">
                            <h2>حبوبات</h2>
                            <p>نخود و لوبیا</p>
                            <a :href="baners[15].link" class="card__info">50% تخفیف</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-3">
                    <div class="card card-second">
                        <img :src="'/img/product-images/' + baners[16].image">
                        <div class="card--hidden"></div>
                        <div class="card__content">
                            <h2>قند  شکر</h2>
                            <p>نبات و شکر</p>
                            <a :href="baners[16].link" class="card__info">50% تخفیف</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "all-category",
        created() {
            console.log('all-category component');
            this.get_baners();
            this.new_products();
            this.most_discounted();
        },

        data() {
            return {
                baners: [] ,
                products: [] ,
                discounted: []
            }
        },


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
            new_products() {
                axios({
                    url: `/api/mostDiscounted` ,
                    method: 'get' ,
                })
                    .then(res => {
                        console.log(res);
                        this.discounted = res.data;
                    })
                    .catch(err => {
                        console.log(err.response);
                    })
            } ,

            most_discounted() {
                axios({
                    url: `/api/index` ,
                    method: 'get' ,
                })
                    .then(res => {
                        console.log(res);
                        this.products = res.data;
                    })
                    .catch(err => {
                        console.log(err.response);
                    })
            } ,
            get_baners() {
                axios({
                    url: '/api/baners',
                    method: 'get',
                })
                    .then(res => {
                        console.log(res);
                        this.baners = res.data.main_baners;
                    })
                    .catch(err => {
                        console.log(err.response);
                    })
            },
        }
    }
</script>

<style scoped>

</style>