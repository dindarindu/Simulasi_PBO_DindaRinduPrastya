<?php

require_once 'pendaftaran.php';

class PendaftaranPrestasi extends Pendaftaran
{
    protected $jenisPrestasi;
    protected $tingkatPrestasi;

    public function getDaftarPrestasi($db)
    {
        $query = "SELECT * FROM tabel_pendaftaran
                  WHERE jalur_pendaftaran = 'Prestasi'";

        return $db->query($query);
    }
}