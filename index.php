<?php
// Hubungkan konfigurasi database dan seluruh kelas OOP
require_once __DIR__ . '/koneksi/koneksi.php';
require_once __DIR__ . '/Pendaftaran.php';
require_once __DIR__ . '/PendaftaranReguler.php';
require_once __DIR__ . '/PendaftaranPrestasi.php';
require_once __DIR__ . '/PendaftaranKedinasan.php';

// Ambil data dari database menggunakan metode query spesifik masing-masing kelas anak
$dataReguler   = PendaftaranReguler::getDaftarReguler($koneksi);
$dataPrestasi  = PendaftaranPrestasi::getDaftarPrestasi($koneksi);
$dataKedinasan = PendaftaranKedinasan::getDaftarKedinasan($koneksi);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulasi UAS PBO - Sistem Manajemen PMB</title>
    <!-- Bootstrap CSS untuk mempercantik antarmuka -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; padding-top: 30px; }
        .table-container { background: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); margin-bottom: 40px; }
        h2 { color: #2c3e50; font-weight: 600; margin-bottom: 20px; border-bottom: 2px solid #dee2e6; padding-bottom: 10px; }
    </style>
</head>
<body>

<div class="container">
    <div class="text-center mb-5">
        <h1 class="fw-bold text-primary">Sistem Manajemen Pendaftaran Mahasiswa Baru</h1>
        <p class="text-muted">Simulasi UAS Praktikum PBO - Jalur Spesifik Berbasis PHP-OOP</p>
    </div>

    <!-- 1. TABEL JALUR REGULER -->
    <div class="table-container">
        <h2 class="text-success">Daftar Calon Mahasiswa - Jalur Reguler</h2>
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Calon</th>
                    <th>Asal Sekolah</th>
                    <th>Nilai Ujian</th>
                    <th>Biaya Dasar</th>
                    <th>Informasi Spesifik Jalur</th>
                    <th>Total Biaya Akhir</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($dataReguler)): 
                    // Polimorfisme: Instansiasi objek kelas anak Reguler
                    $mhs = new PendaftaranReguler(
                        $row['id_pendaftaran'], $row['nama_calon'], $row['asal_sekolah'], 
                        $row['nilai_ujian'], $row['biaya_pendaftaran_dasar'],
                        $row['pilihan_prodi'], $row['lokasi_kampus']
                    );
                ?>
                <tr>
                    <td><?= $row['id_pendaftaran']; ?></td>
                    <td><strong><?= $row['nama_calon']; ?></strong></td>
                    <td><?= $row['asal_sekolah']; ?></td>
                    <td><span class="badge bg-secondary"><?= $row['nilai_ujian']; ?></span></td>
                    <td>Rp<?= number_format($row['biaya_pendaftaran_dasar'], 0, ',', '.'); ?></td>
                    <td><span class="text-muted"><?= $mhs->tampilkanInfoJalur(); ?></span></td>
                    <td class="fw-bold text-success">Rp<?= number_format($mhs->hitungTotalBiaya(), 0, ',', '.'); ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <!-- 2. TABEL JALUR PRESTASI -->
    <div class="table-container">
        <h2 class="text-warning text-dark">Daftar Calon Mahasiswa - Jalur Prestasi</h2>
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Calon</th>
                    <th>Asal Sekolah</th>
                    <th>Nilai Ujian</th>
                    <th>Biaya Dasar</th>
                    <th>Informasi Spesifik Jalur</th>
                    <th>Total Biaya Akhir</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($dataPrestasi)): 
                    // Polimorfisme: Instansiasi objek kelas anak Prestasi
                    $mhs = new PendaftaranPrestasi(
                        $row['id_pendaftaran'], $row['nama_calon'], $row['asal_sekolah'], 
                        $row['nilai_ujian'], $row['biaya_pendaftaran_dasar'],
                        $row['jenis_prestasi'], $row['tingkat_prestasi']
                    );
                ?>
                <tr>
                    <td><?= $row['id_pendaftaran']; ?></td>
                    <td><strong><?= $row['nama_calon']; ?></strong></td>
                    <td><?= $row['asal_sekolah']; ?></td>
                    <td><span class="badge bg-secondary"><?= $row['nilai_ujian']; ?></span></td>
                    <td>Rp<?= number_format($row['biaya_pendaftaran_dasar'], 0, ',', '.'); ?></td>
                    <td><span class="text-muted"><?= $mhs->tampilkanInfoJalur(); ?></span></td>
                    <td class="fw-bold text-success">Rp<?= number_format($mhs->hitungTotalBiaya(), 0, ',', '.'); ?> (Diskon)</td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <!-- 3. TABEL JALUR KEDINASAN -->
    <div class="table-container">
        <h2 class="text-danger">Daftar Calon Mahasiswa - Jalur Kedinasan</h2>
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Calon</th>
                    <th>Asal Sekolah</th>
                    <th>Nilai Ujian</th>
                    <th>Biaya Dasar</th>
                    <th>Informasi Spesifik Jalur</th>
                    <th>Total Biaya Akhir</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($dataKedinasan)): 
                    // Polimorfisme: Instansiasi objek kelas anak Kedinasan
                    $mhs = new PendaftaranKedinasan(
                        $row['id_pendaftaran'], $row['nama_calon'], $row['asal_sekolah'], 
                        $row['nilai_ujian'], $row['biaya_pendaftaran_dasar'],
                        $row['sk_ikatan_dinas'], $row['instansi_sponsor']
                    );
                ?>
                <tr>
                    <td><?= $row['id_pendaftaran']; ?></td>
                    <td><strong><?= $row['nama_calon']; ?></strong></td>
                    <td><?= $row['asal_sekolah']; ?></td>
                    <td><span class="badge bg-secondary"><?= $row['nilai_ujian']; ?></span></td>
                    <td>Rp<?= number_format($row['biaya_pendaftaran_dasar'], 0, ',', '.'); ?></td>
                    <td><span class="text-muted"><?= $mhs->tampilkanInfoJalur(); ?></span></td>
                    <td class="fw-bold text-danger">Rp<?= number_format($mhs->hitungTotalBiaya(), 0, ',', '.'); ?> (+25%)</td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<footer class="text-center text-muted my-5">
    <p>&copy; 2026 - Lusi Anitasari - TI 1C</p>
</footer>

</body>
</html>