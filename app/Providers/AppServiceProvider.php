<?php

namespace App\Providers;

use App\FormFields\EditorMDHandler;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use TCG\Voyager\Facades\Voyager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Voyager::addFormField(EditorMDHandler::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::defaultView('pagination::bootstrap-4');
    }
}
