<!DOCTYPE html>
<html lang="en">
<x-header/>

<body>
    <x-template>
    <section class="bg-neutral-100">
        <div class="lg:max-w-4xl mx-auto py-8">
            <x-pageTitle title="Edit Menu Item"/>

            <div class="w-max mx-auto p-8 bg-neutral-200 rounded-lg shadow-md">

                <form method="POST" action="/update/table/{{$table->tablenumber}}">
                    @csrf
                    @method ('PATCH')
                    <div class="my-4">
                        <label for="tablenumber" class="font-semibold block pb-2">Table Number</label>
                        <input name="tablenumber" type="number" class="rounded-md p-1 hover:shadow-md" value="{{ ($table->tablenumber) }}">
                        @error('tablenumber')
                        <p class="text-red-500 text-sm">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="my-4">
                        <label for="chairs" class="font-semibold block pb-2">Seating Capacity</label>
                        <input type="number" name="chairs" list="categoryNames" value="{{($table->chairs)}}"/>
                        @error('chairs')
                        <p class="text-red-500 text-sm">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="my-4">
                        <label for="indoor" class="font-semibold block pb-2">Indoor/Outdoor</label>
                        <select class="py-2 px-8" name="indoor">
                            <option value="1" @if($table->indoor=="1") ? {{"selected"}} @endif >Indoor</option>
                            <option value="0" @if($table->indoor=="0") ? {{"selected"}} @endif >Outdoor</option>
                        </select>
                        @error('indoor')
                        <p class="text-red-500 text-sm">{{$message}}</p>
                        @enderror
                    </div>

                    <button type="submit" class="text-lg p-2 bg-green-500 rounded-lg shadow-lg hover:bg-green-400">Update</button>
                </form>
            </div>

            <div class="w-max mx-auto mt-4">
                <form method="POST" action="/delete/table/{{$table->tablenumber}}">
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