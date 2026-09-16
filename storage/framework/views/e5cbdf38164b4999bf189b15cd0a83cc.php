<?php echo csrf_field(); ?>


<div class="row mb-3">
    <?php if(!empty($produk->foto)): ?>
        <div class="col-md-6 mb-2">
            <label class="form-label fw-semibold">Foto Saat Ini</label><br>
            <img src="<?php echo e(asset('storage/' . $produk->foto)); ?>"
                 alt="Foto Produk"
                 class="img-thumbnail rounded-3 shadow-sm"
                 style="max-height: 120px; object-fit: cover;">
        </div>
    <?php endif; ?>

    <div class="col-md-6 mb-2 d-none" id="previewContainer">
        <label class="form-label fw-semibold">Preview Foto Baru</label><br>
        <img id="imgPreview"
             src="#"
             alt="Preview Foto Baru"
             class="img-thumbnail rounded-3 shadow-sm"
             style="max-height: 120px; object-fit: cover;">
    </div>
</div>


<div class="mb-3">
    <label for="foto" class="form-label fw-semibold">Gambar Produk</label>
    <input type="file"
           id="foto"
           name="foto"
           accept="image/*"
           onchange="previewImage(event)"
           class="form-control <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

    <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-feedback"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>


<div class="mb-3">
    <label for="nama" class="form-label fw-semibold">Nama Produk</label>
    <input type="text"
           id="nama"
           name="nama"
           class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
           value="<?php echo e(old('nama', $produk->nama ?? '')); ?>"
           placeholder="Masukkan nama produk"
           required>

    <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-feedback"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>


<div class="mb-3">
    <label for="jenis_id" class="form-label fw-semibold">Jenis</label>
    <select id="jenis_id"
            name="jenis_id"
            class="form-select <?php $__errorArgs = ['jenis_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            required>
        <option value="">-- Pilih Jenis --</option>
        <?php $__currentLoopData = $jenisList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($item->id); ?>"
                <?php echo e(old('jenis_id', $produk->jenis_id ?? '') == $item->id ? 'selected' : ''); ?>>
                <?php echo e($item->nama_jenis ?? $item->nama); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <?php $__errorArgs = ['jenis_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-feedback"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>


<div class="mb-3">
    <label for="harga_beli" class="form-label fw-semibold">Harga Pokok (Rp)</label>
    <input type="number"
           id="harga_beli"
           name="harga_beli"
           class="form-control <?php $__errorArgs = ['harga_beli'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
           value="<?php echo e(old('harga_beli', $produk->harga_beli ?? '')); ?>"
           placeholder="Contoh: 15000"
           required>

    <?php $__errorArgs = ['harga_beli'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-feedback"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>


<div class="mb-3">
    <label for="harga_jual" class="form-label fw-semibold">Harga Jual (Rp)</label>
    <input type="number"
           id="harga_jual"
           name="harga_jual"
           class="form-control <?php $__errorArgs = ['harga_jual'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
           value="<?php echo e(old('harga_jual', $produk->harga_jual ?? '')); ?>"
           placeholder="Contoh: 20000"
           required>

    <?php $__errorArgs = ['harga_jual'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-feedback"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>


<div class="mb-4">
    <label for="stok" class="form-label fw-semibold">Stok</label>
    <input type="number"
           id="stok"
           name="stok"
           class="form-control <?php $__errorArgs = ['stok'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
           value="<?php echo e(old('stok', $produk->stok ?? 0)); ?>"
           placeholder="Masukkan jumlah stok"
           required>

    <?php $__errorArgs = ['stok'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="invalid-feedback"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>


<div class="d-flex align-items-center gap-2">
    <button type="submit" class="btn text-white px-4 py-2 rounded-3 fw-semibold shadow-sm" style="background-color: #E87A5D; border: none;">
        Simpan
    </button>
    <a href="<?php echo e(route('produk.index')); ?>" class="btn px-4 py-2 rounded-3 fw-semibold" style="background-color: #F3E8E8; color: #6C5F67; border: none;">
        Kembali
    </a>
</div>


<script>
    function previewImage(event) {
        const input = event.target;
        const container = document.getElementById('previewContainer');
        const imgPreview = document.getElementById('imgPreview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imgPreview.src = e.target.result;
                container.classList.remove('d-none');
            }
            reader.readAsDataURL(input.files[0]);
        } else {
            container.classList.add('d-none');
        }
    }
</script><?php /**PATH C:\laragon\www\APK_POSKEYLA4\resources\views/produk/_form.blade.php ENDPATH**/ ?>