<?php
namespace App\Http\Controllers;

// use App\Models\GuruController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller{

    public function proses(Request $request){
        // insert data ke table guru
        DB::table('guru')->insert([
            'nama' => $request->nama,
            'kota' => $request->kota,
            'pob' => $request->pob,
            'dob' => $request->dob,
            
        ]);

        return redirect('/crudguru');
    }

    public function tambah(){

        return view('gurutambah');
    }


    public function index(){
        // mengambil data dari table guru
        $guru = DB::table('guru')->get();

        // mengirim data guru ke view index
        return view('crudguru', ['guru' => $guru]);
    }
}

