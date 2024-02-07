<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\YourModel; // Replace with your actual model name
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DataController extends Controller
{
    public function index()
    {
        // Your index logic here
        $kontak = DB::table('kontak')->get();
        return view('crud.index', ['kontak' => $kontak]);
        // return view('index'); // Assuming you have an index.blade.php file in your resources/views directory
    }
    public function tambah(){
        return view('crud.tambah');
    }
    public function store(Request $request){
        DB::table('kontak')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'notelp' => $request->notelp
        ]);
        return redirect('/');
    }
    public function hapus($id){
        DB::table('kontak')->where('id', $id)->delete();
        return redirect('/');
    }
    public function edit($id){
        $kontak = DB::table('kontak')->where('id', $id)->get();
        return view('crud.edit', ['kontak'=>$kontak]);
    }
    public function update(Request $request){
        DB::table('kontak')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'notelp' => $request->notelp
        ]);
        return redirect('/');
    }
}