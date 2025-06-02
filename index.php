<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portofolio Elysa Ridlo Wati</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header>
    <div class="logo"><strong>Portofolio</strong></div>
    <nav>
      <a href="#beranda">Beranda</a>
      <a href="#tentang">Tentang Saya</a>
      <a href="#portofolio">Portofolio</a>
      <div class="dropdown" tabindex="0">
        <button class="dropbtn">Lainnya</button>
        <div class="dropdown-content">
          <a href="https://www.instagram.com/elysaar_" target="_blank">Instagram</a>
        </div>
      </div>
    </nav>
  </header>

  <div class="container layout">
    <div class="main-content">
      <div class="card" style="text-align:center;">
        <img src="profil.jpg" class="profile-img" alt="Foto Profil">
        <h2>Halo, Saya Elysa Ridlo Wati</h2>
        <p>Mahasiswa Teknik Informatika dan Desainer Grafis</p>
      </div>

      <div class="card" id="tentang">
        <h3>Tentang Saya</h3>
        <p>Saya adalah seorang mahasiswa di Universitas Nahdlatul Ulama Sunan Giri. Saya memiliki minat besar dalam bidang seni, khususnya menggambar. 
          Dari hobi tersebut, saya mulai mengembangkan keterampilan saya menjadi desain grafis digital. Bagi saya, menggambar bukan hanya ekspresi diri, tetapi juga media untuk menyampaikan pesan melalui visual yang menarik. Saya senang terus belajar dan mengeksplorasi berbagai gaya desain untuk meningkatkan kemampuan saya.</p>
      </div>

      <div class="card" id="portofolio">
        <h3>Portofolio</h3>

<style>
        .btn { padding: 5px 10px; cursor: pointer; text-decoration: none; display: inline-block; }
        .btn-danger { background-color: #f44336; color: white; border: none; }
        .btn-danger:hover { background-color: #d32f2f; }
        .btn-primary { background-color: #4CAF50; color: white; border: none; }
        .btn-primary:hover { background-color: #45a049; }
        </style>
        
        <?php
        include 'koneksi.php';
        $result = mysqli_query($koneksi, "SELECT * FROM db_elysa");
        $no = 1;
        ?>

        <form action="tambah.php" method="POST" class="form">
          <div class="form-group">
            <label>No:</label>
            <input type="text" name="No" required>
          </div>
          <div class="form-group">
            <label>Nama Kegiatan:</label>
            <input type="text" name="NamaKegiatan" required>
          </div>
          <div class="form-group">
            <label>Waktu Kegiatan:</label>
            <textarea name="WaktuKegiatan" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        <table>
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Kegiatan</th>
              <th>Waktu Kegiatan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $row['NamaKegiatan'] ?></td>
              <td><?= $row['WaktuKegiatan'] ?></td>
              <td>
                <a href="edit.php?No=<?= $row['No'] ?>" class="btn btn-primary">Edit</a>
                <a href="hapus.php?No=<?= $row['No'] ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
              </td>
            </tr>
          <?php endwhile; ?>
          </tbody>
        </table>
      </div>

      <div class="card">
        <h3>Hubungi Saya</h3>
        <form id="contactForm" method="POST" action="mailto:elysarrr8@gmail.com" enctype="text/plain">
          <label for="name">Nama:</label>
          <input type="text" id="name" name="name" required>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>

          <label for="message">Pesan:</label>
          <textarea id="message" name="message" rows="4" required></textarea>

          <input type="submit" value="Kirim Pesan" class="btn btn-primary">
        </form>
      </div>
    </div>

    <div class="sidebar">
      <div class="card">
        <h3>Opini</h3>
        <div class="opini">Finalis kompetisi Robot Cerdas v12 Procommit ITS.</div>
        <div class="opini">Karya akhir terbaik ke-4 desain grafis SketchUp.</div>
        <div class="opini">Finalis presentasi 1 menit kompetisi nasional.</div>
        <div class="opini">Admin di Aviara Group, menunjukkan profesionalisme.</div>
        <div class="opini">Fleksibel di bidang desain dan teknologi.</div>
        <div class="opini">Potensi karir sangat menjanjikan di industri kreatif.</div>
      </div>
    </div>
  </div>
</body>
</html>

