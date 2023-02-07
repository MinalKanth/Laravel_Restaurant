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
                    <h3 align="center">Datatables</h3>
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
                                <th>Email</th>
                                <th width="180px">Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function() {
                var table = $('.user_datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('users.index') }}",
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ]
                });


            });
        </script>
        @include('admin.adminscript')


</body>

</html>
