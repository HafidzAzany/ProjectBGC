<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['poli'] =  \App\Models\Poli::latest()->paginate(20);
        return view(view: 'poli_index', data: $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('poli_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([ // variabel $request data berisi variabel $request 
            //yang mana ada melakukan validasi         
            'nama' => 'required',
            'biaya' => 'required',
            'keterangan' => 'nullable', //mimes itu ekstensi file
        ]);
        $poli = new \App\Models\Poli();//membuat objek kosong
        $poli  ->fill($requestData);//mengisi var model dengan data yang sudah ada
        $poli ->save();//menyimpan data ke database
        flash('Data sudah disimpan')->success();
        return back();
        // Mengarahkan user ke url sebelumnya yaitu /pasien/create dengan membawa variabel
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
        $data['poli'] = \App\Models\Poli::findOrFail($id);
        return view('poli_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestData = $request->validate([ // variabel $request data berisi variabel $request 
            //yang mana ada melakukan validasi
            $id,
            'nama' => 'required',
            'biaya' => 'required',
            'keterangan' => 'nullable',//boleh kosong
             //mimes itu ekstensi file
        ]);
        $poli = \App\Models\Poli::FindOrFail($id);//membuat objek kosong
        $poli ->fill($requestData);//mengisi var model dengan data yang sudah ada
        // karena di validasi bisa null, maka perlu ada pengecekan
        // jika ada file foto baru maka file foto lama dihapus
    
        
        $poli->save();//menyimpan data ke database
        flash('Data sudah diupdate')->success();
        return redirect('/poli');
        // Mengarahkan user ke url sebelumnya yaitu /pasien/create dengan membawa variabel
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $poli = \App\Models\Poli::FindOrFail($id);
        if ($poli->daftar->count() >= 1) {
            flash(message: 'Data tidak bisa dihapus karena sudah terkait dengan data pendaftaran')->error();
            return back();
        }
    
        $poli->delete();
        flash('Data sudah dihapus')->success();
        return back();
    }
}
