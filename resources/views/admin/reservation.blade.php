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

{{-- add new Reservation modal start --}}
<div class="modal fade" id="addReservationModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Reservation </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" id="add_reservation_form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4 bg-light">
                    <div class="row">
                        <div class="col-lg">
                            <label>Name : </label>
                            <input type="text" name="name" id="name" class="form-control" />
                        </div>
                    </div>
                    <div class="my-2">
                        <label>Email : </label>
                        <input type="email" name="email" id="email" class="form-control" />
                    </div>
                    <div class="my-2">
                        <label>Phone : </label>
                        <input type="number" name="phone" id="phone" maxlength="10" class="form-control" />
                    </div>
                    <div class="my-2">
                        <label>Date (yyyy-mm-dd): </label>
                        <input  type="date" name="date" id="date" class="form-control"
                            placeholder="yyyy-mm-dd" required>
                    </div>
                    <div class="my-2">
                        <label>Time : </label>
                        <input name="time" id="time" type="time" class="form-control" required>
                    </div>
                    <div class="my-2">
                        <label>Message : </label>
                        <input name="message" id="message" placeholder="Message" class="form-control" required>
                    </div>

                    <div class="my-6">
                        <label>No Of Guest : </label>
                        <div class="col-md-6 col-sm-12">
                            <fieldset>
                                <select value="guest" name="guest" id="number-guests" required>
                                    {{--  <option value="" selected disabled>Number Of Guests</option>  --}}
                                    <option name="1" id="1">1</option>
                                    <option name="2" id="2">2</option>
                                    <option name="3" id="3">3</option>
                                    <option name="4" id="4">4</option>
                                    <option name="5" id="5">5</option>
                                    <option name="6" id="6">6</option>
                                    <option name="7" id="7">7</option>
                                    <option name="8" id="8">8</option>
                                    <option name="9" id="9">9</option>
                                    <option name="10" id="10">10</option>
                                    <option name="11" id="11">11</option>
                                    <option name="12" id="12">12</option>
                                </select>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="add_reservation_btn" class="btn btn-primary">Add Reservation
                        </button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- add new Reservation modal end --}}

{{-- edit Reservation modal start --}}
<div class="modal fade" id="editReservationModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Reservation </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" id="edit_reservation_form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="reservation_id" id="reservation_id">
                <input type="hidden" name="reservation_image" id="reservation_image">
                <div class="modal-body p-4 bg-light">
                    <div class="row">
                        <div class="col-lg">
                            <label>Name : </label>
                            <input type="text" name="name" id="name" class="form-control name" />
                        </div>
                    </div>
                    <div class="my-2">
                        <label>Email : </label>
                        <input type="email" name="email" id="email" class="form-control email" />
                    </div>
                    <div class="my-2">
                        <label>Phone : </label>
                        <input type="number" name="phone" id="phone" maxlength="10" class="form-control phone" />
                    </div>
                    <div class="my-2">
                        <label>Date (yyyy-mm-dd): </label>
                        <input type="date"  name="date" id="date" class="form-control date"
                            placeholder="yyyy-mm-dd" required>
                    </div>
                    <div class="my-2">
                        <label>Time : </label>
                        <input name="time" id="time" type="time" class="form-control time" required>
                    </div>
                    <div class="my-2">
                        <label>Message : </label>
                        <input name="message" id="message" placeholder="Message" class="form-control message" required>
                    </div>

                    <div class="my-6">
                        <label>No Of Guest : </label>
                        <div class="col-md-6 col-sm-12">
                            <fieldset>
                                <select value="guest" name="guest" id="number-guests" class="form-control guest" required>
                                    {{--  <option value="" selected disabled>Number Of Guests</option>  --}}
                                    <option name="1" id="1">1</option>
                                    <option name="2" id="2">2</option>
                                    <option name="3" id="3">3</option>
                                    <option name="4" id="4">4</option>
                                    <option name="5" id="5">5</option>
                                    <option name="6" id="6">6</option>
                                    <option name="7" id="7">7</option>
                                    <option name="8" id="8">8</option>
                                    <option name="9" id="9">9</option>
                                    <option name="10" id="10">10</option>
                                    <option name="11" id="11">11</option>
                                    <option name="12" id="12">12</option>
                                </select>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="edit_reservation_btn" class="btn btn-success">Update Reservation
                        </button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- edit Reservation modal end --}}

<body class="bg-light">
    <div class="container-scroller">
        @include('admin.navbar')
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-header bg-danger d-flex justify-content-between align-items-center">
                            <h3 class="text-light">Manage Reservation </h3>
                            <button class="btn btn-light" data-bs-toggle="modal"
                                data-bs-target="#addReservationModal"><i class="bi-plus-circle me-2"></i>Add New
                                Reservation </button>
                        </div>
                        <div class="card-body" id="show_all_reservations">
                            <h1 class="text-center text-secondary my-5">Loading...</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.adminscript2')
        <script>
            $(function() {

                // add new reservation ajax request
                $("#add_reservation_form").submit(function(e) {
                    e.preventDefault();
                    const fd = new FormData(this);
                    $("#add_reservation_btn").text('Adding...');
                    $.ajax({
                        url: '{{ route('rstore') }}',
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
                                    'Reservation Added Successfully!',
                                    'success'
                                )
                                fetchAllReservations();
                            }
                            $("#add_reservation_btn").text('Add Reservation');
                            $("#add_reservation_form")[0].reset();
                            $("#addReservationModal").modal('hide');
                        }
                    });
                });

                // edit Reservation ajax request
                $(document).on('click', '.editIcon', function(e) {
                    e.preventDefault();
                    let id = $(this).attr('id');
                    $.ajax({
                        url: '{{ route('redit') }}',
                        method: 'get',
                        data: {
                            id: id,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            $(".name").val(response.name);
                            $(".email").val(response.email);
                            $(".phone").val(response.phone);
                            $(".guest").val(response.guest);
                            $(".time").val(response.time);
                            $(".date").val(response.date);
                            $(".message").val(response.message);
                            $("#reservation_id").val(response.id);
                            $("#reservation_image").val(response.image);
                        }
                    });
                });

                // update Reservation ajax request
                $("#edit_reservation_form").submit(function(e) {
                    e.preventDefault();
                    const fd = new FormData(this);
                    $("#edit_reservation_btn").text('Updating...');
                    $.ajax({
                        url: '{{ route('rupdate') }}',
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
                                    'Reservation Updated Successfully!',
                                    'success'
                                )
                                fetchAllReservations();
                            }
                            $("#edit_reservation_btn").text('Update Reservation');
                            $("#edit_reservation_form")[0].reset();
                            $("#editReservationModal").modal('hide');
                        }
                    });
                });

                // delete Reservation ajax request
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
                                url: '{{ route('rdelete') }}',
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
                                    fetchAllReservations();
                                }
                            });
                        }
                    })
                });

                // fetch all Reservations ajax request
                fetchAllReservations();

                function fetchAllReservations() {
                    $.ajax({
                        url: '{{ route('rfetchAll') }}',
                        method: 'get',
                        success: function(response) {
                            $("#show_all_reservations").html(response);
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
