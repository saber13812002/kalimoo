<template>
    <div class="col-2 col-md-1 sidebar-res delete-padding">
        <div class="list-group">
            <router-link to="/user/profile" class="list-group-item list-group-item-action"><i class="fas fa-address-card"></i></router-link>
            <router-link to="/user/orders" class="list-group-item list-group-item-action"><i class="fas fa-dollar-sign"></i></router-link>
            <!--<router-link to="" class="list-group-item list-group-item-action"><i class="fas fa-envelope-open"></i></router-link>-->
            <router-link to="/user/change-password" class="list-group-item list-group-item-action"><i class="fas fa-unlock-alt"></i></router-link>
            <a onclick="localStorage.removeItem('token'); window.location = '/'" class="list-group-item list-group-item-action"><i class="fas fa-sign-in-alt"></i></a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "user-dashboard-res"
    }
</script>

<style scoped>

</style>