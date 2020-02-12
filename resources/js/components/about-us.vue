<template>
    <div>
        <main-header @second-emit-cat="get_cat($event)"></main-header>
        <div class="col-xs col-sm col- col-md col-lg col-xl-12 main-about">
            <div class="col-xs col-sm col- col-md col-lg col-xl-11 content-about-one">


                <div class="col-xs col-sm col- col-md col-lg col-xl-12 content-about-one-title">
                    <span class="align-top font-weight-bold" id="about" style="position: absolute;"><i class="fas fa-gavel"></i> درباره ما  </span>
                </div>

                <div class="col-xs col-sm col- col-md col-lg col-xl-12 main-about-sub-right">
                    <div class="col-xs col-sm col- col-md col-lg-9 col-xl-8 main-about-sub-right-content delete-padding">
                        <p class="title-4">  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون وسطرآنچنان که لازم است چاپگرها و متون بلکه روزنامه و مجله در ستون وسطرآنچنان که چاپگرها و متون بلکه روزنامه و مجله شرایط فعلی تکنولوژی مورد نیاز و برای شرایط فعلی تکنولوژی مورد نیاز در ستون وسطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون وسطرآنچنان که لازم است چاپگرها و متون بلکه روزنامه و مجله در ستون وسطرآنچنان که چاپگرها و متون بلکه روزنامه و مجله شرایط فعلی تکنولوژی مورد نیاز و برای شرایط فعلی تکنولوژی مورد نیاز در ستون وسطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد  </p>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg-3 col-xl-4 main-about-sub-left">
                        <img src="img/about/cookies.png">
                    </div>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-12 main-about-des delete-padding">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 main-about-des1">
                        <p class="title-4">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون وسطرآنچنان که لازم است چاپگرها و متون بلکه روزنامه و مجله در ستون وسطرآنچنان که چاپگرها و متون بلکه روزنامه و مجله شرایط فعلی تکنولوژی مورد نیاز و برای شرایط فعلی تکنولوژی مورد نیاز در ستون وسطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون وسطرآنچنان که لازم است چاپگرها و متون بلکه روزنامه و مجله در ستون وسطرآنچنان که چاپگرها و متون بلکه روزنامه و مجله شرایط فعلی تکنولوژی مورد نیاز و برای شرایط فعلی تکنولوژی مورد نیاز در ستون وسطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 main-about-des3">
                        <p class="title-4">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون وسطرآنچنان که لازم است چاپگرها و متون بلکه روزنامه و مجله در ستون وسطرآنچنان که چاپگرها و متون بلکه روزنامه و مجله شرایط فعلی تکنولوژی مورد نیاز و برای شرایط فعلی تکنولوژی مورد نیاز در ستون وسطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون وسطرآنچنان که لازم است چاپگرها و متون بلکه روزنامه و مجله در ستون وسطرآنچنان که چاپگرها و متون بلکه روزنامه و مجله شرایط فعلی تکنولوژی مورد نیاز و برای شرایط فعلی تکنولوژی مورد نیاز در ستون وسطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                    </div>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-12 main-about-brand">
                    <div class="cycle-slideshow" data-cycle-fx=carousel data-cycle-timeout=1000 data-cycle-carousel-visible=6 data-cycle-carousel-fluid=true data-cycle-slides="div">
                        <div class="col-xs col-sm col- col-md col-lg col-xl-2"><img src="img/brand-img/images1.jpg"></div>
                        <div class="col-xs col-sm col- col-md col-lg col-xl-2"><img src="img/brand-img/images2.png"></div>
                        <div class="col-xs col-sm col- col-md col-lg col-xl-2"><img src="img/brand-img/images1.jpg"></div>
                        <div class="col-xs col-sm col- col-md col-lg col-xl-2"><img src="img/brand-img/images2.png"></div>
                        <div class="col-xs col-sm col- col-md col-lg col-xl-2"><img src="img/brand-img/images1.jpg"></div>
                        <div class="col-md-2"><img src="img/brand-img/images2.png"></div>
                    </div>
                </div>
            </div>
        </div>
        <main-footer :menu="main_cat"></main-footer>
    </div>
</template>

<script>
    export default {
        name: "about-us" ,

        data() {
            return {
                main_cat: []
            }
        } ,

        methods: {
            get_cat(event) {
                this.main_cat = event
            } ,
        }
    }
</script>

<style scoped>

</style>