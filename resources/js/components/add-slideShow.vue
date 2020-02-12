<template>
    <div class="col-xs col-sm col-10 col-md-11 col-lg-9 col-xl-9 users-main delete-padding-left">
        <div class="ui-state-default user-list-info-box-add">
            <div class="admin-form col-xs col-sm col- col-md col-lg col-xl-8">
                <form class="needs-validation" novalidate>


                    <div class="custom-file" style="margin-top: 25px;margin-right:15px;">
                        <input type="file" class="custom-file-input" ref="img" @change="handle" id="customFile">
                        <label class="custom-file-label" for="customFile">انتخاب عکس  اول</label>
                    </div>
                    <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12" style="margin-top: 10px;">
                        <label for="inputname">لینک اولین اسلاید را وارد کنید</label>
                        <input type="text" v-model="link" class="form-control" id="inputname" placeholder="لینک اولین اسلاید را وارد کنید">
                    </div>

                    <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12" style="margin-top: 10px;">
                        <label for="inputname">شناسه دسته بندی مادر را وارد کنید</label>
                        <input type="number" v-model="main_id" class="form-control" id="inputname" placeholder="شناسه دسته بندی مادر را وارد کنید">
                    </div>
                    <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12" style="margin-top: 10px;">
                        <label for="inputname">شناسه دسته بندی سوم را وارد کنید</label>
                        <input type="number" v-model="third_id" class="form-control" id="inputname" placeholder="شناسه دسته بندی سوم را وارد کنید">
                    </div>

                    <button class="btn btn-primary" type="button" @click="addSlide" style="margin-top:10px;font-size: 13px;margin-right: 20px;"> افزودن اسلاید </button>
                </form>
            </div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" :style="'width:'+ percent + '%'" :aria-valuenow="percent" aria-valuemin="0" aria-valuemax="100">{{percent}}%</div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "add-slideShow" ,

        data() {
            return {
                img: '' ,
                link: '' ,
                percent: 0 ,
                main_id: '' ,
                third_id: ''
            }
        } ,

        methods: {
            handle() {
               this.img = this.$refs.img.files[0];
            } ,
            addSlide() {
                this.percent = 0;
                let file = this.img;
                if (file !== '' && file !== null )
                {
                    let data = new FormData();
                    data.append('img' , file);
                    data.append('link' , this.link);
                    data.append('main_id' , this.main_id);
                    data.append('third_id' , this.third_id);
                    axios({
                        url: '/api/create/slideshow' ,
                        method: 'post' ,
                        data: data ,
                        onUploadProgress: uploadEvent => {
                            this.percent = Math.round(uploadEvent.loaded / uploadEvent.total * 100);
                        }
                    })
                        .then(res => {
                            console.log(res);
                            this.$toasted.success('created' , {
                                position: 'bottom-center' ,
                                theme: 'bubble' ,
                                fitToScreen: true
                            }).goAway(2000)
                        })
                        .catch(err => {
                            console.log(err.response);
                            this.$toasted.error('error' , {
                                position: 'bottom-center' ,
                                theme: 'bubble' ,
                                fitToScreen: true
                            }).goAway(3000)
                        })
                }
                else
                {
                    this.$toasted.error('عکس را انتخاب کنید' , {
                        position: 'bottom-center' ,
                        theme: 'bubble' ,
                        fitToScreen: true ,
                        className: ['your-custom-class']
                    }).goAway(2000)
                }
            }
        }
    }
</script>

<style scoped>

</style>