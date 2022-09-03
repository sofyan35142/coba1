<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
  public function landing()
  {

      return view('landingpage.landingpage');
  }


  public function pegawai()
  {
    $data = Pegawai::all();
    return view('pegawai.datapegawai')->with([
      'data'=> $data
    ]);
  }

    public function tambahpegawai()
    {

        return view('pegawai.tambahpegawai');
    }

    public function postpegawai(Request $request)
    {
      $this->validate($request,[
        'nama' => 'required|min:5|max:255',
        'notelp' => 'required|',
        'jenis_kelamin' => 'required|',
        'alamat' => 'required|',
        'foto' => 'required|mimes:png,jpg,jpeg,jfif,webp',
      ],[
        'nama.required' => 'nama harus diisi',
        'notelp.required' => 'no telepon harus diiisi',
        'jenis_kelamin.required' => 'jenis kelamin harus diisi',
        'alamat.required' => 'alamat harus diisi',
        'foto.required' => 'foto harus diisi',
        'foto.mimes' => 'format foto harus png,jpg,jpeg,jfif,webp',
      ]);
        $data = pegawai::create([
            'nama'=> $request->nama,
            'notelp'=> $request->notelp,
            'jenis_kelamin'=> $request->jenis_kelamin,
            'alamat'=> $request->alamat,
            'foto'=> $request->foto
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('/pegawai')->with('success', 'Data Berhasil Ditambah');
    }

    public function editpegawai($id)
    {
      $data = pegawai::findorfail($id);
            return view('pegawai.editpegawai', compact('data'));

    }

    public function updatepegawai(Request $request, $id)
    {
    //    dd($request->all());
        $data = pegawai::find($id);
        // $data->update([
        //     'nama'=> $request->nama,
        //     'merk'=> $request->merk,
        //     'jumlah'=> $request->jumlah,
        //     'harga'=>  $request->harga,
        // ]);
        $data->update($request->all());

        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('/pegawai')->with('success', 'Data Berhasil Diedit');
    }

    public function destroype($id)
    {
        $item = pegawai::find($id);
        $item->delete();
        return redirect('/pegawai')->with('success','Data Berhasil Dihapus');
    }

}
