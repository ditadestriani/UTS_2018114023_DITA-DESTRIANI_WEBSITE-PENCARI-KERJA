<?php

namespace App\Http\Controllers;
use App\models\jobs;

use Illuminate\Http\Request;

class jobcontroller extends controller
{
    
public function index()
{
    $jobs = jobs::orderBy('id', 'desc') -> paginate(3);

    return view('jobs.index', compact('jobs'));
}
public function create()
{
    return view('jobs.create');
}
public function store(Request $request)
{


    // validate the request...
    $request->validate([
        'nama_perusahaan' => 'required|unique:jobs|max:255',
        'alamat_perusahaan' => 'required',
        'pekerjaan' => 'required',


    ]);

    $jobs = new jobs;

    $jobs->nama_perusahaan = $request->nama_perusahaan; 
    $jobs->alamat_perusahaan = $request->alamat_perusahaan; 
    $jobs->Pekerjaan = $request->Pekerjaan; 
    $jobs->save();

    return redirect('/');
    }
    public function show($id)
    {
        $job = jobs::where('id', $id)->first();
        return view('jobs.show', ['job' => $job]);
    }
    public function edit($id)
    {
        $job = jobs::where('id', $id)->first();
        return view('jobs.edit', ['job' => $job]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_perusahaan' => 'required|unique:jobs|max:255',
            'alamat_perusahaan' => 'required|numeric',
            'Pekerjaan' => 'required',
        
        ]);

        jobs::find($id)-> update([

            'nama_perusahaan' => $request->nama_perusahaan,
            'alamat_perusahaan' => $request->alamat_perusahaan,
            'Pekerjaan' => $request->Pekerjaan,
        
        ]);

        return redirect('/');
    }
    public function destroy($id)
    {
        s::find($id)->delete();
        return redirect('/');
    }


}
