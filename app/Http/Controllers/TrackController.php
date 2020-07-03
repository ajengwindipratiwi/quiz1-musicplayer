<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackController extends Controller
{
   public function index()
    {
        $data_track = \App\Track::all();
        return view ('track.index' , ['data_track'=>$data_track]);
    }
   public function create(Request $request)
    {
        \App\Track::create($request->all());
        return redirect('/track')->with('sukses','Data Berhasil diinput');
    }
    public function edit ($id)
    {
        $track = \App\Track::find($id);
        return view('/track/edit', ['track' => $track]);
    }

    public function update (Request $request, $id)
    {
        $track = \App\Album::find($id);
        $track->update($request->all());
        return redirect('/track')->with('sukses','Data Berhasil diupdate');
    }

    public function delete ($id)
    {
        $track = \App\Track::find($id);
        $track->delete($track);
        return redirect('/track')->with('sukses','Data Berhasil dihapus');
    }
}
