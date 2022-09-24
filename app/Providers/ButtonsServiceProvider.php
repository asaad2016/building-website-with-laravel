<?php

namespace App\Providers;;

use Illuminate\Support\ServiceProvider;
use Maatwebsite\Excel\ExcelServiceProvider;
use Yajra\DataTables\Generators\DataTablesMakeCommand;
use Yajra\DataTables\Generators\DataTablesScopeCommand;
class ButtonsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'datatables');

        $this->publishAssets();

        $this->registerCommands();
    }

    /**
     * Publish datatables assets.
     */
    protected function publishAssets()
    {
        $this->publishes([
            BUTTONS_PATH . '/config/config.php' => config_path('datatables-buttons.php'),
        ], 'datatables-buttons');

        $this->publishes([
            __DIR__ . '/resources/assets/buttons.server-side.js' => public_path('vendor/datatables/buttons.server-side.js'),
        ], 'datatables-buttons');

        $this->publishes([
            __DIR__ . '/resources/views' => base_path('/resources/views/vendor/datatables'),
        ], 'datatables-buttons');
    }

    /**
     * Register datatables commands.
     */
    protected function registerCommands()
    {
        $this->commands(DataTablesMakeCommand::class);
        $this->commands(DataTablesScopeCommand::class);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(base_path("/vendor/laravel-datatables-buttons-4.0/src") . "/config/config.php", 'datatables-buttons');
        $class_provider=HtmlServiceProvider::class;
        $class_provider=str_replace("App\Providers\\", "Collective\Html\\", $class_provider);
        $this->app->register($class_provider);
        $this->app->register(ExcelServiceProvider::class);
    }
}
