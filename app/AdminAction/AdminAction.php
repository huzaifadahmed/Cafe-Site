<?php
namespace App\AdminAction;
use App\Models\Item;
use App\Models\Category;


class AdminAction
{
    public static function StoreMenuItem($validated, $request)
    {
        if($request->hasFile('image')){
            $image=$request->file('image');
            $name=time().'.'.$image->getClientOriginalExtension();
            $destinationPath=public_path('/images/itemimages');
            $image->move($destinationPath,$name);
        }
        else{
            $name="defaultimage.jpg";
        }

        $item = Item::create([
            'name'=>$validated['name'],
            'price'=>$validated['price'],
            'image'=>$name,
            'description'=>$validated['description'],
            'category_id'=>Category::firstOrCreate(['category'=>$validated['category_id']])->id
        ]);

        return $item;
    }

    public static function UpdateMenuItem($validated, $request, $item)
    {
        if($request->hasFile('image')){
            $image=$request->file('image');
            $name=time().'.'.$image->getClientOriginalExtension();
            $destinationPath=public_path('/images/itemimages');
            $image->move($destinationPath,$name);
        }
        else{
            $name=$item->image;
        }

        $item ->update([
            'name'=>$validated['name'],
            'price'=>$validated['price'],
            'image'=>$name,
            'description'=>$validated['description'],
            'category_id'=>Category::firstOrCreate(['category'=>$validated['category_id']])->id
        ]);

        return $item;
    }
}