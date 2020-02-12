<template>
    <div>

    </div>

</template>

<script>
    export default {
        name: "product" ,
        created() {
            console.log('product component');
            console.log(this.param);
            this.getProducts(this.param);
        } ,

        props: ['param'] ,

        methods: {

        }
    }
</script>
