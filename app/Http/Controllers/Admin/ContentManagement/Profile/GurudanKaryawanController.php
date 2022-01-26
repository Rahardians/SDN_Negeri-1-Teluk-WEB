<?php

namespace App\Http\Controllers\Admin\ContentManagement\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Profile\GurudanKaryawan;

class GurudanKaryawanController extends Controller
{
    public function userview()
    {
        $guru = GurudanKaryawan::where('active',1)->get();
        return view('profile.gurudankaryawan',compact('guru'));
    }

    public function index()
    {
        $data = GurudanKaryawan::where('active',1)->get();
        return view('admin.profile.gurudankaryawan.index',compact('data'));
    }

    public function add()
    {
        return view('admin.profile.gurudankaryawan.add');
    }

    public function edit($id)
    {
        $gurudankaryawan = GurudanKaryawan::findorfail($id);
        return view('admin.profile.gurudankaryawan.edit',compact('gurudankaryawan'));

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
            $file = GurudanKaryawan::where('id',$request->id)->first();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->active = 1;
            $file->img = json_encode($data);
            $file->save();
        }else{
            $gurudankaryawan = GurudanKaryawan::where('id',$request->id)->first();
            $gurudankaryawan->title=$request->title;
            $gurudankaryawan->content=$request->content;
            $gurudankaryawan->active = 1;
            $gurudankaryawan->img = $request->gambar;
            $gurudankaryawan->update();
        }

        return redirect()->route('adm.gurudankaryawan')
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

            $file = new GurudanKaryawan();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->img = json_encode($data);
            $file->active = 1;
            $file->save();
        }else{
            $gurudankaryawan = GurudanKaryawan::create([
                'title' => $request->title,
                'content' => $request->content,
                'active' => 1
            ]);
        }

        return redirect()->route('adm.gurudankaryawan')
                        ->with('success','Berhasil Tambah Data');

    }
    public function destroy($id)
    {
        $gurudankaryawan = GurudanKaryawan::findorfail($id);
        $gurudankaryawan->delete();
        return back();
    }

}
