<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: ./login.php");
    exit;
}

if (!isset($_SESSION["field_list"])) {
    $_SESSION["field_list"] = [];
}

$detail = [
    "name" => "Atma Verde",
    "tagline" => "Padel Court",
    "page_title" => "Atma Verde Padel Court",
    "logo" => "./assets/images/padel.png"
];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php echo $detail["page_title"]; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Icon tab -->
    <link rel="icon" href="<?php echo $detail["logo"]; ?>" type="image/x-icon" />

    <!-- Bootstrap 5.3 CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />

    <!-- Poppins dari Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="./assets/css/poppins.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
    <header class="fixed-top scrolled" id="navbar">
        <nav class="container nav-top py-2">
            <a href="./" class="rounded bg-white py-2 px-3 d-flex align-items-center nav-home-btn">
                <img src="<?php echo $detail["logo"]; ?>" class="crown-logo" />
                <div>
                    <p class="mb-0 fs-5 fw-bold"><?php echo $detail["name"]; ?></p>
                    <p class="small mb-0"><?php echo $detail["tagline"]; ?></p>
                </div>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a href="./" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="./dashboard.php" class="nav-link active" aria-current="page">Admin Panel</a>
                </li>
                <li class="nav-item">
                    <a href="./processLogout.php" class="nav-link text-danger">Logout</a>
                </li>
            </ul>
        </nav>
    </header>
    <main style="padding-top: 84px;" class="container">
        <h1 class="mt-5 mb-3 border-bottom fw-bold">Tambah Lapangan</h1>
        <form action="./processAdd.php" method="POST" id="formAuth" enctype="multipart/form-data">
            
            <div class="mb-3">
                <label for="namaLapangan" class="form-label">Nama Lapangan</label>
                <input type="text" class="form-control" id="namaLapangan" name="nama_lapangan" required>
            </div>

            <div class="mb-3">
                <label for="deskripsiLapangan" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsiLapangan" name="deskripsi" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal Pemesanan</label>
                <input type="date" class="form-control" id="inputTanggal" name="tanggal" required>
            </div>

            <div class="mb-3">
                <label for="tipeLapangan" class="form-label">Tipe Lapangan</label>
                <select class="form-select" id="tipeLapangan" name="tipe_lapangan" required>
                    <option value="">Pilih Tipe Lapangan</option>
                    <option value="Standard">Standard</option>
                    <option value="Premium">Premium</option>
                    <option value="Scenic">Scenic</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="hargaLapangan" class="form-label">Harga Lapangan (Rp)</label>
                <input type="number" class="form-control" id="hargaLapangan" name="biaya" required>
            </div>

            <div>
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i> Simpan
                </button>
                <input type="hidden" name="menambah_lapangan" value="1" />
            </div>

        </form>
    </main>
    <!-- Bootstrap 5.3 JS -->
    <script src="./assets/js/bootstrap.min.js"></script>
</body>


</html>
