<table border="1">
	<tr>
		<th>No</th>
		<th>NIM</th>
		<th>Nama Mahasiswa</th>
		<th>Program Studi</th>
	</tr>
@php
	$i = 1;
@endphp
	 
@foreach ($mahasiswa as $mhs)
	<tr>
		<td>{{$i++}}</td>
		<td>{{$mhs->NIM}}</td>
		<td>{{$mhs->NamaMHS}}</td>
		<td>{{$mhs->Prodi}}</td>
	</tr>
@endforeach
</table>

<a href="data/create" type="button">Tambah Data</a>