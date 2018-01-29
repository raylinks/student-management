@extends('layouts.master')
@section('content')
    @include('Fees.Paymentstyle')


    <div class="panelpanel-default">
        <div class="panel-heading">
            <div class="col-md-3">
                <form>
                    <input class="form-control" id="student_id"placeholder="student ID" type="text" name="student_id">
                </form>
            </div>
            <div class="col-md-3">
                <label class="eng-name">Name: <b class="student-name" ></b></label>
            </div>
            <div class="col-md-3">
            </div>
            <div class="col-md-3" style="text-align:right;">
                <label class="date-invoice">Date: <b>{{ date ('d-m-y') }}</b></label>
            </div>
            <div class="col-md-3" style="text-align:right;">
                <label class="invoice-number">Receipt N:<sup>0</sup>: <b></b></label>
            </div>
        </div>

        <div class="panel-body">
            <table style="margin-top:-12px;">
                <caption class="academicDetail">

                </caption>

                <thead>
                <tr>
                    <th>program</th>
                    <th>level</th>
                    <th>school fees</th>
                    <th>Amount</th>
                    <th>Dis</th>
                    <th>Paid</th>
                    <th>Amount Lack</th>
                </tr>

                </thead>

                <tr>
                    <td>
                        <select id="AcademicID" name="academic_id">
                            <option value="">---------</option>
                        </select>
                    </td>

                    <td>
                        <select>
                            <option value="">---------</option>
                        </select>
                    </td>

                    <td>
                        <input type="text" id="fee" name="Fee" readonly="true">
                        <input type="hidden" id="fee_id" name="FeeId" >
                        <input type="hidden" id="student_id" name="StudentID">
                        <input type="hidden" id="level_id" name="LevelID" >
                        <input type="hidden" id="user_id" name="UserID" >
                        <input type="hidden" id="transact_date" name="Transact_Date" >
                        <input type="hidden" id="s_fee_id" name="TransacDate" >
                    </td>

                    <td>
                        <input type="text" name="amount" id="Amount" required>
                    </td>

                    <td>
                        <input type="text" name="discount" id="Discount" required>
                    </td>

                    <td>
                        <input type="text" name="paid" id="Paid" required>
                    </td>
                    <td>
                        <input type="text" name="lack" id="Lack" disabled>
                    </td>
                </tr>

                <thead>
                <tr>
                    <th colspan="2">Remark </th>
                    <th colspan="5">Description </th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td colspan="2">
                        <input type="text" name="description" id="description">
                    </td>

                    <td colspan="5">
                        <input type="text" name="remark" id="remark">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="panel-footer" style="height:40px;"></div>
    </div>

@endsection