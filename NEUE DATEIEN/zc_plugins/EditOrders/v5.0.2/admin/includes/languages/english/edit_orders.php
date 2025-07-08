<?php
// -----
// Language constants used by the /admin/edit_orders.php processing (Edit Orders).
//
//-Last modified 2025-07-08 webchills Edit Orders v5.0.2
//
// Page / Section Headings and common button names and other constants.
define('BUTTON_ADD' , 'Add');
define('BUTTON_CHOOSE' , 'Choose');
define('BUTTON_CLOSE' , 'Close');
define('BUTTON_COMMIT_CHANGES' , 'Commit Changes');
define('BUTTON_RECALCULATE' , 'Recalculate');
define('HEADING_TITLE'); 'Editing Order');
define('HEADING_TITLE_SEARCH'); 'Order ID:');
define('HEADING_TITLE_STATUS'); 'Status:');
define('HEADING_TITLE_ADD_PRODUCT'); 'Adding a Product to Order');
define('TEXT_LABEL_TAX' , 'Tax (%):');
define('TEXT_MODAL_CHANGES_TITLE' , 'Current Order Changes');
define('TEXT_ORDER_TOTAL_ADDED' , '%1$s was added: %2$s');
define('TEXT_ORDER_TOTAL_REMOVED' , '%1$s was removed: %2$s');
define('TEXT_ORIGINAL_ORDER' , 'Original Order');
define('TEXT_ORIGINAL_VALUE' , 'Original: <code>%s</code>');
define('TEXT_OSH_CHANGED_VALUES' , 'These values were changed in the order:');
define('TEXT_OT_CHANGES' , 'Order Total Changes');
define('TEXT_PRODUCT_CHANGES' , 'Product Changes');
define('TEXT_UPDATED_ORDER' , 'Updated Order');
define('TEXT_VALUE_CHANGED' , '%1$s was changed from %2$s to %3$s');   //- Used by the AJAX processing and for OSH record
define('TEXT_VALUE_UNKNOWN' , 'Unknown [%s]');  //- %s is filled in with the unknown 'entity'
define('TEXT_SHIPPING_TAX_RATE_INITIALIZED' , 'The shipping tax-rate for the order was initialized to %s.');
// Table Headings
define('TABLE_HEADING_STATUS_HISTORY'); 'Order Status History &amp; Comments');
define('TABLE_HEADING_COMMENTS'); 'Comments');
define('TABLE_HEADING_CUSTOMERS'); 'Customers');
define('TABLE_HEADING_ORDER_TOTAL'); 'Order Total');
define('TABLE_HEADING_DATE_PURCHASED'); 'Date Purchased');
define('TABLE_HEADING_STATUS'); 'Status');
define('TABLE_HEADING_ACTION'); 'Action');
define('TABLE_HEADING_QUANTITY'); 'Qty.');
define('TABLE_HEADING_PRODUCTS'); 'Products');
define('TABLE_HEADING_TAX'); 'Tax');
define('TABLE_HEADING_TOTAL'); 'Total');
define('TABLE_HEADING_UNIT_PRICE'); 'Unit Price');
define('TABLE_HEADING_UNIT_PRICE_NET'); 'Unit Price (Net)');
define('TABLE_HEADING_UNIT_PRICE_GROSS'); 'Unit Price (Gross)');
define('TABLE_HEADING_TOTAL_PRICE'); 'Total Price');
define('TABLE_HEADING_CUSTOMER_NOTIFIED'); 'Customer Notified');
define('TABLE_HEADING_DATE_ADDED'); 'Date Added');
define('TABLE_HEADING_UPDATED_BY'); 'Updated By');
// Order Address Entries
define('BUTTON_MAP_ADDRESS' , 'Map Address');
define('ENTRY_CUSTOMER' , 'Customer Information');
define('ENTRY_CUSTOMER_NAME'); 'Name');
define('ENTRY_CUSTOMER_COMPANY'); 'Company');
define('ENTRY_CUSTOMER_ADDRESS'); 'Address');
define('ENTRY_CUSTOMER_SUBURB'); 'Suburb');
define('ENTRY_CUSTOMER_CITY'); 'City');
define('ENTRY_CUSTOMER_STATE'); 'State');
define('ENTRY_CUSTOMER_POSTCODE'); 'Postcode');
define('ENTRY_CUSTOMER_COUNTRY'); 'Country');
define('ENTRY_SHIPPING_ADDRESS'); 'Shipping Address:');
define('ENTRY_BILLING_ADDRESS'); 'Billing Address:');
define('ENTRY_TELEPHONE_NUMBER' , 'Telephone:');       //- Shortening for modal-display; default is 'Telephone Number:'
define('TEXT_MODAL_ADDRESS_HEADER' , 'Modifying the Order\'s %s'); //- %s is filled in with one the the 'xxx Address:' values, above
define('TEXT_STOREPICKUP_NO_SHIP_ADDR' , 'The order is to be picked up at the store, no shipping address.');
define('TEXT_VIRTUAL_NO_SHIP_ADDR' , 'The order contains only <code>virtual</code> products, no shipping address.');
define('PLEASE_SELECT' , 'Please select');
define('TYPE_BELOW' , 'Type a choice below ...');
// Order Payment Entries and Additional Infomation
define('ENTRY_CREDIT_CARD_TYPE' , 'Credit Card Type:');
define('ENTRY_CREDIT_CARD_OWNER' , 'Credit Card Owner:');
define('ENTRY_CREDIT_CARD_NUMBER' , 'Credit Card Number:');
define('ENTRY_CREDIT_CARD_EXPIRES' , 'Credit Card Expires:');
define('ENTRY_CURRENCY_VALUE' , 'Currency Value (%s):');   //- %s is filled in with the order's currency-code
define('ENTRY_IS_GUEST_ORDER' , 'Guest Order?');
define('ENTRY_PAYMENT_METHOD' , 'Payment Method:');
define('ENTRY_PAYMENT_MODULE' , 'Payment Module Code:');
define('ENTRY_PURCHASE_ORDER_NUMBER' , 'Purchase Order:');
define('ENTRY_IS_WHOLESALE' , 'Wholesale Order?');
define('ENTRY_CUSTOMER_WHOLESALE' , 'Wholesale Customer?');
define('ENTRY_CUSTOMER_TAX_EXEMPT' , 'Tax-Exempt Customer?');
define('TEXT_PANEL_HEADER_ADDL_INFO' , 'Additional Information');
// Order Status Entries
define('BUTTON_ADD_COMMENT' , 'New Comment');
define('BUTTON_ADD_COMMENT_ALT' , 'Add or Review a Comment for This Order');  //- Also used for the modal form's heading!
define('BUTTON_REMOVE' , 'Remove');
define('BUTTON_REVIEW_COMMENT' , 'Review Comment');
define('ENTRY_STATUS' , 'Status:');
define('ENTRY_CURRENT_STATUS' , 'Current Status: ');
define('ENTRY_NOTIFY_CUSTOMER' , 'Notify Customer:');
define('ENTRY_NOTIFY_COMMENTS' , 'Append Comments:');
define('TEXT_COMMENT_ADDED' , 'Comment for the Order');
// Email Entries
define('EMAIL_SEPARATOR' , '------------------------------------------------------');
define('EMAIL_TEXT_COMMENTS_UPDATE' , '<em>The comments for your order are: </em>');
define('EMAIL_TEXT_DATE_ORDERED' , 'Date Ordered:');
define('EMAIL_TEXT_INVOICE_URL' , 'Detailed Invoice:');
define('EMAIL_TEXT_ORDER_NUMBER' , 'Order Number:');
define('EMAIL_TEXT_STATUS_LABEL' , '%s' . "\n\n",
define('EMAIL_TEXT_STATUS_PLEASE_REPLY' , 'Please reply to this email if you have any questions.' . "\n",
define('EMAIL_TEXT_STATUS_UPDATED' , 'Your order has been updated to the following status:' . "\n",
define('EMAIL_TEXT_SUBJECT' , 'Order Update');
// Success, Warning, and Error Messages
define('ERROR_ADDRESS_COUNTRY_NOT_FOUND' , 'Order #%u cannot be edited. One or more of the addresses in the order uses a country unknown to your store; taxes and some shipping modules will likely not function correctly until the issue has been resolved.<br><br>This typically occurs if an admin deletes, renames or disables a country using the <b>Locations / Taxes :: Countries</b> tool. The issue can be corrected by doing one of the following:<ul><li>Add the country (and name) back to your Zen Cart database.</li><li>Re-enable the country temporarily to enable the order to be edited.</li></ul>');
define('ERROR_CANT_DETERMINE_TAX_RATES' , 'Order #%u cannot be edited, since its tax-rates cannot be determined.');
define('ERROR_DISPLAY_PRICE_WITH_TAX' , 'You have configured Zen Cart to display prices with' . (DISPLAY_PRICE_WITH_TAX_ADMIN !== 'true' ? 'out ' : ' ') . 'tax. This page is currently displaying prices with' . (DISPLAY_PRICE_WITH_TAX !== 'true' ? 'out ' : ' ') . 'tax. Orders cannot be edited until the two settings are the same.');
define('ERROR_NO_PRODUCT_TAX_DESCRIPTION' , 'Order #%1$u cannot be edited. No tax description could be found for <em>%2$s</em> tax-rate (%3$s%%).');
define('ERROR_NO_SHIPPING_TAX_DESCRIPTION' , 'Order #%1$u cannot be edited. No tax description could be found for the shipping tax-rate (%2$s%%).');
define('ERROR_ORDER_DOES_NOT_EXIST' , 'The order does not exist.');
define('ERROR_PRODUCT_ATTRIBUTE_DOES_NOT_EXIST' , 'Order #%1$u cannot be edited. The option name/value (%2$s [#%3$u]/%4$s [#%5$u]) no longer applies to product (%6$s [#%7$u]).');
define('ERROR_PRODUCT_DOES_NOT_EXIST' , 'Order #%1$u cannot be edited. The product (%2$s [#%3$u]) no longer exists.');
define('ERROR_SHIPPING_TAX_RATE_MISSING' , 'Order #%u cannot be edited. Its <code>shipping_tax_rate</code> was not previously recorded.');
define('ERROR_ZEN_ADD_TAX_ROUNDING' , "The store's <code>zen_add_tax</code> function must be updated to enable <em>Edit Orders</em>' use.",
define('SUCCESS_ORDER_UPDATED' , 'Order #%u has been successfully updated.');
define('WARNING_INSUFFICIENT_PRODUCT_STOCK' , 'Insufficient stock for <em>%1$s</em>, requested %2$s with %3$s available.');
define('WARNING_NO_UPDATES_TO_ORDER' , 'Nothing to update; no changes to this order were recorded.');
define('WARNING_ORDER_COUPON_BAD' , 'Warning: The coupon code (%s) for the order is no longer valid. Updating the order will remove any deductions associated with that coupon!');
define('WARNING_ORDER_NOT_UPDATED' , 'Warning: Nothing to change. The order was not updated.');
define('WARNING_ORDER_QTY_OVER_MAX' , 'Warning: The quantity requested exceeded the maximum allowed for an order. The quantity added was reduced to the maximum allowed per order.');
// Order Totals Display
define('ERROR_OT_NOT_INSTALLED' , 'The order-total selected (%s) is not installed and cannot be updated.');
define('TEXT_CHOOSE_SHIPPING_MODULE' , 'Choose a shipping module: ');
define('TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER' , 'REMOVE');     //- ALWAYS uppercased!
define('TEXT_COUPON_LINK_TITLE' , 'see the Coupon conditions');
define('TEXT_LABEL_COUPON_CODE' , 'Coupon Code:');
define('TEXT_LABEL_METHOD' , 'Method (required):');
define('TEXT_LABEL_MODULE' , 'Module:');
define('TEXT_LABEL_TITLE' , 'Title:');
define('TEXT_LABEL_VALUE' , 'Value:');
define('TEXT_LABEL_COST_INCL' , 'Cost (incl):');
define('TEXT_LABEL_COST_EXCL' , 'Cost (excl):');
define('TEXT_OT_ADD_MODAL_TITLE' , 'Add Order Total (%s)');
define('TEXT_OT_UPDATE_MODAL_TITLE' , 'Editing Order Total (%s)');    //- %s is filled in with the order-total's class, e.g. ot_shipping
define('TEXT_FIELD_CANNOT_BE_EMPTY' , 'This field cannot be empty.');
// Adding/updating a product
define('ERROR_PRODUCT_NOT_FOUND' , 'The requested product (%s) is not present in the order.');
define('ERROR_MODEL_TOO_LONG' , 'The &quot;model&quot; value must not be longer than %u characters.');
define('ERROR_NAME_TOO_LONG' , 'The &quot;name&quot; value must not be longer than %u characters.');
define('ERROR_NO_MATCHING_PRODUCT' , 'No product was found that matches your request; please try again.');
define('ERROR_PRICE_INVALID' , 'The product price and/or onetime charges must be numeric and greater than or equal to zero.');
define('ERROR_QTY_INSUFFICIENT' , 'Insufficient product quantity (%s) is available.');
define('ERROR_QTY_INVALID' , 'The product quantity must be numeric and greater than or equal to zero.');
define('ERROR_TAX_RATE_INVALID' , 'The tax-rate for the product must be a numeric value between 0 and 100.');
define('TEXT_ADD_NEW_PRODUCT' , 'Add Product');        //- Used for button text
define('TEXT_ATTRIBUTES_ONE_TIME_CHARGE' , 'One Time Charges:');
define('TEXT_ATTRIBUTES_READONLY' , ' (r/o)');
define('TEXT_ATTRIBUTES_UNKNOWN_OPTION_TYPE' , 'Unknown option type (%u)');
define('TEXT_FILE_UPLOAD_NOT_SUPPORTED' , 'FILE UPLOAD NOT SUPPORTED');
define('TEXT_LABEL_NAME' , 'Name:');
define('TEXT_LABEL_MODEL' , 'Model:');
define('TEXT_LABEL_QTY_AVAIL' , 'Qty avail:');
define('TEXT_LABEL_QTY' , 'Qty:');
define('TEXT_PRODUCT_ADD_MODAL_TITLE' , 'Add a Product to the Order');
define('TEXT_PRODUCT_ATTRIBUTES' , 'Product Attributes');
define('TEXT_PRODUCT_BEING_ADDED' , 'The product is being added to the order.');
define('TEXT_PRODUCT_CHOOSE_BY_CATEGORY' , 'Choose by Category');
define('TEXT_PRODUCT_CHOOSE_BY_ID' , 'Choose by Product ID');
define('TEXT_PRODUCT_CHOOSE_BY_SEARCH' , 'Choose by Product Name/Model Search');
define('TEXT_PRODUCT_CHOOSE_SUBTITLE' , 'Choose Product');
define('TEXT_PRODUCT_NEW_MODAL_TITLE' , 'New Product');
define('TEXT_PRODUCT_NEW_SELECT_CHOOSE' , 'Select a product from the list below, then click the &quot;Choose&quot; button.');
define('TEXT_PRODUCT_UPDATE_MODAL_TITLE' , 'Updating a Product');
define('TEXT_SELECT_PRODUCT' , 'Select Product:');
//- These three constants define the message to be recorded for products' changes. All 3
//  use the same sprintf values:
//
// %1$s (qty), %2$s (name), %3$s (model), %4$s (final price), %5$s (tax rate)
//
define('TEXT_STATUS_PRODUCT_ADDED' , 'Added: %1$s x %2$s [%3$s] @ %4$s (tax-rate %5$s%%)');
define('TEXT_STATUS_PRODUCT_CHANGED' , 'Some product details were changed from: %1$s x %2$s [%3$s] @ %4$s (tax-rate %5$s%%)');
define('TEXT_STATUS_PRODUCT_REMOVED' , 'Removed: %1$s x %2$s [%3$s] @ %4$s (tax-rate %5$s%%)');
// Navigation Display
define('BUTTON_TO_LIST' , 'Order List');
define('DETAILS' , 'Details');
define('IMAGE_ORDER_DETAILS' , 'Display Order Details');
define('SELECT_ORDER_LIST' , 'Jump to Order:');
// Required for various added zen_cart functions
define('PULL_DOWN_DEFAULT' , 'Please Choose Your Country');
define('TEXT_UNKNOWN_TAX_RATE_MANUAL' , 'Sales Tax %s%%');
define('TEXT_UNKNOWN_TAX_RATE' , 'Sales Tax');
// Other elements
define('PAYMENT_CALC_METHOD' , 'Choose product-pricing method:');
define('PAYMENT_CALC_MANUAL' , 'Enable editing');
define('PAYMENT_CALC_AUTOSPECIALS' , 'Editing disallowed');
define('PRODUCT_PRICES_CALC_AUTOSPECIALS' , ' <b>Note:</b> Product prices are <em>automatically</em> calculated and cannot be edited.');
define('PRODUCT_PRICES_CALC_MANUAL' , ' <b>Note:</b> Product prices can be edited.');
define('EO_MESSAGE_ADDRESS_UPDATED' , 'The order\'s %1$s address was updated from: ');   //-%1$s: The type of address (see below) that was updated
define('EO_CUSTOMER' , 'customer');
define('EO_BILLING' , 'billing');
define('EO_DELIVERY' , 'delivery');
define('EO_MESSAGE_ORDER_UPDATED' , 'The order was updated via "Edit Orders". ');
define('EO_MESSAGE_PRICING_AUTO' , 'Pricing was automatically calculated, without specials pricing.');
define('EO_MESSAGE_PRICING_AUTOSPECIALS' , 'Pricing was automatically calculated, using specials pricing.');
define('EO_MESSAGE_PRICING_MANUAL' , 'Pricing was supplied manually.');
define('EO_MESSAGE_PRODUCT_ADDED' , 'Added %1$s x "%2$s" to the order');   //-%1$s: The product quantity, %2$s: The product name
define('EO_MESSAGE_PRODUCT_ATTRIBS_ADDED' , '); with options (%s)');
define('TEXT_PANEL_HEADER_UPDATE_INFO' , 'Order-Update Information');