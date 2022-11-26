<x-header/>

<x-template>

    <section class="bg-neutral-100">
        <div class="lg:max-w-4xl mx-auto py-8">
            <x-pageTitle title="Reserve Your Seat"/>

            <div class="mb-8">
                <label class="text-neutral-800 font-semibold text-lg">Select a Date: </label>
                <form method="GET" action="/reservationfilter">
                    
                    @csrf
                    <input name="date" type="date" class="border-2 rounded-lg p-1" value="{{request()->date}}">
                    <button type="submit" class="py-1 px-2 bg-green-500 rounded-lg hover:bg-green-400">Search</button>
                    @error('date')
                    <p class="text-red-500 text-sm">{{$message}}</p>
                    @enderror
                </form>
            </div>

            @if(request()->has('date'))
            <div class="grid grid-cols-2">

                <div class="border-r-2 span-col-1">
                    <p class="text-neutral-600 text-3xl mb-2">Outdoor Patio Tables</p>
                    <div class="grid grid-cols-2 gap-5">
                        @foreach($tables as $table)
                            @if($table->indoor=="0")
                            <div class="w-14 h-14 bg-red-500 m-2 rounded-lg flex justify-center items-center col-span-1 ">
                                <p class="font-semibold text-sm p-1"><a href="/reservation/confirm/?date={{request()->date}}&table={{$table->id}}">Table {{$table->id}}</a></p>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="span-col-1 ml-4">
                    <p class="text-neutral-600 text-3xl mb-2">Indoor Seating Tables</p>
                    <div class="grid grid-cols-5 gap-5">
                        @foreach($tables as $table)
                            @if($table->indoor=="1")
                            <div class="w-14 h-14 bg-red-500 m-2 rounded-lg flex justify-center items-center col-span-1 ">
                                <p class="font-semibold text-sm p-1"><a href="/reservation/confirm/?date={{request()->date}}&table={{$table->id}}">Table {{$table->id}}</a></p>
                            </div>
                            @endif
                        @endforeach
                    </div>

                </div>
            </div>
            @endif
        </div>
    </section>

</x-template>
