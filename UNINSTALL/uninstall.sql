##########################################################################
# Edit Orders 4.6.2 Uninstall - 2022-06-10 - webchills
# NUR AUSFÜHREN WENN SIE DAS MODUL AUS DER DATENBANK ENTFERNEN WOLLEN!!!!!
##########################################################################

DELETE FROM configuration WHERE configuration_key LIKE 'EO_%';
DELETE FROM configuration_language WHERE configuration_key LIKE 'EO_%';
DELETE FROM configuration_group WHERE configuration_group_title = 'Edit Orders' LIMIT 1;
DELETE FROM admin_pages WHERE page_key IN ('editOrders', 'configEditOrders');