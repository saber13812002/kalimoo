/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

 window.Vue = require('vue');


import VueRouter from 'vue-router'
// main.js
import Vue from 'vue';
Vue.use(VueRouter);
import Toasted from 'vue-toasted';

Vue.use(Toasted);

import VueObserveVisibility from 'vue-observe-visibility'

Vue.use(VueObserveVisibility);
import VuePersianDatetimePicker from 'vue-persian-datetime-picker';
Vue.component('date-picker', VuePersianDatetimePicker);
import * as VueGoogleMaps from 'vue2-google-maps'



Vue.use(VueGoogleMaps, {
    load: {
        key: 'AIzaSyCYlTc0_XItt9dJz9U8FfI_1PrYZmmtQEI',
        libraries: 'places', // This is required if you use the Autocomplete plugin
        // OR: libraries: 'places,drawing'
        // OR: libraries: 'places,drawing,visualization'
        // (as you require)

        //// If you want to set the version, you can do so:
        // v: '3.26',
    },

    //// If you intend to programmatically custom event listener code
    //// (e.g. `this.$refs.gmap.$on('zoom_changed', someFunc)`)
    //// instead of going through Vue templates (e.g. `<GmapMap @zoom_changed="someFunc">`)
    //// you might need to turn this on.
    // autobindAllEvents: false,

    //// If you want to manually install components, e.g.
    //// import {GmapMarker} from 'vue2-google-maps/src/components/marker'
    //// Vue.component('GmapMarker', GmapMarker)
    //// then disable the following:
    // installComponents: true,
})
//
// // you can also pass options, check options reference below
// Vue.use(Toasted, Options)
//
// import BootstrapVue from 'bootstrap-vue'
//
// Vue.use(BootstrapVue);
// import 'bootstrap/dist/css/bootstrap.css'
// import 'bootstrap-vue/dist/bootstrap-vue.css'

// import VueSweetalert2 from 'vue-sweetalert2';
//
// // If you don't need the styles, do not connect
// import 'sweetalert2/dist/sweetalert2.min.css';
//
// Vue.use(VueSweetalert2);


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('main-header', require('./components/header.vue').default);
Vue.component('baner', require('./components/baner.vue').default);
Vue.component('index', require('./components/index.vue').default);
Vue.component('main-products', require('./components/main-products.vue').default);
Vue.component('main-footer', require('./components/main-footer.vue').default);
Vue.component('all-category', require('./components/all-category.vue').default);
Vue.component('about-store', require('./components/about-store.vue').default);
Vue.component('category-menu', require('./components/category-menu.vue').default);
Vue.component('products', require('./components/products.vue').default);
Vue.component('products-content', require('./components/products-content.vue').default);
Vue.component('filters', require('./components/filters.vue').default);
Vue.component('product', require('./components/product.vue').default);
Vue.component('searchBox', require('./components/searchBox.vue').default);
Vue.component('app', require('./components/app.vue').default);
Vue.component('card', require('./components/card.vue').default);
Vue.component('card-content', require('./components/card-content.vue').default);
Vue.component('card-right', require('./components/card-right.vue').default);
Vue.component('card-left', require('./components/card-left.vue').default);
Vue.component('admin', require('./components/admin.vue').default);
Vue.component('admin-dashboard', require('./components/admin-dashboard.vue').default);
Vue.component('add-category-content', require('./components/add-category-content.vue').default);
Vue.component('admin-dashboard-res', require('./components/admin-dashboard-res.vue').default);
Vue.component('category-list-content', require('./components/category-list-content.vue').default);
Vue.component('products-list-content', require('./components/products-list-content.vue').default);
Vue.component('admin-content', require('./components/admin-content.vue').default);
Vue.component('add-product-content', require('./components/add-product-content.vue').default);
Vue.component('add-discount-content', require('./components/add-discount-content.vue').default);
Vue.component('add-slideShow', require('./components/add-slideShow.vue').default);
Vue.component('customers-list', require('./components/customers-list.vue').default);
Vue.component('orders-list', require('./components/orders-list.vue').default);
Vue.component('discounts-list', require('./components/discounts-list.vue').default);
Vue.component('setting', require('./components/setting.vue').default);
Vue.component('user', require('./components/user.vue').default);
Vue.component('user-content', require('./components/user-content.vue').default);
Vue.component('user-dashboard', require('./components/user-dashboard.vue').default);
Vue.component('user-dashboard-res', require('./components/user-dashboard-res.vue').default);
Vue.component('user-profile', require('./components/user-profile.vue').default);
Vue.component('panel', require('./components/panel.vue').default);
Vue.component('user-orders', require('./components/user-orders.vue').default);
Vue.component('change-password-user', require('./components/change-password-user.vue').default);
Vue.component('card-address-content-right', require('./components/card-address-content-right.vue').default);
Vue.component('not-found-error', require('./components/404.vue').default);
Vue.component('card-pay-right', require('./components/card-pay-right.vue').default);
Vue.component('pay-success', require('./components/pay-success.vue').default);
Vue.component('pay', require('./components/pay.vue').default);
Vue.component('pay-error', require('./components/pay-error.vue').default);
Vue.component('user-order-details', require('./components/user-order-details.vue').default);
Vue.component('add-brand-content', require('./components/add-brand-content.vue').default);
Vue.component('special-discount', require('./components/special-discount.vue').default);
Vue.component('admin-order-details', require('./components/admin-order-details.vue').default);
Vue.component('edit-product', require('./components/edit-product.vue').default);
Vue.component('edit-baners', require('./components/edit-baners.vue').default);
Vue.component('edit-category', require('./components/edit-category.vue').default);
Vue.component('about-us', require('./components/about-us.vue').default);
Vue.component('contact-us', require('./components/contact-us.vue').default);
Vue.component('about-application', require('./components/about-application.vue').default);





/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
//


const routes = [
    {path: '/products/category/:id' ,name:'product' , meta:{title: 'محصولات'} ,component:require('./components/products.vue').default } ,
    {path: '/products/search/:title',name:'product' , meta:{title: 'محصولات'} ,component:require('./components/products.vue').default } ,
    {path: '/products/category/:main/second/:sec',name:'product' , meta:{title: 'محصولات'} ,component:require('./components/products.vue').default } ,
    {path: '/products/category/third/:maincat/:thirdCat',name:'product' ,meta:{title: 'محصولات'} , component:require('./components/products.vue').default } ,
    {path: '/card/products' ,name:'product' ,meta:{title: 'سبد خرید'} , component:require('./components/card.vue').default } ,
    {path: '/card/address' ,name:'product' ,meta:{title: 'سبد خرید'} , component:require('./components/card.vue').default } ,
    {path: '/card/pay' ,name:'product' ,meta:{title: 'سبد خرید'} , component:require('./components/card.vue').default } ,
    {path: '/contact-us' ,name:'product' ,meta:{title: 'تماس با ما'} , component:require('./components/contact-us.vue').default } ,
    {path: '/about-us' ,name:'product' ,meta:{title: 'درباره ما'} , component:require('./components/about-us.vue').default } ,
    {path: '/admin/add-category' , name: 'admin' ,meta:{title: 'افزودن دسته بندی'} , component:require('./components/add-category-content.vue').default } ,
    {path: '/admin/category-list' ,name: 'admin' ,meta:{title: 'لیست دسته بندی ها'} , component:require('./components/category-list-content.vue').default } ,
    {path: '/admin/products-list' ,name: 'admin' ,meta:{title: 'لیست محصولات'} , component:require('./components/products-list-content.vue').default } ,
    {path: '/admin/add-product' , name: 'admin' ,meta:{title: 'افزودن محصول'} ,component:require('./components/add-product-content.vue').default } ,
    {path: '/admin/add-special-discount' , name: 'admin' ,meta:{title: 'افزودن تخفیف مناسبتی'} ,component:require('./components/special-discount.vue').default } ,
    {path: '/admin/add-discount' ,name: 'admin' ,meta:{title: 'افزودن کوپن'} , component:require('./components/add-discount-content.vue').default } ,
    {path: '/admin/add-slideShow' ,name: 'admin' ,meta:{title: 'افزودن اسلایدشو'} , component:require('./components/add-slideShow.vue').default } ,
    {path: '/admin/customers-list' ,name: 'admin' ,meta:{title: 'لیست مشتریان'} , component:require('./components/customers-list.vue').default } ,
    {path: '/admin/add-brand' ,name: 'admin' ,meta:{title:'افزودن برند'} , component:require('./components/add-brand-content.vue').default } ,
    {path: '/admin/orders-list' , name: 'admin' ,meta:{title: 'لیست سفارشات'} ,component:require('./components/orders-list.vue').default } ,
    {path: '/admin/about-application' , name: 'admin' ,meta:{title: 'درباره اپلیکیشن'} ,component:require('./components/about-application.vue').default } ,
    {path: '/admin/edit-baners' , name: 'admin' ,meta:{title: 'ویرایش بنر ها'} ,component:require('./components/edit-baners.vue').default } ,
    {path: '/admin/edit-category/:id/:type' , name: 'admin' ,meta:{title: 'ویرایش دسته بندی ها'} ,component:require('./components/edit-category.vue').default } ,
    {path: '/admin/discounts-list' ,name: 'admin' ,meta:{title: 'لیست کوپن'} , component:require('./components/discounts-list.vue').default } ,
    {path: '/admin/setting' ,name: 'admin' ,meta:{title: 'تنظیمات'} , component:require('./components/setting.vue').default } ,
    {path: '/product/:productID' ,name: 'admin' ,meta:{title: 'ویرایش محصول'} , component:require('./components/edit-product.vue').default } ,
    {path: '/user/profile' ,name: 'user' ,meta:{title: 'حساب کاربری'} , component:require('./components/user-profile.vue').default } ,
    {path: '/details/:ID' ,name: 'user' ,meta:{title: 'جزئیات سفارش'} , component:require('./components/user-order-details.vue').default } ,
    {path: '/adminOrdersDetails/:ID' ,name: 'admin' ,meta:{title: 'جزئیات سفارش'} , component:require('./components/admin-order-details.vue').default } ,
    {path: '/user/orders' ,name: 'user' ,meta:{title: 'لیست سفارشات'} , component:require('./components/user-orders.vue').default } ,
    {path: '/user/change-password' ,name: 'user' ,meta:{title: 'تغییر رمز عبور'} , component:require('./components/change-password-user.vue').default } ,
    {path: '/:order_id/order/pay' ,name: 'product' ,meta:{title: 'پرداخت'} , component:require('./components/pay.vue').default } ,
    {path: '/order/pay/error' ,name: 'product' ,meta:{title: 'پرداخت'} , component:require('./components/pay-error.vue').default } ,
];




const router = new VueRouter({
    mode: 'history' ,
    routes // short for `routes: routes`
});


const app = new Vue({
    router ,
    el: '#app',
});

