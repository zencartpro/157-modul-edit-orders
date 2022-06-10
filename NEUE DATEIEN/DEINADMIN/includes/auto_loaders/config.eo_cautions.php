<?php
/**
 * @package Edit Orders for Zen Cart German 
 * Edit Orders plugin by Cindy Merkin a.k.a. lat9 (cindy@vinosdefrutastropicales.com)
 * Copyright (c) 2017-2022 Vinos de Frutas Tropicales
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: config.eo_cautions.php 2022-06-10 08:21:16Z webchills $
 */   
// -----
// This auto-loader loads the Edit Orders additional module that checks to see if conditions
// exist in an order that might lead to "mis-handling".
// 
if (!defined('IS_ADMIN_FLAG')) { 
    die('Illegal Access');
}

$autoLoadConfig[200][] = [
    'autoType' => 'init_script',
    'loadFile' => 'edit_orders_cautions.php'
];