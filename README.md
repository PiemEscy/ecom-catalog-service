# Catalog Service - E-Comm Platform

The Catalog Service is a microservice responsible for managing and providing product information for the E-Comm Platform.

It exposes REST API endpoints for fetching products and product details, which can be consumed by the frontend or other services.

---

## **Features**

- List all available products
- Lightweight microservice architecture

---

## **Tech Stack**

- **Backend:** Laravel 10, PHP 8.1
- **Database:** MySQL
- **Authentication:** JWT Token based

---

## **Project Setup**

### 1. Clone the repository
git clone https://github.com/PiemEscy/ecom-catalog-service.git

### 2. Create the database
CREATE DATABASE IF NOT EXISTS ecom_catalog_db;

### 3. Generate and setup env file

### 4. run the bash script for built-time installation (composer, npm, artisan migrations)
./setup.sh
