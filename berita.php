<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Terbaru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Menambahkan Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <style>
        /* Background color */
        body {
            background-color: #e3f2fd; /* Light blue background */
        }

        .container {
            padding-top: 40px;
            padding-bottom: 40px;
        }

        /* Judul utama */
        h2 {
            color: #0d47a1; /* Dark blue for the title */
            font-family: 'Bebas Neue', sans-serif; /* Font keren */
            font-size: 36px;
            text-transform: uppercase; /* Capitalize text */
            letter-spacing: 3px; /* Add space between letters */
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); /* Shadow effect */
            transition: transform 0.3s ease, color 0.3s ease; /* Smooth animation */
        }

        /* Efek Hover */
        h2:hover {
            color: #1565c0; /* Change color on hover */
            transform: scale(1.1); /* Scale the text slightly */
        }

        /* Card Styles */
        .berita-card {
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            background-color: #bbdefb; /* Lighter blue for cards */
            transition: all 0.3s ease;
        }
        .berita-card:hover {
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }
        .berita-card img {
            border-radius: 10px 10px 0 0;
            object-fit: cover;
            height: 200px;
            width: 100%;
        }
        .berita-card-body {
            padding: 15px;
        }

        /* Judul berita dalam card */
        .berita-card-title {
            font-size: 18px;
            font-family: 'Bebas Neue', sans-serif; /* Font keren */
            color: #0d47a1; /* Dark blue for the title */
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2); /* Shadow effect */
            text-transform: uppercase; /* Capitalize text */
            letter-spacing: 2px; /* Add space between letters */
            transition: transform 0.3s ease, color 0.3s ease; /* Smooth animation */
        }
        .berita-card-title:hover {
            color: #1565c0; /* Change color on hover */
            transform: scale(1.05); /* Slightly increase size */
        }

        .berita-card-text {
            color: #333;
            font-size: 14px;
        }

        /* Button Style */
        .btn-berita {
            background-color: #0d47a1; /* Dark blue for the buttons */
            color: white;
            font-weight: bold;
            padding: 8px 12px;
            text-transform: uppercase;
            border-radius: 5px;
        }
        .btn-berita:hover {
            background-color: #1565c0; /* Slightly lighter blue on hover */
        }

        /* Hover Effect on Card */
        .card-body:hover {
            background-color: #90caf9; /* Hover effect with lighter blue */
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Berita Terbaru</h2>
    <div class="row">
        <!-- Berita 1 -->
        <div class="col-md-4">
            <div class="card berita-card">
                <img src="https://asset-2.tstatic.net/jogja/foto/bank/images/pelaku-klithih_2017-jalan-kenari_20170314_161215.jpg" alt="Gambar Berita 1">
                <div class="card-body berita-card-body">
                    <h5 class="card-title berita-card-title">Niat Hati Ikut Tes CPNS ke Jogja Malah Kena Klitih di Sleman</h5>
                    <p class="card-text berita-card-text">Deskripsi singkat mengenai berita 1. Ini hanya contoh deskripsi singkat yang bisa Anda sesuaikan.</p>
                    <a href="https://jogja.tribunnews.com/2024/10/29/niat-hati-ikut-tes-cpns-ke-jogja-malah-kena-klitih-di-sleman-polisi-pelaku-pura-pura-jadi-korban" class="btn btn-berita">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Berita 2 -->
        <div class="col-md-4">
            <div class="card berita-card">
                <img src="https://static.republika.co.id/uploads/images/inpicture_slide/5-faktor-penyebab-klitih-di_220107234500-750.jpg" alt="Gambar Berita 2">
                <div class="card-body berita-card-body">
                    <h5 class="card-title berita-card-title">Klitih Kembali Makan Korban, Dua Mahasiswa Ditodong Sajam</h5>
                    <p class="card-text berita-card-text">Deskripsi singkat mengenai berita 2. Ini hanya contoh deskripsi singkat yang bisa Anda sesuaikan.</p>
                    <a href="https://rejogja.republika.co.id/berita/sh6mru282/klitih-kembali-makan-korban-dua-mahasiswa-ditodong-sajam-satu-meninggal-dunia" class="btn btn-berita">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Berita 3 -->
        <div class="col-md-4">
            <div class="card berita-card">
                <img src="https://media.suara.com/pictures/653x366/2022/04/05/40407-ilustrasi-klitih.webp" alt="Gambar Berita 3">
                <div class="card-body berita-card-body">
                    <h5 class="card-title berita-card-title">Geger, Remaja Diduga Klitih Diamankan Warga di JJLS</h5>
                    <p class="card-text berita-card-text">Deskripsi singkat mengenai berita 3. Ini hanya contoh deskripsi singkat yang bisa Anda sesuaikan.</p>
                    <a href="https://jogja.suara.com/read/2024/11/16/184812/geger-remaja-diduga-klitih-diamankan-warga-di-jjls-gunungkidul" class="btn btn-berita">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
