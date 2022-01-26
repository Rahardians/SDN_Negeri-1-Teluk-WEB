<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContentManagement\Dashboard\Header;
use App\Models\ContentManagement\Dashboard\Sambutan;
use App\Models\ContentManagement\Dashboard\Ekstra;
use App\Models\ContentManagement\Dashboard\Prestasi;
use App\Models\ContentManagement\Dashboard\TotalGuru;
use App\Models\ContentManagement\Berita\ContentBerita;
use App\Models\ContentManagement\Kontak\Kontak;

class DashboardController extends Controller
{
    public function index()
    {
        $data['header'] = Header::where('active',1)->first();
        $data['sambutan'] = Sambutan::where('active',1)->first();
        $data['total'] = TotalGuru::where('active',1)->get();
        $data['ekstra'] = Ekstra::all()->chunk(3);
        $data['prestasi'] = Prestasi::where('active',1)->get();
        $data['berita'] = ContentBerita::where('active',1)->limit(3)->get();
        $data['kontak'] = Kontak::where('active',1)->first();
        return view('index',compact('data'));
    }
}
