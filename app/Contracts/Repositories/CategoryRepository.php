<?php
namespace App\Contracts\Repositories;

use App\Models\ProductType;
use App\Contracts\Interfaces\CategoryInterface;
use Illuminate\Http\Request;

class CategoryRepository implements CategoryInterface
{
    public function getAll()
    {
        $product_type = new ProductType;
        $product_type->restore();

        return $product_type->with('product')->withTrashed()->get();
    }

    public function createNew($request)
    {
        return ProductType::create([
            'name' => $request->get('name'),
        ]);
    }

    public function findById($id)
    {
        return ProductType::whereId($id)->firstOrFail();
    }

    public function updateExist($request, $id)
    {
        $category = ProductType::find($id);

        $category->name = $request->get('name');
        $category->description = $request->get('description');
        $category->image = $request->get('image');
      
        $category->save();

        return $category;
    }

    public function deleteById($id)
    {
        $category = ProductType::find($id);

        $category->delete();
    }
}
