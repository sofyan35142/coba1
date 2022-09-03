<?php

namespace App\Http\Controllers;

use App\Models\rating;
use App\Models\M_Mahasiswa;
use App\Models\pembayaran;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rating()
  {
    $datap = rating::with('idrating')->get();
    $data = rating::all();
    return view('rating.datarating', compact('datap', 'data'));
  }
  public function datarating()
  {
      return view('rating.datarating');
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahrating($id)
    {
$data=pembayaran::with('idpembayaran')->findOrFail($id);
        return view('rating.tambahrating',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postrating(Request $request)
    {
        $this->validate($request,[
           'nilai' => 'required|',
           'masukkan' => 'required|'
        ],[
            'nilai.required' => 'nilai harus diisi',
            'masukkan.required' => 'masukkan harus diisi'
        ]);
        // $datas = rating::
        $data = rating::create([
            'handphone_id'=> $request->handphone_id,
            'nilai'=> $request->nilai,
            'masukkan'=> $request->masukkan,
        ]);

        return redirect('/rating')->with('success', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function destroyra($id)
    {
        $item = rating::find($id);
        $item->delete();
        return redirect('/rating')->with('success','Data Berhasil Dihapus');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $datap = rating::with('idrating')->get();
        $data = rating::with('idrating')->where('handphone_id',$id)->get();
        // dd($data);
        return view('rating.ratingadmin',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(rating $rating)
    {
        //
    }
}
