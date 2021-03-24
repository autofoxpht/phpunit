<?php
//bibliothèque de test
use PHPUnit\Framework\TestCase; class MathTest extends TestCase {
    
    /* public function testDouble(){
    //verifie si le double de 2 est égale à 4
    $this->assertEquals(4, \App\Math::double(2));
    } */

    /* public function testTTC(){
    $this->assertEquals(12, \App\Math::TTC(10));
    } */

    /* public function testCompare(){
    $this->assertEquals(1, \App\Math::compare(4, 4));
    } */

    public function testPasInf(){
    $this->assertEquals(1, \App\Math::pasinf(45, 400));
    }
}
?>