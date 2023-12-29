<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(

        'App\Repositry\TeacherRepositryInterface',
        'App\Repositry\TeacherRepositry'
    );
    $this->app->bind(

        'App\Repositry\StudentRepositryInterface',
        'App\Repositry\StudentRepositry'
    );
   
    
    $this->app->bind(

        'App\Repositry\PromotionInterface',
        'App\Repositry\PromotionRepositry'
    );

    $this->app->bind(

        'App\Repositry\GraduatedInterface',
        'App\Repositry\GruadtedRepositry'
    );
    $this->app->bind(

        'App\Repositry\FeesInterface',
        'App\Repositry\FeesRepositry'
    );
    }
    public function boot()
    {
       
    }
}
