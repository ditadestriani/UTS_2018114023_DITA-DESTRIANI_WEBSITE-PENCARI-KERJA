<?php

namespace App\Http\Controllers;
use App\models\educations;

use Illuminate\Http\Request;

class Pendidikancontroller extends controller
{
    
public function index()
{
    $educations = educations::orderBy('id', 'desc') -> paginate(3);

    return view('educations.index', compact('educations'));
}
public function create()
{
    return view('educations.create');
}
public function store(Request $request)
{


    // validate the request...
    $request->validate([
        'Nama' => 'required|unique:educations|max:255',
        'Email' => 'required',
        'Pekerjaan' => 'required',
        'no_tlp' => 'required|numeric',
        'alamat' => 'required',

    ]);

    $educations = new educations;

    $educations->Nama = $request->Nama; 
    $educations->Email = $request->Email; 
    $educations->Pekerjaan = $request->Pekerjaan; 
    $educations->no_tlp = $request->no_tlp; 
    $educations->alamat = $request->alamat;
    $educations->save();

    return redirect('/');
    }
    public function show($id)
    {
        $education = educations::where('id', $id)->first();
        return view('educations.show', ['education' => $education]);
    }
    public function edit($id)
    {
        $education = educations::where('id', $id)->first();
        return view('educations.edit', ['education' => $education]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nama' => 'required|unique:educations|max:255',
            'Email' => 'required|numeric',
            'Pekerjaan' => 'required',
            'no_tlp' => 'required|numeric',
            'alamat' => 'required',
        ]);

        educations::find($id)-> update([

            'Nama' => $request->Nama,
            'Email' => $request->Email,
            'Pekerjaan' => $request->Pekerjaan,
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat
        ]);

        return redirect('/');
    }
    public function destroy($id)
    {
        educations::find($id)->delete();
        return redirect('/');
    }


}
