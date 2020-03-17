<template>
    <div class="col-xs col-sm col-10 col-md-11 col-lg-9 col-xl-9 users-main delete-padding-left">
        <div class="ui-state-default user-list-info-box-add">
            <div class="admin-form col-md-8">
                <form class="needs-validation" novalidate>

                    <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                        <label for="inputname">نام محصول</label>
                        <input type="text" v-model="product.title" class="form-control" id="inputname" placeholder="نام محصول را وارد کنید">
                    </div>
                    <div class="form-group col-xs col-sm col-10 col-md col-lg col-xl-12">
                        <label for="validationTextarea">توضیحات محصول</label>
                        <textarea class="form-control" v-model="product.description" id="validationTextarea" placeholder="توضیحات محصول را وارد کنید" required=""></textarea>
                        <div class="invalid-feedback">
                            لطفا توضیحات محصول را وارد کنید
                        </div>
                    </div>

                    <div class="form-group col-xs col-sm col-10 col-md col-lg col-xl-12">
                        <label for="inputState1">دسته بندی محصول</label>
                        <select id="inputState1" @click="getCategorybrands(main_id)" class="form-control form-option select-size" v-model="main_id">
                            <option v-for="item in thirds" v-bind:key="item.id" :value="item">
                                {{item.name}}
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-xs col-sm col-10 col-md col-lg col-xl-12">
                        <label for="inputState">برند محصول را انتخاب کنید</label>
                        <select id="inputState" class="form-control form-option select-size" v-model="brand_id">
                            <option v-for="br in category_brands" v-bind:key="br.id" :value="br">{{br.name}}</option>
                        </select>
                    </div>
                    <div class="form-group col-xs col-sm col-10 col-md col-lg col-xl-12">
                        <label for="inputEmail4">قیمت (به تومان)</label>
                        <input type="text" v-model="product.price" class="form-control" id="inputEmail4" placeholder="قیمت محصول را وارد کنید">
                    </div>
                    <div class="form-group col-xs col-sm col-10 col-md col-lg col-xl-12">
                        <label for="inputname2">چند درصد میخواهید تخفیف دهید؟ (به طور مثال 10 درصد)</label>
                        <input type="number" v-model="discount" class="form-control" id="inputname2" placeholder="تخفیف">
                    </div>
                    <div class="form-group col-xs col-sm col-10 col-md col-lg col-xl-12">
                        <label for="inputname21">تعداد موجودی </label>
                        <input type="number" v-model="product.number" class="form-control" id="inputname21" placeholder="تعداد موجودی را وارد کنید">
                    </div>

                    <div class="form-group col-xs col-sm col-10 col-md col-lg col-xl-12">
                        <label for="inputname211">محدودیت برای حداکثر سفارش </label>
                        <input type="number" v-model="product.limit" class="form-control" id="inputname211" placeholder="محدودیت برای حداکثر سفارش">
                    </div>


                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" ref="img" v-on:change="handle()">
                        <label class="custom-file-label" for="customFile" style="margin-right: 15px;margin-top: 10px;">انتخاب عکس</label>
                    </div>

                    <button class="btn btn-primary" type="button" v-on:click="edit($route.params.productID)" style="margin-top: 30px;font-size: 13px;margin-right: 20px;"> افزودن محصول </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "edit-product" ,

        created() {
            this.get_product(this.$route.params.productID);
        } ,

        data() {
            return {
                thirds: [] ,
                brands: [] ,
                main_id: '' ,
                title: '' ,
                description: '' ,
                price: '' ,
                brand_id: '' ,
                discount: '' ,
                number: '' ,
                img: '' ,
                category_brands: [] ,
                product: {
                    title: '' ,
                    description: '' ,
                    price: '' ,
                    discount: '' ,
                    number: '' ,
                    limit: ''
                }
            }
        } ,

        methods: {
            getCategorybrands(category) {
                this.category_brands = [];
                this.brands.forEach(item => {
                    if (item.main_category_id === category.main_category_id)
                    {
                        this.category_brands.push(item)
                    }
                })
            } ,
            handle() {
                this.img = this.$refs.img.files[0];
            } ,
            edit(id) {
                let file = this.img;
                if (file !== '' && file !== null)
                {
                    let data = new FormData();
                    data.append('title' , this.product.title);
                    data.append('description' , this.product.description);
                    data.append('third_category_id' , this.main_id.id);
                    data.append('price' , this.product.price);
                    data.append('brand_id' , this.brand_id.id);
                    data.append('discount' , (100 - this.discount) / 100);
                    data.append('number' , this.product.number);
                    data.append('product_img' , file);
                    data.append('limit' , this.product.limit);
                    axios({
                        url: `/api/product/edit/${id}` ,
                        method: 'post' ,
                        data: data
                    })
                        .then(res => {
                            console.log(res);
                            this.product = res.data;
                            this.$toasted.success('تغییرات با موفقیت اعمال شد' , {
                                position: 'bottom-center' ,
                                theme: 'bubble' ,
                                fitToScreen: true ,
                                className: ['your-custom-class']
                            }).goAway(1500);
                        })
                        .catch(err => {
                            console.log(err.response);
                            err.response.data.forEach(error => {
                                this.$toasted.error(error  , {
                                    position: 'bottom-center' ,
                                    theme: 'bubble' ,
                                    fitToScreen: true ,
                                    className: ['your-custom-class']
                                }).goAway(4000);
                            })
                        });
                        this.brands = [];
                }
                else
                {
                    axios({
                        url: `/api/product/edit/${id}` ,
                        method: 'post' ,
                        data: {
                            title:this.product.title ,
                            description: this.product.description ,
                            third_category_id: this.main_id.id ,
                            price: this.product.price ,
                            brand_id: this.brand_id.id ,
                            discount: (100 - this.discount) / 100 ,
                            number: this.product.number ,
                            limit: this.product.limit ,
                        }
                    })
                        .then(res => {
                            console.log(res);
                            this.product = res.data;
                            this.$toasted.success('تغییرات با موفقیت اعمال شد' , {
                                position: 'bottom-center' ,
                                theme: 'bubble' ,
                                fitToScreen: true ,
                                className: ['your-custom-class']
                            }).goAway(1500);
                        })
                        .catch(err => {
                            console.log(err.response);
                            err.response.data.forEach(error => {
                                this.$toasted.error(error  , {
                                    position: 'bottom-center' ,
                                    theme: 'bubble' ,
                                    fitToScreen: true ,
                                    className: ['your-custom-class']
                                }).goAway(4000);
                            });
                            this.brands = [];
                        })
                }

            } ,
            get_brands(id) {
                axios({
                    url: `/api/brands` ,
                    method: 'get' ,
                })
                    .then(res => {
                        console.log(res);
                        this.brands = res.data;
                        res.data.forEach(item => {
                            if (item.id == id)
                            {
                                this.brand_id = item
                            }
                        })
                    })
                    .catch(err => {
                        console.log(err.response);
                        this.brands = [];
                    })
            } ,
            get_product(id) {
                axios({
                    url: `/api/product/${id}` ,
                    method: 'get' ,
                })
                    .then(res => {
                        console.log(res);
                        this.product = res.data;
                        this.discount = 100 - (res.data.discount * 100);
                        this.get_brands(res.data.brand_id);
                        this.get_third_cats(res.data.third_category_id);
                    })
                    .catch(err => {
                        console.log(err.response);
                    })
            } ,
            get_third_cats(id) {
                axios({
                    url: '/api/all/third' ,
                    method: 'get' ,
                })
                    .then(res => {
                        console.log(res);
                        this.thirds = res.data;
                        res.data.forEach(item => {
                            if (item.id == id)
                            {
                                this.main_id = item
                            }
                        });
                        this.getCategorybrands(this.main_id)
                    })
                    .catch(err => {
                        console.log(err.response);
                    })
            } ,
        }
    }
</script>

<style scoped>

</style>