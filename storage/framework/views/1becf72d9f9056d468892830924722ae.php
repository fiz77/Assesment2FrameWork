<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <title>Edit Dosen</title>
</head>
<body>
  <div class="container pt-4 bg-white">
    <div class="row">
      <div class="col-md-8 col-xl-6">
        <h1>Edit Dosen</h1>
        <hr>

        <form action="<?php echo e(route('dosens.update',['dosen' => $dosen->id])); ?>" method="POST">
          <?php echo method_field('PATCH'); ?>
          <?php echo csrf_field(); ?>

          <!-- NIP -->
          <div class="form-group mb-2">
            <label for="nip">NIP</label>
            <input type="text"
                   class="form-control <?php $__errorArgs = ['nip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                   id="nip" name="nip"
                   value="<?php echo e(old('nip') ?? $dosen->nip); ?>">
            <?php $__errorArgs = ['nip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <!-- Nama -->
          <div class="form-group mb-2">
            <label for="nama">Nama Lengkap</label>
            <input type="text"
                   class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                   id="nama" name="nama"
                   value="<?php echo e(old('nama') ?? $dosen->nama); ?>">
            <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <!-- Jenis Kelamin -->
          <div class="form-group mb-2">
            <label>Jenis Kelamin</label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input"
                       type="radio"
                       name="jenis_kelamin"
                       id="laki_laki"
                       value="L"
                       <?php echo e((old('jenis_kelamin') ?? $dosen->jenis_kelamin) == 'L' ? 'checked': ''); ?>>
                <label class="form-check-label" for="laki_laki">Laki-laki</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input"
                       type="radio"
                       name="jenis_kelamin"
                       id="perempuan"
                       value="P"
                       <?php echo e((old('jenis_kelamin') ?? $dosen->jenis_kelamin) == 'P' ? 'checked': ''); ?>>
                <label class="form-check-label" for="perempuan">Perempuan</label>
              </div>
              <?php $__errorArgs = ['jenis_kelamin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
          </div>

          <!-- Tanggal Lahir -->
          <div class="form-group mb-2">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date"
                   class="form-control <?php $__errorArgs = ['tanggal_lahir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                   id="tanggal_lahir" name="tanggal_lahir"
                   value="<?php echo e(old('tanggal_lahir') ?? $dosen->tanggal_lahir); ?>">
            <?php $__errorArgs = ['tanggal_lahir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <!-- Email -->
          <div class="form-group mb-2">
            <label for="email">Email</label>
            <input type="email"
                   class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                   id="email" name="email"
                   value="<?php echo e(old('email') ?? $dosen->email); ?>">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <!-- Telepon -->
          <div class="form-group mb-2">
            <label for="telepon">Telepon</label>
            <input type="text"
                   class="form-control <?php $__errorArgs = ['telepon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                   id="telepon" name="telepon"
                   value="<?php echo e(old('telepon') ?? $dosen->telepon); ?>">
            <?php $__errorArgs = ['telepon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <!-- Jurusan -->
          <div class="form-group mb-2">
            <label for="jurusan">Jurusan</label>
            <select class="form-control <?php $__errorArgs = ['jurusan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="jurusan" id="jurusan">
              <option value="Teknik Informatika" <?php echo e((old('jurusan') ?? $dosen->jurusan) == 'Teknik Informatika' ? 'selected': ''); ?>>Teknik Informatika</option>
              <option value="Sistem Informasi" <?php echo e((old('jurusan') ?? $dosen->jurusan) == 'Sistem Informasi' ? 'selected': ''); ?>>Sistem Informasi</option>
              <option value="Ilmu Komputer" <?php echo e((old('jurusan') ?? $dosen->jurusan) == 'Ilmu Komputer' ? 'selected': ''); ?>>Ilmu Komputer</option>
              <option value="Teknik Komputer" <?php echo e((old('jurusan') ?? $dosen->jurusan) == 'Teknik Komputer' ? 'selected': ''); ?>>Teknik Komputer</option>
              <option value="Teknik Telekomunikasi" <?php echo e((old('jurusan') ?? $dosen->jurusan) == 'Teknik Telekomunikasi' ? 'selected': ''); ?>>Teknik Telekomunikasi</option>
            </select>
            <?php $__errorArgs = ['jurusan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <!-- Jabatan -->
          <div class="form-group mb-2">
            <label for="jabatan">Jabatan</label>
            <input type="text"
                   class="form-control <?php $__errorArgs = ['jabatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                   id="jabatan" name="jabatan"
                   value="<?php echo e(old('jabatan') ?? $dosen->jabatan); ?>">
            <?php $__errorArgs = ['jabatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <!-- Pendidikan -->
          <div class="form-group mb-2">
            <label for="pendidikan">Pendidikan Terakhir</label>
            <input type="text"
                   class="form-control <?php $__errorArgs = ['pendidikan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                   id="pendidikan" name="pendidikan"
                   value="<?php echo e(old('pendidikan') ?? $dosen->pendidikan); ?>">
            <?php $__errorArgs = ['pendidikan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <!-- Alamat -->
          <div class="form-group mb-2">
            <label for="alamat">Alamat</label>
            <textarea class="form-control <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                      id="alamat" rows="3" name="alamat"><?php echo e(old('alamat') ?? $dosen->alamat); ?></textarea>
            <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <!-- Status -->
          <div class="form-group mb-3">
            <label for="status">Status</label>
            <select class="form-control <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="status" id="status">
              <option value="aktif" <?php echo e((old('status') ?? $dosen->status) == 'aktif' ? 'selected': ''); ?>>Aktif</option>
              <option value="nonaktif" <?php echo e((old('status') ?? $dosen->status) == 'nonaktif' ? 'selected': ''); ?>>Nonaktif</option>
            </select>
            <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <button type="submit" class="btn btn-primary mb-2">Update</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html><?php /**PATH C:\laragon\www\Assesment2\resources\views/dosen/edit.blade.php ENDPATH**/ ?>