<?php

namespace App\Services;

use App\Enums\CategoryEnum;
use App\Models\Category;

class CategoryService
{
    // get main category
    public function getMainCategory(){
        $categories = Category::select('id','name','slug')->where('parent_id',0)->get();
        return $categories;
    }

    //get children category
    public function getChildCategory($parent_id){
        $categories = Category::select('id','name','slug')->where('parent_id',$parent_id)->get();
        return $categories;
    }


}
