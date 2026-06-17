<?php

require_once 'pendaftaran.php';

class PendaftaranKedinasan extends Pendaftaran
{
    protected $skIkatanDinas;
    protected $instansiSponsor;

    public function getDaftarKedinasan($db)
    {
        $query = "SELECT * FROM tabel_pendaftaran
                  WHERE jalur_pendaftaran = 'Kedinasan'";

        return $db->query($query);
    }
}