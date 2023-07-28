<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Job;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = Category::all();
        view()->share('categories', $categories);

        $countries = Country::all();
        view()->share('countries', $countries);

        $job_lists = Job::all();
        view()->share('job_lists', $job_lists);
    }
}
