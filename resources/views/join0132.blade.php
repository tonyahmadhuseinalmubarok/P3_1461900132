<!DOCTYPE html>
<html>
<head>
<title>1461900132</title>
</head>
<body bgcolor=#b7d5e8>
<ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul>
<h3><marquee>Data Pasien Rumah Sakit Mawar</h3></marquee>
<p>Cari :</p>
<form action="/pasien/cari" method="GET">
<input type="text" name="lihat" placeholder="Cari pasien .." value="{{ old('cari') }}">
<input type="submit" value="Cari">
</form>
<br>
<form action="/pasien/kamar" method="GET">
<input type="text" name="lihat" placeholder="Cari Kamar" value="{{ old('cari') }}">
<input type="submit" value="Cari">
</form>

<a href="/pasien/tambah"> + User Baru </a>
<br/>
<br/>
<table border="1">
<tr>
<th>Kamar</th>
<th>Pasien</th>
<th>dokter</th>
<th>nama</th>

</tr>
@foreach($kamar as $p)
<tr>
<td>{{ $p->id }}</td>
<td>{{ $p->nama2}}</td>
<td>{{ $p->nama}}</td>
<td>
<a href="/pasien/edit/{{ $p->id }}">Edit</a>
|
<a href="/pasien/hapus/{{ $p->id }}">Hapus</a>
</td>
</tr>
@endforeach
</table>
<h3><marquee>Semoga Sehat Selalu</marquee></h3>
</ul></ul></ul></ul></ul></ul></ul></ul></ul></ul></ul></ul></ul></ul>
</body>
</html>
