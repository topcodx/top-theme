<?php

use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
})->name('home');

Route::get('/change-mode', function (\Illuminate\Http\Request $request) {
    $currentMode = $request->session()->get('theme_mode');

    $newMode = ($currentMode === 'dark') ? 'light' : 'dark';
    $request->session()->put('theme_mode', $newMode);
    return redirect(route('components.bootstrap.buttons'));
})->name('change-mode');

Route::group(['prefix' => 'components', 'as' => 'components.'], function () {

    Route::group(['prefix' => 'bootstrap', 'as' => 'bootstrap.'], function () {

        Route::get('buttons', function () {
            return view('components.bootstrap.buttons');
        })->name('buttons');

        Route::get('form-controls', function () {
            return view('components.bootstrap.form-controls');
        })->name('form-controls');

        Route::get('progress', function () {
            return view('components.bootstrap.progress');
        })->name('progress');

        Route::get('tables', [UserController::class, 'index'])->name('tables');
        Route::get('yajra-tables', [UserController::class, 'dataTableIndex'])->name('yajra-tables');

        Route::get('modal-tab', function () {
            return view('components.bootstrap.modal-tab');
        })->name('modal-tab');

        Route::get('alert', function () {
            return view('components.bootstrap.alert');
        })->name('alert');

        Route::get('badges', function () {
            return view('components.bootstrap.badges');
        })->name('badges');

        Route::get('list', function () {
            return view('components.bootstrap.list');
        })->name('list');

        Route::get('breadcrumb', function () {
                return view('components.bootstrap.breadcrumb');
        })->name('breadcrumb');

        Route::get('carousel', function () {
            return view('components.bootstrap.carousel');
        })->name('carousel');
    });

    Route::group(['prefix' => 'horizontal', 'as' => 'horizontal.'], function () {
        Route::get('horizontal-tables', [UserController::class, 'horizontalTable'])->name('horizontal-tables');
    });

    Route::group(['prefix' => 'plugins', 'as' => 'plugins.'], function () {

        Route::get('toastr', function () {
            return view('plugins.toastr');
        })->name('toastr');
    });

    Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {

        Route::get('login', function () {
            return view('auth.login');
        })->name('login');

        Route::get('signup', function () {
            return view('auth.signup');
        })->name('signup');
    });

    Route::group(['prefix' => 'details', 'as' => 'details.'], function () {

        Route::get('details-1', function () {
            return view('details.details-1');
        })->name('details-1');

        Route::get('details-2', function () {
            return view('details.details-2');
        })->name('details-2');

        Route::get('details-3', function () {
            return view('details.details-3');
        })->name('details-3');

        Route::get('details-4', function () {
            return view('details.details-4');
        })->name('details-4');

        Route::get('details-5', function () {
            return view('details.details-5');
        })->name('details-5');

        Route::get('details-6', function () {
            return view('details.details-6');
        })->name('details-6');

        Route::get('details-7', function () {
            return view('details.details-7');
        })->name('details-7');
    });

    Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
        Route::get('dashboard-1', function () {
            return view('dashboard.dashboard-1');
        })->name('dashboard-1');

        Route::get('dashboard-2', function () {
            return view('dashboard.dashboard-2');
        })->name('dashboard-2');
    });

    Route::group(['prefix' => 'calender', 'as' => 'calender.'], function () {
        Route::get('full-calender', [FullCalenderController::class, 'index'])->name('full-calender');
    });

    Route::group(['prefix' => 'pricing', 'as' => 'pricing.'], function () {
        Route::get('pricing', function () {
            return view('pricing.pricing');
        })->name('pricing');
    });
});


