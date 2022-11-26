<?php if(session()->has('success')): ?>
<div 
x-data="{show:true}"
x-init="setTimeout(()=>show=false,4000)"
x-show="show"
>
    <p class="fixed bottom-3 right-3 bg-blue-500 py-2 px-4 rounded-xl"><?php echo e(session('success')); ?></p>
</div>
<?php endif; ?><?php /**PATH C:\Users\hdahmed\Desktop\Software Portfolio\Laravel\Restaurant-Site\resources\views/components/HomePage/flashMessage.blade.php ENDPATH**/ ?>