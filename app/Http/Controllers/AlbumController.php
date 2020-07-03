<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
   public function index()
    {
        $data_album = \App\Album::all();
        return view ('album.index' , ['data_album'=>$data_album]);
    }
   public function create(Request $request)
    {
        \App\Album::create($request->all());
        return redirect('/album')->with('sukses','Data Berhasil diinput');
    }
    public function edit ($id)
    {
        $album = \App\Album::find($id);
        return view('/album/edit', ['album' => $album]);
    }

    public function update (Request $request, $id)
    {
        $album = \App\Album::find($id);
        $album->update($request->all());
        return redirect('/album')->with('sukses','Data Berhasil diupdate');
    }

    public function delete ($id)
    {
        $album = \App\Album::find($id);
        $album->delete($album);
        return redirect('/album')->with('sukses','Data Berhasil dihapus');
    }
}
