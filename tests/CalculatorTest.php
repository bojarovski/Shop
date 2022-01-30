<?php

class CalculatorTest extends \PHPUnit\Framework\TestCase {
    public function testAdd() {

        $calculator = new App\Calculator;
        $result = $calculator->add(20,5);

        $this->assertEquals(25, $result);
    }


    public function testSubtract() {

        $calculator = new App\Calculator;
        $result = $calculator->subtract(20,5);

        $this->assertEquals(15, $result);
    }

    public function testPrice() {

        $calculator = new App\Calculator;
        $result = $calculator->calculate(50);

        $this->assertEquals(59, $result);
    }

    public function testDdv() {

        $calculator = new App\Calculator;
        $result = $calculator->ddv(50);

        $this->assertEquals(9, $result);
    }

}