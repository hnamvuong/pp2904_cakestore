<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\ProductFormRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(3);
        
        return view('backend.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormRequest $request)
    {
        $product = Product::create([
            'name' => $request->get('name'),
            'id_type' => $request->get('id_type'),
            'description' => $request->get('description'),
            'unit_price' => $request->get('unit_price'),
            'promotion_price' => $request->get('promotion_price'),
            'image' => $request->get('image'),
            'unit' => $request->get('unit'),
            'new' => $request->get('new')
        ]);

        return redirect('/admin/products/create')->with('status', 'A new product has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('backend.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('backend.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductFormRequest $request, $id)
    {
        $product = Product::find($id);

        $product->name = $request->get('name');
        $product->id_type = $request->get('id_type');
        $product->description = $request->get('description');
        $product->unit_price = $request->get('unit_price');
        $product->promotion_price = $request->get('promotion_price');
        $product->image = $request->get('image');
        $product->unit = $request->get('unit');
        $product->new = $request->get('new');

        $product->save();

        return redirect(action('Admin\ProductController@edit', $product->id))->with('status', 'The product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();

        return redirect('admin/products')->with('status', 'The product '.$product->name.' has been deleted!');
    }
}
