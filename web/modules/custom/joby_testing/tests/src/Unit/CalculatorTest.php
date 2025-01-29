<?php

namespace Drupal\Tests\joby_testing\Unit;

use Drupal\joby_testing\Calculator;
use Drupal\Tests\UnitTestCase;

/**
 * Tests the Calculator class methods.
 *
 *@group joby_testing
 */
class CalculatorTest extends UnitTestCase {

  /**
   * @var Calculator
   */
  protected $calculatorOne;

  /**
   * @var Calculator
   */
  protected $calculatorTwo;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
    $this->calculatorOne = new Calculator(10, 5);
    $this->calculatorTwo = new Calculator(10, 6);
  }

  /**
   * Tests the Calculator::add() method.
   */
  public function testAdd() {

    $this->assertEquals(15, $this->calculatorOne->add());
    $this->assertEquals(16, $this->calculatorTwo->add());
  }

  /**
   * Tests the Calculator::subtract() method.
   */
  public function testSubtract() {
    $this->assertEquals(5, $this->calculatorOne->subtract());
  }

  /**
   * Tests the Calculator::multiply() method.
   */
  public function testMultiply() {
    $this->assertEquals(50, $this->calculatorOne->multiply());
  }

  /**
   * Tests the Calculator::divide() method.
   */
  public function testDivide() {
    $this->assertEquals(2, $this->calculatorOne->divide());
  }
}
