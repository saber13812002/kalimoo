<template>
    <!---RES---->
    <div class="col-xs col-sm-1 col-2 col-md-1 col-lg col-xl-1 sidebar-res delete-padding">
        <div class="list-group">
            <router-link to="/admin/category-list" class="list-group-item list-group-item-action"><i class="fas fa-align-justify"></i></router-link>
            <router-link to="/admin/products-list" class="list-group-item list-group-item-action"><i class="fab fa-product-hunt"></i></router-link>
            <router-link to="/admin/add-product" class="list-group-item list-group-item-action"><i class="fab fa-adversal"></i></router-link>
            <router-link to="/admin/add-category" class="list-group-item list-group-item-action"><i class="fas fa-align-center"></i></router-link>
            <router-link to="/admin/add-discount" class="list-group-item list-group-item-action"><i class="fas fa-align-right"></i></router-link>
            <router-link to="/admin/add-special-discount" class="list-group-item list-group-item-action"><i class="fas fa-align-right"></i></router-link>
            <router-link to="/admin/add-brand" class="list-group-item list-group-item-action"><i class="fas fa-align-right"></i></router-link>
            <router-link to="/admin/edit-baners" class="list-group-item list-group-item-action"><i class="fas fa-align-right"></i></router-link>
            <router-link to="/admin/add-slideShow" class="list-group-item list-group-item-action"><i class="fas fa-sliders-h"></i></router-link>
            <router-link to="/admin/customers-list" class="list-group-item list-group-item-action"><i class="fas fa-list-ul"></i></router-link>
            <router-link to="/admin/orders-list" class="list-group-item list-group-item-action"><i class="fas fa-dollar-sign"></i></router-link>
            <router-link to="/admin/about-application" class="list-group-item list-group-item-action"><i class="fas fa-dollar-sign"></i></router-link>
            <router-link to="/admin/setting" class="list-group-item list-group-item-action"><i class="fas fa-cogs"></i></router-link>
            <a onclick="localStorage.removeItem('token'); window.location = '/'" class="list-group-item list-group-item-action"><i class="fas fa-sign-in-alt"></i></a>
        </div>
    </div>
    <!---END-RES--->
</template>

<script>
    export default {
        name: "admin-dashboard-res"
    }
</script>

<style scoped>

</style>