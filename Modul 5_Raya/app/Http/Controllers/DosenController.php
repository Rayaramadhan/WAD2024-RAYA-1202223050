<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    // Method to display all dosens
    public function index()
    {
        // Mendapatkan semua data dosen
        $dosens = Dosen::all();
        
        // Mengirimkan data dosen ke view
        return view('dosens.index', compact('dosens'));
    }

    // Method to show details of a single dosen
    public function show($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosens.show', compact('dosen'));
    }

    // Method to show the form for creating a new dosen
    public function create()
    {
        return view('dosens.create');
    }

    // Method to store a new dosen
    public function store(Request $request)
    {
        Dosen::create($request->all());
        return redirect()->route('dosens.index');
    }

    // Method to show the form for editing a dosen
    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosens.edit', compact('dosen'));
    }

    // Method to update the dosen information
    public function update(Request $request, $id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->update($request->all());
        return redirect()->route('dosens.index');
    }

    // Method to delete a dosen
    public function destroy($id)
    {
        Dosen::destroy($id);
        return redirect()->route('dosens.index');
    }
}
