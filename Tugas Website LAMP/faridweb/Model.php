<?php 
// FUNGSI OPERASI DATA MAHASISWA ------------------------------------

// MEMBUAT DATA MAHASISWA
function insertMahasiswa($nama_mahasiswa, $nim, $jenis_kelamin, $angkatan, $alamat){

    require "Koneksi.php";
    $query = $conn->prepare("INSERT INTO 
    mahasiswa (nama_mahasiswa, nim, jenis_kelamin, angkatan, alamat) 
    VALUES (:nama_mahasiswa, :nim, :jenis_kelamin, :angkatan, :alamat)");

    $query->execute(array(
        ":nama_mahasiswa" => $nama_mahasiswa, 
        ":nim" => $nim, 
        ":jenis_kelamin" => $jenis_kelamin, 
        ":angkatan" => $angkatan, 
        ":alamat" => $alamat
    ));

    if($query->rowCount() > 0){
       header("Location: InputBiodata.php");
    } else {
        echo "data gagal ditambahkan";
    }
}


// MENGHAPUS DATA MAHASISWA
function deleteMahasiswa($id_mahasiswa){
    require "Koneksi.php";
    $query = $conn->prepare("DELETE FROM mahasiswa WHERE id_mahasiswa = :id_mahasiswa");
    $query->execute(array("id_mahasiswa" => $id_mahasiswa));
    
    if($query->rowCount() > 0){
        header("Location: InputBiodata.php");
     } else {
         echo "data gagal dihapus";
     }
}

// MENGAMBIL DATA MAHASISWA
function getMahasiswa($conn){
    $query = $conn->prepare("SELECT * from mahasiswa");
    $query->execute();
    $hasil = $query->fetchAll(PDO::FETCH_ASSOC);
    return $hasil;
}
?>