<?php

namespace App\Http\Controllers\Admin\ContentManagement\Galeri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Galeri\GaleriFoto;

class GaleriFotoController extends Controller
{
    public function userview()
    {
        $galerifoto = GaleriFoto::where('active',1)->get();
        return view('galeri.galerifoto',compact('galerifoto'));
    }
    public function index()
    {
        $data = GaleriFoto::where('active',1)->get();
        return view('admin.galeri.galerifoto.index',compact('data'));
    }
    public function add()
    {
        return view('admin.galeri.galerifoto.add');
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
    
                $file = new GaleriFoto();
                $file->title=$request->title;
                $file->content=$request->content;
                $file->img = json_encode($data);
                $file->active = 1;
                $file->save();
            }else{
                $data = GaleriFoto::create([
                    'title' => $request->pesan,
                    'content' => $request->content,
                    'active' => 1
                ]);
            }
    
            return redirect()->route('adm.galerifoto')
                            ->with('success','Berhasil Tambah Data');
    
        }
    public function edit($id)
    {
        $data = GaleriFoto::findorfail($id);
        return view('admin.galeri.galerifoto.edit',compact('data'));
       
                        
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
            $file = GaleriFoto::where('id',$request->id)->first();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->active = 1;
            $file->img = json_encode($data);
            $file->save();
        }else{
            $galerifoto = GaleriFoto::where('id',$request->id)->first();
            $galerifoto->title=$request->title;
            $galerifoto->content=$request->content;
            $galerifoto->active = 1;
            $galerifoto->img = $request->gambar;
            $galerifoto->update();
        }
        
        return redirect()->route('adm.galerifoto')
                        ->with('success','Berhasil Tambah Data');
    }

    public function destroy($id)
    {
        $data = GaleriFoto::findorfail($id);
        $data->delete();
        return back();
    }
}
