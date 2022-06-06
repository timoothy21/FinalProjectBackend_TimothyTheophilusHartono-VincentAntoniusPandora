<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Barang;

class BarangController extends Controller
{
    public function showBarang()
    {
        // $barang = DB::table('barang')->get();

        $barang = Barang::all();

        return view('showbarang')->with(compact('barang'));
        // , ['barang' => $barang]
    }

    public function addBarang()
    {
        return view('addbarang');
    }

    public function store(Request $request)
    {
        // $barang = DB::table('barang')->insert([
        //     'category_barang' => $request->category_barang,
        //     'nama_barang' => $request->nama_barang,
        //     'harga_barang' => $request->harga_barang,
        //     'jumlah_barang' => $request->jumlah_barang,
        // ]);

        Barang::create([
            'category_barang' => $request->category_barang,
            'nama_barang' => $request->nama_barang,
            'harga_barang' => $request->harga_barang,
            'jumlah_barang' => $request->jumlah_barang,
        ]);

        return redirect('showbarang');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
