<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/">
    @include('admin.admincss')
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')
        <div class="container-fluid">
            <div style="position: relative; top: 60px; right: -150px">
                <form action="{{ url('/uploadchef') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                 style="color:white">
                        </div>
                    </div>
                    <div class="form-group  col-md-6">
                        <label for="inputAddress">Speciality</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" id="speciality" name="speciality" rows="3"
                            style="color:white"></textarea>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputPassword4">New Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <button type="submit" value="Save" class="btn btn-primary">Submit</button>
                </form>
                <br>
                <br>
                <br>
                <br>
            </div>
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Speciality</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $chef)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $chef->name }}</td>
                                <td>{{ $chef->speciality }}</td>
                                <td><img src="/chefimage/{{ $chef->image }}" height="200" width="200"></td>
                                <td><a type="button" class="btn btn-danger btn-sm"
                                        href="{{ url('/deletechef', $chef->id) }}">Delete</a>
                                        <a type="button" class="btn btn-warning btn-sm"
                                        href="{{ url('/viewchef', $chef->id) }}">Update</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

        </div>
        @include('admin.adminscript')


</body>

</html>
