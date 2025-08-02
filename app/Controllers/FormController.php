<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class FormController extends BaseController
{
    public function form()
    {
        // Tampilkan view form
        return view('form');
    }

    public function submit()
    {
        // Ambil data yang dikirimkan melalui form
        $nama = $this->request->getPost('nama');
        $nim = $this->request->getPost('nim');
        $kelas = $this->request->getPost('kelas');
        $matakuliah = $this->request->getPost('matakuliah');
        $dosen = $this->request->getPost('dosen');
        $asisten = $this->request->getPost('asisten');

        // Siapkan data untuk ditampilkan di view hasil
        $data = [
            'nama' => $nama,
            'nim' => $nim,
            'kelas' => $kelas,
            'matakuliah' => $matakuliah,
            'dosen' => $dosen,
            'asisten' => $asisten,
        ];
        return view('hasil', $data);
    }
}