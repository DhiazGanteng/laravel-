<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function index()
    {
        return view('home',[
            'title' => 'Home'
        ]);
    }

    public function beranda()
    {
        return view('beranda');
    }
    
    public function profil()
    {
        $data = [
            'nama' => 'Dhiaz Alfiansyah',
            'kelas' => 'XI PPLG 1',
            'sekolah' => 'SMK R'
        ];

        return view('profil', $data, [
            'title' => 'Profil'
        ]);
    }


    public function kontak()
    {
        $dataKontak = [
            'email' => 'dhiazalfi@gmail.com',
            'nomor' => '081327399842',
        ];
        return view('kontak', $dataKontak, [
            'title' => 'Kontak'
        ]);
    }
}