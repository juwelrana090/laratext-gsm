<?php

use Illuminate\Support\Facades\Artisan;
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

Route::get('/reset', function () {
    Artisan::call('optimize');
    return '<center><h1>System Rebooted!</h1></center>';
})->name('reset');

Route::get('/clear', function () {
    $exitCode = Artisan::call('cache:clear');
    echo '<h1>Cache facade value cleared</h1>';
    $exitCode = Artisan::call('optimize');
    echo '<h1>Optimized class loader</h1>';
    $exitCode = Artisan::call('route:cache');
    echo '<h1>Routes cached</h1>';
    $exitCode = Artisan::call('route:clear');
    echo '<h1>Route cache cleared</h1>';
    $exitCode = Artisan::call('view:clear');
    echo '<h1>View cache cleared</h1>';
    $exitCode = Artisan::call('config:cache');
    echo '<h1>Clear Config cleared</h1>';
});

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'DashboardController@index')->name('welcome');

    Route::get('/bestcool/brands', 'DashboardController@brands')->name('bestcool.brands');
    Route::get('/bestcool/brands/details/{id}/{brand_type}', 'DashboardController@brandsDetails')->name('bestcool.brand.details');
    Route::get('/product/details/{id}/{sulug?}/{slug?}', 'DashboardController@details')->name('car.details');

    Route::get('/car/all', 'GlobalController@carAll')->name('car.all');

    Route::get('/car/brand/{id}', 'GlobalController@getCarByBrand')->name('car.by.brand');
    Route::get('/car/vehicle_brand/{id}', 'GlobalController@vehicle_brand')->name('car.by.vehicle_brand');

    Route::get('/car/category/car_type/{id}', 'GlobalController@categoryBrand')->name('car.search.by.car_type_id');
    Route::get('/car/category/car_type/{car_type_id}/{brand_id}', 'GlobalController@carType')->name('car.search.by.car_type_id.brand_id');
    // Route::get('/car/category/car_type/{id}','GlobalController@carType')->name('car.search.by.car_type_id');
    Route::get('/new_arrivals/car', 'GlobalController@newArrivals')->name('new_arrivals.car');
    Route::get('/bestSelling/car', 'GlobalController@bestSelling')->name('best_selling.car');

    Route::get('/search/get/filter/car', 'GlobalController@searchGetFilter')->name('search.get.filter');

    Route::get('/get/brand/model/{brand_id}', 'GlobalController@getBrandModel')->name('get.brand.model');



    // Route::get('/search/model/brand/title/{name}','GlobalController@searchAuto')->name('search.brand.model.title');
    Route::get('/search/model/brand/title', 'GlobalController@searchAuto')->name('search.brand.model.title');
    Route::get('/get/filter', 'GlobalController@filter')->name('get.filter');

    Route::get('/service', 'DashboardController@service')->name('service');

    Route::get('/contact', 'DashboardController@contact')->name('contact');
    Route::get('/about_us', 'DashboardController@abouts')->name('about_us');
    Route::post('/store/contact/form', 'DashboardController@contact_form')->name('store_contact_form');

    Route::get('/mobile_search_page', 'DashboardController@mobile_search_page')->name('mobile_search_page');
});

Auth::routes(['register' => false, 'verify' => false,]);

Route::group(['namespace' => 'Backend', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::post('/user/change/password', 'DashboardController@change_password')->name('user.change_password');

    Route::resource('roles', 'RoleController', ['names' => 'admin.roles']);
    Route::resource('users', 'UserController', ['names' => 'admin.users']);


    Route::resource('products', 'CarController', ['names' => 'admin.cars']);
    Route::resource('brands', 'BrandsController', ['names' => 'admin.brands']);
    Route::resource('colors', 'ColorController', ['names' => 'admin.colors']);
    Route::resource('car_types', 'CarTypeController', ['names' => 'admin.car_types']);
    Route::resource('car_models', 'CarModelController', ['names' => 'admin.car_models']);
    Route::resource('fuel_types', 'FuelTypeController', ['names' => 'admin.fuel_types']);
    Route::resource('m_conditions', 'MConditionController', ['names' => 'admin.m_conditions']);
    Route::resource('wheels', 'WheelController', ['names' => 'admin.wheels']);
    Route::resource('show_rooms', 'ShowRoomController', ['names' => 'admin.show_rooms']);
    Route::resource('expert_status', 'ExpertController', ['names' => 'admin.expert_status']);

    Route::group(['prefix' => 'business'], function () {
        Route::get('/', 'BusinessController@index')->name('business.index');
        Route::get('/create', 'BusinessController@create')->name('business.create');
        Route::post('/store', 'BusinessController@store')->name('business.store');
        Route::get('/edit/{id}', 'BusinessController@edit')->name('business.edit');
        Route::put('/update/{id}', 'BusinessController@update')->name('business.update');
        Route::delete('/destroy/{id}', 'BusinessController@destroy')->name('business.destroy');

        Route::group(['prefix' => 'category'], function () {
            Route::get('/', 'BusinessCategoriesController@index')->name('business.category.index');
            Route::post('/create', 'BusinessCategoriesController@create')->name('business.category.create');
            Route::get('/edit/{id}', 'BusinessCategoriesController@edit')->name('business.category.edit');
            Route::put('/update/{id}', 'BusinessCategoriesController@update')->name('business.category.update');
            Route::delete('/destroy/{id}', 'BusinessCategoriesController@destroy')->name('business.category.destroy');
        });

        Route::group(['prefix' => 'team-members'], function () {
            Route::get('/', 'TeamMembersController@index')->name('business.team_members.index');
            Route::get('/create', 'TeamMembersController@create')->name('business.team_members.create');
            Route::post('/store', 'TeamMembersController@store')->name('business.team_members.store');
            Route::get('/edit/{id}', 'TeamMembersController@edit')->name('business.team_members.edit');
            Route::post('/update/{id}', 'TeamMembersController@update')->name('business.team_members.update');
            Route::delete('/destroy/{id}', 'TeamMembersController@destroy')->name('business.team_members.destroy');
        });
    });

    Route::group(['prefix' => 'experts'], function () {
        Route::get('/', 'ExpertsController@index')->name('experts.index');
        Route::post('/create', 'ExpertsController@create')->name('experts.create');
        Route::get('/edit/{id}', 'ExpertsController@edit')->name('experts.edit');
        Route::put('/update/{id}', 'ExpertsController@update')->name('experts.update');
        Route::delete('/destroy/{id}', 'ExpertsController@destroy')->name('experts.destroy');

        Route::group(['prefix' => 'category'], function () {
            Route::get('/', 'ExpertsCategoriesController@index')->name('experts.category.index');
            Route::post('/create', 'ExpertsCategoriesController@create')->name('experts.category.create');
            Route::get('/edit/{id}', 'ExpertsCategoriesController@edit')->name('experts.category.edit');
            Route::put('/update/{id}', 'ExpertsCategoriesController@update')->name('experts.category.update');
            Route::delete('/destroy/{id}', 'ExpertsCategoriesController@destroy')->name('experts.category.destroy');
        });
    });



    Route::get('/contact/message', 'DataController@getContactMessage')->name('contact_message');
    Route::get('/car_image_reset/{id}', 'DataController@car_image_reset')->name('car_image_reset');

    Route::get('/get/model/{brand_id}', 'DataController@GetModelByBrandId')->name('get.model');

    Route::get('/assign/showing_place/{car_id}/{pub_place}', 'DataController@assign_showingPlace')->name('assign_showing_place');

    Route::get('/car_image/delete/{car_image_id}', 'DataController@carImageDelete')->name('car.image.delete');


    Route::get('/admin/frontend/settings', 'DataController@frontendSettings')->name('admin.frontend.settings');
    Route::post('/admin/social_media/whatsApp/update', 'DataController@SocialWhatsAppUpdate')->name('admin.social.whatsApp.update');
    Route::post('/admin/office/location/update/{office_name}', 'DataController@OfficeLocationUpdate')->name('admin.setting.office.location_update');

    Route::get('/admin/frontend/about_us', 'DataController@FrontendAboutUs')->name('admin.frontend.about_us');
    Route::post('/admin/frontend/about_us/update', 'DataController@FrontendAboutUsUpdate')->name('admin.frontend.about_us.update');
});
