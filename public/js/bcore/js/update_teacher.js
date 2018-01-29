$(document).on('click', '.edit-modal', function() {
    $('#footer_action_button').text(" Save changes");
    $('#footer_action_button').addClass('glyphicon-check');
    $('#footer_action_button').removeClass('glyphicon-trash');
    $('.actionBtn').addClass('btn-success');
    $('.actionBtn').removeClass('btn-danger');
    $('.actionBtn').addClass('edit');
    $('.modal-title').text('Edit Teacher');
    $('.deleteContent').hide();
    $('.form-horizontal').show();
    $('#fid').val($(this).data('id'));
    $('#name').val($(this).data('name'));
    $('#student_limit').val($(this).data('student_limit'));
    $('#student_hall').val($(this).data('student_hall'));


    $('#myModal').modal('show');
});
$(document).on('click', '.delete-modal', function() {
    $('#footer_action_button').text(" Delete");
    $('#footer_action_button').removeClass('glyphicon-check');
    $('#footer_action_button').addClass('glyphicon-trash');
    $('.actionBtn').removeClass('btn-success');
    $('.actionBtn').addClass('btn-danger');
    $('.actionBtn').addClass('delete');
    $('.modal-title').text('Delete');
    $('.did').text($(this).data('id'));
    $('.deleteContent').show();
    $('.form-horizontal').hide();
    $('.class').html($(this).data('name'));
    $('#myModal').modal('show');
});


$('.modal-footer').on('click', '.edit', function() {

    $.ajax({
        type: 'post',
        url: 'http://localhost/caleb/addclass/editClass',
        data: {
            '_token': $('input[name=_token]').val(),
            'id': $("#fid").val(),
            'name': $('#name').val(),
            'student_limit': $('#student_limit').val(),
            'student_hall': $('#student_hall').val()
        },
        success: function(data) {
            $('.teacher' + data.id).replaceWith
            ("" +
                "<tr class='user" + data.id + "'>" +
                "<td>" + data.id + "</td>" +
                "<td>" + data.name + "</td>" +
                "<td>" + data.student_limit + "</td>" +
                "<td>" + data.student_hall + "</td>" +
                "<td>" +
                "<button class='edit-modal btn btn-info' " +
                "data-id='" + data.id + "' " +
                "data-name='" + data.name + "' " +
                "data-student_limit='" + data.student_limit + "' " +
                "data-student_hall='" + data.student_hall + "' " +
                ">" +
                "<span class='glyphicon glyphicon-edit'></span> Edit</button> " +
                "<button class='delete-modal btn btn-danger' " +
                "data-id='" + data.id + "' " +
                "data-name='" + data.name + "' " +
                "data-student_limit='" + data.student_limit + "' " +
                "data-student_hall='" + data.student_hall + "' " +
                ">" +
                "<span class='glyphicon glyphicon-trash'></span> Delete</button>" +
                "</td></tr>");
        }
    });
});
$('.modal-footer').on('click', '.delete', function() {
    $.ajax({
        type: 'post',
        url: 'http://localhost/sdk/teacher/deleteTeacher',
        data: {
            '_token': $('input[name=_token]').val(),
            'id': $('.did').text()
        },
        success: function(data) {
            $('.teacher' + $('.did').text()).remove();
        }
    });
});
