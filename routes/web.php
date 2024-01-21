<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::auth();

     Route::get('/', 'HomeController@index')->name('selection');

     Route::group(['namespace'=>'Auth'],function ()  {

     Route::get('/login/{type}','LoginController@loginFrom')->middleware('guest')->name('login.show');

     Route::post('/login','LoginController@login')->name('login');
   
     Route::post('/logout/{type}','LoginController@logout')->middleware('guest')->name('logout');

    });

    Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath',
         'auth'
         ]
    ],
    function () {
        Route::get('/dashboard','HomeController@dashboard')->name('dashboard.index');

        
            Route::resource('/grad', 'GradController');
            Route::get('delete/{id}', 'GradController@destroy')->name('grade_delete');

        

    Route::group([ 'prefix' => 'classroom'], function () {
            Route::get('/', 'ClassRoomController@index')->name('class.index');
            Route::get('create', 'ClassRoomController@create')->name('class.create');
            Route::post('create', 'ClassRoomController@store')->name('class.store');
            Route::get('edit/{class_id}', 'ClassRoomController@edit')->name('class.edit');
            Route::post('update/{class_id}', 'ClassRoomController@update')->name('class.update');
            Route::get('destroy/{class_id}', 'ClassRoomController@destroy')->name('class.destroy');
        });
    
    Route::group([ 'prefix' => 'sections'], function () {
            Route::get('/', 'SectionController@index')->name('section.index');
            Route::get('create', 'SectionController@create')->name('section.create');
            Route::post('create', 'SectionController@store')->name('section.store');
            Route::get('edit/{list_Section_id}', 'SectionController@edit')->name('section.edit');
            Route::post('update/{list_Section_id}', 'SectionController@update')->name('section.update');
            Route::get('destroy/{list_Section_id}', 'SectionController@destroy')->name('section.destroy');
           
           
        });

            Route::get('/classes/{id}','SectionController@getClasses')->name('class.ajax');
            Route::get('/sections/{id}','StudentController@getSections')->name('section.ajax');
            Route::view('/add_parent', 'livewire.show_form')->name('add.parent');

    Route::group([ 'prefix' => 'teachers'], function () {
            Route::get('/', 'TeacherController@index')->name('teacher.index');
            Route::get('create', 'TeacherController@create')->name('teacher.create');
            Route::post('create', 'TeacherController@store')->name('teacher.store');
            Route::get('edit/{teacher_id}', 'TeacherController@edit')->name('teacher.edit');
            Route::post('update/{teacher_id}', 'TeacherController@update')->name('teacher.update');
            Route::get('destroy/{teacher_id}', 'TeacherController@destroy')->name('teacher.destroy');
        });

    Route::group(['prefix' => 'students'], function () {
            Route::get('/', 'StudentController@index')->name('students.index');
            Route::get('show/{student_id}', 'StudentController@show')->name('students.show');
            Route::get('create', 'StudentController@create')->name('students.create');
            Route::post('create', 'StudentController@store')->name('students.store');
            Route::get('edit/{student_id}', 'StudentController@edit')->name('students.edit');
            Route::post('update/{student_id}', 'StudentController@update')->name('students.update');
            Route::get('destroy/{student_id}', 'StudentController@destroy')->name('students.destroy');
            Route::post('Download_attachment/{student_name}/{file_name}','StudentController@downloadAttachment')->name('students.download_attachment');
            Route::post('upolad_attchment','StudentController@uploadFile')->name('students.uploadFile');
            Route::post('Delete_attachment','StudentController@deleteAttachment')->name('students.delete_attachment');
            

 
        });

    Route::group(['prefix' => 'promotion'], function () {
            Route::get('/', 'PromotionController@index')->name('promotion.index');
            Route::get('create', 'PromotionController@create')->name('promotion.create');
            Route::post('create', 'PromotionController@store')->name('promotion.store');
            Route::get('edit/{id}', 'PromotionController@edit')->name('promotion.edit');
            Route::post('update/{id}', 'PromotionController@update')->name('promotion.update');
            Route::get('destroy/{id}', 'PromotionController@destroy')->name('promotion.destroy');

        });

    Route::group(['prefix' => 'gruadted'], function () {
            Route::get('/', 'GraduatedController@index')->name('graduated.index');
            Route::get('create', 'GraduatedController@create')->name('graduated.create');
            Route::post('create', 'GraduatedController@store')->name('graduated.store');
            Route::get('edit/{id}', 'GraduatedController@edit')->name('graduated.edit');
            Route::post('update/{id}', 'GraduatedController@update')->name('graduated.update');
            Route::get('destroy/{id}', 'GraduatedController@destroy')->name('graduated.destroy');

        });

    Route::group(['prefix' => 'fees'], function () {
            Route::get('/', 'FeesController@index')->name('fees.index');
            Route::get('create', 'FeesController@create')->name('fees.create');
            Route::post('create', 'FeesController@store')->name('fees.store');
            Route::get('edit/{id}', 'FeesController@edit')->name('fees.edit');
            Route::post('update/{id}', 'FeesController@update')->name('fees.update');
            Route::get('destroy/{id}', 'FeesController@destroy')->name('fees.destroy');

        });

    Route::group(['prefix' => 'fee_invoice'], function () {
            Route::get('/', 'FeeInvoiceController@index')->name('fee_invoice.index');
            Route::get('show/{student_id}', 'FeeInvoiceController@show')->name('fee_invoice.show');
            Route::get('create', 'FeeInvoiceController@create')->name('fee_invoice.create');
            Route::post('create', 'FeeInvoiceController@store')->name('fee_invoice.store');
            Route::get('edit/{fee_invoice_id}', 'FeeInvoiceController@edit')->name('fee_invoice.edit');
            Route::post('update/{fee_invoice_id}', 'FeeInvoiceController@update')->name('fee_invoice.update');
            Route::get('destroy/{fee_invoice_id}', 'FeeInvoiceController@destroy')->name('fee_invoice.destroy');

        });
        
    Route::group(['prefix' => 'receiptStudent'], function () {
            Route::get('/', 'ReceiptStudentController@index')->name('receipt_student.index');
            Route::get('show/{student_id}', 'ReceiptStudentController@show')->name('receipt_student.show');
            Route::get('create', 'ReceiptStudentController@create')->name('receipt_student.create');
            Route::post('create', 'ReceiptStudentController@store')->name('receipt_student.store');
            Route::get('edit/{receipt_id}', 'ReceiptStudentController@edit')->name('receipt_student.edit');
            Route::post('update/{receipt_id}', 'ReceiptStudentController@update')->name('receipt_student.update');
            Route::get('destroy/{receipt_id}', 'ReceiptStudentController@destroy')->name('receipt_student.destroy');

        });
      
    Route::group(['prefix' => 'processingFee'], function () {
            Route::get('/', 'ProcessingFeeController@index')->name('processing_fee.index');
            Route::get('show/{student_id}', 'ProcessingFeeController@show')->name('processingfee.show');
            Route::get('create', 'ProcessingFeeController@create')->name('processing_fee.create');
            Route::post('create', 'ProcessingFeeController@store')->name('processing_fee.store');
            Route::get('edit/{processing_id}', 'ProcessingFeeController@edit')->name('processing_fee.edit');
            Route::post('update/{processing_id}', 'ProcessingFeeController@update')->name('processing_fee.update');
            Route::get('destroy/{processing_id}', 'ProcessingFeeController@destroy')->name('processing_fee.destroy');

        });
    Route::group(['prefix' => 'payment'], function () {
            Route::get('/', 'PaymentController@index')->name('payment.index');
            Route::get('show/{student_id}', 'PaymentController@show')->name('payment.show');
            Route::get('create', 'PaymentController@create')->name('payment.create');
            Route::post('create', 'PaymentController@store')->name('payment.store');
            Route::get('edit/{payment_id}', 'PaymentController@edit')->name('payment.edit');
            Route::post('update/{payment_id}', 'PaymentController@update')->name('payment.update');
            Route::get('destroy/{payment_id}', 'PaymentController@destroy')->name('payment.destroy');

        });
    Route::group(['prefix' => 'attendance'], function () {
            Route::get('/', 'AttendanceController@index')->name('attendance.index');
            Route::get('show/{student_id}', 'AttendanceController@show')->name('attendance.show');
            Route::get('create', 'AttendanceController@create')->name('attendance.create');
            Route::post('create', 'AttendanceController@store')->name('attendance.store');
            Route::get('edit/{attendce_id}', 'AttendanceController@edit')->name('attendance.edit');
            Route::post('update/{attendce_id}', 'AttendanceController@update')->name('attendance.update');
            Route::get('destroy/{attendce_id}', 'AttendanceController@destroy')->name('attendance.destroy');

        });

     Route::group(['prefix' => 'subject'], function () {
            Route::get('/', 'SubjectConttroller@index')->name('subject.index');
            Route::get('show/{subject}', 'SubjectConttroller@show')->name('subject.show');
            Route::get('create', 'SubjectConttroller@create')->name('subject.create');
            Route::post('create', 'SubjectConttroller@store')->name('subject.store');
            Route::get('edit/{subject}', 'SubjectConttroller@edit')->name('subject.edit');
            Route::post('update/{subject}', 'SubjectConttroller@update')->name('subject.update');
            Route::get('destroy/{subject}', 'SubjectConttroller@destroy')->name('subject.destroy');

        });

    Route::group(['prefix' => 'quizz'], function () {
            Route::get('/', 'QuizzConttroller@index')->name('quizz.index');
            Route::get('show/{subject}', 'QuizzConttroller@show')->name('quizz.show');
            Route::get('create', 'QuizzConttroller@create')->name('quizz.create');
            Route::post('create', 'QuizzConttroller@store')->name('quizz.store');
            Route::get('edit/{subject}', 'QuizzConttroller@edit')->name('quizz.edit');
            Route::post('update/{subject}', 'QuizzConttroller@update')->name('quizz.update');
            Route::get('destroy/{subject}', 'QuizzConttroller@destroy')->name('quizz.destroy');

        });

    Route::group(['prefix' => 'question'], function () {
            Route::get('/', 'QuestionController@index')->name('question.index');
            Route::get('show/{subject}', 'QuestionController@show')->name('question.show');
            Route::get('create', 'QuestionController@create')->name('question.create');
            Route::post('create', 'QuestionController@store')->name('question.store');
            Route::get('edit/{subject}', 'QuestionController@edit')->name('question.edit');
            Route::post('update/{subject}', 'QuestionController@update')->name('question.update');
            Route::get('destroy/{subject}', 'QuestionController@destroy')->name('question.destroy');

        });

    Route::group(['prefix' => 'library'], function () {
            Route::get('/', 'LibraryController@index')->name('library.index');
            Route::get('show/{subject}', 'LibraryController@show')->name('library.show');
            Route::get('create', 'LibraryController@create')->name('library.create');
            Route::post('create', 'LibraryController@store')->name('library.store');
            Route::get('edit/{subject}', 'LibraryController@edit')->name('library.edit');
            Route::post('update/{subject}', 'LibraryController@update')->name('library.update');
            Route::get('destroy/{subject}', 'LibraryController@destroy')->name('library.destroy');
            Route::get('downlowd/{file_name}', 'LibraryController@download')->name('library.download');

        });
        
        Route::get('/setting', 'SettingController@index')->name('setting.index');
        Route::post('setting/update', 'SettingController@update')->name('settings.update');

        Route::get('/empty', 'HomeController@empty')->name('empty.index');

      
    }
);