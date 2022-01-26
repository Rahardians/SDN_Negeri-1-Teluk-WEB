<?php

namespace App\Http\Controllers\Admin\ContentManagement\Fasilitas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ContentManagement\Fasilitas\RuangGuru;

class RuangGuruController extends Controller
{

    public function userview()
    {
        $data = RuangGuru::where('active',1)->first();
        return view('fasilitas.ruangguru',compact('data'));
    }

    public function index()
    {
        $data = RuangGuru::where('active',1)->get();
        return view('admin.fasilitas.ruangguru.index',compact('data'));
    }
    public function add()
    {
        return view('admin.fasilitas.ruangguru.add');
    }

    public function edit($id)
    {
        $ruangguru = RuangGuru::findorfail($id);
        return view('admin.fasilitas.ruangguru.edit',compact('ruangguru'));
       
                        
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
            $file = RuangGuru::where('id',$request->id)->first();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->active = 1;
            $file->img = json_encode($data);
            $file->save();
        }else{
            $ruangguru = RuangGuru::where('id',$request->id)->first();
            $ruangguru->title=$request->title;
            $ruangguru->content=$request->content;
            $ruangguru->active = 1;
            $ruangguru->img = $request->gambar;
            $ruangguru->update();
        }
        
        return redirect()->route('adm.ruangguru')
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

            $file = new RuangGuru();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->img = json_encode($data);
            $file->active = 1;
            $file->save();
        }else{
            $ruangguru = RuangGuru::create([
                'title' => $request->title,
                'content' => $request->content,
                'active' => 1
            ]);
        }

        return redirect()->route('adm.ruangguru')
                        ->with('success','Berhasil Tambah Data');

    }

    public function destroy($id)
    {
        $ruangguru = RuangGuru::findorfail($id);
        $ruangguru->delete();
        return back();
    }
}
