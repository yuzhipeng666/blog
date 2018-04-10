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

//Route::get('/', function () {
//    return view('welcome');
//});
//web页面路由
Route::get('/', 'WebHomeController@homepage');
Route::get('/diffusion', 'WebHomeController@diffusion');
Route::get('/promotional', 'WebHomeController@promotional');
Route::get('/sections', 'WebHomeController@sections');
Route::get('/we', 'WebHomeController@we');

//后台管理页面路由
Route::get('/admins', 'AdminHomeController@login');
Route::post('/do_login', 'AdminHomeController@do_login');
Route::get('/dashboard', 'AdminHomeController@dashboard');

//Route::group(['middleware' => 'auth'], function () {
    Route::get('/addadmins', 'AdminHomeController@addadmins');
    //Banner 路由
    Route::post('/bannerListchax', 'AdminHomeController@bannerListchax');
    Route::get('/banner', 'AdminHomeController@bannerList');
    Route::get('/addBanner', 'AdminHomeController@addBanner');
    Route::post('/createBanner', 'AdminHomeController@createBanner');
    Route::get('/deletcBanner/{id}', 'AdminHomeController@deletcBanner');
    Route::get('/upBanner/{id}', 'AdminHomeController@upBanner');
    Route::post('/upsetBanner', 'AdminHomeController@upsetBanner');
    Route::get('/statusBanner/{id}/{status}', 'AdminHomeController@statusBanner');

    //宣传片 路由
    Route::post('/admpromotionalListchax', 'AdminHomeController@admpromotionalListchax');
    Route::get('/admpromotional', 'AdminHomeController@admpromotionalList');
    Route::get('/addAdmpromotional', 'AdminHomeController@addAdmpromotional');
    Route::post('/createAdmpromotional', 'AdminHomeController@createAdmpromotional');
    Route::get('/deletcAdmpromotional/{id}', 'AdminHomeController@deletcAdmpromotional');
    Route::get('/upAdmpromotional/{id}', 'AdminHomeController@upAdmpromotional');
    Route::post('/upsetAdmpromotional', 'AdminHomeController@upsetAdmpromotional');
    Route::get('/statusAdmpromotional/{id}/{status}', 'AdminHomeController@statusAdmpromotional');

    //影视栏目 路由
    Route::post('/admsectionsListchax', 'AdminHomeController@admsectionsListchax');
    Route::get('/admsections', 'AdminHomeController@admsectionsList');
    Route::get('/addAdmsections', 'AdminHomeController@addAdmsections');
    Route::post('/createAdmsections', 'AdminHomeController@createAdmsections');
    Route::get('/deletcAdmsections/{id}', 'AdminHomeController@deletcAdmsections');
    Route::get('/upAdmsections/{id}', 'AdminHomeController@upAdmsections');
    Route::post('/upsetAdmsections', 'AdminHomeController@upsetAdmsections');
    Route::get('/statusAdmsections/{id}/{status}', 'AdminHomeController@statusAdmsections');

    //媒体推广 路由
    Route::post('/admdiffusionListchax', 'AdminHomeController@admdiffusionListchax');
    Route::get('/admdiffusion', 'AdminHomeController@admdiffusionList');
    Route::get('/addAdmdiffusion', 'AdminHomeController@addAdmdiffusion');
    Route::post('/createAdmdiffusion', 'AdminHomeController@createAdmdiffusion');
    Route::get('/deletcAdmdiffusion/{id}', 'AdminHomeController@deletcAdmdiffusion');
    Route::get('/upAdmdiffusion/{id}', 'AdminHomeController@upAdmdiffusion');
    Route::post('/upsetAdmdiffusion', 'AdminHomeController@upsetAdmdiffusion');
    Route::get('/statusAdmdiffusion/{id}/{status}', 'AdminHomeController@statusAdmdiffusion');

    //我们 路由
    Route::post('/admweListchax', 'AdminHomeController@admweListchax');
    Route::get('/admwe', 'AdminHomeController@admweList');
    Route::get('/addAdmwe', 'AdminHomeController@addAdmwe');
    Route::post('/createAdmwe', 'AdminHomeController@createAdmwe');
    Route::get('/deletcAdmwe/{id}', 'AdminHomeController@deletcAdmwe');
    Route::get('/upAdmwe/{id}', 'AdminHomeController@upAdmwe');
    Route::post('/upsetAdmwe', 'AdminHomeController@upsetAdmwe');
    Route::get('/statusAdmwe/{id}/{status}', 'AdminHomeController@statusAdmwe');
//});