<?php

namespace App\Http\Controllers\Admin\ContentManagement\Fasilitas;

use App\Models\ContentManagement\Fasilitas\Perpustakaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PerpustakaanController extends Controller
{

    public function userview()
    {
        $data = Perpustakaan::where('active',1)->first();
        return view('fasilitas.perpustakaan',compact('data'));
    }

    public function index()
    {
        $data = Perpustakaan::where('active',1)->get();
        return view('admin.fasilitas.perpustakaan.index',compact('data'));
    }

    public function add()
    {
        return view('admin.fasilitas.perpustakaan.add');
    }

    public function edit($id)
    {
        $perpustakaan = Perpustakaan::findorfail($id);
        return view('admin.fasilitas.perpustakaan.edit',compact('perpustakaan'));                        
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
            $file = Perpustakaan::where('id',$request->id)->first();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->active = 1;
            $file->img = json_encode($data);
            $file->save();
        }else{
            $perpustakaan = Perpustakaan::where('id',$request->id)->first();
            $perpustakaan->title=$request->title;
            $perpustakaan->content=$request->content;
            $perpustakaan->active = 1;
            $perpustakaan->img = $request->gambar;
            $perpustakaan->update();
        }
        
        return redirect()->route('adm.perpustakaan')
                        ->with('success','Berhasil Tambah Data');
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

            $file = new Perpustakaan();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->img = json_encode($data);
            $file->active = 1;
            $file->save();
        }else{
            $perpustakaan = Perpustakaan::create([
                'title' => $request->title,
                'content' => $request->content,
                'active' => 1
            ]);
        }

        return redirect()->route('adm.perpustakaan')
                        ->with('success','Berhasil Tambah Data');
    }

    public function destroy($id)
    {
        $perpustakaan = Perpustakaan::findorfail($id);
        $perpustakaan->delete();
        return back();
    }
}
