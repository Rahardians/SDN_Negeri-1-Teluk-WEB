<?php

namespace App\Http\Controllers\Admin\Kelas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index()
    {
        $data = Kelas::where('active',1)->get();
        return view('admin.kelas.index',compact('data'));
    }

    public function add()
    {
        return view('admin.kelas.add');
    }

    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'nama' =>  'required',
        ]);

        $kantin = Kelas::create([
            'nama' => $request->nama,
            'active' => 1
        ]);

        return redirect()->route('adm.kelas')
                        ->with('success','Berhasil Tambah Data');

    }

    public function edit($id)
    {
        $data = Kelas::findorfail($id);
        return view('admin.kelas.edit',compact('data'));                 
    }

    public function update(Request $request,$id)
    {
        // Validasi
        $request->validate([
            'nama' =>  'required',
        ]);

        $perpustakaan = Kelas::where('id',$id)->first();
        $perpustakaan->nama = $request->nama;
        $perpustakaan->active = 1;
        $perpustakaan->update();

        return redirect()->route('adm.kelas')
                        ->with('success','Berhasil Tambah Data');

    }
}
