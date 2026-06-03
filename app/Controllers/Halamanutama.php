<?php

namespace App\Controllers;

class Halamanutama extends BaseController
{
    public function index(): string
    {
        return view('halaman_utama');
    }
}
