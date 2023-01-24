<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get($id = null)
    {
        if (isset($id)) {
            $penerbit = Penerbit::findOrFail($id);
            return response()->json(['msg' => 'Data retrieved', 'data' => $penerbit], 200);
        } else {
            $penerbits = Penerbit::get();
            return response()->json(['msg' => 'Data retrieved', 'data' => $penerbits], 200);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penerbit = Penerbit::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'verif_penerbit' => $request->verif_penerbit,
        ]);
        return response()->json(['msg' => 'Data created', 'data' => $penerbit], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function show(Penerbit $penerbit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function edit(Penerbit $penerbit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penerbit $penerbit, $id)
    {
        $penerbit = Penerbit::findOrFail($id);
        $penerbit->update($request->all());
        return response()->json(['msg' => 'Data updated', 'data' => $penerbit], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penerbit $penerbit, $id)
    {
        $penerbit = Penerbit::findOrFail($id);
        $penerbit->delete();
        return response()->json(['msg' => 'Data deleted'], 200);
    }
}
