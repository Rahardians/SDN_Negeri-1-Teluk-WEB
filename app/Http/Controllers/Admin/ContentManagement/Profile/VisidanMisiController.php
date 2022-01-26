<?php

namespace App\Http\Controllers\Admin\ContentManagement\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Profile\VisidanMisi;

class VisidanMisiController extends Controller
{
    public function userview()
    {
        $visi = VisidanMisi::where('active',1)->get();
        return view('profile.visimisi',compact('visi'));
    }

    public function index()
    {
        $data = Visidanmisi::where('active',1)->get();
        return view('admin.profile.visimisi.index',compact('data'));
    }

    public function add()
    {
        return view('admin.profile.visimisi.add');
    }

    public function edit($id)
    {
        $visimisi = VisidanMisi::findorfail($id);
        return view('admin.profile.visimisi.edit',compact('visimisi'));
       
                        
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
            $file = VisidanMisi::where('id',$request->id)->first();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->active = 1;
            $file->img = json_encode($data);
            $file->save();
        }else{
            $visimisi = VisidanMisi::where('id',$request->id)->first();
            $visimisi->title=$request->title;
            $visimisi->content=$request->content;
            $visimisi->active = 1;
            $visimisi->img = $request->gambar;
            $visimisi->update();
        }
        
        return redirect()->route('adm.visidanmisi')
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

            $file = new VisidanMisi();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->img = json_encode($data);
            $file->active = 1;
            $file->save();
        }else{
            $visimisi = VisidanMisi::create([
                'title' => $request->title,
                'content' => $request->content,
                'active' => 1
            ]);
        }

        return redirect()->route('adm.visidanmisi')
                        ->with('success','Berhasil Tambah Data');

    }
    public function destroy($id)
    {
        $visimisi = VisidanMisi::findorfail($id);
        $visimisi->delete();
        return back();
    }
}
