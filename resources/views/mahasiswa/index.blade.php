<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Input Mahasiswa</title>
</head>
<body>
  <div class="container mt-5">
  <h1>Data Mahasiswa</h1>
  <div class="container">
    <form action="/mahasiswa/store" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="nama_mahasiswa">Nama</label>
      <input type="text" class="form-control" name="nama_mahasiswa"  class="form-control"placeholder="Masukkan Nama">
    </div>
    <div class="form-group">
      <label>Tanggal Lahir</label>
      <input type="date" class="form-control" name="ttl">
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
      <input type="text"class="form-control" name="alamat" placeholder="Masukkan Alamat">
    </div>
    <div class="form-group">
      <label for="prodi">Prodi</label>
      <input type="text"class="form-control" name="prodi" placeholder="Masukkan Prodi">
    </div>
    <button class="btn-primary">submit</button>
  </form>
  </div>
  </div>
</body>
</html>