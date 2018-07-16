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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return 'Welcome to our home page';
// });

Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/tickets/create','TicketsController@create');
Route::post('/tickets/create','TicketsController@store');
Route::get('/tickets','TicketsController@index');
Route::get('/tickets/{slug?}','TicketsController@show');
Route::get('/tickets/{slug?}/edit','TicketsController@edit');
Route::post('/tickets/{slug?}/edit','TicketsController@update');
Route::post('/tickets/{slug?}/delete','TicketsController@destroy');
Route::get('sendemail',function (){
    $data = ['name' => 'Learning Laravel'];
    Mail::send('emails.welcome',$data,function ($message){
        $message->from('lyhuynh0806@gmail.com','Learning Laravel');
        $message->to('lyhuynh0806@gmail.com')->subject('Learning Laravel test send email');
    });
    return "your email has been sent successfully";
});
Route::post('/comment','CommentsController@newComment');