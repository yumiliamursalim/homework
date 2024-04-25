<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    public function index()
    {
        return view("User");
    }

    public function masterdata()
    {
        return view("masterdata");
    }

    public function tambah()
    {
        return view('tambahuser'); 
    }

    public function add(Request $request)
    {
        //validasi data yang diinputkan oleh user
        $this->validate($request,[
            'nama'=>'required|min:3|max:50',
            'kelas'=>'required',
            'jenis_kelamin' => ['required','in:Laki-Laki,Perempuan'],
            'foto'          => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ],[
            'nama.required' =>"Nama harus didisi",
            'nama.min'      =>"Nama minimal 3 karakter",
            'nama.max'      =>"Nama maksimal 50 karakter",

            'foto.image'    =>"Foto harus berupa gambar",
            'foto.mimes'    =>"Format gambar hanya JPG, PNG, GIF, SVG",
            'foto.max'      =>"Ukuran foto terlalu besar Maksimal 2MB",
        ]);
        if ($request->file('foto')) {
            #code... 
            $imgname = $request->nama.'.'.$request->foto->extension();
            $request->foto->move(public_path('gambar'),$imgname);
        }else{
            $imgname='default.png';
        }
        $user = new UserModel();
        $data = [
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'foto' => $imgname,
        ];
        $user->addData($data);
        return redirect('/user')->with('status', 'Tambah Data Berhasil');
    }
}


