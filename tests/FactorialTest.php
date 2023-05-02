<?php
use PHPUnit\Framework\TestCase;

require './src/Factorial.php';

class FactorialTest extends TestCase {
// 1-Test Int
    public function testint(){
        $x=new Factorial;
        $result=$x->Factorial(5);
$this->assertEquals(120,$result);
    }

// 2-Test Zero
    public function testzero(){
        $x=new Factorial;
        $result=$x->Factorial(0);
$this->assertEquals(1,$result);
    }

// 3-Test One
public function testone(){
    $x=new Factorial;
    $result=$x->Factorial(0);
$this->assertEquals(1,$result);
}

// 4-Test Negative    
public function testnegative(){
    $x=new Factorial;
    $result=$x->Factorial(-2);
$this->assertEquals(null,$result);
}

// 5-Test Decimals    
    public function testdecimals(){
        $x=new Factorial;
        $result=$x->Factorial(1.5);
$this->assertEquals(null,$result);
    }

// 6-Test Letters    
    public function testletters(){
        $x=new Factorial;
        $result=$x->Factorial('abc');
$this->assertEquals(null,$result);
    }

// 7-Test False
    public function testfalse(){
        $x=new Factorial;
        $result=$x->Factorial(false);
$this->assertEquals(null,$result);
    }
}
?>