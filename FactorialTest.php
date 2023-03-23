<?php
use PHPUnit\Framework\TestCase;
require './src/Factorial.php';
class FactorialTest extends TestCase{
    public function testfactorial(){
        $f=new Factorial;
        $result0= $f->factorial(0);
        $result1= $f->factorial(1);
        $result5= $f->factorial(5);
        $resultInt= $f->factorial(4);
        $resultNegative= $f->factorial(-3);
        $resultFraction= $f->factorial(1.5);
        $resultFalse= $f->factorial("false");
        $resultString= $f->factorial("abc");


        $this->assertEquals(1, $result0);
        $this->assertEquals(1, $result1);
        $this->assertEquals(120, $result5);
        $this->assertEquals($f->factorial(3)*4, $resultInt);
        $this->assertEquals(null, $resultNegative);
        $this->assertEquals(null, $resultFraction);
        $this->assertEquals(null, $resultString);
        $this->assertEquals(null, $resultFalse);
        
    }

}
?>