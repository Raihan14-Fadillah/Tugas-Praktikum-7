<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;
use ReflectionFunctionAbstract;

class MahasiswaController extends Controller
{
    public function show()
    {
        return view('home',['mahasiswa'=>Mahasiswa::all()]);
    }
    public function add(){
        return view('add');
    }
    public function addAct(Request $req){
        DB::table('mahasiswas')->insert([
            'nrp'=>$req->nrp,
            'nama'=>$req->nama,
            'email'=>$req->email,
            'alamat'=>$req->alamat,
        ]);
        return redirect('/home');
    }
    public function edit($id){
        $mahasiswa = DB::table('mahasiswas')->where('nrp',$id)->get();
        return view('edit',['mahasiswa'=>$mahasiswa]);
    }
    public function editAct(Request $req){
        DB::table('mahasiswas')->where('nrp',$req->nrp)->update([
            'nama'=>$req->nama,
            'email'=>$req->email,
            'alamat'=>$req->alamat,
        ]);
        return redirect('/home');
    }
    public function delete($id){
        DB::table('mahasiswas')->where('nrp',$id)->delete();
        return redirect('/home');
    }
}
