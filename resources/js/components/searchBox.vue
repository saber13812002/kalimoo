<template>
    <div class="col-xs col-sm col- col-md-5 col-lg-4 col-xl-5 header-main-content-search delete-padding">
        <div class='col-xs col-sm col-12 col-md col-lg col-xl-12 search-box-header'>
            <form class='search-form'>
                <input class='form-control' v-model="title"  placeholder='محصول مورد نظر خود را در این قسمت جستجو کنید' type='text' >
                <button class='btn btn-link search-btn' type="button" @click="search">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>
</template>
<script>
    export default {
        name: "searchBox" ,

        data() {
            return {
                title: '' ,
            }
        },

        methods: {
            search() {
                this.$emit('search' , this.title);
                if (this.title === '')
                {
                    window.location = `/products/search/_`;
                }
                else
                {
                    window.location = `/products/search/${this.title}`;
                }


            }
        }
    }
</script>

<style scoped>

</style>