<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Materi::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $materi = new Materi;
        $materi->nama_materi = $request->nama_materi;
        $materi->kode = $request->kode;
        $materi->guru = $request->guru;
        $materi->isi = $request->isi;
        $materi->save();

        return "Data Berhasil Masuk";
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
        $nama_materi = $request->nama_materi;
        $kode = $request->kode;
        $guru = $request->guru;
        $isi = $request->isi;

        $materi = Materi::find($id);
        $materi->nama_materi = $nama_materi;
        $materi->kode = $kode;
        $materi->guru = $guru;
        $materi->isi = $isi;
        $materi->save();

        return  "Data Berhasil di Update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materi = Materi::find($id);
        $materi->delete();

        return "Data Berhasil di Hapus";
    }
}
