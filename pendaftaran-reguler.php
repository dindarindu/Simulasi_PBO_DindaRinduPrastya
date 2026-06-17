<?php

require_once 'pendaftaran.php';

class PendaftaranReguler extends Pendaftaran
{
    protected $pilihanProdi;
    protected $lokasiKampus;

    public function getDaftarReguler($db)
    {
        $query = "SELECT * FROM tabel_pendaftaran
                  WHERE jalur_pendaftaran = 'Reguler'";

        return $db->query($query);
    }
}