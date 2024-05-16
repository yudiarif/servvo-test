<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products', compact('products'));
    }
       public function productList() {
        $products = Product::all();
        return view('productslist',compact('products'));
    }
    

 public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'jumlah_stok' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg',
            'kapasitas' => 'required',
            'tinggi' => 'required',
            'lebar' => 'required',
            'diameter_tabung' => 'required',
            'berat_total' => 'required',
            'fire_rating' => 'required',
        ]);

        $data = $request->all();
   
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $data['foto'] = $filename;
        

        Product::create($data);

        return redirect()->route('products')->with('success', 'Product berhasil dibuat.');
    }
}
