@props(['item'])
<div class="bg-[url('/images/{{$item}}.jpg')] bg-cover w-80 h-80 rounded-xl">
    <div class="bg-neutral-600 bg-opacity-50 h-full w-full hover:bg-opacity-30 flex items-center justify-center transition">
        <a href="/order/{{$item}}" class="text-white text-4xl font-bold hover:text-neutral-300 transition">{{$item}}</a>
    </div>
</div>