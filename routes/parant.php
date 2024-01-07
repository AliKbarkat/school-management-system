<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect',
         'localizationRedirect', 'localeViewPath',
          'auth:student']
    ], function () {

    //==============================dashboard============================
    Route::get('/teacher/dashboard',function ()  {
        return view('teachers.dashboard');
    })->name('dashboard.Students');
    Route::group(['namespace'=>'stdashboard'], function () {
        Route::resource('student_exams','ExamController');
        Route::resource('profile-student', 'ProfileController');
    });

});