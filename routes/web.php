<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\PropertyController;
use App\Models\Category;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $divisions = DB::table('divisions')->get();
    $categories = Category::query()->get();
    $properties = Property::query()->Active()->where('sell', 1)->get(['property_id', 'image', 'title','category_id'])->take(6);
    return view('user.index', compact('properties', 'divisions','categories'));
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*property */
Route::get('property/list', [App\Http\Controllers\User\PropertyController::class, 'index'])->name('property.list');
Route::get('property/detail/{id}', [App\Http\Controllers\User\PropertyController::class, 'show']);
Route::post('property/search', [App\Http\Controllers\User\PropertyController::class, 'property_search'])->name('property.search');
Route::get('property/division/{id}', [App\Http\Controllers\User\PropertyController::class, 'property_division'])->name('property.division');

/*contact */
Route::post('contact/store', [App\Http\Controllers\User\ContactController::class, 'store'])->name('contact.store');

Route::group(["as"=>'user.', "prefix"=>'user',  "middleware"=>['auth','user']],function(){
    Route::get('dashboard', [App\Http\Controllers\User\UserDashboardController::class, 'index'])->name('dashboard');
    Route::get('logout', [App\Http\Controllers\User\UserDashboardController::class, 'logout'])->name('logout');
    //carts
    Route::get('cart/store/{id}', [App\Http\Controllers\User\CartController::class, 'store'])->name('cart.store');
    Route::get('cart', [App\Http\Controllers\User\CartController::class, 'cart_item'])->name('cart');
    //order
    Route::get('order', [App\Http\Controllers\User\OrderController::class, 'create'])->name('order');
    Route::post('order/store', [App\Http\Controllers\User\OrderController::class, 'store']);
    Route::get('order/list', [App\Http\Controllers\User\OrderController::class, 'order_list'])->name('order.list');
});

Route::group(["as"=>'admin.', "prefix"=>'admin', "middleware"=>['auth','admin']],function(){
    Route::get('dashboard', [App\Http\Controllers\Admin\AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('logout', [App\Http\Controllers\Admin\AdminDashboardController::class, 'logout'])->name('logout');
    Route::get('profile', [App\Http\Controllers\Admin\AdminDashboardController::class, 'profile'])->name('profile');
    /*banner */
    Route::resource('banner', BannerController::class);
    Route::get('banner/status/{id}', [BannerController::class, 'status'])->name('banner.status');
    /*category */
    Route::resource('category', CategoryController::class);
    Route::get('category/status/{id}', [CategoryController::class, 'status'])->name('category.status');
    /*Property */
    Route::resource('property', PropertyController::class);
    Route::get('property/status/{id}', [PropertyController::class, 'status'])->name('property.status');
    //location

    Route::group(["as"=>'location.',"prefix"=>'location'], function(){
        Route::get('division', [LocationController::class, 'division'])->name('division');
        Route::get('districts', [LocationController::class, 'districts'])->name('districts');
    });
    Route::get('contact', [ContactController::class, 'index'])->name('contact');
    Route::get('contact.status/{id}', [ContactController::class, 'status'])->name('contact.status');

});
