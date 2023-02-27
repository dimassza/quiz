<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Mapel</title>
</head>
<body>
    <center>
    <h1>Data Guru</h1>
    <a href="/crudmapel/mapel">Tambah Guru</a>
    <table border="1">
        <tr>
            <th>Subjek</th>
            <th>Waktu</th>
        </tr>
        @foreach($mapel as $m)
        <tr>
            <td>{{$m->subjek}}</td>
            <td>{{$m->waktu}}</td>
			<td>
				<a href="/crudmapel/mapeledit/{{ $m->id }}">Edit</a>
				|
				<a href="/crudmapel/mapelhapus/{{ $m->id }}">Hapus</a>
			</td>
        </tr>
        @endforeach
    </table>
</body>
</html>