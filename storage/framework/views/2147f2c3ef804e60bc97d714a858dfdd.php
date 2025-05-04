<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h2><?php echo e($editData ? 'Edit Mahasiswa' : 'Tambah Mahasiswa'); ?></h2>

    <form method="POST" action="<?php echo e($editData ? route('mahasiswa.update', $editData->id) : route('mahasiswa.store')); ?>">
        <?php echo csrf_field(); ?>
        <?php if($editData): ?>
        <?php endif; ?>
        <div class="mb-3">
            <label>Nama:</label>
            <input class="form-control" name="nama" value="<?php echo e($editData->nama ?? ''); ?>" required>
        </div>
        <div class="mb-3">
            <label>NIM:</label>
            <input class="form-control" name="nim" value="<?php echo e($editData->nim ?? ''); ?>" required>
        </div>
        <div class="mb-3">
            <label>Alamat:</label>
            <textarea class="form-control" name="alamat" required><?php echo e($editData->alamat ?? ''); ?></textarea>
        </div>
        <button type="submit" class="btn btn-success"><?php echo e($editData ? 'Update' : 'Simpan'); ?></button>
        <?php if($editData): ?>
            <a href="<?php echo e(route('mahasiswa.index')); ?>" class="btn btn-secondary">Batal</a>
        <?php endif; ?>
    </form>

    <hr>

    <h3>Daftar Mahasiswa</h3>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($mhs->nama); ?></td>
                    <td><?php echo e($mhs->nim); ?></td>
                    <td><?php echo e($mhs->alamat); ?></td>
                    <td>
                        <a href="<?php echo e(route('mahasiswa.edit', $mhs->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?php echo e(route('mahasiswa.destroy', $mhs->id)); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\belajar-laravel\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>