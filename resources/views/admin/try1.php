


        <div class="container-fluid" style="width: 50%; margin : 10%;">
            <div class="card-body">
                <table class="table table-success table-striped" id="datatablesSimple">
                    <thead>
                        <tr>
                            <th scope="col"># User Id </th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $user)
                            <tr>
                                {{--  <th scope="row">{{ $loop->iteration }}</th>  --}}
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                @if ($user->usertype == '0')
                                    <td><a type="button" class="btn btn-danger btn-sm"
                                            href="{{ url('/deleteuser', $user->id) }}">Delete</a></td>
                                @else
                                    <td>Not Allowed</td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{--  {!! $data->links() !!}  --}}
            </div>

        </div>