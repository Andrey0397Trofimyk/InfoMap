

<?php $__env->startSection('content'); ?>
    <div class="content container-fluid px-0">
        <div class="sidebar col-12 col-sm-5 col-md-4 px-0" >
            <sidebar-component/>
        </div>
        <div class="map col-12 px-0" >
            <map-component/>
        </div> 
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.userLayouts.basicPage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\OSPanel\domains\InfoMap_beta\resources\views/layouts/userLayouts/guestPage.blade.php ENDPATH**/ ?>