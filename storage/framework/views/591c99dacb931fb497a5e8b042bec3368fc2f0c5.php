<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['tables'=><?php echo e($tables); ?>]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['tables'=><?php echo e($tables); ?>]); ?>
<?php foreach (array_filter((['tables'=><?php echo e($tables); ?>]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<p class="text-neutral-600 text-3xl mb-2">Outdoor Patio Tables</p>
<div class="grid grid-cols-2 gap-5">
    <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $table): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($table->indoor=="0"): ?>
        <div class="w-14 h-14 bg-red-500 m-2 rounded-lg flex justify-center items-center col-span-1 ">
            <p class="font-semibold text-sm p-1"><a href="/reservation/outdoor/<?php echo e($table->tablenumber); ?>">Table <?php echo e($table->tablenumber); ?></a></p>
        </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH C:\Users\hdahmed\Desktop\Software Portfolio\Laravel\Restaurant-Site\resources\views/components/Reservation/outdoorLayout.blade.php ENDPATH**/ ?>