<?php

namespace App\Http\Controllers;

readonly class HomeController extends Controller
{
    public function index(): string
    {
        return 'Hello, World!';
    }
}
