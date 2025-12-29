<!DOCTYPE html>
<html>
<head>
    <title>SIPemUMKM Kampus</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<h2>SIPemUMKM Kampus</h2>

<div class="wrapper">
@foreach($umkm as $u)
    <div class="card">
        <h4>{{ $u->nama_umkm }}</h4>
        <p>{{ $u->kategori }}</p>
        <span class="status-aktif">{{ $u->status }}</span>
        <br><br>
        <a href="/umkm/{{ $u->id }}" class="btn">Lihat Detail</a>
    </div>
@endforeach
</div>

</body>
</html>
