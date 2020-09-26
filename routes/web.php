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
Route::get('/demo', function () {
    return view('Demo');
});

Route::get('/', function () {
    return view('first');
});
Route::get('/per', function () {
    return view('Person');
});
Route::get('/online', function () {
    return view('third');
});
Route::get('/visa', function () {
    return view('fourth');
});
Route::get('/data', function () {
    return view('Register');
});
Route::get('/ratifed', function()
{
    return view('Ratifed');
});

Route::get('/verify', function()
{
    return view('verify');
});




// Route::get('/payment', function () {
//     return view('payment');
// });
// Route::get('/newdel', function () {
//     return view('adddelegation');
// });
Route::POST('/Register/insert', 'UserController@insert');
Route::get('/Display', 'UserController@display');
Route::get('/ind','UserController@ind');
Route::post('/Search','UserController@Search');
Route::get('/per', 'UserController@perdis');
Route::get('/nd/{vid}','UserController@newdel');
Route::get('/personback','UserController@person');
Route::get('/print','UserController@print');


Route::post('/payment/{data}','DelegationController@delegationadd');
Route::get('/paydel/{data}','DelegationController@paydel');
Route::post('/paied/{data1}','DelegationController@Payment');

Route::post('/ratifed','DelegationController@Ratifed');




Route::get('/cap', function () {
    return view('captcha');
});
Route::get('createcaptcha', 'CaptchaController@create');
Route::post('captcha', 'CaptchaController@captchaValidate');
Route::get('refreshcaptcha', 'CaptchaController@refreshCaptcha');

Route::get('/generate','DelegationController@check');

Route::get('/test', function () {
    return view('test');
});