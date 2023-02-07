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

{{-- add new Food modal start --}}
<div class="modal fade" id="addFoodModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Food </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" id="add_food_form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4 bg-light">
                    <div class="row">
                        <div class="col-lg">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Title" required>
                        </div>
                    </div>
                    <div class="my-2">
                        <label for="price">Price</label>
                        <input type="number" name="price" class="form-control" placeholder="Price" required>
                    </div>
                    <div class="my-2">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control" placeholder="Description"
                            required>
                    </div>
                    <div class="my-2">
                        <label for="image">Select image</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="add_food_btn" class="btn btn-primary">Add Food </button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- add new Food modal end --}}

{{-- edit Food modal start --}}
<div class="modal fade" id="editFoodModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Food </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" id="edit_food_form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="food_id" id="food_id">
                <input type="hidden" name="food_image" id="food_image">
                <div class="modal-body p-4 bg-light">
                    <div class="row">
                        <div class="col-lg">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Title"
                                required>
                        </div>
                    </div>
                    <div class="my-2">
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price" class="form-control" placeholder="Price"
                            required>
                    </div>
                    <div class="my-2">
                        <label for="description">Description</label>
                        <input type="text" name="description" id="description" class="form-control"
                            placeholder="Description" required>
                    </div>
                    <div class="my-2">
                        <label for="image">Select image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="mt-2" id="image">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="edit_food_btn" class="btn btn-success">Update Food </button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- edit food modal end --}}

<body class="bg-light">
    <div class="container-scroller">
        @include('admin.navbar')
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-header bg-danger d-flex justify-content-between align-items-center">
                            <h3 class="text-light">Manage Food </h3>
                            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addFoodModal"><i
                                    class="bi-plus-circle me-2"></i>Add New Food </button>
                        </div>
                        <div class="card-body" id="show_all_foods">
                            <h1 class="text-center text-secondary my-5">Loading...</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.adminscript2')
        <script>
            $(function() {

                // add new food ajax request
                $("#add_food_form").submit(function(e) {
                    e.preventDefault();
                    const fd = new FormData(this);
                    $("#add_food_btn").text('Adding...');
                    $.ajax({
                        url: '{{ route('fstore') }}',
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
                                    'Food Added Successfully!',
                                    'success'
                                )
                                fetchAllFoods();
                            }
                            $("#add_food_btn").text('Add Food');
                            $("#add_food_form")[0].reset();
                            $("#addFoodModal").modal('hide');
                        }
                    });
                });

                // edit Food ajax request
                $(document).on('click', '.editIcon', function(e) {
                    e.preventDefault();
                    let id = $(this).attr('id');
                    $.ajax({
                        url: '{{ route('fedit') }}',
                        method: 'get',
                        data: {
                            id: id,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            $("#title").val(response.title);
                            $("#price").val(response.price);
                            $("#description").val(response.description);
                            $("#image").html(
                                `<img src="storage/foodimage/${response.image}" width="100" class="img-fluid img-thumbnail">`
                                );
                            $("#food_id").val(response.id);
                            $("#food_image").val(response.image);
                        }
                    });
                });

                // update Food ajax request
                $("#edit_food_form").submit(function(e) {
                    e.preventDefault();
                    const fd = new FormData(this);
                    $("#edit_food_btn").text('Updating...');
                    $.ajax({
                        url: '{{ route('fupdate') }}',
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
                                    'Food Updated Successfully!',
                                    'success'
                                )
                                fetchAllFoods();
                            }
                            $("#edit_food_btn").text('Update Food');
                            $("#edit_food_form")[0].reset();
                            $("#editFoodModal").modal('hide');
                        }
                    });
                });

                // delete Food ajax request
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
                                url: '{{ route('fdelete') }}',
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
                                    fetchAllFoods();
                                }
                            });
                        }
                    })
                });

                // fetch all Foods ajax request
                fetchAllFoods();

                function fetchAllFoods() {
                    $.ajax({
                        url: '{{ route('ffetchAll') }}',
                        method: 'get',
                        success: function(response) {
                            $("#show_all_foods").html(response);
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
