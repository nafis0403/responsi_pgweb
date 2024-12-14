<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumber Data</title>
    <link rel="icon" href="icon/clurit.png" type="image/png">
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
        .sumber-data-card {
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            background-color: #bbdefb; /* Lighter blue for cards */
            transition: all 0.3s ease;
        }
        .sumber-data-card:hover {
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }
        .sumber-data-card img {
            border-radius: 10px 10px 0 0;
            object-fit: cover;
            height: 200px;
            width: 100%;
        }
        .sumber-data-card-body {
            padding: 15px;
        }

        /* Judul sumber data dalam card */
        .sumber-data-card-title {
            font-size: 18px;
            font-family: 'Bebas Neue', sans-serif; /* Font keren */
            color: #0d47a1; /* Dark blue for the title */
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2); /* Shadow effect */
            text-transform: uppercase; /* Capitalize text */
            letter-spacing: 2px; /* Add space between letters */
            transition: transform 0.3s ease, color 0.3s ease; /* Smooth animation */
        }
        .sumber-data-card-title:hover {
            color: #1565c0; /* Change color on hover */
            transform: scale(1.05); /* Slightly increase size */
        }

        .sumber-data-card-text {
            color: #333;
            font-size: 14px;
        }

        /* Button Style */
        .btn-sumber-data {
            background-color: #0d47a1; /* Dark blue for the buttons */
            color: white;
            font-weight: bold;
            padding: 8px 12px;
            text-transform: uppercase;
            border-radius: 5px;
        }
        .btn-sumber-data:hover {
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
    <h2 class="text-center mb-4">Sumber Data</h2>
    <div class="row">
        <!-- Sumber data 1 -->
        <div class="col-md-4">
            <div class="card sumber-data-card">
                <img src="https://geoportal.jogjaprov.go.id/portal/sharing/rest/content/items/ee30a204d94b411c9a1d5e1ed480489e/resources/Sleman.png" alt="Gambar Sumber Data 1">
                <div class="card-body sumber-data-card-body">
                    <h5 class="card-title sumber-data-card-title">Geoportal Sleman</h5>
                    <p class="card-text sumber-data-card-text">Geoportal Sleman menyediakan data geospasial yang terintegrasi untuk mendukung perencanaan wilayah dan pengelolaan sumber daya di Kabupaten Sleman.</p>
                    <a href="https://geoportal.slemankab.go.id/#/" class="btn btn-sumber-data">Kunjungi Laman</a>
                </div>
            </div>
        </div>

        <!-- Sumber data 2 -->
        <div class="col-md-4">
            <div class="card sumber-data-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZ_LAIa97nMZwtOtLG243AxEJktWGrOtaHWw&s" alt="Gambar Sumber Data 2">
                <div class="card-body sumber-data-card-body">
                    <h5 class="card-title sumber-data-card-title">Geoserver</h5>
                    <p class="card-text sumber-data-card-text">GeoServer menerbitkan data dari sumber data spasial utama menggunakan standar terbuka. GeoServer mengimplementasikan beberapa protokol Open Geospatial.</p>
                    <a href="http://localhost:8080/geoserver/web/wicket/bookmarkable/org.geoserver.web.GeoServerLoginPage?3" class="btn btn-sumber-data">Kunjungi Laman</a>
                </div>
            </div>
        </div>

        <!-- Sumber data 3 -->
        <div class="col-md-4">
            <div class="card sumber-data-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsEh5lIhDfpc0GaEiFerLiHWGL7AGVKQXwsA&s" alt="Gambar Sumber Data 3">
                <div class="card-body sumber-data-card-body">
                    <h5 class="card-title sumber-data-card-title">Indonesia Geospasial</h5>
                    <p class="card-text sumber-data-card-text">Membantu menyalurkan/ mendistribusikan Peta RBI yang secara resmi dikeluarkan oleh Badan Informasi Geospasial (BIG).</p>
                    <a href="https://www.indonesia-geospasial.com/2020/01/shp-rbi-provinsi-di-yogyakarta.html" class="btn btn-sumber-data">Kunjungi Laman</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
