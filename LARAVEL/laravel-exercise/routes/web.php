<?php

use App\Models\Brand;
use App\Models\Department;
use App\Models\Email;
use App\Models\Location;
use App\Models\Staff;
use App\Models\Student;
use Illuminate\Support\Facades\Route;
// use App\Models\StudentMain;
// use App\Models\StudentSub;
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

// Route::get('/la', function () {
//     return view('layouts.default');
// });

// Route::view('/home','home');
// Route::view('/contact','contact');

route::get('/home',function(){
    $heading='<h1>Welcome to the Home Page</h1>';
    $no = 1;
    $status = 0;
    $names=['A','B','C','D','E','F'];
    return view('home',compact('heading','no','status','names'));
});

route::get('/contact',function(){
    return view('contact');
});

//------------------------------ONE TO ONE ------------------------------

route::get('getStudentDetailsWithEmail',function (){

    // //STEP 1
    //  $studentMain = Student::find(1);
    //  dd($studentMain);


    //STEP 2
    $students = Student::with('stu_email_datas') ->whereIn('id', [1]) ->get();
    return response()->json($students);

});

route::get('getEmailDetailsWithStudent',function (){

    //STEP 1
    // $emails = Email::find(3);
    // dd($emails);

    // STEP 2
    $emails = Email::with('student_datas')->where('id',1)->get();
    return response()->json($emails);
});


//------------------------------ONE TO MANY ------------------------------

route::get('getStudentDetailsWithLocation',function(){
    //STEP 1
    $students = Student::with('stu_location_datas') ->whereIn('id', [1]) ->get();
    return response()->json($students);
});

route::get('getLocationDetailsWithStudent',function(){
    //STEP 1
    $location = Location::with('student_datas') ->whereIn('id', [1]) ->get();
    return response()->json($location);
});

//------------------------------MANY TO MANY ------------------------------


route::get('getStaffDetailsWithDept',function(){
    //STEP 1
    //  $studentMain = Staff::find(2);
    // $staff  = $studentMain->staff_dept_datas;
    //  dd($studentMain);

    $staff = Staff::with('staff_dept_datas') ->whereIn('id', [1]) ->get();
    return response()->json($staff);
});

route::get('getDeptDetailsWithStaff',function(){
    //STEP 1
    $dept = Department::with('staff_datas') ->whereIn('id', [1]) ->get();
    return response()->json($dept);
});

//------------------------------HAS MANY THROUGH ------------------------------


route::get('getBrandDetails',function(){
    //STEP 1
     $brand = Brand::find(1);
     $product  = $brand->brand_product_datas;
     dd($product);

    // $staff = Staff::with('staff_dept_datas') ->whereIn('id', [2]) ->get();
    // return response()->json($staff);
});

route::get('getDeptDetailsWithStaff',function(){
    //STEP 1
    $dept = Department::with('staff_datas') ->whereIn('id', [1]) ->get();
    return response()->json($dept);
});
