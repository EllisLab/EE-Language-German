<?php

$lang = array(

'system_utilities' => 'System-Dienstprogramme',

// @since 4.0	


'backing_up' => 'Backup läuft...',
'backup_database' => 'Backup Datenbank',
'backup_error' => 'Backup nicht möglich',
'backup_success' => 'Backup erfolgreich',
'backup_success_desc' => 'Ihr Backup wurde im Systemordner <b>%s</b> gesichert',
'backup_utility' => 'Backup-Tool',
'backup_tables' => 'Backup SQL-Tabellen',

'table_count' => '<b>%s</b> SQL-Tabellen',
/**
 * Menu
 */

'communicate' => 'Rundmail',

'sent' => 'Gesendet',

'cp_translation' => '<abbr title="Control Panel">CP</abbr>-Übersetzung',

'debug_extensions' => 'Extensions von Fehlern bereinigen',

'php_info' => '<abbr title="PHP: Hypertext Processor">PHP</abbr>-Info',

'import_tools' => 'Importwerkzeuge',

'file_converter' => 'Dateien konvertieren',

'member_import' => 'Nutzer-Import',

'sql_manager' => 'SQL-Verwaltung',

'sql_manager_abbr' => '<abbr title="Structured Query Language">SQL</abbr>-Verwaltung',

'query_form' => 'Abfrage-Form',

'data_operations' => 'Datenbearbeitung',

'cache_manager' => 'Cache-Verwaltung',

'statistics' => 'Statistiken',

'search_and_replace' => 'Suchen und ersetzen',

'default' => 'Standard',

/**
 * Communicate
 */

'email_subject' => 'Email-Betreff',

'email_body' => 'Email-Inhalt',

'send_as' => 'gesendet als',

'word_wrap' => 'Wortumbruch',

'your_email' => 'Ihre Email',

'attachment' => 'Anhang',

'attachment_desc' => 'Anhänge werden  <b>nicht</b> gesichert nach dem Versand.',

'recipient_options' => 'Empfänger-Optionen',

'primary_recipients' => 'Hauptempfänger',

'primary_recipients_desc' => '"AN:"-Email-Adressse(n), mehrere Empfänger mit einem Komma trennen.',

'cc_recipients' => '<abbr title="Carbon Copied">CC</abbr>: Email-Adresse(n)',

'cc_recipients_desc' => '<abbr title="Carbon Copied">CC</abbr>: Email-Adresse(n), mehrere Empfänger mit einem Komma trennen.',

'bcc_recipients' => '<abbr title="Blind Carbon Copied">BCC</abbr>: Email-Adresse(n)',

'bcc_recipients_desc' => '<abbr title="Blind Carbon Copied">BCC</abbr>: Email-Adresse(n), mehrere Empfänger mit einem Komma trennen.',

'add_member_groups' => 'Mitgliedergruppe(n) hinzufügen',

'add_member_groups_desc' => 'Email an <b>alle</b> Mitglieder der gewähten Gruppe(n) senden.',

'btn_send_email' => 'Sende Email',

'btn_send_email_working' => 'Sende...',

'none'		=> 'Nur Text',
'auto_br'	=> 'Auto <br />;',
'xhtml'		=> 'XHTML',

'no_cached_emails' => 'Keine <b>gesendeten Emails</b> gefunden.',

'create_new_email' => 'Neue Email schreiben',

'communicate_error' => 'Achtung: : Email nicht gesendet',

'communicate_error_desc' => 'Die Email konnte nicht gesendet werden, sehen Sie sich bitte die unten aufgeführten Fehler an und beheben diese.',

'view_email' => 'Email ansehen',

'resend' => 'Email noch einmal senden',

'emails_removed' => 'Emails entfernt',

/**
 * CP Translation
 */

'language_files'		=>	'Sprachdateien',
'search_files_button'	=>	'Dateien durchsuchen',
'file_name'				=>	'Dateiname',
'export_download'		=>	'Export (Download)',
'cannot_access'			=>	'kann nicht drauf zugegriffen werden',
'cannot_create_zip'		=>	'Kann keine .zip-Datei anlegen',
'no_files_selected'		=>	'Keine Dateien ausgewählt für den Export',
'invalid_path' 			=> 'Der angegebene Pfad ist nicht gültig:',
'file_saved'			=> 'Die übersetzte Datei wurde nach <b>system/ee/legacy/translations/%s</b> gesichert',
'trans_file_not_writable'=> 'Die übersetzte Datei ist nicht beschreibbar.',
'translate_btn' 		=>	'Übersetzungen sichern',
'translations_saved'	=>	'Übersetzungen gesichert',
'translate_error'		=> 'Achtung: Übersetzung nicht gesichert',
'translate_error_desc'	=> 'Wir konnten die Übersetzung nicht sichern, sehen Sie sich bitte die unten aufgeführten Fehler an und beheben diese.',

/**
 * PHP Info
 */

'php_info_title' => '<abbr title="Preprocessor Hypertext Processor">PHP</abbr> %s Info',

/**
 * Cache Manager
 */

'caches_to_clear' => 'Caches zum Löschen',

'caches_to_clear_desc' => 'Alle ausgewählten Caches werden gelöscht.',

'templates' => 'Templates',

'tags' => 'Tags',

'database' => 'Datenbank',

'all_caches' => 'Alle Caches',

'btn_clear_caches' => 'Caches löschen',

'btn_clear_caches_working' => 'Lösche...',

'caches_cleared' => 'Caches gelöscht',

'caches_cleared_error' => 'Mindestens ein Cache muss zum Löschen ausgewählt sein.',

/**
 * Search and Replace
 */

'sandr' => 'Daten suchen und ersetzen',

'sandr_warning' => '<p><b>Warnung</b>: <b class="no">Nur für fortgeschrittene Nutzer!</b> Sehr vorsichtig sein bei der Benutzung dieses Werkzeuges.</p>
<p>Abhängig von der benutzen Syntax kann diese Funktion zu ungewollten Ergebnissen führen. Bitte zurerst ein Backup der Datenbank machen sowie die Dokumentation lesen.</p>',

'sandr_search_text' => 'Suche nach diesem Text',

'sandr_replace_text' => 'Ersetze mit diesem Text',

'sandr_in' => 'Suche und ersetze in',

'sandr_in_desc' => 'Felderauswahl für das Suchen und Ersetzen.',

'rows_replaced' => 'Anzahl an geänderten Datenbankeinträgen: %s',

'current_password' => 'Derzeitiges Passwort',

'sandr_password_desc' => 'Sie <b>müssen</b> Ihr Passwort eingeben zum Suchen und Ersetzen.',

'site_preferences'		=> 'Site-Einstellungen',
'channel_entry_title'	=> 'Channel-Titel-Einträge',
'channel_fields'		=> 'Channel-Felder',
'replace_in_templates'	=> 'In ALLEN Templates',
'template_groups'		=> 'Template-Gruppen',
'choose_below'			=> '(Aus dem folgenden auswählen)',

'btn_sandr' => 'Suchen und Ersetzen',

'btn_sandr_working' => 'Ersetze...',

'no_tables_match' => 'Keine Tabellen haben zur den Suchkriterien gepasst',

'sandr_error' => 'Achtung: "Suchen und Ersetzen" nicht durchgefüht',

'sandr_error_desc' => 'Suchen und Ersetzen konnte nicht durchgeführt werden, sehen Sie sich bitte die unten aufgeführten Fehler an und beheben diese.',

/**
 * Import Converter
 */

'import_converter' => 'Import-Datei konvertieren',

'file_location' => 'Datei-Pfad',

'file_location_desc' => 'Pfad der <mark>gewählten</mark> Datei.',

'delimiting_char' => 'Eingeschränkte Zeichen',

'delimiting_char_desc' => 'Zeichen um obige Datei einzuschränken.',

'comma_delimit' => 'Komma',

'tab_delimit' => 'Reiter',

'pipe_delimit' => 'Pipe',

'other_delimit' => 'Andere <i>Typ-Zeichen unten</i>',

'enclosing_char' => 'Umgebende Zeichen',

'enclosing_char_desc' => 'Zeichen, die die entsprechenden Daten umgeben.',

'import_convert_btn' => 'Datei konvertieren',

'import_convert_btn_saving' => 'Konvertiere...',

'assign_fields' => 'Felder zuordnen',

'import_password_warning' => '<b>Warnung</b>: Wenn Sie kein Passwort vergeben, wird bei jedem Mitglied automatisch ein Passwort gesetzt. Diese Mitglieder müssen im nachhinein über den "Passwort vergessen"-Link ein neues Passwort setzen.',

'plain_text_passwords' => 'Klartext-Passwörter?',

'plain_text_passwords_desc' => 'Wenn auf <b>ja</b> gesetzt, werden Passwörter als Klartext abgespeichert.',

'btn_assign_fields' => 'Felder zuordnen',

'duplicate_field_assignment' => 'Feldzuordnung duplizieren: %x',

'duplicate_member_id' => 'Doppelte Mitglieder-ID: "%x"<br />Es wird empfohlen, keinen Mitglieder-ID-Tag zu benutzen und ExpressionEngine selbständig die Mitglieder-ID hochzählen lassen',

'duplicate_username' => 'Mitgliedernamen verdoppeln: ',

'member_id_warning' => 'WARNUNG: Wenn Mitglieder-ID-Tags im XML enthalten sind, werden bestehende Mitglieder mit der selben Mitglieder-ID ÜBERSCHRIEBEN!  Fahren Sie mit Vorsicht fort!',

'missing_email_field' => ' "Email" muss ein Feld zugewiesen werden',

'missing_screen_name_field' => 'Dem Bildschirm-Namen  muss ein Feld zugewiesen werden',

'missing_username_field' => 'Dem Benutzernamen muss ein Feld zugewiesen werden',

'not_enough_fields' => 'Nicht genügend Felder',

'not_enough_fields_desc' => 'Sie brauchen mindestens 3 Felder: Benutzername, Bildschirm-Name und Email-Adresse',

'select' => 'Auswahl treffen',

'confirm_assignments' => 'Zuweisungen bestätigen',

'plaintext_passwords' => 'Passwörter sind im Klartext.',

'encrypted_passwords' => 'Passwörter sind verschlüsselt.',

'btn_create_file' => '[Datei] anlegen',

'btn_create_file_working' => 'Lege an...',

'xml_code' => 'XML-Code',

'btn_download_file' => 'Datei herunterladen',

'btn_copy_to_clipboard' => 'In den Zwischenspeicher kopieren',

'file_not_converted' => 'Achtung: Datei nicht konvertiert',

'file_not_converted_desc' => 'Die Datei konnte nicht konvertiert werden, sehen Sie sich bitte die unten aufgeführten Fehler an und beheben diese.',

/**
 * Member Import
 */

'mbr_xml_file' => '<abbr title="Extensible Markup Language">XML</abbr>-Datei-Pfad',

'mbr_xml_file_location' => 'Server Pfad zur <abbr title="Extensible Markup Language"><mark>XML</mark></abbr>-Datei.',

'mbr_import_default_options' => 'Standard-Optionen',

'member_group' => 'Mitglieder-Gruppe',

'mbr_language' => 'Sprache',

'mbr_datetime_fmt' => 'Datum &amp; Zeit Format',

'mbr_create_custom_fields' => 'Eigene Felder anlegen?',

'mbr_create_custom_fields_desc' => 'Wenn auf <b>ja</b> gesetzt, wird der Import automatisch eigene Mitgliederfelder anlegen, wenn diese nicht im Standard enthalten sind.',

'mbr_import_btn' => 'Mitglieder importieren',

'mbr_import_btn_saving' => 'Importiere...',

'confirm_import' => 'Import bestätigen',

'confirm_import_warning' => '<p class="caution"><span title="Vorsichtig vorgehen"></span> <b>Vorsicht</b>: Wenn die <abbr title="Extensible Markup Language">XML</abbr>-Datei einen Tag names "<b>member_id</b>" enthält, stoppen.</p>
<p>Mitglieder in der Datenbank mit übereinstimmenden <abbr title="Identifier">ID</abbr>s werden <b>überschrieben</b>, wenn dieser Import bestätigt wird.</p>',

'option' => 'Option',

'value' => 'Wert',

'btn_confirm_import_working' => 'Importiere...',

'custom_fields' => 'Eigene Felder',

'map_custom_fields' => 'Eingene Felder eintragen',

'map_custom_fields_desc' => 'Die <abbr title="Extensible Markup Language">XML</abbr>-Datei enthält Felder, die nicht mit dem Importer übereinstimmen, bitte überprüfen und eigene Felder anlegen, wenn notwendig.',

'field_name' => 'Feld-Name',

'field_label' => 'Feld-Label',

'field_required' => 'Benötigt?',

'field_public' => 'Öffentlich?',

'field_registration' => 'Registrierung?',

'btn_add_fields' => 'Felder hinzufügen',

'btn_add_fields_working' => 'Füge hinzu...',

'new_fields_success' => 'Die folgenden eigenen Felder wurden erfolgreich hinzugefügt:',

'import_success' => 'Import war erfolgreich',

'file_read_error' => 'Datei konnte nicht gelesen werden',

'file_read_error_desc' => 'Die XML-Datei konnte nicht gelesen werden, bitte überprüfen, ob die Datei existiert und die erforderlichen Rechte besitzt.',

'xml_parse_error' => 'Kann XML nicht parsen',

'xml_parse_error_desc' => 'XML-Datei auf fehlerhafte Syntax überprüfen.',

'member_import_error' => 'Achtung: Import nicht durchgeführt',

'member_import_error_desc' => 'Der Import konnte nicht durchgeführt werden, sehen Sie sich bitte die unten aufgeführten Fehler an und beheben diese.',

/**
 * SQL Query Form
 */

'sql_query_form' => 'SQL Query Form',

'sql_query_form_abbr' => '<abbr title="Structured Query Language">SQL</abbr>-Abfrageformular',

'sql_query_abbr' => '<abbr title="Structured Query Language">SQL</abbr>-Abfrage',

'sql_warning' => '<p><b>Warnung</b>: <b class="no">Nur für erfahrene Nutzer.</b> Bitte sehr vorsichtig sein mit diesem Werkzeug.</p>
<p>Abhängig von der benutzen Syntax kann diese Funktion ungewünschte Ergebnisse zur Folge haben. Bitte ein Backup machen und die Dokumentation lesen.</p>',

'common_queries' => 'Allgemeine Abfragen',

'common_queries_desc' => 'Einige allgemeine Abfragen, um mehr über den Datenbankinhalt zu lernen.',

'sql_query_to_run' => 'Datenbank-Abfrage',

'sql_password_desc' => 'Sie <b>müssen</b> Ihr Passwort eingeben, um Abfragen senden zu können.',

'query_btn' => 'Abfragen',

'query_btn_saving' => 'Frage ab...',

'query_results' => 'Abfrage-Ergebnis',

'total_results' => 'Ergebnisse gesamt',

'affected_rows' => 'Betroffene Datensätze',

'sql_not_allowed' => 'Abfragetyp nicht erlaubt',

'sql_not_allowed_desc' => 'Folgende Abfragen können nicht gesendet werden: FLUSH, REPLACE, GRANT, REVOKE, LOCK oder UNLOCK.',

'search_table' => 'Tabelle durchsuchen',

'type_phrase' => 'Phrase eingaben...',

'query_form_error' => 'Achtung: Abfrage nicht durchgeführt',

'query_form_error_desc' => 'Die Abfrage konnte nicht durchgeführt werden, sehen Sie sich bitte die unten aufgeführten Fehler an und beheben diese.',

/**
 * Statistics
 */

'manage_stats' => 'Statistiken verwalten',

'source' => 'Quelle',

'record_count' => 'Anzahl Datensätze',

'members' => 'Mitglieder',

'channel_titles' => 'Channel-Einträge',

'sites' => 'Sites',

'forums' => 'Foren',

'forum_topics' => 'Foren-Themen',

'sync' => 'Synchronisieren',

'sync_completed' => 'Synchronisation erfolgt',

/**
 * SQL Manager
 */

'mysql' => 'My<abbr title="Structured Query Language">SQL</abbr>',

'total_records' => 'Datensätze gesamt',

'uptime' => 'Betriebszeit',

'database_tables' => 'Datenbank-Tabellen',

'search_tables' => 'Tabellen durchsuchen',

'table_name' => 'Tabellenname',

'records' => 'Datensätze',

'size' => 'Größe',

'manage' => 'Verwalten',

'repair' => 'Reparieren',

'optimize' => 'Optimieren',

'no_tables_selected' => 'Keine Tabellen ausgewählt, in denen diese Aktion ausgeführt werden soll.',

'no_action_selected' => 'Es muss eine Aktion gewählt werden, die in den Tabellen ausgeführt werden soll.',

'optimize_tables_results' => 'Optimierte Tabellenergebnisse',

'repair_tables_results' => 'Tabellenergebnisse reparieren',

'table' => 'Tabelle',

'status' => 'Status',

'message' => 'Nachricht',

''=>''
);

/* End of file utilities_lang.php */
/* Location: ./system/user/language/deutsch/utilities_lang.php */
