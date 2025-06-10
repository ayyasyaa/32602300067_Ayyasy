<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Mahasiswa extends Controller
{
    public function form()
    {
        return view('form_mahasiswa');
    }

    public function simpan()
    {
        $nim  = $this->request->getPost('nim');
        $nama = $this->request->getPost('nama');
        $prodi = $this->request->getPost('prodi');

        $db = \Config\Database::connect();
        $builder = $db->table('tb_mahasiswa');

        $data = [
            'nim' => $nim,
            'nama' => $nama,
            'prodi' => $prodi
        ];

        $builder->insert($data);

        return redirect()->to('/lihat');
    }

    public function tambah()
    {
        $db = \Config\Database::connect();

        $builder = $db->table('tb_mahasiswa');
        $data = [
            'nim'  => '32602300067',
            'nama' => 'Ayyasy Abdul Aziz',
            'prodi'=> 'Teknik Informatika'
        ];

        $builder->insert($data);

        return "Data berhasil ditambahkan.";
    }

    public function lihat()
{
    $db = \Config\Database::connect();
    $builder = $db->table('tb_mahasiswa');
    $builder->select('NIM as nim, NAMA as nama, PRODI as prodi');
    $query = $builder->get();

    $data['mahasiswa'] = $query->getResult();

    return view('v_mahasiswa', $data);
}
}
