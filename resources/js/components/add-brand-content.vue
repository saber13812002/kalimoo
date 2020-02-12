<template>
    <div class="col-xs col-sm col-10 col-md-11 col-lg-9 col-xl-9 users-main delete-padding-left">
        <div class="ui-state-default user-list-info-box-add">
            <div class="admin-form col-md-8">
                <form class="needs-validation" novalidate>

                    <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                        <label for="inputname">نام برند</label>
                        <input type="text" v-model="name" class="form-control" id="inputname" placeholder="نام برند را وارد کنید">
                    </div>

                    <div class="form-group col-xs col-sm col-10 col-md col-lg col-xl-12">
                        <label for="inputState1">دسته بندی برند</label>
                        <select id="inputState1" class="form-control form-option select-size" v-model="main_id">
                            <option v-for="item in mainCats" v-bind:key="item.id" :value="item.id">
                                {{item.name}}
                            </option>
                        </select>
                    </div>

                    <button class="btn btn-primary" type="button" @click="add_brand" style="margin-top: 30px;font-size: 13px;margin-right: 20px;"> افزودن محصول </button>
                </form>
                <!--<div class="table-table-right col-xs col col-sm- col-md col-lg col-xl-8" style="margin-top:20px;">-->
                    <!--<table class="table table-bordered table-transation table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">-->
                        <!--<thead>-->
                        <!--<tr>-->
                            <!--<th scope="col" class="title-4">ردیف</th>-->
                            <!--<th scope="col" class="title-4"> نام برند </th>-->
                            <!--<th scope="col" class="title-4"> دسته بندی برند </th>-->
                            <!--<th scope="col" class="title-4"> حذف </th>-->
                        <!--</tr>-->
                        <!--</thead>-->
                        <!--<tbody>-->
                        <!--<tr v-for="(item , index) in brands">-->
                            <!--<th scope="row">{{index + 1}}</th>-->
                            <!--<td class="title-4">{{item.name}}</td>-->
                            <!--<td class="title-4">{{item.cat}}</td>-->
                            <!--<td class="title-4" @click="delete_brand(item.id)"><i class="fas fa-trash-alt"></i></td>-->
                        <!--</tr>-->
                        <!--</tbody>-->
                    <!--</table>-->
                <!--</div>-->
            </div>
            <div class="col-xs col-sm col- col-md col-lg col-xl-12 word-list flex">
                <div class="col-xs col-sm col- col-md col-lg col-xl-2 word-list-img">
                    <span class="title-4"> ردیف</span>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-2 word-list-all">
                    <span class="title-4">  نام برند  </span>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-2 word-list-ads">
                    <span class="title-4"> دسته بندی برند  </span>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-2 word-list-date">
                    <span class="title-4"> حذف</span>
                </div>
            </div>
            <ol id="selectable" class="col-md-12 delete-padding-left">
                <li  v-for="(item , index) in brands" style="border-radius: 10px;margin-bottom: 30px" class="ui-state-default user-list-info-box flex">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-2 user-list-info-box-image">
                        <span class="text-span title-4 ">  {{index + 1}} </span>
                    </div>

                    <div class="col-xs col-sm col- col-md col-lg col-xl-2 user-list-info-box-number">
                        <span class="text-span title-4 "> {{item.name}}</span>
                    </div>

                    <div class="col-xs col-sm col- col-md col-lg col-xl-2 user-list-info-box-email2">
                        <span class="text-span title-4 "> {{item.cat}}</span>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-2 table-data-feature flex">
                        <a v-on:click="delete_brand(item.id)" id="error2" class="item delete" data-toggle="tooltip" data-placement="top" title="" data-original-title="حذف ">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </li>
            </ol>
        </div>
    </div>
</template>

<script>
    export default {
        name: "add-brand-content" ,

        created() {
            this.get_main_cats();
            this.get_brands();
        } ,

        data() {
            return {
                mainCats: [] ,
                name: '' ,
                main_id: '' ,
                brands: []
            }
        } ,

        methods: {
            delete_brand(id) {
                if (confirm('آیا از حذف کردن این برند مطمئن هستید؟'))
                {
                    axios({
                        url: `/api/brands/${id}/delete` ,
                        method: 'get' ,
                    })
                        .then(res => {
                            console.log(res);
                            this.$toasted.success('brand is deleted' , {
                                position: 'bottom-center' ,
                                theme: 'bubble' ,
                                fitToScreen: true
                            }).goAway(2000);
                            this.get_brands();
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
            get_brands() {
                axios({
                    url: `/api/brands` ,
                    method: 'get' ,
                })
                    .then(res => {
                        console.log(res);
                        this.brands = res.data;
                    })
                    .catch(err => {
                        console.log(err.response);
                    })
            } ,
            add_brand() {
                axios({
                    url: `/api/create/brand` ,
                    method: 'post' ,
                    data: {
                        name: this.name ,
                        main_category_id: this.main_id
                    }
                })
                    .then(res => {
                        console.log(res);
                        this.$toasted.success('brand is added' , {
                            position: 'bottom-center' ,
                            theme: 'bubble' ,
                            fitToScreen: true
                        }).goAway(2000);
                        this.get_brands();
                    })
                    .catch(err => {
                        console.log(err.response);
                        if (err.response.status === 500)
                        {
                            this.$toasted.error('error ! please check the console' , {
                                position: 'bottom-center' ,
                                theme: 'bubble' ,
                                fitToScreen: true
                            }).goAway(2000);
                        }
                        else
                        {
                            this.$toasted.error(err.response.data.toString() , {
                                position: 'bottom-center' ,
                                theme: 'bubble' ,
                                fitToScreen: true
                            }).goAway(2000);
                        }

                        this.get_brands();
                    })
            } ,
            get_main_cats() {
                axios({
                    url: `/api/mainCat` ,
                    method: 'get' ,
                })
                    .then(res => {
                        console.log(res);
                        this.mainCats = res.data;
                    })
                    .catch(err => {
                        console.log(err.response);
                    })
            }
        }
    }
</script>

<style scoped>

</style>