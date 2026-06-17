<?php

require_once 'koneksi.php';
require_once 'pendaftaran-reguler.php';
require_once 'pendaftaran-prestasi.php';
require_once 'pendaftaran-kedinasan.php';

$reguler = new PendaftaranReguler(null, null, null, null, 0, null, null);
$prestasi = new PendaftaranPrestasi(null, null, null, null, 0, null, null);
$kedinasan = new PendaftaranKedinasan(null, null, null, null, 0, null, null);

$dataReguler = $reguler->getDaftarReguler($koneksi);
$dataPrestasi = $prestasi->getDaftarPrestasi($koneksi);
$dataKedinasan = $kedinasan->getDaftarKedinasan($koneksi);

?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sistem Pendaftaran Mahasiswa Baru</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body{
    background:#f4f6f9;
    padding:40px;
}

.container{
    max-width:1200px;
    margin:auto;
}

.header{
    background:#1e293b;
    color:white;
    padding:30px;
    border-radius:15px;
    margin-bottom:30px;
    box-shadow:0 4px 15px rgba(0,0,0,0.1);
    text-align:center;
}

.header h1{
    font-size:32px;
    font-weight:600;
    letter-spacing:1px;
}

.card{
    background:white;
    padding:25px;
    margin-bottom:25px;
    border-radius:15px;
    box-shadow:0 4px 12px rgba(0,0,0,0.08);
}

.card h2{
    color:#1e293b;
    margin-bottom:15px;
    border-left:5px solid #334155;
    padding-left:10px;
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#334155;
    color:white;
    padding:12px;
    text-align:left;
}

td{
    padding:12px;
    border-bottom:1px solid #e2e8f0;
}

tr:nth-child(even){
    background:#f8fafc;
}

tr:hover{
    background:#eef2ff;
}

.jalur{
    font-weight:bold;
    color:#1e293b;
}

.biaya{
    font-weight:bold;
    color:#15803d;
}

</style>

</head>
<body>

<div class="container">

    <div class="header">
        <h1>Sistem Pendaftaran Mahasiswa Baru</h1>
    </div>

    <!-- JALUR REGULER -->
    <div class="card">
        <h2>Jalur Reguler</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>Nama Calon</th>
                <th>Asal Sekolah</th>
                <th>Pilihan Prodi</th>
                <th>Lokasi Kampus</th>
                <th>Info Jalur</th>
                <th>Total Biaya</th>
            </tr>

            <?php while($row = $dataReguler->fetch(PDO::FETCH_ASSOC)) : ?>

            <?php
            $obj = new PendaftaranReguler(
                $row['id_pendaftaran'],
                $row['nama_calon'],
                $row['asal_sekolah'],
                $row['nilai_ujian'],
                $row['biaya_pendaftaran_dasar'],
                $row['pilihan_prodi'],
                $row['lokasi_kampus']
            );
            ?>

            <tr>
                <td><?= $row['id_pendaftaran']; ?></td>
                <td><?= $row['nama_calon']; ?></td>
                <td><?= $row['asal_sekolah']; ?></td>
                <td><?= $row['pilihan_prodi']; ?></td>
                <td><?= $row['lokasi_kampus']; ?></td>
                <td class="jalur"><?= $obj->tampilkanInfoJalur(); ?></td>
                <td class="biaya">
                    Rp <?= number_format($obj->hitungTotalBiaya(),0,',','.'); ?>
                </td>
            </tr>

            <?php endwhile; ?>
        </table>
    </div>

    <!-- JALUR PRESTASI -->
    <div class="card">
        <h2>Jalur Prestasi</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>Nama Calon</th>
                <th>Asal Sekolah</th>
                <th>Jenis Prestasi</th>
                <th>Tingkat Prestasi</th>
                <th>Info Jalur</th>
                <th>Total Biaya</th>
            </tr>

            <?php while($row = $dataPrestasi->fetch(PDO::FETCH_ASSOC)) : ?>

            <?php
            $obj = new PendaftaranPrestasi(
                $row['id_pendaftaran'],
                $row['nama_calon'],
                $row['asal_sekolah'],
                $row['nilai_ujian'],
                $row['biaya_pendaftaran_dasar'],
                $row['jenis_prestasi'],
                $row['tingkat_prestasi']
            );
            ?>

            <tr>
                <td><?= $row['id_pendaftaran']; ?></td>
                <td><?= $row['nama_calon']; ?></td>
                <td><?= $row['asal_sekolah']; ?></td>
                <td><?= $row['jenis_prestasi']; ?></td>
                <td><?= $row['tingkat_prestasi']; ?></td>
                <td class="jalur"><?= $obj->tampilkanInfoJalur(); ?></td>
                <td class="biaya">
                    Rp <?= number_format($obj->hitungTotalBiaya(),0,',','.'); ?>
                </td>
            </tr>

            <?php endwhile; ?>
        </table>
    </div>

    <!-- JALUR KEDINASAN -->
    <div class="card">
        <h2>Jalur Kedinasan</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>Nama Calon</th>
                <th>Asal Sekolah</th>
                <th>SK Ikatan Dinas</th>
                <th>Instansi Sponsor</th>
                <th>Info Jalur</th>
                <th>Total Biaya</th>
            </tr>

            <?php while($row = $dataKedinasan->fetch(PDO::FETCH_ASSOC)) : ?>

            <?php
            $obj = new PendaftaranKedinasan(
                $row['id_pendaftaran'],
                $row['nama_calon'],
                $row['asal_sekolah'],
                $row['nilai_ujian'],
                $row['biaya_pendaftaran_dasar'],
                $row['sk_ikatan_dinas'],
                $row['instansi_sponsor']
            );
            ?>

            <tr>
                <td><?= $row['id_pendaftaran']; ?></td>
                <td><?= $row['nama_calon']; ?></td>
                <td><?= $row['asal_sekolah']; ?></td>
                <td><?= $row['sk_ikatan_dinas']; ?></td>
                <td><?= $row['instansi_sponsor']; ?></td>
                <td class="jalur"><?= $obj->tampilkanInfoJalur(); ?></td>
                <td class="biaya">
                    Rp <?= number_format($obj->hitungTotalBiaya(),0,',','.'); ?>
                </td>
            </tr>

            <?php endwhile; ?>
        </table>
    </div>

</div>

</body>
</html>