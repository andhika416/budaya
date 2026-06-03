<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AdminAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();

        // Kalau tidak ada id_admin atau tidak logged_in_admin, tolak akses
        if (!$session->get('id_admin') || !$session->get('logged_in_admin')) {
            return redirect()->to('/login_admin')->with('error', 'Akses ditolak. Anda bukan admin.');
        }
    }


    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak perlu diisi untuk sekarang
    }
}
