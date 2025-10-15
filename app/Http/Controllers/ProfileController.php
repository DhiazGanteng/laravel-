<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class ProfileController extends Controller

{
    

    public function profil()
    {
        $data = [
            'nama' => 'Dhiaz Alfiansyah',
            'kelas' => 'XI PPLG 1',
            'sekolah' => 'SMK RUS'
        ];

        return view('profil', $data ,
        [
            'title' => 'Profil'
        ]);
        
    }
}