<?php

namespace Tests;

use Actb\BladeGithubOcticons\GithubOcticonsServiceProvider;
use Orchestra\Testbench\TestCase;
use BladeUI\Icons\BladeIconsServiceProvider;

/**
 * Class CompilesIconsTest
 *
 * @package Tests
 */
class CompilesIconsTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            BladeIconsServiceProvider::class,
            GithubOcticonsServiceProvider::class,
        ];
    }

    /** @test */
    public function it_compiles_a_single_anonymous_component()
    {
        $result = svg('go-alert-16')->toHtml();

        $expected = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8.22 1.754a.25.25 0 00-.44 0L1.698 13.132a.25.25 0 00.22.368h12.164a.25.25 0 00.22-.368L8.22 1.754zm-1.763-.707c.659-1.234 2.427-1.234 3.086 0l6.082 11.378A1.75 1.75 0 0114.082 15H1.918a1.75 1.75 0 01-1.543-2.575L6.457 1.047zM9 11a1 1 0 11-2 0 1 1 0 012 0zm-.25-5.25a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5z"/></svg>
SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_classes_to_icons()
    {
        $result = svg('go-alert-16', 'text-primary')->toHtml();

        // Note: the double class here seems to be a Blade components / BladeUI Icons bug.
        $expected = <<<SVG
<svg class="text-primary" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8.22 1.754a.25.25 0 00-.44 0L1.698 13.132a.25.25 0 00.22.368h12.164a.25.25 0 00.22-.368L8.22 1.754zm-1.763-.707c.659-1.234 2.427-1.234 3.086 0l6.082 11.378A1.75 1.75 0 0114.082 15H1.918a1.75 1.75 0 01-1.543-2.575L6.457 1.047zM9 11a1 1 0 11-2 0 1 1 0 012 0zm-.25-5.25a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5z"/></svg>
SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_styles_to_icons()
    {
        $result = svg('go-alert-16', ['style' => 'color: #555'])->toHtml();

        $expected = <<<SVG
<svg style="color: #555" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8.22 1.754a.25.25 0 00-.44 0L1.698 13.132a.25.25 0 00.22.368h12.164a.25.25 0 00.22-.368L8.22 1.754zm-1.763-.707c.659-1.234 2.427-1.234 3.086 0l6.082 11.378A1.75 1.75 0 0114.082 15H1.918a1.75 1.75 0 01-1.543-2.575L6.457 1.047zM9 11a1 1 0 11-2 0 1 1 0 012 0zm-.25-5.25a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5z"/></svg>
SVG;

        $this->assertSame($expected, $result);
    }
}
