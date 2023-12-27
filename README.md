# Shopping Cart System

This PHP-based Shopping Cart System is a simple web application that allows users to add products to their cart, view them, update quantities, and place orders.

## Features

- **Adding Products to Cart:** Users can add products to their cart from the product page by specifying the quantity.
- **View Cart:** The system displays the added products in the cart with details like product name, price, quantity, and total price.
- **Update Cart:** Users can update the quantities of products in the cart and see the updated subtotal.
- **Place Order:** The option to place an order is available when there are products in the cart.

## Setup Instructions

1. **Database Setup:** Create a MySQL database named `shoppingcart`. Import the provided SQL schema to set up the necessary tables.
2. **Configuration:** Update the database credentials in the `pdo_connect_mysql()` function within `index.php`.
3. **File Structure:**
   - `index.php`: Contains the core logic for managing the cart, displaying products, and interacting with the database.
   - `insertorder.php`: Placeholder for the order placement logic.
   - `style.css`: Stylesheet for basic UI rendering.
   - `imgs/`: Directory containing product images.
4. **Web Server Setup:** Host the files on a web server with PHP support (e.g., Apache, Nginx) to run the application.

## Usage

1. **Homepage (`index.php`):** Users can navigate to the product listings or view their cart.
2. **Product Page (`index.php?page=products`):** Displays available products with images, names, and prices. Pagination allows navigation through products.
3. **Cart (`index.php?page=cart`):** Shows added products with options to update quantities, remove items, and place an order.
4. **Placing Order:** Clicking "Place Order" redirects users to `index.php?page=placeorder` (not implemented in this version).

## Contributing

This codebase is provided as a demonstration and might lack certain features or require improvements. Contributions and enhancements are welcome. Fork the repository, make changes, and create pull requests.

## Credits

This project uses PHP, MySQL, and basic HTML/CSS for its functionality.