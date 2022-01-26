<?php

namespace App\Http\Controllers\Admin\ContentManagement\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Dashboard\Header;

class HeaderController extends Controller
{
    public function index()
    {
        $data = Header::where('active',1)->get();
        return view('admin.dashboard.header.index',compact('data'));
    }

    public function add()
    {
        return view('admin.dashboard.header.add');
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

            $file = new Header();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->img = json_encode($data);
            $file->active = 1;
            $file->save();
        }else{
            $header = Header::create([
                'title' => $request->title,
                'content' => $request->content,
                'active' => 1
            ]);
        }

        return redirect()->route('adm.header')
                        ->with('success','Berhasil Tambah Data');

    }

    public function edit($id)
    {
        $header = Header::findorfail($id);
        return view('admin.dashboard.header.edit',compact('header'));                 
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
            $file = Header::where('id',$request->id)->first();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->active = 1;
            $file->img = json_encode($data);
            $file->save();
        }else{
            $header = Header::where('id',$request->id)->first();
            $header->title=$request->title;
            $header->content=$request->content;
            $header->active = 1;
            $header->img = $request->gambar;
            $header->update();
        }
        
        return redirect()->route('adm.header')
                        ->with('success','Berhasil Tambah Data');
    }


    public function destroy($id)
    {
        $header = Header::findorfail($id);
        $header->delete();
        return back();
    }
}
