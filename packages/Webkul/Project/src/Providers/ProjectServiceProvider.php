<?php

namespace Webkul\Project\Providers;

use Illuminate\Support\ServiceProvider;

class ProjectServiceProvider extends ServiceProvider
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
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'project');

        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'project');

        $this->publishes([__DIR__ . '/../Resources/assets' => public_path('vendor/webkul/project/assets')], 'public');
    }
}