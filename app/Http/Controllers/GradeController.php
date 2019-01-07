<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grade;
use App\Profile;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $grades = Grade::latest()->paginate(5);
        return view('grade.index', compact('grades'))
                    ->with('i', (request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grade.create');
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
            'kelas' => 'required',
            'jurusan' => 'required'   
        ]);
        Grade::create($request->all());
        return redirect()->route('grade.index')
                        ->with('success', 'sebuah data telah di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $grade = grade::find($id);
        return view('grade.detail', compact('grade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grade = Grade::find($id);
        return view('grade.edit', compact('grade'));
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
            'hari' => 'required',
            'kelas' => 'required'
          ]);
          $grade = Grade::find($id);
          $grade->kelas = $request->get('hari');
          $grade->jurusan = $request->get('kelas');
          $profile->save();
          return redirect()->route('grade.index')
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
        $grade = Grade::find($id);
        $grade->delete();
        return redirect()->route('grade.index')
                        ->with('success', 'sebuah data berhasil dihapus');
    }
}
