<x-header/>

<x-template>

    <section class="bg-neutral-100">
        <div class="lg:max-w-4xl mx-auto py-8">
            <x-pageTitle title="Confirm Your Reservation"/>

            <div class="mx-auto w-max">
                <div>
                    <p class="font-semibold mb-2 border-2 p-2">Reservation for: Table {{$table}}</p>
                    <p class="font-semibold mb-2 border-2 p-2">Date: {{$date}}</p>

                </div>
                <form action="/confirmreservation" method="POST">
                    @csrf
                    <div class="ml-4 mr-12">
                        <input name="table_id" type="number" hidden value="{{$table}}">
                        <input name="reservationdate" type="date" hidden value="{{$date}}">
                        <x-Form.EmailInput name="email"/>
                    </div>

                    <x-Form.Button name="Confirm"/>
                    
                </form>
            </div>

        </div>
    </section>

</x-template>
