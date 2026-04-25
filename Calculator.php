<?php

/**
 * Classe responsável por realizar operações matemáticas básicas como soma, subtração, multiplicação e divisão.
 */
class Calculator
{

    /**
     * Realiza a soma de dois valores.
     * 
     * @param mixed $a O primeiro valor a ser somado.
     * @param mixed $b O segundo valor a ser somado.
     * @return mixed O resultado da soma de $a e $b.
     */
    public function soma($a, $b)
    {
        return $a + $b;
    }
 
    /**
     * Realiza a subtração entre dois valores.
     * 
     * @param mixed $a O minuendo.
     * @param mixed $b O subtraendo.
     * @return mixed O resultado da subtração de $b de $a.
     */
    public function subtrai($a, $b)
    {
        return $a - $b;
    }

    /**
     * Realiza a multiplicação de dois valores.
     * 
     * @param mixed $a O primeiro valor a ser multiplicado.
     * @param mixed $b O segundo valor a ser multiplicado.
     * @return mixed O resultado da multiplicação de $a por $b.
     */
    public function multiplica($a, $b)
    {
        return $a * $b;
    }
    
    /**
     * Realiza a multiplicação de dois valores, lançando uma exceção se o segundo valor for zero.
     * 
     * @param mixed $a O primeiro valor a ser multiplicado.
     * @param mixed $b O segundo valor a ser multiplicado.
     * @return mixed O resultado da multiplicação de $a por $b.
     * @throws Exception Se $b for igual a zero.
     */
    public function divide($a, $b)
    {
        if ($b === 0) {
            throw new Exception('Divisão por zero');
        }
        return $a * $b;
    }

}