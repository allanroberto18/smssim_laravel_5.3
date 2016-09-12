<?php

namespace SMSSim\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use SMSSim\Repositories\ServicoRepository;
use SMSSim\Repositories\ServicoRepositoryEloquent;
use SMSSim\Repositories\UserRepository;
use SMSSim\Repositories\UserRepositoryEloquent;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(\Prettus\Repository\Providers\RepositoryServiceProvider::class);
        $this->app->register(\Collective\Html\HtmlServiceProvider::class);
        $this->app->register(\DaveJamesMiller\Breadcrumbs\ServiceProvider::class);
        $this->app->register(\Laravel\Passport\PassportServiceProvider::class);

        $loader = AliasLoader::getInstance();
        $loader->alias('Form', \Collective\Html\FormFacade::class );
        $loader->alias('Html', \Collective\Html\HtmlFacade::class);
        $loader->alias('Breadcrumbs', \DaveJamesMiller\Breadcrumbs\Facade::class);

        $this->app->bind(UserRepository::class, UserRepositoryEloquent::class);
        $this->app->bind(ServicoRepository::class, ServicoRepositoryEloquent::class);
    }
}
