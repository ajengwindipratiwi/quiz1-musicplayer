<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistController extends Controller
{
   public function index()
    {
        $data_artist = \App\Artist::all();
        return view ('artist.index' , ['data_artist'=>$data_artist]);
    }
   public function create(Request $request)
    {
        \App\Artist::create($request->all());
        return redirect('/artist')->with('sukses','Data Berhasil diinput');
    }
    public function edit ($id)
    {
        $artist = \App\Artist::find($id);
        return view('/artist/edit', ['artist' => $artist]);
    }

    public function update (Request $request, $id)
    {
        $artist = \App\Artist::find($id);
        $artist->update($request->all());
        return redirect('/artist')->with('sukses','Data Berhasil diupdate');
    }

    public function delete ($id)
    {
        $artist = \App\Artist::find($id);
        $artist->delete($artist);
        return redirect('/artist')->with('sukses','Data Berhasil dihapus');
    }
}
