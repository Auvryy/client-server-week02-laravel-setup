# Laravel Student Profile Project (ITST 302)

## Introduction
* **Overview of Laravel:** Laravel is a robust, open-source PHP web framework designed for building scalable web applications following the expressive and elegant Model-View-Controller (MVC) architectural pattern.
* **Importance of Client-Server Technologies:** Client-server architecture forms the backbone of modern web applications, decoupling the user interface (client) from business logic, routing, and data persistence (server) to ensure secure, reliable, and asynchronous data exchange over HTTP/HTTPS protocols.
* **Purpose of the Project:** This project serves as an academic hands-on activity for ITST 302 to deploy a customized student information homepage utilizing modern PHP, SQLite/MariaDB, and Laravel Blade templating.

---

## Objectives
1. Successfully provision a modern PHP web development stack on Arch Linux.
2. Initialize and configure a fresh Laravel framework project using Composer dependency management.
3. Configure core PHP extensions in `php.ini` to support application dependencies and database drivers.
4. Implement a responsive, customized student profile homepage using Tailwind CSS inside Laravel views.
5. Manage project code versioning locally utilizing Git repositories.

---

## Development Environment
* **Operating System:** Arch Linux
* **PHP Version:** PHP 8.5.9
* **Laravel Version:** Laravel 13.23.0
* **Composer Version:** Composer (Latest)
* **Git Version:** Git (Latest)
* **MySQL / Database Version:** SQLite & MariaDB
* **Code Editor:** Neovim (LazyVim configuration)

---

## Installation Steps
1. **Update system packages and install prerequisites via Pacman:**
   ```bash
   sudo pacman -S composer php-zip php-gd php-xml php-sqlite mariadb
