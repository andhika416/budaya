<?php

namespace App\Controllers;

class Daftar extends BaseController
{
    public function index()
    {
        if (session()->get('logged_in')) {
            return redirect()->to('/home');
        }

        return view('daftar');
    }
}
