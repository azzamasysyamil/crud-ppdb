<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="P8-F3.css">
    <link rel="shortcut icon" href="../html5/img/Web10.png" type="image/x-icon">
    <title>Pendaftaran Siswa Baru | Student Day</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>Pendaftaran</h1>
        <h3>Penerimaan Peserta Didik Baru</h3>
    </header>    
    <nav>
        <ul>
            <li><a href="form-data.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftaran</a></li>
        </ul>
    </nav>

    <h4>Formulir PPDB</h4>
    <div>
        <form action="proses-pendaftaran.php" method="post">
            <div>
                <label for="">Nama Lengkap :</label>
                <input type="text" name="nama" require>
            </div>
            <div>
                <label for="">Alamat Lengkap :</label>
                <br>
                <textarea name="alamat" cols="40" rows="10"></textarea>
            </div>
            <div>
                <br>
                <label for="">Jenis Kelamin :</label>
                <br>
                <input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki
                <br>
                <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
            </div>
            <div>
                <br>
                <label for="">Agama</label>
                <select name="agama" id="">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </div>
            <div>
                <br>
                <label for="">Sekolah Asal</label>
                <input type="text" name="sekolah-asal">
            </div>
            <div>
                <br>
                <input type="reset">
                <input type="submit" name="simpan" value="Simpan">
            </div>
        </form>
    </div>

    <footer>
        <hr>
        <i>Dibuat dengan semangat &copy;by <b>Azzam</b> </i>
    </footer>
</body>
</html>