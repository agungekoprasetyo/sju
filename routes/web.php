<?php

use App\Models\Admin\Merchants;
use Illuminate\Support\Facades\Auth;
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
    // return view('welcome');
    return view('landing');
});

Route::get('/menu/{merchants:slug}','MerchantController@show');

Route::get('menu', 'MenuController@index');
Route::get('syarat', 'MenuController@syarat');
Route::get('faq', 'MenuController@faq');
Route::get('kebijakan', 'MenuController@kebijakan');
Route::get('tentang', 'MenuController@tentang');



Auth::routes();
Route::prefix('admin')->group(function () {

    // Route::get('/', function () {
    //     return view('admin.dashboard');
    // });
    Route::get('/', 'Admin\DashboardController@index');


    Route::get('roles', 'Admin\RolesController@index');
    Route::get('roles/dt', 'Admin\RolesController@dt');
    Route::post('roles/edit', 'Admin\RolesController@edit');
    Route::post('roles/update', 'Admin\RolesController@update');
    Route::post('roles/insert', 'Admin\RolesController@insert');
    Route::delete('roles/delete', 'Admin\RolesController@delete');

    Route::get('users', 'Admin\UsersController@index');
    Route::get('users/dt', 'Admin\UsersController@dt');
    Route::post('users/edit', 'Admin\UsersController@edit');
    Route::post('users/update', 'Admin\UsersController@update');
    Route::post('users/insert', 'Admin\UsersController@insert');
    Route::delete('users/delete', 'Admin\UsersController@delete');

    Route::get('merchants', 'Admin\MerchantsController@index');
    Route::get('merchants/dt', 'Admin\MerchantsController@dt');
    Route::post('merchants/edit', 'Admin\MerchantsController@edit');
    Route::post('merchants/update', 'Admin\MerchantsController@update');
    Route::post('merchants/insert', 'Admin\MerchantsController@insert');
    Route::delete('merchants/delete', 'Admin\MerchantsController@delete');
    Route::post('merchants/activate', 'Admin\MerchantsController@activate');

    Route::get('categories', 'Admin\CategoriesController@index');
    Route::get('categories/dt', 'Admin\CategoriesController@dt');
    Route::post('categories/edit', 'Admin\CategoriesController@edit');
    Route::post('categories/update', 'Admin\CategoriesController@update');
    Route::post('categories/insert', 'Admin\CategoriesController@insert');
    Route::delete('categories/delete', 'Admin\CategoriesController@delete');

    Route::get('menus', 'Admin\MenusController@index');
    Route::get('menus/dt', 'Admin\MenusController@dt');
    Route::post('menus/edit', 'Admin\MenusController@edit');
    Route::post('menus/update', 'Admin\MenusController@update');
    Route::post('menus/insert', 'Admin\MenusController@insert');
    Route::delete('menus/delete', 'Admin\MenusController@delete');

    Route::get('qr', 'Admin\QrController@index');
    Route::get('qr/generateqr', 'Admin\QrController@generateqr');
    #### END ADMIN ####
    //Dont Delete Comment Above

});

Route::prefix('engine')->group(function () {
    Route::get('/', 'Crudgenerator\EngineController@index');
    Route::post('/get-column', 'Crudgenerator\EngineController@get_column');
    Route::post('/generate', 'Crudgenerator\EngineController@generate');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
