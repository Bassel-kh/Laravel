<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class phpinfo extends Controller
{
    //
    public function getinfo(){
        return view('phpInfoView');
    }
}
