<?php
define('HEADING_TITLE', 'Bestellung ändern');
define('HEADING_TITLE_SEARCH', 'Bestellnummer:');
define('HEADING_TITLE_STATUS', 'Status:');
define('HEADING_TITLE_ADD_PRODUCT', 'Artikel zur Bestellung hinzufügen');
// Table Headings
define('TABLE_HEADING_STATUS_HISTORY', 'Bestellhistorie &amp; Kommentare');
define('TABLE_HEADING_COMMENTS', 'Kommentare');
define('TABLE_HEADING_CUSTOMERS', 'Kunden');
define('TABLE_HEADING_ORDER_TOTAL', 'Gesamtsumme');
define('TABLE_HEADING_DATE_PURCHASED', 'Bestelldatum');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Aktion');
define('TABLE_HEADING_QUANTITY', 'Menge');

define('TABLE_HEADING_PRODUCTS', 'Artikel');
define('TABLE_HEADING_TAX', 'Steuer');
define('TABLE_HEADING_TOTAL', 'Gesamt');
define('TABLE_HEADING_UNIT_PRICE', 'Einzelpreis');
define('TABLE_HEADING_UNIT_PRICE_NET', 'Einzelpreis (Netto)');
define('TABLE_HEADING_UNIT_PRICE_GROSS', 'Einzelpreis (Brutto)');
define('TABLE_HEADING_TOTAL_PRICE', 'Gesamtpreis');
define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Kunde benachrichtigt');
define('TABLE_HEADING_DATE_ADDED', 'hinzugefügt am');
define('TABLE_HEADING_UPDATED_BY', 'aktualisiert von');
// Order Address Entries
define('ENTRY_CUSTOMER', 'Adresse des Kunden:');
define('ENTRY_CUSTOMER_NAME', 'Name');
define('ENTRY_CUSTOMER_COMPANY', 'Firma');
define('ENTRY_CUSTOMER_ADDRESS', 'Adresse');
define('ENTRY_CUSTOMER_SUBURB', 'Adresszeile 2');
define('ENTRY_CUSTOMER_CITY', 'Ort');
define('ENTRY_CUSTOMER_STATE', 'Bundesland');
define('ENTRY_CUSTOMER_POSTCODE', 'PLZ');
define('ENTRY_CUSTOMER_COUNTRY', 'Land');
define('ENTRY_SHIPPING_ADDRESS', 'Lieferadresse:');
define('ENTRY_BILLING_ADDRESS', 'Rechnungsadresse:');
// Order Payment Entries
define('ENTRY_PAYMENT_METHOD', 'Zahlungsart:');
define('ENTRY_CREDIT_CARD_TYPE', 'Credit Card Type:');
define('ENTRY_CREDIT_CARD_OWNER', 'Credit Card Owner:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Credit Card Number:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Credit Card Expires:');
define('ENTRY_UPDATE_TO_CC', 'Geben Sie <strong>Credit Card</strong> ein um das CC Feld zu sehen.');
define('ENTRY_UPDATE_TO_CK', 'Geben Sie die Zahlungsart dieser Bestellung ein, um das CC Feld auszublenden. (<strong>PayPal, Check/Money Order, Western Union, etc</strong>)');
define('ENTRY_PURCHASE_ORDER_NUMBER', 'Bestellnummer:');
// Order Status Entries
define('ENTRY_STATUS', 'Status:');
define('ENTRY_CURRENT_STATUS', 'Aktueller Status: ');
define('ENTRY_NOTIFY_CUSTOMER', 'Kunden benachrichtigen:');
define('ENTRY_NOTIFY_COMMENTS', 'Kommentare hinzufügen:');
// Email Entries
define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Bestellstatus aktualisiert');
define('EMAIL_TEXT_ORDER_CUSTOMER_GENDER_MALE', 'Sehr geehrter Herr ');
define('EMAIL_TEXT_ORDER_CUSTOMER_GENDER_FEMALE', 'Sehr geehrte Frau ');
define('EMAIL_TEXT_ORDER_CUSTOMER_NEUTRAL', 'Guten Tag ');
define('EMAIL_TEXT_UPDATEINFO', 'Wir informieren Sie über den Status Ihrer Bestellung bei ');
define('EMAIL_TEXT_ORDER_NUMBER', 'Bestellnummer:');
define('EMAIL_TEXT_INVOICE_URL', 'Detaillierte Rechnung:');
define('EMAIL_TEXT_DATE_ORDERED', 'Bestelldatum:');
define('EMAIL_TEXT_COMMENTS_UPDATE', '<em>Kommentare zu Ihrer Bestellung: </em>');

define('EMAIL_TEXT_STATUS_UPDATED', 'Ihre Bestellung wurde auf folgenden Status aktualisiert:' . "\n");
define('EMAIL_TEXT_STATUS_LABEL', '%s' . "\n\n");
define('EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Bitte antworten Sie auf dieses Email, wenn Sie Fragen haben.' . "\n");
// Success, Warning, and Error Messages
define('ERROR_ORDER_DOES_NOT_EXIST', 'FEHLER: Bestellung existiert nicht.');
define('SUCCESS_ORDER_UPDATED', 'ERFOLG: Bestellung erfolgreich aktualisiert.');
define('WARNING_DISPLAY_PRICE_WITH_TAX', 'WARNUNG: You have configured Zen Cart to display prices with' . (DISPLAY_PRICE_WITH_TAX_ADMIN != 'true' ? 'out ' : ' ') . 'tax. This page is currently displaying prices with' . (DISPLAY_PRICE_WITH_TAX != 'true' ? 'out ' : ' ') . 'tax.');
define('WARNING_ADDRESS_COUNTRY_NOT_FOUND', 'WARNUNG: Eines oder mehrere Felder enthalten Ländernamen, die Zen Cart nicht bekannt sind (&quot;Länder und Steuern&quot;-&gt;&quot;Länder&quot;).<br />Steuern und einige Versandmodule werden nicht richtig funktionieren, solange dieser Fehler nicht behoben wird.<br /><br />Das tritt typischerweise auf, wenn ein Land aus der Liste gelöscht oder umbenannt wird (&quot;Länder und Steuern&quot;-&gt;&quot;Länder&quot;). Sie können das wie folgt beheben: <ul><li>Fügen Sie das Land und den Namen des Landes wieder hinzu.</li><li>Ändern Sie den Namen des Landes, so dass er mit dem in der Zen Cart Datenbank hinterlegten Namen übereinstimmt.</li></ul>');
define('WARNING_ORDER_NOT_UPDATED', 'WARNUNG: Es gab nichts zu ändern. Bestellung wurde nicht aktualisiert.');
define('WARNING_ORDER_QTY_OVER_MAX', 'WARNUNG: Die eingegebene Menge hat die maximal mögliche für eine Bestellung überschritten. Die Menge wurde auf die maximal zulässige geändert.');
define('WARNING_ORDER_COUPON_BAD', 'WARNUNG: Der Aktionskuponcode wurde in der Datenbank nicht gefunden. Hinweis: Titel / Text eines Aktionskupons sehen normalerweise so aus: &quot;Discount Coupon : coupon_code :&quot;. ');
define('WARNING_INSUFFICIENT_PRODUCT_STOCK', 'Unzureichender Lagerbestand für <em>%1$s</em>, angefordert %2$s mit nur %3$s verfügbar.');
define('ERROR_ZEN_ADD_TAX_ROUNDING', "Die <code>zen_add_tax</code> Funktion muss aktualisiert werden, damit Edit Orders funktioniert. Nehmen Sie die in der Anleitung beschriebene Änderung vor.");
define ('ERROR_ZC155_NO_SANITIZER', 'You must install the Zen Cart 1.5.5 <em>AdminRequestSanitizer</em> class before you can use Edit Orders on this site.');
// Product & Attribute Display
define('TEXT_ATTRIBUTES_ONE_TIME_CHARGE', 'Einmalige Gebühren: &nbsp;&nbsp;');
define('TEXT_ATTRIBUTES_UPLOAD_NONE', 'keine Datei hochgeladen');
// Order Totals Display
define('TEXT_ADD_ORDER_TOTAL', 'Hinzufügen ');
define('TEXT_CHOOSE_SHIPPING_MODULE', 'Wählen Sie eine Versandart: ');
if (!defined('TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER')) define('TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER', 'REMOVE');
// Add a Product
define('TEXT_ADD_NEW_PRODUCT', 'Artikel hinzufügen');
define('ADDPRODUCT_TEXT_CATEGORY_CONFIRM', 'OK');
define('ADDPRODUCT_TEXT_SELECT_PRODUCT', 'Artikel auswählen');
define('ADDPRODUCT_TEXT_PRODUCT_CONFIRM', 'OK');
define('ADDPRODUCT_TEXT_SELECT_OPTIONS', 'Attribut auswählen');
define('ADDPRODUCT_TEXT_OPTIONS_CONFIRM', 'OK');
define('ADDPRODUCT_TEXT_OPTIONS_NOTEXIST', 'keine Attribute: Übersprungen..');
define('ADDPRODUCT_TEXT_CONFIRM_QUANTITY', '&nbsp;Menge&nbsp;');
define('ADDPRODUCT_TEXT_CONFIRM_ADDNOW', 'Jetzt hinzufügen');
define('ADDPRODUCT_TEXT_STEP1', 'Schritt 1:');
define('ADDPRODUCT_TEXT_STEP2', 'Schritt 2:');
define('ADDPRODUCT_TEXT_STEP3', 'Schritt 3:');
define('ADDPRODUCT_TEXT_STEP4', 'Schritt 4:');
define('ADDPRODUCT_SPECIALS_SALES_PRICE', 'Sonderangebotspreis verwenden');
define('ADDPRODUCT_TEXT_NO_OPTIONS', 'keine Optionen zur Auswahl');
define('ADDPRODUCT_CHOOSE_CATEGORY', 'Kategorie wählen');
// Navigation Display
define('IMAGE_ORDER_DETAILS', 'Details der Bestellung anzeigen');
define('BUTTON_TO_LIST', 'Liste sortieren');
define('SELECT_ORDER_LIST', 'Gehe zu Bestellung:');
define('DETAILS', 'Details');
// Required for various added zen_cart functions
define('TEXT_UNKNOWN_TAX_RATE', 'Steuer');
define('PULL_DOWN_DEFAULT', 'Bitte wählen Sie Ihr Land');
// Absolute's Product Attribute Grid
define('WARNING_ATTRIBUTE_OPTION_GRID', 'Warnung: Das Modul Product Attribute Grid wurde entdeckt, aber der Product Option Type für Attribute Grid wurde nicht vollständig in die Datenbank übernommen. Übergangsweise wird PRODUCTS_OPTIONS_TYPE_ATTRIBUTE_GRID = 23997 definiert.');
// Other elements
define('RESET_TOTALS', 'Gesamtsummen zurücksetzen?');
define('PAYMENT_CALC_METHOD', 'Wählen Sie die Brechnungsmethode:');
define('PAYMENT_CALC_MANUAL', 'Manuell eingegebene Artikelpreise ');
define('PAYMENT_CALC_AUTO', 'Automatisch, Sonderangebotspreise nicht berücksichtigen');
define('PAYMENT_CALC_AUTOSPECIALS', 'Automatisch, Sonderangebotspreise berücksichtigen');
define('PRODUCT_PRICES_CALC_AUTO', ' <b>Hinweis:</b> Die Preise für Artikel werden <em>automatisch</em> berechnet.');
define('PRODUCT_PRICES_CALC_AUTOSPECIALS', ' <b>Hinweis:</b> Die Artikelpreise werden <em>automatisch</em> berechnet mit Verwendung von &quot;Sonderangebotspreisen&quot;.');
define('PRODUCT_PRICES_CALC_MANUAL', ' <b>Hinweis:</b> Die Artikelpreise werden nicht automatisch berechnet, sondern Sie geben sie <em>manuell</em> ein.');
define('EO_PRICE_AUTO_GRID_MESSAGE', 'Automatisch berechnet');
define('EO_MESSAGE_PRICING_AUTO', 'Preise wurden automatisch berechnet ohne Verwendung von Sonderangebotspreisen.');
define('EO_MESSAGE_PRICING_AUTOSPECIALS', 'Preise wurden automatisch berechnet mit Verwendung von Sonderangebotspreisen.');
define('EO_MESSAGE_PRICING_MANUAL', 'Preise wurden manuell angegeben.');
define('EO_MESSAGE_ORDER_UPDATED', 'Die Bestellung wurde aktualisiert via "Edit Orders". ');
define('EO_MESSAGE_PRODUCT_ADDED', '%1$s x "%2$s" zur Bestellung hinzugefügt');   //-%1$s: The product quantity, %2$s: The product name
define('EO_MESSAGE_ATTRIBS_ADDED', ', mit Optionen (%s)');
define('EO_SHIPPING_TAX_DESCRIPTION', 'Versand Steuer (%s%%)');
define('EO_FREE_SHIPPING', 'kostenloser Versand');