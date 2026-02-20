<?php

/**
 * TorrentPier – Bull-powered BitTorrent tracker engine
 *
 * @copyright Copyright (c) 2005-2025 TorrentPier (https://torrentpier.com)
 * @link      https://github.com/torrentpier/torrentpier for the canonical source repository
 * @license   https://github.com/torrentpier/torrentpier/blob/master/LICENSE MIT License
 */

// Common, these terms are used extensively on several pages
$lang['ADMIN'] = 'Uprava';
$lang['FORUM'] = 'Forum';
$lang['CATEGORY'] = 'Kategorija';
$lang['HIDE_CAT'] = 'Skrij kategorije';
$lang['HIDE_CAT_MESS'] = 'Nekatere kategorije so skrite s prilagojenimi možnostmi prikaza';
$lang['SHOW_ALL'] = 'Pokaži vse';
$lang['TOPIC'] = 'Temo';
$lang['TOPICS'] = 'Teme';
$lang['TOPICS_SHORT'] = 'Teme';
$lang['REPLIES'] = 'Odgovori';
$lang['REPLIES_SHORT'] = 'Odgovori';
$lang['VIEWS'] = 'Ogledov';
$lang['POSTS'] = 'Objav';
$lang['POSTS_SHORT'] = 'Objav';
$lang['POSTED'] = 'Objavljeno';
$lang['USERNAME'] = 'Uporabniško ime';
$lang['PASSWORD'] = 'Geslo';
$lang['PASSWORD_SHOW_BTN'] = 'Prikaži geslo';
$lang['EMAIL'] = 'E-pošta';
$lang['PM'] = 'PM';
$lang['AUTHOR'] = 'Avtor';
$lang['MESSAGE'] = 'Sporočilo';
$lang['TORRENT'] = 'Torrent';
$lang['PERMISSIONS'] = 'Dovoljenja';
$lang['TYPE'] = 'Vrsta';

$lang['1_DAY'] = '1 Dan';
$lang['7_DAYS'] = '7 Dni';
$lang['2_WEEKS'] = '2 Tedna';
$lang['1_MONTH'] = '1 Mesec';
$lang['3_MONTHS'] = '3 Mesecev';
$lang['6_MONTHS'] = '6 Mesecev';
$lang['1_YEAR'] = '1 Leto';

$lang['GO'] = 'Pojdi na';
$lang['SUBMIT'] = 'Pošljite';
$lang['RESET'] = 'Ponastavi';
$lang['CANCEL'] = 'Prekliči';
$lang['PREVIEW'] = 'Predogled';
$lang['AJAX_PREVIEW'] = 'Hitri Pregled';
$lang['CONFIRM'] = 'Potrdi';
$lang['YES'] = 'Da,';
$lang['NO'] = 'Ne.';
$lang['ENABLED'] = 'Omogočeno';
$lang['DISABLED'] = 'Onemogočeno.';
$lang['ERROR'] = 'Napaka';
$lang['SELECT_ACTION'] = 'Izberite dejanje';
$lang['CLEAR'] = 'Počisti';
$lang['MOVE_TO_TOP'] = 'Premakni na vrh';
$lang['UNKNOWN'] = 'Neznan';
$lang['COPY_TO_CLIPBOARD'] = 'Kopiraj v odložišče';
$lang['NO_ITEMS'] = 'Zdi se, da tukaj ni podatkov...';
$lang['PLEASE_TRY_AGAIN'] = 'Poskusite znova čez nekaj sekund...';

$lang['NEXT_PAGE'] = 'Naprej';
$lang['PREVIOUS_PAGE'] = 'Prejšnji';
$lang['SHORT_PAGE'] = 'strani';
$lang['GOTO_PAGE'] = 'Pojdi na stran';
$lang['GOTO_SHORT'] = 'Stran';
$lang['JOINED'] = 'Pridružen';
$lang['LONGEVITY'] = 'Registrirani';
$lang['IP_ADDRESS'] = 'IP Naslov';

$lang['SELECT_FORUM'] = 'Izberite forum';
$lang['VIEW_LATEST_POST'] = 'Prikaz zadnje objave';
$lang['VIEW_NEWEST_POST'] = 'Ogledajte najnovejšo objavo.';
$lang['PAGE_OF'] = 'Stran <b>%d</b> od <b>%s</b>';

$lang['TWITTER'] = 'X (Twitter)';
$lang['TWITTER_ERROR'] = 'Vnesli ste neveljavne prijavne podatke za Twitter.';

$lang['POST_NEW_TOPIC'] = 'Objavi novo temo';
$lang['POST_NEW_RELEASE'] = 'Post nova objava';
$lang['REPLY_TO_TOPIC'] = 'Odgovori na to temo';

$lang['CLICK_RETURN_TOPIC'] = 'Kliknite %sHere%s, da se vrnete na temo'; // %s's here are for uris, do not remove!
$lang['CLICK_RETURN_FORUM'] = 'Kliknite %sTukaj%s, da se vrnete na forum.';
$lang['CLICK_RETURN_MODCP'] = 'Kliknite %sTukaj%s, da se vrnete na nadzorno ploščo moderatorja.';

$lang['ADMIN_PANEL'] = 'Pojdi na Upravi Plošče';
$lang['ALL_CACHE_CLEARED'] = 'Predpomnilnik je bil izpraznjen';
$lang['ALL_TEMPLATE_CLEARED'] = 'Predloga predpomnilnika je bila izčrpana.';
$lang['DATASTORE_CLEARED'] = 'Datastore je bil izpraznjen';
$lang['BOARD_DISABLE'] = 'Žal, ta forum je onemogočen. Poskusite priti nazaj kasneje.';
$lang['BOARD_DISABLE_CRON'] = 'Forum je onemogočen za vzdrževanje. Poskusite se vrniti kasneje.';
$lang['ADMIN_DISABLE'] = 'Forum je onemogočil skrbnik. Omogočite ga lahko kadarkoli';
$lang['ADMIN_DISABLE_CRON'] = 'Forum je zaklenjen zaradi sprožilca cron naloge. Zaklep lahko odstranite kadarkoli';
$lang['ADMIN_DISABLE_TITLE'] = 'Forum je onemogočen.';
$lang['ADMIN_DISABLE_CRON_TITLE'] = 'Forum je onemogočen med vzdrževanjem.';
$lang['ADMIN_UNLOCK'] = 'Omogočite forum.';
$lang['ADMIN_UNLOCKED'] = 'Odklenjena';
$lang['ADMIN_UNLOCK_CRON'] = 'Odstrani zaklep';
$lang['PAGE_NOT_FOUND'] = 'Stran ni najdena';

$lang['LOADING'] = 'Nalaganje...';
$lang['JUMPBOX_TITLE'] = 'Izberite forum';
$lang['DISPLAYING_OPTIONS'] = 'Prikaz možnosti.';

// Global Header strings
$lang['BROWSING_FORUM'] = 'Uporabniki brskanje ta forum.';
$lang['ONLINE_USERS'] = 'Skupaj so <b>%1$d</b> uporabniki online: %2$d registriranih in %3$d gostov';
$lang['RECORD_ONLINE_USERS'] = 'Največ uporabnikov hkrati je bilo <b>%s</b> dne %s'; // first %s = number of users, second %s is the date.

$lang['ONLINE_ADMIN'] = 'Administrator';
$lang['ONLINE_MOD'] = 'Moderator';
$lang['ONLINE_GROUP_MEMBER'] = 'Član skupine';

$lang['CURRENT_TIME'] = 'Trenutni čas: <span class="tz_time">%s</span>';

$lang['SEARCH_NEW'] = 'Ogledajte najnovejše objave.';
$lang['SEARCH_SELF'] = 'Moji objavi.';
$lang['SEARCH_SELF_BY_LAST'] = 'Zadnji čas objave.';
$lang['SEARCH_SELF_BY_MY'] = 'Moj čas objave.';
$lang['SEARCH_LATEST'] = 'Zadnje teme';
$lang['LATEST_RELEASES'] = 'Najnovejše objave.';

$lang['REGISTER'] = 'Registracija.';
$lang['PROFILE'] = 'Profil';
$lang['EDIT_PROFILE'] = 'Uredi profil';
$lang['SEARCH'] = 'Iskanje';
$lang['MEMBERLIST'] = 'Seznam članov.';
$lang['USERGROUPS'] = 'Uporabniške skupine.';
$lang['LASTPOST'] = 'Zadnja Objava';
$lang['MODERATOR'] = 'Moderator';
$lang['MODERATORS'] = 'Moderatorji';
$lang['TERMS'] = 'Pogoji';
$lang['NOTHING_HAS_CHANGED'] = 'Nič se ni spremenilo.';

// Stats block text
$lang['POSTED_TOPICS_TOTAL'] = 'Naši uporabniki so objavili skupaj <b>%s</b> teme'; // Number of topics
$lang['POSTED_POSTS_TOTAL'] = 'Naši uporabniki so objavili skupaj <b>%s</b> prispevkov'; // Number of posts
$lang['REGISTERED_USERS_TOTAL'] = 'Imamo <b>%s</b> registrirane uporabnike'; // # registered users
$lang['USERS_TOTAL_GENDER'] = 'Fantje: <b>%d</b>, Dekleta: <b>%d</b>, Drugi: <b>%d</b>';
$lang['NEWEST_USER'] = 'Najnovejši registriran uporabnik, je <b>%s</b>'; // a href, username, /a

// Tracker stats
$lang['TORRENTS_STAT'] = 'Hudourniki: <b style="color: blue;">%s</b>,&nbsp; Skupna velikost: <b>%s</b>'; // first %s = number of torrents, second %s is the total size.
$lang['PEERS_STAT'] = 'Vrstniki: <b>%s</b>,&nbsp; Sejalci: <b class="seedmed">%s</b>,&nbsp; Leechers: <b class="leechmed">%s</b>'; // first %s = number of peers, second %s = number of seeders,  third %s = number of leechers.
$lang['SPEED_STAT'] = 'Skupna hitrost: <b>%s</b>&nbsp;'; // %s = total speed.

$lang['NO_NEW_POSTS'] = 'Ni novih objav';
$lang['NEW_POSTS'] = 'Novih objav';
$lang['FORUM_LOCKED_MAIN'] = 'Forum je zaklenjen';

// Login
$lang['ENTER_PASSWORD'] = 'Vnesite svoje uporabniško ime in geslo za prijavo.';
$lang['LOGIN'] = 'Prijavite se';
$lang['LOGOUT'] = 'Odjava';
$lang['CONFIRM_LOGOUT'] = 'Ali ste prepričani, da se želite odjaviti?';

$lang['FORGOTTEN_PASSWORD'] = 'Geslo pozabili?';
$lang['AUTO_LOGIN'] = 'Samodejno me prijavi';
$lang['ERROR_LOGIN'] = 'Uporabniško ime ali geslo, ki ste ga vnesli, ni pravilno.';
$lang['REMEMBER'] = 'Ne pozabite';
$lang['USER_WELCOME'] = 'Dobrodošli,';

// Index page
$lang['HOME'] = 'Doma';
$lang['NO_POSTS'] = 'Ni objav';
$lang['NO_FORUMS'] = 'Ta plošča nima forumov';

$lang['PRIVATE_MESSAGE'] = 'Zasebno sporočilo';
$lang['PRIVATE_MESSAGES'] = 'Zasebna sporočila';
$lang['WHOSONLINE'] = 'Kdo je na spletu';

$lang['MARK_ALL_FORUMS_READ'] = 'Označi vse forume kot prebrane';

$lang['LATEST_NEWS'] = 'Najnovejše novice';
$lang['NETWORK_NEWS'] = 'Network news';
$lang['SUBFORUMS'] = 'Subforums';

$lang['FORUM_NOT_EXIST'] = 'Forum, ki ste jih izbrali, ne obstaja.';
$lang['ERROR_PORNO_FORUM'] = 'Ta vrsta forumov (18+) je bila skrita v vašem profilu.';

$lang['DISPLAY_TOPICS'] = 'Prikaz tem';
$lang['MODERATE_FORUM'] = 'Moderiraj ta forum';
$lang['TITLE_SEARCH_HINT'] = 'Iskanje naslov...';

$lang['TOPIC_ANNOUNCEMENT'] = 'Napoved:';
$lang['TOPIC_MOVED'] = 'Prestavljen:';
$lang['TOPIC_POLL'] = '[ Anketa ]';

$lang['MARK_TOPICS_READ'] = 'Označi vse teme kot prebrane';
$lang['TOPICS_MARKED_READ'] = 'Teme na tem forumu so bile označene kot prebrane';

$lang['RULES_POST_CAN'] = 'Lahko objavite nove teme v tem forumu';
$lang['RULES_POST_CANNOT'] = 'Ne morete objaviti novih tem v tem forumu';
$lang['RULES_REPLY_CAN'] = 'Lahko odgovarjate na teme v tem forumu';
$lang['RULES_REPLY_CANNOT'] = 'Ne morete odgovoriti na teme v tem forumu';
$lang['RULES_EDIT_CAN'] = 'Lahko uredite svoje objave v tem forumu';
$lang['RULES_EDIT_CANNOT'] = 'Ne morete urediti svojih objav v tem forumu';
$lang['RULES_DELETE_CAN'] = 'Lahko brišete svoje objave v tem forumu';
$lang['RULES_DELETE_CANNOT'] = 'Ne morete brisati svojih objav v tem forumu';
$lang['RULES_VOTE_CAN'] = 'Lahko glasujete na anketah v tem forumu';
$lang['RULES_VOTE_CANNOT'] = 'Ne morete glasovati na anketah v tem forumu';
$lang['RULES_MODERATE'] = 'Lahko moderirate ta forum';

$lang['NO_TOPICS_POST_ONE'] = 'V tem forumu še ni objav<br />Kliknite na <b>Novo temo</b> ikono, in vaša objava bo prva.';
$lang['NO_RELEASES_POST_ONE'] = 'V tem forumu še ni izdaj<br />Kliknite na <b>Nova izdaja</b> ikono, in vaša izdaja bo prva.';

$lang['GUEST'] = 'Gost';
$lang['SUBMIT_VOTE'] = 'Oddajte glas';

$lang['NO_NEWER_TOPICS'] = 'Ne obstajajo nove teme v tem forumu';
$lang['NO_OLDER_TOPICS'] = 'Ne obstajajo starejše teme v tem forumu';
$lang['TOPIC_POST_NOT_EXIST'] = 'Tema ali podpis, ki ste jo zahtevali, ne obstaja';
$lang['NO_POSTS_TOPIC'] = 'Ni prispevkov v tej temi';

$lang['DISPLAY_POSTS'] = 'Prikaz objav';
$lang['ALL_POSTS'] = 'Vse Objave';
$lang['NEWEST_FIRST'] = 'Najnovejši Prvi';
$lang['OLDEST_FIRST'] = 'Najstarejši Prvi';

$lang['READ_PROFILE'] = 'Prikaz uporabniškega profila';

$lang['WROTE'] = 'napisal'; // proceeds the username and is followed by the quoted text
$lang['QUOTE'] = 'Citiraj'; // comes before bbcode quote output
$lang['CODE'] = 'Kodo'; // comes before bbcode code output
$lang['SPOILER_HEAD'] = 'skrito besedilo';
$lang['SPOILER_CLOSE'] = 'zapri';
$lang['PLAY_ON_CURPAGE'] = 'Začnite igrati na trenutni strani';

$lang['EDITED_TIME_TOTAL'] = 'Nazadnje urejeno s strani <b>%s</b> na %s; urejeno %d-krat v skupnem.'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['EDITED_TIMES_TOTAL'] = 'Nazadnje urejeno s strani <b>%s</b> na %s; urejeno %d-krat v skupnem.'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['LOCK_TOPIC'] = 'Zakleni temo';
$lang['UNLOCK_TOPIC'] = 'Odkleni temo';
$lang['MOVE_TOPIC'] = 'Premakni temo';
$lang['DELETE_TOPIC'] = 'Izbriši to temo';
$lang['SPLIT_TOPIC'] = 'Ločite temo';

$lang['STOP_WATCHING_TOPIC'] = 'Prenehajte slediti temi';
$lang['START_WATCHING_TOPIC'] = 'Sledite temi za odgovore';
$lang['NO_LONGER_WATCHING'] = 'Za to temo ne sledite več';
$lang['YOU_ARE_WATCHING'] = 'Sedaj sledite tej temi';

$lang['SEARCH_IN_TOPIC'] = 'iskanje v temi...';
$lang['HIDE_IN_TOPIC'] = 'Skrij to temo';

$lang['SHOW'] = 'Prikaži to temo';
$lang['AVATARS'] = 'Avatarji';
$lang['RANK_IMAGES'] = 'Uvrstitev slike';
$lang['POST_IMAGES'] = 'Objavite slike';
$lang['SIGNATURES'] = 'Podpisi';
$lang['SPOILER'] = 'Spojler';
$lang['SHOW_OPENED'] = 'Prikaz odprtih';
$lang['DOWNLOAD_PIC'] = 'Prenosljive slike';

$lang['MODERATE_TOPIC'] = 'Moderiraj to temo';
$lang['SELECT_POSTS_PER_PAGE'] = 'objave na strani';

// Posting/Replying (Not private messaging!)
$lang['TOPIC_REVIEW'] = 'Pregled teme';

$lang['NO_POST_MODE'] = 'Ni izbran način objave'; // If posting.php is called without a mode (newtopic/reply/delete/etc., shouldn't be shown normally)

$lang['POST_A_NEW_TOPIC'] = 'Objavi novo temo';
$lang['POST_A_REPLY'] = 'Objavi novo odgovor';
$lang['POST_TOPIC_AS'] = 'Objavite temi kot';
$lang['EDIT_POST'] = 'Urejanje objave';
$lang['EDIT_TOPIC_TITLE'] = 'Urejanje naslova teme';

$lang['DONT_MESSAGE_TITLE'] = 'Navedli morate naslov sporočila';
$lang['INVALID_TOPIC_ID'] = 'Tema ni najdena!';
$lang['INVALID_TOPIC_ID_DB'] = 'Tema v bazi podatkov ne obstaja!';

$lang['NOT_EDIT_TOR_STATUS'] = 'Z izdajo s tem statusom ne morete urejati';

$lang['OPTIONS'] = 'Možnosti';

$lang['POST_ANNOUNCEMENT'] = 'Objava';
$lang['POST_STICKY'] = 'Lepljivo';
$lang['POST_NORMAL'] = 'Normalno';
$lang['POST_DOWNLOAD'] = 'Download';

// Anonymous posting
$lang['ANONYMOUS'] = 'Anonimno';
$lang['ANONYMOUS_TOPIC'] = 'Objavi temo anonimno';
$lang['ANONYMOUS_REPLY'] = 'Odgovori anonimno';
$lang['HIDE_AUTHORSHIP'] = 'Privzeto objavimo anonimno';
$lang['HIDE_AUTHORSHIP_EXPLAIN'] = 'Če je omogočeno, bodo novi zapisi privzeto v anonimnem načinu. To lahko spremenite za vsak zapis posebej.';
$lang['ALLOW_ANONYMOUS_POSTING'] = 'Dovoli anonimno objavljanje';
$lang['ANONYMOUS_POST_LABEL'] = 'Objavljeno anonimno';
$lang['POSTED_ANONYMOUSLY'] = 'objavljeno anonimno';
$lang['ANONYMOUS_ADMIN_NOTICE'] = 'Administratorji in moderatorji lahko vidijo resničnega avtorja';
$lang['YOU'] = 'Vi';

$lang['PRINT_PAGE'] = 'Natisni stran';

$lang['CONFIRM_DELETE'] = 'Ali ste prepričani, da želite izbrisati ta post?';
$lang['CONFIRM_DELETE_POLL'] = 'Anketna vprašanja';

$lang['FLOOD_ERROR'] = 'Ne morete objaviti drugega posta tako kmalu po zadnjem; prosimo, poskusite znova čez kratko.';
$lang['EMPTY_SUBJECT'] = 'Določiti morate temo';
$lang['EMPTY_MESSAGE'] = 'Vnesti morate sporočilo';
$lang['FORUM_LOCKED'] = 'Forum je zaklenjen';
$lang['TOPIC_LOCKED'] = 'Tema zaklenjena';
$lang['TOPIC_LOCKED_SHORT'] = 'Tema zaklenjena';
$lang['NO_POST_ID'] = 'Izbrati morate objavo za urejanje.';
$lang['NO_TOPIC_ID'] = 'Morate izbrati temo, če želite odgovoriti';
$lang['NO_VALID_MODE'] = 'Lahko samo objavite, odgovorite, uredite ali citirate sporočila. Prosimo, vrnite se in poskusite znova.';
$lang['NO_SUCH_POST'] = 'Ni take objave. Prosimo, vrnite se in poskusite znova.';
$lang['EDIT_OWN_POSTS'] = 'Žal mi je, ampak lahko samo urejate svoje objave.';
$lang['DELETE_OWN_POSTS'] = 'Žal mi je, vendar lahko samo izbrišete svoje objave.';
$lang['CANNOT_DELETE_REPLIED'] = 'Žal mi je, ampak ne morete izbrisati objave, na katero so odgovorili.';
$lang['CANNOT_DELETE_POLL'] = 'Žal mi je, vendar ne morete izbrisati aktivne ankete.';
$lang['EMPTY_POLL_TITLE'] = 'Morate vnesti naslov za vašo anketo.';
$lang['POST_HAS_NO_POLL'] = 'Ta objava nima ankete.';
$lang['ALREADY_VOTED'] = 'Že ste glasovali v tej anketi.';
$lang['NO_VOTE_OPTION'] = 'Morate navesti možnost pri glasovanju.';
$lang['LOCKED_WARN'] = 'Objavili ste v zaklenjeni temi!';

$lang['ADD_POLL'] = 'Dodaj anketo.';
$lang['UPDATE'] = 'Posodobitev';
$lang['DAYS'] = 'Dni';
$lang['DELETE_POLL'] = 'Brisanje anket.';

$lang['MAX_SMILIES_PER_POST'] = 'Presežena je omejitev emotikonov %s.';

$lang['NOTIFY'] = 'Obvesti me o odgovorih';
$lang['ALLOW_ROBOTS_INDEXING'] = 'Dovoli robotom indeksiranje te teme';

$lang['STORED'] = 'Vaše sporočilo je bilo uspešno vneseno.';
$lang['EDITED'] = 'Sporočilo je bilo spremenjeno.';
$lang['DELETED'] = 'Vaše sporočilo je bilo uspešno izbrisano.';
$lang['VOTE_CAST'] = 'Vaš glas je bil oddan.';

$lang['EMOTICONS'] = 'Emoticons';
$lang['MORE_EMOTICONS'] = 'Oglejte si več emotikonov.';

$lang['COLOR_DARK_RED'] = 'Temno Rdeča';
$lang['COLOR_RED'] = 'Rdeča';
$lang['COLOR_ORANGE'] = 'Oranžna';
$lang['COLOR_BROWN'] = 'Rjava';
$lang['COLOR_GREEN'] = 'Zelena';
$lang['COLOR_OLIVE'] = 'Oljčno';
$lang['COLOR_BLUE'] = 'Modra';
$lang['COLOR_DARK_BLUE'] = 'Temno Modra';
$lang['COLOR_INDIGO'] = 'Indigo';
$lang['COLOR_VIOLET'] = 'Vijolična';

$lang['FONT_SMALL'] = 'Mala';
$lang['FONT_NORMAL'] = 'Normalno';
$lang['FONT_LARGE'] = 'Velika';
$lang['FONT_HUGE'] = 'Veliko';

$lang['NEW_POSTS_PREVIEW'] = 'Tema ima nove, urejene ali neprebrane objave.';

// Private Messaging
$lang['PRIVATE_MESSAGING'] = 'Pošiljanje Zasebnih Sporočil';

$lang['NO_NEW_PM'] = 'ni novih sporočil';

$lang['NEW_PMS_FORMAT'] = '<b>%1$s</b> %2$s'; // 1 new message
$lang['NEW_PMS_DECLENSION'] = ['novo sporočilo', 'nova sporočila'];

$lang['UNREAD_PMS_FORMAT'] = '<b>%1$s</b> %2$s'; // 1 new message
$lang['UNREAD_PMS_DECLENSION'] = ['neprebrana', 'neprebrana'];

$lang['UNREAD_MESSAGE'] = 'Neprebrano sporočilo';
$lang['READ_MESSAGE'] = 'Branje sporočila';

$lang['READ_PM'] = 'Branje sporočila';
$lang['POST_NEW_PM'] = 'Objavi sporočilo';
$lang['POST_REPLY_PM'] = 'Odgovor na sporočilo';
$lang['POST_QUOTE_PM'] = 'Citiraj sporočilo';
$lang['EDIT_PM'] = 'Uredite zasebno sporočilo.';

$lang['INBOX'] = 'Prejeto';
$lang['OUTBOX'] = 'V pošiljanju';
$lang['SAVEBOX'] = 'Savebox';
$lang['SENTBOX'] = 'Sentbox';
$lang['SUBJECT'] = 'Predmet';
$lang['FROM'] = 'Iz';
$lang['TO'] = 'Za';
$lang['DATE'] = 'Datum';
$lang['SENT'] = 'Poslano';
$lang['SAVED'] = 'Shrani';
$lang['DELETE_MARKED'] = 'Zbriši označene.';
$lang['DELETE_ALL'] = 'Zbriši Vse';
$lang['SAVE_MARKED'] = 'Shrani Označena';
$lang['SAVE_MESSAGE'] = 'Shrani Sporočilo';
$lang['DELETE_MESSAGE'] = 'Zbriši sporočilo.';

$lang['DISPLAY_MESSAGES'] = 'Prikaz sporočil.'; // Followed by number of days/weeks/months

$lang['NO_MESSAGES_FOLDER'] = 'Ni sporočila v tej mapi';

$lang['CANNOT_SEND_PRIVMSG'] = 'Žal mi je, ampak administrator vam preprečuje pošiljanje zasebnih sporočil.';
$lang['NO_TO_USER'] = 'Morate navesti uporabniško ime, na katerega boste poslali sporočilo.';
$lang['NO_SUCH_USER'] = 'Žal mi je, ampak tak uporabnik ne obstaja.';

$lang['MESSAGE_SENT'] = '<b>Vaše sporočilo je bilo poslano.</b>.';

$lang['CLICK_RETURN_INBOX'] = 'Vrnite se na:<br /><br /> %s<b>Prejeto</b>%s.';
$lang['CLICK_RETURN_SENTBOX'] = '&nbsp;&nbsp; %s<b>Poslano</b>%s.';
$lang['CLICK_RETURN_OUTBOX'] = '&nbsp;&nbsp; %s<b>V pošiljanju</b>%s.';
$lang['CLICK_RETURN_SAVEBOX'] = '&nbsp;&nbsp; %s<b>Shranjeno</b>%s.';
$lang['CLICK_RETURN_INDEX'] = '%sVrni se na indeks%s.';

$lang['SEND_A_NEW_MESSAGE'] = 'Pošlji novo zasebno sporočilo';
$lang['SEND_A_REPLY'] = 'Odgovor na zasebno sporočilo';
$lang['EDIT_MESSAGE'] = 'Uredi zasebno sporočilo.';

$lang['FIND_USERNAME'] = 'Najdi uporabniško ime.';
$lang['SELECT_USERNAME'] = 'Izberite uporabniško ime.';
$lang['NO_MATCH'] = 'Ne najdejo se ujemi.';

$lang['NO_PM_ID'] = 'Prosimo, navedite ID posta.';
$lang['NO_SUCH_FOLDER'] = 'Mapa ni najdena';

$lang['MARK_ALL'] = 'Označi vse';
$lang['UNMARK_ALL'] = 'Odstrani vse.';

$lang['CONFIRM_DELETE_PM'] = 'Ali ste prepričani, da želite izbrisati to sporočilo?';
$lang['CONFIRM_DELETE_PMS'] = 'Ali ste prepričani, da želite izbrisati ta sporočila?';

$lang['INBOX_SIZE'] = 'Vaša Prejeta sporočila so<br /><b>%d%%</b> polna'; // e.g. Your Inbox is 50% full
$lang['SENTBOX_SIZE'] = 'Vaš Sentbox je<br /><b>%d%%</b> poln';
$lang['SAVEBOX_SIZE'] = 'Vaš Savebox je<br /><b>%d%%</b> poln';

$lang['OUTBOX_EXPL'] = '';

// Profiles/Registration
$lang['VIEWING_USER_PROFILE'] = 'Ogled profila :: %s';
$lang['VIEWING_MY_PROFILE'] = 'Moj profil [ <a href="%s">Nastavitve / Spremeni profil</a> ]';

$lang['DISABLED_USER'] = 'Račun onemogočen';
$lang['MANAGE_USER'] = 'Uprava';

$lang['PREFERENCES'] = 'Nastavitve';
$lang['ITEMS_REQUIRED'] = 'Elementi, označeni z * so obvezni, razen če je drugače navedeno.';
$lang['REGISTRATION_INFO'] = 'Informacije o registraciji';
$lang['PROFILE_INFO'] = 'Informacije o profilu';
$lang['AVATAR_PANEL'] = 'Avatar nadzorna plošča';

$lang['WEBSITE'] = 'Spletna stran';
$lang['LOCATION'] = 'Lokacija';
$lang['CONTACT'] = 'Stik';
$lang['EMAIL_ADDRESS'] = 'E-poštni naslov';
$lang['SEND_PRIVATE_MESSAGE'] = 'Pošlji zasebno sporočilo';
$lang['INTERESTS'] = 'Interesi';
$lang['OCCUPATION'] = 'Poklic';
$lang['POSTER_RANK'] = 'Uvrstitev plakata';
$lang['AWARDED_RANK'] = 'Podeljena uvrstitev';
$lang['SHOT_RANK'] = 'Uvrstitev strelov';

$lang['TOTAL_POSTS'] = 'Skupaj objav';
$lang['SEARCH_USER_POSTS'] = 'Iskanje objav'; // Find all posts by username
$lang['SEARCH_USER_POSTS_SHORT'] = 'Poiščite uporabnikove objave';
$lang['SEARCH_USER_TOPICS'] = 'Poiščite uporabnikove teme'; // Find all topics by username

$lang['NO_USER_ID_SPECIFIED'] = 'Žal mi je, ampak ta uporabnik ne obstaja.';
$lang['NO_SEND_ACCOUNT_INACTIVE'] = 'Žal mi je, ampak gesla ni mogoče pridobiti, ker je vaš račun trenutno neaktiven.';
$lang['NO_SEND_ACCOUNT'] = 'Žal mi je, ampak gesla ni mogoče pridobiti. Prosimo, obrnite na administratorja foruma za več informacij';

$lang['HIDE_PORN_FORUMS'] = 'Skrij vsebino, 18+';
$lang['ADD_RETRACKER'] = 'Dodaj retracker v torrent datoteke';
$lang['ALWAYS_NOTIFY'] = 'Vedno me obveščaj o odgovorih.';
$lang['ALWAYS_NOTIFY_EXPLAIN'] = 'Pošlje e-poštno sporočilo, ko nekdo odgovori na temo, ki ste jo objavili. To lahko spremenite kadarkoli.';

$lang['BOARD_LANG'] = 'Odbor jezik';
$lang['GENDER'] = 'Spol';
$lang['GENDER_SELECT'] = [
    0 => 'Neznan',
    1 => 'Moški',
    2 => 'Ženski',
];
$lang['MODULE_OFF'] = 'Modula je onemogočena!';

$lang['BIRTHDAY'] = 'Rojstni dan';
$lang['HAPPY_BIRTHDAY'] = 'Happy Birthday!';
$lang['WRONG_BIRTHDAY_FORMAT'] = 'Format rojstnega dne je bil vnesen nepravilno.';
$lang['AGE'] = 'Starost';
$lang['BIRTHDAY_TO_HIGH'] = 'Žal, ta spletna stran ne sprejema uporabnikov, starejših od %d let';
$lang['BIRTHDAY_TO_LOW'] = 'Žal ta stran ne sprejema uporabnikov, mlajših od %d let';
$lang['BIRTHDAY_TODAY'] = 'Uporabniki z rojstni dan danes: ';
$lang['BIRTHDAY_WEEK'] = 'Uporabniki z rojstnim dnem v naslednjih %d dneh: %s.';
$lang['NOBIRTHDAY_WEEK'] = 'Ni uporabnikov, ki imajo rojstni dan v prihajajočih %d dneh.'; // %d is substituted with the number of days
$lang['NOBIRTHDAY_TODAY'] = 'Nobeden uporabnik nima rojstnega dne danes.';
$lang['BIRTHDAY_ENABLE'] = 'Omogočite rojstni dan';
$lang['BIRTHDAY_MAX_AGE'] = 'Max starost';
$lang['BIRTHDAY_MIN_AGE'] = 'Min starost';
$lang['BIRTHDAY_CHECK_DAY'] = 'Dnevi za preverjanje prihodnjih rojstnih dni';
$lang['YEARS'] = 'Leta';

$lang['TIMEZONE'] = 'Časovni pas';
$lang['DATE_FORMAT_EXPLAIN'] = 'Sintaksa uporablja enako PHP <a href=\'https://www.php.net/manual/en/function.date.php\' target=\'_other\'>date()</a> funkcijo.';
$lang['SIGNATURE'] = 'Podpis';
$lang['SIGNATURE_EXPLAIN'] = 'To je blok besedila, ki ga je mogoče dodati objavam, ki jih naredite. Obstoja %d omejitev znakov.';
$lang['SIGNATURE_DISABLE'] = 'Podpis onemogočen zaradi kršitve pravil foruma';
$lang['PUBLIC_VIEW_EMAIL'] = 'Prikaži e-poštni naslov v mojem profilu.';

$lang['EMAIL_EXPLAIN'] = 'Za dokončanje registracije bo na ta naslov poslan preverjevalni elektronski naslov';

$lang['CURRENT_PASSWORD'] = 'Trenutno geslo';
$lang['NEW_PASSWORD'] = 'Novo geslo';
$lang['CONFIRM_PASSWORD'] = 'Potrdi geslo';
$lang['CONFIRM_PASSWORD_EXPLAIN'] = 'Morate potrditi svoje trenutno geslo, če ga želite spremeniti ali spremeniti svoj e-poštni naslov.';
$lang['PASSWORD_IF_CHANGED'] = 'Potrebujete le geslo, če ga želite spremeniti.';
$lang['PASSWORD_CONFIRM_IF_CHANGED'] = 'Morate le potrditi svoje geslo, če ste ga spremenili zgoraj.';

$lang['AUTOLOGIN'] = 'Autologin';
$lang['RESET_AUTOLOGIN'] = 'Ponastavite avto-prijavno ključno.';
$lang['RESET_AUTOLOGIN_EXPL'] = 'To vas bo odjavilo z vseh naprav, kjer je omogočena samodejna prijava';

$lang['AVATAR'] = 'Avatar';
$lang['AVATAR_EXPLAIN'] = 'Prikaže majhno grafično sliko spodaj vaše podatke v objavah. Samo ena slika se lahko prikaže hkrati, njena širina ne sme presegati %d slikovnih pik, višina ne sme presegati %d slikovnih pik, in velikost datoteke ne sme presegati %s.';
$lang['AVATAR_DELETE'] = 'Izbriši avatar.';
$lang['AVATAR_DISABLE'] = 'Naložitev avatarja je onemogočena zaradi kršitve <a href=\"%s\"><b>pravil foruma</b></a>';
$lang['UPLOAD_AVATAR_FILE'] = 'Naložite avatar.';
$lang['RETURN_PROFILE'] = 'Vrni se na profil.';
$lang['DELETE_IMAGE'] = 'Izbriši sliko.';
$lang['SET_MONSTERID_AVATAR'] = 'Nastavi MonsterID avatar';

$lang['NOTIFY_ON_PRIVMSG'] = 'Obvesti o novem zasebnem sporočilu.';
$lang['HIDE_USER'] = 'Skrijte svoje stanje povezave.';
$lang['HIDDEN_USER'] = 'Skriti uporabnik';

$lang['PROFILE_UPDATED'] = 'Vaš profil je bil posodobljen';
$lang['PROFILE_UPDATED_INACTIVE'] = 'Vaš profil je bil posodobljen. Vendar ste spremenili pomembne podrobnosti, zato je vaš račun zdaj neaktiven. Preverite svojo e-poštni naslov, da izveste, kako aktivirati svoj račun, ali če je potrebna aktivacija skrbnika, počakajte, da ga administrator aktivira.';

$lang['PASSWORD_LONG'] = 'Vaše geslo ne sme biti daljše od %d znakov in ne krajše od %d znakov.';
$lang['USERNAME_TAKEN'] = 'Žal mi je, ampak to uporabniško ime je že zasedeno.';
$lang['USERNAME_INVALID'] = 'Žal mi je, vendar to uporabniško ime vsebuje neveljaven znak.';
$lang['USERNAME_DISALLOWED'] = 'Žal mi je, ampak to uporabniško ime je zavrnjeno.';
$lang['USERNAME_TOO_LONG'] = 'Vaše uporabniško ime je predolgo.';
$lang['USERNAME_TOO_SMALL'] = 'Vaše uporabniško ime je prekratko.';
$lang['EMAIL_TAKEN'] = 'Žal mi je, toda ta e-poštni naslov je že registriran na uporabnika.';
$lang['EMAIL_INVALID'] = 'Žal mi je, toda ta e-poštni naslov je neveljaven.';
$lang['EMAIL_TOO_LONG'] = 'Vaš e-naslov je predolg.';
$lang['SIGNATURE_TOO_LONG'] = 'Vaš podpis je predolg.';
$lang['SIGNATURE_ERROR_HTML'] = 'Podpis lahko vsebuje le BBCode.';
$lang['FIELDS_EMPTY'] = 'Morate izpolniti zahtevana polja.';

$lang['WELCOME_SUBJECT'] = 'Dobrodošli v Forumih %s';

$lang['ACCOUNT_ADDED'] = 'Hvala za registracijo. Vaš račun je bil ustvarjen. Zdaj se lahko prijavite z vašim uporabniškim imenom in geslom.';
$lang['ACCOUNT_INACTIVE'] = 'Vaš račun je bil ustvarjen. Vendar ta forum zahteva aktivacijo računa. Aktivacijski ključ je bil poslan na e-poštni naslov, ki ste ga navedli. Prosimo, preverite svoj e-poštni naslov za nadaljnje informacije.';
$lang['ACCOUNT_ACTIVE'] = 'Vaš račun je ravno aktiviran. Hvala za registracijo.';
$lang['ALREADY_ACTIVATED'] = 'Ste že aktivirali svoj račun';

$lang['WRONG_ACTIVATION'] = 'Vklopni ključ, ki ste ga navedli, se ne ujema z nobenim v bazi podatkov.';
$lang['PASSWORD_UPDATED'] = 'Novo geslo je bilo ustvarjeno; prosimo, preverite svoj e-poštni naslov za podrobnosti o tem, kako aktivirati.';
$lang['NO_EMAIL_MATCH'] = 'E-poštni naslov, ki ste ga navedli, se ne ujema s tistim, ki je naveden za to uporabniško ime.';
$lang['PASSWORD_ACTIVATED'] = 'Vaš račun je bil ponovno aktiviran. Za prijavo prosimo uporabite geslo, ki ste ga prejeli v e-pošti.';

$lang['SEND_EMAIL_MSG'] = 'Pošljite e-poštno sporočilo';
$lang['NO_USER_SPECIFIED'] = 'Noben uporabnik ni bil določen.';
$lang['USER_NOT_EXIST'] = 'Ta uporabnik ne obstaja.';
$lang['EMAIL_MESSAGE_DESC'] = 'To sporočilo bo poslano kot navadno besedilo, zato ne vključujte nobenih HTML ali BBCode. Povratni naslov za to sporočilo bo nastavljen na vaš e-poštni naslov.';
$lang['RECIPIENT'] = 'Prejemnik';
$lang['EMAIL_SENT'] = 'E-pošta je bila poslana.';
$lang['SEND_EMAIL'] = 'Pošlji e-pošto';
$lang['EMPTY_SUBJECT_EMAIL'] = 'Določiti morate zadevo e-pošte.';
$lang['EMPTY_MESSAGE_EMAIL'] = 'Vpisati morate sporočilo, ki ga želite poslati po e-pošti.';

$lang['USER_AGREEMENT'] = 'Sporazum o uporabi.';
$lang['USER_AGREEMENT_HEAD'] = 'Da bi nadaljevali, se morate strinjati s spodnjimi pravili.';
$lang['USER_AGREEMENT_AGREE'] = 'Prebral sem in se strinjam z zgoraj navedenim sporazumom o uporabi.';

$lang['COPYRIGHT_HOLDERS'] = 'Za nosilce avtorskih pravic.';
$lang['ADVERT'] = 'Oglaševanje na tej strani';
$lang['NOT_FOUND'] = 'Datoteke ni mogoče najti';

// Memberslist
$lang['SORT_TOP_TEN'] = 'Deset najuspešnejših posterjev.';
$lang['SORT_JOINED'] = 'Datum pridružitve.';
$lang['SORT_USERNAME'] = 'Uporabniško ime';
$lang['SORT_LOCATION'] = 'Lokacija';
$lang['SORT_POSTS'] = 'Skupaj objav';
$lang['SORT_EMAIL'] = 'E-pošta';
$lang['SORT_WEBSITE'] = 'Spletna stran';
$lang['ASC'] = 'Naraščajoče';
$lang['DESC'] = 'Padajoče';
$lang['ORDER'] = 'Naročilo';

// Thanks
$lang['THANK_TOPIC'] = 'Glasujte za to temo';
$lang['THANKS_GRATITUDE'] = 'Cenimo vašo hvaležnost';
$lang['LAST_LIKES'] = 'Zadnji glasovi';
$lang['LIKE_OWN_POST'] = 'Ne morete glasovati za svojo temo';
$lang['NO_LIKES'] = 'Nihče še ni glasoval';
$lang['LIKE_ALREADY'] = 'Za to temo ste že glasovali';

// Invites
$lang['INVITE_CODE'] = 'Koda za povabilo';
$lang['INCORRECT_INVITE'] = 'Povabilo ni bilo najdeno';
$lang['INVITE_EXPIRED'] = 'Povabilo je poteklo';

// Group control panel
$lang['GROUP_CONTROL_PANEL'] = 'Skupine uporabnikov.';
$lang['GROUP_CONFIGURATION'] = 'Konfiguracija skupine.';
$lang['GROUP_GOTO_CONFIG'] = 'Pojdite na nadzorno ploščo skupine.';
$lang['GROUP_RETURN'] = 'Vrni se na stran skupine uporabnikov.';
$lang['MEMBERSHIP_DETAILS'] = 'Podrobnosti o članstvu v skupini.';
$lang['JOIN_A_GROUP'] = 'Pridruži se skupini.';

$lang['GROUP_INFORMATION'] = 'Podatki o skupini.';
$lang['GROUP_NAME'] = 'Ime skupine.';
$lang['GROUP_DESCRIPTION'] = 'Opis skupine.';
$lang['GROUP_SIGNATURE'] = 'Podpis skupine.';
$lang['GROUP_MEMBERSHIP'] = 'Članstvo v skupini';
$lang['GROUP_MEMBERS'] = 'Člani Skupine';
$lang['GROUP_MODERATOR'] = 'Skupina Moderator';
$lang['PENDING_MEMBERS'] = 'Predlagani člani.';

$lang['GROUP_TIME'] = 'Ustvarjeno.';
$lang['RELEASE_GROUP'] = 'Sprostitev skupine.';

$lang['GROUP_TYPE'] = 'Vrsta skupine.';
$lang['GROUP_OPEN'] = 'Odprta skupina.';
$lang['GROUP_CLOSED'] = 'Zaprta skupina.';
$lang['GROUP_HIDDEN'] = 'Skrita skupina.';

$lang['GROUP_MEMBER_MOD'] = 'Moderator skupine.';
$lang['GROUP_MEMBER_MEMBER'] = 'Trenutno članstvo.';
$lang['GROUP_MEMBER_PENDING'] = 'Članstvo je v čakanju.';
$lang['GROUP_MEMBER_OPEN'] = 'Odprte skupine.';
$lang['GROUP_MEMBER_CLOSED'] = 'Zaprte skupine.';
$lang['GROUP_MEMBER_HIDDEN'] = 'Skrite skupine.';

$lang['NO_GROUPS_EXIST'] = 'Ne obstaja nobena skupina.';
$lang['GROUP_NOT_EXIST'] = 'Ta uporabniška skupina ne obstaja.';
$lang['NO_GROUP_ID_SPECIFIED'] = 'ID skupine ni določen.';

$lang['NO_GROUP_MEMBERS'] = 'Ta skupina nima članov';
$lang['HIDDEN_GROUP_MEMBERS'] = 'Ta skupina je skrita; ne morete si ogledati njenega članstva.';
$lang['NO_PENDING_GROUP_MEMBERS'] = 'Ta skupina nima čakajočih članov.';
$lang['GROUP_JOINED'] = 'Uspešno ste zaprosili za članstvo v tej skupini.<br />Obveščeni boste, ko bo vaše članstvo odobreno s strani moderatorja skupine.';
$lang['ALREADY_MEMBER_GROUP'] = 'Ste že član te skupine';
$lang['USER_IS_MEMBER_GROUP'] = '%s je že član te skupine';
$lang['USER_IS_MOD_GROUP'] = '%s je moderator te skupine';
$lang['EFFECTIVE_DATE'] = 'Datum začetka veljavnosti.';
$lang['COULD_NOT_ADD_USER'] = 'Uporabnik, ki ste jih izbrali, ne obstaja.';
$lang['UNSUB_SUCCESS'] = 'Odjavili ste se iz te skupine.';

$lang['APPROVE_SELECTED'] = 'Odobri Izbrani';
$lang['DENY_SELECTED'] = 'Zavrni Izbrane';
$lang['REMOVE_SELECTED'] = 'Odstrani Izbrane';
$lang['ADD_MEMBER'] = 'Dodaj Člana';
$lang['NOT_GROUP_MODERATOR'] = 'Niste moderator te skupine, zato te akcije ne morete izvesti.';

$lang['LOGIN_TO_JOIN'] = 'Prijavite se, da se pridružite ali upravljate članstva v skupinah.';
$lang['THIS_OPEN_GROUP'] = 'To je odprta skupina: kliknite za zahtevo članstva.';
$lang['THIS_CLOSED_GROUP'] = 'To je zaprta skupina: več uporabnikov ni sprejetih.';
$lang['THIS_HIDDEN_GROUP'] = 'To je skrita skupina: samodejno dodajanje uporabnikov ni dovoljeno.';
$lang['MEMBER_THIS_GROUP'] = 'Ste član te skupine';
$lang['PENDING_THIS_GROUP'] = 'Vaša članstva v tej skupini je še v obravnavi.';
$lang['ARE_GROUP_MODERATOR'] = 'Ste moderator te skupine.';
$lang['NONE'] = 'Noben';

$lang['UNSUBSCRIBE_GROUP'] = 'Za odjavo.';
$lang['MEMBERS_IN_GROUP'] = 'Člani v skupini';

// Release Groups
$lang['POST_RELEASE_FROM_GROUP'] = 'Objavi iz skupine.';
$lang['CHOOSE_RELEASE_GROUP'] = 'ni izbrano';
$lang['ATTACH_RG_SIG'] = 'Priložite podpis skupine.';
$lang['RELEASE_FROM_RG'] = 'Javnost je bila pripravljena.';
$lang['GROUPS_RELEASES'] = 'Skupine za javnost.';
$lang['MORE_RELEASES'] = 'Našli vse za javnost skupine.';
$lang['NOT_A_RELEASE_GROUP'] = 'Ta skupina ni sprostitev skupine.';

// Search
$lang['SEARCH_HELP_URL'] = 'Iskanje pomoč.';
$lang['SEARCH_OPTIONS'] = 'Možnosti iskanja.';

$lang['SEARCH_WORDS'] = 'Iskanje ključnih besed.';
$lang['SEARCH_WORDS_EXPL'] = 'Lahko uporabite <b>+</b>, da določite besede, ki morajo biti v rezultatih, in <b>-</b> za besede, ki ne smejo biti v rezultatih.';
$lang['SEARCH_AUTHOR'] = 'Iskanje avtor.';
$lang['SEARCH_AUTHOR_EXPL'] = 'Uporabite * kot nadomestni znak.';

$lang['SEARCH_TITLES_ONLY'] = 'Iskanje le tematskih naslovov.';
$lang['SEARCH_ALL_WORDS'] = 'vse besede';
$lang['IN_MY_POSTS'] = 'V svojih objav';
$lang['SEARCH_MY_TOPICS'] = 'v mojih temah.';
$lang['NEW_TOPICS'] = 'Nove teme';

$lang['SEARCH_PREVIOUS'] = 'Iskanje prejšnjih';

$lang['SORT_BY'] = 'Razvrsti po';
$lang['SORT_TIME'] = 'Čas objave.';
$lang['SORT_TOPIC_TITLE'] = 'Tema naslov.';

$lang['DISPLAY_RESULTS_AS'] = 'Prikaz rezultatov';
$lang['ALL_AVAILABLE'] = 'Vse na voljo';
$lang['BRIEFLY'] = 'Na kratko';

$lang['NO_SEARCH_MATCH'] = 'Nobena tema ali objava nista ustrezala vašim iskalnim kriterijem.';
$lang['FOUND_SEARCH_MATCH'] = 'Iskanje je našlo %d ujemanje.'; // e.g. Search found 1 match
$lang['FOUND_SEARCH_MATCHES'] = 'Iskanje je našlo %d ujemanj.'; // e.g. Search found 24 matches

$lang['CLOSE_WINDOW'] = 'Zapri okno.';
$lang['HIDE'] = 'skrij';

// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
$lang['SORRY_AUTH_VIEW'] = 'Žal mi je, ampak samo %s lahko ogledate ta forum.';
$lang['SORRY_AUTH_READ'] = 'Žal mi je, ampak samo %s lahko preberete teme v tem forumu.';
$lang['SORRY_AUTH_REPLY'] = 'Žal mi je, ampak samo %s lahko odgovori na objave v tem forumu.';
$lang['SORRY_AUTH_EDIT'] = 'Žal mi je, ampak samo %s lahko uredi objave v tem forumu.';
$lang['SORRY_AUTH_DELETE'] = 'Žal mi je, ampak samo %s lahko izbrišete objave v tem forumu.';

// These replace the %s in the above strings
$lang['AUTH_ANONYMOUS_USERS'] = '<b>anonymous users</b>';
$lang['AUTH_REGISTERED_USERS'] = '<b>registered users</b>';
$lang['AUTH_USERS_GRANTED_ACCESS'] = '<b>uporabniki dodelili posebne dostop.</b>.';
$lang['AUTH_MODERATORS'] = '<b>moderators</b>';
$lang['AUTH_ADMINISTRATORS'] = '<b>administrators</b>';

$lang['NOT_MODERATOR'] = 'Niste moderator tega foruma.';
$lang['NOT_AUTHORISED'] = 'Niste pooblaščeni.';

$lang['YOU_BEEN_BANNED'] = 'Ste bili izključeni iz tega foruma. Obrnite se na skrbnike za več informacij.';

// Viewonline
$lang['ONLINE_EXPLAIN'] = 'Uporabniki aktivni zadnjih pet minut.';
$lang['LAST_UPDATED'] = 'Zadnja Posodobitev';

// Moderator Control Panel
$lang['MOD_CP'] = 'Moderator Nadzorna Plošča';
$lang['SELECT'] = 'Izberite';
$lang['DELETE'] = 'Brisanje';
$lang['MOVE'] = 'Premikanje';
$lang['LOCK'] = 'Zaklepanje';
$lang['UNLOCK'] = 'Odkleni';

$lang['TOPICS_REMOVED'] = 'Izbrane teme so bile uspešno odstranjene iz baze.';
$lang['NO_TOPICS_REMOVED'] = 'Nobena tema ni bila odstranjena.';
$lang['TOPICS_LOCKED'] = 'Izbrane teme so bile zaklenjene.';
$lang['TOPICS_MOVED'] = 'Izbrane teme so bile premaknjene.';
$lang['TOPICS_UNLOCKED'] = 'Izbrane teme so bile odklenjene.';
$lang['NO_TOPICS_MOVED'] = 'Ni teme, ki so se premaknile.';

$lang['CONFIRM_DELETE_TOPIC'] = 'Ali ste prepričani, da želite odstraniti izbrane teme?';
$lang['CONFIRM_MOVE_TOPIC'] = 'Ali ste prepričani, da želite premakniti izbrane teme?';

$lang['MOVE_TO_FORUM'] = 'Premikanje forum.';
$lang['LEAVE_SHADOW_TOPIC'] = 'Pustite senco teme v starem forumu.';

$lang['SPLIT_TOPIC_EXPLAIN'] = 'S pomočjo spodnjega obrazca lahko razdelite temo na dva dela.';
$lang['NEW_TOPIC_TITLE'] = 'Nova tema, naslov.';
$lang['FORUM_FOR_NEW_TOPIC'] = 'Forum za novo temo.';
$lang['SPLIT_POSTS'] = 'Razdelite izbrane objave.';
$lang['SPLIT_AFTER'] = 'Razdelite iz izbrane objave.';
$lang['TOPIC_SPLIT'] = 'Izbrano temo je bilo uspešno razdeljeno.';
$lang['NONE_SELECTED'] = 'Nimate izbranih za to operacijo. Prosimo, vrnite se in izberite vsaj eno.';

$lang['THIS_POSTS_IP'] = 'IP naslov za to delovno mesto';
$lang['OTHER_IP_THIS_USER'] = 'Drugih naslovov IP, s katerih je uporabnik objavil.';
$lang['USERS_THIS_IP'] = 'Uporabniki objavljajo s tega IP naslova.';
$lang['IP_INFO'] = 'IP Informacije';
$lang['LOOKUP_IP'] = 'Poglej IP naslov.';

// Timezones ... for display on each page
$lang['ALL_TIMES'] = 'Vsi časi so <span class="tz_time">%s</span>'; // This is followed by UTC and the timezone offset

// Friendly dates (used in bb_date function)
$lang['DATETIME']['TODAY'] = 'Danes';
$lang['DATETIME']['YESTERDAY'] = 'Včeraj';

// Country selector
$lang['COUNTRY'] = 'Država';
$lang['SET_OWN_COUNTRY'] = 'Nastavi svojo državo (ročno)';

// Errors
$lang['INFORMATION'] = 'Informacije';
$lang['ADMIN_REAUTHENTICATE'] = 'Za upravljanje/zmerjanje odbora se morate ponovno preveriti.';

// Attachment Mod Main Language Variables
// Auth Related Entries
$lang['RULES_ATTACH_CAN'] = 'Lahko pripnete datoteke v tem forumu.';
$lang['RULES_ATTACH_CANNOT'] = 'Ne morete pripeti datotek v tem forumu.';
$lang['RULES_DOWNLOAD_CAN'] = 'Lahko prenesete datoteke v tem forumu.';
$lang['RULES_DOWNLOAD_CANNOT'] = 'Ne morete prenesti datotek v tem forumu.';
$lang['SORRY_AUTH_VIEW_ATTACH'] = 'Žal pa nimate dovoljenja za ogled ali prenos te Priloge';

// Viewtopic -> Display of Attachments
$lang['DESCRIPTION'] = 'Opis'; // used in Administration Panel too...
$lang['DOWNLOAD'] = 'Download'; // this Language Variable is defined in admin.php too, but we are unable to access it from the main Language File
$lang['FILESIZE'] = 'Velikost datoteke';
$lang['MAX_FILE_SIZE'] = 'Največja velikost datoteke';
$lang['ALLOWED_EXTENSIONS'] = 'Dovoljene pripone';

// Viewtopic -> Display of Attachments -> TorrServer integration
$lang['STREAM'] = 'Tok';
$lang['RESOLUTION'] = 'Ločitev: <b>%s</b>';
$lang['CHANNELS'] = 'Kanali: <b>%s</b>';
$lang['CHANNELS_LAYOUT'] = 'Postavitev kanalov: <b>%s</b>';
$lang['BITRATE'] = 'Bitrate: <b>%s</b>';
$lang['SAMPLE_RATE'] = 'Vzorec stopnje: <b>%s</b>';
$lang['AUDIO_TRACK'] = 'Informacije o avdio sledi (%d):';
$lang['AUDIO_CODEC'] = 'Avdio kodek: <b title="%s">%s</b>';
$lang['VIDEO_CODEC'] = 'Video kodek: <b title="%s">%s</b>';
$lang['SHOW_MORE_INFORMATION_FILE'] = 'Pokaži več informacij o tej datoteki';
$lang['DOWNLOAD_M3U_FILE'] = 'Prenesi .m3u datoteko';
$lang['PLAYBACK_M3U'] = 'Predvajaj .m3u datoteko';
$lang['COPY_STREAM_LINK'] = 'Kopirajte povezavo do toka v odložišče.';
$lang['M3U_NOT_SUPPORTED'] = 'Te datoteke ni mogoče predvajati v brskalniku...';
$lang['M3U_FFPROBE_NO_DATA'] = 'Zdi se, da ffprobe ne bo mogel vrniti podatkov o tem kodeku...';
$lang['M3U_NOTICE'] = 'Nekateri brskalniki ne podpirajo predvajanja nekaterih video formatov. V takem primeru lahko prenesete .m3u datoteko in jo predvajate z osebnim predvajalnikom';
$lang['TORRSERVER_UNAVAILABLE'] = 'TorrServer ni na voljo';
$lang['TORRSERVER_INVALID_REQUEST'] = 'Neveljavni parametri zahteve';

$lang['ATTACHMENT'] = 'Priloge';

// Posting -> Posting Attachments
$lang['ADD_ATTACHMENT'] = 'Dodaj Prilogo';
$lang['ADD_ATTACHMENT_EXPLAIN'] = 'Če ne želite dodati priponke v svoje sporočilo, pustite polja prazna.';
$lang['UPDATE_ATTACHMENT'] = 'Posodobi prilogo';
$lang['FILENAME'] = 'Ime datoteke';

// Posting -> Posted Attachments
$lang['POSTED_ATTACHMENTS'] = 'Objavljene priloge.';
$lang['DELETE_ATTACHMENT'] = 'Izbriši prilogo.';

// Errors -> Download
$lang['NO_ATTACHMENT_SELECTED'] = 'Še niste izbrali priponke, da naložite ali si ogledate.';
$lang['ERROR_NO_ATTACHMENT'] = 'Izbrana priloga ne obstaja več.';
$lang['DOWNLOAD_LIMIT_EXCEEDED'] = 'Dosežena je dnevna omejitev prenosa. Prosimo, poskusite znova jutri.';

//bt
$lang['BT_REG_YES'] = 'Registrirani';
$lang['BT_REG_NO'] = 'Ni registriran';
$lang['BT_REG_ON_TRACKER'] = 'Registrirajte se na tracker';
$lang['BT_REG_FAIL'] = 'Ni mogoče registrirati torrenta na trackerju.';
$lang['BT_REG_FAIL_SAME_HASH'] = 'Drug torrent z enakim info_hash je že <a href=\"%s\"><b>registriran</b></a>';
$lang['BT_V1_ONLY_DISALLOWED'] = 'Torrenti, ki podpirajo samo v1, so bili trenutno onemogočeni, dovoljeni: v2 in hibridi';
$lang['BT_V2_ONLY_DISALLOWED'] = 'Torrenti, ki podpirajo samo v2, so bili trenutno onemogočeni, dovoljeni: v1 in hibridi';
$lang['BT_FLIST'] = 'Seznam datotek';
$lang['BT_FLIST_LIMIT'] = 'Nastavitve sledilnika ne dovoljujejo obdelave seznamov z več kot %d datotekami. Trenutno število je: %d';
$lang['BT_FLIST_BTMR_HASH'] = 'BTMR hash';
$lang['BT_FLIST_BTMR_NOTICE'] = 'BitTorrent Merkle Root je hashski fil s podatki, vstavljenimi v torrente s podporo BitTorrent v2, uporabniki sledilnika jih lahko izvlečejo, jih izračunajo, prav tako prenesejo deduplirane torrente z računalniškimi orodji, kot je <a href="%s" target="_blank" referrerpolicy="origin">Torrent Merkle Root Reader</a>';
$lang['BT_FLIST_CREATION_DATE'] = 'Datum ustvarjanja';
$lang['BT_IS_PRIVATE'] = 'Zasebni torrent';
$lang['BT_FLIST_FILE_PATH'] = 'Pot (%s)';
$lang['BT_FLIST_LINK_TITLE'] = 'Hash datoteke | .torrent meta-informacije';
$lang['BT_UNREG_FROM_TRACKER'] = 'Odstranite iz trackerja.';
$lang['BT_UNREGISTERED'] = 'Torrent ni registriran.';
$lang['BT_UNREGISTERED_ALREADY'] = 'Torrent je že odjavljen';
$lang['BT_REGISTERED'] = 'Torrent, ki je registrirana na trackerju<br /><br />Zdaj morate <a href="%s"><b>prenesti torrent</b></a> in ga zagnati z uporabo vaše odjemalec BitTorrent, izberite mapo z izvirnimi datotekami, ki jih delite kot pot prenosa.';
$lang['INVALID_ANN_URL'] = 'Neveljavna sporočila URL [%s]<br /><br />morate biti <b>%s</b>.';
$lang['PASSKEY_ERR_TOR_NOT_REG'] = 'Ni mogoče dodati ključa<br /><br />Torrent ni registriran na trackerju.';
$lang['BT_PASSKEY'] = 'Geslo.';
$lang['BT_GEN_PASSKEY'] = 'Ustvarite novo.';
$lang['BT_PASSKEY_VIEW'] = 'Prikaži.';
$lang['BT_GEN_PASSKEY_NEW'] = "Pozor! Po spremembi vašega ključa, boste morali znova prenesti vse aktivne torrente! \n Ali ste prepričani, da želite ustvariti nov ključ?";
$lang['BT_NO_SEARCHABLE_FORUMS'] = 'Ne iskati forumih našel.';

$lang['SEEDS'] = 'Seme.';
$lang['LEECHS'] = 'Leech.';
$lang['SPEED_UP'] = 'Hitro gor.';
$lang['SPEED_DOWN'] = 'Hitro dol.';

$lang['SEEDERS'] = 'Sejanje.';
$lang['LEECHERS'] = 'Leechers.';
$lang['RELEASING'] = 'Self.';
$lang['SEEDING'] = 'Seme.';
$lang['LEECHING'] = 'Leech.';
$lang['IS_REGISTERED'] = 'Registrirani.';
$lang['MAGNET'] = 'Magnetna povezava';
$lang['MAGNET_FOR_GUESTS'] = 'Pokaži magnetno povezavo za goste';
$lang['MAGNET_v2'] = 'Magnetna povezava (podpora za BitTorrent v2)';

//torrent status mod
$lang['TOR_STATUS'] = 'Stanje';
$lang['TOR_STATUS_SELECT_ACTION'] = 'Izberite stanje';
$lang['TOR_STATUS_NOT_SELECT'] = 'Niste izbrali statusa.';
$lang['TOR_STATUS_SELECT_ALL'] = 'Vsa stanja';
$lang['TOR_STATUS_FORBIDDEN'] = 'Status te teme je: ';
$lang['TOR_STATUS_NAME'] = [
    TOR_NOT_APPROVED => 'nepreverjeno',
    TOR_CLOSED => 'zaprto',
    TOR_APPROVED => 'preveri',
    TOR_NEED_EDIT => 'potrebuje urejanje',
    TOR_NO_DESC => 'nepopolno',
    TOR_DUP => 'podvojite',
    TOR_CLOSED_CPHOLD => 'zaprta (avtorsko pravo)',
    TOR_CONSUMED => 'absorbirano',
    TOR_DOUBTFUL => 'dvomljivo',
    TOR_CHECKING => 'se preverja',
    TOR_TMP => 'začasno',
    TOR_PREMOD => 'pre-moderacija',
    TOR_REPLENISH => 'dopolnjuje',
];
$lang['TOR_STATUS_FAILED'] = 'Ta status ne obstaja!';
$lang['TORRENT_FAILED'] = 'Distribucija ni bila najdena!';
$lang['TOR_STATUS_DUB'] = 'Distribucija ima isto stanje';
$lang['TOR_DONT_CHANGE'] = 'Sprememba statusa ni mogoča!';
$lang['TOR_STATUS_OF'] = 'Distribucija ima status:';
$lang['TOR_STATUS_CHANGED'] = 'Stanje spremenjeno:';
$lang['TOR_BACK'] = 'nazaj';
$lang['PROCEED'] = 'Nadaljuj';
$lang['CHANGE_TOR_TYPE'] = 'Tip torrenta je bil uspešno spremenjen';
$lang['DEL_TORRENT'] = 'Ali ste prepričani, da želite izbrisati torrent?';
$lang['DEL_MOVE_TORRENT'] = 'Ali ste prepričani, da želite izbrisati in premakniti temo?';
$lang['UNEXECUTED_RELEASE'] = 'Imate nedokončano izdajo. Preden ustvarite novo, jo dokončajte!';
$lang['TOR_STATUS_LOG_ACTION'] = 'Nov status: %s.<br/>Prejšnji status: %s.';

// tor_comment
$lang['TOR_MOD_TITLE'] = 'Status distribucije spremenjen – %s';
$lang['TOR_MOD_MSG'] = "Pozdravljeni, %s.\n\nStatus [url=%s]vaše[/url] distribucije je bil spremenjen na [b]%s[/b]";

$lang['TOR_AUTH_TITLE'] = 'Zahtevane spremembe oblikovanja – %s';
$lang['TOR_AUTH_MSG'] = "Pozdravljen, %s.\n\nVaša distribucija je bila spremenjena - [url=%s]%s[/url]\n\nProsimo, ponovno preverite.";
$lang['TOR_AUTH_FIXED'] = 'Fiksno';
$lang['TOR_AUTH_SENT_COMMENT'] = ' &middot; <span class=\"seed bold\">Informacije so bile poslane moderatorju. Prosimo, počakajte na odgovor.</span>';

$lang['BT_TOPIC_TITLE'] = 'Naslov teme';
$lang['BT_SEEDER_LAST_SEEN'] = 'Semenj nazadnje videli';
$lang['SIZE'] = 'Velikost';
$lang['COMPLETED'] = 'Dokončana prenosa';
$lang['ADDED'] = 'Dodano';
$lang['DELETE_TORRENT'] = 'Izbrisati torrent';
$lang['DELETE_MOVE_TORRENT'] = 'Izbriši in premakni temo';
$lang['DL_TORRENT'] = 'Prenesi .torrent';
$lang['BT_LAST_POST'] = 'Zadnja objava';
$lang['BT_CREATED'] = 'Tema je objavil';
$lang['BT_REPLIES'] = 'Odgovori';
$lang['BT_VIEWS'] = 'Ogledov';

// Gold/Silver releases
$lang['GOLD'] = 'Zlato';
$lang['SILVER'] = 'Srebrn';
$lang['SET_GOLD_TORRENT'] = 'Označi kot zlato';
$lang['UNSET_GOLD_TORRENT'] = 'Odstrani zlati status';
$lang['SET_SILVER_TORRENT'] = 'Da srebro';
$lang['UNSET_SILVER_TORRENT'] = 'Odstrani srebrni status';
$lang['GOLD_STATUS'] = 'ZLATI TORRENT! PRENOSNI PROMET SE NE ŠTEJE!';
$lang['SILVER_STATUS'] = 'SREBRNI TORRENT! PRENOSNI PROMET SE DELNO ŠTEJE!';
$lang['TOR_TYPE_LOG_ACTION'] = 'Vrsta torrenta je spremenjena v: %s';

$lang['TORRENT_STATUS'] = 'Iskanje po statusu izdaje';
$lang['SEARCH_IN_FORUMS'] = 'Iskanje po forumih';
$lang['SELECT_CAT'] = 'Izberite kategorijo';
$lang['GO_TO_SECTION'] = 'Pojdi na oddelek';
$lang['TORRENTS_FROM'] = 'Objave iz';
$lang['SHOW_ONLY'] = 'Pokaži samo';
$lang['SHOW_COLUMN'] = 'Pokaži stolpec';
$lang['SEL_CHAPTERS'] = 'Povezava do izbranih razdelkov';
$lang['NOT_SEL_CHAPTERS'] = 'Niste izbrali nobenih tem';
$lang['SEL_CHAPTERS_HELP'] = 'Lahko izberete največ %s razdelkov';
$lang['HIDE_CONTENTS'] = 'Skrij vsebino {...}';
$lang['FILTER_BY_NAME'] = '<i>Filter po imenu </i>';

$lang['BT_ONLY_ACTIVE'] = 'Aktivno';
$lang['BT_ONLY_MY'] = 'Moje objave';
$lang['BT_SEED_EXIST'] = 'Seeder obstaja';
$lang['BT_ONLY_NEW'] = 'Novo od zadnjega obiska';
$lang['BT_SHOW_CAT'] = 'Kategorija';
$lang['BT_SHOW_FORUM'] = 'Forum';
$lang['BT_SHOW_AUTHOR'] = 'Avtor';
$lang['BT_SHOW_SPEED'] = 'Hitrost';
$lang['SEED_NOT_SEEN'] = 'Seeder ni viden';
$lang['TITLE_MATCH'] = 'Naslov ujema';
$lang['BT_USER_NOT_FOUND'] = 'ni najdeno';
$lang['DL_SPEED'] = 'Skupna hitrost prenosa';

$lang['BT_DISREGARD'] = 'neupoštevajoče';
$lang['BT_NEVER'] = 'nikoli';
$lang['BT_ALL_DAYS_FOR'] = 'ves čas';
$lang['BT_1_DAY_FOR'] = 'zadnji dan';
$lang['BT_3_DAY_FOR'] = 'zadnje tri dni';
$lang['BT_7_DAYS_FOR'] = 'prejšnji teden';
$lang['BT_2_WEEKS_FOR'] = 'zadnja dva tedna';
$lang['BT_1_MONTH_FOR'] = 'v prejšnjem mesecu';
$lang['BT_1_DAY'] = '1 dan';
$lang['BT_3_DAYS'] = '3 dni';
$lang['BT_7_DAYS'] = 'teden';
$lang['BT_2_WEEKS'] = '2 tedna';
$lang['BT_1_MONTH'] = 'mesec';

$lang['DL_LIST_AND_TORRENT_ACTIVITY'] = 'DL-seznam in aktivnost torrenta';
$lang['DLWILL'] = 'Se bo preneslo';
$lang['DLDOWN'] = 'Nalaganje';
$lang['DLCOMPLETE'] = 'Dokončano';
$lang['DLCANCEL'] = 'Prekliči';

$lang['DL_LIST_DEL'] = 'Ponovno jasno, DL-seznam';
$lang['DL_LIST_DEL_CONFIRM'] = 'Izbriši DL-seznam za to temo?';
$lang['SHOW_DL_LIST'] = 'Prikaži DL-seznam';
$lang['SET_DL_STATUS'] = 'Download';
$lang['UNSET_DL_STATUS'] = 'Prenos ni v teku';
$lang['TOPICS_DOWN_SETS'] = 'Tema stanje spremenila na <b>prenesi</b>';
$lang['TOPICS_DOWN_UNSETS'] = '<b>prenesi</b> stanje odstranjeno';

$lang['TOPIC_DL'] = 'DL';

$lang['MY_DOWNLOADS'] = 'Moji prenosi';
$lang['SEARCH_DL_WILL'] = 'Načrtovano';
$lang['SEARCH_DL_WILL_DOWNLOADS'] = 'Načrtovana nalaganja';
$lang['SEARCH_DL_DOWN'] = 'Trenutno';
$lang['SEARCH_DL_COMPLETE'] = 'Zaključeno';
$lang['SEARCH_DL_COMPLETE_DOWNLOADS'] = 'Dokončani prenosi';
$lang['SEARCH_DL_CANCEL'] = 'Odpovedano';
$lang['CUR_UPLOADS'] = 'Trenutno nalaganje';
$lang['SEARCH_RELEASES'] = 'Izdaja';
$lang['TOR_SEARCH_TITLE'] = 'Možnosti iskanja torrentov';
$lang['OPEN_TOPIC'] = 'Odprite temo';

$lang['REG_NOT_ALLOWED_IN_THIS_FORUM'] = 'Ni možno registrirati torrenta v tem forumu.';
$lang['ALREADY_REG'] = 'Torrent že registriran.';
$lang['NOT_TORRENT'] = 'Ta datoteka ni torrent';
$lang['VIEWING_USER_BT_PROFILE'] = 'Profil torrenta';
$lang['CUR_ACTIVE_DLS'] = 'Aktivni torrenti.';

$lang['TD_TRAF'] = 'Danes';
$lang['YS_TRAF'] = 'Včeraj';
$lang['TOTAL_TRAF'] = 'Skupaj';

$lang['USER_RATIO'] = 'Razmerje';
$lang['MAX_SPEED'] = 'Hitrost';
$lang['DOWNLOADED'] = 'Prenesli';
$lang['UPLOADED'] = 'Dodal';
$lang['RELEASED'] = 'Objavljeno.';
$lang['BONUS'] = 'Bonus';
$lang['IT_WILL_BE_DOWN'] = 'bo priznan, ko bo prenesen';
$lang['SPMODE_FULL'] = 'Prikaži vrstnike s podrobnostmi.';

// Seed Bonus
$lang['MY_BONUS'] = 'Moj bonus (%s točk na voljo)';
$lang['BONUS_SELECT'] = 'Izberite';
$lang['SEED_BONUS'] = 'Bonus za seme.';
$lang['EXCHANGE'] = 'Izmenjava';
$lang['EXCHANGE_BONUS'] = 'Zamenjava bonus točk';
$lang['BONUS_UPLOAD_DESC'] = '<b>+%s kredit za nalaganje</b> <br /> Zamenjajte bonus točke za %1$s prometa za nalaganje, ki bodo dodane vašemu skupnemu računu.';
$lang['BONUS_UPLOAD_PRICE'] = '<b class="%s">%s</b>';
$lang['PRICE'] = 'Cena';
$lang['EXCHANGE_NOT'] = 'Zamenjava ni na voljo';
$lang['BONUS_SUCCES'] = 'Na vaš račun je bilo uspešno pripisano %s';
$lang['BONUS_NOT_SUCCES'] = '<span class="leech">Nimate razpoložljivih bonusov. Več sejanja!</span>.';
$lang['BONUS_RETURN'] = 'Vrnitev na izmenjavo bonusov za seme.';

$lang['TRACKER'] = 'Sledilec.';
$lang['RANDOM_RELEASE'] = 'Naključna objava';
$lang['OPEN_TOPICS'] = 'Odprta tema.';
$lang['OPEN_IN_SAME_WINDOW'] = 'Odpri v istem oknu.';
$lang['SHOW_TIME_TOPICS'] = 'prikaži čas ustvarjanja teme';
$lang['SHOW_CURSOR'] = 'Označite vrstico pod kazalko.';

$lang['BT_LOW_RATIO_FOR_DL'] = 'Vaše razmerje <b>%s</b> je prenizko za prenos torrentov';
$lang['BT_RATIO_WARNING_MSG'] = 'Če vaše razmerje pade pod %s, ne boste mogli prenašati torrentov! <a href=\"%s\"><b>Več o razmerju.</b></a>';

$lang['SEEDER_LAST_SEEN'] = 'Seeder ni bil viden: <b>%s</b>.';

$lang['NEED_TO_LOGIN_FIRST'] = 'Prijaviti se morate najprej';
$lang['ONLY_FOR_MOD'] = 'Ta možnost je namenjena samo moderatorjem';
$lang['ONLY_FOR_ADMIN'] = 'Ta možnost je namenjena samo skrbnikom';
$lang['ONLY_FOR_SUPER_ADMIN'] = 'Ta možnost je namenjena samo super skrbnikom';

$lang['LOGS'] = 'Zgodovina teme.';
$lang['FORUM_LOGS'] = 'Zgodovina foruma';
$lang['AUTOCLEAN'] = 'Autoclean';
$lang['DESIGNER'] = 'Oblikovalec.';

$lang['LAST_IP'] = 'Zadnji IP:';
$lang['REG_IP'] = 'IP za registracijo:.';
$lang['OTHER_IP'] = 'Druge IP.';
$lang['ALREADY_REG_IP'] = 'Uporabnik %s je že registriran z vašim IP naslovom. Če se prej niste registrirali na naši sledilnik, pošljite e-pošto <a href="mailto:%s">Administratorju</a>';
$lang['HIDDEN'] = 'Skrito.';

// from admin
$lang['NOT_ADMIN'] = 'Niste pooblaščeni za vodenje tega odbora';

$lang['SESSION_EXPIRED'] = 'Seja je potekla.';

// Sort memberlist per letter
$lang['POST_LINK'] = 'Objavite povezavo.';
$lang['GOTO_QUOTED_POST'] = 'Pojdi na citirani prispevek.';
$lang['LAST_VISITED'] = 'Nazadnje obiskano.';
$lang['LAST_ACTIVITY'] = 'Zadnja aktivnost.';
$lang['NEVER'] = 'Nikoli';

//mpd
$lang['DELETE_POSTS'] = 'Izbriši izbrane objave';
$lang['DELETE_POSTS_SUCCESFULLY'] = 'Izbrane objave so bile uspešno odstranjene.';
$lang['NO_POSTS_REMOVED'] = 'Ni bilo odstranjenih objav.';

//ts
$lang['TOPICS_ANNOUNCEMENT'] = 'Objave.';
$lang['TOPICS_STICKY'] = 'Sticky.';
$lang['TOPICS_NORMAL'] = 'Teme';

//dpc
$lang['DOUBLE_POST_ERROR'] = 'Ne morete objaviti druge objave z enakim besedilom kot vaše zadnje.';

//upt
$lang['UPDATE_POST_TIME'] = 'Posodobi čas objave.';

$lang['TOPIC_SPLIT_NEW'] = 'Novo temo';
$lang['TOPIC_SPLIT_OLD'] = 'Staro temo';
$lang['BOT_LEAVE_MSG_MOVED'] = 'Dodajte bot-sporočilo o premiku.';
$lang['BOT_REASON_MOVED'] = 'Razlog za premik';
$lang['BOT_AFTER_SPLIT_TO_OLD'] = 'Dodajte bot-sporočilo o delitvi za <b>staro temo</b>.';
$lang['BOT_AFTER_SPLIT_TO_NEW'] = 'Dodajte bot-sporočilo o delitvi za <b>novo temo</b>.';
//qr
$lang['QUICK_REPLY'] = 'Hitri odgovor.';
$lang['INS_NAME_TIP'] = 'Vstavite ime ali izbrano besedilo.';
$lang['QUOTE_SELECTED'] = 'Citat izbranega.';
$lang['QR_NOTIFY'] = 'Obvestite o odgovoru.';
$lang['QR_USERNAME'] = 'Ime.';
$lang['QR_FONT_SEL'] = 'Pisava.';
$lang['QR_COLOR_SEL'] = 'Barva pisave.';
$lang['QR_SIZE_SEL'] = 'Velikost pisave.';
$lang['COLOR_STEEL_BLUE'] = 'Jekleno modra.';
$lang['COLOR_GRAY'] = 'Siva.';
$lang['COLOR_DARK_GREEN'] = 'Temno zelena.';

// Short buttons
$lang['IP'] = 'IP';
$lang['POLL'] = 'Anketa';
$lang['MODERATE'] = 'Moderiranje';
$lang['SEND_PM_SHORT'] = 'PM';
$lang['WEBSITE_SHORT'] = 'WWW';

$lang['DECLENSION']['REPLIES'] = ['odgovori', 'odgovori'];
$lang['DECLENSION']['TIMES'] = ['čas', 'krat'];
$lang['DECLENSION']['FILES'] = ['datoteka', 'datoteke'];

$lang['AUTH_TYPES'][AUTH_ALL] = $lang['AUTH_ANONYMOUS_USERS'];
$lang['AUTH_TYPES'][AUTH_REG] = $lang['AUTH_REGISTERED_USERS'];
$lang['AUTH_TYPES'][AUTH_ACL] = $lang['AUTH_USERS_GRANTED_ACCESS'];
$lang['AUTH_TYPES'][AUTH_MOD] = $lang['AUTH_MODERATORS'];
$lang['AUTH_TYPES'][AUTH_ADMIN] = $lang['AUTH_ADMINISTRATORS'];

$lang['NEW_USER_REG_DISABLED'] = 'Žal, registracija je onemogočena v tem trenutku.';
$lang['ONLY_NEW_POSTS'] = 'samo nova objava.';
$lang['ONLY_NEW_TOPICS'] = 'samo nove teme.';

$lang['TORHELP_TITLE'] = 'Prosim, pomagajte sejati te hudournike!';
$lang['STATISTICS'] = 'Statistika.';
$lang['STATUS'] = 'Status.';
$lang['ACTION'] = 'Akcija.';
$lang['REASON'] = 'Razlog.';
$lang['COMMENT'] = 'Opombe.';

// search
$lang['SEARCH_S'] = 'iskanje...';
$lang['FORUM_S'] = 'na forumu';
$lang['TRACKER_S'] = 'na sledilniku';
$lang['HASH_S'] = 'za info_hash';

// copyright
$lang['NOTICE'] = '!POZOR!';
$lang['COPY'] = 'Spletna stran ne zagotavlja elektronskih različic izdelkov in se ukvarja le s zbiranjem in katalogiziranjem sklicev, ki jih pošiljajo in objavljajo naši bralci na forumu. Če ste zakoniti lastnik katerega koli predloženega materiala in ne želite, da bi bilo to sklicevanje v našem katalogu, nas kontaktirajte in ga bomo takoj odstranili. Datoteke za izmenjavo na sledilniku zagotavljajo uporabniki spletnega mesta, uprava pa ne prevzema odgovornosti za njihovo vsebino. Prosimo, ne nalagajte datotek, zaščitenih z avtorskimi pravicami, ali datotek z nezakonitimi vsebinami!';

// FILELIST
$lang['COLLAPSE'] = 'Skrči imenik.';
$lang['EXPAND'] = 'Razširiti.';
$lang['SWITCH'] = 'Stikalo.';
$lang['TOGGLE_WINDOW_FULL_SIZE'] = 'Povečajte/ zmanjšajte okno';
$lang['EMPTY_TOPIC_ID'] = 'Manjka identifikator teme';
$lang['TOR_NOT_FOUND'] = 'Datoteka manjka na strežniku';
$lang['ERROR_BUILD'] = 'Vsebine tega torrenta ni mogoče prikazati (napaka pri sestavljanju seznama datotek)';
$lang['TORFILE_INVALID'] = 'Torrent datoteka je pokvarjena.';

// Profile
$lang['WEBSITE_ERROR'] = '"Spletna stran" lahko vsebuje samo http://sitename.';
$lang['PROFILE_USER'] = 'Ogled profila.';
$lang['GOOD_UPDATE'] = 'uspešno posodobljeno';
$lang['UCP_DOWNLOADS'] = 'Prenosi.';
$lang['HIDE_DOWNLOADS'] = 'Skrij trenutni seznam prenosov na svoj profil';
$lang['BAN_USER'] = 'Omejitve uporabnika';
$lang['USER_NOT_ALLOWED'] = 'Uporabniki ne smejo';
$lang['HIDE_AVATARS'] = 'Prikaži avatarje';
$lang['SHOW_CAPTION'] = 'Pokaži vaš podpis';
$lang['DOWNLOAD_TORRENT'] = 'Prenesi torrent';
$lang['SEND_PM'] = 'Pošlji osebno sporočilo';
$lang['SEND_MESSAGE'] = 'Pošlji sporočilo';
$lang['NEW_THREADS'] = 'Novi navoji';
$lang['PROFILE_NOT_FOUND'] = 'Profila ni mogoče najti';

$lang['USER_DELETE_EXPLAIN'] = 'Izbriši tega uporabnika';
$lang['USER_DELETE_ME'] = 'Žal vašega računa ni mogoče izbrisati!';
$lang['USER_DELETE_CSV'] = 'Žal tega računa ni mogoče izbrisati!';
$lang['USER_DELETE_CONFIRM'] = 'Ali ste prepričani, da želite izbrisati tega uporabnika?';
$lang['USER_DELETED'] = 'Uporabnik je bil uspešno izbrisan';
$lang['DELETE_USER_ALL_POSTS'] = 'Izbriši vse objave uporabnika';
$lang['DELETE_USER_ALL_POSTS_CONFIRM'] = 'Ali želite izbrisati vse objave in teme, ki jih je začel ta uporabnik?';
$lang['DELETE_USER_POSTS'] = 'Izbriši vse objave, razen prve v vsaki temi';
$lang['DELETE_USER_POSTS_ME'] = 'Ali ste prepričani, da želite izbrisati vse moje prispevke?';
$lang['DELETE_USER_POSTS_CONFIRM'] = 'Ali ste prepričani, da želite izbrisati vse objave, razen prve v vsaki temi?';
$lang['USER_DELETED_POSTS'] = 'Objave so bile uspešno odstranjene.';

$lang['USER'] = 'Uporabnik';
$lang['ROLE'] = 'Vloge:';
$lang['MEMBERSHIP_IN'] = 'Članstvo v';
$lang['PARTY'] = 'Stranka:';
$lang['CANDIDATE'] = 'Kandidat:';
$lang['INDIVIDUAL'] = 'Ima individualne pravice';
$lang['GROUP_LIST_HIDDEN'] = 'Nimate dovoljenja za ogled skritih skupin';

$lang['USER_ACTIVATE'] = 'Vključi';
$lang['USER_DEACTIVATE'] = 'Deaktiviraj';
$lang['DEACTIVATE_CONFIRM'] = 'Ali ste prepričani, da želite dezaktivirati tega uporabnika?';
$lang['USER_ACTIVATE_ON'] = 'Uporabnik je bil uspešno aktiviran';
$lang['USER_DEACTIVATE_ME'] = 'Ne morete deaktivirati lastnega računa!';
$lang['ACTIVATE_CONFIRM'] = 'Ali ste prepričani, da želite aktivirati tega uporabnika?';
$lang['USER_ACTIVATE_OFF'] = 'Uporabnik je bil uspešno izključen';

// Register
$lang['CHOOSE_A_NAME'] = 'Prosimo, izberite uporabniško ime';
$lang['CHOOSE_E_MAIL'] = 'Morate vnesti elektronski naslov';
$lang['CHOOSE_PASS'] = 'Polje za geslo ne sme biti prazno!';
$lang['CHOOSE_PASS_ERR'] = 'Vnesena gesla se ne ujemata';
$lang['CHOOSE_PASS_ERR_MIN'] = 'Geslo mora biti vsaj %d znakov';
$lang['CHOOSE_PASS_ERR_MAX'] = 'Vaše geslo ne sme biti daljše od %d znakov';
$lang['CHOOSE_PASS_ERR_NUM'] = 'Geslo mora vsebovati vsaj eno število';
$lang['CHOOSE_PASS_ERR_LETTER'] = 'Geslo mora vsebovati vsaj eno črko latinske abecede';
$lang['CHOOSE_PASS_ERR_LETTER_UPPERCASE'] = 'Geslo mora vsebovati vsaj eno veliko črko latinske abecede';
$lang['CHOOSE_PASS_ERR_SPEC_SYMBOL'] = 'Geslo mora vsebovati vsaj en poseben znak';
$lang['CHOOSE_PASS_OK'] = 'Gesla se ujemata.';
$lang['CHOOSE_PASS_REG_OK'] = 'Gesla se ujemata, lahko nadaljujete z registracijo.';
$lang['CHOOSE_PASS_FAILED'] = 'Da spremenite geslo, morate pravilno navesti trenutno geslo.';
$lang['EMAILER_DISABLED'] = 'Žal, ta funkcija trenutno ni na voljo';
$lang['REGISTERED_IN_TIME'] = 'Registracija je trenutno zaprta<br /><br />Registracija je mogoča med: %s<br />Trenutni čas na strežniku: %s<br /><br />Opravičujemo se za nevšečnosti';
$lang['AUTOCOMPLETE'] = 'Ustvari geslo';
$lang['YOUR_NEW_PASSWORD'] = 'So vaše novo geslo:';
$lang['REGENERATE'] = 'Regeneracija';

// Debug
$lang['EXECUTION_TIME'] = 'Čas izvajanja:';
$lang['SEC'] = 'sek.';
$lang['ON'] = 'izklop';
$lang['OFF'] = 'izklop';
$lang['MEMORY'] = 'Spomin: ';
$lang['QUERIES'] = 'poizvedbe.';
$lang['SHOW_LOG'] = 'Prikaži dnevnik';
$lang['EXPLAINED_LOG'] = 'Razložen dnevnik';
$lang['CUT_LOG'] = 'Izrežite dolge poizvedbe';

// Attach Guest
$lang['DOWNLOAD_INFO'] = 'Prenesite brezplačne in pri maksimalni hitrosti!';
$lang['HOW_TO_DOWNLOAD'] = 'Kako prenesti?';
$lang['WHAT_IS_A_TORRENT'] = 'Kaj je torrent?';
$lang['RATINGS_AND_LIMITATIONS'] = 'Ocene in Omejitve';

$lang['SCREENSHOTS_RULES'] = 'Preberite pravila za objavo posnetkov zaslona!';
$lang['AJAX_EDIT_OPEN'] = 'Že imate odprto sejo hitrega urejanja!';
$lang['GO_TO_PAGE'] = 'Pojdi na stran ...';
$lang['EDIT'] = 'Uredi';
$lang['SAVE'] = 'Shrani.';
$lang['NEW_WINDOW'] = 'v novem oknu';

// BB Code
$lang['ALIGN'] = 'Poravnajte:';
$lang['LEFT'] = 'Levo';
$lang['RIGHT'] = 'Desno';
$lang['CENTER'] = 'Centrirano';
$lang['JUSTIFY'] = 'Prilagodi širino';
$lang['HOR_LINE'] = 'Vodoravna črta (Ctrl+8)';
$lang['NEW_LINE'] = 'Nova linija';
$lang['BOLD'] = 'Krepko besedilo: [b]text[/b] (Ctrl+B)';
$lang['ITALIC'] = 'Ležeče besedilo: [i]text[/i] (Ctrl+I)';
$lang['UNDERLINE'] = 'Podčrtano besedilo: [u]text[/u] (Ctrl+U)';
$lang['STRIKEOUT'] = 'Prečrtano besedilo: [s]text[/s] (Ctrl+S)';
$lang['BOX_TAG'] = 'Okvir okoli besedila: [box]besedilo[/box] ali [box=#333,#888]besedilo[/box]';
$lang['INDENT_TAG'] = 'Vstavite zamik: [indent]besedilo[/indent]';
$lang['PRE_TAG'] = 'Predformatirano besedilo: [pre]besedilo[/pre]';
$lang['NFO_TAG'] = 'NFO: [nfo]besedilo[/nfo]';
$lang['SUPERSCRIPT'] = 'Besedilo nad napisom: [sup]besedilo[/sup]';
$lang['SUBSCRIPT'] = 'Besedilo pod napisom: [sub]besedilo[/sub]';
$lang['QUOTE_TITLE'] = 'Besedilo citata: [quote]besedilo[/quote] (Ctrl+Q)';
$lang['IMG_TITLE'] = 'Vstavi sliko: [img]https://image_url[/img] (Ctrl+R)';
$lang['URL'] = 'URL';
$lang['URL_TITLE'] = 'Vstavi URL: [url]https://url[/url] ali [url=https://url]URL besedilo[/url] (Ctrl+W)';
$lang['CODE_TITLE'] = 'Prikaz kode: [code]koda[/code] (Ctrl+K)';
$lang['LIST'] = 'Seznam';
$lang['LIST_TITLE'] = 'Seznam: [list]text[/list] (Ctrl+l)';
$lang['LIST_ITEM'] = 'Urejen seznam: [list=]text[/list] (Ctrl+O)';
$lang['ACRONYM'] = 'Akronim';
$lang['ACRONYM_TITLE'] = 'Akronim: [akronim=Poln tekst]Kratko besedilo[/akronim]';
$lang['QUOTE_SEL'] = 'Izbrana ponudba';
$lang['JAVASCRIPT_ON'] = 'JavaScript mora biti omogočen za pošiljanje sporočil';

$lang['NEW'] = 'Nova';
$lang['NEWEST'] = 'Najnovejše';
$lang['LATEST'] = 'Najnovejše';
$lang['POST'] = 'Post';
$lang['OLD'] = 'Stari';

// DL-List
$lang['DL_USER'] = 'Uporabniško ime';
$lang['DL_PERCENT'] = 'Odstotek dokončanja %';
$lang['DL_UL'] = 'UL';
$lang['DL_DL'] = 'DL';
$lang['DL_UL_SPEED'] = 'UL hitrost';
$lang['DL_DL_SPEED'] = 'DL hitrost';
$lang['DL_PORT'] = 'Vrata';
$lang['DL_CLIENT'] = 'BitTorrent odjemalec';
$lang['DL_FORMULA'] = 'Formula: Naloženo/TorrentSize';
$lang['DL_ULR'] = 'ULR';
$lang['DL_STOPPED'] = 'ustavi';
$lang['DL_UPD'] = 'posodobitev časa: ';
$lang['DL_INFO'] = 'Prikaz podatkov <i><b>le za trenutno sejo</b></i>';
$lang['HIDE_PEER_TORRENT_CLIENT'] = 'Skrijte ime svojega BitTorrent odjemalca v seznamu peers';
$lang['HIDE_PEER_COUNTRY_NAME'] = 'Skrijte ime svoje države v seznamu peers';
$lang['HIDE_PEER_USERNAME'] = 'Skrijte svoje uporabniško ime v seznamu peers';

// Post PIN
$lang['POST_PIN'] = 'Pripni prvo objavo';
$lang['POST_UNPIN'] = 'Odpni prvo objavo';
$lang['POST_PINNED'] = 'Prva objava pripeta';
$lang['POST_UNPINNED'] = 'Prva objava ni več pripeta';

// Management of my messages
$lang['GOTO_MY_MESSAGE'] = 'Zaprite in se vrnite na seznam "Moja sporočila"';
$lang['DEL_MY_MESSAGE'] = 'Izbrane teme so bile odstranjene iz "Mojih sporočilih"';
$lang['NO_TOPICS_MY_MESSAGE'] = 'Ni najdenih tem na seznamu vaših objav (morda ste jih že odstranili)';
$lang['EDIT_MY_MESSAGE_LIST'] = 'Urejanje seznama';
$lang['SELECT_INVERT'] = 'Izberite / obrnite';
$lang['RESTORE_ALL_POSTS'] = 'Obnovitev vseh objav';
$lang['DEL_LIST_MY_MESSAGE'] = 'Izbriši izbrano temo s seznama';
$lang['DEL_LIST_MY_MESSAGE_INFO'] = 'Po odstranitvi se bo <b>celoten seznam</b> morda še vedno prikazoval z prej izbrisanimi nitmi, dokler ne bo osvežen';
$lang['DEL_LIST_INFO'] = 'Za odstranitev vnosa s seznama kliknite ikono levo od imena kateregakoli razdelka';

// Watched topics
$lang['WATCHED_TOPICS'] = 'Gledani teme';
$lang['NO_WATCHED_TOPICS'] = 'Nimate spremljanih tem';

// set_die_append_msg
$lang['INDEX_RETURN'] = 'Nazaj na domačo stran';
$lang['FORUM_RETURN'] = 'Nazaj na forum';
$lang['TOPIC_RETURN'] = 'Nazaj na temo';
$lang['POST_RETURN'] = 'Pojdi na post';
$lang['PROFILE_EDIT_RETURN'] = 'Vrnitev za urejanje';
$lang['PROFILE_RETURN'] = 'Pojdite na profil';

$lang['INDEXER'] = 'Reindex iskanje';
$lang['INDEXER_SUCCESS'] = 'Iskalni indeks je bil uspešno posodobljen';

$lang['FORUM_STYLE'] = 'Forum slog';

$lang['LINKS_ARE_FORBIDDEN'] = 'Povezave so prepovedani';

$lang['GENERAL'] = 'Splošno Admin';
$lang['USERS'] = 'Uporabnik Admin';
$lang['GROUPS'] = 'Skupina Admin';
$lang['FORUMS'] = 'Forum Admin';
$lang['MODS'] = 'Spremembe';

$lang['CONFIGURATION'] = 'Konfiguracija';
$lang['MANAGE'] = 'Upravljanja';
$lang['DISALLOW'] = 'Prepoved imena';
$lang['PRUNE'] = 'Obrezovanje';
$lang['MASS_EMAIL'] = 'Množično e-poštno sporočilo';
$lang['RANKS'] = 'Razvrstitve';
$lang['SMILIES'] = 'Smeški';
$lang['BAN_MANAGEMENT'] = 'Nadzor prepovedi';
$lang['WORD_CENSOR'] = 'Cenzura besed';
$lang['CRON'] = 'Razporejevalnik opravil (cron)';
$lang['REBUILD_SEARCH_INDEX'] = 'Obnovite iskalni indeks';
$lang['FORUM_CONFIG'] = 'Forum nastavitve';
$lang['ACTIONS_LOG'] = 'Dnevnik dejanj';

// Migrations
$lang['MIGRATIONS_STATUS'] = 'Status migracije baze podatkov';
$lang['MIGRATIONS_DATABASE_NAME'] = 'Ime zbirke podatkov';
$lang['MIGRATIONS_DATABASE_TOTAL'] = 'Skupaj tabel';
$lang['MIGRATIONS_DATABASE_SIZE'] = 'Velikost zbirke podatkov';
$lang['MIGRATIONS_DATABASE_INFO'] = 'Informacije o zbirki podatkov';
$lang['MIGRATIONS_SYSTEM'] = 'Sistem migracije';
$lang['MIGRATIONS_NEEDS_SETUP'] = 'Potrebna nastavitev';
$lang['MIGRATIONS_ACTIVE'] = 'Aktivno';
$lang['MIGRATIONS_NOT_INITIALIZED'] = 'Ni inicializiran';
$lang['MIGRATIONS_UP_TO_DATE'] = 'Vse je ažurno';
$lang['MIGRATIONS_PENDING_COUNT'] = 'v teku';
$lang['MIGRATIONS_APPLIED'] = 'Izvedene migracije';
$lang['MIGRATIONS_PENDING'] = 'Nepotrjene migracije';
$lang['MIGRATIONS_VERSION'] = 'Različica';
$lang['MIGRATIONS_NAME'] = 'Ime migracije';
$lang['MIGRATIONS_FILE'] = 'Datoteka migracije';
$lang['MIGRATIONS_APPLIED_AT'] = 'Izvedeno ob';
$lang['MIGRATIONS_COMPLETED_AT'] = 'Dokončano ob';
$lang['MIGRATIONS_CURRENT_VERSION'] = 'Trenutna različica';
$lang['MIGRATIONS_NOT_APPLIED'] = 'Nobena migracija ni bila uporabljena.';
$lang['MIGRATIONS_INSTRUCTIONS'] = 'Navodila';
$lang['MIGRATIONS_SETUP_STATUS'] = 'Status nastavitve';
$lang['MIGRATIONS_SETUP_GUIDE'] = 'Oglejte si vodnik za nastavitev spodaj';
$lang['MIGRATIONS_ACTION_REQUIRED'] = 'Potrebna akcija';

// Index
$lang['MAIN_INDEX'] = 'Forum indeks.';
$lang['FORUM_STATS'] = 'Forum statistika.';
$lang['ADMIN_INDEX'] = 'Admin indeks.';
$lang['CREATE_PROFILE'] = 'Ustvarite profil.';

$lang['TP_VERSION'] = 'TorrentPier različica.';
$lang['TP_RELEASE_DATE'] = 'Datum izdaje.';
$lang['PHP_INFO'] = 'PHP informacije';

$lang['CLICK_RETURN_ADMIN_INDEX'] = 'Kliknite %sTukaj%s za vrnitev na indeks administratorja.';

$lang['NUMBER_POSTS'] = 'Število objav.';
$lang['POSTS_PER_DAY'] = 'Objave na dan.';
$lang['NUMBER_TOPICS'] = 'Število tem.';
$lang['TOPICS_PER_DAY'] = 'Teme na dan.';
$lang['NUMBER_USERS'] = 'Število uporabnikov.';
$lang['USERS_PER_DAY'] = 'Uporabniki na dan.';
$lang['BOARD_STARTED'] = 'Odbor je začel.';
$lang['AVATAR_DIR_SIZE'] = 'Velikost imenika avatarjev.';
$lang['NOT_AVAILABLE'] = 'Ni na voljo.';

// System information
$lang['ADMIN_SYSTEM_INFORMATION'] = 'Sistemske informacije';
$lang['ADMIN_SYSTEM_OS'] = 'OS:';
$lang['ADMIN_SYSTEM_PHP_VER'] = 'PHP:';
$lang['ADMIN_SYSTEM_DATABASE_VER'] = 'Zbirka podatkov:';
$lang['ADMIN_SYSTEM_PHP_MEM_LIMIT'] = 'Omejitev pomnilnika:';
$lang['ADMIN_SYSTEM_DISK_SPACE_INFO_TITLE'] = 'Informacije o disku:';
$lang['ADMIN_SYSTEM_DISK_SPACE_INFO'] = '%s (uporabljeno: %s | prosto: %s)';
$lang['ADMIN_SYSTEM_PHP_MAX_EXECUTION_TIME'] = 'Maksimalni čas izvajanja:';

// Clear Cache
$lang['DATASTORE'] = 'Datastore.';
$lang['CLEAR_CACHE'] = 'Predpomnilnik';
$lang['CLEAR_TEMPLATES_CACHE'] = 'Predpredpomnilnik';

// Update
$lang['USER_LEVELS'] = 'Uporabniški nivoji.';
$lang['USER_LEVELS_UPDATED'] = 'Uporabniške ravni so bile posodobljene.';

// Synchronize
$lang['SYNCHRONIZE'] = 'Sinhronizirati.';
$lang['TOPICS_DATA_SYNCHRONIZED'] = 'Podatki tem so bili sinhronizirani.';
$lang['USER_POSTS_COUNT'] = 'Število objav uporabnika.';
$lang['USER_POSTS_COUNT_SYNCHRONIZED'] = 'Število objav uporabnika je bilo sinhronizirano.';

// Online Userlist
$lang['SHOW_ONLINE_USERLIST'] = 'Prikažite seznam spletnih uporabnikov.';

// Robots.txt editor
$lang['ROBOTS_TXT_EDITOR_TITLE'] = 'Upravljanje robots.txt';
$lang['ROBOTS_TXT_UPDATED_SUCCESSFULLY'] = 'Datoteka robots.txt je bila uspešno posodobljena';
$lang['CLICK_RETURN_ROBOTS_TXT_CONFIG'] = '%sKliknite tukaj, da se vrnete v upravitelja robots.txt%s';

// Auth pages
$lang['USER_SELECT'] = 'Izberite uporabnika.';
$lang['GROUP_SELECT'] = 'Izberite skupino.';
$lang['SELECT_A_FORUM'] = 'Izberite forum.';
$lang['AUTH_CONTROL_USER'] = 'Nadzor uporabniških dovoljenj.';
$lang['AUTH_CONTROL_GROUP'] = 'Nadzor dovoljenj skupine.';
$lang['AUTH_CONTROL_FORUM'] = 'Nadzor dovoljenj foruma.';
$lang['LOOK_UP_FORUM'] = 'Oglejte si forum.';

$lang['GROUP_AUTH_EXPLAIN'] = 'Tukaj lahko spremenite dovoljenja in status moderatorja, dodeljenega vsaki uporabniški skupini. Ne pozabite, da lahko posamezne uporabniške pravice še naprej omogočijo uporabniku dostop do forumov, itd. Opozorili vas bomo, če je to res.';
$lang['USER_AUTH_EXPLAIN'] = 'Tukaj lahko spremenite dovoljenja in status moderatorja dodeljenega za vsakega posameznega uporabnika. Ne pozabite, da lahko ob spremembi dovoljenj uporabnika dovoljenja skupine še vedno omogočajo uporabniku dostop do forumov, itd. Opozorili vas bomo, če je to res.';
$lang['FORUM_AUTH_EXPLAIN'] = 'Tukaj lahko spremenite ravni avtentikacije za vsak forum. Imeli boste tako preprosto kot tudi napredno metodo za to, pri čemer napredna ponuja večji nadzor nad delovanjem vsakega foruma. Ne pozabite, da bo sprememba ravni dovoljenj forumov vplivala na to, kateri uporabniki lahko izvajajo različne operacije v njih.';

$lang['SIMPLE_MODE'] = 'Preprost način.';
$lang['ADVANCED_MODE'] = 'Napredni način.';
$lang['MODERATOR_STATUS'] = 'Status moderatorja.';

$lang['PUBLIC'] = 'Javno.';
$lang['PRIVATE'] = 'Zasebno.';
$lang['REGISTERED'] = 'Registriran.';
$lang['ADMINISTRATORS'] = 'Administratorji.';

// These are displayed in the drop-down boxes for advanced mode forum auth, try and keep them short!
$lang['FORUM_ALL'] = 'Vse.';
$lang['FORUM_REG'] = 'REG.';
$lang['FORUM_PRIVATE'] = 'Zasebno.';
$lang['FORUM_MOD'] = 'MOD.';
$lang['FORUM_ADMIN'] = 'ADMIN.';

$lang['AUTH_VIEW'] = $lang['VIEW'] = 'Ogled.';
$lang['AUTH_READ'] = $lang['READ'] = 'Preberite.';
$lang['AUTH_POST'] = $lang['POST'] = 'Post';
$lang['AUTH_REPLY'] = $lang['REPLY'] = 'Odgovori.';
$lang['AUTH_EDIT'] = $lang['EDIT'] = 'Uredi.';
$lang['AUTH_DELETE'] = $lang['DELETE'] = 'Izbriši.';
$lang['AUTH_STICKY'] = $lang['STICKY'] = 'Lepljive.';
$lang['AUTH_ANNOUNCE'] = $lang['ANNOUNCE'] = 'Sporočamo.';
$lang['AUTH_VOTE'] = $lang['VOTE'] = 'Glasovanje.';
$lang['AUTH_POLLCREATE'] = $lang['POLLCREATE'] = 'Ustvari anketo';
$lang['AUTH_ATTACHMENTS'] = $lang['AUTH_ATTACH'] = 'Objavljanje datotek.';
$lang['AUTH_DOWNLOAD'] = 'Prenos datotek.';

$lang['USER_LEVEL'] = 'Uporabniški nivo.';
$lang['AUTH_USER'] = 'Uporabnik.';
$lang['AUTH_ADMIN'] = 'Administrator';
$lang['FORUM_AUTH_UPDATED'] = 'Forum dovoljenja so bila posodobljena.';
$lang['APPLY_TO_SUBFORUMS'] = 'Uporabi za podforume';

$lang['AUTH_UPDATED'] = 'Dovoljenja so bila posodobljena.';
$lang['AUTH_GENERAL_ERROR'] = 'Ni bilo mogoče posodobiti statusa skrbnika';
$lang['AUTH_SELF_ERROR'] = 'Ne morete se spremeniti iz skrbnika v uporabnika samostojno';
$lang['NO_FORUMS_AVAILABLE'] = 'Ni forumov na voljo. Najprej ustvarite forume, da upravljate s pravicami.';
$lang['CLICK_RETURN_USERAUTH'] = 'Kliknite %sTukaj%s, da se vrnete k uporabniškim dovoljenjem.';
$lang['CLICK_RETURN_GROUPAUTH'] = 'Kliknite %sTukaj%s, da se vrnete k dovoljenjem skupine.';
$lang['CLICK_RETURN_FORUMAUTH'] = 'Kliknite %sTukaj%s, da se vrnete k dovoljenjem foruma.';

// Banning
$lang['BAN_CONTROL'] = 'Nadzor prepovedi.';
$lang['BAN_EXPLAIN'] = 'Tukaj lahko nadzirate prepoved uporabnikov.';
$lang['BAN_USERNAME'] = 'Prepovedati enega ali več določenih uporabnikov.';
$lang['UNBAN_USERNAME'] = 'Odstranite prepoved enega ali več določenih uporabnikov';
$lang['UNBAN_USERNAME_EXPLAIN'] = 'Lahko odprete več uporabnikov v enem koraku z ustrezno kombinacijo miške in tipkovnice za vaš računalnik in brskalnik.';
$lang['NO_BANNED_USERS'] = 'Ni prepovedanih uporabniških imen.';
$lang['BAN_UPDATE_SUCESSFUL'] = 'Seznam prepovedanih je bil uspešno posodobljen.';
$lang['CLICK_RETURN_BANADMIN'] = 'Kliknite %sTukaj%s, da se vrnete na nadzor prepovedi.';

// Configuration
$lang['GENERAL_CONFIG'] = 'Splošna konfiguracija.';
$lang['CONFIG_EXPLAIN'] = 'Spodnji obrazec vam omogoča, da prilagodite vse splošne odbor možnosti. Za Uporabnika in Forum nastavitve uporabljajo sorodne povezave na levi strani.';

$lang['CONFIG_MODS'] = 'Spremembe konfiguracije.';
$lang['MODS_EXPLAIN'] = 'Ta obrazec vam omogoča prilagoditev sprememb.';

$lang['CLICK_RETURN_CONFIG'] = '%sKliknite tukaj za vrnitev na splošno konfiguracijo%s.';
$lang['CLICK_RETURN_CONFIG_MODS'] = '%sNazaj na spremembe nastavitev%s.';

$lang['GENERAL_SETTINGS'] = 'Splošne nastavitve odbora.';
$lang['SITE_NAME'] = 'Ime mesta.';
$lang['SITE_DESC'] = 'Opis mesta.';
$lang['FORUMS_DISABLE'] = 'Onemogočite odbor.';
$lang['BOARD_DISABLE_EXPLAIN'] = 'To bo odbor onemogočil.';
$lang['ACC_NONE'] = 'Noben';

$lang['ABILITIES_SETTINGS'] = 'Osnovne Nastavitve Uporabnika in Foruma';
$lang['MAX_POLL_OPTIONS'] = 'Največje število možnosti ankete';
$lang['FLOOD_INTERVAL'] = 'Časovni Interval Poplav';
$lang['FLOOD_INTERVAL_EXPLAIN'] = 'Število sekund, ki jih mora uporabnik počakati med objavami';
$lang['TOPICS_PER_PAGE'] = 'Teme Na Strani';
$lang['POSTS_PER_PAGE'] = 'Objave Na Strani';
$lang['HOT_THRESHOLD'] = 'Objave za Priljubljeni Prag';
$lang['DEFAULT_LANGUAGE'] = 'Privzeti Jezik';
$lang['DATE_FORMAT'] = 'Oblika Datuma';
$lang['SYSTEM_TIMEZONE'] = 'Časovni Pas Sistema';
$lang['ENABLE_PRUNE'] = 'Omogočanje Pruninga Foruma';
$lang['ALLOW_BBCODE'] = 'Dovoli BBCode';
$lang['ALLOW_SMILIES'] = 'Dovoli Smeške';
$lang['SMILIES_PATH'] = 'Pot skladišča Smeškov';
$lang['SMILIES_PATH_EXPLAIN'] = 'Pot v vaši javni mapi TorrentPier, npr. assets/images/smiles';
$lang['ALLOW_SIG'] = 'Dovoli Podpise';
$lang['MAX_SIG_LENGTH'] = 'Največja dolžina podpisa';
$lang['MAX_SIG_LENGTH_EXPLAIN'] = 'Največje število znakov v podpisih uporabnika';
$lang['ALLOW_NAME_CHANGE'] = 'Dovoli spremembe uporabniškega imena';

// Autologin Keys
$lang['ALLOW_AUTOLOGIN'] = 'Dovoli samodejne prijave';
$lang['ALLOW_AUTOLOGIN_EXPLAIN'] = 'Določa, ali uporabniki lahko izberejo samodejno prijavo ob obisku foruma';
$lang['AUTOLOGIN_TIME'] = 'Potek samodejne prijave';
$lang['AUTOLOGIN_TIME_EXPLAIN'] = 'Kako dolgo je ključ samodejne prijave veljaven v dneh, če uporabnik ne obišče foruma. Nastavite na nič, da onemogočite potek.';

// Forum Management
$lang['FORUM_ADMIN_MAIN'] = 'Forum Uprava';
$lang['EDIT_FORUM'] = 'Urejanje foruma';
$lang['CREATE_FORUM'] = 'Ustvarite nov forum';
$lang['CREATE_SUB_FORUM'] = 'Ustvari podforum';
$lang['CREATE_CATEGORY'] = 'Ustvari novo kategorijo';
$lang['REMOVE'] = 'Odstrani';
$lang['CONFIG_UPDATED'] = 'Forum Konfiguracija Je Bil Uspešno Posodobljen';
$lang['MOVE_UP'] = 'Premakni navzgor';
$lang['MOVE_DOWN'] = 'Premakni navzdol';
$lang['NO_MODE'] = 'Ni bil določen način';
$lang['FORUM_EDIT_DELETE_EXPLAIN'] = 'Obrazec spodaj vam omogoča, da prilagodite vse splošne možnosti odbora. Za nastavitve uporabnika in foruma uporabite povezave na levi strani.';

$lang['MOVE_CONTENTS'] = 'Premaknite vse vsebine.';
$lang['FORUM_DELETE'] = 'Izbriši forum';
$lang['FORUM_DELETE_EXPLAIN'] = 'Obrazec spodaj vam omogoča, da izbrišete forum (ali kategorijo) in odločite, kam želite premakniti vse teme (ali forume), ki jih vsebuje.';
$lang['CATEGORY_DELETE'] = 'Izbriši Kategorijo';
$lang['CATEGORY_NAME_EMPTY'] = 'Ime kategorije ni navedeno';

$lang['STATUS_LOCKED'] = 'Zaklenjena';
$lang['STATUS_UNLOCKED'] = 'Odklenjena';
$lang['FORUM_SETTINGS'] = 'Splošne nastavitve foruma';
$lang['FORUM_NAME'] = 'Ime foruma';
$lang['FORUM_DESC'] = 'Opis';
$lang['FORUM_STATUS'] = 'Stanje foruma';
$lang['FORUM_PRUNING'] = 'Samodejno obrezovanje';

$lang['PRUNE_DAYS'] = 'Premaknite teme, ki niso bile objavljene.';

$lang['MOVE_AND_DELETE'] = 'Premikanje in brisanje.';

$lang['DELETE_ALL_POSTS'] = 'Izbriši vse objave.';
$lang['DELETE_ALL_TOPICS'] = 'Izbrišite vse teme, vključno z obvestili.';
$lang['NOWHERE_TO_MOVE'] = 'Nimam kam premakniti.';

$lang['EDIT_CATEGORY'] = 'Uredi kategorijo.';
$lang['EDIT_CATEGORY_EXPLAIN'] = 'Uporabite ta obrazec, da spremenite ime kategorije.';

$lang['FORUMS_UPDATED'] = 'Informacije o forumu in kategoriji so bile uspešno posodobljene.';

$lang['MUST_DELETE_FORUMS'] = 'Pred brisanjem te kategorije morate izbrisati vse forume.';

$lang['CLICK_RETURN_FORUMADMIN'] = 'Kliknite %sTukaj%s, da se vrnete v upravljanje forumov.';

$lang['SHOW_ALL_FORUMS_ON_ONE_PAGE'] = 'Prikaži vse forume na eni strani.';

// Smiley Management
$lang['SMILEY_TITLE'] = 'Utility za urejanje nasmehov.';
$lang['SMILE_DESC'] = 'Na tej strani lahko dodate, odstranite in uredite emotikone ali nasmehe, ki jih lahko vaši uporabniki uporabljajo.';

$lang['SMILEY_CONFIG'] = 'Konfiguracija nasmeškov.';
$lang['SMILEY_CODE'] = 'Koda nasmeška.';
$lang['SMILEY_URL'] = 'Slika nasmeška.';
$lang['SMILEY_EMOT'] = 'Čustva nasmeška.';
$lang['SMILE_ADD'] = 'Dodaj nov nasmeh.';
$lang['SMILE'] = 'Nasmeh.';
$lang['EMOTION'] = 'Čustva.';

$lang['SELECT_PAK'] = 'Izberite datoteko paketa (.pak).';
$lang['REPLACE_EXISTING'] = 'Zamenjati obstoječe nasmeh.';
$lang['KEEP_EXISTING'] = 'Obdržati obstoječe nasmeh.';
$lang['SMILEY_IMPORT_INST'] = 'Moraš razpakirati paket nasmeškov in naložiti vse datoteke v ustrezen imenik nasmeškov.';
$lang['SMILEY_IMPORT'] = 'Uvoz paketa nasmeškov.';
$lang['CHOOSE_SMILE_PAK'] = 'Izberite datoteko nasmeha paketa .pak.';
$lang['IMPORT'] = 'Uvozi nasmehe.';
$lang['SMILE_CONFLICTS'] = 'Kaj storiti v primeru konfliktov.';
$lang['DEL_EXISTING_SMILEYS'] = 'Izbriši obstoječe nasmehe pred uvozom.';
$lang['IMPORT_SMILE_PACK'] = 'Uvoz paketa nasmeškov.';
$lang['EXPORT_SMILE_PACK'] = 'Ustvarjanje paketa nasmeškov.';
$lang['EXPORT_SMILES'] = 'Za ustvarjanje paketa nasmeškov iz trenutnih nasmeškov, kliknite %sTukaj%s, da prenesete datoteko smiles.pak.';

$lang['SMILEY_ADD_SUCCESS'] = 'Smiley je bil dodan uspešno';
$lang['SMILEY_EDIT_SUCCESS'] = 'Smiley je bil uspešno posodobljen';
$lang['SMILEY_IMPORT_SUCCESS'] = 'Smeška Paket je bil uspešno uvožene!';
$lang['SMILEY_DEL_SUCCESS'] = 'Smiley je bil odstranjen uspešno';
$lang['CLICK_RETURN_SMILEADMIN'] = 'Kliknite %sHere%s, da se vrnete na Smeška Uprava';

// User Management
$lang['USER_ADMIN'] = 'Upravljanje uporabnikov.';
$lang['LOOK_UP_USER'] = 'Poglej uporabnika.';

// Group Management
$lang['GROUP_ADMINISTRATION'] = 'Upravljanje skupin.';
$lang['GROUP_ADMIN_EXPLAIN'] = 'S tega panela lahko upravljate z vsemi uporabniškimi skupinami.';
$lang['UPDATED_GROUP'] = 'Skupina je bila uspešno posodobljena.';
$lang['ADDED_NEW_GROUP'] = 'Nova skupina je bila uspešno ustvarjena.';
$lang['DELETED_GROUP'] = 'Skupina je bila uspešno izbrisana.';
$lang['CREATE_NEW_GROUP'] = 'Ustvarjanje nove skupine.';
$lang['EDIT_GROUP'] = 'Urejanje skupine.';
$lang['GROUP_STATUS'] = 'Stanje skupine.';
$lang['GROUP_DELETE'] = 'Izbriši skupino.';
$lang['GROUP_DELETE_CHECK'] = 'Izbriši to skupino.';
$lang['NO_GROUP_NAME'] = 'Morate upoštevati ime za to skupino.';
$lang['NO_GROUP_MODERATOR'] = 'Morate navesti moderatorja za to skupino.';
$lang['NO_GROUP_ACTION'] = 'Nobena akcija ni bila določena.';
$lang['DELETE_OLD_GROUP_MOD'] = 'Izbrišete starega moderatorja skupine?';
$lang['DELETE_OLD_GROUP_MOD_EXPL'] = 'Uživate brez vpliva na skupino.';
$lang['CLICK_RETURN_GROUPSADMIN'] = 'Kliknite %sTukaj%s, da se vrnete v upravljanje skupin.';
$lang['SELECT_GROUP'] = 'Izberite skupino';
$lang['LOOK_UP_GROUP'] = 'Poglej skupino';

// Prune Administration
$lang['FORUM_PRUNE'] = 'Forum obrezati';
$lang['FORUM_PRUNE_EXPLAIN'] = 'To boste obrezali vse teme, ki niso bile objavljene v številu dni, ki ga izberete. Če ne vnesete števila, bodo vse teme izbrisane. Ne bo odstranjeno <b>sticky</b> teme in <b>obvestila</b>. Tiste teme boste morali odstraniti ročno.';
$lang['DO_PRUNE'] = 'Izvedi obrezovanje';
$lang['PRUNE_TOPICS_NOT_POSTED'] = 'Obreži teme brez odgovorov v to število dni';
$lang['TOPICS_PRUNED'] = 'Obrezane teme';
$lang['PRUNE_SUCCESS'] = 'Forum je bil uspešno obrezan';
$lang['NOT_DAYS'] = 'Obrezovanje dni ni bilo izbranih';

// Word censor
$lang['WORDS_TITLE'] = 'Cenzuriranje besed';
$lang['WORDS_EXPLAIN'] = 'S to nadzorno ploščo lahko dodate, uredite in odstranite besede, ki bodo samodejno cenzurirane na vaših forumih. Poleg tega ljudem ne bo dovoljeno registrirati se z uporabniškimi imeni, ki vsebujejo te besede. Nadomestni znaki (*) so sprejeti v polju besede. Na primer, *test* se bo ujemal z besedo "besno", test* se bo ujemal z "testiranjem", *test pa se bo ujemal z "sovražiti".';
$lang['WORD'] = 'Beseda';
$lang['EDIT_WORD_CENSOR'] = 'Uredi cenzuro besed';
$lang['REPLACEMENT'] = 'Zamenjava';
$lang['ADD_NEW_WORD'] = 'Dodaj novo besedo';

$lang['MUST_ENTER_WORD'] = 'Morate vnesti besedo in njegovo zamenjavo';
$lang['NO_WORD_SELECTED'] = 'Nobena beseda ni izbrana za urejanje';

$lang['WORD_UPDATED'] = 'Izbrana beseda cenzure je bila uspešno posodobljena';
$lang['WORD_ADDED'] = 'Cenzuro besede je bila uspešno dodana';
$lang['WORD_REMOVED'] = 'Izbrana cenzura besede je bila uspešno odstranjena';

$lang['CLICK_RETURN_WORDADMIN'] = 'Kliknite %sTukaj%s, da se vrnete v Upravitelja cenzuriranja besed';

// Mass Email
$lang['MASS_EMAIL_EXPLAIN'] = 'Tukaj lahko pošljete sporočilo vsem svojim uporabnikom ali vsem uporabnikom določene skupine. Da bi to naredili, bo e-pošta poslana na upravni e-naslov, s slepo kopijo poslano vsem prejemnikom. Če pošiljate e-pošto veliki skupini ljudi, prosimo, bodite potrpežljivi po oddaji in ne ustavljajte strani na pol. Normalno je, da množično pošiljanje e-pošte traja dlje časa in obveščeni boste, ko bo skripta končana.';
$lang['COMPOSE'] = 'Sestavite';

$lang['RECIPIENTS'] = 'Prejemniki';
$lang['ALL_USERS'] = 'Vsi uporabniki';

$lang['MASS_EMAIL_MESSAGE_TYPE'] = 'Vrsta e-pošte';

// Ranks admin
$lang['RANKS_TITLE'] = 'Uprava mesta';
$lang['RANKS_EXPLAIN'] = 'S tem obrazcem lahko dodate, uredite, ogledate in izbrišete uvrstitve. Ustvarite lahko tudi po meri uvrstitve, ki jih lahko uporabite za uporabnika preko upravljanja uporabnikov.';

$lang['ADD_NEW_RANK'] = 'Dodaj novo uvrstitev';
$lang['RANK_TITLE'] = 'Naslov uvrstitve';
$lang['STYLE_COLOR'] = 'Slog uvrstitve';
$lang['STYLE_COLOR_FAQ'] = 'Določite razred za stiliziranje naslova z želeno barvo. Na primer: <i class="bold">colorAdmin</i>';
$lang['RANK_IMAGE'] = 'Slika uvrstitve';
$lang['RANK_IMAGE_EXPLAIN'] = 'To uporabite za določitev majhne slike, povezane z uvrstitvijo';

$lang['MUST_SELECT_RANK'] = 'Morate izbrati uvrstitev';

$lang['RANK_UPDATED'] = 'Uvrstitev je bila uspešno posodobljena';
$lang['RANK_ADDED'] = 'Uvrstitev je bila uspešno dodana';
$lang['RANK_REMOVED'] = 'Uvrstitev je bila uspešno izbrisana';
$lang['NO_UPDATE_RANKS'] = 'Uvrstitev je bila uspešno izbrisana. Vendar uporabniški računi, ki uporabljajo to uvrstitev, niso bili posodobljeni. Ročno boste morali ponastaviti uvrstitev na teh računih.';

$lang['CLICK_RETURN_RANKADMIN'] = 'Kliknite %sTukaj%s, da se vrnete v Upravitelja mesta.';

// Disallow Username Admin
$lang['DISALLOW_CONTROL'] = 'Nadzor uporabniškega imena onemogoča';
$lang['DISALLOW_EXPLAIN'] = 'Tukaj lahko nadzirate uporabniška imena, ki ne bodo dovoljena. Prepovedana uporabniška imena lahko vsebujejo nadomestni znak *. Upoštevajte, da vam ne bo dovoljeno določiti katerega koli uporabniškega imena, ki je že registrirano. Najprej morate izbrisati to ime, nato pa ga onemogočiti.';

$lang['DELETE_DISALLOW_TITLE'] = 'Odstranitev nedovoljenega uporabniškega imena';
$lang['DELETE_DISALLOW_EXPLAIN'] = 'Lahko odstranite nedovoljeno uporabniško ime, tako da ga izberete s seznama in kliknete pošlji.';

$lang['ADD_DISALLOW'] = 'Dodaj';
$lang['ADD_DISALLOW_TITLE'] = 'Dodajanje nedovoljenega uporabniškega imena';

$lang['NO_DISALLOWED'] = 'Ni nedovoljenih uporabniških imen.';

$lang['DISALLOWED_DELETED'] = 'Nedovoljeno uporabniško ime je bilo uspešno odstranjeno.';
$lang['DISALLOW_SUCCESSFUL'] = 'Nedovoljeno uporabniško ime je bilo uspešno dodano.';
$lang['DISALLOWED_ALREADY'] = 'Vneseno ime ni moglo biti onemogočeno. Bodisi že obstaja na seznamu, bodisi na seznamu cenzur besed, ali pa je prisotno ujemajoče se uporabniško ime.';

$lang['CLICK_RETURN_DISALLOWADMIN'] = 'Kliknite %sTukaj%s, da se vrnete v Upravljanje uporabniških imen.';

// Version Check
$lang['VERSION_INFORMATION'] = 'Informacije o različici.';
$lang['UPDATE_AVAILABLE'] = 'Posodobitev na voljo';
$lang['CHANGELOG'] = 'Zgodovina sprememb';

// Login attempts configuration
$lang['MAX_LOGIN_ATTEMPTS'] = 'Dovoljeno poskusov prijave.';
$lang['MAX_LOGIN_ATTEMPTS_EXPLAIN'] = 'Število dovoljenih poskusov prijave na odboru.';
$lang['LOGIN_RESET_TIME'] = 'Čas zaklepanja prijave.';
$lang['LOGIN_RESET_TIME_EXPLAIN'] = 'Čas v minutah, ki ga mora uporabnik počakati, preden se lahko ponovno prijavi po prekoračitvi dovoljenega števila poskusov prijave.';

// Permissions List
$lang['PERMISSIONS_LIST'] = 'Seznam dovoljenj.';
$lang['AUTH_CONTROL_CATEGORY'] = 'Nadzor kategorije dovoljenj.';
$lang['FORUM_AUTH_LIST_EXPLAIN'] = 'To nudi povzetek ravni pooblastil vsakega foruma. Ta dovoljenja lahko uredite z uporabo enostavne ali napredne metode s klikom na ime foruma. Ne pozabite, da sprememba ravni dovoljenja foruma vpliva na to, kateri uporabniki lahko izvajajo različne operacije znotraj njih.';
$lang['CAT_AUTH_LIST_EXPLAIN'] = 'To nudi povzetek ravni pooblastil za vsak forum v tej kategoriji. Lahko uredite dovoljenja posameznih forumov z uporabo enostavne ali napredne metode s klikom na ime foruma. Alternativno lahko nastavite dovoljenja za vse forume v tej kategoriji, tako da uporabite spustni meni na dnu strani. Ne pozabite, da sprememba ravni dovoljenja foruma vpliva na to, kateri uporabniki lahko izvajajo različne operacije znotraj njih.';
$lang['FORUM_AUTH_LIST_EXPLAIN_ALL'] = 'Vsi uporabniki';
$lang['FORUM_AUTH_LIST_EXPLAIN_REG'] = 'Vsi registrirani uporabniki';
$lang['FORUM_AUTH_LIST_EXPLAIN_PRIVATE'] = 'Samo uporabniki, ki so odobrili posebne dovoljenja.';
$lang['FORUM_AUTH_LIST_EXPLAIN_MOD'] = 'Samo moderatorji tega foruma.';
$lang['FORUM_AUTH_LIST_EXPLAIN_ADMIN'] = 'Samo skrbniki.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_VIEW'] = '%s lahko ogleda ta forum.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_READ'] = '%s lahko preberete objave v tem forumu.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_POST'] = '%s lahko objavi v tem forumu.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_REPLY'] = '%s lahko odgovori na objave v tem forumu';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_EDIT'] = '%s lahko uredite objave v tem forumu.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_DELETE'] = '%s lahko izbrišete objave v tem forumu.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_STICKY'] = '%s lahko objavi lepljive teme v tem forumu.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_ANNOUNCE'] = '%s lahko objavi obvestila v tem forumu.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_VOTE'] = '%s lahko glasuje v anketah v tem forumu.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_POLLCREATE'] = '%s lahko ustvari ankete v tem forumu.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_ATTACHMENTS'] = '%s lahko objavlja priloge.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_DOWNLOAD'] = '%s lahko prenaša priloge.';

// Tooltips for disabled permissions
$lang['AUTH_TOOLTIP_FORUM_MODE'] = 'Način foruma: %s — ni mogoče spremeniti';
$lang['AUTH_TOOLTIP_MOD_OVERRIDE'] = 'Dovoljenje omogočeno prek "Moderatorja"';
$lang['AUTH_TOOLTIP_GROUP_HAS'] = 'Dovoljenje podeljeno s strani skupine';

// Misc
$lang['SF_SHOW_ON_INDEX'] = 'Prikaži na glavni strani.';
$lang['SF_PARENT_FORUM'] = 'Matični forum.';
$lang['SF_NO_PARENT'] = 'Nobenega starševskega foruma.';
$lang['SYNC'] = 'Sinhronizacija.';

// Mods
$lang['MAX_NEWS_TITLE'] = 'Maksimalna dolžina naslova novice';
$lang['NEWS_COUNT'] = 'Koliko novic prikaži';
$lang['NEWS_FORUM_ID'] = 'Iz katerih forumov naj se prikaže <br /> <h6>Za več forumov navedite ID-je, ločene z vejicami. Primer: 1,2,3</h6>';
$lang['TRACKER_STATS'] = 'Statistika trackerja';
$lang['WHOIS_INFO'] = 'Informacije o IP naslovu';
$lang['SHOW_MOD_HOME_PAGE'] = 'Prikaži moderatorje na domači strani (index.php)';
$lang['SHOW_BOARD_STARTED_INDEX'] = 'Prikaži datum začetka odbora na index.php';
$lang['PREMOD_HELP'] = '<h4><span class=\"tor-icon tor-dup\">&#8719;</span> Predmoderacija</h4> <h6>Če v tem razdelku in njegovih podrazdelkih ni torrentov s statusom v, # ali T, bodo nove distribucije samodejno prejele ta status</h6>';
$lang['TOR_COMMENT'] = '<h4>Komentar o statusu distribucije</h4> <h6>Komentar vam omogoča, da opozorite na napake pri izdaji. Če so potrebne popravke, je upravljavcu izdaje na voljo obrazec za odziv za popravilo izdaje</h6>';
$lang['SEED_BONUS_ADD'] = '<h4>Pravila za bonus za seeding</h4> <h6>Število torrentov, ki jih uporabnik seeda, in pripadajoče bonus točke, podeljene na uro</h6>';
$lang['SEED_BONUS_RELEASE'] = 'do N izdaj';
$lang['SEED_BONUS_POINTS'] = 'bonus točk na uro';
$lang['SEED_BONUS_TOR_SIZE'] = '<h4>Minimalna velikost torrenta za pridobitev bonus točk</h4> <h6>Pustite prazno, da podelite bonuse za vse torrente ne glede na velikost.</h6>';
$lang['SEED_BONUS_USER_REGDATA'] = '<h4>Minimalna starost uporabniškega računa za pridobitev bonus točk</h4> <h6>Pustite prazno, da podelite bonuse vsem uporabnikom ne glede na starost računa.</h6>';
$lang['SEED_BONUS_WARNING'] = 'POZOR! Seme Nagrade morajo biti v naraščajočem vrstnem redu';
$lang['SEED_BONUS_EXCHANGE'] = 'Nastavljanje izmenjave bonus točk za seeding';
$lang['SEED_BONUS_ROPORTION'] = 'Izmenjalni tečaj: bonus točke za GB kredita za nalaganje';

$lang['ALLOWED'] = 'Dovoljeno';
$lang['RETURN_CONFIG'] = '%sVrni se na konfiguracijo%s.';
$lang['CONFIG_UPD'] = 'Konfiguracija Uspešno Posodobljen';

// Forum config
$lang['BT_SELECT_FORUMS'] = 'Forum možnosti:';
$lang['BT_SELECT_FORUMS_EXPL'] = 'držite <i>Ctrl</i> medtem ko izberete več forumov';

$lang['REG_TORRENTS'] = 'Registrirajte hudournike.';
$lang['DISALLOWED'] = 'Prepovedano';
$lang['ALLOW_REG_TRACKER'] = 'Dovoljeno forumih za registracijo .hudournikov na sledilniku.';
$lang['ALLOW_PORNO_TOPIC'] = 'Dovoljeno objavljanje vsebin, 18+';
$lang['SELF_MODERATED'] = 'Uporabniki lahko <b>premikajo</b> svoje teme v drug forum.';

$lang['BT_ANNOUNCE_URL_HEAD'] = 'Sporočamo, URL.';
$lang['BT_ANNOUNCE_URL'] = 'Sporočamo, url.';
$lang['BT_ANNOUNCE_URL_EXPL'] = 'Lahko določite dodatne dovoljene url-je v "includes/torrent_announce_urls.php".';
$lang['BT_DISABLE_DHT'] = 'Onemogočite DHT omrežja';
$lang['BT_DISABLE_DHT_EXPL'] = 'Onemogočite izmenjavo vrstnikov in DHT (priporočljivo za zasebna omrežja, samo url sporočamo).';
$lang['BT_PRIVATE_TRACKER'] = 'Ta sledilnik je zaseben: seznam datotek (za goste), DHT | PEX je onemogočen';
$lang['BT_PRIVATE_TORRENT'] = 'Ustvarjalec tega hudournika ga je naredil zasebnega.';
$lang['BT_CHECK_ANNOUNCE_URL'] = 'Preverite sporočamo, url.';
$lang['BT_CHECK_ANNOUNCE_URL_EXPL'] = 'Na trackerju dovoli registracijo samo dovoljenih URL-jev';
$lang['BT_REPLACE_ANN_URL'] = 'Zamenjajte sporočamo, url.';
$lang['BT_REPLACE_ANN_URL_EXPL'] = 'Zamenjajte izvirni sporočamo, url z vašim privzetim v .torrent datotekah.';
$lang['BT_DEL_ADDIT_ANN_URLS'] = 'Odstranite vse dodatne sporočamo, url-je.';
$lang['BT_DEL_ADDIT_ANN_URLS_EXPL'] = 'Če torrent vsebuje naslove drugih sledilnikov, bodo odstranjeni.';

$lang['BT_SHOW_PEERS_HEAD'] = 'Seznam vrstnikov.';
$lang['BT_SHOW_PEERS'] = 'Prikazujejo vrstnike (sejitelji in leechers).';
$lang['BT_SHOW_PEERS_EXPL'] = 'To bo pokazalo seznam sejiteljev/leechers nad temo s hudournikom.';
$lang['BT_SHOW_PEERS_MODE'] = 'Privzeto, kažejo vrstnike, kot so:';
$lang['BT_SHOW_PEERS_MODE_COUNT'] = 'Šteje samo';
$lang['BT_SHOW_PEERS_MODE_NAMES'] = 'Ima le.';
$lang['BT_SHOW_PEERS_MODE_FULL'] = 'Podrobnosti';
$lang['BT_ALLOW_SPMODE_CHANGE'] = 'Dovoli način "podrobnosti".';
$lang['BT_ALLOW_SPMODE_CHANGE_EXPL'] = 'Če "ne", bo na voljo samo privzeti način prikaza vrstnikov.';
$lang['BT_SHOW_IP_ONLY_MODER'] = 'IP-ji vrstnikov <b>so</b> vidni samo moderatorjem.';
$lang['BT_SHOW_PORT_ONLY_MODER'] = 'Vrsta <b>Port</b>ni so vidne samo moderatorjem.';

$lang['BT_SHOW_DL_LIST_HEAD'] = 'Seznam DL.';
$lang['BT_SHOW_DL_LIST'] = 'Pokaži DL-Seznam Prenos teme.';
$lang['BT_DL_LIST_ONLY_1ST_PAGE'] = 'Prikaži DL-Seznam samo na prvi strani tem.';
$lang['BT_DL_LIST_ONLY_COUNT'] = 'Prikazujejo samo število uporabnikov.';
$lang['BT_SHOW_DL_LIST_BUTTONS'] = 'Pokaži gumbe za ročno spreminjanje DL-stanja.';
$lang['BT_SHOW_DL_BUT_WILL'] = $lang['DLWILL'];
$lang['BT_SHOW_DL_BUT_DOWN'] = $lang['DLDOWN'];
$lang['BT_SHOW_DL_BUT_COMPL'] = $lang['DLCOMPLETE'];
$lang['BT_SHOW_DL_BUT_CANCEL'] = $lang['DLCANCEL'];

$lang['BT_ADD_AUTH_KEY_HEAD'] = 'Geslo';
$lang['BT_ADD_AUTH_KEY'] = 'Omogočite dodajanje gesla za datoteke hudournika pred prenosom.';

$lang['BT_TOR_BROWSE_ONLY_REG_HEAD'] = 'Torrent brskalnik (tracker)';
$lang['BT_TOR_BROWSE_ONLY_REG'] = 'Torrent brskalnik (tracker.php) na voljo le prijavljeni uporabniki';
$lang['BT_SEARCH_BOOL_MODE'] = 'Dovoli boolean iskanje.';
$lang['BT_SEARCH_BOOL_MODE_EXPL'] = 'uporabite *, +, - v iskanju.';

$lang['BT_SHOW_DL_STAT_ON_INDEX_HEAD'] = 'Razno';
$lang['BT_SHOW_DL_STAT_ON_INDEX'] = "Prikaži statistiko UL/DL uporabnikov na vrhu glavne strani foruma";
$lang['BT_NEWTOPIC_AUTO_REG'] = 'Samodejno registrirati torrent na sledilnik za nove teme.';
$lang['BT_SET_DLTYPE_ON_TOR_REG'] = 'Spremenite stanje teme na "Prenos" med registracijo hudournika na sledilnik.';
$lang['BT_SET_DLTYPE_ON_TOR_REG_EXPL'] = 'Bo spremenila tip teme na "Prenos" ne glede na nastavitve foruma.';
$lang['BT_UNSET_DLTYPE_ON_TOR_UNREG'] = 'Spremenite stanje teme na "Normalno" med odjavo hudournika s sledilnika.';

// Release
$lang['TEMPLATE_DISABLE'] = 'Predloga neveljavna.';
$lang['FOR_NEW_TEMPLATE'] = 'za nove vzorce!';
$lang['QUESTION'] = 'Ali ste prepričani, da želite izvesti to dejanje?';

$lang['CRON_LIST'] = 'Cron seznama.';
$lang['CRON_ID'] = 'ID';
$lang['CRON_ACTIVE'] = 'Na';
$lang['CRON_ACTIVE_EXPL'] = 'Aktivne naloge.';
$lang['CRON_TITLE'] = 'Naslov';
$lang['CRON_SCRIPT'] = 'Skript';
$lang['CRON_SCHEDULE'] = 'Urnik';
$lang['CRON_LAST_RUN'] = 'Zadnji Rok';
$lang['CRON_NEXT_RUN'] = 'Naslednji Rok';
$lang['CRON_RUN_COUNT'] = 'Teče';
$lang['CRON_EXECUTION_TIME'] = 'Čas izvajanja';
$lang['CRON_MANAGE'] = 'Upravljanje';
$lang['CRON_DISABLED_WARNING'] = 'Opozorilo! Izvajanje skriptov cron je onemogočeno. Če ga želite omogočiti, nastavite spremenljivko APP_CRON_ENABLED.';

$lang['CRON_ENABLED'] = 'Cron omogočeno';
$lang['CRON_CHECK_INTERVAL'] = 'Cron interval preverjanja (sec)';

$lang['WITH_SELECTED'] = 'Z izbranimi';
$lang['NOTHING'] = 'nič ne';
$lang['CRON_RUN'] = 'Teči';
$lang['CRON_DEL'] = 'Brisanje';
$lang['CRON_DISABLE'] = 'Onemogočite';
$lang['CRON_ENABLE'] = 'Omogoči';
$lang['DELETE_JOB'] = 'Ali ste prepričani, da želite izbrisati to cron opravilo?';
$lang['CRON_WORKS'] = 'Cron trenutno deluje ali je pokvarjen -> ';
$lang['REPAIR_CRON'] = 'Popravilo Cron.';

$lang['CRON_EDIT_HEAD_EDIT'] = 'Urejanje dela.';
$lang['CRON_EDIT_HEAD_ADD'] = 'Dodaj nalogo.';
$lang['CRON_SCRIPT_EXPL'] = 'ime skripta iz "vključuje/cron/delovna mesta/".';
$lang['SCHEDULE'] = [
    'select' => '&raquo; Izberite začetek.',
    'hourly' => 'uro.',
    'daily' => 'dnevno.',
    'weekly' => 'tedensko.',
    'monthly' => 'mesečno.',
    'interval' => 'interval.',
];
$lang['NOSELECT'] = 'Ni izbrano';
$lang['RUN_DAY'] = 'Tekmovalni dan.';
$lang['RUN_DAY_EXPL'] = 'dan, ko se to opravilo izvaja';
$lang['RUN_TIME'] = 'Čas izvajanja.';
$lang['RUN_TIME_EXPL'] = 'čas, ko se to opravilo izvaja (npr. 05:00:00)';
$lang['RUN_ORDER'] = 'Tekmovalni vrstni red.';
$lang['LAST_RUN'] = 'Zadnji Rok';
$lang['NEXT_RUN'] = 'Naslednji Rok';
$lang['RUN_INTERVAL'] = 'Tekmovalni interval.';
$lang['RUN_INTERVAL_EXPL'] = 'npr. 00:10:00.';
$lang['LOG_ENABLED'] = 'Dnevnik omogočeno.';
$lang['LOG_FILE'] = 'Datoteka dnevnika.';
$lang['LOG_FILE_EXPL'] = 'datoteka, v katero se zapiše dnevnik';
$lang['LOG_SQL_QUERIES'] = 'Dnevnik SQL poizvedbe.';
$lang['FORUM_DISABLE'] = 'Onemogočite odbor.';
$lang['BOARD_DISABLE_EXPL'] = 'Onemogočite ploščo, ko se to delo izvaja';
$lang['RUN_COUNTER'] = 'Zaženi števec';

$lang['JOB_REMOVED'] = 'Naloga je bila uspešno odstranjena';
$lang['SCRIPT_DUPLICATE'] = 'Cron opravilo s tem skriptom že obstaja';
$lang['TITLE_DUPLICATE'] = 'Cron opravilo s tem naslovom že obstaja';
$lang['CLICK_RETURN_JOBS_ADDED'] = '%sVrni se k dodajanju naloge%s';
$lang['CLICK_RETURN_JOBS'] = '%sNazaj k načrtovalcu nalog%s';

$lang['REBUILD_SEARCH'] = 'Obnovo Iskalnega Indeksa';
$lang['REBUILD_SEARCH_DESC'] = 'Ta mod bo indeksiral vsak prispevek v vašem forumu, obnavljal iskalne tabele. Ustavite se lahko kadarkoli želite, in naslednjič, ko ga ponovno zaženete, boste imeli možnost nadaljevati tam, kjer ste končali.<br /><br />Lahko traja dolgo, da se prikaže napredek (odvisno od "Objav na cikel" in "Časovna omejitev"), zato prosimo, ne premikajte se s strani napredka, dokler ni dokončano, razen če seveda želite prekiniti.';

// Input screen
$lang['STARTING_POST_ID'] = 'Začenši post_id';
$lang['STARTING_POST_ID_EXPLAIN'] = 'Prvi objava, od koder se začne predelava<br />Imaš možnost, da začneš od začetka ali od objave, kjer si nazadnje ustavil.';

$lang['START_OPTION_BEGINNING'] = 'začeti od začetka';
$lang['START_OPTION_CONTINUE'] = 'nadaljuj od tam, kjer si nazadnje ustavil';

$lang['CLEAR_SEARCH_TABLES'] = 'Počisti iskalne tabele';
$lang['CLEAR_SEARCH_TABLES_EXPLAIN'] = '';
$lang['CLEAR_SEARCH_NO'] = 'ŠT.';
$lang['CLEAR_SEARCH_DELETE'] = 'BRISANJE';
$lang['CLEAR_SEARCH_TRUNCATE'] = 'SKRAJŠAJTE';

$lang['NUM_OF_POSTS'] = 'Število mest';
$lang['NUM_OF_POSTS_EXPLAIN'] = 'Število objav za obdelavo<br />Samodejno se izpolni s številom skupnih/preostalih objav, ki jih najdemo v bazi podatkov.';

$lang['POSTS_PER_CYCLE'] = 'Delovnih mest na cikel';
$lang['POSTS_PER_CYCLE_EXPLAIN'] = 'Število objav za obdelavo na cikel<br />Obdržite nizko, da se izognete php/strežnik časovnim omejitvam.';

$lang['REFRESH_RATE'] = 'Frekvenca osveževanja';
$lang['REFRESH_RATE_EXPLAIN'] = 'Koliko časa (sekund) ostati nedejaven preden preidete na naslednji cikel obdelave<br />Običajno tega ne boste morali spremeniti.';

$lang['TIME_LIMIT'] = 'Rok';
$lang['TIME_LIMIT_EXPLAIN'] = 'Koliko časa (v sekundah) lahko traja obdelava pred selitvijo na naslednji cikel.';
$lang['TIME_LIMIT_EXPLAIN_WEBSERVER'] = '<i>Vaš spletni strežnik ima nastavljen časovni omejitev %s sekund, zato ostanite pod to vrednostjo</i>';

// Information strings
$lang['INFO_PROCESSING_STOPPED'] = 'Zadnjič ste ustavili obdelavo pri post_id %s (%s obdelanih objav) na %s.';
$lang['INFO_PROCESSING_ABORTED'] = 'Zadnjič ste prekinili obdelavo pri post_id %s (%s obdelanih objav) na %s.';
$lang['INFO_PROCESSING_ABORTED_SOON'] = 'Prosimo, počakajte nekaj minut, preden nadaljujete...';
$lang['INFO_PROCESSING_FINISHED'] = 'Uspešno ste zaključili obdelavo (%s obdelanih objav) na %s.';
$lang['INFO_PROCESSING_FINISHED_NEW'] = 'Uspešno ste zaključili obdelavo pri post_id %s (%s obdelanih objav) na %s,<br />ampak je bilo %s novih objav po tem datumu.';

// Progress screen
$lang['REBUILD_SEARCH_PROGRESS'] = 'Obnovo Iskanje Napredek';

$lang['PROCESSED_POST_IDS'] = 'Obdelovali post id : %s - %s';
$lang['TIMER_EXPIRED'] = 'Časovnik veljavnosti na %s sekund. ';
$lang['CLEARED_SEARCH_TABLES'] = 'Izbrisani, iskalne tabele. ';
$lang['DELETED_POSTS'] = '%s objav(e) so bili izbrisani od vaših uporabnikov med obdelavo.';
$lang['PROCESSING_NEXT_POSTS'] = 'Obdelava naslednjega %s post(-ov). Prosimo, počakajte... ';
$lang['ALL_SESSION_POSTS_PROCESSED'] = 'Obdelujejo vseh delovnih mest v trenutni seji.';
$lang['ALL_POSTS_PROCESSED'] = 'Vseh delovnih mest, ki so bili predelani uspešno.';
$lang['ALL_TABLES_OPTIMIZED'] = 'Vse iskalne tabele so bile optimizirane uspešno.';

$lang['PROCESSING_POST_DETAILS'] = 'Obdelava post';
$lang['CURRENT_SESSION'] = 'Trenutno Sejo';
$lang['TOTAL'] = 'Skupaj';

$lang['PROCESS_DETAILS'] = 'iz <b>%s</b> do <b>%s</b> (od skupaj <b>%s</b>)';
$lang['PERCENT_COMPLETED'] = '%s %% končano';

$lang['PROCESSING_TIME_DETAILS'] = 'Podrobnosti trenutne seje';
$lang['TIME_LAST_POSTS'] = 'Zadnji %s post(e) ';
$lang['TIME_FROM_THE_BEGINNING'] = 'Od začetka';
$lang['TIME_AVERAGE'] = 'Povprečno na cikel';
$lang['TIME_ESTIMATED'] = 'Ocenjeno, dokler se ne konča.';

$lang['SIZE_ESTIMATED'] = 'Ocenjene po zaključku.';
$lang['SIZE_SEARCH_TABLES'] = 'Velikost iskalnih tabel.';

$lang['POSTS_LAST_CYCLE'] = 'Obdelani post(i) v zadnjem ciklu.';

$lang['INFO_ESTIMATED_VALUES'] = '(*) Vse ocenjene vrednosti so izračunane približno.<br />Na podlagi trenutno končanih odstotkov in morda ne predstavljajo dejanskih končnih vrednosti.<br />Ko se dokončan odstotek povečuje, se bodo ocenjene vrednosti približale dejanskim.';

$lang['CLICK_RETURN_REBUILD_SEARCH'] = 'Kliknite %shere%s, da se vrnete za Obnovo Iskanje';
$lang['REBUILD_SEARCH_ABORTED'] = 'Obnova iskanja prekinjena na post_id %s.<br /><br />Če ste prekinili, medtem ko je bila obdelava v teku, morate čakati nekaj minut, preden ponovno zaženete obnovo iskanja, da se lahko konča zadnji cikel.';
$lang['WRONG_INPUT'] = 'Ste vnesli nekatere napačne vrednosti. Prosimo, preverite vaš vnos in poskusite znova.';

// Buttons
$lang['PROCESSING'] = 'Obdelava...';
$lang['FINISHED'] = 'Končano.';

$lang['BOT_TOPIC_MOVED_FROM_TO'] = 'Tema je bila prestavljena iz foruma [b]%s[/b] v forum [b]%s[/b].[br][b]Razlog za premik:[/b] %s[br][br]%s';
$lang['BOT_MESS_SPLITS'] = 'Temo je bilo razdeljeno. Novo temo - [b]%s[/b][br][br]%s';
$lang['BOT_TOPIC_SPLITS'] = 'Temo je bilo razdeljeno iz [b]%s[/b][br][br]%s';

$lang['CALLSEED'] = 'Pokličite seederje';
$lang['CALLSEED_EXPLAIN'] = 'Obvesti seederje z zahtevo, naj nadaljujejo seedanje te izdaje';
$lang['CALLSEED_SUBJECT'] = 'Potrebna pomoč pri seedanju: %s';
$lang['CALLSEED_TEXT'] = 'Pozdravljeni![br]Vaša pomoč je potrebna pri izdaji [url=%s]%s[/url][br]Če želite pomagati, a ste že izbrisali torrent datoteko, jo lahko prenesete [url=%s]tukaj[/url][br][br]Vaša pomoč bi bila zelo cenjena!';
$lang['CALLSEED_MSG_OK'] = 'Zahteva je bila poslana vsem, ki so prenesli to izdajo';
$lang['CALLSEED_MSG_SPAM'] = 'Zahteva je bila pred kratkim že poslana (morda ne s strani vas).<br /><br />Naslednjo zahtevo boste lahko poslali <b>%s</b>.';
$lang['CALLSEED_HAVE_SEED'] = 'Tema ne potrebuje pomoči (<b>Seeders:</b> %d).';

$lang['LOG_ACTION']['LOG_TYPE'] = [
    'mod_topic_delete' => 'Tema:<br /> <b>izbrisano</b>.',
    'mod_topic_move' => 'Tema:<br /> <b>premaknjeno</b>.',
    'mod_topic_lock' => 'Tema:<br /> <b>zaprito</b>.',
    'mod_topic_unlock' => 'Tema:<br /> <b>odprto</b>.',
    'mod_topic_split' => 'Tema:<br /> <b>razdeljeno</b>.',
    'mod_topic_set_downloaded' => 'Tema:<br /> <b>nastavljena na preneseno</b>.',
    'mod_topic_unset_downloaded' => 'Tema:<br /> <b>nastavljena kot ni prenesena</b>.',
    'mod_topic_change_tor_status' => 'Tema:<br /> <b>spremenjen status torrenta</b>.',
    'mod_topic_change_tor_type' => 'Tema:<br /> <b>spremenjena vrsta torrenta</b>.',
    'mod_topic_tor_unregister' => 'Tema:<br /> <b>torrent ni več registriran</b>.',
    'mod_topic_tor_register' => 'Tema:<br /> <b>torrent je registriran</b>.',
    'mod_topic_tor_delete' => 'Tema:<br /> <b>torrent izbrisan</b>.',
    'mod_topic_renamed' => 'Tema:<br /> <b>preimenovan</b>.',
    'mod_topic_poll_started' => 'Tema:<br /> <b>anketa začeta</b>.',
    'mod_topic_poll_finished' => 'Tema:<br /> <b>anketa končana</b>.',
    'mod_topic_poll_deleted' => 'Tema:<br /> <b>anketa izbrisana</b>.',
    'mod_topic_poll_added' => 'Tema:<br /> <b>anketa dodana</b>.',
    'mod_topic_poll_edited' => 'Tema:<br /> <b>anketa urejena</b>.',
    'mod_post_delete' => 'Prispevek:<br /> <b>izbrisan</b>',
    'mod_post_pin' => 'Prispevek:<br /> <b>priklenjen</b>',
    'mod_post_unpin' => 'Prispevek:<br /> <b>ni pritrjen</b>',
    'adm_user_delete' => 'Uporabnik:<br /> <b>izbrisan</b>',
    'adm_user_ban' => 'Uporabnik:<br /> <b>prepovedan</b>',
    'adm_user_unban' => 'Uporabnik:<br /> <b>odprava prepovedi</b>',
];

$lang['ACTS_LOG_ALL_ACTIONS'] = 'Vsa dejanja,';
$lang['ACTS_LOG_SEARCH_OPTIONS'] = 'Dnevnik dejanj: možnosti iskanja';
$lang['ACTS_LOG_FORUM'] = 'Forum';
$lang['ACTS_LOG_ACTION'] = 'Dejanje';
$lang['ACTS_LOG_LOGS_FROM'] = 'Dnevniki iz ';
$lang['ACTS_LOG_FIRST'] = 'začenši z';
$lang['ACTS_LOG_DAYS_BACK'] = 'dni nazaj';
$lang['ACTS_LOG_TOPIC_MATCH'] = 'Tekma teme naslov';
$lang['ACTS_LOG_SORT_BY'] = 'Razvrsti po';
$lang['ACTS_LOG_LOGS_ACTION'] = 'Dejanje';
$lang['ACTS_LOG_USERNAME'] = 'Uporabniško ime';
$lang['ACTS_LOG_TIME'] = 'Čas';
$lang['ACTS_LOG_INFO'] = 'Info';
$lang['ACTS_LOG_FILTER'] = 'Filter';
$lang['ACTS_LOG_TOPICS'] = 'Teme:';
$lang['ACTS_LOG_OR'] = 'ali';

$lang['RELEASE'] = 'Sprosti predloge';
$lang['RELEASES'] = 'Izdaji';

$lang['BACK'] = 'Nazaj';
$lang['NEW_RELEASE'] = 'Nova objava';
$lang['NEXT'] = 'Naprej';
$lang['ALL'] = 'Vse';

$lang['TPL_EMPTY_FIELD'] = 'Izpolniti morate polje <b>%s</b>';
$lang['TPL_EMPTY_SEL'] = 'Izbrati morate <b>%s</b>.';
$lang['TPL_NOT_NUM'] = '<b>%s</b> - ni številka.';
$lang['TPL_NOT_URL'] = '<b>%s</b> - URL mora biti https://';
$lang['TPL_NOT_IMG_URL'] = '<b>%s</b> - Mora biti https:// IMG_URL';
$lang['TPL_PUT_INTO_SUBJECT'] = 'vnesite v zadevo';
$lang['TPL_POSTER'] = 'avtor prispevka';
$lang['TPL_REQ_FILLING'] = 'zahteva izpolnitev';
$lang['TPL_NEW_LINE'] = 'nova vrstica';
$lang['TPL_NEW_LINE_AFTER'] = 'nova vrstica po naslovu';
$lang['TPL_NUM'] = 'število';
$lang['TPL_URL'] = 'URL';
$lang['TPL_IMG'] = 'slika';
$lang['TPL_PRE'] = 'pre';
$lang['TPL_SPOILER'] = 'spojler';
$lang['TPL_IN_LINE'] = 'v isti vrstici';
$lang['TPL_HEADER_ONLY'] = 'samo v naslovu';

$lang['SEARCH_INVALID_USERNAME'] = 'Za iskanje je vneseno neveljavno uporabniško ime';
$lang['SEARCH_INVALID_EMAIL'] = 'Za iskanje je bil vnesen neveljaven e-poštni naslov';
$lang['SEARCH_INVALID_IP'] = 'Za iskanje je bil vnesen neveljaven naslov IP';
$lang['SEARCH_INVALID_GROUP'] = 'Za iskanje je vnesena neveljavna skupina';
$lang['SEARCH_INVALID_RANK'] = 'Za iskanje je vnesena neveljavna uvrstitev';
$lang['SEARCH_INVALID_DATE'] = 'Za iskanje je vnesen neveljaven datum';
$lang['SEARCH_INVALID_POSTCOUNT'] = 'Za iskanje je bilo vneseno neveljavno število objav';
$lang['SEARCH_INVALID_USERFIELD'] = 'Neveljni Userfield podatki vnešeni';
$lang['SEARCH_INVALID_LASTVISITED'] = 'Za zadnje obiskano iskanje je vnesen neveljaven datum';
$lang['SEARCH_INVALID_LANGUAGE'] = 'Neveljavna izbrana jezik';
$lang['SEARCH_INVALID_TIMEZONE'] = 'Neveljavna izbrana časovna zona';
$lang['SEARCH_INVALID_MODERATORS'] = 'Neveljavna izbrana forum';
$lang['SEARCH_INVALID'] = 'Neveljavna iskanje';
$lang['SEARCH_INVALID_DAY'] = 'Dan, ki ste ga vnesli, je neveljaven';
$lang['SEARCH_INVALID_MONTH'] = 'Mesec, ki ste ga vnesli, je neveljaven';
$lang['SEARCH_INVALID_YEAR'] = 'Leto, ki ste ga vnesli, je neveljavno';
$lang['SEARCH_FOR_USERNAME'] = 'Iskanje uporabniških imen, ki se ujemajo %s';
$lang['SEARCH_FOR_EMAIL'] = 'Iskanje e-poštnih naslovov, ki se ujemajo %s';
$lang['SEARCH_FOR_IP'] = 'Iskanje IP naslovov, ki se ujemajo %s';
$lang['SEARCH_FOR_DATE'] = 'Iskanje uporabnikov, ki so se pridružili %s %d/%d/%d';
$lang['SEARCH_FOR_GROUP'] = 'Iskanje članov skupine %s';
$lang['SEARCH_FOR_RANK'] = 'Iskanje uporabnikov z nazivom %s';
$lang['SEARCH_FOR_BANNED'] = 'Iskanje prepovedanih uporabnikov';
$lang['SEARCH_FOR_ADMINS'] = 'Iskanje skrbnikov';
$lang['SEARCH_FOR_MODS'] = 'Iskanje moderatorjev';
$lang['SEARCH_FOR_DISABLED'] = 'Iskanje za onemogočene uporabnike';
$lang['SEARCH_FOR_POSTCOUNT_GREATER'] = 'Iskanje uporabnikov z objavo, ki je več kot %d';
$lang['SEARCH_FOR_POSTCOUNT_LESSER'] = 'Iskanje uporabnikov z objavo, ki je manj kot %d';
$lang['SEARCH_FOR_POSTCOUNT_RANGE'] = 'Iskanje uporabnikov z objavo, ki je med %d in %d';
$lang['SEARCH_FOR_POSTCOUNT_EQUALS'] = 'Iskanje uporabnikov z objavo, ki velja %d';
$lang['SEARCH_FOR_USERFIELD_TWITTER'] = 'Išče se uporabnike z ujemanjem Twitter %s.';
$lang['SEARCH_FOR_USERFIELD_WEBSITE'] = 'Iskanje uporabnikov s spletnimi stranmi, ki se ujemajo z %s.';
$lang['SEARCH_FOR_USERFIELD_LOCATION'] = 'Iskanje uporabnikov z Lokacijo, ki se ujemajo %s';
$lang['SEARCH_FOR_USERFIELD_INTERESTS'] = 'Iskanje uporabnikov z njihovimi interesi, ki se ujemajo %s';
$lang['SEARCH_FOR_USERFIELD_OCCUPATION'] = 'Iskanje uporabnikov, ki imajo poklic, ki se ujemajo %s';
$lang['SEARCH_FOR_LASTVISITED_INTHELAST'] = 'Iskanje za uporabnike, ki so obiskali v zadnjih %s';
$lang['SEARCH_FOR_LASTVISITED_AFTERTHELAST'] = 'Iskanje za uporabnike, ki so obiskali po zadnjem %s';
$lang['SEARCH_FOR_LANGUAGE'] = 'Iskanje uporabnikov, ki so določeni %s kot njihov jezik';
$lang['SEARCH_FOR_TIMEZONE'] = 'Iskanje uporabnikov, ki so določeni UTC %s kot svoj časovni pas';
$lang['SEARCH_FOR_MODERATORS'] = 'Iskanje moderatorjev foruma -> %s';
$lang['SEARCH_USERS_ADVANCED'] = 'Napredno iskanje uporabnikov';
$lang['SEARCH_USERS_EXPLAIN'] = 'Ta modul omogoča napredno iskanje uporabnikov na širokem spektru meril. Prosimo, preberite opise pod vsakim poljem, da v celoti razumete vsako možnost iskanja.';
$lang['SEARCH_USERNAME_EXPLAIN'] = 'Tukaj lahko izvedete iskanje uporabniških imen brez upoštevanja velikih in malih črk. Če želite, da se ujema del uporabniškega imena, uporabite * (zvezdico) kot nadomestni znak.';
$lang['SEARCH_EMAIL_EXPLAIN'] = 'Vnesite izraz, da se ujemate z e-poštni naslov uporabnika. To je brez upoštevanja velikih in malih črk. Če želite delno ujemanje, uporabite * (zvezdico) kot nadomestni znak.';
$lang['SEARCH_IP_EXPLAIN'] = 'Poiščite uporabnike po določenem IP naslovu (xxx.xxx.xxx.xxx).';
$lang['SEARCH_USERS_JOINED'] = 'Uporabniki, ki so se pridružili.';
$lang['SEARCH_USERS_LASTVISITED'] = 'Uporabniki, ki so obiskali';
$lang['IN_THE_LAST'] = 'v zadnjih';
$lang['AFTER_THE_LAST'] = 'po zadnjem';
$lang['BEFORE'] = 'Pred';
$lang['AFTER'] = 'Po';
$lang['SEARCH_USERS_JOINED_EXPLAIN'] = 'Iskanje uporabnikov, ki so se pridružili pred ali po določenem datumu. Format datuma je LLLL/MM/DD.';
$lang['SEARCH_USERS_GROUPS_EXPLAIN'] = 'Oglejte si vse člane izbrane skupine.';
$lang['SEARCH_USERS_RANKS_EXPLAIN'] = 'Poglejte si vse uporabnike z izbranim nazivom.';
$lang['BANNED_USERS'] = 'Prepovedani uporabniki.';
$lang['DISABLED_USERS'] = 'Onemogočeni uporabniki.';
$lang['SEARCH_USERS_MISC_EXPLAIN'] = 'Administratorji – vsi uporabniki s skrbniškimi pooblastili; Moderatorji - vsi moderatorji foruma; Prepovedani uporabniki - vsi računi, ki so bili prepovedani na teh forumih; Onemogočeni uporabniki – vsi uporabniki z onemogočenimi računi (bodisi ročno onemogočeni ali nikoli preverjeni svoj e-poštni naslov); Uporabniki z onemogočenimi PM-ji - izbere uporabnike, ki imajo odstranjene pravice do zasebnih sporočil (izvedeno prek upravljanja uporabnikov)';
$lang['POSTCOUNT'] = 'Število objav';
$lang['EQUALS'] = 'Enako';
$lang['GREATER_THAN'] = 'Večja kot';
$lang['LESS_THAN'] = 'Manj kot';
$lang['SEARCH_USERS_POSTCOUNT_EXPLAIN'] = 'Uporabnike lahko iščete glede na vrednost števila objav. Iščete lahko po določeni vrednosti, večji ali manjši od vrednosti ali med dvema vrednostima. Če želite izvesti iskanje po obsegu, izberite "Enako", nato pa začetno in končno vrednost obsega ločite s pomišljajem (-), npr. 10-15';
$lang['USERFIELD'] = 'Uporabniško polje.';
$lang['SEARCH_USERS_USERFIELD_EXPLAIN'] = 'Iskanje uporabnikov, ki temelji na različnih profilnih poljih. Nadomestni znaki so podprti z zvezdico (*).';
$lang['SEARCH_USERS_LASTVISITED_EXPLAIN'] = 'Uporabnike lahko iščete glede na njihovo zadnjo prijavo, ki jo uporabljate v tej opciji iskanja.';
$lang['SEARCH_USERS_LANGUAGE_EXPLAIN'] = 'To bo prikazalo uporabnike, ki so v svojem profilu izbrali določen jezik.';
$lang['SEARCH_USERS_TIMEZONE_EXPLAIN'] = 'Uporabniki, ki so v svojem profilu izbrali določen časovni pas.';
$lang['MODERATORS_OF'] = 'Moderatorji od';
$lang['SEARCH_USERS_MODERATORS_EXPLAIN'] = 'Poiščite uporabnike z dovoljenji za moderiranje določenega foruma. Dovoljenja za moderiranje so prepoznana po uporabniških dovoljenjih ali po tem, da ste v skupini s pravimi dovoljenji skupine.';

$lang['SEARCH_USERS_NEW'] = '%s je prineslo %d rezultatov. Opravljanje <a href="%s">drugega iskanja</a>.';
$lang['BANNED'] = 'Prepovedan';
$lang['NOT_BANNED'] = 'Ni Prepovedan';
$lang['SEARCH_NO_RESULTS'] = 'Ni uporabnikov, ki se ujemajo z vašimi izbranimi merili. Prosimo, poskusite z drugim iskanjem. Če iščete po uporabniških imenih ali e-poštnih naslovih, za delno ujemanje morate uporabiti nadomestni znak * (zvezdico).';
$lang['ACCOUNT_STATUS'] = 'Status Računa';
$lang['SORT_OPTIONS'] = 'Razvrsti možnosti:';
$lang['LAST_VISIT'] = 'Zadnji obisk.';
$lang['DAY'] = 'Dan';

$lang['POST_EDIT_CANNOT'] = 'Žal mi je, ampak ne morete urejati prispevkov';
$lang['FORUMS_IN_CAT'] = 'forumi v tej kategoriji.';

$lang['MC_TITLE'] = 'Komentar o moderaciji';
$lang['MC_LEGEND'] = 'Vnesite komentar';
$lang['MC_FAQ'] = 'Vneseno besedilo bo prikazano pod tem sporočilu';
$lang['MC_COMMENT_PM_SUBJECT'] = '%s v vaše sporočilo';
$lang['MC_COMMENT_PM_MSG'] = "Pozdravljeni, [b]%s[/b]\nModerator je zapustil komentar na vašem prispevku [url=%s][b]%s[/b][/url][quote]\n%s\n[/quote]";
$lang['MC_COMMENT'] = [
    0 => [
        'title' => '',
        'type' => 'Izbriši komentar',
    ],
    1 => [
        'title' => 'Komentar iz %s',
        'type' => 'Komentar.',
    ],
    2 => [
        'title' => 'Informacije iz %s',
        'type' => 'Informacije',
    ],
    3 => [
        'title' => 'Opozorilo iz %s',
        'type' => 'Opozorilo',
    ],
    4 => [
        'title' => 'Kršitev iz %s',
        'type' => 'Kršitev',
    ],
];

$lang['SITEMAP'] = 'Kazalo';
$lang['SITEMAP_ADMIN'] = 'Upravljanje kazalo';
$lang['SITEMAP_CREATED'] = 'Kazalo ustvarjeno.';
$lang['SITEMAP_AVAILABLE'] = 'in je na voljo na';
$lang['SITEMAP_NOT_CREATED'] = 'Kazalo še ni ustvarjeno.';
$lang['SITEMAP_OPTIONS'] = 'Možnosti';
$lang['SITEMAP_CREATE'] = 'Ustvarite / posodobite kazalo';
$lang['SITEMAP_WHAT_NEXT'] = 'Kaj je naslednji korak?';
$lang['SITEMAP_GOOGLE_1'] = 'Registrirajte svoje mesto na <a href="https://www.google.com/webmasters/" target="_blank">Google Webmaster</a> z uporabo Google računa.';
$lang['SITEMAP_GOOGLE_2'] = '<a href="https://www.google.com/webmasters/tools/sitemap-list" target="_blank">Dodajte zemljevid strani</a> spletnega mesta, ki ste ga registrirali.';
$lang['SITEMAP_YANDEX_1'] = 'Registrirajte svoje mesto na <a href="https://webmaster.yandex.ru/sites/" target="_blank">Yandex Webmaster</a> uporabo vašega Yandex račun.';
$lang['SITEMAP_YANDEX_2'] = '<a href="https://webmaster.yandex.ru/site/map.xml" target="_blank">Add sitemap</a> spletnega mesta ste se registrirali.';
$lang['SITEMAP_BING_1'] = 'Registrirajte svoje mesto na <a href="https://www.bing.com/webmaster/" target="_blank">Bing Webmaster</a> s svojim microsoftovim računom.';
$lang['SITEMAP_BING_2'] = 'Dodajte zemljevid spletnega mesta, ki ste ga registrirali v nastavitvah.';
$lang['SITEMAP_ADD_TITLE'] = 'Dodatne strani za sitemap';
$lang['SITEMAP_ADD_PAGE'] = 'Dodatne strani';
$lang['SITEMAP_ADD_EXP_1'] = 'Lahko določite dodatne strani na svoji spletni strani, ki jih je treba vključiti v dokument sitemap, ki ga ustvarjate.';
$lang['SITEMAP_ADD_EXP_2'] = 'Vsak sklic mora začeti z http(s):// in novo vrstico!';

$lang['FORUM_MAP'] = 'Zemljevid forumov.';
$lang['ATOM_FEED'] = 'Krmo';
$lang['ATOM_ERROR'] = 'Napaka pri generiranju krme.';
$lang['ATOM_SUBSCRIBE'] = 'Naročite krmo.';
$lang['ATOM_UPDATED'] = 'Posodobljeno.';
$lang['ATOM_GLOBAL_FEED'] = 'Globalni vir za vse forume.';

$lang['HASH_INVALID'] = 'Hash %s je neveljaven.';
$lang['HASH_NOT_FOUND'] = 'Sprostitev s hash %s ni bila najdena.';

$lang['TERMS_EMPTY_TEXT'] = '[align=center]Besedilo te strani je bilo urejeno na: [url]%s[/url]. To vrstico lahko vidijo le skrbniki.[/align]';
$lang['TERMS_EXPLAIN'] = 'Na tej strani lahko določite besedilo osnovna pravila virov, ki se prikažejo uporabnikom.';
$lang['TERMS_UPDATED_SUCCESSFULLY'] = 'Pogoji so bili uspešno posodobljeni';
$lang['CLICK_RETURN_TERMS_CONFIG'] = '%sKliknite tukaj za vrnitev na ureditev pogojev%s';

$lang['TR_STATS'] = [
    0 => 'neaktivne uporabnike v 30 dneh',
    1 => 'neaktivne uporabnike za 90 dni',
    2 => 'srednje velike distribucije na sledilniku',
    3 => 'koliko skupno rokov na sledilniku.',
    4 => 'koliko živih rok (obstaja vsaj 1 LED)?',
    5 => 'koliko rok, kjer, so zasejemi več kot 5 semen.',
    6 => 'koliko od nas uploaders (tisti, ki je napolnjena vsaj 1 strani)',
    7 => 'koliko naložnikov v zadnjih 30 dneh.',
];

$lang['TORRENT_STATS_TITLE'] = 'Statistika torrentov';
$lang['TRACKER_STATS_TITLE'] = 'Statistika trackerja';
$lang['TORRENTS'] = 'Torrenti';
$lang['PEERS'] = 'Sodelujoči';
$lang['CLIENTS'] = 'Odjemalci';

$lang['NEW_POLL_START'] = 'Anketa omogočeno';
$lang['NEW_POLL_END'] = 'Anketa končana';
$lang['NEW_POLL_ENDED'] = 'Ta raziskava je že končana.';
$lang['NEW_POLL_DELETE'] = 'Anketa izbrisana.';
$lang['NEW_POLL_ADDED'] = 'Anketa dodana.';
$lang['NEW_POLL_ALREADY'] = 'Tema že ima anketo.';
$lang['NEW_POLL_RESULTS'] = 'Anketa spremenjena in stare rezultate so izbrisali.';
$lang['NEW_POLL_VOTES'] = 'Morate vnesti pravilne možnosti odgovora (minimalno 2, maksimalna je %s).';
$lang['NEW_POLL_DAYS'] = 'Čas ankete (%s dni od trenutka ustanovitve teme) se je že končal.';
$lang['NEW_POLL_U_NOSEL'] = 'Niste izbrali tega glasovanja.';
$lang['NEW_POLL_U_CHANGE'] = 'Za urejanje ankete.';
$lang['NEW_POLL_U_EDIT'] = 'Spremenite anketo (stare rezultate bodo izbrisane).';
$lang['NEW_POLL_U_VOTED'] = 'Vsi so glasovali.';
$lang['NEW_POLL_U_START'] = 'Omogočite anketo.';
$lang['NEW_POLL_U_END'] = 'Zaključek ankete.';
$lang['NEW_POLL_M_TITLE'] = 'Naslov ankete.';
$lang['NEW_POLL_M_VOTES'] = 'Možnosti.';
$lang['NEW_POLL_M_EXPLAIN'] = 'Vsaka vrstica ustreza en odgovor (maks.';

$lang['UPLOAD_ERROR_COMMON_DISABLED'] = 'Nalaganje datotek je onemogočeno';
$lang['UPLOAD_ERROR_COMMON'] = 'Napaka pri nalaganju datotek.';
$lang['UPLOAD_ERROR_SIZE'] = 'Naložena datoteka presega največjo velikost %s.';
$lang['UPLOAD_ERROR_FORMAT'] = 'Neveljavna vrsta datoteke za slike.';
$lang['UPLOAD_ERROR_DIMENSIONS'] = 'Dimenzije slike presegajo največjo dovoljeno %sx%s pik';
$lang['UPLOAD_ERROR_NOT_IMAGE'] = 'Naložena datoteka ni slika.';
$lang['UPLOAD_ERROR_NOT_ALLOWED'] = 'Razširitev %s za nalaganje ni dovoljena.';
$lang['UPLOAD_ERRORS'] = [
    UPLOAD_ERR_INI_SIZE => 'Presegli ste največjo dovoljena velikost datoteke za strežnik.',
    UPLOAD_ERR_FORM_SIZE => 'Presegli ste največjo velikost za nalaganje datotek.',
    UPLOAD_ERR_PARTIAL => 'Datoteka je bila delno prenesena.',
    UPLOAD_ERR_NO_FILE => 'Datoteka ni bila naložena.',
    UPLOAD_ERR_NO_TMP_DIR => 'Začasni imenik ni bil najden.',
    UPLOAD_ERR_CANT_WRITE => 'Napaka pri pisanju.',
    UPLOAD_ERR_EXTENSION => 'Prenos je bil ustavljen zaradi razširitve.',
];

// Captcha
$lang['CAPTCHA'] = 'Preverite, da niste robot';
$lang['CAPTCHA_WRONG'] = 'Niste mogli potrditi, da niste robot.';
$lang['CAPTCHA_SETTINGS'] = '<h2>Captcha ni popolnoma konfigurirana</h2><p>Generirajte ključe z uporabo nadzorne plošče vaše captcha storitve, nato jih morate vnesti v datoteko config/config.php.</p>';
$lang['CAPTCHA_OCCURS_BACKGROUND'] = 'Verifikacija CAPTCHA se izvaja v ozadju';

// Sending email
$lang['REPLY_TO'] = 'Odgovori na';
$lang['EMAILER_SUBJECT'] = [
    'EMPTY' => 'Brez zadeve',
    'GROUP_ADDED' => 'Dodani ste v skupino uporabnikov',
    'GROUP_APPROVED' => 'Vaša zahteva za pridružitev uporabniški skupini je bila odobrena',
    'GROUP_REQUEST' => 'Zahteva za pridružitev vaši uporabniški skupini',
    'PRIVMSG_NOTIFY' => 'Novo zasebno sporočilo',
    'TOPIC_NOTIFY' => 'Obvestilo o odgovoru v temi - %s',
    'USER_ACTIVATE' => 'Ponovna aktivacija računa',
    'USER_ACTIVATE_PASSWD' => 'Potrjujem novo geslo',
    'USER_WELCOME' => 'Dobrodošli na spletnem mestu %s',
    'USER_WELCOME_INACTIVE' => 'Dobrodošli na spletnem mestu %s',
];

// Null ratio
$lang['BT_NULL_RATIO'] = 'Ponastavi razmerje';
$lang['BT_NULL_RATIO_NONE'] = 'Nimate razmerja';
$lang['BT_NULL_RATIO_ALERT'] = "Pozor!\n\nAli ste prepričani, da želite ponastaviti svoje razmerje?";
$lang['BT_NULL_RATIO_AGAIN'] = 'Že ste ponastavili svoje razmerje!';
$lang['BT_NULL_RATIO_NOT_NEEDED'] = 'Imate dobro razmerje. Ponastavitev je možna le z razmerjem, manjšim od %s';
$lang['BT_NULL_RATIO_SUCCESS'] = 'Razmerje je bilo uspešno ponastavljeno!';

// Releaser stats
$lang['RELEASER_STAT_SIZE'] = 'Skupna velikost:';
$lang['RELEASER_STAT'] = 'Statistika izdajatelja:';
$lang['RELEASER_STAT_SHOW'] = 'Prikaži statistiko';

// Spam protection
$lang['REGISTRATION_DENIED'] = 'Registracija zavrnjena. Prosimo, obrnite se na skrbnika, če menite, da gre za napako.';
$lang['POST_SPAM_DENIED'] = 'Vaše sporočilo je bilo zaznano kot neželena pošta in ga ni mogoče objaviti.';
$lang['PM_SPAM_DENIED'] = 'Vaše sporočilo je bilo zaznano kot neželena pošta in ga ni mogoče poslati.';

// Spam log (admin)
$lang['SPAM_LOG'] = 'Dnevnik neželene pošte';
$lang['SPAM_LOG_DESC'] = 'Ta dnevnik beleži vse poskuse registracije in oddaje vsebin, ki jih je označil sistem zaščite pred neželeno pošto. <b>Zavrnjeno</b> &mdash; dejanje je bilo popolnoma blokirano (registracija zavrnjena, objava/zasebno sporočilo ni bilo poslano). <b>Moderirano</b> &mdash; pri registracijah je bil račun ustvarjen, vendar zahteva aktivacijo preko e-pošte; pri vsebinah je bila objava/zasebno sporočilo dopustno, vendar označeno kot sumljivo.';
$lang['SPAM_LOG_CHECK_TYPE'] = 'Vrsta preverjanja';
$lang['SPAM_LOG_CHECK_TYPE_DESC_REG'] = 'registracija &mdash; nova prijava uporabnika';
$lang['SPAM_LOG_CHECK_TYPE_DESC_CONTENT'] = 'vsebina &mdash; objava ali zasebno sporočilo';
$lang['SPAM_LOG_DECISION'] = 'Odločitev';
$lang['SPAM_LOG_PROVIDER'] = 'Ponudnik';
$lang['SPAM_LOG_REASON'] = 'Razlog.';
$lang['SPAM_LOG_RESPONSE_TIME'] = 'Čas (ms)';
$lang['SPAM_LOG_ALL'] = 'Vse';
$lang['SPAM_LOG_DETAILS'] = 'Podrobnosti';
$lang['SPAM_LOG_NO_RECORDS'] = 'Zapisov dnevnika neželene pošte ni bilo najdenih';
$lang['SPAM_LOG_TOTAL'] = 'Skupno zapisov';
$lang['SPAM_LOG_DENIED_COUNT'] = 'Zavrnjeno';
$lang['SPAM_LOG_MODERATED_COUNT'] = 'Moderirano';

// Marketplace / Modifications
$lang['MARKETPLACE'] = 'Tržnica';
$lang['MODIFICATIONS_LIST'] = 'Spremembe';
$lang['MODS_VERSION'] = 'Različica';
$lang['MODS_DOWNLOADS'] = 'Prenosi.';
$lang['MODS_RATING'] = 'Ocena';
$lang['MODS_ACTIONS'] = 'Dejanja';
$lang['MODS_AUTHOR'] = 'Avtor';
$lang['MODS_CATEGORY'] = 'Kategorija';
$lang['MODS_LAST_UPDATED'] = 'Zadnja Posodobitev';
$lang['MODS_TOTAL'] = 'Skupaj';
$lang['MODS_NO_RESOURCES'] = 'Ni najdenih modifikacij.';
$lang['MODS_INSTALL'] = 'Namesti';
$lang['MODS_INSTALL_SOON'] = 'Funkcija namestitve bo kmalu na voljo';
$lang['MODS_ALL_CATEGORIES'] = 'Vse kategorije';
$lang['MODS_FREE'] = 'Brezplačno';
$lang['MODS_PAID'] = 'Plačano';
$lang['MODS_THEMES'] = 'Teme';
$lang['MODS_LANGPACKS'] = 'Jezikovni paketi';
$lang['MODS_API_ERROR'] = 'Ni bilo mogoče naložiti modifikacij: %s';
$lang['MODS_API_UNAVAILABLE'] = 'Strežnik za modifikacije je začasno nedosegljiv.';
$lang['MODS_DESCRIPTION'] = 'Ta stran prikazuje vse vire, objavljene na uradnem forumu TorrentPier. Namestitev z enim klikom bo na voljo v prihodnji posodobitvi — za zdaj uporabite to stran kot razstavo virov.';
$lang['MODS_REVIEW'] = 'ocena';
$lang['MODS_REVIEWS'] = 'ocene';

// Two-factor authentication
$lang['TWO_FACTOR_AUTH'] = 'Dvofaktorska overitev';
$lang['TWO_FACTOR_VERIFICATION'] = 'Dvofaktorska overitev';
$lang['TWO_FACTOR_SECURITY'] = 'Varnost';
$lang['TWO_FACTOR_AUTH_EXPLAIN'] = 'Dodajte dodatno plast varnosti svojemu računu z uporabo TOTP aplikacije za overjanje';
$lang['TWO_FACTOR_ENABLE'] = 'Omogoči 2FA';
$lang['TWO_FACTOR_DISABLE'] = 'Onemogoči 2FA';
$lang['TWO_FACTOR_ENABLED'] = 'Omogočeno';
$lang['TWO_FACTOR_DISABLED'] = 'Onemogočeno.';
$lang['TWO_FACTOR_SETUP'] = 'Nastavite dvofaktorsko overjanje';
$lang['TWO_FACTOR_SETUP_EXPLAIN'] = 'Skenirajte to QR kodo z aplikacijo za overjanje (Google Authenticator, Authy itd.) ali spodaj vnesite ključ ročno.';
$lang['TWO_FACTOR_MANUAL_ENTRY'] = 'Ali ročno vnesite ta ključ';
$lang['TWO_FACTOR_ENTER_CODE'] = 'Vnesite 6-mestno kodo iz vaše aplikacije za overjanje';
$lang['TWO_FACTOR_CODE'] = 'Overitvena koda';
$lang['TWO_FACTOR_VERIFY'] = 'Preveri';
$lang['TWO_FACTOR_VERIFY_AND_ENABLE'] = 'Preveri in omogoči';
$lang['TWO_FACTOR_INVALID_CODE'] = 'Neveljavna koda. Poskusite znova.';
$lang['TWO_FACTOR_SESSION_EXPIRED'] = 'Seja preverjanja je potekla. Prosimo, prijavite se znova.';
$lang['TWO_FACTOR_SETUP_EXPIRED'] = 'Seja nastavitve je potekla. Poskusite znova.';
$lang['TWO_FACTOR_ALREADY_ENABLED'] = 'Dvofaktorsko overjanje je že omogočeno na vašem računu.';
$lang['TWO_FACTOR_NOT_ENABLED'] = 'Dvofaktorsko overjanje ni omogočeno na vašem računu.';
$lang['TWO_FACTOR_FEATURE_DISABLED'] = 'Dvofaktorsko overjanje ni na voljo';
$lang['TWO_FACTOR_ENABLED_SUCCESS'] = 'Dvofaktorsko overjanje je bilo omogočeno';
$lang['TWO_FACTOR_DISABLED_SUCCESS'] = 'Dvofaktorsko overjanje je bilo onemogočeno';
$lang['TWO_FACTOR_RECOVERY_CODES'] = 'Kode za obnovitev';
$lang['TWO_FACTOR_RECOVERY_WARNING'] = 'Shranjujte te kode za obnovitev na varno mesto. Če izgubite napravo za overjanje, lahko s temi kodami dostopate do računa.';
$lang['TWO_FACTOR_RECOVERY_EXPLAIN'] = 'Vsaka koda je lahko uporabljena samo enkrat. Shranjujte jih ločeno od vaše naprave.';
$lang['TWO_FACTOR_RECOVERY_CODE'] = 'Koda za obnovitev';
$lang['TWO_FACTOR_ENTER_RECOVERY'] = 'Vnesite eno od svojih kod za obnovitev';
$lang['TWO_FACTOR_USE_RECOVERY'] = 'Namesto tega uporabite kodo za obnovitev';
$lang['TWO_FACTOR_USE_TOTP'] = 'Namesto tega uporabite kodo aplikacije za overjanje';
$lang['TWO_FACTOR_INVALID_RECOVERY'] = 'Neveljavna koda za obnovitev. Poskusite znova.';
$lang['TWO_FACTOR_RECOVERY_CODE_USED'] = 'Koda za obnovitev je bila uporabljena. Ostalo vam je {count, plural, one {# koda} two {# kodi} few {# kode} other {# kod}}.';
$lang['TWO_FACTOR_REMAINING_CODES'] = 'Imate še {count, plural, one {# kodo} two {# kodi} few {# kode} other {# kod}} za obnovitev';
$lang['TWO_FACTOR_DOWNLOAD_CODES'] = 'Prenesi kot tekstovno datoteko';
$lang['TWO_FACTOR_RECOVERY_EXPIRED'] = 'Prikaz kod za obnovitev je potekel. Vaše kode so še vedno aktivne.';
$lang['TWO_FACTOR_DOWNLOAD_EXPIRED'] = 'Povezava za prenos je potekla.';
$lang['TWO_FACTOR_DISABLE_WARNING'] = 'To bo onemogočilo dvofaktorsko overjanje na vašem računu. Za potrditev boste morali vnesti trenutno overitveno kodo.';
$lang['TWO_FACTOR_DISABLE_CONFIRM'] = 'Onemogoči dvofaktorsko overjanje';
$lang['TWO_FACTOR_REGENERATE'] = 'Ponovno generiraj kode za obnovitev';
$lang['TWO_FACTOR_REGENERATE_WARNING'] = 'To bo preklicalo vse obstoječe kode za obnovitev in ustvarilo nove.';
$lang['TWO_FACTOR_REGENERATE_CONFIRM'] = 'Ponovno generiraj kode';
$lang['TWO_FACTOR_ADMIN_DISABLE'] = 'Onemogoči 2FA uporabniku';
$lang['TWO_FACTOR_ADMIN_DISABLE_CONFIRM'] = 'Ste prepričani, da želite onemogočiti dvofaktorsko overjanje za tega uporabnika?';
$lang['TWO_FACTOR_TOO_MANY_ATTEMPTS'] = 'Preveč neuspelih poskusov. Poskusite znova čez {count, plural, one {# minuto} two {# minuti} few {# minute} other {# minut}}.';
$lang['TWO_FACTOR_INVALID_TOKEN'] = 'Neveljaven ali potekel žeton.';
$lang['TWO_FACTOR_DONE'] = 'Končano';
$lang['TWO_FACTOR_RECOVERY_ONETIME'] = 'To stran si lahko ogledate le enkrat. Če jo zapustite, teh kod ne boste mogli več videti.';
$lang['TWO_FACTOR_ADMIN_DISABLE_SELF'] = 'Svojega dvofaktorskega overjanja ne morete onemogočiti iz administratorskega vmesnika. Namesto tega uporabite nastavitve svojega profila.';

// Dark mode
$lang['DARK_MODE_TOGGLE'] = 'Preklopi temni način';
