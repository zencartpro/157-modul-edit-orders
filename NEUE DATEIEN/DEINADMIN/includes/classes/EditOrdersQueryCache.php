<?php
/**
 * @package Edit Orders for Zen Cart German 
 * Edit Orders plugin by Cindy Merkin a.k.a. lat9 (cindy@vinosdefrutastropicales.com)
 * Copyright (c) 2017-2024 Vinos de Frutas Tropicales
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: EditOrdersQueryCache.php 2024-03-13 20:21:16Z webchills $
 */  
 
class EditOrdersQueryCache
{
    protected
        $queries;

    function __construct()
    {
        $this->queries = [];
    }

    // cache queries if and only if query is 'SELECT' statement
    // returns:
    //	TRUE - if and only if query has been stored in cache
    //	FALSE - otherwise
    // -----
    // For Edit Orders, no caching ...
    //
    function cache($query, $result) 
    {
        return false;
    }

    function getFromCache($query) 
    {
        trigger_error('Invalid call received during Edit Orders processing', E_USER_ERROR);
        exit();
    }

    function inCache($query) 
    {
        return false;
    }

    function isSelectStatement($q) 
    {
        return false;
    }

    function reset($query) 
    {
        if ('ALL' === $query) {
            $this->queries = [];
            return false;
        }
        unset($this->queries[$query]);
    }
}
