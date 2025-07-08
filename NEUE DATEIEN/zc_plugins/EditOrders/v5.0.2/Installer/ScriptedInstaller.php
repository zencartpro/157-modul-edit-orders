<?php
/**
 * @package Edit Orders for Zen Cart German 1.5.7j
 * Zen Cart German Specific
 * Edit Orders plugin by Cindy Merkin a.k.a. lat9 (cindy@vinosdefrutastropicales.com)
 * Copyright (c) 2017-2025 Vinos de Frutas Tropicales
 * @copyright Copyright 2003-2025 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: ScriptedInstaller.php 2025-07-08 08:40:16Z webchills $
 */  
use Zencart\PluginSupport\ScriptedInstaller as ScriptedInstallBase;

class ScriptedInstaller extends ScriptedInstallBase
{
    private string $configGroupTitle = 'Edit Orders';

    protected function executeInstall()
    {
        if (!$this->purgeOldFiles()) {
            return false;
        }

        // -----
        // First, determine the configuration-group-id and install the settings.
        //
        $cgi = $this->getOrCreateConfigGroupId(
            $this->configGroupTitle,
            $this->configGroupTitle . ' Settings'
        );

        $sql =
            "INSERT IGNORE INTO " . TABLE_CONFIGURATION . " 
                (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added, use_function, set_function)
             VALUES
                ('Addresses, Display Order', 'EO_ADDRESSES_DISPLAY_ORDER', 'CSB', 'In what order, left-to-right, should <em>Edit Orders</em> display an order\'s addresses?  Choose <b>CSB</b> to display <em>Customer</em>, <em>Shipping</em> and then <em>Billing</em>; choose <b>CBS</b> to display <em>Customer</em>, <em>Billing</em> and then <em>Shipping</em>.', $cgi, 1, now(), NULL, 'zen_cfg_select_option([\'CSB\', \'CBS\'],'),

                ('Strip tags from the shipping module name?', 'EO_SHIPPING_DROPDOWN_STRIP_TAGS', 'true', 'When enabled, HTML and PHP tags present in the title of a shipping module are removed from the text displayed in the shipping dropdown menu.<br><br>If partial or broken tags are present in the title it may result in the removal of more text than expected. If this happens, you will need to update the affected shipping module(s) or disable this option.', $cgi, 11, now(), NULL, 'zen_cfg_select_option([\'true\', \'false\'],'),

                ('Product Price Calculation &mdash; Method', 'EO_PRODUCT_PRICE_CALC_METHOD', 'AutoSpecials', 'Choose the <em>method</em> that &quot;EO&quot; uses to calculate product prices when an order is updated, one of:<ol><li><b>AutoSpecials</b>: Each product-price is re-calculated as if placing the order on the storefront. If your products have attributes, this enables changes to a product\'s attributes to automatically update the associated product-price.</li><li><b>Manual</b>: Each product-price is based on the <b><i>admin-entered price</i></b> for the product.</li><li><b>Choose</b>: The product-price calculation method varies on an order-by-order basis, via the &quot;tick&quot; of a checkbox.  The default method used  is defined by the <em>Product Price Calculation &mdash; Default</em> setting.</li></ol>', $cgi, 20, now(), NULL, 'zen_cfg_select_option([\'AutoSpecials\', \'Manual\', \'Choose\'],'),

                ('Product Price Calculation &mdash; Default', 'EO_PRODUCT_PRICE_CALC_DEFAULT', 'AutoSpecials', 'If the product price-calculation method is <b>Choose</b>, what method should be used as the <em>default</em> method?', $cgi, 24, now(), NULL, 'zen_cfg_select_option([\'AutoSpecials\', \'Manual\'],'),

                ('Status-history Display Order', 'EO_STATUS_HISTORY_DISPLAY_ORDER', 'Asc', 'Choose the way that <em>Edit Orders</em> displays an order\'s status-history records, either as-recorded (<b>Asc</b>) or most-recent first (<b>Desc</b>).', $cgi, 30, now(), NULL, 'zen_cfg_select_option([\'Asc\', \'Desc\'],'),

                ('Status-update: Customer Notification Default', 'EO_CUSTOMER_NOTIFICATION_DEFAULT', 'No Email', 'Choose the default used for the radio-buttons that identify whether the customer receives notification when a  comment is added to the order.', $cgi, 40, now(), NULL, 'zen_cfg_select_option([\'Email\', \'No Email\', \'Hidden\'],'),

                ('Show Edit-Order Icon on Orders\' Listing?', 'EO_SHOW_EDIT_ORDER_ICON', 'Yes', 'Should the edit-icon be shown for each order on the orders\' listing?  Default: <b>Yes</b>', $cgi, 50, now(), NULL, 'zen_cfg_select_option([\'Yes\', \'No\'],'),

                ('Edit Button Location on Sidebox', 'EO_SHOW_EDIT_ORDER_BUTTON', 'Both', 'At which position(s) should the <em>Edit</em> button be displayed on the currently-selected order\'s sidebox display, relative to the order\'s information?  Default: <b>Both</b>', $cgi, 52, now(), NULL, 'zen_cfg_select_option([\'Both\', \'Top Only\', \'Bottom Only\', \'Neither\'],'),

                ('Debug Action Level', 'EO_DEBUG_ACTION_LEVEL', '0', 'When enabled when actions are performed by Edit Orders additional debugging information will be stored in a log file.<br><br>Enabling debugging will result in a large number of created log files and may adversely affect server performance. Only enable this if absolutely necessary!', $cgi, 999, now(), NULL, 'eo_debug_action_level_list(')";
        $this->executeInstallerSql($sql);   
        
         // -----
        // Insert configuration_language settings for Zen Cart German
        //
            
        $sql2 =
        "REPLACE INTO ".TABLE_CONFIGURATION_LANGUAGE." 
        (configuration_title, configuration_key, configuration_description, configuration_language_id)
        VALUES
				('Edit Orders - Version', 'EO_VERSION', 'Die derzeit installierte Edit Orders Version<br>', 43),
				('Adressen - Anzeigereihenfolge', 'EO_ADDRESSES_DISPLAY_ORDER', 'In welcher Reihenfolge, von links nach rechts, soll <em>Edit Orders</em> die Adressen einer Bestellung anzeigen?  Wählen Sie <b>CSB</b>, um <em>Kunde</em>, <em>Versand</em> und dann <em>Rechnung</em> anzuzeigen; wählen Sie <b>CBS</b>, um <em>Kunde</em>, <em>Rechnung</em> und dann <em>Versand</em> anzuzeigen.<br>', 43),
				('Tags aus dem Versandmodulnamen entfernen?', 'EO_SHIPPING_DROPDOWN_STRIP_TAGS', 'Manche Versandmodule verwenden HTML oder PHP Tags in ihrem Namen. Lassen Sie diese Option aktiviert, um solche HTML und PHP Tags beim Bearbeiten einer Bestellung aus dem Auswahl Dropdown zu entfernen, sonst wird das unschön dargestellt.<br/><br/>Sollten bestimmte Versandmodule im Dropdown trotzdem seltsam angezeigt werden, dann enthält der Titel wohl unvollständige Tags und sollte im Versandmodul überarbeitet werden.', 43),
				('Produktpreisberechnung &mdash; Methode', 'EO_PRODUCT_PRICE_CALC_METHOD', 'Wählen Sie die <em>Methode</em>, die &quot;EO&quot; verwendet, um Produktpreise zu berechnen, wenn eine Bestellung aktualisiert wird, aus folgenden Möglichkeiten:<ol><li><b>Auto</b>: Jeder Produktpreis wird neu berechnet.  Wenn Ihre Produkte Attribute haben, ermöglicht dies Änderungen an den Attributen eines Produkts, um den zugehörigen Produktpreis automatisch zu aktualisieren.</li><li><li><b>Manuell (Manual)</b>: Jeder Produktpreis basiert auf dem <b><i>im Admin eingesetzten Preis</i></b> für das Produkt.</li><li><li><b><b>Wählen (Choose)</b>: Die Methode der Produktpreisberechnung variiert jedesmal durch das &quot;Ankreuzen&quot; eines Kontrollkästchens.  Die verwendete Standardmethode (<em>Auto</em> vs. <em>Manuell</em> ist durch die Einstellung <em>Produktpreiskalkulation &mdash; Standard</em> definiert.<br>', 43),
				('Produktpreisberechnung &mdash; Default', 'EO_PRODUCT_PRICE_CALC_DEFAULT', 'Wenn die Produktpreiskalkulationsmethode <b>Wählen</b> ist, welche Methode soll dann als <em>Default</em> Methode verwendet werden?<br>', 43),
				('Status Historie - Anzeigereihenfolge', 'EO_STATUS_HISTORY_DISPLAY_ORDER', 'Wie soll <em>Edit Orders</em> die Bestellstatus Historie Einträge einer Bestellung anzeigen? Nach Erstelldatum aufsteigend (<b>Asc</b>) oder absteigend (<b>Desc</b>)?<br>', 43),
				('Status Update - Voreinstellung für Kundenbenachrichtigung', 'EO_CUSTOMER_NOTIFICATION_DEFAULT', 'Wählen Sie die Voreinstellung für die Radio Buttons, ob der Kunde eine Benachrichtigung erhalten soll, wenn ein Kommentar zur Bestellung hinzugefügt wird.<br>', 43),
				('Edit Orders Icon in der Bestellübersicht', 'EO_SHOW_EDIT_ORDER_ICON', 'Soll das Edit Orders bearbeiten Icon bei jeder Bestellung in der Bestellübersicht angezeigt werden? Voreinstellung: <b>No</b><br>', 43),
				('Edit Orders Button in der Sidebox', 'EO_SHOW_EDIT_ORDER_BUTTON', 'An welcher Position soll die Schaltfläche <em>Bearbeiten</em> in der Seitenanzeige der aktuell ausgewählten Bestellung relativ zu den Informationen der Bestellung angezeigt werden?  Voreinstellung: <b>Both</b><br>', 43),
				('Debug Level', 'EO_DEBUG_ACTION_LEVEL', 'Falls aktiviert werden bei jeder Edit Orders Änderung umfangreiche Debug Infos in Logfiles geschrieben.<br/><br/><b>Nur zur Fehleranalyse aktivieren!</b><br/><br>', 43)";
				
				 $this->executeInstallerSql($sql2);

        // -----
        // Record the plugin's base tools in the admin menus.
        //
        if (!zen_page_key_exists('editOrders')) {
            zen_register_admin_page('editOrders', 'BOX_CONFIGURATION_EDIT_ORDERS', 'FILENAME_EDIT_ORDERS', '', 'customers', 'N');
        }
        if (!zen_page_key_exists('configEditOrders')) {
            zen_register_admin_page('configEditOrders', 'BOX_CONFIGURATION_EDIT_ORDERS', 'FILENAME_CONFIGURATION', "gID=$cgi", 'configuration', 'Y');
        }

        // -----
        // If a previous (non-encapsulated) version of the plugin is currently installed,
        // perform any version-specific updates needed.
        //
        if (defined('EO_VERSION')) {
            $this->updateFromNonEncapsulatedVersion();
        }

        // -----
        // Remove the no-longer-used configuration setting.
        //
        $this->executeInstallerSql(
            "DELETE FROM " . TABLE_CONFIGURATION . "
              WHERE configuration_key = 'EO_TOTAL_RESET_DEFAULT'
              LIMIT 1"
        );
        $this->executeInstallerSql(
            "DELETE FROM " . TABLE_CONFIGURATION_LANGUAGE . "
              WHERE configuration_key = 'EO_TOTAL_RESET_DEFAULT'
              LIMIT 1"
        );
        
        // -----
        // Set country names to German ones
        //
        $this->executeInstallerSql(
            "UPDATE " . TABLE_COUNTRIES . " c  JOIN " . TABLE_COUNTRIES_NAME . " cn ON c.countries_id = cn.countries_id SET c.countries_name = cn.countries_name WHERE cn.language_id = 43;"
        );

        return true;
    }

    // -----
    // Not used, initially, but included for the possibility of future upgrades!
    //
    // Note: This (https://github.com/zencart/zencart/pull/6498) Zen Cart PR must
    // be present in the base code or a PHP Fatal error is generated due to the
    // function signature difference.
    //
    protected function executeUpgrade($oldVersion)
    {
    }

    protected function executeUninstall()
    {
        zen_deregister_admin_pages([
            'editOrders',
            'configEditOrders',
        ]);

        $this->deleteConfigurationGroup($this->configGroupTitle, true);

        // -----
        // Since ot_onetime_discount and ot_misc_cost are distributed as part
        // of this plugin, when EO is uninstalled any configuration settings
        // for those order-total modules are also removed.
        //
        $this->executeInstallerSql(
            "DELETE FROM " . TABLE_CONFIGURATION . "
              WHERE configuration_key LIKE 'MODULE\_ORDER\_TOTAL\_ONETIME_DISCOUNT\_%'
                 OR configuration_key LIKE 'MODULE\_ORDER\_TOTAL\_MISC\_COST\_%'"
        );
        $this->executeInstallerSql(
            "DELETE FROM " . TABLE_CONFIGURATION_LANGUAGE . "
              WHERE configuration_key LIKE 'MODULE\_ORDER\_TOTAL\_ONETIME_DISCOUNT\_%'
                 OR configuration_key LIKE 'MODULE\_ORDER\_TOTAL\_MISC\_COST\_%'"
        );
    }

    protected function purgeOldFiles(): bool
    {
        // -----
        // First, look for and remove the non-encapsulated versions' admin-directory
        // files.
        //
        $files_to_check = [
            '' => [
                'edit_orders.php',
            ],
            'includes/auto_loaders/' => [
                'config.eo.php',
                'config.eo_cautions.php',
            ],
            'includes/classes/' => [
                'attributes.php',
                'editOrders.php',
                'EditOrdersOtShippingStub.php',
                'EditOrdersQueryCache.php',
                'mock_cart.php',
                'observers/EditOrdersAdminObserver.php',
            ],
            'includes/css/' => [
                'edit_orders.css',
            ],
            'includes/extra_datafiles/' => [
                'edit_orders_defines.php',
                'eo_sanitization.php',
            ],
            'includes/functions/extra_functions/' => [
                'edit_orders_functions.php',
            ],
            'includes/init_includes/' => [
                'edit_orders_cautions.php',
                'init_eo_config.php',
            ],
            'includes/languages/english/' => [
                'extra_definitions/edit_orders_extra_definitions.php',                
                'edit_orders.php',                
            ],
            'includes/languages/german/' => [
                'extra_definitions/edit_orders_extra_definitions.php',
                'edit_orders.php',                
            ],
            'includes/modules/edit_orders/' => [
                'eo_add_prdct_action_display.php',
                'eo_add_prdct_action_processing.php',
                'eo_common_address_format.php',
                'eo_edit_action_addresses_display.php',
                'eo_edit_action_display.php',
                'eo_edit_action_osh_table_display.php',
                'eo_edit_action_ot_table_display.php',
                'eo_update_order_action_processing.php',
                'eo_navigation.php',
            ],
        ];

        $errorOccurred = false;
        foreach ($files_to_check as $dir => $files) {
            $current_dir = DIR_FS_ADMIN . $dir;
            foreach ($files as $next_file) {
                $current_file = $current_dir . $next_file;
                if (file_exists($current_file)) {
                    $result = unlink($current_file);
                    if (!$result && file_exists($current_file)) {
                        $errorOccurred = true;
                        $this->errorContainer->addError(
                            0,
                            sprintf(ERROR_UNABLE_TO_DELETE_FILE, $current_file),
                            false,
                            // this str_replace has to do DIR_FS_ADMIN before CATALOG because catalog is contained within admin, so results are wrong.
                            // also, '[admin_directory]' is used to obfuscate the admin dir name, in case the user copy/pastes output to a public forum for help.
                            sprintf(ERROR_UNABLE_TO_DELETE_FILE, str_replace([DIR_FS_ADMIN, DIR_FS_CATALOG], ['[admin_directory]/', ''], $current_file))
                        );
                    }
                }
            }
        }

        // -----
        // Next, locate and attempt to remove the storefront order_total files.
        //
        $files_to_check = [
            'includes/languages/english/modules/order_total/' => [                
                'ot_misc_cost.php',
                'ot_onetime_discount.php',
            ],
            'includes/languages/german/modules/order_total/' => [
                'ot_misc_cost.php',
                'ot_onetime_discount.php',
            ],
            'includes/modules/order_total/' => [
                'ot_misc_cost.php',
                'ot_onetime_discount.php',
            ],
        ];
        foreach ($files_to_check as $dir => $files) {
            $current_dir = DIR_FS_CATALOG . $dir;
            foreach ($files as $next_file) {
                $current_file = $current_dir . $next_file;
                if (file_exists($current_file)) {
                    $result = unlink($current_file);
                    if (!$result && file_exists($current_file)) {
                        $errorOccurred = true;
                        $this->errorContainer->addError(
                            0,
                            sprintf(ERROR_UNABLE_TO_DELETE_FILE, $current_file),
                            false,
                            // this str_replace has to do DIR_FS_ADMIN before CATALOG because catalog is contained within admin, so results are wrong.
                            // also, '[admin_directory]' is used to obfuscate the admin dir name, in case the user copy/pastes output to a public forum for help.
                            sprintf(ERROR_UNABLE_TO_DELETE_FILE, str_replace([DIR_FS_ADMIN, DIR_FS_CATALOG], ['[admin_directory]/', ''], $current_file))
                        );
                    }
                }
            }
        }

        return !$errorOccurred;
    }

    // -----
    // Ensure that the sort-order of EO's configuration settings are as provided on
    // the initial install and remove any no-longer-used settings.
    //
    protected function updateFromNonEncapsulatedVersion(): void
    {
        $key_to_sort = [
            'EO_ADDRESSES_DISPLAY_ORDER' => 1,
            'EO_SHIPPING_DROPDOWN_STRIP_TAGS' => 11,
            'EO_PRODUCT_PRICE_CALC_METHOD' => 20,
            'EO_PRODUCT_PRICE_CALC_DEFAULT' => 24,
            'EO_STATUS_HISTORY_DISPLAY_ORDER' => 30,
            'EO_CUSTOMER_NOTIFICATION_DEFAULT' => 40,
            'EO_SHOW_EDIT_ORDER_ICON' => 50,
            'EO_SHOW_EDIT_ORDER_BUTTON' => 52,
            'EO_DEBUG_ACTION_LEVEL' => 999,
        ];
        foreach ($key_to_sort as $key => $sort) {
            $this->updateConfigurationKey($key, ['sort_order' => $sort]);
        }

        $this->executeInstallerSql(
            "DELETE FROM " . TABLE_CONFIGURATION . "
              WHERE configuration_key IN (
                'EO_VERSION',
                'EO_SHIPPING_TAX',
                'EO_MOCK_SHOPPING_CART',
                'EO_INIT_FILE_MISSING'
              )"
        );
        
        $this->executeInstallerSql(
            "DELETE FROM " . TABLE_CONFIGURATION_LANGUAGE . "
              WHERE configuration_key IN (
                'EO_VERSION',
                'EO_SHIPPING_TAX',
                'EO_MOCK_SHOPPING_CART',
                'EO_INIT_FILE_MISSING'
              )"
        );

        // -----
        // EO 5.0.0 removes support for 'Auto' pricing updates.
        //
        $this->updateConfigurationKey('EO_PRODUCT_PRICE_CALC_METHOD', [
            'configuration_description' =>
                'Choose the <em>method</em> that &quot;EO&quot; uses to calculate product prices when an order is updated, one of:<ol><li><b>AutoSpecials</b>: Each product-price is re-calculated as if placing the order on the storefront. If your products have attributes, this enables changes to a product\'s attributes to automatically update the associated product-price.</li><li><b>Manual</b>: Each product-price is based on the <b><i>admin-entered price</i></b> for the product.</li><li><b>Choose</b>: The product-price calculation method varies on an order-by-order basis, via the &quot;tick&quot; of a checkbox.  The default method used is defined by the <em>Product Price Calculation &mdash; Default</em> setting.</li></ol>',
            'set_function' => 'zen_cfg_select_option([\'AutoSpecials\', \'Manual\', \'Choose\'],'
        ]);
        if (defined('EO_PRODUCT_PRICE_CALC_METHOD') && EO_PRODUCT_PRICE_CALC_METHOD === 'Auto') {
            $this->updateConfigurationKey('EO_PRODUCT_PRICE_CALC_METHOD', [
                'configuration_value' => 'AutoSpecials',
            ]);
        }

        $this->updateConfigurationKey('EO_PRODUCT_PRICE_CALC_DEFAULT', [
            'set_function' => 'zen_cfg_select_option([\'AutoSpecials\', \'Manual\'],',
        ]);
        if (defined('EO_PRODUCT_PRICE_CALC_DEFAULT') && EO_PRODUCT_PRICE_CALC_DEFAULT === 'Auto') {
            $this->updateConfigurationKey('EO_PRODUCT_PRICE_CALC_DEFAULT', [
                'configuration_value' => 'AutoSpecials',
            ]);
        }
    }
}
