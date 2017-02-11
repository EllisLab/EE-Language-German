<?php

$lang = array(

//----------------------------------------
// Required for MODULES page
//----------------------------------------

'forum_module_name' => 'Diskussions-Forum',
'forum_module_description' => 'Diskussions-Forum-Modul',

'forum_listing' => 'Forum-Liste',
'forum_manager' => 'Forum-Verwaltung',

'new_category' => 'Neue Kategorie',

// Sidebar
'templates' => 'Templates',
'member_ranks' => 'Mitglieder-Ranks',
'forum_board' => 'Forum-Board',
'create_new_board' => 'Neues Forum-Board anlegen',

// List / Index
'forum_listing' => 'Forum-Liste',
'create_new_category' => 'Neue Kategorie anlegen',
'categories' => 'Kategorien',

'new_forum' => 'Neues Forum',
'create_new_forum' => 'Neues Forum anlegen',

'forums_ajax_reorder_fail' => 'Achtung: Forum-Reihenfolge konnte nicht gespeichert werden',
'forums_ajax_reorder_fail_desc' => 'Die Forum-Reihenfolge konnte nicht gespeichert werden. Aktualisieren Sie die Seite und überprüfen Sie, ob Sie angemeldet sind.',

// "Common"
'recipients' => 'Empfänger',

// Create / Edit Forum Board Form
'create_forum_board' => 'Forum-Board anlegen',
'edit_forum_board' => '%s bearbeiten',
'board' => 'Board',
'forums' => 'Foren',
'permissions' => 'Rechte',

'enable' => 'Aktivieren',
'disable' => 'Deaktivieren',
'input' => 'Eingabe',
'output' => 'Ausgabe',

'enable_board' => 'Board aktivieren',
'enable_board_desc' => 'Wenn auf <b>aktivieren</b> gesetzt, wird dieses Board für alle Mitglieder mit entsprechenden Rechten zugänglich sein.',

'name' => 'Name',
'name_desc' => 'Ganzer, beschreibender Boardname.',

'short_name' => 'Kurzname',
'short_name_desc' => 'Kurzname für das Board.<br><i>Keine Leerzeichen. Unterstriche und Bindestriche sind erlaubt.</i>',

'forum_directory' => 'Forum-Verzeichnis',
'forum_directory_desc' => '<abbr title="Unified Resource Locator">URL</abbr>-Adresse des Forums.',

'site' => 'Site',

'forum_url_segment' => 'Forum-<abbr title="Unified Resource Locator">URL</abbr>-Segment',
'forum_url_segment_desc' => 'Das Wort, das das Forum zeigt. <b>Darf nicht</b> der Name eines Template oder einer Template-Gruppe sein.',

'default_theme' => 'Standard-Theme',
'default_theme_desc' => '',

'php_parsing' => '<abbr title="PHP: Hypertext Preprocessor">PHP</abbr>-Parsing',

'php_in_templates_warning' => '<b>Warnung</b>: PHP in den Templates zuzulassen hat Einfluss auf die Sicherheit.',
'php_in_templates_warning2' => 'Jede Einstellunge mit einem %s gekennzeichnet, sollte mit Vorsicht gewählt werden.',

'allow_php' => 'PHP zulassen?',
'allow_php_desc' => 'Läßt die Benutzung von PHP in Foren-Templates zu.',

'php_parsing_stage' => 'PHP-Parsing-Reihenfolge',
'php_parsing_stage_desc' => 'Wenn auf <b>Ausgabe</b> gesetzt, wird PHP nach Aufruf des Templates geparst.',

'attachment_settings' => 'Anlagen-Einstellungen',

'attachments_per_post' => 'Anlagen pro Post',
'attachments_per_post_desc' => 'Maximale Anlagen erlaubt pro Post.',

'upload_directory' => 'Upload-Verzeichnis',
'upload_directory_desc' => '<abbr title="Uniform Resource Location">URL</abbr>-Adresse des <mark>Upload</mark>-Verzeichnisses.',

'allowed_file_types' => 'Zugelassene Dateitypen?',
'allowed_file_types_desc' => '',

'images_only' => 'Nur Bilder',
'all_files' => 'Jeder Dateityp',

'file_size' => 'Dateigröße',
'file_size_desc' => 'Maximale Dateigröße in Megabytes.',

'image_width' => 'Bildbreite',
'image_width_desc' => 'Maximale Bildbreite in Pixel.',

'image_height' => 'Bildhöhe',
'image_height_desc' => 'Maximale Bildhöhe in Pixel.',

'enable_thumbnail_creation' => 'Automatisch Thumbnails generieren ?',
'enable_thumbnail_creation_desc' => 'Wenn auf <b>aktivieren</b> gesetzt werden klickbare Thumbnails in den Posts gezeigt.',

'thumbnail_width' => 'Thumbnail-Breite',
'thumbnail_width_desc' => 'Maximale Thumbnail-Breite in Pixel.',

'thumbnail_height' => 'Thumbnail-Höhe',
'thumbnail_height_desc' => 'Maximale Thumbnail-Höhe in Pixel.',

'topics_per_page' => 'Themen pro Seite',
'topics_per_page_desc' => 'Maximale Anzahl an Themen, die pro Seite angezeigt werden.',

'posts_per_page' => 'Posts pro Seite',
'posts_per_page_desc' => 'Maximale Anzahl an Posts, die pro Seite angezeigt werden.',

'topic_ordering' => 'Themen-Reihenfolge',
'topic_ordering_desc' => 'Themen-Reihenfolge in der Forenauflistung.',

'most_recent_post' => 'Ab dem neusten Post',
'most_recent_first' => 'Neuster Post zuerst',
'most_recent_last' => 'Neuster Post zuletzt',

'post_ordering' => 'Post-Reihenfolge',
'post_ordering_desc' => 'Post-Reihenfolge in der Themenauflistung.',

'most_recent_first' => 'Neuster zuerst',
'most_recent_last' => 'Neuster zuletzt',

'hot_topics' => 'Angesagte Themen',
'hot_topics_desc' => 'Anzahl an Posts, um ein Thema als angesagt zu markieren.',

'allowed_characters' => 'Erlaubte Zeichen',
'allowed_characters_desc' => 'Maximale Zeichenanzahl in einem Post erlaubt.',

'posting_throttle' => 'Post-Drosselung',
'posting_throttle_desc' => 'Anzahl an Sekunden, bevor ein Mitglied wieder einen neuen Post oder ein neues Thema posten kann.',

'show_editing_dates' => 'Bearbeitbare Daten zeigen?',
'show_editing_dates_desc' => 'Wenn auf <b>ja</b> gesetzt, werden Zeit und Datum der Berabeitung eines Posts angezeigt.',

'notification_settings' => 'Einstellungen zur Benachrichtigung',

'topic_notifications' => 'Thema-Benachrichtigung',
'topic_notifications_desc' => 'When set to <b>enable</b>, all recipients listed will receive e-mail notification when a <b>new</b> topic is posted.</em><em>Separate multiple e-mails with a <mark>comma (,)</mark>.',

'reply_notification' => 'Reply notification',
'reply_notification_desc' => 'When set to <b>enable</b>, all recipients listed will receive e-mail notification when a <b>new</b> reply is made.</em><em>Separate multiple e-mails with a <mark>comma (,)</mark>.',

'text_and_html_formatting' => 'Text and HTML Formatting',

'text_formatting' => 'Text formatting',
'text_formatting_desc' => 'Type of formatting for comment text.',

'none' => 'None',
'auto_br' => 'Auto &lt;br&gt;',
'xhtml' => 'XHTML',

'html_formatting' => '<abbr title="Hyper-Text Markup Language">HTML</abbr> formatting',
'html_formatting_desc' => 'Level of <abbr title="Hyper-Text Markup Language">HTML</abbr> allowed.',

'html_all' => 'Allow all HTML',
'html_safe' => 'Allow only safe HTML',
'html_none' => 'Convert to HTML entities',

'autolink_urls' => 'Render <abbr title="Unified Resource Locator">URL</abbr>s and e-mail addresses as links?',
'autolink_urls_desc' => "When set to <b>yes</b>, <abbr title=\"Unified Resource Locator\">URL</abbr>s and e-mail address will be rendered as links in this forum's posts.",

'allow_image_hotlinking' => 'Allow image hot-linking?',
'allow_image_hotlinking_desc' => 'When set to <b>yes</b>, users will be allowed to hot-link an image in a forum post.',

'rss_settings' => '<abbr title="Really Simple Syndication">RSS</abbr> Settings',

'enable_rss' => 'Enable <abbr title="Really Simple Syndication">RSS</abbr>?',
'enable_rss_desc' => 'When set to <b>enable</b>, <abbr title="Really Simple Syndication">RSS</abbr> will be available for forums.',

'enable_http_auth_for_rss' => 'Enable <abbr title="Hyper Text Transfer Protocol">HTTP</abbr> authentication for <abbr title="Really Simple Syndication">RSS</abbr>?',
'enable_http_auth_for_rss_desc' => 'When set to <b>enable</b>, users will need to enter authentication to access <abbr title="Really Simple Syndication">RSS</abbr> for forums.',

'permissions_warning' => '<b>Warning</b>: Please be very careful with the access privileges you grant.',

'enable_default_permissions' => 'Enable Default Permissions?',
'enable_default_permissions_desc' => 'When set to <b>enable</b>, these permissions will be the default permissions for all created forums.',

'view_forums' => 'View forums',
'view_forums_desc' => 'Allow the following member groups to view forums.</em><em>Super Administrators are <b>always</b> allowed.',

'view_hidden_forums' => 'View hidden forums',
'view_hidden_forums_desc' => 'Allow the following member groups to view hidden forums.</em><em>Super Administrators are <b>always</b> allowed.',

'view_posts' => 'View posts',
'view_posts_desc' => 'Allow the following member groups to view posts.</em><em>Super Administrators are <b>always</b> allowed.',

'start_topics' => 'Start topics',
'start_topics_desc' => 'Allow the following member groups to start new topics.</em><em>Super Administrators are <b>always</b> allowed.',

'reply_to_topics' => 'Reply to topics',
'reply_to_topics_desc' => 'Allow the following member groups to replay to topics.</em><em>Super Administrators are <b>always</b> allowed.',

'upload' => 'Upload',
'upload_desc' => 'Allow the following member groups to use the upload feature.</em><em>Super Administrators are <b>always</b> allowed.',

'report' => 'Report',
'report_desc' => 'Allow the following member groups to use the report feature.</em><em>Super Administrators are <b>always</b> allowed.',

'search' => 'Search',
'search_desc' => 'Allow the following member groups to use the search feature.</em><em>Super Administrators are <b>always</b> allowed.',

'btn_save_board' => 'Save Board',

'invalid_upload_path' => 'The server path to your image upload folder does not appear to be valid.',
'unwritable_upload_path' => 'Your image upload folder is not writable.  Please make sure the file permissions are set to 777.',
'forum_trigger_unavailable' => 'The forum trigger you submitted is currently being used as the name of a template group so it is not available',

'create_forum_board_success' => 'Forum Board Created',
'create_forum_board_success_desc' => 'The forum board <b>%s</b> has been created.',

'create_forum_board_error' => 'Cannot Create Forum Board',
'create_forum_board_error_desc' => 'We were unable to create this forum board, please review and fix errors below.',

'edit_forum_board_success' => 'Forum Board Updated',
'edit_forum_board_success_desc' => 'The forum board <b>%s</b> has been updated.',

'edit_forum_board_error' => 'Cannot Update Forum Board',
'edit_forum_board_error_desc' => 'We were unable to update this forum board, please review and fix errors below.',

'forum_board_removed' => 'Forum Board Removed',
'forum_board_removed_desc' => 'The forum board <b>%s</b> was removed.',

// Create/Edit Category Form

'create_category' => 'Create Category',
'edit_category' => 'Edit Category',

'description_desc' => 'Brief description of this category.',

'status_desc' => 'Status assigned to this category.',
'live' => 'Live',
'hidden' => 'Hidden',
'read_only' => 'Read Only',

'reply_notifications' => 'Reply notification',
'reply_notifications_desc' => 'When set to <b>enable</b>, all recipients listed will receive e-mail notification when a <b>new</b> reply is made.</em><em>Separate multiple e-mails with a <mark>comma (,)</mark>.',

'btn_save_category' => 'Save Category',

'create_category_success' => 'Category Created',
'create_category_success_desc' => 'The category <b>%s</b> has been created.',

'create_category_error' => 'Cannot Create Category',
'create_category_error_desc' => 'We were unable to create this category, please review and fix errors below.',

'edit_category_success' => 'Category Updated',
'edit_category_success_desc' => 'The category <b>%s</b> has been updated.',

'edit_category_error' => 'Cannot Update Category',
'edit_category_error_desc' => 'We were unable to update this category, please review and fix errors below.',

// Create/Edit Forum Form

'create_forum' => 'Create Forum',
'edit_forum' => 'Edit Forum',

'topic_and_post_settings' => 'Topic and Post Settings',

'btn_save_forum' => 'Save forum',

'create_forum_success' => 'Forum Created',
'create_forum_success_desc' => 'The forum <b>%s</b> has been created.',

'create_forum_error' => 'Cannot Create Forum',
'create_forum_error_desc' => 'We were unable to create this forum, please review and fix errors below.',

'edit_forum_success' => 'Forum Updated',
'edit_forum_success_desc' => 'The forum <b>%s</b> has been updated.',

'edit_forum_error' => 'Cannot Update Forum',
'edit_forum_error_desc' => 'We were unable to update this forum, please review and fix errors below.',

'forum_board_removed' => 'Forums Removed',
'forum_board_removed_desc' => 'The following forums were removed',

// Category Permissions

'category_permissions' => '%s Permissions',
'btn_save_permissions' => 'Save Permissions',

'view_category' => 'View category',
'view_category_desc' => 'Allow the following member groups to view this category.</em> <em>Super Administrators are <b>always</b> allowed.',

'view_hidden_category' => 'View hidden category',
'view_hidden_category_desc' => 'Allow the following member groups to view this category.</em> <em>Super Administrators are <b>always</b> allowed.',

'edit_category_settings_success' => 'Category Permissions Updated',
'edit_category_settings_success_desc' => 'The permissions for category <b>%s</b> have been updated.',

// Forum Permissions

'forum_permissions' => '%s Permissions',

'view_forum' => 'View forum',
'view_forum_desc' => 'Allow the following member groups to view this forum.</em><em>Super Administrators are <b>always</b> allowed.',

'view_hidden_forum' => 'View hidden forums',
'view_hidden_forum_desc' => 'Allow the following member groups to view this forum when hidden.</em><em>Super Administrators are <b>always</b> allowed.',

'edit_forum_settings_success' => 'Forum Permissions Updated',
'edit_forum_settings_success_desc' => 'The permissions for forum <b>%s</b> have been updated.',

// Member Ranks

'no_ranks' => 'No ranks available',
'create_new_rank' => 'Create new rank',

'member_ranks' => 'Member Ranks',
'create_member_rank' => 'Create Member Rank',
'edit_member_rank' => 'Edit Member Rank',

'posts' => 'Posts',
'stars' => 'Stars',

'rank_title' => 'Title',
'rank_title_desc' => 'Full descriptive name of this rank.',

'posts_desc' => 'Minimum number of pots a user must have to reach this rank.',
'stars_desc' => 'Number of stars to show with this rank.',

'btn_save_rank' => 'Save Rank',

'create_rank_success' => 'Rank Created',
'create_rank_success_desc' => 'The rank <b>%s</b> has been created.',

'create_rank_error' => 'Cannot Create Rank',
'create_rank_error_desc' => 'We were unable to create this rank, please review and fix errors below.',

'edit_rank_success' => 'Rank Updated',
'edit_rank_success_desc' => 'The rank <b>%s</b> has been updated.',

'edit_rank_error' => 'Cannot Update Rank',
'edit_rank_error_desc' => 'We were unable to update this rank, please review and fix errors below.',

'ranks_removed' => 'Member Ranks Removed',
'ranks_removed_desc' => 'The following ranks were removed',

// Administrators

'administrators' => 'Administrators',
'administrators_desc' => 'Have access to all administration tools for all forums in this board.',

'forum_admins' => 'Forum Administrators',

'create_new_admin' => 'Create new admin',

'group' => 'group',
'individual' => 'individual',

'create_administrator' => 'Create Administrator',

'administrator_type' => 'Administrator type',
'administrator_type_desc' => 'Select the type of administrator you want to add.',

'admin_type_member_group' => 'Member Group <i>&mdash; All members of chosen group</i>',
'admin_type_individual' => 'Individual <i>&mdash; username, <b>not</b> screenname</i>',

'btn_save_administrator' => 'Save administrator',

'create_administrator_success' => 'Administrator Created',
'create_administrator_success_desc' => 'The administrator <b>%s</b> has been created.',

'create_administrator_error' => 'Cannot Create Administrator',
'create_administrator_error_desc' => 'We were unable to create this administrator, please review and fix errors below.',

'invalid_member_group' => 'The member group you submitted does not appear to be valid',
'invalid_username' => 'The username you submitted does not appear to be valid',

'admins_removed' => 'Administrators Removed',
'admins_removed_desc' => 'The following administrators were removed',

// Moderators

'moderators' => 'Moderators',
'moderators_desc' => 'Have access to assigned tools for forums they are assigned to.',

'create_moderator' => 'Create Moderator',
'create_moderator_in' => 'Create Moderator in %s',

'edit_moderator' => 'Edit Moderator',
'edit_moderator_in' => 'Edit Moderator in %s',

'remove_moderator' => 'remove moderator',

'moderator_type' => 'Moderator type',
'moderator_type_desc' => 'Select the type of moderator you want to add.',

'moderator_type_member_group' => 'Member Group <i>&mdash; All members of chosen group</i>',
'moderator_type_individual' => 'Individual <i>&mdash; username, <b>not</b> screenname</i>',

'permissions_desc' => 'Moderators of this forum may take the following actions.',

'mod_can_edit' => 'Edit',
'mod_can_move' => 'Move',
'mod_can_delete' => 'Delete',
'mod_can_split' => 'Split',
'mod_can_merge' => 'Merge',
'mod_can_change_status' => 'Change status',
'mod_can_announce' => 'Create announcements',
'mod_can_view_ip' => 'View <abbr title="Internet Protocol">IP</abbr> addresses',

'btn_save_moderator' => 'Save moderator',

'create_moderator_success' => 'Moderator Created',
'create_moderator_success_desc' => 'The moderator <b>%s</b> has been created.',

'create_moderator_error' => 'Cannot Create Moderator',
'create_moderator_error_desc' => 'We were unable to create this moderator, please review and fix errors below.',

'edit_moderator_success' => 'Moderator Updated',
'edit_moderator_success_desc' => 'The moderator <b>%s</b> has been updated.',

'edit_moderator_error' => 'Cannot Update Moderator',
'edit_moderator_error_desc' => 'We were unable to update this moderator, please review and fix errors below.',

'moderator_removed' => 'Moderator Removed',
'moderator_removed_desc' => 'The moderator <b>%s</b> was removed.',

''=>''
);

/* End of file forum_cp_lang.php */
/* Location: ./system/user/language/deutsch/forum_cp_lang.php */
