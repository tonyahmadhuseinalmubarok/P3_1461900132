<!DOCTYPE html>
<html>
<head>
<title>1461900132</title>
</head>
<body bgcolor=#b7d5e8>
<ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul>
<h3><marquee>Edit Pasien dengan Benar</marquee></h3>
<a href="/pasien"> Kembali</a>
<br/>
<br/>
@foreach($pasien as $p)
<form action="/pasien/update" method="post">
{{ csrf_field() }}
<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
Nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br/>
Alamat <textarea required="required" name="alamat">{{ $p->alamat }}</textarea> <br/>
<input type="submit" value="Simpan">
</form>
@endforeach
<h3><marquee>Semoga Sehat Selalu</marquee></h3>
</ul></ul></ul></ul></ul></ul></ul></ul></ul></ul></ul></ul></ul></ul>
</body>
</html>
