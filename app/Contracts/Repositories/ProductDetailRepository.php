<?php
namespace App\Contracts\Repositories;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Contracts\Interfaces\ProductDetailInterface;

class ProductDetailRepository implements ProductDetailInterface
{
	public function __construct(Product $product)
	{
		$this->product = $product;
	}

	public function getProductByID(Request $request)
	{
		return $this->product->where('id', $request->id)->first();
	}

	public function getProductSimilar($idtype)
	{
		return $this->product->where('id_type', $idtype);
	}
}
