<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index() {
        return view('profile');
    }

    public function store(Request $request)
    {
    $request->validate([
        'nama_customer' => 'required',
        'nomor_telepon' => 'required',
        'email' => 'required',
        'alamat' => 'required',
        'kota' => 'required',
        'provinsi' => 'required',
        'kode_pos' => 'required',
        'nomor_npwp' => 'required',
        'username' => 'required',
        'password' => 'required',
        'total_diskon' => 'required|numeric',
        'credit_limit_transaksi' => 'required|numeric',
    ]);

    $data = $request->all();
    $data['password'] = Hash::make($request->password);
    
    //dd($data);
    Profile::create($data);

    return redirect()->route('profile')->with('success', 'Profile berhasil ditambahkan.');
}
}
