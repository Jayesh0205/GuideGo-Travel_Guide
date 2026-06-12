<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use App\Http\Controllers\TouristPlaceController;
use App\Models\TouristPlace;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/destinations', 'destinations')
    ->name('destinations');

Route::get(
    '/district/{district}',
    [DistrictController::class, 'show']
)
    ->name('district.show');

Route::get('/shendurni', function () {
    return view('shendurni');
});

Route::get('/jamner', function () {
    return view('jamner');
});

Route::get('/jalgaon', function () {
    return view('jalgaon');
});

Route::get('/jal', function () {
    return view('welcome');
});

Route::post(
    '/favorite',
    [FavoriteController::class, 'store']
);



// Authorisathion routes



Route::post('/register', [AuthController::class, 'register'])
    ->name('register');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login');

Route::get('/logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


Route::middleware('auth')->group(function () {

    Route::get('/destinations', function () {
        return view('destinations');
    });

});

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::get('/profile', function () {
    return view('profile');
})->middleware('auth');

Route::post(
    '/favorite',
    [FavoriteController::class, 'store']
)
    ->middleware('auth');







// Admin routes


Route::get('/admin', function () {

    if (!session('admin_logged_in')) {
        return redirect('/admin/login');
    }

    return view('admin.dashboard');
});


Route::get('/admin/logout', function () {

    session()->forget('admin_logged_in');

    return redirect('/admin/login');

});



Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::post('/admin/login', function (Request $request) {

    if (
        $request->email == 'admin@guidego.com' &&
        $request->password == '123456'
    ) {

        session(['admin_logged_in' => true]);

        return redirect('/admin');
    }

    return back();
});





// tourist place routes

Route::get('/admin/place/add', function () {

    if (!session('admin_logged_in')) {
        return redirect('/admin/login');
    }

    return view('admin.add-place');

});

Route::post(
    '/admin/place/store',
    [TouristPlaceController::class, 'store']
);

Route::get(
    '/admin/places',
    [TouristPlaceController::class, 'index']
);

Route::get(
    '/admin/places/{id}/edit',
    [TouristPlaceController::class, 'edit']
);


Route::get('/admin/places', [TouristPlaceController::class, 'index'])
    ->name('admin.places.index');

Route::put(
    '/admin/places/{id}/edit',
    [TouristPlaceController::class, 'edit']
)
    ->name('admin.places.edit');

Route::get('/admin/places/{id}/edit', [TouristPlaceController::class, 'edit'])->name('admin.places.edit');
Route::post('/admin/places/{id}', [TouristPlaceController::class, 'update'])->name('admin.places.update');
Route::delete('/admin/places/{id}', [TouristPlaceController::class, 'destroy'])->name('admin.places.destroy');

Route::put(
    '/admin/places/{id}',
    [TouristPlaceController::class, 'update']
)
    ->name('admin.places.update');