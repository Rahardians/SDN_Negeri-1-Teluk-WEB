<?php

namespace App\Http\Controllers\Admin\ContentManagement\Galeri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Galeri\GaleriVideo;

class GaleriVideoController extends Controller
{
    public function index()
    {
        $data = GaleriVideo::where('active',1)->get();
        return view('admin.galeri.galerivideo.index',compact('data'));
    }

    public function userview()
    {
        $galerivideo = GaleriVideo::where('active',1)->get();
        return view('galeri.galerivideo',compact('galerivideo'));
    }

    public function add()
    {
        return view('admin.galeri.galerivideo.add');
    }

    public function post(Request $request)
    {
        // Validasi
        $request->validate([
            'content' => 'required',
        ]);

        GaleriVideo::create([
            'content' => $request->content,
            'active' => 1
        ]);

        return redirect()->route('adm.galerivideo')
                        ->with('success','Berhasil Tambah Data');

    }

    public function edit($id)
    {
        $data = GaleriVideo::findorfail($id);
        return view('admin.galeri.galerivideo.edit',compact('data'));
    }
    
    public function update(Request $request, $id)
    {
    
        $request->validate([
            'content' => 'required',
        ]);

        
        $galerivideo = GaleriVideo::where('id',$request->id)->first();
        $galerivideo->content=$request->content;
        $galerivideo->update();
        
        return redirect()->route('adm.galerivideo')
                        ->with('success','Berhasil Tambah Data');
    }
    
    public function destroy($id)
    {
        $data = GaleriVideo::findorfail($id);
        $data->delete();
        return back();
    }
}
