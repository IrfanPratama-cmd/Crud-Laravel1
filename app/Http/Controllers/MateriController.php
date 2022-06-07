<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materi = Materi::all();
        return view('materi.index', ['materi' => $materi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = Guru::all();
        return view('materi.create', ['guru' => $guru]);
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
            'nama_materi' => 'required',
            'kode' => 'required',
        ]);

        Materi::create($request->all());

        return redirect('/materi')->with('status', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materi $materi
     * @return \Illuminate\Http\Response
     */
    public function show(Materi $materi)
    {
        return view('materi.show', compact('materi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materi $materi
     * @return \Illuminate\Http\Response
     */
    public function edit(Materi $materi)
    {
        $guru = Guru::all();
        return view('materi.edit', compact('materi'), ['guru' => $guru]);
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
            'nama_materi' => 'required',
            'kode' => 'required',
        ]);

        Materi::where('id', $id)
            ->update([
                'nama_materi' => $request->nama_materi,
                'kode' => $request->kode,
                'guru' => $request->guru,
                'isi' => $request->isi,
            ]);
        return redirect('/materi')->with('status', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Materi::destroy($id);
        return redirect('/materi')->with('status', 'Data berhasil dihapus!');
    }
}
