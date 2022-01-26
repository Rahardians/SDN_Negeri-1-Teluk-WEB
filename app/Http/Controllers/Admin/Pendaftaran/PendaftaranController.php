<?php

namespace App\Http\Controllers\Admin\Pendaftaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\FileSiswa;
use App\Models\Configuration;
use App\Models\Kelas;

class PendaftaranController extends Controller
{
    public function index()
    {
        $data = Siswa::where('active',0)
        ->select('siswas.id as id','siswas.nama','siswas.alamat','siswas.nama_ibu','siswas.nama_ayah','siswas.created_at as created_at','file_siswas.file_kk','file_siswas.file_akta_kelahiran')
        ->join('file_siswas','file_siswas.nik','=','siswas.nik')->get();
        return view('admin.pendaftaran.index',compact('data'));
    }

    public function userview()
    {
        $data = Configuration::where('nama','pendaftaran')->first();
        return view('pendaftaran.index',compact('data'));
    }

    public function daftar(Request $request)
    {
         // Validasi
         $request->validate([
            'nama' =>  'required',
            'nik' => 'required',
            'alamat' => 'required',
            'nama_ibu' => 'required',
            'nama_ayah' => 'required',
            'file_kk' => 'required',
            'file_akta_kelahiran'=> 'required',
            'file_kk.*' => 'mimes:jpeg,jpg,png,gif,JPEG,JPG,PNG',
            'file_akta_kelahiran.*' => 'mimes:jpeg,jpg,png,gif,JPEG,JPG,PNG',
        ]);

        if($request->hasFile('file_kk') && $request->hasFile('file_akta_kelahiran')) {
            $file_kk = $request->file('file_kk');
            $file_akta_kelahiran = $request->file('file_akta_kelahiran');
            $kk = uniqid() . '_' . time(). '.' .$file_kk->getClientOriginalName();
            $akta = uniqid() . '_' . time(). '.' .$file_akta_kelahiran->getClientOriginalName();
            $file_kk->move(public_path().'/img/photo/', $kk);  
            $file_akta_kelahiran->move(public_path().'/img/photo/', $akta); 

            $siswa = new Siswa();
            $file = new FileSiswa();
            
            $siswa->nama=$request->nama;
            $siswa->nik=$request->nik;
            $siswa->alamat=$request->alamat;
            $siswa->nama_ibu=$request->nama_ibu;
            $siswa->nama_ayah=$request->nama_ayah;
            $file->nik = $request->nik;
            $file->file_kk = $kk;
            $file->file_akta_kelahiran = $akta;
            $siswa->active = 0;
            $siswa->save();
            $file->save();
        }

        return redirect()->route('pendaftaran')
                        ->with('success','Pendaftaran Berhasil, Silahkan menghubungi nomor 09231232173 untuk info lebih lanjut');
    }

    public function terima($id)
    {
        $kelas = Kelas::where('nama','like','%1%')->first();
        $siswa = Siswa::find($id);
        $siswa->active = 1;
        $siswa->id_kelas = $kelas->id;
        $siswa->update();
        return redirect()->route('adm.pendaftaran')
                        ->with('success','Pendaftaran Berhasil');
    }

    public function tolak($id)
    {
        $siswa = Siswa::findorfail($id);
        $siswa->delete();
        return back();
    }

}
