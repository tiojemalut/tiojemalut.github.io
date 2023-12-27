<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa=Mahasiswa::all();
        return view ('mahasiswa.index',compact(['mahasiswa']));
        
    }
   public function tambahData(){
        return view('mahasiswa.tambahData');
    }
    public function simpan(request $request)
    {
         //dd($request->excep(['_token','submit']));
        $data = Mahasiswa::create($request->except(['_token', 'submit']));
        if ($request->hasFile('foto')){
            $request->file('foto')->move('fotoMhs/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        } 
         return redirect('/mahasiswa');
    }
    public function edit($id){
        $mahasiswa=Mahasiswa::find($id);        
        return view('mahasiswa.edit',compact(['mahasiswa']));
    }
    public function update($id, request $request){
        $mahasiswa=Mahasiswa::find($id);
        $mahasiswa->update($request->except(['_token', 'submit']));
        return redirect('/mahasiswa');
        
    }

public function delete($id){
    $mahasiswa=Mahasiswa::find($id);
    $mahasiswa->delete();
    return redirect('/mahasiswa');
    
}
}