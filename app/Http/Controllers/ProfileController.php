<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        echo "Nama saya" .$request->nama;
        echo "<br>";
        echo "Umur" .$request->umur;
        //return "Hallo, saya adalah fungsi index dalam ProfileController";
    }
    public function create()
    {
        return "Haii, saya adalah fungsi create dalam ProfileController";
    }
    public function edit($nama)
    {
        return "Haii, nama saya $nama";
    }
}
