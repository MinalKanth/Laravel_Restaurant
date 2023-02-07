<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use Illuminate\Support\Facades\Storage;
class FoodController extends Controller
{
// set food page view
public function fview() {
    return view('admin.food');
}

// handle fetch all eamployees ajax request
public function ffetchAll() {
    $emps = Food::all();
    $output = '';
    if ($emps->count() > 0) {
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
        foreach ($emps as $emp) {
            $output .= '<tr>
            <td>' . $emp->id . '</td>
            <td><img src="storage/foodimage/' . $emp->image . '" width="50" class="img-thumbnail rounded-circle"></td>
            <td>' . $emp->title . '</td>
            <td>' . $emp->price . '</td>
            <td>' . $emp->description . '</td>
            <td>
              <a href="#" id="' . $emp->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="bi-pencil-square h4"></i></a>

              <a href="#" id="' . $emp->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
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
public function fstore(Request $request) {
    $file = $request->file('image');
    $fileName = time() . '.' . $file->getClientOriginalExtension();
    $file->storeAs('public/foodimage', $fileName);

    $empData = ['title' => $request->title,
                'price' => $request->price,
                'description' => $request->description,
                'image' => $fileName];
    Food::create($empData);
    return response()->json([
        'status' => 200,
    ]);
}

// handle edit an Food ajax request
public function fedit(Request $request) {
    $id = $request->id;
    $emp = Food::find($id);
    return response()->json($emp);
}

// handle update an Food ajax request
public function fupdate(Request $request) {
    $fileName = '';
    $emp = Food::find($request->emp_id);
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/foodimage/', $fileName);
        if ($emp->image) {
            Storage::delete('public/foodimage/' . $emp->image);
        }
    } else {
        $fileName = $request->emp_image;
    }

    $empData = ['title' => $request->title, 'price' => $request->price, 'description' => $request->description, 'image' => $fileName];

    $emp->update($empData);
    return response()->json([
        'status' => 200,
    ]);
}

// handle delete an Food ajax request
public function fdelete(Request $request) {
    $id = $request->id;
    $emp = Food::find($id);
    if (Storage::delete('storage/foodimage/' . $emp->image)) {
        Food::destroy($id);
    }
}
}
