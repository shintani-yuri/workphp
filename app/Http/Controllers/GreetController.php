<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sample\Greeting;

class GreetController extends Controller
{
    private $greet;
    
    public function __construct(Greeting $greet)
    {
        $this->greet = $greet;
    }
    
    public function showGreeting(Request $request)
    {
        $name = $request->query('name');
        $this->greet->makeGreeting($name);
        return view('workReport');
    }
}