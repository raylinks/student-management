<template lang="html">

    <!-- Modal2 -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h3 class="agileinfo_sign">Add section
                        <button type="button" class="close" data-dismiss="modal">&times;</button></h3>
                    <div class="alert alert-success" v-if="submitted">
<button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
 Successfully registered
</div>



                </div>
                <div class="modal-body modal-body-sub_agile">
                    <div class="col-md-8 modal_body_left modal_body_left1">
                        <form @submit.prevent="registerSection">

                            <div class="styled-input agile-styled-input-top">
                                <label>Add SESSION</label>
                                <input type="text" name="section"  v-model="reg.section">
                                      <small style="color:red;" class="error__control" v-if="error.section">{{error.section[0]}}</small>
                            </div>
                            <div class="form-group">
                  <label> TEACHER</label>
                        <select class="form-control"  name="teacher_id" v-model="reg.teacher_id">
                        <option value="0">Choose a teacher * -</option>
                        <option v-for="user in teacher" v-bind:value="user.id">{{ user.name }}</option>

                         </select>
                             <small style="color:red;" class="error__control" v-if="error.teacher_id">{{error.teacher_id[0]}}</small>

                      </div>

                       <div class="form-group">
                  <label> Clases</label>
                        <select class="form-control"  name="class_id" v-model="reg.class_id">
                        <option value="0">Choose a class * -</option>
                        <option v-for="cla in clas" v-bind:value="cla.id">{{ cla.name }}</option>

                         </select>
                            <small style="color:red;" class="error__control" v-if="error.class_id">{{error.class_id[0]}}</small>

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
            return {
                reg: {
                    section: '',
                    teacher_id: '',
                    class_id: ''
                },

                teacher: [],
                clas: [],
                error: {},
                submitted: false
            }

        },

        created: function () {
            const vm = this;
            $.getJSON('api/teachers', function (teachers) {
               vm.teacher = teachers;
            }.bind(this));
            $.getJSON('api/classes', function (classes) {
                vm.clas = classes;
            }.bind(this));
        },


        methods: {
            registerSection() {
                this.isLoading = true;
                axios.post('addsection', this.reg)
                    .then(response=>{
                        this.submitted = true;
                        this.reg = "";
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

