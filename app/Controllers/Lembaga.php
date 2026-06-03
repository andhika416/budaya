<?php

namespace App\Controllers;

class Lembaga extends BaseController
{
    public function index(): string
    {
        return view('lembaga');
    }
}
