<?php
namespace tests\Unit;

use Tests\TestCase;
use App\Sample\GreetingModel;

class SampleTest extends TestCase
{
    public function testGreeting1()
    {
        $target = new GreetingModel();
        
        $target->makeGreeting('Point');
        $this->assertEquals('Hello,Point!', $target->getGreeting());
    }
    public function testGreeting2()
    {
        $target = new GreetingModel();
        
        $target->makeGreeting(false);
        $this->assertEquals('Hello,World!', $target->getGreeting());
    }
    public function testGreeting3()
    {
        $target = new GreetingModel();
        
        $target->makeGreeting('Sapporo');
        $this->assertEquals('Hello,Sapporo!', $target->getGreeting());
    }
    public function testGreeting4()
    {
        $target = new GreetingModel();
        
        $target->makeGreeting('');
        $this->assertEquals('Hello,World!', $target->getGreeting());
    }
    
}