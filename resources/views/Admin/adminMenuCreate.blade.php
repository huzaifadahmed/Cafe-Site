<!DOCTYPE html>
<html lang="en">
<x-header/>

<body>
    <x-template>
    <section class="bg-neutral-100">
        <div class="lg:max-w-4xl mx-auto py-8">
            <x-pageTitle title="Create New Menu Item"/>

            <div class="w-max mx-auto p-8 bg-neutral-200 rounded-lg shadow-md">
                <form method="POST" action="/admincreatemenuitem" enctype="multipart/form-data">
                    @csrf
                    <div class="my-4">
                        <x-Form.TextInput name="name"/>
                    </div>

                    <div class="my-4">
                        <label for="category_id" class="font-semibold block pb-2">Category</label>
                        <input type="text" name="category_id" list="categoryNames" value="{{ old('category_id') }}"/>
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
                        <x-Form.FileInput name="image"/>
                    </div>

                    <div class="my-4">
                        <x-Form.NumberInput name="price"/>
                    </div>

                    <div class="my-4">
                        <x-Form.TextareaInput name="description"/>
                    </div>
                    <button type="submit" class="p-2 bg-green-500 rounded-lg shadow-lg hover:bg-green-400">Create</button>
                </form>
            </div>
        </div>

    </section>

    </x-template>
    
</body>
</html>