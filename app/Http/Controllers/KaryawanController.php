<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // fungsi untuk mengarahkan ke halaman index
    {
       
        $data = Karyawan::all();

        return view('karyawan.index', compact('data'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // fungsi untuk membuat row baru di database
    {
        $data = new Karyawan;

        return view('karyawan.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // fungsi untuk menyimpan data yang diisi di form
    {
        $data = new Karyawan;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->job_position = $request->job_position;
        $data->gender = $request->gender;
        $data->join_date = $request->join_date;


        $data->save();

        return redirect('karyawan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show() // fungsi untuk menampilkan semua data di tabel karyawan
    {
        $data = Karyawan::paginate(25);

        return view('karyawan', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit($id) // fungsi untuk menampilkan data yg dipencet dan editable
    {
        $data = Karyawan::find($id);

        return view('karyawan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) // sama dengan fungsi store tapi ini tidak membuat row baru tetapi mengubah data saja jadi tidak membuat data baru
    {
        $data = Karyawan::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->job_position = $request->job_position;
        $data->gender = $request->gender;
        $data->join_date = $request->join_date;
        $data->save();

        return redirect('karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) // fungsi untuk menghapus row data
    {
        $data = Karyawan::find($id);
        $data->delete();

        return redirect('karyawan');
    }
}
