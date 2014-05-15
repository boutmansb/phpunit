<?php

namespace Converter\Tests;

use Converter\Converter;

class ConverterTest extends \PHPUnit_Framework_TestCase
{
  /**
   * @test
   */
  public function converts_0()
  {
    $converter = new Converter();
    $this->assertEquals('', $converter->convert(0));
  }

  /**
   * @test
   */
  public function converts_1()
  {
    $converter = new Converter();
    $this->assertEquals('I', $converter->convert(1));
  }

  /**
   * @test
   */
  public function converts_2()
  {
    $converter = new Converter();
    $this->assertEquals('II', $converter->convert(2));
  }

  /**
   * @test
   */
  public function converts_4()
  {
    $converter = new Converter();
    $this->assertEquals('IV', $converter->convert(4));
  }

  /**
   * @test
   */
  public function converts_5()
  {
    $converter = new Converter();
    $this->assertEquals('V', $converter->convert(5));
  }
}
