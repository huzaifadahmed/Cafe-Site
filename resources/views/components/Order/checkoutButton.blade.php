@props(['itemName','itemPrice'])
<form action="/checkout" method="POST">
    <input type="hidden" name="_token" value={{csrf_token()}}>
    <input type="hidden" name="itemName" value="{{$itemName}}">
    <input type="hidden" name="itemPrice" value="{{$itemPrice}}">
    <button class="p-2 bg-neutral-800 text-white rounded-lg font-semibold hover:bg-neutral-600" type="submit">Order</button>
</form>