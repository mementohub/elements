<?php

namespace iMemento\Elements\Tests;

use Fideloper\Proxy\TrustProxies;
use GuzzleHttp\Client;
use iMemento\ActivityLog\ActivityLog;
use iMemento\Clients\Bookings;
use iMemento\Exceptions\ExpiredAuthTokenException;
use iMemento\Exceptions\Laravel\Formatters\NotFoundHttpExceptionFormatter;
use iMemento\Guard\Laravel\JwtGuard;
use iMemento\HealthProbe\HealthController;
use iMemento\Http\Service;
use iMemento\JWT\JWT;
use iMemento\SDK\Auth\Helper;
use iMemento\Support\Identity;
use Larafun\Suite\Model;
use Ytake\LaravelFluent\FluentHandler;

class LoadingDependenciesTest extends TestCase
{
    /**
     * @dataProvider dependencyClasses
     */
    public function test_it_loads_class($class_name)
    {
        $this->assertTrue(class_exists($class_name));
    }

    public function dependencyClasses()
    {
        return [
            [ActivityLog::class],
            [Bookings::class],
            [ExpiredAuthTokenException::class],
            [NotFoundHttpExceptionFormatter::class],
            [JwtGuard::class],
            [HealthController::class],
            [Service::class],
            [JWT::class],
            [Helper::class],
            [Identity::class],
            [Model::class],
            [FluentHandler::class],
            [Client::class],
            [TrustProxies::class],
        ];
    }
}
