<?php

use App\Http\Controllers\Admin\AppSettingsController;
use App\Http\Controllers\Admin\BgContentController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CollectionController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Client\CProduct;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::middleware('splade')->group(function () {
    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    Route::get('/', function () {
        return to_route('home');
    });
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::view('/product-details', 'client.product-detail')->name('product-details');
    Route::view('/shop-grid', 'client.shop-grid')->name('shop-grid');
    Route::view('/checkout', 'client.checkout')->name('checkout');
    Route::view('/cart', 'client.cart')->name('cart');
    Route::view('/login', 'auth.client.login')->name('login');
    Route::view('/register', 'auth.client.register')->name('register');
    Route::view('/forgot-password', 'auth.client.forgot-password')->name('forgot-password');
    Route::view('/app-settings', 'admin.appSettings.form')->name('app-settings');
    Route::view('/bg-content', 'admin.bgContent.form')->name('bg-content');

    Route::resources([
        'app-settings' => AppSettingsController::class,
        'bg-content'   => BgContentController::class,
        'collection'   => CollectionController::class,
        'categories'   => CategoryController::class,
        'products'     => ProductController::class,
        'inventory'    => InventoryController::class,
    ]);
    Route::get('inventory/create/{uuid}', [InventoryController::class, 'create'])->name('inventory.create');



    Route::resources([
        'c-products' => CProduct::class,
    ]);



    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['verified'])->name('dashboard');

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__ . '/auth.php';
});
