<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MPersegitiga;

class Persegitiga extends BaseController
{
    public function index()
    {
        return view('Persegitiga/form_persegitiga');
    }

    public function hitung()
    {
        $panjangAlas = $this->request->getPost('panjang_alas');
        $tinggi = $this->request->getPost('tinggi');

        $model = new MPersegitiga();

        $keliling = $model->hitungKeliling($panjangAlas, $tinggi);
        $luas = $model->hitungLuas($panjangAlas, $tinggi);

        return view('Persegitiga/hasil1', [
            'panjangAlas' => $panjangAlas,
            'tinggi' => $tinggi,
            'keliling' => $keliling,
            'luas' => $luas,
        ]);
    }
}

