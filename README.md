# 📦 Sistem Manajemen Penjualan & Stok  
### REST API – Laravel 12

---

## 📌 Deskripsi Proyek

Sistem Manajemen Penjualan dan Stok adalah aplikasi berbasis **REST API** yang digunakan untuk mengelola data **Supplier, Product, Customer, dan Transaksi Penjualan (Sales)**.

Aplikasi ini dibangun menggunakan **Laravel 12** dan menerapkan konsep **CRUD API**, relasi antar tabel, serta pengujian API menggunakan **Postman**.

Sistem ini merepresentasikan **permasalahan nyata** yang sering ditemui pada usaha dagang atau distribusi barang.

---

## 🧱 Struktur Basis Data

Sistem ini menggunakan **minimal 5 tabel**, yaitu:

- `suppliers`
- `products`
- `customers`
- `sales`
- `sale_items`

### Relasi Tabel
- Supplier **hasMany** Product  
- Customer **hasMany** Sale  
- Sale **hasMany** SaleItem  
- Product **hasMany** SaleItem  

---

## ⚙️ Teknologi yang Digunakan

- PHP >= 8.2  
- Laravel 12  
- MySQL / MariaDB  
- Postman (API Testing)  

---

## 🚀 Instalasi & Setup Project

### 1️⃣ Clone Repository
```bash
git clone https://github.com/narendrafajar/Sistem-Manajemen-Penjualan-Stok.git
cd Sistem-Manajemen-Penjualan-Stok

```
### 2️⃣ Install Dependency
```bash
composer install
```

