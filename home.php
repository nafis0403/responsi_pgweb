<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE KLITIH</title>
    <link rel="icon" href="icon/clurit.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('img/jogja.png');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            color: #333;
        }

        #map {
            height: 800px;
            border-radius: 10px;
            position: relative;
        }


        /* Styling untuk tombol kembali ke lokasi awal */
        #back-to-home {
            position: absolute;
            bottom: 10px;
            left: 10px;
            /* Pindahkan ke kiri */
            z-index: 999;
            background-color: #0047ab;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        #back-to-home:hover {
            background-color: #003080;
        }

        #legend {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            max-height: 300px;
            overflow-y: auto;
            z-index: 1000;
        }

        #legend .legend-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        #legend .legend-item {
            margin-bottom: 10px;
        }

        #legend .legend-item img {
            vertical-align: middle;
            margin-right: 8px;
        }

        #legend .legend-line {
            display: inline-block;
            width: 20px;
            height: 5px;
            background-color: red;
            vertical-align: middle;
            margin-right: 8px;
        }

        /* Custom navbar styles */
        .navbar {
            background-color: #0047ab;
            position: fixed;
            /* Navbar tetap di atas */
            top: 0;
            width: 100%;
            z-index: 1030;
            /* Pastikan navbar di atas konten */
        }

        .navbar a {
            color: white !important;
        }

        .navbar .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }

        /* Tabel Border dan Hover */
        .table {
            border: 1px solid #dee2e6;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .table th {
            background-color: #0047ab;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            border-color: #0047ab;
        }

        .table td,
        .table th {
            padding: 15px;
            vertical-align: middle;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f5f9;
            cursor: pointer;
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #dee2e6;
        }

        /* Header Spacing */
        h3.text-center {
            font-size: 1.75rem;
            font-weight: bold;
            text-transform: uppercase;
            color: #0047ab;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">THE KLITIH</a>
            <div class="d-flex">
                <a href="input.php" class="btn btn-outline-light me-3">Input</a>
                <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#infoModal">Info</button>
            </div>
        </div>
    </nav>


    <!-- Modal Info -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="infoModalLabel">Informasi Pembuat</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column align-items-center text-center">
                    <!-- Foto di tengah -->
                    <img src="img/nafis_azka.jpg" alt="Foto Nafis Azka Alfarisi" class="rounded-circle mb-3"
                        style="width: 150px; height: 150px; object-fit: cover; border: 4px solid #0047ab;">
                    <!-- Nama dan NIM di bawah foto -->
                    <h5 class="mb-2">Nafis Azka Alfarisi</h5>
                    <p class="text-muted mb-0">NIM: 23/519775/SV/23175</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Tabel Data -->
    <div class="container mt-4" id="table-container">
        <h3 class="text-center mb-4">Data Titik Klitih</h3>
        <table class="table table-hover table-bordered align-middle">
            <thead class="table-primary text-center">
                <tr>
                    <th>Nomor</th>
                    <th>Lokasi</th>
                    <th>Longitude</th>
                    <th>Latitude</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                $conn = new mysqli("localhost", "root", "", "responsi_nafis");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM titik_klitih_fix";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["Lokasi"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["Longitude"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["Latitude"]) . "</td>";
                        echo "<td>
                    <a href='edit.php?id=" . $row["id"] . "' class='btn btn-outline-success btn-sm'>Edit</a>
                    <a href='delete.php?id=" . $row["id"] . "' class='btn btn-outline-danger btn-sm' onclick=\"return confirm('Hapus data ini?')\">Delete</a>
                  </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>


    <!-- Peta -->
    <div id="map" class="container mt-4">
        <!-- Tombol untuk mengembalikan lokasi peta -->
        <button id="back-to-home" onclick="resetMap()">Kembali ke Lokasi Awal</button>
    </div>

    <!-- Legenda -->
    <div id="legend">
        <div class="legend-title">LEGENDA</div>
        <div class="legend-item">
            <img src="icon/crime.png" style="width:20px;" alt="Titik Klitih Icon"> <span>Titik Klitih</span>
        </div>
        <div class="legend-item">
            <div class="legend-line"></div> <span>Jalan</span>
        </div>
        <div class="legend-item">
            <img src="http://localhost:8080/geoserver/responsi_pgweb_nafis_fix/wms?service=WMS&version=1.1.1&request=GetLegendGraphic&layer=responsi_pgweb_nafis_fix:Sleman_KotaJogja&format=image/png" alt="Legenda Area Kecamatan">
            <span>Batas Kecamatan</span>
        </div>
    </div>

    <script>
        // Inisialisasi peta
        var map = L.map('map').setView([-7.797068, 110.370529], 11);

        // Menambahkan beberapa basemap
        var openStreetMap = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map); // Basemap awal

        var esriWorldImagery = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            attribution: 'Tiles © Esri &mdash; Source: Esri, Maxar, Earthstar Geographics'
        });

        var cartoDBPositron = L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; OpenStreetMap & CARTO contributors'
        });

        // Layer WMS (Area: Sleman dan Kota Jogja)
        var wmsLayerArea = L.tileLayer.wms("http://localhost:8080/geoserver/responsi_pgweb_nafis_fix/wms", {
            layers: "responsi_pgweb_nafis_fix:Sleman_KotaJogja",
            format: "image/png",
            transparent: true,
            attribution: "Data WMS dari GeoServer"
        });

        // Layer WMS (Jalan Kabupaten Sleman)
        var wmsLayerJalan = L.tileLayer.wms("https://geoportal.slemankab.go.id/geoserver/geonode/ows", {
            layers: "geonode:jalan_kabupaten_sleman_2023",
            format: "image/png",
            transparent: true,
            attribution: "Data WMS dari GeoServer"
        });

        // Menambahkan layer GeoJSON (Titik Klitih)
        var klitihLayer = L.geoJSON(null, {
            pointToLayer: function(feature, latlng) {
                return L.marker(latlng, {
                    icon: L.icon({
                        iconUrl: "icon/crime.png",
                        iconSize: [25, 25],
                    })
                });
            },
            onEachFeature: function(feature, layer) {
                var popup_content = "Nama: " + feature.properties.Name;
                layer.bindPopup(popup_content);
            }
        });

        // Memuat data GeoJSON Titik Klitih
        fetch("data/titik_klitih.geojson")
            .then(response => response.json())
            .then(data => klitihLayer.addData(data).addTo(map));

        // Menambahkan kontrol untuk memilih basemap dan overlay
        var baseLayers = {
            "OpenStreetMap": openStreetMap,
            "Esri World Imagery": esriWorldImagery,
            "CartoDB Positron": cartoDBPositron
        };

        var overlayLayers = {
            "Batas Kecamatan": wmsLayerArea,
            "Jalan": wmsLayerJalan,
            "Titik Klitih": klitihLayer
        };

        L.control.layers(baseLayers, overlayLayers, {
            collapsed: false
        }).addTo(map);

        // Fungsi untuk mengatur peta ke lokasi awal
        function resetMap() {
            map.setView([-7.797068, 110.370529], 11); // Kembalikan ke lokasi awal
        }
    </script>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>