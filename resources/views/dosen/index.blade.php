{{-- {{ session()->get('pesan')}} --}}
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
                <a href="{{ route('dosens.create') }}" class="btn btn-primary">
                Tambah Dosen
                </a>
        </div>
        @if(session()->has('pesan'))
            <div class="alert alert-success">
            {{ session()->get('pesan')}}
            </div>
        @endif
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
            @forelse ($dosens as $dosen)
              <tr>
                <th>{{ $loop->iteration }}</th>
                <td><a href="{{ route('dosens.show',['dosen'=> $dosen->id]) }}">{{ $dosen->nip }}</a></td>
                <td>{{ $dosen->nama }}</td>
                <td>{{ $dosen->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki' }}</td>
                <td>{{ $dosen->tanggal_lahir }}</td>
                <td>{{ $dosen->email }}</td>
                <td>{{ $dosen->telepon ?? 'N/A' }}</td>
                <td>{{ $dosen->jurusan }}</td>
                <td>{{ $dosen->jabatan }}</td>
                <td>{{ $dosen->pendidikan }}</td>
                <td>{{ $dosen->alamat == '' ? 'N/A' : $dosen->alamat }}</td>
                <td>{{ $dosen->status }}</td>
              </tr>
            @empty
              <tr>
                <td colspan="12" class="text-center">Tidak ada data...</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>