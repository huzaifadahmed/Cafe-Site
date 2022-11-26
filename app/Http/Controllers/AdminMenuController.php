<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Http\Requests\CreateMenuItemRequest;
use App\AdminAction\AdminAction;

class AdminMenuController extends Controller
{

    public function index()
    {
        return view('Admin.AdminMenu',[
            'items'=>Item::all(),
            'currentCategory'=>'All',
            'categorys'=>Category::all()
        ]);
    }

    public function create()
    {
        return view('Admin.adminMenuCreate',[
            'categorys'=>Category::all()
        ]);
    }

    public function store(CreateMenuItemRequest $request)
    {
        $validated=$request->validated();
        $item = AdminAction::StoreMenuItem($validated, $request);
        return redirect('admin/menu/category/all')->with('success', 'A new menu item has been created!');

    }

    public function show(Category $category)
    {
        return view('Admin.AdminMenu',[
            'items'=>Item::all()->where('category','=',$category),
            'currentCategory'=>$category->category,
            'categorys'=>Category::all()
        ]);
    }

    public function edit(Item $item)
    {
        return view('Admin.adminMenuEdit',[
            'categorys'=>Category::all(),
            'item'=>$item
        ]);
    }

    public function update(CreateMenuItemRequest $request,Item $item)
    {
        $validated=$request->validated();
        $item = AdminAction::UpdateMenuItem($validated, $request, $item);
        return redirect('admin/menu/category/all')->with('success', 'The menu item has been updated!');

    }

    public function destroy(Item $item)
    {
        $item->delete();
        return redirect('admin/menu/category/all')->with('success', 'The menu item has been deleted!');

    }
}
