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
- postman Result sample :
  ```bash
  [
      {
          "id": 1,
          "name": "expedita fuga enim",
          "stock": 8,
          "price": "1863776.95",
          "supplier_id": 5,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 2,
          "name": "esse nihil est",
          "stock": 49,
          "price": "803118.58",
          "supplier_id": 2,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 3,
          "name": "et velit laudantium",
          "stock": 120,
          "price": "1474887.36",
          "supplier_id": 4,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 4,
          "name": "ut maxime at",
          "stock": 38,
          "price": "1880446.72",
          "supplier_id": 2,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 5,
          "name": "quae iusto earum",
          "stock": 92,
          "price": "1054816.99",
          "supplier_id": 2,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 6,
          "name": "non aut vitae",
          "stock": 160,
          "price": "1890809.10",
          "supplier_id": 2,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 7,
          "name": "aliquam voluptatum non",
          "stock": 36,
          "price": "443518.52",
          "supplier_id": 5,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 8,
          "name": "nihil est vel",
          "stock": 126,
          "price": "751095.08",
          "supplier_id": 3,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 9,
          "name": "reprehenderit enim dolores",
          "stock": 2,
          "price": "231133.67",
          "supplier_id": 4,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 10,
          "name": "quo ea sed",
          "stock": 150,
          "price": "1538082.18",
          "supplier_id": 5,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 11,
          "name": "magni deserunt officia",
          "stock": 20,
          "price": "737635.08",
          "supplier_id": 3,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 12,
          "name": "accusamus distinctio adipisci",
          "stock": 125,
          "price": "638906.76",
          "supplier_id": 4,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 13,
          "name": "tempore qui molestiae",
          "stock": 58,
          "price": "486187.82",
          "supplier_id": 2,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 14,
          "name": "saepe non quas",
          "stock": 138,
          "price": "269662.55",
          "supplier_id": 1,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 15,
          "name": "reprehenderit repellendus incidunt",
          "stock": 199,
          "price": "1931042.90",
          "supplier_id": 1,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 16,
          "name": "quisquam est ad",
          "stock": 15,
          "price": "895350.57",
          "supplier_id": 2,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 17,
          "name": "dolores voluptates libero",
          "stock": 62,
          "price": "306601.19",
          "supplier_id": 3,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 18,
          "name": "dicta dicta eos",
          "stock": 41,
          "price": "1918871.64",
          "supplier_id": 3,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 19,
          "name": "nisi quasi ipsum",
          "stock": 57,
          "price": "799419.71",
          "supplier_id": 2,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 20,
          "name": "reiciendis veniam eligendi",
          "stock": 149,
          "price": "306031.59",
          "supplier_id": 1,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 21,
          "name": "doloremque qui explicabo",
          "stock": 186,
          "price": "1834520.49",
          "supplier_id": 3,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 22,
          "name": "debitis nisi tempore",
          "stock": 180,
          "price": "1357927.36",
          "supplier_id": 3,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 23,
          "name": "et est rerum",
          "stock": 7,
          "price": "272931.51",
          "supplier_id": 2,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 24,
          "name": "maxime cum sequi",
          "stock": 70,
          "price": "302713.66",
          "supplier_id": 4,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 25,
          "name": "atque atque minus",
          "stock": 69,
          "price": "600140.10",
          "supplier_id": 3,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 26,
          "name": "rerum molestias corporis",
          "stock": 190,
          "price": "1647475.93",
          "supplier_id": 2,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 27,
          "name": "eos totam facere",
          "stock": 64,
          "price": "475026.14",
          "supplier_id": 1,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 28,
          "name": "est quo omnis",
          "stock": 137,
          "price": "1725629.69",
          "supplier_id": 2,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 29,
          "name": "libero architecto tempore",
          "stock": 136,
          "price": "632846.88",
          "supplier_id": 3,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 30,
          "name": "ipsam aliquid iste",
          "stock": 7,
          "price": "1048244.13",
          "supplier_id": 4,
          "created_at": "2025-12-26T16:43:58.000000Z",
          "updated_at": "2025-12-26T16:43:58.000000Z"
      },
      {
          "id": 31,
          "name": "earum voluptatibus ducimus",
          "stock": 160,
          "price": "181581.62",
          "supplier_id": 10,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 32,
          "name": "explicabo est odit",
          "stock": 200,
          "price": "958514.72",
          "supplier_id": 9,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 33,
          "name": "et enim voluptatum",
          "stock": 188,
          "price": "302813.34",
          "supplier_id": 4,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 34,
          "name": "blanditiis saepe ut",
          "stock": 30,
          "price": "744468.00",
          "supplier_id": 4,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 35,
          "name": "aut et nemo",
          "stock": 66,
          "price": "35430.06",
          "supplier_id": 3,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 36,
          "name": "asperiores molestiae velit",
          "stock": 143,
          "price": "512313.71",
          "supplier_id": 7,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 37,
          "name": "quas modi eaque",
          "stock": 132,
          "price": "1951589.03",
          "supplier_id": 9,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 38,
          "name": "sunt est quis",
          "stock": 103,
          "price": "186914.74",
          "supplier_id": 3,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 39,
          "name": "fuga velit tenetur",
          "stock": 153,
          "price": "1275042.08",
          "supplier_id": 3,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 40,
          "name": "vero recusandae hic",
          "stock": 190,
          "price": "1181466.36",
          "supplier_id": 10,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 41,
          "name": "tenetur et sed",
          "stock": 24,
          "price": "930790.21",
          "supplier_id": 7,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 42,
          "name": "nostrum voluptas nulla",
          "stock": 10,
          "price": "768840.24",
          "supplier_id": 6,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 43,
          "name": "quasi dolor quis",
          "stock": 67,
          "price": "682777.66",
          "supplier_id": 8,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 44,
          "name": "eum quibusdam veniam",
          "stock": 82,
          "price": "1699228.22",
          "supplier_id": 2,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 45,
          "name": "adipisci illo nostrum",
          "stock": 32,
          "price": "733792.34",
          "supplier_id": 5,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 46,
          "name": "expedita ad omnis",
          "stock": 96,
          "price": "592161.71",
          "supplier_id": 2,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 47,
          "name": "illum voluptas eos",
          "stock": 27,
          "price": "292637.02",
          "supplier_id": 2,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 48,
          "name": "placeat totam eum",
          "stock": 86,
          "price": "1944884.61",
          "supplier_id": 9,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 49,
          "name": "et beatae velit",
          "stock": 174,
          "price": "1082339.33",
          "supplier_id": 2,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 50,
          "name": "perferendis est nesciunt",
          "stock": 83,
          "price": "406359.42",
          "supplier_id": 1,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 51,
          "name": "dolores nisi voluptatem",
          "stock": 74,
          "price": "1512413.13",
          "supplier_id": 9,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 52,
          "name": "commodi vero laborum",
          "stock": 198,
          "price": "1937141.97",
          "supplier_id": 7,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 53,
          "name": "non nam voluptas",
          "stock": 37,
          "price": "1072364.60",
          "supplier_id": 5,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 54,
          "name": "repellat est aspernatur",
          "stock": 105,
          "price": "1370875.65",
          "supplier_id": 9,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 55,
          "name": "modi cum minima",
          "stock": 98,
          "price": "1286847.07",
          "supplier_id": 10,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 56,
          "name": "et nostrum dolorum",
          "stock": 158,
          "price": "534492.18",
          "supplier_id": 9,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 57,
          "name": "optio nesciunt architecto",
          "stock": 153,
          "price": "920505.67",
          "supplier_id": 8,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 58,
          "name": "et facere vitae",
          "stock": 178,
          "price": "1638379.59",
          "supplier_id": 6,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 59,
          "name": "officiis blanditiis delectus",
          "stock": 52,
          "price": "1482803.32",
          "supplier_id": 5,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 60,
          "name": "sapiente cumque cupiditate",
          "stock": 76,
          "price": "530121.04",
          "supplier_id": 7,
          "created_at": "2025-12-26T16:52:03.000000Z",
          "updated_at": "2025-12-26T16:52:03.000000Z"
      },
      {
          "id": 61,
          "name": "Keyboard Mechanical",
          "stock": 25,
          "price": "750000.00",
          "supplier_id": 1,
          "created_at": "2025-12-26T17:10:53.000000Z",
          "updated_at": "2025-12-26T17:10:53.000000Z"
      }
  ]
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
