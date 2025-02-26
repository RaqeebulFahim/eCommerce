CREATE DATABASE ecommerce_db;
USE ecommerce_db;

-- 1. Users Table
CREATE TABLE users (
  id INT(10) NOT NULL,
  name VARCHAR(50) DEFAULT NULL,
  role_id INT(10) DEFAULT NULL,
  password VARCHAR(100) DEFAULT NULL,
  email VARCHAR(50) DEFAULT NULL,
  full_name VARCHAR(50) DEFAULT NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  photo VARCHAR(50) DEFAULT NULL,
  verify_code VARCHAR(50) DEFAULT NULL,
  inactive TINYINT(1) UNSIGNED DEFAULT 0,
  mobile VARCHAR(50) DEFAULT NULL,
  updated_at DATETIME DEFAULT NULL,
  ip VARCHAR(45) DEFAULT NULL,
  email_verified_at DATETIME DEFAULT NULL,
  remember_token VARCHAR(145) DEFAULT NULL
);

-- 2. Roles Table
CREATE TABLE roles (
  id INT(10) NOT NULL,
  name VARCHAR(20) NOT NULL,
  updated_at DATETIME DEFAULT NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 3. Customers Table
CREATE TABLE customers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL,
  phone VARCHAR(20),
  address TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 4. Products Table
CREATE TABLE products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  description TEXT,
  price DECIMAL(10, 2) NOT NULL,
  category_id INT,
  brand_id INT(100),
  color_id VARCHAR(100),
  size_id VARCHAR(100),
  product_image_id INT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 5. Brand Table
CREATE TABLE brand (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 6. Color Table
CREATE TABLE color (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 7. Size Table
CREATE TABLE size (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 8. Categories Table
CREATE TABLE categories (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  parent_id INT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 9. Orders Table
CREATE TABLE orders (
  id INT AUTO_INCREMENT PRIMARY KEY,
  customer_id INT,
  total_price DECIMAL(10, 2),
  order_status_id INT(100),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 10. Order Status Table
CREATE TABLE order_status (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 11. Payment Status Table
CREATE TABLE payment_status (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 12. Wishlists Table
CREATE TABLE wishlists (
  id INT AUTO_INCREMENT PRIMARY KEY,
  customer_id INT,
  product_id INT,
  quantity INT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 13. Order Details Table
CREATE TABLE order_details (
  id INT AUTO_INCREMENT PRIMARY KEY,
  order_id INT,
  product_id INT,
  quantity INT,
  price DECIMAL(10, 2),
  discount DECIMAL(10, 2),
  subtotal DECIMAL(10, 2),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 14. Payments Table
CREATE TABLE payments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  order_id INT,
  customer_id INT,
  amount DECIMAL(10, 2),
  payment_method VARCHAR(255),
  transaction_id VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 15. Reviews Table
CREATE TABLE reviews (
  id INT AUTO_INCREMENT PRIMARY KEY,
  customer_id INT,
  product_id INT,
  rating INT CHECK (rating BETWEEN 1 AND 5),
  comment TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 16. Shipping Table
CREATE TABLE shipping (
  id INT AUTO_INCREMENT PRIMARY KEY,
  order_id INT,
  tracking_number VARCHAR(255),
  carrier VARCHAR(255),
  shipping_status_id INT(100),
  estimated_delivery_date DATE,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 17. Shipping Status Table
CREATE TABLE shipping_status (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 18. Discounts Table
CREATE TABLE discounts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  code VARCHAR(255) UNIQUE,
  discount_percentage DECIMAL(5, 2),
  expiry_date DATE,
  status VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 19. Purchases Table
CREATE TABLE purchases (
  id INT AUTO_INCREMENT PRIMARY KEY,
  supplier_id INT,
  total_amount DECIMAL(10, 2),
  purchase_date DATE,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 20. Purchase Details Table
CREATE TABLE purchase_details (
  id INT AUTO_INCREMENT PRIMARY KEY,
  purchase_id INT,
  product_id INT,
  quantity INT,
  cost_price DECIMAL(10, 2),
  subtotal DECIMAL(10, 2),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 21. Stocks Table
CREATE TABLE stocks (
  id INT AUTO_INCREMENT PRIMARY KEY,
  product_id INT,
  purchase_id INT,
  order_id INT,
  stock_in INT,
  stock_out INT,
  remaining_stock INT,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 22. Stock Adjustments Table
CREATE TABLE stock_adjustments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  product_id INT,
  adjustment_type_id INT(100),
  quantity_adjusted INT,
  reason TEXT,
  adjusted_by VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 23. Adjustment Type Table
CREATE TABLE adjustment_type (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 24. Suppliers Table
CREATE TABLE suppliers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  email VARCHAR(255),
  phone VARCHAR(20),
  address TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 25. Product Images Table
CREATE TABLE product_images (
  id INT AUTO_INCREMENT PRIMARY KEY,
  product_id INT,
  image_path VARCHAR(255),
  is_primary BOOLEAN DEFAULT 0,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
