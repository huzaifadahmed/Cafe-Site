<!DOCTYPE html>
<html lang="en">
<x-header/>

<body>
    <x-template>
    <section class="bg-neutral-100">
        <div class="lg:max-w-4xl mx-auto py-8">
            
            <x-Admin.tabs/>

            <x-pageTitle title="Reservations Dashboard"/>
            

            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <x-Admin.reservationsTable/>
                    <tbody>
                        @foreach($customers as $customer)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$customer->email}}
                            </th>
                            <td class="py-4 px-6">
                                {{$customer->table->tablenumber}}
                            </td>
                            <td class="py-4 px-6">
                                {{$customer->reservationdate}}
                            </td>
                            <td class="py-4 px-6">
                                <form method="POST" action="/delete/reservation/{{$customer->email}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                                </form>
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
