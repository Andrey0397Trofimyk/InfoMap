

<?php $__env->startSection('content'); ?>
    <div class="content container-fluid px-0">
        <div class="sidebar scroller col-12 col-sm-6 col-md-5 col-lg-4 px-0" >
            <!-- <sidebar-component/> -->
            <div class="contentSidebar">
                <router-view
                :user-id='<?php echo e(Auth::user()->id ?? 0); ?>'
                @removemodal='openRemoveModal($event)'
                >
                </router-view>
            </div>
        </div>
        <div class="map col-12 px-0" >
            <user-map
            :user-id='<?php echo e(Auth::user()->id ?? 0); ?>'
            />
        </div> 
        <div class="modal fade" id="removeLocation" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Видалення</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <p>Ви справді хочете видалити локацію?</p>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal" @click="removeLocation()">Видалити</button>
                    <button type="button" class="btn btn-outline-warning" data-dismiss="modal">Ні</button>
                </div>
                </div>
            </div>    
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.userLayouts.basicPage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\OSPanel\domains\InfoMap_beta\resources\views/layouts/userLayouts/userPage.blade.php ENDPATH**/ ?>