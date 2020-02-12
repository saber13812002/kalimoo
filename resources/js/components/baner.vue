<template>
    <div>
        <div class="col-xs col-sm col-12 col-md col-lg col-xl-12 slide-image margin-top-fixd">
            <div class="information-slideshow">
                <div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
                    <ol class="carousel-indicators carousel-slider zed-index">
                        <li class="" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
                        <li class="" data-slide-to="1" data-target="#carouselExampleIndicators"></li>
                        <li class="active" data-slide-to="2" data-target="#carouselExampleIndicators"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item"><a :href="slides[0].link"><img alt="First slide" class="d-block w-100" :src="'/images/slideshows/' + slides[0].img"></a></div>
                        <div class="carousel-item"><a :href="slides[1].link"><img alt="Second slide" class="d-block w-100" :src="'/images/slideshows/' + slides[1].img"></a></div>
                        <div class="carousel-item active"><a :href="slides[1].link"><img alt="Third slide" class="d-block w-100" :src="'/images/slideshows/' + slides[2].img"></a></div>
                    </div>
                    <a class="carousel-control-prev prev prev-next" data-slide="prev" href="#carouselExampleIndicators" role="button">
                        <span aria-hidden="true" class="carousel-control-prev-icon">
                        </span>
                        <span class="sr-only">Previous</span>
                     </a>
                    <a class="carousel-control-next next prev-next" data-slide="next" href="#carouselExampleIndicators" role="button">
                        <span aria-hidden="true" class="carousel-control-next-icon"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!--end-slide-top-->
        <!--servises-->
        <div class="col-xs col-sm col col-md col-lg col-xl-12 all-servises">
            <div class="col-xs col-sm col col-md col-lg col-xl-12 all-servises-title">
            <p>  کالیمو چگونه کار می کند ؟  </p>
            </div>
            <div class="col-xs col-sm col col-md col-lg col-xl-10 servises flex">
                <div class="col-xs col-sm-4 col col-md col-lg col-xl-4 all-servises-inside">
                    <div class="col-xs col-sm col col-md col-lg col-xl-12 all-servises-inside-img">
                        <img src="img/service/1.png">
                    </div>
                    <div class="col-xs col-sm col col-md col-lg col-xl-12 all-servises-inside-subject">
                        <span>   فروشندگان </span>
                    </div>
                    <div class="col-xs col-sm col col-md col-lg col-xl-12 all-servises-inside-des">
                        <span> فروشندگان به آسانی می توانند در بازار اینترنتی کالیمو، محصولات و خدمات خود را به صورت آنلاین به فروش برسانند.</span>
                    </div>
                </div>
                <div class="col-xs col-sm-4 col col-md col-lg col-xl-4 all-servises-inside">
                    <div class="col-xs col-sm col col-md col-lg col-xl-12 all-servises-inside-img">
                        <img src="img/service/3.png">
                    </div>
                    <div class="col-xs col-sm col col-md col-lg col-xl-12 all-servises-inside-subject">
                        <span>  کالیمو </span>
                    </div>
                    <div class="col-xs col-sm col col-md col-lg col-xl-12 all-servises-inside-des">
                        <span>  کالیمو بازار اینترنتی و پتلفرمی بی نظیر برای اتصال و ارتباط خریداران و فروشندگان به صورت آنلاین است. </span>
                    </div>
                </div>
                <div class="col-xs col-sm-4 col col-md col-lg col-xl-4 all-servises-inside">
                    <div class="col-xs col-sm col col-md col-lg col-xl-12 all-servises-inside-img">
                        <img src="img/service/2.png">
                    </div>
                    <div class="col-xs col-sm col col-md col-lg col-xl-12 all-servises-inside-subject">
                        <span>  خریداران</span>
                    </div>
                    <div class="col-xs col-sm col col-md col-lg col-xl-12 all-servises-inside-des">
                        <span>تمامی کاربران کالیمو می توانند بدون محدودیت زمانی و مکانی، در بازار کالیمو، کالاها را بررسی، انتخاب و خریداری کنند. </span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        created() {
            console.log('baner component');
            this.slideShows();
        } ,


        data() {
            return {
                slides: []
            }
        } ,

        methods: {
            slideShows() {
                axios({
                    url: '/api/show/slideshow' ,
                    method: 'get' ,
                })
                    .then(res => {
                        console.log(res);
                        this.slides = res.data;
                    })
                    .catch(err => {
                        console.log(err.response);
                    })
            }
        }
    }
</script>
