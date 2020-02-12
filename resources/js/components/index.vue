<template>
    <div>
      <main-header :number="number" @second-emit-cat="getCAT($event)"></main-header>
      <baner></baner>
      <main-products @send_number="getNumber($event)"></main-products>
      <all-category @send_number="getNumber($event)"></all-category>
      <about-store :setting_data="setting_data"></about-store>
      <main-footer :menu="menu"  @get_setting="get_set($event)"></main-footer>
    </div>
</template>

<script>

    export default {

        created() {
            console.log('index component');
            this.set_timeout();
        } ,

        data() {
            return {
                number:'' ,
                menu: [] ,
                setting_data: []
            }
        } ,

        methods: {
            get_set(event) {
                this.setting_data = event
            } ,
            getCAT(event) {
                this.menu = event
            } ,
            getNumber(event) {
                this.number = event
            } ,
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
            }
        }
    }
</script>
