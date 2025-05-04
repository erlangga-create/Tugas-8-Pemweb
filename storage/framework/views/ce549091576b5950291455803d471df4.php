<form method="POST" action="<?php echo e(route('mahasiswa.store')); ?>">
    <?php echo csrf_field(); ?>
    Nama: <input name="nama"><br>
    NIM: <input name="nim"><br>
    Alamat: <textarea name="alamat"></textarea><br>
    <button type="submit">Simpan</button>
</form><?php /**PATH C:\xampp\htdocs\belajar-laravel\resources\views/mahasiswa/create.blade.php ENDPATH**/ ?>