<?php

namespace App\Controllers;

class User extends BaseController
{
    public function profile()
    {
        // 1. Ambil instance session
        $session = session();

        // 2. Siapkan data untuk dikirim ke View
        // Pastikan nama key (seperti 'username') sama dengan saat kamu melakukan Login
        $data = [
            'title' => 'Profil Pengguna | Toko Kita',
            'user'  => [
                'username'    => $session->get('username'),
                'role'        => $session->get('role'),
                'email'       => $session->get('email'),
                'waktu_login' => $session->get('waktu_login'), 
                'status'      => 'Sudah Login'
            ]
        ];

        // 3. Tampilkan halaman profil
        return view('user/profile', $data);
    }
}