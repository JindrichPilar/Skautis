<?php

namespace Skaut\Skautis\Test\Unit;

use PHPUnit\Framework\TestCase;
use Skaut\Skautis\InvalidArgumentException;
use Skaut\Skautis\Wsdl\WebServiceFactory;

class WebServiceFactoryTest extends TestCase
{

    public function testEmptyWSDL() {
      $factory = new WebServiceFactory();

      $this->expectException(InvalidArgumentException::class);
      $factory->createWebService('', []);
    }
}

