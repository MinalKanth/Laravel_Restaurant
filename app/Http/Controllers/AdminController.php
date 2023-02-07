<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchefs;
use App\Models\Order;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use DataTables;
use Validator;
use Illuminate\Support\Facades\Hash;
use Redirect,Response,DB;
use File;
use PDF;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    // 1 set User page view
    public function index()
    {
        return view('admin.user');
    }

    // handle fetch all employees ajax request
    public function ufetchAll()
    {
        $users = User::all();
        $output = '';
        if ($users->count() > 0) {
            $output .= '<table class="table table-striped table-sm text-center align-middle">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>';
            foreach ($users as $user) {
                $output .= '<tr>
            <td>' . $user->id . '</td>
            <td>' . $user->name . '</td>
            <td>' . $user->email . '</td>
            <td>
              <a href="#" id="' . $user->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editUserModal"><i class="bi-pencil-square h4"></i></a>

              <a href="#" id="' . $user->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
            </td>
          </tr>';
            }
            $output .= '</tbody></table>';
            echo $output;
        } else {
            echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }
    }

    // handle insert a new User ajax request
    public function ustore(Request $request)
    {

        $pass = $request->password;
        $postpass = Hash::make($pass);

        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $postpass,
        ];

        user::create($userData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // handle edit an User ajax request
    public function uedit(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        return response()->json($user);
    }

    // handle update an User ajax request
    public function uupdate(Request $request)
    {
        $fileName = '';
        $user = User::find($request->user_id);


        $userData = ['name' => $request->name, 'email' => $request->email];

        $user->update($userData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // handle delete an User ajax request
    public function udelete(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        User::destroy($id);
    }








    // 2 set food page view
    public function fview()
    {
        return view('admin.food');
    }

    // handle fetch all employees ajax request
    public function ffetchAll()
    {
        $foods = Food::all();
        $output = '';
        if ($foods->count() > 0) {
            $output .= '<table class="table table-striped table-sm text-center align-middle">
        <thead>
          <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Title</th>
            <th>Price</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>';
            foreach ($foods as $food) {
                $output .= '<tr>
            <td>' . $food->id . '</td>
            <td><img src="storage/foodimage/' . $food->image . '" width="50" class="img-thumbnail rounded-circle"></td>
            <td>' . $food->title . '</td>
            <td>' . $food->price . '</td>
            <td>' . $food->description . '</td>
            <td>
              <a href="#" id="' . $food->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editFoodModal"><i class="bi-pencil-square h4"></i></a>

              <a href="#" id="' . $food->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
            </td>
          </tr>';
            }
            $output .= '</tbody></table>';
            echo $output;
        } else {
            echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }
    }

    // handle insert a new Food ajax request
    public function fstore(Request $request)
    {
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/foodimage', $fileName);

        $foodData = [
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $fileName
        ];
        Food::create($foodData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // handle edit an Food ajax request
    public function fedit(Request $request)
    {
        $id = $request->id;
        $food = Food::find($id);
        return response()->json($food);
    }

    // handle update an Food ajax request
    public function fupdate(Request $request)
    {
        $fileName = '';
        $food = Food::find($request->food_id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/foodimage/', $fileName);
            if ($food->image) {
                Storage::delete('public/foodimage/' . $food->image);
            }
        } else {
            $fileName = $request->food_image;
        }

        $foodData = ['title' => $request->title, 'price' => $request->price, 'description' => $request->description, 'image' => $fileName];

        $food->update($foodData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // handle delete an Food ajax request
    public function fdelete(Request $request)
    {
        $id = $request->id;
        $food = Food::find($id);
        if (Storage::delete('storage/foodimage/' . $food->image)) {
            Food::destroy($id);
        }
    }







    // 3 set chef page view
    public function cview()
    {
        return view('admin.chef');
    }

    // handle fetch all employees ajax request
    public function cfetchAll()
    {
        $chefs = Foodchefs::all();
        $output = '';
        if ($chefs->count() > 0) {
            $output .= '<table class="table table-striped table-sm text-center align-middle">
        <thead>
          <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Speciality</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>';
            foreach ($chefs as $chef) {
                $output .= '<tr>
            <td>' . $chef->id . '</td>
            <td><img src="storage/chefimage/' . $chef->image . '" width="50" class="img-thumbnail rounded-circle"></td>
            <td>' . $chef->name . '</td>
            <td>' . $chef->speciality . '</td>
            <td>
              <a href="#" id="' . $chef->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editChefModal"><i class="bi-pencil-square h4"></i></a>

              <a href="#" id="' . $chef->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
            </td>
          </tr>';
            }
            $output .= '</tbody></table>';
            echo $output;
        } else {
            echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }
    }

    // handle insert a new chef ajax request
    public function cstore(Request $request)
    {
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/chefimage', $fileName);

        $chefData = [
            'name' => $request->name,
            'speciality' => $request->speciality,
            'image' => $fileName
        ];
        Foodchefs::create($chefData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // handle edit an chef ajax request
    public function cedit(Request $request)
    {
        $id = $request->id;
        $chef = Foodchefs::find($id);
        return response()->json($chef);
    }

    // handle update an chef ajax request
    public function cupdate(Request $request)
    {
        $fileName = '';
        $chef = Foodchefs::find($request->chef_id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/chefimage/', $fileName);
            if ($chef->image) {
                Storage::delete('public/chefimage/' . $chef->image);
            }
        } else {
            $fileName = $request->chef_image;
        }

        $chefData = ['name' => $request->name, 'speciality' => $request->speciality, 'image' => $fileName];

        $chef->update($chefData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // handle delete an chef ajax request
    public function cdelete(Request $request)
    {
        $id = $request->id;
        $chef = Foodchefs::find($id);
        if (Storage::delete('storage/chefimage/' . $chef->image)) {
            Foodchefs::destroy($id);
        }
    }







    // 4 set reservation page view
    public function rview()
    {
        return view('admin.reservation');
    }

    // handle fetch all employees ajax request
    public function rfetchAll()
    {
        $reservations = Reservation::all();
        $output = '';
        if ($reservations->count() > 0) {
            $output .= '<table class="table table-striped table-sm text-center align-middle">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Guest</th>
            <th>Time</th>
            <th>Date</th>
            <th>Message</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>';
            foreach ($reservations as $reservation) {
                $output .= '<tr>
            <td>' . $reservation->id . '</td>
            <td>' . $reservation->name . '</td>
            <td>' . $reservation->email . '</td>
            <td>' . $reservation->phone . '</td>
            <td>' . $reservation->guest . '</td>
            <td>' . $reservation->time . '</td>
            <td>' . $reservation->date . '</td>
            <td>' . $reservation->message . '</td>
            <td>
              <a href="#" id="' . $reservation->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editReservationModal"><i class="bi-pencil-square h4"></i></a>

              <a href="#" id="' . $reservation->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
            </td>
          </tr>';
            }
            $output .= '</tbody></table>';
            echo $output;
        } else {
            echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }
    }

    // handle insert a new reservation ajax request
    public function rstore(Request $request)
    {


        $reservationData = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'guest' => $request->guest,
            'time' => $request->time,
            'date' => $request->date,
            'message' => $request->message,
        ];
        Reservation::create($reservationData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // handle edit an reservation ajax request
    public function redit(Request $request)
    {
        $id = $request->id;
        $reservation = Reservation::find($id);
        return response()->json($reservation);
    }

    // handle update an reservation ajax request
    public function rupdate(Request $request)
    {
        $fileName = '';
        $reservation = Reservation::find($request->reservation_id);

        $reservationData = ['name' => $request->name,
                            'email' => $request->email,
                            'phone' => $request->phone,
                            'guest' => $request->guest,
                            'time' => $request->time,
                            'date' => $request->date,
                            'message' => $request->message,
                            ];

        $reservation->update($reservationData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // handle delete an reservation ajax request
    public function rdelete(Request $request)
    {
        $id = $request->id;
        $reservation = Reservation::find($id);
        if (Storage::delete('storage/reservationimage/' . $request->image)) {
            Reservation::destroy($id);
        }
    }







       // 5 set Order page view
       public function oview()
       {
           return view('admin.order');
       }

       // handle fetch all employees ajax request
       public function ofetchAll()
       {
           $orders = Order::all();
           $output = '';
           if ($orders->count() > 0) {
               $output .= '<table class="table table-striped table-sm text-center align-middle">
           <thead>
             <tr>
               <th>ID</th>
               <th>Food Name</th>
               <th>Price</th>
               <th>Quantity</th>
               <th>Name</th>
               <th>Phone</th>
               <th>Address</th>
               <th>Action</th>
             </tr>
           </thead>
           <tbody>';
               foreach ($orders as $order) {
                   $output .= '<tr>
               <td>' . $order->id . '</td>
               <td>' . $order->foodname . '</td>
               <td>' . $order->price . '</td>
               <td>' . $order->quantity . '</td>
               <td>' . $order->name . '</td>
               <td>' . $order->phone . '</td>
               <td>' . $order->address . '</td>
               <td>
                 <a href="#" id="' . $order->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editOrderModal"><i class="bi-pencil-square h4"></i></a>

                 <a href="#" id="' . $order->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
               </td>
             </tr>';
               }
               $output .= '</tbody></table>';
               echo $output;
           } else {
               echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
           }
       }

       // handle insert a new order ajax request
       public function ostore(Request $request)
       {


           $orderData = [
               'foodname' => $request->foodname,
               'price' => $request->price,
               'quantity' => $request->quantity,
               'name' => $request->name,
               'phone' => $request->phone,
               'address' => $request->address,
           ];
           Order::create($orderData);
           return response()->json([
               'status' => 200,
           ]);
       }

       // handle edit an order ajax request
       public function oedit(Request $request)
       {
           $id = $request->id;
           $order = Order::find($id);
           return response()->json($order);
       }

       // handle update an order ajax request
       public function oupdate(Request $request)
       {

           $order = Order::find($request->order_id);

           $orderData = ['foodname' => $request->foodname,
                               'price' => $request->price,
                               'quantity' => $request->quantity,
                               'name' => $request->name,
                               'phone' => $request->phone,
                               'address' => $request->address,
                               ];

           $order->update($orderData);
           return response()->json([
               'status' => 200,
           ]);
       }

       // handle delete an order ajax request
       public function odelete(Request $request)
       {
           $id = $request->id;
           $order = Reservation::find($id);

               Order::destroy($id);

       }
}
