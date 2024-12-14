<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Lokasi</title>
    <link rel="icon" href="icon/clurit.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Kriminal';
            src: url('fonts/Kriminal.ttf') format('truetype');
        }

        body {
            background-image: url('img/data.jpg'); /* Ganti dengan gambar latar belakang */
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Kriminal', Arial, sans-serif;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            max-width: 600px;
            background: rgba(255, 255, 255, 0.8); /* transparansi latar belakang form */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            border: 3px solid #64b5f6;
        }

        h3 {
            color: #1976d2;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            color: #1976d2;
            font-weight: 500;
        }

        .form-control {
            border: 2px solid #64b5f6;
            border-radius: 10px;
            font-family: 'Kriminal', Arial, sans-serif;
        }

        .form-control:focus {
            border-color: #1976d2;
            box-shadow: 0 0 5px rgba(25, 118, 210, 0.3);
        }

        .btn-custom {
            background-color: #1976d2;
            color: #fff;
            font-weight: bold;
            border-radius: 10px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #1565c0;
            transform: scale(1.05);
        }

        .btn-secondary {
            border-radius: 10px;
            padding: 10px 20px;
            background-color: #64b5f6;
            color: #fff;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #42a5f5;
        }

        .text-muted {
            font-size: 0.9em;
            text-align: center;
            margin-top: 20px;
        }

        /* Responsif untuk perangkat kecil */
        @media (max-width: 576px) {
            .container {
                padding: 20px;
            }
            h3 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Input Titik Lokasi Klitih</h3>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="id" class="form-label">Nomor</label>
                <input type="number" class="form-control" id="id" name="id" required>
            </div>
            <div class="mb-3">
                <label for="Lokasi" class="form-label">Lokasi</label>
                <input type="text" class="form-control" id="Lokasi" name="Lokasi" required>
            </div>
            <div class="mb-3">
                <label for="Longitude" class="form-label">Longitude</label>
                <input type="number" step="any" class="form-control" id="Longitude" name="Longitude" required>
            </div>
            <div class="mb-3">
                <label for="Latitude" class="form-label">Latitude</label>
                <input type="number" step="any" class="form-control" id="Latitude" name="Latitude" required>
            </div>
            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-custom">Simpan Data</button>
                <a href="home.php" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
        <p class="text-muted">Pastikan semua data telah terisi dengan benar!</p>
    </div>

    <?php
    // Proses Input Data ke Database
    if (isset($_POST['submit'])) {
        // Koneksi ke database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "responsi_nafis";

        // Buat koneksi
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Cek koneksi
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Ambil data dari form
        $id = $_POST['id'];
        $Lokasi = $_POST['Lokasi'];
        $Longitude = $_POST['Longitude'];
        $Latitude = $_POST['Latitude'];

        // SQL untuk memasukkan data
        $sql = "INSERT INTO titik_klitih_fix (id, Lokasi, Longitude, Latitude) 
                VALUES ('$id', '$Lokasi', '$Longitude', '$Latitude')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Data berhasil disimpan!'); window.location.href='home.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Tutup koneksi
        $conn->close();
    }
    ?>
</body>
</html>
