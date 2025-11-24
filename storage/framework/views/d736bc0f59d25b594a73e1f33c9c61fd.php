<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Biodata <?php echo e($dosen->nama); ?></title>
</head>
<body>
  <div class="container mt-3">
    <div class="row">
      <div class="col-12">
        <div class="pt-3 d-flex justify-content-between align-items-center">
          <h1 class="h2 mr-auto">Biodata <?php echo e($dosen->nama); ?></h1>
          <div>
            <a href="<?php echo e(route('dosens.edit',['dosen' => $dosen->id])); ?>" class="btn btn-primary">Edit</a>
            <form action="<?php echo e(route('dosens.destroy',['dosen' => $dosen->id])); ?>" method="POST" style="display:inline;">
              <?php echo method_field('DELETE'); ?>
              <?php echo csrf_field(); ?>
              <button type="submit" class="btn btn-danger ml-3">Hapus</button>
            </form>
          </div>
        </div>
        <hr>
        <?php if(session()->has('pesan')): ?>
          <div class="alert alert-success" role="alert">
            <?php echo e(session()->get('pesan')); ?>

          </div>
        <?php endif; ?>
        <ul>
          <li><strong>NIP:</strong> <?php echo e($dosen->nip); ?></li>
          <li><strong>Nama:</strong> <?php echo e($dosen->nama); ?></li>
          <li><strong>Jenis Kelamin:</strong> <?php echo e($dosen->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki'); ?></li>
          <li><strong>Tanggal Lahir:</strong> <?php echo e($dosen->tanggal_lahir); ?></li>
          <li><strong>Email:</strong> <?php echo e($dosen->email); ?></li>
          <li><strong>Telepon:</strong> <?php echo e($dosen->telepon ?? 'N/A'); ?></li>
          <li><strong>Jurusan:</strong> <?php echo e($dosen->jurusan); ?></li>
          <li><strong>Jabatan:</strong> <?php echo e($dosen->jabatan); ?></li>
          <li><strong>Pendidikan:</strong> <?php echo e($dosen->pendidikan); ?></li>
          <li><strong>Alamat:</strong> <?php echo e($dosen->alamat == '' ? 'N/A' : $dosen->alamat); ?></li>
          <li><strong>Status:</strong> <?php echo e($dosen->status); ?></li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html><?php /**PATH C:\laragon\www\Assesment2\resources\views/dosen/show.blade.php ENDPATH**/ ?>