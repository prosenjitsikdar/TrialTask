# Laravel Category & Product CRUD

## 📌 Project Overview
This is a simple Laravel application demonstrating **CRUD operations** for **Categories** and **Products**.  
The purpose of this project is to showcase Laravel fundamentals, clean project structure, database relationships, and basic validation.

Authentication is not required.

---

## 🛠 Tech Stack
- Laravel (Latest)
- PHP 8+
- MySQL
- Blade Templates
- Eloquent ORM

---

## 📂 Features
- Category CRUD (Create, Read, Update, Delete)
- Product CRUD (Create, Read, Update, Delete)
- Category → Product relationship
- Server-side validation
- Clean folder & naming structure
- Default admin user created via migration

---

## 🗄 Database Structure

### Categories Table
| Field | Type |
|------|-----|
| id | bigint |
| name | string |
| slug | string (unique) |
| status | boolean |
| created_at | timestamp |
| updated_at | timestamp |

### Products Table
| Field | Type |
|------|-----|
| id | bigint |
| category_id | foreign key |
| name | string |
| slug | string (unique) |
| price | decimal |
| description | text |
| image | string |
| status | boolean |
| created_at | timestamp |
| updated_at | timestamp |

---

## 🔗 Relationships
- **Category has many Products**
- **Product belongs to Category**

---

## 👤 Default Admin User
A default admin user is automatically created during migration.

admin@gmail.com <br> password: 12345678

Copy the provided backup environment file and rename it to `.env`:

```bash
cp .env.example .env
