<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body fff">
                        I'm an example component.
                    </div>
                    <div>
                        {{ex}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        props: ['ex'] ,

        data() {
            return {
               hello:'hello world'
            }
        }
    }
</script>

<style scoped>
    .fff {
        background-color: red;
    }
</style>
