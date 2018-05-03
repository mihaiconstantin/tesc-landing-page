<?php

namespace App\Providers;

use App\Helpers\BrowserCheck;
use Illuminate\Support\ServiceProvider;
use App\Helpers\BladeDirective;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Register custom Blade directives.
        $directive = new BladeDirective(new BrowserCheck(new \Browser));
        $directive->registerInternetExplorer('internetExplorer');
        $directive->registerSupportedInternetExplorerVersion('supportedVersion');
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
