<template>
    <div>
        <main-header @second-emit-cat="get_cat($event)" :number="number"></main-header>
        <filters :MainCat="main_cat" @pass_number="pro_number($event)"></filters>
        <main-footer :menu="main_cat"></main-footer>
    </div>
</template>

<script>
    export default {
        name: "products" ,

        created() {
            console.log('products component');
            this.set_timeout();
        } ,


        data() {
            return {
                main_cat: [] ,
                number: ''
            }
        } ,

        methods: {
            set_timeout() {
                var hours = 1; // Reset when storage is more than 24hours
                var now = new Date().getTime();
                var setupTime = localStorage.getItem('setupTime');
                if (setupTime == null) {
                    localStorage.setItem('setupTime', now)
                } else {
                    if(now-setupTime > hours*60*60*1000) {
                        localStorage.removeItem('order');
                        localStorage.setItem('setupTime', now);
                    }
                }
            } ,
            pro_number(event) {
                this.number = event
            } ,
            get_cat(event) {
               this.main_cat = event
            }
        }
    }
</script>

<style scoped>
    @import "/public/css/style.css";
</style>