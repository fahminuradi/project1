<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
use Illuminate\Support\Facades\Storage;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwals = Jadwal::latest()->paginate(5);
        return view('jadwal.index', compact('jadwals'))
                ->with('i', (request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jadwal.create');
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
            'avatar' => 'required',
            'mapel1' => 'required',
            'mapel2' => 'required',
            'mapel3' => 'required',
            'mapel4' => 'required',
            'mapel5' => 'required',
            'guru1' => 'required',
            'guru2' => 'required',
            'guru3' => 'required',
            'guru4' => 'required',
            'guru5' => 'required'
        ]);
        $data = new \App\Jadwal();
        $data->mapel1 = $request->input('mapel1');
        $data->mapel2 = $request->input('mapel2');
        $data->mapel3 = $request->input('mapel3');
        $data->mapel4 = $request->input('mapel4');
        $data->mapel5 = $request->input('mapel5');
        $data->guru1 = $request->input('guru1');
        $data->guru2 = $request->input('guru2');
        $data->guru3 = $request->input('guru3');
        $data->guru4 = $request->input('guru4');
        $data->guru5 = $request->input('guru5');
        $path = $request->file('avatar')->store('avatars');
        $data->avatar=$path;
        echo asset('storage/file.txt');
        //$fileName = rand(300,300).'.'.$ext;
        //$file->move('uploads/avatars',$fileName);
        $data->save();
        return redirect()->route('jadwal.index', compact('jadwal'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jadwal = Jadwal::find($id);
        return view('jadwal.detail', compact('jadwal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadwal = Jadwal::find($id);
        return view('jadwal.edit', compact('jadwal'));
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
            'avatar' => 'required',
            'mapel1' => 'required',
            'mapel2' => 'required',
            'mapel3' => 'required',
            'mapel4' => 'required',
            'mapel5' => 'required',
            'guru1' => 'required',
            'guru2' => 'required',
            'guru3' => 'required',
            'guru4' => 'required',
            'guru5' => 'required'
        ]);
        $jadwal = Jadwal::find($id);

        $jadwal->mapel1 = $request->input('mapel1');
        $jadwal->mapel2 = $request->input('mapel2');
        $jadwal->mapel3 = $request->input('mapel3');
        $jadwal->mapel4 = $request->input('mapel4');
        $jadwal->mapel5 = $request->input('mapel5');
        $jadwal->guru1 = $request->input('guru1');
        $jadwal->guru2 = $request->input('guru2');
        $jadwal->guru3 = $request->input('guru3');
        $jadwal->guru4 = $request->input('guru4');
        $jadwal->guru5 = $request->input('guru5');
        $path = $request->file('avatar')->store('avatars');
        $jadwal->avatar=$path;
        $jadwal->save();
        return redirect()->route('jadwal.index')
                        ->with('success', 'Biodata murid berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->delete();
        return redirect()->route('jadwal.index')
                        ->with('success', 'Biodata murid berhasil dihapus');
    }
}