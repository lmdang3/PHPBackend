<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;

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
        try {
            DB::connection()->getPdo();
            Log::info("Successfully connected to the database!");
            // will log server side
            // echo "Successfully connected to the database!";
        } catch (\Exception $e) {
            die("Could not connect to the database. Error message: " . $e->getMessage());
        }
    }
}
