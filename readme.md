# WooCommerce Order View Redirection

## Description
This code modifies the default behavior of the WooCommerce "View Order" button on the "My Account" page. Instead of redirecting to the default WooCommerce order details page, this code sends the user to the "Order Received" page (`order-received`) with full order details.

This ensures that when a customer clicks on the "View Order" button, they are redirected to the checkout completion page, where they can see all product details, status, and other information related to the order. This functionality mimics the default behavior seen right after an order is completed.

### Added by:
Thalis Alison

## How to Use
1. Place the provided PHP code into the `functions.php` file of your WordPress child theme or in a custom plugin.
2. Make sure that your WordPress and WooCommerce permalinks are correctly configured to use pretty permalinks (under **Settings > Permalinks**).

## How it Works
- When a user attempts to view a past order from their account dashboard, WooCommerce normally displays the order details on the "View Order" page.
- This custom code intercepts that request and redirects the user to the "Order Received" (`order-received`) page for that specific order.
- The redirection includes the necessary order key and order ID in the URL, allowing the page to display the order's full details.

## Installation
1. Add the PHP code to your WordPress theme's `functions.php` file or create a custom plugin with the code.
2. Make sure your WooCommerce installation is configured correctly and that all required pages (like "Checkout" and "My Account") are properly linked.
3. The code will automatically redirect customers from the default "View Order" link to the "Order Received" page.

## License
MIT License
