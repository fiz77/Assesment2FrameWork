<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Biodata {{ $dosen->nama }}</title>
</head>
<body>
  <div class="container mt-3">
    <div class="row">
      <div class="col-12">
        <div class="pt-3 d-flex justify-content-between align-items-center">
          <h1 class="h2 mr-auto">Biodata {{ $dosen->nama }}</h1>
          <div>
            <a href="{{ route('dosens.edit',['dosen' => $dosen->id]) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('dosens.destroy',['dosen' => $dosen->id]) }}" method="POST" style="display:inline;">
              @method('DELETE')
              @csrf
              <button type="submit" class="btn btn-danger ml-3">Hapus</button>
            </form>
          </div>
        </div>
        <hr>
        @if(session()->has('pesan'))
          <div class="alert alert-success" role="alert">
            {{ session()->get('pesan') }}
          </div>
        @endif
        <ul>
          <li><strong>NIP:</strong> {{ $dosen->nip }}</li>
          <li><strong>Nama:</strong> {{ $dosen->nama }}</li>
          <li><strong>Jenis Kelamin:</strong> {{ $dosen->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki' }}</li>
          <li><strong>Tanggal Lahir:</strong> {{ $dosen->tanggal_lahir }}</li>
          <li><strong>Email:</strong> {{ $dosen->email }}</li>
          <li><strong>Telepon:</strong> {{ $dosen->telepon ?? 'N/A' }}</li>
          <li><strong>Jurusan:</strong> {{ $dosen->jurusan }}</li>
          <li><strong>Jabatan:</strong> {{ $dosen->jabatan }}</li>
          <li><strong>Pendidikan:</strong> {{ $dosen->pendidikan }}</li>
          <li><strong>Alamat:</strong> {{ $dosen->alamat == '' ? 'N/A' : $dosen->alamat }}</li>
          <li><strong>Status:</strong> {{ $dosen->status }}</li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>