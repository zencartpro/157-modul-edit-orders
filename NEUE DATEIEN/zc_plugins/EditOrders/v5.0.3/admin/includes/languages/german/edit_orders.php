<?php
// -----
// Language constants used by the /admin/edit_orders.php processing (Edit Orders).
//
//-Last modified 2025-07-08 webchills Edit Orders v5.0.2
//
// Page / Section Headings and common button names and other constants.
define('BUTTON_ADD' , 'Hinzufügen');
define('BUTTON_CHOOSE' , 'Auswählen');
define('BUTTON_CLOSE' , 'Schließen');
define('BUTTON_COMMIT_CHANGES' , 'Änderungen übernehmen');
define('BUTTON_RECALCULATE' , 'Neu berechnen');
define('HEADING_TITLE', 'Bestellung bearbeiten');
define('HEADING_TITLE_SEARCH', 'Bestellnummer:');
define('HEADING_TITLE_STATUS', 'Status:');
define('HEADING_TITLE_ADD_PRODUCT', 'Artikel zur Bestellung hinzufügen');
define('TEXT_LABEL_TAX' , 'Steuer (%):');
define('TEXT_MODAL_CHANGES_TITLE' , 'Aktuelle Bestelländerungen');
define('TEXT_ORDER_TOTAL_ADDED' , '%1$s wurde hinzugefügt: %2$s');
define('TEXT_ORDER_TOTAL_REMOVED' , '%1$s wurde entfernt: %2$s');
define('TEXT_ORIGINAL_ORDER' , 'Originalbestellung');
define('TEXT_ORIGINAL_VALUE' , 'Original: <code>%s</code>');
define('TEXT_OSH_CHANGED_VALUES' , 'Diese Werte wurden in der Bestellung geändert:');
define('TEXT_OT_CHANGES' , 'Änderungen an der Bestellsumme');
define('TEXT_PRODUCT_CHANGES' , 'Artikeländerungen');
define('TEXT_UPDATED_ORDER' , 'Aktualisierte Bestellung');
define('TEXT_VALUE_CHANGED' , '%1$s wurde von %2$s zu %3$s geändert'); //- Verwendet von der AJAX-Verarbeitung und für OSH-Datensätze
define('TEXT_VALUE_UNKNOWN' , 'Unbekannt [%s]'); //- %s wird mit der unbekannten 'Entität' ausgefüllt
define('TEXT_SHIPPING_TAX_RATE_INITIALIZED' , 'Der Versandkostensteuersatz für die Bestellung wurde auf %s initialisiert.');
// Table Headings
define('TABLE_HEADING_STATUS_HISTORY', 'Bestellstatusverlauf &amp; Kommentare');
define('TABLE_HEADING_COMMENTS', 'Kommentare');
define('TABLE_HEADING_CUSTOMERS', 'Kunden');
define('TABLE_HEADING_ORDER_TOTAL', 'Bestellsumme');
define('TABLE_HEADING_DATE_PURCHASED', 'Kaufdatum');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Aktion');
define('TABLE_HEADING_QUANTITY','Anzahl');
define('TABLE_HEADING_PRODUCTS','Artikel');
define('TABLE_HEADING_TAX','Steuer');
define('TABLE_HEADING_TOTAL','Gesamt');
define('TABLE_HEADING_UNIT_PRICE','Stückpreis');
define('TABLE_HEADING_UNIT_PRICE_NET','Stückpreis (netto)');
define('TABLE_HEADING_UNIT_PRICE_GROSS','Stückpreis (brutto)');
define('TABLE_HEADING_TOTAL_PRICE','Gesamtpreis');
define('TABLE_HEADING_CUSTOMER_NOTIFIED','Kunde benachrichtigt');
define('TABLE_HEADING_DATE_ADDED','Hinzugefügt am');
define('TABLE_HEADING_UPDATED_BY','Aktualisiert von');
// Order Address Entries
define('BUTTON_MAP_ADDRESS' , 'Adresse auf Karte anzeigen');
define('ENTRY_CUSTOMER' , 'Kundeninformationen');
define('ENTRY_CUSTOMER_NAME','Name');
define('ENTRY_CUSTOMER_COMPANY','Firma');
define('ENTRY_CUSTOMER_ADDRESS','Adresse');
define('ENTRY_CUSTOMER_SUBURB','Adresszeile 2');
define('ENTRY_CUSTOMER_CITY','Stadt');
define('ENTRY_CUSTOMER_STATE','Bundesstaat');
define('ENTRY_CUSTOMER_POSTCODE','PLZ');
define('ENTRY_CUSTOMER_COUNTRY','Land');
define('ENTRY_SHIPPING_ADDRESS','Lieferadresse:');
define('ENTRY_BILLING_ADDRESS','Rechnungsadresse:');
define('ENTRY_TELEPHONE_NUMBER' , 'Telefon:'); //- Verkürzung für modale Anzeige; Standard ist 'Telefonnummer:'
define('TEXT_MODAL_ADDRESS_HEADER' , 'Änderung der Bestellung %s'); //- %s wird mit einem der Werte aus 'xxx Adresse:' oben ausgefüllt
define('TEXT_STOREPICKUP_NO_SHIP_ADDR' , 'Die Bestellung ist im Laden abzuholen, keine Lieferadresse.');
define('TEXT_VIRTUAL_NO_SHIP_ADDR' , 'Die Bestellung enthält nur <code>virtuelle</code> Artikel, keine Lieferadresse.');
define('PLEASE_SELECT' , 'Bitte wählen');
define('TYPE_BELOW' , 'Wählen Sie unten eine Option aus ...');
// Order Payment Entries and Additional Infomation
define('ENTRY_CREDIT_CARD_TYPE' , 'Kreditkartentyp:');
define('ENTRY_CREDIT_CARD_OWNER' , 'Kreditkarteninhaber:');
define('ENTRY_CREDIT_CARD_NUMBER' , 'Kreditkartennummer:');
define('ENTRY_CREDIT_CARD_EXPIRES' , 'Kreditkarte läuft ab:');
define('ENTRY_CURRENCY_VALUE' , 'Währungswert (%s):'); //- %s wird mit dem Währungscode der Bestellung ausgefüllt
define('ENTRY_IS_GUEST_ORDER' , 'Gastbestellung?');
define('ENTRY_PAYMENT_METHOD' , 'Zahlungsart:');
define('ENTRY_PAYMENT_MODULE' , 'Zahlungsmodul-Code:');
define('ENTRY_PURCHASE_ORDER_NUMBER' , 'Bestellnummer:');
define('TEXT_PANEL_HEADER_ADDL_INFO' , 'Zusätzliche Informationen');
// Order Status Entries
define('BUTTON_ADD_COMMENT' , 'Neuer Kommentar');
define('BUTTON_ADD_COMMENT_ALT' , 'Kommentar zu dieser Bestellung hinzufügen oder überprüfen'); //- Wird auch für die Überschrift des modalen Formulars verwendet!
define('BUTTON_REMOVE' , 'Entfernen');
define('BUTTON_REVIEW_COMMENT' , 'Kommentar überprüfen');
define('ENTRY_STATUS' , 'Status:');
define('ENTRY_CURRENT_STATUS' , 'Aktueller Status: ');
define('ENTRY_NOTIFY_CUSTOMER' , 'Kunden benachrichtigen:');
define('ENTRY_NOTIFY_COMMENTS' , 'Kommentare');
define('TEXT_COMMENT_ADDED' , 'Kommentar zur Bestellung');
// Email Entries
define('EMAIL_SEPARATOR' , '------------------------------------------------------');
define('EMAIL_TEXT_COMMENTS_UPDATE' , '<em>Die Kommentare zu Ihrer Bestellung lauten: </em>');
define('EMAIL_TEXT_DATE_ORDERED' , 'Bestelldatum:');
define('EMAIL_TEXT_INVOICE_URL' , 'Detaillierte Rechnung:');
define('EMAIL_TEXT_ORDER_NUMBER' , 'Bestellnummer:');
define('EMAIL_TEXT_STATUS_LABEL' , '%s' . "\n\n");
define('EMAIL_TEXT_STATUS_PLEASE_REPLY' , 'Bitte antworten Sie auf diese E-Mail, wenn Sie Fragen haben.' . "\n");
define('EMAIL_TEXT_STATUS_UPDATED' , 'Ihre Bestellung wurde auf den folgenden Status aktualisiert:' . "\n");
define('EMAIL_TEXT_SUBJECT' , 'Bestellaktualisierung');
// Success, Warning, and Error Messages
define('ERROR_ADDRESS_COUNTRY_NOT_FOUND' , 'Bestellung #%u kann nicht bearbeitet werden. Eine oder mehrere Adressen in der Bestellung verwenden ein Land, das Ihrem Shop nicht bekannt ist. Steuern und einige Versandmodule funktionieren wahrscheinlich nicht richtig, bis das Problem behoben ist. <br><br>Dies tritt in der Regel auf, wenn ein Administrator ein Land mit dem Tool <b>Standorte / Steuern :: Länder</b> deaktiviert. Das Problem kann durch eine der folgenden Maßnahmen behoben werden:<ul><li>Fügen Sie das Land (und den Namen) wieder zu Ihrer Zen Cart-Datenbank hinzu. </li><li>Aktivieren Sie das Land vorübergehend wieder, damit die Bestellung bearbeitet werden kann. </li></ul>');
define('ERROR_CANT_DETERMINE_TAX_RATES' , 'Bestellung #%u kann nicht bearbeitet werden, da die Steuersätze nicht ermittelt werden können.');
define('ERROR_DISPLAY_PRICE_WITH_TAX' , 'Sie haben Zen Cart so konfiguriert, dass Preise mit' . (DISPLAY_PRICE_WITH_TAX_ADMIN !== 'true' ? 'ohne ' : ' ') . 'Steuer anzuzeigen. Auf dieser Seite werden derzeit Preise mit' . (DISPLAY_PRICE_WITH_TAX !== 'true' ? 'ohne ' : ' ') . 'Steuer angezeigt. Bestellungen können erst bearbeitet werden, wenn beide Einstellungen übereinstimmen.');
define('ERROR_NO_PRODUCT_TAX_DESCRIPTION' , 'Bestellung #%1$u kann nicht bearbeitet werden. Es konnte keine Steuerbeschreibung für den Steuersatz (%3$s%) von <em>%2$s</em> gefunden werden.');
define('ERROR_NO_SHIPPING_TAX_DESCRIPTION' , 'Bestellung #%1$u kann nicht bearbeitet werden. Es konnte keine Steuerbeschreibung für den Versandsteuersatz (%2$s%%) gefunden werden.');
define('ERROR_ORDER_DOES_NOT_EXIST' , 'Die Bestellung existiert nicht.');
define('ERROR_PRODUCT_ATTRIBUTE_DOES_NOT_EXIST' , 'Bestellung #%1$u kann nicht bearbeitet werden. Der Optionsname/Wert (%2$s [#%3$u]/%4$s [#%5$u]) gilt nicht mehr für den Artikel (%6$s [#%7$u]).');
define('ERROR_PRODUCT_DOES_NOT_EXIST' , 'Bestellung #%1$u kann nicht bearbeitet werden. Der Artikel (%2$s [#%3$u]) existiert nicht mehr.');
define('ERROR_SHIPPING_TAX_RATE_MISSING' , 'Bestellung #%u kann nicht bearbeitet werden. Der Wert für <code>shipping_tax_rate</code> wurde zuvor nicht gespeichert.');
define('ERROR_ZEN_ADD_TAX_ROUNDING' , 'Die Funktion <code>zen_add_tax</code> des Shops muss aktualisiert werden, um die Verwendung von <em>Bestellungen bearbeiten</em> zu ermöglichen.');
define('SUCCESS_ORDER_UPDATED' , 'Bestellung #%u wurde erfolgreich aktualisiert.');
define('WARNING_INSUFFICIENT_PRODUCT_STOCK' , 'Unzureichender Lagerbestand für <em>%1$s</em>, %2$s angefordert, %3$s verfügbar.');
define('WARNING_NO_UPDATES_TO_ORDER' , 'Nichts zu aktualisieren; es wurden keine Änderungen an dieser Bestellung vorgenommen.');
define('WARNING_ORDER_COUPON_BAD' , 'Warnung: Der Gutscheincode (%s) für die Bestellung ist nicht mehr gültig. Durch das Aktualisieren der Bestellung werden alle mit diesem Gutschein verbundenen Rabatte entfernt!');
define('WARNING_ORDER_NOT_UPDATED' , 'Warnung: Keine Änderungen. Die Bestellung wurde nicht aktualisiert.');
define('WARNING_ORDER_QTY_OVER_MAX' , 'Warnung: Die angeforderte Menge überschreitet die maximal zulässige Menge pro Bestellung. Die hinzugefügte Menge wurde auf die maximal zulässige Menge pro Bestellung reduziert.');
// Order Totals Display
define('ERROR_OT_NOT_INSTALLED' , 'Die ausgewählte Bestellsumme (%s) ist nicht installiert und kann nicht aktualisiert werden.');
define('TEXT_CHOOSE_SHIPPING_MODULE' , 'Wählen Sie ein Versandmodul: ');
define('TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER' , 'REMOVE'); //- IMMER in Großbuchstaben!
define('TEXT_COUPON_LINK_TITLE' , 'siehe Coupon-Bedingungen');
define('TEXT_LABEL_COUPON_CODE' , 'Coupon-Code:');
define('TEXT_LABEL_METHOD' , 'Versandart (erforderlich):');
define('TEXT_LABEL_MODULE' , 'Modul:');
define('TEXT_LABEL_TITLE' , 'Titel:');
define('TEXT_LABEL_VALUE' , 'Wert:');
define('TEXT_LABEL_COST_INCL' , 'Kosten (inkl.):');
define('TEXT_LABEL_COST_EXCL' , 'Kosten (exkl.):');
define('TEXT_OT_ADD_MODAL_TITLE' , 'Bestellsumme hinzufügen (%s)');
define('TEXT_OT_UPDATE_MODAL_TITLE' , 'Bestellsumme bearbeiten (%s)'); //- %s wird mit der Klasse der Bestellsumme ausgefüllt, z. B. ot_shipping
define('TEXT_FIELD_CANNOT_BE_EMPTY' , 'Dieses Feld darf nicht leer sein.');
// Adding/updating a product
define('ERROR_PRODUCT_NOT_FOUND' , 'Der angeforderte Artikel (%s) ist nicht in der Bestellung enthalten.');
define('ERROR_MODEL_TOO_LONG' , 'Der Wert „Artikelnummer” darf nicht länger als %u Zeichen sein.');
define('ERROR_NAME_TOO_LONG' , 'Der Wert „name” darf nicht länger als %u Zeichen sein.');
define('ERROR_NO_MATCHING_PRODUCT' , 'Es wurde kein Artikel gefunden, der Ihrer Anfrage entspricht. Bitte versuchen Sie es erneut.');
define('ERROR_PRICE_INVALID' , 'Der Artikelpreis und/oder die einmaligen Kosten müssen numerisch und größer oder gleich Null sein.');
define('ERROR_QTY_INSUFFICIENT' , 'Die Artikelmenge (%s) ist nicht ausreichend verfügbar.');
define('ERROR_QTY_INVALID' , 'Die Produktmenge muss numerisch und größer oder gleich Null sein.');
define('ERROR_TAX_RATE_INVALID' , 'Der Steuersatz für das Artikel muss ein numerischer Wert zwischen 0 und 100 sein.');
define('TEXT_ADD_NEW_PRODUCT' , 'Artikel hinzufügen'); //- Wird für den Button-Text verwendet
define('TEXT_ATTRIBUTES_ONE_TIME_CHARGE' , 'Einmalige Gebühren:');
define('TEXT_ATTRIBUTES_READONLY' , ' (r/o)');
define('TEXT_ATTRIBUTES_UNKNOWN_OPTION_TYPE' , 'Unbekannter Optionstyp (%u)');
define('TEXT_FILE_UPLOAD_NOT_SUPPORTED' , 'DATEI-UPLOAD NICHT UNTERSTÜTZT');
define('TEXT_LABEL_NAME' , 'Name:');
define('TEXT_LABEL_MODEL' , 'Artikelnummer:');
define('TEXT_LABEL_QTY_AVAIL' , 'Verfügbare Menge:');
define('TEXT_LABEL_QTY' , 'Anzahl:');
define('TEXT_PRODUCT_ADD_MODAL_TITLE' , 'Artikel zur Bestellung hinzufügen');
define('TEXT_PRODUCT_ATTRIBUTES' , 'Produktattribute');
define('TEXT_PRODUCT_BEING_ADDED' , 'Das Artikel wird zur Bestellung hinzugefügt.');
define('TEXT_PRODUCT_CHOOSE_BY_CATEGORY' , 'Nach Kategorie auswählen');
define('TEXT_PRODUCT_CHOOSE_BY_ID' , 'Nach Artikel-ID auswählen');
define('TEXT_PRODUCT_CHOOSE_BY_SEARCH' , 'Nach Artikelname/Artikelnummer suchen');
define('TEXT_PRODUCT_CHOOSE_SUBTITLE' , 'Artikel auswählen');
define('TEXT_PRODUCT_NEW_MODAL_TITLE' , 'Neues Artikel');
define('TEXT_PRODUCT_NEW_SELECT_CHOOSE' , 'Wählen Sie ein Artikel aus der folgenden Liste aus und klicken Sie dann auf die Schaltfläche „Auswählen”.');
define('TEXT_PRODUCT_UPDATE_MODAL_TITLE' , 'Artikel aktualisieren');
define('TEXT_SELECT_PRODUCT' , 'Artikel auswählen:');
//- These three constants define the message to be recorded for products' changes. All 3
//  use the same sprintf values:
//
// %1$s (qty), %2$s (name), %3$s (model), %4$s (final price), %5$s (tax rate)
//
define('TEXT_STATUS_PRODUCT_ADDED' , 'Hinzugefügt: %1$s x %2$s [%3$s] @ %4$s (Steuersatz %5$s%%)');
define('TEXT_STATUS_PRODUCT_CHANGED' , 'Einige Produktdetails wurden geändert von: %1$s x %2$s [%3$s] @ %4$s (Steuersatz %5$s%%)');
define('TEXT_STATUS_PRODUCT_REMOVED' , 'Entfernt: %1$s x %2$s [%3$s] @ %4$s (Steuersatz %5$s%%)');
// Navigation Display
define('BUTTON_TO_LIST' , 'Bestellliste');
define('DETAILS' , 'Details');
define('IMAGE_ORDER_DETAILS' , 'Bestelldetails anzeigen');
define('SELECT_ORDER_LIST' , 'Zur Bestellung springen:');
// Required for various added zen_cart functions
define('PULL_DOWN_DEFAULT' , 'Bitte wählen Sie Ihr Land aus');
define('TEXT_UNKNOWN_TAX_RATE_MANUAL' , 'Umsatzsteuer %s%%');
define('TEXT_UNKNOWN_TAX_RATE' , 'Umsatzsteuer');
// Other elements
define('PAYMENT_CALC_METHOD' , 'Produktpreisberechnungsmethode auswählen:');
define('PAYMENT_CALC_MANUAL' , 'Bearbeiten aktivieren');
define('PAYMENT_CALC_AUTOSPECIALS' , 'Bearbeiten nicht zulässig');
define('PRODUCT_PRICES_CALC_AUTOSPECIALS' , ' <b>Hinweis:</b> Die Artikelpreise werden laut aktueller Einstellung <em>automatisch</em> berechnet und können nicht bearbeitet werden.');
define('PRODUCT_PRICES_CALC_MANUAL' , ' <b>Hinweis:</b> Die Artikelpreise können bearbeitet werden.');
define('EO_MESSAGE_ADDRESS_UPDATED' , 'Die Adresse %1$s der Bestellung wurde aktualisiert von: '); //-%1$s: Der Typ der Adresse (siehe unten), die aktualisiert wurde
define('EO_CUSTOMER' , 'customer');
define('EO_BILLING' , 'billing');
define('EO_DELIVERY' , 'deliverx');
define('EO_MESSAGE_ORDER_UPDATED' , 'Die Bestellung wurde über „Bestellungen bearbeiten” aktualisiert.');
define('EO_MESSAGE_PRICING_AUTO' , 'Die Preise wurden automatisch berechnet, ohne Sonderpreise.');
define('EO_MESSAGE_PRICING_AUTOSPECIALS' , 'Die Preise wurden automatisch berechnet, unter Berücksichtigung von Sonderpreisen.');
define('EO_MESSAGE_PRICING_MANUAL' , 'Die Preise wurden manuell eingegeben.');
define('EO_MESSAGE_PRODUCT_ADDED' , '%1$s x „%2$s“ wurde zur Bestellung hinzugefügt'); //-%1$s: Die Artikelmenge, %2$s: Der Artikelname
define('EO_MESSAGE_PRODUCT_ATTRIBS_ADDED' , '); mit Optionen (%s)');
define('TEXT_PANEL_HEADER_UPDATE_INFO' , 'Informationen zur Bestellaktualisierung');