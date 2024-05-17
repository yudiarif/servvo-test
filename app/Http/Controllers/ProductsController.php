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
    public function edit($id){
        $product = Product::find($id);
        return view('editproduct', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima
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
        $product = Product::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('foto')) {
           $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $data['foto'] = $filename;

            if ($product->foto && file_exists(public_path('images/' . $product->foto))) {
                unlink(public_path('images/' . $product->foto));
            }
        }

    
        $product->update($data);

        return redirect()->route('products')->with('success', 'Product updated successfully.');
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products')->with('success', 'Product berhasil dihapus.');
    }
}
