<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $nama = "Herlina Utari";
        $alamat = "Kabupaten Bandung";
        $tanggal_lahir = "18 februari 2002";
        $data_array = array(
            "nama" => array(
                "Herlina", "Risna", "Tia",
            ),
        );

        return view('profil', compact('nama', 'alamat', 'tanggal_lahir', 'data_array'));
    }
}