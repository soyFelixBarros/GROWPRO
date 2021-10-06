<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require 'src/ExpresionesRegulares.php';

final class ExpresionesRegularesTest extends TestCase
{   
    public function testFnA(): void
    {
        $text = "Hola @[Franklin](user-gpe-1071) avisa a @[Ludmina](user-gpe-1061)";
        $result = fnA($text);
        $this->assertEquals(
            [1071, 1061], // $result será [1071, 1061]
            $result
        );
    }

    public function testFnB(): void
    {
        $text = "Hola @[Franklin](user-gpe-1071) avisa a @[Ludmina](user-gpe-1061)";
        $result = fnB($text);
        $this->assertEquals(
            "Hola @Franklin avisa a @Ludmina", // $result es “Hola @Franklin avisa a @Ludmina”
            $result
        );
    }
}