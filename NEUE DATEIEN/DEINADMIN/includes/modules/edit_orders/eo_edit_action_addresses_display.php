<?php
/**
 * @package Edit Orders for Zen Cart German 
 * Edit Orders plugin by Cindy Merkin a.k.a. lat9 (cindy@vinosdefrutastropicales.com)
 * Copyright (c) 2017-2024 Vinos de Frutas Tropicales
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: eo_edit_action_addresses_display.php 2024-03-20 08:21:16Z webchills $
 */ 
//
// This module is loaded in global scope by /admin/edit_orders.php.
//
// -----
// Gather the maximum database field-length for each of the address-related fields in the
// order, noting that the ASSUMPTION is made that each of the customer/billing/delivery fields
// are of equal length!
//
$max_name_length = 'maxlength="' . zen_field_length(TABLE_ORDERS, 'customers_name') . '"';
$max_company_length = 'maxlength="' . zen_field_length(TABLE_ORDERS, 'customers_company') . '"';
$max_street_address_length = 'maxlength="' . zen_field_length(TABLE_ORDERS, 'customers_street_address') . '"';
$max_suburb_length = 'maxlength="' . zen_field_length(TABLE_ORDERS, 'customers_suburb') . '"';
$max_city_length = 'maxlength="' . zen_field_length(TABLE_ORDERS, 'customers_city') . '"';
$max_state_length = 'maxlength="' . zen_field_length(TABLE_ORDERS, 'customers_state') . '"';
$max_postcode_length = 'maxlength="' . zen_field_length(TABLE_ORDERS, 'customers_postcode') . '"';
$max_country_length = 'maxlength="' . zen_field_length(TABLE_ORDERS, 'customers_country') . '"';
?>
<div class="row" id="c-form">
    <div class="col-sm-12 col-lg-4">
<?php
// -----
// Set variables for common address-format display.
//
$address_icon = 'fa-solid fa fa-user';
$address_label = ENTRY_CUSTOMER;
$address_name = 'customer';
$address_fields = $order->customer;
$address_notifier = 'EDIT_ORDERS_ADDL_CUSTOMER_ADDRESS_ROWS';
require DIR_WS_MODULES . 'edit_orders/eo_common_address_format.php';
?>
    </div>

    <div class="col-sm-12 col-lg-4">
<?php
// -----
// Set variables for common address-format display, based on the site's preferential order.
//
if (EO_ADDRESSES_DISPLAY_ORDER === 'CBS') {
    $address_icon = 'fa-regular fa fa-credit-card';
    $address_label = ENTRY_BILLING_ADDRESS;
    $address_name = 'billing';
    $address_fields = $order->billing;
    $address_notifier = 'EDIT_ORDERS_ADDL_BILLING_ADDRESS_ROWS';
} else {
    $address_icon = 'fa-solid fa fa-truck';
    $address_label = ENTRY_SHIPPING_ADDRESS;
    $address_name = 'delivery';
    $address_fields = $order->delivery;
    $address_notifier = 'EDIT_ORDERS_ADDL_SHIPPING_ADDRESS_ROWS';
}
require DIR_WS_MODULES . 'edit_orders/eo_common_address_format.php';
?>
    </div>

    <div class="col-sm-12 col-lg-4">
<?php
// -----
// Set variables for common address-format display, based on the site's preferential order.
//
if (EO_ADDRESSES_DISPLAY_ORDER === 'CBS') {
    $address_icon = 'fa-solid fa fa-truck';
    $address_label = ENTRY_SHIPPING_ADDRESS;
    $address_name = 'delivery';
    $address_fields = $order->delivery;
    $address_notifier = 'EDIT_ORDERS_ADDL_SHIPPING_ADDRESS_ROWS';
} else {
    $address_icon = 'fa-regular fa fa-credit-card';
    $address_label = ENTRY_BILLING_ADDRESS;
    $address_name = 'billing';
    $address_fields = $order->billing;
    $address_notifier = 'EDIT_ORDERS_ADDL_BILLING_ADDRESS_ROWS';
}
require DIR_WS_MODULES . 'edit_orders/eo_common_address_format.php';
?>
    </div>
</div>
