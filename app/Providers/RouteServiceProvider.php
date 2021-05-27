<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapSuperAdminRoutes();

        $this->mapAdminRoutes();

        $this->mapKepalaSekolahRoutes();

        $this->mapGuruRoutes();

        $this->mapUserRoutes();

        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "superadmin" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapSuperAdminRoutes()
    {
        Route::middleware('web', 'auth', 'role:superadmin')
            ->prefix('superadmin')
            ->name('superadmin.')
            ->namespace($this->namespace. '\SuperAdmin')
            ->group(base_path('routes/superadmin.php'));
    }

    /**
     * Define the "admin" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapAdminRoutes()
    {
        Route::middleware('web', 'auth', 'role:admin')
            ->prefix('admin')
            ->namespace($this->namespace. '\Admin')
            ->name('admin.')
            ->group(base_path('routes/admin.php'));
    }

    /**
     * Define the "kepalasekolah" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapKepalaSekolahRoutes()
    {
        Route::middleware('web', 'auth', 'role:kepalasekolah')
            ->prefix('kepalasekolah')
            ->name('kepalasekolah.')
            ->namespace($this->namespace. '\KepalaSekolah')
            ->group(base_path('routes/kepalasekolah.php'));
    }

    /**
     * Define the "guru" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapGuruRoutes()
    {
        Route::middleware('web', 'auth', 'role:guru')
            ->prefix('guru')
            ->name('guru.')
            ->namespace($this->namespace. '\Guru')
            ->group(base_path('routes/guru.php'));
    }

    /**
     * Define the "user" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapUserRoutes()
    {
        Route::middleware('web', 'auth', 'role:user')
            ->prefix('user')
            ->name('user.')
            ->namespace($this->namespace. '\User')
            ->group(base_path('routes/user.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }
}
