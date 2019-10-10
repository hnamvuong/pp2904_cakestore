<?php
namespace App\Contracts\Interfaces;

use Illuminate\Http\Request;

interface ProductDetailInterface 
{

	public function getProductByID(Request $request);

	public function getProductSimilar($idtype);
}
