<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tampil Siswa</title>
    <style>
        body {
            background-image: url('https://www.example.com/library-background.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .table-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px 0px #000;
            margin-top: 20px;
        }
        .btn-primary {
            background-color: #2c3e50;
            border-color: #2c3e50;
        }
        .btn-primary:hover {
            background-color: #1a252f;
            border-color: #1a252f;
        }
        .btn-success {
            background-color: #27ae60;
            border-color: #27ae60;
        }
        .btn-success:hover {
            background-color: #1e8449;
            border-color: #1e8449;
        }
        .btn-danger {
            background-color: #e74c3c;
            border-color: #e74c3c;
        }
        .btn-danger:hover {
            background-color: #c0392b;
            border-color: #c0392b;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="text-center my-4">Tampil Pegawai</h3>
        <div class="table-container">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NIK</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>JENIS KELAMIN</th>
                        <th>JABATAN</th>
                        <th>NO TELEPON</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "koneksi.php";
                    $qry_pegawai = mysqli_query($conn, "select * from siswa join kelas on kelas.id_kelas=siswa.id_kelas");
                    $no = 0;
                    while ($data_pegawai = mysqli_fetch_array($qry_pegawai)) {
                        $no++; ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $data_pegawai['id'] ?></td>
                            <td><?= $data_pegawai['Nik'] ?></td>
                            <td><?= $data_pegawai['Nama'] ?></td>
                            <td><?= $data_pegawai['Alamat'] ?></td>
                            <td><?= $data_pegawai['Jenis_Kelamin'] ?></td>
                            <td><?= $data_pegawai['Jabatan'] ?></td>
                            <td><?= $data_pegawai['No_tlp'] ?></td>
                            <td>
                                <a href="ubah_pegawai.php?Id=<?= $Id['Id'] ?>" class="btn btn-success">Ubah</a> |
                                <a href="hapus.php?Id=<?= $Id['Id'] ?>"
                                    onclick="return confirm('Apakah anda yakin menghapus data ini?')"
                                    class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="text-left mt-4">
            <a href="tambah_siswa.php" class="btn btn-primary">Tambah Pegawai</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>