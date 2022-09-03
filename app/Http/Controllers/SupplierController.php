<?php

namespace App\Http\Controllers;

use App\Models\supplier;
use App\Models\M_Mahasiswa;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function supplier()
    {
        $data = supplier::with('idsupplier')->get();
      return view('supplier.datasupplier', compact('data'));
    }

    public function tambahsupplier()
    {
        $databarang = M_Mahasiswa::all();
        $data = supplier::all();
        return view('supplier.tambahsupplier', compact('databarang','data'));
    }

    public function postsupplier(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'nama_supplier' => 'required|min:5|max:255',
            'jenis_barang' => 'required|',
            'fitur' => 'required|',
            'jumlah' => 'required|',
            'harga_beli' => 'required|',
            'notelp' => 'required|',
            'alamat' => 'required|',
          ],[
            'nama_supplier.required' => 'nama supplier harus diisi',
            'nama_supplier.min' => 'nama minimal 5 karakter',
            'jenis_barang.required' => 'jenis barang harus diisi',
            'fitur.required' => 'jenis barang harus diisi',
            'jumlah.required'=> 'jumlah harus diisi',
            'harga_beli.required' => 'harga harus diisi',
            'notelp.required' => 'no telepon harus diisi',
            'alamat.required' => 'alamat harus diisi',
          ]);
           // update stok barang
           $datas = Supplier::with('idsupplier')->where('jenis_barang', '=',$request->jenis_barang)->First();
           $datasu = M_Mahasiswa::find($request->jenis_barang);

           if (is_null($datas)) {
                $data = supplier::create([
                    'nama_supplier'=> $request->nama_supplier,
                    'jenis_barang'=> $request->jenis_barang,
                    'fitur'=> $request->fitur,
                    'jumlah'=> $request->jumlah,
                    'harga_beli'=> $request->harga_beli,
                    'hargatotal'=> $request->hargatotal,
                    'notelp'=> $request->notelp,
                    'alamat'=> $request->alamat,
                ]);

                        // $datasu->update([
                        //     'harga_jual'=> $request->harga_jual,
                        // ]);
               $stoksekarang = $datasu->jumlah;
               $stokupdate = $stoksekarang + $request->jumlah ;
               $datasu->update(['jumlah' => $stokupdate]);
           }else{
               $stoksekarang = $datas->jumlah;
               $stokupdate = $stoksekarang + $request->jumlah;
               $datasu->update(['jumlah' => $stokupdate]);
               $datas->update(['jumlah' => $stokupdate]);
           }


        // $up = M_Mahasiswa::all();
        // $up->update([
        //     'stock' => $up->stock + $request->jumlah,
        // ]);
        // $data = supplier::create($request->all());
        // $dataup = M_Mahasiswa::find($request->jenis_barang);
        // $dataup->stock += $request->jumlah ;
        // $dataup->save();

        return redirect('/supplier')->with('success','Data Berhasil Ditambah');
      }

        public function editsupplier($id)
        {
            $data = supplier::findorfail($id);
            $databarang = M_Mahasiswa::all();
            return view('supplier.editsupplier', compact('data', 'databarang'));

        }


        public function updatesupplier(Request $request, $id)
        {
            $data = supplier::find($id);
        //    dd($request->all());
        $data->update([
            'nama_supplier'=> $request->nama_supplier,
            'jenis_barang'=> $request->jenis_barang,
            'fitur'=> $request->fitur,
            'jumlah'=> $request->jumlah,
            'harga_beli'=> $request->harga_beli,
            'hargatotal'=> $request->hargatotal,
            'notelp'=> $request->notelp,
            'alamat'=> $request->alamat,
        ]);

            return redirect('/supplier')->with('success','Data Berhasil Diedit');
        }

        public function destroysup($id)
        {
            $item = supplier::find($id);
            $item->delete();
            return redirect('/supplier')->with('success','Data Berhasil Dihapus');
        }
  }
