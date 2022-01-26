<?php

namespace App\Http\Controllers\Admin\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\FileSiswa;

class SiswaController extends Controller
{
    public function index()
    {
        $data = Siswa::where('siswas.active',1)
        ->select('siswas.id as id','siswas.nama','siswas.alamat','siswas.nama_ibu','siswas.nama_ayah','siswas.created_at as created_at','file_siswas.file_kk','file_siswas.file_akta_kelahiran','file_siswas.file_pas_foto','kelas.nama as kelas')
        ->join('file_siswas','file_siswas.nik','=','siswas.nik')
        ->join('kelas','kelas.id','=','siswas.id_kelas')->get();
        return view('admin.siswa.index',compact('data'));
    }
}
