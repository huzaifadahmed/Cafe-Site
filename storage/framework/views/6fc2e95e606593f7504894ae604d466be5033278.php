<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['itemName','itemPrice']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['itemName','itemPrice']); ?>
<?php foreach (array_filter((['itemName','itemPrice']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<form action="/checkout" method="POST">
    <input type="hidden" name="_token" value=<?php echo e(csrf_token()); ?>>
    <input type="hidden" name="itemName" value="<?php echo e($itemName); ?>">
    <input type="hidden" name="itemPrice" value="<?php echo e($itemPrice); ?>">
    <button class="p-2 bg-neutral-800 text-white rounded-lg font-semibold hover:bg-neutral-600" type="submit">Order</button>
</form><?php /**PATH C:\Users\hdahmed\Desktop\Software Portfolio\Laravel\Restaurant-Site\resources\views/components/Order/checkoutbutton.blade.php ENDPATH**/ ?>