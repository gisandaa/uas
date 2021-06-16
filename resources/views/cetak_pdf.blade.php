<!DOCTYPE html><html><head>
<title>Cetak Berita</title>
</head>
<body>
<style type="text/css">table tr td,table tr th{font-size: 9pt;}</style>
<center><h5>Cetak Artikel</h4></center>
<table class='table table-bordered'><thead><tr><th>No</th><th>Judul</th><th>Isi</th><th>Gambar</th></tr></thead>
<tbody>
@foreach($blog as $a)
<tr>
<td>{{$a->id}}</td>
<td>{{$a->title}}</td>
<td>{{$a->content}}</td>
<td>{{$a->image}}</td>
</tr>
@endforeach
</tbody>
</table>
</body>
</html>