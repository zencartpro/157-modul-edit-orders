<?php
/**
 * @package Edit Orders for Zen Cart German 
 * Edit Orders plugin by Cindy Merkin a.k.a. lat9 (cindy@vinosdefrutastropicales.com)
 * Copyright (c) 2017-2022 Vinos de Frutas Tropicales
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: config.vinos_common_admin.php 2022-06-10 08:21:16Z webchills $
 */  
// -----
// Supports loading the "Vinos" namespace for classes provided by lat9 (@vinosdefrutastropicales.com).
// Copyright (C) 2017, Vinos de Frutas Tropicales.
//
// v1.0.0 ... 2017-02-22
//
if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}

// -----
// Instantiate and initialize the auto-loader.
//
$autoLoadConfig[0][] = array (
    'autoType' => 'require',
    'loadFile' => DIR_FS_CATALOG . DIR_WS_INCLUDES . 'init_includes/init_vinos_autoload.php'
);
