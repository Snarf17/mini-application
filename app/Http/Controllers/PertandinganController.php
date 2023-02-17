<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertandingan;

class PertandinganController extends Controller
{
    public function index(){
        $pertandingan = Pertandingan::all();

        return view('pertandingan',compact(['pertandingan']));
    }

    public function create(Request $request){
        // dd($request->except(['_token']));
        $validated = $request->validate([
            'nama_klub' => 'required|unique:pertandingans',
            'kota_klub' => 'required',
        ]);
        Pertandingan::create([
            'nama_klub' => $request->nama_klub,
            'kota_klub' => $request->kota_klub,
        ]);

        return redirect('/');
    }

    // public function update($id){

        
    //     Pertandingan::find($id);
    // }

    public function update(Request $request){
        $request->validate([
            'ma'=>2,
            'me'=>3,
            's'=>3,
        ]);

        Pertandingan::where('id','=',$request->id)->update([
            'ma'=>$request->ma, 
            'me'=>$request->me,
            's'=>$request->s,
            'k'=>$request->k,
            
        ]);
    }
}

