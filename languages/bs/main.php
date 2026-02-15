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
$lang['HIDE_CAT_MESS'] = 'Neke kategorije su skrivene prilagođenim opcijama prikaza';
$lang['SHOW_ALL'] = 'Pokaži sve';
$lang['TOPIC'] = 'Tema';
$lang['TOPICS'] = 'Teme';
$lang['TOPICS_SHORT'] = 'Teme';
$lang['REPLIES'] = 'Odgovori';
$lang['REPLIES_SHORT'] = 'Odgovori';
$lang['VIEWS'] = 'Pogledi';
$lang['POSTS'] = 'Postovi';
$lang['POSTS_SHORT'] = 'Postovi';
$lang['POSTED'] = 'Postavio';
$lang['USERNAME'] = 'Korisničko ime';
$lang['PASSWORD'] = 'Lozinka';
$lang['PASSWORD_SHOW_BTN'] = 'Prikaži lozinku';
$lang['EMAIL'] = 'E-mail';
$lang['PM'] = 'PM';
$lang['AUTHOR'] = 'Autor';
$lang['MESSAGE'] = 'Poruka';
$lang['TORRENT'] = 'Bujice';
$lang['PERMISSIONS'] = 'Dozvole';
$lang['TYPE'] = 'Tip';

$lang['1_DAY'] = '1 Dan';
$lang['7_DAYS'] = '7 Dana';
$lang['2_WEEKS'] = '2 Sedmice';
$lang['1_MONTH'] = '1 Mjesec';
$lang['3_MONTHS'] = '3 Mjeseca';
$lang['6_MONTHS'] = '6 Mjeseci';
$lang['1_YEAR'] = '1 Godina';

$lang['GO'] = 'Idem da';
$lang['SUBMIT'] = 'Dostaviti';
$lang['RESET'] = 'Reset';
$lang['CANCEL'] = 'Otkaži';
$lang['PREVIEW'] = 'Pregled';
$lang['AJAX_PREVIEW'] = 'Brz Pogled';
$lang['CONFIRM'] = 'Potvrdi';
$lang['YES'] = 'Da';
$lang['NO'] = 'Ne';
$lang['ENABLED'] = 'Omogućeno';
$lang['DISABLED'] = 'Onemogućeno';
$lang['ERROR'] = 'Greška';
$lang['SELECT_ACTION'] = 'Odaberite akciju';
$lang['CLEAR'] = 'Obriši';
$lang['MOVE_TO_TOP'] = 'Premjesti na vrh';
$lang['UNKNOWN'] = 'Nepoznati';
$lang['COPY_TO_CLIPBOARD'] = 'Kopiraj u međuspremnik';
$lang['NO_ITEMS'] = 'Ovde izgleda da nema podataka...';
$lang['PLEASE_TRY_AGAIN'] = 'Pokušajte ponovo za nekoliko sekundi...';

$lang['NEXT_PAGE'] = 'Sljedeći';
$lang['PREVIOUS_PAGE'] = 'Prethodni';
$lang['SHORT_PAGE'] = 'stranica';
$lang['GOTO_PAGE'] = 'Idem na stranicu';
$lang['GOTO_SHORT'] = 'Stranica';
$lang['JOINED'] = 'Pridružio';
$lang['LONGEVITY'] = 'Registriran';
$lang['IP_ADDRESS'] = 'IP Adresa';

$lang['SELECT_FORUM'] = 'Odaberite forum';
$lang['VIEW_LATEST_POST'] = 'Pogledaj najnoviji post';
$lang['VIEW_NEWEST_POST'] = 'Pogledaj najnoviji post';
$lang['PAGE_OF'] = 'Stranica <b>%d</b> od <b>%s</b>';

$lang['TWITTER'] = 'X (Twitter)';
$lang['TWITTER_ERROR'] = 'Unijeli ste nevaljanu X (Twitter) prijavu';

$lang['POST_NEW_TOPIC'] = 'Objavi novu temu';
$lang['POST_NEW_RELEASE'] = 'Objaviti novo izdanje';
$lang['REPLY_TO_TOPIC'] = 'Odgovori na temu';

$lang['CLICK_RETURN_TOPIC'] = 'Klik %sOvde%s da se vrati na temu'; // %s's here are for uris, do not remove!
$lang['CLICK_RETURN_FORUM'] = 'Klik %sOvde%s da se vrati u forum';
$lang['CLICK_RETURN_MODCP'] = 'Klik %sOvde%s da se vrati u Moderator Kontrolnu Ploču';

$lang['ADMIN_PANEL'] = 'Idem u Administrativni Panel';
$lang['ALL_CACHE_CLEARED'] = 'Keš je oslobođen';
$lang['ALL_TEMPLATE_CLEARED'] = 'Keš šablona očišćen';
$lang['DATASTORE_CLEARED'] = 'Skladište očišćeno';
$lang['BOARD_DISABLE'] = 'Žao mi je, ovaj forum je onemogućen. Pokušajte se vratiti kasnije.';
$lang['BOARD_DISABLE_CRON'] = 'Forum je nedostupan radi održavanja. Pokušaj da se vratiš kasnije.';
$lang['ADMIN_DISABLE'] = 'Forum je onemogućen od strane administratora. Možete ga omogućiti u bilo kojem trenutku';
$lang['ADMIN_DISABLE_CRON'] = 'Forum je zaključan od strane cron zadatka. Možete ukloniti zaključavanje u bilo kojem trenutku';
$lang['ADMIN_DISABLE_TITLE'] = 'Forum je isključen';
$lang['ADMIN_DISABLE_CRON_TITLE'] = 'Forum je nedostupan radi održavanja';
$lang['ADMIN_UNLOCK'] = 'Omogućiti forum';
$lang['ADMIN_UNLOCKED'] = 'Otključan';
$lang['ADMIN_UNLOCK_CRON'] = 'Ukloni bravu';
$lang['PAGE_NOT_FOUND'] = 'Stranica nije pronađena';

$lang['LOADING'] = 'Ukrcavanje...';
$lang['JUMPBOX_TITLE'] = 'Odaberite forum';
$lang['DISPLAYING_OPTIONS'] = 'Opcije prikazivanja';

// Global Header strings
$lang['BROWSING_FORUM'] = 'Korisnici koji pregledavaju ovaj forum:';
$lang['ONLINE_USERS'] = 'U ukupno ima <b>%1$d</b> korisnici online: %2$d registrovani i %3$d gosti';
$lang['RECORD_ONLINE_USERS'] = 'Najviše korisnika ikada online bilo je <b>%s</b> na %s'; // first %s = number of users, second %s is the date.

$lang['ONLINE_ADMIN'] = 'Administrator';
$lang['ONLINE_MOD'] = 'Moderator';
$lang['ONLINE_GROUP_MEMBER'] = 'Član grupe';

$lang['CURRENT_TIME'] = 'Trenutno vrijeme je: <span class="tz_time">%s</span>';

$lang['SEARCH_NEW'] = 'Pogled na najnovije objave';
$lang['SEARCH_SELF'] = 'Moje objave';
$lang['SEARCH_SELF_BY_LAST'] = 'vrijeme poslednjeg objave';
$lang['SEARCH_SELF_BY_MY'] = 'moje vreme postavljanja';
$lang['SEARCH_LATEST'] = 'Najnovije teme';
$lang['LATEST_RELEASES'] = 'Najnovija izdanja';

$lang['REGISTER'] = 'Registracija';
$lang['PROFILE'] = 'Profil';
$lang['EDIT_PROFILE'] = 'Uredi profil';
$lang['SEARCH'] = 'Potrazi';
$lang['MEMBERLIST'] = 'Spisak članova';
$lang['USERGROUPS'] = 'Grupe korisnika';
$lang['LASTPOST'] = 'Zadnji Post';
$lang['MODERATOR'] = 'Moderator';
$lang['MODERATORS'] = 'Moderatori';
$lang['TERMS'] = 'Uslovi';
$lang['NOTHING_HAS_CHANGED'] = 'Da ništa nije promijenjeno';

// Stats block text
$lang['POSTED_TOPICS_TOTAL'] = 'Naši korisnici su postavili ukupno <b>%s</b> teme'; // Number of topics
$lang['POSTED_POSTS_TOTAL'] = 'Naši korisnici su postavili ukupno <b>%s</b> postova'; // Number of posts
$lang['REGISTERED_USERS_TOTAL'] = 'Imamo <b>%s</b> registrovanih korisnika'; // # registered users
$lang['USERS_TOTAL_GENDER'] = 'Momci: <b>%d</b>, Devojke: <b>%d</b>, Drugi: <b>%d</b>';
$lang['NEWEST_USER'] = 'Najnoviji registrovani korisnik je <b>%s</b>'; // a href, username, /a

// Tracker stats
$lang['TORRENTS_STAT'] = 'Bujica: <b style="color: blue;">%s</b>,&nbsp; Ukupno veličine: <b>%s</b>'; // first %s = number of torrents, second %s is the total size.
$lang['PEERS_STAT'] = 'Vršnjaci: <b>%s</b>,&nbsp; Seeders: <b class="seedmed">%s</b>,&nbsp; Leechers: <b class="leechmed">%s</b>'; // first %s = number of peers, second %s = number of seeders,  third %s = number of leechers.
$lang['SPEED_STAT'] = 'Ukupna brzina: <b>%s</b>&nbsp;'; // %s = total speed.

$lang['NO_NEW_POSTS'] = 'Nema novih postova';
$lang['NEW_POSTS'] = 'Novi postovi';
$lang['FORUM_LOCKED_MAIN'] = 'Forum je zaključan';

// Login
$lang['ENTER_PASSWORD'] = 'Molimo unesite svoje korisničko ime i lozinku da se prijavite.';
$lang['LOGIN'] = 'Prijavite se';
$lang['LOGOUT'] = 'Odjavite se';
$lang['CONFIRM_LOGOUT'] = 'Jesi li siguran da želiš da se odjaviš?';

$lang['FORGOTTEN_PASSWORD'] = 'Zaboravio lozinku?';
$lang['AUTO_LOGIN'] = 'Prijavite me automatski';
$lang['ERROR_LOGIN'] = 'Korisničko ime koje ste unijeli je netačno ili neispravno, ili lozinka je nevažeća.';
$lang['REMEMBER'] = 'Zapamti';
$lang['USER_WELCOME'] = 'Dobrodošli,';

// Index page
$lang['HOME'] = 'Dom';
$lang['NO_POSTS'] = 'Nema postova';
$lang['NO_FORUMS'] = 'Ova tabla nema foruma';

$lang['PRIVATE_MESSAGE'] = 'Privatni Poruku';
$lang['PRIVATE_MESSAGES'] = 'Privatni Poruke';
$lang['WHOSONLINE'] = 'Ko je online';

$lang['MARK_ALL_FORUMS_READ'] = 'Označiti sve forume kao pročitane';

$lang['LATEST_NEWS'] = 'Najnovije vijesti';
$lang['NETWORK_NEWS'] = 'Mrežne vijesti';
$lang['SUBFORUMS'] = 'Subforums';

$lang['FORUM_NOT_EXIST'] = 'Odabrani forum ne postoji.';
$lang['ERROR_PORNO_FORUM'] = 'Ova vrsta foruma (18+) je skrivena u vašem profilu.';

$lang['DISPLAY_TOPICS'] = 'Prikaži teme';
$lang['MODERATE_FORUM'] = 'Moderiraj ovaj forum';
$lang['TITLE_SEARCH_HINT'] = 'Potrazi naslov...';

$lang['TOPIC_ANNOUNCEMENT'] = 'Obavijest:';
$lang['TOPIC_MOVED'] = 'Preselio:';
$lang['TOPIC_POLL'] = '[ Anketu ]';

$lang['MARK_TOPICS_READ'] = 'Označi sve teme kao pročitane';
$lang['TOPICS_MARKED_READ'] = 'Teme za ovaj forum su trenutno označene kao pročitane.';

$lang['RULES_POST_CAN'] = 'Možeš <b>postaviti</b> nove teme u ovom forumu.';
$lang['RULES_POST_CANNOT'] = 'Ne možeš <b>postaviti</b> nove teme u ovom forumu.';
$lang['RULES_REPLY_CAN'] = 'Možeš <b>odgovoriti</b> na teme u ovom forumu.';
$lang['RULES_REPLY_CANNOT'] = 'Ne možeš <b>odgovoriti</b> na teme u ovom forumu.';
$lang['RULES_EDIT_CAN'] = 'Možeš <b>urediti</b> svoje postove u ovom forumu.';
$lang['RULES_EDIT_CANNOT'] = 'Ne možeš <b>urediti</b> svoje postove u ovom forumu.';
$lang['RULES_DELETE_CAN'] = 'Možeš <b>obrisati</b> svoje postove u ovom forumu.';
$lang['RULES_DELETE_CANNOT'] = 'Ne možeš <b>obrisati</b> svoje postove u ovom forumu.';
$lang['RULES_VOTE_CAN'] = 'Možeš <b>glasati</b> na anketama u ovom forumu.';
$lang['RULES_VOTE_CANNOT'] = 'Ne možeš <b>glasati</b> na anketama u ovom forumu.';
$lang['RULES_MODERATE'] = 'Možeš <b>moderirati</b> ovaj forum.';

$lang['NO_TOPICS_POST_ONE'] = 'U ovom forumu još nema postova<br />Kliknite na <b>Nova Tema</b> ikonu, i vaš post će biti prvi.';
$lang['NO_RELEASES_POST_ONE'] = 'U ovom forumu još nema izdanja<br />Kliknite na <b>Nova Izdanje</b> ikonu, i vaše izdanje će biti prvo.';

$lang['GUEST'] = 'Gost';
$lang['SUBMIT_VOTE'] = 'Dostavi glas.';

$lang['NO_NEWER_TOPICS'] = 'Nema novijih tema u ovom forumu.';
$lang['NO_OLDER_TOPICS'] = 'Nema starijih tema u ovom forumu.';
$lang['TOPIC_POST_NOT_EXIST'] = 'Tema ili post koji ste tražili ne postoji.';
$lang['NO_POSTS_TOPIC'] = 'Nema postova u ovoj temi.';

$lang['DISPLAY_POSTS'] = 'Prikaz funkcija.';
$lang['ALL_POSTS'] = 'Sve jedinice.';
$lang['NEWEST_FIRST'] = 'Najnovije prvo.';
$lang['OLDEST_FIRST'] = 'Najstarija prvo.';

$lang['READ_PROFILE'] = 'Pogled na korisnikov profil.';

$lang['WROTE'] = 'napisao'; // proceeds the username and is followed by the quoted text
$lang['QUOTE'] = 'Citat.'; // comes before bbcode quote output
$lang['CODE'] = 'Kod.'; // comes before bbcode code output
$lang['SPOILER_HEAD'] = 'Skrivena poruka.';
$lang['SPOILER_CLOSE'] = 'Okreni.';
$lang['PLAY_ON_CURPAGE'] = 'Počni igrati na trenutnoj stranici.';

$lang['EDITED_TIME_TOTAL'] = 'Posljednji put uredio <b>%s</b> na %s; uređeno %d puta ukupno.'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['EDITED_TIMES_TOTAL'] = 'Posljednji put uredio <b>%s</b> na %s; uređeno %d puta ukupno.'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['LOCK_TOPIC'] = 'Zaključaj temu';
$lang['UNLOCK_TOPIC'] = 'Otključaj temu';
$lang['MOVE_TOPIC'] = 'Premjesti temu.';
$lang['DELETE_TOPIC'] = 'Obriši temu.';
$lang['SPLIT_TOPIC'] = 'Podijeli temu.';

$lang['STOP_WATCHING_TOPIC'] = 'Prikazi temu.';
$lang['START_WATCHING_TOPIC'] = 'Prati temu za odgovore.';
$lang['NO_LONGER_WATCHING'] = 'Više ne pratiš ovu temu.';
$lang['YOU_ARE_WATCHING'] = 'Trenutno pratiš ovu temu.';

$lang['SEARCH_IN_TOPIC'] = 'Pretraži u temi.';
$lang['HIDE_IN_TOPIC'] = 'Sakrij.';

$lang['SHOW'] = 'Prikaži.';
$lang['AVATARS'] = 'Avatari';
$lang['RANK_IMAGES'] = 'Slike činova.';
$lang['POST_IMAGES'] = 'Slike postova.';
$lang['SIGNATURES'] = 'Potpisi.';
$lang['SPOILER'] = 'Spojler';
$lang['SHOW_OPENED'] = 'Prikazi otvoreno.';
$lang['DOWNLOAD_PIC'] = 'Preuzimanje slika.';

$lang['MODERATE_TOPIC'] = 'Moderiraj ovu temu.';
$lang['SELECT_POSTS_PER_PAGE'] = 'Postovi po stranici.';

// Posting/Replying (Not private messaging!)
$lang['TOPIC_REVIEW'] = 'Tema pregled.';

$lang['NO_POST_MODE'] = 'Nema odabranog načina postavljanja.'; // If posting.php is called without a mode (newtopic/reply/delete/etc., shouldn't be shown normally)

$lang['POST_A_NEW_TOPIC'] = 'Postavite novu temu.';
$lang['POST_A_REPLY'] = 'Postavite novi odgovor.';
$lang['POST_TOPIC_AS'] = 'Postavi temu kao.';
$lang['EDIT_POST'] = 'Uredi post.';
$lang['EDIT_TOPIC_TITLE'] = 'Uredi naslov teme.';

$lang['DONT_MESSAGE_TITLE'] = 'Trebate odrediti naziv poruke.';
$lang['INVALID_TOPIC_ID'] = 'Tema izostavljena!';
$lang['INVALID_TOPIC_ID_DB'] = 'Tema ne postoji u bazi podataka!';

$lang['NOT_EDIT_TOR_STATUS'] = 'Ne možete uređivati izdanja sa statusom.';

$lang['OPTIONS'] = 'Opcije.';

$lang['POST_ANNOUNCEMENT'] = 'Obavijest.';
$lang['POST_STICKY'] = 'Ljepljive';
$lang['POST_NORMAL'] = 'Normalan';
$lang['POST_DOWNLOAD'] = 'Preuzimanje';

// Anonymous posting
$lang['ANONYMOUS'] = 'Anoniman';
$lang['ANONYMOUS_TOPIC'] = 'Objavi temu anonimno';
$lang['ANONYMOUS_REPLY'] = 'Odgovori anonimno';
$lang['HIDE_AUTHORSHIP'] = 'Podrazumijevano objavljivanje anonimno';
$lang['HIDE_AUTHORSHIP_EXPLAIN'] = 'Kada je omogućeno, novi postovi će po defaultu biti u anonimnom modu. Možete uključiti ili isključiti po postu.';
$lang['ALLOW_ANONYMOUS_POSTING'] = 'Dozvoli anonimno objavljivanje';
$lang['ANONYMOUS_POST_LABEL'] = 'Objavljeno anonimno';
$lang['POSTED_ANONYMOUSLY'] = 'objavljeno anonimno';
$lang['ANONYMOUS_ADMIN_NOTICE'] = 'Administratori i moderatori mogu vidjeti pravog autora';
$lang['YOU'] = 'Vi';

$lang['PRINT_PAGE'] = 'Odštampaj stranicu';

$lang['CONFIRM_DELETE'] = 'Jesi li sigurna da želiš izbrisati ovu objavu?';
$lang['CONFIRM_DELETE_POLL'] = 'Jesi li sigurna da želiš izbrisati ovu anketu?';

$lang['FLOOD_ERROR'] = 'Ne možeš postavljati još jedan post tako brzo nakon posljednjeg; molim te, pokušaj ponovo za kratko.';
$lang['EMPTY_SUBJECT'] = 'Moraš navesti temu';
$lang['EMPTY_MESSAGE'] = 'Moraš unijeti poruku.';
$lang['FORUM_LOCKED'] = 'Forum je zaključan';
$lang['TOPIC_LOCKED'] = 'Tema zaključana';
$lang['TOPIC_LOCKED_SHORT'] = 'Tema zaključana';
$lang['NO_POST_ID'] = 'Moraš odabrati post koji želiš urediti.';
$lang['NO_TOPIC_ID'] = 'Moraš odabrati temu na koju želiš odgovoriti.';
$lang['NO_VALID_MODE'] = 'Možeš samo postavljati, odgovarati, uređivati ili citirati poruke. Molim te, vrati se i pokušaj ponovo.';
$lang['NO_SUCH_POST'] = 'Takvog posta nema. Molim te, vrati se i pokušaj ponovo.';
$lang['EDIT_OWN_POSTS'] = 'Žao mi je, ali možeš samo urediti svoje postove.';
$lang['DELETE_OWN_POSTS'] = 'Žao mi je, ali ne možeš obrisati svoje postove.';
$lang['CANNOT_DELETE_REPLIED'] = 'Žao mi je, ali ne možeš obrisati postove na koje je već odgovoreno.';
$lang['CANNOT_DELETE_POLL'] = 'Žao mi je, ali ne možeš obrisati aktivnu anketu';
$lang['EMPTY_POLL_TITLE'] = 'Moraš unijeti naslov za svoju anketu.';
$lang['POST_HAS_NO_POLL'] = 'Ovo mjesto nema anketu';
$lang['ALREADY_VOTED'] = 'Već si glasao u ovu anketu.';
$lang['NO_VOTE_OPTION'] = 'Moraš navesti opciju kada glasaš.';
$lang['LOCKED_WARN'] = 'Objavio si u zaključanoj temi!';

$lang['ADD_POLL'] = 'Dodaj anketu';
$lang['UPDATE'] = 'Ažurirati';
$lang['DAYS'] = 'Dana';
$lang['DELETE_POLL'] = 'Obriši anketu';

$lang['MAX_SMILIES_PER_POST'] = 'Prekoračen je limit od %s emotikona.';

$lang['NOTIFY'] = 'Obavijesti me o odgovorima';
$lang['ALLOW_ROBOTS_INDEXING'] = 'Dozvolite robotima indeksiranje ove teme';

$lang['STORED'] = 'Tvoja poruka je uspješno unesena.';
$lang['EDITED'] = 'Poruka je izmijenjena.';
$lang['DELETED'] = 'Tvoja poruka je uspješno obrisana.';
$lang['VOTE_CAST'] = 'Tvoj glas je bačen.';

$lang['EMOTICONS'] = 'Emotikon.';
$lang['MORE_EMOTICONS'] = 'Pogledaj više emotikona.';

$lang['COLOR_DARK_RED'] = 'Tmasto crveno.';
$lang['COLOR_RED'] = 'Crveno.';
$lang['COLOR_ORANGE'] = 'Narandžasto.';
$lang['COLOR_BROWN'] = 'Smeđe.';
$lang['COLOR_GREEN'] = 'Zelena.';
$lang['COLOR_OLIVE'] = 'Maslinasta.';
$lang['COLOR_BLUE'] = 'Plavo.';
$lang['COLOR_DARK_BLUE'] = 'Tamno plava.';
$lang['COLOR_INDIGO'] = 'Ljubičasta.';
$lang['COLOR_VIOLET'] = 'Ljubičasta.';

$lang['FONT_SMALL'] = 'Male';
$lang['FONT_NORMAL'] = 'Normalan';
$lang['FONT_LARGE'] = 'Velika.';
$lang['FONT_HUGE'] = 'Ogromna.';

$lang['NEW_POSTS_PREVIEW'] = 'Tema ima nove, izmijenjene ili nepročitane postove.';

// Private Messaging
$lang['PRIVATE_MESSAGING'] = 'Privatni Poruka';

$lang['NO_NEW_PM'] = 'nema novih poruka';

$lang['NEW_PMS_FORMAT'] = '<b>%1$s</b> %2$s'; // 1 new message
$lang['NEW_PMS_DECLENSION'] = ['novu poruku', 'nove poruke'];

$lang['UNREAD_PMS_FORMAT'] = '<b>%1$s</b> %2$s'; // 1 new message
$lang['UNREAD_PMS_DECLENSION'] = ['nepročitano', 'nepročitano'];

$lang['UNREAD_MESSAGE'] = 'Nepročitana poruka.';
$lang['READ_MESSAGE'] = 'Pročitana poruka.';

$lang['READ_PM'] = 'Pročitana poruka.';
$lang['POST_NEW_PM'] = 'Pošalji poruku.';
$lang['POST_REPLY_PM'] = 'Odgovori na poruku.';
$lang['POST_QUOTE_PM'] = 'Citiraj poruku.';
$lang['EDIT_PM'] = 'Uredi poruku.';

$lang['INBOX'] = 'Inbox';
$lang['OUTBOX'] = 'Izlazna pošta.';
$lang['SAVEBOX'] = 'Spremi kutiju.';
$lang['SENTBOX'] = 'Sent box.';
$lang['SUBJECT'] = 'Tema.';
$lang['FROM'] = 'Od.';
$lang['TO'] = 'Da.';
$lang['DATE'] = 'Datum.';
$lang['SENT'] = 'Poslano.';
$lang['SAVED'] = 'Spasio.';
$lang['DELETE_MARKED'] = 'Obriši označeno.';
$lang['DELETE_ALL'] = 'Izbriši sve.';
$lang['SAVE_MARKED'] = 'Spasi označeno.';
$lang['SAVE_MESSAGE'] = 'Spasi poruku.';
$lang['DELETE_MESSAGE'] = 'Obrišite poruku.';

$lang['DISPLAY_MESSAGES'] = 'Prikaži poruke.'; // Followed by number of days/weeks/months

$lang['NO_MESSAGES_FOLDER'] = 'Nema poruka u ovom direktoriju.';

$lang['CANNOT_SEND_PRIVMSG'] = 'Žao mi je, ali administrator vam je zabranio slanje privatnih poruka.';
$lang['NO_TO_USER'] = 'Moraš navesti korisničko ime kome da pošaljem ovu poruku.';
$lang['NO_SUCH_USER'] = 'Žao mi je, ali takav korisnik ne postoji.';

$lang['MESSAGE_SENT'] = '<b>Vaša poruka je poslana.</b>.';

$lang['CLICK_RETURN_INBOX'] = 'Vratite se svom:<br /><br /> %s<b>Inbox</b>%s.';
$lang['CLICK_RETURN_SENTBOX'] = '&nbsp;&nbsp; %s<b>Sentbox</b>%s.';
$lang['CLICK_RETURN_OUTBOX'] = '&nbsp;&nbsp; %s<b>Outbox</b>%s.';
$lang['CLICK_RETURN_SAVEBOX'] = '&nbsp;&nbsp; %s<b>Savebox</b>%s.';
$lang['CLICK_RETURN_INDEX'] = '%sVratite se na Indeks%s.';

$lang['SEND_A_NEW_MESSAGE'] = 'Pošalji novu privatnu poruku.';
$lang['SEND_A_REPLY'] = 'Odgovori na privatnu poruku.';
$lang['EDIT_MESSAGE'] = 'Uredi privatnu poruku.';

$lang['FIND_USERNAME'] = 'Naći korisničko ime.';
$lang['SELECT_USERNAME'] = 'Izaberi korisničko ime.';
$lang['NO_MATCH'] = 'Nema pronađenih podudaranja.';

$lang['NO_PM_ID'] = 'Molimo navedite ID posta.';
$lang['NO_SUCH_FOLDER'] = 'Folder nije pronađen.';

$lang['MARK_ALL'] = 'Označiti sve.';
$lang['UNMARK_ALL'] = 'Označite sve.';

$lang['CONFIRM_DELETE_PM'] = 'Jesi li sigurna da želiš obrisati ovu poruku?';
$lang['CONFIRM_DELETE_PMS'] = 'Jesi li sigurna da želiš obrisati ove poruke?';

$lang['INBOX_SIZE'] = 'Tvoj Inbox je<br /><b>%d%%</b> pun.'; // e.g. Your Inbox is 50% full
$lang['SENTBOX_SIZE'] = 'Tvoj Sentbox je<br /><b>%d%%</b> pun.';
$lang['SAVEBOX_SIZE'] = 'Tvoj Savebox je<br /><b>%d%%</b> pun.';

$lang['OUTBOX_EXPL'] = '';

// Profiles/Registration
$lang['VIEWING_USER_PROFILE'] = 'Gledanje profilom :: %s';
$lang['VIEWING_MY_PROFILE'] = 'Moj profil [ <a href="%s">Postavke / Promijeni profil</a> ]';

$lang['DISABLED_USER'] = 'Račun onemogućen';
$lang['MANAGE_USER'] = 'Uprava';

$lang['PREFERENCES'] = 'Postavke';
$lang['ITEMS_REQUIRED'] = 'Stvari označene sa * su obavezne osim ako nije drugačije navedeno.';
$lang['REGISTRATION_INFO'] = 'Informacije o registraciji';
$lang['PROFILE_INFO'] = 'Informacije o profilu';
$lang['AVATAR_PANEL'] = 'Kontrolna tabla avatara';

$lang['WEBSITE'] = 'Web stranica';
$lang['LOCATION'] = 'Lokacija';
$lang['CONTACT'] = 'Kontakt';
$lang['EMAIL_ADDRESS'] = 'E-mail adresa';
$lang['SEND_PRIVATE_MESSAGE'] = 'Pošalji privatnu poruku';
$lang['INTERESTS'] = 'Interesi';
$lang['OCCUPATION'] = 'Zanimanje';
$lang['POSTER_RANK'] = 'Rang pošiljaoca';
$lang['AWARDED_RANK'] = 'Dodijeljen rang';
$lang['SHOT_RANK'] = 'Rang pucanja';

$lang['TOTAL_POSTS'] = 'Ukupni postovi';
$lang['SEARCH_USER_POSTS'] = 'Pronađi postove'; // Find all posts by username
$lang['SEARCH_USER_POSTS_SHORT'] = 'Pronađi postove korisnika';
$lang['SEARCH_USER_TOPICS'] = 'Pronađi teme korisnika'; // Find all topics by username

$lang['NO_USER_ID_SPECIFIED'] = 'Žao mi je, ali taj korisnik ne postoji.';
$lang['NO_SEND_ACCOUNT_INACTIVE'] = 'Žao mi je, ali vaša lozinka ne može biti pronađena jer je vaš račun trenutno neaktivan.';
$lang['NO_SEND_ACCOUNT'] = 'Žao mi je, ali vaša lozinka ne može biti pronađena. Molimo kontaktirajte administratora foruma za više informacija.';

$lang['HIDE_PORN_FORUMS'] = 'Sakriti sadržaja 18+';
$lang['ADD_RETRACKER'] = 'Dodaj retracker u torrent datoteke';
$lang['ALWAYS_NOTIFY'] = 'Uvijek me obavijesti o odgovorima';
$lang['ALWAYS_NOTIFY_EXPLAIN'] = 'Šalje e-mail kada neko odgovori na temu koju ste postavili. Ovo se može promeniti svaki put kada postavljate.';

$lang['BOARD_LANG'] = 'Jezik foruma';
$lang['GENDER'] = 'Rod';
$lang['GENDER_SELECT'] = [
    0 => 'Nepoznati',
    1 => 'Muški',
    2 => 'Ženski',
];
$lang['MODULE_OFF'] = 'Modul je onemogućen!';

$lang['BIRTHDAY'] = 'Rođendan';
$lang['HAPPY_BIRTHDAY'] = 'Sretan Rođendan!';
$lang['WRONG_BIRTHDAY_FORMAT'] = 'Format rođendana je unijet pogrešno.';
$lang['AGE'] = 'Godine';
$lang['BIRTHDAY_TO_HIGH'] = 'Žao nam je, ovaj sajt ne prihvata korisnike starije od %d godina';
$lang['BIRTHDAY_TO_LOW'] = 'Žao nam je, ovaj sajt ne prihvata korisnike mlađe od %d godina';
$lang['BIRTHDAY_TODAY'] = 'Korisnici sa rođendanom danas: ';
$lang['BIRTHDAY_WEEK'] = 'Korisnici sa rođendanom u narednih %d dana: %s';
$lang['NOBIRTHDAY_WEEK'] = 'Nema korisnika koji imaju rođendan u narednih %d dana.'; // %d is substituted with the number of days
$lang['NOBIRTHDAY_TODAY'] = 'Nema korisnika koji imaju rođendan danas.';
$lang['BIRTHDAY_ENABLE'] = 'Omogućite rođendan';
$lang['BIRTHDAY_MAX_AGE'] = 'Maksimalna starost';
$lang['BIRTHDAY_MIN_AGE'] = 'Minimalna starost';
$lang['BIRTHDAY_CHECK_DAY'] = 'Dani za provjeru predstojećih rođendana';
$lang['YEARS'] = 'Godina';

$lang['TIMEZONE'] = 'Vremenska zona';
$lang['DATE_FORMAT_EXPLAIN'] = 'Sintaksa je korištena identično PHP <a href=\'https://www.php.net/manual/en/function.date.php\' target=\'_other\'>date()</a> funkciji.';
$lang['SIGNATURE'] = 'Potpis';
$lang['SIGNATURE_EXPLAIN'] = 'Ovo je blok teksta koji se može dodati postovima koje pravite. Postoji %d limit znakova.';
$lang['SIGNATURE_DISABLE'] = 'Potpisan zbog kršenja pravila foruma.';
$lang['PUBLIC_VIEW_EMAIL'] = 'Prikaži e-mail adresu u mom profilu.';

$lang['EMAIL_EXPLAIN'] = 'Na ovoj adresi biće vam poslana registracija.';

$lang['CURRENT_PASSWORD'] = 'Trenutna lozinka.';
$lang['NEW_PASSWORD'] = 'Nova lozinka.';
$lang['CONFIRM_PASSWORD'] = 'Potvrdi lozinku.';
$lang['CONFIRM_PASSWORD_EXPLAIN'] = 'Morate potvrditi svoju trenutnu lozinku ako želite to promijeniti ili promijeniti svoju e-mail adresu.';
$lang['PASSWORD_IF_CHANGED'] = 'Samo trebate unijeti lozinku ako želite da je promijenite.';
$lang['PASSWORD_CONFIRM_IF_CHANGED'] = 'Samo trebate potvrditi svoju lozinku ako je promijenjena iznad.';

$lang['AUTOLOGIN'] = 'Autologin';
$lang['RESET_AUTOLOGIN'] = 'Resetuj autologin ključ.';
$lang['RESET_AUTOLOGIN_EXPL'] = 'uključujući i sve lokacije koje ste posjetili gde je omogućen auto-login.';

$lang['AVATAR'] = 'Avatar';
$lang['AVATAR_EXPLAIN'] = 'Prikazuje malu grafičku sliku ispod vaših podataka u postovima. Samo jedna slika se može prikazati u isto vreme, njena širina ne može biti veća od %d piksela, visina ne veća od %d piksela, a veličina datoteke ne više od %s.';
$lang['AVATAR_DELETE'] = 'Obriši avatar';
$lang['AVATAR_DISABLE'] = 'Opcija kontrole avatara je onemogućena zbog kršenja <a href="%s"><b>pravila foruma</b></a>.';
$lang['UPLOAD_AVATAR_FILE'] = 'Postavi avatar';
$lang['RETURN_PROFILE'] = 'Povratak u profil';
$lang['DELETE_IMAGE'] = 'Obriši sliku.';
$lang['SET_MONSTERID_AVATAR'] = 'Postavi MonsterID avatar';

$lang['NOTIFY_ON_PRIVMSG'] = 'Obavijesti o novoj privatnoj poruci.';
$lang['HIDE_USER'] = 'Sakrij svoj online status.';
$lang['HIDDEN_USER'] = 'Skriveni korisnik.';

$lang['PROFILE_UPDATED'] = 'Vaš profil je ažuriran.';
$lang['PROFILE_UPDATED_INACTIVE'] = 'Vaš profil je ažuriran. Međutim, promijenili ste bitne podatke, tako da je vaš račun sada neaktivan.';

$lang['PASSWORD_LONG'] = 'Vaša lozinka ne smije biti duža od %d karaktera i ne kraća od %d karaktera.';
$lang['USERNAME_TAKEN'] = 'Žao mi je, ali ovo korisničko ime je već zauzeto.';
$lang['USERNAME_INVALID'] = 'Žao mi je, ali ovo korisničko ime sadrži nevalidan karakter.';
$lang['USERNAME_DISALLOWED'] = 'Žao mi je, ali ovo korisničko ime je zabranjeno.';
$lang['USERNAME_TOO_LONG'] = 'Vaše ime je predugo.';
$lang['USERNAME_TOO_SMALL'] = 'Vaše ime je prekratko.';
$lang['EMAIL_TAKEN'] = 'Žao mi je, ali ova e-mail adresa je već registrovana na korisnika.';
$lang['EMAIL_INVALID'] = 'Žao mi je, ali ova e-mail adresa je nevažeća.';
$lang['EMAIL_TOO_LONG'] = 'Vaš e-mail je predug.';
$lang['SIGNATURE_TOO_LONG'] = 'Vaš potpis je predug.';
$lang['SIGNATURE_ERROR_HTML'] = 'Potpis može sadržati samo BBCode.';
$lang['FIELDS_EMPTY'] = 'Morate ispuniti obavezna polja.';

$lang['WELCOME_SUBJECT'] = 'Dobrodošli na %s forume.';

$lang['ACCOUNT_ADDED'] = 'Hvala vam što ste se registrovali. Vaš račun je kreiran. Sada možete da se prijavite sa svojim korisničkim imenom i lozinkom.';
$lang['ACCOUNT_INACTIVE'] = 'Vaš račun je kreiran. Međutim, ovaj forum zahteva aktivaciju računa. Aktivacioni ključ je poslat na e-mail adresu koju ste naveli. Molimo proverite svoju e-mail adresu za dodatne informacije.';
$lang['ACCOUNT_ACTIVE'] = 'Vaš račun je upravo aktiviran. Hvala vam na registraciji.';
$lang['ALREADY_ACTIVATED'] = 'Već ste aktivirali svoj račun.';

$lang['WRONG_ACTIVATION'] = 'Aktivacioni ključ koji ste naveli ne odgovara nijednom u bazi podataka.';
$lang['PASSWORD_UPDATED'] = 'Nova lozinka je kreirana; molimo vas da proverite svoju e-mail adresu za detalje kako da je aktivirate.';
$lang['NO_EMAIL_MATCH'] = 'E-mail adresa koju ste uneli ne odgovara onoj koja je navedena za to korisničko ime.';
$lang['PASSWORD_ACTIVATED'] = 'Vaš račun je ponovo aktiviran. Da biste se prijavili, koristite lozinku navedenu u e-mailu koji ste primili.';

$lang['SEND_EMAIL_MSG'] = 'Pošaljite e-mail poruku.';
$lang['NO_USER_SPECIFIED'] = 'Nije naveden korisnik.';
$lang['USER_NOT_EXIST'] = 'To korisnik ne postoji';
$lang['EMAIL_MESSAGE_DESC'] = 'Ova poruka će biti poslana kao običan tekst, stoga ne uključujte HTML ili BBCode. Povratna adresa za ovu poruku će biti postavljena na vašu e-mail adresu.';
$lang['RECIPIENT'] = 'Primalac';
$lang['EMAIL_SENT'] = 'E-mail je poslan.';
$lang['SEND_EMAIL'] = 'Pošalji e-mail';
$lang['EMPTY_SUBJECT_EMAIL'] = 'Moraš navesti predmet za e-mail.';
$lang['EMPTY_MESSAGE_EMAIL'] = 'Morate unijeti poruku koja će biti poslana e-mailom.';

$lang['USER_AGREEMENT'] = 'Sporazum o korisnicima.';
$lang['USER_AGREEMENT_HEAD'] = 'Da biste nastavili, morate se složiti sa sljedećim pravilima.';
$lang['USER_AGREEMENT_AGREE'] = 'Pročitao sam i slažem se sa Sporazumom o korisnicima iznad.';

$lang['COPYRIGHT_HOLDERS'] = 'Za nositelje autorskih prava.';
$lang['ADVERT'] = 'Oglasite se na ovoj stranici.';
$lang['NOT_FOUND'] = 'Datoteka nije pronađena.';

// Memberslist
$lang['SORT_TOP_TEN'] = 'Deset najboljih poster.';
$lang['SORT_JOINED'] = 'Datum pridruživanja.';
$lang['SORT_USERNAME'] = 'Korisničko ime';
$lang['SORT_LOCATION'] = 'Lokacija';
$lang['SORT_POSTS'] = 'Ukupno postova.';
$lang['SORT_EMAIL'] = 'E-mail';
$lang['SORT_WEBSITE'] = 'Web stranica';
$lang['ASC'] = 'Usporedno.';
$lang['DESC'] = 'Silazno.';
$lang['ORDER'] = 'Naredba.';

// Thanks
$lang['THANK_TOPIC'] = 'Glasajte za ovu temu';
$lang['THANKS_GRATITUDE'] = 'Cijenimo vašu zahvalnost';
$lang['LAST_LIKES'] = 'Posljednji glasovi';
$lang['LIKE_OWN_POST'] = 'Ne možete glasati za vlastitu temu';
$lang['NO_LIKES'] = 'Niko još nije dao glas';
$lang['LIKE_ALREADY'] = 'Već ste glasali za ovu temu';

// Invites
$lang['INVITE_CODE'] = 'Pozivni kod';
$lang['INCORRECT_INVITE'] = 'Poziv nije pronađen';
$lang['INVITE_EXPIRED'] = 'Poziv je istekao';

// Group control panel
$lang['GROUP_CONTROL_PANEL'] = 'Grupne korisničke.';
$lang['GROUP_CONFIGURATION'] = 'Grupna podešavanja.';
$lang['GROUP_GOTO_CONFIG'] = 'Idite na grupne podešavanja.';
$lang['GROUP_RETURN'] = 'Vrati se na stranicu korisničke grupe.';
$lang['MEMBERSHIP_DETAILS'] = 'Detalji o članstvu grupe.';
$lang['JOIN_A_GROUP'] = 'Pridružite se grupi.';

$lang['GROUP_INFORMATION'] = 'Informacije o grupi.';
$lang['GROUP_NAME'] = 'Ime grupe.';
$lang['GROUP_DESCRIPTION'] = 'Opis grupe.';
$lang['GROUP_SIGNATURE'] = 'Potpis grupe.';
$lang['GROUP_MEMBERSHIP'] = 'Članstvo grupe.';
$lang['GROUP_MEMBERS'] = 'Članovi grupe.';
$lang['GROUP_MODERATOR'] = 'Moderator grupe.';
$lang['PENDING_MEMBERS'] = 'Članovi na čekanju.';

$lang['GROUP_TIME'] = 'Stvoreno.';
$lang['RELEASE_GROUP'] = 'Oslobodi grupu.';

$lang['GROUP_TYPE'] = 'Tip grupe.';
$lang['GROUP_OPEN'] = 'Otvorena grupa.';
$lang['GROUP_CLOSED'] = 'Zatvorena grupa.';
$lang['GROUP_HIDDEN'] = 'Skrivena grupa.';

$lang['GROUP_MEMBER_MOD'] = 'Moderator grupe.';
$lang['GROUP_MEMBER_MEMBER'] = 'Trenutna članstva.';
$lang['GROUP_MEMBER_PENDING'] = 'Članstva na čekanju.';
$lang['GROUP_MEMBER_OPEN'] = 'Otvorene grupe.';
$lang['GROUP_MEMBER_CLOSED'] = 'Zatvorene grupe.';
$lang['GROUP_MEMBER_HIDDEN'] = 'Skrivene grupe.';

$lang['NO_GROUPS_EXIST'] = 'Ne postoje grupe.';
$lang['GROUP_NOT_EXIST'] = 'Ta korisnička grupa ne postoji.';
$lang['NO_GROUP_ID_SPECIFIED'] = 'ID grupe nije naveden.';

$lang['NO_GROUP_MEMBERS'] = 'Ovoj grupi nema članova';
$lang['HIDDEN_GROUP_MEMBERS'] = 'Ova grupa je sakrivena; ne možete vidjeti njeno članstvo.';
$lang['NO_PENDING_GROUP_MEMBERS'] = 'Ovoj grupi nema članova na čekanju.';
$lang['GROUP_JOINED'] = 'Uspješno ste se prijavili za ovu grupu.<br />Obavijestit ćete kada vaša prijava bude odobrena od strane moderatora grupe.';
$lang['ALREADY_MEMBER_GROUP'] = 'Već si član ove grupe';
$lang['USER_IS_MEMBER_GROUP'] = '%s je već član ove grupe';
$lang['USER_IS_MOD_GROUP'] = '%s je moderator ove grupe';
$lang['EFFECTIVE_DATE'] = 'Efektivni Datum';
$lang['COULD_NOT_ADD_USER'] = 'Izabrali ste korisnika koji ne postoji.';
$lang['UNSUB_SUCCESS'] = 'Bili ste otkazani iz ove grupe.';

$lang['APPROVE_SELECTED'] = 'Odobriti Odabrane';
$lang['DENY_SELECTED'] = 'Odbij odabrane.';
$lang['REMOVE_SELECTED'] = 'Ukloni odabrane.';
$lang['ADD_MEMBER'] = 'Dodaj Član';
$lang['NOT_GROUP_MODERATOR'] = 'Nisi moderator ove grupe, stoga ne možeš izvesti ovu akciju.';

$lang['LOGIN_TO_JOIN'] = 'Prijavite se da se pridružite ili da upravljate članstvom u grupi.';
$lang['THIS_OPEN_GROUP'] = 'Ova je otvorena grupa: kliknite da zatražite članstvo.';
$lang['THIS_CLOSED_GROUP'] = 'Ova je zatvorena grupa: više korisnika nije prihvaćeno.';
$lang['THIS_HIDDEN_GROUP'] = 'Ova je skrivena grupa: automatski dodavanje korisnika nije dozvoljeno.';
$lang['MEMBER_THIS_GROUP'] = 'Ti si član ove grupe';
$lang['PENDING_THIS_GROUP'] = 'Vaše članstvo u ovoj grupi je na čekanju.';
$lang['ARE_GROUP_MODERATOR'] = 'Ti si moderator ove grupe.';
$lang['NONE'] = 'Niko';

$lang['UNSUBSCRIBE_GROUP'] = 'Odjavite se.';
$lang['MEMBERS_IN_GROUP'] = 'Članovi u grupi';

// Release Groups
$lang['POST_RELEASE_FROM_GROUP'] = 'Post puštanja iz grupe.';
$lang['CHOOSE_RELEASE_GROUP'] = 'neodabrano.';
$lang['ATTACH_RG_SIG'] = 'Zakači potpis slobodne grupe.';
$lang['RELEASE_FROM_RG'] = 'Oslobođenje je pripremila.';
$lang['GROUPS_RELEASES'] = 'Grupni oslobađa.';
$lang['MORE_RELEASES'] = 'Nađi sve oslobađanje grupe.';
$lang['NOT_A_RELEASE_GROUP'] = 'Ova grupa nije oslobodi grupi.';

// Search
$lang['SEARCH_HELP_URL'] = 'Potraži pomoć.';
$lang['SEARCH_OPTIONS'] = 'Potraži opcije.';

$lang['SEARCH_WORDS'] = 'Potražite ključne riječi.';
$lang['SEARCH_WORDS_EXPL'] = 'Možete koristiti <b>+</b> da definišem riječi koje moraju biti u rezultatu i <b>-</b> da definišem riječi koje ne bi trebale biti u rezultatu (npr: "+word1 -word2"). Koristite * kao zamjenu za djelomične podudarnosti.';
$lang['SEARCH_AUTHOR'] = 'Potraga za autorom.';
$lang['SEARCH_AUTHOR_EXPL'] = 'Koristi * kao zamjenu za djelomične podudarnosti.';

$lang['SEARCH_TITLES_ONLY'] = 'Potraga tema samo titule.';
$lang['SEARCH_ALL_WORDS'] = 'sve riječi';
$lang['IN_MY_POSTS'] = 'U mojim funkcijama.';
$lang['SEARCH_MY_TOPICS'] = 'U mojim temama.';
$lang['NEW_TOPICS'] = 'Nove teme';

$lang['SEARCH_PREVIOUS'] = 'Potraži prethodnu.';

$lang['SORT_BY'] = 'Sortiraj po.';
$lang['SORT_TIME'] = 'Post Vremena.';
$lang['SORT_TOPIC_TITLE'] = 'Tema Titulu.';

$lang['DISPLAY_RESULTS_AS'] = 'Prikaži rezultate kao.';
$lang['ALL_AVAILABLE'] = 'Sve raspoložive';
$lang['BRIEFLY'] = 'Kratko';

$lang['NO_SEARCH_MATCH'] = 'Ne teme ni postovi nisu zadovoljili vaše kriterije pretrage.';
$lang['FOUND_SEARCH_MATCH'] = 'Pretraživanje je našlo %d meč.'; // e.g. Search found 1 match
$lang['FOUND_SEARCH_MATCHES'] = 'Pretraživanje je našlo %d odgovara.'; // e.g. Search found 24 matches

$lang['CLOSE_WINDOW'] = 'Blizu prozora.';
$lang['HIDE'] = 'sakrij';

// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
$lang['SORRY_AUTH_VIEW'] = 'Žao mi je, ali samo %s može da vidi ovaj forum.';
$lang['SORRY_AUTH_READ'] = 'Žao mi je, ali samo %s može čitati teme u ovom forumu.';
$lang['SORRY_AUTH_REPLY'] = 'Žao mi je, ali samo %s mogu da odgovaram na mjesta u ovom forumu.';
$lang['SORRY_AUTH_EDIT'] = 'Žao mi je, ali samo %s mogu da uređuju mjesta u ovom forumu.';
$lang['SORRY_AUTH_DELETE'] = 'Žao mi je, ali samo %s može izbrisati mjesta u ovom forumu.';

// These replace the %s in the above strings
$lang['AUTH_ANONYMOUS_USERS'] = '<b>anonimni korisnici</b>.';
$lang['AUTH_REGISTERED_USERS'] = '<b>registrovani korisnici</b>.';
$lang['AUTH_USERS_GRANTED_ACCESS'] = '<b>korisnici kojima je odobren poseban pristup</b>.';
$lang['AUTH_MODERATORS'] = '<b>moderatori</b>.';
$lang['AUTH_ADMINISTRATORS'] = '<b>administratori</b>.';

$lang['NOT_MODERATOR'] = 'Nisi moderator ovog foruma.';
$lang['NOT_AUTHORISED'] = 'Niste ovlašćeni';

$lang['YOU_BEEN_BANNED'] = 'Zabranjeni ste sa ovog foruma. Za više informacija obratite se administratoru odbora.';

// Viewonline
$lang['ONLINE_EXPLAIN'] = 'korisnici aktivni u posljednjih pet minuta.';
$lang['LAST_UPDATED'] = 'Ažurirano';

// Moderator Control Panel
$lang['MOD_CP'] = 'Moderator kontrolna tabla.';
$lang['SELECT'] = 'Odaberite';
$lang['DELETE'] = 'Obriši';
$lang['MOVE'] = 'Preseliti.';
$lang['LOCK'] = 'Zaključati.';
$lang['UNLOCK'] = 'Otključati.';

$lang['TOPICS_REMOVED'] = 'Odabrane teme uspješno su uklonjene iz baze podataka.';
$lang['NO_TOPICS_REMOVED'] = 'Nema tema koje su uklonjene.';
$lang['TOPICS_LOCKED'] = 'Odabrane teme su bile zaključane.';
$lang['TOPICS_MOVED'] = 'Odabrane teme su preseljene.';
$lang['TOPICS_UNLOCKED'] = 'Odabrane teme su bile otključane.';
$lang['NO_TOPICS_MOVED'] = 'Nema tema koje su preseljene.';

$lang['CONFIRM_DELETE_TOPIC'] = 'Da li ste sigurni da želite ukloniti odabrane teme?';
$lang['CONFIRM_MOVE_TOPIC'] = 'Da li ste sigurni da želite da preselite odabrane teme?';

$lang['MOVE_TO_FORUM'] = 'Preseliti u forum.';
$lang['LEAVE_SHADOW_TOPIC'] = 'Ostaviti sjenku teme u starom forumu.';

$lang['SPLIT_TOPIC_EXPLAIN'] = 'Koristeći formu ispod možete podijeliti temu u dva dijela, bilo odabirom postova pojedinačno ili razdvajanjem na odabranom postu.';
$lang['NEW_TOPIC_TITLE'] = 'Naslov nove teme.';
$lang['FORUM_FOR_NEW_TOPIC'] = 'Forum za novu temu';
$lang['SPLIT_POSTS'] = 'Podijelite odabrane postove.';
$lang['SPLIT_AFTER'] = 'Podijelite od odabranog posta.';
$lang['TOPIC_SPLIT'] = 'Odabrana tema je uspješno podijeljena.';
$lang['NONE_SELECTED'] = 'Nemate ništa odabrano za izvođenje ove operacije. Molimo se vrati i odaberi barem jedan.';

$lang['THIS_POSTS_IP'] = 'IP adresa za ovaj post.';
$lang['OTHER_IP_THIS_USER'] = 'Drugi IP adrese koji je ovaj korisnik postavio.';
$lang['USERS_THIS_IP'] = 'Korisnici koji snimaju iz ove IP adrese.';
$lang['IP_INFO'] = 'IP informacije.';
$lang['LOOKUP_IP'] = 'Pogledajte IP adrese.';

// Timezones ... for display on each page
$lang['ALL_TIMES'] = 'Sva vremena su <span class="tz_time">%s</span>.'; // This is followed by UTC and the timezone offset

// Friendly dates (used in bb_date function)
$lang['DATETIME']['TODAY'] = 'Danas';
$lang['DATETIME']['YESTERDAY'] = 'Jučer';

// Country selector
$lang['COUNTRY'] = 'Država';
$lang['SET_OWN_COUNTRY'] = 'Postavi svoju državu (Ručno)';

// Errors
$lang['INFORMATION'] = 'Informacije';
$lang['ADMIN_REAUTHENTICATE'] = 'Da bi upravljao/umjeren odbor, moraš se ponovo prijaviti.';

// Attachment Mod Main Language Variables
// Auth Related Entries
$lang['RULES_ATTACH_CAN'] = 'Možeš prikačiti datoteke u ovom forumu.';
$lang['RULES_ATTACH_CANNOT'] = 'Ne možeš prikačiti datoteke u ovom forumu.';
$lang['RULES_DOWNLOAD_CAN'] = 'Možeš preuzeti datoteke u ovom forumu.';
$lang['RULES_DOWNLOAD_CANNOT'] = 'Ne možeš preuzeti datoteke u ovom forumu.';
$lang['SORRY_AUTH_VIEW_ATTACH'] = 'Žao nam je, ali nisi ovlašten da pregledaš ili preuzmeš ovu prilog.';

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
$lang['SAMPLE_RATE'] = 'Uzorkovna frekvencija: <b>%s</b>';
$lang['AUDIO_TRACK'] = 'Informacije o audio traci (%d):';
$lang['AUDIO_CODEC'] = 'Audio codec: <b title="%s">%s</b>';
$lang['VIDEO_CODEC'] = 'Video codec: <b title="%s">%s</b>';
$lang['SHOW_MORE_INFORMATION_FILE'] = 'Prikaži više informacija o datoteci';
$lang['DOWNLOAD_M3U_FILE'] = 'Preuzmi .m3u datoteku';
$lang['PLAYBACK_M3U'] = 'Reprodukcija .m3u datoteke';
$lang['COPY_STREAM_LINK'] = 'Kopiraj link streama u clipboard';
$lang['M3U_NOT_SUPPORTED'] = 'Ova datoteka se ne može reprodukovati u pretraživaču...';
$lang['M3U_FFPROBE_NO_DATA'] = 'Izgleda da ffprobe neće moći da vrati podatke o ovom codec-u...';
$lang['M3U_NOTICE'] = 'Neki pretraživači ne podržavaju reprodukciju određenih video formata. U takvim slučajevima možete preuzeti .m3u datoteku i reprodukovati je koristeći player treće strane';
$lang['TORRSERVER_UNAVAILABLE'] = 'TorrServer nije dostupan';
$lang['TORRSERVER_INVALID_REQUEST'] = 'Nevažeći parametri zahtjeva';

$lang['ATTACHMENT'] = 'Prilozi';

// Posting -> Posting Attachments
$lang['ADD_ATTACHMENT'] = 'Dodaj Prilog';
$lang['ADD_ATTACHMENT_EXPLAIN'] = 'Ako ne želiš dodati privitak u tvoj post, molim te ostavi polja prazna.';
$lang['UPDATE_ATTACHMENT'] = 'Ažuriraj prilog';
$lang['FILENAME'] = 'Naziv datoteke.';

// Posting -> Posted Attachments
$lang['POSTED_ATTACHMENTS'] = 'Objavljeni prilozi.';
$lang['DELETE_ATTACHMENT'] = 'Obriši Prilog';

// Errors -> Download
$lang['NO_ATTACHMENT_SELECTED'] = 'Nisi odabrao privitak za preuzimanje ili pregled.';
$lang['ERROR_NO_ATTACHMENT'] = 'Izabrani privitak više ne postoji.';
$lang['DOWNLOAD_LIMIT_EXCEEDED'] = 'Dnevni limit preuzimanja je premašen. Molimo pokušajte ponovo sutra.';

//bt
$lang['BT_REG_YES'] = 'Registriran.';
$lang['BT_REG_NO'] = 'Nije registrovan.';
$lang['BT_REG_ON_TRACKER'] = 'Registruj se na tragaču.';
$lang['BT_REG_FAIL'] = 'Nije moguće registrovati torrent na tragaču.';
$lang['BT_REG_FAIL_SAME_HASH'] = 'Drugi torrent sa istim info_hash već je <a href="%s"><b>registrovan</b></a>.';
$lang['BT_V1_ONLY_DISALLOWED'] = 'v1-samo torenti su trenutno onemogućeni od strane administratora, dozvoljeni: v2 i hibridi';
$lang['BT_V2_ONLY_DISALLOWED'] = 'v2-samo torenti su trenutno onemogućeni od strane administratora, dozvoljeni: v1 i hibridi';
$lang['BT_FLIST'] = 'Lista datoteka';
$lang['BT_FLIST_LIMIT'] = 'Postavke tragača ne dozvoljavaju obradu lista sa više od %d datoteka. Trenutni broj je: %d';
$lang['BT_FLIST_BTMR_HASH'] = 'BTMR Hash';
$lang['BT_FLIST_BTMR_NOTICE'] = 'BitTorrent Merkle Root je haš datoteke ugrađene u torente sa podrškom za BitTorrent v2, korisnici trackera mogu da ih izvade, izračunaju, takođe da preuzmu deduplirane torente koristeći desktop alate kao što su <a href="%s" target="_blank" referrerpolicy="origin">Torrent Merkle Root Reader</a>';
$lang['BT_FLIST_CREATION_DATE'] = 'Datum kreiranja';
$lang['BT_IS_PRIVATE'] = 'Privatni torrent';
$lang['BT_FLIST_FILE_PATH'] = 'Putanja (%s)';
$lang['BT_FLIST_LINK_TITLE'] = 'Hash datoteka | .torrent meta-informacije';
$lang['BT_UNREG_FROM_TRACKER'] = 'Ukloni iz tragača.';
$lang['BT_UNREGISTERED'] = 'Torrent nije registrovan.';
$lang['BT_UNREGISTERED_ALREADY'] = 'Torrent je već odjavljen';
$lang['BT_REGISTERED'] = 'Torrent se registrovao na tragaču.<br /><br />Sada moraš <a href="%s"><b>preuzeti tvoj torrent</b></a> i pokrenuti ga koristeći svoj BitTorrent klijent birajući folder sa originalnim fajlovima koje dijeliš kao putanju za preuzimanje.';
$lang['INVALID_ANN_URL'] = 'Nevažeći objavi URL [%s]<br /><br />mora biti <b>%s</b>.';
$lang['PASSKEY_ERR_TOR_NOT_REG'] = 'Nije moguće dodati passkey<br /><br />Torrent nije registrovan na tragaču.';
$lang['BT_PASSKEY'] = 'S ključem.';
$lang['BT_GEN_PASSKEY'] = 'stvarati novi.';
$lang['BT_PASSKEY_VIEW'] = 'prikazati.';
$lang['BT_GEN_PASSKEY_NEW'] = "Pažnja! Nakon mijenjanja vašeg ključa, moraćete ponovo preuzeti sve aktivne torente! \n Jesi li siguran da želiš da napraviš novi ključ?";
$lang['BT_NO_SEARCHABLE_FORUMS'] = 'Nema pretraživanih foruma.';

$lang['SEEDS'] = 'Semena.';
$lang['LEECHS'] = 'Leek.';
$lang['SPEED_UP'] = 'Ubrzati.';
$lang['SPEED_DOWN'] = 'Smanjenje brzine.';

$lang['SEEDERS'] = 'Seme.';
$lang['LEECHERS'] = 'Smeće.';
$lang['RELEASING'] = 'Smeće.';
$lang['SEEDING'] = 'Seme.';
$lang['LEECHING'] = 'Smeće.';
$lang['IS_REGISTERED'] = 'Registriran';
$lang['MAGNET'] = 'Magnet-link';
$lang['MAGNET_FOR_GUESTS'] = 'Prikaži magnet-link za goste';
$lang['MAGNET_v2'] = 'Magnet-link (BitTorrent v2 podržava)';

//torrent status mod
$lang['TOR_STATUS'] = 'Status';
$lang['TOR_STATUS_SELECT_ACTION'] = 'Odaberite status';
$lang['TOR_STATUS_NOT_SELECT'] = 'Nije odabran status.';
$lang['TOR_STATUS_SELECT_ALL'] = 'Svi statusi';
$lang['TOR_STATUS_FORBIDDEN'] = 'Status ove teme je: ';
$lang['TOR_STATUS_NAME'] = [
    TOR_NOT_APPROVED => 'nije provjereno',
    TOR_CLOSED => 'zatvoreno',
    TOR_APPROVED => 'provjereno',
    TOR_NEED_EDIT => 'nije ozvaničen do',
    TOR_NO_DESC => 'nije ozvaničen',
    TOR_DUP => 'duplikat',
    TOR_CLOSED_CPHOLD => 'zatvoreno (autorska prava)',
    TOR_CONSUMED => 'apsorbovan',
    TOR_DOUBTFUL => 'sumnjiv',
    TOR_CHECKING => 'u proveri',
    TOR_TMP => 'privremeno',
    TOR_PREMOD => 'pre-moderacija',
    TOR_REPLENISH => 'dopunjavanje',
];
$lang['TOR_STATUS_FAILED'] = 'Takav status ne postoji.';
$lang['TORRENT_FAILED'] = 'Distribucija nije pronađena.';
$lang['TOR_STATUS_DUB'] = 'Distribucija ima isti status.';
$lang['TOR_DONT_CHANGE'] = 'Promena statusa ne može biti izvršena!';
$lang['TOR_STATUS_OF'] = 'Distribucija ima status:';
$lang['TOR_STATUS_CHANGED'] = 'Status promijenjen: ';
$lang['TOR_BACK'] = 'nazad';
$lang['PROCEED'] = 'Nastavite';
$lang['CHANGE_TOR_TYPE'] = 'Tip torrenta uspješno promijenjen.';
$lang['DEL_TORRENT'] = 'Da li ste sigurni da želite obrisati torrent?';
$lang['DEL_MOVE_TORRENT'] = 'Da li ste sigurni da želite obrisati i premjestiti temu?';
$lang['UNEXECUTED_RELEASE'] = 'Imate neurađeni release. Pre nego što napravite novi, molimo vas završite ga!';
$lang['TOR_STATUS_LOG_ACTION'] = 'Novi status: %s.<br/>Prethodni status: %s.';

// tor_comment
$lang['TOR_MOD_TITLE'] = 'Promjena statusa distribucije - %s';
$lang['TOR_MOD_MSG'] = "Pozdrav, %s.\n\nStatus [url=%s]vaše[/url] distribucije je promenjen u [b]%s[/b]";

$lang['TOR_AUTH_TITLE'] = 'Promjene u dizajnu - %s';
$lang['TOR_AUTH_MSG'] = "Pozdrav, %s.\n\nVaša distribucija je promenjena - [url=%s]%s[/url]\n\nMolimo ponovo proverite.";
$lang['TOR_AUTH_FIXED'] = 'Popravljen.';
$lang['TOR_AUTH_SENT_COMMENT'] = ' &middot; <span class="seed bold">Informacije poslane moderatoru. Očekujte.</span>.';

$lang['BT_TOPIC_TITLE'] = 'Naslov teme';
$lang['BT_SEEDER_LAST_SEEN'] = 'Seeder poslednji put viđen.';
$lang['SIZE'] = 'Veličina.';
$lang['COMPLETED'] = 'Završeni preuzimanja';
$lang['ADDED'] = 'Dodao';
$lang['DELETE_TORRENT'] = 'Obriši torrent.';
$lang['DELETE_MOVE_TORRENT'] = 'Obriši i premjesti temu.';
$lang['DL_TORRENT'] = 'Preuzmi .torrent.';
$lang['BT_LAST_POST'] = 'Zadnja poruka.';
$lang['BT_CREATED'] = 'Tema je postavljen.';
$lang['BT_REPLIES'] = 'Odgovori.';
$lang['BT_VIEWS'] = 'Pogledi.';

// Gold/Silver releases
$lang['GOLD'] = 'Zlatna.';
$lang['SILVER'] = 'Srebrni.';
$lang['SET_GOLD_TORRENT'] = 'Napravi zlato.';
$lang['UNSET_GOLD_TORRENT'] = 'Ukloni zlato';
$lang['SET_SILVER_TORRENT'] = 'Napravi srebro.';
$lang['UNSET_SILVER_TORRENT'] = 'Ukloni srebro';
$lang['GOLD_STATUS'] = 'ZLATI TORRENT! PREUZIMANJE SAOBRAĆAJA NE SMATRAJ!';
$lang['SILVER_STATUS'] = 'SREBRNI TORRENT! PREUZIMANJE SAOBRAĆAJ DJELOMIČNO SMATRA!';
$lang['TOR_TYPE_LOG_ACTION'] = 'Tip torenta promenjen na: %s';

$lang['TORRENT_STATUS'] = 'Pretraga po statusu izdanja';
$lang['SEARCH_IN_FORUMS'] = 'Pretraži forume.';
$lang['SELECT_CAT'] = 'Odaberite kategoriju.';
$lang['GO_TO_SECTION'] = 'Idite u sekciju';
$lang['TORRENTS_FROM'] = 'Objave iz.';
$lang['SHOW_ONLY'] = 'Prikaži samo.';
$lang['SHOW_COLUMN'] = 'Prikaži kolonu.';
$lang['SEL_CHAPTERS'] = 'Veza do odabranih particija.';
$lang['NOT_SEL_CHAPTERS'] = 'Nisi odabrali teme.';
$lang['SEL_CHAPTERS_HELP'] = 'Možete da izaberete maksimalno %s particija.';
$lang['HIDE_CONTENTS'] = 'Sakrij sadržaj {...}.';
$lang['FILTER_BY_NAME'] = '<i>Filter po imenu.</i>.';

$lang['BT_ONLY_ACTIVE'] = 'Aktivan.';
$lang['BT_ONLY_MY'] = 'Moja izdanja.';
$lang['BT_SEED_EXIST'] = 'Postoji Seeder.';
$lang['BT_ONLY_NEW'] = 'Novo iz poslednje posete.';
$lang['BT_SHOW_CAT'] = 'Kategorija.';
$lang['BT_SHOW_FORUM'] = 'Forum';
$lang['BT_SHOW_AUTHOR'] = 'Autor.';
$lang['BT_SHOW_SPEED'] = 'Brzina.';
$lang['SEED_NOT_SEEN'] = 'Seeder nije viđen.';
$lang['TITLE_MATCH'] = 'Naslov meč.';
$lang['BT_USER_NOT_FOUND'] = 'nije pronađen.';
$lang['DL_SPEED'] = 'Sveukupna preuzimanje brzinom.';

$lang['BT_DISREGARD'] = 'bez obzira.';
$lang['BT_NEVER'] = 'nikad.';
$lang['BT_ALL_DAYS_FOR'] = 'sve vreme.';
$lang['BT_1_DAY_FOR'] = 'posljednji dan.';
$lang['BT_3_DAY_FOR'] = 'posljednja tri dana.';
$lang['BT_7_DAYS_FOR'] = 'prošla nedelja.';
$lang['BT_2_WEEKS_FOR'] = 'prošle dve nedelje.';
$lang['BT_1_MONTH_FOR'] = 'prošli mesec.';
$lang['BT_1_DAY'] = '1 dan.';
$lang['BT_3_DAYS'] = '3 dana.';
$lang['BT_7_DAYS'] = 'nedelja.';
$lang['BT_2_WEEKS'] = '2 nedelje.';
$lang['BT_1_MONTH'] = 'mesec.';

$lang['DL_LIST_AND_TORRENT_ACTIVITY'] = 'DL-Lista i aktivnost torrenta.';
$lang['DLWILL'] = 'Će preuzeti.';
$lang['DLDOWN'] = 'Skidanje.';
$lang['DLCOMPLETE'] = 'Potpuno.';
$lang['DLCANCEL'] = 'Otkaži.';

$lang['DL_LIST_DEL'] = 'Jasno DL-Liste.';
$lang['DL_LIST_DEL_CONFIRM'] = 'Obriši DL-Listu za ovu temu?';
$lang['SHOW_DL_LIST'] = 'Pokaži DL-Listu.';
$lang['SET_DL_STATUS'] = 'Preuzmi.';
$lang['UNSET_DL_STATUS'] = 'Nema preuzimanja.';
$lang['TOPICS_DOWN_SETS'] = 'Tema status promijenjen u <b>Preuzmi</b>.';
$lang['TOPICS_DOWN_UNSETS'] = '<b>Preuzmi</b> status uklonjen.';

$lang['TOPIC_DL'] = 'DL.';

$lang['MY_DOWNLOADS'] = 'Moji Preuzimanja.';
$lang['SEARCH_DL_WILL'] = 'Planirano.';
$lang['SEARCH_DL_WILL_DOWNLOADS'] = 'Planirani Preuzimanja.';
$lang['SEARCH_DL_DOWN'] = 'Trenutni.';
$lang['SEARCH_DL_COMPLETE'] = 'Završeni.';
$lang['SEARCH_DL_COMPLETE_DOWNLOADS'] = 'Završeni preuzimanja.';
$lang['SEARCH_DL_CANCEL'] = 'Otkaženo.';
$lang['CUR_UPLOADS'] = 'Trenutni Uplati';
$lang['SEARCH_RELEASES'] = 'Izdavanja';
$lang['TOR_SEARCH_TITLE'] = 'Opcije pretrage bujica';
$lang['OPEN_TOPIC'] = 'Otvorena tema';

$lang['REG_NOT_ALLOWED_IN_THIS_FORUM'] = 'Nije moguće registrovati bujicu na ovom forumu';
$lang['ALREADY_REG'] = 'Bujica je već registrovana';
$lang['NOT_TORRENT'] = 'Ova datoteka nije bujica';
$lang['VIEWING_USER_BT_PROFILE'] = 'Torrent-profil';
$lang['CUR_ACTIVE_DLS'] = 'Aktivne bujice';

$lang['TD_TRAF'] = 'Danas';
$lang['YS_TRAF'] = 'Jučer';
$lang['TOTAL_TRAF'] = 'Ukupno';

$lang['USER_RATIO'] = 'Omjer';
$lang['MAX_SPEED'] = 'Brzina';
$lang['DOWNLOADED'] = 'Skinuto';
$lang['UPLOADED'] = 'Učitano';
$lang['RELEASED'] = 'Pušteno';
$lang['BONUS'] = 'Na rijetko';
$lang['IT_WILL_BE_DOWN'] = 'početi će se smatrati nakon što bude preuzeto';
$lang['SPMODE_FULL'] = 'Pokaži kolege u svim detaljima';

// Seed Bonus
$lang['MY_BONUS'] = 'Moj bonus (%s bonusa na raspolaganju)';
$lang['BONUS_SELECT'] = 'Odaberite';
$lang['SEED_BONUS'] = 'Bonus za sjeme';
$lang['EXCHANGE'] = 'Zamjena';
$lang['EXCHANGE_BONUS'] = 'Razmjena bonusa za sjeme';
$lang['BONUS_UPLOAD_DESC'] = '<b>%s za distribuciju</b> <br /> Da biste razmenili bonus poene za %1$s saobraćaj koji će biti dodat vašoj ukupnoj distribuciji.';
$lang['BONUS_UPLOAD_PRICE'] = '<b class="%s">%s</b>';
$lang['PRICE'] = 'Cijena';
$lang['EXCHANGE_NOT'] = 'Razmjena nije dostupna';
$lang['BONUS_SUCCES'] = 'Uspješno ste prijavili %s';
$lang['BONUS_NOT_SUCCES'] = '<span class="leech">Nemate dostupnih bonusa. Više seeding!</span>';
$lang['BONUS_RETURN'] = 'Povratak na razmjenu seme bonusa';

$lang['TRACKER'] = 'Tragač';
$lang['RANDOM_RELEASE'] = 'Nasumično izdanje';
$lang['OPEN_TOPICS'] = 'Otvorene teme';
$lang['OPEN_IN_SAME_WINDOW'] = 'otvori u istom prozoru';
$lang['SHOW_TIME_TOPICS'] = 'pokaži vrijeme stvaranja teme';
$lang['SHOW_CURSOR'] = 'istakni red pod kursorom';

$lang['BT_LOW_RATIO_FOR_DL'] = 'Sa omjerom <b>%s</b> ne možete preuzeti bujice';
$lang['BT_RATIO_WARNING_MSG'] = 'Ako vaš omjer padne ispod %s, nećete moći da preuzmete bujice! <a href="%s"><b>Više o ocjeni.</b></a>';

$lang['SEEDER_LAST_SEEN'] = 'Seeder nije viđen: <b>%s</b>';

$lang['NEED_TO_LOGIN_FIRST'] = 'Prvo se moraš prijaviti.';
$lang['ONLY_FOR_MOD'] = 'Ova opcija je samo za moderatore';
$lang['ONLY_FOR_ADMIN'] = 'Ova opcija je samo za administratore';
$lang['ONLY_FOR_SUPER_ADMIN'] = 'Ova opcija je samo za super administratore';

$lang['LOGS'] = 'Istorija teme';
$lang['FORUM_LOGS'] = 'Povijest foruma';
$lang['AUTOCLEAN'] = 'Autoclean';
$lang['DESIGNER'] = 'Dizajner';

$lang['LAST_IP'] = 'Prošla IP: ';
$lang['REG_IP'] = 'Registracija IP: ';
$lang['OTHER_IP'] = 'Druga IP: ';
$lang['ALREADY_REG_IP'] = 'Korisnik %s je već registrovan sa vašom IP adresom. Ako prethodno niste registrovani na našem tragaču, pošaljite email <a href="mailto:%s">administratoru</a>';
$lang['HIDDEN'] = 'Skrivene';

// from admin
$lang['NOT_ADMIN'] = 'Nemate pravo da upravljate ovim forumom.';

$lang['SESSION_EXPIRED'] = 'Sjednica je istekla';

// Sort memberlist per letter
$lang['POST_LINK'] = 'Post link';
$lang['GOTO_QUOTED_POST'] = 'Idi u citiranoj objavi';
$lang['LAST_VISITED'] = 'Prošli posjetio';
$lang['LAST_ACTIVITY'] = 'Prošla aktivnost';
$lang['NEVER'] = 'Nikad';

//mpd
$lang['DELETE_POSTS'] = 'Obriši odabrane objave';
$lang['DELETE_POSTS_SUCCESFULLY'] = 'Odabrane objave su uspješno uklonjene';
$lang['NO_POSTS_REMOVED'] = 'Nijedan post nije uklonjen.';

//ts
$lang['TOPICS_ANNOUNCEMENT'] = 'Najave';
$lang['TOPICS_STICKY'] = 'Ljepljive';
$lang['TOPICS_NORMAL'] = 'Teme';

//dpc
$lang['DOUBLE_POST_ERROR'] = 'Ne možete napraviti drugu objavu sa istim tekstom kao vaša poslednja.';

//upt
$lang['UPDATE_POST_TIME'] = 'Ažuriraj vrijeme objave';

$lang['TOPIC_SPLIT_NEW'] = 'Nova tema';
$lang['TOPIC_SPLIT_OLD'] = 'Stara tema';
$lang['BOT_LEAVE_MSG_MOVED'] = 'Dodaj bot-poruku o premještanju';
$lang['BOT_REASON_MOVED'] = 'Razlog za premeštanje';
$lang['BOT_AFTER_SPLIT_TO_OLD'] = 'Dodaj bot-poruku o dijeljenju <b>stare teme</b>';
$lang['BOT_AFTER_SPLIT_TO_NEW'] = 'Dodaj bot-poruku o dijeljenju <b>nove teme</b>';
//qr
$lang['QUICK_REPLY'] = 'Brzi odgovor';
$lang['INS_NAME_TIP'] = 'Ubacite ime ili izabrani tekst.';
$lang['QUOTE_SELECTED'] = 'Citat odabranih';
$lang['QR_NOTIFY'] = 'Obavijestite na odgovor';
$lang['QR_USERNAME'] = 'Ime';
$lang['QR_FONT_SEL'] = 'Izgled fonta';
$lang['QR_COLOR_SEL'] = 'Boja fonta';
$lang['QR_SIZE_SEL'] = 'Veličina fonta';
$lang['COLOR_STEEL_BLUE'] = 'Čelična plava';
$lang['COLOR_GRAY'] = 'Siva';
$lang['COLOR_DARK_GREEN'] = 'Tamno zelena';

// Short buttons
$lang['IP'] = 'IP';
$lang['POLL'] = 'Anketa';
$lang['MODERATE'] = 'Moderator';
$lang['SEND_PM_SHORT'] = 'PM';
$lang['WEBSITE_SHORT'] = 'WWW';

$lang['DECLENSION']['REPLIES'] = ['odgovor', 'odgovori'];
$lang['DECLENSION']['TIMES'] = ['vrijeme', 'puta'];
$lang['DECLENSION']['FILES'] = ['datoteka', 'datoteke'];

$lang['AUTH_TYPES'][AUTH_ALL] = $lang['AUTH_ANONYMOUS_USERS'];
$lang['AUTH_TYPES'][AUTH_REG] = $lang['AUTH_REGISTERED_USERS'];
$lang['AUTH_TYPES'][AUTH_ACL] = $lang['AUTH_USERS_GRANTED_ACCESS'];
$lang['AUTH_TYPES'][AUTH_MOD] = $lang['AUTH_MODERATORS'];
$lang['AUTH_TYPES'][AUTH_ADMIN] = $lang['AUTH_ADMINISTRATORS'];

$lang['NEW_USER_REG_DISABLED'] = 'Žao mi je, registracija je onemogućena u ovom trenutku.';
$lang['ONLY_NEW_POSTS'] = 'samo nove objave';
$lang['ONLY_NEW_TOPICS'] = 'samo nove teme';

$lang['TORHELP_TITLE'] = 'Molim te, pomozi s ovim torrentima!';
$lang['STATISTICS'] = 'Statistika';
$lang['STATUS'] = 'Status';
$lang['ACTION'] = 'Akcija';
$lang['REASON'] = 'Razlog';
$lang['COMMENT'] = 'Komentar';

// search
$lang['SEARCH_S'] = 'pretraga...';
$lang['FORUM_S'] = 'na forumu';
$lang['TRACKER_S'] = 'na tragaču';
$lang['HASH_S'] = 'po info_hash';

// copyright
$lang['NOTICE'] = '!PAŽNJA!';
$lang['COPY'] = 'Sajt ne pruža elektronske verzije proizvoda i bavi se samo prikupljanjem i katalogizovanjem referenci poslatih i objavljenih na forumu od strane naših čitatelja. Ako ste zakonski vlasnik bilo kojeg dostavljenog materijala i ne želite da referenca na njega bude u našem katalogu, obavestite nas i odmah ćemo ga ukloniti. Datoteke za razmenu na tragaču pružaju korisnici sajta, a administracija ne snosi odgovornost za njihov sadržaj. Molimo vas da ne učitavate datoteke zaštićene autorskim pravima ili datoteke sa ilegalnim sadržajem!';

// FILELIST
$lang['COLLAPSE'] = 'Smanji direktorij';
$lang['EXPAND'] = 'Proširi';
$lang['SWITCH'] = 'Prekidač';
$lang['TOGGLE_WINDOW_FULL_SIZE'] = 'Povećaj/smanji prozor';
$lang['EMPTY_TOPIC_ID'] = 'Nedostaje identifikator teme';
$lang['TOR_NOT_FOUND'] = 'Datoteka nedostaje na serveru';
$lang['ERROR_BUILD'] = 'Sadržaj ovog torrent datoteka se ne može vidjeti na sajtu (nije moguće sastaviti listu datoteka)';
$lang['TORFILE_INVALID'] = 'Torrent datoteka je oštećena';

// Profile
$lang['WEBSITE_ERROR'] = '"sajt" može sadržavati samo http://sitename';
$lang['PROFILE_USER'] = 'Pregled profila';
$lang['GOOD_UPDATE'] = 'uspješno je promijenio';
$lang['UCP_DOWNLOADS'] = 'Preuzimanja';
$lang['HIDE_DOWNLOADS'] = 'Sakrij trenutnu listu preuzimanja na svom profilu.';
$lang['BAN_USER'] = 'Da bismo spriječili korisnika';
$lang['USER_NOT_ALLOWED'] = 'Korisnicima nije dozvoljeno';
$lang['HIDE_AVATARS'] = 'Pokaži avatare';
$lang['SHOW_CAPTION'] = 'Pokaži svoj potpis.';
$lang['DOWNLOAD_TORRENT'] = 'Preuzmi torrent';
$lang['SEND_PM'] = 'Pošalji privatnu poruku.';
$lang['SEND_MESSAGE'] = 'Pošalji poruku';
$lang['NEW_THREADS'] = 'Nove teme.';
$lang['PROFILE_NOT_FOUND'] = 'Profil nije pronađen.';

$lang['USER_DELETE_EXPLAIN'] = 'Izbriši ovog korisnika.';
$lang['USER_DELETE_ME'] = 'Žao mi je, vaš račun ne može biti uklonjen.';
$lang['USER_DELETE_CSV'] = 'Žao mi je, ovaj račun ne može da bude obrisan.';
$lang['USER_DELETE_CONFIRM'] = 'Jesi li siguran da želiš da obrišeš ovog korisnika?';
$lang['USER_DELETED'] = 'Korisnik je uspješno obrisan.';
$lang['DELETE_USER_ALL_POSTS'] = 'Obriši sve postove korisnika.';
$lang['DELETE_USER_ALL_POSTS_CONFIRM'] = 'Jesi li siguran da želiš da obrišeš sve poruke i sve teme koje je pokrenuo ovaj korisnik?';
$lang['DELETE_USER_POSTS'] = 'Izbriši sve poruke, osim prvih postova';
$lang['DELETE_USER_POSTS_ME'] = 'Jesi li siguran da želiš da obrišeš sve moje poruke?';
$lang['DELETE_USER_POSTS_CONFIRM'] = 'Da li ste sigurni da želite izbrisati sve poruke, osim prvih postova?';
$lang['USER_DELETED_POSTS'] = 'Postovi su uspješno uklonjeni.';

$lang['USER'] = 'Korisnik';
$lang['ROLE'] = 'Uloge:';
$lang['MEMBERSHIP_IN'] = 'Članstvo u';
$lang['PARTY'] = 'Zabava:';
$lang['CANDIDATE'] = 'Kandidat:';
$lang['INDIVIDUAL'] = 'Ima prava pojedinac';
$lang['GROUP_LIST_HIDDEN'] = 'Nisi ovlašten da vidiš skrivene grupe.';

$lang['USER_ACTIVATE'] = 'Aktiviraj';
$lang['USER_DEACTIVATE'] = 'Deaktiviraj';
$lang['DEACTIVATE_CONFIRM'] = 'Da li ste sigurni da želite deaktivirati ovog korisnika?';
$lang['USER_ACTIVATE_ON'] = 'Korisnik je uspješno aktiviran';
$lang['USER_DEACTIVATE_ME'] = 'Ne možeš deaktivirati moj račun!';
$lang['ACTIVATE_CONFIRM'] = 'Jesi li sigurna da želiš da onemogućiš ovog korisnika?';
$lang['USER_ACTIVATE_OFF'] = 'Korisnik je uspješno onemogućen.';

// Register
$lang['CHOOSE_A_NAME'] = 'Trebao bi odabrati ime';
$lang['CHOOSE_E_MAIL'] = 'Moraš navesti e-mail';
$lang['CHOOSE_PASS'] = 'Polje za lozinku ne smije biti prazno!';
$lang['CHOOSE_PASS_ERR'] = 'Unesene lozinke se ne poklapaju.';
$lang['CHOOSE_PASS_ERR_MIN'] = 'Vaša lozinka mora sadržavati najmanje %d znakova.';
$lang['CHOOSE_PASS_ERR_MAX'] = 'Vaša lozinka ne sme biti duža od %d karaktera';
$lang['CHOOSE_PASS_ERR_NUM'] = 'Lozinka mora sadržavati barem jednu cifru';
$lang['CHOOSE_PASS_ERR_LETTER'] = 'Lozinka mora sadržavati barem jedno slovo latinske abecede';
$lang['CHOOSE_PASS_ERR_LETTER_UPPERCASE'] = 'Lozinka mora sadržavati barem jedno veliko slovo latinske abecede';
$lang['CHOOSE_PASS_ERR_SPEC_SYMBOL'] = 'Lozinka mora sadržavati barem jedan poseban karakter';
$lang['CHOOSE_PASS_OK'] = 'Lozinke se poklapaju.';
$lang['CHOOSE_PASS_REG_OK'] = 'Lozinke se poklapaju, možete nastaviti sa registracijom.';
$lang['CHOOSE_PASS_FAILED'] = 'Da biste promijenili lozinku, morate tačno navesti trenutnu lozinku.';
$lang['EMAILER_DISABLED'] = 'Žao mi je, ova funkcija trenutno ne radi.';
$lang['REGISTERED_IN_TIME'] = 'Registracija je trenutno zatvorena<br /><br />Registracija je dostupna tokom: %s<br />Trenutno vreme servera: %s<br /><br />Izvinjavamo se zbog neprijatnosti';
$lang['AUTOCOMPLETE'] = 'Generišite lozinku';
$lang['YOUR_NEW_PASSWORD'] = 'Vaša nova lozinka: ';
$lang['REGENERATE'] = 'Regenerirati';

// Debug
$lang['EXECUTION_TIME'] = 'Vrijeme izvršenja:';
$lang['SEC'] = 'sec';
$lang['ON'] = 'na';
$lang['OFF'] = 'isključeno';
$lang['MEMORY'] = 'Memorija: ';
$lang['QUERIES'] = 'upita';
$lang['SHOW_LOG'] = 'Prikaži log';
$lang['EXPLAINED_LOG'] = 'Objašnjeni log';
$lang['CUT_LOG'] = 'Skraćeni dugi upiti';

// Attach Guest
$lang['DOWNLOAD_INFO'] = 'Preuzimanje besplatno i maksimalnom brzinom!';
$lang['HOW_TO_DOWNLOAD'] = 'Kako preuzeti?';
$lang['WHAT_IS_A_TORRENT'] = 'Šta je torrent?';
$lang['RATINGS_AND_LIMITATIONS'] = 'Ocjene i ograničenja.';

$lang['SCREENSHOTS_RULES'] = 'Pročitaj pravila postavljena u snimcima ekrana!';
$lang['AJAX_EDIT_OPEN'] = 'Da li ste već otvorili jedno brzo uređivanje?';
$lang['GO_TO_PAGE'] = 'Idi na stranicu ...';
$lang['EDIT'] = 'Uredi.';
$lang['SAVE'] = 'Spasi.';
$lang['NEW_WINDOW'] = 'u novi prozor';

// BB Code
$lang['ALIGN'] = 'Uskladiti:';
$lang['LEFT'] = 'Lijevo';
$lang['RIGHT'] = 'Udesno';
$lang['CENTER'] = 'Sredina';
$lang['JUSTIFY'] = 'Prilagodi širini';
$lang['HOR_LINE'] = 'Horizontalna linija (Ctrl+8)';
$lang['NEW_LINE'] = 'Nova linija';
$lang['BOLD'] = 'Hrabar tekst: [b]text[/b] (Ctrl+B)';
$lang['ITALIC'] = 'Italics tekst: [i]text[/i] (Ctrl+I)';
$lang['UNDERLINE'] = 'Podvući tekst: [u]text[/u] (Ctrl+U)';
$lang['STRIKEOUT'] = 'Precrtani tekst: [s]text[/s] (Ctrl+S)';
$lang['BOX_TAG'] = 'Okvir oko teksta: [box]text[/box] ili [box=#333,#888]text[/box]';
$lang['INDENT_TAG'] = 'Umetni uvlačenje: [indent]text[/indent]';
$lang['PRE_TAG'] = 'Preformatirani tekst: [pre]text[/pre]';
$lang['NFO_TAG'] = 'NFO: [nfo]text[/nfo]';
$lang['SUPERSCRIPT'] = 'Natpisan tekst: [sup]text[/sup]';
$lang['SUBSCRIPT'] = 'Spušteni tekst: [sub]text[/sub]';
$lang['QUOTE_TITLE'] = 'Citat: [quote]text[/quote] (Ctrl+Q)';
$lang['IMG_TITLE'] = 'Umetnite sliku: [img]https://image_url[/img] (Ctrl+R)';
$lang['URL'] = 'URL';
$lang['URL_TITLE'] = 'Umetni URL: [url]https://url[/url] ili [url=https://url]URL tekst[/url] (Ctrl+W)';
$lang['CODE_TITLE'] = 'Prikaz koda: [code]code[/code] (Ctrl+K)';
$lang['LIST'] = 'Popis';
$lang['LIST_TITLE'] = 'Spisak: [list]text[/list] (Ctrl+sam)';
$lang['LIST_ITEM'] = 'Uređeni spisak: [list=]text[/list] (Ctrl+O)';
$lang['ACRONYM'] = 'Akronim';
$lang['ACRONYM_TITLE'] = 'Akronim: [acronym=Full text]Short text[/acronym]';
$lang['QUOTE_SEL'] = 'Citat odabrane';
$lang['JAVASCRIPT_ON'] = 'JavaScript mora biti omogućen za slanje poruka';

$lang['NEW'] = 'Nova';
$lang['NEWEST'] = 'Najnoviji';
$lang['LATEST'] = 'Najnovije';
$lang['POST'] = 'Post';
$lang['OLD'] = 'Staro';

// DL-List
$lang['DL_USER'] = 'Korisničko ime';
$lang['DL_PERCENT'] = 'Potpuno procenat';
$lang['DL_UL'] = 'UL';
$lang['DL_DL'] = 'DL.';
$lang['DL_UL_SPEED'] = 'UL brzina';
$lang['DL_DL_SPEED'] = 'DL brzina';
$lang['DL_PORT'] = 'Luke';
$lang['DL_CLIENT'] = 'BitTorrent klijent';
$lang['DL_FORMULA'] = 'Formula: Postavio/Veličina torrenta';
$lang['DL_ULR'] = 'ULR';
$lang['DL_STOPPED'] = 'prestao';
$lang['DL_UPD'] = 'vrijeme ažuriranja: ';
$lang['DL_INFO'] = 'prikazuje podatke <i><b>samo za trenutnu sesiju</b></i>.';
$lang['HIDE_PEER_TORRENT_CLIENT'] = 'Sakrij ime svog BitTorrent klijenta na listi peer-ova';
$lang['HIDE_PEER_COUNTRY_NAME'] = 'Sakrij ime svoje zemlje na listi peer-ova';
$lang['HIDE_PEER_USERNAME'] = 'Sakrij svoje korisničko ime na listi peer-ova';

// Post PIN
$lang['POST_PIN'] = 'Prvii post pestavljen';
$lang['POST_UNPIN'] = 'Prvi post uklonjen';
$lang['POST_PINNED'] = 'Prvi post zakvačen';
$lang['POST_UNPINNED'] = 'Prvi post odvezan';

// Management of my messages
$lang['GOTO_MY_MESSAGE'] = 'Blizu i vratiti se na listu "Moje poruke"';
$lang['DEL_MY_MESSAGE'] = 'Odabrano teme su uklonjene iz "Moje poruke"';
$lang['NO_TOPICS_MY_MESSAGE'] = 'Nema tema na listi vaših postova (možda ste ih već uklonili).';
$lang['EDIT_MY_MESSAGE_LIST'] = 'uredi liste';
$lang['SELECT_INVERT'] = 'odaberite / inverzija';
$lang['RESTORE_ALL_POSTS'] = 'Obnovi sve postove';
$lang['DEL_LIST_MY_MESSAGE'] = 'Obriši odabranu temu sa liste';
$lang['DEL_LIST_MY_MESSAGE_INFO'] = 'Nakon uklanjanja, ažurirajte <b>cijelu listu</b> kako bi se mogle prikazati već izbrisane niti.';
$lang['DEL_LIST_INFO'] = 'Da izbrišete naredbu iz liste, kliknite na ikonu lijevo od imena bilo koju sekciju.';

// Watched topics
$lang['WATCHED_TOPICS'] = 'Gledano teme.';
$lang['NO_WATCHED_TOPICS'] = 'Nema praćenih tema';

// set_die_append_msg
$lang['INDEX_RETURN'] = 'Nazad na stranicu kuće.';
$lang['FORUM_RETURN'] = 'Nazad u forum.';
$lang['TOPIC_RETURN'] = 'Vratimo se na temu.';
$lang['POST_RETURN'] = 'Idi na poštu.';
$lang['PROFILE_EDIT_RETURN'] = 'Povratak na uređivanje.';
$lang['PROFILE_RETURN'] = 'Idi na profil.';

$lang['INDEXER'] = 'Reindex potragu';
$lang['INDEXER_SUCCESS'] = 'Indeks pretraživača uspešno ažuriran';

$lang['FORUM_STYLE'] = 'Forum stil.';

$lang['LINKS_ARE_FORBIDDEN'] = 'Veze su zabranjene.';

$lang['GENERAL'] = 'General Admin';
$lang['USERS'] = 'Korisnik Admin';
$lang['GROUPS'] = 'Grupa Admin';
$lang['FORUMS'] = 'Forum Admin';
$lang['MODS'] = 'Izmjenama.';

$lang['CONFIGURATION'] = 'Podešavanje.';
$lang['MANAGE'] = 'Upravljanje.';
$lang['DISALLOW'] = 'Zabrana imena.';
$lang['PRUNE'] = 'Posmatrivanje.';
$lang['MASS_EMAIL'] = 'Masovno e-poruka.';
$lang['RANKS'] = 'Rangiranje.';
$lang['SMILIES'] = 'Smajliji.';
$lang['BAN_MANAGEMENT'] = 'Zabrana kontrole.';
$lang['WORD_CENSOR'] = 'Cenzura reči.';
$lang['CRON'] = 'Zadaci Sekretaricu (cron).';
$lang['REBUILD_SEARCH_INDEX'] = 'Obnova indeksa potrage.';
$lang['FORUM_CONFIG'] = 'Forum postavke.';
$lang['ACTIONS_LOG'] = 'Izvještaj o akcijama.';

// Migrations
$lang['MIGRATIONS_STATUS'] = 'Status migracije baze podataka';
$lang['MIGRATIONS_DATABASE_NAME'] = 'Ime baze podataka';
$lang['MIGRATIONS_DATABASE_TOTAL'] = 'Ukupno tabela';
$lang['MIGRATIONS_DATABASE_SIZE'] = 'Veličina baze podataka';
$lang['MIGRATIONS_DATABASE_INFO'] = 'Informacije o bazi podataka';
$lang['MIGRATIONS_SYSTEM'] = 'Sistem migracije';
$lang['MIGRATIONS_NEEDS_SETUP'] = 'Potrebno podesiti';
$lang['MIGRATIONS_ACTIVE'] = 'Aktivni';
$lang['MIGRATIONS_NOT_INITIALIZED'] = 'Nije inicijalizovano';
$lang['MIGRATIONS_UP_TO_DATE'] = 'Sve ažurirano';
$lang['MIGRATIONS_PENDING_COUNT'] = 'na čekanju';
$lang['MIGRATIONS_APPLIED'] = 'Primljene migracije';
$lang['MIGRATIONS_PENDING'] = 'Migracije na čekanju';
$lang['MIGRATIONS_VERSION'] = 'Verzija';
$lang['MIGRATIONS_NAME'] = 'Ime migracije';
$lang['MIGRATIONS_FILE'] = 'Datoteka migracije';
$lang['MIGRATIONS_APPLIED_AT'] = 'Primljeno na';
$lang['MIGRATIONS_COMPLETED_AT'] = 'Završeno na';
$lang['MIGRATIONS_CURRENT_VERSION'] = 'Trenutna verzija';
$lang['MIGRATIONS_NOT_APPLIED'] = 'Nema primijenjenih migracija.';
$lang['MIGRATIONS_INSTRUCTIONS'] = 'Uputstva';
$lang['MIGRATIONS_SETUP_STATUS'] = 'Status podešavanja';
$lang['MIGRATIONS_SETUP_GUIDE'] = 'Pogledajte priručnik za podešavanje u nastavku';
$lang['MIGRATIONS_ACTION_REQUIRED'] = 'Potrebna akcija';

// Index
$lang['MAIN_INDEX'] = 'Forum indeks';
$lang['FORUM_STATS'] = 'Forum statistike';
$lang['ADMIN_INDEX'] = 'Admin indeks';
$lang['CREATE_PROFILE'] = 'Kreirajte profil';

$lang['TP_VERSION'] = 'TorrentPier verzija';
$lang['TP_RELEASE_DATE'] = 'Datum objave';
$lang['PHP_INFO'] = 'Informacije o PHP-u';

$lang['CLICK_RETURN_ADMIN_INDEX'] = 'Kliknite %sOvdje%s da se vratite u Admin indeks';

$lang['NUMBER_POSTS'] = 'Broj postova';
$lang['POSTS_PER_DAY'] = 'Postovi po danu';
$lang['NUMBER_TOPICS'] = 'Broj tema';
$lang['TOPICS_PER_DAY'] = 'Teme po danu';
$lang['NUMBER_USERS'] = 'Broj korisnika';
$lang['USERS_PER_DAY'] = 'Korisnici po danu';
$lang['BOARD_STARTED'] = 'Odbor je počeo';
$lang['AVATAR_DIR_SIZE'] = 'Veličina direktorija avatara';
$lang['NOT_AVAILABLE'] = 'Nije dostupno';

// System information
$lang['ADMIN_SYSTEM_INFORMATION'] = 'Informacije o sistemu';
$lang['ADMIN_SYSTEM_OS'] = 'OS:';
$lang['ADMIN_SYSTEM_PHP_VER'] = 'PHP:';
$lang['ADMIN_SYSTEM_DATABASE_VER'] = 'Baza podataka:';
$lang['ADMIN_SYSTEM_PHP_MEM_LIMIT'] = 'Ograničenje memorije:';
$lang['ADMIN_SYSTEM_DISK_SPACE_INFO_TITLE'] = 'Informacije o prostoru na disku:';
$lang['ADMIN_SYSTEM_DISK_SPACE_INFO'] = '%s (iskorišćeno: %s | slobodno: %s)';
$lang['ADMIN_SYSTEM_PHP_MAX_EXECUTION_TIME'] = 'Maksimalno vreme izvršavanja:';

// Clear Cache
$lang['DATASTORE'] = 'Skladište podataka';
$lang['CLEAR_CACHE'] = 'Keš';
$lang['CLEAR_TEMPLATES_CACHE'] = 'Keš šablona';

// Update
$lang['USER_LEVELS'] = 'Korisnički nivoi';
$lang['USER_LEVELS_UPDATED'] = 'Korisnički nivoi su ažurirani';

// Synchronize
$lang['SYNCHRONIZE'] = 'Sinhronizuj';
$lang['TOPICS_DATA_SYNCHRONIZED'] = 'Podaci o temama su sinhronizovani';
$lang['USER_POSTS_COUNT'] = 'Broj korisničkih postova';
$lang['USER_POSTS_COUNT_SYNCHRONIZED'] = 'Broj korisničkih postova je sinhronizovan';

// Online Userlist
$lang['SHOW_ONLINE_USERLIST'] = 'Prikaži listu online korisnika';

// Robots.txt editor
$lang['ROBOTS_TXT_EDITOR_TITLE'] = 'Upravljanje robots.txt';
$lang['ROBOTS_TXT_UPDATED_SUCCESSFULLY'] = 'Datoteka robots.txt je uspešno ažurirana';
$lang['CLICK_RETURN_ROBOTS_TXT_CONFIG'] = '%sKliknite ovde da se vratite na upravitelja robots.txt%s';

// Auth pages
$lang['USER_SELECT'] = 'Odaberite korisnika';
$lang['GROUP_SELECT'] = 'Odaberite grupu';
$lang['SELECT_A_FORUM'] = 'Odaberite forum';
$lang['AUTH_CONTROL_USER'] = 'Kontrola korisničkih dozvola';
$lang['AUTH_CONTROL_GROUP'] = 'Kontrola dozvola grupe';
$lang['AUTH_CONTROL_FORUM'] = 'Kontrola dozvola foruma';
$lang['LOOK_UP_FORUM'] = 'Potraži forum';

$lang['GROUP_AUTH_EXPLAIN'] = 'Ovdje možete promijeniti dozvole i moderator status dodijeljenoj grupi korisnika. Ne zaboravite, kada mijenjate dozvole grupe, individualne dozvole korisnika mogu i dalje omogućiti ulazak u forume itd. Bićete upozoreni ako je to slučaj.';
$lang['USER_AUTH_EXPLAIN'] = 'Ovdje možete promijeniti dozvole i moderator status dodijeljen svakom pojedincu korisniku. Ne zaboravite, kada mijenjate dozvole korisnika, dozvole grupe mogu i dalje omogućiti ulazak u forume itd. Bićete upozoreni ako je to slučaj.';
$lang['FORUM_AUTH_EXPLAIN'] = 'Obrazac u nastavku će vam omogućiti da prilagodite sve opšte opcije foruma. Za korisničke i forum konfiguracije koristite povezane linkove na lijevoj strani.';

$lang['SIMPLE_MODE'] = 'Jednostavni način';
$lang['ADVANCED_MODE'] = 'Napredni način';
$lang['MODERATOR_STATUS'] = 'Moderator status';

$lang['PUBLIC'] = 'Javni';
$lang['PRIVATE'] = 'Privatni';
$lang['REGISTERED'] = 'Registriran';
$lang['ADMINISTRATORS'] = 'Administratori';

// These are displayed in the drop-down boxes for advanced mode forum auth, try and keep them short!
$lang['FORUM_ALL'] = 'SVE';
$lang['FORUM_REG'] = 'REG';
$lang['FORUM_PRIVATE'] = 'Privatni';
$lang['FORUM_MOD'] = 'MOD';
$lang['FORUM_ADMIN'] = 'ADMIN';

$lang['AUTH_VIEW'] = $lang['VIEW'] = 'Pogled';
$lang['AUTH_READ'] = $lang['READ'] = 'Pročitaj';
$lang['AUTH_POST'] = $lang['POST'] = 'Post';
$lang['AUTH_REPLY'] = $lang['REPLY'] = 'Odgovor';
$lang['AUTH_EDIT'] = $lang['EDIT'] = 'Uredi';
$lang['AUTH_DELETE'] = $lang['DELETE'] = 'Obriši';
$lang['AUTH_STICKY'] = $lang['STICKY'] = 'Ljepljive';
$lang['AUTH_ANNOUNCE'] = $lang['ANNOUNCE'] = 'Objaviti';
$lang['AUTH_VOTE'] = $lang['VOTE'] = 'Glasanje';
$lang['AUTH_POLLCREATE'] = $lang['POLLCREATE'] = 'Stvoriti anketu';
$lang['AUTH_ATTACHMENTS'] = $lang['AUTH_ATTACH'] = 'Postaviti datoteke';
$lang['AUTH_DOWNLOAD'] = 'Preuzimanje datoteka';

$lang['USER_LEVEL'] = 'Korisnički nivo';
$lang['AUTH_USER'] = 'Korisnik';
$lang['AUTH_ADMIN'] = 'Administrator';
$lang['FORUM_AUTH_UPDATED'] = 'Dozvole foruma su ažurirane';
$lang['APPLY_TO_SUBFORUMS'] = 'Primijeni na podforume';

$lang['AUTH_UPDATED'] = 'Dozvole su ažurirane';
$lang['AUTH_GENERAL_ERROR'] = 'Nije moguće ažurirati status administratora';
$lang['AUTH_SELF_ERROR'] = 'Nije moguće promijeniti sebe iz administratora u korisnik';
$lang['NO_FORUMS_AVAILABLE'] = 'Nema dostupnih foruma. Prvo kreirajte forume da upravljate dozvolama.';
$lang['CLICK_RETURN_USERAUTH'] = 'Kliknite %sOvdje%s da se vratite u korisničke dozvole';
$lang['CLICK_RETURN_GROUPAUTH'] = 'Kliknite %sOvdje%s da se vratite u grupne dozvole';
$lang['CLICK_RETURN_FORUMAUTH'] = 'Kliknite %sOvdje%s da se vratite u dozvole foruma';

// Banning
$lang['BAN_CONTROL'] = 'Kontrola zabrane';
$lang['BAN_EXPLAIN'] = 'Ovdje možete kontrolirati zabranu korisnika.';
$lang['BAN_USERNAME'] = 'Zabranite jednog ili više određenih korisnika';
$lang['UNBAN_USERNAME'] = 'Ukloni zabranu za jednog ili više specifičnih korisnika';
$lang['UNBAN_USERNAME_EXPLAIN'] = 'Možete ukloniti zabranu više korisnika u isto vrijeme koristeći odgovarajuću kombinaciju miša i tastature za vaš računar i preglednik';
$lang['NO_BANNED_USERS'] = 'Nema zabranjenih korisničkih imena';
$lang['BAN_UPDATE_SUCESSFUL'] = 'Lista zabrana je uspješno ažurirana';
$lang['CLICK_RETURN_BANADMIN'] = 'Kliknite %sOvdje%s da se vratite u kontrolu zabrane';

// Configuration
$lang['GENERAL_CONFIG'] = 'Opća postavka';
$lang['CONFIG_EXPLAIN'] = 'Obrazac ispod će vam omogućiti da prilagodite sve opšte opcije foruma. Za konfiguraciju korisnika i foruma koristite povezane linkove na lijevoj strani.';

$lang['CONFIG_MODS'] = 'Modifikacije postavki';
$lang['MODS_EXPLAIN'] = 'Ovaj formular vam omogućava da prilagodite izmjene';

$lang['CLICK_RETURN_CONFIG'] = '%sKliknite ovde da se vratite u opća podešavanja%s';
$lang['CLICK_RETURN_CONFIG_MODS'] = '%sNazad na izmjene postavki%s';

$lang['GENERAL_SETTINGS'] = 'Opća postavka foruma';
$lang['SITE_NAME'] = 'Naziv stranice';
$lang['SITE_DESC'] = 'Opis stranice';
$lang['FORUMS_DISABLE'] = 'Onemogući forum';
$lang['BOARD_DISABLE_EXPLAIN'] = 'Ovo će forum učiniti nedostupnim korisnicima. Administratorima je omogućeno pristup upravljačkoj ploči dok je forum onemogućen.';
$lang['ACC_NONE'] = 'Nema';

$lang['ABILITIES_SETTINGS'] = 'Korisnika i Forum Osnovne Postavke';
$lang['MAX_POLL_OPTIONS'] = 'Maksimalan broj opcija za anketu.';
$lang['FLOOD_INTERVAL'] = 'Interval poplave.';
$lang['FLOOD_INTERVAL_EXPLAIN'] = 'Broj sekundi koji korisnik mora da čeka između postova.';
$lang['TOPICS_PER_PAGE'] = 'Teme Po Stranici';
$lang['POSTS_PER_PAGE'] = 'Postovi po stranici.';
$lang['HOT_THRESHOLD'] = 'Postovi za prag popularnosti.';
$lang['DEFAULT_LANGUAGE'] = 'Zadani jezik.';
$lang['DATE_FORMAT'] = 'Format datuma.';
$lang['SYSTEM_TIMEZONE'] = 'Vremenska zona sistema.';
$lang['ENABLE_PRUNE'] = 'Omogući brisanje foruma.';
$lang['ALLOW_BBCODE'] = 'Dozvoliti BBCode';
$lang['ALLOW_SMILIES'] = 'Dozvoliti Smilies';
$lang['SMILIES_PATH'] = 'Putanja skladišta smajlića.';
$lang['SMILIES_PATH_EXPLAIN'] = 'Putanja unutar vašeg javnog TorrentPier direktorija, npr. assets/images/smiles';
$lang['ALLOW_SIG'] = 'Dozvoli potpise.';
$lang['MAX_SIG_LENGTH'] = 'Maksimalna dužina potpisa.';
$lang['MAX_SIG_LENGTH_EXPLAIN'] = 'Maksimalan broj karaktera u korisničkim potpisima.';
$lang['ALLOW_NAME_CHANGE'] = 'Dozvoliti korisničko ime promjene';

// Autologin Keys
$lang['ALLOW_AUTOLOGIN'] = 'Dozvoliti automatsko prijavljivanje.';
$lang['ALLOW_AUTOLOGIN_EXPLAIN'] = 'Određuje da li korisnici mogu da izaberu automatsko prijavljivanje prilikom posete forumu.';
$lang['AUTOLOGIN_TIME'] = 'Istek automatskog ključa prijave.';
$lang['AUTOLOGIN_TIME_EXPLAIN'] = 'Koliko dugo je automatski ključ važeći u danima ako korisnik ne poseti forum.';

// Forum Management
$lang['FORUM_ADMIN_MAIN'] = 'Forum Uprave';
$lang['EDIT_FORUM'] = 'Uredi forum';
$lang['CREATE_FORUM'] = 'Stvoriti novi forum';
$lang['CREATE_SUB_FORUM'] = 'Kreiraj podforum';
$lang['CREATE_CATEGORY'] = 'Stvori novu kategoriju.';
$lang['REMOVE'] = 'Ukloni';
$lang['CONFIG_UPDATED'] = 'Podešavanja foruma su uspešno ažurirana.';
$lang['MOVE_UP'] = 'Pomeri nagore.';
$lang['MOVE_DOWN'] = 'Pomeri nagore.';
$lang['NO_MODE'] = 'Nije postavljen način.';
$lang['FORUM_EDIT_DELETE_EXPLAIN'] = 'Formular u nastavku će vam omogućiti da prilagodite sve opće opcije foruma. Za konfiguracije korisnika i foruma koristite odgovarajuće veze na lijevoj strani';

$lang['MOVE_CONTENTS'] = 'Pomeri sve sadržaje.';
$lang['FORUM_DELETE'] = 'Obriši Forum';
$lang['FORUM_DELETE_EXPLAIN'] = 'Forma ispod će ti omogućiti da obrišeš forum (ili kategoriju) i odlučiš gde ćeš staviti sve teme (ili forume) koje je sadržavala.';
$lang['CATEGORY_DELETE'] = 'Obriši kategoriju.';
$lang['CATEGORY_NAME_EMPTY'] = 'Ime kategorije nije naznačeno';

$lang['STATUS_LOCKED'] = 'Zaključan';
$lang['STATUS_UNLOCKED'] = 'Otključano.';
$lang['FORUM_SETTINGS'] = 'Opšte postavke foruma.';
$lang['FORUM_NAME'] = 'Ime foruma.';
$lang['FORUM_DESC'] = 'Opis.';
$lang['FORUM_STATUS'] = 'Status foruma.';
$lang['FORUM_PRUNING'] = 'Automatsko brisanje.';

$lang['PRUNE_DAYS'] = 'Ukloni teme koje nisu postavljene.';

$lang['MOVE_AND_DELETE'] = 'Pomeri i obriši.';

$lang['DELETE_ALL_POSTS'] = 'Izbriši sve postove.';
$lang['DELETE_ALL_TOPICS'] = 'Izbriši sve teme, uključujući obaveštenja i fiksne teme.';
$lang['NOWHERE_TO_MOVE'] = 'Nigde ne možeš da se preseliš.';

$lang['EDIT_CATEGORY'] = 'Uredi kategoriju.';
$lang['EDIT_CATEGORY_EXPLAIN'] = 'Koristi ovaj formular za izmene imena kategorije.';

$lang['FORUMS_UPDATED'] = 'Informacije o forumu i kategoriji uspešno su ažurirane.';

$lang['MUST_DELETE_FORUMS'] = 'Morate obrisati sve forume pre nego što možete obrisati ovu kategoriju.';

$lang['CLICK_RETURN_FORUMADMIN'] = 'Kliknite %sOvde%s da se vratite na upravljanje forumom.';

$lang['SHOW_ALL_FORUMS_ON_ONE_PAGE'] = 'Prikaži sve forume na jednoj stranici.';

// Smiley Management
$lang['SMILEY_TITLE'] = 'Uređivanje smajlića.';
$lang['SMILE_DESC'] = 'Sa ove strane možete dodati, ukloniti i izmeniti emotikone ili smajliće koje vaši korisnici mogu koristiti u svojim postovima i privatnim porukama.';

$lang['SMILEY_CONFIG'] = 'Podešavanje smajlića.';
$lang['SMILEY_CODE'] = 'Šifra smajlića.';
$lang['SMILEY_URL'] = 'Datoteka smajlića.';
$lang['SMILEY_EMOT'] = 'Emocija smajlića.';
$lang['SMILE_ADD'] = 'Dodaj novi smajlić.';
$lang['SMILE'] = 'Osmijeh.';
$lang['EMOTION'] = 'Emocije.';

$lang['SELECT_PAK'] = 'Odaberite Pack (.pak) datoteku.';
$lang['REPLACE_EXISTING'] = 'Zameniti postojeći smajlić.';
$lang['KEEP_EXISTING'] = 'Zadrži postojeći smajlić.';
$lang['SMILEY_IMPORT_INST'] = 'Trebalo bi da odpakujete smajli paket i postavite sve datoteke u odgovarajući direktorijum smajlića za vašu instalaciju.';
$lang['SMILEY_IMPORT'] = 'Uvoz smajli paketa.';
$lang['CHOOSE_SMILE_PAK'] = 'Izaberite datoteku smajli paketa .pak.';
$lang['IMPORT'] = 'Uvoz smajlića.';
$lang['SMILE_CONFLICTS'] = 'Šta treba uraditi u slučaju sukoba.';
$lang['DEL_EXISTING_SMILEYS'] = 'Obrišite postojeće smajliće pre uvoza.';
$lang['IMPORT_SMILE_PACK'] = 'Uvoz smajli paketa.';
$lang['EXPORT_SMILE_PACK'] = 'Stvoriti smajli paket.';
$lang['EXPORT_SMILES'] = 'Da biste stvorili smajli paket od trenutno instaliranih smajlića, kliknite %sOvde%s da preuzmete smiles.pak datoteku.';

$lang['SMILEY_ADD_SUCCESS'] = 'Smajlić je uspešno dodat.';
$lang['SMILEY_EDIT_SUCCESS'] = 'Smajlić je uspešno ažuriran.';
$lang['SMILEY_IMPORT_SUCCESS'] = 'Smajli pak je uspešno uvezen!';
$lang['SMILEY_DEL_SUCCESS'] = 'Smajlić je uspešno uklonjen.';
$lang['CLICK_RETURN_SMILEADMIN'] = 'Kliknite %sOvde%s da se vratite na upravljanje smajlićima.';

// User Management
$lang['USER_ADMIN'] = 'Upravljanje korisnicima.';
$lang['LOOK_UP_USER'] = 'Pogledaj korisnika.';

// Group Management
$lang['GROUP_ADMINISTRATION'] = 'Upravljanje grupama.';
$lang['GROUP_ADMIN_EXPLAIN'] = 'Iz ove table možete upravljati svim svojim korisničkim grupama.';
$lang['UPDATED_GROUP'] = 'Grupa je uspešno ažurirana.';
$lang['ADDED_NEW_GROUP'] = 'Nova grupa je uspešno stvorena.';
$lang['DELETED_GROUP'] = 'Grupa je uspešno obrisana.';
$lang['CREATE_NEW_GROUP'] = 'Stvori novu grupu';
$lang['EDIT_GROUP'] = 'Uredi grupu.';
$lang['GROUP_STATUS'] = 'Status grupe.';
$lang['GROUP_DELETE'] = 'Obriši grupu.';
$lang['GROUP_DELETE_CHECK'] = 'Obriši ovu grupu.';
$lang['NO_GROUP_NAME'] = 'Moraš navesti ime za ovu grupu';
$lang['NO_GROUP_MODERATOR'] = 'Moraš navesti moderator za ovu grupu';
$lang['NO_GROUP_ACTION'] = 'Nije postavljena nijedna akcija.';
$lang['DELETE_OLD_GROUP_MOD'] = 'Da li obrisati starog moderatora grupe?';
$lang['DELETE_OLD_GROUP_MOD_EXPL'] = 'Ako menjate moderatora grupe, čekirajte ovu kutiju da uklonite starog moderatora iz grupe.';
$lang['CLICK_RETURN_GROUPSADMIN'] = 'Kliknite %sOvde%s da se vratite u upravljanje grupama.';
$lang['SELECT_GROUP'] = 'Izaberi grupu.';
$lang['LOOK_UP_GROUP'] = 'Pogledaj grupu.';

// Prune Administration
$lang['FORUM_PRUNE'] = 'Forum Prune';
$lang['FORUM_PRUNE_EXPLAIN'] = 'Ovo će izbrisati bilo koju temu koja nije postavljena u broj dana koji odaberete. Ako ne unesete broj, sve teme će biti obrisane. To neće ukloniti <b>ljepljive</b> teme i <b>najave</b>. Trebat će da ih ručno uklonite.';
$lang['DO_PRUNE'] = 'Izvrši Prune';
$lang['PRUNE_TOPICS_NOT_POSTED'] = 'Prune teme bez odgovora u ovom broju dana';
$lang['TOPICS_PRUNED'] = 'Teme su pročišćene';
$lang['PRUNE_SUCCESS'] = 'Forum je uspješno očišćen';
$lang['NOT_DAYS'] = 'Nisu odabrani dani za pročišćavanje';

// Word censor
$lang['WORDS_TITLE'] = 'Cenzura riječi';
$lang['WORDS_EXPLAIN'] = 'Iz ove kontrolne ploče možete dodavati, uređivati i uklanjati riječi koje će biti automatski cenzurisane na vašim forumima. Osim toga, ljudima neće biti dopušteno da se registruju sa korisničkim imenima koja sadrže ove riječi. Džokeri (*) se prihvataju u polju za riječi. Na primjer, *test* će odgovarati odvratnom, test* će odgovarati testiranju, *test će odgovarati odvratiti.';
$lang['WORD'] = 'Reč';
$lang['EDIT_WORD_CENSOR'] = 'Uredi riječ cenzora';
$lang['REPLACEMENT'] = 'Zamjena';
$lang['ADD_NEW_WORD'] = 'Dodaj novu riječ';

$lang['MUST_ENTER_WORD'] = 'Morate unijeti riječ i njenu zamjenu';
$lang['NO_WORD_SELECTED'] = 'Nijedna riječ nije odabrana za uređivanje';

$lang['WORD_UPDATED'] = 'Izabrani cenzor riječi je uspješno ažuriran.';
$lang['WORD_ADDED'] = 'Cenzor riječi je uspješno dodat';
$lang['WORD_REMOVED'] = 'Izabrani cenzor riječi je uspješno uklonjen';

$lang['CLICK_RETURN_WORDADMIN'] = 'Kliknite %sOvdje%s da se vratite u Upravu cenzurisanih riječi';

// Mass Email
$lang['MASS_EMAIL_EXPLAIN'] = 'Ovdje možete poslati poruku svi vaši korisnicima ili svim korisnicima određene grupe. Da biste to učinili, e-poruka će biti poslana na administrativnu e-mail adresu, a slijepa kopija će biti poslana svim primateljima. Ako šaljete e-poruku velikoj grupi ljudi, molimo vas da budete strpljivi i ne prekidate stranicu na pola. Normalno je da masovno slanje e-pošte traje dugo, a bit ćete obaviješteni kada skripta završi';
$lang['COMPOSE'] = 'Sastavi';

$lang['RECIPIENTS'] = 'Primatelji';
$lang['ALL_USERS'] = 'Svi Korisnici';

$lang['MASS_EMAIL_MESSAGE_TYPE'] = 'Vrsta e-pošte';

// Ranks admin
$lang['RANKS_TITLE'] = 'Administracija činova';
$lang['RANKS_EXPLAIN'] = 'Pomoću ovog obrasca možete dodavati, uređivati, pregledati i brisati činove. Također možete stvoriti prilagođene činove koji se mogu dodijeliti korisniku putem objekta upravljanja korisnicima';

$lang['ADD_NEW_RANK'] = 'Dodaj novi čin';
$lang['RANK_TITLE'] = 'Naziv čina';
$lang['STYLE_COLOR'] = 'Stil čina';
$lang['STYLE_COLOR_FAQ'] = 'Navedite klasu za stilizovanje naslova sa željenom bojom. Na primer: <i class="bold">colorAdmin</i>';
$lang['RANK_IMAGE'] = 'Slika čina';
$lang['RANK_IMAGE_EXPLAIN'] = 'Iskoristi ovo za definiranje male slike povezane s činom';

$lang['MUST_SELECT_RANK'] = 'Moraš odabrati čin';

$lang['RANK_UPDATED'] = 'Čin je uspješno ažuriran';
$lang['RANK_ADDED'] = 'Čin je uspješno dodat';
$lang['RANK_REMOVED'] = 'Čin je uspješno obrisan';
$lang['NO_UPDATE_RANKS'] = 'Čin je uspješno obrisan. Međutim, korisnički računi koji koriste ovaj rang nisu ažurirani. Morat ćete ručno resetirati rang na ovim računima.';

$lang['CLICK_RETURN_RANKADMIN'] = 'Klik %sOvdje%s da se vratite u Administraciju činova';

// Disallow Username Admin
$lang['DISALLOW_CONTROL'] = 'Kontrola zabranjenih korisničkih imena';
$lang['DISALLOW_EXPLAIN'] = 'Ovdje možete kontrolirati korisnička imena koja neće biti dopuštena. Zabranjena korisnička imena mogu sadržavati džoker znak *. Imajte na umu da nećete moći navesti nijedno korisničko ime koje je već registrovano. Prvo morate obrisati to ime, a zatim ga zabraniti.';

$lang['DELETE_DISALLOW_TITLE'] = 'Ukloni zabranjeno korisničko ime';
$lang['DELETE_DISALLOW_EXPLAIN'] = 'Možete ukloniti zabranjeno korisničko ime odabirom korisničkog imena sa ove liste i klikom na pošaljite';

$lang['ADD_DISALLOW'] = 'Dodaj';
$lang['ADD_DISALLOW_TITLE'] = 'Dodaj zabranjeno korisničko ime';

$lang['NO_DISALLOWED'] = 'Nema zabranjenih korisničkih imena';

$lang['DISALLOWED_DELETED'] = 'Zabranjeno korisničko ime je uspješno uklonjeno';
$lang['DISALLOW_SUCCESSFUL'] = 'Zabranjeno korisničko ime je uspješno dodano';
$lang['DISALLOWED_ALREADY'] = 'Ime koje ste unijeli nije moglo biti zabranjeno. Ili već postoji na listi, postoji na listi cenzurisanih riječi ili je prisutno odgovarajuće korisničko ime.';

$lang['CLICK_RETURN_DISALLOWADMIN'] = 'Klik %sOvdje%s da se vratite u Administraciju zabranjenih korisničkih imena';

// Version Check
$lang['VERSION_INFORMATION'] = 'Informacije o verziji';
$lang['UPDATE_AVAILABLE'] = 'Ažuriranje je dostupno';
$lang['CHANGELOG'] = 'Zapis promjena';

// Login attempts configuration
$lang['MAX_LOGIN_ATTEMPTS'] = 'Dozvoljeni pokušaji prijave';
$lang['MAX_LOGIN_ATTEMPTS_EXPLAIN'] = 'Broj dozvoljenih pokušaja prijave na odboru.';
$lang['LOGIN_RESET_TIME'] = 'Vrijeme zaključavanja prijave';
$lang['LOGIN_RESET_TIME_EXPLAIN'] = 'Vrijeme u minutama koliko korisnik mora čekati dok mu nije dopušteno ponovno prijaviti se nakon što premaši broj dozvoljenih pokušaja prijave.';

// Permissions List
$lang['PERMISSIONS_LIST'] = 'Lista dozvola';
$lang['AUTH_CONTROL_CATEGORY'] = 'Kontrola dozvola kategorije';
$lang['FORUM_AUTH_LIST_EXPLAIN'] = 'Ovo daje rezime nivoa autorizacije svakog foruma. Možete urediti ove dozvole, koristeći jednostavnu ili naprednu metodu klikom na naziv foruma. Zapamtite da promjena nivoa dozvole foruma utiče na to koji korisnici mogu izvršiti različite operacije u njima.';
$lang['CAT_AUTH_LIST_EXPLAIN'] = 'Ovo daje rezime nivoa autorizacije svih foruma unutar ove kategorije. Možete urediti dozvole pojedinačnih foruma, koristeći jednostavnu ili naprednu metodu klikom na naziv foruma. Alternativno, možete postaviti dozvole za sve forume u ovoj kategoriji koristeći padajuće menije na dnu stranice. Zapamtite da promjena nivoa dozvole foruma utiče na to koji korisnici mogu izvršiti različite operacije u njima.';
$lang['FORUM_AUTH_LIST_EXPLAIN_ALL'] = 'Svi korisnici';
$lang['FORUM_AUTH_LIST_EXPLAIN_REG'] = 'Svi registrovani korisnici';
$lang['FORUM_AUTH_LIST_EXPLAIN_PRIVATE'] = 'Samo korisnici kojima je odobrena posebna dozvola';
$lang['FORUM_AUTH_LIST_EXPLAIN_MOD'] = 'Samo moderatori ovog foruma';
$lang['FORUM_AUTH_LIST_EXPLAIN_ADMIN'] = 'Samo administratori';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_VIEW'] = '%s može vidjeti ovaj forum';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_READ'] = '%s može čitati poruke u ovom forumu';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_POST'] = '%s može postaviti u ovom forumu';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_REPLY'] = '%s može odgovarati na postove u ovom forumu';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_EDIT'] = '%s može urediti poruke u ovom forumu';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_DELETE'] = '%s može izbrisati poruke u ovom forumu';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_STICKY'] = '%s može postaviti ljepljive teme u ovom forumu';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_ANNOUNCE'] = '%s može postaviti najave u ovom forumu';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_VOTE'] = '%s može glasati u anketama u ovom forumu';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_POLLCREATE'] = '%s može stvoriti ankete u ovom forumu';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_ATTACHMENTS'] = '%s može postaviti priloge';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_DOWNLOAD'] = '%s može preuzeti priloge';

// Tooltips for disabled permissions
$lang['AUTH_TOOLTIP_FORUM_MODE'] = 'Režim foruma: %s — ne može se mijenjati';
$lang['AUTH_TOOLTIP_MOD_OVERRIDE'] = 'Dozvola omogućena putem "Moderator"';
$lang['AUTH_TOOLTIP_GROUP_HAS'] = 'Dozvola dodijeljena od strane grupe';

// Misc
$lang['SF_SHOW_ON_INDEX'] = 'Prikaži na glavnoj stranici';
$lang['SF_PARENT_FORUM'] = 'Roditeljski forum';
$lang['SF_NO_PARENT'] = 'Nema roditeljskog foruma';
$lang['SYNC'] = 'Sinhronizacija';

// Mods
$lang['MAX_NEWS_TITLE'] = 'Max. dužina vijesti';
$lang['NEWS_COUNT'] = 'Koliko vijesti prikazati';
$lang['NEWS_FORUM_ID'] = 'Iz kojih foruma prikazati <br /> <h6>Za više foruma, navedite ID-ove odvojene zarezom. Primer: 1,2,3</h6>';
$lang['TRACKER_STATS'] = 'Statistika o tragaču';
$lang['WHOIS_INFO'] = 'Informacije o IP adresi';
$lang['SHOW_MOD_HOME_PAGE'] = 'Pokaži na moderatorima index.php';
$lang['SHOW_BOARD_STARTED_INDEX'] = 'Prikaži datum početka foruma na index.php';
$lang['PREMOD_HELP'] = '<h4><span class="tor-icon tor-dup">&#8719;</span> Pre-moderacija</h4> <h6>Ukoliko nemate distribucije sa statusom v, #, ili T u ovom dijelu, uključujući podsekcije, distribucije će automatski primiti ovaj status</h6>';
$lang['TOR_COMMENT'] = '<h4>Komentiraj status distribucije</h4> <h6>Komentar vam omogućava da ukažete na greške učinjene izdavaču. Ako su statusi nepotpuni, dostupna je forma za odgovor na izdanje menadžeru izdanja kako bi ispravio izdanje</h6>';
$lang['SEED_BONUS_ADD'] = '<h4>Dodavanje bonusa za seme </h4> <h6> Broj distribucija koje su predali korisnik i veličina bonusa za njih (naplaćivati puta sat vremena) </h6>';
$lang['SEED_BONUS_RELEASE'] = 'da N-broj izdanja';
$lang['SEED_BONUS_POINTS'] = 'bonusi u sat';
$lang['SEED_BONUS_TOR_SIZE'] = '<h4>Minimalna distribucija za koju će biti dodijeljeni bonusi </h4> <h6> Ako želite da izračunate bonuse za sve distribucije, ostavite prazno. </h6>';
$lang['SEED_BONUS_USER_REGDATA'] = '<h4>Minimalna dužina korisničkog tragača, nakon koje će biti dodijeljeni bonusi </h4> <h6> Ako želite da dodelite bonuse svim korisnicima, ostavite prazno. </h6>';
$lang['SEED_BONUS_WARNING'] = 'PAŽNJA! Bonusi za seme trebaju biti u uzlaznom redoslijedu.';
$lang['SEED_BONUS_EXCHANGE'] = 'Konfigurišući zamjenu sid bonusa';
$lang['SEED_BONUS_ROPORTION'] = 'Proporcionalno dodavanje za razmenu bonusa na GB';

$lang['ALLOWED'] = 'Dopušteno';
$lang['RETURN_CONFIG'] = '%sVratite se na podešavanje%s';
$lang['CONFIG_UPD'] = 'Konfiguracija je uspješno ažurirana.';

// Forum config
$lang['BT_SELECT_FORUMS'] = 'Opcije foruma:';
$lang['BT_SELECT_FORUMS_EXPL'] = 'Držite pritisnut <i>Ctrl</i> dok odabirete više foruma.';

$lang['REG_TORRENTS'] = 'Registruj bujice.';
$lang['DISALLOWED'] = 'Zabranjeno.';
$lang['ALLOW_REG_TRACKER'] = 'Dozvoljeno forumima za registraciju .bujica na tragaču.';
$lang['ALLOW_PORNO_TOPIC'] = 'Dozvoljeno objavljivanje sadržaja 18+';
$lang['SELF_MODERATED'] = 'Korisnici mogu <b>premjestiti</b> svoje teme u drugi forum.';

$lang['BT_ANNOUNCE_URL_HEAD'] = 'Objaviti URL.';
$lang['BT_ANNOUNCE_URL'] = 'Objaviti url.';
$lang['BT_ANNOUNCE_URL_EXPL'] = 'Možeš definirati dodatne dozvoljene url-ove u "includes/torrent_announce_urls.php".';
$lang['BT_DISABLE_DHT'] = 'Onemogući DHT mrežu.';
$lang['BT_DISABLE_DHT_EXPL'] = 'Onemogući Peer Exchange i DHT (preporučeno za privatne mreže, samo URL objava).';
$lang['BT_PRIVATE_TRACKER'] = 'Ovaj tragač je privatni: lista datoteka (za goste), DHT | PEX je onemogućen';
$lang['BT_PRIVATE_TORRENT'] = 'Kreator ovog torrenta ga je postavio kao privatni';
$lang['BT_CHECK_ANNOUNCE_URL'] = 'Potvrdi URL objave.';
$lang['BT_CHECK_ANNOUNCE_URL_EXPL'] = 'Registruj se na tragač samo za dozvoljene URL-ove.';
$lang['BT_REPLACE_ANN_URL'] = 'Zamijeniti URL objave.';
$lang['BT_REPLACE_ANN_URL_EXPL'] = 'Zamijeniti originalni URL objave sa vašim uobičajenim URL-ovima u .torrent datotekama.';
$lang['BT_DEL_ADDIT_ANN_URLS'] = 'Ukloni sve dodatne URL objave.';
$lang['BT_DEL_ADDIT_ANN_URLS_EXPL'] = 'Ako torrent sadrži adrese drugih tragača, oni će biti uklonjeni.';

$lang['BT_SHOW_PEERS_HEAD'] = 'Lista vršnjaka.';
$lang['BT_SHOW_PEERS'] = 'Pokaži vršnjake (seedere i leechere).';
$lang['BT_SHOW_PEERS_EXPL'] = 'Ovo će pokazati listu seedera/leechera iznad teme sa torrentom.';
$lang['BT_SHOW_PEERS_MODE'] = 'Po defaultu, prikaz vršnjaka kao:';
$lang['BT_SHOW_PEERS_MODE_COUNT'] = 'Samo prebroj.';
$lang['BT_SHOW_PEERS_MODE_NAMES'] = 'Samo imena.';
$lang['BT_SHOW_PEERS_MODE_FULL'] = 'Puni detalji.';
$lang['BT_ALLOW_SPMODE_CHANGE'] = 'Omogućiti "puni detalji" mod.';
$lang['BT_ALLOW_SPMODE_CHANGE_EXPL'] = 'Ako je "ne", samo uobičajeni prikaz vršnjaka će biti dostupan.';
$lang['BT_SHOW_IP_ONLY_MODER'] = 'IP adrese vršnjaka su vidljive samo moderatorima.';
$lang['BT_SHOW_PORT_ONLY_MODER'] = 'Portovi vršnjaka su vidljivi samo moderatorima.';

$lang['BT_SHOW_DL_LIST_HEAD'] = 'DL-lista.';
$lang['BT_SHOW_DL_LIST'] = 'Pokaži DL-listu u temama za preuzimanje.';
$lang['BT_DL_LIST_ONLY_1ST_PAGE'] = 'Pokaži DL-listu samo na prvoj stranici u temama.';
$lang['BT_DL_LIST_ONLY_COUNT'] = 'Pokaži samo broj korisnika.';
$lang['BT_SHOW_DL_LIST_BUTTONS'] = 'Pokaži dugmadi za ručno mijenjanje DL-statusa.';
$lang['BT_SHOW_DL_BUT_WILL'] = $lang['DLWILL'];
$lang['BT_SHOW_DL_BUT_DOWN'] = $lang['DLDOWN'];
$lang['BT_SHOW_DL_BUT_COMPL'] = $lang['DLCOMPLETE'];
$lang['BT_SHOW_DL_BUT_CANCEL'] = $lang['DLCANCEL'];

$lang['BT_ADD_AUTH_KEY_HEAD'] = 'S ključem.';
$lang['BT_ADD_AUTH_KEY'] = 'Omogućiti dodavanje ključa ka torrent-datotekama prije preuzimanja.';

$lang['BT_TOR_BROWSE_ONLY_REG_HEAD'] = 'Torrent preglednik (tragač).';
$lang['BT_TOR_BROWSE_ONLY_REG'] = 'Preglednik torrenta (tracker.php) dostupan samo prijavljenim korisnicima';
$lang['BT_SEARCH_BOOL_MODE'] = 'Dozvoliti logičke pretrage punog teksta.';
$lang['BT_SEARCH_BOOL_MODE_EXPL'] = 'Koristite *, +, - u pretragama';

$lang['BT_SHOW_DL_STAT_ON_INDEX_HEAD'] = 'Razno.';
$lang['BT_SHOW_DL_STAT_ON_INDEX'] = "Prikaži UL/DL statistike korisnika na vrhu glavne strane foruma";
$lang['BT_NEWTOPIC_AUTO_REG'] = 'Automatski registruj torrent na tragaču za nove teme.';
$lang['BT_SET_DLTYPE_ON_TOR_REG'] = 'Promijeni status teme u "Preuzmi" prilikom registracije torrenta na tragaču.';
$lang['BT_SET_DLTYPE_ON_TOR_REG_EXPL'] = 'Neće promijeniti tip teme u "Preuzmi" bez obzira na postavke foruma.';
$lang['BT_UNSET_DLTYPE_ON_TOR_UNREG'] = 'Promijeni status teme u "Normalno" prilikom odjavljivanja torrenta sa tragača.';

// Release
$lang['TEMPLATE_DISABLE'] = 'Šablon onemogućen.';
$lang['FOR_NEW_TEMPLATE'] = 'Za nove uzorke!';
$lang['QUESTION'] = 'Potvrdi, jesi li siguran da želiš izvršiti ovu radnju';

$lang['CRON_LIST'] = 'Cron lista.';
$lang['CRON_ID'] = 'ID.';
$lang['CRON_ACTIVE'] = 'Uključeno.';
$lang['CRON_ACTIVE_EXPL'] = 'Aktivni zadaci.';
$lang['CRON_TITLE'] = 'Naslov.';
$lang['CRON_SCRIPT'] = 'Scenario.';
$lang['CRON_SCHEDULE'] = 'Raspored.';
$lang['CRON_LAST_RUN'] = 'Prošlo izvođenje.';
$lang['CRON_NEXT_RUN'] = 'Sledeće izvođenje.';
$lang['CRON_RUN_COUNT'] = 'Izvođenja.';
$lang['CRON_EXECUTION_TIME'] = 'Vrijeme izvršenja';
$lang['CRON_MANAGE'] = 'Upravljanje.';
$lang['CRON_DISABLED_WARNING'] = 'Upozorenje! Pokretanje cron skripti je onemogućeno. Da biste omogućili, postavite varijablu APP_CRON_ENABLED.';

$lang['CRON_ENABLED'] = 'Cron omogućen.';
$lang['CRON_CHECK_INTERVAL'] = 'Cron provjeriti interval (sec).';

$lang['WITH_SELECTED'] = 'Sa odabranim.';
$lang['NOTHING'] = 'Ne radi ništa.';
$lang['CRON_RUN'] = 'Izvršni.';
$lang['CRON_DEL'] = 'Obrisi.';
$lang['CRON_DISABLE'] = 'Onemogući.';
$lang['CRON_ENABLE'] = 'Omogući.';
$lang['DELETE_JOB'] = 'Jesi li siguran da želiš obrisati cron zadatak?';
$lang['CRON_WORKS'] = 'Cron trenutno radi ili je pokvaren -> ';
$lang['REPAIR_CRON'] = 'Popravi Cron.';

$lang['CRON_EDIT_HEAD_EDIT'] = 'Uredi posao.';
$lang['CRON_EDIT_HEAD_ADD'] = 'Dodaj posao.';
$lang['CRON_SCRIPT_EXPL'] = 'Ime scenarija iz "includes/cron/jobs/".';
$lang['SCHEDULE'] = [
    'select' => '&raquo; Odaberite započeti.',
    'hourly' => 'Svaka sat.',
    'daily' => 'Dnevno.',
    'weekly' => 'Svake sedmice.',
    'monthly' => 'Mjesečno.',
    'interval' => 'Interval.',
];
$lang['NOSELECT'] = 'Ne odaberi.';
$lang['RUN_DAY'] = 'Izvođenje dan.';
$lang['RUN_DAY_EXPL'] = 'Dan kada ovaj posao radi.';
$lang['RUN_TIME'] = 'Izvršni put.';
$lang['RUN_TIME_EXPL'] = 'Vrijeme kada se ovaj posao izvršava (npr. 05:00:00).';
$lang['RUN_ORDER'] = 'Izvršni red.';
$lang['LAST_RUN'] = 'Prošlo izvođenje.';
$lang['NEXT_RUN'] = 'Sledeće izvođenje.';
$lang['RUN_INTERVAL'] = 'Može interno.';
$lang['RUN_INTERVAL_EXPL'] = 'npr. 00:10:00.';
$lang['LOG_ENABLED'] = 'Dnevnik omogućava.';
$lang['LOG_FILE'] = 'Dnevnik datoteke.';
$lang['LOG_FILE_EXPL'] = 'Datoteka za spasiti dnevnik.';
$lang['LOG_SQL_QUERIES'] = 'Dnevnik SL upita';
$lang['FORUM_DISABLE'] = 'Onesposobite odbor';
$lang['BOARD_DISABLE_EXPL'] = 'onesposobite odbor kada se ovaj posao izvršava.';
$lang['RUN_COUNTER'] = 'Pokreni brojnik.';

$lang['JOB_REMOVED'] = 'Zadatak je uspešno uklonjen';
$lang['SCRIPT_DUPLICATE'] = 'Cron zadatak sa ovim skriptom već postoji';
$lang['TITLE_DUPLICATE'] = 'Cron zadatak sa ovim naslovom već postoji';
$lang['CLICK_RETURN_JOBS_ADDED'] = '%sVrati se da dodaš zadatak%s';
$lang['CLICK_RETURN_JOBS'] = '%sNazad na planer zadataka%s';

$lang['REBUILD_SEARCH'] = 'Obnovi pretraživački indeks';
$lang['REBUILD_SEARCH_DESC'] = 'Ovaj mod će indeksirati svaku objavu u vašem forumu, obnavljajući pretraživačke tabele. Možete prekinuti kad god želite i sljedeći put kada ga ponovo pokrenete, imat ćete opciju nastaviti odakle ste stali.<br /><br />Može potrajati duže da prikaže napredak (u zavisnosti od "Postova po ciklusu" i "Vremenskog limita"), pa vas molimo da ne napustite stranicu napretka dok se to ne završi, osim ako, naravno, ne želite prekinuti proces.';

// Input screen
$lang['STARTING_POST_ID'] = 'Počinje post_id';
$lang['STARTING_POST_ID_EXPLAIN'] = 'Prva objava od koje će obrada početi<br />Možete izabrati da počnete od početka ili od objave na kojoj ste poslednji prestali.';

$lang['START_OPTION_BEGINNING'] = 'početi iz početka';
$lang['START_OPTION_CONTINUE'] = 'nastaviti od poslednjeg zaustavljenog';

$lang['CLEAR_SEARCH_TABLES'] = 'Očisti pretraživačke tabele';
$lang['CLEAR_SEARCH_TABLES_EXPLAIN'] = '';
$lang['CLEAR_SEARCH_NO'] = 'BEZ';
$lang['CLEAR_SEARCH_DELETE'] = 'OBRIŠI';
$lang['CLEAR_SEARCH_TRUNCATE'] = 'TRUNCIRAJ';

$lang['NUM_OF_POSTS'] = 'Broj postova';
$lang['NUM_OF_POSTS_EXPLAIN'] = 'Broj ukupnih postova za obradu<br />Automatski se popunjava brojem ukupnih/preostalih postova pronađenih u bazi podataka.';

$lang['POSTS_PER_CYCLE'] = 'Postova po ciklusu';
$lang['POSTS_PER_CYCLE_EXPLAIN'] = 'Broj postova za obradu po ciklusu<br />Držite ga niskim da biste izbegli timeout php/web servera.';

$lang['REFRESH_RATE'] = 'Frekvenciju osvježavanja';
$lang['REFRESH_RATE_EXPLAIN'] = 'Koliko vreme (sekunde) ostati neaktivan pre nego što pređete na sledeći ciklus obrade.<br />Obično ne morate menjati ovo.';

$lang['TIME_LIMIT'] = 'Vremenskog ograničenja';
$lang['TIME_LIMIT_EXPLAIN'] = 'Koliko vremena (u sekundama) obrada postova može trajati prije prelaska na sljedeći ciklus';
$lang['TIME_LIMIT_EXPLAIN_WEBSERVER'] = '<i>Vaš web server ima timeout od %s sekundi konfigurisan, pa ostanite ispod ove vrednosti</i>';

// Information strings
$lang['INFO_PROCESSING_STOPPED'] = 'Poslednji put ste zaustavili obradu na post_id %s (%s obrađenih postova) na %s.';
$lang['INFO_PROCESSING_ABORTED'] = 'Poslednji put ste prekinuli obradu na post_id %s (%s obrađenih postova) na %s.';
$lang['INFO_PROCESSING_ABORTED_SOON'] = 'Molim te, čekaj malo minuta pre nego što nastaviš...';
$lang['INFO_PROCESSING_FINISHED'] = 'Uspešno si završio obradu (%s obradio mjesta) na %s';
$lang['INFO_PROCESSING_FINISHED_NEW'] = 'Uspešno ste završili obradu na post_id %s (%s obrađenih postova) na %s,<br />ali su se nakon tog datuma pojavili %s novi postovi.';

// Progress screen
$lang['REBUILD_SEARCH_PROGRESS'] = 'Obnova pretraživačkog napretka';

$lang['PROCESSED_POST_IDS'] = 'Obrađeni ID-ovi postova : %s - %s';
$lang['TIMER_EXPIRED'] = 'Tajmer istekao na %s sekunde. ';
$lang['CLEARED_SEARCH_TABLES'] = 'Očistili potragu stolove. ';
$lang['DELETED_POSTS'] = '%s post(s) su izbrisane po vašim korisnicima tokom obrade. ';
$lang['PROCESSING_NEXT_POSTS'] = 'Obrada sledećih %s postova. Molim vas, sačekajte...';
$lang['ALL_SESSION_POSTS_PROCESSED'] = 'Obradili smo sve postove u trenutnoj sesiji.';
$lang['ALL_POSTS_PROCESSED'] = 'Svi postovi su uspešno obrađeni.';
$lang['ALL_TABLES_OPTIMIZED'] = 'Sve pretraživačke tabele su uspešno optimizovane.';

$lang['PROCESSING_POST_DETAILS'] = 'Obradu post';
$lang['CURRENT_SESSION'] = 'Trenutna Sesija';
$lang['TOTAL'] = 'Ukupno';

$lang['PROCESS_DETAILS'] = 'od <b>%s</b> da <b>%s</b> (od ukupnog <b>%s</b>)';
$lang['PERCENT_COMPLETED'] = '%s %% završeno';

$lang['PROCESSING_TIME_DETAILS'] = 'Detalji trenutne sesije';
$lang['TIME_LAST_POSTS'] = 'Poslednjih %s postova';
$lang['TIME_FROM_THE_BEGINNING'] = 'Od početka';
$lang['TIME_AVERAGE'] = 'Prosečan po ciklusu';
$lang['TIME_ESTIMATED'] = 'Procena do završetka';

$lang['SIZE_ESTIMATED'] = 'Procena nakon završetka';
$lang['SIZE_SEARCH_TABLES'] = 'Veličina pretraživačkih tabela';

$lang['POSTS_LAST_CYCLE'] = 'Obradili postove na poslednjem ciklusu';

$lang['INFO_ESTIMATED_VALUES'] = '(*) Sve procenjene vrednosti se računaju približno<br />na osnovu trenutno završenog procenta i možda ne predstavljaju stvarne konačne vrednosti.<br />Kako završeni procenat raste, procenjene vrednosti će se približiti stvarnim.';

$lang['CLICK_RETURN_REBUILD_SEARCH'] = 'Klik %shere%s da se vratite na obnovu pretrage';
$lang['REBUILD_SEARCH_ABORTED'] = 'Obnova pretrage obustavljena na post_id %s.<br /><br />Ako ste obustavili dok je obrada bila u toku, morate čekati nekoliko minuta pre nego što ponovo pokrenete obnovu pretrage, tako da poslednji ciklus može završiti.';
$lang['WRONG_INPUT'] = 'Uneli ste neke pogrešne vrijednosti. Molimo vas da proverite unos i pokušate ponovo.';

// Buttons
$lang['PROCESSING'] = 'Obradi...';
$lang['FINISHED'] = 'Završio';

$lang['BOT_TOPIC_MOVED_FROM_TO'] = 'Tema je premještena sa foruma [b]%s[/b] na forum [b]%s[/b].[br][b]Razlog za premještanje:[/b] %s[br][br]%s';
$lang['BOT_MESS_SPLITS'] = 'Tema je podijeljen. Nova tema - [b]%s[/b][br][br]%s';
$lang['BOT_TOPIC_SPLITS'] = 'Tema je bila podeljena od [b]%s[/b][br][br]%s';

$lang['CALLSEED'] = 'Pozovi seedove';
$lang['CALLSEED_EXPLAIN'] = 'Obratite pažnju uz zahtev da se vrati u distribuciju';
$lang['CALLSEED_SUBJECT'] = 'Preuzimanje pomoći %s';
$lang['CALLSEED_TEXT'] = 'Zdravo![br]Vaša pomoć je potrebna u oslobađanju [url=%s]%s[/url][br]Ako odlučite da pomognete, ali ste već obrisali torrent fajl, možete ga preuzeti [url=%s]ovde[/url][br][br]Nadam se na vašu pomoć!';
$lang['CALLSEED_MSG_OK'] = 'Poruka je poslata svim onima koji su preuzeli ovo izdanje';
$lang['CALLSEED_MSG_SPAM'] = 'Zahtjev je već jednom uspešno poslat (verovatno nije ti)<br /><br />Sledeća prilika da pošaljete zahtev da bude <b>%s</b>.';
$lang['CALLSEED_HAVE_SEED'] = 'Tema nije potrebna pomoć (<b>Seeders:</b> %d)';

$lang['LOG_ACTION']['LOG_TYPE'] = [
    'mod_topic_delete' => 'Tema:<br /> <b>deleted</b>',
    'mod_topic_move' => 'Tema:<br /> <b>moved</b>',
    'mod_topic_lock' => 'Tema:<br /> <b>closed</b>',
    'mod_topic_unlock' => 'Tema:<br /> <b>opened</b>',
    'mod_topic_split' => 'Tema:<br /> <b>split</b>',
    'mod_topic_set_downloaded' => 'Tema:<br /> <b>postavi preuzeto</b>',
    'mod_topic_unset_downloaded' => 'Tema:<br /> <b>ukloni preuzeto</b>',
    'mod_topic_change_tor_status' => 'Tema:<br /> <b>promijenjen status torrenta</b>',
    'mod_topic_change_tor_type' => 'Tema:<br /> <b>promijenjen tip torrenta</b>',
    'mod_topic_tor_unregister' => 'Tema:<br /> <b>torrent odjavljen</b>',
    'mod_topic_tor_register' => 'Tema:<br /> <b>torrent registrovan</b>',
    'mod_topic_tor_delete' => 'Tema:<br /> <b>torrent obrisan</b>',
    'mod_topic_renamed' => 'Tema:<br /> <b>preimenovan</b>',
    'mod_topic_poll_started' => 'Tema:<br /> <b>anketa pokrenuta</b>',
    'mod_topic_poll_finished' => 'Tema:<br /> <b>anketa završena</b>',
    'mod_topic_poll_deleted' => 'Tema:<br /> <b>anketa obrisana</b>',
    'mod_topic_poll_added' => 'Tema:<br /> <b>anketa dodata</b>',
    'mod_topic_poll_edited' => 'Tema:<br /> <b>anketa uređena</b>',
    'mod_post_delete' => 'Post:<br /> <b>izbrisano</b>',
    'mod_post_pin' => 'Post:<br /> <b>prikovan</b>',
    'mod_post_unpin' => 'Post:<br /> <b>uklonjen iz prikvačenja</b>',
    'adm_user_delete' => 'Korisnik:<br /> <b>izbrisan</b>',
    'adm_user_ban' => 'Korisnik:<br /> <b>banovan</b>',
    'adm_user_unban' => 'Korisnik:<br /> <b>unban</b>',
];

$lang['ACTS_LOG_ALL_ACTIONS'] = 'Sve akcije';
$lang['ACTS_LOG_SEARCH_OPTIONS'] = 'Akcije Dnevnik: Opcije pretrage';
$lang['ACTS_LOG_FORUM'] = 'Forum';
$lang['ACTS_LOG_ACTION'] = 'Akciju';
$lang['ACTS_LOG_LOGS_FROM'] = 'Logove sa ';
$lang['ACTS_LOG_FIRST'] = 'počinju sa';
$lang['ACTS_LOG_DAYS_BACK'] = 'dana';
$lang['ACTS_LOG_TOPIC_MATCH'] = 'Poklapanje naslova teme';
$lang['ACTS_LOG_SORT_BY'] = 'Sortiraj po';
$lang['ACTS_LOG_LOGS_ACTION'] = 'Akciju';
$lang['ACTS_LOG_USERNAME'] = 'Korisničko ime';
$lang['ACTS_LOG_TIME'] = 'Vrijeme';
$lang['ACTS_LOG_INFO'] = 'Info';
$lang['ACTS_LOG_FILTER'] = 'Filter';
$lang['ACTS_LOG_TOPICS'] = 'Teme:';
$lang['ACTS_LOG_OR'] = 'ili';

$lang['RELEASE'] = 'Šabloni za oslobađanje';
$lang['RELEASES'] = 'Oslobađanja';

$lang['BACK'] = 'Nazad';
$lang['NEW_RELEASE'] = 'Novo izdanje';
$lang['NEXT'] = 'Nastavi';
$lang['ALL'] = 'Sve';

$lang['TPL_EMPTY_FIELD'] = 'Moraš ispuniti polje <b>%s</b>';
$lang['TPL_EMPTY_SEL'] = 'Moraš izabrati <b>%s</b>';
$lang['TPL_NOT_NUM'] = '<b>%s</b> - Nije broj';
$lang['TPL_NOT_URL'] = '<b>%s</b> - Mora biti https:// URL';
$lang['TPL_NOT_IMG_URL'] = '<b>%s</b> - Mora biti https:// slika URL.';
$lang['TPL_PUT_INTO_SUBJECT'] = 'staviti u predmet';
$lang['TPL_POSTER'] = 'poster';
$lang['TPL_REQ_FILLING'] = 'zahtijeva popunjavanje';
$lang['TPL_NEW_LINE'] = 'novu liniju';
$lang['TPL_NEW_LINE_AFTER'] = 'nova linija nakon naslova';
$lang['TPL_NUM'] = 'broj';
$lang['TPL_URL'] = 'URL';
$lang['TPL_IMG'] = 'slika';
$lang['TPL_PRE'] = 'pre';
$lang['TPL_SPOILER'] = 'spojler';
$lang['TPL_IN_LINE'] = 'u istoj liniji';
$lang['TPL_HEADER_ONLY'] = 'samo u titulu';

$lang['SEARCH_INVALID_USERNAME'] = 'Nevažeće korisničko ime uneseno za pretragu';
$lang['SEARCH_INVALID_EMAIL'] = 'Nevažeća adresa e-pošte unesena za pretragu';
$lang['SEARCH_INVALID_IP'] = 'Nevažeća IP adresa unesena za pretragu';
$lang['SEARCH_INVALID_GROUP'] = 'Nevažeća grupa unesena za pretragu';
$lang['SEARCH_INVALID_RANK'] = 'Nevažeći rang za pretragu';
$lang['SEARCH_INVALID_DATE'] = 'Unesen je nevažeći datum za pretragu';
$lang['SEARCH_INVALID_POSTCOUNT'] = 'Unesen je nevažeći broj objava za pretraživanje';
$lang['SEARCH_INVALID_USERFIELD'] = 'Nevažeći Userfield podaci uneseni';
$lang['SEARCH_INVALID_LASTVISITED'] = 'Unesen je nevažeći datum za posljednju posjećenu pretragu';
$lang['SEARCH_INVALID_LANGUAGE'] = 'Nevažeći jezik odabran';
$lang['SEARCH_INVALID_TIMEZONE'] = 'Nevažeća vremenska zona odabrana';
$lang['SEARCH_INVALID_MODERATORS'] = 'Nevažni forum odabran';
$lang['SEARCH_INVALID'] = 'Nevažeća pretraga';
$lang['SEARCH_INVALID_DAY'] = 'Dan koji ste unijeli je neispravan.';
$lang['SEARCH_INVALID_MONTH'] = 'Mjesec koji ste unijeli je neispravan.';
$lang['SEARCH_INVALID_YEAR'] = 'Godina koju ste unijeli je neispravna.';
$lang['SEARCH_FOR_USERNAME'] = 'Traženje korisničkih imena koja odgovaraju %s.';
$lang['SEARCH_FOR_EMAIL'] = 'Traženje e-mail adresa koje odgovaraju %s.';
$lang['SEARCH_FOR_IP'] = 'Traženje IP adresa koje odgovaraju %s.';
$lang['SEARCH_FOR_DATE'] = 'Traženje korisnika koji su se pridružili %s %d/%d/%d.';
$lang['SEARCH_FOR_GROUP'] = 'Traženje članova grupe %s.';
$lang['SEARCH_FOR_RANK'] = 'Traženje nosača ranga %s.';
$lang['SEARCH_FOR_BANNED'] = 'Traženje zabranjenih korisnika.';
$lang['SEARCH_FOR_ADMINS'] = 'Traženje administratora.';
$lang['SEARCH_FOR_MODS'] = 'Traženje moderatora.';
$lang['SEARCH_FOR_DISABLED'] = 'Traženje onemogućenih korisnika.';
$lang['SEARCH_FOR_POSTCOUNT_GREATER'] = 'Traženje korisnika sa brojem postova većim od %d.';
$lang['SEARCH_FOR_POSTCOUNT_LESSER'] = 'Traženje korisnika sa brojem postova manjim od %d.';
$lang['SEARCH_FOR_POSTCOUNT_RANGE'] = 'Traženje korisnika sa brojem postova između %d i %d.';
$lang['SEARCH_FOR_POSTCOUNT_EQUALS'] = 'Traženje korisnika sa tačnom vrijednošću broja postova %d.';
$lang['SEARCH_FOR_USERFIELD_TWITTER'] = 'Pretražite korisnike sa Twitterom koji odgovara %s';
$lang['SEARCH_FOR_USERFIELD_WEBSITE'] = 'Traženje korisnika sa web-stranicom koja odgovara %s';
$lang['SEARCH_FOR_USERFIELD_LOCATION'] = 'Traženje korisnika sa lokacijom koja odgovara %s.';
$lang['SEARCH_FOR_USERFIELD_INTERESTS'] = 'Traženje korisnika sa njihovim poljem interesa koje odgovara %s.';
$lang['SEARCH_FOR_USERFIELD_OCCUPATION'] = 'Traženje korisnika sa njihovim poljem zanimanja koje odgovara %s.';
$lang['SEARCH_FOR_LASTVISITED_INTHELAST'] = 'Tražim korisnike koji su posjetili u zadnjih %s';
$lang['SEARCH_FOR_LASTVISITED_AFTERTHELAST'] = 'Tražim korisnike koji su posjetili nakon zadnjeg %s';
$lang['SEARCH_FOR_LANGUAGE'] = 'Traženje korisnika koji su postavili %s kao njihov jezik.';
$lang['SEARCH_FOR_TIMEZONE'] = 'Traženje korisnika koji su postavili UTC %s kao svoju vremensku zonu.';
$lang['SEARCH_FOR_MODERATORS'] = 'Traženje za moderatorima Foruma -> %s.';
$lang['SEARCH_USERS_ADVANCED'] = 'Napredna pretraga korisnika.';
$lang['SEARCH_USERS_EXPLAIN'] = 'Ovaj modul omogućava da izvršite naprednu pretragu za korisnike na širokom spektru kriterija. Molimo pročitajte opise ispod svakog polja da biste u potpunosti razumjeli svaku opciju pretrage.';
$lang['SEARCH_USERNAME_EXPLAIN'] = 'Ovdje možete izvršiti pretragu imena korisnika koja ne uzima u obzir velika i mala slova. Ako želite da se podudara dio korisničkog imena, koristite * (asterisk) kao zamjensko.';
$lang['SEARCH_EMAIL_EXPLAIN'] = 'Unesite izraz za podudaranje e-mail adrese korisnika. Ovo je neosjetljivo na mala i velika slova. Ako želite izvršiti djelomično podudaranje, koristite * (asterisk) kao zamjensko.';
$lang['SEARCH_IP_EXPLAIN'] = 'Pretraga korisnika prema određenoj IP adresi (xxx.xxx.xxx.xxx).';
$lang['SEARCH_USERS_JOINED'] = 'Korisnici koji su se pridružili.';
$lang['SEARCH_USERS_LASTVISITED'] = 'Korisnici koji su posjetili.';
$lang['IN_THE_LAST'] = 'u zadnje.';
$lang['AFTER_THE_LAST'] = 'nakon zadnjeg.';
$lang['BEFORE'] = 'Prije.';
$lang['AFTER'] = 'Nakon.';
$lang['SEARCH_USERS_JOINED_EXPLAIN'] = 'Pretraživanje korisnika koji su se pridružili prije ili nakon (i na) određenog datuma. Format datuma je YYYY/MM/DD.';
$lang['SEARCH_USERS_GROUPS_EXPLAIN'] = 'Pogledajte sve članove odabrane grupe.';
$lang['SEARCH_USERS_RANKS_EXPLAIN'] = 'Pogledajte sve nosače odabranog ranga.';
$lang['BANNED_USERS'] = 'Zabranjeni korisnici.';
$lang['DISABLED_USERS'] = 'Onemogućeni korisnici.';
$lang['SEARCH_USERS_MISC_EXPLAIN'] = 'Administratori - Svi korisnici sa ovlaštenjima administratora; Moderatori - Svi moderatori foruma; Zabranjeni korisnici - Svi nalozi koji su zabranjeni na ovim forumima; Korisnici sa invaliditetom - Svi korisnici sa onemogućenim nalozima (bilo ručno onemogućenim ili nikada nisu potvrdili svoju adresu e-pošte); Korisnici sa onemogućenim PM-ovima - Odabire korisnike koji imaju uklonjene privilegije za Privatne poruke (Urađeno putem upravljanja korisnicima)';
$lang['POSTCOUNT'] = 'Broj postova';
$lang['EQUALS'] = 'Jednako';
$lang['GREATER_THAN'] = 'Veći od';
$lang['LESS_THAN'] = 'Manje od';
$lang['SEARCH_USERS_POSTCOUNT_EXPLAIN'] = 'Možete tražiti korisnike na osnovu vrijednosti broja postova. Možete pretraživati po određenoj vrijednosti, većoj ili manjoj od vrijednosti ili između dvije vrijednosti. Da biste izvršili pretragu raspona, odaberite "Jednako", a zatim stavite početnu i završnu vrijednost raspona odvojene crticom (-), npr. 10-15';
$lang['USERFIELD'] = 'Korisničko polje';
$lang['SEARCH_USERS_USERFIELD_EXPLAIN'] = 'Pretraživanje korisnika na osnovu različitih polja profila. Džoker znakovi se podržavaju korišćenjem asteriska (*).';
$lang['SEARCH_USERS_LASTVISITED_EXPLAIN'] = 'Možete pretraživati korisnike na osnovu njihovih posljednjih prijava koristeći ovu opciju pretrage.';
$lang['SEARCH_USERS_LANGUAGE_EXPLAIN'] = 'Ovo će prikazati korisnike koji su odabrali određeni jezik u svom profilu.';
$lang['SEARCH_USERS_TIMEZONE_EXPLAIN'] = 'Korisnici koji su izabrali određenu vremensku zonu u svom profilu.';
$lang['MODERATORS_OF'] = 'Moderatori od';
$lang['SEARCH_USERS_MODERATORS_EXPLAIN'] = 'Potražite korisnike sa dozvolama za moderiranje na određenom forumu. Dozvole za moderiranje se prepoznaju ili po korisničkim dozvolama ili po članstvu u grupi s pravim grupnim dozvolama.';

$lang['SEARCH_USERS_NEW'] = '%s je rezultiralo u %d rezultata. Izvrši <a href="%s">drugu pretragu</a>.';
$lang['BANNED'] = 'Zabranjen';
$lang['NOT_BANNED'] = 'Nije zabranjen.';
$lang['SEARCH_NO_RESULTS'] = 'Nema korisnika koji odgovaraju odabranim kriterijima. Molimo pokušajte s drugom pretragom. Ako tražite korisničko ime ili e-mail adresu, za dijelimične podudarnosti morate koristiti zamjenski znak * (asterisk).';
$lang['ACCOUNT_STATUS'] = 'Status računa.';
$lang['SORT_OPTIONS'] = 'Opcije sortiranja:';
$lang['LAST_VISIT'] = 'Posljednja posjeta.';
$lang['DAY'] = 'Dan';

$lang['POST_EDIT_CANNOT'] = 'Žao mi je, ali ne možete uređivati postove.';
$lang['FORUMS_IN_CAT'] = 'forumi u toj kategoriji.';

$lang['MC_TITLE'] = 'Komentar moderacije';
$lang['MC_LEGEND'] = 'Unesite komentar.';
$lang['MC_FAQ'] = 'Uneseni tekst će biti prikazan ispod ove poruke.';
$lang['MC_COMMENT_PM_SUBJECT'] = '%s u tvojoj poruci.';
$lang['MC_COMMENT_PM_MSG'] = "Zdravo, [b]%s[/b]. Moderator je ostavio u tvojoj poruci [url=%s][b]%s[/b][/url][quote]%s[/quote].";
$lang['MC_COMMENT'] = [
    0 => [
        'title' => '',
        'type' => 'Obriši komentar',
    ],
    1 => [
        'title' => 'Komentar od %s.',
        'type' => 'Komentar',
    ],
    2 => [
        'title' => 'Informacije od %s.',
        'type' => 'Informacije',
    ],
    3 => [
        'title' => 'Upozorenje od %s.',
        'type' => 'Upozorenje',
    ],
    4 => [
        'title' => 'Povreda od %s.',
        'type' => 'Povreda',
    ],
];

$lang['SITEMAP'] = 'Mapa sajta';
$lang['SITEMAP_ADMIN'] = 'Upravljaj mapom sajta.';
$lang['SITEMAP_CREATED'] = 'Mapa sajta je stvorena.';
$lang['SITEMAP_AVAILABLE'] = 'Mapa sajta je dostupna na.';
$lang['SITEMAP_NOT_CREATED'] = 'Mapa sajta još nije stvorena.';
$lang['SITEMAP_OPTIONS'] = 'Opcije.';
$lang['SITEMAP_CREATE'] = 'Stvori / ažuriraj mapu sajta.';
$lang['SITEMAP_WHAT_NEXT'] = 'Šta sledeće da uradim?';
$lang['SITEMAP_GOOGLE_1'] = 'Registra tvog sajta na <a href="https://www.google.com/webmasters/" target="_blank">Google Webmaster</a> koristeći Google je tvoj račun.';
$lang['SITEMAP_GOOGLE_2'] = '<a href="https://www.google.com/webmasters/tools/sitemap-list" target="_blank">Dodajte mapu sajta</a> koja je registrovana.';
$lang['SITEMAP_YANDEX_1'] = 'Registra tvog sajta na <a href="https://webmaster.yandex.ru/sites/" target="_blank">Yandex Webmaster</a> koristi tvoj Yandex račun.';
$lang['SITEMAP_YANDEX_2'] = '<a href="https://webmaster.yandex.ru/site/map.xml" target="_blank">Add sitemap</a> lokacije ste registrirani.';
$lang['SITEMAP_BING_1'] = 'Registra tvog sajta na <a href="https://www.bing.com/webmaster/" target="_blank">Bing Webmaster</a> koristeći svoj Microsoft račun.';
$lang['SITEMAP_BING_2'] = 'Dodaj mapu sajta registrovanog u svojim postavkama.';
$lang['SITEMAP_ADD_TITLE'] = 'Dodatne stranice za mapu sajta.';
$lang['SITEMAP_ADD_PAGE'] = 'Dodatne stranice';
$lang['SITEMAP_ADD_EXP_1'] = 'Možete navesti dodatne stranice na svom sajtu koje bi trebale biti uključene u vaš fajl mape sajta koji ste kreirali.';
$lang['SITEMAP_ADD_EXP_2'] = 'Svaka referenca mora početi s http(s):// i novom linijom!';

$lang['FORUM_MAP'] = 'Mapa foruma.';
$lang['ATOM_FEED'] = 'Nahrani.';
$lang['ATOM_ERROR'] = 'Greška prilikom generisanja hrane.';
$lang['ATOM_SUBSCRIBE'] = 'Pretplatite se na nahrani.';
$lang['ATOM_UPDATED'] = 'Updated';
$lang['ATOM_GLOBAL_FEED'] = 'Globalna hrana za sve forume.';

$lang['HASH_INVALID'] = 'Hašiš %s je neispravan';
$lang['HASH_NOT_FOUND'] = 'Oslobodi sa hašiš %s ne našao';

$lang['TERMS_EMPTY_TEXT'] = '[align=center]Tekst ove stranice je uređivan u: [url]%s[/url]. Ovu liniju mogu vidjeti samo administratori.[/align]';
$lang['TERMS_EXPLAIN'] = 'Na ovoj stranici možete navesti tekst osnovnih pravila resursa koji će biti prikazan korisnicima.';
$lang['TERMS_UPDATED_SUCCESSFULLY'] = 'Uslovi su uspješno ažurirani';
$lang['CLICK_RETURN_TERMS_CONFIG'] = '%sKliknite ovdje da se vratite na uređivač uslova%s';

$lang['TR_STATS'] = [
    0 => 'neaktivni korisnici u 30 dana.',
    1 => 'neaktivni korisnici za 90 dana.',
    2 => 'srednje veličine distribucije na tragaču',
    3 => 'koliko ukupno rukama na tragaču.',
    4 => 'koliko živih ruku (tamo je barem 1 doveo).',
    5 => 'koliko ruku gdje se sadi više od 5 sjemena.',
    6 => 'koliko nas uploadere (oni koji su popunili barem 1 ruku).',
    7 => 'koliko uploaders nad zadnjih 30 dana.',
];

$lang['TORRENT_STATS_TITLE'] = 'Statistika bujica';
$lang['TRACKER_STATS_TITLE'] = 'Statistika trackera';
$lang['TORRENTS'] = 'Bujice';
$lang['PEERS'] = 'Čvorovi';
$lang['CLIENTS'] = 'Klijenti';

$lang['NEW_POLL_START'] = 'Anketa je omogućila.';
$lang['NEW_POLL_END'] = 'Anketu završiti.';
$lang['NEW_POLL_ENDED'] = 'Ova anketa je već završena.';
$lang['NEW_POLL_DELETE'] = 'Anketa je izbrisana.';
$lang['NEW_POLL_ADDED'] = 'Anketa dodana.';
$lang['NEW_POLL_ALREADY'] = 'Tema već ima anketu.';
$lang['NEW_POLL_RESULTS'] = 'Anketa je izmijenjena i stari rezultati su obrisani.';
$lang['NEW_POLL_VOTES'] = 'Morate unijeti tačne opcije odgovora (minimalno 2, maksimalno je %s).';
$lang['NEW_POLL_DAYS'] = 'Vrijeme ankete (%s dana od trenutka stvaranja teme) već je završeno.';
$lang['NEW_POLL_U_NOSEL'] = 'Niste odabrali koji glas.';
$lang['NEW_POLL_U_CHANGE'] = 'Uredi anketu.';
$lang['NEW_POLL_U_EDIT'] = 'Promjena ankete (stari rezultati će biti obrisani).';
$lang['NEW_POLL_U_VOTED'] = 'Svi su glasali.';
$lang['NEW_POLL_U_START'] = 'Omogućiti anketu.';
$lang['NEW_POLL_U_END'] = 'Završi anketu.';
$lang['NEW_POLL_M_TITLE'] = 'Naslov ankete.';
$lang['NEW_POLL_M_VOTES'] = 'Opcije.';
$lang['NEW_POLL_M_EXPLAIN'] = 'Svaki red odgovara jednom odgovoru (max.';

$lang['UPLOAD_ERROR_COMMON_DISABLED'] = 'Učitavanje datoteka onemogućeno';
$lang['UPLOAD_ERROR_COMMON'] = 'Greška prilikom učitavanja datoteke.';
$lang['UPLOAD_ERROR_SIZE'] = 'Prenesena datoteka premašuje maksimalnu veličinu od %s.';
$lang['UPLOAD_ERROR_FORMAT'] = 'Nevažeći tip datoteke za sliku.';
$lang['UPLOAD_ERROR_DIMENSIONS'] = 'Dimenzije slike premašuju maksimalno dozvoljenih %sx%s piksela';
$lang['UPLOAD_ERROR_NOT_IMAGE'] = 'Poslani datoteka nije slika';
$lang['UPLOAD_ERROR_NOT_ALLOWED'] = 'Ekstenzija %s za preuzimanje nije dozvoljena';
$lang['UPLOAD_ERRORS'] = [
    UPLOAD_ERR_INI_SIZE => 'Premašili ste maksimalnu veličinu datoteke za server',
    UPLOAD_ERR_FORM_SIZE => 'Premašili ste maksimalnu veličinu datoteke za učitavanje',
    UPLOAD_ERR_PARTIAL => 'Datoteka je djelomično preuzeta',
    UPLOAD_ERR_NO_FILE => 'Datoteka nije učitana',
    UPLOAD_ERR_NO_TMP_DIR => 'Privremeni direktorij nije pronađen',
    UPLOAD_ERR_CANT_WRITE => 'Greška pri pisanju',
    UPLOAD_ERR_EXTENSION => 'Učitajte je zaustavljeno zbog ekstenzije',
];

// Captcha
$lang['CAPTCHA'] = 'Provjeri da vi niste robot';
$lang['CAPTCHA_WRONG'] = 'Niste mogli potvrditi da niste robot';
$lang['CAPTCHA_SETTINGS'] = '<h2>Captcha nije u potpunosti konfigurirana</h2><p>Generišite ključeve koristeći kontrolnu ploču vaše captcha usluge, zatim ih unesite u datoteku config/config.php.</p>';
$lang['CAPTCHA_OCCURS_BACKGROUND'] = 'CAPTCHA verifikacija se vrši u pozadini';

// Sending email
$lang['REPLY_TO'] = 'Odgovor';
$lang['EMAILER_SUBJECT'] = [
    'EMPTY' => 'Bez predmeta',
    'GROUP_ADDED' => 'Dodani ste u korisničku grupu',
    'GROUP_APPROVED' => 'Vaš zahtjev za pridruživanje korisničkoj grupi je odobren',
    'GROUP_REQUEST' => 'Zahtjev za pridruživanje vašoj korisničkoj grupi',
    'PRIVMSG_NOTIFY' => 'Nova privatna poruka',
    'TOPIC_NOTIFY' => 'Obavještenje o odgovoru u temi - %s',
    'USER_ACTIVATE' => 'Reaktivacija računa',
    'USER_ACTIVATE_PASSWD' => 'Potvrđivanje nove lozinke',
    'USER_WELCOME' => 'Dobrodošli na stranicu %s',
    'USER_WELCOME_INACTIVE' => 'Dobrodošli na stranicu %s',
];

// Null ratio
$lang['BT_NULL_RATIO'] = 'Resetuj odnos';
$lang['BT_NULL_RATIO_NONE'] = 'Nemate odnos';
$lang['BT_NULL_RATIO_ALERT'] = "Pažnja!\n\nDa li ste sigurni da želite resetovati svoj odnos?";
$lang['BT_NULL_RATIO_AGAIN'] = 'Već ste resetovali svoj odnos!';
$lang['BT_NULL_RATIO_NOT_NEEDED'] = 'Imate dobar odnos. Resetovanje je moguće samo sa odnosom manjim od %s';
$lang['BT_NULL_RATIO_SUCCESS'] = 'Odnos je uspešno resetovan!';

// Releaser stats
$lang['RELEASER_STAT_SIZE'] = 'Ukupna veličina:';
$lang['RELEASER_STAT'] = 'Statistika objavljivača:';
$lang['RELEASER_STAT_SHOW'] = 'Prikaži statistiku';

// Spam protection
$lang['REGISTRATION_DENIED'] = 'Registracija odbijena. Molimo kontaktirajte administratora ako smatrate da je ovo greška.';
$lang['POST_SPAM_DENIED'] = 'Vaša poruka je prepoznata kao neželjena pošta i ne može biti objavljena.';
$lang['PM_SPAM_DENIED'] = 'Vaša poruka je prepoznata kao neželjena pošta i ne može biti poslata.';

// Spam log (admin)
$lang['SPAM_LOG'] = 'Dnevnik neželjene pošte';
$lang['SPAM_LOG_DESC'] = 'Ovaj dnevnik evidentira sve pokušaje registracije i slanja sadržaja koji je označen sistemom za zaštitu od neželjene pošte. <b>Odbijeno</b> &mdash; radnja je potpuno blokirana (registracija odbijena, post/PM nije poslat). <b>Moderirano</b> &mdash; za registracije, nalog je kreiran, ali zahtijeva aktivaciju putem e-pošte; za sadržaj, post/PM je dozvoljen, ali označen kao sumnjiv.';
$lang['SPAM_LOG_CHECK_TYPE'] = 'Vrsta provjere';
$lang['SPAM_LOG_CHECK_TYPE_DESC_REG'] = 'registracija &mdash; nova prijava naloga';
$lang['SPAM_LOG_CHECK_TYPE_DESC_CONTENT'] = 'sadržaj &mdash; post ili privatna poruka';
$lang['SPAM_LOG_DECISION'] = 'Odluka';
$lang['SPAM_LOG_PROVIDER'] = 'Pružalac usluge';
$lang['SPAM_LOG_REASON'] = 'Razlog';
$lang['SPAM_LOG_RESPONSE_TIME'] = 'Vrijeme (ms)';
$lang['SPAM_LOG_ALL'] = 'Sve';
$lang['SPAM_LOG_DETAILS'] = 'Detalji';
$lang['SPAM_LOG_NO_RECORDS'] = 'Nema unosa u dnevnik neželjene pošte';
$lang['SPAM_LOG_TOTAL'] = 'Ukupan broj unosa';
$lang['SPAM_LOG_DENIED_COUNT'] = 'Odbijeni';
$lang['SPAM_LOG_MODERATED_COUNT'] = 'Moderirani';

// Marketplace / Modifications
$lang['MARKETPLACE'] = 'Tržnica';
$lang['MODIFICATIONS_LIST'] = 'Izmjenama.';
$lang['MODS_VERSION'] = 'Verzija';
$lang['MODS_DOWNLOADS'] = 'Preuzimanja';
$lang['MODS_RATING'] = 'Ocjena';
$lang['MODS_ACTIONS'] = 'Akcije';
$lang['MODS_AUTHOR'] = 'Autor';
$lang['MODS_CATEGORY'] = 'Kategorija';
$lang['MODS_LAST_UPDATED'] = 'Ažurirano';
$lang['MODS_TOTAL'] = 'Ukupno';
$lang['MODS_NO_RESOURCES'] = 'Nije pronađena nijedna modifikacija.';
$lang['MODS_INSTALL'] = 'Instaliraj';
$lang['MODS_INSTALL_SOON'] = 'Opcija instalacije uskoro dolazi';
$lang['MODS_ALL_CATEGORIES'] = 'Sve kategorije';
$lang['MODS_FREE'] = 'Besplatno';
$lang['MODS_PAID'] = 'Plaćeno';
$lang['MODS_THEMES'] = 'Teme';
$lang['MODS_LANGPACKS'] = 'Jezicni paketi';
$lang['MODS_API_ERROR'] = 'Nije moguće učitati modifikacije: %s';
$lang['MODS_API_UNAVAILABLE'] = 'Server modifikacija je privremeno nedostupan.';
$lang['MODS_DESCRIPTION'] = 'Ova stranica prikazuje sve resurse objavljene na zvaničnom forumu TorrentPier. Instalacija jednim klikom biće dostupna u nekom budućem ažuriranju — za sada koristite ovu stranicu kao izložbu resursa.';
$lang['MODS_REVIEW'] = 'recenzija';
$lang['MODS_REVIEWS'] = 'recenzije';

// Dark mode
$lang['DARK_MODE_TOGGLE'] = 'Prebaci u tamni mod';
