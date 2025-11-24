<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Biodata <?php echo e($mahasiswa->nama); ?></title>
</head>
<body>
  <div class="container mt-3">
    <div class="row">
      <div class="col-12">
        <div class="pt-3">
          <h1 class="h2 mr-auto">Biodata <?php echo e($mahasiswa->nama); ?></h1>
        </div>
        <div class="pt-3 d-flex justify-content-end align-items-center">
        <h1 class="h2 mr-auto">Biodata <?php echo e($mahasiswa->nama); ?></h1>
        <a href="<?php echo e(route('mahasiswas.edit',['mahasiswa' =>$mahasiswa->id])); ?>" class="btn btn-primary">Edit</a>
        <form action="<?php echo e(route('mahasiswas.destroy',['mahasiswa' =>$mahasiswa->id])); ?>" method="POST">
        <?php echo method_field('DELETE'); ?>
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-danger ml-3">Hapus</button>
        </form>
        </div>
        <hr>
        <?php if(session()->has('pesan')): ?>
        <div class="alert alert-success" role="alert">
        <?php echo e(session()->get('pesan')); ?>

        </div>
        <?php endif; ?>
        <ul>
          <li>NIM: <?php echo e($mahasiswa->nim); ?></li>
          <li>Nama: <?php echo e($mahasiswa->nama); ?></li>
          <li>Jenis Kelamin: <?php echo e($mahasiswa->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki'); ?></li>
          <li>Jurusan: <?php echo e($mahasiswa->jurusan); ?></li>
          <li>Alamat: <?php echo e($mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat); ?></li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html><?php /**PATH C:\laragon\www\Assesment2\resources\views/mahasiswa/show.blade.php ENDPATH**/ ?>