<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $siswa = DB::table('students')->get();
        // $siswa = Siswa::with('user')->get();
        // dd($siswa);
        return view('survey', compact('siswa'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tambahsurvey');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tanggal = Carbon::now();
        $request->validate([
            'name' => 'required|max:20',
            'email' => 'required|max:255',
            'number' => 'required|max:20',
            'jurusan' => 'required',
            'gender' => 'required',
            'hoby' => 'required|min:2',
            'alamat' => 'required'
        ]);


        DB::table('students')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'jurusan' => $request->jurusan,
            'gender' => $request->gender,
            'hoby' => $request->hoby,
            'alamat' => $request->alamat,
            'tanggal' => $tanggal,
            'id_data' => $request->id_data

        ]);
        return redirect('survey');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
