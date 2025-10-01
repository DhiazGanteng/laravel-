<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
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
