<template>
    <div class="col-xs col-sm col-10 col-md-11 col-lg-9 col-xl-9 users-main delete-padding-left">
        <div class="user-list-page">
            <div class="user-list-manage-box">
                <div class="col-xs col-sm col- col-md col-lg col-xl-4 user-list-manage-box-search delete-padding">
                    <div class="input-group mb-3 input-name-doctor" style="direction: ltr;width: 98%;">
                        <div class="input-group-prepend button-name-doctor">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fas fa-search"></i></button>
                        </div>
                        <input style="text-align: right;font-size: 12px;" type="text" class="form-control input-form-control" placeholder="کد کوپن مورد نظر خود را جستجو کنید" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    </div>
                </div>
            </div>
            <div class="col-xs col-sm col- col-md col-lg col-xl-12 word-list flex">
                <div class="col-xs col-sm col- col-md col-lg col-xl-1 word-list-img">
                    <span class="title-4"> کد</span>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-2 word-list-name">
                    <span class="title-4">    نوع کوپن   </span>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-1 word-list-all">
                    <span class="title-4">  مبلغ کوپن  </span>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-1 word-list-des">
                    <span class="title-4">  توضیحات </span>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-1 word-list-ads">
                    <span class="title-4"> شناسه  </span>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-2 word-list-little">
                    <span class="title-4">  مصرف / محدودیت  </span>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-2 word-list-date">
                    <span class="title-4"> انقضاء</span>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-2 word-list-delete-details">
                    <span class="title-4" style="padding-right: 33px;">  جزئیات سفارش</span>
                </div>
            </div>



            <ol id="selectable" class="col-md-12 delete-padding-left">
                <li class="ui-state-default user-list-info-box flex">
                    <div class="col-md-1 user-list-info-box-image">
                        <span class="text-span title-4">   #123456 </span>
                    </div>
                    <div class="col-md-2 user-list-info-box-name">
                        <span class="text-span title-4"> تخفیف ثابت سبد خرید </span>
                    </div>
                    <div class="col-md-1 user-list-info-box-number">
                        <span class="text-span title-4"> 2/000</span>
                    </div>
                    <div class="col-md-1 user-list-info-box-number">
                        <span class="text-span title-4 c-stop" > عالی</span>
                    </div>
                    <div class="col-md-1 user-list-info-box-email">
                        <span class="text-span title-4"> 123456</span>
                    </div>
                    <div class="col-md-2 user-list-info-box-email2">
                        <span class="text-span title-4"> 123456</span>
                    </div>
                    <div class="col-md-2 user-list-info-box-email2">
                        <span class="text-span title-4"> 123456</span>
                    </div>
                    <div class="col-md-2 table-data-feature flex">
                        <a class="item confirm" data-toggle="tooltip" data-placement="top" title="" data-original-title="تایید">
                            <i class="fas fa-ellipsis-h"></i>
                        </a>
                        <a id="error2" class="item delete" data-toggle="tooltip" data-placement="top" title="" data-original-title="حذف ">
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
        name: "discounts-list" ,
        created() {
            console.log('discounts-list component');
        } ,

        data() {
            return {
                discounts: [] ,
                ok: ''
            }
        } ,

        methods: {
            get_discounts() {
                axios({
                    url: '/api/index/discounts' ,
                    method: 'get' ,
                })
                    .then(res => {
                        console.log(res);
                        this.ok = 1;
                        this.discounts = res.data;
                    })
                    .catch(err => {
                        console.log(err.response);
                        this.discounts = [];
                        this.ok = 0;
                    })
            }
        }
    }
</script>

<style scoped>

</style>