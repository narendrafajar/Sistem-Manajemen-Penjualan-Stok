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

### 3️⃣ Copy File Environment
```bash
cp .env.example .env
```
### 4️⃣ Generate App Key
```bash
php artisan key:generate

```
### 5️⃣ Konfigurasi Database (.env)
```bash
DB_DATABASE=penjualan_db
DB_USERNAME=root
DB_PASSWORD=

```
### 6️⃣ Jalankan Migration
```bash
php artisan migrate

```
### 7️⃣ (Opsional) Jalankan Seeder
```bash
php artisan db:seed

```
### 8️⃣ Jalankan Server
```bash
php artisan serve

```

### Server berjalan di : http://localhost:8000

## Routing API
Semua API menggunakan prefix:
```bash
/api
```

### Daftar Route
```bash
Route::prefix('api')->group(function () {

    Route::apiResource('products', ProductController::class);
    Route::apiResource('suppliers', SupplierController::class);
    Route::apiResource('customers', CustomerController::class);

    Route::get('/sales', [SaleController::class, 'index']);
    Route::post('/sales', [SaleController::class, 'store']);

});
```

## 📘 Dokumentasi API

### 🔹 Supplier API
GET – Semua Supplier
```bash
GET /suppliers
```
POST – Tambah Supplier
```bash
POST /suppliers
```
Body :
```bash
{
  "name": "PT Sumber Jaya"
}
```
GET – Detail Supplier
```bash
GET /suppliers/{id}
```

PUT – Update Supplier
```bash
PUT /suppliers/{id}
```

DELETE – Hapus Supplier
```bash
DELETE /suppliers/{id}
```

### 🔹 Product API
GET – Semua Product
```bash
GET /products
```

POST – Tambah Product
```bash
POST /products
```

Body:
```bash
{
  "name": "Mouse Wireless",
  "price": 150000,
  "stock": 50,
  "supplier_id": 1
}
```
GET – Detail Product
```bash
GET /products/{id}
```
PUT – Update Product
```bash
PUT /products/{id}
```
DELETE – Hapus Product
```bash
DELETE /products/{id}
```

### 🔹 Customer API
GET – Semua Customer
```bash
GET /customers
```
POST – Tambah Customer
```bash
POST /customers
```

Body:
```bash
{
  "name": "Andi Wijaya",
  "email": "andi@mail.com",
  "phone": "08123456789"
}
```
GET – Detail Customer
```bash
GET /customers/{id}
```
PUT – Update Customer
```bash
PUT /customers/{id}
```
DELETE – Hapus Customer
```bash
DELETE /customers/{id}
```
### 🔹 Sales API (Transaksi)

GET – Semua Transaksi
```bash
GET /sales
```
POST – Tambah Transaksi
```bash
POST /sales
```

Body:
```bash
{
  "customer_id": 1,
  "items": [
    {
      "product_id": 1,
      "qty": 2,
      "price": 150000
    }
  ]
}
```

### 📌 Saat transaksi:

Data penjualan disimpan ke tabel sales

Detail barang disimpan ke tabel sale_items

Stok produk akan berkurang secara otomatis


## 🧪 Testing API (Postman)

1. Buka aplikasi Postman
2. Pilih metode HTTP (GET / POST / PUT / DELETE)
3. Masukkan URL endpoint API
4. Pilih Body → raw → JSON
5. Kirim request dan periksa response

## 📂 Struktur Folder Penting
```bash
app/
 └── Http/Controllers/Api
     ├── ProductController.php
     ├── SupplierController.php
     ├── CustomerController.php
     └── SaleController.php
```
