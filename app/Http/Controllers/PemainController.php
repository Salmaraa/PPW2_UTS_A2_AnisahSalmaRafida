<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
use Illuminate\Http\Request;

class PemainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_pemain = Pemain::all()->sortByDesc('id');
        $no =0;
        return view('pemain.index', compact('data_pemain', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('pemain.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $pemain = new Pemain;
        $pemain->nama_pemain= $request->nama_pemain;
        $pemain->no_punggung = $request->no_punggung;
        $pemain->posisi = $request->posisi;
        $pemain->save();
        return redirect('/pemain');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
