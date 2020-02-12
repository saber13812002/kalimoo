<template>
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
                    <p class="title-4" style="text-align: justify"> {{setting_data.app_text}}</p>
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
                <img :src="'/images/application/' + setting_data.app_second_image">
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "about-store" ,

        props: ['setting_data'] ,
        created() {
            console.log('about store component');
        } ,
    }
</script>

<style scoped>

</style>