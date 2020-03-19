<template>
    <div class="col-xs col-sm col- col-md-9 col-lg-9 col-xl-9  buy-card-right">
        <div class="col-xs col-sm col- col-md-12 col-lg-12 col-xl-12">

            <!-- This is the only HTML tag needed for map intialization -->
            <div id="map" style="width: 100%; height: 300px;"></div>
            <div id="results" style="display: none">
                <div id="loading"></div>
                <div id="latlng" class="rounded"></div>
            </div>
            <div class="col-xs col-sm col- col-md col-lg col-xl-12  buy-card-right-top">
                <span>  انتخاب آدرس تحویل سفارش </span>
            </div>

            <div class="col-xs col-sm col- col-md col-lg col-xl-12  card-address-right-bottom delete-padding">
                <div class="col-xs col-sm col- col-md col-lg col-xl-12  card-address-right-bottom-1 delete-padding flex">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-3 card-address-right-bottom-1-right">
                        <span class="title-4 text-black">  گیرنده : <span class="title-4 text-black"> {{show.first_name}} {{show.last_name}}  </span> </span>
                    </div>


                    <div class="col-xs col-sm col- col-md col-lg col-xl-9 card-address-right-bottom-1-left">
                        <div style="cursor: pointer" class="input-Change-address">
                            <a><span class="title-4 text-black tablinks" @click="ok = 1"> تغییر ادرس ارسال  </span></a>
                        </div>
                    </div>
                </div>


                <div class="col-xs col-sm col- col-md col-lg col-xl-12  card-address-right-bottom-2 delete-padding flex">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-3 card-address-right-bottom-2-right">
                        <span class="title-4 text-black">  شماره تماس  : {{show.phone_number}}  </span>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-9 card-address-right-bottom-2-left">
                        <span class="title-4 text-black">  کد پستی  : <span> {{show.postal_code}} </span> </span>
                    </div>
                </div>


                <div class="col-xs col-sm col- col-md col-lg col-xl-12  card-address-right-bottom-3 delete-padding">
                    <span class="title-4 text-black"><span> آدرس :</span> {{show.address}} </span>
                </div>
            </div>

            <div v-if="ok === 1">
                <div class="col-xs col-sm col- col-md col-lg col-xl-12  buy-card-right-top">
                    <span>  ویرایش اطلاعات </span>
                </div>
                <div class="col-xs col-sm col- col-md col-lg col-xl-12 edite-form-inside">


                    <div class="form-row">
                        <div class="col-xl-10 mb-3">
                            <input type="text" v-model="show.first_name" class="form-control" id="validationTooltip011" placeholder ="نام" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-xl-10 mb-3">
                            <input type="text" class="form-control" v-model="show.last_name" id="validationTooltip013" placeholder ="نام خانوادگی" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-xl-10 mb-3">
                            <input type="text" class="form-control" v-model="show.address" id="validationTooltip014" placeholder ="آدرس جدید را وارد کنید" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-xl-10 mb-3">
                            <input type="text" class="form-control" v-model="show.postal_code" id="validationTooltip0145" placeholder ="کدپستی" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div v-if="error === 1" class="alert alert-danger">
                        {{errorMessage}}
                    </div>
                    <div v-if="error === 0" class="alert alert-success">
                        <i class="fas fa-check-circle"><span>تغییرات با موفقیت اعمال شد</span></i>
                    </div>

                    <div class="col-xs col-sm col- col-md col-lg col-xl-10 inside-page-input margin-bottom" style="margin-bottom: 20px">
                        <button class="btn btn-primary" type="button" @click="edit_user" style="margin-top: 20px;font-size: 13px;margin-right: 15px;"><span>ذخیره تغییرات</span></button>
                    </div>

                </div>
            </div>

        </div>


        <div class="col-xs col-sm col- col-md col-lg col-xl-12 card-factor-end flex">
            <div class="col-xs col-sm col- col-md col-lg col-xl-6 card-factor-end-right">
                <span><i class="fas fa-angle-double-right"></i></span>
                <router-link to="/card/products"><span class="title-4">  بازگشت به سبد خرید  </span></router-link>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "card-address-content-right" ,
        // props:['user'] ,

        mounted() {
            this.get_map();
        } ,

      created() {
         this.cost();
         this.user();
      } ,

        data() {
            return {
                check: '' ,
                sum: '' ,
                show: {
                    first_name: '' ,
                    last_name: '' ,
                    phone_number: '' ,
                    postal_code: '' ,
                    address: '' ,
                } ,
                error: '' ,
                errorMessage: '' ,
                Lat: '' ,
                Lng: '' ,
                ok: null
            }
        } ,
        methods: {
            get_map() {
                try {
                    // Check out line 9 where we have imported a file which has an `accessToken` variable available on it as has
                    // been assigned our personal access token.
                    // Sample: var accessToken = '<your access token>';
                    // Get one from https://www.cedarmaps.com
                    L.cedarmaps.accessToken = '037cea293e5ba8e2ba66e1a754484001baaf9505';
                } catch (err) {
                    throw new Error('You need to get an access token to be able to use cedarmaps SDK. ' +
                        'Send us an email to <support@cedarmaps.com>');
                }

                var tileJSONUrl = 'https://api.cedarmaps.com/v1/tiles/cedarmaps.streets.json?access_token=' + L.cedarmaps.accessToken,
                    marker;

                // Initializing our map
                var map = L.cedarmaps.map('map', tileJSONUrl, {
                    scrollWheelZoom: true
                }).setView([31.9798, 51.2946], 15);

                // Making references to our DOM elements
                var resultsContainer = document.getElementById('results'),
                    latLngContainer = document.getElementById('latlng'),
                    formattedAddressContainer = document.getElementById('formatted-address'),
                    parsedResponseContainer = document.getElementById('parsed-response'),
                    rawResponseContainer = document.getElementById('raw-response'),
                    loadingIndicator = document.getElementById('loading'),
                    prefixModeOptions = document.getElementById('prefix-mode'),
                    verbosityCheckbox = document.getElementById('verbosity');

                // Initializing the Geocoder object which has the necessary methods for reverse geocoding
                // We also need to introduce our search index to geocoder module, `cedarmaps.streets` in this case.
                // This means the reverse geocoder engine should search in our `cedarmaps.streets` index.
                var geocoder = L.cedarmaps.geocoder('cedarmaps.streets');

                map.on('click', function(e) {
                    // If we have already clicked on map, a marker is placed on it and we should remove it before we add one again on user click.
                    if (marker) map.removeLayer(marker);

                    // Cedarmaps SDK is based on Leaflet.js. A leaflet marker is initialized like this. The event object (`e`) which is passed in by onClick event contains the latLng object.
                    // Learn more: https://leafletjs.com/reference-1.5.0.html#marker
                    marker = new L.marker(e.latlng).addTo(map);

                    loading.style.visibility = 'visible';
                    latLngContainer.style.visibility = 'visible';
                    latLngContainer.innerHTML = 'Lat: ' + parseFloat(e.latlng.lat).toPrecision(10) + '<br /> Lng: ' + parseFloat(e.latlng.lng).toPrecision(10);
                    this.Lat = parseFloat(e.latlng.lat).toPrecision(10);
                    this.Lng = parseFloat(e.latlng.lng).toPrecision(10);
                    axios({
                        url: '/api/latlng' ,
                        method: 'post' ,
                        headers: {
                            Accept: 'application/json' ,
                            Authorization: `Bearer ${localStorage.token}`
                        } ,
                        data: {
                            lat: parseFloat(e.latlng.lat).toPrecision(10) ,
                            lng: parseFloat(e.latlng.lng).toPrecision(10) ,
                        }
                    })
                        .then(res => {
                            console.log(res);
                        })
                        .catch(err => {
                            console.log(err.response);
                        });

                    var q = {
                        query: e.latlng,
                        verbosity: verbosityCheckbox.checked,
                        prefix: prefixModeOptions.value || 'none'
                    };

                    // This is the main part of this demo which uses the `reverseQuery` method. For more info on other available options please refer to docs.
                    // https://github.com/cedarstudios/cedarmaps-web-sdk-raster/blob/master/README.md
                    geocoder.reverseQuery(q, function callback(err, res) {
                        loading.style.visibility = 'hidden';
                        formattedAddressContainer.style.display = 'block';
                        parsedResponseContainer.style.display = 'block';
                        rawResponseContainer.style.display = 'block';

                        var parsedResponse = '<table class="address-parts rtl">' +
                            '<tr>' +
                            '<td width="50%" class="key">استان:</td>' +
                            '<td width="50%">' + res.result.province + '</td>' +
                            '</tr>' +
                            '<tr>' +
                            '<td class="key">شهر:</td>' +
                            '<td>' + res.result.city + '</td>' +
                            '</tr>' +
                            '<tr>' +
                            '<td class="key">محله:</td>' +
                            '<td>' + res.result.locality + '</td>' +
                            '</tr>' +
                            '<tr>' +
                            '<td class="key">مکان:</td>' +
                            '<td>' + res.result.place + '</td>' +
                            '</tr>' +
                            '<tr>' +
                            '<td class="key">خیابان:</td>' +
                            '<td>' + res.result.address + '</td>' +
                            '</tr>' +
                            '<tr>' +
                            '<td class="key">در منطقه طرح آلودگی هوا:</td>' +
                            '<td>' + (res.result.traffic_zone.in_central ? 'بله' : 'خیر') + '</td>' +
                            '</tr>' +
                            '<tr>' +
                            '<td class="key">در منطقه زوج و فرد:</td>' +
                            '<td>' + (res.result.traffic_zone.in_evenodd ? 'بله' : 'خیر') + '</td>' +
                            '</tr>' +
                            '</table>';
                        var rawResponse = '<pre class="language-javascript">' + syntaxHighlight(JSON.stringify(res, undefined, 2)) + '</pre>'

                        parsedResponseContainer.innerHTML = parsedResponse;
                        rawResponseContainer.innerHTML = rawResponse;
                        formattedAddressContainer.innerHTML = res.result.formatted_address;
                    });
                });

                // This function is just used for JSON syntax highlighting specifically for this demo and has nothing to do with CedarMaps SDK
                function syntaxHighlight(json) {
                    json = json.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
                    return json.replace(/("(\\u[a-zA-Z0-9]{4}|\\[^u]|[^\\"])*"(\s*:)?|\b(true|false|null)\b|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)/g, function(match) {
                        var cls = 'number';
                        if (/^"/.test(match)) {
                            if (/:$/.test(match)) {
                                cls = 'key';
                            } else {
                                cls = 'string';
                            }
                        } else if (/true|false/.test(match)) {
                            cls = 'boolean';
                        } else if (/null/.test(match)) {
                            cls = 'null';
                        }
                        return '<span class="' + cls + '">' + match + '</span>';
                    });
                }
            } ,
            user() {
                axios({
                    url: '/api/user' ,
                    method: 'get' ,
                    headers: {
                        Accept: 'application/json' ,
                        Authorization: `Bearer ${localStorage.token}`
                    } ,
                })
                    .then(res => {
                        console.log(res);
                        this.show = res.data;
                        this.$emit('check-user' , this.show);
                    })
                    .catch(err => {
                        console.log(err.response);
                        this.error = 1;
                        this.errorMessage = err.response.data;
                        this.$emit('check-user' , this.show);
                    });
            } ,
            edit_user() {
                axios({
                    url: '/api/edit' ,
                    method: 'post' ,
                    headers: {
                        Accept: 'application/json' ,
                        Authorization: `Bearer ${localStorage.token}`
                    } ,
                    data: {
                        first_name: this.show.first_name ,
                        last_name: this.show.last_name ,
                        phone: this.show.phone ,
                        phone_number: this.show.phone_number ,
                        email: this.show.email ,
                        postal_code: this.show.postal_code ,
                        city: this.show.city ,
                        state: this.show.state ,
                        address: this.show.address ,
                    }
                })
                    .then(res => {
                        console.log(res);
                        this.show = res.data;
                        this.error = 0;
                        this.$emit('check-user' , this.show);
                    })
                    .catch(err => {
                        console.log(err.response);
                        this.error = 1;
                        this.errorMessage = err.response.data;
                        this.$emit('check-user' , this.show);
                    });
            } ,
            cost() {
                let s = 0;
                let a = JSON.parse(localStorage.order);
                a.forEach(item => {
                    s += item.final_price1;
                });
                this.sum = s;
                this.$emit('final-cost' , this.sum);
            } ,
        }
    }
</script>

<style scoped>

</style>