# Laravel Student Profile Project (ITST 302)

## Introduction

- **Overview of Laravel:** Laravel is a robust, open-source PHP web framework designed for building scalable web applications following the expressive and elegant Model-View-Controller (MVC) architectural pattern.
- **Importance of Client-Server Technologies:** Client-server architecture forms the backbone of modern web applications, decoupling the user interface (client) from business logic, routing, and data persistence (server) to ensure secure, reliable, and asynchronous data exchange over HTTP/HTTPS protocols.
- **Purpose of the Project:** This project serves as an academic hands-on activity for ITST 302 to deploy a customized student information homepage utilizing modern PHP, SQLite/MariaDB, and Laravel Blade templating.

---

## Objectives

1. Successfully provision a modern PHP web development stack on Arch Linux.
2. Initialize and configure a fresh Laravel framework project using Composer dependency management.
3. Configure core PHP extensions in `php.ini` to support application dependencies and database drivers.
4. Implement a responsive, customized student profile homepage using Tailwind CSS inside Laravel views.
5. Manage project code versioning locally utilizing Git repositories.

---

## Development Environment

| Component | Version / Detail |
|---|---|
| Operating System | Arch Linux |
| PHP Version | PHP 8.5.9 |
| Laravel Version | Laravel 13.23.0 |
| Composer Version | Composer (Latest) |
| Git Version | Git (Latest) |
| MySQL / Database Version | SQLite & MariaDB |
| Code Editor | LazyVim |

---

## Installation Steps

1. **Update system packages and install prerequisites via Pacman:**
```bash
   sudo pacman -S composer php-zip php-gd php-xml php-sqlite mariadb
```

2. **Configure PHP extensions:**
   Edit `/etc/php/php.ini` via Neovim (`sudo nvim /etc/php/php.ini`) to enable required drivers like `pdo_mysql`, `sqlite3`, and `pdo_sqlite`.

3. **Create the Laravel Project:**
   Run Composer with IPv4 routing preferences to prevent network timeouts:
```bash
   COMPOSER_IPRESOLVE=4 composer create-project laravel/laravel my-app --prefer-dist
```

4. **Initialize Git version control:**
```bash
   cd my-app
   git init
   git add .
   git commit -m "Initial commit"
```

5. **Run the Development Server:**
```bash
   php artisan serve
```
   (Access via http://127.0.0.1:8000)

---

## Project Structure

- **`app/`** — Contains the core code of your application, including controllers, models, and middleware.
- **`routes/`** — Holds all route definitions for your application (e.g., `web.php` and `api.php`).
- **`resources/`** — Contains raw assets like JavaScript, CSS/Tailwind layouts, and Blade view templates.
- **`public/`** — The server's public root containing `index.php`, asset entry points, and compiled files.
- **`config/`** — Houses all configuration files for database connections, caching, mail services, and application options.
- **`database/`** — Includes database migration files, model factories, and seeders for handling schema changes and mock data.

---

## Problems Encountered

1. **Slow Internet / Connection Timeout:** Encountered `curl error 28: Resolving timed out` while attempting to download packages from Packagist on Arch Linux.
2. **Missing PHP.ini Configuration Lines:** Certain extensions like `openssl`, `mbstring`, and `fileinfo` were missing or omitted from the Arch Linux `php.ini` template file, causing confusion during setup.
3. **Internal Server Database Driver Error:** Experienced an initial HTTP 500 error on the browser stating `could not find driver (Connection: sqlite)` because the SQLite PDO extension was inactive.

---

## Solutions

1. **Slow Internet / Connection Timeout:** Resolved by forcing cURL to prioritize IPv4 lookups using `COMPOSER_IPRESOLVE=4` before executing the `composer create-project` command.
2. **Missing PHP.ini Configuration Lines:** Verified that core extensions are natively built or enabled by default in Arch Linux's modern PHP build, and successfully appended/uncommented the required database drivers (`pdo_sqlite`, `sqlite3`).
3. **Internal Server Database Driver Error:** Fixed by installing the missing `php-sqlite` package via Pacman (`sudo pacman -S php-sqlite`) and ensuring the respective database extension bindings were properly registered and uncommented in the PHP configuration.
