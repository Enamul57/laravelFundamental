<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\User;
use App\Http\Controllers\registerController;
use App\Http\Controllers\userController;
use App\Http\Controllers\fetchingAPI;
use App\Http\Controllers\loginController;
use App\Http\Controllers\adduser;
use App\Http\Controllers\memberList;
use App\Http\Controllers\registration;
use App\Http\Controllers\signIn;
use App\Http\Controllers\joinFile;
use App\Http\Controllers\workFieldController;
use App\Http\Controllers\employerController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\bindController;
use App\Mail\SampleMail;
use App\Http\Controllers\JoinDatabase;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */
// $data = "hi , Laravel Programmer";
// $result = Str::of($data)
//     ->ucfirst($data)
//     ->replace('Hi',"Hello")
//     ->camel($data);
// echo $result;
Route::get('/', function () {
    return view('hello');
});
Route::get('user',function(){return view('user');});
Route::post('register',[registerController::class,'validateRegister']);
Route::post('/access',[User::class,'getData']);
Route::get('noaccess',function(){
    return view('noaccess');
});
Route::view('home','home')->middleware('protectedRoute');//route middlware
// Route::group(['middleware'=>['groupMiddleware']],function(){//Group middleware
//     Route::get('/about',function(){
//         return view('about');
//     });
//     Route::get('/contact',function(){return view('contact');});
// });
Route::get('allusers',[fetchingAPI::class,'index']);
Route::get('userlist',[userController::class,'index']);
Route::get('login',function(){
    if(session()->has('user')){
        return redirect('profile');
    }
    return view('login');
});
Route::post('user',[loginController::class,'login']);
Route::get('profile',function(){return view('profile');});
//  Route::get('logout',function(Request $req){
//      if(session()->has('store_data')){
//          session_start();
//             $req->session()->forget(['name','email','phone','password']);
//              $req->session()->flush();
//             //  return view('greeting',['store_data'=>session('store_data')]);
//             return redirect('sign-in');
//      }
//      return redirect('sign-in');
    
//  });
Route::get('add',function(){
    return view('add');
});
Route::post('adduser',[adduser::class,'addmember']);
//Route::post('adduser',[adduser::class,'upload']);

Route::get('member',[memberList::class,'showMember']);
Route::get('delete/{id}',[memberList::class,'deleteData']);
Route::get('edit/{id}',[memberList::class,'showData']);
Route::post('edit',[memberList::class,'update']);
Route::get('sign-in',function(){
    return view('signIn');
});
Route::post('registration',[registration::class,'authentication']);
Route::get('greeting',function(){
    return view('greeting');
});
Route::post('verifySignin',[signIn::class,'signIn']);

Route::group(['middleware'=>['groupMiddleware']], function(){
    Route::get('logout',function(Request $req){
             if(session()->has('store_data')){
                 session_start();
                    $req->session()->forget(['name','email','phone','password']);
                     $req->session()->flush();
                    //  return view('greeting',['store_data'=>session('store_data')]);
                    return redirect('sign-in');
             }
             return redirect('sign-in');
            
         });
   
});
Route::get('/join',[joinFile::class,'joinTwoTableData']);
Route::get('/work',[workFieldController::class,'show']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/employer',[employerController::class,'employerIndex']);
Route::get('/student',[studentController::class,'studentIndex']);
Route::get('/bind/{key:username}',[bindController::class,'index']);
Route::get('/mail',function(){
    return new SampleMail() ;
});
Route::get('/connection',[JoinDatabase::class,'index']);
