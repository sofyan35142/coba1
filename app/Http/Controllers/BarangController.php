<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\supplier;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function barang()
    {
      $data = barang::with('supplier')->get();
      return view('barang.databarang')->with([
        'data'=> $data
      ]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahbarang()
    {
        $databarang = supplier::all();
        return view('barang.tambahbarang', compact('databarang'));
    }

    public function postbarang(Request $request)
    {

        // dd($request->all());
        $this->validate($request,[
            'barang_masuk' => 'required|',
            'jumlah' => 'required|',
            'barang_keluar' => 'required|',
            'jumlahh' => 'required|',
          ]);
        $data = barang::create([
            'barang_masuk'=> $request->barang_masuk,
            'jumlah'=> $request->jumlah,
            'barang_keluar'=> $request->barang_keluar,
            'jumlahh'=> $request->jumlahh,
        ]);

        return redirect('/barang')->with('success','Data Berhasil Ditambah');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editbarang($id)
    {
        $databarang = supplier::all();
        $data = barang::findorfail($id);
        return view('barang.editbarang', compact('data','databarang'));
        
    }


    public function updatebarang(Request $request, $id)
    {
        $data = barang::find($id);
    //    dd($request->all());
    $data->update([
        'barang_masuk'=> $request->barang_masuk,
        'jumlah'=> $request->jumlah,
        'barang_keluar'=> $request->barang_keluar,
        'jumlahh'=> $request->jumlahh,
    ]);

    return redirect('/barang')->with('success','Data Berhasil Ditambah');
    }


    public function destroyb($id)
    {
        $item = barang::find($id);
        $item->delete();
        return redirect('/barang')->with('success','Data Berhasil Dihapus');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(barang $barang)
    {
        //
    }
}
