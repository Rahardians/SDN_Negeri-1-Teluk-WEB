<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Configuration;

class ConfigurationController extends Controller
{
    public function index()
    {
        $data = Configuration::where('nama','pendaftaran')->first();
        return view('admin.pendaftaran.pengaturan',compact('data'));
    }

    public function update($id)
    {
        $data = Configuration::find($id);
        if($data->active == 0){
            $data->active = 1;
        }else{
            $data->active = 0;
        }
        $data->update();
        return redirect()->route('adm.pengaturanpendaftaran')
                        ->with('success','Berhasil Ubah Pengaturan');
    }
}
