
<!-- Edit Teacher Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!--Modal Content -->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    {{ csrf_field() }}
                    <p class="error text-center alert alert-danger hidden"></p>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id">ID:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="fid" disabled>
                        </div>
                    </div>

                    <p class="error text-center alert alert-danger hidden"></p>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Edit/Update class:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="student limit">Edit/Update student limit:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="student_limit"  id="student_limit" >

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="student_hall">Edit/Update student hall:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="student_hall" >
                        </div>
                    </div>

                    </div>
                </form>
                <div class="deleteContent">
                    Are you sure you want to delete <span class="class"></span> ? <span class="hidden did"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn actionBtn" data-dismiss="modal">
                        <span id="footer_action_button" class="glyphicon"></span>
                    </button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">
                        <span class="fa fa-close"></span>Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
