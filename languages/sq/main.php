<?php

/**
 * TorrentPier – Bull-powered BitTorrent tracker engine
 *
 * @copyright Copyright (c) 2005-2025 TorrentPier (https://torrentpier.com)
 * @link      https://github.com/torrentpier/torrentpier for the canonical source repository
 * @license   https://github.com/torrentpier/torrentpier/blob/master/LICENSE MIT License
 */

// Common, these terms are used extensively on several pages
$lang['ADMIN'] = 'Administrata';
$lang['FORUM'] = 'Forumi';
$lang['CATEGORY'] = 'Kategoria';
$lang['HIDE_CAT'] = 'Të fshehura kategori';
$lang['HIDE_CAT_MESS'] = 'Disa kategori fshihen nga opsionet e personalizuara të ekranit';
$lang['SHOW_ALL'] = 'Trego të gjitha';
$lang['TOPIC'] = 'Tema';
$lang['TOPICS'] = 'Temat';
$lang['TOPICS_SHORT'] = 'Temat';
$lang['REPLIES'] = 'Përgjigje';
$lang['REPLIES_SHORT'] = 'Përgjigje';
$lang['VIEWS'] = 'Shikime';
$lang['POSTS'] = 'Postimet';
$lang['POSTS_SHORT'] = 'Postimet';
$lang['POSTED'] = 'Postuar';
$lang['USERNAME'] = 'Emrin e përdoruesit';
$lang['PASSWORD'] = 'Fjalëkalimi';
$lang['PASSWORD_SHOW_BTN'] = 'Trego fjalëkalimin';
$lang['EMAIL'] = 'Emaili';
$lang['PM'] = 'PD';
$lang['AUTHOR'] = 'Autori';
$lang['MESSAGE'] = 'Mesazh';
$lang['TORRENT'] = 'Torrent';
$lang['PERMISSIONS'] = 'Lejet';
$lang['TYPE'] = 'Lloji';

$lang['1_DAY'] = '1 Ditë';
$lang['7_DAYS'] = '7 Ditë';
$lang['2_WEEKS'] = '2 Javë';
$lang['1_MONTH'] = '1 Muaj';
$lang['3_MONTHS'] = '3 Muaj';
$lang['6_MONTHS'] = '6 Muaj';
$lang['1_YEAR'] = '1 Vit';

$lang['GO'] = 'Shkoni në';
$lang['SUBMIT'] = 'Parandaloni';
$lang['RESET'] = 'Anulo';
$lang['CANCEL'] = 'Shkëput';
$lang['PREVIEW'] = 'Parashikimi';
$lang['AJAX_PREVIEW'] = 'Pamje e shpejtë';
$lang['CONFIRM'] = 'Konfirmo';
$lang['YES'] = 'Po';
$lang['NO'] = 'Jo';
$lang['ENABLED'] = 'Të aktivizuara';
$lang['DISABLED'] = 'Disabled';
$lang['ERROR'] = 'Gabim';
$lang['SELECT_ACTION'] = 'Zgjidhni veprim';
$lang['CLEAR'] = 'Pastroni';
$lang['MOVE_TO_TOP'] = 'Lëviz në majë';
$lang['UNKNOWN'] = 'I panjohur';
$lang['COPY_TO_CLIPBOARD'] = 'Kopjo në të prerë';
$lang['NO_ITEMS'] = 'Duket se nuk ka të dhëna këtu...';
$lang['PLEASE_TRY_AGAIN'] = 'Ju lutem provoni përsëri pas disa sekondash...';

$lang['NEXT_PAGE'] = 'Tjetër';
$lang['PREVIOUS_PAGE'] = 'E mëparshme';
$lang['SHORT_PAGE'] = 'faqe';
$lang['GOTO_PAGE'] = 'Shko tek faqja';
$lang['GOTO_SHORT'] = 'Faqe';
$lang['JOINED'] = 'U bashkuan';
$lang['LONGEVITY'] = 'Regjistruar';
$lang['IP_ADDRESS'] = 'IP Adresa';

$lang['SELECT_FORUM'] = 'Zgjidhni forumi';
$lang['VIEW_LATEST_POST'] = 'Pamje e fundit të postit';
$lang['VIEW_NEWEST_POST'] = 'Pamje e re post';
$lang['PAGE_OF'] = 'Faqe <b>%d</b> e <b>%s</b>';

$lang['TWITTER'] = 'X (Twitter)';
$lang['TWITTER_ERROR'] = 'E keni futur një të pavlefshme X (Twitter) identifikohu';

$lang['POST_NEW_TOPIC'] = 'Posto temë të re';
$lang['POST_NEW_RELEASE'] = 'Posto lëshimin e ri';
$lang['REPLY_TO_TOPIC'] = 'Përgjigju temës';

$lang['CLICK_RETURN_TOPIC'] = 'Klikoni %sTë këthyheni%s në temë'; // %s's here are for uris, do not remove!
$lang['CLICK_RETURN_FORUM'] = 'Klikoni %sTë këthyeni%s në forum';
$lang['CLICK_RETURN_MODCP'] = 'Klikoni %sTë këthyeni%s për Moderator Kontroll Panelin';

$lang['ADMIN_PANEL'] = 'Shko në Panelin e Administratës';
$lang['ALL_CACHE_CLEARED'] = 'Cache ka qenë pastruar';
$lang['ALL_TEMPLATE_CLEARED'] = 'Template cache ka qenë pastruar';
$lang['DATASTORE_CLEARED'] = 'Datastore ka qenë pastruar';
$lang['BOARD_DISABLE'] = 'Na vjen keq, ky forum është me aftësi të kufizuara. Përpiqen për të ardhur sërish më vonë';
$lang['BOARD_DISABLE_CRON'] = 'Forumi është poshtë për mirëmbajtje. Përpiqen për të ardhur sërish më vonë';
$lang['ADMIN_DISABLE'] = 'Forumi është i çaktivizuar nga administratori. Mund ta aktivizoni atë në çdo kohë';
$lang['ADMIN_DISABLE_CRON'] = 'Forumi është bllokuar nga nxitja e punës cron. Mund ta hiqni bllokimin në çdo kohë';
$lang['ADMIN_DISABLE_TITLE'] = 'Forumi është me aftësi të kufizuara';
$lang['ADMIN_DISABLE_CRON_TITLE'] = 'Forumi është poshtë për mirëmbajtjen';
$lang['ADMIN_UNLOCK'] = 'Të aktivizuara forumi';
$lang['ADMIN_UNLOCKED'] = 'E hapur';
$lang['ADMIN_UNLOCK_CRON'] = 'Të hequr bllokimin';
$lang['PAGE_NOT_FOUND'] = 'Faqja nuk u gjet';

$lang['LOADING'] = 'Ngarkimi...';
$lang['JUMPBOX_TITLE'] = 'Zgjidhni forumi';
$lang['DISPLAYING_OPTIONS'] = 'Të shfaqur opsione';

// Global Header strings
$lang['BROWSING_FORUM'] = 'Përdoruesit që po shfletojnë këtë forum:';
$lang['ONLINE_USERS'] = 'Në total ka <b>%1$d</b> përdorues në linjë: %2$d regjistruar dhe %3$d të ftuarit';
$lang['RECORD_ONLINE_USERS'] = 'Përdoruesit më kurrë online ishte <b>%s</b> në %s'; // first %s = number of users, second %s is the date.

$lang['ONLINE_ADMIN'] = 'Administratori';
$lang['ONLINE_MOD'] = 'Moderator';
$lang['ONLINE_GROUP_MEMBER'] = 'Anëtari i grupit';

$lang['CURRENT_TIME'] = 'Kohën e tanishme është: <span class="tz_time">%s</span>';

$lang['SEARCH_NEW'] = 'Shiko postimet më të reja';
$lang['SEARCH_SELF'] = 'Postimet e mia';
$lang['SEARCH_SELF_BY_LAST'] = 'Koha e postimit të fundit';
$lang['SEARCH_SELF_BY_MY'] = 'koha e postimit tim';
$lang['SEARCH_LATEST'] = 'Tema e fundit';
$lang['LATEST_RELEASES'] = 'Lëshimet e fundit';

$lang['REGISTER'] = 'Regjistrohu';
$lang['PROFILE'] = 'Profili';
$lang['EDIT_PROFILE'] = 'Ndrysho profilin';
$lang['SEARCH'] = 'Kërko';
$lang['MEMBERLIST'] = 'Listi i anëtarëve';
$lang['USERGROUPS'] = 'Grupet e përdoruesve';
$lang['LASTPOST'] = 'Postimi I Fundit';
$lang['MODERATOR'] = 'Moderator';
$lang['MODERATORS'] = 'Moderatorët';
$lang['TERMS'] = 'Kushtet';
$lang['NOTHING_HAS_CHANGED'] = 'Asgjë nuk ka ndryshuar';

// Stats block text
$lang['POSTED_TOPICS_TOTAL'] = 'Përdoruesit tanë kanë postuar gjithsej <b>%s</b> tema'; // Number of topics
$lang['POSTED_POSTS_TOTAL'] = 'Përdoruesit tanë kanë postuar gjithsej <b>%s</b> postime'; // Number of posts
$lang['REGISTERED_USERS_TOTAL'] = 'Kemi <b>%s</b> përdorues të regjistruar'; // # registered users
$lang['USERS_TOTAL_GENDER'] = 'Djemtë: <b>%d</b>, Vajzat: <b>%d</b>, Të Tjerët: <b>%d</b>';
$lang['NEWEST_USER'] = 'Përdoruesi më i ri i regjistruar është <b>%s</b>'; // a href, username, /a

// Tracker stats
$lang['TORRENTS_STAT'] = 'Rrëkeza: <b style="color: blue;">%s</b>,&nbsp; Madhësia totale: <b>%s</b>'; // first %s = number of torrents, second %s is the total size.
$lang['PEERS_STAT'] = 'Kolegët: <b>%s</b>,&nbsp; Seeders: <b class="seedmed">%s</b>,&nbsp; Leechers: <b class="leechmed">%s</b>'; // first %s = number of peers, second %s = number of seeders,  third %s = number of leechers.
$lang['SPEED_STAT'] = 'Gjithsej shpejtësi: <b>%s</b>&nbsp;'; // %s = total speed.

$lang['NO_NEW_POSTS'] = 'Nuk ka postime të reja';
$lang['NEW_POSTS'] = 'Postimet e reja';
$lang['FORUM_LOCKED_MAIN'] = 'Forumi është kyçur';

// Login
$lang['ENTER_PASSWORD'] = 'Ju lutem shkruani emrin e përdoruesit dhe fjalëkalimin për t\'u identifikuar.';
$lang['LOGIN'] = 'Identifikohu';
$lang['LOGOUT'] = 'Dilni';
$lang['CONFIRM_LOGOUT'] = 'A jeni të sigurt që ju doni të dilni?';

$lang['FORGOTTEN_PASSWORD'] = 'Fjalëkalimi i harruar?';
$lang['AUTO_LOGIN'] = 'Hyni në automatikisht';
$lang['ERROR_LOGIN'] = 'Emri i përdoruesit që keni paraqitur është i pasaktë ose i pavlefshëm, ose fjalëkalimi është i pavlefshëm.';
$lang['REMEMBER'] = 'Mos harroni';
$lang['USER_WELCOME'] = 'Mirë se vini,';

// Index page
$lang['HOME'] = 'Në shtëpi';
$lang['NO_POSTS'] = 'Nuk ka postime';
$lang['NO_FORUMS'] = 'Ky bord nuk ka forume';

$lang['PRIVATE_MESSAGE'] = 'Mesazh Privat';
$lang['PRIVATE_MESSAGES'] = 'Mesazhe Private';
$lang['WHOSONLINE'] = 'Kush është në linjë';

$lang['MARK_ALL_FORUMS_READ'] = 'Shëno të gjitha forumet si të lexuar';

$lang['LATEST_NEWS'] = 'Lajmet e fundit';
$lang['NETWORK_NEWS'] = 'Rrjeti i lajmeve';
$lang['SUBFORUMS'] = 'Subforums';

$lang['FORUM_NOT_EXIST'] = 'Forumi që keni zgjedhur nuk ekziston.';
$lang['ERROR_PORNO_FORUM'] = 'Ky lloj forumi (18+) u fsheh në profilin tuaj nga ju.';

$lang['DISPLAY_TOPICS'] = 'Shfaq temat';
$lang['MODERATE_FORUM'] = 'Moderoni këtë forum';
$lang['TITLE_SEARCH_HINT'] = 'Kërkim titulli...';

$lang['TOPIC_ANNOUNCEMENT'] = 'Njoftim:';
$lang['TOPIC_MOVED'] = 'Lëvizur:';
$lang['TOPIC_POLL'] = '[ Anketës ]';

$lang['MARK_TOPICS_READ'] = 'Shëno të gjitha temat lexuar';
$lang['TOPICS_MARKED_READ'] = 'Temat e këtij forumi sapo janë shënuar si të lexuar.';

$lang['RULES_POST_CAN'] = 'Ju <b>mund</b> të postoni tema të reja në këtë forum.';
$lang['RULES_POST_CANNOT'] = 'Ju <b>nuk mund</b> të postoni tema të reja në këtë forum.';
$lang['RULES_REPLY_CAN'] = 'Ju <b>can</b> të përgjigjeni temave të këtij forumi';
$lang['RULES_REPLY_CANNOT'] = 'Ju <b>cannot</b> të përgjigjeni temave të këtij forumi';
$lang['RULES_EDIT_CAN'] = 'Ju <b>can</b> të redaktoni postimet tuaja në këtë forum';
$lang['RULES_EDIT_CANNOT'] = 'Ju <b>cannot</b> të redaktoni postimet tuaja në këtë forum';
$lang['RULES_DELETE_CAN'] = 'Ju <b>can</b> të fshini postimet tuaja në këtë forum';
$lang['RULES_DELETE_CANNOT'] = 'Ju <b>cannot</b> të fshini postimet tuaja në këtë forum';
$lang['RULES_VOTE_CAN'] = 'Ju <b>mund</b> të votoni në sondazhet në këtë forum.';
$lang['RULES_VOTE_CANNOT'] = 'Ju <b>nuk mund</b> të votoni në sondazhet në këtë forum.';
$lang['RULES_MODERATE'] = 'Ju <b>mund</b> të moderoni këtë forum.';

$lang['NO_TOPICS_POST_ONE'] = 'Nuk ka postime në këtë forum akoma<br />Klikoni në ikonën <b>Temë e Re</b>, dhe postimi juaj do të jetë i pari.';
$lang['NO_RELEASES_POST_ONE'] = 'Nuk ka lëshime në këtë forum akoma<br />Klikoni në ikonën <b>Lëshim i Ri</b>, dhe lëshimi juaj do të jetë i pari.';

$lang['GUEST'] = 'Vizitor';
$lang['SUBMIT_VOTE'] = 'Dërgo votën';

$lang['NO_NEWER_TOPICS'] = 'Nuk ka tema të reja në këtë forum';
$lang['NO_OLDER_TOPICS'] = 'Nuk ka tema më të vjetra në këtë forum.';
$lang['TOPIC_POST_NOT_EXIST'] = 'Tema ose postimi që kërkuat nuk ekziston.';
$lang['NO_POSTS_TOPIC'] = 'Nuk ka postime në këtë temë';

$lang['DISPLAY_POSTS'] = 'Shfaq postimet';
$lang['ALL_POSTS'] = 'Të Gjitha Postimet E Bëra';
$lang['NEWEST_FIRST'] = 'Më Të Reja Parë';
$lang['OLDEST_FIRST'] = 'Më Të Vjetra Të Parë';

$lang['READ_PROFILE'] = 'Shiko profilin e përdoruesit';

$lang['WROTE'] = 'shkroi'; // proceeds the username and is followed by the quoted text
$lang['QUOTE'] = 'Citim'; // comes before bbcode quote output
$lang['CODE'] = 'Kodi'; // comes before bbcode code output
$lang['SPOILER_HEAD'] = 'tekst fshehur';
$lang['SPOILER_CLOSE'] = 'kthehet';
$lang['PLAY_ON_CURPAGE'] = 'Filloni të luani në faqen aktuale';

$lang['EDITED_TIME_TOTAL'] = 'E fundit e redaktuar nga <b>%s</b> në %s; redaktuar %d herë gjithsej'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['EDITED_TIMES_TOTAL'] = 'E fundit e redaktuar nga <b>%s</b> në %s; redaktuar %d herë gjithsej'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['LOCK_TOPIC'] = 'Blloko temën';
$lang['UNLOCK_TOPIC'] = 'Hape temën';
$lang['MOVE_TOPIC'] = 'Lëvizni temë';
$lang['DELETE_TOPIC'] = 'Fshini këtë temë';
$lang['SPLIT_TOPIC'] = 'Ndarë temë';

$lang['STOP_WATCHING_TOPIC'] = 'Për ndaloni ndjekjen e temës';
$lang['START_WATCHING_TOPIC'] = 'Ndiqni temën për përgjigje';
$lang['NO_LONGER_WATCHING'] = 'Nuk jeni më duke ndjekur këtë temë';
$lang['YOU_ARE_WATCHING'] = 'Tani po ndiqni këtë temë';

$lang['SEARCH_IN_TOPIC'] = 'Kërkoni në temë...';
$lang['HIDE_IN_TOPIC'] = 'Fshihe';

$lang['SHOW'] = 'Tregoni';
$lang['AVATARS'] = 'Avatars';
$lang['RANK_IMAGES'] = 'Imazhe të renditura';
$lang['POST_IMAGES'] = 'Postoni imazhe';
$lang['SIGNATURES'] = 'Firmat';
$lang['SPOILER'] = 'Shkatërrues';
$lang['SHOW_OPENED'] = 'Tregoni hapur';
$lang['DOWNLOAD_PIC'] = 'Fotografi të shkarkueshme';

$lang['MODERATE_TOPIC'] = 'Moderoni këtë temë';
$lang['SELECT_POSTS_PER_PAGE'] = 'Postime për faqesh';

// Posting/Replying (Not private messaging!)
$lang['TOPIC_REVIEW'] = 'Rishikimi i temës';

$lang['NO_POST_MODE'] = 'Nuk është zgjedhur asnjë modalitet postimi'; // If posting.php is called without a mode (newtopic/reply/delete/etc., shouldn't be shown normally)

$lang['POST_A_NEW_TOPIC'] = 'Posto temë të re';
$lang['POST_A_REPLY'] = 'Postim përgjigje të re';
$lang['POST_TOPIC_AS'] = 'Postoni temën si';
$lang['EDIT_POST'] = 'Editoni postimin';
$lang['EDIT_TOPIC_TITLE'] = 'Redaktoni titullin e temës';

$lang['DONT_MESSAGE_TITLE'] = 'Duhet të specifikoni titullin e mesazhit';
$lang['INVALID_TOPIC_ID'] = 'Temë E Munguar!';
$lang['INVALID_TOPIC_ID_DB'] = 'Temë nuk ekziston në bazën e të dhënave!';

$lang['NOT_EDIT_TOR_STATUS'] = 'Ju nuk mund të redaktoni lirimin me statusin';

$lang['OPTIONS'] = 'Opsionet';

$lang['POST_ANNOUNCEMENT'] = 'Njoftim';
$lang['POST_STICKY'] = 'Ngjitet';
$lang['POST_NORMAL'] = 'Normale';
$lang['POST_DOWNLOAD'] = 'Shkarkuar';

// Anonymous posting
$lang['ANONYMOUS'] = 'Anonim';
$lang['ANONYMOUS_TOPIC'] = 'Posto temën në mënyrë anonime';
$lang['ANONYMOUS_REPLY'] = 'Posto përgjigjen në mënyrë anonime';
$lang['HIDE_AUTHORSHIP'] = 'Posto anonimisht si parazgjedhje';
$lang['HIDE_AUTHORSHIP_EXPLAIN'] = 'Kur është aktivizuar, postimet e reja do të jenë në modalitet anonim si parazgjedhje. Mund ta ndryshoni këtë për çdo postim.';
$lang['ALLOW_ANONYMOUS_POSTING'] = 'Lejo postimin anonim';
$lang['ANONYMOUS_POST_LABEL'] = 'Postuar në mënyrë anonime';
$lang['POSTED_ANONYMOUSLY'] = 'postuar në mënyrë anonime';
$lang['ANONYMOUS_ADMIN_NOTICE'] = 'Administratorët dhe moderatorët mund të shohin autorin e vërtetë';
$lang['YOU'] = 'Ju';

$lang['PRINT_PAGE'] = 'Printo Faqen';

$lang['CONFIRM_DELETE'] = 'Jeni i sigurt që dëshironi të fshini këtë post?';
$lang['CONFIRM_DELETE_POLL'] = 'Jeni të sigurt se dëshironi të fshini këtë sondazh?';

$lang['FLOOD_ERROR'] = 'Ju nuk mund të bëni një post kaq shpejt pas postimit tuaj të fundit; ju lutem provoni përsëri në pak minuta';
$lang['EMPTY_SUBJECT'] = 'Ju duhet të specifikoni një subjekt';
$lang['EMPTY_MESSAGE'] = 'Ju duhet të shkruani një mesazh';
$lang['FORUM_LOCKED'] = 'Forumi është kyçur';
$lang['TOPIC_LOCKED'] = 'Temë e mbyllur';
$lang['TOPIC_LOCKED_SHORT'] = 'Temë e mbyllur';
$lang['NO_POST_ID'] = 'Ju duhet të zgjidhni një post për ta redaktuar';
$lang['NO_TOPIC_ID'] = 'Ju duhet të zgjidhni një temë për t\'u përgjigjur';
$lang['NO_VALID_MODE'] = 'Ju mund të postoni, përgjigjeni, redaktoni, ose citoni vetëm mesazhet. Ju lutem kthehuni dhe provoni përsëri';
$lang['NO_SUCH_POST'] = 'Nuk ka post të tillë. Ju lutem kthehuni dhe provoni përsëri';
$lang['EDIT_OWN_POSTS'] = 'Na vjen keq, por ju vetëm mund të redaktoni postimet tuaja';
$lang['DELETE_OWN_POSTS'] = 'Na vjen keq, por ju mund të fshini vetëm postimet tuaja';
$lang['CANNOT_DELETE_REPLIED'] = 'Na vjen keq, por ju nuk mund të fshini postimet që janë përgjigjur';
$lang['CANNOT_DELETE_POLL'] = 'Na vjen keq, por ju nuk mund të fshini një anketë aktive';
$lang['EMPTY_POLL_TITLE'] = 'Ju duhet të shkruani një titull për anketën tuaj';
$lang['POST_HAS_NO_POLL'] = 'Këtu post nuk ka anketa';
$lang['ALREADY_VOTED'] = 'Ju tashmë keni votuar në këtë sondazh';
$lang['NO_VOTE_OPTION'] = 'Ju duhet të specifikoni një opsion gjatë votimit';
$lang['LOCKED_WARN'] = 'Ju keni postuar në temë e mbyllur!';

$lang['ADD_POLL'] = 'Të shtoni një sondazh';
$lang['UPDATE'] = 'Update';
$lang['DAYS'] = 'Ditë';
$lang['DELETE_POLL'] = 'Fshini anketët';

$lang['MAX_SMILIES_PER_POST'] = 'Kufiri i emoticons për %s emoticons tejkaluar.';

$lang['NOTIFY'] = 'Më njoftoni për përgjigjet';
$lang['ALLOW_ROBOTS_INDEXING'] = 'Lejo robotët të indeksojnë këtë temë';

$lang['STORED'] = 'Mesazhi juaj ka hyrë me sukses.';
$lang['EDITED'] = 'Mesazhi është ndryshuar';
$lang['DELETED'] = 'Mesazhi juaj ka qenë fshirë me sukses.';
$lang['VOTE_CAST'] = 'Vota juaj është hedhur.';

$lang['EMOTICONS'] = 'Emoticons';
$lang['MORE_EMOTICONS'] = 'Shiko më shumë Emoticons';

$lang['COLOR_DARK_RED'] = 'E Kuqe Të Errët';
$lang['COLOR_RED'] = 'E kuqe';
$lang['COLOR_ORANGE'] = 'Portokalli';
$lang['COLOR_BROWN'] = 'Kafe';
$lang['COLOR_GREEN'] = 'E gjelbër';
$lang['COLOR_OLIVE'] = 'Ulliri';
$lang['COLOR_BLUE'] = 'Blu';
$lang['COLOR_DARK_BLUE'] = 'Blu Të Errët';
$lang['COLOR_INDIGO'] = 'Llullaqit';
$lang['COLOR_VIOLET'] = 'Vjollcë';

$lang['FONT_SMALL'] = 'Të Shakespeare';
$lang['FONT_NORMAL'] = 'Normale';
$lang['FONT_LARGE'] = 'Të Mëdha';
$lang['FONT_HUGE'] = 'Shumë';

$lang['NEW_POSTS_PREVIEW'] = 'Tema ka postime të reja, të redaktuara ose të palexuara';

// Private Messaging
$lang['PRIVATE_MESSAGING'] = 'Mesazhe Private';

$lang['NO_NEW_PM'] = 'nuk ka mesazhe të reja';

$lang['NEW_PMS_FORMAT'] = '<b>%1$s</b> %2$s'; // 1 new message
$lang['NEW_PMS_DECLENSION'] = ['mesazh i ri', 'mesazhe të reja'];

$lang['UNREAD_PMS_FORMAT'] = '<b>%1$s</b> %2$s'; // 1 new message
$lang['UNREAD_PMS_DECLENSION'] = ['palexuara', 'palexuara'];

$lang['UNREAD_MESSAGE'] = 'Mesazh i palexuar';
$lang['READ_MESSAGE'] = 'Lexoni mesazh';

$lang['READ_PM'] = 'Lexoni mesazh';
$lang['POST_NEW_PM'] = 'Post mesazh';
$lang['POST_REPLY_PM'] = 'Përgjigju mesazhit';
$lang['POST_QUOTE_PM'] = 'Citim mesazhi';
$lang['EDIT_PM'] = 'Edit mesazh';

$lang['INBOX'] = 'Tool Inbox';
$lang['OUTBOX'] = 'Dalje';
$lang['SAVEBOX'] = 'Savebox';
$lang['SENTBOX'] = 'Sentbox';
$lang['SUBJECT'] = 'Subjekti';
$lang['FROM'] = 'Nga';
$lang['TO'] = 'Për';
$lang['DATE'] = 'Data';
$lang['SENT'] = 'Dërguar';
$lang['SAVED'] = 'Ruaj të Shënuar';
$lang['DELETE_MARKED'] = 'Fshij Të Shënuar';
$lang['DELETE_ALL'] = 'Fshij Të Gjitha';
$lang['SAVE_MARKED'] = 'Ruaj të Shënuar';
$lang['SAVE_MESSAGE'] = 'Ruaje Mesazhin';
$lang['DELETE_MESSAGE'] = 'Fshij Mesazhin';

$lang['DISPLAY_MESSAGES'] = 'Shfaq mesazhe'; // Followed by number of days/weeks/months

$lang['NO_MESSAGES_FOLDER'] = 'Nuk ka mesazhe në këtë dosje';

$lang['CANNOT_SEND_PRIVMSG'] = 'Na vjen keq, por administrator ka penguar dërgimin e mesazheve private.';
$lang['NO_TO_USER'] = 'Ju duhet të specifikoni një emër përdoruesi për të dërguar këtë mesazh.';
$lang['NO_SUCH_USER'] = 'Na vjen keq, por nuk ka pasur përdorues të tillë.';

$lang['MESSAGE_SENT'] = 'Mesazhi juaj është dërguar.';

$lang['CLICK_RETURN_INBOX'] = 'Kthehu tek: <br /> %s<b>Inbox</b>%s';
$lang['CLICK_RETURN_SENTBOX'] = '&nbsp;&nbsp; %s<b>Sentbox</b>%s';
$lang['CLICK_RETURN_OUTBOX'] = '&nbsp;&nbsp; %s<b>Outbox</b>%s';
$lang['CLICK_RETURN_SAVEBOX'] = '&nbsp;&nbsp; %s<b>Savebox</b>%s';
$lang['CLICK_RETURN_INDEX'] = '%sKthehu në Index%s';

$lang['SEND_A_NEW_MESSAGE'] = 'Dërgoni një mesazh privat të ri';
$lang['SEND_A_REPLY'] = 'Përgjigju një mesazhi privat';
$lang['EDIT_MESSAGE'] = 'Redakto mesazhin privat';

$lang['FIND_USERNAME'] = 'Gjeni emrin e përdoruesit';
$lang['SELECT_USERNAME'] = 'Zgjidhni një emër përdoruesi';
$lang['NO_MATCH'] = 'Nuk ka ndeshje të gjetur.';

$lang['NO_PM_ID'] = 'Ju lutem specifikoni ID-në e postit';
$lang['NO_SUCH_FOLDER'] = 'Dosja nuk u gjet.';

$lang['MARK_ALL'] = 'Shëno të gjitha';
$lang['UNMARK_ALL'] = 'Çshenjoni të gjitha';

$lang['CONFIRM_DELETE_PM'] = 'A jeni i sigurt që doni të fshini këtë mesazh?';
$lang['CONFIRM_DELETE_PMS'] = 'Jeni i sigurt se doni të fshini këto mesazhe?';

$lang['INBOX_SIZE'] = 'Kutia juaj e postës është<br /><b>%d%%</b> e plotë.'; // e.g. Your Inbox is 50% full
$lang['SENTBOX_SIZE'] = 'Kutia juaj e dërguar është<br /><b>%d%%</b> e plotë.';
$lang['SAVEBOX_SIZE'] = 'Kutia juaj e ruajtjes është<br /><b>%d%%</b> e plotë.';

$lang['OUTBOX_EXPL'] = '';

// Profiles/Registration
$lang['VIEWING_USER_PROFILE'] = 'Shihni profili :: %s';
$lang['VIEWING_MY_PROFILE'] = 'Profili im [ <a href="%s">Settings / Ndryshim profile</a> ]';

$lang['DISABLED_USER'] = 'Llogaria e çaktivizuar.';
$lang['MANAGE_USER'] = 'Administrata';

$lang['PREFERENCES'] = 'Preferencat';
$lang['ITEMS_REQUIRED'] = 'Artikujt e shënuar me * janë të nevojshme nëse nuk shprehet ndryshe.';
$lang['REGISTRATION_INFO'] = 'Informacioni i regjistrimit.';
$lang['PROFILE_INFO'] = 'Informacioni i profilit.';
$lang['AVATAR_PANEL'] = 'Avatar paneli i kontrollit';

$lang['WEBSITE'] = 'Website';
$lang['LOCATION'] = 'Location';
$lang['CONTACT'] = 'Kontaktoni';
$lang['EMAIL_ADDRESS'] = 'Adresa e email-it.';
$lang['SEND_PRIVATE_MESSAGE'] = 'Dërgo mesazh privat';
$lang['INTERESTS'] = 'Interesat.';
$lang['OCCUPATION'] = 'Profesioni';
$lang['POSTER_RANK'] = 'Rang i posterit.';
$lang['AWARDED_RANK'] = 'Rang i dhënë.';
$lang['SHOT_RANK'] = 'Rang i gjuajtjes.';

$lang['TOTAL_POSTS'] = 'Gjithsej postimet';
$lang['SEARCH_USER_POSTS'] = 'Gjej postimet'; // Find all posts by username
$lang['SEARCH_USER_POSTS_SHORT'] = 'Gjej postimet e përdoruesit';
$lang['SEARCH_USER_TOPICS'] = 'Gjeni temat e përdoruesit.'; // Find all topics by username

$lang['NO_USER_ID_SPECIFIED'] = 'Na vjen keq, por ai përdorues nuk ekziston.';
$lang['NO_SEND_ACCOUNT_INACTIVE'] = 'Na vjen keq, por fjalëkalimi nuk mund të rikuperohet sepse llogaria juaj është aktualisht e çaktivizuar.';
$lang['NO_SEND_ACCOUNT'] = 'Na vjen keq, por fjalëkalimi nuk mund të rikuperohet. Ju lutem kontaktoni administratorin e forumit për më shumë informacion.';

$lang['HIDE_PORN_FORUMS'] = 'Fshehin përmbajtjen 18+';
$lang['ADD_RETRACKER'] = 'Shtoni retracker në skedarët e torrenteve.';
$lang['ALWAYS_NOTIFY'] = 'Gjithmonë më njoftoni për përgjigjet.';
$lang['ALWAYS_NOTIFY_EXPLAIN'] = 'Dërgon një e-mail kur dikush përgjigjet në një temë që ju keni postuar. Kjo mund të ndryshohet çdo herë që postoni.';

$lang['BOARD_LANG'] = 'Gjuha e bordit.';
$lang['GENDER'] = 'Gjinia.';
$lang['GENDER_SELECT'] = [
    0 => 'I panjohur',
    1 => 'Mashkull',
    2 => 'Femra',
];
$lang['MODULE_OFF'] = 'Moduli është me aftësi të kufizuara!';

$lang['BIRTHDAY'] = 'Ditëlindjen';
$lang['HAPPY_BIRTHDAY'] = 'Gëzuar Ditëlindjen!';
$lang['WRONG_BIRTHDAY_FORMAT'] = 'Formati i ditëlindjes është futur gabim.';
$lang['AGE'] = 'Mosha';
$lang['BIRTHDAY_TO_HIGH'] = 'Na vjen keq, ky site nuk pranon përdorues më të vjetër se %d vjeç';
$lang['BIRTHDAY_TO_LOW'] = 'Na vjen keq, ky site nuk pranon përdorues më të rinj se %d vjeç';
$lang['BIRTHDAY_TODAY'] = 'Përdoruesit me një ditëlindje sot: ';
$lang['BIRTHDAY_WEEK'] = 'Përdoruesit me ditëlindje brenda %d ditësh: %s.';
$lang['NOBIRTHDAY_WEEK'] = 'Nuk ka përdorues që kanë ditëlindjen e ardhshme %d ditë.'; // %d is substituted with the number of days
$lang['NOBIRTHDAY_TODAY'] = 'Nuk ka përdorues që kanë ditëlindjen sot.';
$lang['BIRTHDAY_ENABLE'] = 'Aktivizoni ditëlindjen.';
$lang['BIRTHDAY_MAX_AGE'] = 'Kufiri maksimal i moshës.';
$lang['BIRTHDAY_MIN_AGE'] = 'Kufiri minimal i moshës.';
$lang['BIRTHDAY_CHECK_DAY'] = 'Ditë për të kontrolluar për ditëlindjet e ardhshme';
$lang['YEARS'] = 'Vite.';

$lang['TIMEZONE'] = 'Time zone';
$lang['DATE_FORMAT_EXPLAIN'] = 'Sintaksa e përdorur është e njëjtë me PHP <a href=\'https://www.php.net/manual/en/function.date.php\' target=\'_other\'>date()</a> funksion.';
$lang['SIGNATURE'] = 'Nënshkrimi';
$lang['SIGNATURE_EXPLAIN'] = 'Ky është një bllok i tekstit që mund të shtohet në postimet që bëni. Ka një kufi prej %d karakteresh.';
$lang['SIGNATURE_DISABLE'] = 'Nënshkrimi për shkeljen e rregullave të forumit.';
$lang['PUBLIC_VIEW_EMAIL'] = 'Tregoni adresën e e-mail në profilin tuaj.';

$lang['EMAIL_EXPLAIN'] = 'Në këtë adresë do t\'ju dërgohet për të përfunduar regjistrimin.';

$lang['CURRENT_PASSWORD'] = 'Fjalëkalimi aktual.';
$lang['NEW_PASSWORD'] = 'Fjalëkalimi i ri';
$lang['CONFIRM_PASSWORD'] = 'Konfirmoni fjalëkalimin';
$lang['CONFIRM_PASSWORD_EXPLAIN'] = 'Ju duhet të konfirmoni fjalëkalimin tuaj aktual nëse dëshironi ta ndryshoni atë ose të ndryshoni adresën tuaj të e-mail.';
$lang['PASSWORD_IF_CHANGED'] = 'Ju duhet vetëm të ofroni një fjalëkalim nëse dëshironi ta ndryshoni atë.';
$lang['PASSWORD_CONFIRM_IF_CHANGED'] = 'Ju duhet të konfirmoni fjalëkalimin tuaj vetëm nëse e keni ndryshuar atë më sipër.';

$lang['AUTOLOGIN'] = 'Autologin';
$lang['RESET_AUTOLOGIN'] = 'Rivendosni çelësin e autologin.';
$lang['RESET_AUTOLOGIN_EXPL'] = 'duke përfshirë të gjitha vendet që keni vizituar në forum për të mundësuar auto-identifikimin.';

$lang['AVATAR'] = 'Avatar';
$lang['AVATAR_EXPLAIN'] = 'Tregon një imazh të vogël grafik më poshtë të dhënat tuaja në postime. Vetëm një imazh mund të shfaqet në një kohë, gjerësia e tij nuk mund të jetë më e madhe se %d pixels, lartësia jo më e madhe se %d pixels, dhe madhësia e skedës jo më shumë se %s.';
$lang['AVATAR_DELETE'] = 'Fshini avatar';
$lang['AVATAR_DISABLE'] = 'Opsioni i kontrollit të avatarit është i çaktivizuar për shkelje të <a href="%s"><b>rregullave të forumit</b></a>.';
$lang['UPLOAD_AVATAR_FILE'] = 'Ngarkoni avatar';
$lang['RETURN_PROFILE'] = 'Kthehuni në profil.';
$lang['DELETE_IMAGE'] = 'Fshini imazhin.';
$lang['SET_MONSTERID_AVATAR'] = 'Cakto avatarin e MonsterID';

$lang['NOTIFY_ON_PRIVMSG'] = 'Të njoftojë kur të keni mesazh privat të ri.';
$lang['HIDE_USER'] = 'Fshih statusin tuaj online.';
$lang['HIDDEN_USER'] = 'Përdorues i fshehur.';

$lang['PROFILE_UPDATED'] = 'Profilin tuaj është përditësuar';
$lang['PROFILE_UPDATED_INACTIVE'] = 'Profilin tuaj është përditësuar. Megjithatë, keni ndryshuar detaje të rëndësishme, kështu që llogaria juaj është pasive tani. Kontrolloni e-mailin tuaj për të gjetur se si të rindezoni llogarinë tuaj, ose nëse kërkohet aktivizimi nga administratori, prisni që administratori ta rindezë atë.';

$lang['PASSWORD_LONG'] = 'Fjalëkalimi juaj nuk duhet të jetë më i gjatë se %d karaktere dhe më i shkurtër se %d karaktere.';
$lang['USERNAME_TAKEN'] = 'Na vjen keq, por ky emër përdoruesi është tashmë i zënë.';
$lang['USERNAME_INVALID'] = 'Na vjen keq, por ky emër përdoruesi përmban një karakter të pavlefshëm.';
$lang['USERNAME_DISALLOWED'] = 'Na vjen keq, por ky emër përdoruesi është i ndaluar.';
$lang['USERNAME_TOO_LONG'] = 'Emri juaj është shumë i gjatë.';
$lang['USERNAME_TOO_SMALL'] = 'Emri juaj është shumë i vogël.';
$lang['EMAIL_TAKEN'] = 'Na vjen keq, por kjo adresë e-e-mail është e regjistruar për një përdorues.';
$lang['EMAIL_INVALID'] = 'Na vjen keq, por kjo adresë e-e-mail është e pavlefshme.';
$lang['EMAIL_TOO_LONG'] = 'Email-i juaj është shumë i gjatë.';
$lang['SIGNATURE_TOO_LONG'] = 'Nënshkrimi juaj është shumë i gjatë.';
$lang['SIGNATURE_ERROR_HTML'] = 'Nënshkrimi mund të përmbajë vetëm BBCode.';
$lang['FIELDS_EMPTY'] = 'Ju duhet të plotësoni fushat e kërkuara.';

$lang['WELCOME_SUBJECT'] = 'Mirë se vini në %s Forume';

$lang['ACCOUNT_ADDED'] = 'Faleminderit për regjistrimin. Llogaria juaj është krijuar. Tani mund të hyni me emrin tuaj të përdoruesit dhe fjalëkalimin.';
$lang['ACCOUNT_INACTIVE'] = 'Llogaria juaj është krijuar. Megjithatë, ky forum kërkon aktivizim llogarie. Një çelës aktivizimi i është dërguar në adresën e-e-mail që keni dhënë. Ju lutem kontrolloni e-mailin tuaj për informacion të mëtejshëm.';
$lang['ACCOUNT_ACTIVE'] = 'Llogaria juaj ka qenë vetëm aktivizuar. Ju faleminderit për regjistrimin e';
$lang['ALREADY_ACTIVATED'] = 'Ju keni aktivizuar tashmë llogarinë tuaj';

$lang['WRONG_ACTIVATION'] = 'Çelësi i aktivizimit që keni ofruar nuk përputhet me asnjë në bazën e të dhënave.';
$lang['PASSWORD_UPDATED'] = 'Një fjalëkalim i ri është krijuar; ju lutem kontrolloni e-mailin tuaj për detaje mbi mënyrën se si ta aktivizoni.';
$lang['NO_EMAIL_MATCH'] = 'Adresën e e-mailit që keni ofruar nuk përputhet me atë të listuar për atë emër përdoruesi.';
$lang['PASSWORD_ACTIVATED'] = 'Llogaria juaj është raktivizuar. Për të hyrë, ju lutem përdorni fjalëkalimin e dhënë në e-mailin që keni marrë.';

$lang['SEND_EMAIL_MSG'] = 'Dërgoni një mesazh me e-mail';
$lang['NO_USER_SPECIFIED'] = 'Asnjë përdorues është specifikuar';
$lang['USER_NOT_EXIST'] = 'Ky përdorues nuk ekziston.';
$lang['EMAIL_MESSAGE_DESC'] = 'Ky mesazh do të dërgohet si tekst i thjeshtë, kështu që mos përfshini asnjë HTML ose BBCode. Adresa e kthimit për këtë mesazh do të vendoset në adresën tuaj të e-mailit.';
$lang['RECIPIENT'] = 'Marrësit';
$lang['EMAIL_SENT'] = 'E-mail-i është dërguar.';
$lang['SEND_EMAIL'] = 'Dërgoni e-mail';
$lang['EMPTY_SUBJECT_EMAIL'] = 'Ju duhet të specifikoni një subjekt për e-mail.';
$lang['EMPTY_MESSAGE_EMAIL'] = 'Ju duhet të shkruani një mesazh për t\'u dërguar me e-mail.';

$lang['USER_AGREEMENT'] = 'Marrëveshja e Përdoruesit';
$lang['USER_AGREEMENT_HEAD'] = 'Për të vazhduar, ju duhet të pranoni rregullat e mëposhtme.';
$lang['USER_AGREEMENT_AGREE'] = 'Unë kam lexuar dhe pranuar marrëveshjen e përdoruesit të mësipërme.';

$lang['COPYRIGHT_HOLDERS'] = 'Për mbajtësit e të drejtave të autorit';
$lang['ADVERT'] = 'Reklamojnë në këtë faqe';
$lang['NOT_FOUND'] = 'File nuk u gjet';

// Memberslist
$lang['SORT_TOP_TEN'] = 'Dhjetë të Parë Postera';
$lang['SORT_JOINED'] = 'Data e Bashkimit';
$lang['SORT_USERNAME'] = 'Emrin e përdoruesit';
$lang['SORT_LOCATION'] = 'Location';
$lang['SORT_POSTS'] = 'Gjithsej postimet';
$lang['SORT_EMAIL'] = 'Emaili';
$lang['SORT_WEBSITE'] = 'Website';
$lang['ASC'] = 'Ngjitje';
$lang['DESC'] = 'Duke zbritur';
$lang['ORDER'] = 'Urdhër';

// Thanks
$lang['THANK_TOPIC'] = 'Voto për këtë temë';
$lang['THANKS_GRATITUDE'] = 'Ne e vlerësojmë mirënjohjen tuaj';
$lang['LAST_LIKES'] = 'Votat e fundit';
$lang['LIKE_OWN_POST'] = 'Nuk mund të votoni për temën tuaj të vet';
$lang['NO_LIKES'] = 'Askush nuk dha një votë akoma';
$lang['LIKE_ALREADY'] = 'Ju tashmë keni votuar për këtë temë';

// Invites
$lang['INVITE_CODE'] = 'Kodi i ftesës';
$lang['INCORRECT_INVITE'] = 'Ftesa nuk u gjet';
$lang['INVITE_EXPIRED'] = 'Ftesa skadon';

// Group control panel
$lang['GROUP_CONTROL_PANEL'] = 'Grupet e Përdoruesve';
$lang['GROUP_CONFIGURATION'] = 'Konfigurimi i Grupit';
$lang['GROUP_GOTO_CONFIG'] = 'Shkoni në panelin e Konfigurimit të Grupit';
$lang['GROUP_RETURN'] = 'Kthehu në faqen e Grupit të Përdoruesve';
$lang['MEMBERSHIP_DETAILS'] = 'Detajet e Anëtarësimit në Grup';
$lang['JOIN_A_GROUP'] = 'Bashkohuni në një Grup';

$lang['GROUP_INFORMATION'] = 'Informacioni i Grupit';
$lang['GROUP_NAME'] = 'Emri i Grupit';
$lang['GROUP_DESCRIPTION'] = 'Përshkrimi i Grupit';
$lang['GROUP_SIGNATURE'] = 'Nënshkrimi i Grupit';
$lang['GROUP_MEMBERSHIP'] = 'Anëtarësimi në Grup';
$lang['GROUP_MEMBERS'] = 'Anëtarët e Grupit';
$lang['GROUP_MODERATOR'] = 'Moderatori i Grupit';
$lang['PENDING_MEMBERS'] = 'Anëtarët në Pritje';

$lang['GROUP_TIME'] = 'Krijuar';
$lang['RELEASE_GROUP'] = 'Lirimi i Grupit';

$lang['GROUP_TYPE'] = 'Lloji i Grupit';
$lang['GROUP_OPEN'] = 'Grup i Hapur';
$lang['GROUP_CLOSED'] = 'Grup i Mbyllur';
$lang['GROUP_HIDDEN'] = 'Grup i Fshehur';

$lang['GROUP_MEMBER_MOD'] = 'Moderatori i Grupit';
$lang['GROUP_MEMBER_MEMBER'] = 'Anëtarësimet aktuale';
$lang['GROUP_MEMBER_PENDING'] = 'Anëtarësimet në Pritje';
$lang['GROUP_MEMBER_OPEN'] = 'Grupet e Hapura';
$lang['GROUP_MEMBER_CLOSED'] = 'Grupet e Mbyllura';
$lang['GROUP_MEMBER_HIDDEN'] = 'Grupet e Fshehur';

$lang['NO_GROUPS_EXIST'] = 'Nuk Ekzistojnë Grupe';
$lang['GROUP_NOT_EXIST'] = 'Ky grup përdoruesish nuk ekziston.';
$lang['NO_GROUP_ID_SPECIFIED'] = 'Grupi ID nuk është specifikuar.';

$lang['NO_GROUP_MEMBERS'] = 'Ky grup nuk ka anëtarë.';
$lang['HIDDEN_GROUP_MEMBERS'] = 'Ky grup është i fshehur; nuk mund ta shihni anëtarësimin e tij.';
$lang['NO_PENDING_GROUP_MEMBERS'] = 'Ky grup nuk ka anëtarë në pritje.';
$lang['GROUP_JOINED'] = 'Ju keni abonuar me sukses në këtë grup.<br />Do të njoftoheni kur abonimi juaj të miratohet nga moderatori i grupit.';
$lang['ALREADY_MEMBER_GROUP'] = 'Ju jeni tashmë një anëtar i këtij grupi';
$lang['USER_IS_MEMBER_GROUP'] = '%s është tashmë një anëtar i këtij grupi';
$lang['USER_IS_MOD_GROUP'] = '%s është një moderator i këtij grupi';
$lang['EFFECTIVE_DATE'] = 'Data e fillimit në fuqi';
$lang['COULD_NOT_ADD_USER'] = 'Përdoruesi që keni zgjedhur nuk ekziston.';
$lang['UNSUB_SUCCESS'] = 'Ju keni qenë të shkëputur nga ky grup.';

$lang['APPROVE_SELECTED'] = 'Mirato Të Zgjedhura';
$lang['DENY_SELECTED'] = 'Moho Të Zgjedhura';
$lang['REMOVE_SELECTED'] = 'Heq Të Zgjedhura';
$lang['ADD_MEMBER'] = 'Shto Anëtar';
$lang['NOT_GROUP_MODERATOR'] = 'Ju nuk jeni moderator i këtij grupi, prandaj nuk mund të kryeni këtë veprim.';

$lang['LOGIN_TO_JOIN'] = 'Hyni për t\'u bashkuar ose për të menaxhuar anëtarësimet e grupit.';
$lang['THIS_OPEN_GROUP'] = 'Ky grup është i hapur: klikoni për të kërkuar anëtarësim';
$lang['THIS_CLOSED_GROUP'] = 'Ky grup është i mbyllur: nuk pranohet më shumë përdorues.';
$lang['THIS_HIDDEN_GROUP'] = 'Ky grup është i fshehur: shtimi automatik i përdoruesve nuk lejohet.';
$lang['MEMBER_THIS_GROUP'] = 'Ju jeni një anëtar i këtij grupi';
$lang['PENDING_THIS_GROUP'] = 'Anëtarësimi juaj për këtë grup është në pritje';
$lang['ARE_GROUP_MODERATOR'] = 'Ju jeni moderator i grupit.';
$lang['NONE'] = 'Asnjë';

$lang['UNSUBSCRIBE_GROUP'] = 'Anullo';
$lang['MEMBERS_IN_GROUP'] = 'Anëtarët e grupit';

// Release Groups
$lang['POST_RELEASE_FROM_GROUP'] = 'Postimi i lirimit nga grupi';
$lang['CHOOSE_RELEASE_GROUP'] = 'nuk është zgjedhur';
$lang['ATTACH_RG_SIG'] = 'bashkëngjitni nënshkrimin e grupit të lirimit';
$lang['RELEASE_FROM_RG'] = 'Lirimi është përgatitur nga';
$lang['GROUPS_RELEASES'] = 'Lëshime grupin';
$lang['MORE_RELEASES'] = 'Gjeni të gjitha lëshimet e grupit';
$lang['NOT_A_RELEASE_GROUP'] = 'Ky grup nuk është grup lëshimi';

// Search
$lang['SEARCH_HELP_URL'] = 'Kërko Ndihmë';
$lang['SEARCH_OPTIONS'] = 'Opsionet E Kërkimit';

$lang['SEARCH_WORDS'] = 'Kërko për fjalë kyçe';
$lang['SEARCH_WORDS_EXPL'] = 'Ju mund të përdorni <b>+</b> për të përcaktuar fjalët me të cilat duhet të jenë në rezultatet dhe <b>-</b> për të përcaktuar fjalët me të cilat nuk duhet të jenë në rezultat (ex: "+word1 -word2"). Përdorimi * si wildcard për përputhjet e pjesshme';
$lang['SEARCH_AUTHOR'] = 'Kërko për Autorin';
$lang['SEARCH_AUTHOR_EXPL'] = 'Përdorimi * si wildcard për përputhjet e pjesshme';

$lang['SEARCH_TITLES_ONLY'] = 'Kërko tituj vetëm';
$lang['SEARCH_ALL_WORDS'] = 'të gjitha fjalët';
$lang['IN_MY_POSTS'] = 'Në postimet e mia';
$lang['SEARCH_MY_TOPICS'] = 'në temat e mia';
$lang['NEW_TOPICS'] = 'Tema të reja';

$lang['SEARCH_PREVIOUS'] = 'Kërkim i mëparshëm';

$lang['SORT_BY'] = 'Lloji nga';
$lang['SORT_TIME'] = 'Pas kohës';
$lang['SORT_TOPIC_TITLE'] = 'Titulli i temës';

$lang['DISPLAY_RESULTS_AS'] = 'Trego rezultatet si';
$lang['ALL_AVAILABLE'] = 'Të gjitha në dispozicion';
$lang['BRIEFLY'] = 'Shkurtimisht';

$lang['NO_SEARCH_MATCH'] = 'Nuk ka tema apo postime përmbushën kriteret e kërkimit tuaj';
$lang['FOUND_SEARCH_MATCH'] = 'Këmbëngul gjetjen %d ndeshje'; // e.g. Search found 1 match
$lang['FOUND_SEARCH_MATCHES'] = 'Kërkim gjetur %d ndeshje'; // e.g. Search found 24 matches

$lang['CLOSE_WINDOW'] = 'Afër Dritares';
$lang['HIDE'] = 'fshih';

// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
$lang['SORRY_AUTH_VIEW'] = 'Na vjen keq, por vetëm %s mund të shikoni në këtë forum.';
$lang['SORRY_AUTH_READ'] = 'Na vjen keq, por vetëm %s mund të lexoni temat në këtë forum.';
$lang['SORRY_AUTH_REPLY'] = 'Na vjen keq, por vetëm %s mund të përgjigjeni postimeve në këtë forum.';
$lang['SORRY_AUTH_EDIT'] = 'Na vjen keq, por vetëm %s mund të redaktoni postimet në këtë forum.';
$lang['SORRY_AUTH_DELETE'] = 'Na vjen keq, por vetëm %s mund të fshini postimet në këtë forum.';

// These replace the %s in the above strings
$lang['AUTH_ANONYMOUS_USERS'] = '<b>përdoruesit anonimë</b>';
$lang['AUTH_REGISTERED_USERS'] = '<b>përdoruesit e regjistruar</b>';
$lang['AUTH_USERS_GRANTED_ACCESS'] = '<b>përdoruesit e dhënë me qasje të veçantë</b>';
$lang['AUTH_MODERATORS'] = '<b>moderatorët</b>';
$lang['AUTH_ADMINISTRATORS'] = '<b>administratoret</b>';

$lang['NOT_MODERATOR'] = 'Ju nuk jeni nje moderator i këtij forumi.';
$lang['NOT_AUTHORISED'] = 'Jo i autorizuar';

$lang['YOU_BEEN_BANNED'] = 'Ju jeni ndaluar nga ky forum. Ju lutemi të kontaktoni administratorin e bordit për më shumë informacion.';

// Viewonline
$lang['ONLINE_EXPLAIN'] = 'përdoruesit aktiv gjatë pesë minutave';
$lang['LAST_UPDATED'] = 'Modifikimi i fundit';

// Moderator Control Panel
$lang['MOD_CP'] = 'Paneli i Kontrollit dhe Moderatori';
$lang['SELECT'] = 'Zgjidhni';
$lang['DELETE'] = 'Fshini';
$lang['MOVE'] = 'Lëvizi';
$lang['LOCK'] = 'Bllokim';
$lang['UNLOCK'] = 'Hap';

$lang['TOPICS_REMOVED'] = 'Tema e përzgjedhur kanë qenë hequr me sukses nga databaza.';
$lang['NO_TOPICS_REMOVED'] = 'Nuk ka tema që janë hequr.';
$lang['TOPICS_LOCKED'] = 'Tema të zgjedhura janë bllokuar.';
$lang['TOPICS_MOVED'] = 'Tema të zgjedhura janë lëvizur.';
$lang['TOPICS_UNLOCKED'] = 'Tema të zgjedhura janë hapur.';
$lang['NO_TOPICS_MOVED'] = 'Nuk ka tema të ishin të lëvizur.';

$lang['CONFIRM_DELETE_TOPIC'] = 'A jeni të sigurt që doni të hiqni tema të zgjedhur?';
$lang['CONFIRM_MOVE_TOPIC'] = 'A jeni të sigurt që doni të lëvizni tema të zgjedhura?';

$lang['MOVE_TO_FORUM'] = 'Të shkojë në forum.';
$lang['LEAVE_SHADOW_TOPIC'] = 'Lëni temën e vjetër të forumit në hije.';

$lang['SPLIT_TOPIC_EXPLAIN'] = 'Duke përdorur formulën më poshtë, ju mund të ndani një temë në dy, ose duke zgjedhur postimet individualisht ose duke ndarë në një post të zgjedhur.';
$lang['NEW_TOPIC_TITLE'] = 'Temë e re titulli.';
$lang['FORUM_FOR_NEW_TOPIC'] = 'Forumi për temë të re';
$lang['SPLIT_POSTS'] = 'Të ndarë postimet e zgjedhura.';
$lang['SPLIT_AFTER'] = 'Ndahet nga postimi i zgjedhur.';
$lang['TOPIC_SPLIT'] = 'Tema e përzgjedhur është ndarë me sukses.';
$lang['NONE_SELECTED'] = 'Ju keni asnjë të përzgjedhur për të kryer këtë operacion. Ju lutem shkoni mbrapa dhe zgjidhni paktën një të tillë.';

$lang['THIS_POSTS_IP'] = 'Adresa IP për këtë post';
$lang['OTHER_IP_THIS_USER'] = 'Të tjera adresat IP nga të cilat ky përdorues ka postuar.';
$lang['USERS_THIS_IP'] = 'Përdoruesit që postojnë nga kjo adresë IP.';
$lang['IP_INFO'] = 'Informacion mbi IP.';
$lang['LOOKUP_IP'] = 'Shikoni adresën IP.';

// Timezones ... for display on each page
$lang['ALL_TIMES'] = 'Të gjitha kohët janë të <span class="tz_time">%s</span>'; // This is followed by UTC and the timezone offset

// Friendly dates (used in bb_date function)
$lang['DATETIME']['TODAY'] = 'Sot';
$lang['DATETIME']['YESTERDAY'] = 'Dje';

// Country selector
$lang['COUNTRY'] = 'Vendi';
$lang['SET_OWN_COUNTRY'] = 'Cakto vendin tuaj (Dore)';

// Errors
$lang['INFORMATION'] = 'Informacion';
$lang['ADMIN_REAUTHENTICATE'] = 'Për të administruar/moderuar bordin, ju duhet të ri-vërtetoni vetë.';

// Attachment Mod Main Language Variables
// Auth Related Entries
$lang['RULES_ATTACH_CAN'] = 'Ju <b>mund</b> të bashkëngjitni skedarë në këtë forum.';
$lang['RULES_ATTACH_CANNOT'] = 'Ju <b>nuk mund</b> të bashkëngjitni skedarë në këtë forum.';
$lang['RULES_DOWNLOAD_CAN'] = 'Ju <b>mund</b> të shkarkoni skedarë në këtë forum.';
$lang['RULES_DOWNLOAD_CANNOT'] = 'Ju <b>nuk mund</b> të shkarkoni skedarë në këtë forum.';
$lang['SORRY_AUTH_VIEW_ATTACH'] = 'Na vjen keq, por ju nuk jeni të autorizuar për të parë ose shkarkuar këtë bashkëngjitje.';

// Viewtopic -> Display of Attachments
$lang['DESCRIPTION'] = 'Përshkrimi'; // used in Administration Panel too...
$lang['DOWNLOAD'] = 'Shkarkuar'; // this Language Variable is defined in admin.php too, but we are unable to access it from the main Language File
$lang['FILESIZE'] = 'Madhësia e skedarit';
$lang['MAX_FILE_SIZE'] = 'Madhësia maksimale e skedarit';
$lang['ALLOWED_EXTENSIONS'] = 'Zgjerimet e lejuara';

// Viewtopic -> Display of Attachments -> TorrServer integration
$lang['STREAM'] = 'Stream';
$lang['RESOLUTION'] = 'Zgjidhja: <b>%s</b>';
$lang['CHANNELS'] = 'Kanalet: <b>%s</b>';
$lang['CHANNELS_LAYOUT'] = 'Dizajni i kanaleve: <b>%s</b>';
$lang['BITRATE'] = 'Bitrate: <b>%s</b>';
$lang['SAMPLE_RATE'] = 'Shkalla e mostrës: <b>%s</b>';
$lang['AUDIO_TRACK'] = 'Informacioni i gjurmës audio (%d):';
$lang['AUDIO_CODEC'] = 'Kodeku audio: <b title="%s">%s</b>';
$lang['VIDEO_CODEC'] = 'Kodeku video: <b title="%s">%s</b>';
$lang['SHOW_MORE_INFORMATION_FILE'] = 'Shfaq më shumë informacion rreth skedarit';
$lang['DOWNLOAD_M3U_FILE'] = 'Shkarko skedarin .m3u';
$lang['PLAYBACK_M3U'] = 'Luaj skedarin .m3u';
$lang['COPY_STREAM_LINK'] = 'Kopjo lidhjen e stream në clipboard';
$lang['M3U_NOT_SUPPORTED'] = 'Ky skedar nuk mund të luhet në shfletues ...';
$lang['M3U_FFPROBE_NO_DATA'] = 'Duket se ffprobe nuk do të jetë në gjendje të kthejë të dhëna rreth këtij kodeku ...';
$lang['M3U_NOTICE'] = 'Disa shfletues nuk mbështesin luajtjen e formateve të video të caktuara. Në rastin e tillë, ju mund të shkarkoni skedarin .m3u dhe ta luani duke përdorur një lojtar të palës së tretë';
$lang['TORRSERVER_UNAVAILABLE'] = 'TorrServer nuk është në dispozicion';
$lang['TORRSERVER_INVALID_REQUEST'] = 'Parametrat e kërkesës janë të pavlefshëm';

$lang['ATTACHMENT'] = 'Shtojcat';

// Posting -> Posting Attachments
$lang['ADD_ATTACHMENT'] = 'Shtoni një Bashkëngjitje';
$lang['ADD_ATTACHMENT_EXPLAIN'] = 'Nëse nuk dëshironi të shtoni një Bashkëngjitje në postin tuaj, lutemi lini fushat bosh.';
$lang['UPDATE_ATTACHMENT'] = 'Përditëso Bashkëngjitjen';
$lang['FILENAME'] = 'Emri i skedarit';

// Posting -> Posted Attachments
$lang['POSTED_ATTACHMENTS'] = 'Bashkëngjitjet e postuara.';
$lang['DELETE_ATTACHMENT'] = 'Fshij Bashkëngjitjen.';

// Errors -> Download
$lang['NO_ATTACHMENT_SELECTED'] = 'Ju nuk e keni zgjedhur një shtojcë për të shkarkuar ose të parë.';
$lang['ERROR_NO_ATTACHMENT'] = 'Shtojca e zgjedhur nuk ekziston më.';
$lang['DOWNLOAD_LIMIT_EXCEEDED'] = 'Kufiri ditor i shkarkimeve është kapur. Ju lutemi provoni përsëri nesër.';

//bt
$lang['BT_REG_YES'] = 'Regjistruar';
$lang['BT_REG_NO'] = 'Nuk e regjistruar.';
$lang['BT_REG_ON_TRACKER'] = 'Regjistrohu në tracker.';
$lang['BT_REG_FAIL'] = 'Nuk mund të regjistrohet torrent në tracker.';
$lang['BT_REG_FAIL_SAME_HASH'] = 'Një torrent tjetër me të njëjtin info_hash është tashmë <a href="%s"><b>regjistruar</b></a>.';
$lang['BT_V1_ONLY_DISALLOWED'] = 'torrentet vetëm v1 janë të çaktivizuara nga administrator në këtë moment, të lejuara: v2 dhe hibride';
$lang['BT_V2_ONLY_DISALLOWED'] = 'torrentet vetëm v2 janë të çaktivizuara nga administrator në këtë moment, të lejuara: v1 dhe hibride';
$lang['BT_FLIST'] = 'Lista e skedareve';
$lang['BT_FLIST_LIMIT'] = 'Cilësimet e përcjellësit nuk lejojnë përpunimin e listave me më shumë se %d skedarë. Numri aktual është: %d';
$lang['BT_FLIST_BTMR_HASH'] = 'BTMR Hash';
$lang['BT_FLIST_BTMR_NOTICE'] = 'BitTorrent Merkle Root është një hash i një skedari të inkorporuar në torrentet me mbështetje BitTorrent v2, përdoruesit e tracker mund të nxjerrin, llogarisin ato, gjithashtu shkarkojnë torrentet e dedikuara duke përdorur mjete desktopi si <a href="%s" target="_blank" referrerpolicy="origin">Lexuesi i Merkle Root të Torrentëve</a>';
$lang['BT_FLIST_CREATION_DATE'] = 'Data e krijimit';
$lang['BT_IS_PRIVATE'] = 'Torrent privat';
$lang['BT_FLIST_FILE_PATH'] = 'Rruga ( %s)';
$lang['BT_FLIST_LINK_TITLE'] = 'Hash-et e skedarit | metainformatat .torrent';
$lang['BT_UNREG_FROM_TRACKER'] = 'Hiq nga tracker.';
$lang['BT_UNREGISTERED'] = 'Torrent i paregjistruar.';
$lang['BT_UNREGISTERED_ALREADY'] = 'Torrent tashmë i regjistruar';
$lang['BT_REGISTERED'] = 'Torrent i regjistruar në tracker<br /><br />Tani ju nevojitet <a href="%s"><b>të shkarkoni torrentin tuaj</b></a> dhe ta drejtoni atë duke përdorur klientin tuaj BitTorrent duke zgjedhur dosjen me skedarët origjinalë që po ndash si rrugën e shkarkimit.';
$lang['INVALID_ANN_URL'] = 'URL e shpalljes së pavlefshme [%s]<br /><br />duhet të jetë <b>%s</b>.';
$lang['PASSKEY_ERR_TOR_NOT_REG'] = 'Nuk mund të shtoni passkey<br /><br />Torrent nuk është regjistruar në tracker.';
$lang['BT_PASSKEY'] = 'Passkey';
$lang['BT_GEN_PASSKEY'] = 'krijo një të ri.';
$lang['BT_PASSKEY_VIEW'] = 'tregoni.';
$lang['BT_GEN_PASSKEY_NEW'] = "Kujdes! Pas ndryshimit të çelësit tuaj, do t'ju duhet të ri-shkarkoni të gjitha torrentet aktive!\nA jeni të sigurt se dëshironi të krijoni një çelës të ri?";
$lang['BT_NO_SEARCHABLE_FORUMS'] = 'Nuk u gjetën forume të kërkueshme.';

$lang['SEEDS'] = 'Farë.';
$lang['LEECHS'] = 'Gjaku.';
$lang['SPEED_UP'] = 'Rritni shpejtësinë.';
$lang['SPEED_DOWN'] = 'Rritni shpejtësinë.';

$lang['SEEDERS'] = 'Pasardhësit';
$lang['LEECHERS'] = 'Përdoruesit';
$lang['RELEASING'] = 'Vetë';
$lang['SEEDING'] = 'Farë';
$lang['LEECHING'] = 'Gjaku';
$lang['IS_REGISTERED'] = 'Regjistruar';
$lang['MAGNET'] = 'Link magnetik';
$lang['MAGNET_FOR_GUESTS'] = 'Shfaq link magnetik për mysafirët';
$lang['MAGNET_v2'] = 'Link magnetik (mbështetet BitTorrent v2)';

//torrent status mod
$lang['TOR_STATUS'] = 'Statusi';
$lang['TOR_STATUS_SELECT_ACTION'] = 'Zgjidhni statusin';
$lang['TOR_STATUS_NOT_SELECT'] = 'Ju nuk e keni zgjedhur statusin.';
$lang['TOR_STATUS_SELECT_ALL'] = 'Të gjitha statuset';
$lang['TOR_STATUS_FORBIDDEN'] = 'Statusi i këtij topic është: ';
$lang['TOR_STATUS_NAME'] = [
    TOR_NOT_APPROVED => 'nuk kontrollohet',
    TOR_CLOSED => 'mbyllur',
    TOR_APPROVED => 'kontrolluar',
    TOR_NEED_EDIT => 'nuk është zyrtarizuar deri',
    TOR_NO_DESC => 'nuk është formalizuar.',
    TOR_DUP => 'duplikat',
    TOR_CLOSED_CPHOLD => 'i mbyllur (të drejtat e autorit)',
    TOR_CONSUMED => 'thithet',
    TOR_DOUBTFUL => 'Të dyshimta',
    TOR_CHECKING => 'po kontrollohet',
    TOR_TMP => 'Të përkohshme',
    TOR_PREMOD => 'Para-moderim',
    TOR_REPLENISH => 'po plotësohet',
];
$lang['TOR_STATUS_FAILED'] = 'Kjo status nuk ekziston!';
$lang['TORRENT_FAILED'] = 'Distribucioni nuk u gjet!';
$lang['TOR_STATUS_DUB'] = 'Distribucioni ka të njëjtin status.';
$lang['TOR_DONT_CHANGE'] = 'Ndryshimi i statusit nuk mund të bëhet!';
$lang['TOR_STATUS_OF'] = 'Distribucioni ka statusin e:';
$lang['TOR_STATUS_CHANGED'] = 'Statusi i ndryshuar:';
$lang['TOR_BACK'] = 'Prapa';
$lang['PROCEED'] = 'Vazhdo';
$lang['CHANGE_TOR_TYPE'] = 'Lloji i torrentit u ndryshua me sukses.';
$lang['DEL_TORRENT'] = 'Jeni të sigurt që dëshironi të fshini torrentin?';
$lang['DEL_MOVE_TORRENT'] = 'Jeni të sigurt që dëshironi të fshini dhe të shkurtoni temën?';
$lang['UNEXECUTED_RELEASE'] = 'Keni një lëshim të papërfunduar. Para se të krijoni një të ri, ju lutem përfundoni atë!';
$lang['TOR_STATUS_LOG_ACTION'] = 'Statusi i ri: %s.<br/>Statusi i mëparshëm: %s.';

// tor_comment
$lang['TOR_MOD_TITLE'] = 'Ndryshimi i statusit të shpërndarjes - %s.';
$lang['TOR_MOD_MSG'] = "Përshëndetje, %s.\n\nStatusi i [url=%s]shpërndarjes tuaj[/url] është ndryshuar në [b]%s[/b]";

$lang['TOR_AUTH_TITLE'] = 'Ndryshimet në dizajn - %s.';
$lang['TOR_AUTH_MSG'] = "Përshëndetje, %s.\n\nShpërndarja juaj është ndryshuar - [url=%s]%s[/url]\n\nJu lutem ri-kontrolloni atë.";
$lang['TOR_AUTH_FIXED'] = 'Fiks';
$lang['TOR_AUTH_SENT_COMMENT'] = ' &middot; <span class="seed bold">Informacioni i dërguar për moderator. Të presin.</span>';

$lang['BT_TOPIC_TITLE'] = 'Titulli i temës';
$lang['BT_SEEDER_LAST_SEEN'] = 'Pasardhësit e fundit të parë';
$lang['SIZE'] = 'Madhësia';
$lang['COMPLETED'] = 'Shkarkimet e përfunduara';
$lang['ADDED'] = 'Shtuar';
$lang['DELETE_TORRENT'] = 'Fshini torrent';
$lang['DELETE_MOVE_TORRENT'] = 'Fshij dhe lëviz temën';
$lang['DL_TORRENT'] = 'Shkarko .torrent';
$lang['BT_LAST_POST'] = 'Postimi i fundit';
$lang['BT_CREATED'] = 'Postuar temë';
$lang['BT_REPLIES'] = 'Përgjigje';
$lang['BT_VIEWS'] = 'Shikime';

// Gold/Silver releases
$lang['GOLD'] = 'Ari';
$lang['SILVER'] = 'Argjendi';
$lang['SET_GOLD_TORRENT'] = 'Bëni ari';
$lang['UNSET_GOLD_TORRENT'] = 'Anulo arin';
$lang['SET_SILVER_TORRENT'] = 'Bëni argjend';
$lang['UNSET_SILVER_TORRENT'] = 'Anulo argjendin';
$lang['GOLD_STATUS'] = 'ARI TORRENT! SHKARKO TRAFIKUT NUK E KONSIDEROJNË!';
$lang['SILVER_STATUS'] = 'SILVER TORRENT! SHKARKO TRAFIKUT PJESËRISHT KONSIDEROHET!';
$lang['TOR_TYPE_LOG_ACTION'] = 'Tipo i torrentit e ndërrua në: %s';

$lang['TORRENT_STATUS'] = 'Kërko sipas statusit të publikimit';
$lang['SEARCH_IN_FORUMS'] = 'Kërkimi në Forume';
$lang['SELECT_CAT'] = 'Zgjidhni kategorinë';
$lang['GO_TO_SECTION'] = 'Shko në seksion';
$lang['TORRENTS_FROM'] = 'Postime nga';
$lang['SHOW_ONLY'] = 'Tregoni vetëm';
$lang['SHOW_COLUMN'] = 'Tregoni kolonën';
$lang['SEL_CHAPTERS'] = 'Lidhni për ndarjet e zgjedhura';
$lang['NOT_SEL_CHAPTERS'] = 'Ju nuk keni zgjedhur temat';
$lang['SEL_CHAPTERS_HELP'] = 'Mund të zgjidhni një maksimum %s ndarje';
$lang['HIDE_CONTENTS'] = 'Të fshihen përmbajtjen e {...}';
$lang['FILTER_BY_NAME'] = '<i>Filtri sipas emrit </i>';

$lang['BT_ONLY_ACTIVE'] = 'Aktive';
$lang['BT_ONLY_MY'] = 'Shkëmbim i lirë';
$lang['BT_SEED_EXIST'] = 'Existojnë shih';
$lang['BT_ONLY_NEW'] = 'Të reja nga vizita e fundit';
$lang['BT_SHOW_CAT'] = 'Kategoria';
$lang['BT_SHOW_FORUM'] = 'Forumi';
$lang['BT_SHOW_AUTHOR'] = 'Autori';
$lang['BT_SHOW_SPEED'] = 'Shpejtësia';
$lang['SEED_NOT_SEEN'] = 'Seeder nuk shihet';
$lang['TITLE_MATCH'] = 'Titulli përputhje';
$lang['BT_USER_NOT_FOUND'] = 'nuk u gjet';
$lang['DL_SPEED'] = 'Shpejtësia e përgjithshme e shkarkimit.';

$lang['BT_DISREGARD'] = 'Pa marrë parasysh.';
$lang['BT_NEVER'] = 'kurrë nuk';
$lang['BT_ALL_DAYS_FOR'] = 'gjithë kohën';
$lang['BT_1_DAY_FOR'] = 'dita e fundit';
$lang['BT_3_DAY_FOR'] = 'tre ditët e fundit.';
$lang['BT_7_DAYS_FOR'] = 'javën e kaluar';
$lang['BT_2_WEEKS_FOR'] = 'dy javët e fundit';
$lang['BT_1_MONTH_FOR'] = 'muajin e kaluar';
$lang['BT_1_DAY'] = '1 ditë';
$lang['BT_3_DAYS'] = '3 ditë';
$lang['BT_7_DAYS'] = 'javë.';
$lang['BT_2_WEEKS'] = '2 javë';
$lang['BT_1_MONTH'] = 'muaj';

$lang['DL_LIST_AND_TORRENT_ACTIVITY'] = 'DL-lista dhe aktiviteti Torrente.';
$lang['DLWILL'] = 'Do të shkarkoni';
$lang['DLDOWN'] = 'Po shkarkohet.';
$lang['DLCOMPLETE'] = 'I plotë';
$lang['DLCANCEL'] = 'Shkëput';

$lang['DL_LIST_DEL'] = 'Pastroni DL-listën.';
$lang['DL_LIST_DEL_CONFIRM'] = 'A dëshironi të fshini DL-listën për këtë temë?';
$lang['SHOW_DL_LIST'] = 'Trego DL-listën.';
$lang['SET_DL_STATUS'] = 'Shkarkuar';
$lang['UNSET_DL_STATUS'] = 'Nuk Shkarko';
$lang['TOPICS_DOWN_SETS'] = 'Statusi i temës është ndryshuar në <b>Shkarkim.</b>.';
$lang['TOPICS_DOWN_UNSETS'] = 'Statusi <b>Shkarkim</b> është hequr.';

$lang['TOPIC_DL'] = 'DL';

$lang['MY_DOWNLOADS'] = 'Shkarkimet E Mia';
$lang['SEARCH_DL_WILL'] = 'E planifikuara';
$lang['SEARCH_DL_WILL_DOWNLOADS'] = 'Planifikuar Shkarkime';
$lang['SEARCH_DL_DOWN'] = 'E tanishme';
$lang['SEARCH_DL_COMPLETE'] = 'Përfunduar';
$lang['SEARCH_DL_COMPLETE_DOWNLOADS'] = 'Përfunduar Shkarkime';
$lang['SEARCH_DL_CANCEL'] = 'Anulua';
$lang['CUR_UPLOADS'] = 'Aktuale Ngarkimet';
$lang['SEARCH_RELEASES'] = 'Shpërndarjet';
$lang['TOR_SEARCH_TITLE'] = 'Torrent opsionet e kërkimit';
$lang['OPEN_TOPIC'] = 'Hapni temë';

$lang['REG_NOT_ALLOWED_IN_THIS_FORUM'] = 'Nuk mund të regjistrohen torrent në këtë forum';
$lang['ALREADY_REG'] = 'Torrent tashmë të regjistruar';
$lang['NOT_TORRENT'] = 'Kjo skedë nuk është torrent';
$lang['VIEWING_USER_BT_PROFILE'] = 'Profilit të torrentit';
$lang['CUR_ACTIVE_DLS'] = 'Torrente aktive';

$lang['TD_TRAF'] = 'Sot';
$lang['YS_TRAF'] = 'Dje';
$lang['TOTAL_TRAF'] = 'Gjithsej';

$lang['USER_RATIO'] = 'Raporti';
$lang['MAX_SPEED'] = 'Shpejtësia';
$lang['DOWNLOADED'] = 'Shkarkuar';
$lang['UPLOADED'] = 'E ngarkuar';
$lang['RELEASED'] = 'Lëshuar';
$lang['BONUS'] = 'Në të rralla';
$lang['IT_WILL_BE_DOWN'] = 'ajo do të fillojë të konsiderohet pasi të shkarkohet';
$lang['SPMODE_FULL'] = 'Shfaqni shokët në detaje të plota';

// Seed Bonus
$lang['MY_BONUS'] = 'Im bonus (%s bonuse në magazinë)';
$lang['BONUS_SELECT'] = 'Zgjidhni';
$lang['SEED_BONUS'] = 'Bonus farë';
$lang['EXCHANGE'] = 'Shkëmbimi';
$lang['EXCHANGE_BONUS'] = 'Shkëmbimi i bonuseve të farave';
$lang['BONUS_UPLOAD_DESC'] = '<b>%s në shpërndarje</b> <br /> Për të këmbyer pikët bonus për trafikun %1$s që do të shtohet në totalin e shpërndarjes tuaj.';
$lang['BONUS_UPLOAD_PRICE'] = '<b class="%s">%s</b>';
$lang['PRICE'] = 'Çmimi';
$lang['EXCHANGE_NOT'] = 'Shkëmbimi nuk është në dispozicion';
$lang['BONUS_SUCCES'] = 'Për ju është regjistruar me sukses %s';
$lang['BONUS_NOT_SUCCES'] = '<span class="leech">Ju nuk keni shpërblime të disponueshme. Më shumë ngarkim!</span>';
$lang['BONUS_RETURN'] = 'Kthehu në këmbimin e bonuseve të farave';

$lang['TRACKER'] = 'Tracker';
$lang['RANDOM_RELEASE'] = 'Shpërndarja rastësore';
$lang['OPEN_TOPICS'] = 'Të hapni tema';
$lang['OPEN_IN_SAME_WINDOW'] = 'të hapur në të njëjtën dritare';
$lang['SHOW_TIME_TOPICS'] = 'tregoni kohën e krijimit të temave';
$lang['SHOW_CURSOR'] = 'të nxirni në pah rreshtin nën kursorin';

$lang['BT_LOW_RATIO_FOR_DL'] = 'Me raport <b>%s</b> ju nuk mund të shkarkoni torrents';
$lang['BT_RATIO_WARNING_MSG'] = 'Nëse raporti juaj bie poshtë %s, nuk do të jeni në gjendje të shkarkoni Torrents! <a href="%s"><b>Më shumë rreth vlerësimit.</b></a>';

$lang['SEEDER_LAST_SEEN'] = 'Seeder nuk shihet: <b>%s</b>';

$lang['NEED_TO_LOGIN_FIRST'] = 'Ju duhet të identifikoheni së pari';
$lang['ONLY_FOR_MOD'] = 'Ky opsion vetëm për moderatorët';
$lang['ONLY_FOR_ADMIN'] = 'Ky opsion vetëm për administratorët';
$lang['ONLY_FOR_SUPER_ADMIN'] = 'Ky opsion vetëm për administratorët super';

$lang['LOGS'] = 'Historia e temave';
$lang['FORUM_LOGS'] = 'Historia e Forumit';
$lang['AUTOCLEAN'] = 'Autoclean';
$lang['DESIGNER'] = 'Projektuesi';

$lang['LAST_IP'] = 'Të fundit IP:';
$lang['REG_IP'] = 'Regjistrimi IP:';
$lang['OTHER_IP'] = 'Të tjera IP:';
$lang['ALREADY_REG_IP'] = 'Një përdorues %s është tashmë i regjistruar me adresën tuaj IP. Nëse nuk keni regjistruar më parë në ndjekësin tonë, dërgoni një email te <a href="mailto:%s">Administrator</a>';
$lang['HIDDEN'] = 'Fshehur';

// from admin
$lang['NOT_ADMIN'] = 'Ju nuk jeni i autorizuar për të administruar këtë bord';

$lang['SESSION_EXPIRED'] = 'Sesioni i skaduar';

// Sort memberlist per letter
$lang['POST_LINK'] = 'Postoni lidhjen';
$lang['GOTO_QUOTED_POST'] = 'Shko në postimin e cituar';
$lang['LAST_VISITED'] = 'Vizita e fundit';
$lang['LAST_ACTIVITY'] = 'Aktiviteti i fundit';
$lang['NEVER'] = 'Kurrë nuk';

//mpd
$lang['DELETE_POSTS'] = 'Fshini postimet e zgjedhura';
$lang['DELETE_POSTS_SUCCESFULLY'] = 'Postimet e zgjedhura janë hequr me sukses';
$lang['NO_POSTS_REMOVED'] = 'Nuk janë fshirë postime.';

//ts
$lang['TOPICS_ANNOUNCEMENT'] = 'Njoftimet';
$lang['TOPICS_STICKY'] = 'Ngjites';
$lang['TOPICS_NORMAL'] = 'Temat';

//dpc
$lang['DOUBLE_POST_ERROR'] = 'Nuk mund të bëni një postim tjetër me të njëjtin tekst si ai i fundit.';

//upt
$lang['UPDATE_POST_TIME'] = 'Përditësoni kohën e postimit';

$lang['TOPIC_SPLIT_NEW'] = 'Temë të re';
$lang['TOPIC_SPLIT_OLD'] = 'Vjetër temë';
$lang['BOT_LEAVE_MSG_MOVED'] = 'Shtoni mesazhin bot për të shpërndarë';
$lang['BOT_REASON_MOVED'] = 'Arsye për të lëvizur';
$lang['BOT_AFTER_SPLIT_TO_OLD'] = 'Shtoni mesazhin bot për të shpërndarë në <b>temën e vjetër</b>';
$lang['BOT_AFTER_SPLIT_TO_NEW'] = 'Shtoni mesazhin bot për të shpërndarë në <b>temën e re</b>';
//qr
$lang['QUICK_REPLY'] = 'Përgjigje të shpejta';
$lang['INS_NAME_TIP'] = 'Shkruani emrin ose tekstin e përzgjedhur.';
$lang['QUOTE_SELECTED'] = 'Citim i zgjedhur';
$lang['QR_NOTIFY'] = 'Njoftoni në përgjigje';
$lang['QR_USERNAME'] = 'Emri';
$lang['QR_FONT_SEL'] = 'Font face';
$lang['QR_COLOR_SEL'] = 'Font color';
$lang['QR_SIZE_SEL'] = 'Madhësinë e shkrimit';
$lang['COLOR_STEEL_BLUE'] = 'Çeliku Blu';
$lang['COLOR_GRAY'] = 'Gri';
$lang['COLOR_DARK_GREEN'] = 'Jeshile e errët';

// Short buttons
$lang['IP'] = 'IP';
$lang['POLL'] = 'Anketë';
$lang['MODERATE'] = 'Moderator';
$lang['SEND_PM_SHORT'] = 'PD';
$lang['WEBSITE_SHORT'] = 'WWW';

$lang['DECLENSION']['REPLIES'] = ['përgjigje', 'përgjigje'];
$lang['DECLENSION']['TIMES'] = ['kohë', 'kohët'];
$lang['DECLENSION']['FILES'] = ['skedar', 'skedarë'];

$lang['AUTH_TYPES'][AUTH_ALL] = $lang['AUTH_ANONYMOUS_USERS'];
$lang['AUTH_TYPES'][AUTH_REG] = $lang['AUTH_REGISTERED_USERS'];
$lang['AUTH_TYPES'][AUTH_ACL] = $lang['AUTH_USERS_GRANTED_ACCESS'];
$lang['AUTH_TYPES'][AUTH_MOD] = $lang['AUTH_MODERATORS'];
$lang['AUTH_TYPES'][AUTH_ADMIN] = $lang['AUTH_ADMINISTRATORS'];

$lang['NEW_USER_REG_DISABLED'] = 'Na vjen keq, regjistrimi është me aftësi të kufizuara në këtë kohë';
$lang['ONLY_NEW_POSTS'] = 'vetëm postimet e reja';
$lang['ONLY_NEW_TOPICS'] = 'vetëm tema të reja';

$lang['TORHELP_TITLE'] = 'Ju lutem ndihmoni në mbajtjen e këtyre torrenteve!';
$lang['STATISTICS'] = 'Statistikat';
$lang['STATUS'] = 'Statusi';
$lang['ACTION'] = 'Veprim';
$lang['REASON'] = 'Arsyeja';
$lang['COMMENT'] = 'Koment';

// search
$lang['SEARCH_S'] = 'kërkim...';
$lang['FORUM_S'] = 'në forum';
$lang['TRACKER_S'] = 'në ndjekës';
$lang['HASH_S'] = 'nga info_hash';

// copyright
$lang['NOTICE'] = '!KUJDES!';
$lang['COPY'] = 'Site-i nuk ofron versione elektronike të produkteve dhe angazhohen vetëm në mbledhjen dhe katalogimin e referencave të dërguara dhe të publikuara në forum nga lexuesit tanë. Nëse jeni pronari ligjor i ndonjë materiali të dorëzuar dhe nuk dëshironi që referenca e saj të ishte në katalogun tonë, kontaktoni me ne dhe ne do ta hiqnim atë menjëherë. Skedarët për shkëmbim në ndjekës ofrohen nga përdoruesit e sitit, dhe administrata nuk mban përgjegjësi për përmbajtjen e tyre. Ju lutemi mos ngarkoni skedarë të mbrojtur nga të drejtat e autorit, ose skedarë me përmbajtje të paligjshme!';

// FILELIST
$lang['COLLAPSE'] = 'Kolapso directory';
$lang['EXPAND'] = 'Zgjerohet';
$lang['SWITCH'] = 'Ndrysho';
$lang['TOGGLE_WINDOW_FULL_SIZE'] = 'Rrit/ul dritaren';
$lang['EMPTY_TOPIC_ID'] = 'Mungon identifikuesi i temës';
$lang['TOR_NOT_FOUND'] = 'Skedari mungon në server';
$lang['ERROR_BUILD'] = 'Përmbajtja e këtij torrent file nuk mund të shihet në faqen e internetit (kjo nuk ishte e mundur për të ndërtuar një listë e dosjeve)';
$lang['TORFILE_INVALID'] = 'Torrent file është korruptuar';

// Profile
$lang['WEBSITE_ERROR'] = '"Site" mund të përmbajë vetëm http://sitename';
$lang['PROFILE_USER'] = 'Shihni profilin';
$lang['GOOD_UPDATE'] = 'me sukses i ndryshuar';
$lang['UCP_DOWNLOADS'] = 'Shkarkime';
$lang['HIDE_DOWNLOADS'] = 'Të fshehura listës aktuale të shkarkimeve në profilin tuaj';
$lang['BAN_USER'] = 'Për të parandaluar një përdorues';
$lang['USER_NOT_ALLOWED'] = 'Përdoruesit nuk lejohen';
$lang['HIDE_AVATARS'] = 'Tregoni avatarët';
$lang['SHOW_CAPTION'] = 'Tregoni nënshkrimin tuaj';
$lang['DOWNLOAD_TORRENT'] = 'Shkarko torrentin';
$lang['SEND_PM'] = 'Dërgo PM';
$lang['SEND_MESSAGE'] = 'Dërgo mesazh';
$lang['NEW_THREADS'] = 'Temat E Reja';
$lang['PROFILE_NOT_FOUND'] = 'Profili nuk është gjetur';

$lang['USER_DELETE_EXPLAIN'] = 'Fshini këtë përdorues';
$lang['USER_DELETE_ME'] = 'Na vjen keq, llogaria juaj është e ndaluar për të hequr!';
$lang['USER_DELETE_CSV'] = 'Na vjen keq, kjo llogari nuk është e lejuar për të fshirë!';
$lang['USER_DELETE_CONFIRM'] = 'A jeni të sigurt se dëshironi të fshini këtë përdorues?';
$lang['USER_DELETED'] = 'Përdoruesi është fshirë me sukses';
$lang['DELETE_USER_ALL_POSTS'] = 'Për të fshirë të gjitha postimet e përdoruesit';
$lang['DELETE_USER_ALL_POSTS_CONFIRM'] = 'Jeni i sigurt se doni të fshini të gjithë mesazhet dhe të gjitha temat e filluara nga ky përdorues?';
$lang['DELETE_USER_POSTS'] = 'Fshij të gjitha mesazhet, përveç atyre të para';
$lang['DELETE_USER_POSTS_ME'] = 'Jeni i sigurt se doni të fshini të gjitha postimet e mia?';
$lang['DELETE_USER_POSTS_CONFIRM'] = 'A jeni të sigurt se dëshironi të fshini të gjitha mesazhet, përveç atyre të para?';
$lang['USER_DELETED_POSTS'] = 'Postimet janë hequr me sukses';

$lang['USER'] = 'Përdorues';
$lang['ROLE'] = 'Roli:';
$lang['MEMBERSHIP_IN'] = 'Anëtarësimi në';
$lang['PARTY'] = 'Partia:';
$lang['CANDIDATE'] = 'Kandidati:';
$lang['INDIVIDUAL'] = 'Ka të drejtat individuale';
$lang['GROUP_LIST_HIDDEN'] = 'Ju nuk jeni të autorizuar të shikoni grupet e fshehura';

$lang['USER_ACTIVATE'] = 'Aktivizoni';
$lang['USER_DEACTIVATE'] = 'Çaktivizoni';
$lang['DEACTIVATE_CONFIRM'] = 'A jeni të sigurt se dëshironi të çaktivizoni këtë përdorues?';
$lang['USER_ACTIVATE_ON'] = 'Përdoruesi ka qenë i aktivizuar me sukses';
$lang['USER_DEACTIVATE_ME'] = 'Ju nuk mund të çaktivizoni llogarinë time!';
$lang['ACTIVATE_CONFIRM'] = 'A jeni të sigurt që dëshironi të çaktivizoni këtë përdorues?';
$lang['USER_ACTIVATE_OFF'] = 'Përdoruesi është çaktivizuar me sukses';

// Register
$lang['CHOOSE_A_NAME'] = 'Ju duhet të zgjidhni një emër';
$lang['CHOOSE_E_MAIL'] = 'Ju duhet të specifikoni e-mail';
$lang['CHOOSE_PASS'] = 'Fusha fjalëkalimi nuk duhet të jetë bosh!';
$lang['CHOOSE_PASS_ERR'] = 'Hyrë në fjalëkalimet nuk përputhen';
$lang['CHOOSE_PASS_ERR_MIN'] = 'Fjalëkalimin tuaj duhet të jetë të paktën %d karaktere';
$lang['CHOOSE_PASS_ERR_MAX'] = 'Fjalëkalimi juaj nuk duhet të jetë më i gjatë se %d karaktere';
$lang['CHOOSE_PASS_ERR_NUM'] = 'Fjalëkalimi duhet të përmbajë të paktën një numër';
$lang['CHOOSE_PASS_ERR_LETTER'] = 'Fjalëkalimi duhet të përmbajë të paktën një shkronjë të alfabetit latin';
$lang['CHOOSE_PASS_ERR_LETTER_UPPERCASE'] = 'Fjalëkalimi duhet të përmbajë të paktën një shkronjë të madhe të alfabetit latin';
$lang['CHOOSE_PASS_ERR_SPEC_SYMBOL'] = 'Fjalëkalimi duhet të përmbajë të paktën një karakter të veçantë';
$lang['CHOOSE_PASS_OK'] = 'Fjalëkalimet përputhen';
$lang['CHOOSE_PASS_REG_OK'] = 'Fjalëkalimet ndeshje, ju mund të vazhdoni me regjistrimin';
$lang['CHOOSE_PASS_FAILED'] = 'Për të ndryshuar fjalëkalimin, duhet të specifikoni fjalëkalimin aktual saktë';
$lang['EMAILER_DISABLED'] = 'Na vjen keq, ky funksion përkohësisht nuk punon';
$lang['REGISTERED_IN_TIME'] = 'Regjistrimi është aktualisht i mbyllur<br /><br />Regjistrimi është i disponueshëm gjatë: %s<br />Koha aktuale e serverit: %s<br /><br />Kërkojmë ndjesë për inconveniencen';
$lang['AUTOCOMPLETE'] = 'Gjeneroni fjalëkalimin';
$lang['YOUR_NEW_PASSWORD'] = 'Fjalëkalimi juaj i ri:';
$lang['REGENERATE'] = 'Rilind';

// Debug
$lang['EXECUTION_TIME'] = 'Koha e ekzekutimit:';
$lang['SEC'] = 'sec';
$lang['ON'] = 'në';
$lang['OFF'] = 'off';
$lang['MEMORY'] = 'Kujtesa: ';
$lang['QUERIES'] = 'pyetje';
$lang['SHOW_LOG'] = 'Shfaq log-un';
$lang['EXPLAINED_LOG'] = 'Log i shpjeguar';
$lang['CUT_LOG'] = 'Prerë pyetje të gjata';

// Attach Guest
$lang['DOWNLOAD_INFO'] = 'Shkarko pa pagesë dhe me shpejtësi maksimale!';
$lang['HOW_TO_DOWNLOAD'] = 'Si për të Shkarkuar?';
$lang['WHAT_IS_A_TORRENT'] = 'Çfarë është një torrent?';
$lang['RATINGS_AND_LIMITATIONS'] = 'Vlerësimet dhe Kufizimet';

$lang['SCREENSHOTS_RULES'] = 'Lexoni rregullat e përcaktuara screenshots!';
$lang['AJAX_EDIT_OPEN'] = 'A keni hapur tashmë një redaktim të shpejtë!';
$lang['GO_TO_PAGE'] = 'Shko tek faqja ...';
$lang['EDIT'] = 'Redakto';
$lang['SAVE'] = 'Ruaj';
$lang['NEW_WINDOW'] = 'në një dritare të re';

// BB Code
$lang['ALIGN'] = 'Harmonizojë:';
$lang['LEFT'] = 'Në të majtë';
$lang['RIGHT'] = 'Në të djathtë';
$lang['CENTER'] = 'Të përqëndruar';
$lang['JUSTIFY'] = 'I përshtatëshëm për gjerësinë';
$lang['HOR_LINE'] = 'Vijë horizontale (Ctrl+8)';
$lang['NEW_LINE'] = 'Linjë të re';
$lang['BOLD'] = 'Tekst Bold: [b]text[/b] (Ctrl+B)';
$lang['ITALIC'] = 'Italic tekst: [i]text[/i] (Ctrl+I)';
$lang['UNDERLINE'] = 'Theksoj tekstin: [u]text[/u] (Ctrl+U)';
$lang['STRIKEOUT'] = 'Fshi tekstin: [s]text[/s] (Ctrl+S)';
$lang['BOX_TAG'] = 'Kornizë përreth tekstit: [box]teksti[/box] ose [box=#333,#888]teksti[/box]';
$lang['INDENT_TAG'] = 'Shtoni indentimin: [indent]teksti[/indent]';
$lang['PRE_TAG'] = 'Tekst i formatizuar paraprakisht: [pre]teksti[/pre]';
$lang['NFO_TAG'] = 'NFO: [nfo]teksti[/nfo]';
$lang['SUPERSCRIPT'] = 'Teksti superscript: [sup]teksti[/sup]';
$lang['SUBSCRIPT'] = 'Teksti subscript: [sub]teksti[/sub]';
$lang['QUOTE_TITLE'] = 'Citoj tekstin: [quote]text[/quote] (Ctrl+Q)';
$lang['IMG_TITLE'] = 'Fut imazhin: [img]https://image_url[/img] (Ctrl+R)';
$lang['URL'] = 'URL';
$lang['URL_TITLE'] = 'Fut URL-në: [url]https://url[/url] ose [url=https://url]tekst URL[/url] (Ctrl+W)';
$lang['CODE_TITLE'] = 'Shfaq kodin: [code]code[/code] (Ctrl+K)';
$lang['LIST'] = 'Lista';
$lang['LIST_TITLE'] = 'Lista: [list]text[/list] (Ctrl+l)';
$lang['LIST_ITEM'] = 'Lista e renditur: [list=]text[/list] (Ctrl+O)';
$lang['ACRONYM'] = 'Akronim';
$lang['ACRONYM_TITLE'] = 'Akronim: [acronym=Teksti i plotë]Tekst i shkurtër[/acronym]';
$lang['QUOTE_SEL'] = 'Citim të zgjedhur';
$lang['JAVASCRIPT_ON'] = 'JavaScript duhet të jetë i aktivizuar për të dërguar mesazhe';

$lang['NEW'] = 'Të reja';
$lang['NEWEST'] = 'Më të reja';
$lang['LATEST'] = 'Të fundit';
$lang['POST'] = 'Post';
$lang['OLD'] = 'Vjetër';

// DL-List
$lang['DL_USER'] = 'Emrin e përdoruesit';
$lang['DL_PERCENT'] = 'Përqindja e plotë';
$lang['DL_UL'] = 'UL';
$lang['DL_DL'] = 'DL';
$lang['DL_UL_SPEED'] = 'UL shpejtësinë';
$lang['DL_DL_SPEED'] = 'DL shpejtësi';
$lang['DL_PORT'] = 'Port';
$lang['DL_CLIENT'] = 'Klienti BitTorrent';
$lang['DL_FORMULA'] = 'Formula: Uploaded/TorrentSize';
$lang['DL_ULR'] = 'ULR';
$lang['DL_STOPPED'] = 'u ndal';
$lang['DL_UPD'] = 'koha e përditësimit: ';
$lang['DL_INFO'] = 'tregon të dhënat <i><b>vetëm për seancën aktuale</b></i>';
$lang['HIDE_PEER_TORRENT_CLIENT'] = 'Fshih emrin e klientit tim BitTorrent në listën e peer';
$lang['HIDE_PEER_COUNTRY_NAME'] = 'Fshih emrin tim të vendit në listën e peer';
$lang['HIDE_PEER_USERNAME'] = 'Fshih emrin tim të përdoruesit në listën e peer';

// Post PIN
$lang['POST_PIN'] = 'Ngjit postimin e parë';
$lang['POST_UNPIN'] = 'Hiq postimin e parë';
$lang['POST_PINNED'] = 'Postimi i parë i ngjitur';
$lang['POST_UNPINNED'] = 'Postimi i parë i çliruar';

// Management of my messages
$lang['GOTO_MY_MESSAGE'] = 'Mbyll dhe kthehu në listën "Mesazhet e Mia"';
$lang['DEL_MY_MESSAGE'] = 'Tema të zgjedhura janë fshirë nga "Mesazhet e Mia"';
$lang['NO_TOPICS_MY_MESSAGE'] = 'Nuk ka tema në listën e postimeve tuaja (ndoshta i keni fshirë tanimë)';
$lang['EDIT_MY_MESSAGE_LIST'] = 'redaktoni listën';
$lang['SELECT_INVERT'] = 'zgjidhni / invert';
$lang['RESTORE_ALL_POSTS'] = 'Rivendos të gjitha postimet';
$lang['DEL_LIST_MY_MESSAGE'] = 'Fshini temën e përzgjedhur nga lista';
$lang['DEL_LIST_MY_MESSAGE_INFO'] = 'Pas largimit, për të rinovuar <b>të gjithë listën</b>, ajo mund të paraqesë tashmë temat e fshira.';
$lang['DEL_LIST_INFO'] = 'Për të fshirë një urdhër nga lista, klikoni mbi ikonën në të majtë të emrat e çdo seksion';

// Watched topics
$lang['WATCHED_TOPICS'] = 'Shikuar temat';
$lang['NO_WATCHED_TOPICS'] = 'Nuk po shikoni asnjë temë';

// set_die_append_msg
$lang['INDEX_RETURN'] = 'Mbrapa në faqen kryesore';
$lang['FORUM_RETURN'] = 'Mbrapsht në forum';
$lang['TOPIC_RETURN'] = 'Kthehemi në temë';
$lang['POST_RETURN'] = 'Shko tek postimi';
$lang['PROFILE_EDIT_RETURN'] = 'Kthehu në redaktim';
$lang['PROFILE_RETURN'] = 'Shko tek profili';

$lang['INDEXER'] = 'Reindex kërko';
$lang['INDEXER_SUCCESS'] = 'Indeksi i kërkimeve u përditësua me sukses';

$lang['FORUM_STYLE'] = 'Stili i Forumit';

$lang['LINKS_ARE_FORBIDDEN'] = 'Lidhjet janë të ndaluara';

$lang['GENERAL'] = 'Administrimi i Përgjithshëm';
$lang['USERS'] = 'Administrimi i Përdoruesve';
$lang['GROUPS'] = 'Administrimi i Grupi';
$lang['FORUMS'] = 'Administrimi i Forumit';
$lang['MODS'] = 'Modifikimet';

$lang['CONFIGURATION'] = 'Konfigurimi';
$lang['MANAGE'] = 'Menaxhimi';
$lang['DISALLOW'] = 'Lejoj emrat';
$lang['PRUNE'] = 'Tëharrje';
$lang['MASS_EMAIL'] = 'Email në Masë';
$lang['RANKS'] = 'Radhët';
$lang['SMILIES'] = 'Smilies';
$lang['BAN_MANAGEMENT'] = 'Kontrolli i Ban';
$lang['WORD_CENSOR'] = 'Censurimi i Fjalëve';
$lang['CRON'] = 'Task Scheduler (cron)';
$lang['REBUILD_SEARCH_INDEX'] = 'Të rindërtoj indeksin e kërkimit';
$lang['FORUM_CONFIG'] = 'Cilësimet e Forumit';
$lang['ACTIONS_LOG'] = 'Raporti mbi veprime';

// Migrations
$lang['MIGRATIONS_STATUS'] = 'Statusi i Migracionit të Bazës së të Dhënave';
$lang['MIGRATIONS_DATABASE_NAME'] = 'Emri i Bazës së të Dhënave';
$lang['MIGRATIONS_DATABASE_TOTAL'] = 'Të gjitha Tabelat';
$lang['MIGRATIONS_DATABASE_SIZE'] = 'Madhësia e Bazës së të Dhënave';
$lang['MIGRATIONS_DATABASE_INFO'] = 'Informacioni i Bazës së të Dhënave';
$lang['MIGRATIONS_SYSTEM'] = 'Sistemi i Migracionit';
$lang['MIGRATIONS_NEEDS_SETUP'] = 'Nevojitet Konfigurim';
$lang['MIGRATIONS_ACTIVE'] = 'Aktive';
$lang['MIGRATIONS_NOT_INITIALIZED'] = 'Nuk është inicializuar';
$lang['MIGRATIONS_UP_TO_DATE'] = 'Të gjitha të përditësuara';
$lang['MIGRATIONS_PENDING_COUNT'] = 'në pritje';
$lang['MIGRATIONS_APPLIED'] = 'Migrime të aplikuara';
$lang['MIGRATIONS_PENDING'] = 'Migrime në pritje';
$lang['MIGRATIONS_VERSION'] = 'Versioni';
$lang['MIGRATIONS_NAME'] = 'Emri i Migracionit';
$lang['MIGRATIONS_FILE'] = 'Skedari i Migracionit';
$lang['MIGRATIONS_APPLIED_AT'] = 'E aplikuar Në';
$lang['MIGRATIONS_COMPLETED_AT'] = 'Përfunduar Në';
$lang['MIGRATIONS_CURRENT_VERSION'] = 'Versioni Aktual';
$lang['MIGRATIONS_NOT_APPLIED'] = 'Nuk janë aplikuar migrime';
$lang['MIGRATIONS_INSTRUCTIONS'] = 'Udhëzime';
$lang['MIGRATIONS_SETUP_STATUS'] = 'Statusi i Konfigurimit';
$lang['MIGRATIONS_SETUP_GUIDE'] = 'Shihni udhëzuesin e konfigurimit më poshtë';
$lang['MIGRATIONS_ACTION_REQUIRED'] = 'Veprimi i Kërkuar';

// Index
$lang['MAIN_INDEX'] = 'Indeksi i Forumit';
$lang['FORUM_STATS'] = 'Statistikat e Forumit';
$lang['ADMIN_INDEX'] = 'Indeksi i Administratorit';
$lang['CREATE_PROFILE'] = 'Krijoni Profilin';

$lang['TP_VERSION'] = 'Versioni TorrentPier';
$lang['TP_RELEASE_DATE'] = 'Data e Lëshimit';
$lang['PHP_INFO'] = 'Informacion në lidhje me PHP';

$lang['CLICK_RETURN_ADMIN_INDEX'] = 'Kliko %sKëtu%s për t\'u kthyer në Indeksi Admin';

$lang['NUMBER_POSTS'] = 'Numri i Postimeve';
$lang['POSTS_PER_DAY'] = 'Postime në Ditë';
$lang['NUMBER_TOPICS'] = 'Numri i Temave';
$lang['TOPICS_PER_DAY'] = 'Tema në Ditë';
$lang['NUMBER_USERS'] = 'Numri i Përdoruesve';
$lang['USERS_PER_DAY'] = 'Përdoruesit në Ditë';
$lang['BOARD_STARTED'] = 'Bordi Filloi';
$lang['AVATAR_DIR_SIZE'] = 'Madhësia e Direktories së Avatarëve';
$lang['NOT_AVAILABLE'] = 'Jo në Disponim';

// System information
$lang['ADMIN_SYSTEM_INFORMATION'] = 'Informacioni i sistemit';
$lang['ADMIN_SYSTEM_OS'] = 'OS:';
$lang['ADMIN_SYSTEM_PHP_VER'] = 'PHP:';
$lang['ADMIN_SYSTEM_DATABASE_VER'] = 'Baza e të Dhënave:';
$lang['ADMIN_SYSTEM_PHP_MEM_LIMIT'] = 'Limiti i memories:';
$lang['ADMIN_SYSTEM_DISK_SPACE_INFO_TITLE'] = 'Informacioni mbi hapësirën në disk:';
$lang['ADMIN_SYSTEM_DISK_SPACE_INFO'] = '%s (e përdorur: %s | e lirë: %s)';
$lang['ADMIN_SYSTEM_PHP_MAX_EXECUTION_TIME'] = 'Koha maksimale e ekzekutimit:';

// Clear Cache
$lang['DATASTORE'] = 'Data Store';
$lang['CLEAR_CACHE'] = 'Cache';
$lang['CLEAR_TEMPLATES_CACHE'] = 'Cache e Shablloneve';

// Update
$lang['USER_LEVELS'] = 'Nivelet e Përdoruesit';
$lang['USER_LEVELS_UPDATED'] = 'Nivelet e Përdoruesve janë përditësuar';

// Synchronize
$lang['SYNCHRONIZE'] = 'Sinkronizoni';
$lang['TOPICS_DATA_SYNCHRONIZED'] = 'Të dhënat e Temave janë sinkronizuar';
$lang['USER_POSTS_COUNT'] = 'Numri i Postimeve të Përdoruesve';
$lang['USER_POSTS_COUNT_SYNCHRONIZED'] = 'Numri i Postimeve të Përdoruesve ka qenë i sinkronizuar';

// Online Userlist
$lang['SHOW_ONLINE_USERLIST'] = 'Trego Listën e Përdoruesve në Linjë';

// Robots.txt editor
$lang['ROBOTS_TXT_EDITOR_TITLE'] = 'Menaxho robots.txt';
$lang['ROBOTS_TXT_UPDATED_SUCCESSFULLY'] = 'File robots.txt është përditësuar me sukses';
$lang['CLICK_RETURN_ROBOTS_TXT_CONFIG'] = '%sKlikoni këtu për t\'u rikthyer te menaxheri robots.txt%s';

// Auth pages
$lang['USER_SELECT'] = 'Zgjidhni një Përdorues';
$lang['GROUP_SELECT'] = 'Zgjidhni një Grup';
$lang['SELECT_A_FORUM'] = 'Zgjidhni një Forum';
$lang['AUTH_CONTROL_USER'] = 'Kontrolli i Lejeve të Përdoruesve';
$lang['AUTH_CONTROL_GROUP'] = 'Kontrolli i Lejeve të Grupi';
$lang['AUTH_CONTROL_FORUM'] = 'Kontrolli i Lejeve të Forumit';
$lang['LOOK_UP_FORUM'] = 'Shikoni Forumin';

$lang['GROUP_AUTH_EXPLAIN'] = 'Këtu ju mund të ndryshoni lejet dhe statusin e moderatorëve të caktuar për çdo grup përdoruesish. Mos harroni se kur ndryshoni lejet e grupit, lejet e përdoruesit individual mund të lejojnë ende përdoruesit të hyjnë në forume, etj. Ju do të jeni të paralajmëruar nëse është ky rasti.';
$lang['USER_AUTH_EXPLAIN'] = 'Këtu ju mund të ndryshoni lejet dhe statusin e moderatorëve të caktuar për çdo përdorues individual. Mos harroni se kur ndryshoni lejet e përdoruesve, lejet e grupit mund të lejojnë ende përdoruesin të hyjë në forume, etj. Ju do të jeni të paralajmëruar nëse është ky rasti.';
$lang['FORUM_AUTH_EXPLAIN'] = 'Këtu mund të ndryshoni nivelet e autorizimit të çdo forumi. Ju do të keni një metodë të thjeshtë dhe një të avancuar për ta bërë këtë, ku e avancuara ofron kontroll më të madh mbi çdo operacion të forumit. Mos harroni se ndryshimi i niveleve të lejeve të forumeve do të ndikojë në cilët përdorues mund të kryejnë operacione të ndryshme brenda tyre.';

$lang['SIMPLE_MODE'] = 'Mënyra e Thjeshtë';
$lang['ADVANCED_MODE'] = 'Mënyra e Avancuar';
$lang['MODERATOR_STATUS'] = 'Statusi i Moderatorit';

$lang['PUBLIC'] = 'Publik';
$lang['PRIVATE'] = 'Privatë';
$lang['REGISTERED'] = 'Regjistruar';
$lang['ADMINISTRATORS'] = 'Administratorët';

// These are displayed in the drop-down boxes for advanced mode forum auth, try and keep them short!
$lang['FORUM_ALL'] = 'Të Gjitha';
$lang['FORUM_REG'] = 'REG';
$lang['FORUM_PRIVATE'] = 'PRIVATE';
$lang['FORUM_MOD'] = 'MOD';
$lang['FORUM_ADMIN'] = 'ADMIN';

$lang['AUTH_VIEW'] = $lang['VIEW'] = 'Shfaqja';
$lang['AUTH_READ'] = $lang['READ'] = 'Lexoni';
$lang['AUTH_POST'] = $lang['POST'] = 'Post';
$lang['AUTH_REPLY'] = $lang['REPLY'] = 'Përgjigje';
$lang['AUTH_EDIT'] = $lang['EDIT'] = 'Redakto';
$lang['AUTH_DELETE'] = $lang['DELETE'] = 'Fshini';
$lang['AUTH_STICKY'] = $lang['STICKY'] = 'Ngjitet';
$lang['AUTH_ANNOUNCE'] = $lang['ANNOUNCE'] = 'Njoftoni';
$lang['AUTH_VOTE'] = $lang['VOTE'] = 'Votoni';
$lang['AUTH_POLLCREATE'] = $lang['POLLCREATE'] = 'Krijoni Opinionin';
$lang['AUTH_ATTACHMENTS'] = $lang['AUTH_ATTACH'] = 'Postoni Skedarë';
$lang['AUTH_DOWNLOAD'] = 'Shkarkoni Skedarë';

$lang['USER_LEVEL'] = 'Përdoruesi i Nivelit';
$lang['AUTH_USER'] = 'Përdorues';
$lang['AUTH_ADMIN'] = 'Administratori';
$lang['FORUM_AUTH_UPDATED'] = 'Lejet e Forumit janë përditësuar';
$lang['APPLY_TO_SUBFORUMS'] = 'Apliko te nënforume';

$lang['AUTH_UPDATED'] = 'Lejet kanë qenë të përditësuara';
$lang['AUTH_GENERAL_ERROR'] = 'Nuk mund të përditësohet statusi i administratorit';
$lang['AUTH_SELF_ERROR'] = 'Nuk mund të ndryshoni veten nga admin në përdorues';
$lang['NO_FORUMS_AVAILABLE'] = 'Nuk ka forume të disponueshme. Krijoni forume së pari për të menaxhuar lejet.';
$lang['CLICK_RETURN_USERAUTH'] = 'Kliko %sKëtu%s të kthehshe në Lejet e Përdoruesit';
$lang['CLICK_RETURN_GROUPAUTH'] = 'Kliko %sKëtu%s të kthehesh te Lejet e Grupi';
$lang['CLICK_RETURN_FORUMAUTH'] = 'Kliko %sKëtu%s të kthehesh në Lejet e Forumit';

// Banning
$lang['BAN_CONTROL'] = 'Kontrolli i Ndalimeve';
$lang['BAN_EXPLAIN'] = 'Këtu mund të kontrolloni ndalimin e përdoruesve.';
$lang['BAN_USERNAME'] = 'Ndaloni një ose më shumë përdorues të veçantë';
$lang['UNBAN_USERNAME'] = 'Zhbllokoni një ose më shumë përdorues të veçantë';
$lang['UNBAN_USERNAME_EXPLAIN'] = 'Ju mund të çndaloni shumë përdorues në një herë duke përdorur kombinimin e duhur të miut dhe tastierës për kompjuterin tuaj dhe shfletuesin.';
$lang['NO_BANNED_USERS'] = 'Asnjë emër përdoruesi i ndaluar.';
$lang['BAN_UPDATE_SUCESSFUL'] = 'Lista e ndalimeve është përditësuar me sukses.';
$lang['CLICK_RETURN_BANADMIN'] = 'Kliko %sKëtu%s të ktheheni në Kontrollin e Ndalimeve';

// Configuration
$lang['GENERAL_CONFIG'] = 'Konfigurimi i Përgjithshëm';
$lang['CONFIG_EXPLAIN'] = 'Formulari më poshtë do t\'ju lejojë të personalizoni të gjitha opsionet e përgjithshme të bordit. Për konfigurimet e Përdoruesve dhe Forumeve, përdorni lidhjet përkatëse në anën e majtë.';

$lang['CONFIG_MODS'] = 'Modifikimet e Konfigurimit';
$lang['MODS_EXPLAIN'] = 'Ky formular ju lejon të rregulloni modifikimet.';

$lang['CLICK_RETURN_CONFIG'] = '%sKlikoni këtu për t\'u kthyer në Konfigurimin e Përgjithshëm%s';
$lang['CLICK_RETURN_CONFIG_MODS'] = '%sKthehu te modifikimet e cilësimeve%s';

$lang['GENERAL_SETTINGS'] = 'Cilësimet e Bordit të Përgjithshëm';
$lang['SITE_NAME'] = 'Emri i Faqes';
$lang['SITE_DESC'] = 'Site përshkrimi';
$lang['FORUMS_DISABLE'] = 'Çaktivizoni bordet';
$lang['BOARD_DISABLE_EXPLAIN'] = 'Kjo do të bëjë që bordi të mos jetë i disponueshëm për përdoruesit. Administratorët do të jenë në gjendje të hyjnë në Panelin e Administrimit ndërsa bordi është i çaktivizuar.';
$lang['ACC_NONE'] = 'Asnjë';

$lang['ABILITIES_SETTINGS'] = 'Cilësimet Themelore të Përdoruesve dhe Forumit';
$lang['MAX_POLL_OPTIONS'] = 'Numri maksimal i opsioneve të anketës';
$lang['FLOOD_INTERVAL'] = 'Intervali i Flood-it';
$lang['FLOOD_INTERVAL_EXPLAIN'] = 'Numri i sekondave që një përdorues duhet të presë mes postimeve';
$lang['TOPICS_PER_PAGE'] = 'Tema Për Faqe';
$lang['POSTS_PER_PAGE'] = 'Postimet për faqe';
$lang['HOT_THRESHOLD'] = 'Postimet për pragun e popullaritetit';
$lang['DEFAULT_LANGUAGE'] = 'Gjuha E Parazgjedhur';
$lang['DATE_FORMAT'] = 'Formati I Datës';
$lang['SYSTEM_TIMEZONE'] = 'Kohëzgjatja Sistemi';
$lang['ENABLE_PRUNE'] = 'Aktivizoni Prunimin e Forumit';
$lang['ALLOW_BBCODE'] = 'Të Lejojë BBCode';
$lang['ALLOW_SMILIES'] = 'Të Lejojë Smilies';
$lang['SMILIES_PATH'] = 'Rruga e Ruajtjes së Smilies';
$lang['SMILIES_PATH_EXPLAIN'] = 'Rruga nën dosjen tuaj publike TorrentPier, p.sh. assets/images/smiles';
$lang['ALLOW_SIG'] = 'Të Lejojë Nënshkrimet';
$lang['MAX_SIG_LENGTH'] = 'Gjatësia maksimale e nënshkrimit';
$lang['MAX_SIG_LENGTH_EXPLAIN'] = 'Numri maksimal i karaktereve në nënshkrimet e përdoruesit';
$lang['ALLOW_NAME_CHANGE'] = 'Të Lejojë Ndryshimet e Emrave';

// Autologin Keys
$lang['ALLOW_AUTOLOGIN'] = 'Të Lejojë Hyrjen Automatikisht';
$lang['ALLOW_AUTOLOGIN_EXPLAIN'] = 'Përcakton nëse përdoruesit janë të lejuar të zgjedhin për t\'u identifikuar automatikisht gjatë vizitës në forum';
$lang['AUTOLOGIN_TIME'] = 'Skadimi i çelësit të hyrjes automatike';
$lang['AUTOLOGIN_TIME_EXPLAIN'] = 'Si sa kohë është e vlefshme një çelës autologimi në ditë nëse përdoruesi nuk viziton bordin. Vendosni në zero për të çaktivizuar skadimin.';

// Forum Management
$lang['FORUM_ADMIN_MAIN'] = 'Administrimi i Forumit';
$lang['EDIT_FORUM'] = 'Edit forumi';
$lang['CREATE_FORUM'] = 'Krijoni forum të ri';
$lang['CREATE_SUB_FORUM'] = 'Krijoni nënforum';
$lang['CREATE_CATEGORY'] = 'Krijoni një kategori të re';
$lang['REMOVE'] = 'Hiq';
$lang['CONFIG_UPDATED'] = 'Konfigurimi i Forumit Është Përditësuar Me Sukses';
$lang['MOVE_UP'] = 'Shkoni lart';
$lang['MOVE_DOWN'] = 'Shkoni poshtë';
$lang['NO_MODE'] = 'Nuk ishte i vendosur mode';
$lang['FORUM_EDIT_DELETE_EXPLAIN'] = 'Formulari më poshtë do t\'ju lejojë të personalizoni të gjitha opsionet e përgjithshme të bordit. Për konfigurimet e Përdoruesve dhe Forumeve, përdorni lidhjet përkatëse në anën e majtë';

$lang['MOVE_CONTENTS'] = 'Zhvendosni të gjitha përmbajtjet';
$lang['FORUM_DELETE'] = 'Fshini forumet';
$lang['FORUM_DELETE_EXPLAIN'] = 'Formulari më poshtë do t\'ju lejojë të fshini një forum (ose kategori) dhe të vendosni se ku doni të vendosni të gjitha temat (apo forumin) që përmban.';
$lang['CATEGORY_DELETE'] = 'Fshini Kategori';
$lang['CATEGORY_NAME_EMPTY'] = 'Emri i kategorisë nuk është specifikuar';

$lang['STATUS_LOCKED'] = 'Mbyllur';
$lang['STATUS_UNLOCKED'] = 'E hapur';
$lang['FORUM_SETTINGS'] = 'Cilësimet e Përgjithshme të Forumit';
$lang['FORUM_NAME'] = 'Emri i Forumit';
$lang['FORUM_DESC'] = 'Përshkrimi i Forumit';
$lang['FORUM_STATUS'] = 'Statusi i Forumit';
$lang['FORUM_PRUNING'] = 'Auto-shkurtim';

$lang['PRUNE_DAYS'] = 'Hiqni tema që nuk kanë qenë të dërguar për në';

$lang['MOVE_AND_DELETE'] = 'Të lëvizni dhe për të fshirë';

$lang['DELETE_ALL_POSTS'] = 'Fshini të gjitha postimet';
$lang['DELETE_ALL_TOPICS'] = 'Fshini të gjitha temat, duke përfshirë njoftimet dhe postimet e ngjitura';
$lang['NOWHERE_TO_MOVE'] = 'Askund për të lëvizur nga';

$lang['EDIT_CATEGORY'] = 'Edit Kategori';
$lang['EDIT_CATEGORY_EXPLAIN'] = 'Përdorni këtë formular për të modifikuar emrin e një kategorie.';

$lang['FORUMS_UPDATED'] = 'Forum dhe Kategoritë e informacionit janë përditësuar me sukses';

$lang['MUST_DELETE_FORUMS'] = 'Ju duhet të fshini të gjitha forumet para se të fshini këtë kategori';

$lang['CLICK_RETURN_FORUMADMIN'] = 'Klikoni %sKëtu%s për t\'u rikthyer në Administratën e Forumit';

$lang['SHOW_ALL_FORUMS_ON_ONE_PAGE'] = 'Shfaqni të gjitha forumet në një faqe';

// Smiley Management
$lang['SMILEY_TITLE'] = 'Smilies Redaktimi Utility';
$lang['SMILE_DESC'] = 'Nga kjo faqe ju mund të shtoni, hiqni dhe të redaktoni emoticons ose buzëqeshje që përdoruesit tuaj mund të përdorin në postet e tyre dhe në mesazhet private.';

$lang['SMILEY_CONFIG'] = 'Konfigurimi i Smiley';
$lang['SMILEY_CODE'] = 'Kodi Smiley';
$lang['SMILEY_URL'] = 'Skeda e Imazhit të Smiley';
$lang['SMILEY_EMOT'] = 'Emocioni Smiley';
$lang['SMILE_ADD'] = 'Të shtoni një Buzëqeshje të Re';
$lang['SMILE'] = 'Buzëqeshje';
$lang['EMOTION'] = 'Emocion';

$lang['SELECT_PAK'] = 'Zgjidhni Skedën e Pakos (.pak)';
$lang['REPLACE_EXISTING'] = 'Zëvendësoni Smiley Ekzistuese';
$lang['KEEP_EXISTING'] = 'Mbani Smiley Ekzistuese';
$lang['SMILEY_IMPORT_INST'] = 'Duhet të zgjidhni paketën e buzëqeshjeve dhe ngarkoni të gjitha skedarët në katalogun e duhur të Smiley për instalimin tuaj.';
$lang['SMILEY_IMPORT'] = 'Import Smiley Pack';
$lang['CHOOSE_SMILE_PAK'] = 'Zgjidhni një skedë Smiley Pack .pak';
$lang['IMPORT'] = 'Importoni Buzëqeshjet';
$lang['SMILE_CONFLICTS'] = 'Çfarë duhet të bëni në rast konflikti';
$lang['DEL_EXISTING_SMILEYS'] = 'Fshini buzëqeshjet ekzistuese para të importit';
$lang['IMPORT_SMILE_PACK'] = 'Import Smiley Pack';
$lang['EXPORT_SMILE_PACK'] = 'Krijoni Smiley Pack';
$lang['EXPORT_SMILES'] = 'Për të krijuar një buzëqeshje paketë nga buzëqeshjet tuaja të instaluara aktualisht, klikoni %sKëtu%s për të shkarkuar skedarin smiles.pak. Emri këtij skedari duhet të jetë i saktë sigurohuni që të mbani zgjedhjen për skedarin .pak. Pastaj krijoni një skedhë zip që përmban të gjitha imazhet e buzëqeshjeve dhe këtë skedhë të konfigurimit .pak.';

$lang['SMILEY_ADD_SUCCESS'] = 'Buzëqeshja është shtuar me sukses';
$lang['SMILEY_EDIT_SUCCESS'] = 'E Buzëqeshjes është përditësuar me sukses';
$lang['SMILEY_IMPORT_SUCCESS'] = 'Buzëqeshja Pack është importuar me sukses!';
$lang['SMILEY_DEL_SUCCESS'] = 'Buzëqeshja është hequr me sukses';
$lang['CLICK_RETURN_SMILEADMIN'] = 'Klikoni %sKëtu%s për t\'u rikthyer tek Administrata e Buzëqeshjeve';

// User Management
$lang['USER_ADMIN'] = 'Administrata e Përdoruesve';
$lang['LOOK_UP_USER'] = 'Kërkoni përdoruesin';

// Group Management
$lang['GROUP_ADMINISTRATION'] = 'Administrata e Grupi';
$lang['GROUP_ADMIN_EXPLAIN'] = 'Nga ky panel, ju mund të administrojeni të gjitha grupet tuaja të përdoruesve. Ju mund të fshini, krijoni dhe redaktoni grupet ekzistuese. Ju mund të zgjidhni moderatorë, të ndryshoni statusin e grupit të hapur/mbyllur dhe të vendosni emrin dhe përshkrimin e grupit.';
$lang['UPDATED_GROUP'] = 'Grupi është përditësuar me sukses';
$lang['ADDED_NEW_GROUP'] = 'Grupi i ri është krijuar me sukses';
$lang['DELETED_GROUP'] = 'Grupi është fshirë me sukses';
$lang['CREATE_NEW_GROUP'] = 'Krijoni një grup të ri';
$lang['EDIT_GROUP'] = 'Editoni grupin';
$lang['GROUP_STATUS'] = 'Statusi i Grupit';
$lang['GROUP_DELETE'] = 'Fshini grupin';
$lang['GROUP_DELETE_CHECK'] = 'Fshini këtë grup';
$lang['NO_GROUP_NAME'] = 'Ju duhet të specifikoni një emër për këtë grup';
$lang['NO_GROUP_MODERATOR'] = 'Ju duhet të specifikoni një moderator për këtë grup';
$lang['NO_GROUP_ACTION'] = 'Asnjë veprim nuk është e specifikuar';
$lang['DELETE_OLD_GROUP_MOD'] = 'Fshini moderatorin e vjetër të grupit?';
$lang['DELETE_OLD_GROUP_MOD_EXPL'] = 'Nëse po ndryshoni moderatorin e grupit, kontrolloni këtë kuti për të hequr moderatorin e vjetër nga grupi. Ndryshe, mos e kontrolloni, dhe përdoruesi do të bëhet anëtar i zakonshëm i grupit.';
$lang['CLICK_RETURN_GROUPSADMIN'] = 'Klikoni %sKëtu%s për t\'u kthyer në Administratën e Grupit.';
$lang['SELECT_GROUP'] = 'Zgjidhni një grup';
$lang['LOOK_UP_GROUP'] = 'Shikoni grup';

// Prune Administration
$lang['FORUM_PRUNE'] = 'Forum Krasitje';
$lang['FORUM_PRUNE_EXPLAIN'] = 'Kjo do të fshijë çdo temë të cilën nuk është postuar brenda numrit të ditëve që zgjidhni. Nëse nuk jepni një numër, atëherë të gjitha temat do të fshihen. Kjo nuk do të heqë temat <b>sticky</b> dhe <b>njoftime</b>. Ju do të duhet t\'i hiqni këto tema me dorë.';
$lang['DO_PRUNE'] = 'A do të krasistni?';
$lang['PRUNE_TOPICS_NOT_POSTED'] = 'Krasitni temat pa përgjigje në këtë shumë ditë';
$lang['TOPICS_PRUNED'] = 'Tema krasitur';
$lang['PRUNE_SUCCESS'] = 'Forumi është krasitur me sukses';
$lang['NOT_DAYS'] = 'Dita e krasitjes nuk është zgjedhur';

// Word censor
$lang['WORDS_TITLE'] = 'Fjalë e Censurës';
$lang['WORDS_EXPLAIN'] = 'Nga ky panel kontrolli mund të shtoni, modifikoni dhe hiqni fjalë që do të censuroren automatikisht në forumet tuaj. Në përveçëse, nuk do të lejohet regjistrimi i përdoruesve me emra të përdoruesve që përmbajnë këto fjalë. Karakteret e egra (*) pranohen në fushën e fjalëve. Për shembull, *test* do të përputhet me të neveritshëm, test* do të përputhet me testimin, *test do të përputhet me urrejtjen.';
$lang['WORD'] = 'Fjala';
$lang['EDIT_WORD_CENSOR'] = 'Redaktoni fjalën e censuruar';
$lang['REPLACEMENT'] = 'Zëvendësimi';
$lang['ADD_NEW_WORD'] = 'Shtoni fjalë të reja';

$lang['MUST_ENTER_WORD'] = 'Ju duhet të shkruani një fjalë dhe zëvendësimin e saj';
$lang['NO_WORD_SELECTED'] = 'Asnjë fjalë të zgjedhura për përpunim';

$lang['WORD_UPDATED'] = 'Fjalën e zgjedhur për censurim është përditësuar me sukses.';
$lang['WORD_ADDED'] = 'Fjala censuruar është shtuar me sukses';
$lang['WORD_REMOVED'] = 'Fjalë e zgjedhur për censurim është hequr me sukses.';

$lang['CLICK_RETURN_WORDADMIN'] = 'Klikoni %sKëtu%s për t\'u kthyer në Administratën e Censurës së Fjalëve';

// Mass Email
$lang['MASS_EMAIL_EXPLAIN'] = 'Këtu ju mund të dërgoni një mesazh gjithëve përdoruesit tuaj ose të gjithë përdoruesit e një grupi të veçantë. Për ta bërë këtë, një email do të dërgohet në adresën e emailit të administratës, me një kopje verbale dërguar të gjithë marrësve. Nëse jeni duke dërguar një grup të madh njerëzish, ju lutem tregoni durimin pas dorëzimit dhe mos e ndaloni faqen në gjysmë rrugës. Është normale që një dërgesë masive emaili të marrë një kohë të gjatë dhe do të njoftoheni kur skripti të ketë përfunduar.';
$lang['COMPOSE'] = 'Harto';

$lang['RECIPIENTS'] = 'Marrësit';
$lang['ALL_USERS'] = 'Të Gjithë Përdoruesit';

$lang['MASS_EMAIL_MESSAGE_TYPE'] = 'Lloji i emailit';

// Ranks admin
$lang['RANKS_TITLE'] = 'Administrimi i Radhëve';
$lang['RANKS_EXPLAIN'] = 'Duke përdorur këtë formë mund të shtoni, modifikoni, shikoni dhe fshini radhët. Ju gjithashtu mund të krijoni radhë të personalizuara që mund të aplikohen për një përdorues përmes menaxhimit të përdoruesve.';

$lang['ADD_NEW_RANK'] = 'Shtoni radhë të reja';
$lang['RANK_TITLE'] = 'Titulli i Radhës';
$lang['STYLE_COLOR'] = 'Stili i Rangut të';
$lang['STYLE_COLOR_FAQ'] = 'Specifikoni një klasë për të stilizuar titullin me ngjyrën e dëshiruar. Për shembull: <i class="bold">colorAdmin</i>';
$lang['RANK_IMAGE'] = 'Imazhi I Radhës';
$lang['RANK_IMAGE_EXPLAIN'] = 'Përdorni këtë për të përcaktuar një imazh të vogël të lidhur me rangun';

$lang['MUST_SELECT_RANK'] = 'Ju duhet të zgjidhni një rang';

$lang['RANK_UPDATED'] = 'Rangu është përditësuar me sukses';
$lang['RANK_ADDED'] = 'Rangu është shtuar me sukses.';
$lang['RANK_REMOVED'] = 'Rangu është fshirë me sukses.';
$lang['NO_UPDATE_RANKS'] = 'Rangu është fshirë me sukses. Megjithatë, llogaritë e përdoruesve që përdorin këtë rang nuk janë përditësuar.';

$lang['CLICK_RETURN_RANKADMIN'] = 'Klikoni %sKëtu%s për t\'u kthyer në Administrimin e Radhëve.';

// Disallow Username Admin
$lang['DISALLOW_CONTROL'] = 'Kontrolloni Emrin e Përdoruesit';
$lang['DISALLOW_EXPLAIN'] = 'Këtu mund të kontrolloni emrat e përdoruesve që nuk do të lejohet të përdoren.';

$lang['DELETE_DISALLOW_TITLE'] = 'Hiqni një emër përdoruesi të palejuar';
$lang['DELETE_DISALLOW_EXPLAIN'] = 'Ju mund të hiqni një emër të palejuar duke zgjedhur emrin e përdoruesit nga kjo listë dhe duke klikur paraqesë.';

$lang['ADD_DISALLOW'] = 'Shtoni';
$lang['ADD_DISALLOW_TITLE'] = 'Shtoni një emër të palejuar.';

$lang['NO_DISALLOWED'] = 'Nuk ka emra të palejuar.';

$lang['DISALLOWED_DELETED'] = 'Emri i palejuar është hequr me sukses.';
$lang['DISALLOW_SUCCESSFUL'] = 'Emri i palejuar është shtuar me sukses.';
$lang['DISALLOWED_ALREADY'] = 'Emri që keni futur nuk mund të jetë i palejuar.';

$lang['CLICK_RETURN_DISALLOWADMIN'] = 'Klikoni %sKëtu%s për t\'u kthyer në Administrimin e Emrave Të Palejuar.';

// Version Check
$lang['VERSION_INFORMATION'] = 'Informacioni mbi Versionin.';
$lang['UPDATE_AVAILABLE'] = 'Përditësimi në dispozicion';
$lang['CHANGELOG'] = 'Historia e ndryshimeve';

// Login attempts configuration
$lang['MAX_LOGIN_ATTEMPTS'] = 'Lejohen përpjekjet për identifikimin.';
$lang['MAX_LOGIN_ATTEMPTS_EXPLAIN'] = 'Numri i lejuar i përpjekjeve për identifikim të bordit.';
$lang['LOGIN_RESET_TIME'] = 'Koha për të bllokuar identifikimin.';
$lang['LOGIN_RESET_TIME_EXPLAIN'] = 'Koha në minuta që përdoruesi duhet të presë.';

// Permissions List
$lang['PERMISSIONS_LIST'] = 'Lista e Lejeve.';
$lang['AUTH_CONTROL_CATEGORY'] = 'Kontroll i Lejeve të Kategorisë.';
$lang['FORUM_AUTH_LIST_EXPLAIN'] = 'Kjo ofron një përmbledhje të niveleve të autorizimit të çdo forumi.';
$lang['CAT_AUTH_LIST_EXPLAIN'] = 'Kjo ofron një përmbledhje të niveleve të autorizimit në këtë kategori.';
$lang['FORUM_AUTH_LIST_EXPLAIN_ALL'] = 'Të gjithë përdoruesit';
$lang['FORUM_AUTH_LIST_EXPLAIN_REG'] = 'Të gjithë përdoruesit e regjistruar';
$lang['FORUM_AUTH_LIST_EXPLAIN_PRIVATE'] = 'Vetëm përdoruesit e dhënë leje të veçantë';
$lang['FORUM_AUTH_LIST_EXPLAIN_MOD'] = 'Vetëm moderatorët e këtij forumi';
$lang['FORUM_AUTH_LIST_EXPLAIN_ADMIN'] = 'Vetëm administratorët';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_VIEW'] = '%s mund të shohë këtë forum';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_READ'] = '%s mund të lexojë postimet në këtë forum';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_POST'] = '%s mund të postoni në këtë forum';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_REPLY'] = '%s mund të përgjigjen në postimet e këtij forumi';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_EDIT'] = '%s mund të redaktoni postimet në këtë forum';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_DELETE'] = '%s mund të fshini postimet në këtë forum';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_STICKY'] = '%s mund të postoni temat e ngjitura në këtë forum';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_ANNOUNCE'] = '%s mund të postoni njoftimet në këtë forum';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_VOTE'] = '%s mund të votojnë në sondazhe në këtë forum';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_POLLCREATE'] = '%s mund të krijojnë sondazhe në këtë forum';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_ATTACHMENTS'] = '%s mund të postoni bashkëngjitje';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_DOWNLOAD'] = '%s mund të shkarkoni bashkëngjitje.';

// Tooltips for disabled permissions
$lang['AUTH_TOOLTIP_FORUM_MODE'] = 'Režimi i forumit: %s — nuk mund të ndryshohet';
$lang['AUTH_TOOLTIP_MOD_OVERRIDE'] = 'Leja është aktivizuar përmes "Moderator"';
$lang['AUTH_TOOLTIP_GROUP_HAS'] = 'Leja është dhënë nga grupi';

// Misc
$lang['SF_SHOW_ON_INDEX'] = 'Të tregoni në faqen kryesore';
$lang['SF_PARENT_FORUM'] = 'Forumi Prind';
$lang['SF_NO_PARENT'] = 'Nuk ka forum prind';
$lang['SYNC'] = 'Sinkronizim';

// Mods
$lang['MAX_NEWS_TITLE'] = 'Maks. gjatësia e lajmeve';
$lang['NEWS_COUNT'] = 'Sa shumë artikuj lajmesh duhet të shfaqen';
$lang['NEWS_FORUM_ID'] = 'Nga cilat forume për të shfaqur <br /> <h6>Për disa forume, specifikoni ID-të të ndara me presje. Shembull: 1,2,3</h6>';
$lang['TRACKER_STATS'] = 'Statistika në lidhje me gjurmuesin';
$lang['WHOIS_INFO'] = 'Informacion mbi adresën IP';
$lang['SHOW_MOD_HOME_PAGE'] = 'Trego për moderatorët e index.php';
$lang['SHOW_BOARD_STARTED_INDEX'] = 'Shfaq datën e fillimit të bordit në index.php';
$lang['PREMOD_HELP'] = '<h4><span class="tor-icon tor-dup">&#8719;</span> Para-moderimi</h4> <h6>Nëse nuk keni shpërndarje për statusin e v, #, ose T në këtë seksion, duke përfshirë nënseksionet, shpërndarja automatikisht do të marrë këtë status</h6>';
$lang['TOR_COMMENT'] = '<h4>Koment mbi statusin e një shpërndarjeje</h4> <h6>Komenti ju lejon të tregoni gabimet e bëra te lëshuesi. Nëse statuset janë të paplota, një formular i përgjigjes së lëshimit është i disponueshëm për menaxherin e lëshimit për të korrigjuar lëshimin</h6>';
$lang['SEED_BONUS_ADD'] = '<h4>Shtim bonusi farë </h4> <h6> Numri i shpërndarjeve të dorëzuara nga përdoruesi dhe madhësia e shpërblimeve për to (herë të ngarkuar për një orë) </h6>';
$lang['SEED_BONUS_RELEASE'] = 'për të N-numri i lëshimeve';
$lang['SEED_BONUS_POINTS'] = 'shpërblimet në një orë';
$lang['SEED_BONUS_TOR_SIZE'] = '<h4>Minimum shpërndarje për të cilat do të jepen shpërblime </h4> <h6> Nëse dëshironi të llogariteni shpërblimet për të gjitha shpërndarjet, lëreni bosh. </h6>';
$lang['SEED_BONUS_USER_REGDATA'] = '<h4>Minimum gjatësia e përdoruesit përcjellës, pas të cilit do të jepen shpërblime </h4> <h6> Nëse dëshironi të akumuloni shpërblimet për të gjithë përdoruesit, lëreni bosh. </h6>';
$lang['SEED_BONUS_WARNING'] = 'KUJDES! Bonuset e farës duhet të jenë në rendin ngjitës';
$lang['SEED_BONUS_EXCHANGE'] = 'Konfigurimi i Bonuseve të Këmbimit Sid';
$lang['SEED_BONUS_ROPORTION'] = 'Përqindja e mbushjes së bonuseve në GB';

$lang['ALLOWED'] = 'E lejuar';
$lang['RETURN_CONFIG'] = '%sKthehu në Konfigurim%s';
$lang['CONFIG_UPD'] = 'Konfigurimi I Azhurnuar Me Sukses';

// Forum config
$lang['BT_SELECT_FORUMS'] = 'Forumi opsione:';
$lang['BT_SELECT_FORUMS_EXPL'] = 'mbani shtypur <i>Ctrl</i> gjatë zgjedhjes së forumeve të shumta';

$lang['REG_TORRENTS'] = 'Regjistrojmë torrents';
$lang['DISALLOWED'] = 'E ndaluar';
$lang['ALLOW_REG_TRACKER'] = 'Forume të lejuara për regjistrimin e .torrents në tracker';
$lang['ALLOW_PORNO_TOPIC'] = 'Lejohet të postoni përmbajtje 18+';
$lang['SELF_MODERATED'] = 'Përdoruesit mund të <b>shkaktojnë</b> temat e tyre në një forum tjetër';

$lang['BT_ANNOUNCE_URL_HEAD'] = 'Njoftoni URL';
$lang['BT_ANNOUNCE_URL'] = 'Njoftoni url';
$lang['BT_ANNOUNCE_URL_EXPL'] = 'mund të përcaktoni URL të tjera të lejuara në "includes/torrent_announce_urls.php"';
$lang['BT_DISABLE_DHT'] = 'Çaktivizoni DHT në rrjet';
$lang['BT_DISABLE_DHT_EXPL'] = 'Çaktivizoni Peer Exchange dhe DHT (të rekomanduara për rrjetet private, vetëm URL të njoftuara)';
$lang['BT_PRIVATE_TRACKER'] = 'Ky ndjekës është privat: lista e skedave (për mysafirët), DHT | PEX janë të çaktivizuara';
$lang['BT_PRIVATE_TORRENT'] = 'Krijuesi i këtij torrenti e bëri atë privat';
$lang['BT_CHECK_ANNOUNCE_URL'] = 'Të verifikuar URL të njoftuar';
$lang['BT_CHECK_ANNOUNCE_URL_EXPL'] = 'të regjistroheni në tracker vetëm URL të lejuara';
$lang['BT_REPLACE_ANN_URL'] = 'Zëvendësojë URL të njoftuar';
$lang['BT_REPLACE_ANN_URL_EXPL'] = 'zëvendësuar URL të njoftuar origjinale me të tuajin në skedarët .torrent';
$lang['BT_DEL_ADDIT_ANN_URLS'] = 'Heq të gjitha URL të tjera të njoftuara';
$lang['BT_DEL_ADDIT_ANN_URLS_EXPL'] = 'nëse torrent përmban adresat e tjera të ndjekësve, ato do të hiqen';

$lang['BT_SHOW_PEERS_HEAD'] = 'Lista e Kolegëve';
$lang['BT_SHOW_PEERS'] = 'Tregojnë kolegët (seeders dhe leechers)';
$lang['BT_SHOW_PEERS_EXPL'] = 'kjo do të tregojë listën e seeders/leechers mbi temën me torrent';
$lang['BT_SHOW_PEERS_MODE'] = 'Nga default, tregojnë kolegët si: ';
$lang['BT_SHOW_PEERS_MODE_COUNT'] = 'Numërimi vetëm';
$lang['BT_SHOW_PEERS_MODE_NAMES'] = 'emrat vetëm';
$lang['BT_SHOW_PEERS_MODE_FULL'] = 'Detajet e plota';
$lang['BT_ALLOW_SPMODE_CHANGE'] = 'Lejo "Modi i Detajeve të Plota"';
$lang['BT_ALLOW_SPMODE_CHANGE_EXPL'] = 'nëse "jo", vetëm mënyra e shfaqjes së kolegëve do të jetë në dispozicion';
$lang['BT_SHOW_IP_ONLY_MODER'] = 'Kolegët\' <b>IP</b>s janë të dukshme për moderatorët vetëm';
$lang['BT_SHOW_PORT_ONLY_MODER'] = 'Kolegët\' <b>Port</b>s janë të dukshme për moderatorët vetëm';

$lang['BT_SHOW_DL_LIST_HEAD'] = 'DL-Lista';
$lang['BT_SHOW_DL_LIST'] = 'Tregojnë DL-Listë në temat e Shkarkimit';
$lang['BT_DL_LIST_ONLY_1ST_PAGE'] = 'Trego vetëm DL-Lista';
$lang['BT_DL_LIST_ONLY_COUNT'] = 'Tregojnë vetëm numrin e përdoruesve';
$lang['BT_SHOW_DL_LIST_BUTTONS'] = 'Shfaq butonat për të ndryshuar manualisht DL-statusin';
$lang['BT_SHOW_DL_BUT_WILL'] = $lang['DLWILL'];
$lang['BT_SHOW_DL_BUT_DOWN'] = $lang['DLDOWN'];
$lang['BT_SHOW_DL_BUT_COMPL'] = $lang['DLCOMPLETE'];
$lang['BT_SHOW_DL_BUT_CANCEL'] = $lang['DLCANCEL'];

$lang['BT_ADD_AUTH_KEY_HEAD'] = 'Passkey';
$lang['BT_ADD_AUTH_KEY'] = 'Të mundësojë shtimin e passkey në skedarët torrent para shkarkimit';

$lang['BT_TOR_BROWSE_ONLY_REG_HEAD'] = 'Torrent shfletues (tracker)';
$lang['BT_TOR_BROWSE_ONLY_REG'] = 'Shfletuesi i torrenteve (tracker.php) i arritshëm vetëm për përdoruesit e regjistruar';
$lang['BT_SEARCH_BOOL_MODE'] = 'Lejo kërkimet në tekst të plotë boolean';
$lang['BT_SEARCH_BOOL_MODE_EXPL'] = 'përdorni *, +, - në kërkime';

$lang['BT_SHOW_DL_STAT_ON_INDEX_HEAD'] = 'Të ndryshme';
$lang['BT_SHOW_DL_STAT_ON_INDEX'] = "Trego statistikat UL/DL të përdoruesit në krye të faqes kryesore të forumit";
$lang['BT_NEWTOPIC_AUTO_REG'] = 'Regjistrohu automatikisht torrent në përrua për tema të reja';
$lang['BT_SET_DLTYPE_ON_TOR_REG'] = 'Ndryshoni statusin e temës në "Shkarkimin" gjatë regjistrimit të torrentit në ndjekës';
$lang['BT_SET_DLTYPE_ON_TOR_REG_EXPL'] = 'do të ndryshojë temën në llojin "Shkarkim" pavarësisht cilësimeve të forumit';
$lang['BT_UNSET_DLTYPE_ON_TOR_UNREG'] = 'Ndryshoni statusin e temës në "Normal" ndërsa regjistroni torrentin nga ndiqësi';

// Release
$lang['TEMPLATE_DISABLE'] = 'Template i çaktivizuar';
$lang['FOR_NEW_TEMPLATE'] = 'për modelet e reja!';
$lang['QUESTION'] = 'Konfirmo a je i sigurt se dëshiron të kryesh këtë veprim';

$lang['CRON_LIST'] = 'Lista cron';
$lang['CRON_ID'] = 'ID';
$lang['CRON_ACTIVE'] = 'Në';
$lang['CRON_ACTIVE_EXPL'] = 'Detyrat aktive';
$lang['CRON_TITLE'] = 'Titulli';
$lang['CRON_SCRIPT'] = 'Shkrimit';
$lang['CRON_SCHEDULE'] = 'Orari';
$lang['CRON_LAST_RUN'] = 'I fundit i drejtuar';
$lang['CRON_NEXT_RUN'] = 'Drejtimi i ardhshëm';
$lang['CRON_RUN_COUNT'] = 'Shkuan';
$lang['CRON_EXECUTION_TIME'] = 'Koha e ekzekutimit';
$lang['CRON_MANAGE'] = 'Menaxho';
$lang['CRON_DISABLED_WARNING'] = 'Paralajmërim! Ekzekutimi i skripteve cron është i çaktivizuar. Për ta aktivizuar, vendosni ndryshoren APP_CRON_ENABLED.';

$lang['CRON_ENABLED'] = 'Cron i aktivizuar';
$lang['CRON_CHECK_INTERVAL'] = 'Kontrolloni intervalin e cron (sek)';

$lang['WITH_SELECTED'] = 'Me të zgjedhura';
$lang['NOTHING'] = 'mos bëni asgjë';
$lang['CRON_RUN'] = 'Drejtimi';
$lang['CRON_DEL'] = 'Fshij';
$lang['CRON_DISABLE'] = 'Çaktivizo';
$lang['CRON_ENABLE'] = 'Lejo';
$lang['DELETE_JOB'] = 'A jeni të sigurt se doni të fshini punën e cron?';
$lang['CRON_WORKS'] = 'Cron është duke punuar aktualisht ose është i thyer -> ';
$lang['REPAIR_CRON'] = 'Riparimi Cron';

$lang['CRON_EDIT_HEAD_EDIT'] = 'Edito punën';
$lang['CRON_EDIT_HEAD_ADD'] = 'Shto punë';
$lang['CRON_SCRIPT_EXPL'] = 'emri i skriptës nga "përfshin/cron/punë/"';
$lang['SCHEDULE'] = [
    'select' => '&raquo; Zgjidhni fillimin',
    'hourly' => 'çdo orë',
    'daily' => 'dita e përditshme',
    'weekly' => 'javore',
    'monthly' => 'mujor',
    'interval' => 'intervali',
];
$lang['NOSELECT'] = 'Nuk ka zgjedhje';
$lang['RUN_DAY'] = 'Dita e drejtuar';
$lang['RUN_DAY_EXPL'] = 'dita kur kjo punë drejtohet';
$lang['RUN_TIME'] = 'Koha e drejtuar';
$lang['RUN_TIME_EXPL'] = 'koha kur kjo punë drejtohet (p.sh. 05:00:00)';
$lang['RUN_ORDER'] = 'Drejtuar mënyrë';
$lang['LAST_RUN'] = 'Drejtimi i Fundit';
$lang['NEXT_RUN'] = 'Drejtimi i Ardhshëm';
$lang['RUN_INTERVAL'] = 'Drejtuar intervali';
$lang['RUN_INTERVAL_EXPL'] = 'p.sh. 00:10:00';
$lang['LOG_ENABLED'] = 'Regjistrimi aktiv';
$lang['LOG_FILE'] = 'Skedari i Log-ut';
$lang['LOG_FILE_EXPL'] = 'file për të ruajtur logun';
$lang['LOG_SQL_QUERIES'] = 'Log të pyetjeve SQL';
$lang['FORUM_DISABLE'] = 'Çaktivizoni bordit';
$lang['BOARD_DISABLE_EXPL'] = 'çaktivizoni bordin kur kjo punë është drejtuar';
$lang['RUN_COUNTER'] = 'Drejto numëruesin';

$lang['JOB_REMOVED'] = 'Puna është bërë me sukses';
$lang['SCRIPT_DUPLICATE'] = 'Një detyrë cron me këtë skript tashmë ekziston';
$lang['TITLE_DUPLICATE'] = 'Një detyrë cron me këtë titull tashmë ekziston';
$lang['CLICK_RETURN_JOBS_ADDED'] = '%sKthehu për të shtuar punë%s';
$lang['CLICK_RETURN_JOBS'] = '%sKthehu në Planifikuesin e Detyrave%s';

$lang['REBUILD_SEARCH'] = 'Rindarjeni Indeksin e Kërkimit';
$lang['REBUILD_SEARCH_DESC'] = 'Ky mod do të indeksojë çdo postim në forumin tuaj, duke rindërtuar tabelat e kërkimit. Mund të ndaloni sa herë të doni dhe herën tjetër që e drejtoni përsëri do të keni mundësinë për të vazhduar nga ku u ndalët.<br /><br />Mund të zgjasë një kohë të gjatë për të treguar përparimin e tij (në varësi të "Postimeve për cikël" dhe "Kohë limit"), kështu që ju lutemi mos u lëvizni nga faqja e përparimit të tij deri sa të përfundojë, përveç nëse, sigurisht, dëshironi ta ndërprisni atë.';

// Input screen
$lang['STARTING_POST_ID'] = 'Duke filluar post_id';
$lang['STARTING_POST_ID_EXPLAIN'] = 'Postimi i parë ku përpunimi do të fillojë<br />Mund të zgjidhni të filloni nga fillimi ose nga postimi që e ndalët për herë të fundit';

$lang['START_OPTION_BEGINNING'] = 'të fillojmë nga fillimi';
$lang['START_OPTION_CONTINUE'] = 'vazhdo nga i fundit i ndaluar';

$lang['CLEAR_SEARCH_TABLES'] = 'Fshini tabelat e kërkimit';
$lang['CLEAR_SEARCH_TABLES_EXPLAIN'] = '';
$lang['CLEAR_SEARCH_NO'] = 'ASNJË';
$lang['CLEAR_SEARCH_DELETE'] = 'FSHINI';
$lang['CLEAR_SEARCH_TRUNCATE'] = 'TRUNCATE';

$lang['NUM_OF_POSTS'] = 'Numri i postimeve';
$lang['NUM_OF_POSTS_EXPLAIN'] = 'Numri total i postimeve për të procesuar<br />Ajo mbushet automatikisht me numrin e gjithsej/postimeve të mbetura të gjetura në db';

$lang['POSTS_PER_CYCLE'] = 'Postimet e për ciklit';
$lang['POSTS_PER_CYCLE_EXPLAIN'] = 'Numri i postimeve për procesim për çdo cikël<br />Mbaje të ulët për të shmangur kohëlimit e php/webserver';

$lang['REFRESH_RATE'] = 'Refresh rate';
$lang['REFRESH_RATE_EXPLAIN'] = 'Sa kohë (sekonda) të mbetemi të papunë para se të kalojmë në ciklin e ardhshëm të përpunimit<br />Zakonisht nuk keni nevojë ta ndryshoni këtë';

$lang['TIME_LIMIT'] = 'Afati kohor';
$lang['TIME_LIMIT_EXPLAIN'] = 'Sa kohë (sekonda) mund të zgjasë përpunimi i postit përpara se të kaloni në ciklin tjetër';
$lang['TIME_LIMIT_EXPLAIN_WEBSERVER'] = '<i>Webserveri juaj ka një afat kohor prej %s sekondash të konfiguruar, kështu që qëndroni poshtë kësaj vlere</i>';

// Information strings
$lang['INFO_PROCESSING_STOPPED'] = 'Ju e ndalët përpunimin në post_id %s (%s postime të përpunuara) më datë %s';
$lang['INFO_PROCESSING_ABORTED'] = 'Ju e përfunduat përpunimin në post_id %s (%s postime të përpunuara) më datë %s';
$lang['INFO_PROCESSING_ABORTED_SOON'] = 'Ju lutem prisni disa minuta para se të vazhdoni...';
$lang['INFO_PROCESSING_FINISHED'] = 'Ju përfunduat me sukses përpunimin (%s postime të përpunuara) më datë %s';
$lang['INFO_PROCESSING_FINISHED_NEW'] = 'Ju e përfunduat me sukses përpunimin në post_id %s (%s postime të përpunuara) më datë %s,<br />por ka pasur %s post(e) të reja pas kësaj date';

// Progress screen
$lang['REBUILD_SEARCH_PROGRESS'] = 'Rindërtimi i Progresit të Kërkimit';

$lang['PROCESSED_POST_IDS'] = 'ID-të e postave të përpunuara : %s - %s';
$lang['TIMER_EXPIRED'] = 'Timer ka skaduar në %s secs. ';
$lang['CLEARED_SEARCH_TABLES'] = 'Pastruar kërkim të rrumbullakëta. ';
$lang['DELETED_POSTS'] = '%s post(e) janë fshirë nga përdoruesit tuaj gjatë përpunimit.';
$lang['PROCESSING_NEXT_POSTS'] = 'Procesimi i ardhshëm %s post(e). Ju lutemi prisni...';
$lang['ALL_SESSION_POSTS_PROCESSED'] = 'Të gjitha postimet në seancën aktuale janë përpunuar.';
$lang['ALL_POSTS_PROCESSED'] = 'Të gjitha postimet me sukses janë përpunuar.';
$lang['ALL_TABLES_OPTIMIZED'] = 'Të gjitha tabelat e kërkimit janë optimizuar me sukses.';

$lang['PROCESSING_POST_DETAILS'] = 'Po përpunoni postin';
$lang['CURRENT_SESSION'] = 'Aktuale Seancë';
$lang['TOTAL'] = 'Gjithsej';

$lang['PROCESS_DETAILS'] = 'nga <b>%s</b> të <b>%s</b> (nga gjithsej <b>%s</b>)';
$lang['PERCENT_COMPLETED'] = '%s %% përfunduar';

$lang['PROCESSING_TIME_DETAILS'] = 'Detajet e seancës aktuale';
$lang['TIME_LAST_POSTS'] = 'Postimet e fundit %s';
$lang['TIME_FROM_THE_BEGINNING'] = 'Që nga fillimi';
$lang['TIME_AVERAGE'] = 'Mesatarja për çdo cikël';
$lang['TIME_ESTIMATED'] = 'E vlerësuar derisa të përfundojë';

$lang['SIZE_ESTIMATED'] = 'E vlerësuar pas përfundimit';
$lang['SIZE_SEARCH_TABLES'] = 'Madhësia e Tabelave të Kërkimeve';

$lang['POSTS_LAST_CYCLE'] = 'Postimet e përpunuara në ciklin e fundit';

$lang['INFO_ESTIMATED_VALUES'] = '(*) Të gjitha vlerat e vlerësuara janë llogaritur në mënyrë të përqindjeshme<br />bazuar në përqindjen aktuale të përfunduar dhe nuk mund të përfaqësojnë vlerat përfundimtare aktuale.<br />Me rritjen e përqindjes së përfunduar, vlerat e vlerësuara do të afrohen më afër vlerave të vërteta.';

$lang['CLICK_RETURN_REBUILD_SEARCH'] = 'Klikoni %shere%s për të kthyer në Rindërtimin e Kërkimit';
$lang['REBUILD_SEARCH_ABORTED'] = 'Rindërtimi i kërkimit është ndërprerë në post_id %s.<br /><br />Nëse e keni ndaluar gjatë përpunimit, duhet të prisni disa minuta deri sa të drejtoni përsëri Rindërtimin e Kërkimit që cikli i fundit të përfundojë.';
$lang['WRONG_INPUT'] = 'Ju keni hyrë në disa vlera të gabuara. Ju lutem kontrolloni shkrimet tuaja dhe të provoni përsëri.';

// Buttons
$lang['PROCESSING'] = 'Përpunimi...';
$lang['FINISHED'] = 'Përfundoi';

$lang['BOT_TOPIC_MOVED_FROM_TO'] = 'Tema është lëvizur nga forumi [b]%s[/b] në forumin [b]%s[/b].[br][b]Arsyeja e lëvizjes:[/b] %s[br][br]%s';
$lang['BOT_MESS_SPLITS'] = 'Temë ka qenë e ndarë. Temë të re - [b]%s[/b][br][br]%s';
$lang['BOT_TOPIC_SPLITS'] = 'Temë ka qenë e ndarë nga [b]%s[/b][br][br]%s';

$lang['CALLSEED'] = 'Thirrje për semaforë';
$lang['CALLSEED_EXPLAIN'] = 'Merrni parasysh me një kërkesë për kthim në shpërndarje.';
$lang['CALLSEED_SUBJECT'] = 'Shkarko ndihmën %s';
$lang['CALLSEED_TEXT'] = 'Përshëndetje![br]Ndihma juaj është e nevojshme në lirimin [url=%s]%s[/url][br]Nëse vendosni të ndihmoni, por tashmë fshini skedarin torrent, mund ta shkarkoni [url=%s]këtë[/url][br][br]Shpresoj për ndihmën tuaj!';
$lang['CALLSEED_MSG_OK'] = 'Mesazhi është dërguar për të gjithë ata që shkarkuar këtë version';
$lang['CALLSEED_MSG_SPAM'] = 'Kërkesa ka qenë tashmë një herë me sukses të dërguar (Ndoshta nuk jeni ju)<br /><br />Mundësia tjetër për të dërguar një kërkesë është për <b>%s</b>.';
$lang['CALLSEED_HAVE_SEED'] = 'Tema nuk kërkon ndihmë (<b>Seeders:</b> %d)';

$lang['LOG_ACTION']['LOG_TYPE'] = [
    'mod_topic_delete' => 'Temë:<br /> <b>deleted</b>',
    'mod_topic_move' => 'Temë:<br /> <b>moved</b>',
    'mod_topic_lock' => 'Temë:<br /> <b>closed</b>',
    'mod_topic_unlock' => 'Temë:<br /> <b>opened</b>',
    'mod_topic_split' => 'Temë:<br /> <b>split</b>',
    'mod_topic_set_downloaded' => 'Tema:<br /> <b>përcaktuar si të shkarkuar</b>',
    'mod_topic_unset_downloaded' => 'Tema:<br /> <b>e papërcaktuar si të shkarkuar</b>',
    'mod_topic_change_tor_status' => 'Tema:<br /> <b>ndryshuar statusin e torrentit</b>',
    'mod_topic_change_tor_type' => 'Tema:<br /> <b>ndryshuar llojin e torrentit</b>',
    'mod_topic_tor_unregister' => 'Tema:<br /> <b>torrent i pa regjistruar</b>',
    'mod_topic_tor_register' => 'Tema:<br /> <b>torrent i regjistruar</b>',
    'mod_topic_tor_delete' => 'Tema:<br /> <b>torrent i fshirë</b>',
    'mod_topic_renamed' => 'Tema:<br /> <b>ndryshuar emrin</b>',
    'mod_topic_poll_started' => 'Tema:<br /> <b>ankesë e nisur</b>',
    'mod_topic_poll_finished' => 'Tema:<br /> <b>votimi i përfunduar</b>',
    'mod_topic_poll_deleted' => 'Tema:<br /> <b>ankesë e fshirë</b>',
    'mod_topic_poll_added' => 'Tema:<br /> <b>ankesë e shtuar</b>',
    'mod_topic_poll_edited' => 'Tema:<br /> <b>ankesë e redaktuar</b>',
    'mod_post_delete' => 'Post:<br /> <b>deleted</b>',
    'mod_post_pin' => 'Post:<br /> <b>e ngjitur</b>',
    'mod_post_unpin' => 'Post:<br /> <b>e ndarë nga ngjitja</b>',
    'adm_user_delete' => 'Përdoruesi:<br /> <b>fshirë</b>',
    'adm_user_ban' => 'Përdoruesi:<br /> <b>ndaluar</b>',
    'adm_user_unban' => 'Përdoruesi:<br /> <b>zëvendosur</b>',
];

$lang['ACTS_LOG_ALL_ACTIONS'] = 'Të gjitha veprimet';
$lang['ACTS_LOG_SEARCH_OPTIONS'] = 'Logu i veprimeve: opsionet e kërkimit';
$lang['ACTS_LOG_FORUM'] = 'Forumi';
$lang['ACTS_LOG_ACTION'] = 'Veprim';
$lang['ACTS_LOG_LOGS_FROM'] = 'Shkrimet nga ';
$lang['ACTS_LOG_FIRST'] = 'duke filluar me';
$lang['ACTS_LOG_DAYS_BACK'] = 'ditë mbrapa';
$lang['ACTS_LOG_TOPIC_MATCH'] = 'Temë titulli ndeshje';
$lang['ACTS_LOG_SORT_BY'] = 'Shtyra sipas';
$lang['ACTS_LOG_LOGS_ACTION'] = 'Veprim';
$lang['ACTS_LOG_USERNAME'] = 'Emri i përdoruesit';
$lang['ACTS_LOG_TIME'] = 'Koha';
$lang['ACTS_LOG_INFO'] = 'Informacion';
$lang['ACTS_LOG_FILTER'] = 'Filtri';
$lang['ACTS_LOG_TOPICS'] = 'Tema:';
$lang['ACTS_LOG_OR'] = 'ose';

$lang['RELEASE'] = 'Shablon Lirimi';
$lang['RELEASES'] = 'Lirje';

$lang['BACK'] = 'Prapa';
$lang['NEW_RELEASE'] = 'Lirimi i ri';
$lang['NEXT'] = 'Vazhdo';
$lang['ALL'] = 'Të gjitha';

$lang['TPL_EMPTY_FIELD'] = 'Duhet të plotësoni fushën <b>%s</b>';
$lang['TPL_EMPTY_SEL'] = 'Ju duhet të zgjidhni <b>%s</b>';
$lang['TPL_NOT_NUM'] = '<b>%s</b> - Nuk është numër';
$lang['TPL_NOT_URL'] = '<b>%s</b> - Duhet të jetë https:// URL';
$lang['TPL_NOT_IMG_URL'] = '<b>%s</b> - Duhet të jetë https:// IMG_URL';
$lang['TPL_PUT_INTO_SUBJECT'] = 'të vënë në subjekt';
$lang['TPL_POSTER'] = 'Postuesi';
$lang['TPL_REQ_FILLING'] = 'kërkon plotësimin';
$lang['TPL_NEW_LINE'] = 'linjë të re';
$lang['TPL_NEW_LINE_AFTER'] = 'linjë të re pas titullit';
$lang['TPL_NUM'] = 'numri';
$lang['TPL_URL'] = 'URL';
$lang['TPL_IMG'] = 'imazh';
$lang['TPL_PRE'] = 'pre';
$lang['TPL_SPOILER'] = 'spoiler';
$lang['TPL_IN_LINE'] = 'në të njëjtën linjë';
$lang['TPL_HEADER_ONLY'] = 'vetëm në titull';

$lang['SEARCH_INVALID_USERNAME'] = 'Emri i përdoruesit i pavlefshëm u fut për kërkon';
$lang['SEARCH_INVALID_EMAIL'] = 'Adresa e email e pavlefshme e futur për kërkim';
$lang['SEARCH_INVALID_IP'] = 'Adresa IP e pavlefshme është futur për kërkimin';
$lang['SEARCH_INVALID_GROUP'] = 'Grup i pavlefshëm u fut për të kërkuar';
$lang['SEARCH_INVALID_RANK'] = 'Renditja e pavlefshme u fut për të kërkuar';
$lang['SEARCH_INVALID_DATE'] = 'Data e pavlefshme e futur për kërkim';
$lang['SEARCH_INVALID_POSTCOUNT'] = 'Numri i postimeve të pavlefshëm u fut në kërkim';
$lang['SEARCH_INVALID_USERFIELD'] = 'Të dhënat e pavlefshme të Userfield e futur';
$lang['SEARCH_INVALID_LASTVISITED'] = 'Është futur një datë e pavlefshme për kërkimin e vizituar të fundit';
$lang['SEARCH_INVALID_LANGUAGE'] = 'Të pavlefshme Gjuhën E Zgjedhur';
$lang['SEARCH_INVALID_TIMEZONE'] = 'Të pavlefshme Brezin E Zgjedhur';
$lang['SEARCH_INVALID_MODERATORS'] = 'Të pavlefshme Forum Të Zgjedhura';
$lang['SEARCH_INVALID'] = 'Të pavlefshme, Kërko';
$lang['SEARCH_INVALID_DAY'] = 'Ditën që futët ishte e pavlefshme';
$lang['SEARCH_INVALID_MONTH'] = 'Muaji që keni futur ishte e pavlefshme.';
$lang['SEARCH_INVALID_YEAR'] = 'Viti që keni futur është i pavlefshëm.';
$lang['SEARCH_FOR_USERNAME'] = 'Kërkim të përdoruesve përputhen %s';
$lang['SEARCH_FOR_EMAIL'] = 'Kërkoni adresat e-mail që përputhen me %s.';
$lang['SEARCH_FOR_IP'] = 'Kërkoni adresat IP që përputhen me %s.';
$lang['SEARCH_FOR_DATE'] = 'Kërkimi për përdoruesit që u bashkuan %s më %d/%d/%d.';
$lang['SEARCH_FOR_GROUP'] = 'Kërkimi për anëtarët e grupit të %s';
$lang['SEARCH_FOR_RANK'] = 'Kërkimi për transportuesin rangun e %s';
$lang['SEARCH_FOR_BANNED'] = 'Kërkim të ndaluar përdoruesit';
$lang['SEARCH_FOR_ADMINS'] = 'Kërkimi për Administratorët.';
$lang['SEARCH_FOR_MODS'] = 'Kërkimi Moderatorët';
$lang['SEARCH_FOR_DISABLED'] = 'Kërkimi për përdoruesit e shuar.';
$lang['SEARCH_FOR_POSTCOUNT_GREATER'] = 'Kërkimi për përdoruesit me një numër postimesh më të madh se %d.';
$lang['SEARCH_FOR_POSTCOUNT_LESSER'] = 'Kërkimi për përdoruesit me një numër postimesh më pak se %d.';
$lang['SEARCH_FOR_POSTCOUNT_RANGE'] = 'Kërkimi për përdoruesit me një numër postimesh midis %d dhe %d.';
$lang['SEARCH_FOR_POSTCOUNT_EQUALS'] = 'Kërkim për përdoruesit me një post të llogarisin vlerën e %d';
$lang['SEARCH_FOR_USERFIELD_TWITTER'] = 'Kërkimi për përdoruesit me një X (Twitter) që përputhen %s';
$lang['SEARCH_FOR_USERFIELD_WEBSITE'] = 'Kërkimi për përdoruesit me një faqe interneti që përputhet me %s';
$lang['SEARCH_FOR_USERFIELD_LOCATION'] = 'Kërkimi për përdoruesit me Një Vend që përputhet me %s.';
$lang['SEARCH_FOR_USERFIELD_INTERESTS'] = 'Kërkimi për përdoruesit me Interesat e tyre që përputhen me %s.';
$lang['SEARCH_FOR_USERFIELD_OCCUPATION'] = 'Kërkimi për përdoruesit me profesionin e tyre përputhës %s';
$lang['SEARCH_FOR_LASTVISITED_INTHELAST'] = 'Kërkimi për përdoruesit që kanë vizituar në %s e fundit';
$lang['SEARCH_FOR_LASTVISITED_AFTERTHELAST'] = 'Kërkimi për përdoruesit që kanë vizituar pas %s të fundit';
$lang['SEARCH_FOR_LANGUAGE'] = 'Kërkimi për përdoruesit të cilët kanë vendosur %s si gjuhën e tyre';
$lang['SEARCH_FOR_TIMEZONE'] = 'Kërkimi për përdoruesit të cilët kanë vendosur UTC %s si brezin e tyre';
$lang['SEARCH_FOR_MODERATORS'] = 'Kërkimi për moderatorët e Forumit -> %s';
$lang['SEARCH_USERS_ADVANCED'] = 'Kërkimi i Avancuar për Përdoruesit';
$lang['SEARCH_USERS_EXPLAIN'] = 'Ky Modul ju lejon për të kryer kërkime të avancuara për përdoruesit në një gamë të gjerë të kritereve. Ju lutem lexoni përshkrimet nën çdo fushë për të kuptuar çdo kërkim opsion plotësisht.';
$lang['SEARCH_USERNAME_EXPLAIN'] = 'Këtu mund të kryeni një kërkim për emrat e përdoruesve pa ndjeshëm. Nëse dëshironi të përputhni pjesën e emrit të përdoruesit, përdorni * (ylla) si një wildcard.';
$lang['SEARCH_EMAIL_EXPLAIN'] = 'Futni një shprehje për përputhjen e adresës elektronike të përdoruesit. Ky është i pandjeshëm ndaj rastit. Nëse dëshironi të bëni një përputhje të pjesshme, përdorni * (ylla) si një wildcard.';
$lang['SEARCH_IP_EXPLAIN'] = 'Kërkimi për përdoruesit me një adresë IP të veçantë (xxx.xxx.xxx.xxx).';
$lang['SEARCH_USERS_JOINED'] = 'Përdoruesit që u bashkuan';
$lang['SEARCH_USERS_LASTVISITED'] = 'Përdoruesit të cilët kanë vizituar';
$lang['IN_THE_LAST'] = 'të fundit';
$lang['AFTER_THE_LAST'] = 'pas %s të fundit';
$lang['BEFORE'] = 'Para';
$lang['AFTER'] = 'Pas';
$lang['SEARCH_USERS_JOINED_EXPLAIN'] = 'Kërkoni për përdoruesit që janë bashkuar Para ose Pas (dhe në) një datë të caktuar. Formati i datës është YYYY/MM/DD.';
$lang['SEARCH_USERS_GROUPS_EXPLAIN'] = 'Shiko të gjithë anëtarët e grupit të përzgjedhur.';
$lang['SEARCH_USERS_RANKS_EXPLAIN'] = 'Shiko të gjithë përdoruesit e rangut të përzgjedhur.';
$lang['BANNED_USERS'] = 'Përdorues të Ndaluar';
$lang['DISABLED_USERS'] = 'Përdoruesit me Aftësi të Kufizuara';
$lang['SEARCH_USERS_MISC_EXPLAIN'] = 'Administratorët - Të gjithë përdoruesit me kompetenca Administratori; Moderatorët - Të gjithë moderatorët e forumit; Përdoruesit e Ndaluar - Të gjitha llogaritë që janë ndaluar në këto forume; Përdoruesit me aftësi të kufizuara - Të gjithë përdoruesit me llogari të paaftë (qoftë të çaktivizuar manualisht ose kurrë të verifikuar adresën e tyre të emailit); Përdoruesit me PM me aftësi të kufizuara - Zgjedh përdoruesit të cilëve u janë hequr privilegjet e Mesazheve Private (Bërë nëpërmjet Menaxhimit të Përdoruesit)';
$lang['POSTCOUNT'] = 'Numri i postimeve';
$lang['EQUALS'] = 'E barabartë';
$lang['GREATER_THAN'] = 'Më e madhe se';
$lang['LESS_THAN'] = 'Më pak se';
$lang['SEARCH_USERS_POSTCOUNT_EXPLAIN'] = 'Ju mund të kërkoni për përdorues bazuar në vlerën e numrit të postimeve. Mund të kërkoni ose sipas një vlere specifike, më të madhe ose më të vogël se një vlerë ose midis dy vlerave. Për të bërë kërkimin e diapazonit, zgjidhni "E barabartë" dhe më pas vendosni vlerat e fillimit dhe mbarimit të diapazonit të ndara me një vizë (-), p.sh. 10-15';
$lang['USERFIELD'] = 'Fusha e përdoruesit';
$lang['SEARCH_USERS_USERFIELD_EXPLAIN'] = 'Kërkimi për përdoruesit bazuar në fushat e ndryshme të profilit. Simbolet wildcard mbështeten duke përdorur një yll (*).';
$lang['SEARCH_USERS_LASTVISITED_EXPLAIN'] = 'Ju mund të kërkoni për përdoruesit sipas datës së fundit të identifikimit duke përdorur këtë opsion kërkimi.';
$lang['SEARCH_USERS_LANGUAGE_EXPLAIN'] = 'Kjo do të shfaqë përdoruesit që kanë zgjedhur një gjuhë të veçantë në profilin e tyre.';
$lang['SEARCH_USERS_TIMEZONE_EXPLAIN'] = 'Përdoruesit që kanë zgjedhur një brezin e caktuar në profilin e tyre.';
$lang['MODERATORS_OF'] = 'Moderatorët e';
$lang['SEARCH_USERS_MODERATORS_EXPLAIN'] = 'Kërkoni për përdorues me leje Moderimi në një forum të caktuar. Lejet e moderimit njihen ose nga lejet e përdoruesit ose duke qenë në një grup me lejet e duhura të grupit.';

$lang['SEARCH_USERS_NEW'] = '%s ka dhënë %d rezultat(e). Kryeni <a href="%s">një kërkim tjetër</a>.';
$lang['BANNED'] = 'Ndalohet';
$lang['NOT_BANNED'] = 'Nuk është ndaluar.';
$lang['SEARCH_NO_RESULTS'] = 'Nuk ka përdorues që përputhen me kriteret e zgjedhura. Ju lutemi provoni një kërkim tjetër. Nëse jeni duke kërkuar në fusha të emrit të përdoruesit ose adresës së emailit, për përputhje të pjesshme duhet të përdorni simbolin wildcard * (yll).';
$lang['ACCOUNT_STATUS'] = 'Statusi i llogarisë';
$lang['SORT_OPTIONS'] = 'Opcione lloj:';
$lang['LAST_VISIT'] = 'Vizita e Fundit';
$lang['DAY'] = 'Ditë';

$lang['POST_EDIT_CANNOT'] = 'Na vjen keq, por ju nuk mund të redaktoni postimet.';
$lang['FORUMS_IN_CAT'] = 'forumet në këtë kategori';

$lang['MC_TITLE'] = 'Koment moderimi';
$lang['MC_LEGEND'] = 'Shkruani një koment.';
$lang['MC_FAQ'] = 'Teksti i futur do të shfaqet nën këtë mesazh.';
$lang['MC_COMMENT_PM_SUBJECT'] = '%s në mesazhin tuaj.';
$lang['MC_COMMENT_PM_MSG'] = "Përshëndetje, [b]%s[/b]\nModeratori la në mesazhin tuaj [url=%s][b]%s[/b][/url][quote]\n%s\n[/quote]";
$lang['MC_COMMENT'] = [
    0 => [
        'title' => '',
        'type' => 'Fshini komentin.',
    ],
    1 => [
        'title' => 'Koment nga %s.',
        'type' => 'Koment',
    ],
    2 => [
        'title' => 'Informacion nga %s.',
        'type' => 'Informacion',
    ],
    3 => [
        'title' => 'Paralajmërim nga %s.',
        'type' => 'Paralajmërim',
    ],
    4 => [
        'title' => 'Shkelja nga %s.',
        'type' => 'Shkelje',
    ],
];

$lang['SITEMAP'] = 'Sitemap';
$lang['SITEMAP_ADMIN'] = 'Menaxhuar sitemap.';
$lang['SITEMAP_CREATED'] = 'Sitemap i krijuar.';
$lang['SITEMAP_AVAILABLE'] = 'Sitemap është në dispozicion në.';
$lang['SITEMAP_NOT_CREATED'] = 'Sitemap nuk është krijuar akoma.';
$lang['SITEMAP_OPTIONS'] = 'Opsionet';
$lang['SITEMAP_CREATE'] = 'Krijo / përditëso sitemap.';
$lang['SITEMAP_WHAT_NEXT'] = 'Çfarë duhet të bëjmë tani?';
$lang['SITEMAP_GOOGLE_1'] = 'Regjistrohuni në faqen tuaj në <a href="https://www.google.com/webmasters/" target="_blank">Google Webmaster</a> tuaj duke përdorur llogarinë Google.';
$lang['SITEMAP_GOOGLE_2'] = '<a href="https://www.google.com/webmasters/tools/sitemap-list" target="_blank">Shtoni sitemap</a> të faqes që keni regjistruar.';
$lang['SITEMAP_YANDEX_1'] = 'Regjistrohuni në faqen tuaj në <a href="https://webmaster.yandex.ru/sites/" target="_blank">Yandex Webmaster</a> tuaj duke përdorur Yandex llogari.';
$lang['SITEMAP_YANDEX_2'] = '<a href="https://webmaster.yandex.ru/site/map.xml" target="_blank">Add sitemap</a> të faqes që ju të regjistruar.';
$lang['SITEMAP_BING_1'] = 'Regjistrohuni në faqen tuaj në <a href="https://www.bing.com/webmaster/" target="_blank">Bing Webmaster</a> duke përdorur llogarinë tuaj Microsoft.';
$lang['SITEMAP_BING_2'] = 'Shtoni sitemap të faqes që keni regjistruar në parametrat e saj.';
$lang['SITEMAP_ADD_TITLE'] = 'Faqet shtesë për sitemap.';
$lang['SITEMAP_ADD_PAGE'] = 'Faqe shtesë.';
$lang['SITEMAP_ADD_EXP_1'] = 'Ju mund të specifikoni faqe shtesë në faqen tuaj që duhet të përfshihen në skedarin e sitemap që po krijoni.';
$lang['SITEMAP_ADD_EXP_2'] = 'Çdo referencë duhet të fillojë me http(s):// dhe një linjë të re!';

$lang['FORUM_MAP'] = 'Harta e Forumeve.';
$lang['ATOM_FEED'] = 'Feed';
$lang['ATOM_ERROR'] = 'Gabim në gjenerimin e feed.';
$lang['ATOM_SUBSCRIBE'] = 'Regjistrohu në feed.';
$lang['ATOM_UPDATED'] = 'Përditësim';
$lang['ATOM_GLOBAL_FEED'] = 'Ushqim global për të gjitha forumet';

$lang['HASH_INVALID'] = 'Hash %s është i pavlefshëm.';
$lang['HASH_NOT_FOUND'] = 'Lirimi me hash %s nuk u gjet.';

$lang['TERMS_EMPTY_TEXT'] = '[harmonizojë=center]tekstin e kësaj faqe është redaktuar në: [url]%s[/url]. Kjo linjë mund të shihni vetëm administratorët.[/harmonizojë]';
$lang['TERMS_EXPLAIN'] = 'Në këtë faqe, ju mund të specifikoni tekstin e rregullave bazë të burimeve që shfaqen për përdoruesit.';
$lang['TERMS_UPDATED_SUCCESSFULLY'] = 'Kushtet janë përditësuar me sukses';
$lang['CLICK_RETURN_TERMS_CONFIG'] = '%sKlikoni këtu për t\'u kthyer në redaktorin e Kushtet%s';

$lang['TR_STATS'] = [
    0 => 'përdorues joaktiv në 30 ditë.',
    1 => 'përdorues joaktiv për 90 ditë.',
    2 => 'shpërndarje me madhësi të mesme në ndjekës',
    3 => 'sa shumë duar totale në tracker.',
    4 => 'sa duar aktive (ka të paktën 1 led).',
    5 => 'sa duar ku shorti më shumë se 5 fara.',
    6 => 'sa prej nesh uploaders (ata që mbushin të paktën 1 dorën).',
    7 => 'sa uploaders gjatë 30 ditëve të fundit.',
];

$lang['TORRENT_STATS_TITLE'] = 'Statistikat e Torrentit';
$lang['TRACKER_STATS_TITLE'] = 'Statistikat e Tracker-it';
$lang['TORRENTS'] = 'Torrents';
$lang['PEERS'] = 'Përdorues';
$lang['CLIENTS'] = 'Klientët';

$lang['NEW_POLL_START'] = 'Sondazhi i aktivizuar.';
$lang['NEW_POLL_END'] = 'Sondazhi i përfunduar.';
$lang['NEW_POLL_ENDED'] = 'Kjo anketë është përfunduar tashmë.';
$lang['NEW_POLL_DELETE'] = 'Anketa është fshirë.';
$lang['NEW_POLL_ADDED'] = 'Anketa e shtuar.';
$lang['NEW_POLL_ALREADY'] = 'Tema tashmë ka një sondazh.';
$lang['NEW_POLL_RESULTS'] = 'Ankesa është ndryshuar dhe rezultatet e vjetra janë fshirë.';
$lang['NEW_POLL_VOTES'] = 'Ju duhet të shkruani një përgjigje të saktë opsionesh (minimumi 2, maksimumi është %s).';
$lang['NEW_POLL_DAYS'] = 'Koha e sondazhit (%s ditë nga momenti i krijimit të temës) ka përfunduar tashmë.';
$lang['NEW_POLL_U_NOSEL'] = 'Ju nuk keni zgjedhur një votim.';
$lang['NEW_POLL_U_CHANGE'] = 'Redaktoni sondazhin.';
$lang['NEW_POLL_U_EDIT'] = 'Ndryshoni sondazhin (rezultatet e vjetra do të fshihen)';
$lang['NEW_POLL_U_VOTED'] = 'Të gjithë kanë votuar';
$lang['NEW_POLL_U_START'] = 'Aktivizo sondazhin';
$lang['NEW_POLL_U_END'] = 'Përfundo sondazhin';
$lang['NEW_POLL_M_TITLE'] = 'Titulli i sondazhit';
$lang['NEW_POLL_M_VOTES'] = 'Opsionet';
$lang['NEW_POLL_M_EXPLAIN'] = 'Çdo rresht korrespondon me një përgjigje (max';

$lang['UPLOAD_ERROR_COMMON_DISABLED'] = 'Ngarkimi i skedarëve është i çaktivizuar';
$lang['UPLOAD_ERROR_COMMON'] = 'Gabim gjatë ngarkimit të skedarit';
$lang['UPLOAD_ERROR_SIZE'] = 'Skedari i ngarkuar kalon madhësinë maksimale prej %s';
$lang['UPLOAD_ERROR_FORMAT'] = 'Lloji i skedarit të imazhit është i pavlefshëm';
$lang['UPLOAD_ERROR_DIMENSIONS'] = 'Dimensionet e imazhit tejkalojnë maksimumin e lejuar %sx%s piksel';
$lang['UPLOAD_ERROR_NOT_IMAGE'] = 'Skedari i ngarkuar nuk është një imazh';
$lang['UPLOAD_ERROR_NOT_ALLOWED'] = 'Zgjerimi %s për shkarkim nuk lejohet';
$lang['UPLOAD_ERRORS'] = [
    UPLOAD_ERR_INI_SIZE => 'Keni tejkaluar madhësinë maksimale të skedarit për serverin',
    UPLOAD_ERR_FORM_SIZE => 'Keni tejkaluar madhësinë maksimale të ngarkimit të skedarit',
    UPLOAD_ERR_PARTIAL => 'Skedari është shkarkuar pjesërisht.',
    UPLOAD_ERR_NO_FILE => 'Skedari nuk u ngarkua.',
    UPLOAD_ERR_NO_TMP_DIR => 'Drejtoria e përkohshme nuk u gjet.',
    UPLOAD_ERR_CANT_WRITE => 'Gabim gjatë shkruarjes.',
    UPLOAD_ERR_EXTENSION => 'Ngarkimi është ndalur nga zgjerimi.',
];

// Captcha
$lang['CAPTCHA'] = 'Kontrolloni se ju nuk jeni një robot';
$lang['CAPTCHA_WRONG'] = 'Nuk mund të konfirmoni se nuk jeni një robot.';
$lang['CAPTCHA_SETTINGS'] = '<h2>Captcha nuk është konfiguruar plotësisht</h2><p>Generoni çelësat duke përdorur panelin e shërbimit tuaj captcha, pastaj duhet t\'i vendosni ato në skedarin config/config.php.</p>';
$lang['CAPTCHA_OCCURS_BACKGROUND'] = 'Verifikimi CAPTCHA ndodh në sfond';

// Sending email
$lang['REPLY_TO'] = 'Përgjigje për';
$lang['EMAILER_SUBJECT'] = [
    'EMPTY' => 'Asnjë subjekt',
    'GROUP_ADDED' => 'Ju jeni shtuar në grupin e përdoruesve',
    'GROUP_APPROVED' => 'Kërkesa juaj për t\'u bashkuar me grupin e përdoruesve është pranuar',
    'GROUP_REQUEST' => 'Një kërkesë për t\'u bashkuar me grupin tuaj të përdoruesve',
    'PRIVMSG_NOTIFY' => 'Mesazh i ri privat',
    'TOPIC_NOTIFY' => 'Njoftim për përgjigje në bisedë - %s',
    'USER_ACTIVATE' => 'Riaktivizimi i llogarisë',
    'USER_ACTIVATE_PASSWD' => 'Konfirmimi i një fjalëkalimi të ri',
    'USER_WELCOME' => 'Mirë se vini në faqen %s',
    'USER_WELCOME_INACTIVE' => 'Mirë se vini në faqen %s',
];

// Null ratio
$lang['BT_NULL_RATIO'] = 'Rivendosni raportin';
$lang['BT_NULL_RATIO_NONE'] = 'Nuk keni një raport';
$lang['BT_NULL_RATIO_ALERT'] = "Kujdes!\n\nA jeni të sigurt se dëshironi të rivendosni raportin tuaj?";
$lang['BT_NULL_RATIO_AGAIN'] = 'E keni rivendosur tashmë raportin tuaj!';
$lang['BT_NULL_RATIO_NOT_NEEDED'] = 'Keni një raport të mirë. Rivendosja është e mundur vetëm me një raport më të vogël se %s';
$lang['BT_NULL_RATIO_SUCCESS'] = 'Raporti është rivendosur me sukses!';

// Releaser stats
$lang['RELEASER_STAT_SIZE'] = 'Madhësia totale:';
$lang['RELEASER_STAT'] = 'Statistikat e lëshuesit:';
$lang['RELEASER_STAT_SHOW'] = 'Trego statistika';

// Spam protection
$lang['REGISTRATION_DENIED'] = 'Regjistrimi u refuzua. Ju lutemi kontaktoni administratorin nëse besoni se kjo është një gabim.';
$lang['POST_SPAM_DENIED'] = 'Mesazhi juaj është identifikuar si spam dhe nuk mund të publikohet.';
$lang['PM_SPAM_DENIED'] = 'Mesazhi juaj është identifikuar si spam dhe nuk mund të dërgohet.';

// Spam log (admin)
$lang['SPAM_LOG'] = 'Regjistri i Spam-it';
$lang['SPAM_LOG_DESC'] = 'Ky regjistër regjistron të gjitha përpjekjet për regjistrim dhe dorëzimet e përmbajtjes që janë sinjalizuar nga sistemi i mbrojtjes nga spam-i. <b>Refuzuar</b> &mdash; veprimi ishte plotësisht i bllokuar (regjistrimi u refuzua, postimi/mesazhi i përgjithshëm nuk u dërgua). <b>Moderuar</b> &mdash; për regjistrimet, llogaria u krijua por kërkon aktivizim me email; për përmbajtjen, postimi/mesazhi i përgjithshëm u lejua por u sinjalizua si i dyshimtë.';
$lang['SPAM_LOG_CHECK_TYPE'] = 'Lloji i kontrolleve';
$lang['SPAM_LOG_CHECK_TYPE_DESC_REG'] = 'regjistrim &mdash; hapje kontoje e re';
$lang['SPAM_LOG_CHECK_TYPE_DESC_CONTENT'] = 'përmbajtje &mdash; postim ose mesazh privat';
$lang['SPAM_LOG_DECISION'] = 'Vendimi';
$lang['SPAM_LOG_PROVIDER'] = 'Ofruesi';
$lang['SPAM_LOG_REASON'] = 'Arsyeja';
$lang['SPAM_LOG_RESPONSE_TIME'] = 'Koha (ms)';
$lang['SPAM_LOG_ALL'] = 'Të gjitha';
$lang['SPAM_LOG_DETAILS'] = 'Detajet';
$lang['SPAM_LOG_NO_RECORDS'] = 'Nuk u gjetën regjistra spam';
$lang['SPAM_LOG_TOTAL'] = 'Totali i regjistrimeve';
$lang['SPAM_LOG_DENIED_COUNT'] = 'Refuzuar';
$lang['SPAM_LOG_MODERATED_COUNT'] = 'Moderuar';

// Dark mode
$lang['DARK_MODE_TOGGLE'] = 'Aktivizo modalitetin e errët';
