<?php

namespace App\Controllers;

class Praktikum extends BaseController
{
    
        public function __construct()
    {
        helper('url'); // Aktifkan helper base_url()
    }
public function pretest()
    {
        return "Pretest Web Programming";
    }
    public function profil()
    {
        return view('profil_mahasiswa');
    }
}
