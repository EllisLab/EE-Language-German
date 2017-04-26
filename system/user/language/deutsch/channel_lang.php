<?php

$lang = array(

//----------------------------------------
// Required for MODULES page
//----------------------------------------

  'channel_module_name' => 'Channel',

  'channel_module_description' => 'Channel Modul',

//----------------------------------------

  'channel_no_preview_template' => 'Ein Template zur Voransicht ist nicht im Tag angegeben',

  'channel_must_be_logged_in' => 'Sie müssen ein angemeldetes Mitglied dieser Seite sein, damit Sie diese Aktion vornehmen können.',

  'channel_not_specified' => 'Ein Channel muss definiert sein, damit das Eingabeformular benutzt werden kann.',

  'channel_no_action_found' => 'Die Resourcen zum Anzeigen des Eingabefomulares lassen sich nicht laden',

  /**
   * 3.0
   *
   * Channel Manager
   */

  'section_search_results' => 'Ergebnisse für die Suchanfrage <mark>%s</mark>',

  'search_for' => 'Suche nach "%s"',

  'channel_manager' => 'Channel-Verwaltung',

  'manage_channels' => 'Channels verwalten',

  'channel' => 'Channel',

  'channels' => 'Channels',

  'short_name' => 'Kurzname',

  'short_name_col' => 'Kurzname',

  'custom_fields' => 'Eigenes Feld',

  'custom_fields_for' => 'Eigenes Feld für %s',

  'field_group' => 'Feldergruppe',

  'field_groups' => 'Feldergruppen',

  'category_groups' => 'Kategorien-Gruppen',

  'status_groups' => 'Status-Gruppen',

  'no_channels' => 'Keine <b>Channels</b> gefunden.',

  'create_channel' => 'Channel anlegen',

  'channels_removed' => 'Channels gelöscht',

  'channels_removed_desc' => '%d Channels wurden gelöscht.',

  'maximum_channels_reached' => 'Die Maximalzahl an möglich anlegbaren Channels wurde erreicht.',
  
  'import' => 'Import',
  'export_set' => 'Channel-Set exportieren',
  'btn_import' => 'Importieren',
  'import_channel' => 'Channel-Set importieren',
  
  'channel_set_not_exported' => 'Cannot Export Channel Set',
  'channel_set_not_exported_desc' => 'Not a valid channel.',

  'channel_set_upload_error' => 'Cannot Import Channel',
  'channel_set_upload_error_desc' => 'We were unable to import the channel, please make sure your cache folder is writable.',

  'channel_set_duplicates_error' => 'Import Creates Duplicates',
  'channel_set_duplicates_error_desc' => 'This channel set uses names that already exist on your site. Please rename the following items.',

  'channel_set_imported' => 'Channel Imported',
  'channel_set_imported_desc' => 'The channel was successfully imported.',

  'edit' => 'bearbeiten',

  'settings' => 'Einstellungen',

  'layout' => 'Layout',

  'layouts' => 'Layouts',

  'channel_form_layouts' => '%s &ndash; Formular-Layouts',

  'member_group' => 'Mitgliedergruppen',

  'no_layouts' => 'Keine Layouts',

  'create_form_layout' => 'Formular-Layout anlegen',

  'layout_options' => 'Layout-Optionen',

  'layout_member_groups' => 'Mitgliedergruppe(n)?',

  'member_groups_desc' => 'Mitgliedergruppe(n) auswählen zu diesem Layout.',

  'create_layout_success' => 'Formular-Layout angelegt',

  'create_layout_success_desc' => 'Das Formular-Layout <b>%s</b> wurde angelegt.',

  'create_layout_error' => 'Kann das Formular-Layout nicht anlegen',

  'create_layout_error_desc' => 'Wir können diese Gruppe nicht aktualisieren, bitte unten die Fehler ansehen und berichtigen.',

  'btn_preview_layout' => 'Voransicht Layout',

  'form_layouts' => 'Formular-Layouts',

  'edit_form_layout' => 'Formular-Layout bearbeiten &ndash; %s',

  'edit_layout_success' => 'Formular-Layout aktualisiert',

  'edit_layout_success_desc' => 'Das Formular-Layout <b>%s</b> wurde aktualisiert.',

  'edit_layout_error' => 'Das Formular-Layout kann nicht aktualisiert werden',

  'edit_layout_error_desc' => 'Wir können diese Gruppe nicht aktualisieren, bitte unten die Fehler ansehen und berichtigen.',

  'layouts_removed_desc' => 'Die folgenden Formular-Layouts wurden gelöscht',

  'add_tab' => 'Reiter hinzufügen',

  'tab_name' => 'Reiter-Name',

  'tab_name_desc' => 'Kurzname für diesen Reiter.',

  'tab_name_required'	=> 'Einen Namen für den Reiter wählen.',

  'duplicate_tab_name' => 'Ein Reiter mit diesem Namen existiert bereits.',

  'illegal_tab_name' => 'Reiter-Namen dürfen nicht die folgenden Zeichen enthalten: *, >, :, +, (, ), [, ], =, |, ", \', ., #, or $',

  'error_cannot_hide_tab' => 'Reiter läßt sich nicht verbergen',

  'error_tab_has_required_fields' => '<b>%s</b> enthält mindestens ein Pflichtfeld und kann nicht verborgen werden. Bewegen Sie das (oder die) Pflichtfeld(er) zu einem anderen Reiter.',

  'error_cannot_remove_tab' => 'Kann den Reiter nicht entfernen',

  'error_tab_has_fields' => '<b>%s</b> enthält mindestens ein Feld und kann nicht gelöscht werden. Bewegen Sie das (oder die) Felder zu einem anderen Reiter.',

  'assigned_to' => 'zugewiesen',

  /**
   * Channel Create/Edit
   */

  'edit_channel' => 'Channel bearbeiten',

  'channel_title' => 'Name',
  'channel_title_desc' => '',

  'channel_duplicate' => 'Den bestehenden Channel dublizieren?',
  'channel_duplicate_desc' => 'Bei Anlage werden alle Einstellungen des gewählten Channels in diesen Channel übernommen.',

  'channel_do_not_duplicate' => 'Nicht duplizieren',

  'channel_publishing_options' => 'Optionen der Veröffentlichung',

  'channel_publishing_options_warning' => '<b>Warnung</b>: Channels benötigen eigene Feldergruppen, um andere Daten außer Titel und Datum speichern zu können.',
  'channel_publishing_options_warning2' => 'Wenn Sie weitere Inhalte abspeichern möchten in diesem Channel, legen Sie zuerst eine <a href="%s">eigene Feldergruppe</a> an.',

  'channel_max_entries' => 'Maximal erlaubte Anzahl an Einträgen',

  'channel_max_entries_desc' => 'Das Feld leer lassen, falls kein Limit gewünscht wird.',

  'status_groups_desc' => '',

  'default_status_group' => 'Standard-Status',

  'status_groups_not_found' => 'Keine <b>Status-Gruppe</b> gefunden',

  'create_new_status_group' => 'Neue Status-Gruppe anlegen',

  'custom_field_group' => 'Eigene Feldergruppe',

  'custom_field_group_desc' => '',

  'custom_field_groups_not_found' => 'Keine <b>eigene Feldergruppe</b> gefunden',

  'create_new_field_group' => 'Neue Feldergruppe anlegen',

  'custom_fields_desc' => 'Wählen Sie die Felder, die in dieser Feldergruppe gebraucht werden.',

  'category_groups_desc' => '',

  'category_groups_not_found' => 'Keine <b>Kategorien-Gruppe</b> gefunden',

  'create_new_category_group' => 'Neue Kategorien-Gruppe anlegen',

  'channel_created' => 'Channel angelegt',

  'channel_created_desc' => 'Der Channel <b>%s</b> wurde angelegt.',

  'channel_not_created' => 'Der Channel kann nicht angelegt werden',

  'channel_not_created_desc' => 'Der Channel konnte nicht angelegt werden, bitte unten die Fehler ansehen und berichtigen.',

  'channel_updated' => 'Channel aktualisiert',

  'channel_updated_desc' => 'Der Channel <b>%s</b> wurde aktualisiert.',

  'channel_not_updated' => 'Der Channel konnte nicht aktualisiert werden',

  'channel_not_updated_desc' => 'Der Channel konnte nicht aktualisiert werden, bitte unten die Fehler ansehen und berichtigen.',

  'invalid_short_name' => 'Der Channel darf nur alphanummerische Zeichen und keine Leerzeichen enthalten.',

  'taken_channel_name' => 'Diesen Channel-Namen gibt es bereits.',

  /**
   * Channel Settings
   */

  'channel_settings' => 'Channel-Einstellungen',

  'channel_description' => 'Beschreibung',

  'channel_description_desc' => 'Kurzbeschreibung des Channels.',

  'xml_language' => '<abbr title="Extensible Markup Language">XML</abbr> language',

  'xml_language_desc' => 'Standard-Sprache für <abbr title="Extensible Markup Language">XML</abbr>-Dateien, die durch diesen Channel generiert werden.',

  'url_path_settings' => '<abbr title="Unified Resource Locator">URL</abbr>- und Pfad-Einstellungen',

  'channel_url_desc' => '<abbr title="Unified Resource Locator">URL</abbr>-Adresse dieses Channels.',

  'comment_form' => 'Kommentarformular',

  'comment_form_desc' => '<abbr title="Unified Resource Locator">URL</abbr>-Adresse des Kommentarformulars für diesen Channel.',

  'search_results' => 'Suchergebnisse',

  'search_results_desc' => '<abbr title="Unified Resource Locator">URL</abbr>-Adresse des Suchergebnisses für diesen Channel.',

  'rss_feed' => '<abbr title="Really Simple Syndication">RSS</abbr>-Feed',

  'rss_feed_desc' => '<abbr title="Unified Resource Locator">URL</abbr>-Adresse des <abbr title="Really Simple Syndication">RSS</abbr>-Feeds für diesen Channel.',

  'live_look_template' => 'Live Look Template',

  'live_look_template_desc' => 'Template für den <mark>Live Look</mark>.',

  'channel_defaults' => 'Standardeinstellungen',

  'title_field_label' => 'Label des Titelfeldes',
  'title_field_label_desc' => 'Ändert das Label des Titelfeldes im Publish-Formular für diesen Channel.',

  'default_title' => 'Generierter Titel',

  'default_title_desc' => 'Titel wurde allen <b>neuen</b> Einträgen in diesem Channel zugewiesen.',

  'url_title_prefix' => '<abbr title="Unified Resource Locator">URL</abbr>-Titel-Präfix',

  'url_title_prefix_desc' => '<abbr title="Unified Resource Locator">URL</abbr>-Titel-Präfix wurde allen <b>neuen</b> Einträgen in diesem Channel zugewiesen.',

  'default_status' => 'Status',

  'default_status_desc' => 'Status wurde allen <b>neuen</b> Einträgen in diesem Channel zugewiesen.',

  'default_category' => 'Kategorie',

  'default_category_desc' => 'Kategorie wurde allen <b>neuen</b> Einträgen in diesem Channel zugewiesen.',

  'search_excerpt' => 'Such-Ausschnitt',

  'search_excerpt_desc' => 'Feld wird benutzt für alles Suchergebnis-Ausschnitte für diesen Channel.',

  'publishing' => 'Veröffentlichen',

  'html_formatting' => '<abbr title="Hyper-Text Markup Language">HTML</abbr>-Format',

  'html_formatting_desc' => 'Niveau von <abbr title="Hyper-Text Markup Language">HTML</abbr> erlaubt.',

  'extra_publish_controls' => 'Sollen weitere Veröffentlichungskontrollen gezeigt werden?',

  'extra_publish_controls_desc' => 'Wenn auf <b>ja</b> gesetzt, erscheint ein zweites Set an Veröffentlichungskontrollen am oberen Ende des Publish-Formulars für diesen Channel.',

  'convert_image_urls' => 'Bild-<abbr title="Unified Resource Locator">URL</abbr>s zulassen?',

  'convert_image_urls_desc' => 'Wenn auf <b>ja</b> gesetzt, werden <abbr title="Unified Resource Locator">URL</abbr>s zu Bildern automatisch wie Bilder in den Einträgen dieses Channels behandelt und ausgegeben.',

  'convert_urls_emails_to_links' => '<abbr title="Unified Resource Locator">URL</abbr>s und Email-Adressen als Links darstellen?',

  'convert_urls_emails_to_links_desc' => 'Wenn auf <b>ja</b> gesetzt, werden <abbr title="Unified Resource Locator">URL</abbr>s und Email-Adressen automatisch als Links in den Einträgen dieses Channels dargestellt.',

  'channel_form' => 'Channel-Formular',

  'channel_form_status_desc' => 'Standard-Status für Formulare in diesem Channel.',

  'channel_form_default_author' => 'Autor',

  'channel_form_default_author_desc' => 'Standard-Autor für Gast-Einträge, die über das Channel-Formular gepostet werden.',

  'allow_guest_submission' => 'Gast-Einträge erlauben?',

  'allow_guest_submission_desc' => 'Wenn auf <b>ja</b> gesetzt, dürfen Gäste in diesem Channel posten.',

  'versioning' => 'Versionierung',

  'enable_versioning' => 'Überarbeitete Versionen für Einträge einschalten?',

  'enable_versioning_desc' => 'Wenn auf <b>ja</b> gesetzt, wird ExpressionEngine überarbeitete Versionen für alle Einträge in diesem Channel speichern.',

  'max_versions' => 'Maximale Anzahl an Überarbeitungen pro Eintrag',

  'max_versions_desc' => 'Maximale Anzahl an Überarbeitungen pro Eintrag, die für jeden Eintrag gespeichert werden.',

  'notifications' => 'Benachrichtigungen',

  'enable_author_notification' => 'Autoren-Benachrichtigung einschalten?',

  'enable_author_notification_desc' => 'Wenn <b>aktivieren</b> gewählt, wird der Autor des Eintrages benachrichtigt, sobald der Eintrag kommentiert wurde.',

  'enable_channel_entry_notification' => 'Benachrichtigung für Channel-Einträge einschalten?',

  'enable_channel_entry_notification_desc' => 'Wenn <b>aktivieren</b> gewählt ist, bekommen alle Empfänger eine Email-Benachrichtigung, wenn ein neuer Artikel in diesem Channel veröffentlicht wurde.</em>
<em>Mehrere E-Mail-Adressen mit einem <mark>Komma (,)</mark> trennen.',

  'enable_comment_notification' => 'Kommentarbenachrichtigung anschalten?',

  'enable_comment_notification_desc' => 'Wenn <b>aktivieren</b> gewählt ist, bekommen alle Empfänger eine Email-Benachrichtigung, wenn ein neuer Kommentar in diesem Channel veröffentlicht wurde.</em>
<em>Mehrere E-Mail-Adressen mit einem <mark>Komma (,)</mark> trennen.',

  'commenting' => 'Kommentieren',

  'allow_comments' => 'Kommentare erlauben?',

  'allow_comments_desc' => 'Wenn auf <b>ja</b> gesetzt, können Benutzer die Einträge dieses Channels kommentieren.',

  'allow_comments_checked' => 'Standardmäßig Kommentare erlauben?',

  'allow_comments_checked_desc' => 'Wenn auf <b>ja</b> gesetzt, wird die "Kommentare erlauben"-Option standardmäßig auf "ja" gesetzt',

  'require_membership' => 'Mitgliedschaft notwendig?',

  'require_membership_desc' => 'Wenn auf <b>ja</b> gesetzt, können nur registrierte Mitglieder die Channel-Einträge kommentieren.',

  'require_email' => 'Email-Adresse notwendig?',

  'require_email_desc'=>
    'Wenn auf <b>ja</b> gesetzt, muss ein Benutzer eine valide E-Mail-Adresse angeben, um kommentieren zu können.',

  'moderate_comments' => 'Kommentare moderieren?',

  'moderate_comments_desc' => 'Wenn auf <b>ja</b> gesetzt, müssen Kommentare erst durch einen Super-Admin oder eine Gruppe mit Moderatorenrechten gesichtet und freigegeben werden.',

  'max_characters' => 'Wieviele Zeichen sind maximal erlaubt?',

  'max_characters_desc' => 'Die Maximalzahl an erlaubten Zeichen für Kommentare.',

  'comment_time_limit' => 'Zeitfenster zwischen Kommentaren',

  'comment_time_limit_desc' => 'Anzahl an Sekunden, die vergehen müssen, bevor ein Benutzer einen weiteren Kommentar absenden kann.</em>
<em>0 eingeben für kein Zeitlimit.',

  'comment_expiration' => 'Kommentare-Zeitfenster einschränken',

  'comment_expiration_desc' => 'Anzahl an Tagen nach der Veröffentlichung eines Eintrages, innerhalb derer der Eintrag noch kommentiert werden kann.</em>
<em>Leer lassen für keine Einschränkung.',

  'text_formatting' => 'Text-Formatierung',

  'text_formatting_desc' => 'Art der Formatierung für Kommentartext.',

  'html_formatting' => '<abbr title="Hyper-Text Markup Language">HTML</abbr>-Formatierung',

  'html_formatting_desc' => 'Erlaubtes HTML.',

  'comment_convert_image_urls_desc' => 'Wenn auf <b>ja</b> gesetzt, werden <abbr title="Unified Resource Locator">URL</abbr>s zu Bildern automatisch als Bilder in den Kommentaren des Channels ausgegeben.',

  'comment_convert_urls_emails_to_links_desc' => 'Wenn auf <b>ja</b> gesetzt, werden <abbr title="Unified Resource Locator">URL</abbr>s und Email-Adressen automatisch als Links in Kommentaren des Channels ausgegeben.',

  'btn_save_settings' => 'Einstellungen speichern',

  'convert_to_entities' => 'In HTML-Zeichen umwandeln',

  'allow_safe_html' => 'Nur sicheres HTML erlauben',

  'allow_all_html' => 'Jedes HTML erlauben',

  'allow_all_html_not_recommended' => 'Alles HTML erlauben (nicht empfohlen)',

  'auto_br' => 'Auto <br />',

  'xhtml' => 'XHTML',

  'open' => 'Offen',

  'closed' => 'Geschlossen',

  'no_live_look_template' => 'Kein Template gewählt',

  'invalid_url_title_prefix' => 'Dieses Feld darf keine Leerzeichen enthalten.',

  'clear_versioning_data' => 'Alle Daten aller überarbeiteten Versionen in diesem Channel löschen?',

  'apply_comment_enabled_to_existing' => 'Alle vorhandenen Einträge mit dieser Einstellung aktualisieren?',

  'apply_expiration_to_existing' => 'Alle vorhandenen Einträge mit dieser Einstellung aktualisieren?',

  'channel_form_default_status_empty' => '-- Channel Standard benutzen --',

  'channel_settings_saved' => 'Channel-Einstellungen gesichert',

  'channel_settings_saved_desc' => 'Die Einstellungen für Channel <b>%s</b> wurde gesichert.',

  'channel_settings_not_saved' => 'Die Channel-Einstellungen konnten nicht gesichert werden',

  'channel_settings_not_saved_desc' => 'Die Channel-Einstellungen konnten nicht gesichert werden, bitte die unten aufgeführten Fehler ansehen und berichtigen.',

  /**
   * Categories
   */

  'categories' => 'Kategorien',

  'category' => 'Kategorie',

  'category_group' => 'Kategorien-Gruppe',

  'group_name' => 'Gruppen-Name',

  'no_category_groups' => 'Keine <b>Kategorien-Gruppe</b> gefunden.',

  'create_category_group' => 'Kategorien-Gruppe anlegen',

  'edit_category_group' => 'Kategorien-Gruppe bearbeiten',

  'category_groups_removed' => 'Kategorien-Gruppe gelöscht',

  'category_groups_removed_desc' => '%d Kategorien-Gruppen wurden gelöscht',

  'categories_removed' => 'Kategorien gelöscht',

  'categories_removed_desc' => '%d Kategorien wurden entfernt.',

  'no_fields' => 'Keine <b>Felder</b> gefunden.',

  'fields' => 'Felder',

  'edit_category_group' => 'Kategorien-Gruppe bearbeiten',

  'group_name_desc' => '',

  'categories_not_found' => 'Keine <b>Kategorien</b> gefunden.',

  'create_category' => 'Kategorie anlegen',

  'create_category_btn' => 'Neue Kategorie anlegen',

  'edit_category' => 'Kategorie bearbeiten',

  'files' => 'Dateien',

  'cat_description_desc' => '',

  'cat_image_desc' => '',

  'html_formatting' => 'HTML-Formatierung',

  'html_formatting_desc' => '',

  'permissions' => 'Rechte',

  'category_permissions_warning' => '<b>Warnung</b>: Bitte sehr vorsichtig mit der Vergabe von Zugangsrechten umgehen.',

  'category_permissions_warning2' => 'Alles mit %s markierte sollte nur wirklich vertrauenswürdigen Benutzern zugeteilt werden.',

  'edit_categories' => 'Kategorie bearbeiten',

  'edit_categories_desc' => 'Mitglieder in den gewählten Gruppen dürfen Kategorien bearbeiten in dieser Kategoriegruppe. Super-Admins dürfen <b>immer</b>.',

  'delete_categories' => 'Kategorien löschen',

  'delete_categories_desc' => 'Mitglieder in den gewählten Gruppen dürfen Kategorien löschen in dieser Kategoriegruppe. Super-Admins dürfen <b>immer</b>.',

  'cat_group_no_member_groups_found' => 'Keine <b>Mitgliedergruppen</b> mit Rechten gefunden',

  'edit_member_groups' => 'Mitgliedergruppe bearbeiten',

  'exclude_group_form' => 'Gruppe davon ausschliessen?',

  'exclude_group_form_desc' => 'Diese Kategorien-Gruppe darf nicht für Channel und Verzeichnisse ausgewählt werden.',

  'category_group_created' => 'Kategorien-Gruppe angelegt',

  'category_group_created_desc' => 'Die Kategorien-Gruppe <b>%s</b> wurde angelegt.',

  'category_group_not_created' => 'Kategorien-Gruppe kann nicht angelegt werden',

  'category_group_not_created_desc' => 'Die Kategorien-Gruppe konnte nicht angelegt werden, bitte die unten aufgeführten Fehler ansehen und berichtigen.',

  'category_group_updated' => 'Kategorien-Gruppe aktualisiert',

  'category_group_updated_desc' => 'Die Kategorien-Gruppe  <b>%s</b> wurde aktualisiert.',

  'category_group_not_updated' => 'Kategorien-Gruppe kann nicht aktualisiert werden',

  'category_group_not_updated_desc' => 'Die Kategorien-Gruppe konnte nicht aktualisiert werden, bitte die unten aufgeführten Fehler ansehen und berichtigen.',

  'cat_image_none' => 'Keins <i>&mdash; kein Bild</i>',

  'cat_image_choose' => 'Aus Verzeichnis auswählen',

  'parent_category' => 'Mutter-Kategorie',

  'parent_category_desc' => '',

  'category_created' => 'Kategorie angelegt',

  'category_created_desc' => 'Die Kategorie <b>%s</b> wurde angelegt.',

  'category_not_created' => 'Kategorie konnte nicht angelegt werden',

  'category_not_created_desc' => 'Die Kategorie konnte nicht agelegt werden, bitte die unten aufgeführten Fehler ansehen und berichtigen.',

  'category_updated' => 'Kategorie aktualisiert',

  'category_updated_desc' => 'Die Kategorie <b>%s</b> wurde aktualisiert.',

  'category_not_updated' => 'Kategorie konnte nicht aktualisiert werden',

  'category_not_updated_desc' => 'Die Kategorie konnte nicht aktualisiert werden, bitte die unten aufgeführten Fehler ansehen und berichtigen.',

  'category_field' => 'Kategorienfeld',

  'category_fields' => 'Kategorienfelder',

  'no_category_fields' => 'Keine <b>Kategorienfelder</b> gefunden.',

  'create_category_field' => 'Kategoriefeld anlegen',

  'edit_category_field' => 'Kategorienfeld bearbeiten',

  'category_fields_removed' => 'Kategoriefelder entfernt',

  'category_fields_removed_desc' => '%d Kategorienfelder wurden entfernt.',

  'category_ajax_reorder_fail' => 'Achtung: Die Kategorien-Reihenfolge konnte nicht gesichert werden',

  'category_ajax_reorder_fail_desc' => 'Die neue Kategorien-Reihenfolge konnte nicht gesichert werden. Aktualisieren Sie die Seite und gehen Sie sicher, dass Sie angemeldet sind.',

  'duplicate_category_group_name' => 'Eine Kategorien-Gruppe mit dem gleichen Namen existiert bereits.',

  'label' => 'Label',

  'require_field' => 'Feld notwendig?',

  'cat_require_field_desc' => 'Wenn auf <b>ja</b> gesetzt, muss dieses Feld beim Absenden ausgefüllt sein.',

  'text_input' => 'Text Input',

  'textarea' => 'Textarea',

  'select_dropdown' => 'Select Dropdown',

  'field' => 'Feld',

  'category_field_created' => 'Kategorienfeld angelegt',

  'category_field_created_desc' => 'Das Kategorienfeld <b>%s</b> wurde angelegt.',

  'category_field_not_created' => 'Kategorienfeld nicht angelegt',

  'category_field_not_created_desc' => 'Das Kategorienfeld konnte nicht angelegt werden, bitte die unten aufgeführten Fehler ansehen und berichtigen.',

  'category_field_updated' => 'Kategorienfeld aktualisiert',

  'category_field_updated_desc' => 'Das Kategorienfeld <b>%s</b> wurde aktualisiert.',

  'category_field_not_updated' => 'Kategorienfeld nicht aktualisiert',

  'category_field_not_updated_desc' => 'Das Kategorienfeld konnte nicht aktualisiert werden, bitte die unten aufgeführten Fehler ansehen und berichtigen.',

  'duplicate_field_name' => 'Der Name für dieses Feld wird bereits verwendet.',

  'cat_field_ajax_reorder_fail' => 'Achtung: Die Kategorienfeld-Reihenfolge konnte nicht gesichert werden',

  'cat_field_ajax_reorder_fail_desc' => 'Die neue Kategorienfeld-Reihenfolge konnte nicht gesichert werden. Aktualisieren Sie die Seite und gehen Sie sicher, dass Sie angemeldet sind.',

  /**
   * Status Groups
   */

  'status_groups' => 'Statusgruppen',

  'status_group' => 'Statusgruppe',

  'status_groups_removed' => 'Statusgruppen entfernt',

  'status_groups_removed_desc' => '%d Statusgruppen wurden entfernt.',

  'create_status_group' => 'Statusgruppe anlegen',

  'edit_status_group' => 'Statusgruppe bearbeiten',

  'status_group_name_desc' => '',

  'status_group_created' => 'Statusgruppe angelegt',

  'status_group_created_desc' => 'Die Statusgruppe <b>%s</b> wurde angelegt.',

  'status_group_not_created' => 'Statusgruppe nicht angelegt',

  'status_group_not_created_desc' => 'Die Statusgruppe konnte nicht angelegt werden, bitte die unten aufgeführten Fehler ansehen und berichtigen.',

  'status_group_updated' => 'Statusgruppe aktualisiert',

  'status_group_updated_desc' => 'Die Statusgruppe <b>%s</b> wurde aktualisiert.',

  'status_group_not_updated' => 'Statusgruppe nicht aktualisiert',

  'status_group_not_updated_desc' => 'Die Statusgruppe konnte nicht aktualisiert werden, bitte die unten aufgeführten Fehler ansehen und berichtigen.',

  'status_name' => 'Status-Name',

  'statuses' => 'Status',

  'status' => 'Status',

  'status_ajax_reorder_fail' => 'Achtung: Status-Reihenfolge konnte nicht gesichert werden',

  'status_ajax_reorder_fail_desc' => 'Die neue Status-Reihenfolge konnte nicht gesichert werden. Aktualisieren Sie die Seite und gehen Sie sicher, dass Sie angemeldet sind.',

  'statuses_removed' => 'Status entfernt',

  'statuses_removed_desc' => '%d Status wurden entfernt.',

  'create_status' => 'Status anglegen',

  'edit_status' => 'Status bearbeiten',

  'status_name_desc' => 'Aussagekräftiger Name für diesen Namen.',

  'highlight_color' => 'Highlight-Farbe',

  'highlight_color_desc' => 'Text-Farbe für diesen Status. Nimmt HEX-Werte an.',

  'status_access' => 'Status-Zugriff',

  'status_access_desc' => 'Mitglieder in den gewählten Gruppen dürfen diesen Status wählen. Super-Admins dürfen <b>immer</b>.',

  'status_created' => 'Status angelegt',

  'status_created_desc' => 'Der Status <b>%s</b> wurde angelegt.',

  'status_not_created' => 'Status nicht angelegt',

  'status_not_created_desc' => 'Der Status konnte nicht angelegt werden, bitte die unten aufgeführten Fehler ansehen und berichtigen.',

  'status_updated' => 'Status aktualisiert',

  'status_updated_desc' => 'Der Status <b>%s</b> wurde aktualisiert.',

  'status_not_updated' => 'Status nicht akualisiert',

  'status_not_updated_desc' => 'Der Status konnte nicht aktualisiert werden, bitte die unten aufgeführten Fehler ansehen und berichtigen.',

  'duplicate_status_group_name' => 'Es existiert bereits eine Statusgruppe mit dem gleichen Namen.',

  'duplicate_status_name' => 'Es existiert bereits einen Status mit dem gleichen Namen.',

  'invalid_hex_code' => 'Dieses Feld muss einen gültigen Farb-Hex-Code haben.',

  ''=>''
);

/* End of file channel_lang.php */
/* Location: ./system/user/language/deutsch/channel_lang.php */
