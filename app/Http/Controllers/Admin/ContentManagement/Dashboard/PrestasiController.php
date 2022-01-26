<?php

namespace App\Http\Controllers\Admin\ContentManagement\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Dashboard\Prestasi;

class PrestasiController extends Controller
{
    //
    public function userview()
    {
        $data = Prestasi::where('active',1)->first();
        return view('dashboard.prestasi',compact('data'));
    }
    public function index()
    {
        $data = Prestasi::where('active',1)->get(); 
        return view('admin.dashboard.prestasi.index',compact('data'));
    }
    public function add()
    {
        return view('admin.dashboard.prestasi.add');
    }

    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'title' =>  'required',
            'content' => 'required',
            'image.*' => 'mimes:jpeg,jpg,png,gif,JPEG,JPG,PNG'
        ]);

        if($request->hasFile('image')) {
            foreach($request->file('image') as $file)
            {
                $name = uniqid() . '_' . time(). '.' .$file->getClientOriginalName();
                $file->move(public_path().'/img/photo/', $name);
                $data[] = $name;
            }

            $file = new Prestasi();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->img = json_encode($data);
            $file->active = 1;
            $file->save();
        }else{
            $prestasi = Prestasi::create([
                'title' => $request->title,
                'content' => $request->content,
                'active' => 1
            ]);
        }

        return redirect()->route('adm.prestasi')
                        ->with('success','Berhasil Tambah Data');

    }
    public function edit($id)
    {
        $prestasi = Prestasi::findorfail($id);
        return view('admin.dashboard.prestasi.edit',compact('prestasi'));
       
                        
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' =>  'required',
            'content' => 'required',
            'image.*' => 'mimes:jpeg,jpg,png,gif,JPEG,JPG,PNG'
        ]);

        if($request->hasFile('image')) {
            foreach($request->file('image') as $file)
            {
                $name = uniqid() . '_' . time(). '.' .$file->getClientOriginalName();
                $file->move(public_path().'/img/photo/', $name);
                $data[] = $name;
            }
            $file = Prestasi::where('id',$request->id)->first();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->active = 1;
            $file->img = json_encode($data);
            $file->save();
        }else{
            $ruangguru = Prestasi::where('id',$request->id)->first();
            $ruangguru->title=$request->title;
            $ruangguru->content=$request->content;
            $ruangguru->active = 1;
            $ruangguru->img = $request->gambar;
            $ruangguru->update();
        }
        
        return redirect()->route('adm.prestasi')
                        ->with('success','Berhasil Tambah Data');
    }
    public function destroy($id)
    {
        $prestasi = Prestasi::findorfail($id);
        $prestasi->delete();
        return back();
    }
}
