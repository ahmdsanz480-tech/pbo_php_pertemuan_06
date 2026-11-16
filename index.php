<?php

declare(strict_types=1);

require_once 'BangunDatar.php';
require_once 'Lingkaran.php';
require_once 'Persegi.php';
require_once 'Segitiga.php';
require_once 'PersegiPanjang.php';
require_once 'Notifikasi.php';
require_once 'Email.php';
require_once 'WhatsApp.php';
require_once 'SMS.php';

// Fungsi polymorphism untuk bangun datar
function tampilkanBangunDatar(array $bangunDatar): void
{
    echo "=== DAFTAR BANGUN DATAR ===" . PHP_EOL;

    foreach ($bangunDatar as $bangun) {
        echo $bangun->deskripsi() . PHP_EOL;
    }
}

// Fungsi polymorphism untuk notifikasi
function kirimSemua(array $notifikasi, string $pesan): void
{
    echo PHP_EOL . "=== PENGIRIMAN NOTIFIKASI ===" . PHP_EOL;

    foreach ($notifikasi as $item) {
        echo $item->kirim($pesan) . PHP_EOL;
    }
}

// Membuat objek bangun datar
$daftarBangunDatar = [
    new Lingkaran(7),
    new Persegi(4),
    new Segitiga(3, 4, 5),
    new PersegiPanjang(8, 5)
];

// Menampilkan semua bangun datar
tampilkanBangunDatar($daftarBangunDatar);

// Membuat objek notifikasi
$daftarNotifikasi = [
    new Email(),
    new WhatsApp(),
    new SMS()
];

// Mengirim pesan melalui semua metode notifikasi
kirimSemua($daftarNotifikasi, "Selamat pagi, semoga hari ini menyenangkan!");