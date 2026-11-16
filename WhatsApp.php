<?php

declare(strict_types=1);

require_once 'Notifikasi.php';

class WhatsApp implements Notifikasi
{
    public function kirim(string $pesan): string
    {
        return "WhatsApp berhasil dikirim kepada Ahmad Ihsan: " . $pesan;
    }
}