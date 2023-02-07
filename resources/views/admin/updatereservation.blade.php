<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/">
    @include('admin.admincss')
</head>

<body>
    <h4>Table Reservation</h4>
    <div class="container-scroller">
        @include('admin.navbar')
        <div class="container-fluid">
            <div style="position: relative; top: 60px; right: -150px">
                <form action="{{ url('/updatereservation', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Your Name*" required="" value="{{ $data->name }}" style="color:white">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                value="{{ $data->email }}" style="color:white">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputphone4">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                value="{{ $data->phone }}" style="color:white">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputtime4">Time</label>
                            <input type="time" class="form-control" id="time" name="time"
                                value="{{ $data->time }}" style="color:white">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputdate4">Date </label>
                            <input type="date" class="form-control" id="date" name="date"
                                value="{{ $data->date }}" style="color:white" required>
                        </div>
                    </div>
                    <div class="form-group  col-md-6">
                        <label for="inputmessage">Number Of Guests</label>
                        <br>
                        <select value="guest" name="guest" id="number-guests" required style="color:black">
                            <option value="{{ $data->guest }}" selected disabled>{{ $data->guest }}</option>
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
                    </div>
                    <div class="form-group  col-md-6">
                        <label for="inputAddress">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" id="message" name="message" rows="3"
                            style="color:white">{{ $data->message }}</textarea>
                    </div>
                    <button type="submit" value="Save" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        @include('admin.adminscript')


</body>

</html>
