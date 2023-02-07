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

{{-- add new User modal start --}}
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New User </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" id="add_user_form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4 bg-light">
                    <div class="row">
                        <div class="col-lg">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="my-2">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                            required>
                    </div>
                    <div class="my-2">
                        <label for="email">Password : </label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="add_user_btn" class="btn btn-primary">Add User </button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- add new User modal end --}}

{{-- edit User modal start --}}
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit User </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" id="edit_user_form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="user_id" id="user_id">
                <input type="hidden" name="user_image" id="user_image">
                <div class="modal-body p-4 bg-light">
                    <div class="row">
                        <div class="col-lg">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name"
                                required>
                        </div>
                    </div>
                    <div class="my-2">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control"
                            placeholder="Email" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="edit_user_btn" class="btn btn-success">Update User </button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- edit User modal end --}}

<body class="bg-light">
    <div class="container-scroller">
        @include('admin.navbar')
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-header bg-danger d-flex justify-content-between align-items-center">
                            <h3 class="text-light">Manage User </h3>
                            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addUserModal"><i
                                    class="bi-plus-circle me-2"></i>Add New User </button>
                        </div>
                        <div class="card-body" id="show_all_users">
                            <h1 class="text-center text-secondary my-5">Loading...</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.adminscript2')
        <script>
            $(function() {

                // add new User ajax request
                $("#add_user_form").submit(function(e) {
                    e.preventDefault();
                    const fd = new FormData(this);
                    $("#add_user_btn").text('Adding...');
                    $.ajax({
                        url: '{{ route('ustore') }}',
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
                                    'User Added Successfully!',
                                    'success',
                                )
                                fetchAllUsers();
                            }
                            $("#add_user_btn").text('Add User');
                            $("#add_user_form")[0].reset();
                            $("#addUserModal").modal('hide');
                        }
                    });
                });

                // edit User ajax request
                $(document).on('click', '.editIcon', function(e) {
                    e.preventDefault();
                    let id = $(this).attr('id');
                    $.ajax({
                        url: '{{ route('uedit') }}',
                        method: 'get',
                        data: {
                            id: id,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            $("#name").val(response.name);
                            $("#email").val(response.email);
                            $("#user_id").val(response.id);
                            $("#user_image").val(response.image);
                        }
                    });
                });

                // update User ajax request
                $("#edit_user_form").submit(function(e) {
                    e.preventDefault();
                    const fd = new FormData(this);
                    $("#edit_user_btn").text('Updating...');
                    $.ajax({
                        url: '{{ route('uupdate') }}',
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
                                    'User Updated Successfully!',
                                    'success'
                                )
                                fetchAllUsers();
                            }
                            $("#edit_user_btn").text('Update User');
                            $("#edit_user_form")[0].reset();
                            $("#editUserModal").modal('hide');
                        }
                    });
                });

                // delete User ajax request
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
                                url: '{{ route('udelete') }}',
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
                                    fetchAllUsers();
                                }
                            });
                        }
                    })
                });

                // fetch all Users ajax request
                fetchAllUsers();

                function fetchAllUsers() {
                    $.ajax({
                        url: '{{ route('ufetchAll') }}',
                        method: 'get',
                        success: function(response) {
                            $("#show_all_users").html(response);
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
