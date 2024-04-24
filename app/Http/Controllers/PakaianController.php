<?php

namespace App\Http\Controllers;

use App\Models\Pakaian;
use Illuminate\Http\Request;

class PakaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pakaian = Pakaian::all();
        return view('pakaian',compact('pakaian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'nama' => 'required',
            'kategori_pakaian' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif',
            'stock' => 'required|numeric', // Tambahkan ini sesuai kebutuhan
        ]);
    
        $validator['gambar'] = $request->file('gambar')->store('img');
        
        Pakaian::create($validator);
        
        return redirect('pakaian')->with('success', 'data berhasil diinput');
        
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        {
            $data = Pakaian::find($id);
            return view('edit',compact('data'));
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'nama' => 'required',
            'kategori_pakaian' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif',
            'stock' => 'required|numeric', // Tambahkan ini sesuai kebutuhan
        ]);
    
        $validator['gambar'] = $request->file('gambar')->store('img');
        
        Pakaian::find($id)->update($validator);
    
        return redirect('pakaian')->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            Pakaian::find($id)->delete();
            return redirect('pakaian')->with('success','data berhasil dihapus');
        }
    }
}
