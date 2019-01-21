<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Jadwal;
use App\Profile;

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
        return view('profile.index', compact('jadwals'))
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
        // $data = new \App\Jadwal();
        $profiles = DB::table('profiles')->max('id');
        //Grade::create($request->all());
        $file= new Jadwal();
        $file->profile_id=$profiles;
        $file->mapel1 = $request->input('mapel1');
        $file->mapel2 = $request->input('mapel2');
        $file->mapel3 = $request->input('mapel3');
        $file->mapel4 = $request->input('mapel4');
        $file->mapel5 = $request->input('mapel5');
        $file->guru1 = $request->input('guru1');
        $file->guru2 = $request->input('guru2');
        $file->guru3 = $request->input('guru3');
        $file->guru4 = $request->input('guru4');
        $file->guru5 = $request->input('guru5');
        //$path = $request->file('avatar')->store('avatars');
        //$data->avatar=$path;
        //$fileName = rand(300,300).'.'.$ext;
        //$file->move('uploads/avatars',$fileName);
        $file->save();
        return redirect()->route('profile.index')
                        ->with('success', 'jadwal berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $file->id_profile=$profiles;
        $file->mapel1 = $request->get('mapel1');
        $file->mapel2 = $request->get('mapel2');
        $file->mapel3 = $request->get('mapel3');
        $file->mapel4 = $request->get('mapel4');
        $file->mapel5 = $request->get('mapel5');
        $file->guru1 = $request->get('guru1');
        $file->guru2 = $request->get('guru2');
        $file->guru3 = $request->get('guru3');
        $file->guru4 = $request->get('guru4');
        $file->guru5 = $request->get('guru5');
        return view('profile.detail', compact('jadwals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::find($id);
        return view('profile.edit', compact('profile'));
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
        // $request->validate([
        //     'mapel1' => 'required',
        //     'mapel2' => 'required',
        //     'mapel3' => 'required',
        //     'mapel4' => 'required',
        //     'mapel5' => 'required',
        //     'guru1' => 'required',
        //     'guru2' => 'required',
        //     'guru3' => 'required',
        //     'guru4' => 'required',
        //     'guru5' => 'required'
        // ]);
        // $jadwal = Jadwal::find($id);
        // $jadwal->mapel1 = $request->input('mapel1');
        // $jadwal->mapel2 = $request->input('mapel2');
        // $jadwal->mapel3 = $request->input('mapel3');
        // $jadwal->mapel4 = $request->input('mapel4');
        // $jadwal->mapel5 = $request->input('mapel5');
        // $jadwal->guru1 = $request->input('guru1');
        // $jadwal->guru2 = $request->input('guru2');
        // $jadwal->guru3 = $request->input('guru3');
        // $jadwal->guru4 = $request->input('guru4');
        // $jadwal->guru5 = $request->input('guru5');
        // $jadwal->save();
        // return redirect()->route('jadwal.index')
        //                 ->with('success', 'Biodata murid berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $jadwal = Jadwal::find($id);
        // $jadwal->delete();
        // return redirect()->route('jadwal.index')
        //                 ->with('success', 'Biodata murid berhasil dihapus');
    }
}