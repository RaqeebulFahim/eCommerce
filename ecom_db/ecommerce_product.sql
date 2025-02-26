-- 1. User Table

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `role_id` int(10) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `photo` varchar(50) DEFAULT NULL,
  `verify_code` varchar(50) DEFAULT NULL,
  `inactive` tinyint(1) UNSIGNED DEFAULT 0,
  `mobile` varchar(50) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `remember_token` varchar(145) DEFAULT NULL
)

--2. Role Table
CREATE TABLE Role (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL UNIQUE,
    role_description TEXT
);

--3. create customer table for multi auth
CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `role_id` int(10) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `photo` varchar(50) DEFAULT NULL,
  `verify_code` varchar(50) DEFAULT NULL,
  `inactive` tinyint(1) UNSIGNED DEFAULT 0,
  `mobile` varchar(50) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `remember_token` varchar(145) DEFAULT NULL
)

-- 4. Country Table
CREATE TABLE country (
    id INT AUTO_INCREMENT PRIMARY KEY,
    country_name VARCHAR(100) NOT NULL
);


-- 5. Address Table
CREATE TABLE address (
    id INT AUTO_INCREMENT PRIMARY KEY,
    unit_number VARCHAR(50),
    street_number VARCHAR(50),
    address_line1 VARCHAR(255) NOT NULL,
    address_line2 VARCHAR(255),
    city VARCHAR(100) NOT NULL,
    region VARCHAR(100),
    postal_code VARCHAR(20),
    country_id INT,
    FOREIGN KEY (country_id) REFERENCES country(id)
);



-- 6. customer Address Table
CREATE TABLE customer_address (
    id INT,
    address_id INT,
    is_default BOOLEAN DEFAULT FALSE,
    PRIMARY KEY (customer_id, address_id),
    FOREIGN KEY (customer_id) REFERENCES customer(id),
    FOREIGN KEY (address_id) REFERENCES address(id)
);


-- 7. Payment Type Table
CREATE TABLE payment_type (
    id INT AUTO_INCREMENT PRIMARY KEY,
    value VARCHAR(50) NOT NULL
);


-- 8. customer Payment Method Table
CREATE TABLE customer_payment_method (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    payment_type_id INT,
    provider VARCHAR(100),
    account_number VARCHAR(100),
    expiry_date DATE,
    is_default BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (customer_id) REFERENCES customer(id),
    FOREIGN KEY (payment_type_id) REFERENCES payment_type(id)
);

-- ***********************************************



9. -- Product Category Table
CREATE TABLE Product_category (
    id INT PRIMARY KEY AUTO_INCREMENT,
    parent_category_id INT,
    size_category_id INT,
    category_name VARCHAR(255) NOT NULL,
    category_image VARCHAR(255),
    category_description TEXT,
    FOREIGN KEY (parent_category_id) REFERENCES Product_category(product_category_id),
    FOREIGN KEY (size_category_id) REFERENCES size_category(size_category_id)
);

10. -- Product Table
CREATE TABLE Product (
    product_id INT PRIMARY KEY AUTO_INCREMENT,
    product_category_id INT,
    brand_id INT,
    product_name VARCHAR(255) NOT NULL,
    product_description TEXT,
    care_instruction TEXT,
    about TEXT,

    FOREIGN KEY (product_category_id) REFERENCES Product_category(product_category_id),
    FOREIGN KEY (brand_id) REFERENCES Brand(brand_id)
);

11. -- Product Image Table
CREATE TABLE Product_image (
    image_id INT PRIMARY KEY AUTO_INCREMENT,
    product_item_id INT,
    image_filename VARCHAR(255) NOT NULL,
    FOREIGN KEY (product_item_id) REFERENCES product_item(product_item_id)
);

12. -- Color Table
CREATE TABLE Color (
    color_id INT PRIMARY KEY AUTO_INCREMENT,
    color_name VARCHAR(100) NOT NULL
);

13. -- Product Item Table
CREATE TABLE product_item (
    product_item_id INT PRIMARY KEY AUTO_INCREMENT,
    product_id INT,
    color_id INT,
    original_price DECIMAL(10, 2),
    sales_price DECIMAL(10, 2),
    product_code VARCHAR(100) UNIQUE,
    FOREIGN KEY (product_id) REFERENCES Product(product_id),
    FOREIGN KEY (color_id) REFERENCES Color(color_id)
);

14. -- Size Option Table
CREATE TABLE size_option (
    size_id INT PRIMARY KEY AUTO_INCREMENT,
    size_category_id INT,
    size_name VARCHAR(100) NOT NULL,
    size_order INT,
    FOREIGN KEY (size_category_id) REFERENCES size_category(size_category_id)
);

15. -- Product Variation Table
CREATE TABLE product_variation (
    variation_id INT PRIMARY KEY AUTO_INCREMENT,
    product_item_id INT,
    size_id INT,
    qty_in_stock INT,
    FOREIGN KEY (product_item_id) REFERENCES product_item(product_item_id),
    FOREIGN KEY (size_id) REFERENCES size_option(size_id)
);

16. -- Brand Table
CREATE TABLE Brand (
    brand_id INT PRIMARY KEY AUTO_INCREMENT,
    brand_name VARCHAR(255) NOT NULL,
    brand_description TEXT
);

17. -- Size Category Table
CREATE TABLE size_category (
    size_category_id INT PRIMARY KEY AUTO_INCREMENT,
    size_category_name VARCHAR(255) NOT NULL
);

18. -- Attribute Type Table
CREATE TABLE attribute_type (
    attribute_type_id INT PRIMARY KEY AUTO_INCREMENT,
    attribute_name VARCHAR(255) NOT NULL
);

19. -- Attribute Option Table
CREATE TABLE attribute_option (
    attribute_option_id INT PRIMARY KEY AUTO_INCREMENT,
    attribute_type_id INT,
    attribute_option_name VARCHAR(255) NOT NULL,
    FOREIGN KEY (attribute_type_id) REFERENCES attribute_type(attribute_type_id)
);

20. -- Product Attribute Table
CREATE TABLE product_attribute (
    product_id INT,
    attribute_option_id INT,
    PRIMARY KEY (product_id, attribute_option_id),
    FOREIGN KEY (product_id) REFERENCES Product(product_id),
    FOREIGN KEY (attribute_option_id) REFERENCES attribute_option(attribute_option_id)
);

-- ******************************************



-- 21. Shopping Cart Table
CREATE TABLE shopping_cart (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    FOREIGN KEY (customer_id) REFERENCES site_customer(id)
);
-- Stores customer's shopping cart

-- 22. Shopping Cart Item Table
CREATE TABLE shopping_cart_item (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cart_id INT,
    product_item_id INT,
    qty INT NOT NULL,
    FOREIGN KEY (cart_id) REFERENCES shopping_cart(id),
    FOREIGN KEY (product_item_id) REFERENCES product_item(id)
);
-- Stores items in the shopping cart

-- 23. Shop Order Table
CREATE TABLE shop_order (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    order_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    payment_method_id INT,
    shipping_address VARCHAR(255),
    shipping_method INT,
    order_total DECIMAL(10,2) NOT NULL,
    order_status INT,
    FOREIGN KEY (customer_id) REFERENCES customer(id),
    FOREIGN KEY (payment_method_id) REFERENCES customer_payment_method(id),
    FOREIGN KEY (shipping_method) REFERENCES shipping_method(id),
    FOREIGN KEY (order_status) REFERENCES order_status(id)
);
-- Stores customer orders

-- 24. Order Line Table
CREATE TABLE order_line (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_item_id INT,
    order_id INT,
    qty INT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (product_item_id) REFERENCES product_item(id),
    FOREIGN KEY (order_id) REFERENCES shop_order(id)
);
-- Stores order items

-- 25. Shipping Method Table
CREATE TABLE shipping_method (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL
);
-- Stores available shipping methods

-- 26. Order Status Table
CREATE TABLE order_status (
    id INT AUTO_INCREMENT PRIMARY KEY,
    status VARCHAR(50) NOT NULL
);
-- Stores order status like pending, shipped

-- 27. customer Review Table
CREATE TABLE customer_review (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    ordered_product_id INT,
    rating_value INT CHECK (rating_value BETWEEN 1 AND 5),
    comment TEXT,
    FOREIGN KEY (customer_id) REFERENCES customer(id),
    FOREIGN KEY (ordered_product_id) REFERENCES order_line(id)
);
-- Stores product reviews from customers

-- 28. Promotion Table
CREATE TABLE promotion (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    discount_rate DECIMAL(5,2) NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL
);
-- Stores promotional offers

-- 29. Promotion Category Table
CREATE TABLE promotion_category (
    category_id INT,
    promotion_id INT,
    PRIMARY KEY (category_id, promotion_id),
    FOREIGN KEY (category_id) REFERENCES product_category(id),
    FOREIGN KEY (promotion_id) REFERENCES promotion(id)
);






----------------------------------------------------------------------------------------------------------------------------------------------***************************
-- 1. User Table
-- CREATE TABLE site_user (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     email_address VARCHAR(255) UNIQUE NOT NULL,
--     phone_number VARCHAR(20),
--     password VARCHAR(255) NOT NULL
--     role_id int(10) DEFAULT NULL
-- );



-- Stores user login information


13. -- Role Table
CREATE TABLE Role (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL UNIQUE,
    role_description TEXT
);



-- create customer table for multi auth
-- CREATE TABLE `customer` (
--   `id` int(10) NOT NULL,
--   `name` varchar(50) DEFAULT NULL,
--   `role_id` int(10) DEFAULT NULL,
--   `password` varchar(100) DEFAULT NULL,
--   `email` varchar(50) DEFAULT NULL,
--   `full_name` varchar(50) DEFAULT NULL,
--   `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
--   `photo` varchar(50) DEFAULT NULL,
--   `verify_code` varchar(50) DEFAULT NULL,
--   `inactive` tinyint(1) UNSIGNED DEFAULT 0,
--   `mobile` varchar(50) DEFAULT NULL,
--   `updated_at` datetime DEFAULT NULL,
--   `ip` varchar(45) DEFAULT NULL,
--   `email_verified_at` datetime DEFAULT NULL,
--   `remember_token` varchar(145) DEFAULT NULL
-- )

-- 2. Country Table
CREATE TABLE country (
    id INT AUTO_INCREMENT PRIMARY KEY,
    country_name VARCHAR(100) NOT NULL
);
-- Stores country names for addresses

-- 3. Address Table
CREATE TABLE address (
    id INT AUTO_INCREMENT PRIMARY KEY,
    unit_number VARCHAR(50),
    street_number VARCHAR(50),
    address_line1 VARCHAR(255) NOT NULL,
    address_line2 VARCHAR(255),
    city VARCHAR(100) NOT NULL,
    region VARCHAR(100),
    postal_code VARCHAR(20),
    country_id INT,
    FOREIGN KEY (country_id) REFERENCES country(id)
);
-- Stores customer address details

-- 4. customer Address Table
CREATE TABLE customer_address (
    id INT,
    address_id INT,
    is_default BOOLEAN DEFAULT FALSE,
    PRIMARY KEY (customer_id, address_id),
    FOREIGN KEY (customer_id) REFERENCES customer(id),
    FOREIGN KEY (address_id) REFERENCES address(id)
);
-- Links customers to their addresses

-- 5. Payment Type Table
CREATE TABLE payment_type (
    id INT AUTO_INCREMENT PRIMARY KEY,
    value VARCHAR(50) NOT NULL
);
-- Stores payment methods like credit card, PayPal, etc.

-- 6. customer Payment Method Table
CREATE TABLE customer_payment_method (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    payment_type_id INT,
    provider VARCHAR(100),
    account_number VARCHAR(100),
    expiry_date DATE,
    is_default BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (customer_id) REFERENCES customer(id),
    FOREIGN KEY (payment_type_id) REFERENCES payment_type(id)
);
-- Stores customer's payment details

-- -- 7. Product Category Table
-- CREATE TABLE product_category (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     parent_category_id INT,
--     category_name VARCHAR(255) NOT NULL,
--     FOREIGN KEY (parent_category_id) REFERENCES product_category(id)
-- );
-- Stores product categories

-- -- 8. Product Table
-- CREATE TABLE product (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     category_id INT,
--     name VARCHAR(255) NOT NULL,
--     description TEXT,
--     product_image VARCHAR(255),
--     FOREIGN KEY (category_id) REFERENCES product_category(id)
-- );
-- Stores product details

-- -- 9. Variation Table
-- CREATE TABLE variation (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     category_id INT,
--     name VARCHAR(255) NOT NULL,
--     FOREIGN KEY (category_id) REFERENCES product_category(id)
-- );
-- Stores product variations like size, color

-- 10. Variation Option Table
-- CREATE TABLE variation_option (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     variation_id INT,
--     value VARCHAR(255) NOT NULL,
--     FOREIGN KEY (variation_id) REFERENCES variation(id)
-- );
-- Stores specific values for product variations

-- 11. Product Item Table
-- CREATE TABLE product_item (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     product_id INT,
--     SKU VARCHAR(50) UNIQUE NOT NULL,
--     qty_in_stock INT DEFAULT 0,
--     product_image VARCHAR(255),
--     price DECIMAL(10,2) NOT NULL,
--     FOREIGN KEY (product_id) REFERENCES product(id)
-- );
-- Stores inventory details for each product

-- 12. Product Configuration Table
-- CREATE TABLE product_configuration (
--     product_item_id INT,
--     variation_option_id INT,
--     PRIMARY KEY (product_item_id, variation_option_id),
--     FOREIGN KEY (product_item_id) REFERENCES product_item(id),
--     FOREIGN KEY (variation_option_id) REFERENCES variation_option(id)
-- );
-- Links product items with variation options

-- 13. Shopping Cart Table
CREATE TABLE shopping_cart (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    FOREIGN KEY (customer_id) REFERENCES site_customer(id)
);
-- Stores customer's shopping cart

-- 14. Shopping Cart Item Table
CREATE TABLE shopping_cart_item (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cart_id INT,
    product_item_id INT,
    qty INT NOT NULL,
    FOREIGN KEY (cart_id) REFERENCES shopping_cart(id),
    FOREIGN KEY (product_item_id) REFERENCES product_item(id)
);
-- Stores items in the shopping cart

-- 15. Shop Order Table
CREATE TABLE shop_order (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    order_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    payment_method_id INT,
    shipping_address VARCHAR(255),
    shipping_method INT,
    order_total DECIMAL(10,2) NOT NULL,
    order_status INT,
    FOREIGN KEY (customer_id) REFERENCES customer(id),
    FOREIGN KEY (payment_method_id) REFERENCES customer_payment_method(id),
    FOREIGN KEY (shipping_method) REFERENCES shipping_method(id),
    FOREIGN KEY (order_status) REFERENCES order_status(id)
);
-- Stores customer orders

-- 16. Order Line Table
CREATE TABLE order_line (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_item_id INT,
    order_id INT,
    qty INT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (product_item_id) REFERENCES product_item(id),
    FOREIGN KEY (order_id) REFERENCES shop_order(id)
);
-- Stores order items

-- 17. Shipping Method Table
CREATE TABLE shipping_method (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL
);
-- Stores available shipping methods

-- 18. Order Status Table
CREATE TABLE order_status (
    id INT AUTO_INCREMENT PRIMARY KEY,
    status VARCHAR(50) NOT NULL
);
-- Stores order status like pending, shipped

-- 19. customer Review Table
CREATE TABLE customer_review (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    ordered_product_id INT,
    rating_value INT CHECK (rating_value BETWEEN 1 AND 5),
    comment TEXT,
    FOREIGN KEY (customer_id) REFERENCES customer(id),
    FOREIGN KEY (ordered_product_id) REFERENCES order_line(id)
);
-- Stores product reviews from customers

-- 20. Promotion Table
CREATE TABLE promotion (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    discount_rate DECIMAL(5,2) NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL
);
-- Stores promotional offers

-- 21. Promotion Category Table
CREATE TABLE promotion_category (
    category_id INT,
    promotion_id INT,
    PRIMARY KEY (category_id, promotion_id),
    FOREIGN KEY (category_id) REFERENCES product_category(id),
    FOREIGN KEY (promotion_id) REFERENCES promotion(id)
);
-- Links promotions to product categories

---------------------------------------------------------------------------------------------------------------------------------------------------

1. -- Product Category Table
CREATE TABLE Product_category (
    id INT PRIMARY KEY AUTO_INCREMENT,
    parent_category_id INT,
    size_category_id INT,
    category_name VARCHAR(255) NOT NULL,
    category_image VARCHAR(255),
    category_description TEXT,
    FOREIGN KEY (parent_category_id) REFERENCES Product_category(product_category_id),
    FOREIGN KEY (size_category_id) REFERENCES size_category(size_category_id)
);

2. -- Product Table
CREATE TABLE Product (
    product_id INT PRIMARY KEY AUTO_INCREMENT,
    product_category_id INT,
    brand_id INT,
    product_name VARCHAR(255) NOT NULL,
    product_description TEXT,
    care_instruction TEXT,
    about TEXT,

    FOREIGN KEY (product_category_id) REFERENCES Product_category(product_category_id),
    FOREIGN KEY (brand_id) REFERENCES Brand(brand_id)
);

3. -- Product Image Table
CREATE TABLE Product_image (
    image_id INT PRIMARY KEY AUTO_INCREMENT,
    product_item_id INT,
    image_filename VARCHAR(255) NOT NULL,
    FOREIGN KEY (product_item_id) REFERENCES product_item(product_item_id)
);

4. -- Color Table
CREATE TABLE Color (
    color_id INT PRIMARY KEY AUTO_INCREMENT,
    color_name VARCHAR(100) NOT NULL
);

5. -- Product Item Table
CREATE TABLE product_item (
    product_item_id INT PRIMARY KEY AUTO_INCREMENT,
    product_id INT,
    color_id INT,
    original_price DECIMAL(10, 2),
    sales_price DECIMAL(10, 2),
    product_code VARCHAR(100) UNIQUE,
    FOREIGN KEY (product_id) REFERENCES Product(product_id),
    FOREIGN KEY (color_id) REFERENCES Color(color_id)
);

6. -- Size Option Table
CREATE TABLE size_option (
    size_id INT PRIMARY KEY AUTO_INCREMENT,
    size_category_id INT,
    size_name VARCHAR(100) NOT NULL,
    size_order INT,
    FOREIGN KEY (size_category_id) REFERENCES size_category(size_category_id)
);

7. -- Product Variation Table
CREATE TABLE product_variation (
    variation_id INT PRIMARY KEY AUTO_INCREMENT,
    product_item_id INT,
    size_id INT,
    qty_in_stock INT,
    FOREIGN KEY (product_item_id) REFERENCES product_item(product_item_id),
    FOREIGN KEY (size_id) REFERENCES size_option(size_id)
);

8. -- Brand Table
CREATE TABLE Brand (
    brand_id INT PRIMARY KEY AUTO_INCREMENT,
    brand_name VARCHAR(255) NOT NULL,
    brand_description TEXT
);

9. -- Size Category Table
CREATE TABLE size_category (
    size_category_id INT PRIMARY KEY AUTO_INCREMENT,
    size_category_name VARCHAR(255) NOT NULL
);

10. -- Attribute Type Table
CREATE TABLE attribute_type (
    attribute_type_id INT PRIMARY KEY AUTO_INCREMENT,
    attribute_name VARCHAR(255) NOT NULL
);

11. -- Attribute Option Table
CREATE TABLE attribute_option (
    attribute_option_id INT PRIMARY KEY AUTO_INCREMENT,
    attribute_type_id INT,
    attribute_option_name VARCHAR(255) NOT NULL,
    FOREIGN KEY (attribute_type_id) REFERENCES attribute_type(attribute_type_id)
);

12. -- Product Attribute Table
CREATE TABLE product_attribute (
    product_id INT,
    attribute_option_id INT,
    PRIMARY KEY (product_id, attribute_option_id),
    FOREIGN KEY (product_id) REFERENCES Product(product_id),
    FOREIGN KEY (attribute_option_id) REFERENCES attribute_option(attribute_option_id)
);


**************************************************************************************************************************************
**************************************************************************************************************************************



-- 1. User Table
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

-- 2. Role Table
CREATE TABLE role (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL UNIQUE,
    role_description TEXT
);

-- 3. Customer Table (Multi Auth)
CREATE TABLE customer (
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

-- 4. Country Table
CREATE TABLE country (
    id INT AUTO_INCREMENT PRIMARY KEY,
    country_name VARCHAR(100) NOT NULL
);

-- 5. Address Table
CREATE TABLE address (
    id INT AUTO_INCREMENT PRIMARY KEY,
    unit_number VARCHAR(50),
    street_number VARCHAR(50),
    address_line1 VARCHAR(255) NOT NULL,
    address_line2 VARCHAR(255),
    city VARCHAR(100) NOT NULL,
    region VARCHAR(100),
    postal_code VARCHAR(20),
    country_id INT,
    FOREIGN KEY (country_id) REFERENCES country(id)
);

-- 6. Customer Address Table
CREATE TABLE customer_address (
    customer_id INT,
    address_id INT,
    is_default BOOLEAN DEFAULT FALSE,
    PRIMARY KEY (customer_id, address_id),
    FOREIGN KEY (customer_id) REFERENCES customer(id),
    FOREIGN KEY (address_id) REFERENCES address(id)
);

-- 7. Payment Type Table
CREATE TABLE payment_type (
    id INT AUTO_INCREMENT PRIMARY KEY,
    value VARCHAR(50) NOT NULL
);

-- 8. Customer Payment Method Table
CREATE TABLE customer_payment_method (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    payment_type_id INT,
    provider VARCHAR(100),
    account_number VARCHAR(100),
    expiry_date DATE,
    is_default BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (customer_id) REFERENCES customer(id),
    FOREIGN KEY (payment_type_id) REFERENCES payment_type(id)
);

-- 9. Product Category Table
CREATE TABLE product_category (
    id INT PRIMARY KEY AUTO_INCREMENT,
    parent_category_id INT,
    size_category_id INT,
    category_name VARCHAR(255) NOT NULL,
    category_image VARCHAR(255),
    category_description TEXT,
    FOREIGN KEY (parent_category_id) REFERENCES product_category(id),
    FOREIGN KEY (size_category_id) REFERENCES size_category(id)
);

-- 10. Product Table
CREATE TABLE product (
    product_id INT PRIMARY KEY AUTO_INCREMENT,
    product_category_id INT,
    brand_id INT,
    product_name VARCHAR(255) NOT NULL,
    product_description TEXT,
    care_instruction TEXT,
    about TEXT,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT NULL,
    FOREIGN KEY (product_category_id) REFERENCES product_category(id),
    FOREIGN KEY (brand_id) REFERENCES brand(id)
);

-- 11. Product Image Table
CREATE TABLE product_image (
    image_id INT PRIMARY KEY AUTO_INCREMENT,
    product_item_id INT,
    image_filename VARCHAR(255) NOT NULL,
    FOREIGN KEY (product_item_id) REFERENCES product_item(id)
);

-- 12. Color Table
CREATE TABLE color (
    color_id INT PRIMARY KEY AUTO_INCREMENT,
    color_name VARCHAR(100) NOT NULL
);

-- 13. Product Item Table
CREATE TABLE product_item (
    product_item_id INT PRIMARY KEY AUTO_INCREMENT,
    product_id INT,
    color_id INT,
    original_price DECIMAL(10, 2),
    sales_price DECIMAL(10, 2),
    product_code VARCHAR(100) UNIQUE,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT NULL,
    FOREIGN KEY (product_id) REFERENCES product(id),
    FOREIGN KEY (color_id) REFERENCES color(id)
);

-- 14. Size Option Table
CREATE TABLE size_option (
    size_id INT PRIMARY KEY AUTO_INCREMENT,
    size_category_id INT,
    size_name VARCHAR(100) NOT NULL,
    size_order INT,
    FOREIGN KEY (size_category_id) REFERENCES size_category(id)
);

-- 15. Product Variation Table
CREATE TABLE product_variation (
    variation_id INT PRIMARY KEY AUTO_INCREMENT,
    product_item_id INT,
    size_id INT,
    qty_in_stock INT,
    FOREIGN KEY (product_item_id) REFERENCES product_item(id),
    FOREIGN KEY (size_id) REFERENCES size_option(id)
);

-- 16. Brand Table
CREATE TABLE brand (
    brand_id INT PRIMARY KEY AUTO_INCREMENT,
    brand_name VARCHAR(255) NOT NULL,
    brand_description TEXT
);

-- 17. Size Category Table
CREATE TABLE size_category (
    size_category_id INT PRIMARY KEY AUTO_INCREMENT,
    size_category_name VARCHAR(255) NOT NULL
);

-- 18. Attribute Type Table
CREATE TABLE attribute_type (
    attribute_type_id INT PRIMARY KEY AUTO_INCREMENT,
    attribute_name VARCHAR(255) NOT NULL
);

-- 19. Attribute Option Table
CREATE TABLE attribute_option (
    attribute_option_id INT PRIMARY KEY AUTO_INCREMENT,
    attribute_type_id INT,
    attribute_option_name VARCHAR(255) NOT NULL,
    FOREIGN KEY (attribute_type_id) REFERENCES attribute_type(id)
);

-- 20. Product Attribute Table
CREATE TABLE product_attribute (
    product_id INT,
    attribute_option_id INT,
    PRIMARY KEY (product_id, attribute_option_id),
    FOREIGN KEY (product_id) REFERENCES product(id),
    FOREIGN KEY (attribute_option_id) REFERENCES attribute_option(id)
);

-- 21. Shopping Cart Table
CREATE TABLE shopping_cart (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    FOREIGN KEY (customer_id) REFERENCES site_customer(id)
);

-- 22. Shopping Cart Item Table
CREATE TABLE shopping_cart_item (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cart_id INT,
    product_item_id INT,
    qty INT NOT NULL,
    FOREIGN KEY (cart_id) REFERENCES shopping_cart(id),
    FOREIGN KEY (product_item_id) REFERENCES product_item(id)
);

-- 23. Shop Order Table
CREATE TABLE shop_order (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    order_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    payment_method_id INT,
    shipping_address VARCHAR(255),
    shipping_method INT,
    order_total DECIMAL(10,2) NOT NULL,
    order_status INT,
    FOREIGN KEY (customer_id) REFERENCES customer(id),
    FOREIGN KEY (payment_method_id) REFERENCES customer_payment_method(id),
    FOREIGN KEY (shipping_method) REFERENCES shipping_method(id),
    FOREIGN KEY (order_status) REFERENCES order_status(id)
);

-- 24. Order Line Table
CREATE TABLE order_line (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_item_id INT,
    order_id INT,
    qty INT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (product_item_id) REFERENCES product_item(id),
    FOREIGN KEY (order_id) REFERENCES shop_order(id)
);

-- 25. Shipping Method Table
CREATE TABLE shipping_method (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL
);

-- 26. Order Status Table
CREATE TABLE order_status (
    id INT AUTO_INCREMENT PRIMARY KEY,
    status VARCHAR(50) NOT NULL
);

-- 27. Customer Review Table
CREATE TABLE customer_review (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    ordered_product_id INT,
    rating_value INT CHECK (rating_value BETWEEN 1 AND 5),
    comment TEXT,
    FOREIGN KEY (customer_id) REFERENCES customer(id),
    FOREIGN KEY (ordered_product_id) REFERENCES order_line(id)
);

-- 28. Promotion Table
CREATE TABLE promotion (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    discount_rate DECIMAL(5,2) NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL
);

-- 29. Promotion Category Table
CREATE TABLE promotion_category (
    category_id INT,
    promotion_id INT,
    PRIMARY KEY (category_id, promotion_id),
    FOREIGN KEY (category_id) REFERENCES product_category(id),
    FOREIGN KEY (promotion_id) REFERENCES promotion(id)
);

-- 30. Store Table
CREATE TABLE store (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- 31. Purchase Table
CREATE TABLE purchase (
    id INT PRIMARY KEY AUTO_INCREMENT,
    store_id INT,
    purchase_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    total_amount DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (store_id) REFERENCES store(id)
);

-- 32. Purchase Details Table
CREATE TABLE purchase_details (
    id INT PRIMARY KEY AUTO_INCREMENT,
    purchase_id INT,
    product_item_id INT,
    qty INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (purchase_id) REFERENCES purchase(id),
    FOREIGN KEY (product_item_id) REFERENCES product_item(id)
);

