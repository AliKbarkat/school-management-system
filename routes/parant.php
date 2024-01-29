<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect',
         'localizationRedirect', 'localeViewPath',
         ]
    ], function () {

    //==============================dashboard============================
    Route::get('/parant/dashboard',function ()  {
        return view('Livewire.dashboard');
    })->name('dashboard.parant');
});