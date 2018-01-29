@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Student registration</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="">Home</a></li>
            <li><i class="icon_document_alt"></i>Student</li>
            <li><i class="fa fa-file-text-o"></i>Create student</li>
        </ol>

    </div>
</div>

<div id="app">
    <add-acad></add-acad>
</div>

{{----------------}}

<div class="row">
    <div class="col-lg-12">
        {{----------------}}
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a data-toggle=collapse" data-parent="#accordion" href="#collapse1" style="text-decoration:none;">Choose academic</a>
                    <a href="#"  data-toggle="modal" data-target="#myModal2" class="pull-right"><i class="fa fa-plus"></i></a>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body academic-detail"><p></p></div>
                </div>
            </div>
        </div>

        {{----------------}}

    <div class="panel panel-default">
        <div class="panel-heading">
            <b><i class="fa fa-apple"></i>Student Information</b>
        </div>
    </div>

<div class="panel-body" style="padding-bottom:4px;">
    <form action="" method="" id="">
        <input type="hidden" name="class_id" id="class_id">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9">
            </div>
        </div>

        {{----------------}}

        <div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="lastname">
                        Sunname
                    </label>
                    <input type="text" class="form-control" id="sunname" name="sunname">
                </div>
            </div>
        </div>

        <div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="lastname">
                        Firstname
                    </label>
                    <input type="text" class="form-control" id="last_name" name="last_name">
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="passport">
                    Email
                </label>
                <input type="text" name="email" id="email" class="form-control">
            </div>
        </div>


        <div class="col-md-4">
            <div class="form-group">
                <fieldset>
                    <legend>SEX</legend>
                    <table style="width:100%; margin-top:14px;">
                        <tr style="border-bottom:1px solid #ccc;">
                            <td>
                                <label>
                                    <input type="radio" name="sex" id="sex1" value="0">
                                    Male

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="sex" id="sex" value="1">
                                    Female

                                </label>
                            </td>

                        </tr>
                    </table>

                </fieldset>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="dob">
                    BirthDate
                </label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar studentdob"></i>
                    </div>
                    <input type="text" name="dob" id="dob" class="form-control" placeholder="yyyy/mm/dd">
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="form-group">
                <label for="national_card">
                    National id
                </label>
                <input type="text" name="national_card" id="national-card" class="form-control">
            </div>
        </div>

        {{----------------}}

        <div class="col-md-4">
            <div class="form-group">
                <fieldset>
                    <legend>Status</legend>
                    <table style="width:100%; margin-top:14px;">
                        <tr style="border-bottom:1px solid #ccc;">
                            <td>
                                <label>
                                    <input type="radio" name="status" id="status" value="0">
                                    SINGLE

                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="status" id="status" value="1">
                                    MARRIED

                                </label>
                            </td>

                        </tr>
                    </table>

                </fieldset>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="passport">
                  Passport
                </label>
                <input type="text" name="passport" id="passport" class="form-control">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="passport">
                    Nationality
                </label>
                <input type="text" name="nationality" id="passport" class="form-control">
            </div>
        </div>




            <div class="panel-heading" style="margin-top: 20px;">
                <b><i class="fa fa-apple"></i>Address</b>
            </div>
        <div class="panel-body" style="padding-bottom:10px;margin-top:0;">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="district">District</label>
                        <input type="text" name="district" id="district" class="form-control">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="district">Phone</label>
                        <input type="text" name="district" id="district" class="form-control">
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="form-group">
                        <label for="province">Province</label>
                        <input type="text" name="provinces" id="district" class="form-control">
                    </div>
                </div>




                <div class="col-md-8">
                        <div class="form-group">
                            <label for="province">current address</label>
                            <input type="text" name="provinces" id="district" class="form-control">
                        </div>
                </div>
            </div>
        </div>


        <div class="panel-footer">
            <button value="" class="btn btn-default btn-save">Save<i class="fa fa-save"></i></button>

        </div>
    </form>


</div>


    </div>

</div>



@endsection
