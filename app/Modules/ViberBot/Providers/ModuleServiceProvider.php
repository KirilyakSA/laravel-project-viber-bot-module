<?php

namespace App\Modules\ViberBot\Providers;

use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(module_path('viber-bot', 'Resources/Lang', 'app'), 'viber-bot');
        $this->loadViewsFrom(module_path('viber-bot', 'Resources/Views', 'app'), 'viber-bot');
        $this->loadMigrationsFrom(module_path('viber-bot', 'Database/Migrations', 'app'));
        if(!$this->app->configurationIsCached()) {
            $this->loadConfigsFrom(module_path('viber-bot', 'Config', 'app'));
        }
        $this->loadFactoriesFrom(module_path('viber-bot', 'Database/Factories', 'app'));
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
