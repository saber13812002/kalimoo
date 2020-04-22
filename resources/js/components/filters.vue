<template>
    <div>
        <div class="col-xs col-sm col- col-md-12 col-lg-12 col-xl-12 content-main flex margin-top-fixd-product">
            <!--block-filter-->
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 delete-padding block-filter">
                <div class="col-xs col-sm col- col-md col-lg col-xl-12 all-categorize-filter delete-padding flex">
                    <div class="col-xs col-sm col- col-md-2 col-lg-2 col-xl-2 all-categorize-filter-icon">
                        <i class="fas fa-align-justify"></i>
                    </div>
                    <div class="col-xs col-sm col- col-md-8 col-lg-7 col-xl-7 delete-padding all-categorize-filter-name">
                        <span class="text-white"> تمام دسته بندی ها  </span>
                    </div>
                    <div class="col-xs col-sm col- col-md-2 col-lg-2 col-xl-3 all-categorize-filter-drop">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>

                <div class="col-xs col-sm col- col-md col-lg col-xl-12 maping">
                    <a href="#"><span class="text-black">  خانه   </span></a>
                    <span><img src="/icon/arrow-ios-back.png" class="icon-image"></span>
                    <a href="#"><span class="text-black">   فروشگاه  </span></a>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-12 delete-padding product-categorize">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 delete-padding product-categorize-subject flex">
                        <div class="col-xs col-sm col- col-md-10 col-lg-10 col-xl-10 p-subject-right">
                            <span class="title-3"> دسته بندی ها </span>
                        </div>
                        <div class="col-xs col-sm col- col-md-2 col-lg-2 col-xl-2 p-subject-left">
                            <span><i class="fas fa-sort-down"></i></span>
                        </div>
                    </div>
                    <hr class="hr-categorize text-gray">
                    <div class="col-xs col-sm col- col-md col-lg col-xl delete-padding product-categorize-list" >
                        <ul class="ul-product-categorize">
                            <li v-for="cat in MainCat" v-bind:key="cat.id"class="li-product-categorize font-size-li" style=" cursor: pointer;">
                                <router-link :to="'/products/category/' + cat.id" style="color: black;">{{cat.name}}</router-link>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-12 brand-filter delete-padding">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 delete-padding product-categorize-subject flex">
                        <div class="col-xs col-sm col- col-md-10 col-lg-10 col-xl-10 p-subject-right">
                            <span class="title-3">  برند </span>
                        </div>
                        <div class="col-xs col-sm col- col-md-2 col-lg-2 col-xl-2 p-subject-left">
                            <span><i class="fas fa-sort-down"></i></span>
                        </div>
                    </div>
                    <hr class="hr-categorize text-gray">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-12 chekbox-brand">

                        <form>
                            <label v-for="cat in brands" v-bind:key="cat.id" class="custom-control custom-checkbox ga-accommodation-Hotel">
                                <input class="custom-control-input accommodation_itm" @change="filterByBrands()"
                                       :value="cat.id" type="checkbox" v-model="brands_filter">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">  {{cat.name}}  </span>
                            </label>
                        </form>
                    </div>
                </div>
            </div>
            <!--end-block-filter-->
            <products-content :brands_filter="products" @BR="getBrands($event)" @send_number="get_number($event)"></products-content>
        </div>
    </div>
</template>

<script>
    export default {
        name: "filters" ,
        created() {
            console.log('filters component');
            this.getBrands();
        } ,

        props:['MainCat'] ,

        data() {
            return {
                brands_filter: [] ,
                brands: [] ,
                cats: [] ,
                products: [] ,
            }
        } ,

        methods: {
            get_number(event) {
               this.$emit('pass_number' , event);
            } ,
            filterByBrands() {
                if (this.brands_filter !== null || this.brands_filter !== [])
                {
                    axios({
                        url: '/api/filters/brands' ,
                        method: 'post' ,
                        data: {
                            brands: this.brands_filter
                        }
                    })
                        .then(res => {
                            console.log(res);
                            this.products = res.data;
                        })
                        .catch(err => {
                            console.log(err.response)
                        })
                }
            } ,
            getBrands(event) {
                this.brands = event;
            } ,
        }
    }
</script>
