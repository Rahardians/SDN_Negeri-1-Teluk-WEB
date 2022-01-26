<?php

namespace App\Http\Controllers\Admin\ContentManagement\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = User::get();
        return view('admin.User.index',compact('data'));
    }

    public function add()
    {
        return view('admin.user.add');
    }

    public function edit($id)
    {
        $user = User::findorfail($id);
        return view('admin.user.edit',compact('user'));
                        
    }

    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'name' =>  'required',
            'email' => 'required',
            'password' => 'required'
        ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => 1
            ]);
        

        return redirect()->route('adm.user')
                        ->with('success','Berhasil Tambah Data');

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' =>  'required',
            'email' => 'required',
            'password' => 'required'
        ]);
            $user = User::where('id',$request->id)->first();
            $user->name=$request->name;
            $user->email=$request->email;
            $user->password = $request->password;
            $user->update();
        
        
        return redirect()->route('adm.user')
                        ->with('success','Berhasil Tambah Data');
    }

    public function destroy($id)
    {
        $user = User::findorfail($id);
        $user->delete();
        return back();
    }

}
