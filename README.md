# Task Management System

Aplikasi web sederhana untuk membantu karyawan mengelola tugas harian mereka. Dibuat sebagai proyek magang menggunakan Laravel 13.

## 📋 Deskripsi

Task Management System adalah aplikasi berbasis web yang memungkinkan karyawan untuk mencatat, mengelola, dan memantau progres tugas harian mereka secara mandiri. Setiap pengguna hanya dapat melihat dan mengelola task miliknya sendiri.

## 🛠️ Teknologi yang Digunakan

| Teknologi | Fungsi |
|---|---|
| Laravel 13 | Framework backend (PHP) |
| Blade Template | Templating engine untuk tampilan |
| Bootstrap 5 | Framework CSS untuk tampilan responsif |
| MySQL | Database |
| Laravel Breeze | Autentikasi (Login, Register, Logout) |
| Eloquent ORM | Interaksi dengan database |

## ✨ Fitur Utama

- **Autentikasi** — Login, Register, dan Logout
- **Dashboard** — Menampilkan ringkasan statistik task:
  - Total Task
  - Jumlah task dengan status To Do
  - Jumlah task dengan status In Progress
  - Jumlah task dengan status Done
  - Daftar task yang mendekati deadline (7 hari ke depan)
- **CRUD Task** — Tambah, lihat, edit, dan hapus task
- **Pencarian Task** — Berdasarkan judul dan deskripsi
- **Filter Task** — Berdasarkan status (To Do / In Progress / Done)
- **Pagination** — Daftar task ditampilkan 10 per halaman
- **Flash Message** — Notifikasi sukses setelah tambah, edit, dan hapus data
- **Keamanan Data** — Setiap user hanya bisa mengakses task miliknya sendiri

## 🗃️ Struktur Database

**Tabel `users`** (bawaan Laravel Breeze)
- id, name, email, password, dll.

**Tabel `tasks`**

| Kolom | Tipe | Keterangan |
|---|---|---|
| id | bigint | Primary key |
| user_id | bigint | Foreign key ke `users.id` |
| title | string | Judul task |
| description | text | Deskripsi task (nullable) |
| priority | enum | `low`, `medium`, `high` |
| status | enum | `to_do`, `in_progress`, `done` |
| deadline | date | Batas waktu (nullable) |
| created_at, updated_at | timestamp | Otomatis |

**Relasi:** Satu `User` dapat memiliki banyak `Task` (One to Many).

## 🚀 Cara Instalasi & Menjalankan Proyek

1. **Clone repository**
   ```bash
   git clone <url-repository-ini>
   cd task-management-system
   ```

2. **Install dependency PHP**
   ```bash
   composer install
   ```

3. **Install dependency JavaScript**
   ```bash
   npm install
   ```

4. **Salin file environment**
   ```bash
   cp .env.example .env
   ```

5. **Generate application key**
   ```bash
   php artisan key:generate
   ```

6. **Konfigurasi database**

   Buka file `.env`, sesuaikan bagian berikut dengan konfigurasi MySQL di komputer kamu:
   ```env
   DB_DATABASE=task_management_system
   DB_USERNAME=root
   DB_PASSWORD=
   ```

   Buat database kosong secara manual:
   ```sql
   CREATE DATABASE task_management_system;
   ```

7. **Jalankan migration**
   ```bash
   php artisan migrate
   ```

8. **(Opsional) Jalankan seeder untuk data dummy**
   ```bash
   php artisan db:seed
   ```

9. **Compile asset frontend**
   ```bash
   npm run build
   ```

10. **Jalankan server lokal**
    ```bash
    php artisan serve
    ```

11. Buka browser ke `http://127.0.0.1:8000`

## 📂 Struktur Folder Utama

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── DashboardController.php
│   │   └── TaskController.php
│   └── Requests/
│       ├── StoreTaskRequest.php
│       └── UpdateTaskRequest.php
└── Models/
    ├── User.php
    └── Task.php

database/
├── migrations/
│   └── create_tasks_table.php
└── seeders/
    └── TaskSeeder.php

resources/views/
├── layouts/
│   ├── app.blade.php
│   ├── guest.blade.php
│   └── navigation.blade.php
├── components/
│   ├── priority-badge.blade.php
│   └── status-badge.blade.php
├── dashboard.blade.php
└── tasks/
    ├── index.blade.php
    ├── create.blade.php
    ├── edit.blade.php
    ├── show.blade.php
    └── _form.blade.php
```

## 🔐 Akun Testing

| Email | Password |
|---|---|
| mozi@gmail.com | password |

## 👤 Dibuat Oleh

Alkafi — Proyek Magang, 2026
