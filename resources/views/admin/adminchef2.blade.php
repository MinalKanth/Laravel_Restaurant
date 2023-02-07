<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/">
    @include('admin.admincss')

</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')
        <div class="container">
            <div class="row">
                <div class="col-12 table-responsive">
                    <br />
                    <h3 align="center">Chef Datatable</h3>
                    <br />
                    <div align="right">
                        <button type="button" name="create_record" id="create_record" class="btn btn-success"> <i
                                class="bi bi-plus-square"></i> Add</button>
                    </div>
                    <br />
                    <table class="table table-striped table-bordered user_datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Speciality</th>
                                <th>Image</th>
                                <th width="180px">Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>

            <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="post" id="sample_form" class="form-horizontal">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalLabel">Add New Record</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <span id="form_result"></span>
                                <div class="form-group">
                                    <label>Name : </label>
                                    <input type="text" name="name" id="name" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Speciality : </label>
                                    <input type="text" name="speciality" id="speciality" class="form-control" />
                                </div>
                                {{--  <div class="form-group">
                                    <label>New Image</label>
                                    <input type="file" class="form-control" id="image" name="image" />
                                </div>
                                <div class="form-group">
                                    <label>Previous Image</label>
                                    <img src="/chefimage/" height="200" width="200" id="image2" name="image2">
                                </div>  --}}
                                <div class="row">

                                    @if (empty($emp_data[0]->emp_img))
                                        <img id="img_prv" style="max-width: 150px;max-height: 150px"
                                            class="img-thumbnail" src="{{ url('../emp_profile/user.jpg') }}">
                                    @else
                                        <img id="img_prv" style="max-width: 150px;max-height: 150px"
                                            class="img-thumbnail"
                                            src="{{ url('../emp_profile/' . $emp_data[0]->emp_img) }}">
                                    @endif

                                </div>
                                <div class="row">
                                    <label>Image upload</label>
                                    <input type="file" class="form-control" id="image" name="image" />

                                    <span id="mgs_ta">

                                    </span>
                                </div>
                                <input type="hidden" name="action" id="action" value="Add" />
                                <input type="hidden" name="hidden_id" id="hidden_id" />
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="submit" name="action_button" id="action_button" value="Add"
                                    class="btn btn-info" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="post" id="sample_form" class="form-horizontal">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalLabel">Confirmation</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" name="ok_button" id="ok_button"
                                    class="btn btn-danger">OK</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
</body>

@include('admin.adminscript')

<script type="text/javascript">
    $(document).ready(function() {
        var table = $('.user_datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('chef.foodchef') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'speciality',
                    name: 'speciality'
                },
                {
                    data: 'image',
                    name: 'image',
                    render: function(data, type, full, meta) {
                        return '<img src="/chefimage/' + data + '" />';
                    }
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

        $('#create_record').click(function() {
            $('.modal-title').text('Add New Record');
            $('#action_button').val('Add');
            $('#action').val('Add');
            $('#form_result').html('');

            $('#formModal').modal('show');
        });

        $('#sample_form').on('submit', function(event) {
            event.preventDefault();
            var action_url = '';

            if ($('#action').val() == 'Add') {
                action_url = "{{ route('chef.cstore') }}";
            }

            if ($('#action').val() == 'Edit') {
                action_url = "{{ route('chef.cupdate') }}";
            }

            $.ajax({
                type: 'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: action_url,
                data: $(this).serialize(),
                dataType: 'json',
                success: function(data) {
                    console.log('success: ' + data);
                    var html = '';
                    if (data.errors) {
                        html = '<div class="alert alert-danger">';
                        for (var count = 0; count < data.errors.length; count++) {
                            html += '<p>' + data.errors[count] + '</p>';
                        }
                        html += '</div>';
                    }
                    if (data.success) {
                        html = '<div class="alert alert-success">' + data.success +
                        '</div>';
                        $('#sample_form')[0].reset();
                        //$('#user_table').DataTable().ajax.reload();
                        window.location.reload();

                    }
                    $('#form_result').html(html);
                },
                error: function(data) {
                    var errors = data.responseJSON;
                    console.log(errors);
                }
            });
        });

        // Delete User Data
        var user_id;

        $(document).on('click', '.delete', function() {
            user_id = $(this).attr('id');
            $('#confirmModal').modal('show');
        });

        $('#ok_button').click(function() {
            $.ajax({
                url: "chef/destroy/" + user_id,
                beforeSend: function() {
                    $('#ok_button').text('Deleting...');
                },
                success: function(data) {
                    setTimeout(function() {
                        $('#confirmModal').modal('hide');
                        //$('#user_table').DataTable().ajax.reload();
                        window.location.reload();
                        alert('Data Deleted');
                    }, 2000);
                }
            })
        });
    });

    $(document).on('click', '.edit', function(event) {
        event.preventDefault();
        var id = $(this).attr('id');
        //alert(id);
        $('#form_result').html('');



        $.ajax({
            url: "/chef/edit/" + id + "/",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: "json",
            success: function(data) {
                console.log('success: ' + data);
                $('#name').val(data.result.name);
                $('#speciality').val(data.result.speciality);
                $('#image2').val(data.result.image);
                $('#hidden_id').val(id);
                $('.modal-title').text('Edit Record');
                $('#action_button').val('Update');
                $('#action').val('Edit');
                $('.editpass').hide();
                $('#formModal').modal('show');
            },
            error: function(data) {
                var errors = data.responseJSON;
                console.log(errors);
            }
        })
    });

    $('#image').on('change', function(ev) {
        console.log("here inside");

        var filedata = this.files[0];
        var imgtype = filedata.type;


        var match = ['image/jpeg', 'image/jpg'];

        if (!(imgtype == match[0]) || (imgtype == match[1])) {
            $('#mgs_ta').html('<p style="color:red">Plz select a valid type image..only jpg jpeg allowed</p>');

        } else {

            $('#mgs_ta').empty();


            //---image preview

            var reader = new FileReader();

            reader.onload = function(ev) {
                $('#img_prv').attr('src', ev.target.result).css('width', '150px').css('height', '150px');
            }
            reader.readAsDataURL(this.files[0]);

            /// preview end

            //upload

            var postData = new FormData();
            postData.append('file', this.files[0]);

            var url = "{{ url('ajaxuploadimg') }}";

            $.ajax({
                headers: {
                    'X-CSRF-Token': $('meta[name=csrf_token]').attr('content')
                },
                async: true,
                type: "post",
                contentType: false,
                url: url,
                data: postData,
                processData: false,
                success: function() {
                    console.log("success");
                }


            });

        }

    });
</script>

</html>
