<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasien = \App\Models\Pasien::latest()->paginate(10);
        if (request()->wantsJson()) {
            return response()->json($pasien);
        }
        $data['pasien'] = $pasien;
        return view('pasien_index', $data);

        if (request()->wantsJson()) {

            return response()->json($pasien);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pasien_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'no_pasien' => 'required|unique:pasiens,no_pasien',
            'nama' => 'required|min:3',
            'umur' => 'required|numeric',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'alamat' => 'nullable', // alamat boleh kosong
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:5000',
        ]);

        $pasien = new \App\Models\Pasien; // membuat objek kosong di variabel model
        $pasien->fill($requestData); // mengisi variabel model dengan data yang sudah divalidasi

        // Mengisi objek PathFoto
        $pasien->foto = $request->file('foto')->store('public');

        $pasien->save(); // menyimpan data ke database

        if ($request->wantsJson()) {
            return response()->json($pasien);
        }

        flash('Data sudah disimpan')->success();
        return back(); // mengarahkan user ke URL sebelumnya yaitu /pasien/create
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['pasien'] = \App\Models\Pasien::findOrFail($id);
        return view('pasien_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestData = $request->validate([ // variabel $request data berisi variabel $request
            //yang mana ada melakukan validasi
            'no_pasien' => 'required|unique:pasiens,no_pasien',
            $id,
            'nama' => 'required|min:3',
            'umur' => 'required|numeric',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'alamat' => 'nullable', //boleh kosong
            'foto' => 'nullable|image|mimes:jpeg,jpg,png|max:5000', //mimes itu ekstensi file
        ]);
        $pasien = \App\Models\Pasien::FindOrFail($id); //membuat objek kosong
        $pasien->fill($requestData); //mengisi var model dengan data yang sudah ada
        // karena di validasi bisa null, maka perlu ada pengecekan
        // jika ada file foto baru maka file foto lama dihapus
        if ($request->hasFile('foto')) {
            Storage::delete($pasien->foto);
            $pasien->foto = $request->file('foto')->store('public');
        }

        $pasien->save(); //menyimpan data ke database
        flash('Data sudah diupdate')->success();
        return redirect('/pasien');
        // Mengarahkan user ke url sebelumnya yaitu /pasien/create dengan membawa variabel
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasien = \App\Models\Pasien::FindOrFail($id);
        if ($pasien->daftar->count() >= 1) {
            flash(message: 'Data tidak bisa dihapus karena sudah terkait dengan data pendaftaran')->error();
            return back();
        }
        if ($pasien->foto != null && Storage::exists($pasien->foto)) {
            Storage::delete($pasien->foto);
        }
        $pasien->delete();
        flash('Data sudah dihapus')->success();
        return back();
    }
}
