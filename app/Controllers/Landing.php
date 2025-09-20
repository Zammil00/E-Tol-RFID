<?php
namespace App\Controllers;
use App\Models\TransaksiModel;
use App\Models\UserModel;

class Landing extends BaseController {
    public function index() {
        $trxModel = new TransaksiModel();
        $data['last'] = $trxModel
            ->select('transaksi.*, users.nama')
            ->join('users', 'users.id = transaksi.user_id')
            ->orderBy('waktu', 'DESC')
            ->first();

        return view('landing', $data);
    }
}
