<template>
    <section>
        <center>
            <div class="col-md-12 dashboard-page flex">
                <user-dashboard></user-dashboard>
                <user-dashboard-res></user-dashboard-res>
                <router-view></router-view>
            </div>
        </center>
    </section>
</template>

<script>
    export default {
        name: "user-content"
    }
</script>

<style scoped>

</style>