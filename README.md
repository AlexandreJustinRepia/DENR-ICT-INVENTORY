# ICT Inventory & SRF Ticketing System

A full-stack ICT inventory and service request (SRF) management system
built with:

-   **Laravel** (Backend API)
-   **React + Vite** (Frontend)
-   **MySQL** (Database)
-   **Laravel Breeze** (Authentication scaffolding)

------------------------------------------------------------------------

## 🚀 Features

### 🖥 ICT Inventory Management

-   Track all ICT equipment (desktop, laptop, printers, networking,
    etc.)
-   Store complete hardware specifications:
    -   Processor\
    -   RAM\
    -   GPU\
    -   Storage\
    -   Office productivity software\
    -   OS version\
    -   Endpoint protection\
    -   Serial number\
    -   Property number\
    -   Year acquired\
    -   Shelf life\
    -   Remarks\
-   Tracks:
    -   **Accountable Person**
    -   **Actual User**
    -   **Employment Status**
    -   **Sex**
    -   **Nature of Work**

### 🎫 Service Request Form (SRF)

-   Users submit tickets for:
    -   Troubleshooting\
    -   Repairs\
    -   Software installs\
    -   Hardware issues\
-   Admins & technicians can:
    -   Review requests\
    -   Approve/Reject\
    -   Assign technician\
    -   Update ticket status

### 🏷 Sticker Printing

-   Auto-generate equipment sticker that includes:
    -   Property code\
    -   Acquired date\
    -   Barcode / QR code\
    -   Cost\
    -   Quick-scan to view full equipment details

------------------------------------------------------------------------

## 📦 Installation Guide

### 1️⃣ Clone the Repository

``` bash
git clone https://github.com/AlexandreJustinRepia/DENR-ICT-INVENTORY
cd YOUR_REPO
```

### 2️⃣ Install Backend Dependencies

``` bash
composer install
```

### 3️⃣ Install Frontend Dependencies

``` bash
npm install
```

### 4️⃣ Setup Environment File

``` bash
cp .env.example .env
php artisan key:generate
```

Update `.env` database configuration.

### 5️⃣ Run Migrations

``` bash
php artisan migrate
```

### 6️⃣ Run Development Servers

**Laravel API**

``` bash
php artisan serve
```

**React Frontend**

``` bash
npm run dev
```

------------------------------------------------------------------------

## 🗃 Database Overview

Main tables created in this system:

  Table                 Description
  --------------------- -------------------------------------------------------
  `users`               Authenticated users (admins & employees)
  `employees`           Employee profiles, accountable persons & actual users
  `equipment_types`     Category list for equipment
  `equipments`          Main inventory table
  `software_installs`   Software installed per equipment
  `tickets`             SRF ticket system

------------------------------------------------------------------------

## 🛠 Technologies Used

-   Laravel 11\
-   React 18\
-   Vite\
-   MySQL 8\
-   Laravel Breeze\
-   TailwindCSS

------------------------------------------------------------------------

## 📄 License

This project is for internal use only unless approved for distribution.

------------------------------------------------------------------------

## 👨‍💻 Developer

**Alexandre Justin Repia**\
ICT Inventory & SRF System Developer
