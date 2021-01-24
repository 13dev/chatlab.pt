<?php

namespace App\Providers;

use App\Http\Resources\ThreadResource;
use Illuminate\Database\Eloquent\Model;
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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        ThreadResource::withoutWrapping();

        Model::created(function ($model) {
            debugbar()->info('Created the', $model);
        });

        Model::saved(function ($model) {
            debugbar()->info('Saved the', $model);
        });

        Model::updated(function ($model) {
            debugbar()->info('Updated the', $model);
        });
    }
}
