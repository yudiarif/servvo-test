<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\TotalOrder;
use Illuminate\Http\Request;

class OrderController extends Controller
{
      public function order($id){
        $product = Product::find($id);
        return view('order',compact('product'));
    }
    public function totalOrder(){
        $totalOrder = TotalOrder::with('product')->get();
        return view('totalorder',compact('totalOrder'));
    }

    public function createOrder(Request $request){
        $request->validate([
            'product_id' => 'required',
            'jumlah_pesanan'=>'required|numeric',
        ]);

        $data = $request->all();
        // dd($data);
        TotalOrder::create($data);
        return redirect()->route('total-order')->with('success', 'Pesanan berhasil dibuat.');
    }

     public function update(Request $request, $id)
    {
        $request->validate([
            'jumlah_pesanan'=>'required|numeric',
        ]);
        TotalOrder::find($id)->update($request->all());
        return back()->with('success', 'Pesanan berhasil diperbarui.');

    }
    public function delete($id){
        $totalOrder = TotalOrder::find($id);
        $totalOrder->delete();
        return redirect()->route('total-order')->with('success', 'Pesanan berhasil dihapus.');
    }
}
