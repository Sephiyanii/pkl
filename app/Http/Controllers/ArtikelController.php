<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use Session;
use Illuminate\Http\File;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::all();
        return view('backend.artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artikel = new Artikel;
        $artikel->judul = $request->get('judul');
        $artikel->slug = $request->get('slug');
        $artikel->content = $request->get('content');
        $artikel->tag = $request->get('tag');
        $artikel->kategori_id = $request->get('kategori_id');
        #foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_patch() . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);

            if ($artikel->foto) {
                $old_foto = $artikel->foto;
                $filepath = public_path() . '/asset/img/artikel/' . $artikel->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    //Exception $e;
                }
            }
            $artikel->foto = $filename;
        }
        $artikel->save();
        $artikel->tag()->sync($request->tag);

        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikel.show', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('backend.artikel.edit', compact('artikel'));
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
        $artikel = Artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->slug = $request->slug;
        $artikel->content = $request->content;
        $artikel->tag = $request->tag;
        $artikel->foto = $request->foto;
        $artikel->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil mengedit <b>$artikel->nama</b>"
        ]);
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id)->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data berhasil dihapus"
        ]);
        return redirect()->route('artikel.index');
    }
}
