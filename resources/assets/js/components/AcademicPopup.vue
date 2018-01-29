<template>
    <div>
        <section class="panel panel-default">

            <!-- Modal2 -->
            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">

                        <header class="panel-heading">
                Choose Academics
            </header>
            <form class="form-horizontal">
                <div class="panel-body" style="border-bottom: 1px solid #ccc;">
                    <div class="form-group">

                        <div class="col-sm-6">
                            <label for="academic-year">Academic Year</label>
                            <div class="input group">
                                <select class="form-control" name="academic_id" id="academic_id">

                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" data-toggle="modal" data-target="#myModal2"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="program">Course</label>
                            <div class="input group">
                                <select class="form-control" name="program_id" id="program_id">

                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" data-toggle="modal" data-target="#myModal2"></span>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <label for="level">Level</label>
                            <div class="input group">
                                <select class="form-control" name="level_id" id="level_id">

                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" data-toggle="modal" data-target="#myModal2"></span>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <label for="shift">Shift</label>
                            <div class="input group">
                                <select class="form-control" name="shift_id" id="shift_id">

                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" data-toggle="modal" data-target="#myModal2"></span>
                                </div>
                            </div>
                        </div>



                        <div class="col-sm-6">
                            <label for="time">Time</label>
                            <div class="input group">
                                <select class="form-control" name="time_id" id="time_id">

                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" data-toggle="modal" data-target="#myModal2"></span>
                                </div>
                            </div>
                        </div>



                        <div class="col-sm-3">
                            <label for="batch">Batch</label>
                            <div class="input group">
                                <select class="form-control" name="batch_id" id="batch_id">

                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" data-toggle="modal" data-target="#myModal2"></span>
                                </div>
                            </div>
                        </div>



                        <div class="col-sm-2">
                            <label for="group">Group</label>
                            <div class="input group">
                                <select class="form-control" name="group_id" id="group_id">

                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" data-toggle="modal" data-target="#myModal2"></span>
                                </div>
                            </div>
                        </div>







                    </div>
                </div>



            </form>
            <div class="panel panel-default">
                <div class="panel-heading">Class information</div>
                <div class="panel-body" id="add-class-info"></div>
            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>