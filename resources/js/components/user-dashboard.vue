<template>
    <div class="col-md-3 col-6 dashboard-page-sidebar user delete-padding">
        <div class="list-group">
            <router-link to="" class="list-group-item list-group-item-action active lga-color">داشبورد </router-link>
            <router-link to="/user/profile" class="list-group-item list-group-item-action"><i class="fas fa-address-card"></i>پنل کاربری    <i class="fas fa-angle-left icon-left"></i></router-link>
            <router-link to="/user/orders" class="list-group-item list-group-item-action"><i class="fas fa-dollar-sign"></i>سفارشات  <i class="fas fa-angle-left icon-left"></i></router-link>
            <router-link to="" class="list-group-item list-group-item-action active lga-color">پروفایل کاربری  </router-link>
            <!--<a href="messages-user.html" class="list-group-item list-group-item-action"><i class="fas fa-envelope-open"></i>صندوق پیام ها  <i class="fas fa-angle-left icon-left"></i></a>-->
            <router-link to="/user/change-password" class="list-group-item list-group-item-action"><i class="fas fa-unlock-alt"></i>تغییر رمز عبور  <i class="fas fa-angle-left icon-left"></i></router-link>
            <a @click="logout" class="list-group-item list-group-item-action" style="cursor: pointer;"><i class="fas fa-sign-in-alt"></i> خروج  <i class="fas fa-angle-left icon-left"></i></a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "user-dashboard" ,
        methods: {
            logout() {
                localStorage.removeItem('token');
                window.location = '/'
            }
        }
    }
</script>

<style scoped>

</style>