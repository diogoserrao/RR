<?php

namespace App\Providers;

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
        view()->composer('*', function ($view) {
        $cart = session('cart', []);
        $cartCount = array_sum(array_column($cart, 'quantity'));
        $view->with('cartCount', $cartCount);
    });
    }
}
