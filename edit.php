<?php
include 'koneksi.php';

if (!isset($_GET['No'])) {
    echo "Data tidak ditemukan.";
    exit;
}

$No = $_GET['No'];

// Ambil data dari database
$ambilData = mysqli_query($koneksi, "SELECT * FROM db_elysa WHERE No='$No'");
$data = mysqli_fetch_array($ambilData);

if (!$data) {
    echo "Data tidak ditemukan.";
    exit;
}

// Proses update jika form disubmit
if (isset($_POST['simpan'])) {
    $NoBaru = $_POST['No'];
    $NamaKegiatan = $_POST['NamaKegiatan'];
    $WaktuKegiatan = $_POST['WaktuKegiatan'];

    $update = mysqli_query($koneksi, "UPDATE db_elysa SET 
        No='$NoBaru',
        NamaKegiatan='$NamaKegiatan',
        WaktuKegiatan='$WaktuKegiatan' 
        WHERE No='$No'");

    if ($update) {
        echo "<script>alert('Data berhasil diupdate!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal mengupdate data.');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Kegiatan</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .btn { padding: 5px 10px; cursor: pointer; text-decoration: none; display: inline-block; }
        .btn-primary { background-color: #4CAF50; color: white; border: none; }
        .btn-primary:hover { background-color: #45a049; }
        .form-group { margin-bottom: 15px; }
        .form-control { width: 100%; padding: 8px; box-sizing: border-box; }
    </style>
</head>
<body>
    <h2>Edit Data Kegiatan</h2>
    <form method="POST">
        <div class="form-group">
            <label>No:</label>
            <input type="text" name="No" value="<?php echo $data['No']; ?>" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nama Kegiatan:</label>
            <input type="text" name="NamaKegiatan" value="<?php echo $data['NamaKegiatan']; ?>" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Waktu Kegiatan:</label>
            <textarea name="WaktuKegiatan" class="form-control" required><?php echo $data['WaktuKegiatan']; ?></textarea>
        </div>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>
