<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require 'src/ManipulacionDeArrays.php';

final class ManipulacionDeArraysTest extends TestCase
{   
    public function testOrderElement(): void
    {
        $array = [ 
            ['user' => 'Oscar', 'age' => 18, 'scoring' => 40], 
            ['user' => 'Mario', 'age' => 45, 'scoring' => 10], 
            ['user' => 'Zulueta', 'age' => 33, 'scoring' => -78],  
            ['user' => 'Mario', 'age' => 45, 'scoring' => 78], 
            ['user' => 'Patricio', 'age' => 22, 'scoring' => 9], 
        ]; 
        
        $sortCriterion = ['age' => 'DESC', 'scoring' => 'DESC']; 
        
        $result = orderElement($array, $sortCriterion);

        $this->assertEquals(
            [ 
                ['user' => 'Mario', 'age' => 45, 'scoring' => 78], 
                ['user' => 'Mario', 'age' => 45, 'scoring' => 10], 
                ['user' => 'Zulueta', 'age' => 33, 'scoring' => -78], 
                ['user' => 'Patricio', 'age' => 22, 'scoring' => 9], 
                ['user' => 'Oscar', 'age' => 18, 'scoring' => 40], 
            ],
            $result
        );
    }
}