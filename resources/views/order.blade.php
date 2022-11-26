<x-header/>

<x-template>

    <section class="bg-neutral-100">
        <div class="lg:max-w-4xl mx-auto py-8">
            <x-pageTitle title="Menu"/>

            <div class="p-4 flex justify-between">
                <div>
                    <label class="text-neutral-800 font-semibold text-lg">Sort By: </label>

                    <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="bg-neutral-100 rounded-lg p-2 border-2 text-lg focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-1text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">{{$currentCategory}} <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="/order/all" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">All</a>
                        </li>
                        @foreach($categorys as $category)
                        <li>
                            <a href="/order/{{$category->category}}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$category->category}}</a>
                        </li>
                        @endforeach

                        </ul>
                    </div>
                    
                    
                </div>
                <!-- <div>
                    <label class="text-neutral-800 font-semibold text-lg">Search</label>
                    <input type="text" class="bg-neutral-100 rounded-lg p-1 border-2 text-lg" placeholder="Search">
                </div> -->
            </div>

            <div class="grid grid-cols-3 gap-y-8 my-8 xl:max-w-7xl mx-auto">
                @foreach($items as $item)
                    <x-Order.menuitem 
                    name="{{$item->name}}" 
                    description="{{$item->description}}"
                    price="{{$item->price}}"
                    category="{{$item->category->category}}"
                    image="{{$item->image}}"
                    />
                @endforeach
            </div>
        </div>
    </section>
</x-template>
