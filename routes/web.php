<?php

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

//Route::get('test', function(){
//    $roles = \App\Role::query()->select('id')->get()->toArray();
////    print_r($roles);exit;
////    foreach ($roles as $role){
////        print_r($role['id']);exit;
////    }
//
////    print_r($des);exit;
////    return $role['id'];
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/agent/dashboard', 'HomeController@agentDashboard');
Route::get('/staff/dashboard', 'HomeController@staffDashboard');
Route::get('/member/dashboard', 'HomeController@memberDashboard');