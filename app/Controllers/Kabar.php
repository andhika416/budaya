<?php

namespace App\Controllers;

class Kabar extends BaseController
{
    public function index(): string
    {
        return view('kabar');
    }
}
