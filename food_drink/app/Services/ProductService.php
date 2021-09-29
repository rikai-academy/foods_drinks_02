<?php

namespace App\Services;

use App\Models\Products;

class ProductService
{
    public function getAllProducts($id){
        $products = Products::select('products.id', 'products.name', 'products.price', 'products.image','products.category_id','products.description')
            ->leftJoin('categories', 'products.category_id', '=', 'categories.id')
            ->where('categories.parent_id', $id)
            ->orderBy('products.id', 'ASC')
            ->get();
        return $products;
    }

    public function getProductsByCategory($category_id){
        $products = Products::select('id','name','price','image','description','category_id')->where('category_id', $category_id)->get();
        return $products;
    }


}
