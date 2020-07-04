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
Route::get('/', 'IndexController@index')->name('site.index');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Auth::routes(['verify' => true]);

Route::prefix('home')->middleware('role:admin')->group(function () {

    route::get('/', 'HomeController@index')->name('admin');


    Route::resource('yangiliklars', 'YangiliklarController');

    Route::resource('yangiliklarBolimlaris', 'YangiliklarBolimlariController');
    
    Route::resource('elonlars', 'ElonlarController');
    
    Route::resource('fanlars', 'FanlarController');
    
    Route::resource('gallereyas', 'GallereyaController');
    
    Route::resource('ilmiyIshlars', 'IlmiyIshlarController');
    
    Route::resource('ilmiyMaqolalars', 'IlmiyMaqolalarController');
    
    Route::resource('mavqelars', 'MavqelarController');
    
    Route::resource('oquvAdabiyotlars', 'OquvAdabiyotlarController');
    
    Route::resource('oquvTuris', 'OquvTuriController');
    
    Route::resource('qabulYilis', 'QabulYiliController');
    
    Route::resource('talabalars', 'TalabalarController');
    
    Route::resource('talabalarGuruhlaris', 'TalabalarGuruhlariController');
    
    Route::resource('oqituvchilars', 'OqituvchilarController');
    
    Route::resource('xamkorlars', 'XamkorlarController');
    
    Route::resource('yonalishKodlaris', 'YonalishKodlariController');
    
    Route::resource('users', 'UsersController');

    
    Route::resource('gallereyaCategories', 'GallereyaCategoryController');


    Route::prefix('/sozlamlar')->middleware('verified')->group(function () {
        route::get('/')->name('sozlamlar.index');
        Route::resource('sliders', 'SlidersController');
    
        Route::resource('gridCards', 'GridCardController');
        
        Route::resource('firstbanners', 'FirstbannerController');
        
        Route::resource('yangilikOptions', 'YangilikOptionsController');
    });
});

//Route::get('/home', 'HomeController@index')->middleware('verified');


Route::resource('roles', 'RolesController');

Route::resource('permissions', 'PermissionsController');

Route::resource('permissionRoles', 'PermissionRoleController');

Route::resource('permissionUsers', 'PermissionUserController');

Route::resource('roleUsers', 'RoleUserController');