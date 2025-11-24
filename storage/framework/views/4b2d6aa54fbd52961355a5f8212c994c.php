<?php echo e(session()->get('pesan')); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Data Mahasiswa</title>
</head>
<body>
  <div class="container mt-3">
    <div class="row">
      <div class="col-12">
        <div class="py-4 d-flex justify-content-between align-items-center">
            <h2 class="mb-0">Tabel Mahasiswa</h2>
                <a href="<?php echo e(route('mahasiswas.create')); ?>" class="btn btn-primary">
                Tambah Mahasiswa
                </a>
        </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Nim</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Jurusan</th>
              <th>Alamat</th>
            </tr>
          </thead>
          <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
              <tr>
                <th><?php echo e($loop->iteration); ?></th>
                <td><a href="<?php echo e(route('mahasiswas.show',['mahasiswa'=> $mahasiswa->id])); ?>"><?php echo e($mahasiswa->nim); ?></a></td>
                <td><?php echo e($mahasiswa->nama); ?></td>
                <td><?php echo e($mahasiswa->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki'); ?></td>
                <td><?php echo e($mahasiswa->jurusan); ?></td>
                <td><?php echo e($mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat); ?></td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <tr>
                <td colspan="6" class="text-center">Tidak ada data...</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html><?php /**PATH C:\laragon\www\w8\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>