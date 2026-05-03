# 🕌 Sistem Pemasukan & Pengeluaran Kas Masjid
### *Laravel CRUD Learning Project*

<div align="center">

<!-- Simple Islamic Header -->
<svg width="600" height="150" viewBox="0 0 600 150" xmlns="http://www.w3.org/2000/svg">
  <defs>
    <linearGradient id="islamicGradient" x1="0%" y1="0%" x2="100%" y2="0%">
      <stop offset="0%" style="stop-color:#28a745;stop-opacity:1" />
      <stop offset="100%" style="stop-color:#20c997;stop-opacity:1" />
    </linearGradient>
  </defs>
  
  <!-- Background -->
  <rect width="600" height="150" fill="url(#islamicGradient)" rx="10"/>
  
  <!-- Simple mosque outline -->
  <g transform="translate(270, 30)" fill="#ffffff" opacity="0.8">
    <!-- Dome -->
    <ellipse cx="30" cy="40" rx="25" ry="15"/>
    <!-- Minaret -->
    <rect x="10" y="25" width="4" height="30"/>
    <rect x="46" y="25" width="4" height="30"/>
    <!-- Crescent -->
    <path d="M 25 25 Q 30 20 35 25 Q 30 30 25 25" fill="#FFD700"/>
  </g>
  
  <!-- Title -->
  <text x="300" y="90" text-anchor="middle" fill="#ffffff" font-family="Arial, sans-serif" font-size="20" font-weight="bold">
    SISTEM KAS MASJID
  </text>
  <text x="300" y="110" text-anchor="middle" fill="#ffffff" font-family="Arial, sans-serif" font-size="12" opacity="0.9">
    Laravel CRUD Learning Project
  </text>
</svg>

<br>

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)

![Status](https://img.shields.io/badge/Status-Learning%20Project-yellow?style=for-the-badge)
![Version](https://img.shields.io/badge/Version-Basic%20CRUD-blue?style=for-the-badge)

</div>

---

## 📖 About This Project

**Sistem Pemasukan & Pengeluaran Kas Masjid** adalah project pembelajaran Laravel yang dibuat untuk memahami konsep dasar **CRUD (Create, Read, Update, Delete)**. Project ini merupakan tugas dari pembelajaran Laravel dengan tema pengelolaan keuangan masjid.

> ⚠️ **Disclaimer**: Ini adalah project pembelajaran tingkat dasar. Masih dalam tahap pengembangan dan mungkin memiliki bugs atau fitur yang belum lengkap.

---

## ✅ Current Features (Yang Udah Ada)

<div align="center">

| Feature | Status | Description |
|:--------|:------:|:------------|
| 📝 **Input Pemasukan** | ✅ | Form untuk mencatat dana masuk |
| 📝 **Input Pengeluaran** | ✅ | Form untuk mencatat dana keluar |
| 👀 **Lihat Data** | ✅ | Menampilkan list transaksi |
| ✏️ **Edit Data** | ✅ | Mengubah data transaksi |
| 🗑️ **Hapus Data** | ✅ | Menghapus data transaksi |
| 👤 **Login System** | ✅ | Basic authentication |

</div>

### 🎯 Basic CRUD Operations:
- **Create**: Tambah data pemasukan/pengeluaran baru
- **Read**: Tampilkan list semua transaksi  
- **Update**: Edit data transaksi yang sudah ada
- **Delete**: Hapus data transaksi

---

## 🛠️ Tech Stack

<div align="center">

**Backend**: Laravel 9.x + PHP 8.1+  
**Database**: MySQL  
**Frontend**: Bootstrap 5 + Blade Templates  
**Authentication**: Laravel built-in Auth

</div>

---

## 🚀 Installation

### Prerequisites
```bash
PHP >= 8.1
Composer
MySQL
```

### Setup Steps
```bash
# 1. Clone repository
git clone [repository-url]
cd mosque-cashflow

# 2. Install dependencies
composer install

# 3. Setup environment
cp .env.example .env
php artisan key:generate

# 4. Configure database di .env file
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kas_masjid
DB_USERNAME=your_username
DB_PASSWORD=your_password

# 5. Run migrations
php artisan migrate

# 6. Start server
php artisan serve
```

**Akses aplikasi di: http://localhost:8000**

---

## 📊 Database Structure

### Tables:
- **users** - Data user untuk login
- **transactions** - Data pemasukan dan pengeluaran
  - id, type (pemasukan/pengeluaran), amount, description, date, created_at, updated_at

---

## 📸 What You'll See

### 🏠 Dashboard
- List semua transaksi pemasukan dan pengeluaran
- Button untuk tambah, edit, hapus data

### 📝 Form Input
- Form sederhana untuk input data
- Validasi basic (required fields)

### 👤 Login Page  
- Simple login form dengan Laravel Auth

---

## ⚠️ Current Limitations

**Yang Belum Ada / Masih Kurang:**
- ❌ Advanced reporting atau grafik
- ❌ Export ke PDF/Excel  
- ❌ Role management yang kompleks
- ❌ Responsive design yang optimal
- ❌ Advanced validation
- ❌ Real-time notifications
- ❌ API endpoints
- ❌ Advanced search/filter

**Known Issues:**
-  Mungkin ada bugs di validasi form
-  UI belum fully responsive
-  Error handling masih basic

---

## 🔮 Future Improvements (Rencana)

**Phase 1 - Bug Fixes:**
- [ ] Fix existing bugs
- [ ] Improve form validation
- [ ] Better error handling

**Phase 2 - UI/UX:**
- [ ] Responsive design
- [ ] Better visual design
- [ ] User experience improvements

**Phase 3 - Features:**
- [ ] Reporting dengan grafik
- [ ] Export functionality
- [ ] Search dan filter
- [ ] Role-based access

> 💡 **Note**: Improvements akan dilakukan bertahap sesuai waktu dan kebutuhan pembelajaran

---

## 🎓 Learning Objectives

Project ini dibuat untuk mempelajari:
- ✅ Laravel MVC pattern
- ✅ Eloquent ORM basics  
- ✅ Blade templating
- ✅ Form handling dan validation
- ✅ Database migrations
- ✅ Basic authentication
- ✅ CRUD operations

---

## 🤝 Contributing

Karena ini learning project, kontribusi sangat welcome terutama untuk:
- 🐛 Bug fixes
- 📝 Code improvements
- 🎨 UI/UX enhancements
- 📚 Documentation

**How to contribute:**
1. Fork repository
2. Create feature branch
3. Make improvements
4. Submit pull request

---

## 📞 Contact

**Developer**: RubySy  
**Email**: rbysysf@gmail.com  

---

## 📝 License

Open source - feel free to use for learning purposes

---

<div align="center">

** Learning Laravel Step by Step **


</div>
