<template>
    <div class="profile">
            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                <div id="general-info" class="section general-info">
                    <div class="info ">
                    
                            <h6 class="">General Information</h6>

                            
                        
                        <div class="row">
                            <div class="col-lg-11 mx-auto">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-12 col-md-4">
                                      
                                        <div class="upload mt-4 pr-md-4">
                                            <label for="">Profile Picture</label>
                                            <input type="file"  ref="file" @change="onChangeFileUpload()" id="file"  v-bind:data-default-file="this.avatar" class="dropify"   data-max-file-size="5M" />
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-12 col-md-8 mt-md-0 mt-4">
                                        <div class="form">
                                            <div class="row">

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="fullName">Full Name</label>
                                                        <input type="text" class="form-control mb-4" id="fullName" placeholder="Full Name" v-model="this.user_name" readonly>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="fullName">Email</label>
                                                        <input type="text" class="form-control mb-4" id="fullName" placeholder="Full Name" v-model="this.user_email" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                <label for="">Gender {{this.gender}}</label>
                                                    <div class="form-group ">
                                                    
                                                        <div class="custom-control custom-radio custom-control">
                                                            <input type="radio" id="customRadioInline1" v-model="gender" value="male" class="custom-control-input" >
                                                            <label class="custom-control-label" for="customRadioInline1">Male</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control">
                                                            <input type="radio" id="customRadioInline2" v-model="gender" value="female" class="custom-control-input" >
                                                            <label class="custom-control-label" for="customRadioInline2">Female</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="profession">Bio</label>
                                                <input type="text" class="form-control mb-4" id="profession" placeholder="Designer" v-model="bio" >
                                            </div>
                                           
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                         <div class="row">
                            <div class="col-md-11 mx-auto">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="country">Country</label>
                                                <Select2 class="form-control" v-model="myValue" :options="myOptions" :settings="{ settingOption: value, settingOption: value }" @change="myChangeEvent($event)" @select="mySelectEvent($event)" />

                                            </div>
                                        </div>
                                
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="location">Address</label>
                                                <input type="text" class="form-control mb-4" id="location" v-model="address" placeholder="Enter address">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input type="text" class="form-control mb-4" v-model="phone" placeholder="Write your phone number here" >
                                            </div>
                                        </div>

                                    </div>

                                    <hr>

                                    <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Next of Kin Name:</label>
                                                    <input type="text" class="form-control mb-4" v-model="nok_fullname" placeholder="Next of kin name" >
                                                </div>
                                            </div>                                    
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="website1">Next of Kin Address</label>
                                                    <input type="text" class="form-control mb-4" v-model="nok_address" placeholder="Next of Kin address">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="website1">Next of Kin Relationship</label>
                                                    <input type="text" class="form-control mb-4" v-model="nok_relationship" placeholder="Next of kin relationship">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="website1">Next Phone number</label>
                                                    <input type="text" class="form-control mb-4" v-model="nok_phone" placeholder="Next of kin phone number">
                                                </div>
                                            </div>
                                            
                                        </div>
                                <button @click="updateProfile()" class="btn btn-primary float-right">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
         

            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">

                <div id="social" class="section social">

                    <div class="info">
                        <h5 class="">Bank Details..</h5>
                        <div class="row">
                            <div class="col-md-11 mx-auto">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="country">Bank Name</label>
                                            <select v-model="bank_name" class="form-control" id="country">
                                           
                                               <option value="access">Access Bank</option>
                                                <option value="citibank">Citibank</option>
                                                <option value="diamond">Diamond Bank</option>
                                                <option value="ecobank">Ecobank</option>
                                                <option value="fidelity">Fidelity Bank</option>
                                                <option value="fcmb">First City Monument Bank (FCMB)</option>
                                                <option value="fsdh">FSDH Merchant Bank</option>
                                                <option value="gtb">Guarantee Trust Bank (GTB)</option>
                                                <option value="heritage">Heritage Bank</option>
                                                <option value="Keystone">Keystone Bank</option>
                                                <option value="rand">Rand Merchant Bank</option>
                                                <option value="skye">Skye Bank</option>
                                                <option value="stanbic">Stanbic IBTC Bank</option>
                                                <option value="standard">Standard Chartered Bank</option>
                                                <option value="sterling">Sterling Bank</option>
                                                <option value="suntrust">Suntrust Bank</option>
                                                <option value="union">Union Bank</option>
                                                <option value="uba">United Bank for Africa (UBA)</option>
                                                <option value="unity">Unity Bank</option>
                                                <option value="wema">Wema Bank</option>
                                                <option value="zenith">Zenith Bank</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address">Account Name</label>
                                            <input type="text" class="form-control mb-4" v-model="account_name" placeholder="Supply Account Name" value="" >
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="website1">Account Number</label>
                                            <input type="text" class="form-control mb-4" v-model="account_number" placeholder="Supply Account Number">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="website1">Sort Code:</label>
                                            <input type="text" class="form-control mb-4" v-model="sort_code" placeholder="Sort code of bank">
                                        </div>
                                    </div>
                                </div>
                                <button @click="updateProfile()" class="btn btn-primary float-right">Update Profile</button>
                            </div>
                        </div>
                    </div>


                </div>
             

                
            </div>

           <!-- 
            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                <form id="social" class="section social">
                    <div class="info">
                        <h5 class="">Social</h5>
                        <div class="row">

                            <div class="col-md-11 mx-auto">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group social-linkedin mb-3">
                                            <div class="input-group-prepend mr-3">
                                                <span class="input-group-text" id="linkedin"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="linkedin Username" aria-label="Username" aria-describedby="linkedin" value="jimmy_turner">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group social-tweet mb-3">
                                            <div class="input-group-prepend mr-3">
                                                <span class="input-group-text" id="tweet"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Twitter Username" aria-label="Username" aria-describedby="tweet" value="@jTurner">
                                        </div>
                                    </div>                                                        
                                </div>
                            </div>

                            <div class="col-md-11 mx-auto">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group social-fb mb-3">
                                            <div class="input-group-prepend mr-3">
                                                <span class="input-group-text" id="fb"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Facebook Username" aria-label="Username" aria-describedby="fb" value="Jimmy Turner">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group social-github mb-3">
                                            <div class="input-group-prepend mr-3">
                                                <span class="input-group-text" id="github"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Instagram Username" aria-label="Username" aria-describedby="github" value="@TurnerJimmy">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-11 mx-auto">
                                <button class="btn btn-primary float-right">update</button>
                            </div>
                            
                        </div>
                        
                    </div>
                </form>
            </div> -->

    </div>
</template>

<script>

import Select2 from 'v-select2-component';

import VueToastify from "vue-toastify";
Vue.use(VueToastify);

Vue.component('Select2', Select2);




    export default {
      

        data() {
            return {

                getAvatar: '',

                      myValue: '',
                    myOptions: [{}], // or [{id: key, text: value}, {id: key, text: value}]

                loading: false,
                msg: 'Loading...',

                file: '',
                bio: '',   
                gender: '',
                nationality: '',
                address: '',
                phone:'',
                nok_fullname: '',
                nok_address: '',
                nok_relationship: '',
                nok_phone: '',

                recipient_code: '',
                Auth_Code: '',
                bank_code: '',
                account_name: '',
                account_number: '',
                sort_code: '',
         
            }
        },

          props: ['user_id', 'user_email', 'user_name', 'avatar'],

        methods: {

             myChangeEvent(val){
                    console.log(val);
                },
                mySelectEvent({id, text}){
                    console.log({id, text})
                },

            getUserInfo(){

     

                axios.post('/getUserInfo')
               .then((response)=>(

                    this.bio = response.data.bio,
                    // this.gender = response.data.gender,
                    this.myValue = response.data.nationality,
                    this.address = response.data.address,
                    this.phone = response.data.phone,
                    this.nok_fullname = response.data.nok_fullname,
                    this.nok_address = response.data.nok_address,
                    this.nok_relationship = response.data.nok_relationship,
                    this.nok_phone = response.data.nok_phone,
                    // this.recipient_code = response.data.recipient_code,
                    // this.Auth_Code = response.data.Auth_Code,
                    // this.bank_code = response.data.bank_code,
                    this.bank_name = response.data.bank_name,
                    this.account_name = response.data.account_name,
                    this.account_number = response.data.account_number,
                    // this.sort_code = response.data.sort_code,

                        console.log(response)

                        // this.name = response.data.name,
                        // this.bio = response.data.bio,
                        // this.gender = response.data.gender,
                        // this.nationality = response.data.nationality,

                    // this.user_profile = response.data,
               
                    //  this.results = response.data
                )).catch(function (error) {
                        console.log(error);
                    });
            },

            convertIt(dataMe){
                var data = $.map(dataMe, function (obj) {
                obj.id = obj.id || obj.name; // replace pk with your identifier

                return obj;
                });
            },

            getCountries(){
                    axios.get('https://restcountries.eu/rest/v2/all')
               .then((response)=>(

                        this.myOptions = response.data,

                                    
                            $.map(this.myOptions, function (obj) {
                            obj.id = obj.id || obj.name; // replace pk with your identifier

                            // console.log(obj);
                            }),

                            $.map(this.myOptions, function (obj) {
                            obj.text = obj.text || obj.name; // replace pk with your identifier

                            // console.log(obj);
                            }),
                      
                    
                    // this.user_profile = response.data,
                    console.log(this.myOptions)
                    //  this.results = response.data
                )).catch(function (error) {
                        console.log(error);
                    });

            },

            upload_avatar(){

    

            },

           
           updateProfile(){

                axios.post('/updateProfile',{
                    bio:  this.bio,
                    gender:  this.gender,
                    nationality:  this.myValue,
                    address:  this.address,
                    phone:  this.phone,
                    nok_fullname:  this.nok_fullname,
                    nok_address:  this.nok_address,
                    nok_relationship:  this.nok_relationship,
                    nok_phone:  this.nok_phone,
                    recipient_code:  this.recipient_code,
                    Auth_Code:  this.Auth_Code,
                    bank_code:  this.bank_code,
                    account_name:  this.account_name,
                    account_number:  this.account_number,
                    sort_code:  this.sort_code

                }).then((response)=>(

                    // this.states = response.data,
                    console.log(response)
                    //  this.results = response.data
                )).catch(function (error) {
                        console.log(error);
                    });
            },

            onChangeFileUpload(){

            this.file = this.$refs.file.files[0];

            let formData = new FormData();

            formData.append('file', this.file);

                 axios.post('/upload_avatar',
                        formData,
                        {
                            headers: {
                                'Content-Type': 'multipart/form-data'
                            }
                        })
               .then((response)=>(

                    // this.states = response.data,
                    console.log(response)
                    //  this.results = response.data
                )).catch(function (error) {
                        console.log(error);
                    });
            }


        },
        
        mounted() {
            this.getUserInfo()
            this.getCountries()
            console.log('Component mounted.')
        },

        
        
    }
</script>
