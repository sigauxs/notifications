<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;

use App\Exports\NotificationExport;
use Maatwebsite\Excel\Facades\Excel;
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
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])
->group(function () {
    Route::get('/notifications/create', function () {
        return view('notifications.create');
    });

    Route::resource('notifications',NotificationController::class)->names('notifications');

    Route::get('/excel', function () {
        return Excel::download(new NotificationExport, 'novedades.xlsx');
    });
});


Route::match(['get', 'post'], 'register', function(){ return redirect('/login'); });
Route::match(['get'], '/dashboard', function(){ return redirect('/notifications/create'); });



