<?php

namespace Actb\BladeGithubOcticons;

use BladeUI\Icons\Factory;
use Carbon\Laravel\ServiceProvider;

/**
 * Class GithubOcticonsServiceProvider
 *
 * @package Actb\BladeFeatherIcons
 */
class GithubOcticonsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->make(Factory::class)->add('github-octicons', [
            'path' => __DIR__ . '/../resources/svg',
            'prefix' => 'go',
        ]);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/svg' => public_path('vendor/blade-github-octicons'),
            ], 'blade-github-octicons');
        }
    }
}
