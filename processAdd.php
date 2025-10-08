<?php
session_start();

$tipeFoto = [
    "Standard" => "./assets/images/standard.jpg",
    "Premium"  => "./assets/images/premium.jpg",
    "Scenic"   => "./assets/images/scenic.jpg",
];

if (!isset($_SESSION["field"])) {
    $_SESSION["field"] = [];
}

if (isset($_POST["menambah_lapangan"])) {
    $nama = $_POST["nama_lapangan"];
    $tipeLapangan = $_POST["tipe_lapangan"];
    $biaya = $_POST["biaya"];
    $deskripsi = $_POST["deskripsi"];
    $tanggal = $_POST["tanggal"];
    $foto = $tipeFoto[$tipeLapangan];

    $field = [
        "namaLapangan" => $nama,
        "tipeLapangan" => $tipeLapangan,
        "harga" => number_format($biaya, 0, ',', '.'),
        "deskripsi" => $deskripsi,
        "tanggalPemesanan" => $tanggal,
        "foto" => $foto,
    ];

    array_push($_SESSION["field"], $field);
    $_SESSION["success"] = "Lapangan Berhasil Ditambahkan.";
    header("Location: ./dashboard.php");
    exit();
}
?>
