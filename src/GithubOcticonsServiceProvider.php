<?php

namespace Actb\BladeGithubOcticons;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;


class GithubOcticonsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->callAfterResolving(Factory::class, function (Factory $factory) {
            $factory->add('github-octicons', [
                'path' => __DIR__ . '/../resources/svg',
                'prefix' => 'go',
            ]);
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/svg' => public_path('vendor/blade-github-octicons'),
            ], 'blade-github-octicons');
        }
    }
}
