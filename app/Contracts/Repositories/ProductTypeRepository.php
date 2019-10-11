<?php
namespace App\Contracts\Repositories;

use App\Models\ProductType;
use App\Contracts\Interfaces\ProductTypeInterface;

class ProductTypeRepository implements ProductTypeInterface
{
	public function __construct(ProductType $producttype)
	{
		$this->producttype = $producttype;
	}

	public function getAll()
	{
		return $this->producttype->all();
	}

	public function getProductTypeName($type)
	{
		return $this->producttype->where('id', $type)->first();

	}
}
