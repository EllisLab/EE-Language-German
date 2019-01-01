<?php

$lang = array(

/* General word list */
'and' => 'und',

'and_n_others' => 'und %d weitere...',

'at' => 'zu',

'auto_redirection' => 'Sie werden in %x Sekunden automatisch weitergeleitet',

'back' => 'Zurück',

'by' => 'von',

'click_if_no_redirect' => 'Bitte hier klicken, falls nicht automatisch weitergeleitet wird',

'disabled' => 'deaktiviert',

'dot' => 'Punkt',

'enabled' => 'aktiviert',

'encoded_email' => '(Javascript muss aktiviert sein, um diese Email-Adresse zu sehen)',

'first' => 'Erste',

'id' => 'ID',

'last' => 'Letzte',

'next' => 'Nächste',

'no' => 'Nein',

'not_authorized' => 'Die nötige Berechtigung für diese Aktion liegt nicht vor.',

'not_available' => 'Nicht verfügbar',

'of' => 'von',

'off' => 'Aus',

'on' => 'Ein',

'or' => 'oder',

'pag_first_link' => '&lsaquo; Erste',

'pag_last_link' => 'Letzte &rsaquo;',

'page' => 'Seite',

'preference' => 'Voreinstellung',

'prev' => 'Vorherige',

'return_to_previous' => 'Zurück zur vorhergehenden Seite',

'search' => 'Suchen',

'setting' => 'Einstellung',

'site_homepage' => 'Startseite der Site',

'submit' => 'Senden',

'system_off_msg' => 'Diese Site ist zur Zeit nicht aktiv.',

'thank_you' => 'Vielen Dank!',

'update' => 'Update',

'updating' => 'Aktualisierung',

'yes' => 'Ja',


/* Errors */
'captcha_incorrect' => 'Sie haben das Wort nicht genau so eingetragen, wie es im Bild erscheint',

'captcha_required' => 'Sie müssen das Wort eintragen, das im Bild angezeigt wird',

'checksum_changed_accept' => 'Änderungen akzeptieren',

'checksum_changed_warning' => 'Eine oder mehrere Core-Dateien wurden geändert:',

'checksum_email_message' => 'ExpressionEngine hat die Änderung einer Core-Datei entdeckt: {url}

Die folgenden Dateien sind betroffen:
{changed}

Wenn Sie diese Änderungen vorgenommen haben, akzeptieren Sie die Änderungen auf der Startseite des Control Panels. Wenn Sie diese Dateien nicht geändert haben, kann dies auf einen Hackerangriff hindeuten. Suchen Sie in den Dateien nach verdächtigen Inhalten (JavaScript oder iFrames), und lesen Sie die folgenden Informationen: '.DOC_URL.'troubleshooting/error_messages/expressionengine_has_detected_the_modification_of_a_core_file.html',

'checksum_email_subject' => 'Eine Core-Datei wurde auf Ihrer Website geändert.',

'csrf_token_expired' => 'Dieses Formular ist abgelaufen. Bitte erneut aufrufen.',

'current_password_incorrect' => 'Ihr aktuelles Passwort wurde nicht korrekt eingegeben.',

'current_password_required' => 'Ihr aktuelles Passwort wird verlangt.',

'curl_not_installed' => 'cURL ist nicht auf Ihrem Server installiert',

'error' => 'Fehler',

'file_not_found' => 'Die Datei %s existiert nicht.',

'general_error' => 'Folgende Fehler traten auf',

'generic_fatal_error' => 'Etwas ging schief und dieser URL kann im Moment nicht verarbeitet werden.',

'invalid_action' => 'Die angeforderte Aktion ist nicht zugelassen.',

'invalid_url' => 'Der angegebene URL ist ungültig.',

'missing_encryption_key' => 'In Ihrer config.php ist für <code>%s</code> kein Wert festgelegt. Dadurch kann Ihre Installation Sicherheitslücken ausgesetzt sein. Stellen Sie die Schlüssel wieder her oder lesen Sie <a href="%s">diesen Artikel zur Problembehandlung</a> im Benutzerhandbuch.',

'missing_mime_config' => 'Kann Ihre Mime-Typ-Whitelist nicht importieren: die Datei %s existiert nicht oder kann nicht gelesen werden.',

'new_version_error' => 'Beim Herunterladen der aktuellen ExpressionEngine-Versionsnummer ist ein unerwarteter Fehler aufgetreten. Weitere Informationen finden Sie in diesem <a href="%s" rel="external noreferrer">Dokument zur Fehlerbehebung</a>',

'nonexistent_page' => 'Die gewünschte Seite wurde nicht gefunden',

'redirect_xss_fail' => 'Der Link, auf den Sie umgeleitet wurden, enthielt potentiellen Schadcode. Wir empfehlen, den Back-Button zu klicken und per Email den Link an %s zu melden, der diese Mitteilung hervorrief.',

'submission_error' => 'Das abgeschickte Formular enthielt folgende Fehler:',

'theme_folder_wrong' => 'Der Pfad Ihres Template-Ordners ist falsch. Gehen Sie zu <a href="%s">URL- und Pfadeinstellungen</a> und überprüfen Sie den <mark>Themes-Pfad</ mark> und <mark>Themes-URL</ mark>.',

'unable_to_load_field_type' => 'Kann diese Feldtypen-Datei nicht laden: %s.<br />Bestätigen Sie, dass die Feldtypen-Datei im Ordner /system/user/addons/ liegt',

'unwritable_cache_folder' => 'Der Cache-Ordner hat nicht die richtigen Berechtigungen.<br />Abhilfe: Die Berechtigung für den Cache (/system/user/cache/) auf 777 setzen - oder auf das Equivalent Ihres Servers.',

'unwritable_config_file' => 'Ihre Konfigurationsdatei verfügt nicht über die richtigen Berechtigungen. <br /> So beheben Sie das: Setzen Sie die Berechtigungen für die Konfigurationsdatei (/'.SYSDIR.'/user/config/config.php) auf 666 (oder auf das Equivalent Ihres Servers).',

'version_mismatch' => 'Die Version Ihrer ExpressionEngine-Installation (%s) stimmt nicht mit der gemeldeten Version (%s) überein. <a href="'.DOC_URL.'installation/update.html" rel="external">Aktualisieren Sie Ihre Installation von ExpressionEngine erneut</a>.',


/* Member Groups */
'banned' => 'Gesperrt',

'guests' => 'Gäste',

'members' => 'Mitglieder',

'pending' => 'Im Wartezustand',

'super_admins' => 'Super-Admins',


/* Template.php */
'error_fix_module_processing' => 'Bitte überprüfen Sie, ob das Modul \'%x\' isntalliert ist und dass  \'%y\' eine verfügbare Methode des Moduls ist',

'error_fix_syntax' => 'Bitte die Syntax im Template korrigieren.',

'error_invalid_conditional' => 'Sie haben ein ungültiges Conditional in Ihrem Template. Bitte überprüfen Sie Ihre Conditionals auf nicht geschlossene Zeichenketten, ungültige Operatoren, ein fehlendes }, oder ein fehlendes {/if}.',

'error_layout_too_late' => 'Plugin- oder Modul-Tag vor der Layout-Deklaration gefunden. Bitte den Layout-Tag an den Anfang des Templates stellen.',

'error_multiple_layouts' => 'Mehrfach-Layouts gefunden. Bitte sicherstellen, dass nur ein Layout-Tag pro Template vorhanden ist.',

'error_tag_module_processing' => 'Folgender Tag kann nicht verarbeitet werden:',

'error_tag_syntax' => 'Der folgende Tag hat einen Syntaxfehler:',

'layout_contents_reserved' => 'Der Name "contents" ist für Templatedaten reserviert und kann nicht als Layoutvariable dienen (als Beispiel {layout:set name="contents"} oder {layout=foo/bar" contents=""}).',

'template_load_order' => 'Template-Ladereihenfolge',

'template_loop' => 'Sie haben eine Templateschleife aufgrund nicht korrekt verschachtelter Sub-Templates verursacht (\'%s\' rekursiv aufgerufen)',


/* Email */
'error_sending_email' => 'Email senden zur Zeit nicht möglich.',

'forgotten_email_sent' => 'Wenn diese Email-Adresse mit einem Konto verknüpft ist, wurden Ihnen gerade Anweisungen zum Zurücksetzen Ihres Passworts per Email übermittelt.',

'no_email_found' => 'Die von Ihnen angegebene Email-Adresse wurde nicht in der Datenbank gefunden.',

'password_has_been_reset' => 'Ihr Passwort wurde zurückgesetzt und ein neues wurde Ihnen per Email zugeschickt.',

'password_reset_flood_lock' => 'Sie haben heute zu oft versucht, Ihr Passwort zurückzusetzen. Bitte überprüfen Sie Ihren Posteingang und Ihre Spam-Ordner auf frühere Anfragen oder wenden Sie sich an den Website-Administrator.',

'your_new_login_info' => 'Login-Information',


/* Timezone */
'invalid_date_format' => 'Das von Ihnen übermittelte Datumsformat ist ungültig.',

'invalid_timezone' => 'Die von Ihnen übermittelte Zeitzone ist ungültig.',

'no_timezones' => 'Keine Zeitzonen',

'select_timezone' => 'Zeitzone wählen',


/* Date */
'singular' => 'eins',

'less_than' => 'kleiner als',

'about' => 'ungefähr',

  'past' => '%s her',

  'future' => 'in %s',

  'ago' => 'her',

  'year' => 'Jahr',

  'years' => 'Jahre',

  'month' => 'Monat',

  'months' => 'Monate',

  'fortnight' => 'vierzehn Tage',

  'fortnights' => 'vierzehn Tagen',

  'week' => 'Woche',

  'weeks' => 'Wochen',

  'day' => 'Tag',

  'days' => 'Tage',

  'hour' => 'Stunde',

  'hours' => 'Stunden',

  'minute' => 'Minute',

  'minutes' => 'Minuten',

  'second' => 'Sekunde',

  'seconds' => 'Sekunden',

  'am' => 'am',

  'pm' => 'pm',

  'AM' => 'AM',

  'PM' => 'PM',

  'Sun' => 'Son',

  'Mon' => 'Mon',

  'Tue' => 'Die',

  'Wed' => 'Mit',

  'Thu' => 'Don',

  'Fri' => 'Fre',

  'Sat' => 'Sam',

  'Su' => 'S',

  'Mo' => 'M',

  'Tu' => 'D',

  'We' => 'M',

  'Th' => 'D',

  'Fr' => 'F',

  'Sa' => 'S',

  'Sunday' => 'Sonntag',

  'Monday' => 'Montag',

  'Tuesday' => 'Dienstag',

  'Wednesday' => 'Mittwoch',

  'Thursday' => 'Donnerstag',

  'Friday' => 'Freitag',

  'Saturday' => 'Samstag',

  'Jan' => 'Jan',

  'Feb' => 'Feb',

  'Mar' => 'Mar',

  'Apr' => 'Apr',

  'May' => 'Mai',

  'Jun' => 'Jun',

  'Jul' => 'Jul',

  'Aug' => 'Aug',

  'Sep' => 'Sep',

  'Oct' => 'Okt',

  'Nov' => 'Nov',

  'Dec' => 'Dez',

  'January' => 'Januar',

  'February' => 'Februar',

  'March' => 'März',

  'April' => 'April',

  'May_l' => 'Mai',

  'June' => 'Juni',

  'July' => 'Juli',

  'August' => 'August',

  'September' => 'September',

  'October' => 'Oktober',

  'November' => 'November',

  'December' => 'Dezember',

'UM12' => '(UTC -12:00) Baker/Howland Island',

'UM11' => '(UTC -11:00) Niue',

'UM10' => '(UTC -10:00) Hawaii-Aleutian Standard Time, Cook Islands, Tahiti',

'UM95' => '(UTC -9:30) Marquesas Islands',

'UM9' => '(UTC -9:00) Alaska Standard Time, Gambier Islands',

'UM8' => '(UTC -8:00) Pacific Standard Time, Clipperton Island',

'UM7' => '(UTC -7:00) Mountain Standard Time',

'UM6' => '(UTC -6:00) Central Standard Time',

'UM5' => '(UTC -5:00) Eastern Standard Time, Western Caribbean Standard Time',

'UM45' => '(UTC -4:30) Venezuelan Standard Time',

'UM4' => '(UTC -4:00) Atlantic Standard Time, Eastern Caribbean Standard Time',

'UM35' => '(UTC -3:30) Newfoundland Standard Time',

'UM3' => '(UTC -3:00) Argentina, Brazil, French Guiana, Uruguay',

'UM2' => '(UTC -2:00) South Georgia/South Sandwich Islands',

'UM1' => '(UTC -1:00) Azores, Cape Verde Islands',

'UTC' => '(UTC) Greenwich Mean Time, Western European Time',

'UP1' => '(UTC +1:00) Central European Time, West Africa Time',

'UP2' => '(UTC +2:00) Central Africa Time, Eastern European Time, Kaliningrad Time',

'UP3' => '(UTC +3:00) East Africa Time, Arabia Standard Time',

'UP35' => '(UTC +3:30) Iran Standard Time',

'UP4' => '(UTC +4:00) Moscow Time, Azerbaijan Standard Time',

'UP45' => '(UTC +4:30) Afghanistan',

'UP5' => '(UTC +5:00) Pakistan Standard Time, Yekaterinburg Time',

'UP55' => '(UTC +5:30) Indian Standard Time, Sri Lanka Time',

'UP575' => '(UTC +5:45) Nepal Time',

'UP6' => '(UTC +6:00) Bangladesh Standard Time, Bhutan Time, Omsk Time',

'UP65' => '(UTC +6:30) Cocos Islands, Myanmar',

'UP7' => '(UTC +7:00) Krasnoyarsk Time, Cambodia, Laos, Thailand, Vietnam',

'UP8' => '(UTC +8:00) Australian Western Standard Time, Beijing Time, Irkutsk Time',

'UP875' => '(UTC +8:45) Australian Central Western Standard Time',

'UP9' => '(UTC +9:00) Japan Standard Time, Korea Standard Time, Yakutsk Time',

'UP95' => '(UTC +9:30) Australian Central Standard Time',

'UP10' => '(UTC +10:00) Australian Eastern Standard Time, Vladivostok Time',

'UP105' => '(UTC +10:30) Lord Howe Island',

'UP11' => '(UTC +11:00) Magadan Time, Solomon Islands, Vanuatu',

'UP115' => '(UTC +11:30) Norfolk Island',

'UP12' => '(UTC +12:00) Fiji, Gilbert Islands, Kamchatka Time, New Zealand Standard Time',

'UP1275' => '(UTC +12:45) Chatham Islands Standard Time',

'UP13' => '(UTC +13:00) Samoa Time Zone, Phoenix Islands Time, Tonga',

'UP14' => '(UTC +14:00) Line Islands',

);

// EOF
