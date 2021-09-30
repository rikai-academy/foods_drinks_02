<?php

namespace App\Http\Controllers;

use App\Enums\CategoryEnum;
use App\Models\Category;
use App\Models\Products;
use App\Services\CategoryService;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $category;
    private $product;
    public function __construct(CategoryService $category, ProductService $product){
        $this->category = $category;
        $this->product = $product;
    }

    //Show all product by Food or Drink
    public function showProduct($slug,$category_id){
        $categories = $this->category->getMainCategory();
        $categories_child = $this->category->getChildCategory($category_id);
        $products = $this->product->getAllProducts($category_id);
        return view('web.products.food',compact('categories','products','categories_child'));
    }

    //Filter product by category
    public function showProductByCategory($category_id, Request $request){
        $products = $this->product->getProductsByCategory($category_id);
        if($request -> ajax()) {
            return view('web.products.list_food',compact('products'))->render();
        }
    }
}
