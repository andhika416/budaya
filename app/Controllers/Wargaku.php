<?php

namespace App\Controllers;

class Wargaku extends BaseController
{
    public function index(): string
    {
        return view('wargaku');
    }
}
