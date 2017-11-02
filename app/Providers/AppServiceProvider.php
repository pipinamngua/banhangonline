<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Product;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.header-and-footer', function($view){
            $category = Category::all();
            $view->with('category', $category);
        });

        view()->composer('layouts.header-and-footer', function($view){
            $product = Product::all();
            $view->with('product', $product);
        });

        view()->composer('clients.product.detail-product', function($view){
            $category = Category::all();
            $view->with('category', $category);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
