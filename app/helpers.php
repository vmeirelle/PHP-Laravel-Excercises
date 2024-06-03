<?php


function testStringManipulation($str) {
    return [
        'Original String' => $str,
        'Uppercase' => strtoupper($str),
        'Lowercase' => strtolower($str),
        'Length' => strlen($str),
        'Substring' => substr($str, 0, 5),
    ];
}

function testArrayManipulation($arr) {
    return [
        'Original Array' => $arr,
        'Sum' => array_sum($arr),
        'Reversed Array' => array_reverse($arr),
    ];
}
function testMathOperations($num1, $num2) {
    // Check if $num1 or $num2 are null or zero, and set them to 0 if null
    $num1 = $num1 ?? 0;
    $num2 = $num2 ?? 0;

    // Perform math operations
    $results = [
        'Numbers' => $num1 . ' and ' . $num2,
        'Addition' => $num1 + $num2,
        'Subtraction' => $num1 - $num2,
        'Multiplication' => $num1 * $num2,
        'Division' => $num2 != 0 ? $num1 / $num2 : 'Undefined (Division by zero)',
        'Modulus' => $num2 != 0 ? $num1 % $num2 : 'Undefined (Division by zero)',
    ];

    return $results;
}

function testConditionals($x) {
    if ($x > 5) {
        return "$x is greater than 5";
    } elseif ($x == 5) {
        return "$x is equal to 5";
    } else {
        return "$x is less than 5";
    }
}

function testLoops($limit) {
    $result = [];
    for ($i = 1; $i <= $limit; $i++) {
        $result[] = $i;
    }

    $j = 1;
    while ($j <= $limit) {
        $result[] = $j;
        $j++;
    }

    return $result;
}

function testFunctions($a, $b) {
    function add($a, $b) {
        return $a + $b;
    }

    return add($a, $b);
}

function testClassesAndObjects($color, $brand) {
    class Car {
        public $color;
        public $brand;

        public function __construct($color, $brand) {
            $this->color = $color;
            $this->brand = $brand;
        }

        public function display() {
            return "This car is $this->color and it's a $this->brand";
        }
    }

    $car = new Car($color, $brand);

    return $car->display();
}
