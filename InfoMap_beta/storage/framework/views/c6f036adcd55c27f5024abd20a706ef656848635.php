

<?php $__env->startSection('content'); ?>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src="/js/adminPlugins/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">Admin Page</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
        <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" id='treeview' data-widget="treeview" role="menu" data-accordion="false">
                    <li class='nav-item' @click='activeComponent(`basicItem`)'>
                        <router-link 
                        class='nav-link  basicItem active' 
                        :to="{ name: 'adminMap' }">
                            <i class="nav-icon fas fa-atlas"></i>   
                            <p>Головна</p>
                        </router-link >
                    </li>
                    <list-locations></list-locations>
                    <li class='nav-item' @click='activeComponent(`createItem`)'>
                        <router-link class='nav-link createItem' :to="{ name: 'adminCreateLocation' }">
                            <i class="nav-icon fas fa-plus-circle"></i>
                            <p>Створити</p>
                        </router-link>                
                    </li>
                </ul>
            </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <router-view></router-view>
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.adminLayouts.basicPage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\OSPanel\domains\InfoMap_beta\resources\views/layouts/adminLayouts/adminPage.blade.php ENDPATH**/ ?>