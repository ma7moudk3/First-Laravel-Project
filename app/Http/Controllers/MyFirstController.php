<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{

    //Pass values from controller into view
    public function get_my_name(){
       $firstName = "Mahmoud";
       $lastName = "Ibrahim";
       $fullName = "$firstName $lastName";
       $grades = [90,65,85,80];

       return view('profile.grades') -> with ('name',$fullName) -> with('grades',$grades);
    }

    //pass data from link into contoller into view (path parameeter)
    public function get_student($studentId){
        return view('profile.student') -> with ('studentId',$studentId);
     }
}
