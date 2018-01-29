<template>
    <!-- Left hand div -->
    <div id="container">

        <!--left item div starts -->
        <div class="item" style="float: left; width:37%;">
            <div class="list">
                <span class="form-control" style="width:60%; height: 50%;">Class</span>
            </div>
            <div class="">
                <button @click="seen =  hideTwo() || !seen"  class="btn btn-primary" style="width:60%; height: 50%;">One(1)</button>
            </div>
            <div class="">
                <button @click="seen1 = hide() || !seen1"  class="btn btn-primary" style="width:60%; height: 50%;">Two(2)</button>
            </div>
            <div class="">
                <button @click="seen2 = hidethree() || !seen2" class="btn btn-primary" style="width:60%; height: 50%;">Three(3)</button>
            </div>
        </div>

        <!-- left item div ends -->


        <!--right item div starts -->

        <div class="item" style="float: right; width:63%;">
            <div class="container" >
                <div class="row">
                    <div class="col-md-6">

                        <div class="panel panel-default">
                            <div class="panel-heading">Manage Section</div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <span>


                                        <!-- toggle hide and show begins -->

                                        <div class="container" v-if="seen">
                        <div class="row">
                            <div class="col-md-5">

                                <div class="panel panel-default">
                                    <div class="panel-heading">Class Name: {{ name }}</div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <span>Geepee</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- button here -->

                                  <button v-if="seen" class="btn btn-primary" type="submit" data-toggle="modal" data-target="#myModal2">
                                                    <span class="glyphicon glyphicon-plus"></span>Add Section
                                                </button>






                                 <div class="table-responsive text-center" v-if="seen">
                                                                    <table class="table table-borderless" id="table">
                                                                        <thead>
                                                                        <tr>
                                                                            <th class="text-center">#</th>
                                                                            <th class="text-center">Section Name</th>
                                                                            <th class="text-center">Teacher Name</th>
                                                                            <th class="text-center">Action</th>
                                                                        </tr>
                                                                        </thead>
                                                                         <tbody>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                           	 <td>
                                                                                <button class="btn btn-info">
                                                                                    <i class="fa fa-pencil"></i>Edit
                                                                                </button>
                                                                                <button class="btn btn-danger">
                                                                                    <i class="fa fa-times"></i>Delete
                                                                                </button>
                                                                            </td>
                                                                           	  </tr>
                                                                          <tr>
                                                                <td colspan="5">
                                                                <center class="m-t-lg">No Data Available</center>
                                                              </td>
                                                            </tr>
                                                                         </tbody>


                                                                    </table>

                                                                </div>
                                <!-- div table ends -->



                            </div>
                        </div>
                    </div>
                                        <!-- toggle hide and show ends -->



                                        <!-- toggle2 hide and show begins -->


            <div class="container" v-if="seen1">
                <div class="row">
                    <div class="col-md-5">

                        <div class="panel panel-default">
                            <div class="panel-heading">Class Name: {{ cname }}</div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <span>Geepee</span>
                                </div>
                            </div>
                        </div>
                        <!-- button here -->
 <button v-if="seen1" class="btn btn-primary" type="submit" data-toggle="modal" data-target="#myModal2">
                                                    <span class="glyphicon glyphicon-plus"></span>Add Section
                                                </button>





                                 <div class="table-responsive text-center" v-if="seen1">
                                                                    <table class="table table-borderless" >
                                                                        <thead>
                                                                        <tr>
                                                                            <th class="text-center">#</th>
                                                                            <th class="text-center">Section Name</th>
                                                                            <th class="text-center">Teacher Name</th>
                                                                            <th class="text-center">Action</th>
                                                                        </tr>
                                                                        </thead>

                                                                            <tr class="section">
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                    </tr>


                                                                    </table>

                                                                </div>
                        <!-- div table ends -->



                    </div>
                </div>
            </div>


                                        <!-- toggle2 hide and show ends -->









                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>








        </div>

        <!--right item div starts -->

    </div>


    <!--container div starts -->





</template>

<style type="text/css">
    .show {
        background-color: red;
    }

</style>

<script language="text/javascript">
    export default {

        data() {
            return {
                name: 'One',
                seen:false,
                cname: 'Two',
                seen1: false,
                //isVisible: true
            };



        },
        sections: [],
        methods: {
            hide()
            {
                this.seen = false;
                //this.seen1 = true;
            },
            hideTwo()
            {
                this.seen1 = false;
                //this.seen1 = true;
            }

        },
        mounted() {
            axios.get('api/section').then((response)=>this.sections=response.data);
        }

    }
</script>