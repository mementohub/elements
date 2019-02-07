<?php

namespace iMemento\Elements\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use iMemento\Elements\ServiceProvider;

class TestCase extends OrchestraTestCase
{

    protected function getPackageProviders($app)
    {
        return [
            ServiceProvider::class
        ];
    }
}
