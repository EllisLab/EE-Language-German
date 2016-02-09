<?php

$lang = array(

/**
 * Menu
 */

'general_settings' => 'Allgemeine Einstellungen',

'license_and_reg' => 'Lizenz & Registrierung',

'url_path_settings' => 'URL und Pfad-Einstellungen',

'outgoing_email' => 'Ausgehende Email',

'debugging_output' => 'Debugging & Output',

'content_and_design' => 'Inhalt & Design',

'comment_settings' => 'Kommentareinstellungen',

'html_buttons' => '<abbr title="Hyper-Text Markup Language">HTML</abbr> Buttons',

'template_settings' => 'Template Einstellungen',

'hit_tracking' => 'Hit Tracking',

'pages_settings' => 'Page Einstellungen',

'upload_directories' => 'Upload Verzeichnisse',

'word_censoring' => 'Wortzensierung',

'members' => 'Nutzer',

'messages' => 'Nachrichten',

'avatars' => 'Avatare',

'security_privacy' => 'Sicherheit & Privatsphäre',

'access_throttling' => 'Zugangsbeschränkung',

'captcha' => 'CAPTCHA',

'system_settings' => 'System Einstellungen',

/**
 * General Settings
 */

'site_name' => 'Name',

'site_short_name' => 'Kurzname',

'site_short_name_taken' => 'Der Kurzname ist bereits vorhanden.',

'site_online' => 'Website online?',

'site_online_desc' => 'Wenn auf <b>offline</b> gesetzt können nur Super Admin und zugelassene Nutzergruppen die Website sehen.',

'version_autocheck' => 'Automatische Überprüfung nach neuer Version',

'version_autocheck_desc' => 'Wenn auf <b>auto</b> gesetzt wird ExpressionEngine automatisch nach einer neuen Version suchen.',

'enable_msm' => 'Site-Verwaltung anschalten?',
'enable_msm_desc' => 'Wenn <b>aktivieren</b> gesetzt ist, können Super Admins und zugelassene Nutzergruppen weitere Websites über das <abbr title="Control Panel">CP</abbr> administrieren.',

'online' => 'Online',

'offline' => 'Offline',

'auto' => 'Auto',

'manual' => 'Manual',

'check_now' => 'Jetzt überprüfem',

'defaults' => 'Voreinstellungen',

'language' => 'Sprache',

'date_time_settings' => 'Datum &amp; Uhrzeit-Einstellungen',

'timezone' => 'Zeitzone',

'date_time_fmt' => 'Datum &amp; Zeitformat',

"24_hour" => "24-Stunden",

"12_hour" => "12-Stunden mit AM/PM",

'include_seconds' => 'Sekunden zeigen?',

'include_seconds_desc' => 'Wenn auf <b>ja</b> gesetzt werden bei der Datumsanzeige auch die Sekunden angezeigt.',

'btn_save_settings' => 'Einstellungen sichern',

'running_current' => 'ExpressionEngine ist aktuell',

'running_current_desc' => 'ExpressionEngine %s ist die aktuelle Version.',

'error_getting_version'	=> 'ExpressionEngine %s wird zur Zeit benutzt. Es kann zur Zeit nicht festgestellt werden, ob es eine neue Version gibt.',

'version_update_available' => 'Es gibt eine neue Version von ExpressionEngine',

'version_update_inst' => 'ExpressionEngine %s ist verfügbar. <a href="%s" rel="external">Die neuste Version herunterladen</a> und den <a href="%s" rel="external">Anweisungen zum Update</a> folgen.',

/**
 * License & Registration
 */

'license_and_registration' => 'Lizenz &amp; Registrierung',
'license_and_registration_settings' => 'Lizenz &amp; Registrierungs-Einstellungen',

'license_updated' => 'Lizenz &amp; Registrierung aktualisiert',
'license_updated_desc' => 'Die Lizenz- &amp; Registrierungsinformation wurden erfolgreich gesichert.',

'license_file_upload_error' => 'Die Lizenz &amp; Registrierung konnte nicht aktualisiert werden',
'license_file_upload_error_desc' => 'Wir konnten die Lizenz &amp; Registrierung nicht aktualisieren, bitte die Fehler unten ansehen und beheben.',

'license_file_error' => 'Lizenz ungültig',
'license_file_corrupt_license_file' => 'Der Lizenzdatei fehlen Daten.',
'license_file_invalid_signature' => 'Die Lizenzdatei hat eine ungültige Signatur.',
'license_file_missing_pubkey' => 'ExpressionEngine fehlen Teile im Programm. Bitte laden Sie unter <a href="%s" rel="external">EllisLab.com</a> eine neue Version herunter.',
'license_file_invalid_license_number' => 'Die Lizenzdatei ist nicht gültig.',

'license_file_fail' => 'Die Lizenz konnte nicht gespeichert werden',
'license_file_permissions' => 'Die Lizenzdatei konnte nicht gespeichert werden, bitte die Rechte überprüfen für <b>%s</b>.',

'license_file' => 'Lizenzdatei',
'license_file_desc' => 'Gefunden auf der sogenannten <a href="%s" rel="external">purchase management</a> Seite.',

'site_limit' => 'Site Limit',

'features_limited' => 'Limitierte Features',
'features_limited_desc' => 'Die Core Version von ExpressionEngine ist Feature-limitiert. <a href="%s" rel="external">Jetzt upgraden.</a>',

/**
 * URLs and Path Settings
 */

'url_path_settings_title' => '<abbr title="Uniform Resource Location">URL</abbr>- und Pfad-Einstellungen',

'site_index' => 'Website Index Seite',

'site_index_desc' => 'Normalerweise <mark>index.php</mark>.',

'site_url' => 'Website Quellverzeichnis',

'site_url_desc' => '<abbr title="Uniform Resource Location">URL</abbr>-Adresse der <mark>index.php</mark>.',

'cp_url' => 'Control Panel Verzeichnis',

'cp_url_desc' => '<abbr title="Uniform Resource Location">URL</abbr>-Adresse des Control Panels.',

'themes_url' => 'Themes Verzeichnis',

'themes_url_desc' => '<abbr title="Uniform Resource Location">URL</abbr>-Adresse des <mark>Themes</mark>-Verzeichnis.',

'themes_path' => 'Themes Pfad',

'themes_path_desc' => 'Absoluter Pfad zum <mark>Themes</mark>-Verzeichnis.',

'docs_url' => 'Dokumentation',

'docs_url_desc' => '<abbr title="Uniform Resource Location">URL</abbr>-Adresse der <mark>Dokumentation</mark>.',

'member_segment_trigger' => 'Profil des <abbr title="Uniform Resource Location">URL</abbr>-Segment',

'member_segment_trigger_desc' => 'Das Keywort, das das Nutzerprofil anzeigt. <b>Darf nicht</b> das gleiche sein wie ein Template oder eine Templategruppe.',

'category_segment_trigger' => '<abbr title="Uniform Resource Location">URL</abbr>-Segment für Kategorien',

'category_segment_trigger_desc' => 'Das Wort, das Kategorien anzeigt. <b>Darf nicht</b> das gleiche sein wie ein Template oder eine Templategruppe.',

'category_url' => 'Kategorie <abbr title="Uniform Resource Location">URL</abbr>',

'category_url_desc' => 'Wenn auf <b>Titel</b> gestellt werden die Kategorielinks die <abbr title="Uniform Resource Location">URL</abbr>-Titel anstelle der ID benutzen.',

'category_url_opt_titles' => 'Titel',

'category_url_opt_ids' => 'IDs',

'url_title_separator' => '<abbr title="Uniform Resource Location">URL</abbr> Titel Trennung',

'url_title_separator_desc' => 'Zeichen, das benutzt wird um in den <abbr title="Uniform Resource Location">URL</abbr>s Leerzeichen zu ersetzen. <mark>Bindestriche (-)</mark> werden empfohlen.',

'url_title_separator_opt_hyphen' => 'Bindestrich (mehrere-woerter)',

'url_title_separator_opt_under' => 'Unterstrich (mehrere_woerter)',

/**
 * Outgoing Email
 */

'webmaster_email' => 'E-Mail-Adresse',

'webmaster_email_desc' => 'Die E-Mail-Adresse, von der automatisierte E-Mails kommen sollen. Ohne diese werden automatisierte E-Mails wahrscheinlich wie Spam behandelt.',

'webmaster_name' => 'Von wem',

'webmaster_name_desc' => 'Name, der für die automatisierten E-Mails benutzt werden soll.',

'email_charset' => 'Zeichenkodierung',

'email_charset_desc' => 'E-Mails brauchen eine Zeichenkodierung, um richtig dargestellt zu werden. UTF-8 wird empfohlen.',

'mail_protocol' => 'Protokoll',

'mail_protocol_desc' => 'Welches Protokoll soll zum Mailversand benutzt werden? SMTP wird empfohlen.',

'smtp_options' => 'SMTP Optionen',

'smtp_server' => 'Server Adresse',

'smtp_port' => 'SMTP Port',

'smtp_server_desc' => 'URL-Adresse des <mark>SMTP Server</mark>s.',

'sending_options' => 'Versandoptionen',

'mail_format' => 'E-Mail Format',

'mail_format_desc' => 'Das Format, in dem E-Mails versandt werden. Text wird empfohlen.',

'word_wrap' => 'Fließtext umbrechen?',

'word_wrap_desc' => 'Wenn auf <b>Aktivieren</b> geschaltet wird das System lange Zeilen auf eine besser lesbare Breite umbrechen.',

'php_mail' => 'PHP Mail',

'sendmail' => 'Sendmail',

'smtp' => 'SMTP',

'plain_text' => 'Text',

'html' => 'HTML',

'empty_stmp_fields' => 'Dieses Feld wird für SMTP benötigt.',

/**
 * Debugging & Output
 */

'enable_errors' => 'Error Reporting aktivieren?',

'enable_errors_desc' => 'Wenn auf <b>aktivieren</b> gesetzt werden Super Admins und Nutzergruppen mit entsprechenden Rechten PHP/MySQL-Fehler sehen.',

'show_profiler' => 'Debugging aktivieren?',

'show_profiler_desc' => 'Wenn auf <b>aktivieren</b> gesetzt werden Super Admins und Nutzergruppen mit entsprechenden Rechten Benchmark-Ergebnisse, alle SQL-Abfragen, und abgesandte Formular-Daten am Fuss der Seite sehen.',

'output_options' => 'Output Optionen',

'gzip_output' => '<abbr title="GNU Zip Compression">GZIP</abbr>-Komprimierung aktivieren?',

'gzip_output_desc' => 'Wenn auf <b>ja</b> gesetzt wird die Website GZIP-Komprimierung benutzen, was die Pageload-Geschwindigkeit verringert.',

'force_query_string' => '<abbr title="Uniform Resource Location">URL</abbr>-Suchabfragen erzwingen?',

'force_query_string_desc' => 'Wenn auf <b>ja</b> gesetzt werden Server, die <mark>PATH_INFO</mark> nicht unterstützen, stattdessen Suchabfragen über URLs benutzen.',

'send_headers' => '<abbr title="Hypertext Transfer Protocol">HTTP</abbr> Page Header benutzen?',

'send_headers_desc' => 'Wenn auf <b>ja</b> gesetzt wird die Website die <abbr title="Hypertext Transfer Protocol">HTTP</abbr>-Header für alle Seiten generieren.',

'redirect_method' => 'Weiterleitung',

'redirect_method_desc' => 'Art der Weiterleitung, die das System für <mark>{redirect=\'\'}</mark> und andere Weiterleitungen benutzt.',

'redirect_method_opt_location' => 'Location (das schnellste)',

'redirect_method_opt_refresh' => 'Refresh (Nur für Windowsserver)',

'caching_driver' => 'Speicher Treiber (Cache)',

'caching_driver_desc' => 'Caches können entweder dateibasiert oder als Memcache laufen.',

'caching_driver_failover' => 'Kann keine Verbindung aufbauen zu %s, benutze daher den %s Treiber.',

'caching_driver_file_fail' => 'Kann nicht den %s Treiber benutzen: Cache Rechte und Pfad überprüfen.',

'disable_caching' => 'Caching ausschalten',

'max_caches' => 'Speicherbare <abbr title="Uniform Resource Identifier">URI</abbr>s',

'max_caches_desc' => 'Wenn die Seiten oder die Datenbank zwischengespeichert werden, limitiert das den verfügbaren Cache. 150 wird für kleine Sites und 300 für große Seiten empfohlen. Das erlaubte Maximium liegt bei 1000.',

'new_relic' => 'New Relic Optionen',

'use_newrelic' => 'New Relic RUM JavaScript aktivieren?',

'use_newrelic_desc' => 'Wenn auf <b>ja</b> gesetzt wird New Relic <a href="https://docs.newrelic.com/docs/browser/new-relic-browser/page-load-timing-resources/instrumentation-browser-monitoring" rel="external">Real User Monitoring JavaScript</a> zu allen Seiten hinzufügen.',

'newrelic_app_name' => 'New Relic Application Name',

'newrelic_app_name_desc' => 'Ändert den Namen der Applikation, der im New Relic Dashboard ersecheint für diese ExpressionEngine Installation.',

/**
 * Content & Design
 */

'new_posts_clear_caches' => 'Cache löschen bei neuen Einträgen?',

'new_posts_clear_caches_desc' => 'Wenn auf <b>ja</b> gesetzt werden alle Caches gelöscht, wenn neue Einträge veröffentlicht werden.',

'enable_sql_caching' => 'Dynamische Channel Abfragen im Cache speichern?',

'enable_sql_caching_desc' => 'Wenn auf <b>ja</b> gesetzt wird die Geschwindigkeit von dynamisch generierten Seiten verbessert. <b>Nicht</b> benutzen, wenn Funktionen mit "Zukünftigen Einträgen" oder "Vergangenen Einträgen" benutzt werden sollen.',

'categories_section' => 'Kategorien',

'auto_assign_cat_parents' => 'Elternkategorie bestimmen?',

'auto_assign_cat_parents_desc' => 'Wenn auf <b>ja</b> gesetzt wird ExpressionEngine automatisch die Elternkategorie setzen wenn eine neue Kindkategorie hinzugefügt wird.',

'channel_manager' => 'Channel-Verwaltung',

'image_resizing' => 'Bildgröße anpassen',

'image_resize_protocol' => 'Protokoll',

'image_resize_protocol_desc' => 'Beim Hosting-Provider nachfragen, was angeboten wird.',

'gd' => 'GD',

'gd2' => 'GD 2',

'netpbm' => 'NetPBM',

'imagemagick' => 'ImageMagick',

'image_library_path' => 'Pfad zum Werkzeug',

'image_library_path_desc' => 'Absoluter Pfad zum <mark>Bildbearbeitungsprogramm</mark>.</em>
<em><b>Notwendig</b> für ImageMagick und NetPBM.',

'invalid_image_library_path' => 'Dieses Feld muss einen gültien Pfad auf die bildbearbeitende Software haben, wenn ImageMagick oder NetPBM ausgewählt sind.',

'thumbnail_suffix' => 'Thumbnail Suffix',

'thumbnail_suffix_desc' => 'Wird allen automatisch generierten Thumbnails hinzugefügt. <b>Beispiel</b>: photo_thumb.jpg',

'emoticons' => 'Emoticons',

'enable_emoticons' => 'Emoticons aktivieren?',

'enable_emoticons_desc' => 'Wenn auf <b>ja</b> gesetzt werden Emoticons im Fließtext automatisch in Bildemoticons umgewandelt.',

'emoticon_url' => '<abbr title="Unified Resource Locator">URL</abbr>',

'emoticon_url_desc' => '<abbr title="Unified Resource Locator">URL</abbr>-Adresse des <mark>Emoticon</mark> Verzeichnisses.',

/**
 * Comment Settings
 */

'all_comments' => 'Alle Kommentare',

'enable_comments' => 'Kommentar-Module aktivieren?',

'enable_comments_desc' => 'Wenn auf <b>aktivieren</b> gesetzt können in den Channels Kommentare benutzt werden.',

'options' => 'Optionen',

'comment_word_censoring' => 'Wort-Zensierung aktivieren?',

'comment_word_censoring_desc' => 'Wenn auf <b>aktivieren</b> gesetzt können werden Kommentare durch die <a href="%s">Wort-Zensierung</a> gefiltert.',

'comment_moderation_override' => 'Vergangene Einträge moderieren?',

'comment_moderation_override_desc' => 'Wenn auf <b>ja</b> gesetzt werden Kommetare zu einem alten Eintrag geschlossen und müssen durch einen Moderator freigegeben werden.',

'comment_edit_time_limit' => 'Zeitlimit zum Kommentar bearbeiten (in Sekunden)',

'comment_edit_time_limit_desc' => 'Zeitfenster, in dem jemand seinen Kommentar nach Absenden noch bearbeiten kann. <b>0</b> eingeben für kein Limit.',

/**
 * Template Settings
 */

'template_manager' => 'Template-Verwaltung',

'strict_urls' => 'Strikte <abbr title="Uniform Resource Location">URL</abbr>s anschalten?',

'strict_urls_desc' => 'Wenn auf <b>aktivieren</b> gestellt wird ExpressioneEngine die <abbr title="Uniform Resource Location">URL</abbr> strikt interpretieren.',

'site_404' => '404 Seite',

'site_404_desc' => 'Das Template das als 404 Fehler Seite benutzt wird.',

'save_tmpl_revisions' => 'Template-Bearbeitungen sichern?',

'save_tmpl_revisions_desc' => 'Wenn auf <b>ja</b> gesetzt wird ExpressionEngine bis zu <b>5</b> Template-Bearbeitungen speichern.',

'max_tmpl_revisions' => 'Maximale Anzahl an Bearbeitungen?',

'max_tmpl_revisions_desc' => 'Anzahl an Bearbeitungen, die pro Template in der Datenbank gespeichert werden. Wir empfehlen eine niedrige Anzahl, da dies die Datenbank aufblähen kann',

'save_tmpl_files' => 'Templates als Dateien speichern?',

'save_tmpl_files_desc' => 'Wenn auf ja gesetzt werden die Templates als Dateien auf dem Server gespeichert.',

/**
 * Hit Tracking
 */

'enable_online_user_tracking' => 'Online User Verfolgung aktivieren?',
'enable_online_user_tracking_desc' => 'Wenn auf <b>ja</b> gesetzt wird ExpressionEngine angemeldete Nutzer tracken.',

'enable_hit_tracking' => 'Template Hits verfolgen?',
'enable_hit_tracking_desc' => 'Wenn auf <b>ja</b> gesetzt wird ExpressionEngine zählen wie oft ein Template angesehen wird.',

'enable_entry_view_tracking' => 'Artikelansicht verfolgen?',
'enable_entry_view_tracking_desc' => 'Wenn auf <b>ja</b> gesetzt wird ExpressionEngine zählen, wie oft ein Artikeleintrag angesehen wird.',

'log_referrers' => 'Referrer verfolgen?',
'log_referrers_desc' => 'Wenn auf <b>ja</b> gesetzt wird ExpressionEngine alle eingehenden Links verfolgen.',

'max_referrers' => 'Wieviel Referrer sollen gesichert werden',

'dynamic_tracking_disabling' => 'Überschreitung des Grenzwert?',
'dynamic_tracking_disabling_desc' => 'Das Tracking wird eingestellt, wenn die Zahl überschritten wird.</em> <em>Online User Verfolgung muss hierfür aktiviert werden. <a href="%s" ref="external">Mehr lernen</a>',

/**
 * Word Censoring
 */

'word_censorship' => 'Wort-Zensierung',

'enable_censoring' => 'Wort-Zensierung aktivieren?',

'enable_censoring_desc' => 'Wenn auf <b>aktivieren</b> gesetzt werden Worte ersetzt werden mit den angegebenen Zeichen.',

'censor_replacement' => 'Zeichen ersetzen',

'censor_replacement_desc' => 'Worte, die auf Worte in der Zensurliste passen werden mit diesen Zeichen ersetzt.',

'censored_words' => 'Worte zur Zensierung',

'censored_words_desc' => 'Ein Wort pro Zeile. Alle Worte auf der Liste werden mit den oben stehenden Zeichen ersetzt.',

/**
 * Member Settings
 */

'member_settings' => 'Nutzereinstellungen',

'allow_member_registration' => 'Registrierungen erlauben?',

'allow_member_registration_desc' => 'Wenn auf <b>ja</b> gesetzt werden Besucher sich als Nutzer registieren können.',

'req_mbr_activation' => 'Kontoaktivierungsart',

'req_mbr_activation_desc' => 'Wie sollen Besucher ihre Registierung aktivieren können.',

'req_mbr_activation_opt_none' => 'Keine Aktiverung nögig',

'req_mbr_activation_opt_email' => 'E-Mail zur Aktivierung schicken',

'req_mbr_activation_opt_manual' => 'Vom Administrator freigeben',

'require_terms_of_service' => 'AGBs akzeptieren?',

'require_terms_of_service_desc' => 'Wenn auf <b>ja</b> gesett müssen Nutzer den AGB zustimmen bei der Registrierung.',

'allow_member_localization' => 'Nutzern erlauben eine eigene Zeit einzustellen?',

'allow_member_localization_desc' => 'Wenn auf <b>ja</b> gesesetzt können die Benutzer eine eigene Zeit und ein eigenens Datum für ihr Konto einstellen.',

'default_member_group' => 'Voreingestellte Nutzergruppe',

'default_member_group_desc' => 'Die Standardgruppe für alle Nutzer.',

'member_theme' => 'Nutzer Profil Theme',

'member_theme_desc' => 'Standard Theme benutzt für Nutzerprofile.',

'member_listing_settings' => 'Nutzer Listeneinstellungen',

'memberlist_order_by' => 'Sortiert nach',

'memberlist_order_by_desc' => 'Nutzerliste wird sortiert nach',

'memberlist_order_by_opt_posts' => 'Postings gesamt',

'memberlist_order_by_opt_screenname' => 'Nutzername',

'memberlist_order_by_opt_entries' => 'Einträge gesamt',

'memberlist_order_by_reg_date' => 'Registrierungsdatum',

'memberlist_order_by_opt_comments' => 'Kommentare gesamt',

'memberlist_sort_order' => 'Sortieren nach',

'memberlist_sort_order_desc' => 'Sortierreihenfolge für die Nutzerliste.',

'memberlist_sort_order_opt_asc' => 'Aufsteigend (A-Z)',

'memberlist_sort_order_opt_desc' => 'Absteigend (Z-A)',

'memberlist_row_limit' => 'Gesamtresultat',

'memberlist_row_limit_desc' => 'Insgesamt zurückgegebene Ergebnisse pro Seite für die Nutzerliste.',

'registration_notify_settings' => 'Einstellungen für Registrierungsbenachrichtigung',

'new_member_notification' => 'Benachrichtigung für neue Nutzer?',

'new_member_notification_desc' => 'Wenn auf  <b>ja</b> gesetzt wird eine Benachrichtigung an die folgende E-Mail-Adresse geschickt.',

'mbr_notification_emails' => 'Benachrichtigungsempfänger',

'mbr_notification_emails_desc' => 'Mehrere E-Mail-Adressen mit Komma trennen.',

/**
 * Messages
 */

'messaging_settings' => 'Benachrichtigungseinstellungen',

'prv_msg_max_chars' => 'Maximale Zeichenanzahl',

'prv_msg_html_format' => 'Formatierung',

"html_safe" => "Nur HTML sichern",

"html_all" => "Nur HTML (nicht empfohlen)",

"html_none" => "HTML umwandeln",

'prv_msg_auto_links' => '<abbr title="Uniform Resource Location">URL</abbr>s und Emails in Links umwandeln?',

'prv_msg_auto_links_desc' => 'Wenn auf <b>ja</b> gesetzt werden alle <abbr title="Uniform Resource Location">URL</abbr>s und E-Mails automatisch in Links umgewandelt.',

'attachment_settings' => 'Einstellungen für Anhänge',

'prv_msg_upload_url' => 'Verzeichnis zum Hochladen',

'prv_msg_upload_url_desc' => '<abbr title="Uniform Resource Location">URL</abbr>-Adresse für das Verzeichnis der <mark>Anhänge</mark>.',

'prv_msg_upload_path_desc' => 'Absoluter Pfad für das Verzeichnis der <mark>Anhänge</mark>.',

'prv_msg_upload_path' => 'Hochladepfad',

'prv_msg_max_attachments' => 'Maximale Größe der Anhänge',

'prv_msg_attach_maxsize' => 'Maximale Dateigröße (<abbr title="kilobyte">kb</abbr>)',

'prv_msg_attach_maxsize_desc' => 'Maximal erlaubte Dateigröße pro Anhang in persönlichen Nachrichten.',

'prv_msg_attach_total' => 'Maximale Dateigröße (<abbr title="megabyte">mb</abbr>)',

'prv_msg_attach_total_desc' => 'Maximal erlaubte Dateigröße pro Anhang für jeden Nutzer.',

/**
 * Avatars
 */

'avatar_settings' => 'Avatar Einstellungen',

'enable_avatars' => 'Avatare erlauben?',

'enable_avatars_desc' => 'Wenn auf <b>ja</b> gesetzt dürfen Nutzer Avatare in Kommentaren und im Forum benutzen.',

'allow_avatar_uploads' => 'Das Hochladen von Avataren erlauben?',

'allow_avatar_uploads_desc' => 'Wenn auf <b>ja</b> gesetzt dürfen Nutzer ihren eigenen Avatar hochladen.',

'avatar_url' => 'Avatar Verzeichnis',

'avatar_url_desc' => '<abbr title="Uniform Resource Location">URL</abbr>-Adresse des <mark>Avatar</mark>-Verzeichnisses.',

'avatar_path' => 'Avatar Pfad',

'avatar_path_desc' => 'Absoluter Pfad auf das <mark>Avatar</mark>-Verzeichnis.',

'avatar_file_restrictions' => 'Avatar Dateieinschränkungen',

'avatar_max_width' => 'Maximale Breite',

'avatar_max_height' => 'Maximale Höhe',

'avatar_max_kb' => 'Maximale Dateigröße (<abbr title="kilobytes">kb</abbr>)',

/**
 * CAPTCHA
 *
 */

'captcha_settings' => 'CAPTCHA-Einstellungen',

'captcha_settings_title' => '<abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr> Einstellungen',

'require_captcha' => '<abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr> einschalten?',

'require_captcha_desc' => 'Wenn auf <b>ja</b> gesetzt müssen Besucher ein <abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr>-Feld in den Formularen auf der Website ausfüllen.',

'captcha_font' => 'TrueType-Fonts benutzen?',

'captcha_font_desc' => 'Wenn auf <b>ja</b> gesetzt wird ein TrueType-Font für die <abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr>-Darstellung benutzt.',

'captcha_rand' => 'Zufallszahl hinzufüguen?',

'captcha_rand_desc' => 'Wenn auf <b>ja</b> gesetzt werden neben Buchstaben auch Zahlen zur <abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr>-Generierung genutzt.',

'captcha_require_members' => 'Müssen Nutzer <abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr>-Felder ausfüllen, wenn sie angemeldet sind?',

'captcha_require_members_desc' => 'Wenn auf <b>nein</b> gesetzt müssen angemeldete Nutzer keine <abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr>-Felder ausfüllen.',

'captcha_url' => '<abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr>-Verzeichnis',

'captcha_url_desc' => '<abbr title="Uniform Resource Location">URL</abbr>-Adresse des <mark><abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr></mark>-Verzeichnisses.',

'captcha_path' => '<abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr>-Pfad',

'captcha_path_desc' => 'Absoluten Pfad des <mark><abbr title="Completely Automated Public Turing test to tell Computers and Humans Apart">CAPTCHA</abbr></mark>-Verzeichnisses.',

/**
 * Security & Privacy
 */

'security_tip' => '<b>Tip</b>: Sicherheit der Website ist important.',

'security_tip_desc' => 'Jede Einstellung markiert mit <span title="security enhancement"></span> wird die Sicherheit der Website verbessern.',

'cp_session_type' => '<abbr title="Control Panel">CP</abbr> Sitzungsart',

'website_session_type' => 'Website Sitzungsart',

'cs_session' => 'Cookies und Session ID',

'c_session' => 'Nur Cookies',

's_session' => 'Nur Session ID',

'cookie_settings' => 'Cookie-Einstellungen',

'cookie_domain' => 'Domain',

'cookie_domain_desc' => '<mark>.yourdomain.com</mark> für systemweite Cookies.',

'cookie_path' => 'Pfad',

'cookie_path_desc' => 'Pfad, für den die Cookies gelten sollen. (<a href="%s">Mehr Info</a>)',

'cookie_prefix' => 'Präfix',

'cookie_prefix_desc' => 'Nur nötig wenn mehrere Installationen von ExpressionEngine betrieben werden.',

'cookie_httponly' => 'Cookies nur über <abbr title="Hyper Text Transfer Protocol">HTTP</abbr> senden?',

'cookie_httponly_desc' => 'Wenn auf <b>ja</b> gesetzt sind können Cookies <b>nicht</b> über JavaScript angesprochen werden.',

'cookie_secure' => 'Cookies sicher senden?',

'cookie_secure_desc' => 'Wenn auf <b>ja</b> gesetzt werden Cookies nur über eine sichere <abbr title="Hyper Text Transfer Protocol with Secure Sockets Layer">HTTPS</abbr>-Verbindung gesendet.</em><em>Ihre Site <b>muß</b> dafür überall <abbr title="Secure Sockets Layer">SSL</abbr> benutzen.',

'member_security_settings' => 'Nutzer Sicherheitseinstellungen',

'allow_username_change' => 'Nutzern erlauben den Nutzernamen zu ändern?',

'allow_username_change_desc' => 'Wenn auf <b>ja</b> gesetzt dürfen Nutzer ihren Nutzernamen ändern.',

'un_min_len' => 'Mindest-Namenslänge',

'un_min_len_desc' => 'Mindestanzahl an Buchstaben für neue Nutzernamen.',

'allow_multi_logins' => 'Mehrfache Anmeldungen erlauben?',

'allow_multi_logins_desc' => 'Wenn auf <b>ja</b> gesetzt können Nutzer sich mehrfach an einem Konto anmelden. Wenn der Session-Type auf <mark>nur Cookies</mark> gestellt ist, funkioniert.',

'require_ip_for_login' => 'Werden User Agent und <abbr title="Internet Protocol">IP</abbr> zwingend gebraucht für die Anmeldung?',

'require_ip_for_login_desc' => 'Wenn auf <b>ja</b> gesetzt können sich Nutzer ohne gültigen User Agent und <abbr title="Internet Protocol">IP</abbr>-Adresse nicht anmelden.',

'password_lockout' => 'Password-Eingabeblock?',

'password_lockout_desc' => 'Wenn auf <b>aktivieren</b> gesetzt werden Nutzer vom System geblockt, wenn sie sich zu oft falsch angemeldet haben.',

'password_lockout_interval' => 'Password-Eingabeblock-Intervall',

'password_lockout_interval_desc' => 'Minutenanzahl ein Nutzer bleibt geblockt nachdem er sich viermal falsch angemeldet hat.',

'require_secure_passwords' => 'Sichere Passwörter anfordern?',

'require_secure_passwords_desc' => 'Wenn auf <b>ja</b> gesetzt müssen Nutzer Passwörter benutzen, die mindestens einen Großbuchstaben, einen Kleinbuchstaben und eine Nummer enthalten.',

'pw_min_len' => 'Mindestpasswortlänge',

'pw_min_len_desc' => 'Mindestanzahl an Zeichen, die ein Nutzerpasswort enthalten muss.',

'allow_dictionary_pw' => 'Wörter aus Wörterbüchern in Passworten erlauben?',

'allow_dictionary_pw_desc' => 'Wenn auf <b>ja</b> gesetzt können Nutzer normale Wörter aus Wörterbüchern benutzen. <mark>Dafür muss eine Wörterbuch-Datei installiert werden.</mark>',

'name_of_dictionary_file' => 'Wörterbuch-Datei',

'name_of_dictionary_file_desc' => 'URL-Adresse der <mark>Wörterbuch</mark>-Datei.',

'form_security_settings' => 'Formular Sicherheitseinstellungen',

'deny_duplicate_data' => 'Doppelte Daten abweisen?',

'deny_duplicate_data_desc' => 'Wenn auf <b>ja</b> gesetzt werden Formulare jede Eingabe abweisen, die eine exakte Kopie von vorhandenen Daten sind.',

'require_ip_for_posting' => 'Werden User Agent und <abbr title="Internet Protocol">IP</abbr> zwingend gebraucht für Postings?',

'require_ip_for_posting_desc' => 'Wenn auf <b>ja</b> gesetzt können Nutzer ohne gültigen User Agent und <abbr title="Internet Protocol">IP</abbr>-Adresse nicht posten',

'xss_clean_uploads' => '<abbr title="Cross Site Scripting">XSS</abbr>-Filter aktivieren?',

'xss_clean_uploads_desc' => 'Wenn auf <b>ja</b> gesetzt können werden Formulare <abbr title="Cross Site Scripting">XSS</abbr>-Filter anwenden auf Eingaben.',

/**
 * Access Throttling
 */

'enable_throttling' => 'Throttling anschalten?',

'enable_throttling_desc' => 'Wenn auf <b>aktivieren</b> gesetzt werden Nutzer geblockt, sollten sie die gesetzten Bedingungen überschreiten.',

'banish_masked_ips' => '<abbr title="Internet Protocol">IP</abbr> erforderlich?',

'banish_masked_ips_desc' => 'Wenn auf <b>ja</b> gesetzt können Nutzer ohne gültige <abbr title="Internet Protocol">IP</abbr>-Adresse sich nicht anmelden.',

'throttling_limit_settings' => 'Throttling Limit Einstellungen',

"max_page_loads" => "Maximum Page Loads",

"max_page_loads_desc" => "Maximale Anzahl an Malen ein Nutzer kann eine Seite der Website neuladen (innerhalb des unten gesetzten Zeitintervalls) bevor er geblockt wird.",

"time_interval" => "Zeitintervall",

"time_interval_desc" => "Die Anzahl an Sekunden während der die oben genannte Anzahl an Page Loads erlaubt sind.",

"lockout_time" => "Block-Zeitfenster",

"lockout_time_desc" => "Das Zeitfenster, innerhalb dessen der Nutzer ausgesperrt bleibt.",

'banishment_type' => 'Blockier Action',

'banish_404' => 'Auf einen 404-Fehler weiterleiten',

'banish_redirect' => 'URL-Weiterleitung',

'banish_message' => 'Nachricht darstellen',

'banishment_url' => 'Umleitung',

'banishment_url_desc' => '<abbr title="Uniform Resource Location">URL</abbr>-Adresse für blockierte Nutzer.',

'banishment_message' => 'Nachricht',

/**
 * HTML Buttons
 */

'create_html_buttons_success' => '<abbr title="Hyper-Text Markup Language">HTML</abbr>-Button angelegt',
'create_html_buttons_success_desc' => 'Der <abbr title="Hyper-Text Markup Language">HTML</abbr>-Button <b>%s</b> wurde angelegt.',

'create_html_buttons_error' => 'Kann den <abbr title="Hyper-Text Markup Language">HTML</abbr>-Button nicht angelegen',
'create_html_buttons_error_desc' => 'Der <abbr title="Hyper-Text Markup Language">HTML</abbr>-Button konnte nicht angelegt werden, unten angegebene Fehler ansehen und beheben.',

'edit_html_buttons_success' => '<abbr title="Hyper-Text Markup Language">HTML</abbr>-Button aktualisiert',
'edit_html_buttons_success_desc' => 'Der <abbr title="Hyper-Text Markup Language">HTML</abbr>-Button <b>%s</b> wurde aktualisiert.',

'edit_html_buttons_error' => 'Kann den <abbr title="Hyper-Text Markup Language">HTML</abbr>-Button nicht bearbeiten',
'edit_html_buttons_error_desc' => 'Der <abbr title="Hyper-Text Markup Language">HTML</abbr>-Button konnte nicht bearbeitet werden, unten angegebene Fehler ansehen und beheben.',


''=>''
);

/* End of file settings_lang.php */
/* Location: ./system/user/language/deutsch/settings_lang.php */
