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

{{-- add new Chef modal start --}}
<div class="modal fade" id="addChefModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Chef </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" id="add_chef_form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4 bg-light">
                    <div class="row">
                        <div class="col-lg">
                            <label for="title">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="my-2">
                        <label for="speciality">Speciality</label>
                        <input type="text" name="speciality" class="form-control" placeholder="Speciality" required>
                    </div>
                    <div class="my-2">
                        <label for="image">Select Image</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="add_chef_btn" class="btn btn-primary">Add Chef </button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- add new Chef modal end --}}

{{-- edit Chef modal start --}}
<div class="modal fade" id="editChefModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Chef </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" id="edit_chef_form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="chef_id" id="chef_id">
                <input type="hidden" name="chef_image" id="chef_image">
                <div class="modal-body p-4 bg-light">
                    <div class="row">
                        <div class="col-lg">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name"
                                required>
                        </div>
                    </div>
                    <div class="my-2">
                        <label for="speciality">Speciality</label>
                        <input type="text" name="speciality" id="speciality" class="form-control"
                            placeholder="Speciality" required>
                    </div>
                    <div class="my-2">
                        <label for="image">Select Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="mt-2" id="image">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="edit_chef_btn" class="btn btn-success">Update Chef </button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- edit chef modal end --}}

<body class="bg-light">
    <div class="container-scroller">
        @include('admin.navbar')

        <div class="container">
            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-header bg-danger d-flex justify-content-between align-items-center">
                            <h3 class="text-light">Manage Chef </h3>
                            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addChefModal"><i
                                    class="bi-plus-circle me-2"></i>Add New Chef </button>
                        </div>
                        <div class="card-body" id="show_all_chefs">
                            <h1 class="text-center text-secondary my-5">Loading...</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.adminscript2')
        <script>
            $(function() {

                // add new Chef ajax request
                $("#add_chef_form").submit(function(e) {
                    e.preventDefault();
                    const fd = new FormData(this);
                    $("#add_Chef_btn").text('Adding...');
                    $.ajax({
                        url: '{{ route('cstore') }}',
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
                                    'Chef Added Successfully!',
                                    'success'
                                )
                                fetchAllChefs();
                            }
                            $("#add_chef_btn").text('Add Chef');
                            $("#add_chef_form")[0].reset();
                            $("#addChefModal").modal('hide');
                        }
                    });
                });

                // edit Chef ajax request
                $(document).on('click', '.editIcon', function(e) {
                    e.preventDefault();
                    let id = $(this).attr('id');
                    $.ajax({
                        url: '{{ route('cedit') }}',
                        method: 'get',
                        data: {
                            id: id,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            $("#name").val(response.name);
                            $("#speciality").val(response.speciality);
                            $("#image").html(
                                `<img src="storage/chefimage/${response.image}" width="100" class="img-fluid img-thumbnail">`
                            );
                            $("#chef_id").val(response.id);
                            $("#chef_image").val(response.image);
                        }
                    });
                });

                // update Chef ajax request
                $("#edit_chef_form").submit(function(e) {
                    e.preventDefault();
                    const fd = new FormData(this);
                    $("#edit_chef_btn").text('Updating...');
                    $.ajax({
                        url: '{{ route('cupdate') }}',
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
                                    'Chef Updated Successfully!',
                                    'success'
                                )
                                fetchAllChefs();
                            }
                            $("#edit_chef_btn").text('Update Chef');
                            $("#edit_chef_form")[0].reset();
                            $("#editChefModal").modal('hide');
                        }
                    });
                });

                // delete Chef ajax request
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
                                url: '{{ route('cdelete') }}',
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
                                    fetchAllChefs();
                                }
                            });
                        }
                    })
                });

                // fetch all Chefs ajax request
                fetchAllChefs();

                function fetchAllChefs() {
                    $.ajax({
                        url: '{{ route('cfetchAll') }}',
                        method: 'get',
                        success: function(response) {
                            $("#show_all_chefs").html(response);
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
