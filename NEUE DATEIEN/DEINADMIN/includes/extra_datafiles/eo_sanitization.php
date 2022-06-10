<?php
/**
 * @package Edit Orders for Zen Cart German 
 * Edit Orders plugin by Cindy Merkin a.k.a. lat9 (cindy@vinosdefrutastropicales.com)
 * Copyright (c) 2017-2022 Vinos de Frutas Tropicales
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: eo_sanitizatiom.php 2022-06-10 08:21:16Z webchills $
 */  
 
if (class_exists('AdminRequestSanitizer') && method_exists('AdminRequestSanitizer', 'getInstance')) {
    $eo_sanitizer = AdminRequestSanitizer::getInstance();
    
    // -----
    // This first group of variables is used when adding a product to the order, allowing these
    // $_POSTed arrays to be permitted.
    //
    $eo_group = array(
        'update_products' => array(
            'sanitizerType' => 'MULTI_DIMENSIONAL',
            'method' => 'post',
            'pages' => array('edit_orders'),
            'params' => array(
                'update_products' => array('sanitizerType' => 'CONVERT_INT'),
                'qty' => array('sanitizerType' => 'FLOAT_VALUE_REGEX'),
                'name' => array('sanitizerType' => 'PRODUCT_DESC_REGEX'),
                'onetime_charges' => array('sanitizerType' => 'FLOAT_VALUE_REGEX'),
                'attr' => array(
                    'sanitizerType' => 'MULTI_DIMENSIONAL',
                    'params' => array(
                        'attr' => array('sanitizerType' => 'CONVERT_INT'),
                        'value' => array('sanitizerType' => 'PRODUCT_DESC_REGEX'),
                        'type' => array('sanitizerType' => 'CONVERT_INT')
                    )
                ),
                'model' => array('sanitizerType' => 'WORDS_AND_SYMBOLS_REGEX'),
                'tax' => array('sanitizerType' => 'FLOAT_VALUE_REGEX'),
                'final_price' => array('sanitizerType' => 'FLOAT_VALUE_REGEX'),
            )
        ),
        'id' => array(
            'sanitizerType' => 'MULTI_DIMENSIONAL',
            'method' => 'post',
            'pages' => array('edit_orders'),
            'params' => array(
                'id' => array('sanitizerType' => 'CONVERT_INT'),
                'type' => array('sanitizerType' => 'CONVERT_INT'),
                'value' => array('sanitizerType' => 'PRODUCT_DESC_REGEX'),
            ),
        )
    );
    $eo_sanitizer->addComplexSanitization($eo_group);
    
    // -----
    // This group of $_POSTed variables is associated with the customer/billing/delivery address-updates.
    // Without this sanitization, even simple non-alphanumeric characters (like " and &) are disallowed.
    //
    $eo_addr_group = array(
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
    );
    $eo_sanitizer->addSimpleSanitization('WORDS_AND_SYMBOLS_REGEX', $eo_addr_group);
}
