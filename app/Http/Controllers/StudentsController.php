<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentsController extends Controller
{
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'first_name'=> 'required|max:255',
            'last_name'=> 'required|max:255',
            'user_name'=> 'required|max:255|unique:students',
            'middle_name'=> 'required|max:255',
            'grade_level'=>'required|max:255',
            'section'=>'required|max:255',
            'password'=>'required|max:255',
            'confirm_password'=>'required|same:password|max:255'
        ]);

        if($validator->fails()){
            return response()->json(['errors'=>$validator->errors()]);
        }else{
            return Student::create($validator->valid());
        }
    }

    public function destroy(Student $student){
        return response()->json($student->delete());
    }
}
