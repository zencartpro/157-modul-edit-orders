<?php
/**
 * @package Edit Orders for Zen Cart German 
 * Edit Orders plugin by Cindy Merkin a.k.a. lat9 (cindy@vinosdefrutastropicales.com)
 * Copyright (c) 2017-2022 Vinos de Frutas Tropicales
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: eo_navigation.php 2022-06-10 08:21:16Z webchills $
 */ 
//
// This module is loaded in global scope by /admin/edit_orders.php.  Functionality
// was previously provided by the editOrders class' orderNavigation method.
//
$order_list_button = '<a role="button" class="btn btn-default" href="' . zen_href_link(FILENAME_ORDERS) . '"><i class="fa fa-th-list" aria-hidden="true">&nbsp;</i>' . BUTTON_TO_LIST . '</a>';

$prev_button = '';
$result = $db->Execute(
    "SELECT orders_id
       FROM " . TABLE_ORDERS . "
      WHERE orders_id < $oID
      ORDER BY orders_id DESC
      LIMIT 1"
);
if (!$result->EOF) {
    $button_link = zen_href_link(FILENAME_ORDERS, 'oID=' . $result->fields['orders_id'] . '&action=edit');
    $prev_button = '<a role="button" class="btn btn-default" href="' . $button_link . '">&laquo; ' . $result->fields['orders_id'] . '</a>';
}

$next_button = '';
$result = $db->Execute(
    "SELECT orders_id
       FROM " . TABLE_ORDERS . "
      WHERE orders_id > $oID
      ORDER BY orders_id ASC
      LIMIT 1"
);
if (!$result->EOF) {
    $button_link = zen_href_link(FILENAME_ORDERS, 'oID=' . $result->fields['orders_id'] . '&action=edit');
    $next_button = '<a role="button" class="btn btn-default" href="' . $button_link . '">' . $result->fields['orders_id'] . ' &raquo;</a>';
}
$left_side_buttons = '';
$right_side_buttons = '';
$zco_notifier->notify('NOTIFY_ADMIN_ORDERS_UPPER_BUTTONS', $oID, $left_side_buttons, $right_side_buttons);
?>
<div class="row">
    <div class="col-sm-3 col-lg-4 text-left noprint">
        <?php echo $left_side_buttons; ?>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="input-group">
            <span class="input-group-btn"><?php echo $prev_button; ?></span>
<?php
echo zen_draw_form('input_oid', FILENAME_ORDERS, '', 'get', '', true);
echo zen_draw_input_field('oID', '', 'class="form-control" placeholder="' . SELECT_ORDER_LIST . '"', '', 'number');
echo zen_draw_hidden_field('action', 'edit');
echo '</form>';
?>
            <div class="input-group-btn"><?php echo $next_button . $order_list_button; ?>
                <button type="button" class="btn btn-default" onclick="history.back()"><i class="fa fa-undo" aria-hidden="true">&nbsp;</i> <?php echo IMAGE_BACK; ?></button>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-lg-4 text-right noprint">
        <?php echo $right_side_buttons; ?>
    </div>
</div>
