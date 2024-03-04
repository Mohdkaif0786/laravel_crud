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
use App\Models\employee;
use App\Http\Controllers\EmployeeController;

Route::view("/addpage","add");
// Route::get("/updatepage/{id}",[EmployeeController::class,"updatePage"])->name("updatepage");
// Route::get("/",[EmployeeController::class,"index"])->name("home");
// Route::get("/employee/{id}",[EmployeeController::class,"singleData"])->name("singledata");
// Route::get("/employee/delete/{id}",[EmployeeController::class,"destroy"])->name("delete");
// Route::post("/employee/update/{id}",[EmployeeController::class,"update"])->name("update");
// Route::post("/employee/add",[EmployeeController::class,"store"])->name("add");
// Route::get("/search",[EmployeeController::class,"showSearchData"])->name("search.data");

Route::controller(EmployeeController::class)->group(function () {
    Route::get("/updatepage/{id}","updatePage")->name("updatepage");
    Route::get("/","index")->name("home");
    Route::get("/employee/{id}","singleData")->name("singledata");
    Route::get("/employee/delete/{id}","destroy")->name("delete");
    Route::post("/employee/update/{id}","update")->name("update");
    Route::post("/employee/add","store")->name("add");
    Route::get("/search","showSearchData")->name("search.data");

});
