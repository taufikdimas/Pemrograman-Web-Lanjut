<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6"><h1><?php echo e($breadcrumb->title); ?></h1></div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <?php $__currentLoopData = $breadcrumb->list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($key == count($breadcrumb->list) - 1): ?>
                    <li class="bredcrumb-item active"><?php echo e($value); ?></li>
                <?php else: ?>
                    <li class="bredcrumb-item"><?php echo e($value); ?></li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section><?php /**PATH C:\laragon\www\Pemrograman-Web-Lanjut\Minggu-6\PWL_POS\resources\views/layouts/breadcrumb.blade.php ENDPATH**/ ?>