<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePenyewaRequest;
use App\Http\Requests\UpdatePnyewaRequest;
use App\Models\Penyewa;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{

    public function index()
    {
        return view('penyewa.index', compact('penyewas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penyewa.create');
    }

    public function store(StorePenyewakRequest $request)
    {
        Penyewa::create($request->validated());
        return redirect()->route('penyewa.index')->with('success', 'Penyewa created successfully');
    }

    public function edit(Penyewa $penyewa)
    {
        return view('penyewa.edit', compact('penyewas'));
    }

    public function update(UpdatePenyewaRequest $request, Penyewa $penyewa)
    {
        $penyewa->update($request->validated());
        return redirect()->route('penyewa.index')->with('success', 'Penyewa updated successfully');
    }

    public function destroy(Penyewa $penyewa)
    {
        $penyewa->delete();
        return redirect()->route('penyewa.index')->with('success', 'Penyewa deleted successfully');
    }
}
