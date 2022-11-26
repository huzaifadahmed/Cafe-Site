<!DOCTYPE html>
<html lang="en">
<x-header/>

<body>
    <x-template>
    <section class="bg-neutral-100">
        <div class="lg:max-w-4xl mx-auto py-8">
            
            <x-Admin.tabs/>

            <x-pageTitle title="Tables Dashboard"/>
            
            <button class="bg-green-500 p-2 my-4 rounded-lg hover:bg-green-400"><a href="table/create">New Table</a></button>


            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <x-Admin.tableTable/>
                    <tbody>
                        @foreach($tables as $table)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <a href="/admin/edit/table/{{$table->tablenumber}}" class="hover:text-gray-400"> Table {{$table->tablenumber}}</a>
                            </th>
                            <td class="py-4 px-6">
                            {{$table->chairs}}
                            </td>
                            <td class="py-4 px-6">
                                @if($table->indoor=="1")
                                    Indoor
                                @else
                                    Outdoor
                                @endif
                            </td>
                            <td class="py-4 px-6">
                                <a href="/admin/edit/table/{{$table->tablenumber}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
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