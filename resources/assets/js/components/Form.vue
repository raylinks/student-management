<template lang="html">

    <!-- Modal2 -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h3 class="agileinfo_sign">Add Class
                        <button type="button" class="close" data-dismiss="modal">&times;</button></h3>
                    <div class="alert alert-success" v-if="submitted">
<button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
 Successfully registered
</div>



                </div>
                <div class="modal-body modal-body-sub_agile">
                    <div class="col-md-8 modal_body_left modal_body_left1">
                        <form @submit.prevent="registerTeacher" enctype="multipart/form-data">

                            <div class="styled-input agile-styled-input-top">
                                <label>Add class</label>
                                <input type="text" name="name"  v-model="register.name">
                                      <small style="color:red;" class="error__control" v-if="error.name">{{error.name[0]}}</small>
                            </div>
                            <div class="styled-input">
                                <label>Student limit</label>
                                <input type="text" name="student_limit"  v-model="register.student_limit">
                                 <small style="color:red;" class="error__control" v-if="error.student_limit">{{error.student_limit[0]}}</small>

                            </div>
                            <div class="styled-input agile-styled-input-top">
                                <label>Hall number</label>
                                <input type="text" name="student_hall"  v-model="register.student_hall">
                                 <small style="color:red;" class="error__control" v-if="error.student_hall">{{error.student_hall[0]}}</small>
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
                    full_name: '',
                    email: '',
                    phonenum: '',
                    dob: '',
                    age: '',
                    address: '',
                    isLoading: false

                },
                error: {},
                submitted: false,

            };


        },
        mounted: function () {
            document.addEventListener("keydown", (e) => {
                if (this.show && e.keyCode == 27) {
                    this.close();
                }
            });
        },


        methods: {
                close: function () {
                    this.$emit('close');
                }
            },
            registerTeacher() {
                this.isLoading = true;
                axios.post('managecourse', this.register)
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

