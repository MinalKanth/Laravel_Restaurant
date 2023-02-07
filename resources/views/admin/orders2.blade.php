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
                    <h3 align="center">Orders Datatable</h3>
                    <br />
                    {{--  <div align="right">
                        <button type="button" name="create_record" id="create_record" class="btn btn-success"> <i
                                class="bi bi-plus-square"></i> Add</button>
                    </div>  --}}
                    <br />
                    <table class="table table-striped table-bordered orders_datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Food Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
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
                                    <input type="text" name="name" id="name" type="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Phone : </label>
                                    <input name="phone" id="phone" type="phone" maxlength="10"
                                        class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Food Name : </label>
                                    <input type="text" name="foodname" id="foodname" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Price : </label>
                                    <input type="number" name="price" id="price" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Quantity : </label>
                                    <input type="number" name="quantity" id="quantity" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Address : </label>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <textarea name="address" rows="6" id="address" placeholder="Address" required=""></textarea>
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
        var table = $('.orders_datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('orders.oview') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'foodname',
                    name: 'foodname'
                },
                {
                    data: 'price',
                    name: 'price'
                },
                {
                    data: 'quantity',
                    name: 'quantity'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'phone',
                    name: 'phone'
                },
                {
                    data: 'address',
                    name: 'address'
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
                {{-- // action_url = "{{ route('orders.ostore') }}";  --}}
            }

            if ($('#action').val() == 'Edit') {
                action_url = "{{ route('orders.oupdate') }}";
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
                url: "orders/odestroy/" + user_id,
                beforeSend: function() {
                    $('#ok_button').text('Deleting...');
                },
                success: function(data) {
                    setTimeout(function() {
                        $('#confirmModal').modal('hide');
                        //$('#user_table').DataTable().ajax.reload();
                        window.location.reload();
                        alert('Data Deleted');
                    }, 1000);
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
            url: "/orders/oedit/" + id + "/",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: "json",
            success: function(data) {
                console.log('success: ' + data);
                $('#foodname').val(data.result.foodname);
                $('#price').val(data.result.price);
                $('#quantity').val(data.result.quantity);
                $('#name').val(data.result.name);
                $('#phone').val(data.result.phone);
                $('#address').val(data.result.address);
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
