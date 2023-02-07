<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">

</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Laravel 9 Yajra Datatables Example</h2>
        <table class="table table-striped table-bordered table-hover yajra-datatables">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Title</th>
                    <th>Slugs</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
    $(function(){
        var table = $('.yajra-dataTables').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('welcome') }}",
            columns: [
                {data:'DT_RowIndex',name:'DT_RowIndex'},
                {data:'title',name:'title'},
                {data:'slug',name:'slug'},
                {data:'keywords',name:'keywords'},
                {
                    data:'action',
                    name:'action',
                    orderable:true,
                    searchable:true
                },
                ]
    }
    });
    </script>
</body>

</html>
