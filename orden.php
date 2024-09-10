<?php
/**
 * Redirects WooCommerce "View Order" to "Order Received" page with full order details.
 * Code added by Thalis Alison.
 */

// Function to redirect to the 'Order Received' page with the correct order key
function redirect_to_order_received_page($order) {
    // Check if the order exists and is valid
    if (is_a($order, 'WC_Order')) {
        // Get the order ID and the order key
        $order_id = $order->get_id();
        $order_key = $order->get_order_key();

        // Construct the 'Order Received' page URL
        $thank_you_url = site_url() . '/finalizar-compra/order-received/' . $order_id . '/?key=' . $order_key;

        // Redirect the user to the constructed URL
        wp_safe_redirect($thank_you_url);
        exit;
    }
}

// Function to trigger redirection on the "view-order" endpoint in WooCommerce's "My Account" page
function trigger_order_view_redirection() {
    // Check if the user is trying to view an order
    if (is_wc_endpoint_url('view-order')) {
        // Get the order ID from the URL
        $order_id = absint(get_query_var('view-order'));

        // Validate the order and then redirect
        if ($order = wc_get_order($order_id)) {
            redirect_to_order_received_page($order);
        }
    }
}
// Add the redirection function to the WooCommerce template redirect hook
add_action('template_redirect', 'trigger_order_view_redirection');
