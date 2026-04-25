<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Calculator;

class CalculatorTest extends TestCase
{
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function test_soma_deveRetornarSomaCorreta()
    {
        $this->assertEquals(5, $this->calculator->soma(2, 3));
        $this->assertEquals(0, $this->calculator->soma(2, -2));
        $this->assertEquals(-5, $this->calculator->soma(-2, -3));
    }

    public function test_subtrai_deveRetornarSubtracaoCorreta()
    {
        $this->assertEquals(-1, $this->calculator->subtrai(2, 3));
        $this->assertEquals(4, $this->calculator->subtrai(2, -2));
        $this->assertEquals(1, $this->calculator->subtrai(-2, -3));
    }

    public function test_multiplica_deveRetornarMultiplicacaoCorreta()
    {
        $this->assertEquals(6, $this->calculator->multiplica(2, 3));
        $this->assertEquals(-4, $this->calculator->multiplica(2, -2));
        $this->assertEquals(6, $this->calculator->multiplica(-2, -3));
    }

    public function test_divide_deveRetornarMultiplicacaoCorreta()
    {
        $this->assertEquals(6, $this->calculator->divide(2, 3));
        $this->assertEquals(-4, $this->calculator->divide(2, -2));
        $this->assertEquals(6, $this->calculator->divide(-2, -3));
    }

    public function test_divide_deveLancarExcecaoQuandoDividirPorZero()
    {
        $this->expectException(\Exception::class);
        $this->calculator->divide(2, 0);
    }
}
