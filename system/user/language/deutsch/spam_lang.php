<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		EllisLab Dev Team
 * @copyright	Copyright (c) 2003 - 2014, EllisLab, Inc.
 * @license		http://ellislab.com/expressionengine/user-guide/license.html
 * @link		http://ellislab.com
 * @since		Version 3.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * ExpressionEngine Spam Module
 *
 * @package		ExpressionEngine
 * @subpackage	Modules
 * @category	Modules
 * @author		EllisLab Dev Team
 * @link		http://ellislab.com
 */

$lang = array(
	'spam_module_name' => 'Spam',
	'spam_module_description' => 'Spamfilter für Kommentare und Forumposts',
	'spam_settings' => 'SPAM-Einstellungen',
	'spam_sensitivity' => 'Empfindlichkeit',
	'spam_sensitivity_desc' => 'Prozentuale Grenze ab der Inhalt als SPAM markiert wird, wenn der Wert gleich oder höher ist.',
	'engine_training' => 'Engine Training',
	'spam_word_limit' => 'Wort Limit',
	'spam_word_limit_desc' => 'Anzahl an Worten zum Trainieren.
	Eine höhere Anzahl kann die Performance beeinträchtigen.',
	'spam_content_limit' => 'Inhaltslimit',
	'spam_content_limit_desc' => 'Anzahl an Einträgen zum Training.<br>Eine höhere Anzahl kann die Performance beeinträchtigen.',
	'spam_content' => 'Inhalt',
	'spam_type' => 'Typ',
	'content_type' => 'Inhaltstyp',
	'forum_post' => 'Forum post',
	'wiki_post' => 'Wiki post',
	'comment' => 'Kommentar',
	'spam' => 'SPAM',
	'all_spam' => 'Alles SPAM',
	'search_spam' => 'Spam durchsuchen',
	'approve_spam' => 'KEIN SPAM, dann freigeben',
	'deny_spam' => 'SPAM, dann aus der Spamfalle löschen',
	'mark_selected' => 'Ausgewählte markieren',
	'show_all_spam' => 'Allen Spam zeigen',
	'spam_trap_removed' => '<b>%s</b> Einträge in der Spamfalle sind gelöscht und als Spam markiert worden.',
	'spam_trap_approved' => '<b>%s</b> Einträge in der Spamfalle sind freigegeben worden',
	'spam_settings_updated' => 'Die Spameinstellungen wurden gesichert',
	'success' => 'Erfolg',
	'update_training' => 'Training aktualisieren',
	'update_training_desc' => 'Aktualisierte Trainingsdaten werden von EllisLab heruntergeladen and die Datenbank aktualisieren.',
	'training_downloaded' => 'Trainingsdaten heruntergeladen',
	'training_prepared' => 'Trainingsdaten vorbereitet',
	'updating_vocabulary' => 'Wörterverzeichnis',
	'updating_parameters' => 'Parameter aktualisieren',
	'training_finished' => 'Training beendet',
);
