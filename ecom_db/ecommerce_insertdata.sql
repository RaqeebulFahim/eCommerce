

INSERT INTO customers (name, email, password, phone, photo, address)
VALUES
    ('John Doe', 'john@example.com', 'password123', '1234567890', 'john.jpg', '123 Main St, Dhaka'),
    ('Jane Smith', 'jane@example.com', 'password123', '0987654321', 'jane.jpg', '456 Oak St, Chittagong'),
    ('Alice Johnson', 'alice@example.com', 'password123', '1122334455', 'alice.jpg', '789 Pine St, Khulna'),
    ('Bob Brown', 'bob@example.com', 'password123', '2233445566', 'bob.jpg', '101 Maple St, Rajshahi'),
    ('Charlie White', 'charlie@example.com', 'password123', '3344556677', 'charlie.jpg', '202 Elm St, Sylhet'),
    ('David Black', 'david@example.com', 'password123', '4455667788', 'david.jpg', '303 Cedar St, Barisal'),
    ('Emily Green', 'emily@example.com', 'password123', '5566778899', 'emily.jpg', '404 Birch St, Comilla'),
    ('Frank Adams', 'frank@example.com', 'password123', '6677889900', 'frank.jpg', '505 Ash St, Rangpur'),
    ('Grace Hall', 'grace@example.com', 'password123', '7788990011', 'grace.jpg', '606 Willow St, Mymensingh'),
    ('Hannah Lee', 'hannah@example.com', 'password123', '8899001122', 'hannah.jpg', '707 Fir St, Jessore');



INSERT INTO `orders` (customer_id, total_price, order_status_id, payment_status_id)
VALUES
    (1, 1500.00, 1, 1),
    (2, 2500.50, 2, 2),
    (3, 3200.00, 1, 1),
    (4, 1200.75, 3, 2),
    (5, 4500.00, 1, 1),
    (6, 3800.00, 2, 2),
    (7, 2900.00, 1, 1),
    (8, 5000.00, 3, 2),
    (9, 2750.25, 1, 1),
    (10, 6000.00, 2, 2),
    (1, 1100.00, 1, 1),
    (2, 4800.00, 3, 2),
    (3, 3500.00, 2, 1),
    (4, 2100.00, 1, 2),
    (5, 7000.00, 2, 1);


INSERT INTO `products` (name, description, price, category_id, brand_id, color_id, size_id, product_image_id)
VALUES
    ('T-shirt', 'Comfortable cotton t-shirt', 500.00, 1, 1, '1', '1', 1),
    ('Jeans', 'Slim fit blue jeans', 1200.00, 2, 2, '2', '2', 2),
    ('Sneakers', 'Running shoes for men', 2500.00, 3, 3, '3', '3', 3),
    ('Formal Shirt', 'White formal shirt', 800.00, 1, 1, '4', '1', 4),
    ('Jacket', 'Winter jacket', 3000.00, 4, 4, '5', '5', 5),
    ('Watch', 'Analog wrist watch', 4500.00, 5, 5, '6', '6', 6),
    ('Sunglasses', 'Polarized sunglasses', 1500.00, 6, 6, '7', '7', 7),
    ('Backpack', 'Stylish travel backpack', 2000.00, 7, 7, '8', '8', 8),
    ('Hat', 'Baseball cap', 600.00, 8, 8, '9', '9', 9),
    ('Scarf', 'Woolen scarf', 900.00, 9, 9, '10', '10', 10),
    ('Sandals', 'Comfortable summer sandals', 1300.00, 3, 3, '11', '11', 11),
    ('Blazer', 'Classic navy blazer', 4000.00, 4, 4, '12', '12', 12),
    ('Wallet', 'Leather wallet', 1100.00, 5, 5, '13', '13', 13),
    ('Perfume', 'Luxury perfume', 3500.00, 6, 6, '14', '14', 14),
    ('Belt', 'Leather belt', 800.00, 8, 8, '15', '15', 15);


INSERT INTO `stocks` (product_id, transaction_type, quantity)
VALUES
    (1, 1, 100),  -- Stock In for T-shirt
    (2, 1, 80),   -- Stock In for Jeans
    (3, 1, 60),   -- Stock In for Sneakers
    (4, 1, 120),  -- Stock In for Formal Shirt
    (5, 1, 50),   -- Stock In for Jacket
    (6, 1, 70),   -- Stock In for Watch
    (7, 1, 90),   -- Stock In for Sunglasses
    (8, 1, 40),   -- Stock In for Backpack
    (9, 1, 110),  -- Stock In for Hat
    (10, 1, 85),  -- Stock In for Scarf
    (11, 1, 55),  -- Stock In for Sandals
    (12, 1, 45),  -- Stock In for Blazer
    (13, 1, 75),  -- Stock In for Wallet
    (14, 1, 65),  -- Stock In for Perfume
    (15, 1, 95);  -- Stock In for Belt
