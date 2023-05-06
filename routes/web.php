<?php

use App\Models\User;
use Inertia\Inertia;
use App\Models\Ticket;
use App\Models\Payment;

use App\Http\Controllers\DataController;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GlobalSearch;
use Illuminate\Foundation\Application;
use App\Http\Controllers\GlobalSearchController;

// use Inertia\Inertia;
// use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/welcome');
});

Route::get('/welcome', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
});

Route::get('/data', [DataController::class, 'index']);


Route::get('/h', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

//Route to show the product
// Route::get('{slug}', function () {
//     return Inertia::render('ProductShow')->name('products.show');
// });

//Route to submit a new product and redirect to show it
Route::post('products/create', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required',
        'slug' => 'required',
    ]);

    $user_id = $validated['user_id'] = auth()->user()->id;
    $product_slug = $validated['slug'];

    Product::create($validated);

    return redirect()->route('products.show', [$user_id, $product_slug]);
})->name('products.create');



// User search
Route::get('/i', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
