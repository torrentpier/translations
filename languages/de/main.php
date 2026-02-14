<?php

/**
 * TorrentPier – Bull-powered BitTorrent tracker engine
 *
 * @copyright Copyright (c) 2005-2025 TorrentPier (https://torrentpier.com)
 * @link      https://github.com/torrentpier/torrentpier for the canonical source repository
 * @license   https://github.com/torrentpier/torrentpier/blob/master/LICENSE MIT License
 */

// Common, these terms are used extensively on several pages
$lang['ADMIN'] = 'Verwaltung';
$lang['FORUM'] = 'Forum';
$lang['CATEGORY'] = 'Kategorie';
$lang['HIDE_CAT'] = 'Ausblenden von Kategorien';
$lang['HIDE_CAT_MESS'] = 'Einige Kategorien werden durch benutzerdefinierte Anzeigeoptionen ausgeblendet';
$lang['SHOW_ALL'] = 'Zeige alles';
$lang['TOPIC'] = 'Thema';
$lang['TOPICS'] = 'Themen';
$lang['TOPICS_SHORT'] = 'Themen';
$lang['REPLIES'] = 'Antworten';
$lang['REPLIES_SHORT'] = 'Antworten';
$lang['VIEWS'] = 'Ansichten';
$lang['POSTS'] = 'Beiträge';
$lang['POSTS_SHORT'] = 'Beiträge';
$lang['POSTED'] = 'Geschrieben';
$lang['USERNAME'] = 'Benutzername';
$lang['PASSWORD'] = 'Passwort';
$lang['PASSWORD_SHOW_BTN'] = 'Passwort anzeigen';
$lang['EMAIL'] = 'E-Mail';
$lang['PM'] = 'PM';
$lang['AUTHOR'] = 'Autor';
$lang['MESSAGE'] = 'Nachricht';
$lang['TORRENT'] = 'Torrent';
$lang['PERMISSIONS'] = 'Berechtigungen';
$lang['TYPE'] = 'Typ';

$lang['1_DAY'] = '1 Tag';
$lang['7_DAYS'] = '7 Tage';
$lang['2_WEEKS'] = '2 Wochen';
$lang['1_MONTH'] = '1 Monat';
$lang['3_MONTHS'] = '3 Monate';
$lang['6_MONTHS'] = '6 Monate';
$lang['1_YEAR'] = '1 Jahr';

$lang['GO'] = 'Gehen Sie zu';
$lang['SUBMIT'] = 'Einreichen';
$lang['RESET'] = 'Zurücksetzen';
$lang['CANCEL'] = 'Abbrechen';
$lang['PREVIEW'] = 'Vorschau';
$lang['AJAX_PREVIEW'] = 'Schnellansicht';
$lang['CONFIRM'] = 'Bestätigen';
$lang['YES'] = 'Ja';
$lang['NO'] = 'Nein';
$lang['ENABLED'] = 'Aktiviert';
$lang['DISABLED'] = 'Deaktiviert';
$lang['ERROR'] = 'Fehler';
$lang['SELECT_ACTION'] = 'Wählen Sie Aktion';
$lang['CLEAR'] = 'Löschen';
$lang['MOVE_TO_TOP'] = 'Nach oben verschieben';
$lang['UNKNOWN'] = 'Unbekannt';
$lang['COPY_TO_CLIPBOARD'] = 'In die Zwischenablage kopieren';
$lang['NO_ITEMS'] = 'Hier scheint keine Daten vorhanden zu sein...';
$lang['PLEASE_TRY_AGAIN'] = 'Bitte versuchen Sie es in wenigen Sekunden erneut...';

$lang['NEXT_PAGE'] = 'Nächste';
$lang['PREVIOUS_PAGE'] = 'Vorherige';
$lang['SHORT_PAGE'] = 'Seite';
$lang['GOTO_PAGE'] = 'Gehe zu Seite';
$lang['GOTO_SHORT'] = 'Seite';
$lang['JOINED'] = 'Beigetreten';
$lang['LONGEVITY'] = 'Registriert';
$lang['IP_ADDRESS'] = 'Die IP-Adresse';

$lang['SELECT_FORUM'] = 'Wählen Sie das Forum';
$lang['VIEW_LATEST_POST'] = 'Neuesten Beitrag anzeigen';
$lang['VIEW_NEWEST_POST'] = 'Anzeigen Sie den neuesten Beitrag';
$lang['PAGE_OF'] = 'Seite <b>%d</b> von <b>%s</b>';

$lang['TWITTER'] = 'X (Twitter)';
$lang['TWITTER_ERROR'] = 'Sie haben ein ungültigen Twitter-Login eingegeben.';

$lang['POST_NEW_TOPIC'] = 'Neues Thema posten';
$lang['POST_NEW_RELEASE'] = 'Neue Version posten';
$lang['REPLY_TO_TOPIC'] = 'Auf Thema antworten';

$lang['CLICK_RETURN_TOPIC'] = 'Klicken Sie %sHier%s, um zum Thema zurückzukehren'; // %s's here are for uris, do not remove!
$lang['CLICK_RETURN_FORUM'] = 'Klicken Sie %sHier%s, um zum Forum zurückzukehren';
$lang['CLICK_RETURN_MODCP'] = 'Klicken Sie %sHier%s zurück zum Moderator-Kontrollpanel';

$lang['ADMIN_PANEL'] = 'Gehe zum Administrationspanel';
$lang['ALL_CACHE_CLEARED'] = 'Cache wurde gelöscht';
$lang['ALL_TEMPLATE_CLEARED'] = 'Der Template-Cache wurde gelöscht';
$lang['DATASTORE_CLEARED'] = 'Datenspeicher wurde gelöscht';
$lang['BOARD_DISABLE'] = 'Entschuldigung, dieses Forum ist deaktiviert. Bitte versuchen Sie es später.';
$lang['BOARD_DISABLE_CRON'] = 'Das Forum ist wegen Wartungsarbeiten nicht verfügbar. Bitte versuchen Sie es später erneut.';
$lang['ADMIN_DISABLE'] = 'Das Forum ist vom Administrator deaktiviert. Sie können es jederzeit aktivieren';
$lang['ADMIN_DISABLE_CRON'] = 'Forum durch den Cron-Job-Trigger gesperrt. Sie können die Sperre jederzeit entfernen';
$lang['ADMIN_DISABLE_TITLE'] = 'Das Forum ist deaktiviert';
$lang['ADMIN_DISABLE_CRON_TITLE'] = 'Das Forum ist für Wartungsarbeiten heruntergefahren';
$lang['ADMIN_UNLOCK'] = 'Forum aktivieren';
$lang['ADMIN_UNLOCKED'] = 'Freigeschaltet';
$lang['ADMIN_UNLOCK_CRON'] = 'Schloss entfernen';
$lang['PAGE_NOT_FOUND'] = 'Seite nicht gefunden';

$lang['LOADING'] = 'Wird geladen...';
$lang['JUMPBOX_TITLE'] = 'Wählen Sie das Forum';
$lang['DISPLAYING_OPTIONS'] = 'Anzeigeoptionen';

// Global Header strings
$lang['BROWSING_FORUM'] = 'Benutzer in diesem Forum:';
$lang['ONLINE_USERS'] = 'Insgesamt gibt es <b>%1$d</b> Benutzer online: %2$d registriert und %3$d Gäste';
$lang['RECORD_ONLINE_USERS'] = 'Die meisten Nutzer gleichzeitig online war <b>%s</b> auf %s'; // first %s = number of users, second %s is the date.

$lang['ONLINE_ADMIN'] = 'Administrator';
$lang['ONLINE_MOD'] = 'Moderator';
$lang['ONLINE_GROUP_MEMBER'] = 'Gruppenmitglied';

$lang['CURRENT_TIME'] = 'Aktuelle Zeit: <span class="tz_time">%s</span>';

$lang['SEARCH_NEW'] = 'Neueste Beiträge anzeigen';
$lang['SEARCH_SELF'] = 'Meine Beiträge';
$lang['SEARCH_SELF_BY_LAST'] = 'letzte Beitrag Zeit';
$lang['SEARCH_SELF_BY_MY'] = 'meine Beitragszeit';
$lang['SEARCH_LATEST'] = 'Aktuelle Themen';
$lang['LATEST_RELEASES'] = 'Neueste Versionen';

$lang['REGISTER'] = 'Registrieren';
$lang['PROFILE'] = 'Profil';
$lang['EDIT_PROFILE'] = 'Profil bearbeiten';
$lang['SEARCH'] = 'Suche';
$lang['MEMBERLIST'] = 'Memberliste';
$lang['USERGROUPS'] = 'Benutzergruppen';
$lang['LASTPOST'] = 'Letzter Beitrag';
$lang['MODERATOR'] = 'Moderator';
$lang['MODERATORS'] = 'Moderatoren';
$lang['TERMS'] = 'Bedingungen';
$lang['NOTHING_HAS_CHANGED'] = 'Nichts hat sich geändert';

// Stats block text
$lang['POSTED_TOPICS_TOTAL'] = 'Unsere Nutzer gepostet haben insgesamt <b>%s</b> Themen'; // Number of topics
$lang['POSTED_POSTS_TOTAL'] = 'Unsere Nutzer haben insgesamt <b>%s</b> Beiträge veröffentlicht'; // Number of posts
$lang['REGISTERED_USERS_TOTAL'] = 'Wir haben <b>%s</b> registrierte Benutzer'; // # registered users
$lang['USERS_TOTAL_GENDER'] = 'Jungen: <b>%d</b>, Mädchen: <b>%d</b>, Andere: <b>%d</b>';
$lang['NEWEST_USER'] = 'Der neueste registrierte Benutzer ist <b>%s</b>'; // a href, username, /a

// Tracker stats
$lang['TORRENTS_STAT'] = 'Torrents: <b style="color: blue;">%s</b>,&nbsp; Gesamte Größe: <b>%s</b>'; // first %s = number of torrents, second %s is the total size.
$lang['PEERS_STAT'] = 'Peers: <b>%s</b>,&nbsp; Seeder: <b class="seedmed">%s</b>,&nbsp; Leechers: <b class="leechmed">%s</b>'; // first %s = number of peers, second %s = number of seeders,  third %s = number of leechers.
$lang['SPEED_STAT'] = 'Gesamt-Geschwindigkeit: <b>%s</b>&nbsp;'; // %s = total speed.

$lang['NO_NEW_POSTS'] = 'Keine neuen Beiträge';
$lang['NEW_POSTS'] = 'Neue Beiträge';
$lang['FORUM_LOCKED_MAIN'] = 'Forum ist gesperrt';

// Login
$lang['ENTER_PASSWORD'] = 'Bitte geben Sie Ihren Benutzernamen und Ihr Passwort ein, um sich anzumelden.';
$lang['LOGIN'] = 'Anmelden';
$lang['LOGOUT'] = 'Abmelden';
$lang['CONFIRM_LOGOUT'] = 'Sind Sie sicher, dass Sie sich abmelden möchten?';

$lang['FORGOTTEN_PASSWORD'] = 'Passwort vergessen?';
$lang['AUTO_LOGIN'] = 'Melden Sie sich automatisch an';
$lang['ERROR_LOGIN'] = 'Der Benutzername, den Sie eingegeben haben, ist falsch oder ungültig, oder das Passwort ist ungültig.';
$lang['REMEMBER'] = 'Erinnern Sie sich';
$lang['USER_WELCOME'] = 'Willkommen,';

// Index page
$lang['HOME'] = 'Home';
$lang['NO_POSTS'] = 'Keine Beiträge';
$lang['NO_FORUMS'] = 'Dieses Forum hat keine Foren.';

$lang['PRIVATE_MESSAGE'] = 'Private Nachricht';
$lang['PRIVATE_MESSAGES'] = 'Private Nachrichten';
$lang['WHOSONLINE'] = 'Wer ist online';

$lang['MARK_ALL_FORUMS_READ'] = 'Markieren Sie alle Foren als gelesen';

$lang['LATEST_NEWS'] = 'Neuigkeiten';
$lang['NETWORK_NEWS'] = 'Netzwerknachrichten';
$lang['SUBFORUMS'] = 'Subforen';

$lang['FORUM_NOT_EXIST'] = 'Das Forum, das Sie ausgewählt haben, existiert nicht.';
$lang['ERROR_PORNO_FORUM'] = 'Diese Art von Foren (18+) wurde in Ihrem Profil von Ihnen verborgen.';

$lang['DISPLAY_TOPICS'] = 'Themen anzeigen';
$lang['MODERATE_FORUM'] = 'Moderieren Sie dieses Forum.';
$lang['TITLE_SEARCH_HINT'] = 'Suche Titel...';

$lang['TOPIC_ANNOUNCEMENT'] = 'Ankündigung:';
$lang['TOPIC_MOVED'] = 'Verschoben:';
$lang['TOPIC_POLL'] = '[ Umfrage ]';

$lang['MARK_TOPICS_READ'] = 'Markieren Sie alle Themen als gelesen.';
$lang['TOPICS_MARKED_READ'] = 'Die Themen für dieses Forum wurden gerade als gelesen markiert.';

$lang['RULES_POST_CAN'] = 'Sie <b>können</b> neue Themen in diesem Forum posten.';
$lang['RULES_POST_CANNOT'] = 'Sie <b>können</b> keine neuen Themen in diesem Forum posten.';
$lang['RULES_REPLY_CAN'] = 'Sie <b>können</b> auf Themen in diesem Forum antworten.';
$lang['RULES_REPLY_CANNOT'] = 'Sie <b>können</b> nicht auf Themen in diesem Forum antworten.';
$lang['RULES_EDIT_CAN'] = 'Sie <b>können</b> Ihre Beiträge in diesem Forum bearbeiten.';
$lang['RULES_EDIT_CANNOT'] = 'Sie <b>können</b> Ihre Beiträge in diesem Forum nicht bearbeiten.';
$lang['RULES_DELETE_CAN'] = 'Sie <b>können</b> Ihre Beiträge in diesem Forum löschen.';
$lang['RULES_DELETE_CANNOT'] = 'Sie <b>können</b> Ihre Beiträge in diesem Forum nicht löschen.';
$lang['RULES_VOTE_CAN'] = 'Sie <b>können</b> in Umfragen in diesem Forum abstimmen.';
$lang['RULES_VOTE_CANNOT'] = 'Sie <b>können</b> nicht in Umfragen in diesem Forum abstimmen.';
$lang['RULES_MODERATE'] = 'Sie <b>können</b> dieses Forum moderieren.';

$lang['NO_TOPICS_POST_ONE'] = 'In diesem Forum gibt es noch keine Beiträge<br />Klicken Sie auf das Symbol <b>Neues Thema</b>, und Ihr Beitrag wird der erste sein.';
$lang['NO_RELEASES_POST_ONE'] = 'In diesem Forum gibt es noch keine Veröffentlichungen<br />Klicken Sie auf das Symbol <b>Neue Veröffentlichung</b>, und Ihre Veröffentlichung wird die erste sein.';

$lang['GUEST'] = 'Gast';
$lang['SUBMIT_VOTE'] = 'Abstimmung einreichen';

$lang['NO_NEWER_TOPICS'] = 'Es gibt keine neueren Themen in diesem Forum.';
$lang['NO_OLDER_TOPICS'] = 'Es gibt keine älteren Themen in diesem Forum.';
$lang['TOPIC_POST_NOT_EXIST'] = 'Das Thema oder die von Ihnen angeforderte Nachricht existiert nicht.';
$lang['NO_POSTS_TOPIC'] = 'Es gibt keine Beiträge in diesem Thema.';

$lang['DISPLAY_POSTS'] = 'Beiträge anzeigen';
$lang['ALL_POSTS'] = 'Alle Beiträge.';
$lang['NEWEST_FIRST'] = 'Das Neueste zuerst.';
$lang['OLDEST_FIRST'] = 'Älteste zuerst.';

$lang['READ_PROFILE'] = 'Benutzersprofil anzeigen.';

$lang['WROTE'] = 'schrieb'; // proceeds the username and is followed by the quoted text
$lang['QUOTE'] = 'Zitieren'; // comes before bbcode quote output
$lang['CODE'] = 'Code'; // comes before bbcode code output
$lang['SPOILER_HEAD'] = 'hidden text';
$lang['SPOILER_CLOSE'] = 'drehen';
$lang['PLAY_ON_CURPAGE'] = 'Starten Sie die Wiedergabe auf der aktuellen Seite.';

$lang['EDITED_TIME_TOTAL'] = 'Zuletzt bearbeitet von <b>%s</b> am %s; insgesamt %d mal bearbeitet'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['EDITED_TIMES_TOTAL'] = 'Zuletzt bearbeitet von <b>%s</b> am %s; insgesamt %d mal bearbeitet'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['LOCK_TOPIC'] = 'Sperren Sie das Thema.';
$lang['UNLOCK_TOPIC'] = 'Entsperren Sie das Thema.';
$lang['MOVE_TOPIC'] = 'Verschieben Sie das Thema.';
$lang['DELETE_TOPIC'] = 'Löschen Sie das Thema.';
$lang['SPLIT_TOPIC'] = 'Teilen Sie das Thema.';

$lang['STOP_WATCHING_TOPIC'] = 'Folgen Sie dem Thema.';
$lang['START_WATCHING_TOPIC'] = 'Stoppen Sie, diesem Thema zu folgen.';
$lang['NO_LONGER_WATCHING'] = 'Sie folgen diesem Thema jetzt.';
$lang['YOU_ARE_WATCHING'] = 'Thema suchen...';

$lang['SEARCH_IN_TOPIC'] = 'Suche im Thema...';
$lang['HIDE_IN_TOPIC'] = 'Ausblenden';

$lang['SHOW'] = 'Zeigen';
$lang['AVATARS'] = 'Avatare';
$lang['RANK_IMAGES'] = 'Rangbilder';
$lang['POST_IMAGES'] = 'Postbilder';
$lang['SIGNATURES'] = 'Signaturen';
$lang['SPOILER'] = 'Spoiler';
$lang['SHOW_OPENED'] = 'Geöffnet anzeigen';
$lang['DOWNLOAD_PIC'] = 'Herunterladbare Bilder';

$lang['MODERATE_TOPIC'] = 'Moderieren Sie dieses Thema';
$lang['SELECT_POSTS_PER_PAGE'] = 'Beiträge pro Seite';

// Posting/Replying (Not private messaging!)
$lang['TOPIC_REVIEW'] = 'Thema überprüfen';

$lang['NO_POST_MODE'] = 'Kein Postmodus ausgewählt'; // If posting.php is called without a mode (newtopic/reply/delete/etc., shouldn't be shown normally)

$lang['POST_A_NEW_TOPIC'] = 'Post neues Thema';
$lang['POST_A_REPLY'] = 'Post neue Antwort';
$lang['POST_TOPIC_AS'] = 'Thema posten als';
$lang['EDIT_POST'] = 'Post bearbeiten';
$lang['EDIT_TOPIC_TITLE'] = 'Thema Titel bearbeiten';

$lang['DONT_MESSAGE_TITLE'] = 'Sie sollten den Titel der Nachricht angeben';
$lang['INVALID_TOPIC_ID'] = 'Thema fehlt!';
$lang['INVALID_TOPIC_ID_DB'] = 'Das Thema existiert nicht in der Datenbank!';

$lang['NOT_EDIT_TOR_STATUS'] = 'Sie können die Version mit dem Status nicht bearbeiten';

$lang['OPTIONS'] = 'Optionen';

$lang['POST_ANNOUNCEMENT'] = 'Ankündigung';
$lang['POST_STICKY'] = 'Angeheftet';
$lang['POST_NORMAL'] = 'Normal';
$lang['POST_DOWNLOAD'] = 'Download';

// Anonymous posting
$lang['ANONYMOUS'] = 'Anonym';
$lang['ANONYMOUS_TOPIC'] = 'Thema anonym erstellen';
$lang['ANONYMOUS_REPLY'] = 'Antwort anonym posten';
$lang['HIDE_AUTHORSHIP'] = 'Standardmäßig anonym posten';
$lang['HIDE_AUTHORSHIP_EXPLAIN'] = 'Wenn aktiviert, werden neue Beiträge standardmäßig im anonymen Modus erstellt. Sie können dies für jeden Beitrag einzeln umschalten.';
$lang['ALLOW_ANONYMOUS_POSTING'] = 'Anonymes Posten erlauben';
$lang['ANONYMOUS_POST_LABEL'] = 'Anonym gepostet';
$lang['POSTED_ANONYMOUSLY'] = 'anonym gepostet';
$lang['ANONYMOUS_ADMIN_NOTICE'] = 'Admins und Moderatoren können den eigentlichen Autor sehen';
$lang['YOU'] = 'Sie';

$lang['PRINT_PAGE'] = 'Print page';

$lang['CONFIRM_DELETE'] = 'Sind Sie sicher, dass Sie diesen Beitrag löschen möchten?';
$lang['CONFIRM_DELETE_POLL'] = 'Sind Sie sicher, dass Sie diese Umfrage löschen möchten?';

$lang['FLOOD_ERROR'] = 'Sie können nicht so kurz nach Ihrem letzten Beitrag einen weiteren Beitrag erstellen; bitte versuchen Sie es in kurzer Zeit erneut.';
$lang['EMPTY_SUBJECT'] = 'Sie müssen ein Thema angeben.';
$lang['EMPTY_MESSAGE'] = 'Sie müssen eine Nachricht eingeben.';
$lang['FORUM_LOCKED'] = 'Forum ist gesperrt';
$lang['TOPIC_LOCKED'] = 'Thema gesperrt';
$lang['TOPIC_LOCKED_SHORT'] = 'Thema gesperrt';
$lang['NO_POST_ID'] = 'Sie müssen einen Beitrag auswählen, um ihn zu bearbeiten.';
$lang['NO_TOPIC_ID'] = 'Sie müssen ein Thema auswählen, auf das Sie antworten möchten.';
$lang['NO_VALID_MODE'] = 'Sie können nur posten, Antworten, Bearbeiten oder zitieren von Nachrichten. Bitte gehen Sie zurück und versuchen Sie es erneut';
$lang['NO_SUCH_POST'] = 'Es gibt diesen Beitrag nicht. Bitte gehen Sie zurück und versuchen Sie es erneut.';
$lang['EDIT_OWN_POSTS'] = 'Sorry, aber du kannst nur deine eigenen Beiträge Bearbeiten';
$lang['DELETE_OWN_POSTS'] = 'Sorry, aber du kannst nur deine eigenen Beiträge löschen';
$lang['CANNOT_DELETE_REPLIED'] = 'Entschuldigung, aber Sie können keine Beiträge löschen, auf die bereits geantwortet wurde.';
$lang['CANNOT_DELETE_POLL'] = 'Entschuldigung, aber Sie können eine aktive Umfrage nicht löschen.';
$lang['EMPTY_POLL_TITLE'] = 'Sie müssen einen Titel für Ihre Umfrage eingeben.';
$lang['POST_HAS_NO_POLL'] = 'Dieser Beitrag hat keine Umfrage';
$lang['ALREADY_VOTED'] = 'Sie haben schon in dieser Umfrage gestimmt';
$lang['NO_VOTE_OPTION'] = 'Sie müssen eine Option angeben, wenn Sie abstimmen.';
$lang['LOCKED_WARN'] = 'Sie haben in ein gesperrtes Thema gepostet!';

$lang['ADD_POLL'] = 'Eine Umfrage hinzufügen.';
$lang['UPDATE'] = 'Update';
$lang['DAYS'] = 'Tage';
$lang['DELETE_POLL'] = 'Umfrage löschen.';

$lang['MAX_SMILIES_PER_POST'] = 'Die Grenze von %s Emoticons wurde überschritten.';

$lang['NOTIFY'] = 'Benachrichtigen Sie mich über Antworten';
$lang['ALLOW_ROBOTS_INDEXING'] = 'Erlaube Robotern, dieses Thema zu indizieren';

$lang['STORED'] = 'Ihre Nachricht wurde erfolgreich eingegeben.';
$lang['EDITED'] = 'Die Nachricht wurde geändert.';
$lang['DELETED'] = 'Ihre Nachricht wurde erfolgreich gelöscht.';
$lang['VOTE_CAST'] = 'Ihre Stimme wurde abgegeben.';

$lang['EMOTICONS'] = 'Emoticons';
$lang['MORE_EMOTICONS'] = 'Mehr Emoticons anzeigen.';

$lang['COLOR_DARK_RED'] = 'Dunkelrot';
$lang['COLOR_RED'] = 'Rot';
$lang['COLOR_ORANGE'] = 'Orange';
$lang['COLOR_BROWN'] = 'Braun';
$lang['COLOR_GREEN'] = 'Grün';
$lang['COLOR_OLIVE'] = 'Olive';
$lang['COLOR_BLUE'] = 'Blau';
$lang['COLOR_DARK_BLUE'] = 'Dunkelblau';
$lang['COLOR_INDIGO'] = 'Indigo';
$lang['COLOR_VIOLET'] = 'Violett.';

$lang['FONT_SMALL'] = 'Kleine';
$lang['FONT_NORMAL'] = 'Normal';
$lang['FONT_LARGE'] = 'Große';
$lang['FONT_HUGE'] = 'Riesige';

$lang['NEW_POSTS_PREVIEW'] = 'Das Thema hat neue, bearbeitete oder ungelesene Beiträge.';

// Private Messaging
$lang['PRIVATE_MESSAGING'] = 'Private Nachrichten';

$lang['NO_NEW_PM'] = 'keine neuen Nachrichten';

$lang['NEW_PMS_FORMAT'] = '<b>%1$s</b> %2$s'; // 1 new message
$lang['NEW_PMS_DECLENSION'] = ['neue Nachricht', 'neue Nachrichten'];

$lang['UNREAD_PMS_FORMAT'] = '<b>%1$s</b> %2$s'; // 1 new message
$lang['UNREAD_PMS_DECLENSION'] = ['ungelesen', 'ungelesen'];

$lang['UNREAD_MESSAGE'] = 'Ungelesene Nachricht';
$lang['READ_MESSAGE'] = 'Nachricht lesen.';

$lang['READ_PM'] = 'Nachricht lesen.';
$lang['POST_NEW_PM'] = 'Nachricht senden.';
$lang['POST_REPLY_PM'] = 'Auf Nachricht antworten.';
$lang['POST_QUOTE_PM'] = 'Nachricht zitieren.';
$lang['EDIT_PM'] = 'Nachricht bearbeiten.';

$lang['INBOX'] = 'Posteingang';
$lang['OUTBOX'] = 'Outbox';
$lang['SAVEBOX'] = 'Savebox';
$lang['SENTBOX'] = 'Gesendete Box.';
$lang['SUBJECT'] = 'Thema';
$lang['FROM'] = 'Aus';
$lang['TO'] = 'Zu';
$lang['DATE'] = 'Datum';
$lang['SENT'] = 'Gesendet';
$lang['SAVED'] = 'Gespeichert';
$lang['DELETE_MARKED'] = 'Markierte löschen.';
$lang['DELETE_ALL'] = 'Alles löschen.';
$lang['SAVE_MARKED'] = 'Markierte speichern.';
$lang['SAVE_MESSAGE'] = 'Nachricht speichern.';
$lang['DELETE_MESSAGE'] = 'Nachricht löschen.';

$lang['DISPLAY_MESSAGES'] = 'Nachrichten anzeigen.'; // Followed by number of days/weeks/months

$lang['NO_MESSAGES_FOLDER'] = 'Es gibt keine Nachrichten in diesem Ordner';

$lang['CANNOT_SEND_PRIVMSG'] = 'Entschuldigung, aber der Administrator hat es Ihnen untersagt, private Nachrichten zu senden.';
$lang['NO_TO_USER'] = 'Sie müssen einen Benutzernamen angeben, an den Sie diese Nachricht senden möchten.';
$lang['NO_SUCH_USER'] = 'Entschuldigung, aber es gibt keinen solchen Benutzer.';

$lang['MESSAGE_SENT'] = '<b>Ihre Nachricht wurde gesendet.</b>';

$lang['CLICK_RETURN_INBOX'] = 'Kehren Sie zurück zu Ihrer:<br /><br /> %s<b>Posteingang</b>%s';
$lang['CLICK_RETURN_SENTBOX'] = '&nbsp;&nbsp; %s<b>Gesendet Box</b>%s';
$lang['CLICK_RETURN_OUTBOX'] = '&nbsp;&nbsp; %s<b>Ausgang</b>%s';
$lang['CLICK_RETURN_SAVEBOX'] = '&nbsp;&nbsp; %s<b>Speichern Box</b>%s';
$lang['CLICK_RETURN_INDEX'] = '%sKehrt zum Index zurück%s';

$lang['SEND_A_NEW_MESSAGE'] = 'Eine neue private Nachricht senden';
$lang['SEND_A_REPLY'] = 'Antwort auf eine private Nachricht';
$lang['EDIT_MESSAGE'] = 'Private Nachricht bearbeiten.';

$lang['FIND_USERNAME'] = 'Finden Sie einen Benutzername';
$lang['SELECT_USERNAME'] = 'Wählen Sie einen Benutzernamen';
$lang['NO_MATCH'] = 'Keine Übereinstimmungen gefunden.';

$lang['NO_PM_ID'] = 'Bitte geben Sie die Post-ID an.';
$lang['NO_SUCH_FOLDER'] = 'Ordner nicht gefunden.';

$lang['MARK_ALL'] = 'Markieren Sie alle';
$lang['UNMARK_ALL'] = 'Alle Abmarkierungen aufheben.';

$lang['CONFIRM_DELETE_PM'] = 'Sind Sie sicher, dass Sie diese Nachricht löschen möchten?';
$lang['CONFIRM_DELETE_PMS'] = 'Sind Sie sicher, dass Sie diese Nachrichten löschen möchten?';

$lang['INBOX_SIZE'] = 'Ihr Posteingang ist<br /><b>%d%%</b> voll.'; // e.g. Your Inbox is 50% full
$lang['SENTBOX_SIZE'] = 'Ihre gesendet ist<br /><b>%d%%</b> voll.';
$lang['SAVEBOX_SIZE'] = 'Ihre speichern ist<br /><b>%d%%</b> voll.';

$lang['OUTBOX_EXPL'] = '';

// Profiles/Registration
$lang['VIEWING_USER_PROFILE'] = 'Profil ansehen :: %s';
$lang['VIEWING_MY_PROFILE'] = 'Mein Profil [ <a href="%s">Einstellungen / Profil ändern</a> ]';

$lang['DISABLED_USER'] = 'Konto deaktiviert';
$lang['MANAGE_USER'] = 'Verwaltung';

$lang['PREFERENCES'] = 'Vorlieben';
$lang['ITEMS_REQUIRED'] = 'Items die mit einem * gekennzeichnet sind, sind erforderlich, sofern nicht anders angegeben.';
$lang['REGISTRATION_INFO'] = 'Registrierungsinformationen';
$lang['PROFILE_INFO'] = 'Profilinformationen';
$lang['AVATAR_PANEL'] = 'Avatar-Steuerungstafel';

$lang['WEBSITE'] = 'Website';
$lang['LOCATION'] = 'Standort';
$lang['CONTACT'] = 'Kontakt';
$lang['EMAIL_ADDRESS'] = 'E-mail-Adresse';
$lang['SEND_PRIVATE_MESSAGE'] = 'Private Nachricht senden';
$lang['INTERESTS'] = 'Interessen';
$lang['OCCUPATION'] = 'Beruf';
$lang['POSTER_RANK'] = 'Poster-Rang';
$lang['AWARDED_RANK'] = 'Verleihungsrang';
$lang['SHOT_RANK'] = 'Schuss-Rang';

$lang['TOTAL_POSTS'] = 'Beiträge';
$lang['SEARCH_USER_POSTS'] = 'Finden Beiträge'; // Find all posts by username
$lang['SEARCH_USER_POSTS_SHORT'] = 'Benutzerbeiträge';
$lang['SEARCH_USER_TOPICS'] = 'Benutzer-Themen'; // Find all topics by username

$lang['NO_USER_ID_SPECIFIED'] = 'The provided translations are incorrect; please ensure proper grammar and vocabulary are used.';
$lang['NO_SEND_ACCOUNT_INACTIVE'] = 'Entschuldigung, aber Ihr Passwort kann nicht abgerufen werden, da Ihr Konto derzeit inaktiv ist.';
$lang['NO_SEND_ACCOUNT'] = 'Entschuldigung, aber Ihr Passwort kann nicht abgerufen werden. Bitte wenden Sie sich an den Forenadministrator für weitere Informationen.';

$lang['HIDE_PORN_FORUMS'] = 'Inhalte 18+ ausblenden';
$lang['ADD_RETRACKER'] = 'Fügen Sie retracker in Torrent-Dateien hinzu.';
$lang['ALWAYS_NOTIFY'] = 'Benachrichtige mich immer über Antworten.';
$lang['ALWAYS_NOTIFY_EXPLAIN'] = 'Sendet eine E-Mail, wenn jemand auf ein Thema antwortet, in dem Sie gepostet haben. Dies kann geändert werden, wann immer Sie posten.';

$lang['BOARD_LANG'] = 'Board-Sprache';
$lang['GENDER'] = 'Geschlecht';
$lang['GENDER_SELECT'] = [
    0 => 'Unbekannt',
    1 => 'Männlich',
    2 => 'Weiblich',
];
$lang['MODULE_OFF'] = 'Modul ist deaktiviert!';

$lang['BIRTHDAY'] = 'Geburtstag';
$lang['HAPPY_BIRTHDAY'] = 'Happy Birthday!';
$lang['WRONG_BIRTHDAY_FORMAT'] = 'Das eingegebene Geburtsdatum hat ein falsches Format.';
$lang['AGE'] = 'Alter';
$lang['BIRTHDAY_TO_HIGH'] = 'Entschuldigung, diese Seite akzeptiert keine Benutzer, die älter als %d Jahre alt sind';
$lang['BIRTHDAY_TO_LOW'] = 'Entschuldigung, diese Seite akzeptiert keine Benutzer, die jünger als %d Jahre alt sind';
$lang['BIRTHDAY_TODAY'] = 'Benutzer mit Geburtstag heute: ';
$lang['BIRTHDAY_WEEK'] = 'Benutzer mit Geburtstag innerhalb der nächsten %d Tage: %s';
$lang['NOBIRTHDAY_WEEK'] = 'Es gibt keine Benutzer, die in den nächsten %d Tagen Geburtstag haben.'; // %d is substituted with the number of days
$lang['NOBIRTHDAY_TODAY'] = 'Keine Benutzer haben heute Geburtstag';
$lang['BIRTHDAY_ENABLE'] = 'Aktivieren Sie den Geburtstag.';
$lang['BIRTHDAY_MAX_AGE'] = 'Maximaler Geburtstag';
$lang['BIRTHDAY_MIN_AGE'] = 'Mindestalter.';
$lang['BIRTHDAY_CHECK_DAY'] = 'Tage, um bevorstehende Geburtstage zu überprüfen';
$lang['YEARS'] = 'Jahre';

$lang['TIMEZONE'] = 'Die verwendete Syntax ist identisch mit der PHP Funktion.';
$lang['DATE_FORMAT_EXPLAIN'] = 'Die verwendete syntax ist identisch zur PHP-<a href=\'https://www.php.net/manual/en/function.date.php\' target=\'_other\'>date()</a> Funktion.';
$lang['SIGNATURE'] = 'Signatur';
$lang['SIGNATURE_EXPLAIN'] = 'Dies ist ein Textblock, der zu den Beiträgen hinzugefügt werden kann, die Sie machen. Es gibt eine Zeichenbeschränkung von %d.';
$lang['SIGNATURE_DISABLE'] = 'Abgemeldet für die Verletzung der Forenregeln.';
$lang['PUBLIC_VIEW_EMAIL'] = 'Zeigen Sie die E-Mail-Adresse in meinem Profil.';

$lang['EMAIL_EXPLAIN'] = 'Unter dieser Adresse wird Ihnen der Abschluss der Registrierung zugesandt.';

$lang['CURRENT_PASSWORD'] = 'Aktuelles Passwort';
$lang['NEW_PASSWORD'] = 'Neues Passwort';
$lang['CONFIRM_PASSWORD'] = 'Kennwort bestätigen';
$lang['CONFIRM_PASSWORD_EXPLAIN'] = 'Sie müssen Ihr aktuelles Passwort bestätigen, wenn Sie es ändern oder Ihre E-Mail-Adresse ändern möchten.';
$lang['PASSWORD_IF_CHANGED'] = 'Sie müssen nur ein Passwort angeben, wenn Sie es ändern möchten.';
$lang['PASSWORD_CONFIRM_IF_CHANGED'] = 'Sie müssen nur Ihr Passwort bestätigen, wenn Sie es oben geändert haben.';

$lang['AUTOLOGIN'] = 'Autologin';
$lang['RESET_AUTOLOGIN'] = 'Zurücksetzen des Autologin-Schlüssels.';
$lang['RESET_AUTOLOGIN_EXPL'] = 'einschließlich aller Orte, die Sie besucht haben, als das Forum aktivierte Auto-Login.';

$lang['AVATAR'] = 'Avatar';
$lang['AVATAR_EXPLAIN'] = 'Zeigt ein kleines grafisches Bild unter Ihren Details in den Beiträgen an. Es kann nur ein Bild gleichzeitig angezeigt werden, dessen Breite nicht größer als %d Pixel, die Höhe nicht größer als %d Pixel und die Dateigröße nicht mehr als %s betragen darf.';
$lang['AVATAR_DELETE'] = 'Avatar löschen';
$lang['AVATAR_DISABLE'] = 'Die Avatar-Kontrolloption wurde aufgrund eines Verstoßes gegen die <a href="%s"><b>Forum Regeln</b></a> deaktiviert.';
$lang['UPLOAD_AVATAR_FILE'] = 'Avatar hochladen.';
$lang['RETURN_PROFILE'] = 'Zurück zum Profil';
$lang['DELETE_IMAGE'] = 'Bild löschen';
$lang['SET_MONSTERID_AVATAR'] = 'MonsterID-Avatar festlegen';

$lang['NOTIFY_ON_PRIVMSG'] = 'Benachrichtigen Sie bei neuen privaten Nachrichten.';
$lang['HIDE_USER'] = 'Verstecken Sie Ihren Online-Status.';
$lang['HIDDEN_USER'] = 'Versteckte Benutzer';

$lang['PROFILE_UPDATED'] = 'Ihr Profil wurde aktualisiert';
$lang['PROFILE_UPDATED_INACTIVE'] = 'Ihr Profil wurde aktualisiert. Sie haben jedoch wichtige Daten geändert, dein Konto ist jetzt inaktiv.';

$lang['PASSWORD_LONG'] = 'Ihr Passwort darf nicht länger als %d Zeichen und nicht kürzer als %d Zeichen sein.';
$lang['USERNAME_TAKEN'] = 'Sorry, aber dieser Benutzername ist bereits vergeben.';
$lang['USERNAME_INVALID'] = 'Sorry, aber dieser Benutzername enthält ein ungültiges Zeichen';
$lang['USERNAME_DISALLOWED'] = 'Sorry, aber dieser Benutzername wurde zurückgewiesen.';
$lang['USERNAME_TOO_LONG'] = 'Ihr Name ist zu lang.';
$lang['USERNAME_TOO_SMALL'] = 'Ihr Name ist zu klein.';
$lang['EMAIL_TAKEN'] = 'Sorry, aber diese E-Mail-Adresse ist bereits einem Benutzer zugeordnet.';
$lang['EMAIL_INVALID'] = 'Sorry, aber diese E-Mail-Adresse ist ungültig.';
$lang['EMAIL_TOO_LONG'] = 'Ihre E-Mail ist zu lang.';
$lang['SIGNATURE_TOO_LONG'] = 'Ihre Signatur ist zu lang.';
$lang['SIGNATURE_ERROR_HTML'] = 'Die Signatur darf nur BBCode enthalten.';
$lang['FIELDS_EMPTY'] = 'Sie müssen die erforderlichen Felder ausfüllen.';

$lang['WELCOME_SUBJECT'] = 'Willkommen in den %s Foren.';

$lang['ACCOUNT_ADDED'] = 'Danke für die Registrierung. Ihr Konto wurde erstellt. Sie können sich jetzt mit Ihrem Benutzernamen und Passwort anmelden.';
$lang['ACCOUNT_INACTIVE'] = 'Ihr Konto wurde erstellt. Dieses Forum erfordert jedoch die Aktivierung des Kontos. Ein Aktivierungslink wurde an die E-Mail-Adresse gesendet, die Sie angegeben haben. Bitte überprüfen Sie Ihre E-Mail auf weitere Informationen.';
$lang['ACCOUNT_ACTIVE'] = 'Ihr Konto wurde gerade aktiviert. Danke für die Registrierung.';
$lang['ALREADY_ACTIVATED'] = 'Sie haben Ihr Konto bereits aktiviert.';

$lang['WRONG_ACTIVATION'] = 'Der Aktivierungsschlüssel, den Sie angegeben haben, stimmt mit keinem in der Datenbank überein.';
$lang['PASSWORD_UPDATED'] = 'Ein neues Passwort wurde erstellt; bitte überprüfen Sie Ihre E-Mail für Details, um es zu aktivieren.';
$lang['NO_EMAIL_MATCH'] = 'Die E-Mail-Adresse, die Sie angegeben haben, stimmt nicht mit der für diesen Benutzernamen aufgeführten überein.';
$lang['PASSWORD_ACTIVATED'] = 'Ihr Konto wurde wieder aktiviert. Um sich anzumelden, verwenden Sie bitte das angegebene Passwort in der E-Mail, die Sie erhalten haben.';

$lang['SEND_EMAIL_MSG'] = 'Senden Sie eine E-Mail-Nachricht.';
$lang['NO_USER_SPECIFIED'] = 'Kein Benutzer angegeben.';
$lang['USER_NOT_EXIST'] = 'Dieser Benutzer existiert nicht';
$lang['EMAIL_MESSAGE_DESC'] = 'Diese Nachricht wird als Klartext gesendet, also keine HTML oder BBCode.';
$lang['RECIPIENT'] = 'Empfänger';
$lang['EMAIL_SENT'] = 'Die E-Mail wurde gesendet.';
$lang['SEND_EMAIL'] = 'E-Mail senden.';
$lang['EMPTY_SUBJECT_EMAIL'] = 'Geben Sie einen Betreff für die e-mail.';
$lang['EMPTY_MESSAGE_EMAIL'] = 'Sie müssen eine Nachricht eingeben, die per E-Mail gesendet werden soll.';

$lang['USER_AGREEMENT'] = 'Nutzungsvereinbarung';
$lang['USER_AGREEMENT_HEAD'] = 'Um fortfahren zu können, müssen Sie sich mit den folgenden Regeln';
$lang['USER_AGREEMENT_AGREE'] = 'Ich habe die obenstehende Nutzungsvereinbarung gelesen und akzeptiere sie.';

$lang['COPYRIGHT_HOLDERS'] = 'Für die Inhaber von Urheberrechten';
$lang['ADVERT'] = 'Werben Sie auf dieser Seite.';
$lang['NOT_FOUND'] = 'Datei nicht gefunden';

// Memberslist
$lang['SORT_TOP_TEN'] = 'Top-Ten-Poster';
$lang['SORT_JOINED'] = 'Beitrittsdatum';
$lang['SORT_USERNAME'] = 'Benutzername';
$lang['SORT_LOCATION'] = 'Standort';
$lang['SORT_POSTS'] = 'Beiträge';
$lang['SORT_EMAIL'] = 'E-Mail';
$lang['SORT_WEBSITE'] = 'Website';
$lang['ASC'] = 'Aufsteigend';
$lang['DESC'] = 'Absteigend';
$lang['ORDER'] = 'Reihenfolge';

// Thanks
$lang['THANK_TOPIC'] = 'Für dieses Thema abstimmen';
$lang['THANKS_GRATITUDE'] = 'Wir schätzen Ihre Dankbarkeit';
$lang['LAST_LIKES'] = 'Letzte Stimmen';
$lang['LIKE_OWN_POST'] = 'Sie können nicht für Ihr eigenes Thema abstimmen';
$lang['NO_LIKES'] = 'Niemand hat bisher abgestimmt';
$lang['LIKE_ALREADY'] = 'Sie haben dieses Thema bereits bewertet';

// Invites
$lang['INVITE_CODE'] = 'Einladungscode';
$lang['INCORRECT_INVITE'] = 'Einladung nicht gefunden';
$lang['INVITE_EXPIRED'] = 'Einladung abgelaufen';

// Group control panel
$lang['GROUP_CONTROL_PANEL'] = 'Benutzergruppen';
$lang['GROUP_CONFIGURATION'] = 'Gruppen-Konfiguration';
$lang['GROUP_GOTO_CONFIG'] = 'Gehen Sie zum Gruppen-Konfigurationspanel.';
$lang['GROUP_RETURN'] = 'Zurück zur Benutzergruppen-Seite.';
$lang['MEMBERSHIP_DETAILS'] = 'Einzelheiten zur Gruppenmitgliedschaft.';
$lang['JOIN_A_GROUP'] = 'Einer Gruppe beitreten';

$lang['GROUP_INFORMATION'] = 'Gruppendetails.';
$lang['GROUP_NAME'] = 'Gruppenname';
$lang['GROUP_DESCRIPTION'] = 'Gruppenbeschreibung.';
$lang['GROUP_SIGNATURE'] = 'Gruppenunterschrift.';
$lang['GROUP_MEMBERSHIP'] = 'Gruppenmitgliedschaft';
$lang['GROUP_MEMBERS'] = 'Gruppenmitglieder';
$lang['GROUP_MODERATOR'] = 'Gruppenmoderator.';
$lang['PENDING_MEMBERS'] = 'Ausstehende Mitglieder';

$lang['GROUP_TIME'] = 'Erstellt';
$lang['RELEASE_GROUP'] = 'Release-Gruppe.';

$lang['GROUP_TYPE'] = 'Gruppentyp.';
$lang['GROUP_OPEN'] = 'Offene Gruppe';
$lang['GROUP_CLOSED'] = 'Geschlossene Gruppe';
$lang['GROUP_HIDDEN'] = 'Versteckte Gruppe.';

$lang['GROUP_MEMBER_MOD'] = 'Gruppenmoderator.';
$lang['GROUP_MEMBER_MEMBER'] = 'Aktuelle Mitgliedschaften';
$lang['GROUP_MEMBER_PENDING'] = 'Mitgliedschaften anhängig';
$lang['GROUP_MEMBER_OPEN'] = 'Offene Gruppen';
$lang['GROUP_MEMBER_CLOSED'] = 'Geschlossene Gruppen';
$lang['GROUP_MEMBER_HIDDEN'] = 'Versteckte Gruppen';

$lang['NO_GROUPS_EXIST'] = 'Es existieren keine Gruppen.';
$lang['GROUP_NOT_EXIST'] = 'Benutzergruppe existiert nicht';
$lang['NO_GROUP_ID_SPECIFIED'] = 'Gruppen-ID ist nicht angegeben';

$lang['NO_GROUP_MEMBERS'] = 'Diese Gruppe hat keine Mitglieder';
$lang['HIDDEN_GROUP_MEMBERS'] = 'Diese Gruppe ist versteckt; Sie können die Mitgliedschaft nicht einsehen.';
$lang['NO_PENDING_GROUP_MEMBERS'] = 'Diese Gruppe hat keine ausstehenden Mitglieder.';
$lang['GROUP_JOINED'] = 'Sie haben sich erfolgreich für diese Gruppe angemeldet.<br />Sie werden benachrichtigt, wenn Ihr Abonnement vom Gruppenmoderator genehmigt wurde.';
$lang['ALREADY_MEMBER_GROUP'] = 'Sie sind bereits Mitglied dieser Gruppe';
$lang['USER_IS_MEMBER_GROUP'] = '%s ist bereits Mitglied dieser Gruppe';
$lang['USER_IS_MOD_GROUP'] = '%s ist Moderator dieser Gruppe';
$lang['EFFECTIVE_DATE'] = 'Datum des Inkrafttretens';
$lang['COULD_NOT_ADD_USER'] = 'Der Benutzer, den Sie ausgewählt haben, existiert nicht.';
$lang['UNSUB_SUCCESS'] = 'Sie wurden aus dieser Gruppe abgemeldet.';

$lang['APPROVE_SELECTED'] = 'Genehmigen Sie Ausgewählte.';
$lang['DENY_SELECTED'] = 'Deny Selected.';
$lang['REMOVE_SELECTED'] = 'Entfernen Sie Ausgewählte.';
$lang['ADD_MEMBER'] = 'Mitglied hinzufügen.';
$lang['NOT_GROUP_MODERATOR'] = 'Sie sind nicht der Moderator dieser Gruppe, daher können Sie diese Aktion nicht durchführen.';

$lang['LOGIN_TO_JOIN'] = 'Melden Sie sich an, um Gruppenmitgliedschaften zu verwalten oder beizutreten.';
$lang['THIS_OPEN_GROUP'] = 'Dies ist eine offene Gruppe: Klicken Sie, um Mitgliedschaft zu beantragen.';
$lang['THIS_CLOSED_GROUP'] = 'Dies ist eine geschlossene Gruppe: Keine weiteren Benutzer werden akzeptiert.';
$lang['THIS_HIDDEN_GROUP'] = 'Dies ist eine versteckte Gruppe: Automatische Benutzerhinzufügung ist nicht erlaubt.';
$lang['MEMBER_THIS_GROUP'] = 'Sie sind Mitglied dieser Gruppe';
$lang['PENDING_THIS_GROUP'] = 'Ihre Mitgliedschaft in dieser Gruppe ist anhängig';
$lang['ARE_GROUP_MODERATOR'] = 'Sie sind der Moderator der Gruppe.';
$lang['NONE'] = 'Keiner.';

$lang['UNSUBSCRIBE_GROUP'] = 'Abmelden.';
$lang['MEMBERS_IN_GROUP'] = 'Mitglieder in der Gruppe';

// Release Groups
$lang['POST_RELEASE_FROM_GROUP'] = 'Post-release von Gruppe.';
$lang['CHOOSE_RELEASE_GROUP'] = 'nicht ausgewählt';
$lang['ATTACH_RG_SIG'] = 'Befestigen Sie die Release-Gruppe Unterschrift.';
$lang['RELEASE_FROM_RG'] = 'Release wurde erstellt von.';
$lang['GROUPS_RELEASES'] = 'Group-releases.';
$lang['MORE_RELEASES'] = 'Finden Sie alle Pressemitteilungen der Gruppe.';
$lang['NOT_A_RELEASE_GROUP'] = 'Diese Gruppe ist keine Release-Gruppe.';

// Search
$lang['SEARCH_HELP_URL'] = 'Suchhilfe.';
$lang['SEARCH_OPTIONS'] = 'Suchoptionen';

$lang['SEARCH_WORDS'] = 'Suche nach Keywords.';
$lang['SEARCH_WORDS_EXPL'] = 'Sie können <b>+</b> verwenden, um Wörter zu definieren die in den Ergebnissen enthalten sein müssen und <b>-</b> für Wörter, die nicht in das Ergebnis sollen.';
$lang['SEARCH_AUTHOR'] = 'Suche nach Autor.';
$lang['SEARCH_AUTHOR_EXPL'] = 'Verwenden Sie * als Platzhalter für teilweise Übereinstimmungen.';

$lang['SEARCH_TITLES_ONLY'] = 'Suche nur Thementitel.';
$lang['SEARCH_ALL_WORDS'] = 'Alle Worte.';
$lang['IN_MY_POSTS'] = 'In meinen Posts.';
$lang['SEARCH_MY_TOPICS'] = 'In meine Themen.';
$lang['NEW_TOPICS'] = 'Neue Themen';

$lang['SEARCH_PREVIOUS'] = 'Vorherigen suchen';

$lang['SORT_BY'] = 'Sortieren nach';
$lang['SORT_TIME'] = 'Post-Zeit.';
$lang['SORT_TOPIC_TITLE'] = 'Thementitel.';

$lang['DISPLAY_RESULTS_AS'] = 'Anzeige der Ergebnisse als.';
$lang['ALL_AVAILABLE'] = 'Alle verfügbaren';
$lang['BRIEFLY'] = 'Kurz';

$lang['NO_SEARCH_MATCH'] = 'Keine Themen oder Beiträge erfüllt Ihre Suchkriterien.';
$lang['FOUND_SEARCH_MATCH'] = 'Suche gefunden %d Übereinstimmung.'; // e.g. Search found 1 match
$lang['FOUND_SEARCH_MATCHES'] = 'Suche gefunden %d Übereinstimmungen.'; // e.g. Search found 24 matches

$lang['CLOSE_WINDOW'] = 'Fenster schließen.';
$lang['HIDE'] = 'Ausblenden.';

// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
$lang['SORRY_AUTH_VIEW'] = 'Es tut uns leid, aber nur %s können dieses Forum sehen.';
$lang['SORRY_AUTH_READ'] = 'Es tut uns leid, aber nur %s können Themen in diesem Forum lesen.';
$lang['SORRY_AUTH_REPLY'] = 'Es tut uns leid, aber nur %s können auf Beiträge in diesem Forum antworten.';
$lang['SORRY_AUTH_EDIT'] = 'Es tut uns leid, aber nur %s können Beiträge in diesem Forum bearbeiten.';
$lang['SORRY_AUTH_DELETE'] = 'Es tut uns leid, aber nur %s können Beiträge in diesem Forum löschen.';

// These replace the %s in the above strings
$lang['AUTH_ANONYMOUS_USERS'] = '<b>anonyme Benutzer</b>.';
$lang['AUTH_REGISTERED_USERS'] = '<b>registrierte Benutzer</b>.';
$lang['AUTH_USERS_GRANTED_ACCESS'] = '<b>Benutzer gewährt besonderen Zugriff</b>.';
$lang['AUTH_MODERATORS'] = '<b>Moderatoren</b>.';
$lang['AUTH_ADMINISTRATORS'] = '<b>Administratoren</b>.';

$lang['NOT_MODERATOR'] = 'Sie sind kein Moderator dieses Forums.';
$lang['NOT_AUTHORISED'] = 'Nicht autorisiert.';

$lang['YOU_BEEN_BANNED'] = 'Sie wurden von diesem Forum ausgeschlossen.';

// Viewonline
$lang['ONLINE_EXPLAIN'] = 'aktive Benutzer in den letzten fünf Minuten';
$lang['LAST_UPDATED'] = 'Zuletzt Aktualisiert';

// Moderator Control Panel
$lang['MOD_CP'] = 'Moderator Control Panel';
$lang['SELECT'] = 'Wählen Sie.';
$lang['DELETE'] = 'Löschen';
$lang['MOVE'] = 'Bewegen';
$lang['LOCK'] = 'Sperren.';
$lang['UNLOCK'] = 'Entsperren.';

$lang['TOPICS_REMOVED'] = 'Die ausgewählten Themen wurden erfolgreich aus der Datenbank entfernt.';
$lang['NO_TOPICS_REMOVED'] = 'Keine Themen wurden entfernt.';
$lang['TOPICS_LOCKED'] = 'Die ausgewählten Themen wurden gesperrt.';
$lang['TOPICS_MOVED'] = 'Die gewählten Themen wurden verschoben.';
$lang['TOPICS_UNLOCKED'] = 'Die ausgewählten Themen wurden entsperrt.';
$lang['NO_TOPICS_MOVED'] = 'Keine Themen wurden verschoben.';

$lang['CONFIRM_DELETE_TOPIC'] = 'Sind Sie sicher, dass Sie das ausgewählte Thema entfernen möchten?';
$lang['CONFIRM_MOVE_TOPIC'] = 'Sind Sie sicher, dass Sie das ausgewählte Thema verschieben möchten?';

$lang['MOVE_TO_FORUM'] = 'Verschieben ins Forum.';
$lang['LEAVE_SHADOW_TOPIC'] = 'Lassen Sie das Schatten-Thema im alten Forum.';

$lang['SPLIT_TOPIC_EXPLAIN'] = 'Mit dem untenstehenden Formular können Sie ein Thema in zwei teilen.';
$lang['NEW_TOPIC_TITLE'] = 'Neuer Thementitel.';
$lang['FORUM_FOR_NEW_TOPIC'] = 'Forum für neues Thema.';
$lang['SPLIT_POSTS'] = 'Teile ausgewählte Beiträge.';
$lang['SPLIT_AFTER'] = 'Teile nach ausgewähltem Beitrag.';
$lang['TOPIC_SPLIT'] = 'Das ausgewählte Thema wurde erfolgreich aufgeteilt.';
$lang['NONE_SELECTED'] = 'Sie haben nichts ausgewählt, um diese Operation durchzuführen.';

$lang['THIS_POSTS_IP'] = 'Die IP-Adresse für diesen Eintrag';
$lang['OTHER_IP_THIS_USER'] = 'Andere IP-Adressen, die dieser Benutzer von geschrieben hat.';
$lang['USERS_THIS_IP'] = 'Benutzer von dieser IP-Adresse, die geschrieben haben.';
$lang['IP_INFO'] = 'IP-Informationen.';
$lang['LOOKUP_IP'] = 'Nachschlagen-IP-Adresse.';

// Timezones ... for display on each page
$lang['ALL_TIMES'] = 'Alle Zeiten sind <span class="tz_time">%s</span>'; // This is followed by UTC and the timezone offset

// Friendly dates (used in bb_date function)
$lang['DATETIME']['TODAY'] = 'Heute';
$lang['DATETIME']['YESTERDAY'] = 'Gestern';

// Country selector
$lang['COUNTRY'] = 'Land';
$lang['SET_OWN_COUNTRY'] = 'Eigenes Land festlegen (Manuell)';

// Errors
$lang['INFORMATION'] = 'Informationen';
$lang['ADMIN_REAUTHENTICATE'] = 'Um das Board zu verwalten/moderieren, müssen Sie sich erneut authentifizieren.';

// Attachment Mod Main Language Variables
// Auth Related Entries
$lang['RULES_ATTACH_CAN'] = 'Sie <b>können</b> Dateien in diesem Forum anhängen.';
$lang['RULES_ATTACH_CANNOT'] = 'Sie <b>können nicht</b> Dateien in diesem Forum anhängen.';
$lang['RULES_DOWNLOAD_CAN'] = 'Sie <b>können</b> Dateien in diesem Forum herunterladen.';
$lang['RULES_DOWNLOAD_CANNOT'] = 'Sie <b>können nicht</b> Dateien in diesem Forum herunterladen.';
$lang['SORRY_AUTH_VIEW_ATTACH'] = 'Es tut mir leid, aber Sie sind nicht berechtigt, diese Anlage anzuzeigen oder herunterzuladen.';

// Viewtopic -> Display of Attachments
$lang['DESCRIPTION'] = 'Beschreibung'; // used in Administration Panel too...
$lang['DOWNLOAD'] = 'Download'; // this Language Variable is defined in admin.php too, but we are unable to access it from the main Language File
$lang['FILESIZE'] = 'Dateigröße';
$lang['MAX_FILE_SIZE'] = 'Maximale Dateigröße';
$lang['ALLOWED_EXTENSIONS'] = 'Erlaubte Dateiendungen';

// Viewtopic -> Display of Attachments -> TorrServer integration
$lang['STREAM'] = 'Stream';
$lang['RESOLUTION'] = 'Auflösung: <b>%s</b>';
$lang['CHANNELS'] = 'Kanäle: <b>%s</b>';
$lang['CHANNELS_LAYOUT'] = 'Kanäle-Layout: <b>%s</b>';
$lang['BITRATE'] = 'Bitrate: <b>%s</b>';
$lang['SAMPLE_RATE'] = 'Abtastrate: <b>%s</b>';
$lang['AUDIO_TRACK'] = 'Audio-Track-Informationen (%d):';
$lang['AUDIO_CODEC'] = 'Audio-Codec: <b title="%s">%s</b>';
$lang['VIDEO_CODEC'] = 'Video-Codec: <b title="%s">%s</b>';
$lang['SHOW_MORE_INFORMATION_FILE'] = 'Mehr Informationen über die Datei anzeigen';
$lang['DOWNLOAD_M3U_FILE'] = 'Download .m3u-Datei';
$lang['PLAYBACK_M3U'] = 'Wiedergabe .m3u-Datei';
$lang['COPY_STREAM_LINK'] = 'Stream-Link in die Zwischenablage kopieren';
$lang['M3U_NOT_SUPPORTED'] = 'Diese Datei kann im Browser nicht wiedergegeben werden...';
$lang['M3U_FFPROBE_NO_DATA'] = 'Es scheint, dass ffprobe keine Daten über diesen Codec zurückgeben kann...';
$lang['M3U_NOTICE'] = 'Einige Browser unterstützen die Wiedergabe bestimmter Videoformate nicht. In einem solchen Fall können Sie die .m3u-Datei herunterladen und sie mit einem Drittanbieter-Player wiedergeben.';
$lang['TORRSERVER_UNAVAILABLE'] = 'TorrServer ist nicht verfügbar';
$lang['TORRSERVER_INVALID_REQUEST'] = 'Ungültige Anforderungsparameter';

$lang['ATTACHMENT'] = 'Anlagen';

// Posting -> Posting Attachments
$lang['ADD_ATTACHMENT'] = 'Anlage hinzufügen';
$lang['ADD_ATTACHMENT_EXPLAIN'] = 'Wenn Sie keinen Anhang an Ihren Beitrag anhängen möchten, lassen Sie bitte die Felder leer.';
$lang['UPDATE_ATTACHMENT'] = 'Anhang aktualisieren';
$lang['FILENAME'] = 'Dateiname';

// Posting -> Posted Attachments
$lang['POSTED_ATTACHMENTS'] = 'Gepostete Anlagen.';
$lang['DELETE_ATTACHMENT'] = 'Anhang Löschen';

// Errors -> Download
$lang['NO_ATTACHMENT_SELECTED'] = 'Sie haben keine Anlage ausgewählt, um sie herunterzuladen oder anzuzeigen.';
$lang['ERROR_NO_ATTACHMENT'] = 'Das ausgewählte Attachment existiert nicht mehr';
$lang['DOWNLOAD_LIMIT_EXCEEDED'] = 'Tägliches Download-Limit überschritten. Bitte versuchen Sie es morgen erneut.';

//bt
$lang['BT_REG_YES'] = 'Registriert';
$lang['BT_REG_NO'] = 'Nicht registriert';
$lang['BT_REG_ON_TRACKER'] = 'Registrieren Sie sich beim Tracker.';
$lang['BT_REG_FAIL'] = 'Konnte torrent bei Tracker nicht registrieren.';
$lang['BT_REG_FAIL_SAME_HASH'] = 'Ein anderer Torrent mit demselben info_hash ist bereits <a href="%s"><b>registriert</b></a>.';
$lang['BT_V1_ONLY_DISALLOWED'] = 'v1-only Torrents sind gegenwärtig vom Administrator deaktiviert, erlaubt: v2 und Hybride.';
$lang['BT_V2_ONLY_DISALLOWED'] = 'v2-only Torrents sind gegenwärtig vom Administrator deaktiviert, erlaubt: v1 und Hybride.';
$lang['BT_FLIST'] = 'Dateiliste.';
$lang['BT_FLIST_LIMIT'] = 'Die Tracker-Einstellungen erlauben keine Verarbeitung von Listen mit mehr als %d Dateien. Aktuelle Anzahl ist: %d';
$lang['BT_FLIST_BTMR_HASH'] = 'BTMR-Hash.';
$lang['BT_FLIST_BTMR_NOTICE'] = 'Der BitTorrent Merkle Root ist ein Hash einer Datei, die in Torrents mit BitTorrent v2 Unterstützung eingebettet ist; Tracker-Benutzer können ihn abrufen, berechnen, ebenso Download-deduplicated Torrents mit Desktop-Tools wie <a href="%s" target="_blank" referrerpolicy="origin">Torrent Merkle Root Reader</a>.';
$lang['BT_FLIST_CREATION_DATE'] = 'Erstellungsdatum';
$lang['BT_IS_PRIVATE'] = 'Privater Torrent';
$lang['BT_FLIST_FILE_PATH'] = 'Pfad (%s)';
$lang['BT_FLIST_LINK_TITLE'] = 'Dateihashes | .torrent-Meta-Info';
$lang['BT_UNREG_FROM_TRACKER'] = 'Entfernen vom Tracker.';
$lang['BT_UNREGISTERED'] = 'Unregistrierter Torrent.';
$lang['BT_UNREGISTERED_ALREADY'] = 'Torrent bereits abgemeldet';
$lang['BT_REGISTERED'] = 'Torrent bei Tracker registriert<br /><br />Jetzt müssen Sie <a href="%s"><b>Ihr Torrent herunterladen</b></a> und es mit Ihrem BitTorrent-Client ausführen, indem Sie den Ordner mit den originalen Dateien, die Sie teilen, als Download-Pfad wählen.';
$lang['INVALID_ANN_URL'] = 'Ungültige Announce-URL [%s]<br /><br />muss sein <b>%s</b>.';
$lang['PASSKEY_ERR_TOR_NOT_REG'] = 'Konnte passkey nicht hinzufügen<br /><br />Torrent nicht bei Tracker registriert.';
$lang['BT_PASSKEY'] = 'Hauptschlüssel.';
$lang['BT_GEN_PASSKEY'] = 'Eine neue erstellen.';
$lang['BT_PASSKEY_VIEW'] = 'Zeigen.';
$lang['BT_GEN_PASSKEY_NEW'] = "Achtung! Nach dem Ändern Ihres Zugangsschlüssels müssen Sie alle aktiven Torrents erneut herunterladen! \nSind Sie sicher, dass Sie einen neuen Zugangsschlüssel erstellen möchten?";
$lang['BT_NO_SEARCHABLE_FORUMS'] = 'Keine durchsuchbaren Foren gefunden';

$lang['SEEDS'] = 'Samen.';
$lang['LEECHS'] = 'Blutegel.';
$lang['SPEED_UP'] = 'Beschleunigen.';
$lang['SPEED_DOWN'] = 'Geschwindigkeit Nach Unten.';

$lang['SEEDERS'] = 'Seeder.';
$lang['LEECHERS'] = 'Leecher.';
$lang['RELEASING'] = 'Selbst.';
$lang['SEEDING'] = 'Samen.';
$lang['LEECHING'] = 'Blutegel.';
$lang['IS_REGISTERED'] = 'Registriert.';
$lang['MAGNET'] = 'Magnet-Link';
$lang['MAGNET_FOR_GUESTS'] = 'Magnet-Link für Gäste anzeigen';
$lang['MAGNET_v2'] = 'Magnet-Link (BitTorrent v2 unterstützt)';

//torrent status mod
$lang['TOR_STATUS'] = 'Status';
$lang['TOR_STATUS_SELECT_ACTION'] = 'Wählen Sie den Status.';
$lang['TOR_STATUS_NOT_SELECT'] = 'Sie haben keinen Status ausgewählt.';
$lang['TOR_STATUS_SELECT_ALL'] = 'Alle Stati.';
$lang['TOR_STATUS_FORBIDDEN'] = 'Der Status dieses Themas ist: ';
$lang['TOR_STATUS_NAME'] = [
    TOR_NOT_APPROVED => 'Nicht geprüft.',
    TOR_CLOSED => 'Geschlossen.',
    TOR_APPROVED => 'Geprüft.',
    TOR_NEED_EDIT => 'Nicht formalisiert bis.',
    TOR_NO_DESC => 'Nicht formalisiert.',
    TOR_DUP => 'Duplikat',
    TOR_CLOSED_CPHOLD => 'geschlossen (Urheberrecht)',
    TOR_CONSUMED => 'Aufgenommen.',
    TOR_DOUBTFUL => 'Zweifelhaft.',
    TOR_CHECKING => 'wird geprüft',
    TOR_TMP => 'Vorübergehend.',
    TOR_PREMOD => 'Vormoderation.',
    TOR_REPLENISH => 'nachgefüllt',
];
$lang['TOR_STATUS_FAILED'] = 'Diesen Status gibt es nicht!';
$lang['TORRENT_FAILED'] = 'Die Verteilung wurde nicht gefunden!';
$lang['TOR_STATUS_DUB'] = 'Die Verteilung hat den gleichen Status.';
$lang['TOR_DONT_CHANGE'] = 'Änderung des Status kann nicht durchgeführt werden!';
$lang['TOR_STATUS_OF'] = 'Die Verteilung hat den Status von:';
$lang['TOR_STATUS_CHANGED'] = 'Status geändert:';
$lang['TOR_BACK'] = 'Zurück.';
$lang['PROCEED'] = 'Fortfahren.';
$lang['CHANGE_TOR_TYPE'] = 'Geben Sie die Torrent erfolgreich geändert.';
$lang['DEL_TORRENT'] = 'Sind Sie sicher, dass Sie den Torrent löschen möchten?';
$lang['DEL_MOVE_TORRENT'] = 'Sind Sie sicher, dass Sie löschen und das Thema verschieben möchten?';
$lang['UNEXECUTED_RELEASE'] = 'Sie haben eine unvollendete Veröffentlichung. Bitte beenden Sie sie, bevor Sie eine neue erstellen!';
$lang['TOR_STATUS_LOG_ACTION'] = 'Neuer Status: %s.<br/>Zuvor Status: %s.';

// tor_comment
$lang['TOR_MOD_TITLE'] = 'Ändern des Status von Distribution - %s.';
$lang['TOR_MOD_MSG'] = "Hallo, %s.\n\nDer Status der [url=%s]Ihre[/url] Verteilung wurde auf [b]%s[/b] geändert";

$lang['TOR_AUTH_TITLE'] = 'Änderungen im Design - %s.';
$lang['TOR_AUTH_MSG'] = "Hallo, %s.\n\nIhre Verteilung wurde geändert - [url=%s]%s[/url]\n\nBitte überprüfen Sie es erneut.";
$lang['TOR_AUTH_FIXED'] = 'Behoben';
$lang['TOR_AUTH_SENT_COMMENT'] = 'Die Informationen werden an den Moderator gesendet. Erwarten.';

$lang['BT_TOPIC_TITLE'] = 'Thementitel.';
$lang['BT_SEEDER_LAST_SEEN'] = 'Samen zum letzten Mal gesehen.';
$lang['SIZE'] = 'Größe';
$lang['COMPLETED'] = 'Abgeschlossene Downloads';
$lang['ADDED'] = 'Hinzugefügt';
$lang['DELETE_TORRENT'] = 'Torrent löschen.';
$lang['DELETE_MOVE_TORRENT'] = 'Thema löschen und verschieben.';
$lang['DL_TORRENT'] = 'Torrent herunterladen.';
$lang['BT_LAST_POST'] = 'Letzter Beitrag.';
$lang['BT_CREATED'] = 'Thema gepostet.';
$lang['BT_REPLIES'] = 'Antworten.';
$lang['BT_VIEWS'] = 'Ansichten.';

// Gold/Silver releases
$lang['GOLD'] = 'Gold.';
$lang['SILVER'] = 'Silber.';
$lang['SET_GOLD_TORRENT'] = 'Gold machen.';
$lang['UNSET_GOLD_TORRENT'] = 'Gold zurücksetzen';
$lang['SET_SILVER_TORRENT'] = 'Silber erstellen';
$lang['UNSET_SILVER_TORRENT'] = 'Silber zurücksetzen';
$lang['GOLD_STATUS'] = 'GOLD TORRENT! DOWNLOAD-TRAFFIC NICHT BERÜCKSICHTIGT!';
$lang['SILVER_STATUS'] = 'SILBER TORRENT! DOWNLOAD-TRAFFIC TEILWEISE BERÜCKSICHTIGT!';
$lang['TOR_TYPE_LOG_ACTION'] = 'Torrent-Typ geändert zu: %s';

$lang['TORRENT_STATUS'] = 'Suche nach Status des Release';
$lang['SEARCH_IN_FORUMS'] = 'Suche in Foren';
$lang['SELECT_CAT'] = 'Wählen Sie die Kategorie';
$lang['GO_TO_SECTION'] = 'Gehe zu Abschnitt';
$lang['TORRENTS_FROM'] = 'Beiträge aus';
$lang['SHOW_ONLY'] = 'Nur anzeigen';
$lang['SHOW_COLUMN'] = 'Spalte anzeigen';
$lang['SEL_CHAPTERS'] = 'Link zu den ausgewählten Partitionen';
$lang['NOT_SEL_CHAPTERS'] = 'Sie haben keine Themen ausgewählt';
$lang['SEL_CHAPTERS_HELP'] = 'Sie können maximal %s Partitionen auswählen';
$lang['HIDE_CONTENTS'] = 'Inhalt von {...} ausblenden';
$lang['FILTER_BY_NAME'] = '<i>Nach Namen filtern </i>';

$lang['BT_ONLY_ACTIVE'] = 'Aktiv';
$lang['BT_ONLY_MY'] = 'Meine Freigaben';
$lang['BT_SEED_EXIST'] = 'Seeder vorhanden';
$lang['BT_ONLY_NEW'] = 'Neu seit dem letzten Besuch';
$lang['BT_SHOW_CAT'] = 'Kategorie';
$lang['BT_SHOW_FORUM'] = 'Forum';
$lang['BT_SHOW_AUTHOR'] = 'Autor';
$lang['BT_SHOW_SPEED'] = 'Geschwindigkeit';
$lang['SEED_NOT_SEEN'] = 'Seeder nicht gesehen';
$lang['TITLE_MATCH'] = 'Titelübereinstimmung';
$lang['BT_USER_NOT_FOUND'] = 'nicht gefunden';
$lang['DL_SPEED'] = 'Download-Geschwindigkeit insgesamt';

$lang['BT_DISREGARD'] = 'Missachten';
$lang['BT_NEVER'] = 'nie';
$lang['BT_ALL_DAYS_FOR'] = 'die ganze Zeit';
$lang['BT_1_DAY_FOR'] = 'letzter Tag';
$lang['BT_3_DAY_FOR'] = 'die letzten drei Tage';
$lang['BT_7_DAYS_FOR'] = 'Letzte Woche';
$lang['BT_2_WEEKS_FOR'] = 'die letzten zwei Wochen';
$lang['BT_1_MONTH_FOR'] = 'letzten Monat';
$lang['BT_1_DAY'] = '1 Tag';
$lang['BT_3_DAYS'] = '3 Tage';
$lang['BT_7_DAYS'] = 'Woche';
$lang['BT_2_WEEKS'] = '2 Wochen';
$lang['BT_1_MONTH'] = 'Monat';

$lang['DL_LIST_AND_TORRENT_ACTIVITY'] = 'DL-Liste und Torrent-Aktivität';
$lang['DLWILL'] = 'Herunterladen';
$lang['DLDOWN'] = 'Herunterladen';
$lang['DLCOMPLETE'] = 'Komplett';
$lang['DLCANCEL'] = 'Abbrechen';

$lang['DL_LIST_DEL'] = 'Löschen der DL-Liste';
$lang['DL_LIST_DEL_CONFIRM'] = 'Löschen von DL-Liste zu diesem Thema?';
$lang['SHOW_DL_LIST'] = 'DL-Liste anzeigen';
$lang['SET_DL_STATUS'] = 'Download';
$lang['UNSET_DL_STATUS'] = 'Nicht herunterladen';
$lang['TOPICS_DOWN_SETS'] = 'Thema-Status auf <b>Download</b> geändert';
$lang['TOPICS_DOWN_UNSETS'] = '<b>Download</b> Status entfernt';

$lang['TOPIC_DL'] = 'DL';

$lang['MY_DOWNLOADS'] = 'Meine Downloads';
$lang['SEARCH_DL_WILL'] = 'Geplant';
$lang['SEARCH_DL_WILL_DOWNLOADS'] = 'Geplante Downloads';
$lang['SEARCH_DL_DOWN'] = 'Aktuelle';
$lang['SEARCH_DL_COMPLETE'] = 'Abgeschlossen';
$lang['SEARCH_DL_COMPLETE_DOWNLOADS'] = 'Fertige Downloads';
$lang['SEARCH_DL_CANCEL'] = 'Abgebrochen';
$lang['CUR_UPLOADS'] = 'Aktuelle Uploads';
$lang['SEARCH_RELEASES'] = 'Freigaben';
$lang['TOR_SEARCH_TITLE'] = 'Torrent-Suchoptionen';
$lang['OPEN_TOPIC'] = 'Thema öffnen';

$lang['REG_NOT_ALLOWED_IN_THIS_FORUM'] = 'Konnte Torrent in diesem Forum nicht registrieren';
$lang['ALREADY_REG'] = 'Torrent bereits registriert';
$lang['NOT_TORRENT'] = 'Diese Datei ist kein Torrent';
$lang['VIEWING_USER_BT_PROFILE'] = 'Torrent-Profil';
$lang['CUR_ACTIVE_DLS'] = 'Aktive torrents';

$lang['TD_TRAF'] = 'Heute';
$lang['YS_TRAF'] = 'Gestern';
$lang['TOTAL_TRAF'] = 'Insgesamt';

$lang['USER_RATIO'] = 'Verhältnis';
$lang['MAX_SPEED'] = 'Geschwindigkeit';
$lang['DOWNLOADED'] = 'Heruntergeladen';
$lang['UPLOADED'] = 'Hochgeladen';
$lang['RELEASED'] = 'Freigegeben';
$lang['BONUS'] = 'Bei den selteneren';
$lang['IT_WILL_BE_DOWN'] = 'Es wird erst berücksichtigt, wenn es heruntergeladen wurde';
$lang['SPMODE_FULL'] = 'Peers in vollen Details anzeigen';

// Seed Bonus
$lang['MY_BONUS'] = 'Mein Bonus (%s Boni auf Lager)';
$lang['BONUS_SELECT'] = 'Wählen Sie';
$lang['SEED_BONUS'] = 'Saatgut-Bonus';
$lang['EXCHANGE'] = 'Exchange';
$lang['EXCHANGE_BONUS'] = 'Austausch von Saatgut-Boni';
$lang['BONUS_UPLOAD_DESC'] = '<b>%s zur Verteilung</b> <br />Um Bonuspunkte für %1$s Verkehr zu tauschen, die zu Ihrer Verteilungssumme hinzugefügt werden.';
$lang['BONUS_UPLOAD_PRICE'] = '<b class="%s">%s</b>';
$lang['PRICE'] = 'Preis';
$lang['EXCHANGE_NOT'] = 'Der Austausch ist nicht verfügbar';
$lang['BONUS_SUCCES'] = 'Für Sie ist es erfolgreich erfasst %s.';
$lang['BONUS_NOT_SUCCES'] = '<span class="leech">Sie haben keine Boni zur Verfügung. Mehr Seed!</span>';
$lang['BONUS_RETURN'] = 'Zurück zur Saatgut-Bonus-Austausch';

$lang['TRACKER'] = 'Tracker';
$lang['RANDOM_RELEASE'] = 'Zufälliger Release';
$lang['OPEN_TOPICS'] = 'Offene Themen';
$lang['OPEN_IN_SAME_WINDOW'] = 'öffnen im selben Fenster';
$lang['SHOW_TIME_TOPICS'] = 'Zeit der Erstellung der Themen anzeigen';
$lang['SHOW_CURSOR'] = 'Heben Sie die Zeile unter dem Cursor hervor';

$lang['BT_LOW_RATIO_FOR_DL'] = 'Mit einem Verhältnis von <b>%s</b> können Sie keine Torrents herunterladen';
$lang['BT_RATIO_WARNING_MSG'] = 'Wenn Ihr Verhältnis unter %s fällt, können Sie keine Torrents herunterladen! <a href="%s"><b>Mehr über das Rating.</b></a>';

$lang['SEEDER_LAST_SEEN'] = 'Seeder nicht gesehen: <b>%s</b>';

$lang['NEED_TO_LOGIN_FIRST'] = 'Sie müssen sich zuerst anmelden';
$lang['ONLY_FOR_MOD'] = 'Diese Option nur für Moderatoren';
$lang['ONLY_FOR_ADMIN'] = 'Diese Option nur für Admins';
$lang['ONLY_FOR_SUPER_ADMIN'] = 'Diese Option nur für Super-Admins';

$lang['LOGS'] = 'Die Themen-Historie';
$lang['FORUM_LOGS'] = 'Historisches Forum';
$lang['AUTOCLEAN'] = 'Autoclean';
$lang['DESIGNER'] = 'Designer';

$lang['LAST_IP'] = 'Letzte IP:';
$lang['REG_IP'] = 'Registrierung IP:';
$lang['OTHER_IP'] = 'Andere IP:';
$lang['ALREADY_REG_IP'] = 'Ein Benutzer %s ist bereits mit Ihrer IP-Adresse registriert. Wenn Sie sich zuvor nicht auf unserem Tracker registriert haben, senden Sie eine E-Mail an den <a href="mailto:%s">Administrator</a>';
$lang['HIDDEN'] = 'Versteckt';

// from admin
$lang['NOT_ADMIN'] = 'Sie sind nicht berechtigt, dieses Forum zu verwalten';

$lang['SESSION_EXPIRED'] = 'Die Sitzung ist abgelaufen';

// Sort memberlist per letter
$lang['POST_LINK'] = 'Post-Link';
$lang['GOTO_QUOTED_POST'] = 'Gehen Sie zu dem zitierten Beitrag.';
$lang['LAST_VISITED'] = 'Zuletzt Besuchte.';
$lang['LAST_ACTIVITY'] = 'Letzte Aktivität';
$lang['NEVER'] = 'Nie';

//mpd
$lang['DELETE_POSTS'] = 'Löschen Sie die ausgewählten Beiträge';
$lang['DELETE_POSTS_SUCCESFULLY'] = 'Die ausgewählten Beiträge wurden erfolgreich entfernt';
$lang['NO_POSTS_REMOVED'] = 'Es wurden keine Beiträge entfernt.';

//ts
$lang['TOPICS_ANNOUNCEMENT'] = 'Ankündigungen';
$lang['TOPICS_STICKY'] = 'Stickies';
$lang['TOPICS_NORMAL'] = 'Themen';

//dpc
$lang['DOUBLE_POST_ERROR'] = 'Sie können keinen weiteren Beitrag mit genau demselben Text wie Ihren letzten verfassen.';

//upt
$lang['UPDATE_POST_TIME'] = 'Beitragszeit aktualisieren.';

$lang['TOPIC_SPLIT_NEW'] = 'Neues Thema';
$lang['TOPIC_SPLIT_OLD'] = 'Altes Thema';
$lang['BOT_LEAVE_MSG_MOVED'] = 'Hinzufügen einer Bot-Nachricht über den Umzug.';
$lang['BOT_REASON_MOVED'] = 'Grund für Verschiebung';
$lang['BOT_AFTER_SPLIT_TO_OLD'] = 'Hinzufügen einer Bot-Nachricht über den Split zu <b>altem Thema</b>.';
$lang['BOT_AFTER_SPLIT_TO_NEW'] = 'Hinzufügen einer Bot-Nachricht über den Split zu <b>neuem Thema</b>.';
//qr
$lang['QUICK_REPLY'] = 'Schnelle Antwort';
$lang['INS_NAME_TIP'] = 'Namen oder ausgewählten Text einfügen.';
$lang['QUOTE_SELECTED'] = 'Ausgewähltes Zitat.';
$lang['QR_NOTIFY'] = 'Benachrichtigungen bei Antworten';
$lang['QR_USERNAME'] = 'Name';
$lang['QR_FONT_SEL'] = 'Font face';
$lang['QR_COLOR_SEL'] = 'Schriftfarbe';
$lang['QR_SIZE_SEL'] = 'Schriftgröße';
$lang['COLOR_STEEL_BLUE'] = 'Stahlblau.';
$lang['COLOR_GRAY'] = 'Grau';
$lang['COLOR_DARK_GREEN'] = 'Dunkelgrün';

// Short buttons
$lang['IP'] = 'IP';
$lang['POLL'] = 'Umfrage';
$lang['MODERATE'] = 'Moderator';
$lang['SEND_PM_SHORT'] = 'PM';
$lang['WEBSITE_SHORT'] = 'WWW';

$lang['DECLENSION']['REPLIES'] = ['Antwort', 'Antworten'];
$lang['DECLENSION']['TIMES'] = ['Zeit', 'mal'];
$lang['DECLENSION']['FILES'] = ['Datei', 'Dateien'];

$lang['AUTH_TYPES'][AUTH_ALL] = $lang['AUTH_ANONYMOUS_USERS'];
$lang['AUTH_TYPES'][AUTH_REG] = $lang['AUTH_REGISTERED_USERS'];
$lang['AUTH_TYPES'][AUTH_ACL] = $lang['AUTH_USERS_GRANTED_ACCESS'];
$lang['AUTH_TYPES'][AUTH_MOD] = $lang['AUTH_MODERATORS'];
$lang['AUTH_TYPES'][AUTH_ADMIN] = $lang['AUTH_ADMINISTRATORS'];

$lang['NEW_USER_REG_DISABLED'] = 'Entschuldigung, die Registrierung ist zurzeit deaktiviert.';
$lang['ONLY_NEW_POSTS'] = 'nur neue Beiträge';
$lang['ONLY_NEW_TOPICS'] = 'nur neue Themen';

$lang['TORHELP_TITLE'] = 'Bitte helfen Sie beim Seed dieser Torrents!';
$lang['STATISTICS'] = 'Statistiken.';
$lang['STATUS'] = 'Status';
$lang['ACTION'] = 'Aktion';
$lang['REASON'] = 'Grund';
$lang['COMMENT'] = 'Kommentar';

// search
$lang['SEARCH_S'] = 'Suche...';
$lang['FORUM_S'] = 'im Forum';
$lang['TRACKER_S'] = 'auf dem Tracker';
$lang['HASH_S'] = 'durch info_hash';

// copyright
$lang['NOTICE'] = '!ACHTUNG!';
$lang['COPY'] = 'Die Seite bietet keine elektronischen Versionen von Produkten an und beschäftigt sich nur mit dem Sammeln und Katalogisieren der von unseren Lesern gesendeten und veröffentlichten Referenzen. Wenn Sie der rechtmäßige Eigentümer von eingereichten Materialien sind und nicht möchten, dass der Verweis darauf in unserem Katalog enthalten ist, kontaktieren Sie uns bitte, und wir werden es sofort entfernen. Dateien zum Austausch auf dem Tracker werden von den Benutzern der Seite bereitgestellt, und die Verwaltung übernimmt keine Verantwortung für deren Inhalt. Bitte laden Sie keine dateigeschützten oder illegalen Inhalte hoch!';

// FILELIST
$lang['COLLAPSE'] = 'Verzeichnis zusammenklappen';
$lang['EXPAND'] = 'Erweitern';
$lang['SWITCH'] = 'Wechsler';
$lang['TOGGLE_WINDOW_FULL_SIZE'] = 'Fenster vergrößern/verkleinern';
$lang['EMPTY_TOPIC_ID'] = 'Themen-ID fehlt';
$lang['TOR_NOT_FOUND'] = 'Datei fehlt auf dem Server';
$lang['ERROR_BUILD'] = 'Der Inhalt dieser Torrent-Datei kann auf der Website nicht angezeigt werden (es war nicht möglich, eine Liste von Dateien zu erstellen)';
$lang['TORFILE_INVALID'] = 'Torrent-Datei ist beschädigt';

// Profile
$lang['WEBSITE_ERROR'] = 'Die "Webseite" darf nur http://sitename enthalten';
$lang['PROFILE_USER'] = 'Profil anzeigen';
$lang['GOOD_UPDATE'] = 'wurde erfolgreich geändert';
$lang['UCP_DOWNLOADS'] = 'Downloads';
$lang['HIDE_DOWNLOADS'] = 'Blenden Sie die aktuelle Liste der Downloads auf Ihrem Profil aus';
$lang['BAN_USER'] = 'Um zu verhindern, dass ein Benutzer';
$lang['USER_NOT_ALLOWED'] = 'Benutzern ist es nicht gestattet';
$lang['HIDE_AVATARS'] = 'Avatare anzeigen';
$lang['SHOW_CAPTION'] = 'Zeigen Sie Ihre Signatur';
$lang['DOWNLOAD_TORRENT'] = 'Download torrent';
$lang['SEND_PM'] = 'PM schicken';
$lang['SEND_MESSAGE'] = 'Nachricht senden';
$lang['NEW_THREADS'] = 'Neue Threads';
$lang['PROFILE_NOT_FOUND'] = 'Profil nicht gefunden';

$lang['USER_DELETE_EXPLAIN'] = 'Löschen dieses Benutzers';
$lang['USER_DELETE_ME'] = 'Es tut mir leid, Ihr Konto darf nicht gelöscht werden!';
$lang['USER_DELETE_CSV'] = 'Es tut mir leid, dieses Konto darf nicht gelöscht werden!';
$lang['USER_DELETE_CONFIRM'] = 'Sind Sie sicher, dass Sie diesen Benutzer löschen möchten?';
$lang['USER_DELETED'] = 'Benutzer wurde erfolgreich gelöscht';
$lang['DELETE_USER_ALL_POSTS'] = 'Löschen Sie alle Benutzer-Beiträge';
$lang['DELETE_USER_ALL_POSTS_CONFIRM'] = 'Sind Sie sicher, dass Sie alle Nachrichten und alle von diesem Benutzer gestarteten Themen löschen möchten?';
$lang['DELETE_USER_POSTS'] = 'Alle Nachrichten löschen, außer den ersten Beiträgen';
$lang['DELETE_USER_POSTS_ME'] = 'Sind Sie sicher, dass Sie alle meine Beiträge löschen möchten?';
$lang['DELETE_USER_POSTS_CONFIRM'] = 'Sind Sie sicher, dass Sie alle Nachrichten löschen möchten, außer den ersten Beiträgen?';
$lang['USER_DELETED_POSTS'] = 'Beiträge wurden erfolgreich entfernt';

$lang['USER'] = 'Benutzer';
$lang['ROLE'] = 'Rolle:';
$lang['MEMBERSHIP_IN'] = 'Die Mitgliedschaft in';
$lang['PARTY'] = 'Party:';
$lang['CANDIDATE'] = 'Kandidat:';
$lang['INDIVIDUAL'] = 'Hat die individuellen Rechte';
$lang['GROUP_LIST_HIDDEN'] = 'Sie sind nicht berechtigt, versteckte Gruppen anzuzeigen';

$lang['USER_ACTIVATE'] = 'Aktivieren';
$lang['USER_DEACTIVATE'] = 'Deaktivieren';
$lang['DEACTIVATE_CONFIRM'] = 'Sind Sie sicher, dass Sie diesen Benutzer deaktivieren möchten?';
$lang['USER_ACTIVATE_ON'] = 'Benutzer wurde erfolgreich aktiviert';
$lang['USER_DEACTIVATE_ME'] = 'Sie können mein Konto nicht deaktivieren!';
$lang['ACTIVATE_CONFIRM'] = 'Sind Sie sicher, dass Sie diesen Benutzer deaktivieren möchten?';
$lang['USER_ACTIVATE_OFF'] = 'Benutzer wurde erfolgreich deaktiviert';

// Register
$lang['CHOOSE_A_NAME'] = 'Sie sollten einen Namen wählen';
$lang['CHOOSE_E_MAIL'] = 'Sie müssen die E-Mail angeben';
$lang['CHOOSE_PASS'] = 'Das Feld für das Passwort darf nicht leer sein!';
$lang['CHOOSE_PASS_ERR'] = 'Die eingegebenen Passwörter stimmen nicht überein';
$lang['CHOOSE_PASS_ERR_MIN'] = 'Ihr Passwort muss mindestens %d Zeichen';
$lang['CHOOSE_PASS_ERR_MAX'] = 'Ihr Passwort darf nicht länger als %d Zeichen sein';
$lang['CHOOSE_PASS_ERR_NUM'] = 'Das Passwort muss mindestens eine Ziffer enthalten';
$lang['CHOOSE_PASS_ERR_LETTER'] = 'Das Passwort muss mindestens einen Buchstaben des lateinischen Alphabets enthalten';
$lang['CHOOSE_PASS_ERR_LETTER_UPPERCASE'] = 'Das Passwort muss mindestens einen Großbuchstaben des lateinischen Alphabets enthalten';
$lang['CHOOSE_PASS_ERR_SPEC_SYMBOL'] = 'Das Passwort muss mindestens ein Sonderzeichen enthalten';
$lang['CHOOSE_PASS_OK'] = 'Die Kennwörter übereinstimmen';
$lang['CHOOSE_PASS_REG_OK'] = 'Die Kennwörter stimmen überein, Sie können mit der Registrierung fortfahren';
$lang['CHOOSE_PASS_FAILED'] = 'Um das Passwort zu ändern, müssen Sie das aktuelle Passwort korrekt angeben';
$lang['EMAILER_DISABLED'] = 'Entschuldigung, diese Funktion funktioniert vorübergehend nicht';
$lang['REGISTERED_IN_TIME'] = 'Die Registrierung ist derzeit geschlossen<br /><br />Die Registrierung ist verfügbar während: %s<br />Aktuelle Serverzeit: %s<br /><br />Wir entschuldigen uns für die Unannehmlichkeiten';
$lang['AUTOCOMPLETE'] = 'Passwort generieren';
$lang['YOUR_NEW_PASSWORD'] = 'Ihr neues Passwort:';
$lang['REGENERATE'] = 'Regenerieren';

// Debug
$lang['EXECUTION_TIME'] = 'Ausführungszeit:';
$lang['SEC'] = 'sec';
$lang['ON'] = 'auf';
$lang['OFF'] = 'off';
$lang['MEMORY'] = 'Speicher: ';
$lang['QUERIES'] = 'Abfragen';
$lang['SHOW_LOG'] = 'Protokoll anzeigen';
$lang['EXPLAINED_LOG'] = 'Erklärtes Protokoll';
$lang['CUT_LOG'] = 'Lange Abfragen kürzen';

// Attach Guest
$lang['DOWNLOAD_INFO'] = 'Kostenlos herunterladen und mit maximaler Geschwindigkeit!';
$lang['HOW_TO_DOWNLOAD'] = 'Wie man herunterlädt?';
$lang['WHAT_IS_A_TORRENT'] = 'Was ist ein Torrent?';
$lang['RATINGS_AND_LIMITATIONS'] = 'Bewertungen und Einschränkungen';

$lang['SCREENSHOTS_RULES'] = 'Lesen Sie die Regeln, die in den Screenshots festgelegt sind!';
$lang['AJAX_EDIT_OPEN'] = 'Haben Sie bereits eine schnelle Bearbeitung geöffnet?';
$lang['GO_TO_PAGE'] = 'Gehe zu Seite ...';
$lang['EDIT'] = 'Bearbeiten';
$lang['SAVE'] = 'Speichern';
$lang['NEW_WINDOW'] = 'in einem neuen Fenster';

// BB Code
$lang['ALIGN'] = 'Ausrichten:';
$lang['LEFT'] = 'Auf der linken Seite';
$lang['RIGHT'] = 'Rechts';
$lang['CENTER'] = 'Zentriert';
$lang['JUSTIFY'] = 'An Breite anpassen';
$lang['HOR_LINE'] = 'Horizontale Linie (Strg+8)';
$lang['NEW_LINE'] = 'Neue Zeile';
$lang['BOLD'] = 'Fettdruck: [b]text[/b] (Strg+B)';
$lang['ITALIC'] = 'Kursiver Text: [i]Text[/i] (Strg+I)';
$lang['UNDERLINE'] = 'Text unterstreichen: [u]text[/u] (Strg+U)';
$lang['STRIKEOUT'] = 'Streichen-Text: [s]text[/s] (Strg+S)';
$lang['BOX_TAG'] = 'Rahmen um den Text: [box]text[/box] oder [box=#333,#888]text[/box]';
$lang['INDENT_TAG'] = 'Einzug einfügen: [indent]text[/indent]';
$lang['PRE_TAG'] = 'Vorformatierter Text: [pre]text[/pre]';
$lang['NFO_TAG'] = 'NFO: [nfo]text[/nfo]';
$lang['SUPERSCRIPT'] = 'Hochgestellter Text: [sup]text[/sup]';
$lang['SUBSCRIPT'] = 'Tiefgestellter Text: [sub]text[/sub]';
$lang['QUOTE_TITLE'] = 'Zitat: [quote]text[/quote] (Strg+Q)';
$lang['IMG_TITLE'] = 'Bild einfügen: [img]https://image_url[/img] (Strg+R)';
$lang['URL'] = 'URL';
$lang['URL_TITLE'] = 'URL einfügen: [url]https://url[/url] oder [url=https://url]URL-Text[/url] (Strg+W)';
$lang['CODE_TITLE'] = 'Code-Anzeige: [code]code[/code] (Strg+K)';
$lang['LIST'] = 'Liste';
$lang['LIST_TITLE'] = 'Liste: [list]text[/list] (Strg+l)';
$lang['LIST_ITEM'] = 'Geordnete Liste: [list=]text[/list] (Strg+O)';
$lang['ACRONYM'] = 'Akronym';
$lang['ACRONYM_TITLE'] = 'Akronym: [acronym=Volltext]Kurzer Text[/acronym]';
$lang['QUOTE_SEL'] = 'Zitat ausgewählt';
$lang['JAVASCRIPT_ON'] = 'JavaScript muss aktiviert sein, um Nachrichten zu senden';

$lang['NEW'] = 'Neue';
$lang['NEWEST'] = 'Neueste';
$lang['LATEST'] = 'Neueste';
$lang['POST'] = 'Post';
$lang['OLD'] = 'Alt';

// DL-List
$lang['DL_USER'] = 'Benutzername';
$lang['DL_PERCENT'] = 'Vollständiger Prozentsatz';
$lang['DL_UL'] = 'UL';
$lang['DL_DL'] = 'DL';
$lang['DL_UL_SPEED'] = 'UL-Geschwindigkeit';
$lang['DL_DL_SPEED'] = 'DL-Geschwindigkeit';
$lang['DL_PORT'] = 'Port';
$lang['DL_CLIENT'] = 'BitTorrent-Client';
$lang['DL_FORMULA'] = 'Formel: Uploaded/TorrentSize';
$lang['DL_ULR'] = 'ULR';
$lang['DL_STOPPED'] = 'gestoppt';
$lang['DL_UPD'] = 'Aktualisierungszeit: ';
$lang['DL_INFO'] = 'Zeigt Daten <i><b>nur für die aktuelle Sitzung</b></i>';
$lang['HIDE_PEER_TORRENT_CLIENT'] = 'Verstecke meinen BitTorrent-Clientnamen in der Peer-Liste';
$lang['HIDE_PEER_COUNTRY_NAME'] = 'Verstecke meinen Ländernamen in der Peer-Liste';
$lang['HIDE_PEER_USERNAME'] = 'Verstecke meinen Benutzernamen in der Peer-Liste';

// Post PIN
$lang['POST_PIN'] = 'Pin ersten Beitrag';
$lang['POST_UNPIN'] = 'Löse ersten Beitrag';
$lang['POST_PINNED'] = 'Erster Beitrag angeheftet.';
$lang['POST_UNPINNED'] = 'Erster Beitrag nicht mehr angeheftet.';

// Management of my messages
$lang['GOTO_MY_MESSAGE'] = 'Schließen und zurück zu der Liste "Meine Nachrichten"';
$lang['DEL_MY_MESSAGE'] = 'Ausgewählte Themen wurden aus "Meine Nachrichten" entfernt.';
$lang['NO_TOPICS_MY_MESSAGE'] = 'Keine Themen in der Liste Ihrer Beiträge gefunden (vielleicht haben Sie sie bereits entfernt).';
$lang['EDIT_MY_MESSAGE_LIST'] = 'Liste Bearbeiten';
$lang['SELECT_INVERT'] = 'Auswahl / umkehren';
$lang['RESTORE_ALL_POSTS'] = 'Wiederherstellen aller Beiträge';
$lang['DEL_LIST_MY_MESSAGE'] = 'Löschen Sie das ausgewählte Thema aus der Liste.';
$lang['DEL_LIST_MY_MESSAGE_INFO'] = 'Nach der Entfernung, um die <b>komplette Liste</b> zu aktualisieren, könnten bereits gelöschte Threads angezeigt werden.';
$lang['DEL_LIST_INFO'] = 'Um einen Auftrag aus der Liste zu löschen, klicken Sie auf das Symbol links neben den Namen eines Abschnitts.';

// Watched topics
$lang['WATCHED_TOPICS'] = 'Beobachtete Themen';
$lang['NO_WATCHED_TOPICS'] = 'Keine Themen beobachtet';

// set_die_append_msg
$lang['INDEX_RETURN'] = 'Zurück zur Startseite';
$lang['FORUM_RETURN'] = 'Zurück zum Forum.';
$lang['TOPIC_RETURN'] = 'Zurück zum Thema';
$lang['POST_RETURN'] = 'Gehe zu Beitrag.';
$lang['PROFILE_EDIT_RETURN'] = 'Zurück zur Bearbeitung.';
$lang['PROFILE_RETURN'] = 'Gehen Sie zum Profil.';

$lang['INDEXER'] = 'Suche neu indizieren';
$lang['INDEXER_SUCCESS'] = 'Suchindex erfolgreich aktualisiert';

$lang['FORUM_STYLE'] = 'Forum-Stil.';

$lang['LINKS_ARE_FORBIDDEN'] = 'Links sind verboten';

$lang['GENERAL'] = 'Allgemeiner Admin.';
$lang['USERS'] = 'Benutzer-Admin.';
$lang['GROUPS'] = 'Gruppen-Admin.';
$lang['FORUMS'] = 'Forum-Admin.';
$lang['MODS'] = 'Änderungen.';

$lang['CONFIGURATION'] = 'Konfiguration';
$lang['MANAGE'] = 'Management';
$lang['DISALLOW'] = 'Disallow Namen';
$lang['PRUNE'] = 'Beschneiden';
$lang['MASS_EMAIL'] = 'Massen-E-Mail';
$lang['RANKS'] = 'Reihen';
$lang['SMILIES'] = 'Smilies';
$lang['BAN_MANAGEMENT'] = 'Ban Kontrolle';
$lang['WORD_CENSOR'] = 'Wort Zensur';
$lang['CRON'] = 'Task Scheduler (cron)';
$lang['REBUILD_SEARCH_INDEX'] = 'Rebuild search index';
$lang['FORUM_CONFIG'] = 'Forum-Einstellungen';
$lang['ACTIONS_LOG'] = 'Bericht über die Aktion';

// Migrations
$lang['MIGRATIONS_STATUS'] = 'Datenbank-Migrationsstatus';
$lang['MIGRATIONS_DATABASE_NAME'] = 'Datenbankname';
$lang['MIGRATIONS_DATABASE_TOTAL'] = 'Gesamtzahl der Tabellen';
$lang['MIGRATIONS_DATABASE_SIZE'] = 'Datenbankgröße';
$lang['MIGRATIONS_DATABASE_INFO'] = 'Datenbankinformationen';
$lang['MIGRATIONS_SYSTEM'] = 'Migrationssystem';
$lang['MIGRATIONS_NEEDS_SETUP'] = 'Benötigt Einrichtung';
$lang['MIGRATIONS_ACTIVE'] = 'Aktiv';
$lang['MIGRATIONS_NOT_INITIALIZED'] = 'Nicht initialisiert';
$lang['MIGRATIONS_UP_TO_DATE'] = 'Alle aktuell';
$lang['MIGRATIONS_PENDING_COUNT'] = 'ausstehend';
$lang['MIGRATIONS_APPLIED'] = 'Angewandte Migrationen';
$lang['MIGRATIONS_PENDING'] = 'Ausstehende Migrationen';
$lang['MIGRATIONS_VERSION'] = 'Version';
$lang['MIGRATIONS_NAME'] = 'Migrationsname';
$lang['MIGRATIONS_FILE'] = 'Migrationsdatei';
$lang['MIGRATIONS_APPLIED_AT'] = 'Angewandt am';
$lang['MIGRATIONS_COMPLETED_AT'] = 'Abgeschlossen am';
$lang['MIGRATIONS_CURRENT_VERSION'] = 'Aktuelle Version';
$lang['MIGRATIONS_NOT_APPLIED'] = 'Keine Migrationen angewendet';
$lang['MIGRATIONS_INSTRUCTIONS'] = 'Anweisungen';
$lang['MIGRATIONS_SETUP_STATUS'] = 'Einrichtungsstatus';
$lang['MIGRATIONS_SETUP_GUIDE'] = 'Siehe Einrichtungsanleitung unten';
$lang['MIGRATIONS_ACTION_REQUIRED'] = 'Aktion erforderlich';

// Index
$lang['MAIN_INDEX'] = 'Forum-Index.';
$lang['FORUM_STATS'] = 'Forum-Statistik.';
$lang['ADMIN_INDEX'] = 'Admin-Index.';
$lang['CREATE_PROFILE'] = 'Profil erstellen.';

$lang['TP_VERSION'] = 'TorrentPier-Version.';
$lang['TP_RELEASE_DATE'] = 'Release-Datum.';
$lang['PHP_INFO'] = 'Informationen über PHP.';

$lang['CLICK_RETURN_ADMIN_INDEX'] = 'Klicken Sie %sHier%s, um zum Admin-Index zurückzukehren.';

$lang['NUMBER_POSTS'] = 'Anzahl der Beiträge.';
$lang['POSTS_PER_DAY'] = 'Beiträge pro Tag.';
$lang['NUMBER_TOPICS'] = 'Anzahl der Themen.';
$lang['TOPICS_PER_DAY'] = 'Themen pro Tag.';
$lang['NUMBER_USERS'] = 'Anzahl der Benutzer.';
$lang['USERS_PER_DAY'] = 'Benutzer pro Tag.';
$lang['BOARD_STARTED'] = 'Board gestartet.';
$lang['AVATAR_DIR_SIZE'] = 'Avatar-Verzeichnis-Größe.';
$lang['NOT_AVAILABLE'] = 'Nicht verfügbar.';

// System information
$lang['ADMIN_SYSTEM_INFORMATION'] = 'Systeminformationen';
$lang['ADMIN_SYSTEM_OS'] = 'Betriebssystem:';
$lang['ADMIN_SYSTEM_PHP_VER'] = 'PHP:';
$lang['ADMIN_SYSTEM_DATABASE_VER'] = 'Datenbank:';
$lang['ADMIN_SYSTEM_PHP_MEM_LIMIT'] = 'Speichergrenze:';
$lang['ADMIN_SYSTEM_DISK_SPACE_INFO_TITLE'] = 'Festplattenspeicherinfo:';
$lang['ADMIN_SYSTEM_DISK_SPACE_INFO'] = '%s (verwendet: %s | frei: %s)';
$lang['ADMIN_SYSTEM_PHP_MAX_EXECUTION_TIME'] = 'Maximale Ausführungszeit:';

// Clear Cache
$lang['DATASTORE'] = 'Datastore';
$lang['CLEAR_CACHE'] = 'Cache';
$lang['CLEAR_TEMPLATES_CACHE'] = 'Vorlagen-Cache';

// Update
$lang['USER_LEVELS'] = 'Benutzerebenen';
$lang['USER_LEVELS_UPDATED'] = 'Benutzer-Stufen wurden aktualisiert';

// Synchronize
$lang['SYNCHRONIZE'] = 'Synchronisieren';
$lang['TOPICS_DATA_SYNCHRONIZED'] = 'Die Themen Daten wurden synchronisiert';
$lang['USER_POSTS_COUNT'] = 'Benutzer Beiträge zählen';
$lang['USER_POSTS_COUNT_SYNCHRONIZED'] = 'Die Benutzerbeiträge wurden synchronisiert';

// Online Userlist
$lang['SHOW_ONLINE_USERLIST'] = 'Zeigen Sie die Liste der online-Benutzer an';

// Robots.txt editor
$lang['ROBOTS_TXT_EDITOR_TITLE'] = 'robots.txt verwalten';
$lang['ROBOTS_TXT_UPDATED_SUCCESSFULLY'] = 'Die Datei robots.txt wurde erfolgreich aktualisiert';
$lang['CLICK_RETURN_ROBOTS_TXT_CONFIG'] = '%sHier klicken um zum robots.txt-Manager zurückzukehren%s';

// Auth pages
$lang['USER_SELECT'] = 'Wählen Sie einen Benutzer';
$lang['GROUP_SELECT'] = 'Wählen Sie eine Gruppe aus';
$lang['SELECT_A_FORUM'] = 'Wählen Sie ein Forum';
$lang['AUTH_CONTROL_USER'] = 'Steuere die Benutzerrechte';
$lang['AUTH_CONTROL_GROUP'] = 'Steuere die Gruppenrechte';
$lang['AUTH_CONTROL_FORUM'] = 'Steuere die Forumsrechte';
$lang['LOOK_UP_FORUM'] = 'Forum Nachschlagen';

$lang['GROUP_AUTH_EXPLAIN'] = 'Hier können die Berechtigungen und den Moderator-Status für jede Benutzergruppe geändert werden. Vergessen Sie nicht, dass beim Ändern der Gruppenberechtigungen individuelle Benutzerberechtigungen weiterhin den Zugang zu Foren usw. ermöglichen können. Sie werden gewarnt, wenn dies der Fall ist.';
$lang['USER_AUTH_EXPLAIN'] = 'Hier können die Berechtigungen und den Moderator-Status für jeden einzelnen Benutzer geändert werden. Vergessen Sie nicht, dass beim Ändern der Benutzerberechtigungen Gruppenberechtigungen weiterhin den Zugang zu Foren usw. ermöglichen können. Sie werden gewarnt, wenn dies der Fall ist.';
$lang['FORUM_AUTH_EXPLAIN'] = 'Hier können Sie die Berechtigungsstufen jedes Forums ändern. Sie haben sowohl eine einfache als auch eine erweiterte Methode, um dies zu tun, wobei die erweiterte Methode mehr Kontrolle über die jeweiligen Forum-Operationen bietet. Denken Sie daran, dass das Ändern der Berechtigungsstufe der Foren beeinflusst, welche Benutzer die verschiedenen Operationen innerhalb dieser ausführen können.';

$lang['SIMPLE_MODE'] = 'Einfacher Modus';
$lang['ADVANCED_MODE'] = 'Erweiterter Modus';
$lang['MODERATOR_STATUS'] = 'Moderator-status';

$lang['PUBLIC'] = 'Öffentliche';
$lang['PRIVATE'] = 'Private';
$lang['REGISTERED'] = 'Registriert';
$lang['ADMINISTRATORS'] = 'Administratoren';

// These are displayed in the drop-down boxes for advanced mode forum auth, try and keep them short!
$lang['FORUM_ALL'] = 'ALLE';
$lang['FORUM_REG'] = 'REG';
$lang['FORUM_PRIVATE'] = 'PRIVATE';
$lang['FORUM_MOD'] = 'MOD';
$lang['FORUM_ADMIN'] = 'ADMIN';

$lang['AUTH_VIEW'] = $lang['VIEW'] = 'Ansicht';
$lang['AUTH_READ'] = $lang['READ'] = 'Lesen';
$lang['AUTH_POST'] = $lang['POST'] = 'Post';
$lang['AUTH_REPLY'] = $lang['REPLY'] = 'Antwort';
$lang['AUTH_EDIT'] = $lang['EDIT'] = 'Bearbeiten';
$lang['AUTH_DELETE'] = $lang['DELETE'] = 'Löschen';
$lang['AUTH_STICKY'] = $lang['STICKY'] = 'Sticky';
$lang['AUTH_ANNOUNCE'] = $lang['ANNOUNCE'] = 'Ankündigen';
$lang['AUTH_VOTE'] = $lang['VOTE'] = 'Abstimmen';
$lang['AUTH_POLLCREATE'] = $lang['POLLCREATE'] = 'Umfrage erstellen';
$lang['AUTH_ATTACHMENTS'] = $lang['AUTH_ATTACH'] = 'Posten von Dateien';
$lang['AUTH_DOWNLOAD'] = 'Dateien herunterladen';

$lang['USER_LEVEL'] = 'Benutzerebene';
$lang['AUTH_USER'] = 'Benutzer';
$lang['AUTH_ADMIN'] = 'Administrator';
$lang['FORUM_AUTH_UPDATED'] = 'Forums-Berechtigungen wurden aktualisiert';
$lang['APPLY_TO_SUBFORUMS'] = 'Auf Unterforen anwenden';

$lang['AUTH_UPDATED'] = 'Berechtigungen wurden aktualisiert';
$lang['AUTH_GENERAL_ERROR'] = 'Konnte den Administrationsstatus nicht aktualisieren';
$lang['AUTH_SELF_ERROR'] = 'Konnte dich nicht von einem Administrator auf einen Benutzer ändern';
$lang['NO_FORUMS_AVAILABLE'] = 'Keine Foren verfügbar. Erstellen Sie zuerst Foren, um Berechtigungen zu verwalten.';
$lang['CLICK_RETURN_USERAUTH'] = 'Klicken Sie %sHier%s zurück zu Benutzerberechtigungen';
$lang['CLICK_RETURN_GROUPAUTH'] = 'Klicken Sie %sHier%s zurück zur Gruppenberechtigungen';
$lang['CLICK_RETURN_FORUMAUTH'] = 'Klicken Sie %sHier%s zurück zu Forum-Berechtigungen';

// Banning
$lang['BAN_CONTROL'] = 'Ban Kontrolle';
$lang['BAN_EXPLAIN'] = 'Hier kannst du die Sperrung von Benutzern steuern.';
$lang['BAN_USERNAME'] = 'Ban einen oder mehrere bestimmte Benutzer';
$lang['UNBAN_USERNAME'] = 'Entsperren Sie einen oder mehrere spezifische Benutzer';
$lang['UNBAN_USERNAME_EXPLAIN'] = 'Sie können mehrere Benutzer in einem Rutsch mit der entsprechenden Kombination von Maus und Tastatur für Ihren Computer und Browser entsperren.';
$lang['NO_BANNED_USERS'] = 'Keine gesperrten Benutzernamen.';
$lang['BAN_UPDATE_SUCESSFUL'] = 'Die Bannliste wurde erfolgreich aktualisiert';
$lang['CLICK_RETURN_BANADMIN'] = 'Klicken Sie %sHier%s zurück zur Verbotskontrolle.';

// Configuration
$lang['GENERAL_CONFIG'] = 'Allgemeine Konfiguration.';
$lang['CONFIG_EXPLAIN'] = 'Das Formular unten ermöglicht es Ihnen, alle allgemeinen Boardoptionen anzupassen. Für Benutzer- und Forum-Konfigurationen verwenden Sie die entsprechenden Links auf der linken Seite.';

$lang['CONFIG_MODS'] = 'Konfigurationsänderungen.';
$lang['MODS_EXPLAIN'] = 'Dieses Formular ermöglicht die Anpassung der Änderungen.';

$lang['CLICK_RETURN_CONFIG'] = '%sKlicken Sie hier um zur allgemeinen Konfiguration zurückzukehren%s';
$lang['CLICK_RETURN_CONFIG_MODS'] = '%sZurück zu den Einstellungen ändern%s';

$lang['GENERAL_SETTINGS'] = 'Die Allgemeinen Board-Einstellungen';
$lang['SITE_NAME'] = 'Seitenname.';
$lang['SITE_DESC'] = 'Website-Beschreibung.';
$lang['FORUMS_DISABLE'] = 'Forum deaktivieren.';
$lang['BOARD_DISABLE_EXPLAIN'] = 'Das Forum wird für die Benutzer nicht verfügbar sein.';
$lang['ACC_NONE'] = 'Keiner';

$lang['ABILITIES_SETTINGS'] = 'Benutzer und Forum Grundeinstellungen.';
$lang['MAX_POLL_OPTIONS'] = 'Maximale Anzahl von Umfrageoptionen.';
$lang['FLOOD_INTERVAL'] = 'Flood-Intervall.';
$lang['FLOOD_INTERVAL_EXPLAIN'] = 'Anzahl der Sekunden, die ein Benutzer zwischen den Beiträgen warten muss.';
$lang['TOPICS_PER_PAGE'] = 'Themen pro Seite.';
$lang['POSTS_PER_PAGE'] = 'Beiträge pro Seite.';
$lang['HOT_THRESHOLD'] = 'Beiträge für populäre Schwelle.';
$lang['DEFAULT_LANGUAGE'] = 'Standardsprache.';
$lang['DATE_FORMAT'] = 'Datumsformat.';
$lang['SYSTEM_TIMEZONE'] = 'Systemzeitzone.';
$lang['ENABLE_PRUNE'] = 'Forum-Beschneiden aktivieren.';
$lang['ALLOW_BBCODE'] = 'BBCode erlauben.';
$lang['ALLOW_SMILIES'] = 'Smilies erlauben.';
$lang['SMILIES_PATH'] = 'Pfad zur Smilies-Speicherung.';
$lang['SMILIES_PATH_EXPLAIN'] = 'Pfad unter Ihrem öffentlichen TorrentPier-Verzeichnis, z.B. assets/images/smiles';
$lang['ALLOW_SIG'] = 'Signaturen erlauben.';
$lang['MAX_SIG_LENGTH'] = 'Maximale Länge der Signatur.';
$lang['MAX_SIG_LENGTH_EXPLAIN'] = 'Maximale Anzahl von Zeichen in Benutzer-Signaturen.';
$lang['ALLOW_NAME_CHANGE'] = 'Änderungen des Benutzernamens erlauben.';

// Autologin Keys
$lang['ALLOW_AUTOLOGIN'] = 'Automatische Anmeldungen erlauben.';
$lang['ALLOW_AUTOLOGIN_EXPLAIN'] = 'Legt fest, ob Benutzer erlauben, dass sie automatisch angemeldet werden.';
$lang['AUTOLOGIN_TIME'] = 'Ablauf des automatischen Anmelde-Keys.';
$lang['AUTOLOGIN_TIME_EXPLAIN'] = 'Wie lange ein automatischer Anmelde-Key gültig ist.';

// Forum Management
$lang['FORUM_ADMIN_MAIN'] = 'Forum-Administration';
$lang['EDIT_FORUM'] = 'Forum Bearbeiten';
$lang['CREATE_FORUM'] = 'Erstellen neues forum';
$lang['CREATE_SUB_FORUM'] = 'Unterforum erstellen';
$lang['CREATE_CATEGORY'] = 'Neue Kategorie erstellen';
$lang['REMOVE'] = 'Entfernen';
$lang['CONFIG_UPDATED'] = 'Forum-Konfiguration wurde erfolgreich aktualisiert.';
$lang['MOVE_UP'] = 'Nach oben verschieben';
$lang['MOVE_DOWN'] = 'Nach unten verschieben';
$lang['NO_MODE'] = 'Kein Modus gesetzt.';
$lang['FORUM_EDIT_DELETE_EXPLAIN'] = 'Das Formular unten ermöglicht es Ihnen, alle allgemeinen Boardoptionen anzupassen. Für Benutzer- und Forum-Konfigurationen verwenden Sie die entsprechenden Links auf der linken Seite';

$lang['MOVE_CONTENTS'] = 'Verschieben Sie alle Inhalte.';
$lang['FORUM_DELETE'] = 'Forum Löschen';
$lang['FORUM_DELETE_EXPLAIN'] = 'Das folgende Formular ermöglicht es Ihnen, ein Forum (oder eine Kategorie) zu löschen und zu entscheiden, wo Sie alle Themen (oder Foren), die es enthielt, hinverschieben möchten.';
$lang['CATEGORY_DELETE'] = 'Kategorie Löschen';
$lang['CATEGORY_NAME_EMPTY'] = 'Der Kategoriename wurde nicht angegeben.';

$lang['STATUS_LOCKED'] = 'Gesperrt';
$lang['STATUS_UNLOCKED'] = 'Entsperrt.';
$lang['FORUM_SETTINGS'] = 'Allgemeine Foren Einstellungen';
$lang['FORUM_NAME'] = 'Forum-Name';
$lang['FORUM_DESC'] = 'Beschreibung';
$lang['FORUM_STATUS'] = 'Forum-Status';
$lang['FORUM_PRUNING'] = 'Automatisches Beschneiden.';

$lang['PRUNE_DAYS'] = 'Entfernen Sie Themen, die seit mehr als eingegebenen Tagen nicht mehr gepostet wurden.';

$lang['MOVE_AND_DELETE'] = 'Verschieben und Löschen';

$lang['DELETE_ALL_POSTS'] = 'Löschen Sie alle Beiträge';
$lang['DELETE_ALL_TOPICS'] = 'Löschen aller Themen, einschließlich Ankündigungen und angehefteter Beiträge.';
$lang['NOWHERE_TO_MOVE'] = 'Nirgendwohin zu verschieben.';

$lang['EDIT_CATEGORY'] = 'Kategorie Bearbeiten';
$lang['EDIT_CATEGORY_EXPLAIN'] = 'Verwenden Sie dieses Formular, um den Namen einer Kategorie zu ändern.';

$lang['FORUMS_UPDATED'] = 'Forum und information über die Kategorie wurde erfolgreich aktualisiert';

$lang['MUST_DELETE_FORUMS'] = 'Sie müssen alle Foren löschen, bevor Sie diese Kategorie löschen können.';

$lang['CLICK_RETURN_FORUMADMIN'] = 'Klicken Sie %sHier%s, um zur Forenverwaltung zurückzukehren.';

$lang['SHOW_ALL_FORUMS_ON_ONE_PAGE'] = 'Alle Foren auf einer Seite anzeigen.';

// Smiley Management
$lang['SMILEY_TITLE'] = 'Lächel-Editing-Dienstprogramm.';
$lang['SMILE_DESC'] = 'Von dieser Seite aus können Sie die Emoticons oder Smileys hinzufügen, entfernen und bearbeiten, die Ihre Benutzer in ihren Beiträgen und privaten Nachrichten verwenden können.';

$lang['SMILEY_CONFIG'] = 'Smiley-Konfiguration';
$lang['SMILEY_CODE'] = 'Smiley-Code';
$lang['SMILEY_URL'] = 'Smiley-Bilddatei.';
$lang['SMILEY_EMOT'] = 'Smiley Emotion';
$lang['SMILE_ADD'] = 'Neuen Smiley hinzufügen.';
$lang['SMILE'] = 'Lächeln';
$lang['EMOTION'] = 'Emotion';

$lang['SELECT_PAK'] = 'Wählen Sie ein Pack - (.pak-Datei).';
$lang['REPLACE_EXISTING'] = 'Vorhandenen Smiley ersetzen.';
$lang['KEEP_EXISTING'] = 'Vorhandenen Smiley beibehalten.';
$lang['SMILEY_IMPORT_INST'] = 'Sie sollten das Smiley-Paket entpacken und alle Dateien in das entsprechende Smiley-Verzeichnis für Ihre Installation hochladen.';
$lang['SMILEY_IMPORT'] = 'Smiley-Pack-Import';
$lang['CHOOSE_SMILE_PAK'] = 'Wählen Sie ein Smiley-Pack .pak-Datei.';
$lang['IMPORT'] = 'Smileys importieren.';
$lang['SMILE_CONFLICTS'] = 'Was sollte im Falle von Konflikten getan werden?';
$lang['DEL_EXISTING_SMILEYS'] = 'Löschen Sie die vorhandenen Smileys vor dem Import.';
$lang['IMPORT_SMILE_PACK'] = 'Smiley-Pack importieren.';
$lang['EXPORT_SMILE_PACK'] = 'Smiley-Pack erstellen.';
$lang['EXPORT_SMILES'] = 'Um ein Smiley-Pack aus Ihren derzeit installierten Smileys zu erstellen, klicken Sie %sHier%s, um die smiles.pak-Datei herunterzuladen.';

$lang['SMILEY_ADD_SUCCESS'] = 'Der Smilie wurde erfolgreich Hinzugefügt';
$lang['SMILEY_EDIT_SUCCESS'] = 'Der Smilie wurde erfolgreich aktualisiert';
$lang['SMILEY_IMPORT_SUCCESS'] = 'Das Smilie-Paket wurde erfolgreich importiert!';
$lang['SMILEY_DEL_SUCCESS'] = 'Der Smilie wurde erfolgreich entfernt';
$lang['CLICK_RETURN_SMILEADMIN'] = 'Klicken Sie %sHier%s, um zur Smiley-Verwaltung zurückzukehren.';

// User Management
$lang['USER_ADMIN'] = 'Benutzerverwaltung';
$lang['LOOK_UP_USER'] = 'Benutzer.';

// Group Management
$lang['GROUP_ADMINISTRATION'] = 'Gruppenverwaltung.';
$lang['GROUP_ADMIN_EXPLAIN'] = 'Von diesem Bereich aus können Sie alle Ihre Benutzergruppen verwalten.';
$lang['UPDATED_GROUP'] = 'Die Gruppe wurde erfolgreich aktualisiert';
$lang['ADDED_NEW_GROUP'] = 'Die neue Gruppe wurde erfolgreich erstellt';
$lang['DELETED_GROUP'] = 'Die Gruppe wurde erfolgreich gelöscht';
$lang['CREATE_NEW_GROUP'] = 'Neue Gruppe erstellen';
$lang['EDIT_GROUP'] = 'Gruppe Bearbeiten';
$lang['GROUP_STATUS'] = 'Gruppenstatus.';
$lang['GROUP_DELETE'] = 'Gruppe löschen';
$lang['GROUP_DELETE_CHECK'] = 'Löschen dieser Gruppe';
$lang['NO_GROUP_NAME'] = 'Geben Sie einen Namen für diese Gruppe';
$lang['NO_GROUP_MODERATOR'] = 'Sie müssen einen Moderator für diese Gruppe angeben.';
$lang['NO_GROUP_ACTION'] = 'Es wurde keine Aktion angegeben.';
$lang['DELETE_OLD_GROUP_MOD'] = 'Es wurde kein alter Gruppenmoderator gelöscht?';
$lang['DELETE_OLD_GROUP_MOD_EXPL'] = 'Wenn Sie den Gruppenmoderator ändern, aktivieren Sie dieses Kontrollkästchen, um den alten Moderator zu entfernen.';
$lang['CLICK_RETURN_GROUPSADMIN'] = 'Klicken Sie %sHier%s, um zur Gruppenverwaltung zurückzukehren.';
$lang['SELECT_GROUP'] = 'Wählen Sie eine Gruppe aus';
$lang['LOOK_UP_GROUP'] = 'Gruppen suchen.';

// Prune Administration
$lang['FORUM_PRUNE'] = 'Forum Prune';
$lang['FORUM_PRUNE_EXPLAIN'] = 'Dies wird jedes Thema löschen, das innerhalb der von Ihnen gewählten Anzahl von Tagen nicht gepostet wurde.';
$lang['DO_PRUNE'] = 'Do Prune.';
$lang['PRUNE_TOPICS_NOT_POSTED'] = 'Themen mit keinen Antworten in den gewählten Tagen beschneiden.';
$lang['TOPICS_PRUNED'] = 'Themen beschnitten.';
$lang['PRUNE_SUCCESS'] = 'Das Forum wurde erfolgreich beschnitten.';
$lang['NOT_DAYS'] = 'Die Prune-Tage wurden nicht ausgewählt.';

// Word censor
$lang['WORDS_TITLE'] = 'Wortzensur.';
$lang['WORDS_EXPLAIN'] = 'Von diesem Kontrollzentrum können Sie Wörter hinzufügen, bearbeiten und entfernen, die in Ihren Foren automatisch zensiert werden.';
$lang['WORD'] = 'Wort';
$lang['EDIT_WORD_CENSOR'] = 'Bearbeiten der Wortzensur.';
$lang['REPLACEMENT'] = 'Ersetzung.';
$lang['ADD_NEW_WORD'] = 'Neues Wort hinzufügen.';

$lang['MUST_ENTER_WORD'] = 'Sie müssen ein Wort und seine Ersetzung eingeben.';
$lang['NO_WORD_SELECTED'] = 'Kein Wort zur Bearbeitung ausgewählt.';

$lang['WORD_UPDATED'] = 'Die ausgewählte Wortzensur wurde erfolgreich aktualisiert';
$lang['WORD_ADDED'] = 'Die Wortzensur wurde erfolgreich Hinzugefügt';
$lang['WORD_REMOVED'] = 'Die ausgewählte Wortzensur wurde erfolgreich entfernt ';

$lang['CLICK_RETURN_WORDADMIN'] = 'Klicken Sie %sHier%s zurück zur Wortzensur-Administration.';

// Mass Email
$lang['MASS_EMAIL_EXPLAIN'] = 'Hier können Sie eine Nachricht an alle Benutzer oder alle Benutzer einer bestimmten Gruppe senden.';
$lang['COMPOSE'] = 'Verfassen';

$lang['RECIPIENTS'] = 'Empfänger';
$lang['ALL_USERS'] = 'Alle Benutzer';

$lang['MASS_EMAIL_MESSAGE_TYPE'] = 'E-Mail-Typ.';

// Ranks admin
$lang['RANKS_TITLE'] = 'Rang Administration';
$lang['RANKS_EXPLAIN'] = 'Mit diesem Formular können Sie Ränge hinzufügen, bearbeiten, anzeigen und löschen.';

$lang['ADD_NEW_RANK'] = 'Neuen Rang hinzufügen.';
$lang['RANK_TITLE'] = 'Rang Titel.';
$lang['STYLE_COLOR'] = 'Stil Rang.';
$lang['STYLE_COLOR_FAQ'] = 'Geben Sie eine Klasse an, um den Titel mit der gewünschten Farbe zu gestalten. Zum Beispiel: <i class="bold">colorAdmin</i>';
$lang['RANK_IMAGE'] = 'Rang-Bild';
$lang['RANK_IMAGE_EXPLAIN'] = 'Hiermit definieren Sie ein kleines Bild im Zusammenhang mit dem Rang';

$lang['MUST_SELECT_RANK'] = 'Sie müssen einen Rang auswählen.';

$lang['RANK_UPDATED'] = 'Der Rang wurde erfolgreich aktualisiert';
$lang['RANK_ADDED'] = 'Der Rang wurde erfolgreich hinzugefügt.';
$lang['RANK_REMOVED'] = 'Der Rang wurde erfolgreich gelöscht';
$lang['NO_UPDATE_RANKS'] = 'Der Rang wurde erfolgreich gelöscht. Benutzerkonten, die mit diesem Rang verbunden sind, wurden jedoch nicht aktualisiert. Sie müssen den Rang auf diesen Konten manuell zurücksetzen.';

$lang['CLICK_RETURN_RANKADMIN'] = 'Klicken Sie %sHier%s, um zur Rangverwaltung zurückzukehren.';

// Disallow Username Admin
$lang['DISALLOW_CONTROL'] = 'Benutzernamenverbot Kontrolle.';
$lang['DISALLOW_EXPLAIN'] = 'Hier können Sie Benutzernamen verwalten, die nicht verwendet werden dürfen. Unzulässige Benutzernamen dürfen ein Platzhalterzeichen * enthalten. Bitte beachten Sie, dass Sie keinen Benutzernamen angeben dürfen, der bereits registriert ist. Sie müssen diesen Namen zuerst löschen und dann verbieten.';

$lang['DELETE_DISALLOW_TITLE'] = 'Entfernen eines nicht zulässigen Benutzernamens.';
$lang['DELETE_DISALLOW_EXPLAIN'] = 'Sie können einen nicht zulässigen Benutzernamen entfernen, indem Sie den Benutzernamen aus dieser Liste auswählen und auf Senden klicken.';

$lang['ADD_DISALLOW'] = 'Hinzufügen';
$lang['ADD_DISALLOW_TITLE'] = 'Hinzufügen eines unzulässigen Benutzernamen';

$lang['NO_DISALLOWED'] = 'Keine Unzulässigen Benutzernamen';

$lang['DISALLOWED_DELETED'] = 'Der nicht zugelassene Benutzername wurde erfolgreich entfernt.';
$lang['DISALLOW_SUCCESSFUL'] = 'Der nicht zugelassene Benutzername wurde erfolgreich hinzugefügt.';
$lang['DISALLOWED_ALREADY'] = 'Der eingegebene Name konnte nicht verboten werden. Er ist entweder bereits in der Liste vorhanden, befindet sich in der Wortzensurliste oder ein passender Benutzername ist vorhanden.';

$lang['CLICK_RETURN_DISALLOWADMIN'] = 'Klicken Sie %sHier%s, um zur Verwaltung nicht zulässiger Benutzernamen zurückzukehren.';

// Version Check
$lang['VERSION_INFORMATION'] = 'Versionsinformationen';
$lang['UPDATE_AVAILABLE'] = 'Update verfügbar';
$lang['CHANGELOG'] = 'Änderungsprotokoll';

// Login attempts configuration
$lang['MAX_LOGIN_ATTEMPTS'] = 'Erlaubte Anmeldeversuche.';
$lang['MAX_LOGIN_ATTEMPTS_EXPLAIN'] = 'Die Anzahl der erlaubten Anmeldeversuche.';
$lang['LOGIN_RESET_TIME'] = 'Login-Sperrzeit.';
$lang['LOGIN_RESET_TIME_EXPLAIN'] = 'Zeit in Minuten, die der Benutzer warten muss, bis er sich nach Überschreitung der zulässigen Anmeldeversuche wieder anmelden darf.';

// Permissions List
$lang['PERMISSIONS_LIST'] = 'Berechtigungsliste.';
$lang['AUTH_CONTROL_CATEGORY'] = 'Steuerung der Kategorie-Berechtigungen.';
$lang['FORUM_AUTH_LIST_EXPLAIN'] = 'Dies bietet eine Übersicht über die Berechtigungsstufen jedes Forums. Sie können diese Berechtigungen entweder einfach oder auf fortgeschrittene Weise bearbeiten, indem Sie auf den Forennamen klicken. Denken Sie daran, dass die Änderung der Berechtigungsstufe der Foren beeinflusst, welche Benutzer die verschiedenen Operationen innerhalb der Foren durchführen können.';
$lang['CAT_AUTH_LIST_EXPLAIN'] = 'Dies bietet eine Übersicht über die Berechtigungsstufen jedes Forums innerhalb dieser Kategorie. Sie können die Berechtigungen der einzelnen Foren entweder einfach oder auf fortgeschrittene Weise bearbeiten, indem Sie auf den Forennamen klicken. Alternativ können Sie die Berechtigungen für alle Foren in dieser Kategorie über die Dropdown-Menüs am Ende der Seite festlegen. Denken Sie daran, dass die Änderung der Berechtigungsstufe der Foren beeinflusst, welche Benutzer die verschiedenen Operationen innerhalb der Foren durchführen können.';
$lang['FORUM_AUTH_LIST_EXPLAIN_ALL'] = 'Alle Benutzer';
$lang['FORUM_AUTH_LIST_EXPLAIN_REG'] = 'Alle registrierten Benutzer';
$lang['FORUM_AUTH_LIST_EXPLAIN_PRIVATE'] = 'Nur Benutzer mit speziellen Berechtigungen';
$lang['FORUM_AUTH_LIST_EXPLAIN_MOD'] = 'Nur die Moderatoren dieses Forums';
$lang['FORUM_AUTH_LIST_EXPLAIN_ADMIN'] = 'Nur Administratoren';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_VIEW'] = '%s kann dieses Forum anzeigen.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_READ'] = '%s kann Beiträge in diesem Forum lesen.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_POST'] = '%s kann in diesem Forum Beiträge posten.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_REPLY'] = '%s kann auf Beiträge in diesem Forum antworten';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_EDIT'] = '%s kann Beiträge in diesem Forum bearbeiten.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_DELETE'] = '%s kann Beiträge in diesem Forum löschen.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_STICKY'] = '%s kann in diesem Forum sticky Themen posten.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_ANNOUNCE'] = '%s können Mitteilungen in diesem Forum posten.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_VOTE'] = '%s kann an Umfragen in diesem Forum abstimmen.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_POLLCREATE'] = '%s können in diesem Forum Umfragen erstellen.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_ATTACHMENTS'] = '%s kann Anhänge posten.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_DOWNLOAD'] = '%s kann Anhänge herunterladen.';

// Tooltips for disabled permissions
$lang['AUTH_TOOLTIP_FORUM_MODE'] = 'Forum-Modus: %s — kann nicht geändert werden';
$lang['AUTH_TOOLTIP_MOD_OVERRIDE'] = 'Berechtigung über "Moderator" aktiviert';
$lang['AUTH_TOOLTIP_GROUP_HAS'] = 'Berechtigung durch die Gruppe vergeben';

// Misc
$lang['SF_SHOW_ON_INDEX'] = 'Zeigen Sie auf der Hauptseite.';
$lang['SF_PARENT_FORUM'] = 'Elternforum.';
$lang['SF_NO_PARENT'] = 'Kein Eltern-Forum.';
$lang['SYNC'] = 'Sync.';

// Mods
$lang['MAX_NEWS_TITLE'] = 'Maximale Länge der Nachrichten.';
$lang['NEWS_COUNT'] = 'Wie viele Nachrichten sollen angezeigt werden';
$lang['NEWS_FORUM_ID'] = 'Aus welchen Foren anzeigen <br /> <h6>Für mehrere Foren IDs angeben, durch Kommas getrennt. Beispiel: 1,2,3</h6>';
$lang['TRACKER_STATS'] = 'Statistiken über den Tracker.';
$lang['WHOIS_INFO'] = 'Informationen zur IP-Adresse.';
$lang['SHOW_MOD_HOME_PAGE'] = 'Zeigen Sie auf die Moderatoren index.php.';
$lang['SHOW_BOARD_STARTED_INDEX'] = 'Startdatum des Boards in index.php anzeigen';
$lang['PREMOD_HELP'] = '<h4><span class="tor-icon tor-dup">&#8719;</span> Vormoderation</h4> <h6>Wenn Sie in diesem Abschnitt, einschließlich Unterabschnitten, keine Verteilungen mit dem Status v, # oder T haben, erhält die Verteilung automatisch diesen Status</h6>';
$lang['TOR_COMMENT'] = '<h4>Kommentar zum Status einer Verteilung</h4> <h6>Der Kommentar ermöglicht es Ihnen, den Fehlern, die dem Releaser gemacht wurden, aufzuzeigen. Wenn die Status unvollständig sind, steht dem Freigabemanager ein Formular zur Behebung der Freigabe zur Verfügung.';
$lang['SEED_BONUS_ADD'] = '<h4>Hinzufügen von Seed-Boni</h4> <h6>Anzahl der Verteilungen, die der Benutzer ausgegeben hat, und die Höhe der Boni dafür (Ladezeiten pro Stunde).</h6>';
$lang['SEED_BONUS_RELEASE'] = 'N-Anzahl der Freigaben.';
$lang['SEED_BONUS_POINTS'] = 'Boni in einer Stunde.';
$lang['SEED_BONUS_TOR_SIZE'] = '<h4>Minimale Verteilung, für die Boni vergeben werden sollen.</h4> <h6>Wenn Sie Boni für alle Verteilungen berechnen möchten, lassen Sie das Feld leer.</h6>';
$lang['SEED_BONUS_USER_REGDATA'] = '<h4>Minimale Länge des Benutzers Trackers, nach der Boni vergeben werden.</h4> <h6>Wenn Sie Boni für alle Benutzer aufrechnen möchten, lassen Sie das Feld leer.</h6>';
$lang['SEED_BONUS_WARNING'] = 'ACHTUNG! Seed-Boni sollten in aufsteigender Reihenfolge sein.';
$lang['SEED_BONUS_EXCHANGE'] = 'Exchange Sid Boni konfigurieren';
$lang['SEED_BONUS_ROPORTION'] = 'Proporz zusätzlich für einen Austausch von Boni auf GB';

$lang['ALLOWED'] = 'Erlaubt';
$lang['RETURN_CONFIG'] = '%sZur Konfiguration zurück%s';
$lang['CONFIG_UPD'] = 'Konfiguration erfolgreich aktualisiert.';

// Forum config
$lang['BT_SELECT_FORUMS'] = 'Forum-Optionen:';
$lang['BT_SELECT_FORUMS_EXPL'] = 'halten Sie <i>Ctrl</i> während der Auswahl mehrerer Foren';

$lang['REG_TORRENTS'] = 'Torrents registrieren';
$lang['DISALLOWED'] = 'Verboten';
$lang['ALLOW_REG_TRACKER'] = 'Erlaubte Foren für die Registrierung von .torrents auf dem Tracker.';
$lang['ALLOW_PORNO_TOPIC'] = 'Erlauben Sie das Posten von Inhalten 18+';
$lang['SELF_MODERATED'] = 'Benutzer können <b>ihre</b> Themen in ein anderes Forum verschieben.';

$lang['BT_ANNOUNCE_URL_HEAD'] = 'Ankündigungs-URL';
$lang['BT_ANNOUNCE_URL'] = 'Ankündigungs-URL';
$lang['BT_ANNOUNCE_URL_EXPL'] = 'Sie können zusätzliche erlaubte URLs in "includes/torrent_announce_urls.php" definieren.';
$lang['BT_DISABLE_DHT'] = 'DHT-Netzwerk deaktivieren.';
$lang['BT_DISABLE_DHT_EXPL'] = 'Deaktivieren Sie Peer-Exchange und DHT (empfohlen für private Netzwerke, nur URL-Ankündigung).';
$lang['BT_PRIVATE_TRACKER'] = 'Dieser Tracker ist privat: Dateiliste (für Gäste), DHT | PEX sind deaktiviert';
$lang['BT_PRIVATE_TORRENT'] = 'Der Ersteller dieses Torrents hat ihn privat gemacht';
$lang['BT_CHECK_ANNOUNCE_URL'] = 'Überprüfen Sie die Ankündigungs-URL.';
$lang['BT_CHECK_ANNOUNCE_URL_EXPL'] = 'Registrieren Sie sich auf dem Tracker nur mit erlaubten URLs.';
$lang['BT_REPLACE_ANN_URL'] = 'Ersetzen Sie die Ankündigungs-URL.';
$lang['BT_REPLACE_ANN_URL_EXPL'] = 'Ersetzen Sie die ursprüngliche Ankündigungs-URL mit Ihrem Standard in .torrent-Dateien.';
$lang['BT_DEL_ADDIT_ANN_URLS'] = 'Entfernen Sie alle zusätzlichen Ankündigungs-URLs.';
$lang['BT_DEL_ADDIT_ANN_URLS_EXPL'] = 'Wenn der Torrent die Adressen von anderen Trackern enthält, werden diese entfernt.';

$lang['BT_SHOW_PEERS_HEAD'] = 'Peers-Liste';
$lang['BT_SHOW_PEERS'] = 'Zeigen Sie Peers (Seeder und Leecher).';
$lang['BT_SHOW_PEERS_EXPL'] = 'Dies zeigt die Seeder/Leecher-Liste über dem Thema mit Torrent.';
$lang['BT_SHOW_PEERS_MODE'] = 'Standardmäßig Peers anzeigen als:';
$lang['BT_SHOW_PEERS_MODE_COUNT'] = 'Nur zählen.';
$lang['BT_SHOW_PEERS_MODE_NAMES'] = 'Nur Namen.';
$lang['BT_SHOW_PEERS_MODE_FULL'] = 'Volle Details.';
$lang['BT_ALLOW_SPMODE_CHANGE'] = '"Vollen Details" -Modus aktivieren.';
$lang['BT_ALLOW_SPMODE_CHANGE_EXPL'] = 'Wenn "Nein", steht nur der Standard-Peer-Anzeigemodus zur Verfügung.';
$lang['BT_SHOW_IP_ONLY_MODER'] = 'Peers\' <b>IP</b>s sind nur für Moderatoren sichtbar.';
$lang['BT_SHOW_PORT_ONLY_MODER'] = 'Peers\' <b>Port</b>s sind nur für Moderatoren sichtbar.';

$lang['BT_SHOW_DL_LIST_HEAD'] = 'DL-Liste';
$lang['BT_SHOW_DL_LIST'] = 'Zeigen Sie die DL-Liste in den Download-Themen.';
$lang['BT_DL_LIST_ONLY_1ST_PAGE'] = 'Zeigen Sie die DL-Liste nur auf der ersten Seite in Themen.';
$lang['BT_DL_LIST_ONLY_COUNT'] = 'Nur die Anzahl der Benutzer anzeigen.';
$lang['BT_SHOW_DL_LIST_BUTTONS'] = 'Schaltflächen anzeigen, um den DL-Status manuell zu ändern.';
$lang['BT_SHOW_DL_BUT_WILL'] = $lang['DLWILL'];
$lang['BT_SHOW_DL_BUT_DOWN'] = $lang['DLDOWN'];
$lang['BT_SHOW_DL_BUT_COMPL'] = $lang['DLCOMPLETE'];
$lang['BT_SHOW_DL_BUT_CANCEL'] = $lang['DLCANCEL'];

$lang['BT_ADD_AUTH_KEY_HEAD'] = 'Passkey.';
$lang['BT_ADD_AUTH_KEY'] = 'Aktivieren Sie das Hinzufügen eines Zugangsschlüssels zu den Torrent-Dateien vor dem Download.';

$lang['BT_TOR_BROWSE_ONLY_REG_HEAD'] = 'Torrent-Browser (Tracker).';
$lang['BT_TOR_BROWSE_ONLY_REG'] = 'Torrent-Browser (tracker.php) nur für angemeldete Benutzer zugänglich';
$lang['BT_SEARCH_BOOL_MODE'] = 'Boolean-Volltextsuche erlauben.';
$lang['BT_SEARCH_BOOL_MODE_EXPL'] = '* , + , - in der Suche nutzen';

$lang['BT_SHOW_DL_STAT_ON_INDEX_HEAD'] = 'Sonstiges.';
$lang['BT_SHOW_DL_STAT_ON_INDEX'] = "Benutzer UL/DL-Statistiken oben auf der Hauptseite des Forums anzeigen";
$lang['BT_NEWTOPIC_AUTO_REG'] = 'Automatisch Torrent auf dem Tracker für neue Themen registrieren.';
$lang['BT_SET_DLTYPE_ON_TOR_REG'] = 'Ändern Sie den Themenstatus in "Download" während der Registrierung von Torrent auf dem Tracker.';
$lang['BT_SET_DLTYPE_ON_TOR_REG_EXPL'] = 'ändern Thema-Typ auf "Download" unabhängig von der Forum-Einstellungen.';
$lang['BT_UNSET_DLTYPE_ON_TOR_UNREG'] = 'Ändern Sie den Themenstatus in "Normal", während Sie den Torrent vom Tracker abmelden.';

// Release
$lang['TEMPLATE_DISABLE'] = 'Vorlage deaktiviert';
$lang['FOR_NEW_TEMPLATE'] = 'Für neue Muster!';
$lang['QUESTION'] = 'Bestätigen Sie, sind Sie sicher, dass Sie diese Aktion durchführen möchten?';

$lang['CRON_LIST'] = 'Cron-Liste';
$lang['CRON_ID'] = 'ID';
$lang['CRON_ACTIVE'] = 'Auf';
$lang['CRON_ACTIVE_EXPL'] = 'Aktive Aufgaben';
$lang['CRON_TITLE'] = 'Titel';
$lang['CRON_SCRIPT'] = 'Skript';
$lang['CRON_SCHEDULE'] = 'Zeitplan';
$lang['CRON_LAST_RUN'] = 'Letzte Ausführung';
$lang['CRON_NEXT_RUN'] = 'Nächster Lauf.';
$lang['CRON_RUN_COUNT'] = 'Läuft';
$lang['CRON_EXECUTION_TIME'] = 'Ausführungszeit';
$lang['CRON_MANAGE'] = 'Verwalten';
$lang['CRON_DISABLED_WARNING'] = 'Warnung! Das Ausführen von Cron-Skripten ist deaktiviert. Um es zu aktivieren, setzen Sie die Variable APP_CRON_ENABLED.';

$lang['CRON_ENABLED'] = 'Cron aktiviert';
$lang['CRON_CHECK_INTERVAL'] = 'Cron-Intervall (Sek.)';

$lang['WITH_SELECTED'] = 'Mit ausgewählten';
$lang['NOTHING'] = 'nichts tun';
$lang['CRON_RUN'] = 'Laufen.';
$lang['CRON_DEL'] = 'Löschen';
$lang['CRON_DISABLE'] = 'Deaktivieren';
$lang['CRON_ENABLE'] = 'Aktivieren';
$lang['DELETE_JOB'] = 'Sind Sie sicher, dass Sie den Cron-Job löschen möchten?';
$lang['CRON_WORKS'] = 'Cron funktioniert derzeit oder ist defekt -> ';
$lang['REPAIR_CRON'] = 'Cron reparieren.';

$lang['CRON_EDIT_HEAD_EDIT'] = 'Job bearbeiten.';
$lang['CRON_EDIT_HEAD_ADD'] = 'Aufgabe hinzufügen.';
$lang['CRON_SCRIPT_EXPL'] = 'Name des Skripts von "includes/cron/jobs/".';
$lang['SCHEDULE'] = [
    'select' => '&raquo; Start auswählen.',
    'hourly' => 'Stündlich.',
    'daily' => 'Täglich.',
    'weekly' => 'Wöchentlich.',
    'monthly' => 'Monatlich.',
    'interval' => 'Intervall.',
];
$lang['NOSELECT'] = 'Nicht wählen.';
$lang['RUN_DAY'] = 'Ausführen Tag.';
$lang['RUN_DAY_EXPL'] = 'Der Tag, wenn dieser Job ausgeführt wird.';
$lang['RUN_TIME'] = 'Laufzeit.';
$lang['RUN_TIME_EXPL'] = 'Die Zeit, wenn dieser Job ausgeführt wird (z.B. 05:00:00).';
$lang['RUN_ORDER'] = 'Ausführungsreihenfolge.';
$lang['LAST_RUN'] = 'Letzte Ausführung';
$lang['NEXT_RUN'] = 'Nächster Lauf.';
$lang['RUN_INTERVAL'] = 'Laufintervall.';
$lang['RUN_INTERVAL_EXPL'] = 'z.B. 00:10:00.';
$lang['LOG_ENABLED'] = 'Log aktiviert.';
$lang['LOG_FILE'] = 'Protokolldatei.';
$lang['LOG_FILE_EXPL'] = 'Die Datei zum Speichern des Protokolls.';
$lang['LOG_SQL_QUERIES'] = 'Log-SQL-Abfragen.';
$lang['FORUM_DISABLE'] = 'Board deaktivieren.';
$lang['BOARD_DISABLE_EXPL'] = 'Deaktivieren Sie das Board, wenn dieser Job ausgeführt wird.';
$lang['RUN_COUNTER'] = 'Zählen.';

$lang['JOB_REMOVED'] = 'Der Job wurde erfolgreich entfernt';
$lang['SCRIPT_DUPLICATE'] = 'Ein Cron-Job mit diesem Skript existiert bereits';
$lang['TITLE_DUPLICATE'] = 'Ein Cron-Job mit diesem Titel existiert bereits';
$lang['CLICK_RETURN_JOBS_ADDED'] = '%sZurück zum Hinzufügen von Jobs%s';
$lang['CLICK_RETURN_JOBS'] = '%sZurück zum Aufgabenscheduler%s.';

$lang['REBUILD_SEARCH'] = 'Rebuild Search Index';
$lang['REBUILD_SEARCH_DESC'] = 'Dieses Mod wird jeden Beitrag in Ihrem Forum indizieren und die Suchtabellen neu aufbauen. Sie können jederzeit anhalten, und beim nächsten Ausführen haben Sie die Möglichkeit, von dort fortzufahren, wo Sie aufgehört haben.<br /><br />Es kann eine Weile dauern, bis der Fortschritt angezeigt wird (je nach "Beiträge pro Zyklus" und "Zeitlimit"), daher bewegen Sie sich bitte nicht von der Fortschrittsseite, bis es abgeschlossen ist, es sei denn, Sie möchten es unterbrechen.';

// Input screen
$lang['STARTING_POST_ID'] = 'Ab post_id';
$lang['STARTING_POST_ID_EXPLAIN'] = 'Erster Beitrag, von dem aus die Verarbeitung beginnt.<br />Sie können wählen, ob Sie am Anfang oder bei dem Beitrag, bei dem Sie zuletzt gestoppt haben, beginnen möchten.';

$lang['START_OPTION_BEGINNING'] = 'von Anfang an starten';
$lang['START_OPTION_CONTINUE'] = 'Fortsetzen von zuletzt gestoppt';

$lang['CLEAR_SEARCH_TABLES'] = 'Suchtabellen löschen';
$lang['CLEAR_SEARCH_TABLES_EXPLAIN'] = '';
$lang['CLEAR_SEARCH_NO'] = 'KEINE';
$lang['CLEAR_SEARCH_DELETE'] = 'LÖSCHEN';
$lang['CLEAR_SEARCH_TRUNCATE'] = 'TRUNCATE';

$lang['NUM_OF_POSTS'] = 'Anzahl der Beiträge';
$lang['NUM_OF_POSTS_EXPLAIN'] = 'Anzahl der Beiträge zur Verarbeitung<br />Es wird automatisch mit der Anzahl der insgesamt verbleibenden Beiträge in der Datenbank gefüllt.';

$lang['POSTS_PER_CYCLE'] = 'Beiträge pro Zyklus';
$lang['POSTS_PER_CYCLE_EXPLAIN'] = 'Anzahl der Beiträge, die pro Zyklus verarbeitet werden<br />Halten Sie sie niedrig, um PHP/Webserver-Timeouts zu vermeiden.';

$lang['REFRESH_RATE'] = 'Bildwiederholfrequenz';
$lang['REFRESH_RATE_EXPLAIN'] = 'Wie viel Zeit (Sekunden) untätig bleiben, bevor Sie zum nächsten Verarbeitungszyklus wechseln<br />In der Regel müssen Sie dies nicht ändern.';

$lang['TIME_LIMIT'] = 'Frist';
$lang['TIME_LIMIT_EXPLAIN'] = 'Wie viel Zeit (Sekunden) die Nachbearbeitung dauern kann, bevor zum nächsten Zyklus übergegangen wird';
$lang['TIME_LIMIT_EXPLAIN_WEBSERVER'] = '<i>Ihr Webserver hat ein Timeout von %s Sekunden konfiguriert, bleiben Sie also unter diesem Wert.</i>';

// Information strings
$lang['INFO_PROCESSING_STOPPED'] = 'Sie haben die Verarbeitung zuletzt bei post_id %s (%s verarbeitete Beiträge) am %s gestoppt.';
$lang['INFO_PROCESSING_ABORTED'] = 'Sie haben die Verarbeitung zuletzt bei post_id %s (%s verarbeitete Beiträge) am %s abgebrochen.';
$lang['INFO_PROCESSING_ABORTED_SOON'] = 'Bitte warten Sie einige Minuten, bevor Sie weiter...';
$lang['INFO_PROCESSING_FINISHED'] = 'Sie haben die Verarbeitung erfolgreich abgeschlossen (%s verarbeitete Beiträge) am %s.';
$lang['INFO_PROCESSING_FINISHED_NEW'] = 'Sie haben die Verarbeitung erfolgreich bei post_id %s (%s verarbeitete Beiträge) am %s abgeschlossen,<br />doch nach diesem Datum wurden %s neue(n) Beitrag(e) hinzugefügt.';

// Progress screen
$lang['REBUILD_SEARCH_PROGRESS'] = 'Rebuild Search Fortschritt';

$lang['PROCESSED_POST_IDS'] = 'Verarbeitete Post-IDs : %s - %s';
$lang['TIMER_EXPIRED'] = 'Timer abgelaufen %s Sek. ';
$lang['CLEARED_SEARCH_TABLES'] = 'Suchtabellen gelöscht.';
$lang['DELETED_POSTS'] = '%s Beiträge wurden von Ihren Benutzern während der Verarbeitung gelöscht.';
$lang['PROCESSING_NEXT_POSTS'] = 'Die Verarbeitung der nächsten %s Beiträge. Bitte warten Sie...';
$lang['ALL_SESSION_POSTS_PROCESSED'] = 'Alle Beiträge in der aktuellen Sitzung wurden verarbeitet.';
$lang['ALL_POSTS_PROCESSED'] = 'Alle Beiträge wurden erfolgreich verarbeitet.';
$lang['ALL_TABLES_OPTIMIZED'] = 'Alle Suchtabellen wurden erfolgreich optimiert.';

$lang['PROCESSING_POST_DETAILS'] = 'Beitrag wird verarbeitet.';
$lang['CURRENT_SESSION'] = 'Aktuelle Sitzung';
$lang['TOTAL'] = 'Insgesamt';

$lang['PROCESS_DETAILS'] = 'von <b>%s</b> zu <b>%s</b> (von insgesamt <b>%s</b>)';
$lang['PERCENT_COMPLETED'] = '%s %% abgeschlossen.';

$lang['PROCESSING_TIME_DETAILS'] = 'Details zur aktuellen Sitzung.';
$lang['TIME_LAST_POSTS'] = 'Letzte %s Beitrag(e)';
$lang['TIME_FROM_THE_BEGINNING'] = 'Von Anfang an';
$lang['TIME_AVERAGE'] = 'Durchschnitt pro Zyklus';
$lang['TIME_ESTIMATED'] = 'Schätzungsweise bis zum Abschluss.';

$lang['SIZE_ESTIMATED'] = 'Geschätzt nach Abschluss.';
$lang['SIZE_SEARCH_TABLES'] = 'Größe der Suchtabellen.';

$lang['POSTS_LAST_CYCLE'] = 'Verarbeitete Beiträge im letzten Zyklus.';

$lang['INFO_ESTIMATED_VALUES'] = '(*) Alle geschätzten Werte werden ungefähr berechnet<br />auf der aktuellen fertiggestellten Prozentzahl und stellen möglicherweise nicht die tatsächlichen Endwerte dar.<br />Wenn der Prozentsatz steigt, werden die geschätzten Werte näher an die tatsächlichen Werte herankommen.';

$lang['CLICK_RETURN_REBUILD_SEARCH'] = 'Klicken Sie %shier%s, um zur Rekonstruktion der Suche zurückzukehren.';
$lang['REBUILD_SEARCH_ABORTED'] = 'Die Rekonstruktion der Suche wurde bei post_id %s abgebrochen.<br /><br />Wenn Sie während der Verarbeitung abgebrochen haben, müssen Sie einige Minuten warten, bevor Sie die Rekonstruktion der Suche erneut durchführen, damit der letzte Zyklus abgeschlossen werden kann.';
$lang['WRONG_INPUT'] = 'Sie trat ein paar falsche Werte. Bitte überprüfen Sie Ihre Eingaben und versuchen Sie es erneut.';

// Buttons
$lang['PROCESSING'] = 'Verarbeitung...';
$lang['FINISHED'] = 'Fertig';

$lang['BOT_TOPIC_MOVED_FROM_TO'] = 'Das Thema wurde vom Forum [b]%s[/b] zum Forum [b]%s[/b] verschoben.[br][b]Grund für die Verschiebung:[/b] %s[br][br]%s';
$lang['BOT_MESS_SPLITS'] = 'Thema wurde aufgeteilt. Neues Thema - [b]%s[/b][br][br]%s';
$lang['BOT_TOPIC_SPLITS'] = 'Thema wurde geteilt von [b]%s[/b][br][br]%s';

$lang['CALLSEED'] = 'Rufe Seeds';
$lang['CALLSEED_EXPLAIN'] = 'Bitte beachten Sie die Aufforderung zur Rückkehr zur Verteilung.';
$lang['CALLSEED_SUBJECT'] = 'Download-Hilfe %s';
$lang['CALLSEED_TEXT'] = 'Hallo![br]Ihre Hilfe wird bei der Veröffentlichung [url=%s]%s[/url] benötigt.[br]Wenn Sie sich entschließen zu helfen, aber die Torrent-Datei bereits gelöscht haben, können Sie sie [url=%s]hier herunterladen[/url].[br][br]Ich hoffe auf Ihre Hilfe!';
$lang['CALLSEED_MSG_OK'] = 'Nachricht wurde gesendet an alle diejenigen, die diese Version heruntergeladen';
$lang['CALLSEED_MSG_SPAM'] = 'Die Anfrage wurde bereits einmal erfolgreich gesendet (vermutlich nicht Sie).<br /><br />Die nächste Gelegenheit, eine Anfrage zu senden, ist <b>%s</b>.';
$lang['CALLSEED_HAVE_SEED'] = 'Das Thema benötigt keine Hilfe (<b>Seeders:</b> %d).';

$lang['LOG_ACTION']['LOG_TYPE'] = [
    'mod_topic_delete' => 'Thema:<br /> <b>deleted</b>',
    'mod_topic_move' => 'Thema:<br /> <b>moved</b>',
    'mod_topic_lock' => 'Thema:<br /> <b>closed</b>',
    'mod_topic_unlock' => 'Thema:<br /> <b>opened</b>',
    'mod_topic_split' => 'Thema:<br /> <b>split</b>',
    'mod_topic_set_downloaded' => 'Thema:<br /> <b>heruntergeladen gesetzt</b>',
    'mod_topic_unset_downloaded' => 'Thema:<br /> <b>heruntergeladen zurückgesetzt</b>',
    'mod_topic_change_tor_status' => 'Thema:<br /> <b>Torrent-Status geändert</b>',
    'mod_topic_change_tor_type' => 'Thema:<br /> <b>Torrent-Typ geändert</b>',
    'mod_topic_tor_unregister' => 'Thema:<br /> <b>Torrent abgemeldet</b>',
    'mod_topic_tor_register' => 'Thema:<br /> <b>Torrent registriert</b>',
    'mod_topic_tor_delete' => 'Thema:<br /> <b>Torrent gelöscht</b>',
    'mod_topic_renamed' => 'Thema:<br /> <b>umbenannt</b>',
    'mod_topic_poll_started' => 'Thema:<br /> <b>Umfrage gestartet</b>',
    'mod_topic_poll_finished' => 'Thema:<br /> <b>Umfrage abgeschlossen</b>',
    'mod_topic_poll_deleted' => 'Thema:<br /> <b>Umfrage gelöscht</b>',
    'mod_topic_poll_added' => 'Thema:<br /> <b>Umfrage hinzugefügt</b>',
    'mod_topic_poll_edited' => 'Thema:<br /> <b>Umfrage bearbeitet</b>',
    'mod_post_delete' => 'Post:<br /> <b>gelöscht</b>.',
    'mod_post_pin' => 'Post:<br /> <b>angeheftet</b>',
    'mod_post_unpin' => 'Post:<br /> <b>nicht angeheftet</b>',
    'adm_user_delete' => 'Benutzer:<br /> <b>gelöscht</b>.',
    'adm_user_ban' => 'Benutzer:<br /> <b>gesperrt</b>.',
    'adm_user_unban' => 'Benutzer:<br /> <b>entsperrt</b>.',
];

$lang['ACTS_LOG_ALL_ACTIONS'] = 'Alle Aktionen';
$lang['ACTS_LOG_SEARCH_OPTIONS'] = 'Aktionen Protokoll: Suchoptionen.';
$lang['ACTS_LOG_FORUM'] = 'Forum';
$lang['ACTS_LOG_ACTION'] = 'Aktion';
$lang['ACTS_LOG_LOGS_FROM'] = 'Protokolle von ';
$lang['ACTS_LOG_FIRST'] = 'beginnt mit';
$lang['ACTS_LOG_DAYS_BACK'] = 'Tage zurück';
$lang['ACTS_LOG_TOPIC_MATCH'] = 'Thema-Titel-Übereinstimmung';
$lang['ACTS_LOG_SORT_BY'] = 'Sortieren nach';
$lang['ACTS_LOG_LOGS_ACTION'] = 'Aktion';
$lang['ACTS_LOG_USERNAME'] = 'Benutzername';
$lang['ACTS_LOG_TIME'] = 'Zeit';
$lang['ACTS_LOG_INFO'] = 'Info';
$lang['ACTS_LOG_FILTER'] = 'Filter';
$lang['ACTS_LOG_TOPICS'] = 'Themen:';
$lang['ACTS_LOG_OR'] = 'oder';

$lang['RELEASE'] = 'Freigabe-Vorlagen';
$lang['RELEASES'] = 'Freigaben';

$lang['BACK'] = 'Zurück';
$lang['NEW_RELEASE'] = 'Neuerscheinung';
$lang['NEXT'] = 'Weiter';
$lang['ALL'] = 'Alle';

$lang['TPL_EMPTY_FIELD'] = 'Sie müssen das Feld <b>%s</b> ausfüllen';
$lang['TPL_EMPTY_SEL'] = 'Sie müssen <b>%s</b> auswählen';
$lang['TPL_NOT_NUM'] = '<b>%s</b> - Keine Zahl';
$lang['TPL_NOT_URL'] = '<b>%s</b> – Muss eine https://-URL sein';
$lang['TPL_NOT_IMG_URL'] = '<b>%s</b> - Muss https:// IMG_URL sein';
$lang['TPL_PUT_INTO_SUBJECT'] = 'Setzen Sie es in den Betreff';
$lang['TPL_POSTER'] = 'Poster';
$lang['TPL_REQ_FILLING'] = 'Erfordert Ausfüllung';
$lang['TPL_NEW_LINE'] = 'Neue Zeile';
$lang['TPL_NEW_LINE_AFTER'] = 'Neue Zeile nach dem Titel';
$lang['TPL_NUM'] = 'Anzahl';
$lang['TPL_URL'] = 'URL';
$lang['TPL_IMG'] = 'Bild';
$lang['TPL_PRE'] = 'Pre';
$lang['TPL_SPOILER'] = 'Spoiler';
$lang['TPL_IN_LINE'] = 'in der gleichen Zeile';
$lang['TPL_HEADER_ONLY'] = 'Nur in einem Titel';

$lang['SEARCH_INVALID_USERNAME'] = 'Ungültiger Benutzername für die Suche eingegeben';
$lang['SEARCH_INVALID_EMAIL'] = 'Ungültige E-Mail-Adresse für die Suche eingegeben';
$lang['SEARCH_INVALID_IP'] = 'Ungültige IP-Adresse für Suche eingegeben';
$lang['SEARCH_INVALID_GROUP'] = 'Ungültige Gruppe zur Suche eingegeben';
$lang['SEARCH_INVALID_RANK'] = 'Ungültiger Rang für die Suche eingegeben';
$lang['SEARCH_INVALID_DATE'] = 'Ungültiges Datum für die Suche eingegeben';
$lang['SEARCH_INVALID_POSTCOUNT'] = 'Für die Suche wurde eine ungültige Anzahl von Beiträgen eingegeben';
$lang['SEARCH_INVALID_USERFIELD'] = 'Ungültige USERFIELD-Daten eingegeben';
$lang['SEARCH_INVALID_LASTVISITED'] = 'Ungültiges Datum für zuletzt besuchte Suche eingegeben';
$lang['SEARCH_INVALID_LANGUAGE'] = 'Ungültige Sprache ausgewählt';
$lang['SEARCH_INVALID_TIMEZONE'] = 'Ungültige Zeitzone ausgewählt';
$lang['SEARCH_INVALID_MODERATORS'] = 'Ungültiges Forum ausgewählt';
$lang['SEARCH_INVALID'] = 'Ungültige Suche';
$lang['SEARCH_INVALID_DAY'] = 'Der Tag, den Sie eingegeben haben, ist ungültig';
$lang['SEARCH_INVALID_MONTH'] = 'Der Monat, den Sie eingegeben haben, ist ungültig';
$lang['SEARCH_INVALID_YEAR'] = 'Das Jahr, das Sie eingegeben haben, ist ungültig';
$lang['SEARCH_FOR_USERNAME'] = 'Suche nach passendem Benutzernamen %s';
$lang['SEARCH_FOR_EMAIL'] = 'Suche nach passenden E-Mail-Adressen %s';
$lang['SEARCH_FOR_IP'] = 'Suche nach passenden IP-Adressen %s';
$lang['SEARCH_FOR_DATE'] = 'Suche nach Benutzern, die sich %s %d/%d/%d angeschlossen haben';
$lang['SEARCH_FOR_GROUP'] = 'Suche nach Gruppenmitgliedern von %s';
$lang['SEARCH_FOR_RANK'] = 'Suche nach Rang von %s';
$lang['SEARCH_FOR_BANNED'] = 'Suche nach gesperrten Benutzern';
$lang['SEARCH_FOR_ADMINS'] = 'Suche nach Administratoren';
$lang['SEARCH_FOR_MODS'] = 'Suche nach Moderatoren';
$lang['SEARCH_FOR_DISABLED'] = 'Suche nach deaktivierten Benutzern';
$lang['SEARCH_FOR_POSTCOUNT_GREATER'] = 'Suche nach Benutzern mit mehr als %d Beiträgen';
$lang['SEARCH_FOR_POSTCOUNT_LESSER'] = 'Suche nach Benutzern mit weniger als %d Beiträgen';
$lang['SEARCH_FOR_POSTCOUNT_RANGE'] = 'Suche nach Benutzern mit einer Beitragszahl zwischen %d und %d';
$lang['SEARCH_FOR_POSTCOUNT_EQUALS'] = 'Suche nach Benutzern mit einer Beitragszahl von %d';
$lang['SEARCH_FOR_USERFIELD_TWITTER'] = 'Die Suche nach Benutzern mit einem Twitter-Matching %s.';
$lang['SEARCH_FOR_USERFIELD_WEBSITE'] = 'Suche nach Benutzern mit einer Website, die mit %s übereinstimmt';
$lang['SEARCH_FOR_USERFIELD_LOCATION'] = 'Suche nach Benutzern mit einem Standort, der %s entspricht';
$lang['SEARCH_FOR_USERFIELD_INTERESTS'] = 'Suche nach Benutzern mit dem Interessenfeld, das %s entspricht';
$lang['SEARCH_FOR_USERFIELD_OCCUPATION'] = 'Suche nach Benutzern mit dem Berufsfeld, das %s entspricht';
$lang['SEARCH_FOR_LASTVISITED_INTHELAST'] = 'Suche nach Benutzern, die in den letzten %s besucht haben';
$lang['SEARCH_FOR_LASTVISITED_AFTERTHELAST'] = 'Suche nach Benutzern, die nach dem letzten %s besucht haben';
$lang['SEARCH_FOR_LANGUAGE'] = 'Suche nach Benutzern, die %s als ihre Sprache eingestellt haben';
$lang['SEARCH_FOR_TIMEZONE'] = 'Suche nach Benutzern, die UTC %s als ihre Zeitzone eingestellt haben';
$lang['SEARCH_FOR_MODERATORS'] = 'Suche nach Moderatoren des Forums -> %s';
$lang['SEARCH_USERS_ADVANCED'] = 'Erweiterte Benutzersuche';
$lang['SEARCH_USERS_EXPLAIN'] = 'Dieses Modul ermöglicht die Durchführung erweiterter Suchanfragen für Benutzer nach einer Vielzahl von Kriterien. Bitte lesen Sie die Beschreibungen unter jedem Feld, um jede Suchoption vollständig zu verstehen.';
$lang['SEARCH_USERNAME_EXPLAIN'] = 'Hier können Sie nach Benutzernamen eine nicht fallabhängige Suche durchführen. Wenn Sie einen Teil des Benutzernamens treffen möchten, verwenden Sie * (ein Sternchen) als Platzhalter.';
$lang['SEARCH_EMAIL_EXPLAIN'] = 'Geben Sie einen Ausdruck ein, um eine E-Mail-Adresse eines Benutzers zu finden. Diese ist nicht fallabhängig. Wenn Sie eine Teilsuche durchführen möchten, verwenden Sie * (ein Sternchen) als Platzhalter.';
$lang['SEARCH_IP_EXPLAIN'] = 'Suche nach Benutzern mit einer bestimmten IP-Adresse (xxx.xxx.xxx.xxx).';
$lang['SEARCH_USERS_JOINED'] = 'Benutzer, die beigetreten sind';
$lang['SEARCH_USERS_LASTVISITED'] = 'Benutzer, die besucht haben';
$lang['IN_THE_LAST'] = 'In den letzten';
$lang['AFTER_THE_LAST'] = 'Nach der letzten';
$lang['BEFORE'] = 'Vor';
$lang['AFTER'] = 'Nach';
$lang['SEARCH_USERS_JOINED_EXPLAIN'] = 'Suche nach Benutzern, die vor oder nach (und an) einem bestimmten Datum beigetreten sind. Das Datumsformat ist JJJJ/MM/TT.';
$lang['SEARCH_USERS_GROUPS_EXPLAIN'] = 'Alle Mitglieder der ausgewählten Gruppe anzeigen.';
$lang['SEARCH_USERS_RANKS_EXPLAIN'] = 'Alle Träger des gewählten Rangs anzeigen.';
$lang['BANNED_USERS'] = 'Gesperrte Benutzern';
$lang['DISABLED_USERS'] = 'Deaktivierte Benutzer';
$lang['SEARCH_USERS_MISC_EXPLAIN'] = 'Administratoren – Alle Benutzer mit Administratorrechten; Moderatoren - Alle Forumsmoderatoren; Gesperrte Benutzer – Alle Konten, die in diesen Foren gesperrt wurden; Deaktivierte Benutzer – Alle Benutzer mit deaktivierten Konten (entweder manuell deaktiviert oder ihre E-Mail-Adresse wurde nie verifiziert); Benutzer mit deaktivierten PMs – Wählt Benutzer aus, denen die Privilegien für private Nachrichten entfernt wurden (erfolgt über die Benutzerverwaltung).';
$lang['POSTCOUNT'] = 'Beitragsanzahl';
$lang['EQUALS'] = 'Gleich';
$lang['GREATER_THAN'] = 'Größer als';
$lang['LESS_THAN'] = 'Weniger als';
$lang['SEARCH_USERS_POSTCOUNT_EXPLAIN'] = 'Sie können nach Benutzern suchen...';
$lang['USERFIELD'] = 'Benutzerfeld';
$lang['SEARCH_USERS_USERFIELD_EXPLAIN'] = 'Suche nach Benutzern basierend auf verschiedenen Profilfeldern. Wildcards werden durch ein Sternchen (*) unterstützt.';
$lang['SEARCH_USERS_LASTVISITED_EXPLAIN'] = 'Sie können nach Benutzern suchen, die auf der Grundlage ihres letzten Anmeldedatums usando diese Suchoption.';
$lang['SEARCH_USERS_LANGUAGE_EXPLAIN'] = 'Dies zeigt Benutzer an, die eine bestimmte Sprache in ihrem Profil ausgewählt haben.';
$lang['SEARCH_USERS_TIMEZONE_EXPLAIN'] = 'Benutzer, die in ihrem Profil eine bestimmte Zeitzone gewählt haben.';
$lang['MODERATORS_OF'] = 'Moderatoren';
$lang['SEARCH_USERS_MODERATORS_EXPLAIN'] = 'Suchen Sie nach Benutzern mit Moderationsberechtigungen für ein bestimmtes Forum. Moderationsberechtigungen werden entweder durch Benutzerberechtigungen oder durch Zugehörigkeit zu einer Gruppe mit den richtigen Gruppenberechtigungen erkannt.';

$lang['SEARCH_USERS_NEW'] = '%s ergab %d Ergebnis(e). Führen Sie <a href="%s">eine andere Suche</a> durch.';
$lang['BANNED'] = 'Verboten';
$lang['NOT_BANNED'] = 'Nicht gesperrt';
$lang['SEARCH_NO_RESULTS'] = 'Keine Benutzer entsprechen Ihren gewählten Kriterien. Bitte versuchen Sie eine andere Suche. Wenn Sie im Benutzernamen- oder E-Mail-Feld suchen, müssen Sie für teilweise Übereinstimmungen den Platzhalter * (ein Sternchen) verwenden.';
$lang['ACCOUNT_STATUS'] = 'Account-Status';
$lang['SORT_OPTIONS'] = 'Sortieroptionen:';
$lang['LAST_VISIT'] = 'Letzter Besuch';
$lang['DAY'] = 'Tag';

$lang['POST_EDIT_CANNOT'] = 'Tut mir Leid, aber Sie können keine Beiträge editieren';
$lang['FORUMS_IN_CAT'] = 'Foren in dieser Kategorie';

$lang['MC_TITLE'] = 'Moderationskommentar';
$lang['MC_LEGEND'] = 'Geben Sie einen Kommentar ein';
$lang['MC_FAQ'] = 'Der eingegebene Text wird unter dieser Nachricht angezeigt.';
$lang['MC_COMMENT_PM_SUBJECT'] = '%s in Ihrer Nachricht';
$lang['MC_COMMENT_PM_MSG'] = "Hallo, [b]%s[/b]\nDer Moderator hat in Ihrer Nachricht [url=%s][b]%s[/b][/url][quote]\n%s\n[/quote] hinterlassen.";
$lang['MC_COMMENT'] = [
    0 => [
        'title' => '',
        'type' => 'Kommentar löschen',
    ],
    1 => [
        'title' => 'Kommentar von %s',
        'type' => 'Kommentar',
    ],
    2 => [
        'title' => 'Informationen aus %s',
        'type' => 'Informationen',
    ],
    3 => [
        'title' => 'Warnung aus %s',
        'type' => 'Warnung',
    ],
    4 => [
        'title' => 'Verletzung von %s',
        'type' => 'Verletzung',
    ],
];

$lang['SITEMAP'] = 'Sitemap';
$lang['SITEMAP_ADMIN'] = 'XML-Sitemap verwalten.';
$lang['SITEMAP_CREATED'] = 'XML-Sitemap erstellt';
$lang['SITEMAP_AVAILABLE'] = 'und ist erhältlich bei';
$lang['SITEMAP_NOT_CREATED'] = 'Sitemap ist noch nicht erstellt';
$lang['SITEMAP_OPTIONS'] = 'Optionen';
$lang['SITEMAP_CREATE'] = 'Erstellen/aktualisieren Sie die Sitemap.';
$lang['SITEMAP_WHAT_NEXT'] = 'Was als Nächstes zu tun?';
$lang['SITEMAP_GOOGLE_1'] = 'Registrieren Sie Ihre Website bei <a href="https://www.google.com/webmasters/" target="_blank">Google Webmaster</a> mit Ihrem Google-Konto.';
$lang['SITEMAP_GOOGLE_2'] = '<a href="https://www.google.com/webmasters/tools/sitemap-list" target="_blank">Add sitemap</a> der Website, die Sie registriert.';
$lang['SITEMAP_YANDEX_1'] = 'Registrieren Sie Ihre Website bei <a href="https://webmaster.yandex.ru/sites/" target="_blank">Yandex Webmaster</a> mit Ihrem Yandex-account.';
$lang['SITEMAP_YANDEX_2'] = '<a href="https://webmaster.yandex.ru/site/map.xml" target="_blank">Add sitemap</a> der Website, die Sie registriert.';
$lang['SITEMAP_BING_1'] = 'Registrieren Sie Ihre Website bei <a href="https://www.bing.com/webmaster/" target="_blank">Bing Webmaster</a> mit Ihrem Microsoft-Konto.';
$lang['SITEMAP_BING_2'] = 'Fügen Sie die Sitemap der registrierten Website in deren Einstellungen hinzu.';
$lang['SITEMAP_ADD_TITLE'] = 'Weitere Seiten für die sitemap';
$lang['SITEMAP_ADD_PAGE'] = 'Weitere Seiten';
$lang['SITEMAP_ADD_EXP_1'] = 'Sie können zusätzliche Seiten auf Ihrer Website angeben, die in Ihre XML-Sitemap-Datei aufgenommen werden sollen, die Sie erstellen.';
$lang['SITEMAP_ADD_EXP_2'] = 'Jede Referenz muss beginnen mit http(s):// und eine neue Zeile!';

$lang['FORUM_MAP'] = 'Karte der Foren.';
$lang['ATOM_FEED'] = 'Feed';
$lang['ATOM_ERROR'] = 'Fehler beim Erstellen des Feeds.';
$lang['ATOM_SUBSCRIBE'] = 'Abonnieren Sie den Feed.';
$lang['ATOM_UPDATED'] = 'Aktualisiert';
$lang['ATOM_GLOBAL_FEED'] = 'Global feed für alle Foren';

$lang['HASH_INVALID'] = 'Hash %s ist ungültig';
$lang['HASH_NOT_FOUND'] = 'Version mit hash %s nicht gefunden';

$lang['TERMS_EMPTY_TEXT'] = '[align=center]Der Text dieser Seite wurde bearbeitet am: [url]%s[/url]. Diese Zeile kann nur von Administratoren gesehen werden.[/align]';
$lang['TERMS_EXPLAIN'] = 'Auf dieser Seite können Sie den Text der grundlegenden Regeln der Ressource angeben, die den Benutzern angezeigt wird.';
$lang['TERMS_UPDATED_SUCCESSFULLY'] = 'Die Bedingungen wurden erfolgreich aktualisiert';
$lang['CLICK_RETURN_TERMS_CONFIG'] = '%sHier klicken, um zum Bedingungen-Editor zurückzukehren%s';

$lang['TR_STATS'] = [
    0 => 'inaktive Benutzer in 30 Tagen',
    1 => 'inaktive Benutzer für 90 Tage',
    2 => 'Verteilung mittlerer Größe auf dem Tracker',
    3 => 'wie viele Hände auf dem Tracker.',
    4 => 'wie viele Live-Hände (es gibt mindestens 1 LED).',
    5 => 'wie viele Hände, bei denen mehr als 5 Samen gesät wurden.',
    6 => 'wie viele von uns Uploadern (die mindestens 1 Hand gefüllt haben).',
    7 => 'wie viele Uploader in den letzten 30 Tagen',
];

$lang['TORRENT_STATS_TITLE'] = 'Torrent-Statistiken';
$lang['TRACKER_STATS_TITLE'] = 'Tracker-Statistiken';
$lang['TORRENTS'] = 'Torrents';
$lang['PEERS'] = 'Peers';
$lang['CLIENTS'] = 'Clients';

$lang['NEW_POLL_START'] = 'Umfrage aktiviert';
$lang['NEW_POLL_END'] = 'Umfrage abgeschlossen';
$lang['NEW_POLL_ENDED'] = 'Diese Umfrage wurde bereits abgeschlossen';
$lang['NEW_POLL_DELETE'] = 'Umfrage gelöscht';
$lang['NEW_POLL_ADDED'] = 'Umfrage Hinzugefügt';
$lang['NEW_POLL_ALREADY'] = 'Ein Thema, das bereits eine Umfrage hat.';
$lang['NEW_POLL_RESULTS'] = 'Umfrage geändert und die alten Ergebnisse gelöscht';
$lang['NEW_POLL_VOTES'] = 'Sie müssen eine korrekte Antwortoption eingeben (mindestens 2, maximal %s).';
$lang['NEW_POLL_DAYS'] = 'Die Zeit der Umfrage (%s Tage ab dem Moment der Erstellung des Themas) ist bereits abgelaufen.';
$lang['NEW_POLL_U_NOSEL'] = 'Sie haben nicht ausgewählt, dass die Abstimmung.';
$lang['NEW_POLL_U_CHANGE'] = 'Umfrage Bearbeiten';
$lang['NEW_POLL_U_EDIT'] = 'Ändern Sie die Umfrage (die alten Ergebnisse gelöscht werden)';
$lang['NEW_POLL_U_VOTED'] = 'Alle gestimmt';
$lang['NEW_POLL_U_START'] = 'Aktivieren poll';
$lang['NEW_POLL_U_END'] = 'Finish Umfrage';
$lang['NEW_POLL_M_TITLE'] = 'Titel der Umfrage';
$lang['NEW_POLL_M_VOTES'] = 'Optionen';
$lang['NEW_POLL_M_EXPLAIN'] = 'Jede Zeile entspricht einer Antwort (max.';

$lang['UPLOAD_ERROR_COMMON_DISABLED'] = 'Datei-Upload deaktiviert';
$lang['UPLOAD_ERROR_COMMON'] = 'Fehler beim Hochladen der Datei.';
$lang['UPLOAD_ERROR_SIZE'] = 'Die hochgeladene Datei überschreitet die maximale Größe von %s';
$lang['UPLOAD_ERROR_FORMAT'] = 'Ungültiger Dateityp des Bildes.';
$lang['UPLOAD_ERROR_DIMENSIONS'] = 'Bildabmessungen überschreiten das maximal erlaubte %sx%s Pixel';
$lang['UPLOAD_ERROR_NOT_IMAGE'] = 'Die hochgeladene Datei ist kein Bild';
$lang['UPLOAD_ERROR_NOT_ALLOWED'] = 'Erweiterung %s für Downloads ist nicht erlaubt.';
$lang['UPLOAD_ERRORS'] = [
    UPLOAD_ERR_INI_SIZE => 'Sie haben die maximale Dateigröße für den Server überschritten.',
    UPLOAD_ERR_FORM_SIZE => 'Sie haben die maximale Upload-Größe für Dateien überschritten.',
    UPLOAD_ERR_PARTIAL => 'Die Datei wurde teilweise heruntergeladen.',
    UPLOAD_ERR_NO_FILE => 'Die Datei wurde nicht hochgeladen.',
    UPLOAD_ERR_NO_TMP_DIR => 'Das temporäre Verzeichnis wurde nicht gefunden.',
    UPLOAD_ERR_CANT_WRITE => 'Schreibfehler.',
    UPLOAD_ERR_EXTENSION => 'Upload wurde durch die Erweiterung gestoppt.',
];

// Captcha
$lang['CAPTCHA'] = 'Überprüfen Sie, dass Sie kein Roboter sind.';
$lang['CAPTCHA_WRONG'] = 'Sie konnten nicht bestätigen, dass Sie kein Roboter sind.';
$lang['CAPTCHA_SETTINGS'] = '<h2>Captcha ist nicht vollständig konfiguriert</h2><p>Generieren Sie die Schlüssel mit dem Dashboard Ihres Captcha-Dienstes, danach müssen Sie sie in der Datei config/config.php einfügen.</p>';
$lang['CAPTCHA_OCCURS_BACKGROUND'] = 'Die CAPTCHA-Überprüfung erfolgt im Hintergrund';

// Sending email
$lang['REPLY_TO'] = 'Antwort an';
$lang['EMAILER_SUBJECT'] = [
    'EMPTY' => 'Kein Betreff.',
    'GROUP_ADDED' => 'Sie wurden der Benutzergruppe hinzugefügt',
    'GROUP_APPROVED' => 'Ihrem Antrag auf Aufnahme in die Benutzergruppe wurde stattgegeben',
    'GROUP_REQUEST' => 'Eine Anfrage, Ihrer Benutzergruppe beizutreten',
    'PRIVMSG_NOTIFY' => 'Neue Privatnachricht',
    'TOPIC_NOTIFY' => 'Benachrichtigung über Antwort im Thread - %s',
    'USER_ACTIVATE' => 'Kontowiederherstellung',
    'USER_ACTIVATE_PASSWD' => 'Bestätigen eines neuen Passworts',
    'USER_WELCOME' => 'Willkommen auf der Seite %s',
    'USER_WELCOME_INACTIVE' => 'Willkommen auf der Seite %s (inaktiv)?',
];

// Null ratio
$lang['BT_NULL_RATIO'] = 'Verhältnis zurücksetzen';
$lang['BT_NULL_RATIO_NONE'] = 'Sie haben kein Verhältnis';
$lang['BT_NULL_RATIO_ALERT'] = "Achtung!\n\nSind Sie sicher, dass Sie Ihr Verhältnis zurücksetzen möchten?";
$lang['BT_NULL_RATIO_AGAIN'] = 'Sie haben Ihr Verhältnis bereits zurückgesetzt!';
$lang['BT_NULL_RATIO_NOT_NEEDED'] = 'Sie haben ein gutes Verhältnis. Ein Reset ist nur mit einem Verhältnis von weniger als %s möglich';
$lang['BT_NULL_RATIO_SUCCESS'] = 'Das Verhältnis wurde erfolgreich zurückgesetzt!';

// Releaser stats
$lang['RELEASER_STAT_SIZE'] = 'Gesamtgröße:';
$lang['RELEASER_STAT'] = 'Releaser-Statistiken:';
$lang['RELEASER_STAT_SHOW'] = 'Statistiken anzeigen';

// Spam protection
$lang['REGISTRATION_DENIED'] = 'Registrierung verweigert. Bitte kontaktieren Sie den Administrator, wenn Sie glauben, dass dies ein Fehler ist.';
$lang['POST_SPAM_DENIED'] = 'Ihre Nachricht wurde als Spam erkannt und kann nicht veröffentlicht werden.';
$lang['PM_SPAM_DENIED'] = 'Ihre Nachricht wurde als Spam erkannt und kann nicht gesendet werden.';

// Spam log (admin)
$lang['SPAM_LOG'] = 'Spam-Protokoll';
$lang['SPAM_LOG_DESC'] = 'Dieses Protokoll erfasst alle Registrierungsversuche und Inhaltsübermittlungen, die vom Spam-Schutzsystem markiert wurden. <b>Verweigert</b> &mdash; die Aktion wurde vollständig blockiert (Registrierung abgelehnt, Beitrag/PN nicht gesendet). <b>Moderiert</b> &mdash; bei Registrierungen wurde das Konto erstellt, erfordert jedoch eine E-Mail-Aktivierung; bei Inhalten wurde der Beitrag/die PN zugelassen, jedoch als verdächtig markiert.';
$lang['SPAM_LOG_CHECK_TYPE'] = 'Überprüfungsart';
$lang['SPAM_LOG_CHECK_TYPE_DESC_REG'] = 'Registrierung &mdash; neues Benutzerkonto';
$lang['SPAM_LOG_CHECK_TYPE_DESC_CONTENT'] = 'Inhalt &mdash; Beitrag oder private Nachricht';
$lang['SPAM_LOG_DECISION'] = 'Entscheidung';
$lang['SPAM_LOG_PROVIDER'] = 'Anbieter';
$lang['SPAM_LOG_REASON'] = 'Grund';
$lang['SPAM_LOG_RESPONSE_TIME'] = 'Zeit (ms)';
$lang['SPAM_LOG_ALL'] = 'Alle';
$lang['SPAM_LOG_DETAILS'] = 'Details';
$lang['SPAM_LOG_NO_RECORDS'] = 'Keine Spam-Protokolleinträge gefunden';
$lang['SPAM_LOG_TOTAL'] = 'Gesamteinträge';
$lang['SPAM_LOG_DENIED_COUNT'] = 'Verweigert';
$lang['SPAM_LOG_MODERATED_COUNT'] = 'Moderiert';

// Dark mode
$lang['DARK_MODE_TOGGLE'] = 'Dunkelmodus umschalten';
