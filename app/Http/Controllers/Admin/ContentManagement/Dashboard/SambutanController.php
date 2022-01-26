<?php

namespace App\Http\Controllers\Admin\ContentManagement\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Dashboard\Sambutan;

class SambutanController extends Controller
{
    //
    public function userview()
    {
        $data = Sambutan::where('active',1)->first();
        return view('dashboard.sambutan',compact('data'));
    }
    public function index()
    {
        $data = Sambutan::where('active',1)->get(); 
        return view('admin.dashboard.sambutan.index',compact('data'));
    }
    public function add()
    {
        return view('admin.dashboard.sambutan.add');
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

            $file = new Sambutan();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->img = json_encode($data);
            $file->active = 1;
            $file->save();
        }else{
            $sambutan = Sambutan::create([
                'title' => $request->title,
                'content' => $request->content,
                'active' => 1
            ]);
        }

        return redirect()->route('adm.sambutan')
                        ->with('success','Berhasil Tambah Data');

    }
    public function edit($id)
    {
        $sambutan = Sambutan::findorfail($id);
        return view('admin.dashboard.sambutan.edit',compact('sambutan'));
       
                        
    }

    public function update(Request $request, $id)
    {
        // $sambutan = Sambutan::findorfail($id);
        // $sambutan->update($request->all());
        // // // $ruangguru = RuangGuru::find($id);
        // // $input = $request->all();
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
            $file = Sambutan::where('id',$request->id)->first();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->active = 1;
            $file->img = json_encode($data);
            $file->save();
        }else{
            $ruangguru = Sambutan::where('id',$request->id)->first();
            $ruangguru->title=$request->title;
            $ruangguru->content=$request->content;
            $ruangguru->active = 1;
            $ruangguru->img = $request->gambar;
            $ruangguru->update();
        }
        
        return redirect()->route('adm.sambutan')
                        ->with('success','Berhasil Tambah Data');
    }
    public function destroy($id)
    {
        $sambutan = Sambutan::findorfail($id);
        $sambutan->delete();
        return back();
    }

}
