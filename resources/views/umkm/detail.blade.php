<!DOCTYPE html>
<html>
<head>
    <title>Detail UMKM</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<h3>{{ $data->nama_umkm }}</h3>
<p>{{ $data->deskripsi }}</p>

<ul>
    <li>Alamat: {{ $data->alamat }}</li>
    <li>Kontak: {{ $data->kontak }}</li>
    <li>Jam Operasional: {{ $data->jam_operasional }}</li>
</ul>

<h4>Riwayat Monitoring</h4>

@foreach($data->monitoring as $m)
    <p>{{ $m->tanggal }} - {{ $m->catatan }}</p>
@endforeach

<a href="/" class="btn">Kembali</a>

</body>
</html>
