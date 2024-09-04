<?php
if($_POST){
    $Id=$_POST['Id'];
    $Nik=$_POST['Nik'];
    $Nama=$_POST['Nama'];
    $Alamat=$_POST['Alamat'];
    $Jenis_Kelamin=$_POST['Jenis_Kelamin'];
    $Jabatan= $_POST['Jabatan'];
    $No_tlp=$_POST['No_tlp'];
    if(empty($Id)){
        echo "<script>alert('Id pegawai tidak boleh kosong');location.href='tambah_siswa.php';</script>";

    } elseif(empty($Nik)){
        echo "<script>alert('Nik tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($No_tlp)){
        echo "<script>alert('No tlp tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into Pegawai (Id, Nik, Nama, Alamat, Jenis_Kelamin, Jabatan, No_tlp) value 
        ('".$Id."','".$Nik."','".$Nama."','".$Alamat."','".$Jenis_Kelamin."','".$Jabatan."','".$No_tlp."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan pegawai');location.href='tampil_pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
        }
    }
}
?>