<template>
<div>
    <div class="col-md-12 header-main-end delete-padding">
        <div class="content">
            <ul class="exo-menu">
                <li><a class="active" href="/"><i class="fa fa-home"></i> </a></li>
                <li class="mega-drop-down" onmouseover="menu_mouse_hover();" onmouseout="menu_mouse_out();"
                    v-for="main_category in main_categories" v-bind:key="main_category.id">

                    <a :href="'/products/category/' + main_category.id"><img :src="'/images/icon/' + main_category.icon" class="icon-mega-menu">{{main_category.name}}</a>
                    <div class="animated fadeIn mega-menu">
                        <div class="mega-menu-wrap">
                            <div class="row">
                                <div class="col-md-2" v-for="(item , index) in main_category.second">
                                    <a :href="'/products/category/' + main_category.id + '/second/' + item.name"><h4 class="row mega-title"> {{item.name}}</h4></a>
                                    <ul class="description">
                                        <li v-for="(name) in item.third"><a :href="'/products/category/third/' + main_category.id + '/' + name.id">
                                            {{name.name}}
                                        </a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <img id="img-responsive" class="img-category-size" :src="'/images/category/' + main_category.img">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

        <!---block-filter-responsive-->
        <div class="col-xs- col-12 col-sm-12 col-md col-lg col-xs-12 block-filter-responsive">
            <div class="col-xs- col-12 col-sm-12 col-md col-lg col-xs-12 block-filter-responsive-main table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl flex">
               <div  v-for="item in main_categories" v-bind:key="item.id">
                    <a v-if="ok === 0" :href="'/products/category/' + item.id">
                        <span class="title-4 text-black"> {{item.name}}</span>
                    </a>
                   <router-link v-if="ok === 1" :to="'/products/category/' + item.id">
                       <span class="title-4 text-black"> {{item.name}}</span>
                   </router-link>
                </div>

            </div>
        </div>
        <!--end-block-filter-responsive-->
</div>
</template>

<script>
    export default {
        created() {
            console.log('category menu component');
            this.getCat();
            if (this.$route.name === 'product')
            {
                this.ok = 1
            }
            else
            {
                this.ok = 0;
            }
        } ,

        data () {
            return {
                main_categories: [] ,
                ok: ''
            }
        } ,

        methods:{
            go(main , sec) {
                window.location = `/products/category/${main}/second/${sec}`
            },
            getCat() {
                axios({
                    method: 'get' ,
                    url: '/api/menu'
                })
                    .then(res => {
                        console.log(res);
                        this.main_categories = res.data;
                        this.$emit('first-emit-cat' , this.main_categories);
                    })
                    .catch(err => console.log(err.response))
            } ,
        }
    }
</script>
