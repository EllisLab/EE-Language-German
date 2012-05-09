<?php

//---------------------------------------------------
//	Admin Notification of Mailinglist subscription 1.6.1
//--------------------------------------------------

function admin_notify_mailinglist_title()
{
return <<<EOF
Jemand hat sich in die Mailingliste eingetragen
EOF;
}

function admin_notify_mailinglist()
{
return <<<EOF
Ein neues Mailingliste-Abo wurde angenommen.

E-Mail-Adresse: {email}
Mailingliste: {mailing_list}
EOF;
}
// END


//---------------------------------------------------
//	Admin Notification of New Entry
//--------------------------------------------------

function admin_notify_entry_title()
{
return <<<EOF
Ein neuer Weblog-Eintrag wurde verfasst
EOF;
}

function admin_notify_entry()
{
return <<<EOF
Ein neuer Beitrag wurde im folgenden Weblog verfasst:
{weblog_name}

Der Titel des Eintrages lautet:
{entry_title}

Verfasst von: {name}
E-Mail: {email}

Der Eintrag ist hier zu lesen: 
{entry_url}

EOF;
}
// END


//---------------------------------------------------
//	Admin Notification of New Member Registrations
//--------------------------------------------------

function admin_notify_reg_title()
{
return <<<EOF
Neue Mitglied-Registratur
EOF;
}

function admin_notify_reg()
{
return <<<EOF
Folgende Person hat eine Registratur als Mitglied ausgefuellt: {name}

Auf: {site_name}

URL zur Administration: {control_panel_url}
EOF;
}
// END


//---------------------------------------------------
//	Admin Notification of New Comment
//--------------------------------------------------

function admin_notify_comment_title()
{
return <<<EOF
Sie haben einen Kommentar erhalten
EOF;
}

function admin_notify_comment()
{
return <<<EOF
Im folgenden Weblog wurde ein Kommentar verfasst:
{weblog_name}

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
// END


//---------------------------------------------------
//	Admin Notification of New Trackback
//--------------------------------------------------

function admin_notify_trackback_title()
{
return <<<EOF
Sie haben einen Trackback erhalten
EOF;
}

function admin_notify_trackback()
{
return <<<EOF
Fuer den folgenden Beitrag haben Sie einen Trackback erhalten:
{entry_title}

Zu finden hier: 
{comment_url}

Der Trackback wurde von folgendem Weblog gesandt:
{sending_weblog_name}

Beitrag-Titel:
{sending_entry_title}

Weblog URL:
{sending_weblog_url}
EOF;
}
// END


//---------------------------------------------------
//	Membership Activation Instructions
//--------------------------------------------------

function mbr_activation_instructions_title()
{
return <<<EOF
Ihr Aktivierungscode
EOF;
}

function mbr_activation_instructions()
{
return <<<EOF
Danke fuer Ihre Registrierung als Mitglied.

Zur Aktivierung Ihres Kontos gehen Sie bitte zu folgendem URL:

{activation_url}

Besten Dank!

{site_name}

{site_url}
EOF;
}
// END


//---------------------------------------------------
//	Member Forgotten Password Instructions
//--------------------------------------------------

function forgot_password_instructions_title()
{
return <<<EOF
Information zum Anmelden
EOF;
}

function forgot_password_instructions()
{
return <<<EOF
{name},

Um das Passwort zurueck zu setzen, gehen Sie bitte zu folgender Seite:

{reset_url}

Ihr Passwort wird automatisch zurueck gesetzt und ein neues Passwort erhalten Sie per E-Mail.

Soll das Passwort nicht zurueckgesetzt werden, ignorieren Sie bitte diese Meldung. Sie wird in 24 Studen verfallen.

{site_name}
{site_url}
EOF;
}
// END



//---------------------------------------------------
//	Reset Password Notification
//--------------------------------------------------

function reset_password_notification_title()
{
return <<<EOF
Information fuer neue Anmeldung
EOF;
}

function reset_password_notification()
{
return <<<EOF
{name},

Hier sind Ihre neuen Daten fuer die Anmeldung:

Benutzername: {username}
Passwort: {password}

{site_name}
{site_url}
EOF;
}
// END



//---------------------------------------------------
//	Validated Member Notification
//--------------------------------------------------

function validated_member_notify_title()
{
return <<<EOF
Ihr Mitgliedskonto ist aktiviert
EOF;
}

function validated_member_notify()
{
return <<<EOF
{name},

Ihr Mitgliedskonto ist aktiviert. Sie koennen nun darueber verfuegen.

Besten Dank!

{site_name}
{site_url}
EOF;
}
// END


//---------------------------------------------------
//	Decline Member Validation
//--------------------------------------------------

function decline_member_validation_title()
{
return <<<EOF
Ihr Mitgliedskonto wurde abgelehnt
EOF;
}

function decline_member_validation()
{
return <<<EOF
{name},

Entschuldigen Sie. Der Betreiber hat entschieden, Ihr Konto nicht zu aktivieren.

{site_name}
{site_url}
EOF;
}
// END


//---------------------------------------------------
//	Mailinglist Activation Instructions
//--------------------------------------------------

function mailinglist_activation_instructions_title()
{
return <<<EOF
E-Mail Bestaetigung
EOF;
}

function mailinglist_activation_instructions()
{
return <<<EOF
Danke fuer das Interesse an unserer Mailingliste!

Bitte auf den Link unten klicken, um Ihre E-Mail-Adresse zu bestaetigen.

Wollen Sie nicht auf unsere Mailingliste, dann ignorieren Sie bitte dieses E-Mail.

{activation_url}

Besten Dank!

{site_name}
EOF;
}
// END



//---------------------------------------------------
//	Comment Notification
//--------------------------------------------------

function comment_notification_title()
{
return <<<EOF
Jemand hat auf Ihren Kommentar geantwortet
EOF;
}

function comment_notification()
{
return <<<EOF
Jemand hat auf Ihren abonnierten Beitrag geantwortet. Hier:
{weblog_name}

Titel das Beitrages:
{entry_title}

Den Kommentar finden Sie bei diesem URL:
{comment_url}

{comment}

Um weitere Benachrichtigungen zu diesem Kommentar zu stoppen, klicken Sie hier:
{notification_removal_url}
EOF;
}
// END


//---------------------------------------------------
//	Admin Notification of New Gallery Comment
//--------------------------------------------------

function admin_notify_gallery_comment_title()
{
return <<<EOF
Sie haben einen Kommentar erhalten
EOF;
}

function admin_notify_gallery_comment()
{
return <<<EOF
Sie haben einen Kommentar in der folgenden Bildgalerie erhalten:
{gallery_name}

Der Titel des Eintrages:
{entry_title}

Zu finden hier: 
{comment_url}

{comment}
EOF;
}
// END

//---------------------------------------------------
//	Gallery Comment Notification
//--------------------------------------------------

function gallery_comment_notification_title()
{
return <<<EOF
Jemand hat auf Ihren Kommentar geantwortet
EOF;
}

function gallery_comment_notification()
{
return <<<EOF
Jemand hat zu einem abonnierten Bildeintrag geantwortet:
{gallery_name}

Den Kommentar finden Sie beim folgenden URL:
{comment_url}

{comment}

Um weitere Benachrichtigungen zu diesem Kommentar zu stoppen, klicken Sie hier:
{notification_removal_url}
EOF;
}
// END



//---------------------------------------------------
//	Admin Notification of New Forum Post
//--------------------------------------------------

function admin_notify_forum_post_title()
{
return <<<EOF
Neuer Beitrag im Forum {forum_name}
EOF;
}

function admin_notify_forum_post()
{
return <<<EOF
{name} verfasste einen neuen Beitrag im Forum: {forum_name}

Titel der Diskussion:
{title}

Zu finden hier:
{post_url}

{body}
EOF;
}
// END


//---------------------------------------------------
//	Forum Post User Notification
//--------------------------------------------------

function forum_post_notification_title()
{
return <<<EOF
Neuer Beitrag im Forum {forum_name}
EOF;
}

function forum_post_notification()
{
return <<<EOF
Jemand hat zur abonnierten Diskussion geschrieben, hier:
{forum_name}

Titel der Diskussion:
{title}

Zu finden hier:
{thread_url}

{body}

Um weitere Benachrichtigungen zu diesem Kommentar zu stoppen, klicken Sie hier:
{notification_removal_url}
EOF;
}
// END


//---------------------------------------------------
//	Private Message Notification
//--------------------------------------------------

function private_message_notification_title()
{
return <<<EOF
Neue Private Mitteilung
EOF;
}

function private_message_notification()
{
return <<<EOF

{recipient_name},

{sender_name} sendet eine Private Mitteilung, mit Titel '{message_subject}'.

Zum Lesen bitte Anmelden und den Eingangsordner pruefen:
{site_url}

Zum Stoppen der Benachrichtigungen fuer Private Mitteilungen, die entsprechende Option in den E-Mail-Einstellungen vornehmen.
EOF;
}
// END


/* -------------------------------------
/*  Notification of Full PM InBox
/* -------------------------------------*/

function pm_inbox_full_title()
{
return <<<EOF
Mailbox fuer Private Mitteilungen ist voll
EOF;
}

function pm_inbox_full()
{
return <<<EOF
{recipient_name},

{sender_name} hat gerade versucht, eine Private Mitteilung zu
versenden, aber die Mailbox ist voll. Das Limit von {pm_storage_limit} ist erreicht.

Bitte loggen Sie sich ein und entfernen Sie alte Mitteilungen auf:
{site_url}
EOF;
}
/* END */


/* -------------------------------------
/*  Notification of Forum Topic Moderation
/* -------------------------------------*/

function forum_moderation_notification_title()
{
return <<<EOF
Hinweis auf eine Moderation auf {forum_name}
EOF;
}

function forum_moderation_notification()
{
return <<<EOF
{name_of_recipient}, ein Moderator hat den Beitrag veraendert: {moderation_action} your thread.

Der Titel des Beitrages ist:
{title}

Der beitrag ist hier zu finden:
{thread_url}
EOF;
}
/* END */


/* -------------------------------------
/*  Notification of Forum Post Report
/* -------------------------------------*/

function forum_report_notification_title()
{
return <<<EOF
Beitrag-Rapport in {forum_name}
EOF;
}

function forum_report_notification()
{
return <<<EOF
{reporter_name} rapportiert gerade einen Beitrag von {author} in:
{forum_name}

Grund (Gruende) fuer den Rapport:
{reasons}

Bemerkungen dazu von {reporter_name}:
{notes}

Der Beitrag ist hier zu finden:
{post_url}

Inhalt des rapportierten Beitrages:
{body}
EOF;
}
/* END */


/* -------------------------------------
//  OFFLINE SYSTEM PAGE
/* -------------------------------------*/

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
color:              #330099;
background-color:   transparent;
}
  
a:visited {
color:				#330099;
background-color:	transparent;
}

a:hover {
color:				#000;
text-decoration:    underline;
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

<p>Die Website ist momentan nicht aktiv.</p>

</div>

</body>

</html>
EOF;
}
/* END */


/* -------------------------------------
//  User Messages Template
/* -------------------------------------*/

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
color:              #330099;
background-color:   transparent;
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
text-decoration:    underline;
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
/* END */


/* -------------------------------------
//  Mailing List Template
/* -------------------------------------*/

function mailinglist_template()
{
return <<<EOF
{message_text}

Um Ihre E-Mail-Adresse aus der Mailingliste zu streichen bitte hier klicken:
{if html_email}<a href="{unsubscribe_url}">{unsubscribe_url}</a>{/if}
{if plain_email}{unsubscribe_url}{/if}
EOF;
}
/* END */


?>