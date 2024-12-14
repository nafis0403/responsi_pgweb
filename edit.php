<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "responsi_nafis");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data berdasarkan ID
$id = $_GET['id'];
$sql = "SELECT * FROM titik_klitih_fix WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if (!$data) {
    echo "Data tidak ditemukan!";
    exit;
}

// Proses update data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Lokasi = $_POST["Lokasi"];
    $Longitude = $_POST["Longitude"];
    $Latitude = $_POST["Latitude"];

    $sql = "UPDATE titik_klitih_fix SET Lokasi = ?, Longitude = ?, Latitude = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $Lokasi, $Longitude, $Latitude, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Data berhasil diperbarui!'); window.location='home.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan saat memperbarui data.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Lokasi Rawan Klitih</title>
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
        <h3>Edit Data Lokasi Rawan Klitih</h3>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="Lokasi" class="form-label">Lokasi</label>
                <input type="text" class="form-control" id="Lokasi" name="Lokasi" value="<?= htmlspecialchars($data['Lokasi']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="Longitude" class="form-label">Longitude</label>
                <input type="text" class="form-control" id="Longitude" name="Longitude" value="<?= htmlspecialchars($data['Longitude']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="Latitude" class="form-label">Latitude</label>
                <input type="text" class="form-control" id="Latitude" name="Latitude" value="<?= htmlspecialchars($data['Latitude']) ?>" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-custom">Simpan</button>
                <a href="home.php" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
        <p class="text-muted">Pastikan semua informasi yang dimasukkan sudah benar sebelum menyimpan perubahan.</p>
    </div>
</body>
</html>
