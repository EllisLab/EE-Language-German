<?php

$lang = array(

  'add_file'	=>
    'Datei hinzufügen',

  'remove_file' => 'Datei löschen',

  'file_undo_remove' => 'Löschen widerrufen',

  'directory_no_access' => 'Sie haben keinen Zugriff auf das Verzeichnis, das diesem Feld zugeteilt wurde',

  'directory' => 'Verzeichnis:',

// Relationships
  'rel_ft_channels' => 'Channel für den Bezug wählen',
  'rel_ft_channels_desc'		=> 'Von welchen Channels sollen Inhalte verknüpft werden.',
  'rel_ft_include' => 'In die Wahl einschliessen',
  'rel_ft_include_desc'		=> 'Abgelaufenen oder zukünftige Einträge in diesem Feld erlauben.',
  'rel_ft_include_expired' => 'Abgelaufene Einträge?',
  'rel_ft_include_future' => 'Zukünftige Einträge?',
  'rel_ft_categories' => 'Begrenze Einträge auf Kategorie',
  'rel_ft_categories_desc'	=> 'Kategorien auswählen, um die Einträge in diesem Feld zu beschränken.',
  'rel_ft_authors'			=> 'Autoren',
  'rel_ft_authors_desc'		=> 'Autoren auswählen, um die Einträge in diesem Feld zu beschränken.',
  'rel_ft_statuses'			=> 'Begrenze Einträge auf Status',
  'rel_ft_statuses_desc'		=> 'Status auswählen, um die Einträge in diesem Feld zu beschränken.',
  'rel_ft_limit'				=> 'Maximale Einträge',
  'rel_ft_limit_desc'			=> 'Maximale Anzahl an Einträge, die im Feld gezeigt wird.<br><i>Leer lassen um alle Einträge zuzulassen.</i>',
  'rel_ft_order' => 'Ordne Einträge nach',
  'rel_ft_order_title' => 'Eintragstitel',
  'rel_ft_order_date' => 'Eintragsdatum',
  'rel_ft_order_in' => 'in',
  'rel_ft_order_asc' => 'aufsteigender Folge',
  'rel_ft_order_desc' => 'absteigender Folge',
  'rel_ft_allow_multi' => 'Mehrfachbeziehungen erlauben?',
  'rel_ft_allow_multi_desc'	=> 'Wenn auf <b>ja</b> gesetzt, können Autoren mehrfache Verknüpfungen anlegen.',
  'any_channel' 				=> 'Jeder Channel',
  'any_category' 				=> 'Jede Kategorie',
  'any_author' 				=> 'Jeder Autor',
  'any_status' 				=> 'Jeder Status',

// File
  'file_ft_configure' => 'Allgemeine Feld-Optionen',
  'file_ft_configure_subtext' => 'Weitere Angabe für das Verhalten des Feldes.',
  'file_ft_content_type' => 'Erlaubte Dateitypen',
  'file_ft_content_type_desc'		=> 'Dateitypen, die von hier hochgeladen werden dürfen.',
  'file_ft_allowed_dirs' => 'Erlaubte Verzeichnisse',
  'file_ft_allowed_dirs_desc'		=> 'Standardverzeichnis, in dem die hochgeladenen Dateien gespeichert werden sollen.',
  'file_ft_show_files'			=> 'Zeige vorhandene Dateien?',
  'file_ft_show_files_desc'		=> 'Wenn auf <b>ja</b> gesetzt, wird ein Drop Down mit existierenden Dateien angezeigt.',
  'file_ft_limit'					=> 'Bestehendes Dateilimit',
  'file_ft_limit_desc'			=> 'Anzahl an Dateien im Drop Down, die angezeigt werden.<br><i>Leer lassen, um alle Dateien anzuzeigen.</i>',
  'file_ft_select_existing'		=> 'Datei auswählen',
  'file_ft_cannot_find_file'		=> '<b>Datei nicht gefunden.</b> Die Datei %s konnte auf dem Server nicht gefunden werden.',
  'file_ft_no_upload_directories' => 'Zur Zeit sind keine Verzeichnisse zum Dateihochladen vorhanden. Bitte <a href="%s">ein oder mehrere Verzeichnisse </a> anlegen für den entsprechenden Dateityp.',

// Grid
  'grid_min_rows' => 'Minimum an Zeilen',
  'grid_min_rows_desc' => 'Das Minimum an Daten-Zeilen für dieses Grid',
  'grid_max_rows' => 'Maximum an Zeilen',
  'grid_max_rows_desc' => 'Das Maximum an Daten-Zeilen für dieses Grid',
  'grid_fields'				=> 'Grid-Felder',
  'grid_config_desc' => 'Welche Daten werden gesammelt',
  'grid_col_type' => 'Datentyp',
  'grid_col_label' => 'Label',
  'grid_col_name' => 'Feldname',
  'grid_col_instr' => 'Anweisungen',
  'grid_col_options' => 'Ist das Feld ...',
  'grid_col_width' => 'Spaltenbreite',
  'grid_col_width_desc'		=> 'Die Breite für diese Spalte.',
  'grid_col_width_percent' => 'Prozent',
  'grid_in_this_field'		=> 'Ist dieses Feld',
  'grid_in_this_field_desc'	=> 'Ist dieses Feld nötig oder durchsuchbar?',
  'grid_show_fmt_btns' => 'Zeige Formatierungs-Buttons?',
  'grid_output_format' => 'Ausgabe-Formatierung?',
  'grid_text_direction' => 'Schreibrichtung?',
  'grid_limit_input' => 'Begrenze Eingabe?',
  'grid_date_localized' => 'Lokalisiert?',
  'grid_chars_allowed' => 'Zeichen erlaubt',
  'grid_order_by' => 'Sortierung nach',
  'grid_show' => 'Zeige',
  'grid_col_label_required' => 'Eine oder mehrere Spalten haben kein Label.',
  'grid_col_name_required' => 'Eine oder mehrere Spalten haben keinen Namen.',
  'grid_col_name_reserved' => 'Eine oder mehrere Spalten haben einen Namen, der für andere Template-Funktionalitäten Verwendung findet.',
  'grid_duplicate_col_label'	=> 'Spaltenfeld-Label muss einmalig sein.',
  'grid_duplicate_col_name' => 'Spaltenname muss einmalig sein.',
  'grid_numeric_percentage' => 'Spalte muss numerisch sein',
  'grid_invalid_column_name' => 'Spaltennamen nur mit alphanumerischen Zeichen und ohne Zeichenabstand.',
  'grid_add_some_data' => 'Sie haben noch keine Zeilen eingefügt. <a href="#" class="grid_link_add">Daten eingeben?</a>',
  'grid_validation_error' => 'Es gab ein Problem mit einem oder mehreren Grid-Feldern',
  'grid_field_required' => 'Dieses Feld bitte ausfüllen',
  'grid_reorder_field'		=> 'Feld neu sortieren',
  'grid_add_field'			=> 'Neues Feld hinzufügen',
  'grid_copy_field'			=> 'Feld kopieren',
  'grid_remove_field'			=> 'Feld entfernen',

// IGNORE
  ''=>'');
/* End of file fieldtypes_lang.php */
/* Location: ./system/user/language/deutsch/fieldtypes_lang.php */
