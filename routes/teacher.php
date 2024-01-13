<?php
use App\Http\Controllers\HomeController;
use App\Models\Student;
use App\models\Teacher;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect',
        'localizationRedirect', 'localeViewPath',
        'auth:teacher']
    ], function () {

    //==============================dashboard============================
    Route::get('/teacher/dashboard', function () {
        $tea_id = auth()->user()->id;
        $ids = Teacher::findOrfail($tea_id)->Sections()->pluck('section_id');
        $data['count_section'] = $ids->count();
        $data['count_students'] = Student::where('section_id',$ids)->count();
        return view('teachers.dashboard',$data);
    });

});