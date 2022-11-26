<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['day','hours']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['day','hours']); ?>
<?php foreach (array_filter((['day','hours']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<p class="text-2xl text-neutral-300 p-1">
    <?php echo e($day); ?>: 
    <span class="<?php echo e($hours=="Closed" ? "text-red-600":"text-green-600"); ?>">
        <?php echo e($hours); ?>

    </span>
</p>
<?php /**PATH C:\Users\hdahmed\Desktop\Software Portfolio\Laravel\Restaurant-Site\resources\views/components/HomePage/HoursOfOperation/timing.blade.php ENDPATH**/ ?>