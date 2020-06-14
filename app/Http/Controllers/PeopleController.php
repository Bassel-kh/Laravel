<?php
// by B-kh
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeopleController extends Controller
{
    // by B-kh
    public function welcome(){
        $name = request('name');
        $age = request('age');

        // method 1 to Pass the variables
            // return view('hello', [
            //     'name' => $name,
            //     'age' => $age
            // ]);
        // method 2 to Pass the variables
        return view('hello1', compact('name', 'age'));
    }
}
