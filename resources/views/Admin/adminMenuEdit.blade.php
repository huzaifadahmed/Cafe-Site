<!DOCTYPE html>
<html lang="en">
<x-header/>

<body>
    <x-template>
    <section class="bg-neutral-100">
        <div class="lg:max-w-4xl mx-auto py-8">
            <x-pageTitle title="Edit Menu Item"/>

            <div class="w-max mx-auto p-8 bg-neutral-200 rounded-lg shadow-md">

                <form method="POST" action="/update/{{$item->name}}" enctype="multipart/form-data">
                    @csrf
                    @method ('PATCH')
                    <div class="my-4">
                        <label for="name" class="font-semibold block pb-2">Name</label>
                        <input name="name" type="text" class="rounded-md p-1 hover:shadow-md" placeholder="Item Name" value="{{ ($item->name) }}">
                        @error('name')
                        <p class="text-red-500 text-sm">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="my-4">
                        <label for="category_id" class="font-semibold block pb-2">Category</label>
                        <input type="text" name="category_id" list="categoryNames" value="{{ucfirst($item->category->category)}}"/>
                            <datalist class="pr-10 pl-2 py-1 rounded-lg" id="categoryNames">
                                @foreach($categorys as $category)
                                <option>{{ucfirst($category->category)}}</option>
                                @endforeach
                            </datalist>
                        @error('category')
                        <p class="text-red-500 text-sm">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="my-4">
                        <label for="image" class="font-semibold block pb-2">Image</label>
                        <input name="image" type="file" class="rounded-md p-1" accept=".png, .jpg, .jpeg">
                        <img src="/images/itemimages/{{$item->image}}" width="70" height="70">
                        @error('image')
                        <p class="text-red-500 text-sm">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="my-4">
                        <label for="price" class="font-semibold block pb-2">Price</label>
                        <input name="price" type="number" step="0.01" class="rounded-md p-1 hover:shadow-md" placeholder="Item Price" value="{{ $item->price}}">
                        @error('price')
                        <p class="text-red-500 text-sm">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="my-4">
                        <label for="description" class="font-semibold block pb-2">Description</label>
                        <textarea name="description" cols="50" rows="4" class="rounded-md p-1 hover:shadow-md">{{$item->description}}</textarea>
                        @error('description')
                        <p class="text-red-500 text-sm">{{$message}}</p>
                        @enderror
                    </div>
                    <button type="submit" class="text-lg p-2 bg-green-500 rounded-lg shadow-lg hover:bg-green-400">Update</button>
                </form>
            </div>

            <div class="w-max mx-auto mt-4">
                <form method="POST" action="/delete/{{$item->name}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="p-2 bg-red-500 rounded-lg shadow-lg hover:bg-red-400">Delete</button>
                </form>
            </div>

        </div>

    </section>

    </x-template>
    
</body>
</html>