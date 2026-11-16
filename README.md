# PBO Pertemuan 06
## Abstraction dan Polymorphism

**Nama:** Ahmad Ihsan

### 1. Abstract Class

Abstract class `BangunDatar` digunakan sebagai class induk untuk beberapa bangun datar, yaitu Lingkaran, Persegi, Segitiga, dan Persegi Panjang.

Abstract class dipilih karena semua bangun datar memiliki perilaku yang sama, seperti menghitung luas, keliling, dan menampilkan nama. Setiap class turunan kemudian memiliki rumus perhitungan masing-masing.

### 2. Interface

Interface `Notifikasi` digunakan sebagai aturan bagi class Email, WhatsApp, dan SMS. Ketiga class tersebut harus memiliki method `kirim()`.

Interface dipilih karena ketiga jenis notifikasi memiliki tujuan yang sama, yaitu mengirim pesan, tetapi cara pengirimannya berbeda.

### 3. Polymorphism

Polymorphism diterapkan ketika beberapa objek bangun datar menggunakan method `deskripsi()` yang sama, tetapi menghasilkan informasi sesuai jenis bangun datarnya.

Polymorphism juga diterapkan pada fungsi `kirimSemua()`, sehingga satu fungsi dapat menjalankan method `kirim()` dari objek Email, WhatsApp, dan SMS.

### Kesimpulan

Dari tugas ini, saya memahami bahwa abstract class digunakan sebagai dasar untuk class yang memiliki hubungan, sedangkan interface digunakan untuk menetapkan aturan method yang harus dimiliki suatu class. Polymorphism memungkinkan beberapa objek menjalankan method yang sama dengan hasil atau perilaku yang berbeda.