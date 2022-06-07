<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $murid = Murid::all();
        dd($murid);
        // return view('murid.index', ['murid' => $murid]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('murid.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_murid' => 'required',
            'nis' => 'required',
        ]);

        Murid::create($request->all());

        return redirect('/murid')->with('status', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Murid  $murid
     * @return \Illuminate\Http\Response
     */
    public function edit(Murid $murid)
    {
        return view('murid.edit', compact('murid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_murid' => 'required',
            'nis' => 'required',
        ]);

        Murid::where('id', $id)
            ->update([
                'nama_murid' => $request->nama_murid,
                'nis' => $request->nis,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
            ]);
        return redirect('/murid')->with('status', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Murid::destroy($id);
        return redirect('/murid')->with('status', 'Data berhasil dihapus!');
    }
}
