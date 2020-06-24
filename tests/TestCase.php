<?php

namespace Actb\BladeGithubOcticons\Tests;

use Actb\BladeGithubOcticons\GithubOcticonsServiceProvider;
use BladeUI\Icons\BladeIconsServiceProvider;
use Orchestra\Testbench\TestCase as TestCaseAlias;

/**
 * Class TestCase
 *
 * @package Actb\BladeGithubOcticons\Tests
 */
class TestCase extends TestCaseAlias
{
    protected function getPackageProviders($app): array
    {
        return [BladeIconsServiceProvider::class, GithubOcticonsServiceProvider::class];
    }
}
