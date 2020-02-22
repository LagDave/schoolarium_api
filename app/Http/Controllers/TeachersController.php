<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeachersController extends Controller
{
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'first_name'=> 'required|max:255',
            'last_name'=> 'required|max:255',
            'user_name'=> 'required|max:255|unique:teachers',
            'middle_name'=> 'required|max:255',
            'subject'=>'required|max:255',
            'degree'=>'required|max:255',
            'password'=>'required|max:255',
            'confirm_password'=>'required|same:password|max:255'
        ]);
        
        if($validator->fails()){
            return response()->json(['errors'=>$validator->errors()]);
        }else{
            return Teacher::create($validator->valid());
        }

    }
}
