

<?php $__env->startSection('title', 'Tambah Produk'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-4">
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white mx-auto" style="max-width: 800px;">
        <div class="card-body p-4">
            <h1 class="h2 fw-bold mb-4" style="color: #4b3b43;">Tambah Produk</h1>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger alert-dismissible fade show rounded-3 mb-4" role="alert">
                    <div class="fw-bold mb-1">Terjadi kesalahan input:</div>
                    <ul class="mb-0 ps-3">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <form action="<?php echo e(route('produk.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo $__env->make('produk._form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\APK_POSKEYLA4\resources\views/produk/create.blade.php ENDPATH**/ ?>