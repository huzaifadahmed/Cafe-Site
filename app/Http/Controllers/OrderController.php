<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;


class OrderController extends Controller
{

    public function index()
    {
        return view('order',[
            'items'=>Item::all(),
            'currentCategory'=>'All',
            'categorys'=>Category::all()
        ]);
    }

    public function show(Category $category)
    {
        return view('order',[
            'items'=>Item::all()->where('category','=',$category),
            'currentCategory'=>$category->category,
            'categorys'=>Category::all()
        ]);
    }

}
