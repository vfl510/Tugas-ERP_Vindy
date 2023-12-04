# Penjualan Laravel

## Fitur

- Multi user ( Pengguna ).
- Karena, menggunakan konsep tim / kelompok, maka terdapat fitur keanggotaan, yang memiliki hak akses masing masing.
- Role = Pemilik, Administrator, Anggota
- Cocok untuk pemilik usaha reseller
- Untuk Menambahkan anggota ke dalam kelompok/tim/perusahaan, menggunakan token invite link, seperti invite group whatsapp.
-dan masih terdapat beberapa fitur lainya.

## Kekurangan

- masih banyak kekurangan.
- Masih dalam tahap pengembangan, dan entah kapan mau dilanjut.

## Framework

- Laravel

## Instalasi

Clone atau download repository

`$ git clone https://github.com/MyFRA/penjualan-laravel.git`

Duplikat atau salin file .env.example ke .env

Setting koneksi database di dalam file .env
Setelah itu jalankan perintah berikut.

`$ composer install` <br>
`$ php artisan key:generate` <br>
`$ php artisan migrate` <br>
`$ php artisan db:seed` <br>
`$ php artisan storage:link`

Agar fitur cek ongkir berjalan lancar, masukan key api rajaongkir, di dalam file .env
<p align="center">
<a href="https://ibb.co/LzX89PH"><img src="https://i.ibb.co/0jRcYXv/rajaongkir.png" alt="rajaongkir" border="0"></a>
</p>


## Menjalankan

`$ php artisan serve`
<br><br>
