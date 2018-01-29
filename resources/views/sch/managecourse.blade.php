@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Courses</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="">Home</a></li>
            <li><i class="icon_document_alt"></i>Course</li>
            <li><i class="fa fa-file-text-o"></i>Manage Course</li>
        </ol>

    </div>
</div>
<div id="app">
    <manage></manage>
</div>

<div id="app">
    <addProgram></addProgram>
</div>

<div id="app">
    <addcourse></addcourse>
</div>

<div id="app">
    <add-level></add-level>
</div>

<div id="app">
    <add-shift></add-shift>
</div>


<div id="app">
    <add-time></add-time>
</div>


<div class="row">
    <div class="col-lg-12">
        <section class="panel panel-default">
            <header class="panel-heading">
                Manage Course
            </header>
            <form class="form-horizontal">
                <div class="panel-body" style="border-bottom: 1px solid #ccc;">
                    <div class="form-group">

                        <div class="col-sm-3">
                            <label for="academic-year">Academic Year</label>
                            <div class="input group">
                                <select class="form-control" name="academic_id" id="academic_id">

                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" data-toggle="modal" class="modal-mask" @click="close" v-show="show" ></span>
                                </div>
                            </div>
                        </div>
                        {{----------------}}
                        <div class="col-sm-4">
                            <label for="program">Course</label>
                            <div class="input group">
                                <select class="form-control" name="program_id" id="program_id">

                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" data-toggle="modal" data-target="#myModal3"></span>
                                </div>
                            </div>
                        </div>

                        {{----------------}}
                        <div class="col-sm-4">
                            <label for="level">Level</label>
                            <div class="input group">
                                <select class="form-control" name="level_id" id="level_id">

                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" data-toggle="modal" data-target="#myModal2"></span>
                                </div>
                            </div>
                        </div>

                        {{----------------}}
                        <div class="col-sm-3">
                            <label for="shift">Shift</label>
                            <div class="input group">
                                <select class="form-control" name="shift_id" id="shift_id">

                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" data-toggle="modal" data-target="#myModal2"></span>
                                </div>
                            </div>
                        </div>

                        {{----------------}}

                        <div class="col-sm-4">
                            <label for="time">Time</label>
                            <div class="input group">
                                <select class="form-control" name="time_id" id="time_id">

                                </select>
                                <div class="input-group-addon">
                                    <span class="fa fa-plus" data-toggle="modal" data-target="#myModal2"></span>
                                </div>
                            </div>
                        </div>

                        {{----------------}}

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

                        {{----------------}}

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

                        {{----------------}}

                        <div class="col-sm-2">
                            <label for="startDate">Start Date</label>
                            <div class="input group">
                                <input type="text" name="start_date" id="start_date" class="form-control">


                                <div class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                </div>
                            </div>
                        </div>

                        {{----------------}}

                        <div class="col-sm-4">
                            <label for="endDate">End Date</label>
                            <div class="input group">
                                <input type="text" name="end_date" id="end_date" class="form-control">


                                <div class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

                    <div class="panel-footer">
                        <button type="submit" class="btn btn-default btn-sm">Create Course</button>
                        <button type="button" class="btn btn-success btn- btn-update-class">Update Class</button>
                    </div>

            </form>
            <div class="panel panel-default">
                <div class="panel-heading">Class information</div>
                <div class="panel-body" id="add-class-info"></div>
            </div>
        </section>
    </div>
</div>


    @endsection
