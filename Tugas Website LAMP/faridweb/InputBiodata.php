<?php
// Mengakses fungsi dan data  
require "Koneksi.php";
require 'Model.php';
// Membuat variabel
$genderArr = ['Laki-laki', 'Perempuan'];
$hasil = getMahasiswa($conn);

if (isset($_GET['id'])){
    deleteMahasiswa($_GET["id"]);
}

if (isset($_POST['simpan'])) {
    insertMahasiswa(
        $_POST["nama_mahasiswa"], 
        $_POST["nim"], 
        $_POST["jenis_kelamin"],
        $_POST["angkatan"], 
        $_POST["alamat"]);       
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<!-- Penggunaan CSS -->
<style>
    .container1 {
    height: 100vh;
    position: relative;
    }

    .container2 {
    height: 100px;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    text-align: center;
    margin: 20px;
    }

    .container3 {
    width: 30%;
    height: calc(100% - 100px);
    position: absolute;
    left: 0;
    top: 100px;
    padding: 20px;
    overflow-y: auto;
    margin-top: -20px;
    }

    .container4 {
    width: 70%;
    height: fit-content;
    position: absolute;
    right: 0;
    top: 100px;
    overflow-y: auto;
    background-color: white;
    padding: 10px;
    margin-right: 5px;
    }

    .table td {
    max-width: 150px;
    word-wrap: break-word;
    }

    .container3a {
    height: fit-content;
    padding: 10px;
    border-radius: 5px;
    background-color: #0B4141;
    font-weight: bold;
    color: white;
    }

    input[type="text"],
    input[type="number"],
    select {
    width: 100%;
    box-sizing: border-box;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    }

    body {
        background-color: #FAF0DC;
    }

    h2 {
        color: #0B4141;
    }
</style>
</head>
<body>
    <div class="container1">
        <div class="container2">
            <h2>Data Mahasiswa</h2>
        </div>
        <div class="container3">
            <div class="container3a">
                <form action="" method="post"> 
                    <?php if (isset($_GET['id'])){ ?>
                        <input type="hidden" name="id_mahasiswa" value="<?= $hasil[0]['id_mahasiswa']?>">
                    <?php } ?>
                    <label for="nama_mahasiswa">Nama Lengkap</label><br>
                    <input  type="text" name="nama_mahasiswa">
                    <br>
                    <label for="nim">NIM</label><br>
                    <input type="text" name="nim">
                    <br>
                    <label for="jenis_kelamin">Jenis Kelamin</label><br>
                    <select id="jenis_kelamin" name="jenis_kelamin">
                        <option disabled selected></option>
                        <?php foreach ($genderArr as $result) { ?>
                            <option value="<?php echo $result; ?>"><?php echo $result;?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <label for="angkatan">Angkatan</label><br>
                    <input type="number" name="angkatan" >
                    <br>
                    <label for="alamat">Alamat</label><br>
                    <input type="text" name="alamat" >
                    <br>
                    <div class="d-grid gap-2 mx-auto">
                        <button class="btn btn-primary btn-warning" type="submit" name="simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container4">
            <table class="table">
                <tr class="table-primary">
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jenis Kelamin</th>
                    <th>Angkatan</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                <?php
                // Foreach() menampilkan data pada tabel  
                foreach($hasil as $baris){
                    echo "<tr>";
                    echo "<td>".$baris['nama_mahasiswa']."</td>";
                    echo "<td>".$baris['nim']."</td>";
                    echo "<td>".$baris['jenis_kelamin']."</td>";
                    echo "<td>".$baris['angkatan']."</td>";
                    echo "<td>".$baris['alamat']."</td>";
                    ?>
                    <td>
                        <button class="btn btn-danger" onclick="if(confirm('Yakin Dihapus?')) { location.href='InputBiodata.php?id=<?php echo $baris['id_mahasiswa'] ?>' }">Hapus</button>
                    </td><?php
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
