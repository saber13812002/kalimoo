<template>
    <div class="col-xs col-sm col-10 col-md-10 col-lg-9 col-xl-9 users-main delete-padding">
        <div class="user-list-page">
            <div class="user-list-manage-box">
                <div class="col-xs col-sm col- col-md col-lg col-xl-4 user-list-manage-box-search delete-padding">
                    <div class="input-group mb-3 input-name-doctor" style="direction: ltr;width: 98%;">
                        <div class="input-group-prepend button-name-doctor">
                            <button class="btn btn-outline-secondary" v-on:click="search('products' , 'title')"  type="button" id="button-addon1"><i class="fas fa-search"></i></button>
                        </div>
                        <input style="text-align: right;font-size: 12px;" v-model="query" v-on:change="search('products' , 'title')" type="text" class="form-control input-form-control" placeholder="نام دسته مورد نظر خود را جستجو کنید" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    </div>
                </div>
            </div>


            <ol v-if="ok === 1" id="selectable" class="col-xs col-sm col- col-md col-lg col-xl-12 delete-padding-left">
                <li class="ui-state-default user-list-info-box flex" v-for="product in products" v-bind:key="product.id">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-2 user-list-info-box-image">
                        <img :src="'/images/products/' + product.product_img">
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-3 user-list-info-box-name">
                        <span class="text-span text-gray-p"> {{product.title}}  </span>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-2 user-list-info-box-city">
                        <span class="text-span  text-gray-p">{{product.price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}} تومان  </span>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-3 user-list-info-box-email">
                        <span class="text-span text-gray-p" v-if="product.number > 0"> موجود در انبار </span>
                        <span class="text-span text-gray-p" v-else style="color: red"> ناموجود </span>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-2 table-data-feature flex">
                        <router-link :to="'/product/'+product.id" id="error23" class="item delete" data-toggle="tooltip" data-placement="top" title="" data-original-title="حذف ">
                            <i class="fas fa-ellipsis-h"></i>
                        </router-link>
                        <a v-on:click="delete_product(product.id)" id="error2" class="item delete" data-toggle="tooltip" data-placement="top" title="" data-original-title="حذف ">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </li>
                <div style="text-align: center" v-if="products.length && loading" v-observe-visibility="visibilityChanged">
                    <div class="lds-ellipsis"  ><div></div><div></div><div></div><div></div></div>
                </div>
            </ol>

            <div v-if="ok === 0" class="alert alert-danger">
                محصولی یافت نشد
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        name: "products-list-content" ,

        mounted() {
            this.showProducts();
        } ,

        data() {
            return {
                products: [] ,
                query: '' ,
                ok: '' ,
                page: 1 ,
                last_page: 0 ,
                loading: true ,
            }
        } ,

        methods: {
             visibilityChanged (isVisible) {
                if (!isVisible) return;
                if (this.page <= this.last_page)
                {
                    this.showProducts();
                }
                else
                {
                    this.loading = false;
                }

            } ,
             showProducts() {
                axios({
                    url: `/api/index?page=${this.page++}` ,
                    method: 'get' ,
                })
                    .then(res => {
                        this.ok = 1;
                        this.products = [...this.products,...res.data.data];
                        this.last_page = res.data.last_page;
                    })
                    .catch(err => {
                        console.log(err.response);
                        this.ok = 0;
                    })
            } ,
             search(table , param) {
                 this.loading = false;
                 if (this.query === "")
                 {
                     this.loading = true;
                     this.page = 1;
                     this.products = [];
                     this.showProducts();
                     return;
                 }
                axios({
                    url: `/api/search/${table}/${param}` ,
                    method: 'post' ,
                    data: {
                        q: this.query
                    }
                })
                    .then(res => {
                        this.ok = 1;
                        this.products = res.data;
                    })
                    .catch(err => {
                        console.log(err.response);
                        this.ok = 0;
                    })
            } ,
             delete_product(id) {
                if (confirm('آیا از حذف کردن این محصول مطمئن هستید؟؟؟'))
                {
                    axios({
                        url: `/api/products/${id}/delete` ,
                        method: 'get' ,
                    })
                        .then(res => {
                                this.$toasted.success('product is deleted' , {
                                position: 'bottom-center' ,
                                theme: 'bubble' ,
                                fitToScreen: true
                            }).goAway(1500);
                            this.showProducts();
                        })
                        .catch(err => {
                            console.log(err.response);
                            this.$toasted.error(err.response.data , {
                                position: 'bottom-center' ,
                                theme: 'bubble' ,
                                fitToScreen: true
                            }).goAway(3000);
                        })
                }
            } ,
        }
    }
</script>

<style scoped>
    .lds-ellipsis {
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
    }
    .lds-ellipsis div {
        position: absolute;
        top: 33px;
        width: 13px;
        height: 13px;
        border-radius: 50%;
        background: #1b73f4;
        animation-timing-function: cubic-bezier(0, 1, 1, 0);
    }
    .lds-ellipsis div:nth-child(1) {
        left: 8px;
        animation: lds-ellipsis1 0.6s infinite;
    }
    .lds-ellipsis div:nth-child(2) {
        left: 8px;
        animation: lds-ellipsis2 0.6s infinite;
    }
    .lds-ellipsis div:nth-child(3) {
        left: 32px;
        animation: lds-ellipsis2 0.6s infinite;
    }
    .lds-ellipsis div:nth-child(4) {
        left: 56px;
        animation: lds-ellipsis3 0.6s infinite;
    }
    @keyframes lds-ellipsis1 {
        0% {
            transform: scale(0);
        }
        100% {
            transform: scale(1);
        }
    }
    @keyframes lds-ellipsis3 {
        0% {
            transform: scale(1);
        }
        100% {
            transform: scale(0);
        }
    }
    @keyframes lds-ellipsis2 {
        0% {
            transform: translate(0, 0);
        }
        100% {
            transform: translate(24px, 0);
        }
    }

</style>