<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Food;
use App\Models\Foodchefs;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            return redirect('redirects');
        } else {
            $data = food::all();
            $data2 = foodchefs::all();
            return view("home", compact("data", "data2"));
        }
    }

    public function redirects()
    {
        $data2 = foodchefs::all();
        $data = food::all();
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            $orders = Order::all();
            $count_order=Order::count();
            $count_food=Food::count();
            $count_chef=Foodchefs::count();
            $count_reservation=Reservation::count();
            $count_user=User::count();

            return view("admin.adminhome", compact('orders','count_order','count_food','count_chef','count_reservation','count_user'));
        } else {
            $user_id = Auth::id();
            $count = cart::where('user_id',$user_id )->count();
            return view("home", compact('data','data2','count'));
        }
    }

    public function addcart(Request $request, $id)
    {
        if (Auth::id()) {
            $user_id = Auth::id();
            // dd($user_id);
            $foodid = $id;
            $quantity = $request->quantity;

            $cart = new cart;
            $cart->user_id = $user_id;
            $cart->food_id = $foodid;
            $cart->quantity = $quantity;
            $cart->save();

            return redirect()->back();
        } else {
            return redirect('/login');
        }
    }
        public function showcart(Request $request, $id){
            $count = cart::where('user_id',$id)->count();
            if(Auth::id()==$id){

                // $shares = DB::table('users')
                // ->leftjoin('followers', 'users.user_id', '=', 'followers.follower_id')
                // ->leftjoin('shares', 'shares.user_id', '=', 'users.id')
                // ->where('users.id', 3)
                // ->get();

                // SELECT * FROM `carts` join food on carts.food_id=food.id where carts.user_id=1;

                $data = DB::table('carts')
                ->selectRaw('carts.id,carts.food_id,carts.user_id,carts.quantity,food.title,food.price')
                ->join('food','carts.food_id','=','food.id')
                ->where('carts.user_id', '=', $id)->get();

                // $data = cart::where('user_id',$id)->join('food','carts.food_id', '=', 'food.id')->get();
                // $data2 = cart::select('*')->where('user_id', '=', $id)->get();
                return view('showcart', compact('count','data'));
            }
            else{
            return redirect()->back();
            }
    }

    public function remove($id){
        $data=cart::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function orderconfirm(Request $request){

        foreach($request->foodname as $key =>$foodname)
        {
            $data = new order;
            $data->foodname = $foodname;
            $data->price = $request->price[$key];
            $data->quantity = $request->quantity[$key];
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->address;

            $data->save();
        }

        return redirect()->back();
    }
}

