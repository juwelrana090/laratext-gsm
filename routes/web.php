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
    Route::get('/', 'DashboardController@index')->name('home');

    Route::get('/about-us', 'DashboardController@aboutUs')->name('about.us');
    Route::get('/contact-us', 'DashboardController@contactUs')->name('contact.us');
    Route::post('/add-touch', 'DashboardController@addGetInTouch')->name('add.get.in.touch');

    Route::group(['prefix' => 'businesses'], function () {
        Route::get('/', 'DashboardController@businessList')->name('business.list');
        Route::get('/category', 'DashboardController@businessCategory')->name('business.category');
        Route::get('/category/{slug}', 'DashboardController@businessListCategory')->name('business.list.category');
        Route::get('/{slug}', 'DashboardController@businessDetails')->name('business.details');
    });

    Route::group(['prefix' => 'expert'], function () {
        Route::get('/', 'DashboardController@expertList')->name('expert.list');
        Route::get('/category', 'DashboardController@expertCategory')->name('expert.category');
        Route::get('/category/{slug}', 'DashboardController@expertListCategory')->name('expert.list.category');
        Route::get('/{slug}', 'DashboardController@expertDetails')->name('expert.details');
    });

    Route::group(['prefix' => 'product'], function () {
        Route::get('/', 'DashboardController@productList')->name('product.list');
        Route::get('/category', 'DashboardController@productCategory')->name('product.category');
        Route::get('/category/{id}', 'DashboardController@productListCategory')->name('product.list.category');
        Route::get('/brand/{id}', 'DashboardController@productListBrands')->name('product.list.brand');
        Route::get('/{slug}', 'DashboardController@productDetails')->name('product.details');
    });

    Route::group(['prefix' => 'brand'], function () {
        Route::get('/', 'DashboardController@brandsList')->name('brand.list');
        Route::get('/{slug}', 'DashboardController@brandDetails')->name('brand.details');
    });

    Route::group(['prefix' => 'locations-list'], function () {
        Route::get('/', 'DashboardController@locationsList')->name('locations.list');
        Route::get('/{slug}', 'DashboardController@locationsListView')->name('locations.list.view');
    });

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', 'DashboardController@blogList')->name('blog.list');
        Route::get('/category', 'DashboardController@blogCategory')->name('blog.category');
        Route::get('/{slug}', 'DashboardController@blogDetails')->name('blog.details');
    });

    Route::get('/add-listing', 'DashboardController@listing')->name('listing');
    Route::post('/experts-create', 'DashboardController@expertsCreate')->name('experts.create');
    Route::post('/business-create', 'DashboardController@businessCreate')->name('business.create.home');
    Route::get('/terms-and-conditions', 'DashboardController@termsConditions')->name('terms-and-conditions');
    Route::get('/privacy-policy', 'DashboardController@privacyPolicy')->name('privacy-policy');


    Route::get('/about_us', 'DashboardController@abouts')->name('about_us');

    /*
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
    Route::post('/store/contact/form', 'DashboardController@contact_form')->name('store_contact_form');

    Route::get('/mobile_search_page', 'DashboardController@mobile_search_page')->name('mobile_search_page');*/
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
    Route::resource('car_sub_category', 'CarSubCategoriesController', ['names' => 'admin.car_sub_category']);
    Route::resource('car_models', 'CarModelController', ['names' => 'admin.car_models']);
    Route::resource('fuel_types', 'FuelTypeController', ['names' => 'admin.fuel_types']);
    Route::resource('m_conditions', 'MConditionController', ['names' => 'admin.m_conditions']);
    Route::resource('wheels', 'WheelController', ['names' => 'admin.wheels']);
    Route::resource('show_rooms', 'ShowRoomController', ['names' => 'admin.show_rooms']);
    Route::resource('expert_status', 'ExpertController', ['names' => 'admin.expert_status']);


    Route::group(['prefix' => 'blogs'], function () {
        Route::get('/', 'BlogsController@index')->name('blogs.index');
        Route::get('/create', 'BlogsController@create')->name('blogs.create');
        Route::post('/store', 'BlogsController@store')->name('blogs.store');
        Route::get('/edit/{id}', 'BlogsController@edit')->name('blogs.edit');
        Route::put('/update/{id}', 'BlogsController@update')->name('blogs.update');
        Route::delete('/destroy/{id}', 'BlogsController@destroy')->name('blogs.destroy');

        Route::group(['prefix' => 'category'], function () {
            Route::get('/', 'BlogCategoriesController@index')->name('blogs.category.index');
            Route::post('/create', 'BlogCategoriesController@create')->name('blogs.category.create');
            Route::get('/edit/{id}', 'BlogCategoriesController@edit')->name('blogs.category.edit');
            Route::put('/update/{id}', 'BlogCategoriesController@update')->name('blogs.category.update');
            Route::delete('/destroy/{id}', 'BlogCategoriesController@destroy')->name('blogs.category.destroy');
        });
    });

    Route::group(['prefix' => 'plans'], function () {
        Route::get('/', 'PlansController@index')->name('plans.index');
        Route::post('/update/{id}', 'PlansController@update')->name('plans.update');
        Route::post('/subscribe', 'PlansController@subscribe')->name('plans.subscribe');
        Route::get('/subscribe-list', 'PlansController@subscribeList')->name('plans.subscribeList');
    });

    Route::group(['prefix' => 'locations'], function () {
        Route::get('/', 'LocationsController@index')->name('locations.index');
        Route::post('/create', 'LocationsController@create')->name('locations.create');
        Route::get('/edit/{id}', 'LocationsController@edit')->name('locations.edit');
        Route::put('/update/{id}', 'LocationsController@update')->name('locations.update');
        Route::delete('/destroy/{id}', 'LocationsController@destroy')->name('locations.destroy');
    });

    Route::group(['prefix' => 'business'], function () {
        Route::get('/', 'BusinessController@index')->name('business.index');
        Route::get('/create', 'BusinessController@create')->name('business.create');
        Route::post('/store', 'BusinessController@store')->name('business.store');
        Route::get('/edit/{id}', 'BusinessController@edit')->name('business.edit');
        Route::post('/update/{id}', 'BusinessController@update')->name('business.update');
        Route::get('/status-update/{id}', 'BusinessController@statusUpdate')->name('business.status_update');
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
        Route::get('/create', 'ExpertsController@create')->name('experts.create');
        Route::post('/store', 'ExpertsController@store')->name('experts.store');
        Route::get('/edit/{id}', 'ExpertsController@edit')->name('experts.edit');
        Route::post('/update/{id}', 'ExpertsController@update')->name('experts.update');
        Route::get('/status-update/{id}', 'ExpertsController@statusUpdate')->name('experts.status_update');
        Route::delete('/destroy/{id}', 'ExpertsController@destroy')->name('experts.destroy');

        Route::group(['prefix' => 'category'], function () {
            Route::get('/', 'ExpertsCategoriesController@index')->name('experts.category.index');
            Route::post('/create', 'ExpertsCategoriesController@create')->name('experts.category.create');
            Route::get('/edit/{id}', 'ExpertsCategoriesController@edit')->name('experts.category.edit');
            Route::put('/update/{id}', 'ExpertsCategoriesController@update')->name('experts.category.update');
            Route::delete('/destroy/{id}', 'ExpertsCategoriesController@destroy')->name('experts.category.destroy');
        });
    });

    Route::group(['prefix' => 'review'], function () {
        Route::get('/', 'ReviewController@index')->name('review.index');
        Route::post('/create', 'ReviewController@create')->name('review.create');
        Route::get('/status-update/{id}', 'ReviewController@statusUpdate')->name('review.status_update');
    });

    Route::group(['prefix' => 'banner'], function () {
        Route::get('/', 'DataController@bannerAdd')->name('banner.index');
        Route::post('/update', 'DataController@bannerUpdate')->name('banner.update');
    });
    Route::group(['prefix' => 'get-in-touch'], function () {
        Route::get('/', 'DataController@touchList')->name('touch.index');
    });

    Route::get('/contact/message', 'DataController@getContactMessage')->name('contact_message');
    Route::get('/car_image_reset/{id}', 'DataController@car_image_reset')->name('car_image_reset');

    Route::get('/get/model/{brand_id}', 'DataController@GetModelByBrandId')->name('get.model');

    Route::get('/assign/showing_place/{car_id}/{pub_place}', 'DataController@assign_showingPlace')->name('assign_showing_place');

    Route::get('/car_image/delete/{car_image_id}', 'DataController@carImageDelete')->name('car.image.delete');


    Route::get('/admin/frontend/settings', 'DataController@frontendSettings')->name('admin.frontend.settings');
    Route::post('/admin/social_media/whatsApp/update', 'DataController@SocialWhatsAppUpdate')->name('admin.social.whatsApp.update');
    Route::post('/admin/office/location/update/{office_name}', 'DataController@OfficeLocationUpdate')->name('admin.setting.office.location_update');


    Route::get('/image/delete/{id}', 'DataController@imageDelete')->name('image.delete');

    Route::get('/admin/frontend/about_us', 'DataController@FrontendAboutUs')->name('admin.frontend.about_us');
    Route::post('/admin/frontend/about_us/update', 'DataController@FrontendAboutUsUpdate')->name('admin.frontend.about_us.update');
});
