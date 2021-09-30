<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $category;
    private $product;

    public function __construct(CategoryService $category, Products $product)
    {
        $this->category = $category;
        $this->product = $product;
    }

    public function index()
    {
        $categories = $this->category->getMainCategory();
        $products =  $this->product->select('id', 'name', 'price', 'image', 'description')->latest('id')->take(6)->get();
        return view('home')->with([
            'categories' => $categories,
            'products' => $products,
        ]);
    }
}
