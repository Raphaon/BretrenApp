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

use App\Http\Controllers\controlles\AreaController;
use App\Http\Controllers\controlles\MemberController;

Route::get('/', [
"uses" => "controlles\NationController@home",
"as" => "home"
]);


Route::get("/nation", [
    "uses" => "controlles\NationController@index",
    "as" => "nation"
    ]);
Route::get('/member/{MatriMember}', [
    "uses" => "controlles\MemberController@index",
    "as" => "member"
    ]);
Route::get('/areas', "controlles\AreaController@index");

Route::get('/area-details/{areaCode}', [
    "uses" => "controlles\AreaController@index",
    "as" => "area"
    ]);


Route::get('/district-details/{districtCode}', [
    "uses" => "controlles\DistrictController@index",
    "as" => "district"
    ]);

Route::get("/member/transfert/codeMember", [
    "uses" => "MemberController@transfert",
    "as" => "transfertAmember"
]);

Route::get("/church/{churchCode}", [
    "uses" => "controlles\ChurchController@index",
    "as" => "church"
]);

Route::get("/church", [
    "uses" => "controlles\ChurchController@index",
    "as" => "churchUniq"
]);

Route::get("/calendar", [
    "uses" => "controlles\MemberController@calendar",
    "as" => "calendar"
]);


Route::get("/newMember", [
    "uses" => "controlles\MemberController@new",
    "as" => "newMember"
]);

Route::get('/area', [
    "uses" => "controlles\AreaController@stat",
    "as" => "areaStat"
]);


Route::get('/login', [
    "uses" => "controlles\UserController@login",
    "as" => "login"
]);


Route::get('/member', [
    "uses" => "controlles\MemberController@profile",
    "as" => "member"
]);

Route::get('/district', [
    "uses" => "controlles\DistrictController@index",
    "as" => "District"
]);
