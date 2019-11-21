# Magang DOT

Project ini dibuat guna memenuhi Test Magang di DOT.


# Instalasi

## Sebelum Proses Instalasi

pastikan PC kalian sudah terinstall `composer` dan `xampp`

## Lanjut

 - Buka Terminal dan Pindah ke Direktori yang ingin di Install App
 - Jalankan Perintah `git clone https://github.com/geofany/MagangDOT` untuk meng-Clone project dari github
 - Buka Direktori App dari Terminal
 - Jalankan `composer install` untuk menginstall kembali folder Vendor yang hilang ketika di Push di GitHub
 - Copy file `.env.example` ke `.env` karena file `.env` hilang ketika di Push di GitHub 
 - Jalankan `php artisan key:generate` untuk meng-Generate `APP_KEY` yang ada di file `.env`
 - Buka aplikasi xampp dan jalankan apachenya
 - Jalankan `php artisan serve` untuk menjalankan Projectnya
 - Buka Browser dan buka url `localhost:8000`
 - Dan project akan terbuka

## Home

Di Home Terdapat 2 Menu yaitu `Task #1` dan `Task #2`. dimana Menu Tersebut akan mengarhkan ke url untuk `Task #1` dan `Task #2`

## Task #1

Program pada Task #1 berisi Program untuk mencari Angka Terbesar ke 2 dalam sebuah barisan angka
misal barisan angka : 5, 2, 10, 13, 15
maka Program akan memunculkan angka 13 dimana angka tersebut adalah angka Terbesar ke 2 dalam barisan tersebut

## Task #2

Program pada Task #2 berisi Program untuk menampilkan Kota apa saja Yang ada dalam sebuah Provinsi tertentu
misal Provinsi Bali
terdapat Kota / Kabupaten :
 - Badung 
 - Bangli 
 - Buleleng 
 - Denpasar 
 - Gianyar 
 - Jembrana 
 - Karangasem 
 - Klungkung
 - Tabanan
