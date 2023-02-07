<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('admin.admincss2')
</head>

{{-- add new order modal start --}}
{{--  <div class="modal fade" id="addOrderModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Order </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" id="add_order_form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4 bg-light">
                    <div class="form-group">
                        <label>Name : </label>
                        <input type="text" name="name" id="name" type="name" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Phone : </label>
                        <input name="phone" id="phone" type="phone" maxlength="10" class="form-control"
                            required>
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="add_order_btn" class="btn btn-primary">Add Order
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>  --}}
{{-- add new Order modal end --}}

{{-- edit Order modal start --}}
<div class="modal fade" id="editOrderModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Order </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" id="edit_order_form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="order_id" id="order_id">
                <input type="hidden" name="order_image" id="order_image">
                <div class="modal-body p-4 bg-light">

                    <div class="form-group">
                        <label>Foodname : </label>
                        <input type="text" name="foodname" id="foodname"  class="form-control foodname"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Price : </label>
                        <input type="number" name="phone" id="price" maxlength="10" class="form-control price"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Phone : </label>
                        <input name="phone" id="phone" type="phone" maxlength="10" class="form-control phone"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Name : </label>
                        <input type="text" name="name" id="name" type="name" class="form-control name"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Quantity : </label>
                        <input type="number" name="quantity" id="quantity" class="form-control quantity" />
                    </div>
                    <div class="form-group">
                        <label>Address : </label>
                        <div class="col-lg-6">
                            <fieldset>
                                <textarea name="address" rows="6" id="address" class="form-control address" placeholder="Address" required=""></textarea>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="edit_order_btn" class="btn btn-success">Update Order
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- edit Order modal end --}}

<body class="bg-light">
    <div class="container-scroller">
        @include('admin.navbar')
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-header bg-danger d-flex justify-content-between align-items-center">
                            <h3 class="text-light">Manage Order </h3>
                            {{--  <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addOrderModal"><i
                                    class="bi-plus-circle me-2"></i>Add New
                                Order </button>  --}}
                        </div>
                        <div class="card-body" id="show_all_orders">
                            <h1 class="text-center text-secondary my-5">Loading...</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.adminscript2')
        <script>
            $(function() {

            /*    // add new Order ajax request
                $("#add_order_form").submit(function(e) {
                    e.preventDefault();
                    const fd = new FormData(this);
                    $("#add_order_btn").text('Adding...');
                    $.ajax({
                        url: '{{ route('ostore') }}',
                        method: 'post',
                        data: fd,
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function(response) {
                            if (response.status == 200) {
                                Swal.fire(
                                    'Added!',
                                    'order Added Successfully!',
                                    'success'
                                )
                                fetchAllorders();
                            }
                            $("#add_order_btn").text('Add order');
                            $("#add_order_form")[0].reset();
                            $("#addorderModal").modal('hide');
                        }
                    });
                }); */

                // edit order ajax request
                $(document).on('click', '.editIcon', function(e) {
                    e.preventDefault();
                    let id = $(this).attr('id');
                    $.ajax({
                        url: '{{ route('oedit') }}',
                        method: 'get',
                        data: {
                            id: id,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            $(".foodname").val(response.foodname);
                            $(".price").val(response.price);
                            $(".quantity").val(response.quantity);
                            $(".name").val(response.name);
                            $(".phone").val(response.phone);
                            $(".address").val(response.address);
                            $("#order_id").val(response.id);
                        }
                    });
                });

                // update order ajax request
                $("#edit_order_form").submit(function(e) {
                    e.preventDefault();
                    const fd = new FormData(this);
                    $("#edit_order_btn").text('Updating...');
                    $.ajax({
                        url: '{{ route('oupdate') }}',
                        method: 'post',
                        data: fd,
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function(response) {
                            if (response.status == 200) {
                                Swal.fire(
                                    'Updated!',
                                    'order Updated Successfully!',
                                    'success'
                                )
                                fetchAllorders();
                            }
                            $("#edit_order_btn").text('Update order');
                            $("#edit_order_form")[0].reset();
                            $("#editorderModal").modal('hide');
                        }
                    });
                });

                // delete order ajax request
                $(document).on('click', '.deleteIcon', function(e) {
                    e.preventDefault();
                    let id = $(this).attr('id');
                    let csrf = '{{ csrf_token() }}';
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: '{{ route('odelete') }}',
                                method: 'delete',
                                data: {
                                    id: id,
                                    _token: csrf
                                },
                                success: function(response) {
                                    console.log(response);
                                    Swal.fire(
                                        'Deleted!',
                                        'Your file has been deleted.',
                                        'success'
                                    )
                                    fetchAllorders();
                                }
                            });
                        }
                    })
                });

                // fetch all orders ajax request
                fetchAllorders();

                function fetchAllorders() {
                    $.ajax({
                        url: '{{ route('ofetchAll') }}',
                        method: 'get',
                        success: function(response) {
                            $("#show_all_orders").html(response);
                            $("table").DataTable({
                                order: [0, 'desc']
                            });
                        }
                    });
                }
            });
        </script>
</body>

</html>
