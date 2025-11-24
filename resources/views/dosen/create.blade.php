<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Form Dosen</title>
</head>
<body>
  <div class="container pt-4 bg-white">
    <div class="row">
      <div class="col-md-8 col-xl-6">
        <h1>Tambah Dosen</h1>
        <hr>
        <form action="{{ route('dosens.store') }}" method="POST">
          @csrf

          <!-- NIP -->
          <div class="form-group mb-2">
            <label for="nip">NIP</label>
            <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ old('nip') }}">
            @error('nip')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <!-- Nama -->
          <div class="form-group mb-2">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
            @error('nama')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <!-- Jenis Kelamin -->
          <div class="form-group mb-2">
            <label>Jenis Kelamin</label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="L" {{ old('jenis_kelamin')=='L' ? 'checked': '' }}>
                <label class="form-check-label" for="laki_laki">Laki-laki</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P" {{ old('jenis_kelamin')=='P' ? 'checked': '' }}>
                <label class="form-check-label" for="perempuan">Perempuan</label>
              </div>
              @error('jenis_kelamin')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <!-- Tanggal Lahir -->
          <div class="form-group mb-2">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
            @error('tanggal_lahir')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <!-- Email -->
          <div class="form-group mb-2">
            <label for="email">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
            @error('email')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <!-- Telepon -->
          <div class="form-group mb-2">
            <label for="telepon">Telepon</label>
            <input type="text" class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon" value="{{ old('telepon') }}">
            @error('telepon')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <!-- Jurusan -->
          <div class="form-group mb-2">
            <label for="jurusan">Jurusan</label>
            <select class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" id="jurusan">
              <option value="Teknik Informatika" {{ old('jurusan')=='Teknik Informatika' ? 'selected': '' }}>Teknik Informatika</option>
              <option value="Sistem Informasi" {{ old('jurusan')=='Sistem Informasi' ? 'selected': '' }}>Sistem Informasi</option>
              <option value="Ilmu Komputer" {{ old('jurusan')=='Ilmu Komputer' ? 'selected': '' }}>Ilmu Komputer</option>
              <option value="Teknik Komputer" {{ old('jurusan')=='Teknik Komputer' ? 'selected': '' }}>Teknik Komputer</option>
              <option value="Teknik Telekomunikasi" {{ old('jurusan')=='Teknik Telekomunikasi' ? 'selected': '' }}>Teknik Telekomunikasi</option>
            </select>
            @error('jurusan')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <!-- Jabatan -->
          <div class="form-group mb-2">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{ old('jabatan') }}">
            @error('jabatan')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <!-- Pendidikan -->
          <div class="form-group mb-2">
            <label for="pendidikan">Pendidikan Terakhir</label>
            <input type="text" class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan" name="pendidikan" value="{{ old('pendidikan') }}">
            @error('pendidikan')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <!-- Alamat -->
          <div class="form-group mb-2">
            <label for="alamat">Alamat</label>
            <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" rows="3" name="alamat">{{ old('alamat') }}</textarea>
            @error('alamat')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <!-- Status -->
          <div class="form-group mb-3">
            <label for="status">Status</label>
            <select class="form-control @error('status') is-invalid @enderror" name="status" id="status">
              <option value="aktif" {{ old('status')=='aktif' ? 'selected': '' }}>Aktif</option>
              <option value="nonaktif" {{ old('status')=='nonaktif' ? 'selected': '' }}>Nonaktif</option>
            </select>
            @error('status')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary mb-2">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>