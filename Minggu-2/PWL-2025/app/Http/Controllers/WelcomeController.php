<?php
namespace App\Http\Controllers;

class WelcomeCOntroller extends Controller
{
    public function hello()
    {
        return 'Hello World';
    }

    public function greeting()
    {
        return view('blog.hello')->with('name', 'Taufik Dimas')->with('occupation', 'Astronaut');
    }

}
