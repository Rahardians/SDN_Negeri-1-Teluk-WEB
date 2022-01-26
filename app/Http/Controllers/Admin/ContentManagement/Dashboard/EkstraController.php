<?php

namespace App\Http\Controllers\Admin\ContentManagement\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Dashboard\Ekstra;

class EkstraController extends Controller
{
    //
    public function userview()
    {
        $data = Ekstra::where('active',1)->first();
        return view('dashboard.ekstra',compact('data'));
    }

    public function index()
    {
        $data = Ekstra::where('active',1)->get();
        return view('admin.dashboard.ekstra.index',compact('data'));
    }

    public function add()
    {
        return view('admin.dashboard.ekstra.add');
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
            $file = Ekstra::where('id',$request->id)->first();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->active = 1;
            $file->img = json_encode($data);
            $file->save();
        }else{
            $ekstra = Ekstra::where('id',$request->id)->first();
            $ekstra->title=$request->title;
            $ekstra->content=$request->content;
            $ekstra->active = 1;
            $ekstra->img = $request->gambar;
            $ekstra->update();
        }

        return redirect()->route('adm.ekstra')
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

            $file = new Ekstra();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->img = json_encode($data);
            $file->active = 1;
            $file->save();
        }else{
            $ekstra = Ekstra::create([
                'title' => $request->title,
                'content' => $request->content,
                'active' => 1
            ]);
        }
        return redirect()->route('adm.ekstra')
        ->with('success','Berhasil Tambah Data');

    }
    public function destroy($id)
    {
        $ekstra = Ekstra::findorfail($id);
        $ekstra->delete();
        return back();
    }
}
