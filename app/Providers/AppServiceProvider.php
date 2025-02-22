<?php

namespace App\Providers;

use App\Models\Student;
use Illuminate\Support\Facades\View;
//use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        View::share('title','Student Admin');
        View::composer('students.index', function($view){
            $view->with('students', Student::all());

        });
    }
}
