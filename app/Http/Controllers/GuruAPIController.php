<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Guru::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $guru = new Guru;
        $guru->nama_guru = $request->nama_guru;
        $guru->nip = $request->nip;
        $guru->no_hp = $request->no_hp;
        $guru->alamat = $request->alamat;
        $guru->save();

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
        $nama_guru = $request->nama_guru;
        $nip = $request->nip;
        $no_hp = $request->no_hp;
        $alamat = $request->alamat;

        $guru = Guru::find($id);
        $guru->nama_guru = $nama_guru;
        $guru->nip = $nip;
        $guru->no_hp = $no_hp;
        $guru->alamat = $alamat;
        $guru->save();

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
        $guru = Guru::find($id);
        $guru->delete();

        return "Data Berhasil di Hapus";
    }
}
