<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('App\Repositry\TeacherRepositryInterface','App\Repositry\TeacherRepositry');

        $this->app->bind('App\Repositry\StudentRepositryInterface','App\Repositry\StudentRepositry');
    
        $this->app->bind('App\Repositry\PromotionInterface','App\Repositry\PromotionRepositry');

        $this->app->bind('App\Repositry\GraduatedInterface','App\Repositry\GruadtedRepositry');
  
        $this->app->bind('App\Repositry\FeesInterface','App\Repositry\FeesRepositry');
  
        $this->app->bind('App\Repositry\FeeInvoiceInterface','App\Repositry\FeeInvoiceRepositry');

        $this->app->bind('App\Repositry\ReceiptStudentIntrface','App\Repositry\ReceiptStudentRepositry');
   
        $this->app->bind('App\Repositry\ProcessingFeeInterface', 'App\Repositry\ProcessingFeeRepositry');
    
        $this->app->bind('App\Repositry\PaymentInterface','App\Repositry\PaymentRepositry');

        $this->app->bind( 'App\Repositry\AttendanceInterface','App\Repositry\AttendanceRepositry');

        $this->app->bind( 'App\Repositry\SubjectInterface','App\Repositry\SubjectRepositry');

        $this->app->bind( 'App\Repositry\QuizzInterface','App\Repositry\QuizzRepositry');
        
        $this->app->bind( 'App\Repositry\QuestionInterface','App\Repositry\QuestionRepositry');

        $this->app->bind( 'App\Repositry\LibraryInterface','App\Repositry\LibraryRepositry');

    }
    public function boot()
    {
       
    }
}
