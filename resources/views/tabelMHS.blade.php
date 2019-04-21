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
		<td>{{$mhs->mahasiswa}}</td>
		<td>
			<form action="/mahasiswa/{{$mhs->id}}" method="POST">
				@csrf
    			@method('DELETE')
    			<input type="submit" value="Delete">
			</form>
		</td>
	</tr>
@endforeach
</table>