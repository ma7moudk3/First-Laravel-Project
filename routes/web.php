<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('student/myGrades','App\Http\Controllers\MyFirstController@get_my_name');

Route::get('student/student_details/student={studentId}','App\Http\Controllers\MyFirstController@get_student');
