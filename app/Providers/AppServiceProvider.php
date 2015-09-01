<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
	public function boot()
    {
    	$menu = file(base_path().'/resources/content/menu.md');
		sort($menu);
        view()->share('menu', $menu);
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
