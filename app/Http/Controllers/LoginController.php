<?php

namespace App\Http\Controllers;
// /use Auth

use App\Models\User;
use App\Models\rating;
use App\Models\pegawai;
use App\Models\pembeli;
use App\Models\supplier;
use App\Models\pembayaran;
use App\Models\M_Mahasiswa;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function dashboard (){
        $headphone = M_Mahasiswa::count();
        $pegawai = pegawai::count();
        $pembeli = pembeli::count();
        $supplier = supplier::count();
        // $pembayaran = pembayaran::count();
        // $rating = rating::count();

        return view('dashboard',compact('headphone','pegawai','pembeli','supplier'));
     }

    public function postlogin (Request $request){
        // dd($request->all());
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi'
        ]);
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard');
        }
        return redirect('/login')->with('salah','Email Atau Password Salah');
    }
    public function login (Request $request){
       return view('pengguna.login');
    }
    public function home (Request $request){
       return view('welcome');
    }

    public function logout (Request $request){
        Auth::logout();
           return redirect('/');
    }

    public function registrasi(){
        return view('pengguna.registrasi');
    }

    public function simpanregistrasi(Request $request){
        // dd($request->all());
    // $this->validate($request,[
    //     'email' => 'required|email:rcf,dns'
    // ]);
    $this->validate($request,[
        'email' => 'required|email:rfc,dns|unique:users',
        'nama' => 'required',
        'password' => 'required|min:8',
        'passwordd'=>'required|same:password',
    ],[
        'email.required' => 'Email harus di isi',
        'email' => 'email yang anda masukkan tidak valid',
        'unique' => 'email anda sudah digunakan',
        'nama.required' => 'nama harus di isi',
        'password.required' => 'Password harus di isi',
        'password.min' => 'Password harus minimal 8 karakter',
        'passwordd.required' => 'Password harus di isi ',
        'passwordd.same' => 'Password Tidak Sesuai'
    ]);
        User::Create([
            'name' => $request->nama,
            'level' => 'user',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
    return view('pengguna.login');

    }

}
