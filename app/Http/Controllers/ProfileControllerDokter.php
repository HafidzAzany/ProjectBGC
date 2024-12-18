<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileControllerDokter extends Controller
{
    public function index()
    {

        return "Halo, saya berada dihalaman dokter index";
    }
    public function create()
    {
        return "Halo, saya berada dihalaman tambah dokter index";
    }
    public function edit($id)
    {
        return "Halo, saya berada di halaman edit dengan nilai $id";
    }
    public function show($id)
    {
        return "Halo, saya berada di halaman show dengan nilai $id";
    }


}
