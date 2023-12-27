# Shopping Cart System

This code represents a simple shopping cart system using PHP and MySQL. It allows users to add products to their cart, adjust quantities, remove products, and proceed to place orders. Below are the key functionalities and explanations for each part of the code:

## Features:

1. **Adding Products to Cart:**
   - On the product page, users can add items to their cart by selecting the quantity and clicking an "Add to Cart" button.
   - The system verifies the product ID and quantity before adding them to the cart.

2. **Cart Management:**
   - Users can view their cart on the "Cart" page.
   - Products in the cart are displayed with their details, including images, names, prices, quantities, and total prices.
   - Users can update quantities or remove products from the cart.
   - The subtotal of all items in the cart is calculated and displayed.

3. **Updating Cart:**
   - Users can update the quantities of items in the cart by changing the quantity values and clicking an "Update" button.
   - Quantity changes are validated to ensure they are numeric and within certain limits (minimum: 1, maximum: available quantity for that product).

4. **Placing Orders:**
   - Users can proceed to place an order by clicking a "Place Order" button, provided the cart is not empty.
   - Clicking "Place Order" redirects the user to the "Place Order" page.
  
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
