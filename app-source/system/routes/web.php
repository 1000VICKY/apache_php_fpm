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

// アプリケーショントップ
Route::get("/", "TopController@index");



Route::post("/estimate/postCreate", "EstimateController@postCreate");
Route::get("/estimate/create", "EstimateController@create");
Route::get("/estimate/{estimateNumber}/{estimateCode}", "EstimateController@index");
