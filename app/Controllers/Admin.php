<?php
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\TransaksiModel;

class Admin extends BaseController {
    public function login() {
        return view('admin/login');
    }

    public function auth() {
        // contoh simpel (belum hash check)
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($username == 'admin' && $password == '12345') {
            session()->set('isAdmin', true);
            return redirect()->to('/admin/dashboard');
        }
        return redirect()->back()->with('error', 'Login gagal');
    }

    public function dashboard() {
        return view('admin/dashboard');
    }

    public function users() {
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();
        return view('admin/users', $data);
    }

    public function transaksi() {
        $trxModel = new TransaksiModel();
        $data['transaksi'] = $trxModel
            ->select('transaksi.*, users.nama')
            ->join('users', 'users.id = transaksi.user_id')
            ->findAll();
        return view('admin/transaksi', $data);
    }
}
