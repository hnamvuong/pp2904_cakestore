<?php
namespace App\Contracts\Interfaces;

interface CategoryInterface
{
	public function getAll();
	public function createNew( $request);
	public function findById($id);
	public function updateExist($request, $id);
	public function deleteById($id);
}
