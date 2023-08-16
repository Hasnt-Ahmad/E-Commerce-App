<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function display(){
        $data = Category::with('products')
    ->select('categories.*',"products.*")
    ->leftJoin('products', 'categories.id', '=', 'products.category_id')
    ->get();
    $product_count=count(OrderItem::where("user_id",session("user_id"))->get());
    session(["product_count"=>$product_count]);
    
    $categoriesWithProducts = [];

    foreach ($data as $product) {
        $categoryName = $product['category_name'];
    
        if (!isset($categoriesWithProducts[$categoryName])) {
            $categoriesWithProducts[$categoryName] = [
                'category_id' => $product['category_id'],
                'category_name' => $categoryName,
                'products' => [],
            ];
        }
    
        $categoriesWithProducts[$categoryName]['products'][] = [
            'product_id' => $product['id'],
            'product_name' => $product['product_name'],
            'description' => $product['description'],
            'price' => $product['price'],
            'picture' => $product['picture'],
        ];
    }
    
    $finalResult = array_values($categoriesWithProducts);
    return view("welcome",["data"=>$finalResult,"product_count"=>$product_count]);

    }
}
