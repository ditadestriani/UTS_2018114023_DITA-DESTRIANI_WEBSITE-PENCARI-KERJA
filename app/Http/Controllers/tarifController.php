<?php

namespace App\Http\Controllers;
use App\models\tarifs;

use Illuminate\Http\Request;

class tarifController extends controller
{
    
public function index()
{
    $tarifs = tarifs::orderBy('id', 'desc') -> paginate(3);

    return view('tarifs.index', compact('tarifs'));
}
public function create()
{
    return view('tarifs.create');
}
public function store(Request $request)
{


    // validate the request...
    $request->validate([
        'jangka_waktu' => 'required|unique:tarifs|max:255',
        'tarif_harga' => 'required',
        'jenis_iklan' => 'required',


    ]);

    $tarifs = new tarifs;

    $tarifs->jangka_waktu = $request->jangka_waktu; 
    $tarifs->tarif_harga = $request->tarif_harga; 
    $tarifs->jenis_iklan = $request->jenis_iklan; 
    $tarifs->save();

    return redirect('/');
    }
    public function show($id)
    {
        $tarif = tarifs::where('id', $id)->first();
        return view('tarifs.show', ['tarif' => $tarif]);
    }
    public function edit($id)
    {
        $tarif = tarifs::where('id', $id)->first();
        return view('tarifs.edit', ['tarif' => $tarif]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'jangka_waktu' => 'required|unique:tarifs|max:255',
            'tarif_harga' => 'required|numeric',
            'jenis_iklan' => 'required',
        
        ]);

        tarifs::find($id)-> update([

            'jangka_waktu' => $request->jangka_waktu,
            'tarif_harga' => $request->tarif_harga,
            'jenis_iklan' => $request->jenis_iklan,
        
        ]);

        return redirect('/');
    }
    public function destroy($id)
    {
        s::find($id)->delete();
        return redirect('/');
    }


}
