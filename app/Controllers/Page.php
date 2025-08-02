<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function profil()
    {
        return view('profil', ['title' => 'Profil Saya']);
    }

    public function pengalaman()
    {
        return view('pengalaman', ['title' => 'Pengalaman & Skill']);
    }
}
