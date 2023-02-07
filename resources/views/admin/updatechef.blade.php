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
                <form action="{{ url('/updatechef', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $data->name }}" style="color:white">
                        </div>
                    </div>
                    <div class="form-group  col-md-6">
                        <label for="inputAddress">Speciality</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" id="speciality" name="speciality" rows="3"
                            style="color:white">{{ $data->speciality }}</textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Old Image</label>
                        <image src="/chefimage/{{ $data->image }}" height="200" width="200">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">New Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <button type="submit" value="Save" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        @include('admin.adminscript')


</body>

</html>
