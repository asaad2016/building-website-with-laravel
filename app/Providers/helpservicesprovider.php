<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class helpservicesprovider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
       // require_once YAJRA_PATH;
        //return require_once BUTTONS_PATH;
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
     public function includeHelpers($path){
        $path_name=scandir($path);
        for ($i=2; $i < count($path_name); $i++) { 
          if(is_dir($path . '/' .$path_name[$i])){
            $this->includeHelpers($path . '/' .$path_name[$i]);
          }elseif (is_file($path . '/' .$path_name[$i])){
            @require_once $path . '/' .$path_name[$i];
          }
        }
      }
}
