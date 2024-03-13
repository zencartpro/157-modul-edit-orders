<?php
/**
 * @package Edit Orders for Zen Cart German 
 * Edit Orders plugin by Cindy Merkin a.k.a. lat9 (cindy@vinosdefrutastropicales.com)
 * Copyright (c) 2017-2024 Vinos de Frutas Tropicales
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: EditOrdersOtShippingStub.php 2022-06-10 08:21:16Z webchills $
 */  
// -----
// Part of the 'Edit Orders' plugin, providing a 'stub' class for the order's shipping-method to
// prevent PHP Notices being issued from the ot_shipping.php class' constructor.
//
// Copyright (C) 2020, Vinos de Frutas Tropicales.
//
if (!defined('IS_ADMIN_FLAG') || IS_ADMIN_FLAG !== true) {
    die('Illegal Access');
}

// -----
// The ot_shipping class constructor checks to see if the active shipping-method is to be taxed.
// This 'stub' class indicates that there is no tax on shipping, enabling the EO handling to allow
// an admin to override the shipping tax-rate.
//
// The class is instantiated by EO's admin observer (EditOrdersAdminObserver.php).
//
class EditOrdersOtShippingStub extends base
{
    public $tax_class = 0;
    public function __construct()
    {
    }
}
