<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\Admin\PurchaseOrderController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\ExpenseController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CommissionController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\WebBookingController;
use App\Models\Appointment;
use App\Models\Client;
use App\Models\Payment;
use App\Models\Service;
use Illuminate\Support\Carbon;

/*
|--------------------------------------------------------------------------
| Public Website Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    $services = Service::all();
    return view('website.index', compact('services'));
});

Route::get('/about',    fn() => view('website.about'));
Route::get('/service',  fn() => view('website.service'));
Route::get('/price',    fn() => view('website.price'));
Route::get('/gallery',  fn() => view('website.gallery'));
Route::get('/team',     fn() => view('website.team'));
Route::get('/contact',  fn() => view('website.contact'));
Route::get('/blog',     fn() => view('website.blog'));
Route::get('/products', fn() => view('website.products'));
Route::get('/cart',     fn() => view('website.cart'))->name('cart');
Route::get('/checkout', fn() => view('website.checkout'))->name('checkout');

// Public appointment booking (website form)
Route::get('/appointment', [WebBookingController::class, 'create'])->name('web.appointment');
Route::post('/appointment', [WebBookingController::class, 'store'])->name('web.appointment.store');

/*
|--------------------------------------------------------------------------
| Admin Authentication
|--------------------------------------------------------------------------
*/

Route::get('/admin/login',  [AuthController::class, 'showLogin'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('login.attempt');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Admin Dashboard (protected)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/admin/dashboard', function () {
        $totalClients      = Client::count();
        $totalServices     = Service::count();
        $totalRevenue      = Payment::where('status', 'completed')->sum('amount');
        $todayAppointments = Appointment::whereDate('start_time', Carbon::today())->count();

        $recentAppointments = Appointment::with(['client', 'staff'])
            ->whereNotNull('start_time')
            ->orderBy('start_time')
            ->take(5)
            ->get();

        return view('Admin.dashboard', compact(
            'totalClients',
            'totalServices',
            'totalRevenue',
            'todayAppointments',
            'recentAppointments'
        ));
    })->name('admin.dashboard');

    /*
    |--------------------------------------------------------------------------
    | Admin CRUD Routes
    |--------------------------------------------------------------------------
    */

    Route::prefix('admin')->group(function () {

        // Inventory & Supply
        Route::resource('inventory',       InventoryController::class)->only(['index', 'store', 'update', 'destroy']);
        Route::resource('purchase-orders', PurchaseOrderController::class)->only(['index', 'store', 'update', 'destroy']);
        Route::resource('suppliers',       SupplierController::class)->only(['index', 'store', 'update', 'destroy']);

        // Financials
        Route::resource('transactions', TransactionController::class)->only(['index', 'store', 'update', 'destroy']);
        Route::resource('expenses',     ExpenseController::class)->only(['index', 'store', 'update', 'destroy']);

        // Salon Operations
        Route::resource('appointments', AppointmentController::class)->only(['index', 'store', 'update', 'destroy']);
        Route::resource('clients',      ClientController::class)->only(['index', 'store', 'update', 'destroy']);
        Route::resource('services',     ServiceController::class)->only(['index', 'store', 'update', 'destroy']);
        Route::resource('staff',        StaffController::class)->only(['index', 'store', 'update', 'destroy']);
        Route::resource('commissions',  CommissionController::class)->only(['index', 'store', 'update', 'destroy']);

        // Settings
        Route::get('settings',                [SettingController::class, 'index'])->name('settings.index');
        Route::put('settings/general',        [SettingController::class, 'updateGeneral'])->name('settings.update-general');
        Route::put('settings/hours',          [SettingController::class, 'updateHours'])->name('settings.update-hours');
        Route::put('settings/billing',        [SettingController::class, 'updateBilling'])->name('settings.update-billing');
        Route::put('settings/password',       [SettingController::class, 'updatePassword'])->name('settings.update-password');
    });
});
