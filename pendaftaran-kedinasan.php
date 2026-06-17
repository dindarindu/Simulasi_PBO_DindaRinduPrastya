<?php

require_once 'Pendaftaran.php';

class PendaftaranKedinasan extends Pendaftaran
{
    protected $skIkatanDinas;
    protected $instansiSponsor;

    public function hitungTotalBiaya()
    {
        return $this->biayaPendaftaranDasar * 1.25;
    }

    public function tampilkanInfoJalur()
    {
        return "Jalur Kedinasan";
    }

    public function getDaftarKedinasan($db)
    {
        $query = "SELECT * FROM tabel_pendaftaran
                  WHERE jalur_pendaftaran = 'Kedinasan'";

        return $db->query($query);
    }
}
?>