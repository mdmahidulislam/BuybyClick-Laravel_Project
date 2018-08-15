<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
    	$products=DB::table('products')
            ->join('categories', 'products.categoryId', '=', 'categories.id')
            ->orderBy('rank', 'desc')
            ->select('products.*', 'categories.categoryname')
            ->get();
        $categories=DB::table('categories')
        	->get();
        return view('home.index', ['products' => $products,'categories'=>$categories]);  	
    }
    public function catagorysearch(Request $request,$id)
    {
            $products = DB::table('products')
                ->join('categories', 'products.categoryId', '=', 'categories.id')
                ->where('categories.id',$id)
                ->select('products.*', 'categories.categoryname')
                ->get();
            $categories=DB::table('categories')
            ->get();
        return view('home.index',['products' => $products,'categories'=>$categories]);
    }
    public function search(Request $request)
    {
            $products = DB::table('products')
                ->join('categories', 'products.categoryId', '=', 'categories.id')
                ->orderBy('rank', 'desc')
                ->where('productname', 'LIKE', "%$request->searchText%")
                ->get();
            $categories=DB::table('categories')
               ->get();
        return view('home.index', ['products' => $products,'categories'=>$categories]);
    }
}
