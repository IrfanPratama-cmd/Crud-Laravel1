<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use Illuminate\Http\Request;

class MuridAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Murid::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $murid = new Murid;
        $murid->nama_murid = $request->nama_murid;
        $murid->nis = $request->nis;
        $murid->no_hp = $request->no_hp;
        $murid->alamat = $request->alamat;
        $murid->save();

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
        $nama_murid = $request->nama_murid;
        $nis = $request->nis;
        $no_hp = $request->no_hp;
        $alamat = $request->alamat;

        $murid = Murid::find($id);
        $murid->nama_murid = $nama_murid;
        $murid->nis = $nis;
        $murid->no_hp = $no_hp;
        $murid->alamat = $alamat;
        $murid->save();

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
        $murid = Murid::find($id);
        $murid->delete();

        return "Data Berhasil di Hapus";
    }
}
