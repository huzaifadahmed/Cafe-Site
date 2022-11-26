@props(['name'])

<label for="{{$name}}" class="font-semibold block">{{ucfirst($name)}}</label>
<input name="{{$name}}" type="email" class="rounded-md p-1 hover:shadow-md w-full" placeholder="{{ucfirst($name)}}" value="{{ old($name) }}">
@error($name)
<p class="text-red-500 text-sm">{{$message}}</p>
@enderror