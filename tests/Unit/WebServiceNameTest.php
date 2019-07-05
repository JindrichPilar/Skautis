<?php

declare(strict_types=1);


namespace Test\Skautis;


use PHPUnit_Framework_TestCase;
use Skautis\Wsdl\WebServiceName;

class WebServiceNameTest extends PHPUnit_Framework_TestCase
{

  public function testIsValid(): void
  {
    $this->assertTrue(WebServiceName::isValidServiceName(WebServiceName::APPLICATION_MANAGEMENT));
    $this->assertTrue(WebServiceName::isValidServiceName(WebServiceName::WELCOME));
  }

  public function testIsNotValid(): void
  {
    $this->assertFalse(WebServiceName::isValidServiceName('usr'));
    $this->assertFalse(WebServiceName::isValidServiceName('user'));
  }
}