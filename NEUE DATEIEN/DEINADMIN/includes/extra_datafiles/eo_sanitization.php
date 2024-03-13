<?php
/**
 * @package Edit Orders for Zen Cart German 
 * Edit Orders plugin by Cindy Merkin a.k.a. lat9 (cindy@vinosdefrutastropicales.com)
 * Copyright (c) 2017-2024 Vinos de Frutas Tropicales
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: eo_sanitizatiom.php 2024-03-13 20:08:16Z webchills $
 */  
 
$eo_sanitizer = AdminRequestSanitizer::getInstance();

// -----
// This first group of variables is used when adding a product to the order, allowing these
// $_POSTed arrays to be permitted.
//
$eo_group = [
    'update_products' => [
        'sanitizerType' => 'MULTI_DIMENSIONAL',
        'method' => 'post',
        'pages' => ['edit_orders'],
        'params' => [
            'update_products' => ['sanitizerType' => 'CONVERT_INT'],
            'qty' => ['sanitizerType' => 'FLOAT_VALUE_REGEX'],
            'name' => ['sanitizerType' => 'PRODUCT_DESC_REGEX'],
            'onetime_charges' => ['sanitizerType' => 'FLOAT_VALUE_REGEX'],
            'attr' => [
                'sanitizerType' => 'MULTI_DIMENSIONAL',
                'params' => [
                    'attr' => ['sanitizerType' => 'CONVERT_INT'],
                    'value' => ['sanitizerType' => 'PRODUCT_DESC_REGEX'],
                    'type' => ['sanitizerType' => 'CONVERT_INT'],
                ],
            ],
            'model' => ['sanitizerType' => 'WORDS_AND_SYMBOLS_REGEX'],
            'tax' => ['sanitizerType' => 'FLOAT_VALUE_REGEX'],
            'final_price' => ['sanitizerType' => 'FLOAT_VALUE_REGEX'],
        ],
    ],
    'id' => [
        'sanitizerType' => 'MULTI_DIMENSIONAL',
        'method' => 'post',
        'pages' => ['edit_orders'],
        'params' => [
            'id' => ['sanitizerType' => 'CONVERT_INT'],
            'type' => ['sanitizerType' => 'CONVERT_INT'],
            'value' => ['sanitizerType' => 'PRODUCT_DESC_REGEX'],
        ],
    ],
];
$eo_sanitizer->addComplexSanitization($eo_group);

// -----
// This group of $_POSTed variables is associated with the customer/billing/delivery address-updates.
// Without this sanitization, even simple non-alphanumeric characters (like " and &) are disallowed.
//
$eo_addr_group = [
    'update_customer_name',
    'update_customer_company',
    'update_customer_suburb',
    'update_customer_city',
    'update_customer_state',
    'update_billing_name',
    'update_billing_company',
    'update_billing_suburb',
    'update_billing_city',
    'update_billing_state',
    'update_delivery_name',
    'update_delivery_company',
    'update_delivery_suburb',
    'update_delivery_city',
    'update_delivery_state',
];
$eo_sanitizer->addSimpleSanitization('WORDS_AND_SYMBOLS_REGEX', $eo_addr_group);
