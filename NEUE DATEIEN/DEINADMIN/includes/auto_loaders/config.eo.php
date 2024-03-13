<?php
/**
 * @package Edit Orders for Zen Cart German 
 * Edit Orders plugin by Cindy Merkin a.k.a. lat9 (cindy@vinosdefrutastropicales.com)
 * Copyright (c) 2017-2024 Vinos de Frutas Tropicales
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: config_eo.php 2022-06-10 08:21:16Z webchills $
 */  
 
if (!defined ('IS_ADMIN_FLAG')) { 
    die ('Illegal Access'); 
}

$autoLoadConfig[0][] = [
    'autoType' => 'class',
    'loadFile' => 'mock_cart.php',
    'classPath' => DIR_FS_ADMIN . DIR_WS_CLASSES
];

$autoLoadConfig[200][] = [
    'autoType' => 'init_script',
    'loadFile' => 'init_eo_config.php'
];

// -----
// Instantiate EO's admin observer-class (hopefully!) as the last observer to be loaded.  This
// allows other observers of the ot_shipping's NOTIFY_OT_SHIPPING_TAX_CALCS notification to do
// their thing first.
//
$autoLoadConfig[999][] = [
    'autoType'  => 'class',
    'loadFile'  => 'observers/EditOrdersAdminObserver.php',
    'classPath' => DIR_WS_CLASSES
];
$autoLoadConfig[999][] = [
    'autoType'   => 'classInstantiate',
    'className'  => 'EditOrdersAdminObserver',
    'objectName' => 'EditOrdersAdminObserver'
];
