<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tambah Pegawai</title>
    <style>
        body {
            background-image: url('https://www.example.com/library-background.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .form-container {
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
    </style>
</head>
<body>
    <div class="container">
        <h3 class="text-center my-4">Tambah Pegawai</h3>
        <div class="form-container">
            <form id="tambahPegawaiForm" action="proses_tambah_pegawai.php" method="post">
                <div class="mb-3">
                    <label for="IdPegawai" class="form-label">Id Pegawai:</label>
                    <input id="IdPegawai" name="Id" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="Nik" class="form-label">Nik Pegawai:</label>
                    <input id="NikPegawai" name="Nik" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="NamaPegawai" class="form-label">Nama Pegawai:</label>
                    <select type="text" id="NamaPegawai" name="Nama" class="form-control">
                    </select>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat:</label>
                    <textarea id="alamat" name="Alamat" class="form-control" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label for="JenisKelamin" class="form-label">Jenis Kelamin:</label>
                    <input id="JenisKelamin" name="Jenis_Kelamin" class="form-control">
                    <option></option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                </div>
                <div class="mb-3">
                    <label for="Jabatan" class="form-label">Jabatan:</label>
                    <select type="text" id="Jabatan" name="Jabatan" class="form-control">
                    </select>
                </div>
                <div class="mb-3">
                    <label for="NoTlp" class="form-label">Nomor Telepon:</label>
                    <input id="NoTlp" name="No_tlp" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Siswa</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('tambahSiswaForm').addEventListener('submit', function(event) {
            var Id = document.getElementById('Id').value;
            var Nik = document.getElementById('Nik').value;
            var Nama = document.getElementById('Nama').value;
            var Alamat = document.getElementById('Alamat').value;
            var Jenis_Kelamin = document.getElementById('Jenis_Kelamin').value;
            var Jabatan = document.getElementById('Jabatan').value;
            var No_tlp = document.getElementById('No_tlp').value;

            if (Id === '' || Nik === '' || Nama === '' || Alamat === '' || Jenis_Kelamin === '' || Jabatan === '' || No_tlp === '') {
                alert('Semua kolom harus diisi!');
                event.preventDefault();
            } else {
                alert('pegawai berhasil ditambahkan!');
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>