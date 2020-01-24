<?php
namespace App\Sample;

class GreetingModel implements Greeting
{
    private $hello = '';
    
    public function makeGreeting($value)
    {
        if (!$value) {
            $value = 'World';
        }
        $this->hello = 'Hello,'.$value.'!';
    }
    
    public function getGreeting()
    {
        return $this->hello;
    }
}