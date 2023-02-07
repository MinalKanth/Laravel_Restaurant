<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')

</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')
        <div class="container">
            <div class="row">
                <div class="col-12 table-responsive">
                    <br />
                    <h3 align="center">Food Menu Datatable</h3>
                    <br />
                    <div align="right">
                        <button type="button" name="create_record" id="create_record" class="btn btn-success"> <i
                                class="bi bi-plus-square"></i> Add</button>
                    </div>
                    <br />
                    <table class="table table-striped table-bordered foodmenu_datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Description</th>
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
                        {{--  <form method="post" id="sample_form" class="form-horizontal">  --}}
                        <form method="post" id="modal_form_id" class="form-horizontal" enctype="multipart/form-data" >
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalLabel">Add New Record</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <span id="form_result"></span>
                                <div class="form-group">
                                    <label>title : </label>
                                    <input type="text" name="title" id="title" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>price : </label>
                                    <input type="number" name="price" id="price"  class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>image : </label>
                                    <input type="file" id="image" name="image" class="form-control"
                                 required>
                                <div class="form-group">
                                    <label>description : </label>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <textarea name="description" rows="6" id="description" placeholder="description" required=""></textarea>
                                        </fieldset>
                                    </div>
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
        var table = $('.foodmenu_datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('menus.mview') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'price',
                    name: 'price'
                },
                {
                    data: 'image',
                    name: 'image',
                    render: function(data, type, full, meta) {
                        return '<img src="/foodimage/' + data + '" />';
                    }
                },
                {
                    data: 'description',
                    name: 'description'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

       /* $('#create_record').click(function(){
            $('.modal-title').text('Add New Record');
            $('#action_button').val('Add');
            $('#action').val('Add');
            $('#form_result').html('');

            $('#formModal').modal('show');
        }); */

        var postData = new FormData($("#modal_form_id")[0]);

        $.ajax({
                type:'POST',
                url:'your-post-url',
                processData: false,
                contentType: false,
                data : postData,
                success:function(data){
                  console.log("File Uploaded");
                }

             });

        /* $('#sample_form').on('submit', function(event){
            event.preventDefault();
            var action_url = '';

            if($('#action').val() == 'Add')
            {
               {{--  // action_url = "{{ route('menus.mstore') }}";  --}}
            }

            if($('#action').val() == 'Edit')
            {
                {{--  //action_url = "{{ route('menus.mupdate') }}";  --}}
            }

            $.ajax({
                type: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: action_url,
                data:$(this).serialize(),
                dataType: 'json',
                success: function(data) {
                    console.log('success: '+data);
                    var html = '';
                    if(data.errors)
                    {
                        html = '<div class="alert alert-danger">';
                        for(var count = 0; count < data.errors.length; count++)
                        {
                            html += '<p>' + data.errors[count] + '</p>';
                        }
                        html += '</div>';
                    }
                    if(data.success)
                    {
                        html = '<div class="alert alert-success">' + data.success + '</div>';
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
        }); */

        // Delete User Data
        var user_id;

        $(document).on('click', '.delete', function() {
            user_id = $(this).attr('id');
            {{--  //alert(user_id);  --}}
            if(confirm('Are you sure'))[
                $.ajax({
                    url: "/menus/mdestroy/" + user_id,
                    beforeSend: function() {
                        $('#ok_button').text('Deleting...');
                    },
                    success: function(data) {
                        setTimeout(function() {
                           // $('#confirmModal').modal('hide');
                            //$('#user_table').DataTable().ajax.reload();
                            window.location.reload();
                            alert('Data Deleted');
                        }, 2000);
                    }
                })
            ]
            //$('#confirmModal').modal('show');
        });

        $('#ok_button').click(function() {
            $.ajax({
                url: "/menus/mdestroy/" + user_id,
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
            url: "/menus/medit/" + id + "/",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: "json",
            success: function(data) {
                console.log('success: ' + data);
                $('#title').val(data.result.title);
                $('#email').val(data.result.email);
                $('#phone').val(data.result.phone);
                //$("#guest").val(data.result.guest);

                $("#guest").get().forEach(x => {
                    if (data.result.label == guest) {
                        data.result.selected = true;
                    }
                });
                $('#time').val(data.result.time);
                $('#date').val(data.result.date);
                $('#message').val(data.result.message);
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
</script>

</html>
