
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Data Dosen</title>
</head>
<body>
  <div class="container mt-3">
    <div class="row">
      <div class="col-12">
        <div class="py-4 d-flex justify-content-between align-items-center">
            <h2 class="mb-0">Tabel Dosen</h2>
                <a href="<?php echo e(route('dosens.create')); ?>" class="btn btn-primary">
                Tambah Dosen
                </a>
        </div>
        <?php if(session()->has('pesan')): ?>
            <div class="alert alert-success">
            <?php echo e(session()->get('pesan')); ?>

            </div>
        <?php endif; ?>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>NIP</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Tanggal Lahir</th>
              <th>Email</th>
              <th>Telepon</th>
              <th>Jurusan</th>
              <th>Jabatan</th>
              <th>Pendidikan</th>
              <th>Alamat</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $dosens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dosen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
              <tr>
                <th><?php echo e($loop->iteration); ?></th>
                <td><a href="<?php echo e(route('dosens.show',['dosen'=> $dosen->id])); ?>"><?php echo e($dosen->nip); ?></a></td>
                <td><?php echo e($dosen->nama); ?></td>
                <td><?php echo e($dosen->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki'); ?></td>
                <td><?php echo e($dosen->tanggal_lahir); ?></td>
                <td><?php echo e($dosen->email); ?></td>
                <td><?php echo e($dosen->telepon ?? 'N/A'); ?></td>
                <td><?php echo e($dosen->jurusan); ?></td>
                <td><?php echo e($dosen->jabatan); ?></td>
                <td><?php echo e($dosen->pendidikan); ?></td>
                <td><?php echo e($dosen->alamat == '' ? 'N/A' : $dosen->alamat); ?></td>
                <td><?php echo e($dosen->status); ?></td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <tr>
                <td colspan="12" class="text-center">Tidak ada data...</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html><?php /**PATH C:\laragon\www\Assesment2\resources\views/dosen/index.blade.php ENDPATH**/ ?>