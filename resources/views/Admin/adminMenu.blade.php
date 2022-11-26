<!DOCTYPE html>
<html lang="en">
<x-header/>

<body>
    <x-template>
    <section class="bg-neutral-100">
        <div class="lg:max-w-4xl mx-auto py-8">

            <x-Admin.tabs/>

            <x-pageTitle title="Menu Dashboard"/>

            <div class="p-4 flex justify-between">
                <div>
                    <label class="text-neutral-800 font-semibold text-lg">Sort By: </label>

                    <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="bg-neutral-100 rounded-lg p-2 border-2 text-lg focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-1text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">{{$currentCategory}} <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="/admin/menu/category/all" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">All</a>
                        </li>
                        @foreach($categorys as $category)
                        <li>
                            <a href="/admin/menu/category/{{$category->category}}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$category->category}}</a>
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

            <button class="bg-green-500 p-2 my-4 rounded-lg hover:bg-green-400"><a href="/admin/menu/create">New Menu Item</a></button>


            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <x-Admin.menuTable/>
                    <tbody>
                        @foreach($items as $item)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <a href="/edit/{{$item->name}}" class="hover:text-gray-400"> {{$item->name}}</a>
                            </th>
                            <td class="py-4 px-6">
                                {{$item->category->category}}
                            </td>
                            <td class="py-4 px-6">
                                {{$item->price}}
                            </td>
                            <td class="py-4 px-6">
                                <a href="/edit/{{$item->name}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        @endforeach                   
                    </tbody>
                </table>
            </div>
        </div>

    </section>

    </x-template>
    
</body>
</html>