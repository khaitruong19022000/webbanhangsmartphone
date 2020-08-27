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

Route::get('trangchu',[
   'as'=>'trangchu',
   'uses'=>'PageController@getIndex'
]);

Route::get('sanpham/{id}',[
    'as'=>'sanpham',
    'uses'=>'PageController@getSanpham'
 ]);

 

Route::get('giohang',[
    'as'=>'giohang',
    'uses'=>'PageController@getGiohang'
 ]);

Route::get('gioithieu',[
   'as'=>'gioithieu',
   'uses'=>'PageController@getGioithieu'
]);
Route::get('lienhe',[
   'as'=>'lienhe',
   'uses'=>'PageController@getLienhe'
]);

Route::get('giohang/{id}',[
   'as'=>'themgiohang',
   'uses'=>'PageController@getAddtoCart'
]);


Route::get('xoagiohang/{id}',[
   'as'=>'xoagiohang',
   'uses'=>'PageController@getDeletetoCart'
]);

Route::post('trangchu',[
   'as'=>'dathang',
   'uses'=>'PageController@postCheckout'
]);

Route::get('search',[
   'as'=>'search',
   'uses'=>'PageController@getSearch'
]);

Route::get('dangky',[
   'as'=>'dangky',
   'uses'=>'PageController@getDangky'
]);

Route::post('dangky',[
   'as'=>'dangky',
   'uses'=>'PageController@postDangky'
]);

Route::get('dangnhap',[
   'as'=>'dangnhap',
   'uses'=>'PageController@getDangnhap'
]);

Route::post('dangnhap',[
   'as'=>'dangnhap',
   'uses'=>'PageController@postDangnhap'
]);



