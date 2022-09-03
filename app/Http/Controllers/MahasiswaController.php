<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Mahasiswa;
use App\Models\pembeli;
use App\Models\supplier;

use function PHPSTORM_META\map;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function table()
    {
        // $dataharga = M_Mahasiswa::all();
        $data = M_Mahasiswa::all();
        // dd($data);
        return view('table', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data = M_Mahasiswa::all();
        return view('create', compact( 'data'));
        // return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'jenis_barang' => 'required|',
            'fitur' => 'required|',
            'harga_jual' => 'required|',
            // 'stock' => 'required|',
            'foto' => 'required|mimes:png,jpg,jpeg,jfif,webp',
          ],[
            'jenis_barang.required' => 'jenis hanphone harus diisi',
            'fitur.required' => 'fitur harus diisi',
            'harga_jual.required' => 'harga harus diisi',
            // 'stock.required' => 'stock harus diisi',
            'foto.required' => 'foto harus diisi',
            'foto.mimes' => 'format foto harus png,jpg,jpeg,jfif,webp'
          ]);

        $data = M_Mahasiswa::create([
            'jenis_barang'=> $request->jenis_barang,
            'fitur'=> implode(',', $request->fitur),
            'harga_jual'=> $request->harga_jual,
            'jumlah'=> 0,
            'foto'=> $request->foto,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }


        return redirect('/table')->with('success','Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = M_Mahasiswa::findorfail($id);
        return view('show')->with([
          'data'=> $data
        ]);
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
    // public function update(Request $request, $id)
    // {
    //     $item = M_Mahasiswa::findorfail($id);
    //     $data = $request->except(['_token']);
    //     $item->update($data);
    //     return redirect('/');
    // }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $data = M_Mahasiswa::find($id);
        // $data = $request->except(['_token']);

        $data->update([
            'jenis_barang'=> $request->jenis_barang,
            'fitur'=> implode(',', $request->fitur),
            'harga_jual'=> $request->harga_jual,
            'jumlah'=> $request->jumlah,
            // 'foto'=> $request->foto
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect('/table')->with('success', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroym($id)
    {
        $count = supplier::where('jenis_barang' ,$id)->count();
        $countt = pembeli::where('id' ,$id)->count();
        if ($count > 0) {
            return back()->with('error', 'Jenis Handphone Sedang Digunakan');
        } elseif($countt > 0){
            return back()->with('error', 'Jenis Handphone Sedang Digunakan');
        }
         else {
        $item = M_Mahasiswa::find($id);
        $item->delete();
        return redirect('/table')->with('success', 'Data Berhasil Dihapus');
    }
}
}
