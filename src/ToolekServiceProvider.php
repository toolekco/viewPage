<?php

namespace Toolek\ViewPage;

use Illuminate\Support\ServiceProvider;
use Jenssegers\Agent\Facades\Agent;


class ToolekServiceProvider extends ServiceProvider
{



    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/Routes/web.php');
        $this->publishes([
            __DIR__.'/Config/viewPage.php' => config_path('viewPage.php'),
            __DIR__.'/Migrations' => database_path('/migrations'),
            __DIR__.'/Model/ViewPage.php' => app_path('ViewPage.php'),
        ]);

    }

    public function register()
    {

    }
}
