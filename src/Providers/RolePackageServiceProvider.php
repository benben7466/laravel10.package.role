<?php


namespace App\Package\MyRolePackage\src\Providers;

use App\Package\MyRolePackage\src\Role;
use Illuminate\Support\ServiceProvider;

class RolePackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // 可在此处加载视图、配置等
    }

    public function register()
    {
        $this->app->singleton('role', function ($app) {
            return new Role();
        });

        $this->app->alias('role', Role::class);
    }
}
