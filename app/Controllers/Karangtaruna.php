<?php

namespace App\Controllers;

class Karangtaruna extends BaseController
{
    public function index(): string
    {
        return view('kartar');
    }
}
