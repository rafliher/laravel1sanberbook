<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //recieve first and last name to return full name
    public function mergeName(Request $request){
        
        $fname = $request['first_name'];
        $lname = $request['last_name'];

        if($fname==''||$lname=='')
            return 'isi form yang bener jangan bandel';

        return view('welcome', ["name" => "$fname $lname"]);
    }
}
