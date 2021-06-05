<!DOCTYPE html>
<html>
<head>
<title>1461900132</title>
</head>
<body bgcolor=#b7d5e8>
<ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul>
<h3><marquee>Masukkan data dengan benar</marquee></h3>
<a href="/pasien"> Kembali</a>
<br/>
<br/>
<form action="/pasien/store" method="post">
{{ csrf_field() }}
Id     <input type="text" name="id    " required="required"> <br/>
Nama   <input type="text" name="nama  " required="required"> <br/>
Alamat <textarea name="alamat" required="required"></textarea> <br/>
<input type="submit" value="Simpan">
</form>
<h3><marquee>Semoga Sehat Selalu</marquee></h3>
</ul></ul></ul></ul></ul></ul></ul></ul></ul></ul></ul></ul></ul></ul>
</body>
</html>