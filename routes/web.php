<?php

use Illuminate\Support\Facades\Route;



Route::get('/roles2', function (){

    return view('vendor.laravelroles.laravelroles.crud.dashboard');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});



Auth::routes(['verify' => true]);


/*
 Asosiy sahifadagi indexlar

*/
Route::group(['prefix' => '/'], function () {
    Route::get('/', 'IndexController@index')->name('site.index');

        Route::group(['prefix' => 'yangiliklar'], function () {
            Route::get('/', 'IndexController@yangiliklar')->name('yangiliklar');
            Route::get('/{slug}', 'IndexController@yangilikShow')->where('slug', '[A-Za-z0-9-_]+')->name('index.yangiliklar');


        });


        Route::group(['prefix' => 'elonlar'], function () {

            Route::get('{slug}', 'IndexController@elonlarShow')->where('slug', '[A-Za-z0-9-_]+')->name('index.elonlar');
        });


});





Route::prefix('home')->group(function () {



    route::get('/', 'HomeController@index')->name('admin');



    Route::prefix('yangiliklar')->middleware('verified')->group(function () {
        route::get('/')->name('sozlamlar.index');

        Route::resource('yangiliklars', 'YangiliklarController');




});



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
        Route::resource('yangiliklarBolimlaris', 'YangiliklarBolimlariController');

        Route::resource('roles', 'RolesController');

        Route::resource('permissions', 'PermissionsController');

        Route::resource('permissionRoles', 'PermissionRoleController');

        Route::resource('permissionUsers', 'PermissionUserController');

        Route::resource('roleUsers', 'RoleUserController');

        Route::resource('videoBanners', 'VideoBannerController');

        Route::resource('counterSettings', 'CounterSettingController');

        Route::resource('footerSliders', 'FooterSliderController');
    });
});

//Route::get('/home', 'HomeController@index')->middleware('verified');

