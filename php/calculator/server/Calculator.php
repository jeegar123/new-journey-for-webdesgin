<?php

class Calucalator
{

    private $operator;
    private $num1;
    private $num2;

    public function __construct(string $operator, int $num1, int $num2)
    {
        $this->operator = $operator;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function perfromOperation()
    {
        switch ($this->operator) {
            case '+':
                return $this->num1 + $this->num2;
                break;
            case '-':
                return $this->num1 - $this->num2;
                break;
            case '*':
                return $this->num1 * $this->num2;
                break;
            case '/':
                return $this->num1 / $this->num2;
                break;
            default:
                return 'invalid operation';
            
        }
    }
}
