<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['item']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['item']); ?>
<?php foreach (array_filter((['item']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="bg-[url('/images/<?php echo e($item); ?>.jpg')] bg-cover w-80 h-80 rounded-xl">
    <div class="bg-neutral-600 bg-opacity-50 h-full w-full hover:bg-opacity-30 flex items-center justify-center transition">
        <a href="#" class="text-white text-4xl font-bold hover:text-neutral-300 transition"><?php echo e($item); ?></a>
    </div>
</div><?php /**PATH C:\Users\hdahmed\Desktop\Software Portfolio\Laravel\Restaurant-Site\resources\views/components/HomePage/card.blade.php ENDPATH**/ ?>