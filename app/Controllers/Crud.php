<?php
namespace App\Controllers;

use App\Models\MahasiswaModel;

class Crud extends BaseController
{
    protected $mahasiswaModel;

    public function __construct()
    {
        // Loading the MahasiswaModel
        $this->mahasiswaModel = new MahasiswaModel();
    }

    // Display list of all mahasiswa
   public function index()
{
    $data = $this->mahasiswaModel->findAll(); // Fetch all records
    return view('crud/view', ['mahasiswa' => $data]);
}

    // Add a new mahasiswa (Create)
    public function tambah()
    {
        if ($this->request->getMethod() === 'post') {
            // Validate form data
            if (!$this->validate('mahasiswa')) {
                // Validation failed, return errors to view
                return view('crud/upload', ['errors' => \Config\Services::validation()->getErrors()]);
            }

            // Prepare data for insertion
            $data = [
                'nim' => $this->request->getPost('nim'),
                'nama' => $this->request->getPost('nama'),
                'prodi' => $this->request->getPost('prodi'),
                'universitas' => $this->request->getPost('universitas'),
                'no_hp' => $this->request->getPost('no_hp')
            ];

            // Insert data into the database
            $this->mahasiswaModel->insert($data);
            // In Controller
            session()->setFlashdata('success', 'Data has been updated successfully.');
            return redirect()->to('/crud');
        }

        return view('crud/upload'); // Show the form if not a POST request
    }

    // Edit existing mahasiswa (Read)
    public function edit($nim)
{
    // Cek apakah mahasiswa ada berdasarkan nim
    $mahasiswa = $this->mahasiswaModel->find($nim); // Find by nim

    if (!$mahasiswa) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Mahasiswa tidak ditemukan');
    }

    // Tampilkan form edit dengan data mahasiswa
    return view('crud/edit', ['edit' => $mahasiswa]);
}



    // Delete mahasiswa (Delete)
    public function hapus($id)
    {
        $this->mahasiswaModel->delete($id); // Delete based on primary key (nim)
        return redirect()->to(base_url('/crud'));
    }
    public function editan()
{
    // Ambil data dari POST
    $nim = $this->request->getPost('nim');
    $newNim = $this->request->getPost('newNim');
    $newNama = $this->request->getPost('newNama');
    $newProdi = $this->request->getPost('newProdi');
    $newUniversitas = $this->request->getPost('newUniversitas');
    $newNoHp = $this->request->getPost('newNo_hp');

    // Jika nim berubah, set validasi untuk nim
    if ($newNim != $nim) {
        $this->mahasiswaModel->setValidationRules([
            'nim' => 'required|numeric|is_unique[mahasiswa.nim]',
            'nama' => 'required|min_length[3]',
            'prodi' => 'required',
            'universitas' => 'required',
            'no_hp' => 'required|numeric'
        ]);
    }

    // Update data di database menggunakan model
    if (!$this->mahasiswaModel->update($nim, [
        'nim' => $newNim,
        'nama' => $newNama,
        'prodi' => $newProdi,
        'universitas' => $newUniversitas,
        'no_hp' => $newNoHp
    ])) {
        // Jika validasi gagal, tampilkan error
        return redirect()->back()->withInput()->with('errors', $this->mahasiswaModel->errors());
    }

    // Jika berhasil, beri pesan sukses dan redirect
    session()->setFlashdata('success', 'Data Mahasiswa berhasil diperbarui.');
    return redirect()->to('/crud');
}
   
}
