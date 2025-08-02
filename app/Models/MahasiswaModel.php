<?php
namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $allowedFields = ['nim', 'nama', 'prodi', 'universitas', 'no_hp'];
    protected $useTimestamps = true;  // Enable timestamps for automatic handling of created_at and updated_at

    // If you want custom field names for timestamps, you can set them like this
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation rules
    protected $validationRules = [
        'nim' => 'required|numeric|is_unique[mahasiswa.nim]',   // Ensure nim is unique and numeric
        'nama' => 'required|min_length[3]',
        'prodi' => 'required',
        'universitas' => 'required',
        'no_hp' => 'required|numeric'
    ];

    // Validation messages
    protected $validationMessages = [
        'nim' => [
            'required' => 'NIM is required.',
            'numeric' => 'NIM must be numeric.',
            'is_unique' => 'This NIM already exists.'
        ],
        'no_hp' => [
            'required' => 'No HP is required.',
            'numeric' => 'No HP must be numeric.'
        ]
    ];
}
