<?php

use App\Http\Controllers\AdsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
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
    return view('layouts.main');
});

Auth::routes();

Route::group(['middleware' => 'auth' ] ,function(){
    
    Route::group(['middleware' => 'admin'] ,function(){

    //Countries 
    Route::get('showCountries',  [CountryController::class,'show'])->name('showContries');
    Route::get('addCountriy'  ,  [CountryController::class,'add'] )->name('addContry');
    Route::post('store'       ,  [CountryController::class,'store'])->name('storeContry');
    Route::get('edit/{id}'    ,  [CountryController::class,'edit'])->name('editContry');
    Route::post('update/{id}' ,  [CountryController::class,'update'])->name('updateContry');
    Route::get('delete/{id}'  ,  [CountryController::class,'delete'])->name('deleteContry');

    //Cites 
    Route::get('showCites'        ,  [CityController::class,'show'])->name('showCity');
    Route::get('addCity'          ,  [CityController::class,'add'] )->name('addCity');
    Route::post('storeCity'       ,  [CityController::class,'store'])->name('storeCity');
    Route::get('editCity/{id}'    ,  [CityController::class,'edit'])->name('editCity');
    Route::post('updateCity/{id}' ,  [CityController::class,'update'])->name('updateCity');
    Route::get('deleteCity/{id}'  ,  [CityController::class,'delete'])->name('deleteCity');


    //Categories 
    Route::get('showCategories'       ,  [CategoryController::class,'show'])->name('showCategories');
    Route::get('addCategory'          ,  [CategoryController::class,'add'] )->name('addCategory');
    Route::post('storeCategory'       ,  [CategoryController::class,'store'])->name('storeCategory');
    Route::get('editCategory/{id}'    ,  [CategoryController::class,'edit'])->name('editCategory');
    Route::post('updateCategory/{id}' ,  [CategoryController::class,'update'])->name('updateCategory');
    Route::get('deleteCategory/{id}'  ,  [CategoryController::class,'delete'])->name('deleteCategory');

    } );


      //Ads 
      Route::get('showAds'        ,  [AdsController::class,'show'])->name('showCategories');
      Route::get('addAd'          ,  [AdsController::class,'add'] )->name('addAd');
      Route::post('storeAd'       ,  [AdsController::class,'store'])->name('storeAd');
      Route::get('editAd/{id}'    ,  [AdsController::class,'edit'])->name('editAd');
      Route::post('updateAd/{id}' ,  [AdsController::class,'update'])->name('updateAd');
      Route::get('deleteAd/{id}'  ,  [AdsController::class,'delete'])->name('deleteAd');

  

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


