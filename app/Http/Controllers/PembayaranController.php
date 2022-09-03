<?php

namespace App\Http\Controllers;

use App\Models\pembayaran;
use App\Models\pembeli;
use App\Models\M_Mahasiswa;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pembayaran()
    {
        $datap = pembayaran::with('idpembayaran')->get();
      return view('pembayaran.datapembayaran',compact('datap') );
    }
    public function datapembayaran()
    {

        return view('pembayaran.datapembayaran');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahpembayaran($id)
    {
        $datapem = pembeli::with('idmerk')->where('id','=',$id)->firstOrFail();
        return view('pembayaran.tambahpembayaran', compact('datapem'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postpembayaran(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'bayar' => 'required|',
        ],[
            'bayar.required' => 'bayar harus diisi',
        ]);
        $data = Pembayaran::create([
            'handphone_id'=> $request->handphone_id,
            'bayar'=> $request->bayar,
        ]);

        return redirect('/pembayaran')->with('success', 'Data Berhasil Ditambah');
    }

    public function destroypem($id)
    {
        $item = pembayaran::find($id);
        $item->delete();
        return redirect('/pembayaran')->with('success','Data Berhasil Dihapus');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pembayaran $pembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(pembayaran $pembayaran)
    {
        //
    }
}
