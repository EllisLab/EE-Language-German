<?php

//---------------------------------------------------
//	Admin Notification of Mailinglist subscription
//--------------------------------------------------

if ( ! function_exists('admin_notify_mailinglist_title'))
{
	function admin_notify_mailinglist_title()
	{
return <<<EOF
Jemand hat sich in die Mailingliste eingetragen
EOF;
	}
}

if ( ! function_exists('admin_notify_mailinglist'))
{
	function admin_notify_mailinglist()
	{
return <<<EOF
Ein neues Mailingliste-Abo wurde angenommen.

E-Mail-Adresse: {email}
Mailingliste: {mailing_list}
EOF;
	}
}



//---------------------------------------------------
//	Admin Notification of New Entry
//--------------------------------------------------

if ( ! function_exists('admin_notify_entry_title'))
{
	function admin_notify_entry_title()
	{
return <<<EOF
Ein neuer Eintrag wurde verfasst
EOF;
	}
}

if ( ! function_exists('admin_notify_entry'))
{
	function admin_notify_entry()
	{
return <<<EOF
Ein neuer Beitrag wurde im folgenden Channel verfasst:
{channel_name}

Der Titel des Eintrages lautet:
{entry_title}

Verfasst von: {name}
E-Mail: {email}

Der Eintrag ist hier zu lesen: 
{entry_url}

EOF;
	}
}



//---------------------------------------------------
//	Admin Notification of New Member Registrations
//--------------------------------------------------

if ( ! function_exists('admin_notify_reg_title'))
{
	function admin_notify_reg_title()
	{
return <<<EOF
Benachrichtigung über Neue Mitglied-Registratur
EOF;
	}
}

if ( ! function_exists('admin_notify_reg'))
{
	function admin_notify_reg()
	{
return <<<EOF
Mitgliederregistratur auf Site: {site_name}

Bildschirmname: {name}
Username: {username}
E-Mail: {email}

URL zur Administration: {control_panel_url}
EOF;
	}
}



//---------------------------------------------------
//	Admin Notification of New Comment
//--------------------------------------------------

if ( ! function_exists('admin_notify_comment_title'))
{
	function admin_notify_comment_title()
	{
return <<<EOF
Sie haben einen Kommentar erhalten
EOF;
	}
}

if ( ! function_exists('admin_notify_comment'))
{
	function admin_notify_comment()
	{
return <<<EOF
Im folgenden Channel wurde ein Kommentar verfasst:
{channel_name}

Titel des Beitrages:
{entry_title}

Zu finden hier: 
{comment_url}

Verfasst von: {name}
E-Mail: {email}
URL: {url}
Ort: {location}

{comment}
EOF;
	}
}



//---------------------------------------------------
//	Membership Activation Instructions
//--------------------------------------------------

if ( ! function_exists('mbr_activation_instructions_title'))
{
	function mbr_activation_instructions_title()
	{
return <<<EOF
Beiliegend Ihr Aktivierungscode
EOF;
	}
}

if ( ! function_exists('mbr_activation_instructions'))
{
	function mbr_activation_instructions()
	{
return <<<EOF
Danke für Ihre Registrierung als Mitglied.

Zur Aktivierung Ihres Kontos gehen Sie bitte zu folgendem URL:

{unwrap}{activation_url}{/unwrap}

Besten Dank!

{site_name}

{site_url}
EOF;
	}
}



//---------------------------------------------------
//	Member Forgotten Password Instructions
//--------------------------------------------------

if ( ! function_exists('forgot_password_instructions_title'))
{
	function forgot_password_instructions_title()
	{
return <<<EOF
Login Information
EOF;
	}
}

if ( ! function_exists('forgot_password_instructions'))
{
	function forgot_password_instructions()
	{
return <<<EOF
{name},

Um das Passwort zurückzusetzen, gehen Sie bitte zu folgender Seite:

{reset_url}

Ihr Passwort wird automatisch zurückgesetzt und das neues Passwort erhalten Sie per E-Mail.

Soll das Passwort nicht zurückgesetzt werden, ignorieren Sie bitte diese Meldung. Sie wird in 24 Studen verfallen.

{site_name}
{site_url}
EOF;
	}
}


//---------------------------------------------------
//	Validated Member Notification
//--------------------------------------------------

if ( ! function_exists('validated_member_notify_title'))
{
	function validated_member_notify_title()
	{
return <<<EOF
Ihr Mitgliedschaftskonto wurde aktiviert.
EOF;
	}
}

if ( ! function_exists('validated_member_notify'))
{
	function validated_member_notify()
	{
return <<<EOF
{name},

Ihr Mitgliedschaftskonto wurde aktiviert und ist für den Einsatz bereit.

Besten Dank!

{site_name}
{site_url}
EOF;
	}
}



//---------------------------------------------------
//	Decline Member Validation
//--------------------------------------------------

if ( ! function_exists('decline_member_validation_title'))
{
	function decline_member_validation_title()
	{
return <<<EOF
Ihr Mitgliedschaftkonto wurde abgelehnt
EOF;
	}
}

if ( ! function_exists('validated_member_notify'))
{
	function validated_member_notify()
	{
return <<<EOF
{name},

Entschuldigen Sie bitte, doch unsere Mitarbeiter haben entschieden, Ihre Mitgliedschaft nicht zu aktivieren.

{site_name}
{site_url}
EOF;
	}
}



//---------------------------------------------------
//	Mailinglist Activation Instructions
//--------------------------------------------------

if ( ! function_exists('mailinglist_activation_instructions_title'))
{
	function mailinglist_activation_instructions_title()
	{
return <<<EOF
E-Mail Bestätigung
EOF;
	}
}

if ( ! function_exists('mailinglist_activation_instructions'))
{
	function mailinglist_activation_instructions()
	{
return <<<EOF
Danke für das Interesse an unserer Mailingliste "{mailing_list}"!

Bitte auf den Link unten klicken, um Ihre E-Mail-Adresse zu bestätigen.

Wollen Sie nicht auf unsere Mailingliste, dann ignorieren Sie bitte dieses E-Mail.

{unwrap}{activation_url}{/unwrap}

Besten Dank!

{site_name}
EOF;
	}
}




//---------------------------------------------------
//	Comment Notification
//--------------------------------------------------

if ( ! function_exists('comment_notification_title'))
{
	function comment_notification_title()
	{
return <<<EOF
Jemand hat gerade auf Ihren Kommentar geantwortet
EOF;
	}
}

if ( ! function_exists('comment_notification'))
{
	function comment_notification()
	{
return <<<EOF
Jemand hat auf Ihren abonnierten Beitrag geantwortet. Hier:
{channel_name}

Titel das Beitrages:
{entry_title}

Den Kommentar finden Sie bei diesem URL:
{comment_url}

{comment}

Um weitere Benachrichtigungen zu diesem Kommentar zu stoppen, klicken Sie hier:
{notification_removal_url}
EOF;
	}
}

//---------------------------------------------------
//	Comments Opened Notification
//--------------------------------------------------

if ( ! function_exists('comments_opened_notification_title'))
{
	function comments_opened_notification_title()
	{
return <<<EOF
Neue Kommentare geschrieben
EOF;
	}
}

if ( ! function_exists('comments_opened_notification'))
{
	function comments_opened_notification()
	{
return <<<EOF
Antworten wurden geschrieben bei EInträgen die Sie abonniert haben :
{channel_name}

Der Titel des Eintrages:
{entry_title}

Die Kommentare finden Sie unter folgendem URL:
{comment_url}

{comments}
{comment} 
{/comments}

Um Benachrichtigungen zu diesem Beitrag zu stoppen, klicken Sie hier:
{notification_removal_url}
EOF;
	}
}

//---------------------------------------------------
//	Admin Notification of New Forum Post
//--------------------------------------------------

if ( ! function_exists('admin_notify_forum_post_title'))
{
	function admin_notify_forum_post_title()
	{
return <<<EOF
Neuer Beitrag im Forum {forum_name}
EOF;
	}
}

if ( ! function_exists('admin_notify_forum_post'))
{
	function admin_notify_forum_post()
	{
return <<<EOF
{name_of_poster} verfasste einen neuen Beitrag im Forum: {forum_name}

Titel der Diskussion:
{title}

Zu finden hier:
{post_url}

{body}
EOF;
	}
}



//---------------------------------------------------
//	Forum Post User Notification
//--------------------------------------------------

if ( ! function_exists('forum_post_notification_title'))
{
	function forum_post_notification_title()
	{
return <<<EOF
Neuer Beitrag im Forum {forum_name}
EOF;
	}
}

if ( ! function_exists('forum_post_notification'))
{
	function forum_post_notification()
	{
return <<<EOF
{name_of_poster} hat zur abonnierten Diskussion geschrieben in:
{forum_name}

Titel der Diskussion:
{title}

Zu finden hier:
{post_url}

{body}

Um Benachrichtigungen für diesen Kommentar zu stoppen, klicken Sie hier:
{notification_removal_url}
EOF;
	}
}



//---------------------------------------------------
//	Private Message Notification
//--------------------------------------------------

if ( ! function_exists('private_message_notification_title'))
{
	function private_message_notification_title()
	{
return <<<EOF
Jemand hat eine neue Private Mitteilung verfasst
EOF;
	}
}

if ( ! function_exists('private_message_notification'))
{
	function private_message_notification()
	{
return <<<EOF

{recipient_name},

{sender_name} sendet eine Private Mitteilung, mit Titel '{message_subject}'.

Zum Lesen bitte Anmelden und die InBox prüfen hier:
{site_url}

Inhalt:

{message_content}

Zum Stoppen der Benachrichtigungen für Private Mitteilungen, die entsprechende Option in den E-Mail-Einstellungen vornehmen.

{site_name}
{site_url}
EOF;
	}
}



/* -------------------------------------
/*  Notification of Full PM InBox
/* -------------------------------------*/
if ( ! function_exists('pm_inbox_full_title'))
{
	function pm_inbox_full_title()
	{
return <<<EOF
Mailbox für Private Mitteilungen ist voll
EOF;
	}
}

if ( ! function_exists('pm_inbox_full'))
{
	function pm_inbox_full()
	{
return <<<EOF
{recipient_name},

{sender_name} hat gerade versucht, eine Private Mitteilung zu
versenden, aber die Mailbox ist voll. Das Limit von {pm_storage_limit} ist erreicht.

Bitte einloggen und unbenötigte Mitteilungen in der InBox hier löschen: 
{site_url}
EOF;
	}
}



/* -------------------------------------
/*  Notification of Forum Topic Moderation
/* -------------------------------------*/
if ( ! function_exists('forum_moderation_notification_title'))
{
	function forum_moderation_notification_title()
	{
return <<<EOF
Hinweis auf eine Moderation im Forum {forum_name}
EOF;
	}
}

if ( ! function_exists('forum_moderation_notification'))
{
	function forum_moderation_notification()
	{
return <<<EOF
{name_of_recipient}, ein Moderator hat Ihren Beitrag {moderation_action}.

Der Titel des Beitrages ist:
{title}

Der Beitrag ist hier zu finden:
{thread_url}
EOF;
	}
}



/* -------------------------------------
/*  Notification of Forum Post Report
/* -------------------------------------*/
if ( ! function_exists('forum_report_notification_title'))
{
	function forum_report_notification_title()
	{
return <<<EOF
Beitrag-Rapport in {forum_name}
EOF;
	}
}

if ( ! function_exists('forum_report_notification'))
{
	function forum_report_notification()
	{
return <<<EOF
{reporter_name} rapportiert gerade einen Beitrag von {author} in:
{forum_name}

Grund/Gründe für den Rapport:
{reasons}

Bemerkungen dazu von {reporter_name}:
{notes}

Der Beitrag ist hier zu finden:
{post_url}

Inhalt des rapportierten Beitrages:
{body}
EOF;
	}
}



/* -------------------------------------
//  OFFLINE SYSTEM PAGE
/* -------------------------------------*/
if ( ! function_exists('offline_template'))
{
	function offline_template()
	{
return <<<EOF
<html>
<head>

<title>System Offline</title>

<style type="text/css">

body { 
background-color:	#ffffff; 
margin:				50px; 
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size:			11px;
color:				#000;
background-color:	#fff;
}

a {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
letter-spacing:		.09em;
text-decoration:	none;
color:			  #330099;
background-color:	transparent;
}
  
a:visited {
color:				#330099;
background-color:	transparent;
}

a:hover {
color:				#000;
text-decoration:	underline;
background-color:	transparent;
}

#content  {
border:				#999999 1px solid;
padding:			22px 25px 14px 25px;
}

h1 {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
font-size:			14px;
color:				#000;
margin-top: 		0;
margin-bottom:		14px;
}

p {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		12px;
margin-bottom: 		14px;
color: 				#000;
}
</style>

</head>

<body>

<div id="content">

<h1>System Offline</h1>

<p>Die Website ist im Moment Offline</p>

</div>

</body>

</html>
EOF;
	}
}



/* -------------------------------------
//  User Messages Template
/* -------------------------------------*/
if ( ! function_exists('message_template'))
{
	function message_template()
	{
return <<<EOF
<html>
<head>

<title>{title}</title>

<meta http-equiv='content-type' content='text/html; charset={charset}' />

{meta_refresh}

<style type="text/css">

body { 
background-color:	#ffffff; 
margin:				50px; 
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size:			11px;
color:				#000;
background-color:	#fff;
}

a {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
letter-spacing:		.09em;
text-decoration:	none;
color:			  #330099;
background-color:	transparent;
}
  
a:visited {
color:				#330099;
background-color:	transparent;
}

a:active {
color:				#ccc;
background-color:	transparent;
}

a:hover {
color:				#000;
text-decoration:	underline;
background-color:	transparent;
}

#content  {
border:				#000 1px solid;
background-color: 	#DEDFE3;
padding:			22px 25px 14px 25px;
}

h1 {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
font-size:			14px;
color:				#000;
margin-top: 		0;
margin-bottom:		14px;
}

p {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		12px;
margin-bottom: 		14px;
color: 				#000;
}

ul {
margin-bottom: 		16px;
}

li {
list-style:			square;
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		8px;
margin-bottom: 		8px;
color: 				#000;
}

</style>

</head>

<body>

<div id="content">

<h1>{heading}</h1>

{content}

<p>{link}</p>

</div>

</body>

</html>
EOF;
	}
}



/* -------------------------------------
//  Mailing List Template
/* -------------------------------------*/
if ( ! function_exists('mailinglist_template'))
{
	function mailinglist_template()
	{
return <<<EOF
{message_text}

Um Ihre E-Mail-Adresse aus der Mailingliste zu entfernen, bitte hier klicken:
{if html_email}<a href="{unsubscribe_url}">{unsubscribe_url}</a>{/if}
{if plain_email}{unsubscribe_url}{/if}
EOF;
	}
}




/* End of file email_data.php */
/* Location: ./system/expressionengine/language/english/email_data.php */