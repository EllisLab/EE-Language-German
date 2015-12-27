<?php

$lang = array(


  "pconnect" => "Persistent Database Connection",

  "cache_on" => "Enable SQL Query Caching",

  "db_debug" => "Enable Database Debugging",

  "enable_db_caching" => "Enable SQL Query Caching",

// ---------------------------
//  Member List Config
// ---------------------------

  "xss_clean_uploads" => "Apply XSS Filtering to uploaded files?",

  "memberlist_cfg" => "Member List Preferences",

  'total_posts' => "Total Posts",

  'total_comments' => "Total Comments",

  'total_entries' => "Total Entries",

  'memberlist_order_by' => "Member List - Sort By",

  'memberlist_sort_order' => "Member List - Order",

  'memberlist_desc' => "Descending",

  'memberlist_asc' => "Ascending",

  'memberlist_row_limit' => "Member List - Rows",

// ---------------------------
//  Explanatory Blurbs
// ---------------------------

  'system_admin_blurb' => "Most of the administrative aspects of ExpressionEngine are managed from one of the following five areas:",

  'channel_administration_blurb' => "This area enables you to manage your channels, preferences, and content-related sub-systems.",

  'members_and_groups_blurb' => "This area allows you to manage members, member groups, and membership-related features.",

  'specialty_templates_blurb' => "These templates are used for special purposes such as displaying error messages and sending email notifications.",

  'system_preferences_blurb' => "This area enables you to manage your system configuration and global preferences.",

  'utilities_blurb' => "This area contains ancillary utilities that help you manage ExpressionEngine.",

  'search' => "Search",

  'search_preferences' => "Search Preferences",

  'search_results' => "Search Results",


// ---------------------------
//  Extensions Stuff
// ---------------------------

  "censor_replacement" => "Censoring Replacement Word",

  "censor_replacement_info" => "If left blank censored words will be replaced with: #",

  "censored_wildcards" => "Wild cards are allowed.  For example, the wildcard  test* would censor the words test, testing, tester, etc.",

  "channel_relationships" => "Channel Relationships",

  "webmaster_name" => "Webmaster or site name for auto-generated emails",

  "search_log_cfg" => "Search Term Log Configuration",

  "enable_search_log" => "Enable Search Term Logging",

  "enable_search_log_exp" => "When enabled, the search terms your visitors submit in your search form will be logged.",

  "max_logged_searches" => "Maximum number of recent search terms to save",

  'no_extensions_exist' => "No Extensions Exist",

  'extensions_manager' => "Extensions Manager",

  'available_extensions' => "Available Extensions",

  'extension' => "Extension",

  'manage_extension' => "Manage",

  'disable_extension_conf' => "Disable Extension Confirmation",

  'disable_extensions_conf' => "Disable Extensions Confirmation",

  'enable_extension_conf' => "Enable Extension Confirmation",

  'enable_extensions_conf' => "Enable Extensions Confirmation",

  'toggle_extension_confirmation' => "Are you sure you wish to perform this action?",

  'extension_disabled' => "Disabled",

  'extension_enabled' => "Enabled",

  'disable_extensions' => "Disable Extensions?",

  'enable_extensions' => "Enable Extensions?",

  'extensions_disabled_manage' => "Extensions must <a href='%s'>be enabled</a> to manage installed extensions.",

  'disable_extension' => "Disable?",

  'enable_extension' => "Enable?",

  'extension_name' => "Extension Name",

  'setting' => "Setting",

  'settings' => "Settings",

  'documentation' => "Documentation",

  'status' => "Status",

  'extension_settings' => "Extension Settings",

  'settings_update' => "Settings Updated",

  'extension_class_does_not_exist' => 'Class %c does not exist in (%f)',

//----------------------------
// Admin Page
//----------------------------

  "guest" => "Guest",

  'wiki_search' => 'Wiki',

  "forum_search" => "Forum",

  "site_search" => "Site",

  "searched_in" => "Searched In",

  "search_terms" => "Search Terms",

  "screen_name" => "Screen Name",

  "view_search_log" => "View Search Log",

  "no_search_terms" => "No search terms have been logged",

  "extensions_manager" => "Extensions Manager",

  "throttling_cfg" => "Throttling Configuration",

  "banish_masked_ips" => "Deny Access if No IP Address is Present",

  "max_page_loads" => "Maximum Number of Page Loads",

  "max_page_loads_exp" => "The total number of times a user is allowed to load any of your web pages (within the time interval below) before being locked out.",

  "time_interval" => "Time Interval (in seconds)",

  "time_interval_exp" => "The number of seconds during which the above number of page loads are allowed.",

  "lockout_time" => "Lockout Time (in seconds)",

  "lockout_time_exp" => "The length of time a user should be locked out of your site if they exceed the limits.",

  "banishment_type" => "Action to Take",

  "banishment_type_exp" => "The action that should take place if a user has exceeded the limits.",

  "url_redirect" => "URL Redirect",

  "404_page" => "Send 404 headers",

  "show_message" => "Show custom message",

  "banishment_url" => "URL for Redirect",

  "banishment_url_exp" => "If you chose the URL Redirect option.",

  "banishment_message" => "Custom Message",

  "banishment_message_exp" => "If you chose the Custom Message option.",

  "email_charset" => "Email Character Encoding",

  "allow_member_localization" => "Allow members to set their own localization preferences?",

  "allow_member_loc_notes" => "If set to \"no\" all dates and times will be localized to the master site default.",

  "publish_tab_behavior" => "Publish Tab Behavior",

  "click" => "Click",

  "hover" => "Hover",

  "enable_throttling" => "Enable Throttling",

  "enable_throttling_explanation" => "This feature generates a 404 header and message if a request to your site is made in which the template group does not exist in the URL. It is intended primarily to keep search engine crawlers from repeatedly requesting nonexistent pages.",

  "caching_driver" => "Caching Driver",

  "caching_driver_failover" => "Cannot connect to %s, using %s driver instead",

  "caching_driver_file_fail" => "Cannot use %s driver, check cache path permissions",

  "disable_caching" => "Disable Caching",

  "max_caches" => "Maximum Number of Cachable URIs",

  "max_caches_explanation" => "If you cache your pages or database, this limits the number of cache instances. We recommend 150 for small sites and 300 for large sites. The allowed maximum is 1000.",

  "standby_recount" => "Recounting... please stand by...",

  "theme_folder_url" => "URL to your \"themes\" folder",

  "exp_forums" => "Forum Stats",

  "exp_forum_topics" => "Forum Topics",

  "email_module_captchas" => "Enable CAPTCHAs for Tell-a-Friend and Contact emails",

  "sql_good_query" => "Your query was successful",

  "must_submit_number" => "You must submit the number of days to filter the pruning routine by.",

  "must_submit_group" => "You must choose at least one member group",

  "must_submit_channel" => "You must choose at least one channel",

  "taken_channel_name" => "This channel name is already taken.",

  "good_member_pruning" => "%x member accounts have been deleted",

  "prune_member_confirm_msg" => "Are you sure you want to delete the member accounts you specified?",

  "member_pruning" => "Membership Account Pruning",

  "mbr_prune_x_days" => "Delete membership accounts that are more than X days old",

  "mbr_prune_never_posted" => "Only delete users who have never posted entries, comments, or forum posts",

  "mbr_prune_zero_note" => "If you submit a zero, member accounts from any date will be deleted.",

  "mbr_prune_groups" => "Delete only within the selected groups",

  "channel_entry_pruning" => "Channel Entry Pruning",

  "channel_prune_x_days" => "Delete channel entries that are more than X days old",

  "channel_prune_never_posted" => "Only delete entries that have no comments",

  "prune_entry_confirm_msg" => "Are you sure you want to delete the channel entries you specified?",

  "good_entry_pruning" => "%x channel entries have been deleted",

  "select_prune_channels" => "Delete only within the selected channels",

  "comment_pruning" => "Comment Pruning",

  "comment_prune_x_days" => "Delete comments that are more than X days old",

  "good_commennt_pruning" => "%x comments have been deleted",

  "prune_comment_confirm_msg" => "Are you sure you want to delete the comments you specified?",

  /* Someday, oh someday...
  'pm_pruning' => 'Private Message Pruning',

  'good_pm_pruning' => '%x private messages have been deleted',

  'pm_prune_x_days' => 'Permanently delete trashed messages X days old',

  'prune_pm_confirm_msg' => 'Are you sure you want to delete the private messages you specified?',
  */
  "topic_pruning" => "Forum Topic Pruning",

  "good_topic_pruning" => "%x forum topics have been deleted",

  "topic_prune_x_days" => "Delete forum topics that are more than X days old",

  "must_submit_forums" => "You must choose at least one forum",

  "prune_if_no_posts" => "Delete topics only if they do not contain any posts",

  "select_prune_forums" => "Delete only within the selected forums",

  "must_select_one" => "You must select at least one",

  "prune_topic_confirm_msg" => "Are you sure you want to delete the forum topics you specified?",

  "select_prune_topics" => "Delete only within the selected forums",

  'pm_cfg' => "Private Messaging Preferences",

  'prv_msg_enabled' => 'Enable private messaging between members?',

  'prv_msg_storage_limit' => "Maximum Number of Private Messages a user can store",

  'prv_msg_send_limit' => "Maximum Number of Private Messages a user can send per day",

  'prv_msg_max_chars' => "Maximum Number of characters to allow in Private Messages",

  'prv_msg_allow_attachments' => 'Allow attachments in private messages?',

  "prv_msg_max_attachments" => "Maximum Number of Attachments per Private Message",

  'prv_msg_upload_path' => "Server Path for Attachment Upload Directory",

  'prv_msg_attach_maxsize' => "Maximum Size of Attachment for a Private Message (in Kilobytes)",

  'prv_msg_attach_total' => "Maximum Amount of All Attachments (in Megabytes)",

  'prv_msg_html_format' => "HTML Formatting in Private Messages",

  'prv_msg_auto_links'	=>
    "Auto-convert URLs and email addresses into links?",

  "html_safe" => "Allow only safe HTML",

  "html_all" => "Allow all HTML (not recommended)",

  "html_none" => "Convert HTML into character entities",

  /* moved to design - DJ

  "html_header" => "HTML Header",

  "page_header" => "Page Header",

  "page_subheader" => "Page Sub-header",

  "import_utilities" => "Import Utilities",

  "html_footer" => "HTML Footer",

  "breadcrumb_trail" => "Breadcrumb Trail",

  "breadcrumb_current_page" => "Breadcrumb Current Page",

  "signature_form" => "Signature Edit Page",

  "edit_avatar" => "Avatar Edit Page",

  "avatar_folder_list" => "Pre-installed Avatar Folder List",

  "browse_avatars" => "Browse Avatars Page",
  */

  "config_editor" => "Config File Editor",

  "image_cfg" => "Image Resizing Preferences",

  "output_cfg" => "Output and Debugging Preferences",

  "category_trigger_duplication" => "Category Trigger error: A template or template group with this name already exists.",

  "invalid_path" => "The following path you submitted is not valid:",

  "not_writable_path" => "The path you submitted is not writeable.  Please make sure the file permissions are set to 777.",

  'empty_profile_trigger' => 'You must specify a Profile Triggering Word',

  "profile_trigger" => "Profile Triggering Word",

  "profile_trigger_notes" => "When this word is encountered your URL it will display your member profile area.  The word you choose cannot be the name of an existing template group",

  "signature_cfg" => "Signature Preferences",

  "notification_cfg" => "Notification Preferences",

  "photo_cfg" => "Member Photo Preferences",

  "enable_photos" => "Enable Member Photos",

  "photo_url" => "URL to Photos Folder",

  "photo_path" => "Server Path to Photo Folder",

  "photo_max_width" => "Photo Maximum Width",

  "photo_max_height" => "Photo Maximum Height",

  "photo_max_kb" => "Photo Maximum Size (in Kilobytes)",

  "must_be_path" => "Note: Must be a full server path, NOT a URL.  Folder permissions must be set to 777.",

  "allow_signatures" => "Allow Users to have Signatures?",

  "sig_maxlength" => "Maximum number of characters per signature",

  "sig_allow_img_hotlink" => "Allow image hot linking in signatures?",

  "sig_allow_img_upload" => "Allow users to upload an image in their signature?",

  "sig_img_url" => "URL to Signature Image Upload Folder",

  "sig_img_path" => "Server path to Signature Image Upload Folder",

  "sig_img_max_width" => "Maximum Width of Signature Image",

  "sig_img_max_height" => "Maximum Height of Signature Image",

  "sig_img_max_kb" => "Maximum Size (in Kilobytes) of Signature Image",

  "avatar_cfg" => "Avatar Preferences",

  "enable_avatars" => "Enable Avatars",

  "allow_avatar_uploads" => "Allow members to upload their own avatars?",

  "avatar_url" => "URL to Avatar Folder",

  "avatar_path" => "Server Path to Avatar Folder",

  "avatar_max_width" => "Avatar Maximum Width",

  "avatar_max_height" => "Avatar Maximum Height",

  "avatar_max_kb" => "Avatar Maximum Size (in Kilobytes)",

  "ignore_noncritical" => "Ignore non-essential data (recommended)",

  "archive_destination" => "Destination",

  "archive_type" => "File Type",

  "mac_no_zip" => "(best choice for Mac users)",

  "max_referrers" => "Maximum number of recent referrers to save",

  "new_version_check" => "New Version Auto Check",

  "profile_buttons" => "Path to Member Images",

  "profile_buttons_exp" => "This is the path to the directory containing the images used in the member profile pages.",

  "captcha_rand" => "Add Random Number to CAPTCHA Word",

  "plugin_no_curl_support" => "Your server does not support the Curl library, which is required in order to use this feature.",

  "plugins" => "Plugins",

  "plugin_by_date" => "By Date",

  "plugin_by_letter" => "By Letter",

  "plugin_requires" => "Requires",

  "plugin_zlib_missing" => "Zlib library is missing.  Please consult user guide.",

  "plugin_can_not_fetch" => "Unable to remotely retrieve the plugin",

  "plugin_folder_not_writable" => "Your plugin folder is not writable.  File permissions must be set to 777 before this action can be performed.",

  "plugin_problem_creating_file" => "Unable to create a local version of your plugin",

  "plugin_version_check" => "Check Version",

  "plugin_installed" => "Plugin(s) Installed",

  "plugin_latest" => "Latest Plugins",

  "plugin_installation" => "Plugin Installation",

  "plugin_install" => "Install",

  "plugin_install_status" => "Plugin Installation Status",

  "plugin_install_success" => "The plugin was successfully installed.",

  "plugin_install_other" => "The plugin file has been stored in your plugins directory.",

  "plugin_error_uncompress" => "Unable to uncompress ZIP file. The ZIP file has been stored in your plugins directory.",

  "plugin_error_no_zlib" => "Your server does not have zlib support, so decompression is not possible.  The ZIP file is stored in your plugins directory.",

  'plugin_error_package_already_exists' => 'Add-on Package already exists',

  'plugin_error_no_plugins_found' => 'Could not find a valid plugin file in the download',

  "plugin_delete_confirm" => "Plugin Removal Confirmation",

  "plugin_single_confirm" => "Are you sure you want to delete this plugin?",

  "plugin_multiple_confirm" => "Are you sure you want to delete these plugins?",

  "plugin_remove" => "Remove",

  "plugin_removal" => "Plugin Removal",

  "plugin_removal_status" => "Plugin Removal Status",

  "plugin_removal_success" => "The following plugin was successfully removed:",

  "plugin_removal_error" => "An error occurred removing the following plugin:",

  "auto_assign_cat_parents" => "Auto-Assign Category Parents",

  "auto_assign_cat_parents_exp" => "If set to \"yes\", when new entries are submitted, the parent category will be automatically assigned whenever you choose a child category",

  "use_category_name" => "Use Category URL Titles In Links?",

  "use_category_name_exp" => "This preference determines whether the category ID number or the category URL Title is used in category-related links.",

  "reserved_category_word" => "Category URL Indicator",

  "reserved_category_word_exp" => "If you set the above preference to \"yes\" you must choose a reserved word.  This word will be used in the URL to indicate to the channel display engine that you are showing a category.  Note: whatever word you chose CANNOT be the name of a template group or a template.",

  "enable_sql_caching" => "Cache Dynamic Channel Queries?",

  "enable_sql_caching_exp" => "This feature will improve the speed at which your channel pages load by caching queries that are normally executed dynamically.  Enable it only if you do not use the \"future entries\" or \"expiring entries\" feature.",

  "email_debug" => "Enable Email Debugging?",

  "email_debug_exp" => "Server messages will be displayed when sending email.",

  "none" => "None",

  "channel_nomenclature" => "Section Designation Word",

  "channel_nomenclature_exp" => "By default, ExpressionEngine uses the word \"channel\" throughout the control panel.  You can change it if you prefer something more generic, like \"section\".  Please note: This word will not change in your templates, only in the control panel.",

  "site_404" => "404 Page",

  "site_404_exp" => "Determines which template should be displayed when someone tries to access an invalid URL.",

  "db_cfg" => "Database Settings",

  "cp_image_path" => "URL to Control Panel Image Directory",

  "auto_close" => "Auto",

  "manual_close" => "Manual",

  "new_posts_clear_caches" => "Clear all caches when new entries are posted?",

  "require_ip_for_posting" => "Require IP Address and User Agent for posting?",

  "redirect_submitted_links" => "Apply Rank Denial to User-submitted Links?",

  "redirect_submitted_links_explanation" => "This option rewrites links submitted by users so they first point to an intermediary redirect page. This helps deter comment spamming by preventing search engines from cataloging links.",

  "captcha_cfg" => "CAPTCHA Preferences",

  "captcha_require_members" => "Require CAPTCHA with logged-in members?",

  "channel_cfg" => "Global Channel Preferences",

  "auto_convert_high_ascii" => "Automatically Convert High ASCII Text to Entities",

  "cp_cfg" => "Control Panel Settings",

  "query_cfg" => "Query Caching Preferences",

  "debug_cfg" => "Debugging Preferences",

  "software_registration" => "Software Registration",

  "license_contact" => "License Holder Contact Email",

  "license_number" => "License Number",

  "word_separator" => "Word Separator for URL Titles",

  "dash" => "Dash",

  "underscore" => "Underscore",

  "site_name" => "Name of your site",

  "system_admin" => "System Administration",

  "content_admin" => "Content Administration",

  "system_preferences" => "System Preferences",

  "is_system_on" => "Is system on?",

  "is_system_on_explanation" => "If system is off, only Super Admins will be able to see your site(s) by default",

  "system_off_msg" => "System Off Message",

  "template_updated" => "Template Updated",

  "preference_information" => "Preference Guide",

  "preference" => "Preference",

  "value" => "Value",

  "general_cfg" => "General Configuration",

  "allow_member_registration" => "Allow New Member Registrations?",

  "req_mbr_activation" => "Require Member Account Activation?",

  "no_activation" => "No activation required",

  "email_activation" => "Self-activation via email",

  "manual_activation" => "Manual activation by an administrator",

  "require_terms_of_service" => "Require Terms of Service",

  "member_theme" => "Default Member Profile Theme",

  "member_theme_exp" => "Determines which theme to use for the various membership pages: login, registration, profile, etc.",

  "require_terms_of_service_exp" => "Setting this to yes forces users to check the \"accept terms\" checkbox during registration",

  "use_membership_captcha" => "Enable Membership CAPTCHA",

  "new_member_notification" => "Send new member notifications?",

  "mbr_notification_emails" => "Email Address for Notification",

  "separate_emails" => "Separate multiple emails with a comma",

  "email_console_timelock" => "Email Console Timelock",

  "email_console_timelock_exp" => "The number of minutes that must lapse before a member is allowed to send another email.  Note:  This only applies to the Email Console in the member profile pages.",

  "log_email_console_msgs" => "Log Email Console Messages",

  "log_email_console_msgs_exp" => "This preference lets you log all messages sent via the Email Console in the member profile pages.",

  "default_member_group" => "Default Member Group Assigned to New Members",

  "group_assignment_defaults_to_two" => "If you require account activation, members will be set to this once they are activated",

  "website_session_type" => "Website Session Type",

  "cp_session_type" => "Control Panel Session Type",

  "security_cfg" => "Security and Session Preferences",

  "un_min_len" => "Minimum Username Length",

  "pw_min_len" => "Minimum Password Length",

  "cs_session" => "Cookies and session ID",

  "c_session" => "Cookies only",

  "s_session" => "Session ID only",

  "deny_duplicate_data" => "Deny Duplicate Data?",

  "deny_duplicate_data_explanation" => "This option prevents data submitted by users (comments, etc.) from being received if it is an exact duplicate of data that already exists.",

  "allow_multi_logins" => "Allow multiple log-ins from a single account?",

  "allow_multi_logins_explanation" => "Determines whether more than one person can simultaneously access the system using the same user account.  Note: If your Session Type above is set to \"Cookies Only\" this feature will not work.",

  "password_lockout" => "Enable Password Lockout?",

  "password_lockout_explanation" => "If enabled, only four invalid login attempts are permitted within the time interval specified below. This is a deterrent to hackers using collision attacks to guess poorly chosen passwords.",

  "password_lockout_interval" => "Time Interval for Lockout",

  "login_interval_explanation" => "Number is set in minutes.  You are allowed to use decimal fractions.  Example:  1.5",

  "require_ip_for_login" => "Require IP Address and User Agent for Login?",

  "require_ip_explanation" => "Prevents users from logging in unless their browser generates IP Address and User Agent data. This keeps hackers from logging in using direct socket connections.",

  "allow_username_change" => "Allow members to change their username?",

  "require_secure_passwords" => "Require Secure Passwords?",

  "secure_passwords_explanation" => "Users will have to choose passwords containing at least one uppercase, one lowercase, and one numeric character",

  "allow_dictionary_pw" => "Allow Dictionary Words as Passwords?",

  "real_word_explanation" => "This setting prevents users from using words and names contained in a dictionary as their password",

  'dictionary_note'	=>
    'Note: In order to use this feature you must install the dictionary file.  Consult the manual.',

  "name_of_dictionary_file" => "Name of Dictionary File",

  "dictionary_explanation" => "The name of the file containing your word list",

  'license_contact_explanation' => 'The contact email address for the owner of this software license.',

  'license_number_explanation' => 'You can find and manage your software licenses on the EllisLab.com <a href="https://store.ellislab.com/manage" rel="external">Manage Purchases</a> page,',

  "image_path" => "Path to Images Directory",

  "cp_url" => "URL to your Control Panel index page",

  "with_trailing_slash" => "With trailing slash",

  "site_url" => "URL to the root directory of your site",

  "url_explanation" => "This is the directory containing your site index file.",

  "doc_url" => "URL to Documentation Directory",

  "doc_url_explanation" => "Root directory only, with trailing slash",

  "site_index" => "Name of your site's index page",

  "system_path" => "Absolute path to your %x folder",

  "force_query_string" => "Force URL query strings",

  "safe_mode" => "Is your server running PHP in Safe Mode?",

  "force_query_string_explanation" => "This is a safety mechanism for servers that do not support the PATH_INFO variable.",

  "debug" => "Debug Preference",

  "debug_explanation" => "Enables the display of error messages, which are valuable during site development",

  "show_profiler" => "Display Output Profiler?",

  "show_profiler_explanation" => "If enabled, Super Admins will see benchmark results, all SQL queries, and submitted form data displayed at the bottom of the browser window.  Useful for debugging.",

  "debug_zero" => "0: No PHP/SQL error messages generated",

  "debug_one" => "1: PHP/SQL error messages shown only to Super Admins",

  "debug_two" => "2: PHP/SQL error messages shown to anyone - NOT SECURE",

  "deft_lang" => "Default Language",

  "xml_lang" => "Default XML Language",

  "used_in_meta_tags" => "Used in control panel meta tags",

  "use_newrelic" => "Enable New Relic RUM JavaScript?",

  "use_newrelic_explanation" => 'When enabled, New Relic will add <a href="https://newrelic.com/docs/features/real-user-monitoring" rel="external">Real User Monitoring JavaScript</a> to all of your web pages.',

  "newrelic_app_name" => "New Relic Application Name",

  "newrelic_app_name_explanation" => "Changes the name of the application that appears in the New Relic dashboard for this installation of ExpressionEngine.",

  "gzip_output" => "Enable GZIP Output?",

  "gzip_output_explanation" => "When enabled, your site will be shown in a compressed format for faster page loading",

  "send_headers" => "Generate HTTP Page Headers?",

  "redirect_method" => "Redirection Method",

  "location_method" => "Location (faster)",

  "refresh_method" => "Refresh (Windows servers)",

  "localization_cfg" => "Localization Settings",

  "date_format" => "Default Date Formatting",

  "time_format" => "Default Time Formatting",

  "24_hour" => "24-hour",

  "12_hour" => "12-hour with AM/PM",

  "default_site_timezone" => "Site Timezone",

  "cookie_cfg" => "Cookie Settings",

  "cookie_domain" => "Cookie Domain",

  "cookie_domain_explanation" => "Use .yourdomain.com for  site-wide cookies",

  "cookie_prefix" => "Cookie Prefix",

  "cookie_prefix_explain" => "Use only if you are running multiple installations of this program",

  "cookie_path" => "Cookie Path",

  "cookie_path_explain" => "Use only if you require a specific server path for cookies",

  "image_resize_protocol" => "Image Resizing Protocol",

  "image_resize_protocol_exp" => "Please check with your hosting provider to verify that your server supports the chosen protocol.",

  "image_library_path" => "Image Converter Path",

  "image_library_path_exp" => "If you chose either ImageMagick or NetPBM you must specify the server path to the program.",

  "gd" => "GD",

  "gd2" => "GD 2",

  "netpbm" => "NetPBM",

  "imagemagick" => "ImageMagick",

  "thumbnail_prefix" => "Image Thumbnail Suffix",

  "thumbnail_prefix_exp" => "This suffix will be added to all auto-generated thumbnails.  Example: photo_thumb.jpg",

  "captcha_path" => "Server Path to CAPTCHA Folder",

  "captcha_url" => "Full URL to CAPTCHA Folder",

  "captcha_font" => "Use TrueType Font for CAPTCHA?",

  "email_cfg" => "Email Configuration",

  "mail_protocol" => "Email Protocol",

  "smtp_server" => "SMTP Server Address",

  "smtp_port" => "SMTP Server Port",

  'empty_stmp_fields' => 'The %s field is required for SMTP.',

  "smtp_username" => "SMTP Username",

  "smtp_password" => "SMTP Password",

  "only_if_smpte_chosen" => "Use this only if you chose SMTP",

  "email_batchmode" => "Use Batch Mode?",

  "batchmode_explanation" => "Batch Mode breaks up large mailings into smaller groups, which get sent at intervals.  Recommended if your site is hosted on a shared-hosting account.",

  "email_batch_size" => "Number of Emails Per Batch",

  "batch_size_explanation" => "For average servers, 300 is a safe number",

  "webmaster_email" => "Return email address for auto-generated emails",

  "return_email_explanation" => "If you leave this blank, many email servers will consider your email spam",

  "php_mail" => "PHP Mail",

  "sendmail" => "Sendmail",

  "smtp" => "SMTP",

  "plain_text" => "Plain Text",

  "html" => "HTML",

  "mail_format" => "Default Mail Format",

  "word_wrap" => "Enable Word-wrapping by Default?",

  "template_cfg" => "Template Preferences",

  "censoring_cfg" => "Word Censoring",

  "enable_censoring" => "Enable Word Censoring?",

  "censored_words" => "Censored Words",

  "censored_explanation" => "Place each word on a separate line.",

  "emoticon_cfg" => "Emoticon Preferences",

  "enable_emoticons" => "Display Smileys?",

  "emoticon_url" => "URL to the directory containing your smileys ",

  "tracking_cfg" => "Tracking Preferences",

  'enable_online_user_tracking' => 'Enable Online User Tracking?',

  'dynamic_tracking_disabling' => 'Suspend ALL tracking when number of online visitors exceeds:',

  'dynamic_tracking_disabling_info' => 'Online User Tracking must be enabled to use this feature, see the user guide for details.',

  'enable_hit_tracking' => 'Enable Template Hit Tracking?',

  'enable_entry_view_tracking' => 'Enable Channel Entry View Tracking?',

  "log_referrers" => "Enable Referrer Tracking?",

  "channel_administration" => "Channel Administration",

  "channels" => "Channels",

  "field_management" => "Channel Fields",

  "file_upload_prefs" => "File Upload Preferences",

  "categories" => "Categories",

  'missing_required_fields' => 'You Are Missing Required Field(s):',

  "statuses" => "Statuses",

  "status_created" => "Status created",

  "status_updated" => "Status updated",

  "status_deleted" => "Status deleted",


  "taken_status_group_name" => "This status group name is already taken.",

  "invalid_status_name" => "Status names can only have alpha-numeric characters, as well as spaces, underscores and hyphens.",

  "duplicate_status_name" => "A status already exists with the same name.",



  "edit_preferences" => "Edit Preferences",

  "preferences_updated" => "Preferences Updated",

  "edit_groups" => "Edit Group Assignments",

  "members_and_groups" => "Members and Groups",

  "utilities" => "Utilities",

  "view_log_files" => "View Control Panel Log",

  "clear_caching" => "Clear Cached Data",

  "page_caching" => "Page (template) cache files",

  "tag_caching" => "Tag cache files",

  "db_caching" => "Database cache files",

  "all_caching" => "All caches",

  "cache_deleted" => "Cache files have been deleted",

  "php_info" => "PHP Info",

  "sql_manager" => "SQL Manager",

  "sql_info" => "SQL Info",

  "sql_utilities" => "SQL Utilities",

  "database_type" => "Database Type",

  "sql_version" => "Database Version",

  "database_size" => "Database Size",

  "database_uptime" => "Database Uptime",

  "total_queries" => "Total server queries since startup",

  "sql_status" => "Status Info",

  "sql_system_vars" => "System Variables",

  "sql_processlist" => "Process List",

  "sql_query" => "Database Query Form",

  "query_result" => "Query Result",

  "query" => "SQL Query",

  "total_results" => "Total Results: %x",

  "total_affected_rows" => "Total Affected Rows: ",

  "browse" => "Browse",

  "tables" => "tables",

  "table_name" => "Table Name",

  "records" => "Records",

  "size" => "Size",

  "type" => "Type",

  "analize" => "Analize Tables",

  "optimize" => "Optimize SQL Tables",

  "repair" => "Repair SQL Tables",

  "optimize_table" => "Optimize selected tables",

  "repair_table" => "Repair selected tables",

  "select_all" => "Select All",

  "no_buttons_selected" => "You must select the tables in which to perform this action",

  "unsupported_compression" => "Your PHP installation does not support this compression method",

  "backup_info" => "Use this form to backup your database.",

  "save_as_file" => "Save backup to your desktop",

  "view_in_browser" => "View backup in your browser",

  "sql_query_instructions" => "Use this form to submit an SQL query",

  'sql_query_debug' => 'Enable MySQL Error Output',

  "file_type" => "File Type: ",

  "zip" => "Zip",

  "gzip" => "Gzip",

  "advanced_users_only" => "Advanced Users Only",

  "recount_stats" => "Recount Statistics",

  'recount_prefs' => 'Recount Preferences',

  'recount_batch_total' => 'Total number of database rows processed per batch.',

  "preference_updated" => "Preference Updated",

  "click_to_recount" => "Click to recount rows %x through %y",

  "items_remaining" => "Records remaining:",

  "recount_completed" => "Recount Completed",

  "return_to_recount_overview" => "Return to Main Recount Page",

  "recounting" => "Recounting",

  "recount_info" => "The links below allow you to update various statistics, like how many entries each member has submitted.",

  "source" => "Source",

  "records" => "Database Records",

  "total_records" => "Total Records:",

  "recalculate" => "Recount Statistics",

  "do_recount" => "Perform Recount",

  "exp_members" => "Members",

  "exp_channel_titles" => "Channel Entries",

  "search_and_replace" => "Find and Replace",

  "sandr_instructions" => "These forms enable you to search for specific text and replace it with different text",

  "search_term" => "Search for this text",

  "replace_term" => "And replace it with this text",

  "replace_where" => "In what database field do you want the replacement to occur?",

  "search_replace_disclaimer" => "Depending on the syntax used, this function can produce undesired results.  Consult the manual and backup your database.",

  "title" => "Title",

  "channel_entry_title" => "Channel Entry Titles",

  "channel_fields" => "Channel Fields:",

  "templates" => "In ALL Templates",

  "rows_replaced" => "Number of database records in which a replacement occurred:",

  "view_database" => "Manage Database Tables",

  "sql_no_result" => "The query you submitted did not produce any results",

  "sql_not_allowed" => "Sorry, but that is not one of the allowed query types.",

  "site_statistics" => "Site Statistics",

  "translation_tool" => "Translation Utility",

  "translation_dir_unwritable" => "Warning: Your translation directory is not writable.",

  "please_set_permissions" => "Please set the permissions to 666 or 777 on the following directory:",

  "choose_translation_file" => "Choose a file to translate",

  "core_language_files" => "Core language files:",

  "module_language_files" => "Module language files:",

  "file_saved" => "The file has been saved",

  "default_html_buttons" => "Default HTML Buttons",

  "add_html_button" => "Add HTML button",

  "add_predefined_html_button" => "Add Predefined HTML button",

  "add_new_html_button" => "Add new HTML button",

  "member_import" => "Member Import Utility",

  "specialty_templates" => "Specialty Templates",

  "plugin_manager" => "Plugin Manager",

  "installed_plugins" => "Installed Plugins",

  "view_info" => "View Info",

  "plugin_information" => "Plugin Information",

  "pi_name" => "Name",

  "pi_author" => "Author",

  "pi_version" => "Version",

  "pi_author_url" => "Author URL",

  "pi_description" => "Description",

  "pi_usage" => "Usage",

  "no_additional_info" => "No additional information is available for this plugin",

  'update_and_return' => "Update and Finished",

  "view_throttle_log" => "View Throttle Log",

  "no_throttle_logs" => "No IPs are currently being throttled by the system.",

  'throttling_disabled' => "Throttling Disabled",

  'hits' => "Hits",

  'locked_out' => "Locked Out",

  'last_activity' => "Last Activity",

  'blacklist_all_ips' => "Blacklist All IPs",

  'sites_tab_behavior' => "Sites Tab Behavior",

  "is_site_on" => "Is site on?",

  "is_site_on_explanation" => "If site is off, only Super Admins will be able to see this site",

  'theme_folder_path' => "Theme Folder Path",

  'site_preferences' => "Site Preferences",

  'multiple_sites_enabled' => "Enable Multiple Site Manager",

  'admin_content'	=>
    'Administration',

  'admin_system'	=>
    'Administration',

  'illegal_characters' => 'The name you submitted may only contain alpha-numeric characters, underscores, and dashes',

  'developer_logs' => 'You have %d unviewed items in the <a href="%s">Developer Log</a>.',

  ''=>''
);

/* End of file admin_lang.php */
/* Location: ./system/expressionengine/language/english/admin_lang.php */

<?php
$lang = array(


'pconnect' => 'Dauernde Datenbank-Verbindung',

'cache_on' => 'SQL Query Caching aktivieren',

'db_debug' => 'Datenbank Debugging aktivieren',

'enable_db_caching' => 'SQL-Abfragen Cache aktivieren',

'xss_clean_uploads' => 'XSS Filter für Datei Upload?',

'memberlist_cfg' => 'Mitgliederliste Einstellungen',

'total_posts' => 'Total Postings',

'total_comments' => 'Total Kommentare',

'total_entries' => 'Total Einträge',

'memberlist_order_by' => 'Mitgliederliste - Sortieren nach',

'memberlist_sort_order' => 'Mitgliederliste - Reihenfolge',

'memberlist_desc' => 'Absteigend',

'memberlist_asc' => 'Aufsteigend',

'memberlist_row_limit' => 'Mitgliederliste - Reihen',

'system_admin_blurb' => 'Die meisten administrativen Einstellungen von ExpressionEngine werden in einem der fünf Bereiche verwaltet:',

'channel_administration_blurb' => 'Dieser Bereich verwaltet die Channels, Voreinstellungen und Content bezogene Sub-Systeme. ',

'members_and_groups_blurb' => 'Dieser Bereich verwaltet Mitglieder, Mitgliedergruppen und Einstellungen im Zusammenhang mit Mitgliedschaften.',

'specialty_templates_blurb' => 'Diese Templates finden für spezielle Zwecke Verwendung, wie für Fehlermeldungen und das Senden von e-Mail-Benachrichtigungen.',

'system_preferences_blurb' => 'Dieser Bereich dient zur Verwaltung der System-Konfiguration und den globalen Einstellungen.',

'utilities_blurb' => 'Dieser Bereich enthält Hilfsprogramme zur weitere Verwaltung von ExpressionEngine.',

'search' => 'Suchen',

'search_preferences' => 'Suchen-Voreinstellungen',

'no_search_results' => 'Keine Suchergebnisse',

'search_results' => 'Suchergebnisse',

'mailinglist_cfg' => 'Mailingliste Voreinstellungen',

'mailinglist_notify' => 'Admistrator(en)-Benachrichtigung bei Anmeldungen in Mailinglisten ',

'mailinglist_enabled' => 'Mailingliste ist aktiviert',

'mailinglist_notify_emails' => 'Bemachrichtigungs-E-Mail',

'censor_replacement' => 'Zensur Ersatzwort',

'censor_replacement_info' => 'Leer gelassen werden zensurierte Worte ersetzt mit: #',

'censored_wildcards' => 'Wildcards sind erlaubt. z.B. Wildcard Test* wird Worte wie Test, Testen, Tester, ect. zensurieren.',

'channel_relationships' => 'Channel Relationships',

'webmaster_name' => 'Webmaster oder Sitename für auto-generierte E-Mails',

'search_log_cfg' => 'Suchbegriff Log Konfiguration',

'enable_search_log' => 'Suchbegriff  Logging aktivieren',

'enable_search_log_exp' => 'Wenn aktiv, werden von Besuchern eingegebene Suchbegriffe aufgezeichnet.',

'max_logged_searches' => 'Maximale Anzahl der zuletzt aufgezeichneten Suchbegriffe',

'no_extensions_exist' => 'Keine Extensions vorhanden',

'extensions_manager' => 'Extensions Manager',

'available_extensions' => 'Verfügbare Extensions',

'extension' => 'Extension',

'manage_extension' => 'Verwalten',

'disable_extension_conf' => 'Extension deaktivieren Bestätigung',

'disable_extensions_conf' => 'Extensions deaktivieren Bestätigung',

'enable_extension_conf' => 'Extension aktivieren Bestätigung',

'enable_extensions_conf' => 'Extensions aktivieren Bestätigung',

'toggle_extension_confirmation' => 'Diese Aktion tatsächlich ausführen?',

'extension_disabled' => 'Deaktiviert',

'extension_enabled' => 'Aktiviert',

'disable_extensions' => 'Extensions deaktivieren?',

'enable_extensions' => 'Extensions aktivieren?',

'extensions_disabled_manage' => 'Extensions muss <a href="%s">aktiviert sein</a>, um Extensions zu verwalten.',

'disable_extension' => 'Deaktivieren?',

'enable_extension' => 'Aktivieren?',

'extension_name' => 'Extension Name',

'setting' => 'Werte',

'settings' => 'Einstellungen',

'documentation' => 'Dokumentation',

'status' => 'Status',

'extension_settings' => 'Extension Einstellungen',

'settings_update' => 'Einstellungen aktualisiert',

'extension_class_does_not_exist' => 'Class %c existiert in (%f) nicht',

'guest' => 'Gast',

'wiki_search' => 'Wiki',

'forum_search' => 'Forum',

'site_search' => 'Site',

'searched_in' => 'Gesucht in',

'search_terms' => 'Suchbegriffe',

'screen_name' => 'Bildschirm-Name',

'view_search_log' => 'Suchbegriff Log einsehen',

'no_search_terms' => 'Es wurden keine Suchbegriffe aufgezeichnet',

'throttling_cfg' => 'Drosselung Konfiguration',

'banish_masked_ips' => 'Zugriff verweigern wenn keine IP-Adresse vorhanden',

'max_page_loads' => 'Maximale Anzahl Seitenaufrufe',

'max_page_loads_exp' => 'Die maximale Anzahl von Seitenaufrufen die ein Benutzer bei irgend einer Seite der Website (innerhalb des untenstehenden Intervalls) ausführen kann, bevor er ausgesperrt wird.',

'time_interval' => 'Zeitinterval (in Seconds)',

'time_interval_exp' => 'Anzahl Sekunden während der die oben angegebene Anzahl Seitenaufrufe erlaubt sind.',

'lockout_time' => 'Aussperrzeit (in Sekunden)',

'lockout_time_exp' => 'Zeitdauer für die ein Benutzer von der Website ausgesperrt bleibt, falls das Limit erreicht wurde.',

'banishment_type' => 'Auszuführende Maßnahme',

'banishment_type_exp' => 'Zu ergreifende Maßnahme, wenn ein Benutzer das Limit erreicht.',

'url_redirect' => 'URL Redirect',

'404_page' => '404 Header senden',

'show_message' => 'Eigene Mitteilung zeigen',

'banishment_url' => 'URL für Redirect',

'banishment_url_exp' => 'Wenn URL Redirect als Option gewählt wurde.',

'banishment_message' => 'Eigene Mitteilung',

'banishment_message_exp' => 'Wenn Eigene Mitteilung gewählt wurde.',

'email_charset' => 'E-Mail Zeichensatz-Kodierung',

'allow_member_localization' => 'Mitgliedern erlauben, ihre eigene Ortseinstellungen zu wählen?',

'allow_member_loc_notes' => 'Wenn &quot;Nein&quot; werden Datum und Zeit entsprechend den Haupteinstellungen gesetzt.',

'publish_tab_behavior' => 'Verhalten des Publizieren Tabs',

'click' => 'Klick',

'hover' => 'Hover',

'enable_throttling' => 'Drosselung aktivieren',

'enable_throttling_explanation' => 'Es wird ein 404 Header und eine Meldung generiert, falls auf Ihrer Website eine Anfrage erfolgt, für die es keine Vorlagen-Gruppe im URL gibt. Das soll Suchmaschinen-Crawler davon abhalten, nichtexistierende Seiten wiederholt anzufordern. ',

'caching_driver' => 'Caching Treiber',

'caching_driver_failover' => 'Kann nicht mit %s verbinden, benutze %s Treiber anstelle.',

'caching_driver_file_fail' => 'Kann %s Treiber nicht benützen. Bitte Cache Pfad Berechtigungen überprüfen für % Treiber',

'disable_caching' => 'Cache deaktivieren',

'max_caches' => 'Maximale Zahl von URLs für Cache',

'max_caches_explanation' => 'Wenn Sie Ihre Seiten oder die Datenbank cachen, begrenzen Sie mit dieser Voreinstellung die Anzahl von Cache-Instanzen um nicht zuviel Platz auf dem Server zu verbrauchen. 150 ist eine gute Zahl für eine kleinere Site. Bei einer grossen Seite oder wenn Festplattenplatz kein Problem ist, kann diese Zahl auch höher eingestellt werden (mehr als 300). Aber unabhängig von dieser Einstellung ist das interne Limit 1000.',

'standby_recount' => 'Neuzählung... Bitte warten...',

'theme_folder_url' => 'URL des Ordners &quot;themes&quot;',

'exp_forums' => 'Forum Statistik',

'exp_forum_topics' => 'Forum Themen',

'email_module_captchas' => 'CAPTCHAs für Tell-a-Friend und Kontakt-E-Mails',

'sql_good_query' => 'Die Abfrage war erfolgreich',

'must_submit_number' => 'Bitte geben Sie eine Anzahl Tage ein als Filter für die Lösch-Routine.',

'must_submit_group' => 'Bitte mindestens eine Mitgliedergruppe auswählen',

'must_submit_channel' => 'Bitte mindestens einen Channel auswählen',

'taken_channel_name' => 'Dieser Channel-Name wird bereits verwendet.',

'no_members_matched' => 'Keine Mitgliederkontos mit diesen Suchkriterien',

'good_member_pruning' => 'Es wurden %x Mitgliederkontos gelöscht',

'prune_member_confirm_msg' => 'Sollen die markierten Mitgliederkontos wirklich gelöscht werden?',

'member_pruning' => 'Mitgliederkontos selektiv löschen',

'mbr_prune_x_days' => 'Mitgliederkontos älter als X Tage löschen',

'mbr_prune_never_posted' => 'Nur Benutzer ohne Einträge, Kommentare oder Forumsbeiträge löschen',

'mbr_prune_zero_note' => 'Bei Eingabe einer Null werden Kontos jeden Datums gelöscht.',

'mbr_prune_groups' => 'Nur in den markierten Gruppen löschen',

'channel_entry_pruning' => 'Channel Einträge selektiv löschen',

'channel_prune_x_days' => 'Einträge älter als X Tage löschen',

'channel_prune_never_posted' => 'Nur Einträge ohne Kommentare löschen',

'prune_entry_confirm_msg' => 'Sollen die markierten Channel Einträge wirklich gelöscht werden?',

'no_entries_matched' => 'Es gibt keine Channel Einträge mit diesen Suchkriterien',

'good_entry_pruning' => '%x Channel Einträge wurden gelöscht',

'select_prune_channels' => 'Nur in markierten Channels löschen',

'comment_pruning' => 'Kommentare selektiv löschen',

'comment_prune_x_days' => 'Kommentare älter als X Tage löschen',

'no_comments_matched' => 'Es gibt keine Kommentare mit diesen Kriterien',

'good_commennt_pruning' => 'Es wurden %x Kommentare gelöscht',

'prune_comment_confirm_msg' => 'Sollen die markierten Kommentare wirklich gelöscht werden?',

'topic_pruning' => 'Forum Themen älter als X Tage löschen',

'good_topic_pruning' => 'Es wurden %x Forum Themen gelöscht',

'topic_prune_x_days' => 'Forum Themen älter als X Tage löschen',

'must_submit_forums' => 'Es muss mindestens ein Forum ausgewählt sein',

'prune_if_no_posts' => 'Themen nur löschen, wenn sie keine Postings enthalten',

'select_prune_forums' => 'Nur im ausgewählten Forum löschen',

'must_select_one' => 'Ausgewählt muss mindestens ein',

'prune_topic_confirm_msg' => 'Sollen die angegebenen Forum Themen wirklich gelöscht werden',

'no_topics_matched' => 'Keine Themen passen zu den angegebenen Kriterien',

'select_prune_topics' => 'Nur im angegebenen Forum löschen',

'pm_cfg' => 'Private Mitteilung Einstellungen',

'prv_msg_enabled' => 'Erlaube Private Mitteilungen zwischen Mitgliedern?',

'prv_msg_storage_limit' => 'Maximale Anzahl Private Nachrichten ein User speichern kann',

'prv_msg_send_limit' => 'Maximale Anzahl Private Nachrichten ein User pro Tag senden kann ',

'prv_msg_max_chars' => 'Maximale Anzahl Zeichen in Privaten Mitteilungen',

'prv_msg_allow_attachments' => 'Erlaube Anhänge in Privaten Mitteilungen?',

'prv_msg_max_attachments' => 'Maximale Anzahl Anhänge pro Private Nachricht',

'prv_msg_upload_path' => 'Serverpfad für das Anhänge Upload Verzeichnis',

'prv_msg_attach_maxsize' => 'Maximal Größe von Anhänge für eine Private Mitteilung (in Kilobytes)',

'prv_msg_attach_total' => 'Maximale Größe aller Anhänge (in Megabytes)',

'prv_msg_html_format' => 'HTML Formatierung in Privaten Mitteilungen',

'prv_msg_auto_links' => 'Auto-konvertieren von URLs und E-Mail-Adressen zu Links?',

'html_safe' => 'Nur sicheres HTML erlauben',

'html_all' => 'Alles HTML erlauben (nicht empfohlen)',

'html_none' => 'Konvertiere HTML in  Character Entities',

'config_editor' => 'Datei-Manager konfigurieren',

'image_cfg' => 'Einstellungen Bild-Größe',

'output_cfg' => 'Output und Debugging Einstellungen',

'category_trigger_duplication' => 'Kategorie Trigger Fehler: Ein Template oder ein Template-Gruppe mit diesem Namen existiert bereits.',

'invalid_path' => 'Der folgende angegebene Pfad ist nicht gültig:',

'not_writable_path' => 'Der angegebene Pfad ist nicht beschreibbar.  Bitte die Rechte auf 777 setzen.',

'empty_profile_trigger' => 'Ein Profil Triggering Wort muss angegeben werden',

'profile_trigger' => 'Profil Triggering Wort',

'profile_trigger_notes' => 'Wird dieses Wort im URL angetroffen, wird Ihr Mitgliedsprofil angezeigt. Das gewählte Wort darf nicht den Namen einer bestehenden Template-Gruppe tragen',

'signature_cfg' => 'Signatur Einstellungen',

'notification_cfg' => 'Benachrichtigung Einstellungen',

'photo_cfg' => 'Mitgliedfoto Einstellungen',

'enable_photos' => 'Mitgliedfoto aktivieren',

'photo_url' => 'URL zum Foto-Verzeichnis',

'photo_path' => 'Serverpfad zum Fotoverzeichnis',

'photo_max_width' => 'Fotobreite Maximum',

'photo_max_height' => 'Fotohöhe Maximum',

'photo_max_kb' => 'Foto- Größe Maximum (in Kilobytes)',

'must_be_path' => 'Hinweis: Muss ein kompletter Serverpfad sein, NICHT ein URL. Die Rechte müssen auf 777 gesetzt sein.',

'allow_signatures' => 'User darf Signaturen haben?',

'sig_maxlength' => 'Maximale Anzahl Zeichen pro Signatur',

'sig_allow_img_hotlink' => 'Hot-linking in Bilder erlauben?',

'sig_allow_img_upload' => 'User den Upload eines Bildes in der Signatur erlauben?',

'sig_img_url' => 'URL zum Signatur-Bild Ordner',

'sig_img_path' => 'Serverpfad zum Signatur-Bild Ordner',

'sig_img_max_width' => 'Maximum Signaturbild-Breite',

'sig_img_max_height' => 'Maximum Signaturbild-Höhe',

'sig_img_max_kb' => 'Maximum Größe (in Kilobytes) des Signaturbildes',

'avatar_cfg' => 'Avatar Einstellungen',

'enable_avatars' => 'Aktiviere Avatare',

'allow_avatar_uploads' => 'Mitgliedern den Upload von Avataren erlauben?',

'avatar_url' => 'URL zum Avatar-Verzeichnis',

'avatar_path' => 'Serverpfad zum Avatar-Verzeichnis',

'avatar_max_width' => 'Avatar Maximum Breite',

'avatar_max_height' => 'Avatar Maximum Höhe',

'avatar_max_kb' => 'Avatar Maximum Größe (in Kilobytes)',

'ignore_noncritical' => 'Ignoriere nicht-essentielle Daten (empfohlen)',

'archive_destination' => 'Ziel',

'archive_type' => 'Filetyp',

'mac_no_zip' => '(beste Wahl für Mac Users)',

'max_referrers' => 'Maximale Anzahl aktueller Referrer zum Speichern',

'new_version_check' => 'Auto Check für Neue Version',

'profile_buttons' => 'Pfad zu Mitglieder Bilder',

'profile_buttons_exp' => 'Das ist der Pfad zum Verzeichnis, das die Bilder der Mitglieder Profil Seite enthält.',

'captcha_rand' => 'Zufallszahlen in Captcha Worten',

'plugin_no_curl_support' => 'Der Server unterstützt die Curl library nicht, welche aber für diese Funktion nötig ist.',

'plugins' => 'Plugins',

'plugin_by_date' => 'Nach Datum',

'plugin_by_letter' => 'Nach Buchstabe',

'plugin_requires' => 'Benötigt',

'plugin_zlib_missing' => 'Zlib Library fehlt.  Bitte Handbuch konsultieren.',

'plugin_can_not_fetch' => 'Fernbedienter Abruf des Plugins nicht möglich',

'plugin_folder_not_writable' => 'Der Plugin-Ordner ist die beschreibbar.  Berechtigung muss auf 777 stehen, damit diese Aktion ausgeführt werden kann.',

'plugin_problem_creating_file' => 'Eine lokale Version des Plugins kann nicht erstellt werden',

'plugin_version_check' => 'Check Version',

'plugin_installed' => 'Plugin(s) installiert',

'plugin_latest' => 'Neuestes Plugins',

'plugin_installation' => 'Plugin Installation',

'plugin_install' => 'Installieren',

'plugin_install_status' => 'Plugin Installation Status',

'plugin_install_success' => 'Das Plugin wurde erfolgreich installiert.',

'plugin_install_other' => 'Die Plugin-Datei wurde im Plugin-Verzeichnis gespeichert.',

'plugin_error_uncompress' => 'ZIP-Datei kann nicht dekomprimiert werden. Die ZIP-Datei wurde im Plugin-Verzeichnis abgelegt.',

'plugin_error_no_zlib' => 'Der Server hat keinen zlib Support, daher ist dekomprimieren nicht möglich. Die ZIP-Datei liegt im Plugins-Verzeichnis.',

'plugin_error_package_already_exists' => 'Add-on Package besteht bereits',

'plugin_error_no_plugins_found' => 'Konnte keine gültige Plugin-Datei im Download finden',

'plugin_delete_confirm' => 'Plugin Entfernen Bestätigung',

'plugin_single_confirm' => 'Soll das Plugin wirklich gelöscht werden?',

'plugin_multiple_confirm' => 'Sollen die Plugins wirklich gelöscht werden?',

'plugin_remove' => 'Entfernen',

'plugin_removal' => 'Plugin entfernen',

'plugin_removal_status' => 'Plugin entfernen Status',

'plugin_removal_success' => 'Das folgende Plugin wurde erfolgreich entfernt:',

'plugin_removal_error' => 'Fehler beim Entfernen des Plugins:',

'auto_assign_cat_parents' => 'Auto-Zuweisung Kategorie-Eltern',

'auto_assign_cat_parents_exp' => 'Wenn auf &quot;Ja&quot;, wird automatisch bei der Zuweisung von Kategorie-Kindern auch die Eltern-Kategorie ausgewählt',

'use_category_name' => 'Kategorien URL Titel in Links nutzen?',

'use_category_name_exp' => 'Diese Einstellung bestimmt, ob die Kategorie-ID als Nummer oder der Kategorie URL Titel in Kategorie bezogenen Links verwendet werden.',

'reserved_category_word' => 'Kategorie URL Indikator',

'reserved_category_word_exp' => 'Steht obige Einstellung auf &quot;Ja&quot; muss ein reserviertes Wort gewählt werden. Dieses wird im URL verwendet, um der Channel Display Engine anzuzeigen, dass eine Kategorie gezeigt werden soll. Hinweis: Das gewählte Wort DARF NICHT den Namen einer Template-Gruppe oder eines Templates tragen.',

'enable_sql_caching' => 'Cache Dynamic Channel Abfragen?',

'enable_sql_caching_exp' => 'Diese Funktion wird die Geschwindigkeit zum Laden der Seite erhöhen, bei Seiten deren Abfrage normalerweise dynamisch ausgeführt werden. Nur aktivieren, wenn keine &quot;future entries&quot; oder &quot;expiring entries&quot; Verwendung finden.',

'email_debug' => 'Email Debugging aktivieren?',

'email_debug_exp' => 'Servermeldung wird angezeigt, wenn E-Mails versendet werden',

'none' => 'Keine',

'channel_nomenclature' => 'Wort zum Bezeichnen von Channel',

'channel_nomenclature_exp' => 'ExpressionEngine arbeitet mit dem Wort &quot;channel&quot; innerhalb des Control Panels. Dies kann man ändern, wenn gewünscht, zum Beispiel in &quot;Section&quot;.  Beachten: Dieses Wort ändert nur im Control Panel und nicht in den Templates.',

'site_404' => '404 Seite',

'site_404_exp' => 'Bestimmt, welches Template gezeigt werden soll, wenn jemand einen ungültigen URL aufruft.',

'db_cfg' => 'Datenbank Einstellungen',

'cp_image_path' => 'URL zum Control Panle Bildverzeichnis',

'auto_close' => 'Auto',

'manual_close' => 'Manuell',

'new_posts_clear_caches' => 'Cache leeren wenn neue Einträge erfolgen?',

'require_ip_for_posting' => 'IP-Adresse und User Agent verlangt, wenn Kommentare eintreffen?',

'redirect_submitted_links' => 'Rank Denial anwenden bei User-vorgeschlagenen Links?',

'redirect_submitted_links_explanation' => 'Diese Einstellung überschreibt einen vom User eingegebenen Link so, dass er einen zwischenzeitlichen Redirect zeigt. Dies verhindert Kommentar-Spam da Suchmaschinen solche Links nicht katalogisieren.',

'captcha_cfg' => 'Captcha Einstellungen',

'captcha_require_members' => 'Captcha auch bei eingeloggten Mitgliedern?',

'channel_cfg' => 'Globale Channel Einstellungen',

'auto_convert_high_ascii' => 'Automatisch High ASCII Text zu Entities konvertieren',

'cp_cfg' => 'Control Panel Einstellungen',

'query_cfg' => 'Query Caching Einstellungen',

'debug_cfg' => 'Debugging Einstellungen',

'software_registration' => 'Software Registratur',

'license_contact' => 'Lizenzinhaber Kontakt-E-mail',

'license_number' => 'Lizenznummer',

'invalid_license_number' => 'Die angegebene Lizennummer ist ungültig',

'word_separator' => 'Wort-Separator für URL Titles',

'dash' => 'Bindestrich',

'underscore' => 'Unterstrich',

'site_name' => 'Name Ihrer Site',

'system_admin' => 'System Administration',

'content_admin' => 'Inhalt Administration',

'system_preferences' => 'System Einstellungen',

'is_system_on' => 'Ist das System ON?',

'is_system_on_explanation' => 'Ist das System OFF, können nur Super Admins die Site(s) sehen.',

'system_off_msg' => 'System Off Mitteilung',

'template_updated' => 'Template aktualisiert',

'preference_information' => 'Einstellungen Führer',

'preference' => 'Einstellungen',

'value' => 'Wert',

'general_cfg' => 'Allgemeine Konfiguration',

'allow_member_registration' => 'Registratur neuer Mitglieder erlauben?',

'req_mbr_activation' => 'Mitglieder-Konto aktivieren verlangt?',

'no_activation' => 'Keine Aktivierung nötig',

'email_activation' => 'Selbstaktivierung via E-Mail',

'manual_activation' => 'Manuelle Aktivierung durch Administrator',

'require_terms_of_service' => 'Nutzungsbedingungen verlangt',

'member_theme' => 'Standard Mitglied Profil Theme',

'member_theme_exp' => 'Bestimmt das Theme welches für die verschiedenen Mitgliedschafts-Seiten Verwendung findet, wie z.B. Login, Registratur, Profil, etc.',

'require_terms_of_service_exp' => 'Hier auf Ja gesetzt verlangt von Usern das Ankreuzen von  &quot;Bedingungen akzeptiertz&quot; während der Registrierung.',

'use_membership_captcha' => 'Captcha bei Mitgliedschaft aktivieren',

'new_member_notification' => 'Administrator bei neuen Registrierungen benachrichtigen?',

'mbr_notification_emails' => 'E-Mail-Adresse für Benachrichtigungen',

'separate_emails' => 'Mehrere E-Mail-Adressen durch Kommas trennen',

'email_console_timelock' => 'E-Mail Konsole Timelock',

'email_console_timelock_exp' => 'Die Anzahl Minuten, die vergangen sein müssen bevor ein Mitglied eine weitere E-Mail versenden darf. Hinweis: Das betrifft nur die E-Mail Konsole in den Mitglieder Profil-Seiten.',

'log_email_console_msgs' => 'Loggen von E-Mail Konsole-Mitteilungen',

'log_email_console_msgs_exp' => 'Diese Einstellung zeichnet alle Mitteilungen auf, die über die Mitglieder Profil-Seiten versendet wurden.',

'default_member_group' => 'Standard Mitgliedergruppe für neue Mitglieder',

'group_assignment_defaults_to_two' => 'Wurde Kontoaktivierung gefordert, werden Mitglieder dieser Gruppe zugeteilt wenn sie ihr Konto aktiviert haben.',

'website_session_type' => 'Website Session Typ',

'cp_session_type' => 'Control Panel Session Typ',

'security_cfg' => 'Sicherheits- und Session-Einstellungen',

'un_min_len' => 'Minimum Länge für Username',

'pw_min_len' => 'Minimum Länge für Passwort',

'cs_session' => 'Cookies und Session ID',

'c_session' => 'Nur Cookies',

's_session' => 'Nur Session ID',

'deny_duplicate_data' => 'Verweigere doppelte Daten?',

'deny_duplicate_data_explanation' => 'Diese Einstellung verhindert die Entgegennahme von Daten wie Kommentare etc. von Usern, wenn ein genaues Duplikat der Daten schon vorhanden ist.',

'allow_multi_logins' => 'Mehrfaches Log-In eines einzelnen Kontos erlauben?',

'allow_multi_logins_explanation' => 'Bestimmt, ob mehrere Personen mit den gleichen Daten gleichzeitig eingeloggt sein dürfen. Hinweis: ist der Session-Typ auf  &quot;Nur Cookies&quot; eingestellt, funktioniert diese Möglichkeit nicht.',

'password_lockout' => 'Passwort Lockout aktivieren?',

'password_lockout_explanation' => 'Wenn aktiv, werden nur 4 Login-Versuche im unten angegebenen Zeitintervall zugelassen.',

'password_lockout_interval' => 'Zeitinterval für den Lockout',

'login_interval_explanation' => 'Die Zahl gibt die Minuten an. Dezimalstellen sind erlaubt. z.B. 1.5',

'require_ip_for_login' => 'IP Adresse und User Agent für Login verlangt?',

'require_ip_explanation' => 'Verhindert das Einloggen, wenn keine IP-Adresse und kein User Agent vom Browser gesandt werden. Das ist ein Schutz gegen Hackerangriffe.',

'allow_username_change' => 'Dürfen Mitglieder ihren Usernamen ändern?',

'require_secure_passwords' => 'Sicheres Passwort verlangen?',

'secure_passwords_explanation' => 'User werden zu einem Passwort mit mindestens einem Groß- und einem Kleinbuchstaben und einer Zahl gezwungen',

'allow_dictionary_pw' => 'Dürfen Wörterbuch-Worte als Passwort gelten?',

'real_word_explanation' => 'Durch diese Einstellung kann ein User keine Worte oder Namen als Passwort wählen, die in einer Wörterbuch-Datei abgelegt sind.',

'dictionary_note' => 'Hinweis: Um diese Möglichkeit zu nutzen muss die Wörterbuch-Datei installiert sein. Bitte das Handbuch konsultieren.',

'name_of_dictionary_file' => 'Name der Wörterbuch-Datei',

'dictionary_explanation' => 'Der Name der Datei welche die Wortliste enthält',

'license_contact_explanation' => 'Die Kontak-E-Mail-Adresse des Inhabers der Softwarelizenz',

'license_number_explanation' => 'Sie finden und verwalten die Softwarelizenzen auf EllisLab.com unter <a href="https://store.ellislab.com/manage">Manage Purchases</a>',

'image_path' => 'Pfad zum Bild-Verzeichnis',

'cp_url' => 'URL zur Index-Seite des Control Panels',

'with_trailing_slash' => 'Mit abschließendem Schrägstrich',

'site_url' => 'URL zum Root-Verzeichnis der Website',

'url_explanation' => 'Das ist das Verzeichnis mit der Index-Datei für die Site',

'doc_url' => 'URL zur Dokumentation von EE',

'doc_url_explanation' => 'Nur Root-Verzeichnis, mit abschließendem Schrägstrich',

'site_index' => 'Name der Index-Seite der Website',

'system_path' => 'Absoluter Pfad zum %x Verzeichnis',

'force_query_string' => 'Strict URLs aktivieren',

'safe_mode' => 'Läuft auf dem Server PHP im Safe Mode?',

'force_query_string_explanation' => 'Das ist eine Sicherheitsmassnahme für Server die die PATH_INFO Variable nicht unterstützen.',

'debug' => 'Debug Einstellungen',

'debug_explanation' => 'Schaltet die Anzeige von Fehlermeldungen ein, was während der Website-Entwicklung hilfreich sein kann',

'show_profiler' => 'Output Profiler anzeigen?',

'show_profiler_explanation' => 'Wenn eingeschaltet, sehen Super Admins Benchmark Resultate, alle SQL-Queries und eingegebene Formulardaten am Ende des Browser-Fensters. Hilfreich beim Debuggen.',

'debug_zero' => '0: Keine PHP/SQL Fehlermeldungen erzeugen',

'debug_one' => '1: PHP/SQL Fehlermeldungen nur für Super Admins zeigen',

'debug_two' => '2: PHP/SQL Fehlermeldungen allen zeigen - NICHT SICHER',

'deft_lang' => 'Voreingestellte Sprache',

'xml_lang' => 'Voreingestellte XML Sprache',

'used_in_meta_tags' => 'Verwendet in den Meta Tags des Control Panels',

'use_newrelic' => 'Aktiviere New Relic RUM Javascript',

'use_newrelic_explanation' => 'Wenn aktiviert, wird <a href="https://newrelic.com/docs/features/real-user-monitoring" rel="external">Real User Monitoring JavaScript</a> bei allen Seiten angefügt.',

'newrelic_app_name' => 'Neuer Relic Application Name',

'newrelic_app_name_explanation' => 'Ändert den Namen der Applikation der im New Relic Dashboard für diese Installation von ExpressionEngine erscheint',

'gzip_output' => 'GZIP Output einschalten?',

'gzip_output_explanation' => 'Wenn eingeschaltet, wird die Website in einem komprimierten Format gezeigt - zum schnelleren Laden',

'send_headers' => 'HTTP Page Headers generieren?',

'redirect_method' => 'Redirection Methode',

'location_method' => 'Location (schneller)',

'refresh_method' => 'Refresh (Windows Servers)',

'localization_cfg' => 'Lokale Einstellungen',

'date_format' => 'Standard Datumformat',

'time_format' => 'Standard Zeit-Format',

'24_hour' => '24-Stunden',

'12_hour' => '12-Stunden mit AM/PM',

'include_seconds' => 'Sekunden beim Standard Zeitformat auch angeben',

'default_site_timezone' => 'Site Zeitzone',

'cookie_cfg' => 'Cookie Einstellungen',

'cookie_domain' => 'Cookie Domain',

'cookie_domain_explanation' => 'Für Site-weite Cookies .ihredomain.com einsetzen',

'cookie_prefix' => 'Cookie Prefix',

'cookie_prefix_explain' => 'Nur einsetzen wenn mehrere Installationen dieses Programms laufen',

'cookie_path' => 'Cookie Pfad',

'cookie_path_explain' => 'Nur einsetzen wenn ein spezifischer Serverpfad für Cookies nötig ist',

'image_resize_protocol' => 'Bild-Größe Protokoll',

'image_resize_protocol_exp' => 'Mit dem Hosting Provider prüfen, ob das gewählte Protokoll auf dem Server zur Verfügung steht',

'image_library_path' => 'Bild-Konverter-Pfad',

'image_library_path_exp' => 'Wenn ImageMagick oder NetPBM eingesetzt wird, muss der Serverpfad zum Programm angegeben werden.',

'gd' => 'GD',

'gd2' => 'GD 2',

'netpbm' => 'NetPBM',

'imagemagick' => 'ImageMagik',

'thumbnail_prefix' => 'Bild Thumbnail Suffix',

'thumbnail_prefix_exp' => 'Dieses Suffix wird allen auto-generierten Thumbnails angefügt.  Beispiel: foto_thumb.jpg',

'captcha_path' => 'Serverpfad zum Captcha Verzeichnis',

'captcha_url' => 'Voller URL zum Captcha Verzeichnis',

'captcha_font' => 'TrueType Font für Captcha benutzen?',

'email_cfg' => 'E-Mail Konfiguration',

'mail_protocol' => 'E-Mail Protokoll',

'smtp_server' => 'SMTP Serveradresse',

'smtp_port' => 'SMTP Server Port',

'empty_stmp_fields' => 'Das %s Feld ist für SMTP Bedingung.',

'smtp_username' => 'SMTP Username',

'smtp_password' => 'SMTP Passwort',

'only_if_smpte_chosen' => 'Nur einsetzen wenn SMTP benutzt wird',

'email_batchmode' => 'Batch Mode benutzen?',

'batchmode_explanation' => 'Batch Mode teilt ein grosses Mailing in kleinere Gruppen die in Intervallen versendet werden. Dies empfiehlt sich auf Shared-Hosting Accounts.',

'email_batch_size' => 'Anzahl E-Mails pro Stapel',

'batch_size_explanation' => 'Für durchschnittliche Server ist 300 ein sicherer Wert',

'webmaster_email' => 'Return E-Mail-Adresse für auto-generierte E-Mails',

'return_email_explanation' => 'Wird diese Angabe unterlassen, werden viele Server Ihre Mails als Spam einstufen',

'php_mail' => 'PHP Mail',

'sendmail' => 'Sendmail',

'smtp' => 'SMTP',

'plain_text' => 'Nur Text',

'html' => 'HTML',

'mail_format' => 'Standard Mail Format',

'word_wrap' => 'Wort-Umbruch als Standard festlegen?',

'cp_theme' => 'Standard Control Panel Theme',

'template_cfg' => 'Template Einstellungen',

'censoring_cfg' => 'Wortzensur',

'enable_censoring' => 'Wortzensur einschalten?',

'censored_words' => 'Zensurierte Worte',

'censored_explanation' => 'Jedes Wort auf eine separate Zeile setzen.',

'emoticon_cfg' => 'Emoticon Einstellungen',

'enable_emoticons' => 'Smileys anzeigen?',

'emoticon_url' => 'URL zum Verzeichnis mit den Smileys',

'tracking_cfg' => 'Tracking Einstellungen',

'enable_online_user_tracking' => 'Online User-Tracking einschalten?',

'dynamic_tracking_disabling' => 'ALLE Trackings unterbrechen wenn die Anzahl Online-Besucher überschritten wird:',

'dynamic_tracking_disabling_info' => 'Online-User-Tracking muss eingeschaltet sein, um diese Funktion zu nutzen. Details im Handbuch.',

'enable_hit_tracking' => 'Template Hit-Tracking einschalten?',

'enable_entry_view_tracking' => 'Channel Eintrag View-Tracking einschalten?',

'log_referrers' => 'Referrer Tracking einschalten?',

'channel_administration' => 'Channel Administration',

'channels' => 'Channels',

'field_management' => 'Eigene Channel-Felder',

'file_upload_prefs' => 'File Upload Einstellungen',

'categories' => 'Kategorien-Management',

'missing_required_fields' => 'Benötigte(s) Feld(er) wurde(n) ausgelassen:',

'statuses' => 'Status',

'status_created' => 'Status wurde erstellt',

'status_updated' => 'Status wurde aktualisiert',

'status_deleted' => 'Status wurde gelöscht',

'taken_status_group_name' => 'Der Name für die Status-Gruppe wird bereits verwendet.',

'invalid_status_name' => 'Status-Namen können nur alpha-numerische, Leerzeichen_ Unterstriche und Trennstriche enthalten.',

'duplicate_status_name' => 'Es besteht bereits ein Status mit diesem Namen.',

'edit_preferences' => 'Einstellungen bearbeiten',

'preferences_updated' => 'Einstellungen aktualisiert',

'edit_groups' => 'Gruppen-Zuweisungen bearbeiten',

'members_and_groups' => 'Mitglieder und Gruppen',

'utilities' => 'Hilfsprogramme',

'view_log_files' => 'Control Panel Log zeigen',

'clear_caching' => 'Gecachete Daten löschen',

'page_caching' => 'Seiten (Template) Cache-Dateien',

'tag_caching' => 'Tag Cache-Dateien',

'db_caching' => 'Datenbank Cache-Dateien',

'all_caching' => 'Alle Cache',

'cache_deleted' => 'Cache-Dateien wurden gelöscht',

'php_info' => 'PHP Info',

'sql_manager' => 'SQL Manager',

'sql_info' => 'SQL Info',

'sql_utilities' => 'SQL Hilfsprogramme',

'database_type' => 'Datenbank Typ',

'sql_version' => 'Datenbank Version',

'database_size' => 'Datenbank Grösse',

'database_uptime' => 'Datenbank Betriebszeit',

'total_queries' => 'Total Serveranfragen seit dem Start',

'sql_status' => 'Status Info',

'sql_system_vars' => 'Systemvariablen',

'sql_processlist' => 'Prozessliste',

'sql_query' => 'Datenbank Abfrage-Formular',

'query_result' => 'Abfrage Resultat',

'query' => 'SQL Abfrage',

'total_results' => 'Total Resultate: %x',

'total_affected_rows' => 'Total betroffene Zeilen: ',

'browse' => 'Durchsuchen',

'tables' => 'Tabellen',

'table_name' => 'Tabellenname',

'records' => 'Databank-Einträge',

'size' => 'Größe',

'type' => 'Typ',

'analize' => 'Tabellen analysieren',

'optimize' => 'SQL Tabellen optimieren',

'repair' => 'SQL Tabellen reparieren',

'optimize_table' => 'Ausgewählte Tabellen optimieren',

'repair_table' => 'Ausgewählte Tabellen reparieren',

'select_all' => 'Alle auswählen',

'no_buttons_selected' => 'Es müssen die Tabellen ausgewählt werden in welchen die Handlung vorgenommen werden soll',

'unsupported_compression' => 'Ihre PHP-Installation unterstützt diese Kompressionsmethode nicht',

'backup_info' => 'Dieses Formular zum Backupen der Datenbank benutzen.',

'save_as_file' => 'Backup auf den Desktop speichern',

'view_in_browser' => 'Backup im Browser ansehen',

'sql_query_instructions' => 'Dieses Formular zum Senden einer SQL-Abfrage',

'sql_query_debug' => 'MySQL Fehlerausgabe einschalten',

'file_type' => 'Dateityp: ',

'zip' => 'Zip',

'gzip' => 'Gzip',

'advanced_users_only' => 'Nur fortgeschrittene User',

'recount_stats' => 'Statistik neu erheben',

'recount_prefs' => 'Einstellungen Neue Statistik',

'recount_batch_total' => 'Anzahl Datenbankzeilen pro Durchgang bearbeitet',

'preference_updated' => 'Einstellungen nachgeführt',

'click_to_recount' => 'Klicken zur Neuzählung der Zeilen %x bis %y',

'items_remaining' => 'Einträge übrig :',

'recount_completed' => 'Neuzählung komplett',

'return_to_recount_overview' => 'Zurück zur Seite Neuzählung',

'recounting' => 'Zähle neu',

'recount_info' => 'Dieser Link erlaubt ein Update verschiedener Statistiken, wie z.B. wie viele Einträge jedes Mitglied erstellt hat.',

'source' => 'Quelle',

'total_records' => 'Total Einträge:',

'recalculate' => 'Statistik neuzählen',

'do_recount' => 'Neuzählung ausführen',

'exp_members' => 'Mitglieder',

'exp_channel_titles' => 'Channel Einträge',

'search_and_replace' => 'Suchen und Ersetzen',

'sandr_instructions' => 'Diese Felder erlauben nach spezifischen Texten zu suchen und mit anderen auszutauschen',

'search_term' => 'Suche nach diesem Text',

'replace_term' => 'und ersetze ihn mit diesem Text',

'replace_where' => 'In welchem Datenbank-Feld soll das Ersetzen erfolgen?',

'search_replace_disclaimer' => 'Abhängig von der Syntax kann diese Funktion unerwünschte Resultate erbringen. Konsultieren Sie das Handbuch und machen Sie ein Backup der Datenbank.',

'title' => 'Titel',

'channel_entry_title' => 'Channel Eintragstitel',

'channel_fields' => 'Channel Felder:',

'templates' => 'In ALLEN Templates',

'rows_replaced' => 'Anzahl Datenbankeinträge in denen ein Ersetzen erfolgte:',

'view_database' => 'Datenbanktabellen verwalten',

'sql_no_result' => 'Die angegebene Abfrage erbrachte keine Ergebnisse',

'sql_not_allowed' => 'Sorry, das ist keine der erlaubten Abfrage-Arten',

'site_statistics' => 'Site Statistik',

'translation_tool' => 'Übersetzungshilfe',

'translation_dir_unwritable' => 'Warnung: Das translation Verzeichnis ist nicht beschreibbar.',

'please_set_permissions' => 'Bitte die Berechtigungen auf 666 oder 777 für das folgende Verzeichnis setzen:',

'choose_translation_file' => 'Eine Datei zum Übersetzen wählen',

'core_language_files' => 'Core Sprachdateien:',

'module_language_files' => 'Modul Sprachdateien:',

'file_saved' => 'Die Datei wurde gespeichert',

'default_html_buttons' => 'Standard HTML Buttons',

'add_html_button' => 'HTML Button anfügen',

'add_predefined_html_button' => 'Vordefinierten HTML Button anfügen',

'add_new_html_button' => 'Neuen HTML Button anfügen',

'member_import' => 'Mitglieder Import Utility',

'specialty_templates' => 'Speziele Templates',

'plugin_manager' => 'Plugin Manager',

'installed_plugins' => 'Installierte Plugins',

'no_plugins_exist' => 'Aktuell sind keine Plugins installiert',

'view_info' => 'Info zeigen',

'plugin_information' => 'Plugin Information',

'pi_name' => 'Name',

'pi_author' => 'Autor',

'pi_version' => 'Version',

'pi_author_url' => 'Autor URL',

'pi_description' => 'Beschreibung',

'pi_usage' => 'Verwendung',

'no_additional_info' => 'Keine weiteren Informationen für dieses Plugin erhältlich',

'update_and_return' => 'Update und beenden',

'template_debugging' => 'Template Debugging anzeigen?',

'template_debugging_explanation' => 'Wenn aktiviert, sehen Super Admins eine Liste von Details betreffend der Verarbeitung der Seite. Hilfreich für das Debugging.',

'view_throttle_log' => 'Drosselung Log zeigen',

'no_throttle_logs' => 'Keine IPs werden im Moment vom System gedrosselt',

'throttling_disabled' => 'Drosselung deaktiviert',

'hits' => 'Aufrufe',

'locked_out' => 'Ausgesperrt',

'last_activity' => 'Letzte Aktivität',

'blacklist_all_ips' => 'Alle IPs auf Blacklist',

'sites_tab_behavior' => 'Verhalten Sites Tab',

'is_site_on' => 'Ist die Site Online?',

'is_site_on_explanation' => 'Wenn die Site Offline ist, sieht nur ein Super Admin die Site',

'theme_folder_path' => 'Pfad zum Verzeichnis themes',

'site_preferences' => 'Site Einstellungen',

'multiple_sites_enabled' => 'Aktiviere Multiple Site Manager',

'admin_content' => 'Inhalt Administration',

'admin_system' => 'System Administration',

'illegal_characters' => 'Der angegebene Name darf nur alpha-numerische Zeichen, Unterstriche und Bindestriche enthalten',

'invalid_xss_check' => 'Die gesendeten Daten haben den Sicherheitscheck nicht bestanden. Wenn Sie dieses Formular nicht vorlegen wollten,  <a href="%s">bitte hier klicken</a> und keine der Einstellungen werden verändert.',

'developer_logs' => 'Es sind %d nicht eingesehene Einträge im <a href="%s">Developer Log</a>',

'translate' => 'Update',

''=>''
);

// End of File