# Assesment2FrameWork

A Laravel-based academic management system for handling Mahasiswa (students) and Dosen (lecturers) data. This project is designed to demonstrate CRUD operations, form validation, and clean UI rendering using Blade templates.

---

## Group Member
| No | Nama Lengkap | NIM |
|----|----------------|------|
| 1 | Fadillah Dani Prawoto | 2310130004 |
| 2 | Fathi Fathan Fathurrhaman N | 2310130005 |
| 3 | Muhamad Hafidz Hazhari | 2310130014 |
| 4 | Angger Hidayat | 2310130002 |

---
## Features

- CRUD for Mahasiswa and Dosen
- Migration
- Controller
- Model
- Eloquent ORM
- Processing & Validation Form
- Form validation with custom rules
- RESTful routing and controller structure
- Dynamic views using Blade
- Flash messaging for feedback
- Route model binding for clean URL handling

## Tech Stack

- **Framework**: Laravel 10+
- **Database**: MySQL
- **Frontend**: Blade
- **Tooling**: Composer, Artisan, Laragon (local dev)

## 🧩 Modules

### Mahasiswa
- Fields: `nim`, `nama`, `jenis_kelamin`, `jurusan`, `alamat`
- Routes: `/mahasiswas`, `/mahasiswas/{id}`, etc.
- Views: `index`, `create`, `edit`, `show`, `delete`

### Dosen
- Fields: `nip`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `email`, `telepon`, `jurusan`, `jabatan`, `pendidikan`, `alamat`, `status`
- Routes: `/dosens`, `/dosens/{id}`, etc.
- Views: `index`, `create`, `edit`, `show`, `delete`

## 🛠️ Installation

```bash
git clone https://github.com/fiz77/Assesment2FrameWork.git
cd Assesment2FrameWork
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
