<template>
    <div>
        <div v-if="access === 1">
            <main-header @flag="get_flag($event)" @second-emit-cat="get_cat($event)"></main-header>
            <admin-content :flag="flag" :setting_data="setting_data" :unreadnotifications="unreadnotifications"></admin-content>
            <main-footer :menu="main_cat" @get_setting="get_set($event)"></main-footer>
        </div>
        <div v-if="access === 0">
            <not-found-error></not-found-error>
        </div>
    </div>
</template>

<script>
    export default {
        name: "admin" ,
        created() {
            document.title = this.$route.meta.title;
            this.checkUser();
        } ,
        watch: {
            $route(to, from) {
                document.title = to.meta.title;
                if (to.params.ID || to.path === '/admin/orders-list')
                {
                    if (this.peyk === 1)
                    {
                        this.access = 1;
                    }
                    if (this.admin === 1)
                    {
                        this.access = 1;
                    }
                    if (this.admin === 0 && this.peyk === 0)
                    {
                        this.access = 0;
                    }
                }
                else
                {
                    if (this.admin === 1)
                    {
                        this.access = 1;
                    }
                    else
                    {
                        this.access = 0;
                    }
                }
            },
        } ,
        data() {
            return {
                admin: ''  ,
                main_cat: [] ,
                setting_data: [] ,
                peyk: 0 ,
                flag: null ,
                access: '' ,
                unreadnotifications: []
            }
        } ,
        methods:{
            get_set(event) {
                this.setting_data = event
            } ,
            get_cat(event) {
                this.main_cat = event
            } ,
            get_flag(event) {
                this.flag = event
            } ,
            checkUser() {
                axios({
                    url: '/api/user' ,
                    method: 'get' ,
                    headers: {
                        accept: 'application/json' ,
                        Authorization: `Bearer ${localStorage.token}`
                    }
                })
                    .then(res => {
                        this.unreadnotifications = res.data.notifications;
                        if (this.$route.params.ID || this.$route.path === '/admin/orders-list')
                        {
                            if (res.data.type === 'peyk')
                            {
                                this.admin = 0;
                                this.peyk = 1;
                                this.access = 1;
                            }
                            if (res.data.type === 'admin')
                            {
                                this.admin = 1;
                                this.peyk = 0;
                                this.access = 1;
                            }
                        }
                        else
                        {
                            if (res.data.type === 'admin')
                            {
                                this.admin = 1;
                                this.peyk = 0;
                                this.access = 1;
                            }
                            else
                            {
                                this.admin = 0;
                                this.peyk = 0;
                                this.access = 0;
                            }
                        }
                    })
                    .catch(err => {
                        console.log(err.response);
                        this.admin = 0
                    })
            }
        }
    }
</script>

<style scoped>

</style>