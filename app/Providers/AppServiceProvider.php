<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\Model;
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
        Model::unguard();
        View::composer('*', function ($view) {
            $cart = session()->get('cart', []);
            $itemCount = count($cart);
            $overallTotal = 0;
            foreach ($cart as $item) {
                $overallTotal += $item['total'];
            }

            $view->with(['itemCount'=> $itemCount,'overallTotal'=>$overallTotal]);
        });
    }
}
