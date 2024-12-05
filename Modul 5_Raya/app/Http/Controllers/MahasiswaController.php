<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Dosen; // Import the Dosen model
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
{
    // Eager load the dosen relationship
    $mahasiswas = Mahasiswa::with('dosen')->get();
    return view('mahasiswas.index', compact('mahasiswas'));
}

    public function show($id)
{
    // Eager load the dosen relationship
    $mahasiswa = Mahasiswa::with('dosen')->findOrFail($id);
    return view('mahasiswas.show', compact('mahasiswa'));
}

    public function create()
    {
        // Fetch all dosens to populate the dropdown in the form
        $dosens = Dosen::all(); // Get all dosen records
        return view('mahasiswas.create', compact('dosens')); // Pass dosens data to the view
    }

    public function store(Request $request)
    {
        // Menyimpan data mahasiswa baru
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswas.index');
    }

    public function edit($id)
    {
    $mahasiswa = Mahasiswa::findOrFail($id);
    $dosens = Dosen::all(); // Fetch all dosens
    return view('mahasiswas.edit', compact('mahasiswa', 'dosens')); // Pass dosens along with mahasiswa
    }    


    public function update(Request $request, $id)
    {
        // Mengupdate data mahasiswa
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswas.index');
    }

    public function destroy($id)
    {
        // Menghapus data mahasiswa
        Mahasiswa::destroy($id);
        return redirect()->route('mahasiswas.index');
    }

    public function dosen()
{
    return $this->belongsTo(Dosen::class, 'dosen_id'); // dosen_id is the foreign key in Mahasiswa
}

    
}
