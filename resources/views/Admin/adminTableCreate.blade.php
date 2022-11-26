<!DOCTYPE html>
<html lang="en">
<x-header/>

<body>
    <x-template>
    <section class="bg-neutral-100">
        <div class="lg:max-w-4xl mx-auto py-8">
            <x-pageTitle title="Edit Menu Item"/>

            <div class="w-max mx-auto p-8 bg-neutral-200 rounded-lg shadow-md">

                <form method="POST" action="/createtable">
                    @csrf
                    <div class="my-4">
                        <x-Form.NumberInput name="tablenumber"/>
                    </div>

                    <div class="my-4">
                        <x-Form.NumberInput name="chairs"/>
                    </div>

                    <div class="my-4">
                        <label for="indoor" class="font-semibold block pb-2">Indoor/Outdoor</label>
                        <select class="py-2 px-8" name="indoor">
                            <option value="1">Indoor</option>
                            <option value="0">Outdoor</option>
                        </select>
                        @error('indoor')
                        <p class="text-red-500 text-sm">{{$message}}</p>
                        @enderror
                    </div>
                    <x-Form.Button name="Create"/>
                </form>
            </div>

        </div>

    </section>

    </x-template>
    
</body>
</html>