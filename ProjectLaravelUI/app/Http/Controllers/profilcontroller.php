<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $nama = "Herlina";3
        $alamat = "Bandung"
        $tanggal_lahir = "18 Februari 2002";
        $data_array = array(
            "nama" => array(
                "Herlina", "Herlina", "Herlina",
            ),
        );

        return view('profile.index', compact('nama', 'alamat', 'tanggal_lahir', 'data_array'));
    }
}