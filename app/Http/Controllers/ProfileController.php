<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Profile;
use App\Grade;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()             
    {
        $profiles = DB::table('profiles')
        ->leftJoin('grades', 'profiles.id', '=', 'grades.profile_id')
        ->select('profiles.*', 'grades.kelas', 'grades.jurusan')
        ->get();
        return view('profile.index', compact('profiles'))
                ->with('i', (request()->input('page',1) -1)*5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'no_telp' => 'required'    
        ]);
        Profile::create($data);
        return redirect()->route('profile.index')
                         ->with('success', 'telah di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = Profile::find($id);
        return view('profile.detail', compact('grade'));
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
        $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'no_telpon' => 'required'
          ]);
          $profile = Profile::find($id);
          $profile->nama = $request->get('nama');
          $profile->tempat_lahir = $request->get('tempat_lahir');
          $profile->tanggal_lahir = $request->get('tanggal_lahir');
          $profile->jenis_kelamin = $request->get('jenis_kelamin');
          $profile->no_telp = $request->get('no_telp');
          $profile->save();
          return redirect()->route('profile.index')
                           ->with('success', 'sebuah data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Profile::find($id);
        $profile->delete();
        return redirect()->route('profile.index')
                        ->with('success', 'sebuah data berhasil dihapus');
    }
}
