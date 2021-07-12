<?php

namespace App\Providers;

use App\Models\Category;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
        view()->composer('*', function ($view) {
            $view->with('categories',Category::where('status',1)->get());
            $view->with('cartGetContents',CartFacade::getContent());
            $view->with('cartSubtotal',CartFacade::getSubTotal());
            $view->with('cartTotalQuantity',CartFacade::getTotalQuantity());
        });
    }
}
