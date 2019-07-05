<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sekolah;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sekolah = Sekolah::all();
        $response = [
            'success'  => true,
            'data'  => $sekolah,
            'meddage' => 'Berhasil Ditampilkan'
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sekolah = new Sekolah();
        $sekolah->nama = $request->nama;
        $sekolah->kelas = $request->kelas;
        $sekolah->umur = $request->umur;
        $sekolah->jurusan = $request->jurusan;
        $sekolah->sekolah = $request->sekolah;
        $sekolah->save();

        $response = [
            'success' => true,
            'data' => $sekolah,
            'message' => 'Data berhasil disimpan'
        ];
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Sekolah::findOrFail($id);
        $response = [
            'success'  => true,
            'data'  => $data,
            'meddage' => 'Berhasil Ditampilkan'
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sekolah = Sekolah::findOrFail($id);
        $sekolah->nama = $request->nama;
        $sekolah->kelas = $request->kelas;
        $sekolah->umur = $request->umur;
        $sekolah->jurusan = $request->jurusan;
        $sekolah->sekolah = $request->sekolah;
        $sekolah->save();

        $response = [
            'success' => true,
            'data' => $sekolah,
            'message' => 'Data berhasil disimpan'
        ];
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Sekolah::findOrFail($id);
        $data->delete();

        $response = [
            'success' => true,
            'data' => $data,
            'message' => 'Data berhasil disimpan'
        ];
        return response()->json($response, 200);
    }
}
