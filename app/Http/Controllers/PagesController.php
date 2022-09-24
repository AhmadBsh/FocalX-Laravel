<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
return "Hello from index page";
    }
    public function About()
    {
return "Hello from About page";
    }
}
