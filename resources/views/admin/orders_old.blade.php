<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.admincss')
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')

        <div class="container-fluid" style="width: 0%; margin : 0%;">
            <form action="{{ url('/search') }}" method="get">
                <input type="text" name="search" style="color:blue">
                <input type="submit" value="Search" class="btn btn-primary">
            </form><br><br><br>
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Food Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $orders)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $orders->name }}</td>
                            <td>{{ $orders->phone }}</td>
                            <td>{{ $orders->address }}</td>
                            <td>{{ $orders->foodname }}</td>
                            <td>&#8377; {{ $orders->price }}</td>
                            <td>{{ $orders->quantity }}</td>
                            <td>&#8377; {{ $orders->price * $orders->quantity }}</td>
                            <td><a type="button" class="btn btn-danger btn-sm"
                                        href="{{ url('/deleteorder', $orders->id) }}">Delete</a></td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

    @include('admin.adminscript')


</body>


</html>
