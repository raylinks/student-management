<template>
    <div class="col-md-4 panel">
        <!-- sign in form begins -->
        <form @submit.prevent="submitRequest()" class="form-horizontal" enctype="multipart/form-data">
            <fieldset>
                <div class="alert alert-success" v-if="submitted">
                    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
                    You request has been sent..A mail has been sent to you
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-12 control-label"></label>
                    <div class="col-md-12">
                        <input name="firstname" placeholder="Enter your  firstname" class="form-control input-md" type="text" v-model="request.firstname">
                        <p class="help is-danger" style="color:red;">{{ getReqError('firstname') }}</p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12 control-label"></label>
                    <div class="col-md-12">
                        <input name="lastname" placeholder="Enter your  lastname" class="form-control input-md" type="text" v-model="request.lastname">
                        <p class="help is-danger" style="color:red;">{{ getReqError('lastname') }}</p>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-12 control-label"></label>
                    <div class="col-md-12">
                        <input name="email" placeholder="Enter your email" class="form-control input-md" type="email" v-model="request.email">
                        <p class="help is-danger" style="color:red;">{{ getReqError('email') }}</p>
                    </div>
                </div>




                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-12 control-label"></label>
                    <div class="col-md-12">
                        <input name="password" placeholder="Enter your password" class="form-control input-md" type="password" v-model="request.password">
                        <p class="help is-danger" style="color:red;">{{ getReqError('password') }}</p>

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-12 control-label"></label>
                    <div class="col-md-12">
                        <select name="sex" v-model="request.sex" class="form-control">
                            <option value="0">Choose a request type * --</option>
                            <option value="1">Male * --</option>
                            <option value="2">female * --</option>
                        </select>
                        <p class="help is-danger" style="color:red;">{{ getReqError('sex') }}</p>
                    </div>
                </div>


                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-12 control-label title1"></label>
                    <div class="col-md-12">
                        <input name="phone_numb" placeholder="Enter phone number" class="form-control input-md" type="text" v-model="request.phone_numb">
                        <p class="help is-danger" style="color:red;">{{ getReqError('phone_numb') }}</p>
                    </div>
                </div>




               <!-- <div class="row">
                    <div v-if="!image">
                        <label>Select an Image</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div v-if="!image">
                            <input name="image"  type="file" accept="image/x-png,image/gif,image/jpeg" @change="onFileChange">


                        </div>
                        <div v-if="image">
                            <img style="width: 100px; height: 100px; " :src="image" enctype="" />
                            <button @click="removeImage" class="btn btn-primary">Remove Image</button>
                        </div>
                    </div>
                </div>-->
                <br>
                <br>




                <!--    <div class="form-group">
                        <label class="col-md-12control-label"></label>
                        <div class="col-md-12">
                            <input name="passport" class="form-control input-md" type="file">
                        </div>
                    </div>-->

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-12 control-label"></label>
                    <div class="group">
                        <button name="signin" type="submit" class="button">Sign up</button>
                    </div>

                </div>

            </fieldset>
        </form>
    </div><!--col-md-6 end-->

</template>



<script>
    export default {
        data()
        {
            return{
                request: {
                    firstname: '',
                    lastname: '',
                    email: '',
                   password: '',
                    sex: '',
                    phon_numb: '',
                    date: '',
                    image: ''
                    // passport: ''
                },
                reqErrors : {},
                signinIn : false,
                submitted: false
            }
        },
        methods: {
            onFileChange(e){
                const files = e.target.files || e.dataTransfer.files;
                if(!files.length)
                    return;
                this.createImage(files[0]);
            },
            createImage(file) {
                const image = new Image();
                const reader = new FileReader();
                const vm = this;

                reader.onload = (e) => {
                    vm.image = e.target.result;
                    vm.request.image = e.target.result;
                };
                reader.readAsDataURL(file);
            },
            removeImage: function () {
                this.image = "";
                this.request.image = "";
            },



            submitRequest: function(){
                this.signingIn = true ;
                axios.post('reg', this.request).then(response => {
                  //  $('button').text('logging in ...');
                    this.submitted = true;
                    this.request = "";
                    this.image = "";
                   // this.errors = "";
                }).catch(error => {
                    this.signingIn = false ;
                    this.reqErrors = error.response.data;
                   // this.reqErrors = error.body ;
                })

            },
            getReqError(field){

                if (this.reqErrors.hasOwnProperty(field) ){
                    if ( typeof this.reqErrors[field] === "object" ) return this.reqErrors[field][0];

                    if ( typeof this.reqErrors[field] === "string" ) return this.reqErrors[field];
                }

            }
        }
    }
</script>