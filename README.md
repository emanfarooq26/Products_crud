# Laravel Products CRUD Project

## 📌 Project Overview

This is a Laravel CRUD (Create, Read, Update, Delete) application for managing products. The project allows users to add, view, edit, and delete products using a clean and simple interface.

This project is built using:

* Laravel
* MySQL Database
* Blade Templates
* Bootstrap (Optional UI Styling)

---

## 🚀 Features

* Add New Product
* View All Products
* Update Product Information
* Delete Products
* Form Validation
* Flash Messages (Success / Error)
* Clean UI

---

## 📂 Project Structure

```
app/
 ├── Http/
 │   └── Controllers/
 │        └── ProductController.php

resources/
 └── views/
     └── products/
         ├── index.blade.php
         ├── create.blade.php
         ├── edit.blade.php
         └── show.blade.php

routes/
 └── web.php

app/
 └── Models/
     └── Product.php
```

---


---

## 🗄️ Database Setup

Update `.env` file with your database credentials:

```
DB_DATABASE=web_tech
DB_USERNAME=root
DB_PASSWORD=
```

---

## 🧱 Migration

Run migration to create products table

```
php artisan migrate
```

---

## 🧾 Products Table Schema

| Field       | Type      |
| ----------- | --------- |
| id          | bigint    |
| name        | string    |
| price       | decimal   |
| description | text      |
| created_at  | timestamp |
| updated_at  | timestamp |

---

## ▶️ Run Application

```
php artisan serve
```

Open in browser:

```
http://127.0.0.1:8000/products
```

---

## 🛣️ Routes

```
Route::resource('products', ProductController::class);
```

This will generate:

| Method | Route               | Description         |
| ------ | ------------------- | ------------------- |
| GET    | /products           | Show All Products   |
| GET    | /products/create    | Create Product Form |
| POST   | /products           | Store Product       |
| GET    | /products/{id}      | Show Product        |
| GET    | /products/{id}/edit | Edit Product        |
| PUT    | /products/{id}      | Update Product      |
| DELETE | /products/{id}      | Delete Product      |

---

## 🎯 Controller Commands

Create Model + Migration

```
php artisan make:model Product -mcr

```
## Demo Video



---

## 👨‍💻 Author

Eman Farooq (https://github.com/emanfarooq26)

---

## 📄 License

This project is open-source and available under the MIT License.

---

## ⭐ Contribution

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

