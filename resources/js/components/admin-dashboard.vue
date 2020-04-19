<template>
    <div class="col-xs col-sm-10 col-6 col-md-3 col-lg-3 col-xl-3 dashboard-page-sidebar admin delete-padding">
        <div class="list-group">
            <a href="" class="list-group-item list-group-item-action active lga-color">داشبورد </a>
            <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-address-card"></i>پنل مدیریت <i class="fas fa-angle-left icon-left"></i></a>
            <a href="" class="list-group-item list-group-item-action active lga-color">محصولات</a>
            <router-link to="/admin/category-list" class="list-group-item list-group-item-action"><i class="fas fa-align-justify"></i> دسته بندی ها <i class="fas fa-angle-left icon-left"></i></router-link>
            <router-link to="/admin/products-list" class="list-group-item list-group-item-action"><i class="fab fa-product-hunt"></i>  لیست  محصولات<i class="fas fa-angle-left icon-left"></i></router-link>
            <router-link to="/admin/add-product" class="list-group-item list-group-item-action"><i class="fab fa-adversal"></i> افزودن محصولات <i class="fas fa-angle-left icon-left"></i></router-link>
            <router-link to="/admin/add-brand" class="list-group-item list-group-item-action"><i class="fab fa-adversal"></i> افزودن برند <i class="fas fa-angle-left icon-left"></i></router-link>
            <router-link to="/admin/add-discount" class="list-group-item list-group-item-action"><i class="fas fa-align-right"></i> افزودن  کوپن<i class="fas fa-angle-left icon-left"></i></router-link>
            <router-link to="/admin/add-special-discount" class="list-group-item list-group-item-action"><i class="fas fa-align-right"></i> افزودن  تخفیف مناسبتی<i class="fas fa-angle-left icon-left"></i></router-link>
            <router-link to="/admin/add-category" class="list-group-item list-group-item-action"><i class="fas fa-align-center"></i> افزودن  دسته بندی<i class="fas fa-angle-left icon-left"></i></router-link>
            <router-link to="/admin/edit-baners" class="list-group-item list-group-item-action"><i class="fas fa-align-center"></i>ویرایش بنر ها<i class="fas fa-angle-left icon-left"></i></router-link>
            <router-link to="/admin/add-slideShow" class="list-group-item list-group-item-action"><i class="fas fa-sliders-h"></i> افزودن اسلایدشو<i class="fas fa-angle-left icon-left"></i></router-link>
            <router-link to="/admin/about-application" class="list-group-item list-group-item-action"><i class="fas fa-sliders-h"></i> اپلیکیشن<i class="fas fa-angle-left icon-left"></i></router-link>
            <!--<a href="" class="list-group-item list-group-item-action active lga-color">پروفایل کاربری  </a>-->
            <!--<a href="#" class="list-group-item list-group-item-action"><i class="fas fa-envelope-open"></i>صندوق پیام ها  <i class="fas fa-angle-left icon-left"></i></a>-->
            <a href="" class="list-group-item list-group-item-action active lga-color"> مشتری ها </a>
            <router-link to="/admin/customers-list" class="list-group-item list-group-item-action"><i class="fas fa-list-ul"></i> لیست مشتری ها <i class="fas fa-angle-left icon-left"></i></router-link>
            <router-link to="/admin/orders-list" class="list-group-item list-group-item-action"><i class="fas fa-dollar-sign"></i>  لیست  سفارشات <i class="fas fa-angle-left icon-left"></i></router-link>
            <!--<router-link to="/admin/orders-list" class="list-group-item list-group-item-action"><i class="fas fa-dollar-sign"></i>  لیست  سفارشات <i class="fas fas fa-bell icon-left"></i></router-link>-->
            <!--<a href="#" class="list-group-item list-group-item-action disabled"><i class="fas fa-list-ol"></i> آمار فروش <i class="fas fa-angle-left icon-left"></i></a>-->
            <router-link to="/admin/setting" class="list-group-item list-group-item-action"><i class="fas fa-cogs"></i> تنظیمات  <i class="fas fa-angle-left icon-left"></i></router-link>
            <a onclick="localStorage.removeItem('token'); window.location = '/'" class="list-group-item list-group-item-action" style="cursor: pointer;"><i class="fas fa-sign-in-alt"></i> خروج  <i class="fas fa-angle-left icon-left"></i></a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "admin-dashboard" ,
    }
</script>

<style scoped>

</style>