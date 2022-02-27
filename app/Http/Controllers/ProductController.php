<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
//    protected $Product;
//    protected $product;
//    protected $products;

    public function addProduct()
    {
        return view('product.add');
    }
    public function newProduct(Request $request)
    {
        $this->product          = new Product();
        $this->product ->name       = $request->name;
        $this->product ->category   = $request->category;
        $this->product ->brand      = $request->brand;
        $this->product ->price      = $request->price;
        $this->product ->description= $request->description;
        $this->product ->image      = $request->image;
        $this->product ->save();

        return redirect()->back()->with('message', 'Product info save successfully');
    }
    public function manage()
    {

        $this->products = Product::orderBy('id', 'desc')->get();
        return view('product.manage-product', ['products' => $this->products]);
    }
    public function edit($id)
    {
        $this->product = Product::find($id);

        return view('edit-product', ['product' => $this->product]);
    }
    public function delete($id)
    {
        $this->product = Product::find($id);
        $this->product->delete();
        return redirect('/manage-product')->with('message', 'Product info delete successfully');
    }
}
