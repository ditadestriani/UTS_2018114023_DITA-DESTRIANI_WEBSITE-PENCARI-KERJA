<?php

namespace App\Http\Controllers;
use App\models\lokers;

use Illuminate\Http\Request;

class cobacontroller extends controller
{
    
public function index()
{
    $lokers = lokers::orderBy('id', 'desc') -> paginate(3);

    return view('lokers.index', compact('lokers'));
}
public function create()
{
    return view('lokers.create');
}
public function store(Request $request)
{


    // validate the request...
    $request->validate([
        'Nama' => 'required|unique:lokers|max:255',
        'Email' => 'required',
        'Pekerjaan' => 'required',
        'no_tlp' => 'required|numeric',
        'alamat' => 'required',

    ]);

    $lokers = new lokers;

    $lokers->Nama = $request->Nama; 
    $lokers->Email = $request->Email; 
    $lokers->Pekerjaan = $request->Pekerjaan; 
    $lokers->no_tlp = $request->no_tlp; 
    $lokers->alamat = $request->alamat;
    $lokers->save();

    return redirect('/');
    }
    public function show($id)
    {
        $loker = lokers::where('id', $id)->first();
        return view('lokers.show', ['loker' => $loker]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nama' => 'required|unique:lokers|max:255',
            'Email' => 'required|numeric',
            'Pekerjaan' => 'required',
            'no_tlp' => 'required|numeric',
            'alamat' => 'required',
        ]);

        lokers::find($id)-> update([

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
        lokers::find($id)->delete();
        return redirect('/');
    }


}
