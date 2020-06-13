<template>
    <div class="col-xs col-sm col-10 col-md-11 col-lg-9 col-xl-9 users-main delete-padding-left">
        <div class="ui-state-default user-list-info-box-add">
            <div class="admin-form col-xs col-sm col- col-md col-lg col-xl-8">
                <form class="needs-validation" novalidate>
                    <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                        <label for="inputname">نام  دسته بندی </label>
                        <input type="text" v-model="name" class="form-control" id="inputname" placeholder="نام دسته بندی را وارد کنید">
                    </div>

                    <div v-if="$route.params.type === 'main'" class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                        <label for="inputState44">کلمات کلیدی را فقط برای دسته بندی های اصلی وارد کنید</label>
                        <input type="text" v-model="keywords" class="form-control" id="inputState44" placeholder="کلمات کلیدی را با ',' از همدیگر جدا کنید ">

                    </div>



                    <div class="custom-file" style="margin-top: 25px;margin-right: 15px;">
                        <input type="file" class="custom-file-input" id="customFile" ref="img" @change="handle">
                        <label class="custom-file-label" for="customFile">انتخاب عکس</label>
                    </div>

                    <div v-if="$route.params.type === 'main'" class="custom-file" style="margin-top: 25px;margin-right: 15px;">
                        <input type="file" class="custom-file-input" id="customFile1" ref="logo1" @change="handle1">
                        <label class="custom-file-label" for="customFile1">انتخاب لوگو (فقط برای دسته بندی های مادر)</label>
                    </div>

                    <button class="btn btn-primary" type="button" @click="edit" style="margin-top: 20px;font-size: 13px;margin-right: 15px;"> افزودن دسته</button>

                    <div class="progress form-group col-xs col-sm col- col-md col-lg col-xl-12">
                        <div class="progress-bar" role="progressbar" :style="'width:'+ percent + '%'" :aria-valuenow="percent" aria-valuemin="0" aria-valuemax="100">{{percent}}%</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "edit-category" ,

        created() {
           this.get_cat(this.$route.params.id , this.$route.params.type);
        } ,

        data() {
            return {
                name: '' ,
                cats: [] ,
                img: null ,
                percent: 0 ,
                logo: null ,
                keywords: ''
            }
        } ,

        methods: {
            handle() {
                this.img = this.$refs.img.files[0];
            } ,
            handle1() {
                this.logo = this.$refs.logo1.files[0];
            } ,
            edit() {
                this.percent = 0;
                let data = new FormData();
                let file = this.img;
                let logo = this.logo;
                if (file) data.append('img' , file);
                if (logo) data.append('icon' , logo);


                data.append('name' , this.name);
                data.append('keywords' , this.keywords);

                axios({
                    url: `/api/update/cat/${this.$route.params.id}/${this.$route.params.type}` ,
                    method: 'post' ,
                    data: data ,
                    onUploadProgress: uploadEvent => {
                        this.percent = Math.round(uploadEvent.loaded / uploadEvent.total * 100);
                    }
                })
                    .then(res => {
                        console.log(res);
                        this.$toasted.success('تغییرات با موفقیت اعمال شد' , {
                            position: 'bottom-center' ,
                            theme: 'bubble' ,
                            fitToScreen: true ,
                            className: ['your-custom-class']
                        }).goAway(1500);
                    })
                    .catch(err => {
                        console.log(err.response);
                        err.response.data.forEach(error => {
                            this.$toasted.error(error , {
                                position: 'bottom-center' ,
                                theme: 'bubble' ,
                                fitToScreen: true ,
                                className: ['your-custom-class']
                            }).goAway(3000);
                        })
                    })
            } ,
            get_cat(id , type) {
                axios({
                    url: `/api/cat/${id}/${type}` ,
                    method: 'get' ,
                })
                    .then(res => {
                        console.log(res);
                        this.name = res.data.name;
                        this.keywords = res.data.keywords
                    })
                    .catch(err => {
                        console.log(err.response);
                    })
            }
        }
    }
</script>

<style scoped>

</style>