--admins and customers
--1. users Table

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

-- 2. roles Table

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
    photo VARCHAR(50) DEFAULT NULL,
    address text,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


-- on products
-- 4. Products Table
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    category_id INT,
    brand_id int(100),
    color_id varchar(100),  -- how to maintain stocks with color and size discruss with sir;
    size_id varchar(100), -- should we use color and size without talbe , per product with size and color?
    -- brand_name varchar(255), -- discuss: shall we create brand table for it or not .
    product_image_id INT, -- discuss with sir how it comes from image table for single product multiple image
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 5. brand table for product brands
create table brands(
    id int primary key AUTO_INCREMENT,
    name varchar(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 6. color table for product color
create table colors(
    id int primary key AUTO_INCREMENT,
    name varchar(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 7. size table for product size
create table sizes(
    id int primary key AUTO_INCREMENT,
    name varchar(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
-- 8. Categories Table
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    -- parent_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- on ecommerce order to deleivery
-- order processing strats from here

-- 9. Orders Table -- fourth and final table of order process --**** note: without payment order will not be  placed
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    total_price DECIMAL(10, 2),
    order_status_id int(100), -- ENUM('Pending', 'Completed', 'Canceled'),
    payment_status_id int (100), -- ENUM('Paid', 'Unpaid', 'Refunded'), **** note: without payment order will not be  placed
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


-- 10. Order_status table -- order delivery status table --('Pending', 'Completed', 'Canceled')

create table order_status(
    id int AUTO_INCREMENT PRIMARY key,
    name varchar(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)

-- 11. payment_status table -- third table of order process --('Paid', 'Unpaid', 'Refunded')

-- create table payment_status( -- without payment order will not be  placed
--     id int  AUTO_INCREMENT PRIMARY key,
--     name varchar(255),
--     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
--     updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
-- )

-- 12. Wishlists Table -- frist table of order process
CREATE TABLE wishlists (
    id INT AUTO_INCREMENT PRIMARY_KEY,
    customer_id INT,
    product_id INT,
    quantity INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Cart Table
-- CREATE TABLE cart (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     customer_id INT,
--     product_id INT,
--     quantity INT,
--     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
-- );

-- 13. Order Details Table  -- second table of order process
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


-- ecommerce cost tracks
--this table is for ecommmerce payment tracking table. how much total sales done by the ecommerce project

-- 14. Payments Table
CREATE TABLE payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    customer_id INT,
    amount DECIMAL(10, 2),
    payment_method_id int(100), -- ENUM('Card', 'PayPal', 'Cash on Delivery'), -- how the customer choose to payment
    transaction_id VARCHAR(255),
    -- status ENUM('Success', 'Failed', 'Pending'), -- is customer gets the order or not column
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

create table payment_methods(
    id int primary key AUTO_INCREMENT,
    name varchar(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



-- others mandatory fields for ecommerce
-- 15. Reviews Table
CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    product_id INT,
    rating INT CHECK (rating BETWEEN 1 AND 5),
    comment TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 16. Shippings Table  --status  ENUM('Shipped', 'In Transit', 'Delivered'),
CREATE TABLE shippings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    tracking_number VARCHAR(255),
    carrier VARCHAR(255),
    shipping_status_id int(100),
    estimated_delivery_date DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 17. shipping status table
create table shipping_status(
    id int AUTO_INCREMENT primary key,
    name varchar(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- this table is for promotion on different occations like eid, puja, new years, or on occation of different holidays ENUM('Active', 'Expired'),
-- 18. Discounts Table or Promotions table
CREATE TABLE Promotions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(255) UNIQUE,
    discount_percentage DECIMAL(5, 2),
    expiry_date DATE,
    promotion_status_id int(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- promotion status ENUM('Active', 'Expired'),
create table promotion_status(
    id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
--type-06: purchase cost and stock management for ecommerce

-- 19. Purchases Table
CREATE TABLE purchases (
    id INT AUTO_INCREMENT PRIMARY KEY,
    supplier_id INT,
    total_amount DECIMAL(10, 2),
    purchase_date DATE,
    -- status ENUM('Pending', 'Completed', 'Canceled'),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 20. Purchase Details Table
CREATE TABLE purchase_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    purchase_id INT, -- it is like purchase id, is it mandatory for every product? its better to keep it invoice only once per invoice
    product_id INT,
    quantity INT,
    cost_price DECIMAL(10, 2),
    subtotal DECIMAL(10, 2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 21. Stocks Table changed
CREATE TABLE stocks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    transaction_type int,
    quantity INT,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 22. Stock Adjustments Table -- ENUM('Increase', 'Decrease'),

CREATE TABLE stock_adjustments (
    id INT PRIMARY KEY AUTO_INCREMENT,
    product_id INT,
    adjustment_type_id INT,
    quantity_adjusted INT,
    reason VARCHAR(255),
    adjusted_by VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


--23. adjustment_type table  --('Increase', 'Decrease')

create table  adjustment_types(
    id int primary key AUTO_INCREMENT,
    name varchar (255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 24. Suppliers Table
CREATE TABLE suppliers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(20),
    photo VARCHAR(50) DEFAULT NULL,
    address TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 25. Product Images Table
CREATE TABLE product_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    image_name VARCHAR(255),
    is_primary BOOLEAN DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
