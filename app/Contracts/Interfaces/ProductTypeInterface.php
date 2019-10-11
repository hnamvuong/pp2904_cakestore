<?php
namespace App\Contracts\Interfaces;

interface ProductTypeInterface 
{
	public function getAll();

	public function getProductTypeName($type);
}
