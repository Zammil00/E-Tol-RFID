<?php
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\TransaksiModel;

class Api extends BaseController {
    public function tap() {
        $uid = $this->request->getJSON()->uid ?? null;
        $tarif = 5000; // tarif tol tetap

        if (!$uid) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'UID tidak valid'
            ]);
        }

        $userModel = new UserModel();
        $trxModel = new TransaksiModel();

        $user = $userModel->where('uid_rfid', $uid)->first();

        if (!$user) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Kartu tidak terdaftar'
            ]);
        }

        if ($user['saldo'] < $tarif) {
            $trxModel->insert([
                'user_id' => $user['id'],
                'tarif' => $tarif,
                'status' => 'gagal'
            ]);

            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Saldo tidak cukup'
            ]);
        }

        // Kurangi saldo
        $userModel->update($user['id'], ['saldo' => $user['saldo'] - $tarif]);

        // Simpan transaksi
        $trxModel->insert([
            'user_id' => $user['id'],
            'tarif' => $tarif,
            'status' => 'sukses'
        ]);

        return $this->response->setJSON([
            'status' => 'success',
            'nama' => $user['nama'],
            'saldo' => $user['saldo'] - $tarif,
            'tarif' => $tarif
        ]);
    }
}
