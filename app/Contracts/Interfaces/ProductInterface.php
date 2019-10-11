<?php
namespace App\Contracts\Interfaces;

use App\Http\Requests\ProductFormRequest;

interface ProductInterface
{
    public function getAll();

    public function createNew(ProductFormRequest $request);

    public function findById($id);

    public function updateExist(ProductFormRequest $request, $id);

    public function deleteById($id);
    
	public function getNewProduct();
	
	public function getSaleProduct();

	public function getProductByType($type);

	public function getProductOther($type);
}
