@props(['name', 'description', 'price', 'category', 'image'])
<div class="w-60 h-max border-2 border-neutral-600 p-2 rounded-xl bg-neutral-300 col-span-1">
    <img src="/images/itemimages/{{$image}}" class="w-56 h-36 rounded-xl">
    <div class="flex justify-between items-center border-b-2 border-neutral-400">
        <p class="font-bold text-xl mt-2 text-neutral-800">{{$name}}<span class="text-sm font-semibold text-neutral-600"> - {{$category}}</span></p>
        <p class="text-neutral-800 font-bold text-xl italic">$ {{$price}}</p>
    </div>
    <div class="w-56 mt-2 h-20 text-ellipsis overflow-hidden mb-2">
        <p class="text-sm">{{$description}}</p>
    </div>
    <div class="w-max ml-auto">
        <x-Order.checkoutbutton itemName="{{$name}}" itemPrice="{{$price}}"/>
    </div>
</div>