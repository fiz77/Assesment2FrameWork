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
        <hr>
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
</html><?php /**PATH C:\laragon\www\w8\resources\views/mahasiswa/show.blade.php ENDPATH**/ ?>