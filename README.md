# Latihan REST API - Library API

Starter project Laravel 13 untuk siswa kelas XI RPL yang berlatih membuat dan menguji REST API menggunakan Postman. Proyek ini menyediakan daftar buku melalui endpoint API. Tugas utama adalah melengkapi endpoint tambah buku dengan validasi dan respons yang tepat.

## Kebutuhan software

- PHP 8.3 atau lebih baru
- Composer
- MySQL
- Postman

## Instalasi

```bash
git clone https://github.com/rapleeee/latihan-rest-api.git
cd latihan-rest-api
composer install
```

Salin `.env.example` menjadi `.env`:

```bash
# macOS/Linux/Git Bash
cp .env.example .env

# Windows CMD
copy .env.example .env
```

Buat application key:

```bash
php artisan key:generate
```

Buat database MySQL bernama `library_api`, lalu sesuaikan nilai `DB_*` pada `.env` bila konfigurasi MySQL lokal berbeda.

```bash
php artisan migrate
php artisan db:seed
php artisan serve
```

Server lokal tersedia pada `http://127.0.0.1:8000`.

## Mengecek route

```bash
php artisan route:list
```

## Kondisi awal

- `GET /api/books` sudah berfungsi dan mengembalikan daftar buku.
- `POST /api/books` terdaftar, tetapi sementara mengembalikan HTTP `501` karena belum dikerjakan.
- `GET /api/books/{id}` belum tersedia.

## Tugas siswa

Lengkapi method `store` pada `BookController` agar:

1. Memvalidasi input.
2. Menyimpan data valid menggunakan Eloquent.
3. Mengembalikan HTTP `201` dengan `message` dan data buku baru.
4. Mengembalikan HTTP `422` beserta informasi kesalahan untuk input tidak valid.
5. Tidak menyimpan data bila validasi gagal.

Kontrak input:

| Field | Aturan |
| --- | --- |
| `title` | wajib, teks, maksimal 150 karakter |
| `author` | wajib, teks, maksimal 100 karakter |
| `published_year` | wajib, bilangan bulat antara 1900 dan 2026 |

Tantangan tambahan setelah POST selesai: buat `GET /api/books/{id}`. Buku yang ditemukan harus mengembalikan HTTP `200` dan JSON data buku; buku yang tidak ditemukan harus mengembalikan HTTP `404` beserta informasi kesalahan.

## Pengujian dengan Postman

Gunakan header berikut:

```text
Accept: application/json
Content-Type: application/json
```

Untuk request POST JSON, pilih **Body > raw > JSON**. Lakukan pengujian berikut:

1. GET daftar buku: `GET http://127.0.0.1:8000/api/books`
2. POST data valid.
3. POST dengan `title` kosong.
4. POST dengan `author` kosong.
5. POST dengan tahun di luar aturan.
6. GET daftar buku kembali setelah POST berhasil.

## Bukti yang dikumpulkan

- Kode hasil pengembangan.
- Collection Postman.
- Screenshot pengujian.
- Penjelasan singkat perubahan dan satu alur request.
