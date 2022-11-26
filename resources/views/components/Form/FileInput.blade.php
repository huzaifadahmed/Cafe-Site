@props(['name'])

<label for="{{$name}}" class="font-semibold block">{{ucfirst($name)}}</label>
<input name="{{$name}}" type="file" class="rounded-md p-1" accept=".png, .jpg, .jpeg">
@error($name)
<p class="text-red-500 text-sm">{{$message}}</p>
@enderror