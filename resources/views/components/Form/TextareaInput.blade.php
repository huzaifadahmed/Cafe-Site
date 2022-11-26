@props(['name'])

<label for="{{$name}}" class="font-semibold block pb-2">{{ucfirst($name)}}</label>
<textarea name="{{$name}}" cols="50" rows="4" class="rounded-md p-1 hover:shadow-md" placeholder="{{ucfirst($name)}}"></textarea>
@error($name)
<p class="text-red-500 text-sm">{{$message}}</p>
@enderror