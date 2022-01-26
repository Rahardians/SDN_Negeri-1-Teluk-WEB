<?php

namespace App\Http\Controllers\Admin\ContentManagement\Fasilitas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Fasilitas\RuangLab;

class RuangLabController extends Controller
{

    public function userview()
    {
        $data = RuangLab::where('active',1)->first();
        return view('fasilitas.ruanglab',compact('data'));
    }

    public function index()
    {
        $data = RuangLab::where('active',1)->get();
        return view('admin.fasilitas.ruanglab.index',compact('data'));
    }

    public function add()
    {
        return view('admin.fasilitas.ruanglab.add');
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

            $file = new RuangLab();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->img = json_encode($data);
            $file->active = 1;
            $file->save();
        }else{
            $ruanglab = RuangLab::create([
                'title' => $request->title,
                'content' => $request->content,
                'active' => 1
            ]);
        }

        return redirect()->route('adm.ruanglab')
                        ->with('success','Berhasil Tambah Data');

    }

    public function edit($id)
    {
        $ruanglab = RuangLab::findorfail($id);
        return view('admin.fasilitas.ruanglab.edit',compact('ruanglab'));                 
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
            $file = RuangLab::where('id',$request->id)->first();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->active = 1;
            $file->img = json_encode($data);
            $file->save();
        }else{
            $ruanglab = RuangLab::where('id',$request->id)->first();
            $ruanglab->title=$request->title;
            $ruanglab->content=$request->content;
            $ruanglab->active = 1;
            $ruanglab->img = $request->gambar;
            $ruanglab->update();
        }
        
        return redirect()->route('adm.ruanglab')
                        ->with('success','Berhasil Tambah Data');
    }


    public function destroy($id)
    {
        $ruanglab = RuangLab::findorfail($id);
        $ruanglab->delete();
        return back();
    }
}
