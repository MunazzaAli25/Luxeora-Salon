# Luxeora Beauty Salon Management System

A complete Laravel 12 application featuring a public-facing website for client bookings and a full Admin dashboard for managing operations, staff, finances, and appointments.

## Requirements
- PHP 8.2 or higher
- Composer
- MySQL Database

## 🚀 Setup Instructions

Follow these steps to get the project running on your local machine:

### 1. Clone the repository
```bash
git clone <your-repository-url>
cd Salon_Management_Final
```

### 2. Install Dependencies
Run Composer to install the required PHP packages:
```bash
composer install
```

### 3. Configure the Environment
Copy the example environment file:
```bash
cp .env.example .env
```

Open `.env` in your text editor and update your database credentials to match your local MySQL setup:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=salon_management  # Or whatever you name your database
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 4. Create the Database
Open MySQL (e.g., via phpMyAdmin, TablePlus, or terminal) and create the database you specified in `.env`:
```sql
CREATE DATABASE salon_management;
```

### 5. Generate Application Key
```bash
php artisan key:generate
```

### 6. Run Migrations & Seed Data
This will create the database tables and insert some dummy data so you can test the system right away:
```bash
php artisan migrate --seed
```

### 7. Start the Server
```bash
php artisan serve
```

## 🌐 Accessing the App
Once the server is running, you can access the application in your browser:

- **Public Website (Frontend):** `http://localhost:8000`
- **Book an Appointment:** `http://localhost:8000/appointment`
- **Admin Dashboard:** `http://localhost:8000/admin`

*(Any appointments booked on the public website will instantly appear in the Admin Dashboard)*
