<template>
    <div>
        <main-header></main-header>
        <div class="col-xs col-sm col- col-md col-lg col-xl-12 pay-unSuccessful">
            <center>
                <div class="col-xs col-sm col- col-md col-lg col-xl-10 pay-unSuccessful-inside">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-10 pay-unSuccessful-inside-img">
                        <img src="/img/pay/empty-wallet.jpg">
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-10 pay-unSuccessful-inside-text">
                        <span>   پرداخت موفقیت آمیز نبود دوباره سعی کنید :(  </span>
                    </div>
                </div>
            </center>
        </div>
        <main-footer></main-footer>
    </div>
</template>

<script>
    export default {
        name: "pay-error" ,
        created() {
            localStorage.removeItem('order');
            localStorage.removeItem('online_payment');
        }
    }
</script>

<style scoped>

</style>