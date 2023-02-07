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
        <div class="container-fluid" style="width: 50%; margin : 10%;">
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Guest</th>
                    <th scope="col">Time</th>
                    <th scope="col">Date</th>
                    <th scope="col">Message</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $reservation)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $reservation->name }}</td>
                        <td>{{ $reservation->email }}</td>
                        <td>{{ $reservation->phone }}</td>
                        <td>{{ $reservation->guest }}</td>
                        <td>{{ $reservation->time }}</td>
                        <td>{{ $reservation->date }}</td>
                        <td>{{ $reservation->message }}</td>
                        <td><a type="button" class="btn btn-danger btn-sm"
                                href="{{ url('/deletereservation', $reservation->id) }}">Delete</a>
                                <a type="button" class="btn btn-warning btn-sm"
                                href="{{ url('/viewreservation', $reservation->id) }}">Update</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('admin.adminscript')


</body>

</html>
