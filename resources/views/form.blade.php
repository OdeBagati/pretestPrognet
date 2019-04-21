<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<body>
    <form action="{{route('data.store')}}" method="POST">
      @csrf
        <fieldset>
        <p>
            <label>NIM</label>
            <input type="text" name="NIM" placeholder="Masukkan NIM" />
        </p>
        <p>
            <label>Nama</label>
            <input type="text" name="NamaMHS" placeholder="Masukkan Nama" />
        </p>
        <p>
            <label>Program Studi</label>
            <input type="text" name="Prodi" placeholder="Masukkan Program Studi" />
        </p>
        <p>
            <input type="submit" name="submit" value="Tambahkan" />
        </p>
        </fieldset>
    </form>
</body>
</html>