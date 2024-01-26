<?php
include("inc_header.php");
if (!in_array("staff", $_SESSION['admin_akses'])) {
    echo "Kamu tidak punya akses";
    include("inc_footer.php");
    exit();
}
?>
<h1>Halaman Staff</h1>
Selamat datang di halaman Staff
<?php
include("inc_footer.php");
?>
<?php
include("proses.php");
?>
<html>

<head>
    <!-- Library Highcharts -->
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <style>
        /* Menambahkan style ukuran grafik */
        #chartContainer {
            height: 400px;
            width: 76%;
            /* Tambahkan lebar sesuai kebutuhan */
            margin: auto;
            /* Agar grafik berada di tengah halaman */
        }
    </style>
</head>

<body>
    <!-- Container untuk grafik -->
    <div id="chartContainer"></div>

    <!-- Skrip JavaScript untuk membuat grafik -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Data untuk grafik
            var data = {
                jurusan: ['Sistem Informasi', 'Ilmu Hukum', 'managemet'],
                lakiLaki: [3, 3, 0], // Jumlah mahasiswa laki-laki
                perempuan: [0, 0, 1], // Jumlah mahasiswa perempuan
            };

            // Konfigurasi grafik
            var options = {
                chart: {
                    type: 'bar',
                },
                title: {
                    text: 'Jumlah Mahasiswa Berdasarkan Jurusan dan Jenis Kelamin',
                },
                xAxis: {
                    categories: data.jurusan,
                },
                yAxis: {
                    title: {
                        text: 'Jumlah Mahasiswa',
                    },
                    min: 0, // Nilai minimum pada sumbu Y
                    max: 100, // Nilai maksimum pada sumbu Y
                },
                series: [{
                        name: 'Laki-laki',
                        data: data.lakiLaki,
                    },
                    {
                        name: 'Perempuan',
                        data: data.perempuan,
                    },
                ],
            };

            // Membuat grafik dengan Highcharts
            Highcharts.chart('chartContainer', options);
        });
    </script>
</body>

</html>