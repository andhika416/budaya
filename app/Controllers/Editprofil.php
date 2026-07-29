<?php

namespace App\Controllers;

class Editprofil extends BaseController
{
    public function index()
    {
        if (! session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        return view('edit_profil');
    }
}
