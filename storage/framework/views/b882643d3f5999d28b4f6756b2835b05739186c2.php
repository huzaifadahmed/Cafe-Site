<div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px">
        <li class="mr-2">
            <a href="/admin/menu/category/all" 
            class="<?php echo e(request()->is('admin/menu/category/all') ? 'text-blue-600 border-blue-600':''); ?> inline-block p-4 rounded-t-lg border-b-2 
            hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Menu</a>
        </li>
        <li class="mr-2">
            <a href="/admin/reservations" 
            class="<?php echo e(request()->is('admin/reservations') ? 'text-blue-600 border-blue-600':''); ?> inline-block p-4 rounded-t-lg border-b-2 
            hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Current Reservations</a>
        </li>
        <li class="mr-2">
            <a href="/admin/table" 
            class="<?php echo e(request()->is('admin/table') ? 'text-blue-600 border-blue-600':''); ?> inline-block p-4 rounded-t-lg 
            hover:text-gray-600 hover:border-gray-300 border-b-2 dark:text-blue-500 dark:border-blue-500">Table Info</a>
        </li>
    </ul>
</div><?php /**PATH C:\Users\hdahmed\Desktop\Software Portfolio\Laravel\Restaurant-Site\resources\views/components/Admin/tabs.blade.php ENDPATH**/ ?>