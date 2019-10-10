<?php
namespace App\Contracts\Repositories;

use App\Models\Product;
use App\Contracts\Interfaces\ProductInterface;
use App\Http\Requests\ProductFormRequest;

class ProductRepository implements ProductInterface
{
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getAll()
    {
        return Product::with('product_type')->get();
    }

    public function createNew(ProductFormRequest $request)
    {
        if ($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName('image');

            $image->move('source/image/product', $image_name);
        }
         
        return Product::create([
            'name' => $request->get('name'),
            'id_type' => $request->get('id_type'),
            'description' => $request->get('description'),
            'unit_price' => $request->get('unit_price'),
            'promotion_price' => $request->get('promotion_price'),
            'image' => $image_name,
            'unit' => $request->get('unit'),
            'new' => $request->get('new')
        ]);
    }

    public function findById($id)
    {
        return Product::find($id);
    }

    public function updateExist(ProductFormRequest $request, $id)
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
    }

    public function deleteById($id)
    {
        $product = Product::find($id);

        $product->delete();
    }

	public function getNewProduct()
	{
		return $this->product->where('new', '1');
	}

	public function getSaleProduct()
	{
		return $this->product->where('promotion_price', '<>', 0);
	}

	public function getProductByType($type)
	{
		return $this->product->where('id_type', $type);
	}

	public function getProductOther($type)
	{
		return $this->product->where('id_type', '<>', $type);
	}
}
