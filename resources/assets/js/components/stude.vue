<template lang="html">

    <!-- Modal2 -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h3 class="agileinfo_sign">Add Student
                        <button type="button" class="close" data-dismiss="modal">&times;</button></h3>
                    <div class="alert alert-success" v-if="submitted">
<button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
 Successfully registered
</div>



                </div>
                <div class="modal-body modal-body-sub_agile">
                    <div class="col-md-8 modal_body_left modal_body_left1">
                        <form @submit.prevent="registerStudent" enctype="multipart/form-data">

                            <div class="styled-input agile-styled-input-top">
                                <label>Sunname</label>
                                <input type="text" name="sunname"  v-model="register.sunname">
                                      <small style="color:red;" class="error__control" v-if="error.sunname">{{error.sunname[0]}}</small>
                            </div>

                            <div class="styled-input agile-styled-input-top">
                                <label>Firstname</label>
                                <input type="text" name="firstname"  v-model="register.firstname">
                                      <small style="color:red;" class="error__control" v-if="error.firstname">{{error.firstname[0]}}</small>
                            </div>
                            <div class="styled-input">
                                <label>Email</label>
                                <input type="email" name="email"  v-model="register.email">
                                 <small style="color:red;" class="error__control" v-if="error.email">{{error.email[0]}}</small>

                            </div>
                            <div class="styled-input agile-styled-input-top">
                                <label>Password</label>
                                <input type="password" name="password"  v-model="register.password">
                                 <small style="color:red;" class="error__control" v-if="error.password">{{error.password[0]}}</small>
                                    </div>



                             <div class="styled-input agile-styled-input-top">
                                <label>Subject</label>
                                <input type="text" name="subject"  v-model="register.subject">
                                      <small style="color:red;" class="error__control" v-if="error.subject">{{error.subject[0]}}</small>
                            </div>

                        <div class="styled-input agile-styled-input-top">
                            <label>origin</label>
                            <input type="text" name="origin"  v-model="register.origin">
                         <small style="color:red;" class="error__control" v-if="error.origin">{{error.origin[0]}}</small>

                        </div>

                        <div class="styled-input agile-styled-input-top">
                                <label>Address</label>
                                <input type="text" name="address"  v-model="register.address">
                                      <small style="color:red;" class="error__control" v-if="error.address">{{error.address[0]}}</small>
                            </div>
                        <div class="styled-input agile-styled-input-top">
                            <label>sex</label>
                            <input type="text" name="sex"  v-model="register.sex">
                            <small style="color:red;" class="error__control" v-if="error.sex">{{error.sex[0]}}</small>
                        </div><br/>
                        <div class="styled-input agile-styled-input-top">
                                <label>Genotype</label>
                                <input type="text" name="genotype"  v-model="register.genotype">
                                      <small style="color:red;" class="error__control" v-if="error.genotype">{{error.genotype[0]}}</small>
                            </div>
                            <br>

                              <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary" >
                                        Register
                                    </button>
                                     <button type="button" class="btn btn-warning" data-dismiss="modal">
                                    <span class="fa fa-close"></span>Close
                                   </button>

                                </div>
                                </div>
                        </form>








                        <div class="clearfix"></div>
                        <p><a href="#">By clicking register, I agree to your terms</a></p>

                    </div>
                    <div class="col-md-4 modal_body_right modal_body_right1">
                        <img src="" alt=" "/>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- //Modal content-->
        </div>
    </div>
    <!-- //Modal2 -->

</template>

<style type="text/css">
    .image-upload > input
    {
        display: none;
    }
</style>


<script>

    export default {
        data() {
            return{
                register:{
                     sunname: '',
                     firstname: '',
                    email: '',
                    password: '',
                    subject: '',
                    origin: '',
                    sex: '',
                    genotype: '',
                    address: ''
                    //isLoading: false

                },
                error: {},
                submitted: false,

            };


        },


        methods: {
            registerStudent() {
                this.isLoading = true;
                axios.post('addstudent', this.register)
                    .then(response=>{
                       this.submitted = true;
                        this.register = "";
                        this.error = "";
                    })
                    .catch(error=>{
                        this.error = error.response.data;
                    });
                this.isLoading = false;


            }

        },


    }
</script>

