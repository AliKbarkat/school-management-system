<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Auth::routes();
Route::group(['middleware' => ['guest']], function () {
    Route::get('/', function () {
        return view('auth.login');
    });

});
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']
    ],
    function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard.index');

        
            Route::resource('/grad', 'GradController');
            Route::get('delete/{id}', 'GradController@destroy')->name('grade_delete');

        

        Route::group([ 'prefix' => 'ClassRoom'], function () {
            Route::get('/', 'ClassRoomController@index')->name('class.index');
            Route::get('create', 'ClassRoomController@create')->name('class.create');
            Route::post('create', 'ClassRoomController@store')->name('class.store');
            Route::get('edit/{class_id}', 'ClassRoomController@edit')->name('class.edit');
            Route::post('update/{class_id}', 'ClassRoomController@update')->name('class.update');
            Route::get('destroy/{class_id}', 'ClassRoomController@destroy')->name('class.destroy');
        });

        Route::group([ 'prefix' => 'Sections'], function () {
            Route::get('/', 'SectionController@index')->name('section.index');
            Route::get('create', 'SectionController@create')->name('section.create');
            Route::post('create', 'SectionController@store')->name('section.store');
            Route::get('edit/{list_Section_id}', 'SectionController@edit')->name('section.edit');
            Route::post('update/{list_Section_id}', 'SectionController@update')->name('section.update');
            Route::get('destroy/{list_Section_id}', 'SectionController@destroy')->name('section.destroy');
           
            Route::get('classes{id}','SectionController@getclasses');
        });

            Route::view('/Add_parent', 'livewire.show_form')->name('add.parent');

        Route::group([ 'prefix' => 'Teacher'], function () {
            Route::get('/', 'TeacherController@index')->name('teacher.index');
            Route::get('create', 'TeacherController@create')->name('teacher.create');
            Route::post('create', 'TeacherController@store')->name('teacher.store');
            Route::get('edit/{Teacher_id}', 'TeacherController@edit')->name('teacher.edit');
            Route::post('update/{Teacher_id}', 'TeacherController@update')->name('teacher.update');
            Route::get('destroy/{Teacher_id}', 'TeacherController@destroy')->name('teacher.destroy');
        });

        Route::group(['prefix' => 'Students'], function () {
            Route::get('/', 'StudentController@index')->name('students.index');
            Route::get('show/{student_id}', 'StudentController@show')->name('students.show');
            Route::get('create', 'StudentController@create')->name('students.create');
            Route::post('create', 'StudentController@store')->name('students.store');
            Route::get('edit/{student_id}', 'StudentController@edit')->name('students.edit');
            Route::post('update/{student_id}', 'StudentController@update')->name('students.update');
            Route::get('destroy/{student_id}', 'StudentController@destroy')->name('students.destroy');
            Route::post('Download_attachment/{student_name}/{file_name}','StudentController@downloadAttachment')->name('students.Download_attachment');
            Route::post('upolad_attchment','StudentController@uploadFile')->name('students.uploadFile');
            Route::post('Delete_attachment','StudentController@deleteAttachment')->name('students.delete_attachment');
 
        });

        Route::group(['prefix' => 'promotion'], function () {
            Route::get('/', 'PromotionController@index')->name('Promotion.index');
            Route::get('create', 'PromotionController@create')->name('Promotion.create');
            Route::post('create', 'PromotionController@store')->name('Promotion.store');
            Route::get('edit', 'PromotionController@edit')->name('Promotion.edit');
            Route::post('update', 'PromotionController@update')->name('Promotion.update');
            Route::get('destroy', 'PromotionController@destroy')->name('Promotion.destroy');

        });
        Route::group(['prefix' => 'Gruadted'], function () {
            Route::get('/', 'GraduatedController@index')->name('Graduated.index');
            Route::get('create', 'GraduatedController@create')->name('Graduated.create');
            Route::post('create', 'GraduatedController@store')->name('Graduated.store');
            Route::get('edit', 'GraduatedController@edit')->name('Graduated.edit');
            Route::post('update', 'GraduatedController@update')->name('Graduated.update');
            Route::get('destroy', 'GraduatedController@destroy')->name('Graduated.destroy');

        });
        Route::group(['prefix' => 'Fees'], function () {
            Route::get('/', 'FeesController@index')->name('Fees.index');
            Route::get('create', 'FeesController@create')->name('Fees.create');
            Route::post('create', 'FeesController@store')->name('Fees.store');
            Route::get('edit/{fee_id}', 'FeesController@edit')->name('Fees.edit');
            Route::post('update', 'FeesController@update')->name('Fees.update');
            Route::get('destroy', 'FeesController@destroy')->name('Fees.destroy');

        });
        Route::get('/empty', 'HomeController@empty')->name('empty.index');
        
    }
);