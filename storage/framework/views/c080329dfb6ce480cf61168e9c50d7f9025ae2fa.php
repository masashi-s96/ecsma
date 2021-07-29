<?php echo $__env->make('admin.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="wrapper">
    <!-- Sidebar -->
<?php echo $__env->make('admin.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
<?php echo $__env->make('admin.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Topbar -->

        <!-- Container Fluid-->
<?php echo $__env->yieldContent('content'); ?>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
<?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- Footer -->
    </div>
  </div>
<?php /**PATH /Users/sonemasashi/ec-webstore/resources/views/admin/layouts/main.blade.php ENDPATH**/ ?>