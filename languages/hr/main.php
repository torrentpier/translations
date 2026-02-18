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
$lang['HIDE_CAT'] = 'Sakriti kategorije';
$lang['HIDE_CAT_MESS'] = 'Neke su kategorije skrivene prilagođenim opcijama prikaza';
$lang['SHOW_ALL'] = 'Pokaži sve';
$lang['TOPIC'] = 'Tema';
$lang['TOPICS'] = 'Teme';
$lang['TOPICS_SHORT'] = 'Teme';
$lang['REPLIES'] = 'Odgovori';
$lang['REPLIES_SHORT'] = 'Odgovori';
$lang['VIEWS'] = 'Pogledi';
$lang['POSTS'] = 'Objave';
$lang['POSTS_SHORT'] = 'Objave';
$lang['POSTED'] = 'Objavljeno';
$lang['USERNAME'] = 'Korisničko ime';
$lang['PASSWORD'] = 'Lozinka';
$lang['PASSWORD_SHOW_BTN'] = 'Prikaži lozinku';
$lang['EMAIL'] = 'E-mail';
$lang['PM'] = 'PM';
$lang['AUTHOR'] = 'Autor';
$lang['MESSAGE'] = 'Poruka';
$lang['TORRENT'] = 'Torrent';
$lang['PERMISSIONS'] = 'Dozvole';
$lang['TYPE'] = 'Tip';

$lang['1_DAY'] = '1 dan';
$lang['7_DAYS'] = '7 dana';
$lang['2_WEEKS'] = '2 tjedna';
$lang['1_MONTH'] = '1 mjesec';
$lang['3_MONTHS'] = '3 mjeseca';
$lang['6_MONTHS'] = '6 mjeseci';
$lang['1_YEAR'] = '1 godina';

$lang['GO'] = 'Idite';
$lang['SUBMIT'] = 'Potvrdi';
$lang['RESET'] = 'Otkazati';
$lang['CANCEL'] = 'Poništi';
$lang['PREVIEW'] = 'Pregled';
$lang['AJAX_PREVIEW'] = 'Brzi Pregled';
$lang['CONFIRM'] = 'Potvrdi';
$lang['YES'] = 'Da';
$lang['NO'] = 'Ne';
$lang['ENABLED'] = 'Uključen';
$lang['DISABLED'] = 'Isključen';
$lang['ERROR'] = 'Greška';
$lang['SELECT_ACTION'] = 'Odaberite akciju';
$lang['CLEAR'] = 'Obriši';
$lang['MOVE_TO_TOP'] = 'Premjesti na vrh';
$lang['UNKNOWN'] = 'Nepoznat';
$lang['COPY_TO_CLIPBOARD'] = 'Kopiraj u međuspremnik';
$lang['NO_ITEMS'] = 'Ovdje nema podataka...';
$lang['PLEASE_TRY_AGAIN'] = 'Pokušajte ponovo nakon nekoliko sekundi...';

$lang['NEXT_PAGE'] = 'Dalje';
$lang['PREVIOUS_PAGE'] = 'Prethodni';
$lang['SHORT_PAGE'] = 'stranica';
$lang['GOTO_PAGE'] = 'Idi na stranicu';
$lang['GOTO_SHORT'] = 'Stranica';
$lang['JOINED'] = 'Pridružio se';
$lang['LONGEVITY'] = 'Registriran od';
$lang['IP_ADDRESS'] = 'IP adresa';

$lang['SELECT_FORUM'] = 'Odaberite forum';
$lang['VIEW_LATEST_POST'] = 'Pogledajte zadnji post';
$lang['VIEW_NEWEST_POST'] = 'Vidjeti';
$lang['PAGE_OF'] = 'Stranica <b>%d</b> od <b>%s</b>';

$lang['TWITTER'] = 'X (Twitter)';
$lang['TWITTER_ERROR'] = 'Unijeli ste netočan prijavu na X (Twitter)';

$lang['POST_NEW_TOPIC'] = 'Post nove teme';
$lang['POST_NEW_RELEASE'] = 'Post novo izdanje';
$lang['REPLY_TO_TOPIC'] = 'Odgovor na temu';

$lang['CLICK_RETURN_TOPIC'] = 'Kliknite %sOvdje%s da se vratite na temu'; // %s's here are for uris, do not remove!
$lang['CLICK_RETURN_FORUM'] = 'Kliknite %sOvdje%s da se vratite na forum';
$lang['CLICK_RETURN_MODCP'] = 'Kliknite %sOvdje%s da biste se vratili na upravljačkoj ploči moderatora';

$lang['ADMIN_PANEL'] = 'Idite na Administrativnu ploču';
$lang['ALL_CACHE_CLEARED'] = 'Cache je očišćen';
$lang['ALL_TEMPLATE_CLEARED'] = 'Predložak cachea je očišćen';
$lang['DATASTORE_CLEARED'] = 'Trezor je bio očišćen';
$lang['BOARD_DISABLE'] = 'Žao nam je, ovaj forum je onemogućen. Pokušajte se vratiti kasnije.';
$lang['BOARD_DISABLE_CRON'] = 'Forum je zatvoren za održavanje. Pokušajte se vratiti kasnije.';
$lang['ADMIN_DISABLE'] = 'Forum je onemogućen od strane administratora. Možete ga omogućiti u bilo kojem trenutku';
$lang['ADMIN_DISABLE_CRON'] = 'Forum je zaključan pokretanjem cron zadatka. Možete ukloniti zaključavanje u bilo kojem trenutku';
$lang['ADMIN_DISABLE_TITLE'] = 'Na forumu je onemogućena';
$lang['ADMIN_DISABLE_CRON_TITLE'] = 'Forum je zatvoren za održavanje';
$lang['ADMIN_UNLOCK'] = 'Uključiti forum';
$lang['ADMIN_UNLOCKED'] = 'Otključan';
$lang['ADMIN_UNLOCK_CRON'] = 'Ukloniti zaključavanje';
$lang['PAGE_NOT_FOUND'] = 'Stranica nije pronađena';

$lang['LOADING'] = 'Učitavanje...';
$lang['JUMPBOX_TITLE'] = 'Odaberite forum';
$lang['DISPLAYING_OPTIONS'] = 'Prikaz parametara';

// Global Header strings
$lang['BROWSING_FORUM'] = 'Korisnici koji su pregledali ovaj forum:';
$lang['ONLINE_USERS'] = 'Ukupno ima <b>%1$d</b> korisnika online: %2$d registriranih i %3$d gostiju';
$lang['RECORD_ONLINE_USERS'] = 'Najviše korisnika koji su ikada bili online bilo je <b>%s</b> na %s'; // first %s = number of users, second %s is the date.

$lang['ONLINE_ADMIN'] = 'Administrator';
$lang['ONLINE_MOD'] = 'Moderator';
$lang['ONLINE_GROUP_MEMBER'] = 'Član grupe';

$lang['CURRENT_TIME'] = 'Trenutno vrijeme je: <span class="tz_time">%s</span>';

$lang['SEARCH_NEW'] = 'Pogledajte nove postove';
$lang['SEARCH_SELF'] = 'Moji postovi';
$lang['SEARCH_SELF_BY_LAST'] = 'vrijeme posljednjeg posta';
$lang['SEARCH_SELF_BY_MY'] = 'vrijeme mog posta';
$lang['SEARCH_LATEST'] = 'Najnovije teme';
$lang['LATEST_RELEASES'] = 'Najnovija izdanja';

$lang['REGISTER'] = 'Registracija';
$lang['PROFILE'] = 'Profil';
$lang['EDIT_PROFILE'] = 'Uredi profil';
$lang['SEARCH'] = 'Traži';
$lang['MEMBERLIST'] = 'Popis članova';
$lang['USERGROUPS'] = 'Grupe';
$lang['LASTPOST'] = 'Posljednja Poruka';
$lang['MODERATOR'] = 'Moderator';
$lang['MODERATORS'] = 'Moderatori';
$lang['TERMS'] = 'Uvjeti';
$lang['NOTHING_HAS_CHANGED'] = 'Ništa se nije promijenilo';

// Stats block text
$lang['POSTED_TOPICS_TOTAL'] = 'Naši korisnici su poslali ukupno <b>%s</b> teme'; // Number of topics
$lang['POSTED_POSTS_TOTAL'] = 'Naši korisnici su ukupno objavili <b>%s</b> poruka'; // Number of posts
$lang['REGISTERED_USERS_TOTAL'] = 'Imamo <b>%s</b> registriranih korisnika'; // # registered users
$lang['USERS_TOTAL_GENDER'] = 'Dječaci: <b>%d</b>, Djevojke: <b>%d</b>, Drugi: <b>%d</b>';
$lang['NEWEST_USER'] = 'Najnoviji registrirani korisnik <b>%s</b>'; // a href, username, /a

// Tracker stats
$lang['TORRENTS_STAT'] = 'Bujica: <b style="color: blue;">%s</b>,&nbsp; Ukupna veličina: <b>%s</b>'; // first %s = number of torrents, second %s is the total size.
$lang['PEERS_STAT'] = 'Vršnjaci: <b>%s</b>,&nbsp; Seeders: <b class="seedmed">%s</b>,&nbsp; Leechers: <b class="leechmed">%s</b>'; // first %s = number of peers, second %s = number of seeders,  third %s = number of leechers.
$lang['SPEED_STAT'] = 'Ukupna brzina: <b>%s</b>&nbsp;'; // %s = total speed.

$lang['NO_NEW_POSTS'] = 'Nema novih postova';
$lang['NEW_POSTS'] = 'Novi postovi';
$lang['FORUM_LOCKED_MAIN'] = 'Forum je zaključan';

// Login
$lang['ENTER_PASSWORD'] = 'Molimo unesite svoje korisničko ime i lozinku za prijavu.';
$lang['LOGIN'] = 'Prijavite se';
$lang['LOGOUT'] = 'Izlaz';
$lang['CONFIRM_LOGOUT'] = 'Jeste li sigurni da želite izaći?';

$lang['FORGOTTEN_PASSWORD'] = 'Zaboravili ste lozinku?';
$lang['AUTO_LOGIN'] = 'Log me in automatically';
$lang['ERROR_LOGIN'] = 'The username or password you entered is incorrect.';
$lang['REMEMBER'] = 'Zapamti';
$lang['USER_WELCOME'] = 'Dobrodošli,';

// Index page
$lang['HOME'] = 'Početna';
$lang['NO_POSTS'] = 'Nema postova';
$lang['NO_FORUMS'] = 'Ova ploča nema foruma';

$lang['PRIVATE_MESSAGE'] = 'Privatna Poruka';
$lang['PRIVATE_MESSAGES'] = 'Privatne Poruke';
$lang['WHOSONLINE'] = 'Tko je online';

$lang['MARK_ALL_FORUMS_READ'] = 'Označi sve forume kao pročitane';

$lang['LATEST_NEWS'] = 'Najnovije vijesti';
$lang['NETWORK_NEWS'] = 'Mreža vijesti';
$lang['SUBFORUMS'] = 'Podforumi';

$lang['FORUM_NOT_EXIST'] = 'Forum koji ste odabrali ne postoji.';
$lang['ERROR_PORNO_FORUM'] = 'Ovaj tip foruma (18+) je skriven u vašem profilu';

$lang['DISPLAY_TOPICS'] = 'Prikaži teme';
$lang['MODERATE_FORUM'] = 'Moderiraj ovaj forum';
$lang['TITLE_SEARCH_HINT'] = 'pretraživanje po nazivu...';

$lang['TOPIC_ANNOUNCEMENT'] = 'Oglas:';
$lang['TOPIC_MOVED'] = 'Prenesen:';
$lang['TOPIC_POLL'] = '[ Anketa ]';

$lang['MARK_TOPICS_READ'] = 'Označi sve teme pročitane';
$lang['TOPICS_MARKED_READ'] = 'Teme na ovom forumu su označene kao pročitane';

$lang['RULES_POST_CAN'] = 'Možete <b>stvarati</b> nove teme u ovom forumu';
$lang['RULES_POST_CANNOT'] = 'Ne možete <b>stvarati</b> nove teme u ovom forumu';
$lang['RULES_REPLY_CAN'] = 'Možete <b>odgovarati</b> na teme u ovom forumu';
$lang['RULES_REPLY_CANNOT'] = 'Ne možete <b>odgovarati</b> na teme u ovom forumu';
$lang['RULES_EDIT_CAN'] = 'Možete <b>urediti</b> svoje poruke u ovom forumu';
$lang['RULES_EDIT_CANNOT'] = 'Ne možete <b>urediti</b> svoje poruke u ovom forumu';
$lang['RULES_DELETE_CAN'] = 'Možete <b>brisati</b> svoje poruke u ovom forumu';
$lang['RULES_DELETE_CANNOT'] = 'Ne možete <b>brisati</b> svoje poruke u ovom forumu';
$lang['RULES_VOTE_CAN'] = 'Možete <b>glasati</b> u ovom forumu';
$lang['RULES_VOTE_CANNOT'] = 'Ne možete <b>glasati</b> u anketama u ovom forumu';
$lang['RULES_MODERATE'] = 'Možete <b>moderirati</b> ovaj forum';

$lang['NO_TOPICS_POST_ONE'] = 'U ovom forumu još nema postova<br />Kliknite na ikonu <b>Nova Tema</b>, a vaš post će biti prvi.';
$lang['NO_RELEASES_POST_ONE'] = 'U ovom forumu još nema izdanja<br />Kliknite na ikonu <b>Nova Izdanja</b>, a vaše izdanje će biti prvo.';

$lang['GUEST'] = 'Gost';
$lang['SUBMIT_VOTE'] = 'Podnijeti glas';

$lang['NO_NEWER_TOPICS'] = 'Nema novijih tema u ovom forumu';
$lang['NO_OLDER_TOPICS'] = 'Nema starijih tema u ovom forumu';
$lang['TOPIC_POST_NOT_EXIST'] = 'Tema ili post koji ste tražili ne postoji';
$lang['NO_POSTS_TOPIC'] = 'Nema ni jedne poruke u ovoj temi';

$lang['DISPLAY_POSTS'] = 'Prikaži poruke';
$lang['ALL_POSTS'] = 'Svi postovi';
$lang['NEWEST_FIRST'] = 'Novi Prvi';
$lang['OLDEST_FIRST'] = 'Najstariji Prvi';

$lang['READ_PROFILE'] = 'Pogledaj profil korisnika';

$lang['WROTE'] = 'napisao'; // proceeds the username and is followed by the quoted text
$lang['QUOTE'] = 'Citat'; // comes before bbcode quote output
$lang['CODE'] = 'Kod'; // comes before bbcode code output
$lang['SPOILER_HEAD'] = 'skriveni tekst';
$lang['SPOILER_CLOSE'] = 'close';
$lang['PLAY_ON_CURPAGE'] = 'Početi igrati na trenutnoj stranici';

$lang['EDITED_TIME_TOTAL'] = 'Posljednji put uredio <b>%s</b> na %s; uređeno %d put u ukupnom'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['EDITED_TIMES_TOTAL'] = 'Posljednji put uredio <b>%s</b> na %s; uređeno %d puta u ukupnom'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['LOCK_TOPIC'] = 'Zatvori temu';
$lang['UNLOCK_TOPIC'] = 'Otvorite temu';
$lang['MOVE_TOPIC'] = 'Premjestiti temu';
$lang['DELETE_TOPIC'] = 'Izbrišite temu';
$lang['SPLIT_TOPIC'] = 'Podijelite temu';

$lang['STOP_WATCHING_TOPIC'] = 'Prestani pratiti temu';
$lang['START_WATCHING_TOPIC'] = 'Pratite temu zbog odgovora';
$lang['NO_LONGER_WATCHING'] = 'Više ne pratite ovu temu';
$lang['YOU_ARE_WATCHING'] = 'Trenutno pratite ovu temu';

$lang['SEARCH_IN_TOPIC'] = 'traži u temi...';
$lang['HIDE_IN_TOPIC'] = 'Sakriti';

$lang['SHOW'] = 'Prikaži';
$lang['AVATARS'] = 'Avatari';
$lang['RANK_IMAGES'] = 'Rang slika';
$lang['POST_IMAGES'] = 'Post slike';
$lang['SIGNATURES'] = 'Potpis';
$lang['SPOILER'] = 'Spojler';
$lang['SHOW_OPENED'] = 'Prikaz otvoreno';
$lang['DOWNLOAD_PIC'] = 'Preuzimljive slike';

$lang['MODERATE_TOPIC'] = 'Moderiranje ove teme';
$lang['SELECT_POSTS_PER_PAGE'] = 'poruka na stranici';

// Posting/Replying (Not private messaging!)
$lang['TOPIC_REVIEW'] = 'Pregled teme';

$lang['NO_POST_MODE'] = 'Ne postoji način post izabran'; // If posting.php is called without a mode (newtopic/reply/delete/etc., shouldn't be shown normally)

$lang['POST_A_NEW_TOPIC'] = 'Post nove teme';
$lang['POST_A_REPLY'] = 'Post novi odgovor';
$lang['POST_TOPIC_AS'] = 'Post teme';
$lang['EDIT_POST'] = 'Uredi post';
$lang['EDIT_TOPIC_TITLE'] = 'Uredi naziv teme';

$lang['DONT_MESSAGE_TITLE'] = 'You must specify a message title';
$lang['INVALID_TOPIC_ID'] = 'Topic not found!';
$lang['INVALID_TOPIC_ID_DB'] = 'Tema ne postoji u bazi podataka!';

$lang['NOT_EDIT_TOR_STATUS'] = 'You cannot edit release with this status';

$lang['OPTIONS'] = 'Mogućnosti';

$lang['POST_ANNOUNCEMENT'] = 'Oglas';
$lang['POST_STICKY'] = 'Ljepljiv';
$lang['POST_NORMAL'] = 'Normalan';
$lang['POST_DOWNLOAD'] = 'Preuzimanje';

// Anonymous posting
$lang['ANONYMOUS'] = 'Anonimno';
$lang['ANONYMOUS_TOPIC'] = 'Objavi temu anonimno';
$lang['ANONYMOUS_REPLY'] = 'Odgovori anonimno';
$lang['HIDE_AUTHORSHIP'] = 'Po zadanim postavkama objavi anonimno';
$lang['HIDE_AUTHORSHIP_EXPLAIN'] = 'Kad je omogućeno, novi će postovi biti po zadanim postavkama anonimni. To možete mijenjati za svaki post zasebno.';
$lang['ALLOW_ANONYMOUS_POSTING'] = 'Dozvoli anonimno objavljivanje';
$lang['ANONYMOUS_POST_LABEL'] = 'Objavljeno anonimno';
$lang['POSTED_ANONYMOUSLY'] = 'objavljeno anonimno';
$lang['ANONYMOUS_ADMIN_NOTICE'] = 'Administratori i moderatori mogu vidjeti pravog autora';
$lang['YOU'] = 'Vi';

$lang['PRINT_PAGE'] = 'Ispis stranice';

$lang['CONFIRM_DELETE'] = 'Jeste li sigurni da želite izbrisati ovaj post?';
$lang['CONFIRM_DELETE_POLL'] = 'Jeste li sigurni da želite izbrisati ovu anketu?';

$lang['FLOOD_ERROR'] = 'Ne možete napraviti još jedan post tako brzo nakon vašeg posljednjeg; molimo pokušajte ponovno za kratko vrijeme.';
$lang['EMPTY_SUBJECT'] = 'Morate navesti temu';
$lang['EMPTY_MESSAGE'] = 'Morate upisati poruku';
$lang['FORUM_LOCKED'] = 'Forum je zaključan';
$lang['TOPIC_LOCKED'] = 'Tema je zaključana';
$lang['TOPIC_LOCKED_SHORT'] = 'Tema je zaključana';
$lang['NO_POST_ID'] = 'Morate odabrati post za uređivanje';
$lang['NO_TOPIC_ID'] = 'Morate odabrati temu za odgovor';
$lang['NO_VALID_MODE'] = 'Možete samo objavljivati, odgovarati, uređivati ili citirati poruke. Molimo pokušajte ponovno.';
$lang['NO_SUCH_POST'] = 'Nema takvog posta. Molim vas, vratite se i pokušajte ponovno';
$lang['EDIT_OWN_POSTS'] = 'Žao nam je, ali vi možete izmijeniti vlastite poruke';
$lang['DELETE_OWN_POSTS'] = 'Žao nam je, ali možete brisati samo svoje poruke.';
$lang['CANNOT_DELETE_REPLIED'] = 'Žao mi je, ali ne možete brisati postove na koje je odgovoreno.';
$lang['CANNOT_DELETE_POLL'] = 'Žao mi je, ali ne možete izbrisati aktivnu anketu.';
$lang['EMPTY_POLL_TITLE'] = 'Morate unijeti naslov za svoju anketu.';
$lang['POST_HAS_NO_POLL'] = 'Ovaj post nema anketu.';
$lang['ALREADY_VOTED'] = 'Već ste glasovali u ovoj anketi';
$lang['NO_VOTE_OPTION'] = 'Morate navesti opciju prilikom glasovanja.';
$lang['LOCKED_WARN'] = 'Objavili ste u zatvorenoj temi!';

$lang['ADD_POLL'] = 'Dodati anketu';
$lang['UPDATE'] = 'Ažuriranje';
$lang['DAYS'] = 'Dana';
$lang['DELETE_POLL'] = 'Morate izbrisati anketu.';

$lang['MAX_SMILIES_PER_POST'] = 'Emoticon limit of %s exceeded.';

$lang['NOTIFY'] = 'Obavijesti me o odgovorima';
$lang['ALLOW_ROBOTS_INDEXING'] = 'Dopusti robotima indeksiranje ove teme';

$lang['STORED'] = 'Vaša poruka je uspješno unesena.';
$lang['EDITED'] = 'Poruka je promijenjena.';
$lang['DELETED'] = 'Vaša poruka je uspješno uklonjena.';
$lang['VOTE_CAST'] = 'Vaš glas je ispitan.';

$lang['EMOTICONS'] = 'Smajlići';
$lang['MORE_EMOTICONS'] = 'Vidjeti više smajlića';

$lang['COLOR_DARK_RED'] = 'Tamno crvena.';
$lang['COLOR_RED'] = 'Crvena';
$lang['COLOR_ORANGE'] = 'Narančasta';
$lang['COLOR_BROWN'] = 'Smeđa';
$lang['COLOR_GREEN'] = 'Zelena';
$lang['COLOR_OLIVE'] = 'Maslinovo';
$lang['COLOR_BLUE'] = 'Plava';
$lang['COLOR_DARK_BLUE'] = 'Tamno Plava';
$lang['COLOR_INDIGO'] = 'Indigo';
$lang['COLOR_VIOLET'] = 'Ljubičasta';

$lang['FONT_SMALL'] = 'Mali';
$lang['FONT_NORMAL'] = 'Normalan';
$lang['FONT_LARGE'] = 'Veliko.';
$lang['FONT_HUGE'] = 'Veliki.';

$lang['NEW_POSTS_PREVIEW'] = 'Tema ima nove, uređene ili nepročitane poruke.';

// Private Messaging
$lang['PRIVATE_MESSAGING'] = 'Privatne Poruke';

$lang['NO_NEW_PM'] = 'Nema novih poruka.';

$lang['NEW_PMS_FORMAT'] = '<b>%1$s</b> %2$s'; // 1 new message
$lang['NEW_PMS_DECLENSION'] = ['nova poruka', 'nove poruke'];

$lang['UNREAD_PMS_FORMAT'] = '<b>%1$s</b> %2$s'; // 1 new message
$lang['UNREAD_PMS_DECLENSION'] = ['nepročitane poruke', 'nepročitane poruke'];

$lang['UNREAD_MESSAGE'] = 'Nepročitanu poruku';
$lang['READ_MESSAGE'] = 'U poruci';

$lang['READ_PM'] = 'U poruci';
$lang['POST_NEW_PM'] = 'Poruka';
$lang['POST_REPLY_PM'] = 'Odgovor na poruku';
$lang['POST_QUOTE_PM'] = 'Citat poruku.';
$lang['EDIT_PM'] = 'Uredi poruku.';

$lang['INBOX'] = 'Poštanski sandučić.';
$lang['OUTBOX'] = 'Izlazni sandučić.';
$lang['SAVEBOX'] = 'Spremi nekretnine.';
$lang['SENTBOX'] = 'Poslano.';
$lang['SUBJECT'] = 'Naslov.';
$lang['FROM'] = 'Od.';
$lang['TO'] = 'Za.';
$lang['DATE'] = 'Datum.';
$lang['SENT'] = 'Poslao.';
$lang['SAVED'] = 'Spasio.';
$lang['DELETE_MARKED'] = 'Izbriši označene.';
$lang['DELETE_ALL'] = 'Izbriši sve.';
$lang['SAVE_MARKED'] = 'Spremi označene.';
$lang['SAVE_MESSAGE'] = 'Spremi poruku.';
$lang['DELETE_MESSAGE'] = 'Izbriši poruku.';

$lang['DISPLAY_MESSAGES'] = 'Prikaži poruke.'; // Followed by number of days/weeks/months

$lang['NO_MESSAGES_FOLDER'] = 'Nema poruka u ovom mapi.';

$lang['CANNOT_SEND_PRIVMSG'] = 'Žao mi je, administrator vas je spriječio da šaljete privatne poruke.';
$lang['NO_TO_USER'] = 'Morate navesti korisničko ime.';
$lang['NO_SUCH_USER'] = 'Žao mi je, takav korisnik ne postoji.';

$lang['MESSAGE_SENT'] = 'Vaša poruka je poslana.';

$lang['CLICK_RETURN_INBOX'] = 'Vratite se u svoj.<br /><br /> %s<b>Poštanski sandučić</b>%s';
$lang['CLICK_RETURN_SENTBOX'] = '&nbsp;&nbsp; %s<b>Poslano</b>%s';
$lang['CLICK_RETURN_OUTBOX'] = '&nbsp;&nbsp; %s<b>Izlazni</b>%s';
$lang['CLICK_RETURN_SAVEBOX'] = '&nbsp;&nbsp; %s<b>Nekretnine</b>%s';
$lang['CLICK_RETURN_INDEX'] = '%sVratite se na Indeks%s';

$lang['SEND_A_NEW_MESSAGE'] = 'Pošaljite novu privatnu poruku.';
$lang['SEND_A_REPLY'] = 'Odgovorite na privatnu poruku.';
$lang['EDIT_MESSAGE'] = 'Uredi privatnu poruku.';

$lang['FIND_USERNAME'] = 'Nađi korisničko ime.';
$lang['SELECT_USERNAME'] = 'Odaberite korisničko ime.';
$lang['NO_MATCH'] = 'Nema pronađenih.';

$lang['NO_PM_ID'] = 'Molimo navedite ID poruke.';
$lang['NO_SUCH_FOLDER'] = 'Folder not found';

$lang['MARK_ALL'] = 'Označiti sve.';
$lang['UNMARK_ALL'] = 'Ukloni sve.';

$lang['CONFIRM_DELETE_PM'] = 'Jeste li sigurni da želite ukloniti ovu poruku?';
$lang['CONFIRM_DELETE_PMS'] = 'Jeste li sigurni da želite izbrisati ove poruke?';

$lang['INBOX_SIZE'] = 'Vaš poštanski sandučić je<br /><b>%d%%</b> pun.'; // e.g. Your Inbox is 50% full
$lang['SENTBOX_SIZE'] = 'Vaša poslane is<br /><b>%d%%</b> puni';
$lang['SAVEBOX_SIZE'] = 'Vaša spremište is<br /><b>%d%%</b> puni';

$lang['OUTBOX_EXPL'] = '';

// Profiles/Registration
$lang['VIEWING_USER_PROFILE'] = 'Prikaz profila :: %s';
$lang['VIEWING_MY_PROFILE'] = 'Moj profil [ <a href="%s">Postavke / promjena profila</a> ]';

$lang['DISABLED_USER'] = 'Onemogućeni račun';
$lang['MANAGE_USER'] = 'Uprava';

$lang['PREFERENCES'] = 'Preferencije';
$lang['ITEMS_REQUIRED'] = 'Stavke označene * su obavezna, osim ako nije drugačije određeno.';
$lang['REGISTRATION_INFO'] = 'Informacije o registraciji';
$lang['PROFILE_INFO'] = 'Informacije o profilu';
$lang['AVATAR_PANEL'] = 'Kontrolna ploča avatar';

$lang['WEBSITE'] = 'Web stranica';
$lang['LOCATION'] = 'Lokacija';
$lang['CONTACT'] = 'Kontaktirajte';
$lang['EMAIL_ADDRESS'] = 'Adresa e-pošte';
$lang['SEND_PRIVATE_MESSAGE'] = 'Pošalji privatnu poruku';
$lang['INTERESTS'] = 'Interesi';
$lang['OCCUPATION'] = 'Zanimanje';
$lang['POSTER_RANK'] = 'Rang autora';
$lang['AWARDED_RANK'] = 'Dodijeljena rang';
$lang['SHOT_RANK'] = 'Rang pogodak';

$lang['TOTAL_POSTS'] = 'Ukupno poruka';
$lang['SEARCH_USER_POSTS'] = 'Pronađi postove'; // Find all posts by username
$lang['SEARCH_USER_POSTS_SHORT'] = 'Pronaći poruke korisnika';
$lang['SEARCH_USER_TOPICS'] = 'Pronaći teme korisnika'; // Find all topics by username

$lang['NO_USER_ID_SPECIFIED'] = 'Žao nam je, ali za takvo ime ne postoji.';
$lang['NO_SEND_ACCOUNT_INACTIVE'] = 'Žao nam je, ali vaša lozinka ne može biti vraćena, jer vaš korisnički račun je trenutno neaktivan.';
$lang['NO_SEND_ACCOUNT'] = 'Žao nam je, ali vaša lozinka ne može biti vraćena. Molimo, kontaktirajte administratora foruma za više informacija.';

$lang['HIDE_PORN_FORUMS'] = 'Skrivanje sadržaja 18+';
$lang['ADD_RETRACKER'] = 'Add retracker to torrent files';
$lang['ALWAYS_NOTIFY'] = 'Uvijek me obavijesti o odgovorima';
$lang['ALWAYS_NOTIFY_EXPLAIN'] = 'Šalje e-mail kada netko odgovori na temu koju ste postavili. Može se promijeniti kad god postavite.';

$lang['BOARD_LANG'] = 'Jezik foruma';
$lang['GENDER'] = 'Spol';
$lang['GENDER_SELECT'] = [
    0 => 'Nepoznat',
    1 => 'Muško',
    2 => 'Žena',
];
$lang['MODULE_OFF'] = 'Modul isključen!';

$lang['BIRTHDAY'] = 'Rođendan';
$lang['HAPPY_BIRTHDAY'] = 'Sretan Rođendan!';
$lang['WRONG_BIRTHDAY_FORMAT'] = 'Format rođenja unesen je pogrešno.';
$lang['AGE'] = 'Dob';
$lang['BIRTHDAY_TO_HIGH'] = 'Žao nam je, ova web stranica ne prihvaća korisnike starije od %d godina';
$lang['BIRTHDAY_TO_LOW'] = 'Sorry, this site does not accept users younger than %d years old';
$lang['BIRTHDAY_TODAY'] = 'Korisnici danas rođendan: ';
$lang['BIRTHDAY_WEEK'] = 'Korisnici rođenja u narednih dana %d: %s';
$lang['NOBIRTHDAY_WEEK'] = 'Nema korisnika koji imaju rođendan u narednih %d dana.'; // %d is substituted with the number of days
$lang['NOBIRTHDAY_TODAY'] = 'Nema korisnika koji imaju rođendan danas.';
$lang['BIRTHDAY_ENABLE'] = 'Uključite proslavu rođendana.';
$lang['BIRTHDAY_MAX_AGE'] = 'Maksimalna dob.';
$lang['BIRTHDAY_MIN_AGE'] = 'Minimalna dob.';
$lang['BIRTHDAY_CHECK_DAY'] = 'Dani za provjeru nadolazećih rođendana';
$lang['YEARS'] = 'Godina';

$lang['TIMEZONE'] = 'Vremenska zona';
$lang['DATE_FORMAT_EXPLAIN'] = 'Sintaksa koju koristite je identična PHP funkciji.';
$lang['SIGNATURE'] = 'Potpis';
$lang['SIGNATURE_EXPLAIN'] = 'To je blok teksta koji se može dodati porukama koje postavljate. Postoji ograničenje %d znakova.';
$lang['SIGNATURE_DISABLE'] = 'Signature disabled due to forum rule violation';
$lang['PUBLIC_VIEW_EMAIL'] = 'Pokaži e-mail adresu u mom profilu';

$lang['EMAIL_EXPLAIN'] = 'A verification email will be sent to this address to complete your registration';

$lang['CURRENT_PASSWORD'] = 'Trenutna lozinka.';
$lang['NEW_PASSWORD'] = 'Nova lozinka.';
$lang['CONFIRM_PASSWORD'] = 'Potvrda lozinke.';
$lang['CONFIRM_PASSWORD_EXPLAIN'] = 'Morate potvrditi trenutnu lozinku ako želite promijeniti.';
$lang['PASSWORD_IF_CHANGED'] = 'Samo morate unijeti lozinku ako želite promijeniti.';
$lang['PASSWORD_CONFIRM_IF_CHANGED'] = 'Potvrda lozinke potrebna je samo ako ste je mijenjali.';

$lang['AUTOLOGIN'] = 'Autologin.';
$lang['RESET_AUTOLOGIN'] = 'Resetiraj ključ autologina.';
$lang['RESET_AUTOLOGIN_EXPL'] = 'this will log you out of all devices where auto-login is enabled';

$lang['AVATAR'] = 'Avatar';
$lang['AVATAR_EXPLAIN'] = 'Prikazuje mali grafički prikaz ispod vaših podataka u postovima. Samo jedna slika može biti prikazana u isto vrijeme, njena širina ne može biti veća od %d piksela, visina ne može biti veća od %d piksela, a veličina datoteke ne smije biti veća od %s.';
$lang['AVATAR_DELETE'] = 'Izbriši avatar.';
$lang['AVATAR_DISABLE'] = 'Avatar upload disabled due to a violation of <a href="%s"><b>forum rules</b></a>';
$lang['UPLOAD_AVATAR_FILE'] = 'Učitaj avatar.';
$lang['RETURN_PROFILE'] = 'Vrati se na profil.';
$lang['DELETE_IMAGE'] = 'Izbriši sliku.';
$lang['SET_MONSTERID_AVATAR'] = 'Postavi MonsterID avatar';

$lang['NOTIFY_ON_PRIVMSG'] = 'Obavijesti me o novim osobnim porukama';
$lang['HIDE_USER'] = 'Sakrij moj online status';
$lang['HIDDEN_USER'] = 'Skrivenih korisnika.';

$lang['PROFILE_UPDATED'] = 'Vaš profil je ažuriran';
$lang['PROFILE_UPDATED_INACTIVE'] = 'Vaš profil je obnovljen.';

$lang['PASSWORD_LONG'] = 'Vaša lozinka ne smije biti duža od %d znakova i kraća od %d znakova.';
$lang['USERNAME_TAKEN'] = 'Žao nam je, ali ovo korisničko ime je već zauzeto.';
$lang['USERNAME_INVALID'] = 'Žao nam je, ali ovo ime sadrži nevažeći znak';
$lang['USERNAME_DISALLOWED'] = 'Žao nam je, ali ovo ime je zabranjeno.';
$lang['USERNAME_TOO_LONG'] = 'Your username is too long.';
$lang['USERNAME_TOO_SMALL'] = 'Your username is too short.';
$lang['EMAIL_TAKEN'] = 'Žao nam je, ali ova e-mail adresa je već registrirana.';
$lang['EMAIL_INVALID'] = 'Žao nam je, ali ova e-mail adresa je neispravna.';
$lang['EMAIL_TOO_LONG'] = 'Vaša poruka je predugačka.';
$lang['SIGNATURE_TOO_LONG'] = 'Vaš potpis je predugačak.';
$lang['SIGNATURE_ERROR_HTML'] = 'Potpis može sadržavati samo BB kod';
$lang['FIELDS_EMPTY'] = 'Morate popuniti obvezna polja.';

$lang['WELCOME_SUBJECT'] = 'Dobrodošli u %s forume.';

$lang['ACCOUNT_ADDED'] = 'Zahvaljujemo na registraciji. Vaš korisnički račun je stvoren.';
$lang['ACCOUNT_INACTIVE'] = 'Vaš korisnički račun je stvoren.';
$lang['ACCOUNT_ACTIVE'] = 'Vaš korisnički račun je aktiviran.';
$lang['ALREADY_ACTIVATED'] = 'Vi ste već aktivirali svoj račun';

$lang['WRONG_ACTIVATION'] = 'Aktivacijski ključ koji ste unijeli ne podudara se sa nijednim u bazi podataka.';
$lang['PASSWORD_UPDATED'] = 'Nova lozinka je kreirana.';
$lang['NO_EMAIL_MATCH'] = 'E-mail koji ste unijeli ne podudara se.';
$lang['PASSWORD_ACTIVATED'] = 'Vaš korisnički račun je bio ponovo aktiviran. Za prijavu, molimo, koristite lozinku koju ste naveli u e-poštu koju ste primili.';

$lang['SEND_EMAIL_MSG'] = 'Pošalji e-mail';
$lang['NO_USER_SPECIFIED'] = 'Nije navedен korisnik.';
$lang['USER_NOT_EXIST'] = 'Korisnik ne postoji';
$lang['EMAIL_MESSAGE_DESC'] = 'Ova je poruka poslana kao običan tekst, stoga ne uključujte HTML ili BBCode. Povratna adresa za ovu poruku bit će postavljena na vašu e-mail adresu.';
$lang['RECIPIENT'] = 'Primatelj';
$lang['EMAIL_SENT'] = 'E-mail je poslan.';
$lang['SEND_EMAIL'] = 'Pošalji e-mail';
$lang['EMPTY_SUBJECT_EMAIL'] = 'Morate navesti predmet poruke e-pošte.';
$lang['EMPTY_MESSAGE_EMAIL'] = 'Morate unijeti poruku koja će biti poslana e-poštom.';

$lang['USER_AGREEMENT'] = 'Sporazum o korisnicima.';
$lang['USER_AGREEMENT_HEAD'] = 'Da biste nastavili, morate se složiti s sljedećim pravilima.';
$lang['USER_AGREEMENT_AGREE'] = 'Pročitao sam i slažem se sa sporazumom korisnika';

$lang['COPYRIGHT_HOLDERS'] = 'Za nositelje prava.';
$lang['ADVERT'] = 'Oglašavanje na ovoj web stranici';
$lang['NOT_FOUND'] = 'Datoteka nije pronađena';

// Memberslist
$lang['SORT_TOP_TEN'] = 'Deset najaktivnijih.';
$lang['SORT_JOINED'] = 'Datum pridruživanja.';
$lang['SORT_USERNAME'] = 'Korisničko ime';
$lang['SORT_LOCATION'] = 'Lokacija';
$lang['SORT_POSTS'] = 'Ukupno poruka';
$lang['SORT_EMAIL'] = 'E-mail';
$lang['SORT_WEBSITE'] = 'Web stranice';
$lang['ASC'] = 'Rastuće.';
$lang['DESC'] = 'Opadajuće.';
$lang['ORDER'] = 'Redoslijed.';

// Thanks
$lang['THANK_TOPIC'] = 'Glasajte za ovu temu';
$lang['THANKS_GRATITUDE'] = 'Cijenimo vašu zahvalnost';
$lang['LAST_LIKES'] = 'Posljednji glasovi';
$lang['LIKE_OWN_POST'] = 'Ne možete glasati za svoju temu';
$lang['NO_LIKES'] = 'Nobody has voted yet';
$lang['LIKE_ALREADY'] = 'You have already voted for this topic';

// Invites
$lang['INVITE_CODE'] = 'Pozivni kod';
$lang['INCORRECT_INVITE'] = 'Poziv nije pronađen';
$lang['INVITE_EXPIRED'] = 'Poziv je istekao';

// Group control panel
$lang['GROUP_CONTROL_PANEL'] = 'Grupa korisnika.';
$lang['GROUP_CONFIGURATION'] = 'Konfiguracija grupe.';
$lang['GROUP_GOTO_CONFIG'] = 'Idite na kontrolnu ploču konfiguracije grupe.';
$lang['GROUP_RETURN'] = 'Povratak na stranicu grupe korisnika.';
$lang['MEMBERSHIP_DETAILS'] = 'Detalji članstva grupe.';
$lang['JOIN_A_GROUP'] = 'Pridružite se grupi';

$lang['GROUP_INFORMATION'] = 'Informacije o grupi.';
$lang['GROUP_NAME'] = 'Naziv grupe.';
$lang['GROUP_DESCRIPTION'] = 'Opis grupe.';
$lang['GROUP_SIGNATURE'] = 'Potpis grupe.';
$lang['GROUP_MEMBERSHIP'] = 'Članstvo grupe.';
$lang['GROUP_MEMBERS'] = 'Članovi grupe.';
$lang['GROUP_MODERATOR'] = 'Moderator grupe.';
$lang['PENDING_MEMBERS'] = 'Na čekanju.';

$lang['GROUP_TIME'] = 'Stvoreno.';
$lang['RELEASE_GROUP'] = 'Os释放. ';

$lang['GROUP_TYPE'] = 'Tip grupe.';
$lang['GROUP_OPEN'] = 'Otvorena grupa.';
$lang['GROUP_CLOSED'] = 'Zatvorena grupa.';
$lang['GROUP_HIDDEN'] = 'Skrivene grupe.';

$lang['GROUP_MEMBER_MOD'] = 'Moderator grupe.';
$lang['GROUP_MEMBER_MEMBER'] = 'Trenutna članstva.';
$lang['GROUP_MEMBER_PENDING'] = 'Na čekanju članstva.';
$lang['GROUP_MEMBER_OPEN'] = 'Otvorene grupe.';
$lang['GROUP_MEMBER_CLOSED'] = 'Zatvorene grupe.';
$lang['GROUP_MEMBER_HIDDEN'] = 'Skrivene grupe.';

$lang['NO_GROUPS_EXIST'] = 'Ne postoje.';
$lang['GROUP_NOT_EXIST'] = 'Ova grupa korisnika ne postoji.';
$lang['NO_GROUP_ID_SPECIFIED'] = 'Identifikator grupe nije naveden.';

$lang['NO_GROUP_MEMBERS'] = 'U ovoj grupi nema članova';
$lang['HIDDEN_GROUP_MEMBERS'] = 'Ova grupa je skrivena; ne možete vidjeti članstvo.';
$lang['NO_PENDING_GROUP_MEMBERS'] = 'Ova grupa nema čekajućih članova.';
$lang['GROUP_JOINED'] = 'You have successfully applied to join this group.<br />You will be notified when your membership is approved by the group moderator.';
$lang['ALREADY_MEMBER_GROUP'] = 'Vi ste već član ove grupe';
$lang['USER_IS_MEMBER_GROUP'] = '%s je već član ove grupe';
$lang['USER_IS_MOD_GROUP'] = '%s je moderator ove grupe';
$lang['EFFECTIVE_DATE'] = 'Datum Stupanja Na Snagu';
$lang['COULD_NOT_ADD_USER'] = 'Odabrani korisnik ne postoji.';
$lang['UNSUB_SUCCESS'] = 'Odjavili ste se iz ove grupe.';

$lang['APPROVE_SELECTED'] = 'Odobri odabrano.';
$lang['DENY_SELECTED'] = 'Odbij odabrano.';
$lang['REMOVE_SELECTED'] = 'Izbriši Odabrane';
$lang['ADD_MEMBER'] = 'Dodaj Član';
$lang['NOT_GROUP_MODERATOR'] = 'Niste moderator ove grupe, tako da ne možete izvesti ovu aktivnost.';

$lang['LOGIN_TO_JOIN'] = 'Prijavite se za pridruživanje ili upravljanje članstvom u grupama.';
$lang['THIS_OPEN_GROUP'] = 'Ovo je otvorena grupa: kliknite za zatražiti članstvo.';
$lang['THIS_CLOSED_GROUP'] = 'Ovo je zatvorena grupa: više korisnika nije dopušteno.';
$lang['THIS_HIDDEN_GROUP'] = 'Ovo je skrivena grupa: automatsko dodavanje korisnika nije dozvoljeno.';
$lang['MEMBER_THIS_GROUP'] = 'Vi ste član grupe';
$lang['PENDING_THIS_GROUP'] = 'Vaše članstvo u ovoj grupi čeka na odobrenje.';
$lang['ARE_GROUP_MODERATOR'] = 'Vi ste moderator grupe';
$lang['NONE'] = 'Nitko';

$lang['UNSUBSCRIBE_GROUP'] = 'Odjavite se.';
$lang['MEMBERS_IN_GROUP'] = 'Članovi u grupi.';

// Release Groups
$lang['POST_RELEASE_FROM_GROUP'] = 'Objavljivanje nakon otpuštenja grupe.';
$lang['CHOOSE_RELEASE_GROUP'] = 'nije odabrano.';
$lang['ATTACH_RG_SIG'] = 'priloži potpis grupe.';
$lang['RELEASE_FROM_RG'] = 'Izdanje je pripremio.';
$lang['GROUPS_RELEASES'] = 'Izdanja grupe.';
$lang['MORE_RELEASES'] = 'Pronađite sve objave grupe.';
$lang['NOT_A_RELEASE_GROUP'] = 'Ova grupa nije grupa za objavu.';

// Search
$lang['SEARCH_HELP_URL'] = 'Pretraži pomoć.';
$lang['SEARCH_OPTIONS'] = 'Opcije pretraživanja.';

$lang['SEARCH_WORDS'] = 'Pretraživanje ključnih riječi.';
$lang['SEARCH_WORDS_EXPL'] = 'Možete koristiti <b>+</b> za definiranje riječi koje moraju biti u rezultatima i <b>-</b> za definiranje riječi koje ne bi trebale biti u rezultatu (npr: "+word1 -word2"). Koristite * kao zamjenu za dijelomična podudaranja.';
$lang['SEARCH_AUTHOR'] = 'Pretraživanje prema autoru.';
$lang['SEARCH_AUTHOR_EXPL'] = 'Koristite * kao zamjenu za dijelomična podudaranja.';

$lang['SEARCH_TITLES_ONLY'] = 'Pretraživanje tema samo po naslovima.';
$lang['SEARCH_ALL_WORDS'] = 'sve riječi.';
$lang['IN_MY_POSTS'] = 'U mojim postovima.';
$lang['SEARCH_MY_TOPICS'] = 'u mojim temama.';
$lang['NEW_TOPICS'] = 'Nove teme.';

$lang['SEARCH_PREVIOUS'] = 'Traženje prethodne.';

$lang['SORT_BY'] = 'Sortiraj po.';
$lang['SORT_TIME'] = 'Vrijeme objave.';
$lang['SORT_TOPIC_TITLE'] = 'Naziv teme.';

$lang['DISPLAY_RESULTS_AS'] = 'Rezultati su prikazani kao.';
$lang['ALL_AVAILABLE'] = 'Sve dostupno.';
$lang['BRIEFLY'] = 'Ukratko.';

$lang['NO_SEARCH_MATCH'] = 'Nema tema ili objava koje su zadovoljile vaše kriterije pretraživanja.';
$lang['FOUND_SEARCH_MATCH'] = 'Pretraživanje je pronašlo %d podudaranje.'; // e.g. Search found 1 match
$lang['FOUND_SEARCH_MATCHES'] = 'Pretraživanje je pronašlo %d podudaranja.'; // e.g. Search found 24 matches

$lang['CLOSE_WINDOW'] = 'Zatvori prozor.';
$lang['HIDE'] = 'sakriti';

// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
$lang['SORRY_AUTH_VIEW'] = 'Žao mi je, ali samo %s može pregledati ovaj forum.';
$lang['SORRY_AUTH_READ'] = 'Žao mi je, ali samo %s može čitati teme u ovom forumu.';
$lang['SORRY_AUTH_REPLY'] = 'Žao mi je, ali samo %s može odgovoriti na objave u ovom forumu.';
$lang['SORRY_AUTH_EDIT'] = 'Žao nam je, ali samo %s može uređivati poruke u ovom forumu.';
$lang['SORRY_AUTH_DELETE'] = 'Žao mi je, ali samo %s može izbrisati objave u ovom forumu.';

// These replace the %s in the above strings
$lang['AUTH_ANONYMOUS_USERS'] = '<b>anonymous users</b>';
$lang['AUTH_REGISTERED_USERS'] = '<b>registered users</b>';
$lang['AUTH_USERS_GRANTED_ACCESS'] = '<b>korisnici dodijeljeni poseban pristup</b>.';
$lang['AUTH_MODERATORS'] = '<b>moderators</b>';
$lang['AUTH_ADMINISTRATORS'] = '<b>administrators</b>';

$lang['NOT_MODERATOR'] = 'Niste moderator ovog foruma.';
$lang['NOT_AUTHORISED'] = 'Niste ovlašteni.';

$lang['YOU_BEEN_BANNED'] = 'Zabranjeni ste na ovom forumu. Molimo kontaktirajte administratora.';

// Viewonline
$lang['ONLINE_EXPLAIN'] = 'aktivnih korisnika u zadnjih pet minuta';
$lang['LAST_UPDATED'] = 'Posljednja Promjena';

// Moderator Control Panel
$lang['MOD_CP'] = 'Kontrolna ploča moderatora.';
$lang['SELECT'] = 'Odaberite';
$lang['DELETE'] = 'Izbrisati.';
$lang['MOVE'] = 'Potez.';
$lang['LOCK'] = 'Zatvaranje.';
$lang['UNLOCK'] = 'Otključavanje.';

$lang['TOPICS_REMOVED'] = 'Odabrane teme su uspješno uklonjene iz baze podataka.';
$lang['NO_TOPICS_REMOVED'] = 'Nema tema koje su uklonjene.';
$lang['TOPICS_LOCKED'] = 'Odabrane teme su zaključane.';
$lang['TOPICS_MOVED'] = 'Odabrane teme su premještene.';
$lang['TOPICS_UNLOCKED'] = 'Odabrane teme su otključane.';
$lang['NO_TOPICS_MOVED'] = 'Nema tema koje su premještene.';

$lang['CONFIRM_DELETE_TOPIC'] = 'Jeste li sigurni da želite obrisati odabranu temu/e?';
$lang['CONFIRM_MOVE_TOPIC'] = 'Jeste li sigurni da želite premjestiti odabranu temu/e?';

$lang['MOVE_TO_FORUM'] = 'Premjesti u forum.';
$lang['LEAVE_SHADOW_TOPIC'] = 'Ostavite sjena tema u starom forumu.';

$lang['SPLIT_TOPIC_EXPLAIN'] = 'Koristeći donji obrazac možete razdvojiti temu u dvije, odabirom postova pojedinačno ili razdvajanjem na odabrani post.';
$lang['NEW_TOPIC_TITLE'] = 'Novi naziv teme';
$lang['FORUM_FOR_NEW_TOPIC'] = 'Forum za nove teme';
$lang['SPLIT_POSTS'] = 'Razdvojite odabrane objave.';
$lang['SPLIT_AFTER'] = 'Razdvajanje od odabranog posta.';
$lang['TOPIC_SPLIT'] = 'Odabrana tema je uspješno razdvojena.';
$lang['NONE_SELECTED'] = 'Nemate odabranih za ovu operaciju. Vratite se i odaberite barem jedan.';

$lang['THIS_POSTS_IP'] = 'IP adresa za ovu poruku.';
$lang['OTHER_IP_THIS_USER'] = 'Ostale IP adrese s kojih je ovaj korisnik poslao poruke.';
$lang['USERS_THIS_IP'] = 'Korisnici koji objavljuju s ove IP adrese.';
$lang['IP_INFO'] = 'Informacije o IP-u.';
$lang['LOOKUP_IP'] = 'Pretraži IP adresu.';

// Timezones ... for display on each page
$lang['ALL_TIMES'] = 'Sva vremena su <span class="tz_time">%s</span>.'; // This is followed by UTC and the timezone offset

// Friendly dates (used in bb_date function)
$lang['DATETIME']['TODAY'] = 'Danas';
$lang['DATETIME']['YESTERDAY'] = 'Jučer';

// Country selector
$lang['COUNTRY'] = 'Država';
$lang['SET_OWN_COUNTRY'] = 'Postavi vlastitu državu (Ručni unos)';

// Errors
$lang['INFORMATION'] = 'Informacije';
$lang['ADMIN_REAUTHENTICATE'] = 'Da biste upravljali/moderirali forum, morate se ponovo prijaviti.';

// Attachment Mod Main Language Variables
// Auth Related Entries
$lang['RULES_ATTACH_CAN'] = 'Možete <b>dodati</b> privitke u ovom forumu.';
$lang['RULES_ATTACH_CANNOT'] = 'Ne možete <b>dodati</b> privitke u ovom forumu.';
$lang['RULES_DOWNLOAD_CAN'] = 'Možete <b>preuzeti</b> datoteke u ovom forumu.';
$lang['RULES_DOWNLOAD_CANNOT'] = 'Ne možete <b>preuzeti</b> datoteke u ovom forumu.';
$lang['SORRY_AUTH_VIEW_ATTACH'] = 'Žao nam je, ali nemate dozvolu da pregledate ili preuzmete ovaj privitak.';

// Viewtopic -> Display of Attachments
$lang['DESCRIPTION'] = 'Opis'; // used in Administration Panel too...
$lang['DOWNLOAD'] = 'Preuzimanje'; // this Language Variable is defined in admin.php too, but we are unable to access it from the main Language File
$lang['FILESIZE'] = 'Veličina datoteke';
$lang['MAX_FILE_SIZE'] = 'Maksimalna veličina datoteke';
$lang['ALLOWED_EXTENSIONS'] = 'Dozvoljene ekstenzije';

// Viewtopic -> Display of Attachments -> TorrServer integration
$lang['STREAM'] = 'Stream';
$lang['RESOLUTION'] = 'Rezolucija: <b>%s</b>';
$lang['CHANNELS'] = 'Kanali: <b>%s</b>';
$lang['CHANNELS_LAYOUT'] = 'Raspored kanala: <b>%s</b>';
$lang['BITRATE'] = 'Bitrate: <b>%s</b>';
$lang['SAMPLE_RATE'] = 'Frekvencija: <b>%s</b>';
$lang['AUDIO_TRACK'] = 'Informacije o audio trakama (%d):';
$lang['AUDIO_CODEC'] = 'Audio kod: <b title="%s">%s</b>';
$lang['VIDEO_CODEC'] = 'Video kod: <b title="%s">%s</b>';
$lang['SHOW_MORE_INFORMATION_FILE'] = 'Show more information about this file';
$lang['DOWNLOAD_M3U_FILE'] = 'Preuzmi .m3u datoteku';
$lang['PLAYBACK_M3U'] = 'Reprodukcija .m3u datoteke';
$lang['COPY_STREAM_LINK'] = 'Kopiraj link streama u međuspremnik';
$lang['M3U_NOT_SUPPORTED'] = 'Ova datoteka se ne može reproducirati u pregledniku...';
$lang['M3U_FFPROBE_NO_DATA'] = 'Čini se da ffprobe neće moći da vrati podatke o ovom kodeku...';
$lang['M3U_NOTICE'] = 'Neki preglednici ne podržavaju reprodukciju određenih video formata. U tom slučaju, možete preuzeti .m3u datoteku i reproducirati je pomoću vanjskog playera';
$lang['TORRSERVER_UNAVAILABLE'] = 'TorrServer nije dostupan';
$lang['TORRSERVER_INVALID_REQUEST'] = 'Neispravni parametri zahtjeva';

$lang['ATTACHMENT'] = 'Prilozi';

// Posting -> Posting Attachments
$lang['ADD_ATTACHMENT'] = 'Dodaj Privitak';
$lang['ADD_ATTACHMENT_EXPLAIN'] = 'Ako ne želite dodati privitak u svoju poruku, ostavite polja prazna.';
$lang['UPDATE_ATTACHMENT'] = 'Ažuriraj privitak';
$lang['FILENAME'] = 'Naziv datoteke.';

// Posting -> Posted Attachments
$lang['POSTED_ATTACHMENTS'] = 'Objavljeni privitci.';
$lang['DELETE_ATTACHMENT'] = 'Ukloni privitak.';

// Errors -> Download
$lang['NO_ATTACHMENT_SELECTED'] = 'Niste odabrali privitak za preuzimanje ili pregled.';
$lang['ERROR_NO_ATTACHMENT'] = 'Odabrani privitak više ne postoji.';
$lang['DOWNLOAD_LIMIT_EXCEEDED'] = 'Dnevni je limit preuzimanja premašen. Molimo pokušajte ponovno sutra.';

//bt
$lang['BT_REG_YES'] = 'Registriran od';
$lang['BT_REG_NO'] = 'Nije registriran';
$lang['BT_REG_ON_TRACKER'] = 'Prijavite se na adresi';
$lang['BT_REG_FAIL'] = 'Nije moguće registrirati torrent na adresi';
$lang['BT_REG_FAIL_SAME_HASH'] = 'Another torrent with the same info_hash is already <a href="%s"><b>registered</b></a>';
$lang['BT_V1_ONLY_DISALLOWED'] = 'v1-samo torrenti su trenutno onemogućeni od strane administratora, dozvoljeno: v2 i hibridi';
$lang['BT_V2_ONLY_DISALLOWED'] = 'v2-samo torrenti su trenutno onemogućeni od strane administratora, dozvoljeno: v1 i hibridi';
$lang['BT_FLIST'] = 'Lista datoteka';
$lang['BT_FLIST_LIMIT'] = 'Postavke za praćenje ne dopuštaju obradu popisa s više od %d datoteka. Trenutni broj je: %d';
$lang['BT_FLIST_BTMR_HASH'] = 'BTMR Hash';
$lang['BT_FLIST_BTMR_NOTICE'] = 'BitTorrent Merkle Root je hash datoteke ugrađene u torrente sa podrškom za BitTorrent v2, korisnici trackera mogu da ih izvuku, izračunaju njih, takođe preuzmu deduplirane torrente pomoću desktop alata kao što je <a href="%s" target="_blank" referrerpolicy="origin">Torrent Merkle Root Reader</a>';
$lang['BT_FLIST_CREATION_DATE'] = 'Datum kreiranja';
$lang['BT_IS_PRIVATE'] = 'Privatni torrent';
$lang['BT_FLIST_FILE_PATH'] = 'Putanja (%s)';
$lang['BT_FLIST_LINK_TITLE'] = 'Hash datoteka | .torrent meta-informacije';
$lang['BT_UNREG_FROM_TRACKER'] = 'Ukloni iz trackera.';
$lang['BT_UNREGISTERED'] = 'Torrent nije registriran.';
$lang['BT_UNREGISTERED_ALREADY'] = 'Torrent je već deregistrovan';
$lang['BT_REGISTERED'] = 'Torrent registriran na tracker<br /><br />Sada trebate <a href="%s"><b>preuzeti svoj torrent</b></a> i pokrenuti ga koristeći svoj torrent klijent odabirom mape s izvornim datotekama koje dijelite kao putanju preuzimanja.';
$lang['INVALID_ANN_URL'] = 'Neispravna URL adresa[%s]<br /><br />mora biti <b>%s</b>.';
$lang['PASSKEY_ERR_TOR_NOT_REG'] = 'Nije moguće dodati passkey<br /><br />Torrent nije registriran na tracker.';
$lang['BT_PASSKEY'] = 'Passkey.';
$lang['BT_GEN_PASSKEY'] = 'napraviti novi.';
$lang['BT_PASSKEY_VIEW'] = 'prikazati.';
$lang['BT_GEN_PASSKEY_NEW'] = "Pažnja! Nakon promjene vašeg ključa, morat ćete ponovo preuzeti sve aktivne bujice! \n Jeste li sigurni da želite stvoriti novi ključ?";
$lang['BT_NO_SEARCHABLE_FORUMS'] = 'Nema pretraživih foruma.';

$lang['SEEDS'] = 'Sjeme.';
$lang['LEECHS'] = 'Pijavica.';
$lang['SPEED_UP'] = 'Povećati.';
$lang['SPEED_DOWN'] = 'Smanjiti.';

$lang['SEEDERS'] = 'Sjeme.';
$lang['LEECHERS'] = 'Pijavica.';
$lang['RELEASING'] = 'Svojstvo.';
$lang['SEEDING'] = 'Sjeme.';
$lang['LEECHING'] = 'Pijavica.';
$lang['IS_REGISTERED'] = 'Registriran';
$lang['MAGNET'] = 'Magnet-link';
$lang['MAGNET_FOR_GUESTS'] = 'Prikaži magnet-link za goste';
$lang['MAGNET_v2'] = 'Magnet-link (BitTorrent v2 podržan)';

//torrent status mod
$lang['TOR_STATUS'] = 'Status';
$lang['TOR_STATUS_SELECT_ACTION'] = 'Odaberite status';
$lang['TOR_STATUS_NOT_SELECT'] = 'You have not selected a status.';
$lang['TOR_STATUS_SELECT_ALL'] = 'Svi statusi';
$lang['TOR_STATUS_FORBIDDEN'] = 'Status ove teme je: ';
$lang['TOR_STATUS_NAME'] = [
    TOR_NOT_APPROVED => 'nije provjereno',
    TOR_CLOSED => 'zatvorene',
    TOR_APPROVED => 'provjereno',
    TOR_NEED_EDIT => 'needs editing',
    TOR_NO_DESC => 'incomplete',
    TOR_DUP => 'duplikat',
    TOR_CLOSED_CPHOLD => 'zatvoreno (autorska prava)',
    TOR_CONSUMED => 'Upija se',
    TOR_DOUBTFUL => 'Upitno je',
    TOR_CHECKING => 'u procesu provjere',
    TOR_TMP => 'privremeno',
    TOR_PREMOD => 'Premoderacija',
    TOR_REPLENISH => 'dopunjavanje',
];
$lang['TOR_STATUS_FAILED'] = 'This status does not exist!';
$lang['TORRENT_FAILED'] = 'Raspodjela nije pronađena!';
$lang['TOR_STATUS_DUB'] = 'Distribucija ima isti status';
$lang['TOR_DONT_CHANGE'] = 'Change of status cannot be performed!';
$lang['TOR_STATUS_OF'] = 'Distribucija ima status: ';
$lang['TOR_STATUS_CHANGED'] = 'Status je promijenjen: ';
$lang['TOR_BACK'] = ' natrag';
$lang['PROCEED'] = 'Nastavi';
$lang['CHANGE_TOR_TYPE'] = 'Torrent type successfully changed';
$lang['DEL_TORRENT'] = 'Jeste li sigurni da želite ukloniti torrent?';
$lang['DEL_MOVE_TORRENT'] = 'Jeste li sigurni da želite ukloniti i premjestiti temu?';
$lang['UNEXECUTED_RELEASE'] = 'Imate nedovršenu distribuciju. Prije nego što stvorite novu, molimo vas da je završite!';
$lang['TOR_STATUS_LOG_ACTION'] = 'Novi status: %s.<br/>Prethodni status: %s.';

// tor_comment
$lang['TOR_MOD_TITLE'] = 'Distribution status changed – %s';
$lang['TOR_MOD_MSG'] = "Hello, %s.\n\nThe status of [url=%s]your[/url] distribution has been changed to [b]%s[/b]";

$lang['TOR_AUTH_TITLE'] = 'Formatting changes requested – %s';
$lang['TOR_AUTH_MSG'] = "Pozdrav, %s.\n\nVaša distribucija je promijenjena - [url=%s]%s[/url]\n\nMolim vas da je ponovo provjerite.";
$lang['TOR_AUTH_FIXED'] = 'Fiksirano';
$lang['TOR_AUTH_SENT_COMMENT'] = ' &middot; <span class="seed bold">The information has been sent to the moderator. Please wait for a response.</span>';

$lang['BT_TOPIC_TITLE'] = 'Naziv teme';
$lang['BT_SEEDER_LAST_SEEN'] = 'Zadnji put viđeni';
$lang['SIZE'] = 'Veličina';
$lang['COMPLETED'] = 'Dovršeni preuzimanja';
$lang['ADDED'] = 'Dodano';
$lang['DELETE_TORRENT'] = 'Uklonite torrent';
$lang['DELETE_MOVE_TORRENT'] = 'Uklonite i premjestite temu';
$lang['DL_TORRENT'] = 'Preuzmi .torrent';
$lang['BT_LAST_POST'] = 'Posljednja poruka';
$lang['BT_CREATED'] = 'Tema postavljena';
$lang['BT_REPLIES'] = 'Odgovori';
$lang['BT_VIEWS'] = 'Pogled';

// Gold/Silver releases
$lang['GOLD'] = 'Zlato';
$lang['SILVER'] = 'Srebro';
$lang['SET_GOLD_TORRENT'] = 'Napravite zlato';
$lang['UNSET_GOLD_TORRENT'] = 'Remove gold status';
$lang['SET_SILVER_TORRENT'] = 'Napraviti srebro';
$lang['UNSET_SILVER_TORRENT'] = 'Remove silver status';
$lang['GOLD_STATUS'] = 'GOLD TORRENT! DOWNLOAD TRAFFIC IS NOT COUNTED!';
$lang['SILVER_STATUS'] = 'SILVER TORRENT! DOWNLOAD TRAFFIC IS PARTIALLY COUNTED!';
$lang['TOR_TYPE_LOG_ACTION'] = 'Tip torenta promenjen na: %s';

$lang['TORRENT_STATUS'] = 'Pretraži po statusu izdanja';
$lang['SEARCH_IN_FORUMS'] = 'Pretraživanje foruma';
$lang['SELECT_CAT'] = 'Odaberite kategoriju';
$lang['GO_TO_SECTION'] = 'Idite na odjeljak';
$lang['TORRENTS_FROM'] = 'Post od';
$lang['SHOW_ONLY'] = 'Prikaži samo';
$lang['SHOW_COLUMN'] = 'Prikaži stupac';
$lang['SEL_CHAPTERS'] = 'Link to selected sections';
$lang['NOT_SEL_CHAPTERS'] = 'You have not selected any topics';
$lang['SEL_CHAPTERS_HELP'] = 'You can select a maximum of %s sections';
$lang['HIDE_CONTENTS'] = 'Sakrij sadržaj {...}';
$lang['FILTER_BY_NAME'] = '<i>Filter po imenu </i>';

$lang['BT_ONLY_ACTIVE'] = 'Aktivan';
$lang['BT_ONLY_MY'] = 'Moje objave';
$lang['BT_SEED_EXIST'] = 'Seeder exists';
$lang['BT_ONLY_NEW'] = 'Novo od posljednjeg posjeta';
$lang['BT_SHOW_CAT'] = 'Vrsta';
$lang['BT_SHOW_FORUM'] = 'Forum';
$lang['BT_SHOW_AUTHOR'] = 'Autor';
$lang['BT_SHOW_SPEED'] = 'Brzina';
$lang['SEED_NOT_SEEN'] = 'Sidera nije viđen';
$lang['TITLE_MATCH'] = 'Podudaranje naslova';
$lang['BT_USER_NOT_FOUND'] = 'nije pronađeno';
$lang['DL_SPEED'] = 'Ukupna brzina preuzimanja';

$lang['BT_DISREGARD'] = 'zanemarivanje';
$lang['BT_NEVER'] = 'nikada';
$lang['BT_ALL_DAYS_FOR'] = 'sve vrijeme';
$lang['BT_1_DAY_FOR'] = 'posljednji dan';
$lang['BT_3_DAY_FOR'] = 'posljednja tri dana';
$lang['BT_7_DAYS_FOR'] = 'prošli tjedan';
$lang['BT_2_WEEKS_FOR'] = 'zadnja dva tjedna';
$lang['BT_1_MONTH_FOR'] = 'u posljednjih mjesec dana';
$lang['BT_1_DAY'] = '1 dan';
$lang['BT_3_DAYS'] = '3 dana';
$lang['BT_7_DAYS'] = 'tjedno';
$lang['BT_2_WEEKS'] = '2 tjedna';
$lang['BT_1_MONTH'] = 'mjesec';

$lang['DL_LIST_AND_TORRENT_ACTIVITY'] = 'Popis DL i aktivnost torrenta';
$lang['DLWILL'] = 'Bit će preuzeto';
$lang['DLDOWN'] = 'Preuzimanje';
$lang['DLCOMPLETE'] = 'Dovršeno';
$lang['DLCANCEL'] = 'Poništi';

$lang['DL_LIST_DEL'] = 'Očisti DL-listu';
$lang['DL_LIST_DEL_CONFIRM'] = 'Da li ukloniti DL-listu za ovu temu?';
$lang['SHOW_DL_LIST'] = 'Prikazuje DL-listu';
$lang['SET_DL_STATUS'] = 'Preuzimanje';
$lang['UNSET_DL_STATUS'] = 'Not downloading';
$lang['TOPICS_DOWN_SETS'] = 'Status teme promijenjen na <b>Preuzimanje</b>';
$lang['TOPICS_DOWN_UNSETS'] = '<b>Preuzimanje</b> status uklonjen';

$lang['TOPIC_DL'] = 'DL';

$lang['MY_DOWNLOADS'] = 'Moji preuzimanja';
$lang['SEARCH_DL_WILL'] = 'Planirano';
$lang['SEARCH_DL_WILL_DOWNLOADS'] = 'Planirana preuzimanja';
$lang['SEARCH_DL_DOWN'] = 'Trenutna';
$lang['SEARCH_DL_COMPLETE'] = 'Završeno';
$lang['SEARCH_DL_COMPLETE_DOWNLOADS'] = 'Završeno preuzimanje';
$lang['SEARCH_DL_CANCEL'] = 'Otkaženo';
$lang['CUR_UPLOADS'] = 'Trenutna preuzimanja';
$lang['SEARCH_RELEASES'] = 'Izdavači';
$lang['TOR_SEARCH_TITLE'] = 'Opcije pretraživanja torrenta';
$lang['OPEN_TOPIC'] = 'Otvorite temu';

$lang['REG_NOT_ALLOWED_IN_THIS_FORUM'] = 'Nije moguće registrirati torrent na ovom forumu';
$lang['ALREADY_REG'] = 'Torrent je već registriran';
$lang['NOT_TORRENT'] = 'This file is not a torrent';
$lang['VIEWING_USER_BT_PROFILE'] = 'Torrent-profil';
$lang['CUR_ACTIVE_DLS'] = 'Aktivni torrenti';

$lang['TD_TRAF'] = 'Danas';
$lang['YS_TRAF'] = 'Jučer';
$lang['TOTAL_TRAF'] = 'Ukupno';

$lang['USER_RATIO'] = 'Omjer';
$lang['MAX_SPEED'] = 'Brzina';
$lang['DOWNLOADED'] = 'Preuzete';
$lang['UPLOADED'] = 'Preneseno';
$lang['RELEASED'] = 'Izdano';
$lang['BONUS'] = 'Bonus';
$lang['IT_WILL_BE_DOWN'] = 'will be counted once downloaded';
$lang['SPMODE_FULL'] = 'Prikaži vršnjacima u svim detaljima';

// Seed Bonus
$lang['MY_BONUS'] = 'My bonus (%s points available)';
$lang['BONUS_SELECT'] = 'Odaberite';
$lang['SEED_BONUS'] = 'Bonus sjemena';
$lang['EXCHANGE'] = 'Razmjena';
$lang['EXCHANGE_BONUS'] = 'Seed bonus exchange';
$lang['BONUS_UPLOAD_DESC'] = '<b>+%s upload credit</b> <br /> Exchange bonus points for %1$s of upload traffic added to your account total.';
$lang['BONUS_UPLOAD_PRICE'] = '<b class="%s">%s</b>';
$lang['PRICE'] = 'Cijena';
$lang['EXCHANGE_NOT'] = 'Exchange is not available';
$lang['BONUS_SUCCES'] = '%s has been successfully credited to your account';
$lang['BONUS_NOT_SUCCES'] = '<span class="leech">Nemate dostupne bonuse. Više sjemenjaka!</span>';
$lang['BONUS_RETURN'] = 'Povratak na razmjenu bonusa sjemena';

$lang['TRACKER'] = 'Tracker';
$lang['RANDOM_RELEASE'] = 'Nasumično izdanje';
$lang['OPEN_TOPICS'] = 'Otvaranje teme';
$lang['OPEN_IN_SAME_WINDOW'] = 'Otvori u istom prozoru';
$lang['SHOW_TIME_TOPICS'] = 'show topic creation time';
$lang['SHOW_CURSOR'] = 'istaknite red ispod kursora';

$lang['BT_LOW_RATIO_FOR_DL'] = 'Your ratio of <b>%s</b> is too low to download torrents';
$lang['BT_RATIO_WARNING_MSG'] = 'If your ratio falls below %s, you will not be able to download torrents! <a href="%s"><b>More about ratio.</b></a>';

$lang['SEEDER_LAST_SEEN'] = 'Seeder nije viđen: <b>%s</b>';

$lang['NEED_TO_LOGIN_FIRST'] = 'Prvo se morate prijaviti';
$lang['ONLY_FOR_MOD'] = 'This option is only for moderators';
$lang['ONLY_FOR_ADMIN'] = 'This option is only for admins';
$lang['ONLY_FOR_SUPER_ADMIN'] = 'This option is only for super admins';

$lang['LOGS'] = 'Povijest tema';
$lang['FORUM_LOGS'] = 'Forum History';
$lang['AUTOCLEAN'] = 'Autooke';
$lang['DESIGNER'] = 'Dizajner';

$lang['LAST_IP'] = 'Posljednji IP:';
$lang['REG_IP'] = 'Registracija IP adrese:';
$lang['OTHER_IP'] = 'Drugi IP:';
$lang['ALREADY_REG_IP'] = 'Korisnik %s je već registriran s vašom IP adresom. Ako se niste prethodno registrirali na našem trackeru, pošaljite e-poštu <a href="mailto:%s">Administratoru</a>';
$lang['HIDDEN'] = 'Skrivene';

// from admin
$lang['NOT_ADMIN'] = 'Niste ovlašteni za upravljanje ovim forumom';

$lang['SESSION_EXPIRED'] = 'Sesija je istekla';

// Sort memberlist per letter
$lang['POST_LINK'] = 'Post na link';
$lang['GOTO_QUOTED_POST'] = 'Idi na citirani post';
$lang['LAST_VISITED'] = 'Posljednja posjeta.';
$lang['LAST_ACTIVITY'] = 'Najnovija aktivnost';
$lang['NEVER'] = 'Nikada';

//mpd
$lang['DELETE_POSTS'] = 'Brisanje odabranih poruka.';
$lang['DELETE_POSTS_SUCCESFULLY'] = 'Odabrane poruke su uspješno uklonjene.';
$lang['NO_POSTS_REMOVED'] = 'Nema uklonjenih postova.';

//ts
$lang['TOPICS_ANNOUNCEMENT'] = 'Oglasi';
$lang['TOPICS_STICKY'] = 'Zalijepljen.';
$lang['TOPICS_NORMAL'] = 'Teme';

//dpc
$lang['DOUBLE_POST_ERROR'] = 'Vi ne možete napraviti još jedan post s točno istim tekstom, kao svoj posljednji.';

//upt
$lang['UPDATE_POST_TIME'] = 'Ažurirajte vrijeme posta.';

$lang['TOPIC_SPLIT_NEW'] = 'Nova tema.';
$lang['TOPIC_SPLIT_OLD'] = 'Stara tema.';
$lang['BOT_LEAVE_MSG_MOVED'] = 'Dodaj bot-poruku o premještanju.';
$lang['BOT_REASON_MOVED'] = 'Razlog za premještanje';
$lang['BOT_AFTER_SPLIT_TO_OLD'] = 'Dodaj bot-poruku o razdvajanju u <b>staru temu</b>.';
$lang['BOT_AFTER_SPLIT_TO_NEW'] = 'Dodaj bot-poruku o razdvajanju u <b>novu temu</b>.';
//qr
$lang['QUICK_REPLY'] = 'Brzi Odgovor';
$lang['INS_NAME_TIP'] = 'Umetnuti ime ili odabrani tekst.';
$lang['QUOTE_SELECTED'] = 'Citiraj izdvojeno';
$lang['QR_NOTIFY'] = 'Obavijestiti o odgovoru';
$lang['QR_USERNAME'] = 'Naziv';
$lang['QR_FONT_SEL'] = 'Vrsta fonta';
$lang['QR_COLOR_SEL'] = 'Boja slova';
$lang['QR_SIZE_SEL'] = 'Veličina fonta';
$lang['COLOR_STEEL_BLUE'] = 'Metalno plava.';
$lang['COLOR_GRAY'] = 'Siva';
$lang['COLOR_DARK_GREEN'] = 'Tamnozelena.';

// Short buttons
$lang['IP'] = 'IP';
$lang['POLL'] = 'Anketa';
$lang['MODERATE'] = 'Moderator';
$lang['SEND_PM_SHORT'] = 'PM';
$lang['WEBSITE_SHORT'] = 'WWW';

$lang['DECLENSION']['REPLIES'] = ['odgovor', 'odgovori'];
$lang['DECLENSION']['TIMES'] = ['vrijeme', 'put'];
$lang['DECLENSION']['FILES'] = ['datoteka', 'datoteke'];

$lang['AUTH_TYPES'][AUTH_ALL] = $lang['AUTH_ANONYMOUS_USERS'];
$lang['AUTH_TYPES'][AUTH_REG] = $lang['AUTH_REGISTERED_USERS'];
$lang['AUTH_TYPES'][AUTH_ACL] = $lang['AUTH_USERS_GRANTED_ACCESS'];
$lang['AUTH_TYPES'][AUTH_MOD] = $lang['AUTH_MODERATORS'];
$lang['AUTH_TYPES'][AUTH_ADMIN] = $lang['AUTH_ADMINISTRATORS'];

$lang['NEW_USER_REG_DISABLED'] = 'Žao mi je, registracija je onemogućena u ovom trenutku.';
$lang['ONLY_NEW_POSTS'] = 'samo nove postove';
$lang['ONLY_NEW_TOPICS'] = 'samo nove teme';

$lang['TORHELP_TITLE'] = 'Molimo pomozite u dijeljenju ovih torrent-a!';
$lang['STATISTICS'] = 'Statistika';
$lang['STATUS'] = 'Status';
$lang['ACTION'] = 'Akcija';
$lang['REASON'] = 'Razlog';
$lang['COMMENT'] = 'Komentar';

// search
$lang['SEARCH_S'] = 'traži...';
$lang['FORUM_S'] = 'na forumu';
$lang['TRACKER_S'] = 'na trackeru';
$lang['HASH_S'] = 'Pretraži... ';

// copyright
$lang['NOTICE'] = '!Pažnja!';
$lang['COPY'] = 'Web stranica ne pruža elektroničke verzije proizvoda i bavi se samo prikupljanjem i katalogiziranjem referenci poslanih i objavljenih na forumu od strane naših čitatelja. Ako ste zakonski vlasnik bilo kojeg poslanog materijala i ne želite da referenca na njega bude u našem katalogu, kontaktirajte nas i odmah ćemo je ukloniti. Datoteke za razmjenu na trackeru osiguravaju korisnici stranice, a administracija ne snosi odgovornost za njihov sadržaj. Molimo vas, nemojte učitavati datoteke zaštićene autorskim pravima ili datoteke s ilegalnim sadržajem!';

// FILELIST
$lang['COLLAPSE'] = 'Raspravite katalog.';
$lang['EXPAND'] = 'Proširite';
$lang['SWITCH'] = 'Prebaciti.';
$lang['TOGGLE_WINDOW_FULL_SIZE'] = 'Povećajte/smanjite prozor';
$lang['EMPTY_TOPIC_ID'] = 'Nedostaje identifikator teme';
$lang['TOR_NOT_FOUND'] = 'Datoteka nedostaje na poslužitelju';
$lang['ERROR_BUILD'] = 'The content of this torrent cannot be displayed (failed to build file list)';
$lang['TORFILE_INVALID'] = 'Torrent datoteka je oštećena';

// Profile
$lang['WEBSITE_ERROR'] = '"Stranica" može sadržavati samo http://sitename.';
$lang['PROFILE_USER'] = 'Pogled na profil.';
$lang['GOOD_UPDATE'] = 'successfully updated';
$lang['UCP_DOWNLOADS'] = 'Preuzimanja';
$lang['HIDE_DOWNLOADS'] = 'Sakrij popis trenutačnih preuzimanja na svom profilu.';
$lang['BAN_USER'] = 'User restrictions';
$lang['USER_NOT_ALLOWED'] = 'Korisnicima nije dopušteno';
$lang['HIDE_AVATARS'] = 'Prikaži avatare.';
$lang['SHOW_CAPTION'] = 'Pokazati svoj potpis';
$lang['DOWNLOAD_TORRENT'] = 'Preuzmi torrent.';
$lang['SEND_PM'] = 'Pošalji privatnu poruku.';
$lang['SEND_MESSAGE'] = 'Pošalji poruku';
$lang['NEW_THREADS'] = 'Nove Teme';
$lang['PROFILE_NOT_FOUND'] = 'Profil nije pronađen';

$lang['USER_DELETE_EXPLAIN'] = 'Izbrisati ovog korisnika';
$lang['USER_DELETE_ME'] = 'Sorry, your account cannot be deleted!';
$lang['USER_DELETE_CSV'] = 'Sorry, this account cannot be deleted!';
$lang['USER_DELETE_CONFIRM'] = 'Jeste li sigurni da želite izbrisati ovog korisnika?';
$lang['USER_DELETED'] = 'Korisnik je uspješno izbrisan.';
$lang['DELETE_USER_ALL_POSTS'] = 'Izbrisati sve poruke korisnika';
$lang['DELETE_USER_ALL_POSTS_CONFIRM'] = 'Jeste li sigurni da želite izbrisati sve poruke i sve teme koje je stvorio ovaj korisnik?';
$lang['DELETE_USER_POSTS'] = 'Delete all posts except the first post in each topic';
$lang['DELETE_USER_POSTS_ME'] = 'Jeste li sigurni da želite izbrisati sve moje postove?';
$lang['DELETE_USER_POSTS_CONFIRM'] = 'Are you sure you want to delete all posts except the first post in each topic?';
$lang['USER_DELETED_POSTS'] = 'Poruke su uspješno uklonjene';

$lang['USER'] = 'Korisnik';
$lang['ROLE'] = 'Uloge:';
$lang['MEMBERSHIP_IN'] = 'Članstvo u';
$lang['PARTY'] = 'Sudionik:';
$lang['CANDIDATE'] = 'Kandidat:';
$lang['INDIVIDUAL'] = 'Has individual rights';
$lang['GROUP_LIST_HIDDEN'] = 'Nije vam dozvoljeno vidjeti skrivene grupe';

$lang['USER_ACTIVATE'] = 'Aktivirati';
$lang['USER_DEACTIVATE'] = 'Isključite.';
$lang['DEACTIVATE_CONFIRM'] = 'Jeste li sigurni da želite deaktivirati ovog korisnika?';
$lang['USER_ACTIVATE_ON'] = 'Korisnik je uspješno aktiviran';
$lang['USER_DEACTIVATE_ME'] = 'You cannot deactivate your own account!';
$lang['ACTIVATE_CONFIRM'] = 'Are you sure you want to activate this user?';
$lang['USER_ACTIVATE_OFF'] = 'Korisnik je uspješno deaktiviran.';

// Register
$lang['CHOOSE_A_NAME'] = 'Please choose a username';
$lang['CHOOSE_E_MAIL'] = 'You must provide an email address';
$lang['CHOOSE_PASS'] = 'The password field must not be empty!';
$lang['CHOOSE_PASS_ERR'] = 'Upisane lozinke se ne podudaraju';
$lang['CHOOSE_PASS_ERR_MIN'] = 'Vaša lozinka mora imati najmanje %d znakova.';
$lang['CHOOSE_PASS_ERR_MAX'] = 'Vaša lozinka ne smije biti duža od %d znakova';
$lang['CHOOSE_PASS_ERR_NUM'] = 'Lozinka mora sadržavati bar jednu cifru';
$lang['CHOOSE_PASS_ERR_LETTER'] = 'Lozinka mora sadržavati bar jedno slovo latinske abecede';
$lang['CHOOSE_PASS_ERR_LETTER_UPPERCASE'] = 'Lozinka mora sadržavati bar jedno veliko slovo latinske abecede';
$lang['CHOOSE_PASS_ERR_SPEC_SYMBOL'] = 'Lozinka mora sadržavati bar jedan specijalni karakter';
$lang['CHOOSE_PASS_OK'] = 'Lozinke se podudaraju.';
$lang['CHOOSE_PASS_REG_OK'] = 'Lozinke se podudaraju, možete nastaviti s registracijom.';
$lang['CHOOSE_PASS_FAILED'] = 'Da biste promijenili lozinku, potrebno je pravilno odrediti trenutnu lozinku';
$lang['EMAILER_DISABLED'] = 'Sorry, this feature is temporarily unavailable';
$lang['REGISTERED_IN_TIME'] = 'Registracija je trenutno zatvorena<br /><br />Registracija je dostupna tijekom: %s<br />Trenutno vrijeme poslužitelja: %s<br /><br />Ispričavamo se na neugodnosti';
$lang['AUTOCOMPLETE'] = 'Generiraj lozinku';
$lang['YOUR_NEW_PASSWORD'] = 'Vaša nova lozinka:';
$lang['REGENERATE'] = 'Regenerirati.';

// Debug
$lang['EXECUTION_TIME'] = 'Vrijeme izvođenja:';
$lang['SEC'] = 'sec';
$lang['ON'] = 'na';
$lang['OFF'] = 'od';
$lang['MEMORY'] = 'Memorija: ';
$lang['QUERIES'] = 'upite';
$lang['SHOW_LOG'] = 'Prikaži log';
$lang['EXPLAINED_LOG'] = 'Objašnjen log';
$lang['CUT_LOG'] = 'Iseci dugačke upite';

// Attach Guest
$lang['DOWNLOAD_INFO'] = 'Besplatno preuzimanje i na maksimalnu brzinu!';
$lang['HOW_TO_DOWNLOAD'] = 'Kako skinuti?';
$lang['WHAT_IS_A_TORRENT'] = 'Što je torrent?';
$lang['RATINGS_AND_LIMITATIONS'] = 'Ocjene i ograničenja';

$lang['SCREENSHOTS_RULES'] = 'Read the screenshot posting rules!';
$lang['AJAX_EDIT_OPEN'] = 'You already have a quick edit session open!';
$lang['GO_TO_PAGE'] = 'Idite na stranicu ...';
$lang['EDIT'] = 'Uređivanje';
$lang['SAVE'] = 'Spremi';
$lang['NEW_WINDOW'] = 'u novom prozoru';

// BB Code
$lang['ALIGN'] = 'Poravnajte:';
$lang['LEFT'] = 'Left';
$lang['RIGHT'] = 'Right';
$lang['CENTER'] = 'Centrirano';
$lang['JUSTIFY'] = 'Prilagodi širini';
$lang['HOR_LINE'] = 'Horizontalna linija (Ctrl+8)';
$lang['NEW_LINE'] = 'Nova linija';
$lang['BOLD'] = 'Podebljani tekst: [b]text[/b] (Ctrl+B)';
$lang['ITALIC'] = 'Kurzivni tekst: [i]text[/i] (Ctrl+I)';
$lang['UNDERLINE'] = 'Podvlačenje teksta: [u]text[/u] (Ctrl+U)';
$lang['STRIKEOUT'] = 'Precrtani tekst: [s]text[/s] (Ctrl+S)';
$lang['BOX_TAG'] = 'Okvir oko teksta: [box]tekst[/box] ili [box=#333,#888]tekst[/box]';
$lang['INDENT_TAG'] = 'Umetni uvlačenje: [indent]tekst[/indent]';
$lang['PRE_TAG'] = 'Formatirani tekst: [pre]tekst[/pre]';
$lang['NFO_TAG'] = 'NFO: [nfo]tekst[/nfo]';
$lang['SUPERSCRIPT'] = 'Eksponentni tekst: [sup]tekst[/sup]';
$lang['SUBSCRIPT'] = 'Subscript tekst: [sub]tekst[/sub]';
$lang['QUOTE_TITLE'] = 'Citiranje teksta: [quote]text[/quote] (Ctrl+Q)';
$lang['IMG_TITLE'] = 'Umetni sliku: [img]https://image_url[/img] (Ctrl+R)';
$lang['URL'] = 'URL';
$lang['URL_TITLE'] = 'Umetnite URL: [url]https://url[/url] ili [url=https://url]URL tekst[/url] (Ctrl+W)';
$lang['CODE_TITLE'] = 'Prikaz koda: [code]code[/code] (Ctrl+K)';
$lang['LIST'] = 'Popis';
$lang['LIST_TITLE'] = 'Popis: [list]text[/list] (Ctrl+l)';
$lang['LIST_ITEM'] = 'Poredani popis: [list=]text[/list] (Ctrl+O)';
$lang['ACRONYM'] = 'Akronim';
$lang['ACRONYM_TITLE'] = 'Akronim: [acronym=Full text]Kratki tekst[/acronym]';
$lang['QUOTE_SEL'] = 'Citiraj izdvojeno';
$lang['JAVASCRIPT_ON'] = 'JavaScript mora biti omogućen za slanje poruka';

$lang['NEW'] = 'Novi';
$lang['NEWEST'] = 'Nove';
$lang['LATEST'] = 'Zadnji';
$lang['POST'] = 'Post';
$lang['OLD'] = 'Stari';

// DL-List
$lang['DL_USER'] = 'Korisničko ime';
$lang['DL_PERCENT'] = 'Completion %';
$lang['DL_UL'] = 'UL';
$lang['DL_DL'] = 'DL';
$lang['DL_UL_SPEED'] = 'Brzina UL';
$lang['DL_DL_SPEED'] = 'Brzina DL';
$lang['DL_PORT'] = 'Luka';
$lang['DL_CLIENT'] = 'BitTorrent klijent';
$lang['DL_FORMULA'] = 'Formula: Obrisani/TorrentSize';
$lang['DL_ULR'] = 'ULR';
$lang['DL_STOPPED'] = 'zaustavljen';
$lang['DL_UPD'] = 'vrijeme ažuriranja: ';
$lang['DL_INFO'] = 'Prikazuje podatke <i><b>samo za tekuću sesiju</b></i>';
$lang['HIDE_PEER_TORRENT_CLIENT'] = 'Sakrij ime svog BitTorrent klijenta na listi peerova';
$lang['HIDE_PEER_COUNTRY_NAME'] = 'Sakrij ime svoje zemlje na listi peerova';
$lang['HIDE_PEER_USERNAME'] = 'Sakrij svoje korisničko ime na listi peerova';

// Post PIN
$lang['POST_PIN'] = 'Pričvrstite prvi post';
$lang['POST_UNPIN'] = 'Odveži prvi post';
$lang['POST_PINNED'] = 'Prvi post je prikvačen';
$lang['POST_UNPINNED'] = 'Prvi post je odljušten';

// Management of my messages
$lang['GOTO_MY_MESSAGE'] = 'Zatvoriti i vratiti se na popisu "moje poruke"';
$lang['DEL_MY_MESSAGE'] = 'Neke teme su uklonjene iz "moje poruke"';
$lang['NO_TOPICS_MY_MESSAGE'] = 'Nema pronađenih tema na popisu vaših postova (možda ste ih već uklonili)';
$lang['EDIT_MY_MESSAGE_LIST'] = 'urediti popis';
$lang['SELECT_INVERT'] = 'odabrati / inverzni';
$lang['RESTORE_ALL_POSTS'] = 'Obnoviti sve postove';
$lang['DEL_LIST_MY_MESSAGE'] = 'Izbriši odabranu temu s popisa';
$lang['DEL_LIST_MY_MESSAGE_INFO'] = 'After removal, the <b>full list</b> may still show previously deleted threads until it is refreshed';
$lang['DEL_LIST_INFO'] = 'To remove an entry from the list, click the icon to the left of any section name';

// Watched topics
$lang['WATCHED_TOPICS'] = 'Praćene teme';
$lang['NO_WATCHED_TOPICS'] = 'Not watching any topics';

// set_die_append_msg
$lang['INDEX_RETURN'] = 'Povratak na početnu stranicu';
$lang['FORUM_RETURN'] = 'Natrag na forum';
$lang['TOPIC_RETURN'] = 'Vratite se na temu';
$lang['POST_RETURN'] = 'Idi na post';
$lang['PROFILE_EDIT_RETURN'] = 'Vratiti se u uređivanje';
$lang['PROFILE_RETURN'] = 'Idi u profil';

$lang['INDEXER'] = 'Ponovno indeksiranje pretrage';
$lang['INDEXER_SUCCESS'] = 'Indeks pretrage uspešno je ažuriran';

$lang['FORUM_STYLE'] = 'Stil foruma';

$lang['LINKS_ARE_FORBIDDEN'] = 'Linkovi su zabranjeni';

$lang['GENERAL'] = 'Opći admin';
$lang['USERS'] = 'Admin korisnika';
$lang['GROUPS'] = 'Administrator Grupe';
$lang['FORUMS'] = 'Admin Foruma';
$lang['MODS'] = 'Modifikacija';

$lang['CONFIGURATION'] = 'Konfiguracije';
$lang['MANAGE'] = 'Upravljanje';
$lang['DISALLOW'] = 'Zabraniti imena';
$lang['PRUNE'] = 'Obrezivanje';
$lang['MASS_EMAIL'] = 'Masovno e-pošta';
$lang['RANKS'] = 'Rangovi';
$lang['SMILIES'] = 'Smajlići';
$lang['BAN_MANAGEMENT'] = 'Kontrola Zabrane';
$lang['WORD_CENSOR'] = 'Riječ cenzurirati';
$lang['CRON'] = 'Planer zadataka (cron)';
$lang['REBUILD_SEARCH_INDEX'] = 'Ponovno izgraditi indeks za pretraživanje';
$lang['FORUM_CONFIG'] = 'Postavke foruma';
$lang['ACTIONS_LOG'] = 'Actions log';

// Migrations
$lang['MIGRATIONS_STATUS'] = 'Status migracije baze podataka';
$lang['MIGRATIONS_DATABASE_NAME'] = 'Ime baze podataka';
$lang['MIGRATIONS_DATABASE_TOTAL'] = 'Ukupno tabela';
$lang['MIGRATIONS_DATABASE_SIZE'] = 'Veličina baze podataka';
$lang['MIGRATIONS_DATABASE_INFO'] = 'Informacije o bazi podataka';
$lang['MIGRATIONS_SYSTEM'] = 'Migracioni sistem';
$lang['MIGRATIONS_NEEDS_SETUP'] = 'Potreban je setup';
$lang['MIGRATIONS_ACTIVE'] = 'Aktivan';
$lang['MIGRATIONS_NOT_INITIALIZED'] = 'Nije inicijalizovano';
$lang['MIGRATIONS_UP_TO_DATE'] = 'Sve je ažurno';
$lang['MIGRATIONS_PENDING_COUNT'] = 'na čekanju';
$lang['MIGRATIONS_APPLIED'] = 'Primene migracija';
$lang['MIGRATIONS_PENDING'] = 'Migracije na čekanju';
$lang['MIGRATIONS_VERSION'] = 'Verzija';
$lang['MIGRATIONS_NAME'] = 'Ime migracije';
$lang['MIGRATIONS_FILE'] = 'Datoteka migracije';
$lang['MIGRATIONS_APPLIED_AT'] = 'Primijenjeno u';
$lang['MIGRATIONS_COMPLETED_AT'] = 'Završeno u';
$lang['MIGRATIONS_CURRENT_VERSION'] = 'Trenutna verzija';
$lang['MIGRATIONS_NOT_APPLIED'] = 'Nema primenjenih migracija';
$lang['MIGRATIONS_INSTRUCTIONS'] = 'Upute';
$lang['MIGRATIONS_SETUP_STATUS'] = 'Status postavljanja';
$lang['MIGRATIONS_SETUP_GUIDE'] = 'Pogledajte uputstvo za postavljanje ispod';
$lang['MIGRATIONS_ACTION_REQUIRED'] = 'Potrebna akcija';

// Index
$lang['MAIN_INDEX'] = 'Indeks foruma';
$lang['FORUM_STATS'] = 'Statistika foruma';
$lang['ADMIN_INDEX'] = 'Indeks administratora';
$lang['CREATE_PROFILE'] = 'Napravite profil';

$lang['TP_VERSION'] = 'Verzija TorrentPier-a';
$lang['TP_RELEASE_DATE'] = 'Datum izdanja';
$lang['PHP_INFO'] = 'PHP information';

$lang['CLICK_RETURN_ADMIN_INDEX'] = 'Kliknite %sOvdje%s da se vratite na indeks administratora';

$lang['NUMBER_POSTS'] = 'Broj postova';
$lang['POSTS_PER_DAY'] = 'Postova na dan';
$lang['NUMBER_TOPICS'] = 'Broj tema';
$lang['TOPICS_PER_DAY'] = 'Tema po danu';
$lang['NUMBER_USERS'] = 'Broj korisnika';
$lang['USERS_PER_DAY'] = 'Korisnika dnevno';
$lang['BOARD_STARTED'] = 'Savjet je počeo';
$lang['AVATAR_DIR_SIZE'] = 'Veličina direktorija avatar';
$lang['NOT_AVAILABLE'] = 'Nije dostupno';

// System information
$lang['ADMIN_SYSTEM_INFORMATION'] = 'Informacije o sistemu';
$lang['ADMIN_SYSTEM_OS'] = 'OS:';
$lang['ADMIN_SYSTEM_PHP_VER'] = 'PHP:';
$lang['ADMIN_SYSTEM_DATABASE_VER'] = 'Baza podataka:';
$lang['ADMIN_SYSTEM_PHP_MEM_LIMIT'] = 'Maksimalna memorijska granica:';
$lang['ADMIN_SYSTEM_DISK_SPACE_INFO_TITLE'] = 'Informacije o slobodnom prostoru na disku:';
$lang['ADMIN_SYSTEM_DISK_SPACE_INFO'] = '%s (iskorišćeno: %s | slobodno: %s)';
$lang['ADMIN_SYSTEM_PHP_MAX_EXECUTION_TIME'] = 'Maksimalno vreme izvršavanja:';

// Clear Cache
$lang['DATASTORE'] = 'Baza podataka';
$lang['CLEAR_CACHE'] = 'Obriši keš';
$lang['CLEAR_TEMPLATES_CACHE'] = 'Keš predložaka';

// Update
$lang['USER_LEVELS'] = 'Razine korisnika';
$lang['USER_LEVELS_UPDATED'] = 'Korisnički nivoi su ažurirani';

// Synchronize
$lang['SYNCHRONIZE'] = 'Sinhronizirati';
$lang['TOPICS_DATA_SYNCHRONIZED'] = 'Podaci teme su sinkronizirani';
$lang['USER_POSTS_COUNT'] = 'Broj postova korisnika';
$lang['USER_POSTS_COUNT_SYNCHRONIZED'] = 'Sinhroniziran broj postova korisnika';

// Online Userlist
$lang['SHOW_ONLINE_USERLIST'] = 'Prikaži popis online korisnika';

// Robots.txt editor
$lang['ROBOTS_TXT_EDITOR_TITLE'] = 'Upravljaj robots.txt';
$lang['ROBOTS_TXT_UPDATED_SUCCESSFULLY'] = 'Datoteka robots.txt je uspešno ažurirana';
$lang['CLICK_RETURN_ROBOTS_TXT_CONFIG'] = '%sKliknite ovde da se vratite u upravljanje robots.txt%s';

// Auth pages
$lang['USER_SELECT'] = 'Odabir korisnika';
$lang['GROUP_SELECT'] = 'Odaberite grupu';
$lang['SELECT_A_FORUM'] = 'Odaberite forum';
$lang['AUTH_CONTROL_USER'] = 'Kontrola prava pristupa korisnika';
$lang['AUTH_CONTROL_GROUP'] = 'Kontrola prava grupe';
$lang['AUTH_CONTROL_FORUM'] = 'Kontrola prava foruma';
$lang['LOOK_UP_FORUM'] = 'Pogled forum';

$lang['GROUP_AUTH_EXPLAIN'] = 'Ovdje možete promijeniti prava i status moderatora dodijeljenog svakoj grupi korisnika. Ne zaboravite pri promjeni grupnih prava da pojedinačna prava pristupa ipak mogu odobriti korisniku ulaz u forume, itd. Bit ćete upozoreni ako je to slučaj.';
$lang['USER_AUTH_EXPLAIN'] = 'Ovdje možete promijeniti prava i status moderatora dodijeljenog svakom pojedinačnom korisniku. Ne zaboravite pri promjeni prava korisnika da grupna prava mogu i dalje odobriti korisniku ulaz u forume, itd. Bit ćete upozoreni ako je to slučaj.';
$lang['FORUM_AUTH_EXPLAIN'] = 'Ovdje možete mijenjati razinu autorizacije svakog foruma. Imat ćete jednostavnu i naprednu metodu za to, pri čemu napredna nudi veću kontrolu operacija svakog foruma. Zapamtite da promjena razine dozvola foruma utječe na to koji korisnici mogu provoditi razne operacije unutar njih.';

$lang['SIMPLE_MODE'] = 'Jednostavan način';
$lang['ADVANCED_MODE'] = 'Napredni način';
$lang['MODERATOR_STATUS'] = 'Status moderatora';

$lang['PUBLIC'] = 'Javni';
$lang['PRIVATE'] = 'Privatan';
$lang['REGISTERED'] = 'Registriran';
$lang['ADMINISTRATORS'] = 'Administratori';

// These are displayed in the drop-down boxes for advanced mode forum auth, try and keep them short!
$lang['FORUM_ALL'] = 'Sve';
$lang['FORUM_REG'] = 'Registriran';
$lang['FORUM_PRIVATE'] = 'Privatni';
$lang['FORUM_MOD'] = 'Mod';
$lang['FORUM_ADMIN'] = 'Admin';

$lang['AUTH_VIEW'] = $lang['VIEW'] = 'Pogled';
$lang['AUTH_READ'] = $lang['READ'] = 'Čitanje';
$lang['AUTH_POST'] = $lang['POST'] = 'Post';
$lang['AUTH_REPLY'] = $lang['REPLY'] = 'Odgovor';
$lang['AUTH_EDIT'] = $lang['EDIT'] = 'Uređivanje';
$lang['AUTH_DELETE'] = $lang['DELETE'] = 'Izbrisati';
$lang['AUTH_STICKY'] = $lang['STICKY'] = 'Ljepljiv';
$lang['AUTH_ANNOUNCE'] = $lang['ANNOUNCE'] = 'Objaviti';
$lang['AUTH_VOTE'] = $lang['VOTE'] = 'Glasanje';
$lang['AUTH_POLLCREATE'] = $lang['POLLCREATE'] = 'Create poll';
$lang['AUTH_ATTACHMENTS'] = $lang['AUTH_ATTACH'] = 'Postavi datoteke';
$lang['AUTH_DOWNLOAD'] = 'Preuzeti datoteke';

$lang['USER_LEVEL'] = 'Razina korisnika';
$lang['AUTH_USER'] = 'Korisnik';
$lang['AUTH_ADMIN'] = 'Administrator';
$lang['FORUM_AUTH_UPDATED'] = 'Dozvole foruma su ažurirane';
$lang['APPLY_TO_SUBFORUMS'] = 'Primijeni na podforume';

$lang['AUTH_UPDATED'] = 'Dozvole su ažurirane';
$lang['AUTH_GENERAL_ERROR'] = 'Nije moguće ažurirati status administratora';
$lang['AUTH_SELF_ERROR'] = 'Could not change yourself from an admin to a user';
$lang['NO_FORUMS_AVAILABLE'] = 'Nema dostupnih foruma. Prvo stvorite forume kako biste upravljali dozvolama.';
$lang['CLICK_RETURN_USERAUTH'] = 'Kliknite %sOvdje%s za povratak na prava korisnika';
$lang['CLICK_RETURN_GROUPAUTH'] = 'Kliknite %sOvdje%s da se vratite grupnim pravima';
$lang['CLICK_RETURN_FORUMAUTH'] = 'Kliknite %sOvdje%s da se vratite forumskim pravima';

// Banning
$lang['BAN_CONTROL'] = 'Kontrola zabrana';
$lang['BAN_EXPLAIN'] = 'Ovdje možete kontrolirati zabranu korisnika.';
$lang['BAN_USERNAME'] = 'Zabrana jednog ili više specifičnih korisnika';
$lang['UNBAN_USERNAME'] = 'Ukloni zabranu jednoj ili više specifičnih korisnika';
$lang['UNBAN_USERNAME_EXPLAIN'] = 'Možete poništiti zabranu više korisnika u jednom trenutku koristeći odgovarajuću kombinaciju miša i tipkovnice vašeg računala i internetskog preglednika.';
$lang['NO_BANNED_USERS'] = 'Nema zabranjenih imena';
$lang['BAN_UPDATE_SUCESSFUL'] = 'Popis zabrana je uspješno ažuriran.';
$lang['CLICK_RETURN_BANADMIN'] = 'Kliknite %sOvdje%s da se vratite na kontrolu zabrana.';

// Configuration
$lang['GENERAL_CONFIG'] = 'Opća konfiguracija';
$lang['CONFIG_EXPLAIN'] = 'Formular ispod omogućit će vam prilagodbu svih općih opcija foruma. Za korisničke i forum konfiguracije koristite poveznice na lijevoj strani.';

$lang['CONFIG_MODS'] = 'Modifikacije konfiguracije';
$lang['MODS_EXPLAIN'] = 'Ovaj obrazac vam omogućava da prilagodite modifikacije.';

$lang['CLICK_RETURN_CONFIG'] = '%sKliknite ovdje za povratak u general konfiguraciju%s';
$lang['CLICK_RETURN_CONFIG_MODS'] = '%sNazad na izmjene postavki%s';

$lang['GENERAL_SETTINGS'] = 'Opće postavke foruma';
$lang['SITE_NAME'] = 'Naziv stranice';
$lang['SITE_DESC'] = 'Opis stranice';
$lang['FORUMS_DISABLE'] = 'Isključite forum.';
$lang['BOARD_DISABLE_EXPLAIN'] = 'To će forum učiniti nedostupnim korisnicima. Administratori mogu pristupiti administratorskoj ploči dok je forum onemogućen.';
$lang['ACC_NONE'] = 'Nitko';

$lang['ABILITIES_SETTINGS'] = 'Korisnika i osnovne postavke foruma';
$lang['MAX_POLL_OPTIONS'] = 'Maksimalni broj opcija za anketu';
$lang['FLOOD_INTERVAL'] = 'Interval inundacije';
$lang['FLOOD_INTERVAL_EXPLAIN'] = 'Broj sekundi koje korisnik mora čekati između posta';
$lang['TOPICS_PER_PAGE'] = 'Teme po stranici';
$lang['POSTS_PER_PAGE'] = 'Poruke po stranici';
$lang['HOT_THRESHOLD'] = 'Postovi za popularni prag';
$lang['DEFAULT_LANGUAGE'] = 'Zadani Jezik';
$lang['DATE_FORMAT'] = 'Format Datuma';
$lang['SYSTEM_TIMEZONE'] = 'Sustav Vremenska Zona';
$lang['ENABLE_PRUNE'] = 'Omogućite orezivanje foruma';
$lang['ALLOW_BBCODE'] = 'Dopusti BB Kod';
$lang['ALLOW_SMILIES'] = 'Dopusti emojije';
$lang['SMILIES_PATH'] = 'Put do emotikona';
$lang['SMILIES_PATH_EXPLAIN'] = 'Put unutar vašeg TorrentPier javnog direktorija, npr. assets/images/smiles';
$lang['ALLOW_SIG'] = 'Dopusti Potpis';
$lang['MAX_SIG_LENGTH'] = 'Maksimalna duljina potpisa';
$lang['MAX_SIG_LENGTH_EXPLAIN'] = 'Maksimalan broj znakova u potpis korisnika';
$lang['ALLOW_NAME_CHANGE'] = 'Dopusti promjene korisničkog imena';

// Autologin Keys
$lang['ALLOW_AUTOLOGIN'] = 'Dopusti automatsku prijavu';
$lang['ALLOW_AUTOLOGIN_EXPLAIN'] = 'Određuje hoće li korisnici moći birati automatsku prijavu prilikom posjeta forumu';
$lang['AUTOLOGIN_TIME'] = 'Automatski ključ za prijavu';
$lang['AUTOLOGIN_TIME_EXPLAIN'] = 'Koliko dugo automatski ključ vrijedi u danima ako korisnik ne posjeti stranicu. Postavite na nulu da biste isključili isticanje.';

// Forum Management
$lang['FORUM_ADMIN_MAIN'] = 'Administracija Foruma';
$lang['EDIT_FORUM'] = 'Uređivanje foruma';
$lang['CREATE_FORUM'] = 'Stvoriti novi forum';
$lang['CREATE_SUB_FORUM'] = 'Stvori podforum';
$lang['CREATE_CATEGORY'] = 'Stvoriti novu kategoriju';
$lang['REMOVE'] = 'Izbrisati';
$lang['CONFIG_UPDATED'] = 'Konfiguracije Forum Je Uspješno Nadograđen';
$lang['MOVE_UP'] = 'Pomjerite prema gore';
$lang['MOVE_DOWN'] = 'Pomjerite prema dolje';
$lang['NO_MODE'] = 'Mod nije postavljen';
$lang['FORUM_EDIT_DELETE_EXPLAIN'] = 'Formular ispod omogućit će vam prilagodbu svih općih opcija foruma. Za korisničke i forum konfiguracije koristite poveznice na lijevoj strani';

$lang['MOVE_CONTENTS'] = 'Premjestite sav sadržaj';
$lang['FORUM_DELETE'] = 'Izbriši forum.';
$lang['FORUM_DELETE_EXPLAIN'] = 'Forma ispod će vam omogućiti da izbrišete forum (ili kategoriju) i odlučite gdje želite staviti sve teme (ili forume) koje je sadržavalo.';
$lang['CATEGORY_DELETE'] = 'Izbriši Kategoriju';
$lang['CATEGORY_NAME_EMPTY'] = 'Ime kategorije nije navedeno';

$lang['STATUS_LOCKED'] = 'Zaključana';
$lang['STATUS_UNLOCKED'] = 'Otključan';
$lang['FORUM_SETTINGS'] = 'Opće Postavke Foruma';
$lang['FORUM_NAME'] = 'Ime foruma';
$lang['FORUM_DESC'] = 'Opis';
$lang['FORUM_STATUS'] = 'Status foruma';
$lang['FORUM_PRUNING'] = 'Auto-obrezivanje';

$lang['PRUNE_DAYS'] = 'Uklonite teme koje nisu postavljene';

$lang['MOVE_AND_DELETE'] = 'Premještanje i brisanje';

$lang['DELETE_ALL_POSTS'] = 'Izbrisati sve poruke';
$lang['DELETE_ALL_TOPICS'] = 'Izbriši sve teme, uključujući obavijesti i ljepljive';
$lang['NOWHERE_TO_MOVE'] = 'Nema gdje premjestiti';

$lang['EDIT_CATEGORY'] = 'Uredi kategoriju';
$lang['EDIT_CATEGORY_EXPLAIN'] = 'Koristite ovaj obrazac za izmjenu imena kategorije.';

$lang['FORUMS_UPDATED'] = 'Forum i informacija, Vrsta je uspješno obnovljeno';

$lang['MUST_DELETE_FORUMS'] = 'Trebate ukloniti sve forume prije nego što možete ukloniti ovaj odjeljak';

$lang['CLICK_RETURN_FORUMADMIN'] = 'Kliknite %sOvde%s za povratak na upravu foruma';

$lang['SHOW_ALL_FORUMS_ON_ONE_PAGE'] = 'Prikaži sve forume na jednoj stranici';

// Smiley Management
$lang['SMILEY_TITLE'] = 'Upravljački alat Smiley';
$lang['SMILE_DESC'] = 'Na ovoj stranici možete dodati, ukloniti i uređivati emotikone ili smajliće koje vaši korisnici mogu koristiti u svojim postovima i privatnim porukama.';

$lang['SMILEY_CONFIG'] = 'Konfiguracija Smajlića';
$lang['SMILEY_CODE'] = 'Kod Smajlića';
$lang['SMILEY_URL'] = 'Datoteka slike Smajlića';
$lang['SMILEY_EMOT'] = 'Emocije Smajlića';
$lang['SMILE_ADD'] = 'Dodaj novog smajlića';
$lang['SMILE'] = 'Osmeh';
$lang['EMOTION'] = 'Emocije';

$lang['SELECT_PAK'] = 'Odaberite .pak datoteku paketa';
$lang['REPLACE_EXISTING'] = 'Zamijeniti postojeći smajlić';
$lang['KEEP_EXISTING'] = 'Zadržati postojeći smajlić';
$lang['SMILEY_IMPORT_INST'] = 'Trebate raspakirati paket smajlića i prenijeti sve datoteke u odgovarajući direktorij smajlića za vašu instalaciju. Zatim odaberite tačne informacije u ovom obrascu kako biste uvezli paket smajlića.';
$lang['SMILEY_IMPORT'] = 'Uvoz smajlića paketa';
$lang['CHOOSE_SMILE_PAK'] = 'Odaberite .pak datoteku paketa smajlića';
$lang['IMPORT'] = 'Uvoz smajlića';
$lang['SMILE_CONFLICTS'] = 'Što učiniti u slučaju sukoba';
$lang['DEL_EXISTING_SMILEYS'] = 'Izbrišite postojeće smajliće prije uvoza';
$lang['IMPORT_SMILE_PACK'] = 'Uvoz paketa smajlića';
$lang['EXPORT_SMILE_PACK'] = 'Napravite paket smajlića';
$lang['EXPORT_SMILES'] = 'Da biste stvorili paket smajlića iz trenutnih smajlića, kliknite %sOvde%s za preuzimanje smajlića.pak datoteke. Imenovajte ovu datoteku odgovarajuće osiguravajući da zadržite .pak ekstenziju datoteke. Zatim stvorite zip datoteku koja sadrži sve slike smajlića plus ovu .pak konfiguracijsku datoteku.';

$lang['SMILEY_ADD_SUCCESS'] = 'Smajli je uspješno dodan';
$lang['SMILEY_EDIT_SUCCESS'] = 'Smajli je uspješno nadograđen';
$lang['SMILEY_IMPORT_SUCCESS'] = 'Smajlić paket je uspješno uvezen!';
$lang['SMILEY_DEL_SUCCESS'] = 'Smajlić je uspješno izbrisan.';
$lang['CLICK_RETURN_SMILEADMIN'] = 'Kliknite %sOvde%s za povratak upravi smajlića';

// User Management
$lang['USER_ADMIN'] = 'Administracija Korisnika';
$lang['LOOK_UP_USER'] = 'Pretraži korisnika';

// Group Management
$lang['GROUP_ADMINISTRATION'] = 'Uprava Grupe';
$lang['GROUP_ADMIN_EXPLAIN'] = 'S ove ploče možete upravljati svim svojim korisničkim grupama.';
$lang['UPDATED_GROUP'] = 'Grupa je uspješno ažurirana';
$lang['ADDED_NEW_GROUP'] = 'Nova grupa je uspješno kreirana';
$lang['DELETED_GROUP'] = 'Grupa je uspješno obrisana';
$lang['CREATE_NEW_GROUP'] = 'Napravi novu grupu';
$lang['EDIT_GROUP'] = 'Uređivanje grupe';
$lang['GROUP_STATUS'] = 'Status grupe';
$lang['GROUP_DELETE'] = 'Obriši grupu';
$lang['GROUP_DELETE_CHECK'] = 'Obriši ovu grupu';
$lang['NO_GROUP_NAME'] = 'Morate navesti naziv za ovu grupu';
$lang['NO_GROUP_MODERATOR'] = 'Morate navesti moderatora za ovu grupu';
$lang['NO_GROUP_ACTION'] = 'Nije određena nikakva akcija';
$lang['DELETE_OLD_GROUP_MOD'] = 'Uklanjanje starog moderatora grupe?';
$lang['DELETE_OLD_GROUP_MOD_EXPL'] = 'Ako mijenjate moderatora grupe, označite ovo polje da biste uklonili starog moderatora iz grupe. Inače, nemojte ga označavati, i korisnik će postati redovni član grupe.';
$lang['CLICK_RETURN_GROUPSADMIN'] = 'Kliknite %s ovdje%s za povratak na upravljanje grupama.';
$lang['SELECT_GROUP'] = 'Odaberite grupu';
$lang['LOOK_UP_GROUP'] = 'Pronađite grupu';

// Prune Administration
$lang['FORUM_PRUNE'] = 'Označi forum';
$lang['FORUM_PRUNE_EXPLAIN'] = 'Ovo će izbrisati sve teme koje nisu imale odgovora u broju dana koji odaberete. Ako ne unesete broj, sve teme će biti izbrisane. To neće ukloniti <b>sticky</b> teme i <b>oglase</b>. Morat ćete ručno ukloniti te teme.';
$lang['DO_PRUNE'] = 'Izvrši rezanje';
$lang['PRUNE_TOPICS_NOT_POSTED'] = 'Reže teme bez odgovora u tom broju dana';
$lang['TOPICS_PRUNED'] = 'Teme su rezane';
$lang['PRUNE_SUCCESS'] = 'Forum je uspješno obrezan';
$lang['NOT_DAYS'] = 'Dani za obrezivanje nisu odabrani';

// Word censor
$lang['WORDS_TITLE'] = 'Cenzuriranje riječi';
$lang['WORDS_EXPLAIN'] = 'Iz ovog upravljačkog panela možete dodavati, uređivati i uklanjati riječi koje će se automatski cenzurirati na vašim forumima. Osim toga, ljudima neće biti dopušteno registrirati se s korisničkim imenima koja sadrže te riječi. Wildcards (*) se prihvaćaju u polju riječi. Na primjer, *test* će odgovarati grozota, test* će odgovarati testiranju, *test će odgovarati grozoti.';
$lang['WORD'] = 'Riječ';
$lang['EDIT_WORD_CENSOR'] = 'Uredi cenzuru riječi';
$lang['REPLACEMENT'] = 'Zamjena';
$lang['ADD_NEW_WORD'] = 'Dodaj novu riječ';

$lang['MUST_ENTER_WORD'] = 'Morate unijeti riječ i njezinu zamjenu';
$lang['NO_WORD_SELECTED'] = 'Nema riječi odabranih za uređivanje';

$lang['WORD_UPDATED'] = 'Odabrani cenzor riječi je uspješno ažuriran';
$lang['WORD_ADDED'] = 'Cenzor riječi je uspješno dodan';
$lang['WORD_REMOVED'] = 'Odabrani cenzor riječi je uspješno uklonjen';

$lang['CLICK_RETURN_WORDADMIN'] = 'Kliknite %sOvdje%s za povratak u Administraciju cenzure riječi';

// Mass Email
$lang['MASS_EMAIL_EXPLAIN'] = 'Ovdje možete poslati poruku svim vašim korisnicima ili svim korisnicima određenih grupa. Da biste to učinili, e-mail će biti poslan na administrativnu e-mail adresu, s potpunom kopijom poslanom svim primateljima. Ako šaljete veliku grupu ljudi, molimo vas da budete strpljivi nakon podnošenja i ne zaustavljate stranicu na pola puta. Normalno je da masovno slanje e-maila traje dugo i bit ćete obaviješteni kada je skripta završila.';
$lang['COMPOSE'] = 'Sastavi';

$lang['RECIPIENTS'] = 'Primatelji';
$lang['ALL_USERS'] = 'Svim Korisnicima';

$lang['MASS_EMAIL_MESSAGE_TYPE'] = 'Vrsta e-pošte';

// Ranks admin
$lang['RANKS_TITLE'] = 'Administracija Ranga';
$lang['RANKS_EXPLAIN'] = 'Pomoću ovog obrasca možete dodavati, uređivati, pregledavati i brisati rangi. Također možete stvoriti prilagođene rangove koji se mogu primijeniti na korisnika putem alata za upravljanje korisnicima.';

$lang['ADD_NEW_RANK'] = 'Dodaj novi poredak';
$lang['RANK_TITLE'] = 'Naziv Ranga';
$lang['STYLE_COLOR'] = 'Rang stila';
$lang['STYLE_COLOR_FAQ'] = 'Odredite klasu za stiliziranje naslova željenom bojom. Na primjer: <i class="bold">colorAdmin</i>';
$lang['RANK_IMAGE'] = 'Rang Slika';
$lang['RANK_IMAGE_EXPLAIN'] = 'Koristite ovo da biste odredili malu sliku povezanu s rangom.';

$lang['MUST_SELECT_RANK'] = 'Morate odabrati rang';

$lang['RANK_UPDATED'] = 'Rang je uspješno ažuriran.';
$lang['RANK_ADDED'] = 'Rang je uspješno dodan.';
$lang['RANK_REMOVED'] = 'Rang je uspješno izbrisan.';
$lang['NO_UPDATE_RANKS'] = 'Rang je uspješno izbrisan. Međutim, korisnički računi koji koriste ovaj rang nisu ažurirani. Moraćete ručno resetirati rang na tim računima.';

$lang['CLICK_RETURN_RANKADMIN'] = 'Kliknite %sOvdje%s za povratak u Administraciju Rangi.';

// Disallow Username Admin
$lang['DISALLOW_CONTROL'] = 'Kontrola korisnickih imena zabranjenih.';
$lang['DISALLOW_EXPLAIN'] = 'Ovdje možete kontrolirati korisnička imena koja neće biti dopuštena. Zabrinuta korisnička imena mogu sadržavati zamjenski znak * Ovdje možete kontrolirati korisnička imena koja neće biti dopuštena. Zabrinuta korisnička imena mogu sadržavati zamjenski znak *. Zapamtite da nećete moći odrediti nijedno korisničko ime koje je već registrirano. Prvo ga morate izbrisati, a zatim zabraniti.';

$lang['DELETE_DISALLOW_TITLE'] = 'Uklonite nedozvoljeno korisničko ime.';
$lang['DELETE_DISALLOW_EXPLAIN'] = 'Možete ukloniti nedozvoljeno korisničko ime odabirom korisničkog imena s ovog popisa i klikom na predloženje.';

$lang['ADD_DISALLOW'] = 'Dodaj';
$lang['ADD_DISALLOW_TITLE'] = 'Dodajte nedozvoljeno korisničko ime.';

$lang['NO_DISALLOWED'] = 'Nema nedozvoljenih korisničkih imena.';

$lang['DISALLOWED_DELETED'] = 'Nedozvoljeno korisničko ime je uspješno uklonjeno.';
$lang['DISALLOW_SUCCESSFUL'] = 'Nedozvoljeno korisničko ime je uspješno dodano.';
$lang['DISALLOWED_ALREADY'] = 'Ime koje ste unijeli ne može se zabraniti. Već se nalazi na popisu, ili je na popisu riječi censur. Nećete moći više zatražiti tu prijavu, niti zabraniti.';

$lang['CLICK_RETURN_DISALLOWADMIN'] = 'Kliknite %sOvdje%s za povratak u Administraciju. korisnička imena.';

// Version Check
$lang['VERSION_INFORMATION'] = 'Informacije O Verziji';
$lang['UPDATE_AVAILABLE'] = 'Ažuriranje dostupno';
$lang['CHANGELOG'] = 'Zapis o promjenama';

// Login attempts configuration
$lang['MAX_LOGIN_ATTEMPTS'] = 'Dozvoljenih pokušaja prijave.';
$lang['MAX_LOGIN_ATTEMPTS_EXPLAIN'] = 'Broj dozvoljenih pokušaja prijave.';
$lang['LOGIN_RESET_TIME'] = 'Vrijeme zaključavanja za prijavu.';
$lang['LOGIN_RESET_TIME_EXPLAIN'] = 'Time in minutes the user has to wait before they can log in again after exceeding the allowed number of login attempts.';

// Permissions List
$lang['PERMISSIONS_LIST'] = 'Popis dozvola.';
$lang['AUTH_CONTROL_CATEGORY'] = 'Kontrola dozvola za kategoriju.';
$lang['FORUM_AUTH_LIST_EXPLAIN'] = 'Ovo pruža sažetak razina ovlaštenja svake foruma. Možete urediti ove dozvole, koristeći jednostavne ili napredne metode klikajući na naziv foruma. Zapamtite da će promjena razine dozvola na forumima utjecati na to koji će korisnici moći izvršiti različite operacije u njima.';
$lang['CAT_AUTH_LIST_EXPLAIN'] = 'Ovo pruža sažetak razina dozvola za sve forume unutar ove kategorije. Možete urediti dozvole pojedinih foruma, koristeći jednostavne ili napredne metode klikom na naziv foruma. Alternativno, možete postaviti dozvole za sve forume u ovoj kategoriji koristeći padajuće izbornike na dnu stranice. Zapamtite da će promjena razine dozvola na forumima utjecati na to koji će korisnici moći izvršiti različite operacije u njima.';
$lang['FORUM_AUTH_LIST_EXPLAIN_ALL'] = 'Svim korisnicima';
$lang['FORUM_AUTH_LIST_EXPLAIN_REG'] = 'Svi registrirani korisnici';
$lang['FORUM_AUTH_LIST_EXPLAIN_PRIVATE'] = 'Samo korisnicima kojima su dane posebne dozvole.';
$lang['FORUM_AUTH_LIST_EXPLAIN_MOD'] = 'Samo moderatori ovog foruma.';
$lang['FORUM_AUTH_LIST_EXPLAIN_ADMIN'] = 'Samo administratori.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_VIEW'] = '%s može vidjeti ovaj forum.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_READ'] = '%s može čitati poruke u ovom forumu.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_POST'] = '%s može postaviti u ovom forumu.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_REPLY'] = '%s može odgovarati na postove u ovom forumu';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_EDIT'] = '%s može uređivati poruke u ovom forumu.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_DELETE'] = '%s može brisati poruke u ovom forumu.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_STICKY'] = '%s može objaviti priključene teme u ovom forumu.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_ANNOUNCE'] = '%s može postavljati objave u ovom forumu.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_VOTE'] = '%s može glasati u anketama u ovom forumu.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_POLLCREATE'] = '%s može kreirati ankete u ovom forumu.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_ATTACHMENTS'] = '%s može privitke.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_DOWNLOAD'] = '%s može preuzeti privitke.';

// Tooltips for disabled permissions
$lang['AUTH_TOOLTIP_FORUM_MODE'] = 'Forum mod: %s — nije moguće promijeniti';
$lang['AUTH_TOOLTIP_MOD_OVERRIDE'] = 'Dozvola omogućena putem "Moderator"';
$lang['AUTH_TOOLTIP_GROUP_HAS'] = 'Dozvola dana putem grupe';

// Misc
$lang['SF_SHOW_ON_INDEX'] = 'Prikaži na glavnoj stranici.';
$lang['SF_PARENT_FORUM'] = 'Roditeljski forum.';
$lang['SF_NO_PARENT'] = 'Bez roditeljskog foruma.';
$lang['SYNC'] = 'Sinkronizacija';

// Mods
$lang['MAX_NEWS_TITLE'] = 'Max. news title length';
$lang['NEWS_COUNT'] = 'Koliko novosti prikazati';
$lang['NEWS_FORUM_ID'] = 'Iz kojih foruma prikazati <br /> <h6>Za više foruma, navedite ID-ove odvojene zarezima. Primjer: 1,2,3</h6>';
$lang['TRACKER_STATS'] = 'Tracker statistics';
$lang['WHOIS_INFO'] = 'IP address information';
$lang['SHOW_MOD_HOME_PAGE'] = 'Show moderators on the homepage (index.php)';
$lang['SHOW_BOARD_STARTED_INDEX'] = 'Prikaži datum početka foruma na index.php.';
$lang['PREMOD_HELP'] = '<h4><span class="tor-icon tor-dup">&#8719;</span> Pre-moderation</h4> <h6>If there are no torrents with status v, #, or T in this section and its subsections, new distributions will automatically receive this status</h6>';
$lang['TOR_COMMENT'] = '<h4>Comment on the status of a distribution</h4> <h6>The comment allows you to point out errors in the release. If corrections are needed, a response form becomes available to the uploader to fix the release</h6>';
$lang['SEED_BONUS_ADD'] = '<h4>Seed bonus rules</h4> <h6>Number of torrents being seeded by the user and the corresponding bonus points awarded per hour</h6>';
$lang['SEED_BONUS_RELEASE'] = 'up to N releases';
$lang['SEED_BONUS_POINTS'] = 'bonus points per hour';
$lang['SEED_BONUS_TOR_SIZE'] = '<h4>Minimum torrent size to qualify for bonus points</h4> <h6>Leave blank to award bonuses for all torrents regardless of size.</h6>';
$lang['SEED_BONUS_USER_REGDATA'] = '<h4>Minimum user account age to qualify for bonus points</h4> <h6>Leave blank to award bonuses to all users regardless of account age.</h6>';
$lang['SEED_BONUS_WARNING'] = 'Pažnja! Bonusi za sjeme moraju biti u uzlaznom redoslijedu.';
$lang['SEED_BONUS_EXCHANGE'] = 'Configuring exchange seed bonuses';
$lang['SEED_BONUS_ROPORTION'] = 'Exchange rate: bonus points to GB of upload credit';

$lang['ALLOWED'] = 'Dopušteno';
$lang['RETURN_CONFIG'] = '%sVrati se na Konfiguraciju%s';
$lang['CONFIG_UPD'] = 'Konfiguracija je uspješno ažurirana.';

// Forum config
$lang['BT_SELECT_FORUMS'] = 'Opcije na forumu:';
$lang['BT_SELECT_FORUMS_EXPL'] = 'držite <i>Ctrl</i> pri odabiru nekoliko foruma';

$lang['REG_TORRENTS'] = 'Registriraj bujicu.';
$lang['DISALLOWED'] = 'Zabranjeno.';
$lang['ALLOW_REG_TRACKER'] = 'Dozvoljeni forumi za registraciju .bujica na trackeru.';
$lang['ALLOW_PORNO_TOPIC'] = 'Dozvoljen sadržaj 18+';
$lang['SELF_MODERATED'] = 'Korisnici mogu <b>premjestiti</b> svoje teme na drugi forum.';

$lang['BT_ANNOUNCE_URL_HEAD'] = 'Prijavi URL';
$lang['BT_ANNOUNCE_URL'] = 'Prijavi URL';
$lang['BT_ANNOUNCE_URL_EXPL'] = 'možete odrediti dodatne dopuštene URL-ove u "includes/torrent_announce_urls.php".';
$lang['BT_DISABLE_DHT'] = 'Isključite DHT mrežu.';
$lang['BT_DISABLE_DHT_EXPL'] = 'Onemogućite razmjenu i DHT (preporučuje se za privatne mreže, samo URL najava).';
$lang['BT_PRIVATE_TRACKER'] = 'Ovaj tracker je privatni: popis datoteka (za goste), DHT | PEX su onemogućeni';
$lang['BT_PRIVATE_TORRENT'] = 'Kreator ove bujice je napravio privatnu';
$lang['BT_CHECK_ANNOUNCE_URL'] = 'Provjerite URL za najavu.';
$lang['BT_CHECK_ANNOUNCE_URL_EXPL'] = 'only register allowed URLs on the tracker';
$lang['BT_REPLACE_ANN_URL'] = 'Zamijenite definiranim URL-om.';
$lang['BT_REPLACE_ANN_URL_EXPL'] = 'zamijenite originalni URL za najavu s vašim zadanim u .torrent datotekama.';
$lang['BT_DEL_ADDIT_ANN_URLS'] = 'Uklonite sve dodatne URL-ove za najavu.';
$lang['BT_DEL_ADDIT_ANN_URLS_EXPL'] = 'ako torrent sadrži adrese drugih trackera, oni će biti uklonjeni';

$lang['BT_SHOW_PEERS_HEAD'] = 'Popis vršnjaka.';
$lang['BT_SHOW_PEERS'] = 'Prikaži vršnjake (seedere i leechere).';
$lang['BT_SHOW_PEERS_EXPL'] = 'to će pokazati popis seedera/leechera iznad teme s torentom.';
$lang['BT_SHOW_PEERS_MODE'] = 'Po defaultu, vršnjaci se prikazuju kao:';
$lang['BT_SHOW_PEERS_MODE_COUNT'] = 'Samo broj.';
$lang['BT_SHOW_PEERS_MODE_NAMES'] = 'Samo imena.';
$lang['BT_SHOW_PEERS_MODE_FULL'] = 'Potpune informacije';
$lang['BT_ALLOW_SPMODE_CHANGE'] = 'Dopusti "Potpune detalje" način.';
$lang['BT_ALLOW_SPMODE_CHANGE_EXPL'] = 'ako je "ne", samo osnovni način prikaza će biti dostupan.';
$lang['BT_SHOW_IP_ONLY_MODER'] = '<b>IP</b> adrese vršnjaka su vidljive samo moderatorima.';
$lang['BT_SHOW_PORT_ONLY_MODER'] = '<b>Port</b>i vršnjaka su vidljivi samo moderatorima.';

$lang['BT_SHOW_DL_LIST_HEAD'] = 'Popis preuzimanja.';
$lang['BT_SHOW_DL_LIST'] = 'Prikaži popis preuzimanja po temama.';
$lang['BT_DL_LIST_ONLY_1ST_PAGE'] = 'Prikaži popis preuzimanja samo na prvoj stranici teme.';
$lang['BT_DL_LIST_ONLY_COUNT'] = 'Prikaži samo broj korisnika';
$lang['BT_SHOW_DL_LIST_BUTTONS'] = 'Prikaži gumbe za ručnu promjenu stanja preuzimanja.';
$lang['BT_SHOW_DL_BUT_WILL'] = $lang['DLWILL'];
$lang['BT_SHOW_DL_BUT_DOWN'] = $lang['DLDOWN'];
$lang['BT_SHOW_DL_BUT_COMPL'] = $lang['DLCOMPLETE'];
$lang['BT_SHOW_DL_BUT_CANCEL'] = $lang['DLCANCEL'];

$lang['BT_ADD_AUTH_KEY_HEAD'] = 'Ključ.';
$lang['BT_ADD_AUTH_KEY'] = 'Omogućite dodavanje ključa na torrent datoteke prije preuzimanja.';

$lang['BT_TOR_BROWSE_ONLY_REG_HEAD'] = 'Torrent preglednik (tracker)';
$lang['BT_TOR_BROWSE_ONLY_REG'] = 'Torrent preglednik (tracker.php) dostupan je samo za prijavljene korisnike';
$lang['BT_SEARCH_BOOL_MODE'] = 'Dopusti logično full-text pretraživanje';
$lang['BT_SEARCH_BOOL_MODE_EXPL'] = 'koristite *, +, - u pretragama';

$lang['BT_SHOW_DL_STAT_ON_INDEX_HEAD'] = 'Razno';
$lang['BT_SHOW_DL_STAT_ON_INDEX'] = "Prikaži UL/DL statistike korisnika na vrhu glavne stranice foruma";
$lang['BT_NEWTOPIC_AUTO_REG'] = 'Automatska Registracija torrenta na adresi nove teme';
$lang['BT_SET_DLTYPE_ON_TOR_REG'] = 'Status teme promijenjen u "Preuzimanje" prilikom registracije torrenta.';
$lang['BT_SET_DLTYPE_ON_TOR_REG_EXPL'] = 'Promijenit će tip teme u "Preuzimanje" bez obzira na postavke foruma.';
$lang['BT_UNSET_DLTYPE_ON_TOR_UNREG'] = 'Status teme promijeniti u "Normalan" prilikom odjavljivanja torrenta s trackera.';

// Release
$lang['TEMPLATE_DISABLE'] = 'Predložak je onemogućen.';
$lang['FOR_NEW_TEMPLATE'] = 'za nove modele!';
$lang['QUESTION'] = 'Are you sure you want to perform this action?';

$lang['CRON_LIST'] = 'Popis cron.';
$lang['CRON_ID'] = 'ID.';
$lang['CRON_ACTIVE'] = 'Na';
$lang['CRON_ACTIVE_EXPL'] = 'Aktivni zadaci';
$lang['CRON_TITLE'] = 'Naziv';
$lang['CRON_SCRIPT'] = 'Scenarij';
$lang['CRON_SCHEDULE'] = 'Raspored';
$lang['CRON_LAST_RUN'] = 'Posljednje pokretanje.';
$lang['CRON_NEXT_RUN'] = 'Sljedeće pokretanje.';
$lang['CRON_RUN_COUNT'] = 'Izvršava.';
$lang['CRON_EXECUTION_TIME'] = 'Vrijeme izvođenja';
$lang['CRON_MANAGE'] = 'Upravljanje';
$lang['CRON_DISABLED_WARNING'] = 'Upozorenje! Pokretanje cron skripti je onemogućeno. Da biste ga omogućili, postavite varijablu APP_CRON_ENABLED.';

$lang['CRON_ENABLED'] = 'Cron omogućen.';
$lang['CRON_CHECK_INTERVAL'] = 'Interval cron-a (sekunde).';

$lang['WITH_SELECTED'] = 'S odabranim opcijama.';
$lang['NOTHING'] = 'ne poduzimati ništa.';
$lang['CRON_RUN'] = 'Pokreni.';
$lang['CRON_DEL'] = 'Izbrisati';
$lang['CRON_DISABLE'] = 'Isključiti';
$lang['CRON_ENABLE'] = 'Uključiti';
$lang['DELETE_JOB'] = 'Are you sure you want to delete this cron job?';
$lang['CRON_WORKS'] = 'Cron trenutno radi ili je slomljen -> ';
$lang['REPAIR_CRON'] = 'Popravak cron-a.';

$lang['CRON_EDIT_HEAD_EDIT'] = 'Uredi rad.';
$lang['CRON_EDIT_HEAD_ADD'] = 'Dodaj zadatak.';
$lang['CRON_SCRIPT_EXPL'] = 'naziv skripte iz "includes/cron/jobs/".';
$lang['SCHEDULE'] = [
    'select' => '&raquo; Odaberi početak.',
    'hourly' => 'Svaka satnica.',
    'daily' => 'Svaki dan.',
    'weekly' => 'Svake sedmice.',
    'monthly' => 'Svaki mjesec.',
    'interval' => 'interval',
];
$lang['NOSELECT'] = 'Not selected';
$lang['RUN_DAY'] = 'Dan pokretanja.';
$lang['RUN_DAY_EXPL'] = 'the day this job runs';
$lang['RUN_TIME'] = 'Vrijeme izvođenja';
$lang['RUN_TIME_EXPL'] = 'the time this job runs (e.g. 05:00:00)';
$lang['RUN_ORDER'] = 'Izvršenja naloga';
$lang['LAST_RUN'] = 'Posljednji Pokretanje';
$lang['NEXT_RUN'] = 'Interval pokretanja.';
$lang['RUN_INTERVAL'] = 'Interval za pokretanje.';
$lang['RUN_INTERVAL_EXPL'] = 'na primjer, 00:10:00';
$lang['LOG_ENABLED'] = 'Časopis je uključen';
$lang['LOG_FILE'] = 'Log datoteka';
$lang['LOG_FILE_EXPL'] = 'the file to save the log to';
$lang['LOG_SQL_QUERIES'] = 'Log SQL upite';
$lang['FORUM_DISABLE'] = 'Isključite forum';
$lang['BOARD_DISABLE_EXPL'] = 'isključite forum kada se ovaj posao obavlja';
$lang['RUN_COUNTER'] = 'Pokreni brojač';

$lang['JOB_REMOVED'] = 'Zadatak je uspješno uklonjen';
$lang['SCRIPT_DUPLICATE'] = 'Cron zadatak s ovim skriptom već postoji';
$lang['TITLE_DUPLICATE'] = 'Cron zadatak s ovim naslovom već postoji';
$lang['CLICK_RETURN_JOBS_ADDED'] = '%sPovratak na dodavanje posla%s';
$lang['CLICK_RETURN_JOBS'] = '%sNazad na planer zadatka%s';

$lang['REBUILD_SEARCH'] = 'Ponovno Izgraditi Indeks Za Pretraživanje';
$lang['REBUILD_SEARCH_DESC'] = 'Ovaj modul će indeksirati svaku poruku na vašem forumu, vraćajući tablice pretraživanja. Možete prekinuti kada god želite, a sljedeći put kada ga ponovno pokrenete, moći ćete nastaviti od mjesta gdje ste stali.<br /><br />Može proći dugo vremena da pokaže svoj napredak (ovisno o "porukama po ciklusu" i "vremenskom ograničenju"), stoga nemojte napustiti stranicu sa napretkom dok ne završi, osim ako naravno želite prekinuti to.';

// Input screen
$lang['STARTING_POST_ID'] = 'Počevši post_id';
$lang['STARTING_POST_ID_EXPLAIN'] = 'Prva poruka od koje će se obraditi<br />Možete odabrati da započnete s početka ili od poruke na kojoj ste posljednji puta stali.';

$lang['START_OPTION_BEGINNING'] = 'početi od početka';
$lang['START_OPTION_CONTINUE'] = 'continue from where you last stopped';

$lang['CLEAR_SEARCH_TABLES'] = 'Očistite tablice pretraživanja';
$lang['CLEAR_SEARCH_TABLES_EXPLAIN'] = '';
$lang['CLEAR_SEARCH_NO'] = 'Nema';
$lang['CLEAR_SEARCH_DELETE'] = 'Izbrisati';
$lang['CLEAR_SEARCH_TRUNCATE'] = 'IZREZATI';

$lang['NUM_OF_POSTS'] = 'Broj postova';
$lang['NUM_OF_POSTS_EXPLAIN'] = 'Ukupni broj postova za obradu<br />Automatski se popunjava s brojem ukupnih/ostalih postova pronađenih u bazi podataka.';

$lang['POSTS_PER_CYCLE'] = 'Post po ciklusu';
$lang['POSTS_PER_CYCLE_EXPLAIN'] = 'Broj postova za obradu po ciklusu<br />Održavajte ga nizak kako biste izbjegli PHP/web poslužitelja timeout.';

$lang['REFRESH_RATE'] = 'Učestalost ažuriranja';
$lang['REFRESH_RATE_EXPLAIN'] = 'Koliko vremena (sekundi) da ostanete u mirovanju prije nego što pređete na sljedeći ciklus obrade<br />Obično to ne morate mijenjati.';

$lang['TIME_LIMIT'] = 'Ograničenje vremena';
$lang['TIME_LIMIT_EXPLAIN'] = 'Koliko vremena (sekundi) može trajati post-procesiranje prije prelaska na sljedeći ciklus';
$lang['TIME_LIMIT_EXPLAIN_WEBSERVER'] = '<i>Vaš web poslužitelj ima istek vremena od %s sekundi, stoga ostanite ispod ove vrijednosti</i>';

// Information strings
$lang['INFO_PROCESSING_STOPPED'] = 'Posljednji ste put zaustavili obradu na post_id %s (%s obrađenih postova) na %s';
$lang['INFO_PROCESSING_ABORTED'] = 'Zadnji ste prekinuli obradu na post_id %s (%s obrađenih postova) na %s';
$lang['INFO_PROCESSING_ABORTED_SOON'] = 'Please wait a few minutes before you continue...';
$lang['INFO_PROCESSING_FINISHED'] = 'Uspješno ste završili obradu (%s obrađene poruke) na %s';
$lang['INFO_PROCESSING_FINISHED_NEW'] = 'Uspješno ste završili obradu na post_id %s (%s obrađenih postova) na %s,<br />ali je nakon tog datuma došlo do %s novih postova.';

// Progress screen
$lang['REBUILD_SEARCH_PROGRESS'] = 'Ponovno izgraditi napredak pretraživanja';

$lang['PROCESSED_POST_IDS'] = 'Obrađeni post ID-evi : %s - %s';
$lang['TIMER_EXPIRED'] = 'Odbrojavanje je istekao u %s sec. ';
$lang['CLEARED_SEARCH_TABLES'] = 'Očistiti tablice pretraživanja. ';
$lang['DELETED_POSTS'] = '%s post(ova) su uklonjene korisnicima tijekom obrade. ';
$lang['PROCESSING_NEXT_POSTS'] = 'Obraditi sljedećih %s postova. Molimo pričekajte... ';
$lang['ALL_SESSION_POSTS_PROCESSED'] = 'Obrađene su sve poruke u trenutnoj sesiji.';
$lang['ALL_POSTS_PROCESSED'] = 'Sve poruke su uspješno obrađene.';
$lang['ALL_TABLES_OPTIMIZED'] = 'Sve tablice pretraživanja uspješno su optimizirane.';

$lang['PROCESSING_POST_DETAILS'] = 'Obrada posta';
$lang['CURRENT_SESSION'] = 'Tekuće Sjednice';
$lang['TOTAL'] = 'Ukupna';

$lang['PROCESS_DETAILS'] = 'od <b>%s</b> u <b>%s</b> (od ukupno <b>%s</b>)';
$lang['PERCENT_COMPLETED'] = '%s %% završeno.';

$lang['PROCESSING_TIME_DETAILS'] = 'Detalji trenutne sesije.';
$lang['TIME_LAST_POSTS'] = 'Zadnjih %s postova.';
$lang['TIME_FROM_THE_BEGINNING'] = 'Od samog početka';
$lang['TIME_AVERAGE'] = 'Prosjek po ciklusu';
$lang['TIME_ESTIMATED'] = 'Procijenjeno do završetka.';

$lang['SIZE_ESTIMATED'] = 'Procjenjuje se, nakon završetka.';
$lang['SIZE_SEARCH_TABLES'] = 'Veličina pretraživačkih tablica.';

$lang['POSTS_LAST_CYCLE'] = 'Obrađene su poruke na zadnjem ciklusu.';

$lang['INFO_ESTIMATED_VALUES'] = '(*) Sve procijenjene vrijednosti su izračunate približno<br />na temelju trenutnog završenog postotka i možda neće predstavljati stvarne konačne vrijednosti.<br />Kako se završen postotak povećava, procijenjene vrijednosti će se približiti stvarnim.';

$lang['CLICK_RETURN_REBUILD_SEARCH'] = 'Kliknite %shere%s da se vratite na obnovu pretraživanja.';
$lang['REBUILD_SEARCH_ABORTED'] = 'Obnova pretraživanja prekinuta na post_id %s.<br /><br />Ako ste prekinuli dok je obrada bila aktivna, morate čekati nekoliko minuta prije nego što ponovno pokrenete obnovu pretraživanja, tako da posljednji ciklus može završiti.';
$lang['WRONG_INPUT'] = 'Ste unijeli netočne vrijednosti. Molimo provjerite unos i pokušajte ponovno.';

// Buttons
$lang['PROCESSING'] = 'Obrada...';
$lang['FINISHED'] = 'Završio';

$lang['BOT_TOPIC_MOVED_FROM_TO'] = 'Tema je premještena iz foruma [b]%s[/b] u forum [b]%s[/b].[br][b]Razlog premještanja:[/b] %s[br][br]%s';
$lang['BOT_MESS_SPLITS'] = 'Tema je bila podijeljena. Nova tema - [b]%s[/b][br][br]%s';
$lang['BOT_TOPIC_SPLITS'] = 'Tema je bila podijeljena od [b]%s[/b][br][br]%s';

$lang['CALLSEED'] = 'Call seeders';
$lang['CALLSEED_EXPLAIN'] = 'Notify seeders with a request to resume seeding this release';
$lang['CALLSEED_SUBJECT'] = 'Seeding help needed: %s';
$lang['CALLSEED_TEXT'] = 'Hello![br]Your help is needed for the release [url=%s]%s[/url][br]If you want to help but have already deleted the torrent file, you can download it [url=%s]here[/url][br][br]Your help would be greatly appreciated!';
$lang['CALLSEED_MSG_OK'] = 'Request has been sent to everyone who has downloaded this release';
$lang['CALLSEED_MSG_SPAM'] = 'A request has already been sent recently (possibly not by you).<br /><br />The next request can be sent on <b>%s</b>.';
$lang['CALLSEED_HAVE_SEED'] = 'Tema nije potrebna pomoć (<b>Seeders:</b> %d)';

$lang['LOG_ACTION']['LOG_TYPE'] = [
    'mod_topic_delete' => 'Tema:<br /> <b>deleted</b>',
    'mod_topic_move' => 'Tema:<br /> <b>moved</b>',
    'mod_topic_lock' => 'Tema:<br /> <b>closed</b>',
    'mod_topic_unlock' => 'Tema:<br /> <b>opened</b>',
    'mod_topic_split' => 'Tema:<br /> <b>split</b>',
    'mod_topic_set_downloaded' => 'Tema:<br /> <b>postavljen preuzet</b>.',
    'mod_topic_unset_downloaded' => 'Tema:<br /> <b>uklonjen preuzet</b>.',
    'mod_topic_change_tor_status' => 'Tema:<br /> <b>promijenjen status bujice</b>.',
    'mod_topic_change_tor_type' => 'Tema:<br /> <b>promijenjen tip bujice</b>.',
    'mod_topic_tor_unregister' => 'Tema:<br /> <b>bujica odjavljena</b>.',
    'mod_topic_tor_register' => 'Tema:<br /> <b>bujica registrirana</b>.',
    'mod_topic_tor_delete' => 'Tema:<br /> <b>bujica izbrisana</b>.',
    'mod_topic_renamed' => 'Tema:<br /> <b>preimenovana</b>.',
    'mod_topic_poll_started' => 'Tema:<br /> <b>izbori započeti</b>.',
    'mod_topic_poll_finished' => 'Tema:<br /> <b>izbori završeni</b>.',
    'mod_topic_poll_deleted' => 'Tema:<br /> <b>izbori izbrisani</b>.',
    'mod_topic_poll_added' => 'Tema:<br /> <b>izbori dodani</b.',
    'mod_topic_poll_edited' => 'Tema:<br /> <b>izbori uređeni</b>',
    'mod_post_delete' => 'Položaj:<br /> <b>izbrisan</b>',
    'mod_post_pin' => 'Položaj:<br /> <b>zakačen</b>',
    'mod_post_unpin' => 'Položaj:<br /> <b>uklonjen</b>',
    'adm_user_delete' => 'Korisnika:<br /> <b>izbrisan</b>',
    'adm_user_ban' => 'User:<br /> <b>banned</b>',
    'adm_user_unban' => 'User:<br /> <b>unbanned</b>',
];

$lang['ACTS_LOG_ALL_ACTIONS'] = 'Sve akcije';
$lang['ACTS_LOG_SEARCH_OPTIONS'] = 'Akcije iz dnevnika: opcije pretraživanja';
$lang['ACTS_LOG_FORUM'] = 'Forum';
$lang['ACTS_LOG_ACTION'] = 'Akcija';
$lang['ACTS_LOG_LOGS_FROM'] = 'Dnevnici iz ';
$lang['ACTS_LOG_FIRST'] = 'počevši od';
$lang['ACTS_LOG_DAYS_BACK'] = 'dana prije';
$lang['ACTS_LOG_TOPIC_MATCH'] = 'Naslov teme odgovara';
$lang['ACTS_LOG_SORT_BY'] = 'Sortiraj po';
$lang['ACTS_LOG_LOGS_ACTION'] = 'Akcija';
$lang['ACTS_LOG_USERNAME'] = 'Korisničko ime';
$lang['ACTS_LOG_TIME'] = 'Vrijeme';
$lang['ACTS_LOG_INFO'] = 'Informacije';
$lang['ACTS_LOG_FILTER'] = 'Filter';
$lang['ACTS_LOG_TOPICS'] = 'Teme:';
$lang['ACTS_LOG_OR'] = 'ili';

$lang['RELEASE'] = 'Predlošci Izdavanja';
$lang['RELEASES'] = 'Izdavanja';

$lang['BACK'] = 'Natrag';
$lang['NEW_RELEASE'] = 'Novo izdanje';
$lang['NEXT'] = 'Nastavak';
$lang['ALL'] = 'Sve';

$lang['TPL_EMPTY_FIELD'] = 'You must fill in the field <b>%s</b>';
$lang['TPL_EMPTY_SEL'] = 'Morate odabrati <b>%s</b>';
$lang['TPL_NOT_NUM'] = '<b>%s</b> - Nije broj';
$lang['TPL_NOT_URL'] = '<b>%s</b> - Mora biti https:// URL';
$lang['TPL_NOT_IMG_URL'] = '<b>%s</b> - Mora biti https:// IMG_URL';
$lang['TPL_PUT_INTO_SUBJECT'] = 'staviti u predmet';
$lang['TPL_POSTER'] = 'poster';
$lang['TPL_REQ_FILLING'] = 'zahtijeva ispunjavanje';
$lang['TPL_NEW_LINE'] = 'nova linija';
$lang['TPL_NEW_LINE_AFTER'] = 'novi redak nakon naslova';
$lang['TPL_NUM'] = 'broj';
$lang['TPL_URL'] = 'URL';
$lang['TPL_IMG'] = 'slika';
$lang['TPL_PRE'] = 'pre';
$lang['TPL_SPOILER'] = 'spojler';
$lang['TPL_IN_LINE'] = 'u istom retku';
$lang['TPL_HEADER_ONLY'] = 'samo u naslovu';

$lang['SEARCH_INVALID_USERNAME'] = 'Uneseno je nevažeće korisničko ime za pretraživanje';
$lang['SEARCH_INVALID_EMAIL'] = 'Unesena je nevažeća adresa e-pošte za pretraživanje';
$lang['SEARCH_INVALID_IP'] = 'Unesena je nevažeća IP adresa za pretraživanje';
$lang['SEARCH_INVALID_GROUP'] = 'Nevažeći korisnici sa ID unesenim za pretraživanje';
$lang['SEARCH_INVALID_RANK'] = 'Za pretraživanje je unesen nevažeći rang';
$lang['SEARCH_INVALID_DATE'] = 'Unesen je nevažeći datum za pretraživanje';
$lang['SEARCH_INVALID_POSTCOUNT'] = 'Za pretraživanje je unesen nevažeći broj postova';
$lang['SEARCH_INVALID_USERFIELD'] = 'Nevažeći podaci o korisnicima';
$lang['SEARCH_INVALID_LASTVISITED'] = 'Unesen je nevažeći datum za zadnje posjećeno pretraživanje';
$lang['SEARCH_INVALID_LANGUAGE'] = 'Neispravno odabran jezik';
$lang['SEARCH_INVALID_TIMEZONE'] = 'Neispravno odabrana vremenska zona';
$lang['SEARCH_INVALID_MODERATORS'] = 'Neispravno odabran moderator';
$lang['SEARCH_INVALID'] = 'Neispravno pretraživanje';
$lang['SEARCH_INVALID_DAY'] = 'Dan koji ste upisali je nevažeći';
$lang['SEARCH_INVALID_MONTH'] = 'Mjesec koji ste unijeli je nevažeći';
$lang['SEARCH_INVALID_YEAR'] = 'Godina koju ste unijeli je nevažeća';
$lang['SEARCH_FOR_USERNAME'] = 'Pretraživanje korisničkih imena odgovarajućeg %s';
$lang['SEARCH_FOR_EMAIL'] = 'Pretraživanje e-pošte koja odgovara %s';
$lang['SEARCH_FOR_IP'] = 'Pretraživanje IP adresa koje odgovaraju %s';
$lang['SEARCH_FOR_DATE'] = 'Pretraživanje korisnika koji su se pridružili %s %d/%d/%d';
$lang['SEARCH_FOR_GROUP'] = 'Pretraživanje članova grupe %s';
$lang['SEARCH_FOR_RANK'] = 'Searching users with rank %s';
$lang['SEARCH_FOR_BANNED'] = 'Pretraživanje zabranjenih korisnika';
$lang['SEARCH_FOR_ADMINS'] = 'Pretraživanje administratora';
$lang['SEARCH_FOR_MODS'] = 'Pretraživanje moderatora';
$lang['SEARCH_FOR_DISABLED'] = 'Pretraživanje deaktiviranih korisnika';
$lang['SEARCH_FOR_POSTCOUNT_GREATER'] = 'Pretraživanje korisnika s brojem objava većim od %d';
$lang['SEARCH_FOR_POSTCOUNT_LESSER'] = 'Pretraživanje korisnika s brojem postova manjim od %d';
$lang['SEARCH_FOR_POSTCOUNT_RANGE'] = 'Pretraživanje korisnika s brojem postova između %d i %d';
$lang['SEARCH_FOR_POSTCOUNT_EQUALS'] = 'Pretraživanje korisnika s brojem postova %d';
$lang['SEARCH_FOR_USERFIELD_TWITTER'] = 'Pretraživanje korisnika Twittera odgovarao %s';
$lang['SEARCH_FOR_USERFIELD_WEBSITE'] = 'Traženje korisnika s web stranicom koja odgovara %s';
$lang['SEARCH_FOR_USERFIELD_LOCATION'] = 'Pretraživanje korisnika s lokacijom koja odgovara %s';
$lang['SEARCH_FOR_USERFIELD_INTERESTS'] = 'Pretraživanje korisnika s obzirom na njihove interese polje koje odgovara %s';
$lang['SEARCH_FOR_USERFIELD_OCCUPATION'] = 'Pretraživanje korisnika s njihovim zanimanjem polje koje odgovara %s';
$lang['SEARCH_FOR_LASTVISITED_INTHELAST'] = 'Pretraživanje za korisnike koji su posjetili u posljednjih %s';
$lang['SEARCH_FOR_LASTVISITED_AFTERTHELAST'] = 'Pretraživanje korisnika koji su posjetili nakon posljednjeg %s';
$lang['SEARCH_FOR_LANGUAGE'] = 'Pretraživanje korisnika sa njihovim postavkama %s kao njihovim jezikom';
$lang['SEARCH_FOR_TIMEZONE'] = 'Pretraživanje korisnika koji su postavili %s kao svoju vremensku zonu';
$lang['SEARCH_FOR_MODERATORS'] = 'Potraga za moderatorima foruma -> %s';
$lang['SEARCH_USERS_ADVANCED'] = 'Napredno Pretraživanje Korisnika';
$lang['SEARCH_USERS_EXPLAIN'] = 'Ovaj modul omogućava napredno pretraživanje korisnika na širokom rasponu kriterija. Molimo pročitajte opise ispod svakog polja da biste potpuno razumjeli svaku opciju pretraživanja.';
$lang['SEARCH_USERNAME_EXPLAIN'] = 'Ovdje možete izvršiti pretragu bez obzira na velika i mala slova za korisnička imena. Ako želite da podudarate dio korisničkog imena, koristite * (asterisk) kao zamjenski znak.';
$lang['SEARCH_EMAIL_EXPLAIN'] = 'Unesite izraz za podudaranje sa adresom e-pošte korisnika. Ovo je bez obzira na velika i mala slova. Ako želite napraviti djelomično podudaranje, koristite * (zvjezdicom) kao zamjenski znak.';
$lang['SEARCH_IP_EXPLAIN'] = 'Pretraživanje korisnika prema određenoj IP adresi (xxx.xxx.xxx.xxx).';
$lang['SEARCH_USERS_JOINED'] = 'Korisnici koji su se pridružili';
$lang['SEARCH_USERS_LASTVISITED'] = 'Users who have visited';
$lang['IN_THE_LAST'] = 'u posljednjih';
$lang['AFTER_THE_LAST'] = 'nakon posljednjeg';
$lang['BEFORE'] = 'Prije';
$lang['AFTER'] = 'Nakon';
$lang['SEARCH_USERS_JOINED_EXPLAIN'] = 'Search for users who joined before or after a specific date. The date format is YYYY/MM/DD.';
$lang['SEARCH_USERS_GROUPS_EXPLAIN'] = 'Pogledajte sve članove odabrane grupe.';
$lang['SEARCH_USERS_RANKS_EXPLAIN'] = 'View all users with the selected rank.';
$lang['BANNED_USERS'] = 'Zabranjeni korisnici';
$lang['DISABLED_USERS'] = 'Onemogućeni korisnici';
$lang['SEARCH_USERS_MISC_EXPLAIN'] = 'Administratori - Svi korisnici s ovlastima administratora; Moderatori - Svi moderatori foruma; Zabranjeni korisnici - Svi računi koji su zabranjeni na ovim forumima; Onesposobljeni korisnici - Svi korisnici s onemogućenim računima (ili ručno onemogućeni ili nikada nisu potvrdili svoju adresu e-pošte); Korisnici s onemogućenim PM-ovima - odabire korisnike kojima su uklonjene privilegije za privatne poruke (obavljeno putem upravljanja korisnicima)';
$lang['POSTCOUNT'] = 'Broj postova';
$lang['EQUALS'] = 'Jednako je';
$lang['GREATER_THAN'] = 'Više';
$lang['LESS_THAN'] = 'Manje';
$lang['SEARCH_USERS_POSTCOUNT_EXPLAIN'] = 'Možete tražiti korisnike na temelju vrijednosti broja postova. Možete pretraživati prema određenoj vrijednosti, većoj ili manjoj od vrijednosti ili između dvije vrijednosti. Za pretraživanje raspona, odaberite "Jednako" zatim stavite početnu i završnu vrijednost raspona odvojene crticom (-), npr. 10-15';
$lang['USERFIELD'] = 'Polje korisnika';
$lang['SEARCH_USERS_USERFIELD_EXPLAIN'] = 'Pretraživanje korisnika na temelju različitih profilnih polja. Podržani su zamjenski znakovi koristeći zvjezdicu (*).';
$lang['SEARCH_USERS_LASTVISITED_EXPLAIN'] = 'Možete tražiti korisnike prema datumu zadnje prijave, koristeći ovu opciju pretraživanja.';
$lang['SEARCH_USERS_LANGUAGE_EXPLAIN'] = 'Ovo će prikazati korisnike koji su odabrali određeni jezik u svom profilu.';
$lang['SEARCH_USERS_TIMEZONE_EXPLAIN'] = 'Korisnici koji su odabrali određenu vremensku zonu u svom profilu.';
$lang['MODERATORS_OF'] = 'Moderatori';
$lang['SEARCH_USERS_MODERATORS_EXPLAIN'] = 'Potražite korisnike s dopuštenjima za moderiranje određenog foruma. Dopuštenja za moderiranje prepoznaju se ili po korisničkim dopuštenjima ili po pripadnosti grupi s odgovarajućim dopuštenjima grupe.';

$lang['SEARCH_USERS_NEW'] = '%s je dalo %d rezultat(a). Izvršite <a href="%s">drugo pretraživanje</a>.';
$lang['BANNED'] = 'Zabranjen';
$lang['NOT_BANNED'] = 'Nije zabranjen';
$lang['SEARCH_NO_RESULTS'] = 'Nema korisnika koji odgovaraju vašim odabranim kriterijima. Pokušajte s drugim pretraživanjem. Ako pretražujete korisničko ime ili adresu e-pošte, za djelomična podudaranja morate koristiti zamjenski znak * (zvjezdica).';
$lang['ACCOUNT_STATUS'] = 'Status računa';
$lang['SORT_OPTIONS'] = 'Mogućnosti sortiranja:';
$lang['LAST_VISIT'] = 'Zadnja posjeta';
$lang['DAY'] = 'Dan';

$lang['POST_EDIT_CANNOT'] = 'Žao nam je, ali ne možete uređivati postove.';
$lang['FORUMS_IN_CAT'] = 'forumi u toj kategoriji';

$lang['MC_TITLE'] = 'Moderatorski komentar';
$lang['MC_LEGEND'] = 'Unesite komentar';
$lang['MC_FAQ'] = 'Uneseni tekst će biti prikazan ispod ove poruke.';
$lang['MC_COMMENT_PM_SUBJECT'] = '%s u vašoj poruci.';
$lang['MC_COMMENT_PM_MSG'] = "Hello, [b]%s[/b]\nA moderator has left a comment on your post [url=%s][b]%s[/b][/url][quote]\n%s\n[/quote]";
$lang['MC_COMMENT'] = [
    0 => [
        'title' => '',
        'type' => 'Izbriši komentar',
    ],
    1 => [
        'title' => 'Komentar od %s',
        'type' => 'Komentar',
    ],
    2 => [
        'title' => 'Informacije o %s',
        'type' => 'Informacije',
    ],
    3 => [
        'title' => 'Upozorenje od %s',
        'type' => 'Upozorenje',
    ],
    4 => [
        'title' => 'Prekršaji od %s.',
        'type' => 'Prekršaji.',
    ],
];

$lang['SITEMAP'] = 'Sitemap';
$lang['SITEMAP_ADMIN'] = 'Upravljanje Sitemap.';
$lang['SITEMAP_CREATED'] = 'Sitemap je postavljen.';
$lang['SITEMAP_AVAILABLE'] = 'Sitemap je dostupan na.';
$lang['SITEMAP_NOT_CREATED'] = 'Sitemap još nije stvoren.';
$lang['SITEMAP_OPTIONS'] = 'Mogućnosti.';
$lang['SITEMAP_CREATE'] = 'Izradite / ažurirajte sitemap.';
$lang['SITEMAP_WHAT_NEXT'] = 'Što učiniti dalje?';
$lang['SITEMAP_GOOGLE_1'] = 'Registrirati svoje web stranice u <a href="https://www.google.com/webmasters/" target="_blank">Google Webmaster</a> pomoću Google računa.';
$lang['SITEMAP_GOOGLE_2'] = '<a href="https://www.google.com/webmasters/tools/sitemap-list" target="_blank">Dodajte sitemap</a> stranice koju ste registrirali.';
$lang['SITEMAP_YANDEX_1'] = 'Registrirati svoje web stranice u <a href="https://webmaster.yandex.ru/sites/" target="_blank">Yandex Webmaster</a> koristeći vaš račun Yandex.';
$lang['SITEMAP_YANDEX_2'] = '<a href="https://webmaster.yandex.ru/site/map.xml" target="_blank">Add sitemap</a> stranice ste se registrirali.';
$lang['SITEMAP_BING_1'] = 'Registrirajte svoju stranicu na <a href="https://www.bing.com/webmaster/" target="_blank">Bing Webmaster</a> koristeći svoj Microsoft račun.';
$lang['SITEMAP_BING_2'] = 'Dodajte sitemap stranice koju ste registrirali u njegovim postavkama.';
$lang['SITEMAP_ADD_TITLE'] = 'Dodatne stranice za sitemap.';
$lang['SITEMAP_ADD_PAGE'] = 'Dodatne stranice.';
$lang['SITEMAP_ADD_EXP_1'] = 'Možete odrediti dodatne stranice na vašoj web stranici koje bi trebale biti uključene u vaš sitemap.';
$lang['SITEMAP_ADD_EXP_2'] = 'Svaka referenca mora početi s http(s):// i novom linijom!';

$lang['FORUM_MAP'] = 'Karta foruma.';
$lang['ATOM_FEED'] = 'Hraniti.';
$lang['ATOM_ERROR'] = 'Pogreška pri generiranju hranjenja.';
$lang['ATOM_SUBSCRIBE'] = 'Pretplatite se na feed.';
$lang['ATOM_UPDATED'] = 'Ažurirati.';
$lang['ATOM_GLOBAL_FEED'] = 'Globalni feed za sve forume.';

$lang['HASH_INVALID'] = 'Hash %s je nevažeći.';
$lang['HASH_NOT_FOUND'] = 'Izdanje s hash %s nije pronađeno.';

$lang['TERMS_EMPTY_TEXT'] = '[poravnati=center]Tekst ove stranice je uredio: [url]%s[/url]. Ova linija može vidjeti samo administratori.[/poravnati]';
$lang['TERMS_EXPLAIN'] = 'Na ovoj stranici možete navesti tekst osnovnih pravila koja se prikazuju korisnicima.';
$lang['TERMS_UPDATED_SUCCESSFULLY'] = 'Uvjeti su uspješno ažurirani';
$lang['CLICK_RETURN_TERMS_CONFIG'] = '%sKliknite ovdje da se vratite na urednik Uvjeta%s';

$lang['TR_STATS'] = [
    0 => 'neaktivni korisnici u 30 dana.',
    1 => 'neaktivni korisnici za 90 dana.',
    2 => 'srednje veličine distribucije na trackeru',
    3 => 'koliko ukupno ruku na trackeru.',
    4 => 'koliko aktivnih ruku (ima barem 1 LED).',
    5 => 'koliko ruku koja sijete više od 5 sjemena.',
    6 => 'koliko nas je nisam (oni koji su ispunili barem 1 više).',
    7 => 'koliko je najviše od nas je uploadera (za one koji su se išli barem 1 ruku).',
];

$lang['TORRENT_STATS_TITLE'] = 'Statistika torrenta';
$lang['TRACKER_STATS_TITLE'] = 'Statistika trackera';
$lang['TORRENTS'] = 'Torrenti';
$lang['PEERS'] = 'Sudionici';
$lang['CLIENTS'] = 'Klijenti';

$lang['NEW_POLL_START'] = 'Anketa je uključena.';
$lang['NEW_POLL_END'] = 'Anketa je završila.';
$lang['NEW_POLL_ENDED'] = 'Ova anketa je već završila.';
$lang['NEW_POLL_DELETE'] = 'Anketa je izbrisana.';
$lang['NEW_POLL_ADDED'] = 'Anketa je dodana.';
$lang['NEW_POLL_ALREADY'] = 'Tema već ima anketu.';
$lang['NEW_POLL_RESULTS'] = 'Anketa je promijenjena i stari rezultati su obrisani.';
$lang['NEW_POLL_VOTES'] = 'Morate unijeti ispravne opcije odgovora (minimalno 2, maksimalno %s).';
$lang['NEW_POLL_DAYS'] = 'Vreme ankete (%s dana od trenutka stvaranja teme) već je završilo.';
$lang['NEW_POLL_U_NOSEL'] = 'Niste odabrali da glasate.';
$lang['NEW_POLL_U_CHANGE'] = 'Anketa se može urediti.';
$lang['NEW_POLL_U_EDIT'] = 'Promijenite anketa (stari rezultati će biti izbrisani).';
$lang['NEW_POLL_U_VOTED'] = 'Svi su glasali.';
$lang['NEW_POLL_U_START'] = 'Uključite anketu.';
$lang['NEW_POLL_U_END'] = 'Završite anketu.';
$lang['NEW_POLL_M_TITLE'] = 'Naziv ankete.';
$lang['NEW_POLL_M_VOTES'] = 'Mogućnosti.';
$lang['NEW_POLL_M_EXPLAIN'] = 'Svaki redak odgovara jednom odgovoru (maks. ';

$lang['UPLOAD_ERROR_COMMON_DISABLED'] = 'Prenos datoteka onemogućen';
$lang['UPLOAD_ERROR_COMMON'] = 'Pogreška pri prijenosu datoteke';
$lang['UPLOAD_ERROR_SIZE'] = 'Prenesena datoteka premašuje maksimalnu veličinu %s';
$lang['UPLOAD_ERROR_FORMAT'] = 'Neispravan tip datoteke slike';
$lang['UPLOAD_ERROR_DIMENSIONS'] = 'Dimenzije slike premašuju maksimalno dozvoljen %sx%s piksela';
$lang['UPLOAD_ERROR_NOT_IMAGE'] = 'Preuzetu datoteku nije slika';
$lang['UPLOAD_ERROR_NOT_ALLOWED'] = 'Proširenje %s za preuzimanje nije dozvoljeno';
$lang['UPLOAD_ERRORS'] = [
    UPLOAD_ERR_INI_SIZE => 'vi ste premašili ograničenje veličine datoteke na poslužitelju',
    UPLOAD_ERR_FORM_SIZE => 'Prešli ste maksimalnu veličinu datoteke za prijenos',
    UPLOAD_ERR_PARTIAL => 'Datoteka je djelomično prenesena',
    UPLOAD_ERR_NO_FILE => 'Datoteka nije prenesena',
    UPLOAD_ERR_NO_TMP_DIR => 'privremeni direktorij nije pronađen',
    UPLOAD_ERR_CANT_WRITE => 'greška zapisa',
    UPLOAD_ERR_EXTENSION => 'Preuzimanje je zaustavljeno zbog proširenja',
];

// Captcha
$lang['CAPTCHA'] = 'Provjerite da niste robot';
$lang['CAPTCHA_WRONG'] = 'Niste mogli potvrditi da niste robot';
$lang['CAPTCHA_SETTINGS'] = '<h2>Captcha nije potpuno konfigurirana</h2><p>Generirajte ključeve koristeći nadzornu ploču vaše captcha usluge, nakon što ih stavite u datoteku config/config.php.</p>';
$lang['CAPTCHA_OCCURS_BACKGROUND'] = 'Verifikacija CAPTCHA-e odvija se u pozadini';

// Sending email
$lang['REPLY_TO'] = 'Odgovor na';
$lang['EMAILER_SUBJECT'] = [
    'EMPTY' => 'Bez predmeta',
    'GROUP_ADDED' => 'Dodani ste u korisničku grupu',
    'GROUP_APPROVED' => 'Vaš zahtjev za pridruživanje grupi korisnika je odobren',
    'GROUP_REQUEST' => 'Zahtjev za pridruživanje vašoj korisničkoj grupi',
    'PRIVMSG_NOTIFY' => 'Nova privatna poruka',
    'TOPIC_NOTIFY' => 'Obavijest o odgovoru u temi - %s',
    'USER_ACTIVATE' => 'Ponovna aktivacija računa',
    'USER_ACTIVATE_PASSWD' => 'Potvrđivanje nove lozinke',
    'USER_WELCOME' => 'Dobrodošli na stranicu %s',
    'USER_WELCOME_INACTIVE' => 'Dobrodošli na stranicu %s',
];

// Null ratio
$lang['BT_NULL_RATIO'] = 'Poništi omjer';
$lang['BT_NULL_RATIO_NONE'] = 'Nemate omjer';
$lang['BT_NULL_RATIO_ALERT'] = "Pažnja!\n\nJeste li sigurni da želite poništiti svoj omjer?";
$lang['BT_NULL_RATIO_AGAIN'] = 'Već ste poništili svoj omjer!';
$lang['BT_NULL_RATIO_NOT_NEEDED'] = 'Imate dobar omjer. Poništavanje je moguće samo s omjerom manjim od %s';
$lang['BT_NULL_RATIO_SUCCESS'] = 'Omjer je uspješno poništen!';

// Releaser stats
$lang['RELEASER_STAT_SIZE'] = 'Ukupna veličina:';
$lang['RELEASER_STAT'] = 'Statistika distribucije:';
$lang['RELEASER_STAT_SHOW'] = 'Prikaži statistiku';

// Spam protection
$lang['REGISTRATION_DENIED'] = 'Registracija odbijena. Molimo kontaktirajte administratora ako smatrate da je ovo pogreška.';
$lang['POST_SPAM_DENIED'] = 'Vaša poruka je identificirana kao neželjena pošta i nije je moguće objaviti.';
$lang['PM_SPAM_DENIED'] = 'Vaša poruka je identificirana kao neželjena pošta i nije je moguće poslati.';

// Spam log (admin)
$lang['SPAM_LOG'] = 'Dnevnik neželjene pošte';
$lang['SPAM_LOG_DESC'] = 'Ovaj zapisnik bilježi sve pokušaje registracije i slanja sadržaja koji su označeni od strane sustava za zaštitu od neželjene pošte. <b>Odbijeno</b> &mdash; radnja je potpuno blokirana (registracija odbijena, objava/PM nije poslana). <b>Moderirano</b> &mdash; za registracije, račun je kreiran, ali zahtijeva aktivaciju putem e-pošte; za sadržaj, objava/PM je dopuštena ali je označena kao sumnjiva.';
$lang['SPAM_LOG_CHECK_TYPE'] = 'Vrsta provjere';
$lang['SPAM_LOG_CHECK_TYPE_DESC_REG'] = 'registracija &mdash; nova prijava računa';
$lang['SPAM_LOG_CHECK_TYPE_DESC_CONTENT'] = 'sadržaj &mdash; objava ili privatna poruka';
$lang['SPAM_LOG_DECISION'] = 'Odluka';
$lang['SPAM_LOG_PROVIDER'] = 'Pružatelj usluge';
$lang['SPAM_LOG_REASON'] = 'Razlog';
$lang['SPAM_LOG_RESPONSE_TIME'] = 'Vrijeme (ms)';
$lang['SPAM_LOG_ALL'] = 'Sve';
$lang['SPAM_LOG_DETAILS'] = 'Detalji';
$lang['SPAM_LOG_NO_RECORDS'] = 'Nema zapisa u dnevniku neželjene pošte';
$lang['SPAM_LOG_TOTAL'] = 'Ukupan broj zapisa';
$lang['SPAM_LOG_DENIED_COUNT'] = 'Odbijeno';
$lang['SPAM_LOG_MODERATED_COUNT'] = 'Moderirano';

// Marketplace / Modifications
$lang['MARKETPLACE'] = 'Tržnica';
$lang['MODIFICATIONS_LIST'] = 'Modifikacija';
$lang['MODS_VERSION'] = 'Verzija';
$lang['MODS_DOWNLOADS'] = 'Preuzimanja';
$lang['MODS_RATING'] = 'Ocjena';
$lang['MODS_ACTIONS'] = 'Radnje';
$lang['MODS_AUTHOR'] = 'Autor';
$lang['MODS_CATEGORY'] = 'Kategorija';
$lang['MODS_LAST_UPDATED'] = 'Posljednja Promjena';
$lang['MODS_TOTAL'] = 'Ukupno';
$lang['MODS_NO_RESOURCES'] = 'Nema pronađenih modifikacija.';
$lang['MODS_INSTALL'] = 'Instaliraj';
$lang['MODS_INSTALL_SOON'] = 'Značajka instalacije uskoro dolazi';
$lang['MODS_ALL_CATEGORIES'] = 'Sve kategorije';
$lang['MODS_FREE'] = 'Besplatno';
$lang['MODS_PAID'] = 'Plaćeno';
$lang['MODS_THEMES'] = 'Teme';
$lang['MODS_LANGPACKS'] = 'Jezični paketi';
$lang['MODS_API_ERROR'] = 'Nije moguće učitati modifikacije: %s';
$lang['MODS_API_UNAVAILABLE'] = 'Poslužitelj modifikacija trenutno nije dostupan.';
$lang['MODS_DESCRIPTION'] = 'Ova stranica prikazuje sve resurse objavljene na službenom TorrentPier forumu. Instalacija jednim klikom bit će dostupna u budućoj nadogradnji — za sada koristite ovu stranicu kao izložbeni prostor resursa.';
$lang['MODS_REVIEW'] = 'recenzija';
$lang['MODS_REVIEWS'] = 'recenzije';

// Two-factor authentication
$lang['TWO_FACTOR_AUTH'] = 'Dvofaktorska provjera autentičnosti';
$lang['TWO_FACTOR_VERIFICATION'] = 'Dvofaktorska provjera autentičnosti';
$lang['TWO_FACTOR_SECURITY'] = 'Sigurnost';
$lang['TWO_FACTOR_AUTH_EXPLAIN'] = 'Dodajte dodatni sloj sigurnosti svom računu koristeći TOTP autentifikacijsku aplikaciju';
$lang['TWO_FACTOR_ENABLE'] = 'Omogući 2FA';
$lang['TWO_FACTOR_DISABLE'] = 'Onemogući 2FA';
$lang['TWO_FACTOR_ENABLED'] = 'Uključen';
$lang['TWO_FACTOR_DISABLED'] = 'Isključen';
$lang['TWO_FACTOR_SETUP'] = 'Postavi dvofaktorsku provjeru autentičnosti';
$lang['TWO_FACTOR_SETUP_EXPLAIN'] = 'Skenirajte ovaj QR kod svojim autentifikatorom (Google Authenticator, Authy itd.) ili unesite ključ ručno dolje.';
$lang['TWO_FACTOR_MANUAL_ENTRY'] = 'Ili unesite ovaj ključ ručno';
$lang['TWO_FACTOR_ENTER_CODE'] = 'Unesite 6-znamenkasti kod iz vaše autentifikatorske aplikacije';
$lang['TWO_FACTOR_CODE'] = 'Kod za potvrdu';
$lang['TWO_FACTOR_VERIFY'] = 'Potvrdi';
$lang['TWO_FACTOR_VERIFY_AND_ENABLE'] = 'Potvrdi i omogući';
$lang['TWO_FACTOR_INVALID_CODE'] = 'Nevažeći kod. Molimo pokušajte ponovno.';
$lang['TWO_FACTOR_SESSION_EXPIRED'] = 'Vrijeme za potvrdu je isteklo. Molimo prijavite se ponovno.';
$lang['TWO_FACTOR_SETUP_EXPIRED'] = 'Vrijeme za postavljanje je isteklo. Molimo pokušajte ponovno.';
$lang['TWO_FACTOR_ALREADY_ENABLED'] = 'Dvofaktorska provjera je već omogućena na vašem računu.';
$lang['TWO_FACTOR_NOT_ENABLED'] = 'Dvofaktorska provjera nije omogućena na vašem računu.';
$lang['TWO_FACTOR_FEATURE_DISABLED'] = 'Dvofaktorska provjera nije dostupna';
$lang['TWO_FACTOR_ENABLED_SUCCESS'] = 'Dvofaktorska provjera je omogućena';
$lang['TWO_FACTOR_DISABLED_SUCCESS'] = 'Dvofaktorska provjera je onemogućena';
$lang['TWO_FACTOR_RECOVERY_CODES'] = 'Kodovi za oporavak';
$lang['TWO_FACTOR_RECOVERY_WARNING'] = 'Spremite ove kodove za oporavak na sigurno mjesto. Ako izgubite svoj autentifikator, možete koristiti ove kodove za prijavu.';
$lang['TWO_FACTOR_RECOVERY_EXPLAIN'] = 'Svaki kod se može upotrijebiti samo jednom. Spremite ih odvojeno od vašeg uređaja.';
$lang['TWO_FACTOR_RECOVERY_CODE'] = 'Kod za oporavak';
$lang['TWO_FACTOR_ENTER_RECOVERY'] = 'Unesite jedan od svojih kodova za oporavak';
$lang['TWO_FACTOR_USE_RECOVERY'] = 'Umjesto toga upotrijebite kod za oporavak';
$lang['TWO_FACTOR_USE_TOTP'] = 'Umjesto toga upotrijebite autentifikacijski kod';
$lang['TWO_FACTOR_INVALID_RECOVERY'] = 'Nevažeći kod za oporavak. Molimo pokušajte ponovno.';
$lang['TWO_FACTOR_RECOVERY_CODE_USED'] = 'Kod za oporavak je upotrijebljen. Preostalo vam je {count, plural, one {# kod} few {# koda} other {# kodova}}.';
$lang['TWO_FACTOR_REMAINING_CODES'] = 'Imate {count, plural, one {# kod za oporavak} few {# koda za oporavak} other {# kodova za oporavak}} preostalo';
$lang['TWO_FACTOR_DOWNLOAD_CODES'] = 'Preuzmi kao tekstualnu datoteku';
$lang['TWO_FACTOR_RECOVERY_EXPIRED'] = 'Prikaz kodova za oporavak je istekao. Vaši kodovi su i dalje aktivni.';
$lang['TWO_FACTOR_DOWNLOAD_EXPIRED'] = 'Veza za preuzimanje je istekla.';
$lang['TWO_FACTOR_DISABLE_WARNING'] = 'Ovim ćete onemogućiti dvofaktorsku provjeru na vašem računu. Za potvrdu ćete morati unijeti trenutni autentifikacijski kod.';
$lang['TWO_FACTOR_DISABLE_CONFIRM'] = 'Onemogući dvofaktorsku provjeru';
$lang['TWO_FACTOR_REGENERATE'] = 'Regeneriraj kodove za oporavak';
$lang['TWO_FACTOR_REGENERATE_WARNING'] = 'Ovim će se poništiti svi postojeći kodovi za oporavak i generirati novi.';
$lang['TWO_FACTOR_REGENERATE_CONFIRM'] = 'Regeneriraj kodove';
$lang['TWO_FACTOR_ADMIN_DISABLE'] = 'Onemogući 2FA korisniku';
$lang['TWO_FACTOR_ADMIN_DISABLE_CONFIRM'] = 'Jeste li sigurni da želite onemogućiti dvofaktorsku provjeru za ovog korisnika?';
$lang['TWO_FACTOR_TOO_MANY_ATTEMPTS'] = 'Previše neuspjelih pokušaja. Molimo pokušajte ponovno za {count, plural, one {# minutu} few {# minute} other {# minuta}}.';
$lang['TWO_FACTOR_INVALID_TOKEN'] = 'Nevažeći ili istekao token.';
$lang['TWO_FACTOR_DONE'] = 'Gotovo';
$lang['TWO_FACTOR_RECOVERY_ONETIME'] = 'Ova stranica se može pogledati samo jednom. Ako je napustite, više nećete moći vidjeti ove kodove.';
$lang['TWO_FACTOR_ADMIN_DISABLE_SELF'] = 'Ne možete onemogućiti vlastitu dvofaktorsku provjeru iz administratorskog panela. Umjesto toga koristite postavke vašeg profila.';

// Dark mode
$lang['DARK_MODE_TOGGLE'] = 'Prebaci tamni način';
