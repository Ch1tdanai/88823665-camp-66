<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ProductList;
use App\Models\Categories;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('product', compact('categories'));
    }
    public function creat_product(Request $req)
    {
        $product = new ProductList;
        $product->category_id = $req->category_id;
        $product->user_id = $req->user_id;
        $product->name = $req->name;
        $product->save();
        return redirect('/product');
    }
    public function create_category(Request $req)
    {
        $category = new Categories;
        $category->name = $req->name;
        $category->save();
        return redirect('/product');
    }
}
