<?php

namespace App\Http\Controllers;

use App\Models\M_Mahasiswa;
use App\Models\Pembeli;
use App\Models\supplier;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pembeli()
    {
    //   $data = Pembeli::with('idmerk')->get();
      $data = pembeli::with('idmerk')->get();
    //   dd($data);
      return view('datapembeli',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahpembeli()
    {
        // $data = supplier::with('pembeli.handphone')->get();
        $datamerk = M_Mahasiswa::all();
        // $dataid = supplier::all();
        return view('tambahpembeli', compact('datamerk'));
    }

    public function postpembeli(Request $request)
    {
        // dd($request->all());
        // $dataup = M_Mahasiswa::with('idmerk')->where('jenis_barang', '=', $request->merk)->first();
        // if(is_null($dataup)){
        //     return redirect()->route('tambahpembeli')->with('error', 'Data gak ada');
        // }else{
        //     if($dataup->jumlah >= $request->jumlah){
        //         $data = pembeli::create($request->all());
        //         $dataup->jumlah -= $request->jumlah;
        //         $dataup->save();
        //     }else{
        //         return redirect()->route('tambahpembeli')->with('error', 'Data Stok Kurang');
        //     }
        $this->validate($request,[
            'nama' => 'required|min:5|max:255',
            // 'handphone' => 'required',
            'harga' => 'required|',
            'foto' => 'required|mimes:png,jpg,jpeg,jfif,webp',
          ],[
            'nama.required' => 'nama harus diisi',
            'nama.min' => 'nama minimal 5 karakter',
            // 'handphone.required' => 'handphone harus diisi',
            'harga.required' => 'harga harus diisi',
            'foto.required' => 'foto harus diisi',
            'foto.mimes' => 'format foto harus png,jpg,jpeg,jfif,webp'
          ]);
          $datata = M_Mahasiswa::find($request->id_mahasiswa);
          if($datata->jumlah == 0 ){
            return back()->with('error','Stock tidak tersedia');
        }else{
        $data = pembeli::create([
            'nama'=> $request->nama,
            'handphone_id'=> $request->handphone_id,
            'harga'=> $request->harga,
            'alamat'=> $request->alamat,
            'foto'=> $request->foto
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        // $data = pembeli::create($request->all());
        // dd($request->merk);
        $dataup = M_Mahasiswa::find($request->id_mahasiswa);
        $dataup->jumlah -= 1;
        $dataup->save();
        return redirect('/pembeli')->with('success','Data Berhasil Ditambah');
    }
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function show(Pembeli $pembeli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function editpembeli($id)
    {
        $dataharga = M_Mahasiswa::all();
        $datamerk = M_Mahasiswa::all();
        $data = pembeli::findorfail($id);
        return view('editpembeli', compact('datamerk','data','dataharga'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function updatepembeli(Request $request, $id)
    {
    //    dd($request->all());
        $data = pembeli::find($id);
        $data->update([
            'nama'=> $request->nama,
            'merk'=> $request->merk,
            'harga'=> $request->harga,
            'alamat'=> $request->alamat,
            // 'foto'=> $request->foto
        // $data->update($request->all());
        ]);

        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

      return redirect('/pembeli')->with('success','Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function destroyp($id)
    {
        $item = pembeli::find($id);
        $item->delete();
        return redirect('/pembeli')->with('success','Data Berhasil Dihapus');
    }

    public function datahp(Request $request)
    {
        return 'test';
    }
    public function edithp(Request $request)
    {
        return 'test';
    }
}
