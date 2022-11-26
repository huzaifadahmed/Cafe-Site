@props(['day','hours'])
<p class="text-2xl text-neutral-300 p-1">
    {{$day}}: 
    <span class="{{$hours=="Closed" ? "text-red-600":"text-green-600"}}">
        {{$hours}}
    </span>
</p>
