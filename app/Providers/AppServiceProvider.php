<?php

namespace App\Providers;

use App\Models\SettingGroup;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        Schema::defaultStringLength(191);
        if (Schema::hasTable('setting_groups'))
        {
            $setting_groups = SettingGroup::all();
            View::share('setting_groups', $setting_groups);
        }
    }
}
