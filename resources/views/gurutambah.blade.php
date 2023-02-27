<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Guru</title>
</head>
<body>
    <center>
    <h1>Tambah Data Guru</h1>
    <a href="/crudguru">Kembali</a>
    <br><br>
    <form action="/crudguru/proses" method="post">
        <ul>
            <label>Nama : </label>
            <input type="text" name="nama" required="required">
        </ul>
        <ul>
            <label>Kota : </label>
            <br>
            <textarea name="kota"cols="30" rows="10" required></textarea>
        </ul>
        <ul>
            <label>
                pob :
            </label>
            <input type="text" name="pob" required>
        </ul>
        <ul>
            <label>dob : </label>
            <input type="date" name="dob">
        </ul>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>