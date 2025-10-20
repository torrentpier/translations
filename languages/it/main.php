<?php
/**
 * TorrentPier – Bull-powered BitTorrent tracker engine
 *
 * @copyright Copyright (c) 2005-2025 TorrentPier (https://torrentpier.com)
 * @link      https://github.com/torrentpier/torrentpier for the canonical source repository
 * @license   https://github.com/torrentpier/torrentpier/blob/master/LICENSE MIT License
 */

// Common, these terms are used extensively on several pages
$lang['ADMIN'] = 'Amministrazione';
$lang['FORUM'] = 'Forum';
$lang['CATEGORY'] = 'Categoria';
$lang['HIDE_CAT'] = 'Nascondere categorie';
$lang['HIDE_CAT_MESS'] = 'Alcune categorie sono nascoste da opzioni di visualizzazione personalizzate';
$lang['SHOW_ALL'] = 'Mostra tutto';
$lang['TOPIC'] = 'Argomento';
$lang['TOPICS'] = 'Argomenti';
$lang['TOPICS_SHORT'] = 'Argomenti';
$lang['REPLIES'] = 'Risposte';
$lang['REPLIES_SHORT'] = 'Risposte';
$lang['VIEWS'] = 'Vista';
$lang['POSTS'] = 'Post';
$lang['POSTS_SHORT'] = 'Post';
$lang['POSTED'] = 'Postato';
$lang['USERNAME'] = 'Username';
$lang['PASSWORD'] = 'Password';
$lang['PASSWORD_SHOW_BTN'] = 'Mostra password';
$lang['EMAIL'] = 'Email';
$lang['PM'] = 'PM';
$lang['AUTHOR'] = 'Autore';
$lang['TIME'] = 'Tempo';
$lang['MESSAGE'] = 'Messaggio';
$lang['TORRENT'] = 'Torrent';
$lang['PERMISSIONS'] = 'Autorizzazioni';
$lang['TYPE'] = 'Tipo';
$lang['SEEDER'] = 'Seminatrice';
$lang['LEECHER'] = 'Leecher';
$lang['RELEASER'] = 'Releaser';

$lang['1_DAY'] = '1 Giorno';
$lang['7_DAYS'] = '7 Giorni';
$lang['2_WEEKS'] = '2 Settimane';
$lang['1_MONTH'] = '1 Mese';
$lang['3_MONTHS'] = '3 Mesi';
$lang['6_MONTHS'] = '6 Mesi';
$lang['1_YEAR'] = '1 Anno';

$lang['GO'] = 'Vai a';
$lang['SUBMIT'] = 'Invia';
$lang['RESET'] = 'Reset';
$lang['CANCEL'] = 'Annulla';
$lang['PREVIEW'] = 'Anteprima';
$lang['AJAX_PREVIEW'] = 'Quick View';
$lang['CONFIRM'] = 'Confermare';
$lang['YES'] = 'Sì';
$lang['NO'] = 'Non';
$lang['ENABLED'] = 'Abilitato';
$lang['DISABLED'] = 'Disabilitato';
$lang['ERROR'] = 'Errore';
$lang['SELECT_ACTION'] = 'Selezionare l\'azione';
$lang['CLEAR'] = 'Pulisci';
$lang['MOVE_TO_TOP'] = 'Sposta in cima';
$lang['UNKNOWN'] = 'Sconosciuto';
$lang['COPY_TO_CLIPBOARD'] = 'Copia negli appunti';
$lang['NO_ITEMS'] = 'Non sembra esserci alcun dato qui...';
$lang['PLEASE_TRY_AGAIN'] = 'Per favore riprova tra pochi secondi...';

$lang['NEXT_PAGE'] = 'Accanto';
$lang['PREVIOUS_PAGE'] = 'Precedente';
$lang['SHORT_PAGE'] = 'pagina';
$lang['GOTO_PAGE'] = 'Vai alla pagina';
$lang['GOTO_SHORT'] = 'Pagina';
$lang['JOINED'] = 'Unito';
$lang['LONGEVITY'] = 'Registrati';
$lang['IP_ADDRESS'] = 'Indirizzo IP';
$lang['POSTED_AFTER'] = 'dopo';

$lang['SELECT_FORUM'] = 'Seleziona forum';
$lang['VIEW_LATEST_POST'] = 'Visualizzazione post più recente';
$lang['VIEW_NEWEST_POST'] = 'Visualizzazione post più recente';
$lang['PAGE_OF'] = 'Pagina <b>%d</b> di <b>%s</b>';

$lang['TWITTER'] = 'X (Twitter)';
$lang['TWITTER_ERROR'] = 'Hai inserito un accesso non valido a Twitter';

$lang['FORUM_INDEX'] = '%s Indice Del Forum'; // e.g. sitename Forum Index, %s can be removed if you prefer

$lang['POST_NEW_TOPIC'] = 'Post new topic';
$lang['POST_NEW_RELEASE'] = 'Post nuova release';
$lang['REPLY_TO_TOPIC'] = 'Risposta al topic';

$lang['CLICK_RETURN_TOPIC'] = 'Fare clic su %sHere%s per tornare all\'argomento'; // %s's here are for uris, do not remove!
$lang['CLICK_RETURN_FORUM'] = 'Fare clic su %sHere%s per tornare al forum';
$lang['CLICK_RETURN_MODCP'] = 'Fare clic su %sHere%s per tornare al Pannello di Controllo Moderatore';
$lang['CLICK_RETURN_GROUP'] = 'Fare clic su %sHere%s per tornare al gruppo di informazioni';

$lang['ADMIN_PANEL'] = 'Vai al Pannello di Amministrazione';
$lang['ALL_CACHE_CLEARED'] = 'La Cache è stato cancellato';
$lang['ALL_TEMPLATE_CLEARED'] = 'Cache dei Template è stato cancellato';
$lang['DATASTORE_CLEARED'] = 'Datastore è stato cancellato';
$lang['BOARD_DISABLE'] = 'Ci spiace, ma questo forum è disabilitata. Tenta di tornare più tardi';
$lang['BOARD_DISABLE_CRON'] = 'Il Forum è down per manutenzione. Tenta di tornare più tardi';
$lang['ADMIN_DISABLE'] = 'Il forum è disabilitato dall\'amministratore. Puoi abilitarlo in qualsiasi momento';
$lang['ADMIN_DISABLE_CRON'] = 'Forum bloccato dal trigger cron job. Puoi rimuovere il blocco in qualsiasi momento';
$lang['ADMIN_DISABLE_TITLE'] = 'Il forum è disabilitata';
$lang['ADMIN_DISABLE_CRON_TITLE'] = 'Il Forum è down per manutenzione';
$lang['ADMIN_UNLOCK'] = 'Attivare forum';
$lang['ADMIN_UNLOCKED'] = 'Sbloccato';
$lang['ADMIN_UNLOCK_CRON'] = 'Rimuovere il blocco';

$lang['LOADING'] = 'Il caricamento...';
$lang['JUMPBOX_TITLE'] = 'Seleziona forum';
$lang['DISPLAYING_OPTIONS'] = 'Le opzioni per la visualizzazione';

// Global Header strings
$lang['REGISTERED_USERS'] = 'Utenti Registrati:';
$lang['BROWSING_FORUM'] = 'Visitano il forum:';
$lang['ONLINE_USERS'] = 'In totale ci sono <b>%1$d</b> utenti online: %2$d registrati e %3$d ospiti';
$lang['RECORD_ONLINE_USERS'] = 'La maggior parte di utenti in linea è stato <b>%s</b> su %s'; // first %s = number of users, second %s is the date.

$lang['ONLINE_ADMIN'] = 'Amministratore';
$lang['ONLINE_MOD'] = 'Moderatore';
$lang['ONLINE_GROUP_MEMBER'] = 'Membro del gruppo di';

$lang['CANT_EDIT_IN_DEMO_MODE'] = 'Questa azione non può essere effettuata in modalità demo!';

$lang['CURRENT_TIME'] = 'Ora attuale è: <span class="tz_time">%s</span>';

$lang['SEARCH_NEW'] = 'Visualizzazione post più recente';
$lang['SEARCH_SELF'] = 'I miei post';
$lang['SEARCH_SELF_BY_LAST'] = 'ultimo post';
$lang['SEARCH_SELF_BY_MY'] = 'il mio post di tempo';
$lang['SEARCH_UNANSWERED'] = 'Vista senza risposta post';
$lang['SEARCH_LATEST'] = 'Ultime discussioni';
$lang['LATEST_RELEASES'] = 'Ultime uscite';

$lang['REGISTER'] = 'Registro';
$lang['PROFILE'] = 'Profilo';
$lang['EDIT_PROFILE'] = 'Modifica profilo';
$lang['SEARCH'] = 'Ricerca';
$lang['MEMBERLIST'] = 'Memberlist';
$lang['USERGROUPS'] = 'I gruppi di utenti';
$lang['LASTPOST'] = 'Ultimo Post';
$lang['MODERATOR'] = 'Moderatore';
$lang['MODERATORS'] = 'Moderatori';
$lang['TERMS'] = 'Termini';
$lang['NOTHING_HAS_CHANGED'] = 'Nulla è stato cambiato';

// Stats block text
$lang['POSTED_TOPICS_TOTAL'] = 'I nostri utenti hanno inviato un totale di <b>%s</b> argomenti'; // Number of topics
$lang['POSTED_ARTICLES_TOTAL'] = 'I nostri utenti hanno inviato un totale di <b>%s</b> articoli'; // Number of posts
$lang['REGISTERED_USERS_TOTAL'] = 'Abbiamo <b>%s</b> utenti registrati'; // # registered users
$lang['USERS_TOTAL_GENDER'] = 'Ragazzi: <b>%d</b>, Ragazze: <b>%d</b>, Altri: <b>%d</b>';
$lang['NEWEST_USER'] = 'Il nuovo utente registrato è <b>%s</b>'; // a href, username, /a

// Tracker stats
$lang['TORRENTS_STAT'] = 'Torrenti: <b style="color: blue;">%s</b>,&nbsp; dimensione Totale: <b>%s</b>'; // first %s = number of torrents, second %s is the total size.
$lang['PEERS_STAT'] = 'Coetanei: <b>%s</b>,&nbsp; Seeders: <b class="seedmed">%s</b>,&nbsp; Leechers: <b class="leechmed">%s</b>'; // first %s = number of peers, second %s = number of seeders,  third %s = number of leechers.
$lang['SPEED_STAT'] = 'Velocità totale: <b>%s</b>&nbsp;'; // %s = total speed.

$lang['NO_NEW_POSTS'] = 'Nessun nuovo post';
$lang['NEW_POSTS'] = 'Nuovi posti';
$lang['NEW_POST'] = 'Nuovo post';
$lang['FORUM_LOCKED_MAIN'] = 'Il Forum è bloccato';

// Login
$lang['ENTER_PASSWORD'] = 'Si prega di inserire il proprio nome utente e password per effettuare il login.';
$lang['LOGIN'] = 'Login';
$lang['LOGOUT'] = 'Il Log out';
$lang['CONFIRM_LOGOUT'] = 'Sei sicuro di voler uscire?';

$lang['FORGOTTEN_PASSWORD'] = 'Password dimenticata?';
$lang['AUTO_LOGIN'] = 'Mi permette di accedere automaticamente';
$lang['ERROR_LOGIN'] = 'Il nome utente che hai inserito è errato o non valido, o la password non è valida.';
$lang['REMEMBER'] = 'Ricordate';
$lang['USER_WELCOME'] = 'Benvenuto,';

// Index page
$lang['HOME'] = 'Casa';
$lang['NO_POSTS'] = 'Nessun post';
$lang['NO_FORUMS'] = 'Questo consiglio ha nessun forum';

$lang['PRIVATE_MESSAGE'] = 'Messaggio Privato';
$lang['PRIVATE_MESSAGES'] = 'I Messaggi Privati';
$lang['WHOSONLINE'] = 'Chi è online';

$lang['MARK_ALL_FORUMS_READ'] = 'Bandiera tutti i forum come letti';

$lang['LATEST_NEWS'] = 'Ultime notizie';
$lang['NETWORK_NEWS'] = 'Rete di notizie';
$lang['SUBFORUMS'] = 'Subforums';

// Viewforum
$lang['VIEW_FORUM'] = 'Guarda Il Forum';

$lang['FORUM_NOT_EXIST'] = 'Il forum che hai selezionato non esiste.';
$lang['ERROR_PORNO_FORUM'] = 'Questo tipo di forum (18+) è stato nascosto nel tuo profilo da voi';

$lang['DISPLAY_TOPICS'] = 'Visualizzare gli argomenti';
$lang['ALL_TOPICS'] = 'Tutti Gli Argomenti';
$lang['MODERATE_FORUM'] = 'Moderare questo forum';
$lang['TITLE_SEARCH_HINT'] = 'titolo di ricerca...';

$lang['TOPIC_ANNOUNCEMENT'] = 'Annuncio:';
$lang['TOPIC_MOVED'] = 'Spostato:';
$lang['TOPIC_POLL'] = '[ Sondaggio ]';

$lang['MARK_TOPICS_READ'] = 'Contrassegnare tutti gli argomenti di leggere';
$lang['TOPICS_MARKED_READ'] = 'Gli argomenti di questo forum sono stati contrassegnati leggere';

$lang['RULES_POST_CAN'] = 'Si <b>can</b> inserire nuovi argomenti in questo forum';
$lang['RULES_POST_CANNOT'] = 'Si <b>cannot</b> inserire nuovi argomenti in questo forum';
$lang['RULES_REPLY_CAN'] = 'Si <b>can</b> rispondere agli argomenti in questo forum';
$lang['RULES_REPLY_CANNOT'] = 'Si <b>cannot</b> rispondere agli argomenti in questo forum';
$lang['RULES_EDIT_CAN'] = 'Si <b>can</b> modificare i tuoi messaggi in questo forum';
$lang['RULES_EDIT_CANNOT'] = 'Si <b>cannot</b> modificare i tuoi messaggi in questo forum';
$lang['RULES_DELETE_CAN'] = 'Si <b>can</b> cancellare i tuoi messaggi in questo forum';
$lang['RULES_DELETE_CANNOT'] = 'Si <b>cannot</b> cancellare i tuoi messaggi in questo forum';
$lang['RULES_VOTE_CAN'] = 'Si <b>can</b> votare nei sondaggi in questo forum';
$lang['RULES_VOTE_CANNOT'] = 'Si <b>cannot</b> votare nei sondaggi in questo forum';
$lang['RULES_MODERATE'] = 'Si <b>can</b> moderare questo forum';

$lang['NO_TOPICS_POST_ONE'] = 'Non ci sono messaggi in questo forum.<br />Clicca sull\'icona <b>Nuovo Topic</b>, e il tuo messaggio sarà il primo.';
$lang['NO_RELEASES_POST_ONE'] = 'Non ci sono uscite in questo forum.<br />Clicca sull\'icona <b>Nuovo Rilascio</b>, e il tuo rilascio sarà il primo.';

// Viewtopic
$lang['VIEW_TOPIC'] = 'Visualizza argomento';

$lang['GUEST'] = 'Ospite';
$lang['POST_SUBJECT'] = 'Post subject';
$lang['SUBMIT_VOTE'] = 'Invia il voto';

$lang['NO_NEWER_TOPICS'] = 'Non ci sono nuovi argomenti in questo forum';
$lang['NO_OLDER_TOPICS'] = 'Non ci sono più vecchi argomenti in questo forum';
$lang['TOPIC_POST_NOT_EXIST'] = 'Il topic o post che hai richiesto non esiste';
$lang['NO_POSTS_TOPIC'] = 'Non ci sono messaggi in questo topic';

$lang['DISPLAY_POSTS'] = 'Visualizzazione post';
$lang['ALL_POSTS'] = 'Tutti I Post';
$lang['NEWEST_FIRST'] = 'Più Recente';
$lang['OLDEST_FIRST'] = 'Prima I Più Vecchi';

$lang['READ_PROFILE'] = 'Visualizzazione profilo utente';
$lang['DELETE_POST'] = 'Eliminare questo post';

$lang['WROTE'] = 'scritto'; // proceeds the username and is followed by the quoted text
$lang['QUOTE'] = 'Citazione'; // comes before bbcode quote output
$lang['CODE'] = 'Codice'; // comes before bbcode code output
$lang['SPOILER_HEAD'] = 'il testo nascosto';
$lang['SPOILER_CLOSE'] = 'girare';
$lang['PLAY_ON_CURPAGE'] = 'Inizia a giocare nella pagina corrente';

$lang['EDITED_TIME_TOTAL'] = 'Ultima modifica di <b>%s</b> su %s; a cura %d volta in totale'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['EDITED_TIMES_TOTAL'] = 'Ultima modifica di <b>%s</b> su %s; a cura %d volte in totale'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['LOCK_TOPIC'] = 'Blocco il topic';
$lang['UNLOCK_TOPIC'] = 'Sbloccare l\'argomento';
$lang['MOVE_TOPIC'] = 'Spostare l\'argomento';
$lang['DELETE_TOPIC'] = 'Eliminare l\'argomento';
$lang['SPLIT_TOPIC'] = 'Dividere l\'argomento';

$lang['STOP_WATCHING_TOPIC'] = 'Smettere di seguire l\'argomento';
$lang['START_WATCHING_TOPIC'] = 'Seguire il topic per le risposte';
$lang['NO_LONGER_WATCHING'] = 'Si sono più che seguendo questo argomento';
$lang['YOU_ARE_WATCHING'] = 'Si sta seguendo questo argomento ora';

$lang['SEARCH_IN_TOPIC'] = 'di ricerca in argomento...';
$lang['HIDE_IN_TOPIC'] = 'Nascondi';

$lang['SHOW'] = 'Mostra';
$lang['AVATARS'] = 'Avatar';
$lang['RANK_IMAGES'] = 'Rank immagini';
$lang['POST_IMAGES'] = 'Post immagini';
$lang['SIGNATURES'] = 'Firme';
$lang['SPOILER'] = 'Spoiler';
$lang['SHOW_OPENED'] = 'Spettacolo aperto';
$lang['DOWNLOAD_PIC'] = 'Immagini da scaricare';

$lang['MODERATE_TOPIC'] = 'Moderato questo argomento';
$lang['SELECT_POSTS_PER_PAGE'] = 'messaggi per pagina';

// Posting/Replying (Not private messaging!)
$lang['TOPIC_REVIEW'] = 'Argomento recensione';

$lang['NO_POST_MODE'] = 'Nessun post selezionata la modalità di'; // If posting.php is called without a mode (newtopic/reply/delete/etc., shouldn't be shown normally)

$lang['POST_A_NEW_TOPIC'] = 'Post new topic';
$lang['POST_A_REPLY'] = 'Nuovo Post reply';
$lang['POST_TOPIC_AS'] = 'Post argomento';
$lang['EDIT_POST'] = 'Modifica post';
$lang['EDIT_TOPIC_TITLE'] = 'Modifica il titolo del topic';

$lang['DONT_MESSAGE_TITLE'] = 'Si dovrebbe specificare titolo del messaggio';
$lang['INVALID_TOPIC_ID'] = 'Argomento Assenti!';
$lang['INVALID_TOPIC_ID_DB'] = 'Argomento non esiste nel database!!!';

$lang['NOT_POST'] = 'Assenti Messaggio';
$lang['NOT_EDIT_TOR_STATUS'] = 'Non è possibile modificare le release con lo stato';

$lang['OPTIONS'] = 'Opzioni';

$lang['POST_ANNOUNCEMENT'] = 'Annuncio';
$lang['POST_STICKY'] = 'Appiccicoso';
$lang['POST_NORMAL'] = 'Normale';
$lang['POST_DOWNLOAD'] = 'Download';

$lang['PRINT_PAGE'] = 'Print page';

$lang['CONFIRM_DELETE'] = 'Sei sicuro di voler cancellare questo post?';
$lang['CONFIRM_DELETE_POLL'] = 'Sei sicuro di voler eliminare questo sondaggio?';

$lang['FLOOD_ERROR'] = 'Non è possibile fare un altro post così presto dopo il vostro ultimo; si prega di riprovare in breve tempo';
$lang['EMPTY_SUBJECT'] = 'È necessario specificare un oggetto';
$lang['EMPTY_MESSAGE'] = 'È necessario inserire un messaggio';
$lang['FORUM_LOCKED'] = 'Il forum è bloccato';
$lang['TOPIC_LOCKED'] = 'L\'argomento è bloccato';
$lang['TOPIC_LOCKED_SHORT'] = 'Argomento bloccato';
$lang['NO_POST_ID'] = 'È necessario selezionare un post per modificare';
$lang['NO_TOPIC_ID'] = 'È necessario selezionare un argomento per la risposta';
$lang['NO_VALID_MODE'] = 'Si può solo inviare, rispondere, modificare, o citare i messaggi. Si prega di tornare e riprovare';
$lang['NO_SUCH_POST'] = 'Non c\'è nessun post. Si prega di tornare e riprovare';
$lang['EDIT_OWN_POSTS'] = 'Scusate, ma è possibile modificare solo i tuoi post';
$lang['DELETE_OWN_POSTS'] = 'Scusate, ma si può solo cancellare i tuoi messaggi';
$lang['CANNOT_DELETE_REPLIED'] = 'Ci dispiace, ma non si possono cancellare i post che hanno ricevuto risposta';
$lang['CANNOT_DELETE_POLL'] = 'Mi dispiace, ma non è possibile eliminare un sondaggio attivo';
$lang['EMPTY_POLL_TITLE'] = 'È necessario immettere un titolo per il sondaggio';
$lang['POST_HAS_NO_POLL'] = 'Questo post non ha nessun sondaggio';
$lang['ALREADY_VOTED'] = 'Hai già votato in questo sondaggio';
$lang['NO_VOTE_OPTION'] = 'È necessario specificare un\'opzione al momento del voto';
$lang['LOCKED_WARN'] = 'Hai postato nella bloccato argomento!';

$lang['ADD_POLL'] = 'Aggiungere un sondaggio';
$lang['POLL_OPTION'] = 'Sondaggio opzione';
$lang['UPDATE'] = 'Aggiornamento';
$lang['DAYS'] = 'Giorni';
$lang['DELETE_POLL'] = 'Eliminare sondaggio';

$lang['MAX_SMILIES_PER_POST'] = 'Emoticon limite di %s emoticon superato.';

$lang['NOTIFY'] = 'Avvisami quando ci sono risposte';
$lang['ALLOW_ROBOTS_INDEXING'] = 'Consenti ai robot di indicizzare questo argomento';

$lang['STORED'] = 'Il tuo messaggio è stato inserito correttamente.';
$lang['EDITED'] = 'Il messaggio è stato modificata';
$lang['DELETED'] = 'Il tuo messaggio è stato cancellato con successo.';
$lang['POLL_DELETE'] = 'Il sondaggio è stato eliminato con successo.';
$lang['VOTE_CAST'] = 'Il tuo voto è stato gettato.';

$lang['EMOTICONS'] = 'Emoticon';
$lang['MORE_EMOTICONS'] = 'Visualizza altre Emoticon';

$lang['COLOR_DARK_RED'] = 'Rosso Scuro';
$lang['COLOR_RED'] = 'Rosso';
$lang['COLOR_ORANGE'] = 'Arancione';
$lang['COLOR_BROWN'] = 'Marrone';
$lang['COLOR_GREEN'] = 'Verde';
$lang['COLOR_OLIVE'] = 'Oliva';
$lang['COLOR_BLUE'] = 'Blu';
$lang['COLOR_DARK_BLUE'] = 'Blu Scuro';
$lang['COLOR_INDIGO'] = 'Indigo';
$lang['COLOR_VIOLET'] = 'Viola';

$lang['FONT_SMALL'] = 'Piccolo';
$lang['FONT_NORMAL'] = 'Normale';
$lang['FONT_LARGE'] = 'Grande';
$lang['FONT_HUGE'] = 'Enorme';

$lang['NEW_POSTS_PREVIEW'] = 'Argomento nuovi, modificati o messaggi non letti';

// Private Messaging
$lang['PRIVATE_MESSAGING'] = 'Per I Messaggi Privati';

$lang['NO_NEW_PM'] = 'nessun nuovo messaggio';

$lang['NEW_PMS_FORMAT'] = '<b>%1$s</b> %2$s'; // 1 new message
$lang['NEW_PMS_DECLENSION'] = ['nuovo messaggio', 'nuovi messaggi'];

$lang['UNREAD_PMS_FORMAT'] = '<b>%1$s</b> %2$s'; // 1 new message
$lang['UNREAD_PMS_DECLENSION'] = ['da leggere', 'da leggere'];

$lang['UNREAD_MESSAGE'] = 'Messaggio non letto';
$lang['READ_MESSAGE'] = 'Lettura di un messaggio';

$lang['READ_PM'] = 'Lettura di un messaggio';
$lang['POST_NEW_PM'] = 'Post messaggio';
$lang['POST_REPLY_PM'] = 'Risposta al messaggio';
$lang['POST_QUOTE_PM'] = 'Citazione messaggio';
$lang['EDIT_PM'] = 'Modifica messaggio';

$lang['INBOX'] = 'Posta in arrivo';
$lang['OUTBOX'] = 'In uscita';
$lang['SAVEBOX'] = 'Finestra';
$lang['SENTBOX'] = 'Sentbox';
$lang['FLAG'] = 'Bandiera';
$lang['SUBJECT'] = 'Soggetto';
$lang['FROM'] = 'Da';
$lang['TO'] = 'Per';
$lang['DATE'] = 'Data';
$lang['MARK'] = 'Mark';
$lang['SENT'] = 'Inviato';
$lang['SAVED'] = 'Salvato';
$lang['DELETE_MARKED'] = 'Elimina Segnati';
$lang['DELETE_ALL'] = 'Eliminare Tutti';
$lang['SAVE_MARKED'] = 'Salvare Segnato';
$lang['SAVE_MESSAGE'] = 'Per Salvare I Messaggi';
$lang['DELETE_MESSAGE'] = 'Elimina Messaggio';

$lang['DISPLAY_MESSAGES'] = 'Visualizzare i messaggi'; // Followed by number of days/weeks/months

$lang['NO_MESSAGES_FOLDER'] = 'Non ci sono messaggi in questa cartella';

$lang['PM_DISABLED'] = 'La messaggistica privata è stata disattivata su questo forum.';
$lang['CANNOT_SEND_PRIVMSG'] = 'Mi dispiace, ma l\'amministratore ha impedito di inviare messaggi privati.';
$lang['NO_TO_USER'] = 'È necessario specificare un nome utente a cui inviare il messaggio.';
$lang['NO_SUCH_USER'] = 'Mi dispiace, ma l\'utente non esiste.';

$lang['MESSAGE_SENT'] = '<b>Your messaggio è stato inviato.</b>';

$lang['CLICK_RETURN_INBOX'] = 'Tornare al:<br /><br /> %s<b>Inbox</b>%s';
$lang['CLICK_RETURN_SENTBOX'] = '&nbsp;&nbsp; %s<b>Sentbox</b>%s';
$lang['CLICK_RETURN_OUTBOX'] = '&nbsp;&nbsp; %s<b>Outbox</b>%s';
$lang['CLICK_RETURN_SAVEBOX'] = '&nbsp;&nbsp; %s<b>Savebox</b>%s';
$lang['CLICK_RETURN_INDEX'] = '%sReturn per il Index%s';

$lang['SEND_A_NEW_MESSAGE'] = 'Inviare un nuovo messaggio privato';
$lang['SEND_A_REPLY'] = 'Rispondere a un messaggio privato';
$lang['EDIT_MESSAGE'] = 'Modifica messaggio privato';

$lang['FIND_USERNAME'] = 'Trovare un nome di utente';
$lang['SELECT_USERNAME'] = 'Selezionare un nome utente';
$lang['FIND'] = 'Trovare';
$lang['NO_MATCH'] = 'Nessuna corrispondenza trovata.';

$lang['NO_PM_ID'] = 'Si prega di specificare post ID';
$lang['NO_SUCH_FOLDER'] = 'Cartella non è stato trovato';

$lang['MARK_ALL'] = 'Contrassegnare tutti';
$lang['UNMARK_ALL'] = 'Deselezionare tutti';

$lang['CONFIRM_DELETE_PM'] = 'Sei sicuro di voler eliminare questo messaggio?';
$lang['CONFIRM_DELETE_PMS'] = 'Sei sicuro di voler eliminare questi messaggi?';

$lang['INBOX_SIZE'] = 'La tua casella di Posta is<br /><b>%d%%</b> completo'; // e.g. Your Inbox is 50% full
$lang['SENTBOX_SIZE'] = 'Il Sentbox is<br /><b>%d%%</b> completo';
$lang['SAVEBOX_SIZE'] = 'La tua Finestra is<br /><b>%d%%</b> completo';

$lang['OUTBOX_EXPL'] = '';

// Profiles/Registration
$lang['VIEWING_USER_PROFILE'] = 'Visualizzazione profilo :: %s';
$lang['VIEWING_MY_PROFILE'] = 'Il mio profilo [ <a href="%s">Settings / Modifica profile</a> ]';

$lang['DISABLED_USER'] = 'Account disattivato';
$lang['MANAGE_USER'] = 'Amministrazione';

$lang['PREFERENCES'] = 'Preferenze';
$lang['ITEMS_REQUIRED'] = 'Gli elementi contrassegnati con * sono obbligatori se non diversamente indicato.';
$lang['REGISTRATION_INFO'] = 'Informazioni Di Registrazione';
$lang['PROFILE_INFO'] = 'Informazioni Del Profilo';
$lang['AVATAR_PANEL'] = 'Avatar pannello di controllo';

$lang['WEBSITE'] = 'Sito web';
$lang['LOCATION'] = 'Posizione';
$lang['CONTACT'] = 'Contatto';
$lang['EMAIL_ADDRESS'] = 'E-mail';
$lang['SEND_PRIVATE_MESSAGE'] = 'Invia messaggio privato';
$lang['INTERESTS'] = 'Interessi';
$lang['OCCUPATION'] = 'Occupazione';
$lang['POSTER_RANK'] = 'Poster rank';
$lang['AWARDED_RANK'] = 'Assegnato il rank';
$lang['SHOT_RANK'] = 'Colpo di rango';

$lang['TOTAL_POSTS'] = 'Totale messaggi';
$lang['SEARCH_USER_POSTS'] = 'Trovare i post'; // Find all posts by username
$lang['SEARCH_USER_POSTS_SHORT'] = 'Trovare i messaggi dell\'utente';
$lang['SEARCH_USER_TOPICS'] = 'Trovare argomenti utente'; // Find all topics by username

$lang['NO_USER_ID_SPECIFIED'] = 'Scusa, ma che l\'utente non esiste.';
$lang['NO_SEND_ACCOUNT_INACTIVE'] = 'Mi dispiace, ma la tua password non può essere recuperata, perché il tuo account è attualmente inattiva';
$lang['NO_SEND_ACCOUNT'] = 'Mi dispiace, ma la tua password non può essere recuperata. Si prega di contattare l\'amministratore del forum per maggiori informazioni';

$lang['HIDE_PORN_FORUMS'] = 'Nascondere i contenuti 18+';
$lang['ADD_RETRACKER'] = 'Aggiungere retracker in file torrent';
$lang['ALWAYS_NOTIFY'] = 'Sempre notifica le risposte';
$lang['ALWAYS_NOTIFY_EXPLAIN'] = 'Invia un messaggio e-mail quando qualcuno risponde ad un topic che hai pubblicato. Questo può essere cambiato ogni volta che si posta.';

$lang['BOARD_LANG'] = 'Consiglio di lingua';
$lang['GENDER'] = 'Sesso';
$lang['GENDER_SELECT'] = [
    0 => 'Sconosciuto',
    1 => 'Maschio',
    2 => 'Femmina'
];
$lang['MODULE_OFF'] = 'Il modulo è disattivato!';

$lang['BIRTHDAY'] = 'Compleanno';
$lang['HAPPY_BIRTHDAY'] = 'Buon Compleanno!';
$lang['WRONG_BIRTHDAY_FORMAT'] = 'Il compleanno di formato è stato immesso in modo non corretto.';
$lang['AGE'] = 'Age';
$lang['BIRTHDAY_TO_HIGH'] = 'Mi dispiace, questo sito non accetta utenti con più di %d anni';
$lang['BIRTHDAY_TO_LOW'] = 'Mi dispiace, questo sito non accetta utenti con meno di %d anni';
$lang['BIRTHDAY_TODAY'] = 'Gli utenti con un compleanno oggi: ';
$lang['BIRTHDAY_WEEK'] = 'Gli utenti con un compleanno entro il prossimo %d giorni: %s';
$lang['NOBIRTHDAY_WEEK'] = 'Gli utenti non stanno avendo un compleanno nei prossimi giorni %d'; // %d is substituted with the number of days
$lang['NOBIRTHDAY_TODAY'] = 'Nessun utente ha un compleanno oggi';
$lang['BIRTHDAY_ENABLE'] = 'Attivare compleanno';
$lang['BIRTHDAY_MAX_AGE'] = 'Età Max';
$lang['BIRTHDAY_MIN_AGE'] = 'Età Min';
$lang['BIRTHDAY_CHECK_DAY'] = 'Giorni per controllare i prossimi compleanni';
$lang['YEARS'] = 'Anni';

$lang['TIMEZONE'] = 'Fuso orario';
$lang['DATE_FORMAT_EXPLAIN'] = 'La sintassi utilizzata è identica a quella di PHP <a href=\'https://www.php.net/manual/en/function.date.php\' target=\'_other\'>date()</a> funzione.';
$lang['SIGNATURE'] = 'Firma';
$lang['SIGNATURE_EXPLAIN'] = 'Questo è un blocco di testo che può essere aggiunto al post che si fanno. C\'è un %d limite di caratteri';
$lang['SIGNATURE_DISABLE'] = 'Ha firmato per la violazione delle regole del forum';
$lang['PUBLIC_VIEW_EMAIL'] = 'Visualizza indirizzo e-mail nel mio profilo';

$lang['EMAIL_EXPLAIN'] = 'A questo indirizzo verrà inviata per completare la registrazione';

$lang['CURRENT_PASSWORD'] = 'Password attuale';
$lang['NEW_PASSWORD'] = 'Nuova password';
$lang['CONFIRM_PASSWORD'] = 'Conferma password';
$lang['CONFIRM_PASSWORD_EXPLAIN'] = 'È necessario confermare la password corrente se si desidera cambiare o modificare il tuo indirizzo di posta elettronica';
$lang['PASSWORD_IF_CHANGED'] = 'Hai solo bisogno di fornire una password se si desidera modificare';
$lang['PASSWORD_CONFIRM_IF_CHANGED'] = 'Hai solo bisogno di confermare la password se l\'hai cambiata sopra';

$lang['AUTOLOGIN'] = 'Autologin';
$lang['RESET_AUTOLOGIN'] = 'Reset autologin chiave';
$lang['RESET_AUTOLOGIN_EXPL'] = 'tra tutti i posti che hai visitato il forum abilitato il login automatico';

$lang['AVATAR'] = 'Avatar';
$lang['AVATAR_EXPLAIN'] = 'Visualizza un\'immagine grafica piccola sotto i tuoi dettagli nei messaggi. Può essere visualizzata solo un\'immagine alla volta, la sua larghezza non può superare i %d pixel, l\'altezza non può superare i %d pixel e la dimensione del file non può essere superiore a %s.';
$lang['AVATAR_DELETE'] = 'Eliminare avatar';
$lang['AVATAR_DISABLE'] = 'Avatar di controllo opzione è disabilitata per violazione <a href="%s"><b>forum rules</b></a>';
$lang['UPLOAD_AVATAR_FILE'] = 'Upload avatar';
$lang['RETURN_PROFILE'] = 'Tornare al profilo';
$lang['DELETE_IMAGE'] = 'Elimina immagine';
$lang['SET_MONSTERID_AVATAR'] = 'Imposta l\'avatar di MonsterID';

$lang['NOTIFY_ON_PRIVMSG'] = 'Informare su nuovo messaggio privato';
$lang['HIDE_USER'] = 'Nascondi il tuo stato online';
$lang['HIDDEN_USER'] = 'Utente nascosto';

$lang['PROFILE_UPDATED'] = 'Il tuo profilo è stato aggiornato';
$lang['PROFILE_UPDATED_INACTIVE'] = 'Il tuo profilo è stato aggiornato. Tuttavia, avete cambiato importanti dettagli, così il tuo account è inattivo ora. Controlla la tua e-mail per sapere come riattivare il tuo account, o se l\'amministratore è necessaria l\'attivazione, attendere che l\'amministratore per riattivarlo.';

$lang['PASSWORD_LONG'] = 'La tua password deve essere lunga al massimo %d caratteri e almeno %d caratteri. ';
$lang['USERNAME_TAKEN'] = 'Mi dispiace, ma questo nome utente è già stato preso.';
$lang['USERNAME_INVALID'] = 'Mi dispiace, ma questo nome utente contiene un carattere non valido';
$lang['USERNAME_DISALLOWED'] = 'Mi dispiace, ma questo nome utente non è stata consentita.';
$lang['USERNAME_TOO_LONG'] = 'Il tuo nome è troppo lungo.';
$lang['USERNAME_TOO_SMALL'] = 'Il tuo nome è troppo piccolo.';
$lang['EMAIL_TAKEN'] = 'Spiacenti, ma l\'indirizzo di posta elettronica è già registrato con un utente.';
$lang['EMAIL_INVALID'] = 'Mi dispiace, ma questa e-mail non è valido.';
$lang['EMAIL_TOO_LONG'] = 'La tua email è troppo lungo.';
$lang['SIGNATURE_TOO_LONG'] = 'La tua firma è troppo lunga.';
$lang['SIGNATURE_ERROR_HTML'] = 'La firma può contenere solo il BBCode';
$lang['FIELDS_EMPTY'] = 'È necessario compilare i campi richiesti.';

$lang['WELCOME_SUBJECT'] = 'Benvenuti a %s Forum';

$lang['ACCOUNT_ADDED'] = 'Grazie per la registrazione. Il tuo account è stato creato. Ora puoi effettuare il log in con il tuo nome utente e la password';
$lang['ACCOUNT_INACTIVE'] = 'Il tuo account è stato creato. Tuttavia, questo forum richiede l\'attivazione dell\'account. Una chiave di attivazione è stato inviato all\'indirizzo e-mail fornito. Si prega di controllare la tua e-mail per ulteriori informazioni';
$lang['ACCOUNT_ACTIVE'] = 'Il tuo account è stato appena attivato. Grazie per esserti registrato';
$lang['ALREADY_ACTIVATED'] = 'Hai già attivato il tuo account';

$lang['REGISTRATION'] = 'Contratto Di Registrazione In Termini';

$lang['WRONG_ACTIVATION'] = 'La chiave di attivazione che hai fornito non corrisponde a nessuno nel database.';
$lang['SEND_PASSWORD'] = 'Mi invia una nuova password';
$lang['PASSWORD_UPDATED'] = 'Una nuova password è stata creata; si prega di controllare la tua e-mail per i dettagli su come attivarlo.';
$lang['NO_EMAIL_MATCH'] = 'L\'e-mail che hai fornito non corrisponde a quello elencato per il nome utente.';
$lang['PASSWORD_ACTIVATED'] = 'Il tuo account è stato riattivato. Per il log in, si prega di utilizzare la password forniti nella e-mail che hai ricevuto.';

$lang['SEND_EMAIL_MSG'] = 'Invia un messaggio e-mail';
$lang['NO_USER_SPECIFIED'] = 'Nessun utente specificato';
$lang['USER_NOT_EXIST'] = 'Che l\'utente non esiste';
$lang['EMAIL_MESSAGE_DESC'] = 'Questo messaggio verrà inviato come testo normale, in modo da non includere HTML o BBCode. L\'indirizzo di ritorno per questo messaggio verrà impostato il tuo indirizzo di posta elettronica.';
$lang['RECIPIENT'] = 'Destinatario';
$lang['EMAIL_SENT'] = 'L\'e-mail è stata inviata.';
$lang['SEND_EMAIL'] = 'Invia e-mail';
$lang['EMPTY_SUBJECT_EMAIL'] = 'È necessario specificare l\'oggetto dell\'e-mail.';
$lang['EMPTY_MESSAGE_EMAIL'] = 'È necessario immettere un messaggio per e-mail.';

$lang['USER_AGREEMENT'] = 'Accordo per gli utenti';
$lang['USER_AGREEMENT_HEAD'] = 'Per procedere devi accettare le seguenti regole';
$lang['USER_AGREEMENT_AGREE'] = 'Ho letto e accettato il contratto con l\'Utente di sopra';

$lang['COPYRIGHT_HOLDERS'] = 'Per i possessori di copyright';
$lang['ADVERT'] = 'Pubblicità su questo sito';
$lang['NOT_FOUND'] = 'File non trovato';

// Memberslist
$lang['SORT'] = 'Ordinamento';
$lang['SORT_TOP_TEN'] = 'Top Ten Poster';
$lang['SORT_JOINED'] = 'Entrato In Data';
$lang['SORT_USERNAME'] = 'Username';
$lang['SORT_LOCATION'] = 'Posizione';
$lang['SORT_POSTS'] = 'Totale messaggi';
$lang['SORT_EMAIL'] = 'Email';
$lang['SORT_WEBSITE'] = 'Sito web';
$lang['ASC'] = 'Ascendente';
$lang['DESC'] = 'Discendente';
$lang['ORDER'] = 'Ordine';

// Thanks
$lang['THANK_TOPIC'] = 'Vota per questo argomento';
$lang['THANKS_GRATITUDE'] = 'Apprezziamo la tua gratitudine';
$lang['LAST_LIKES'] = 'Ultimi voti';
$lang['LIKE_OWN_POST'] = 'Non puoi votare per il tuo stesso argomento';
$lang['NO_LIKES'] = 'Nessuno ha ancora votato';
$lang['LIKE_ALREADY'] = 'Hai già votato questo argomento';

// Invites
$lang['INVITE_CODE'] = 'Codice di invito';
$lang['INCORRECT_INVITE'] = 'Invito non trovato';
$lang['INVITE_EXPIRED'] = 'Invito scaduto';

// Group control panel
$lang['GROUP_CONTROL_PANEL'] = 'Gruppi Di Utenti';
$lang['GROUP_CONFIGURATION'] = 'Configurazione Di Un Gruppo Di';
$lang['GROUP_GOTO_CONFIG'] = 'Gruppo o in un pannello di Configurazione';
$lang['GROUP_RETURN'] = 'Tornare alla pagina Gruppo Utenti';
$lang['MEMBERSHIP_DETAILS'] = 'Gruppo Di Appartenenza Dettagli';
$lang['JOIN_A_GROUP'] = 'Unirsi a un Gruppo di';

$lang['GROUP_INFORMATION'] = 'Informazioni Gruppo';
$lang['GROUP_NAME'] = 'Il nome del gruppo';
$lang['GROUP_DESCRIPTION'] = 'Descrizione del gruppo';
$lang['GROUP_SIGNATURE'] = 'Gruppo firma';
$lang['GROUP_MEMBERSHIP'] = 'Gruppo di appartenenza';
$lang['GROUP_MEMBERS'] = 'I Membri Del Gruppo';
$lang['GROUP_MODERATOR'] = 'Moderatore Del Gruppo';
$lang['PENDING_MEMBERS'] = 'In Attesa Di Membri';

$lang['GROUP_TIME'] = 'Creato';
$lang['RELEASE_GROUP'] = 'Gruppo Di Rilascio';

$lang['GROUP_TYPE'] = 'Tipo di gruppo';
$lang['GROUP_OPEN'] = 'Gruppo aperto';
$lang['GROUP_CLOSED'] = 'Gruppo chiuso';
$lang['GROUP_HIDDEN'] = 'Gruppo nascosto';

$lang['GROUP_MEMBER_MOD'] = 'Moderatore del gruppo';
$lang['GROUP_MEMBER_MEMBER'] = 'Corrente di appartenenza';
$lang['GROUP_MEMBER_PENDING'] = 'In attesa di appartenenza';
$lang['GROUP_MEMBER_OPEN'] = 'Gruppi aperti';
$lang['GROUP_MEMBER_CLOSED'] = 'Gruppi chiusi';
$lang['GROUP_MEMBER_HIDDEN'] = 'I gruppi nascosti';

$lang['NO_GROUPS_EXIST'] = 'Non Sono Presenti Gruppi';
$lang['GROUP_NOT_EXIST'] = 'L\'utente non esiste un gruppo di';
$lang['NO_GROUP_ID_SPECIFIED'] = 'ID del gruppo non è specificato';

$lang['NO_GROUP_MEMBERS'] = 'Questo gruppo non ha membri';
$lang['HIDDEN_GROUP_MEMBERS'] = 'Questo gruppo è nascosto; non è possibile vista la sua appartenenza';
$lang['NO_PENDING_GROUP_MEMBERS'] = 'Questo gruppo non ha in sospeso membri';
$lang['GROUP_JOINED'] = 'Hai correttamente iscritto a questo gruppo.<br />You riceveranno notifica quando il tuo abbonamento è approvato dal moderatore del gruppo.';
$lang['GROUP_REQUEST'] = 'Una richiesta di unirsi al vostro gruppo è stato fatto.';
$lang['GROUP_APPROVED'] = 'La tua richiesta è stata approvata.';
$lang['GROUP_ADDED'] = 'Si sono stati aggiunti a questo gruppo.';
$lang['ALREADY_MEMBER_GROUP'] = 'Sei già un membro di questo gruppo';
$lang['USER_IS_MEMBER_GROUP'] = '%s è già un membro di questo gruppo';
$lang['USER_IS_MOD_GROUP'] = '%s è un moderatore di questo gruppo';
$lang['EFFECTIVE_DATE'] = 'Data Di Efficacia';
$lang['COULD_NOT_ADD_USER'] = 'L\'utente selezionato non esiste.';
$lang['UNSUB_SUCCESS'] = 'Sei stato cancellato da questo gruppo.';

$lang['APPROVE_SELECTED'] = 'Approvare Selezionato';
$lang['DENY_SELECTED'] = 'Negare Selezionato';
$lang['REMOVE_SELECTED'] = 'Rimuovi Selezionati';
$lang['ADD_MEMBER'] = 'Aggiungi Membro';
$lang['NOT_GROUP_MODERATOR'] = 'Non siete questo gruppo moderatore, quindi non è possibile eseguire l\'azione.';

$lang['LOGIN_TO_JOIN'] = 'Log in join o gestire le appartenenze ai gruppi';
$lang['THIS_OPEN_GROUP'] = 'Questo è un gruppo aperto: clicca per inviare una richiesta di iscrizione';
$lang['THIS_CLOSED_GROUP'] = 'Questo è un gruppo chiuso: non più gli utenti accettato';
$lang['THIS_HIDDEN_GROUP'] = 'Questo è un gruppo nascosto: automatico utente inoltre non è consentito';
$lang['MEMBER_THIS_GROUP'] = 'Sei un membro di questo gruppo';
$lang['PENDING_THIS_GROUP'] = 'La tua iscrizione a questo gruppo è in attesa di';
$lang['ARE_GROUP_MODERATOR'] = 'Tu sei il moderatore del gruppo';
$lang['NONE'] = 'Nessuno';

$lang['SUBSCRIBE'] = 'Iscriviti';
$lang['UNSUBSCRIBE_GROUP'] = 'Cancellarsi';
$lang['MEMBERS_IN_GROUP'] = 'I membri del gruppo';

// Release Groups
$lang['POST_RELEASE_FROM_GROUP'] = 'Post rilascio dal gruppo';
$lang['CHOOSE_RELEASE_GROUP'] = 'non selezionato';
$lang['ATTACH_RG_SIG'] = 'collegare il rilascio di firma di gruppo';
$lang['RELEASE_FROM_RG'] = 'Il rilascio è stato preparato da';
$lang['GROUPS_RELEASES'] = 'Gruppo versioni';
$lang['MORE_RELEASES'] = 'Trova tutte le versioni del gruppo';
$lang['NOT_A_RELEASE_GROUP'] = 'Questo gruppo non è un gruppo di rilascio';

// Search
$lang['SEARCH_HELP_URL'] = 'La Ricerca Di Aiuto';
$lang['SEARCH_QUERY'] = 'Query Di Ricerca';
$lang['SEARCH_OPTIONS'] = 'Opzioni Di Ricerca';

$lang['SEARCH_WORDS'] = 'Ricerca per parole chiave';
$lang['SEARCH_WORDS_EXPL'] = 'È possibile utilizzare <b>+</b> per definire le parole che devono essere nel risultati e <b>-</b> per definire le parole che non devono essere nel risultato (es: "+word1 -parola2"). Usare * come carattere jolly per le corrispondenze parziali';
$lang['SEARCH_AUTHOR'] = 'Ricerca per Autore';
$lang['SEARCH_AUTHOR_EXPL'] = 'Usare * come carattere jolly per le corrispondenze parziali';

$lang['SEARCH_TITLES_ONLY'] = 'Argomento di ricerca solo per i titoli';
$lang['SEARCH_ALL_WORDS'] = 'tutte le parole';
$lang['IN_MY_POSTS'] = 'Nei miei post';
$lang['SEARCH_MY_TOPICS'] = 'nella mia argomenti';
$lang['NEW_TOPICS'] = 'Nuovi argomenti';

$lang['SEARCH_PREVIOUS'] = 'La ricerca precedente';

$lang['SORT_BY'] = 'Ordina per';
$lang['SORT_TIME'] = 'Il Tempo Di Post';
$lang['SORT_TOPIC_TITLE'] = 'Titolo Del Topic';

$lang['DISPLAY_RESULTS_AS'] = 'Visualizza i risultati come';
$lang['ALL_AVAILABLE'] = 'Tutti disponibili';
$lang['BRIEFLY'] = 'Brevemente';
$lang['NO_SEARCHABLE_FORUMS'] = 'Non si dispone di autorizzazioni per la ricerca di qualsiasi forum su questo sito.';

$lang['NO_SEARCH_MATCH'] = 'Senza argomenti o messaggi incontrato i tuoi criteri di ricerca';
$lang['FOUND_SEARCH_MATCH'] = 'La ricerca ha trovato %d partita'; // e.g. Search found 1 match
$lang['FOUND_SEARCH_MATCHES'] = 'La ricerca ha trovato %d partite'; // e.g. Search found 24 matches

$lang['CLOSE_WINDOW'] = 'Chiudi La Finestra';
$lang['CLOSE'] = 'vicino';
$lang['HIDE'] = 'nascondi';

// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
$lang['SORRY_AUTH_VIEW'] = 'Spiacente, ma solo %s possibile visualizzare questo forum.';
$lang['SORRY_AUTH_READ'] = 'Spiacente, ma solo %s possono leggere gli argomenti in questo forum.';
$lang['SORRY_AUTH_REPLY'] = 'Spiacente, ma solo %s può rispondere ad altri post in questo forum.';
$lang['SORRY_AUTH_EDIT'] = 'Spiacente, ma solo %s possibile modificare i post in questo forum.';
$lang['SORRY_AUTH_DELETE'] = 'Spiacente, ma solo %s possono cancellare i post in questo forum.';

// These replace the %s in the above strings
$lang['AUTH_ANONYMOUS_USERS'] = '<b>anonymous users</b>';
$lang['AUTH_REGISTERED_USERS'] = '<b>registered users</b>';
$lang['AUTH_USERS_GRANTED_ACCESS'] = '<b>users concesso speciale access</b>';
$lang['AUTH_MODERATORS'] = '<b>moderators</b>';
$lang['AUTH_ADMINISTRATORS'] = '<b>administrators</b>';

$lang['NOT_MODERATOR'] = 'Non sono un moderatore di questo forum.';
$lang['NOT_AUTHORISED'] = 'Non Autorizzato';

$lang['YOU_BEEN_BANNED'] = 'Sei stato bandito da questo forum. Per ulteriori informazioni, contattare l\'amministratore del consiglio.';

// Viewonline
$lang['ONLINE_EXPLAIN'] = 'utenti attivi negli ultimi cinque minuti';
$lang['LAST_UPDATED'] = 'Ultimo Aggiornamento';

// Moderator Control Panel
$lang['MOD_CP'] = 'Moderatore Pannello Di Controllo';
$lang['SELECT'] = 'Selezionare';
$lang['DELETE'] = 'Eliminare';
$lang['MOVE'] = 'Spostare';
$lang['LOCK'] = 'Blocco';
$lang['UNLOCK'] = 'Sbloccare';

$lang['TOPICS_REMOVED'] = 'Gli argomenti selezionati sono stato rimosso dal database.';
$lang['NO_TOPICS_REMOVED'] = 'Argomenti non sono stati rimossi.';
$lang['TOPICS_LOCKED'] = 'Gli argomenti selezionati sono stati bloccati.';
$lang['TOPICS_MOVED'] = 'Gli argomenti selezionati sono stati spostati.';
$lang['TOPICS_UNLOCKED'] = 'Gli argomenti selezionati sono stati sbloccati.';
$lang['NO_TOPICS_MOVED'] = 'Argomenti non sono stati spostati.';

$lang['CONFIRM_DELETE_TOPIC'] = 'Sei sicuro di voler rimuovere l\'argomento selezionato/s?';
$lang['CONFIRM_MOVE_TOPIC'] = 'Sei sicuro di voler spostare l\'argomento selezionato/s?';

$lang['MOVE_TO_FORUM'] = 'Spostare al forum';
$lang['LEAVE_SHADOW_TOPIC'] = 'Lasciare ombra topic nel vecchio forum.';

$lang['SPLIT_TOPIC_EXPLAIN'] = 'Utilizzando il seguente modulo è possibile dividere un argomento in due, selezionando il post singolarmente o dividendo a un selezionato post';
$lang['NEW_TOPIC_TITLE'] = 'Nuovo titolo del topic';
$lang['FORUM_FOR_NEW_TOPIC'] = 'Forum nuovo topic';
$lang['SPLIT_POSTS'] = 'Split selezionato post';
$lang['SPLIT_AFTER'] = 'Split selezionato post';
$lang['TOPIC_SPLIT'] = 'L\'argomento è stato diviso con successo';
$lang['NONE_SELECTED'] = 'Ne avete selezionato per eseguire questa operazione. Si prega di tornare indietro e selezionare almeno una.';

$lang['THIS_POSTS_IP'] = 'Indirizzo IP per questo post';
$lang['OTHER_IP_THIS_USER'] = 'Altri indirizzi IP di questo utente ha postato da';
$lang['USERS_THIS_IP'] = 'Utenti che postano da questo indirizzo IP';
$lang['IP_INFO'] = 'Informazioni IP';
$lang['LOOKUP_IP'] = 'Cercare indirizzo IP';

// Timezones ... for display on each page
$lang['ALL_TIMES'] = 'Tutti gli orari sono <span class="tz_time">%s</span>'; // This is followed by UTC and the timezone offset

// These are displayed in the timezone select box
$lang['TZ']['-12'] = 'UTC - 12';
$lang['TZ']['-11'] = 'UTC - 11';
$lang['TZ']['-10'] = 'UTC - 10';
$lang['TZ']['-9'] = 'UTC - 9';
$lang['TZ']['-8'] = 'UTC - 8';
$lang['TZ']['-7'] = 'UTC - 7';
$lang['TZ']['-6'] = 'UTC - 6';
$lang['TZ']['-5'] = 'UTC - 5';
$lang['TZ']['-4'] = 'UTC - 4';
$lang['TZ']['-3.5'] = 'UTC - 3.5';
$lang['TZ']['-3'] = 'UTC - 3';
$lang['TZ']['-2'] = 'UTC - 2';
$lang['TZ']['-1'] = 'UTC - 1';
$lang['TZ']['0'] = 'UTC ± 0';
$lang['TZ']['1'] = 'UTC + 1';
$lang['TZ']['2'] = 'UTC + 2';
$lang['TZ']['3'] = 'UTC + 3';
$lang['TZ']['3.5'] = 'UTC + 3.5';
$lang['TZ']['4'] = 'UTC + 4';
$lang['TZ']['4.5'] = 'UTC + 4.5';
$lang['TZ']['5'] = 'UTC + 5';
$lang['TZ']['5.5'] = 'UTC + 5.5';
$lang['TZ']['6'] = 'UTC + 6';
$lang['TZ']['6.5'] = 'UTC + 6.5';
$lang['TZ']['7'] = 'UTC + 7';
$lang['TZ']['8'] = 'UTC + 8';
$lang['TZ']['9'] = 'UTC + 9';
$lang['TZ']['9.5'] = 'UTC + 9.5';
$lang['TZ']['10'] = 'UTC + 10';
$lang['TZ']['11'] = 'UTC + 11';
$lang['TZ']['12'] = 'UTC + 12';
$lang['TZ']['13'] = 'UTC + 13';

$lang['DATETIME']['TODAY'] = 'Oggi';
$lang['DATETIME']['YESTERDAY'] = 'Ieri';

$lang['DATETIME']['SUNDAY'] = 'Domenica';
$lang['DATETIME']['MONDAY'] = 'Lunedi';
$lang['DATETIME']['TUESDAY'] = 'Martedi';
$lang['DATETIME']['WEDNESDAY'] = 'Mercoledi';
$lang['DATETIME']['THURSDAY'] = 'Giovedi';
$lang['DATETIME']['FRIDAY'] = 'Venerdi';
$lang['DATETIME']['SATURDAY'] = 'Sabato';
$lang['DATETIME']['SUN'] = 'Sole';
$lang['DATETIME']['MON'] = 'Mon';
$lang['DATETIME']['TUE'] = 'Mar';
$lang['DATETIME']['WED'] = 'Mer';
$lang['DATETIME']['THU'] = 'Gio';
$lang['DATETIME']['FRI'] = 'Ven';
$lang['DATETIME']['SAT'] = 'Seduto';
$lang['DATETIME']['JANUARY'] = 'Gennaio';
$lang['DATETIME']['FEBRUARY'] = 'Febbraio';
$lang['DATETIME']['MARCH'] = 'Marzo';
$lang['DATETIME']['APRIL'] = 'Aprile';
$lang['DATETIME']['MAY'] = 'Può';
$lang['DATETIME']['JUNE'] = 'Giugno';
$lang['DATETIME']['JULY'] = 'Luglio';
$lang['DATETIME']['AUGUST'] = 'Agosto';
$lang['DATETIME']['SEPTEMBER'] = 'Settembre';
$lang['DATETIME']['OCTOBER'] = 'Ottobre';
$lang['DATETIME']['NOVEMBER'] = 'Novembre';
$lang['DATETIME']['DECEMBER'] = 'Dicembre';
$lang['DATETIME']['JAN'] = 'Jan';
$lang['DATETIME']['FEB'] = 'Febbraio';
$lang['DATETIME']['MAR'] = 'Mar';
$lang['DATETIME']['APR'] = 'Apr';
$lang['DATETIME']['JUN'] = 'Jun';
$lang['DATETIME']['JUL'] = 'Lug';
$lang['DATETIME']['AUG'] = 'Ago';
$lang['DATETIME']['SEP'] = 'Settembre';
$lang['DATETIME']['OCT'] = 'Oct';
$lang['DATETIME']['NOV'] = 'Nov';
$lang['DATETIME']['DEC'] = 'Dec';

// Country selector
$lang['COUNTRY'] = 'Paese';
$lang['SET_OWN_COUNTRY'] = 'Imposta il proprio paese (manuale)';

// Errors
$lang['INFORMATION'] = 'Informazioni';
$lang['ADMIN_REAUTHENTICATE'] = 'Per amministrare/moderato la scheda è necessario ri-autenticarsi.';

// Attachment Mod Main Language Variables
// Auth Related Entries
$lang['RULES_ATTACH_CAN'] = 'Si <b>can</b> allegare file in questo forum';
$lang['RULES_ATTACH_CANNOT'] = 'Si <b>cannot</b> allegare file in questo forum';
$lang['RULES_DOWNLOAD_CAN'] = 'Si <b>can</b> scaricare i file in questo forum';
$lang['RULES_DOWNLOAD_CANNOT'] = 'Si <b>cannot</b> scaricare i file in questo forum';
$lang['SORRY_AUTH_VIEW_ATTACH'] = 'Spiacenti ma non sono autorizzati a visualizzare o scaricare l\'Allegato';

// Viewtopic -> Display of Attachments
$lang['DESCRIPTION'] = 'Descrizione'; // used in Administration Panel too...
$lang['DOWNLOAD'] = 'Download'; // this Language Variable is defined in admin.php too, but we are unable to access it from the main Language File
$lang['FILESIZE'] = 'Dimensione del file';
$lang['EXTENSION_DISABLED_AFTER_POSTING'] = 'L\'estensione \'%s\' è stata disattivata da un amministratore della board, quindi questo allegato non è visualizzato.'; // used in Posts and PM's, replace %s with mime type

// Viewtopic -> Display of Attachments -> TorrServer integration
$lang['STREAM'] = 'Stream';
$lang['RESOLUTION'] = 'Risoluzione: <b>%s</b>';
$lang['CHANNELS'] = 'Canali: <b>%s</b>';
$lang['CHANNELS_LAYOUT'] = 'Layout dei canali: <b>%s</b>';
$lang['BITRATE'] = 'Bitrate: <b>%s</b>';
$lang['SAMPLE_RATE'] = 'Frequenza di campionamento: <b>%s</b>';
$lang['AUDIO_TRACK'] = 'Informazioni sulla traccia audio (%d):';
$lang['AUDIO_CODEC'] = 'Codec audio: <b title="%s">%s</b>';
$lang['VIDEO_CODEC'] = 'Codec video: <b title="%s">%s</b>';
$lang['SHOW_MORE_INFORMATION_FILE'] = 'Mostra ulteriori informazioni sul file';
$lang['DOWNLOAD_M3U_FILE'] = 'Scarica il file .m3u';
$lang['PLAYBACK_M3U'] = 'Riproduzione file .m3u';
$lang['COPY_STREAM_LINK'] = 'Copia link dello stream negli appunti';
$lang['M3U_NOT_SUPPORTED'] = 'Questo file non può essere riprodotto nel browser...';
$lang['M3U_FFPROBE_NO_DATA'] = 'Sembra che ffprobe non possa restituire dati su questo codec...';
$lang['M3U_NOTICE'] = 'Alcuni browser non supportano la riproduzione di determinati formati video. In tal caso, puoi scaricare il file .m3u e riprodurlo utilizzando un lettore di terze parti';

$lang['ATTACHMENT'] = 'Allegati';
$lang['ATTACHMENT_THUMBNAIL'] = 'Allegato Miniatura';

// Posting/PM -> Posting Attachments
$lang['ADD_ATTACHMENT'] = 'Aggiungi Allegato';
$lang['ADD_ATTACHMENT_TITLE'] = 'Aggiungere un Allegato';
$lang['ADD_ATTACHMENT_EXPLAIN'] = 'Se non si desidera aggiungere un Allegato al tuo Post, si prega di lasciare i Campi vuoti';
$lang['FILENAME'] = 'Filename';
$lang['FILE_COMMENT'] = 'File Comment';

// Posting/PM -> Posted Attachments
$lang['POSTED_ATTACHMENTS'] = 'Inviato Allegati';
$lang['UPDATE_COMMENT'] = 'Aggiornamento Commento';
$lang['DELETE_ATTACHMENT'] = 'Elimina Allegato';
$lang['DELETE_THUMBNAIL'] = 'Eliminare Miniatura';
$lang['UPLOAD_NEW_VERSION'] = 'Caricare La Nuova Versione';

// Errors -> Posting Attachments
$lang['INVALID_FILENAME'] = '%s è un nome file non valido'; // replace %s with given filename
$lang['ATTACHMENT_PHP_SIZE_NA'] = 'L\'Allegato è troppo grande.<br />Could non ottenere la Dimensione massima definita in PHP.<br />The Allegato Mod è in grado di determinare la Dimensione massima di Caricamento definito in php.ini.';
$lang['ATTACHMENT_PHP_SIZE_OVERRUN'] = 'L\'Allegato è troppo grande.<br />Maximum Dimensione di Caricamento: %d MB.<br />Please di notare che questa Dimensione è definita in php.ini, questo significa che è impostato da PHP e l\'Allegato Mod non può eseguire l\'override di questo valore.'; // replace %d with ini_get('upload_max_filesize')
$lang['DISALLOWED_EXTENSION'] = 'L\'Estensione %s non è consentito'; // replace %s with extension (e.g. .php)
$lang['DISALLOWED_EXTENSION_WITHIN_FORUM'] = 'Non è consentito inviare File con l\'Estensione %s all\'interno di questo Forum'; // replace %s with the Extension
$lang['ATTACHMENT_TOO_BIG'] = 'L\'Allegato è troppo grande.<br />Massima Dimensione: %s'; // replace %d with maximum file size, %s with size var
$lang['TOO_MANY_ATTACHMENTS'] = 'Allegato non può essere aggiunto, dal momento che il max. numero di %d Allegati in questo post è stato raggiunto'; // replace %d with maximum number of attachments
$lang['ERROR_IMAGESIZE'] = 'L\'Allegato/Immagine deve essere inferiore a %d pixel di larghezza e %d pixel di altezza';
$lang['GENERAL_UPLOAD_ERROR'] = 'Caricare di Errore: impossibile caricare Allegato a %s.'; // replace %s with local path

$lang['ERROR_EMPTY_ADD_ATTACHBOX'] = 'È necessario immettere i valori nella sezione "Aggiungi un Allegato" Casella di';
$lang['ERROR_MISSING_OLD_ENTRY'] = 'Impossibile Aggiornare l\'Allegato, non riusciva a trovare vecchio Allegato Ingresso';

// Errors -> Download
$lang['NO_ATTACHMENT_SELECTED'] = 'Non hai selezionato un allegato per scaricare o visualizzare.';
$lang['ERROR_NO_ATTACHMENT'] = 'L\'Allegato selezionato non esiste più';

// Delete Attachments
$lang['DELETED_ATTACHMENTS'] = 'Selezionato Allegati sono stati eliminati.';
$lang['ERROR_DELETED_ATTACHMENTS'] = 'Potrebbe non eliminare gli Allegati.';

// General Error Messages
$lang['ATTACHMENT_FEATURE_DISABLED'] = 'L\'Allegato Funzionalità è disattivata.';

$lang['DIRECTORY_DOES_NOT_EXIST'] = 'La Directory \'%s\' non esiste o non Può essere trovato.'; // replace %s with directory
$lang['DIRECTORY_IS_NOT_A_DIR'] = 'Si prega di controllare se \'%s\' è una directory.'; // replace %s with directory
$lang['DIRECTORY_NOT_WRITEABLE'] = 'Directory \'%s\' non è scrivibile. Dovrete creare il percorso di caricamento e impostarlo a 777 (o cambiare il proprietario del server httpd a voi) per caricare i file.<br />Se avete solo accesso FTP semplice cambiate l\'Attributo della directory in rwxrwxrwx.'; // replace %s with directory

// Common Variables
$lang['BYTES'] = 'Byte';
$lang['KB'] = 'KB';
$lang['MB'] = 'MB';
$lang['GB'] = 'GB';
$lang['ATTACH_SEARCH_QUERY'] = 'Ricerca Degli Allegati';
$lang['TEST_SETTINGS'] = 'Impostazioni Di Test';
$lang['NOT_ASSIGNED'] = 'Non Assegnato';

//bt
$lang['BT_REG_YES'] = 'Registrati';
$lang['BT_REG_NO'] = 'Non registrato';
$lang['BT_REG_ON_TRACKER'] = 'Registrarsi sul tracker';
$lang['BT_REG_FAIL'] = 'Non si potrebbe registrare sui tracker torrent';
$lang['BT_REG_FAIL_SAME_HASH'] = 'Un altro torrent con lo stesso info_hash già <a href="%s"><b>registered</b></a>';
$lang['BT_V1_ONLY_DISALLOWED'] = 'i torrent solo v1 sono stati disabilitati dall\'amministratore al momento, consentiti: v2 e ibridi';
$lang['BT_V2_ONLY_DISALLOWED'] = 'i torrent solo v2 sono stati disabilitati dall\'amministratore al momento, consentiti: v1 e ibridi';
$lang['BT_FLIST'] = 'Elenco dei file';
$lang['BT_FLIST_LIMIT'] = 'Le impostazioni del Tracker non consentono l\'elaborazione di elenchi con più di %d file. Il numero attuale è: %d';
$lang['BT_FLIST_BTMR_HASH'] = 'Hash BTMR';
$lang['BT_FLIST_BTMR_NOTICE'] = 'BitTorrent Merkle Root è un hash di un file incorporato nei torrent con supporto BitTorrent v2, gli utenti di tracker possono estrarli, calcolarli e anche scaricare torrent deduplicati utilizzando strumenti desktop come <a href="%s" target="_blank" referrerpolicy="origin">Torrent Merkle Root Reader</a>';
$lang['BT_FLIST_CREATION_DATE'] = 'Data di creazione';
$lang['BT_IS_PRIVATE'] = 'Torrent privato';
$lang['BT_FLIST_FILE_PATH'] = 'Percorso (%s)';
$lang['BT_FLIST_LINK_TITLE'] = 'Hash dei file | meta-informazioni .torrent';
$lang['BT_UNREG_FROM_TRACKER'] = 'Togliere dal tracker';
$lang['BT_UNREGISTERED'] = 'Torrent non registrati';
$lang['BT_UNREGISTERED_ALREADY'] = 'Torrent già disregistrato';
$lang['BT_REGISTERED'] = 'Torrent registrati su tracker<br /><br />Now è necessario <a href="%s"><b>download tuo torrent</b></a> ed eseguire utilizzando il vostro client BitTorrent scegliere la cartella con i file originali con cui stai condividendo il percorso di download';
$lang['INVALID_ANN_URL'] = 'Voci di Annunciare URL [%s]<br /><br />must essere <b>%s</b>';
$lang['PASSKEY_ERR_TOR_NOT_REG'] = 'Non poteva aggiungere passkey<br /><br />Torrent non registrato sul tracker';
$lang['BT_PASSKEY'] = 'Passkey';
$lang['BT_GEN_PASSKEY'] = 'creare un nuovo';
$lang['BT_PASSKEY_VIEW'] = 'mostra';
$lang['BT_GEN_PASSKEY_NEW'] = "Attenzione! Dopo aver cambiato la tua chiave di accesso, dovrai scaricare nuovamente tutti i torrent attivi! \n Sei sicuro di voler creare una nuova chiave di accesso?";
$lang['BT_NO_SEARCHABLE_FORUMS'] = 'Ricercabili forum trovato';

$lang['SEEDS'] = 'Seme';
$lang['LEECHS'] = 'Sanguisuga';
$lang['SPEED_UP'] = 'Accelerare';
$lang['SPEED_DOWN'] = 'Velocità';

$lang['SEEDERS'] = 'Seminatrici';
$lang['LEECHERS'] = 'Leechers';
$lang['RELEASING'] = 'Auto';
$lang['SEEDING'] = 'Seme';
$lang['LEECHING'] = 'Sanguisuga';
$lang['IS_REGISTERED'] = 'Registrati';
$lang['MAGNET'] = 'Magnet-link';
$lang['MAGNET_FOR_GUESTS'] = 'Mostra magnet-link per gli ospiti';
$lang['MAGNET_v2'] = 'Magnet-link (BitTorrent v2 supportato)';

//torrent status mod
$lang['TOR_STATUS'] = 'Stato';
$lang['TOR_STATUS_SELECT_ACTION'] = 'Seleziona lo stato';
$lang['TOR_STATUS_NOT_SELECT'] = 'Si non sono stato selezionato.';
$lang['TOR_STATUS_SELECT_ALL'] = 'Tutti gli stati';
$lang['TOR_STATUS_FORBIDDEN'] = 'Lo stato di questo argomento è: ';
$lang['TOR_STATUS_NAME'] = [
    TOR_NOT_APPROVED => 'non controllato',
    TOR_CLOSED => 'chiuso',
    TOR_APPROVED => 'verificato',
    TOR_NEED_EDIT => 'non formalizzata fino',
    TOR_NO_DESC => 'non formalizzata',
    TOR_DUP => 'duplicato',
    TOR_CLOSED_CPHOLD => 'chiuso (diritti d\'autore)',
    TOR_CONSUMED => 'assorbito',
    TOR_DOUBTFUL => 'dubbi',
    TOR_CHECKING => 'in fase di controllo',
    TOR_TMP => 'temporaneo',
    TOR_PREMOD => 'pre-moderazione',
    TOR_REPLENISH => 'rifornimento',
];
$lang['TOR_STATUS_FAILED'] = 'Tale stato non esiste!';
$lang['TORRENT_FAILED'] = 'La distribuzione non è stata trovata!';
$lang['TOR_STATUS_DUB'] = 'La distribuzione ha lo stesso stato';
$lang['TOR_DONT_CHANGE'] = 'Il cambiamento di stato non può essere eseguito!';
$lang['TOR_STATUS_OF'] = 'La distribuzione ha lo status di:';
$lang['TOR_STATUS_CHANGED'] = 'Stato modificato: ';
$lang['TOR_BACK'] = ' indietro';
$lang['PROCEED'] = 'Procedere';
$lang['INVALID_ATTACH_ID'] = 'Mancanti identificatore di file!';
$lang['CHANGE_TOR_TYPE'] = 'Digitare il torrent cambiato con successo';
$lang['DEL_TORRENT'] = 'Sei sicuro di voler cancellare il torrent?';
$lang['DEL_MOVE_TORRENT'] = 'Sei sicuro di voler eliminare e spostare l\'argomento?';
$lang['UNEXECUTED_RELEASE'] = 'Hai un rilascio non completato. Prima di crearne uno nuovo, per favore completalo!';
$lang['TOR_STATUS_LOG_ACTION'] = 'Nuovo stato: %s.<br/>Stato precedente: %s.';

// tor_comment
$lang['TOR_MOD_TITLE'] = 'Cambiare lo stato di distribuzione - %s';
$lang['TOR_MOD_MSG'] = "Ciao, %s.\n\nLo stato della tua distribuzione [url=%s]è stato cambiato in[b]%s[/b]";

$lang['TOR_AUTH_TITLE'] = 'Cambiamenti nel design - %s';
$lang['TOR_AUTH_MSG'] = "Ciao, %s.\n\nLa tua distribuzione è stata cambiata - [url=%s]%s[/url]\n\nPer favore controllala di nuovo.";
$lang['TOR_AUTH_FIXED'] = 'Fisso';
$lang['TOR_AUTH_SENT_COMMENT'] = ' &middot; <span class="seed bold">The informazioni inviato al moderatore. Aspetta.</span>';

$lang['BT_TOPIC_TITLE'] = 'Titolo del Topic';
$lang['BT_SEEDER_LAST_SEEN'] = 'Semi di visto per l\'ultima volta';
$lang['SIZE'] = 'Dimensioni';
$lang['COMPLETED'] = 'Download completati';
$lang['ADDED'] = 'Aggiunto';
$lang['DELETE_TORRENT'] = 'Eliminare torrent';
$lang['DELETE_MOVE_TORRENT'] = 'Cancellare e spostare argomento';
$lang['DL_TORRENT'] = 'Il Download .torrent';
$lang['BT_LAST_POST'] = 'Ultimo post';
$lang['BT_CREATED'] = 'Argomento postato';
$lang['BT_REPLIES'] = 'Risposte';
$lang['BT_VIEWS'] = 'Vista';

// Gold/Silver releases
$lang['GOLD'] = 'Oro';
$lang['SILVER'] = 'Argento';
$lang['SET_GOLD_TORRENT'] = 'L\'oro';
$lang['UNSET_GOLD_TORRENT'] = 'Disfare oro';
$lang['SET_SILVER_TORRENT'] = 'Argento';
$lang['UNSET_SILVER_TORRENT'] = 'Disfare argento';
$lang['GOLD_STATUS'] = 'ORO TORRENT! SCARICA IL TRAFFICO NON PRENDERE IN CONSIDERAZIONE!';
$lang['SILVER_STATUS'] = 'ARGENTO TORRENT! SCARICA IL TRAFFICO IN PARTE CONSIDERATO!';
$lang['TOR_TYPE_LOG_ACTION'] = 'Tipo di torrent cambiato in: %s';

$lang['TORRENT_STATUS'] = 'Cerca per stato di rilascio';
$lang['SEARCH_IN_FORUMS'] = 'Cerca nel Forum';
$lang['SELECT_CAT'] = 'Selezionare la categoria';
$lang['GO_TO_SECTION'] = 'Vai alla sezione';
$lang['TORRENTS_FROM'] = 'Post';
$lang['SHOW_ONLY'] = 'Mostra solo';
$lang['SHOW_COLUMN'] = 'Visualizza colonna';
$lang['SEL_CHAPTERS'] = 'Link per le partizioni selezionate';
$lang['NOT_SEL_CHAPTERS'] = 'Non hai argomenti selezionati';
$lang['SEL_CHAPTERS_HELP'] = 'È possibile selezionare un massimo %s partizione';
$lang['HIDE_CONTENTS'] = 'Nascondere il contenuto di {...}';
$lang['FILTER_BY_NAME'] = '<i>Filter dal nome </i>';

$lang['BT_ONLY_ACTIVE'] = 'Attivo';
$lang['BT_ONLY_MY'] = 'Le mie release';
$lang['BT_SEED_EXIST'] = 'Seminatrice esiste';
$lang['BT_ONLY_NEW'] = 'Di nuovo dall\'ultima visita';
$lang['BT_SHOW_CAT'] = 'Categoria';
$lang['BT_SHOW_FORUM'] = 'Forum';
$lang['BT_SHOW_AUTHOR'] = 'Autore';
$lang['BT_SHOW_SPEED'] = 'Velocità';
$lang['SEED_NOT_SEEN'] = 'Il seminatore non si vede';
$lang['TITLE_MATCH'] = 'Match per il titolo';
$lang['BT_USER_NOT_FOUND'] = 'non trovato';
$lang['DL_SPEED'] = 'Nel complesso la velocità di download';

$lang['BT_DISREGARD'] = 'trascurando';
$lang['BT_NEVER'] = 'mai';
$lang['BT_ALL_DAYS_FOR'] = 'per tutto il tempo';
$lang['BT_1_DAY_FOR'] = 'ultimo giorno';
$lang['BT_3_DAY_FOR'] = 'ultimi tre giorni';
$lang['BT_7_DAYS_FOR'] = 'la scorsa settimana';
$lang['BT_2_WEEKS_FOR'] = 'ultime due settimane';
$lang['BT_1_MONTH_FOR'] = 'il mese scorso';
$lang['BT_1_DAY'] = '1 giorno';
$lang['BT_3_DAYS'] = '3 giorni';
$lang['BT_7_DAYS'] = 'settimana';
$lang['BT_2_WEEKS'] = '2 settimane';
$lang['BT_1_MONTH'] = 'mese';

$lang['DL_LIST_AND_TORRENT_ACTIVITY'] = 'DL-Elenco e attività Torrent';
$lang['DLWILL'] = 'Scarica';
$lang['DLDOWN'] = 'Scaricare';
$lang['DLCOMPLETE'] = 'Completa';
$lang['DLCANCEL'] = 'Annulla';

$lang['DL_LIST_DEL'] = 'Chiaro DL-Elenco';
$lang['DL_LIST_DEL_CONFIRM'] = 'Eliminare DL-List per questo argomento?';
$lang['SHOW_DL_LIST'] = 'Vedi DL-Elenco';
$lang['SET_DL_STATUS'] = 'Download';
$lang['UNSET_DL_STATUS'] = 'Non Scaricare';
$lang['TOPICS_DOWN_SETS'] = 'Argomento di stato cambiato in <b>Download</b>';
$lang['TOPICS_DOWN_UNSETS'] = '<b>Download</b> stato rimosso';

$lang['TOPIC_DL'] = 'DL';

$lang['MY_DOWNLOADS'] = 'I Miei Download';
$lang['SEARCH_DL_WILL'] = 'Pianificate';
$lang['SEARCH_DL_WILL_DOWNLOADS'] = 'Previsto Download';
$lang['SEARCH_DL_DOWN'] = 'Corrente';
$lang['SEARCH_DL_COMPLETE'] = 'Completato';
$lang['SEARCH_DL_COMPLETE_DOWNLOADS'] = 'Download Completati';
$lang['SEARCH_DL_CANCEL'] = 'Annullata';
$lang['CUR_DOWNLOADS'] = 'Download In Corso';
$lang['CUR_UPLOADS'] = 'Corrente Di Upload';
$lang['SEARCH_RELEASES'] = 'Rilascia';
$lang['TOR_SEARCH_TITLE'] = 'Torrent opzioni di ricerca';
$lang['OPEN_TOPIC'] = 'Aprire topic';

$lang['ALLOWED_ONLY_1ST_POST_ATTACH'] = 'La pubblicazione torrenti consentito solo nel primo post';
$lang['ALLOWED_ONLY_1ST_POST_REG'] = 'Registrazione torrenti consentito solo dal primo post';
$lang['REG_NOT_ALLOWED_IN_THIS_FORUM'] = 'Impossibile registrare il torrent in questo forum';
$lang['ALREADY_REG'] = 'Torrent già registrato';
$lang['NOT_TORRENT'] = 'Questo file non è torrent';
$lang['ONLY_1_TOR_PER_TOPIC'] = 'È possibile registrare un solo torrent in un argomento';
$lang['VIEWING_USER_BT_PROFILE'] = 'Profilo torrent';
$lang['CUR_ACTIVE_DLS'] = 'Torrent attivi';

$lang['TD_TRAF'] = 'Oggi';
$lang['YS_TRAF'] = 'Ieri';
$lang['TOTAL_TRAF'] = 'Totale';

$lang['USER_RATIO'] = 'Rapporto';
$lang['MAX_SPEED'] = 'Velocità';
$lang['DOWNLOADED'] = 'Scaricato';
$lang['UPLOADED'] = 'Caricato';
$lang['RELEASED'] = 'Rilasciato';
$lang['BONUS'] = 'Le rare';
$lang['IT_WILL_BE_DOWN'] = 'inizierà a essere considerato dopo che esso verrà scaricato';
$lang['SPMODE_FULL'] = 'Show peers in dettaglio';

// Seed Bonus
$lang['MY_BONUS'] = 'Il mio bonus (%s bonus in stock)';
$lang['BONUS_SELECT'] = 'Selezionare';
$lang['SEED_BONUS'] = 'Semi di bonus';
$lang['EXCHANGE'] = 'Scambio';
$lang['EXCHANGE_BONUS'] = 'Scambio di semi di bonus';
$lang['BONUS_UPLOAD_DESC'] = '<b>%s per distribuzione</b> <br /> Per scambiare punti bonus per %1$s di traffico che verranno aggiunti al totale della tua distribuzione.';
$lang['BONUS_UPLOAD_PRICE'] = '<b class="%s">%s</b>';
$lang['PRICE'] = 'Prezzo';
$lang['EXCHANGE_NOT'] = 'Il cambio non è disponibile';
$lang['BONUS_SUCCES'] = 'A voi è successo arruolato %s';
$lang['BONUS_NOT_SUCCES'] = '<span class="leech">You non hanno bonus disponibili. Più di semina!</span>';
$lang['BONUS_RETURN'] = 'Ritorno al seme di cambio bonus';

$lang['TRACKER'] = 'Tracker';
$lang['RANDOM_RELEASE'] = 'Rilascio casuale';
$lang['OPEN_TOPICS'] = 'Aprire argomenti';
$lang['OPEN_IN_SAME_WINDOW'] = 'aprire nella stessa finestra';
$lang['SHOW_TIME_TOPICS'] = 'mostra il tempo della creazione argomenti';
$lang['SHOW_CURSOR'] = 'evidenziare la riga sotto il cursore';

$lang['BT_LOW_RATIO_FOR_DL'] = "Con rapporto di <b>%s</b> non è possibile scaricare i torrent";
$lang['BT_RATIO_WARNING_MSG'] = 'Se il vostro rapporto scende al di sotto di %s, non sarà in grado di scaricare i Torrent! <a href="%s"><b>More circa la valutazione.</b></a>';

$lang['SEEDER_LAST_SEEN'] = 'Il seminatore non si vede: <b>%s</b>';

$lang['NEED_TO_LOGIN_FIRST'] = 'È necessario effettuare il login';
$lang['ONLY_FOR_MOD'] = 'Questa opzione è disponibile solo per i moderatori';
$lang['ONLY_FOR_ADMIN'] = 'Questa opzione è disponibile solo per gli amministratori';
$lang['ONLY_FOR_SUPER_ADMIN'] = 'Questa opzione è disponibile solo per i super admin';

$lang['LOGS'] = 'Argomento storia';
$lang['FORUM_LOGS'] = 'Storia Del Forum';
$lang['AUTOCLEAN'] = 'Autoclean';
$lang['DESIGNER'] = 'Designer';

$lang['LAST_IP'] = 'Ultimo IP:';
$lang['REG_IP'] = 'Registrazione IP:';
$lang['OTHER_IP'] = 'Altri IP:';
$lang['ALREADY_REG_IP'] = 'Un utente %s è già registrato con il tuo indirizzo IP. Se non ti sei registrato precedentemente nel nostro tracker, invia un\'e-mail all\'<a href="mailto:%s">amministratore</a>';
$lang['HIDDEN'] = 'Nascosto';

// from admin
$lang['NOT_ADMIN'] = 'Non sei autorizzato ad amministrare questo consiglio';

$lang['SESSION_EXPIRED'] = 'Sessione scaduta';

// Sort memberlist per letter
$lang['POST_LINK'] = 'Postare il link';
$lang['GOTO_QUOTED_POST'] = 'Vai al post citato';
$lang['LAST_VISITED'] = 'Ultima Visita';
$lang['LAST_ACTIVITY'] = 'Ultima attività';
$lang['NEVER'] = 'Mai';

//mpd
$lang['DELETE_POSTS'] = 'Eliminare il post';
$lang['DELETE_POSTS_SUCCESFULLY'] = 'Selezionati i post sono stati rimossi correttamente';
$lang['NO_POSTS_REMOVED'] = 'Nessun post è stato rimosso.';

//ts
$lang['TOPICS_ANNOUNCEMENT'] = 'Annunci';
$lang['TOPICS_STICKY'] = 'Colle';
$lang['TOPICS_NORMAL'] = 'Argomenti';

//dpc
$lang['DOUBLE_POST_ERROR'] = 'Non è possibile fare un altro post con lo stesso testo come il tuo ultimo.';

//upt
$lang['UPDATE_POST_TIME'] = 'Aggiornare il post';

$lang['TOPIC_SPLIT_NEW'] = 'Nuovo argomento';
$lang['TOPIC_SPLIT_OLD'] = 'Argomento vecchio';
$lang['BOT_LEAVE_MSG_MOVED'] = 'Aggiungere bot-messaggio sul movimento';
$lang['BOT_REASON_MOVED'] = 'Motivo per spostare';
$lang['BOT_AFTER_SPLIT_TO_OLD'] = 'Aggiungere bot-messaggio sulla divisione per <b>old topic</b>';
$lang['BOT_AFTER_SPLIT_TO_NEW'] = 'Aggiungere bot-messaggio sulla divisione per <b>new topic</b>';
//qr
$lang['QUICK_REPLY'] = 'Risposta Rapida';
$lang['INS_NAME_TIP'] = 'Inserire il nome o il testo selezionato.';
$lang['QUOTE_SELECTED'] = 'Preventivo selezionato';
$lang['QR_NOTIFY'] = 'Informare sulla risposta';
$lang['QR_USERNAME'] = 'Nome';
$lang['QR_FONT_SEL'] = 'Font face';
$lang['QR_COLOR_SEL'] = 'Font color';
$lang['QR_SIZE_SEL'] = 'Dimensione del carattere';
$lang['COLOR_STEEL_BLUE'] = 'Blu Acciaio';
$lang['COLOR_GRAY'] = 'Grigio';
$lang['COLOR_DARK_GREEN'] = 'Verde Scuro';

// Short buttons
$lang['IP'] = 'IP';
$lang['POLL'] = 'Sondaggio';
$lang['MODERATE'] = 'Moderare';
$lang['SEND_PM_SHORT'] = 'PM';
$lang['WEBSITE_SHORT'] = 'WWW';

$lang['DECLENSION']['REPLIES'] = ['risposta', 'risposte'];
$lang['DECLENSION']['TIMES'] = ['tempo', 'volte'];
$lang['DECLENSION']['FILES'] = ['file', 'file'];

$lang['DELTA_TIME']['INTERVALS'] = [
    'seconds' => ['secondo', 'secondi'],
    'minutes' => ['minuti', 'minuti'],
    'hours' => ['ora', 'ore'],
    'mday' => ['giorno', 'giorni'],
    'mon' => ['mese', 'mesi'],
    'year' => ['anno', 'anni'],
];
$lang['DELTA_TIME']['FORMAT'] = '%1$s %2$s'; // 5(%1) minutes(%2)

$lang['AUTH_TYPES'][AUTH_ALL] = $lang['AUTH_ANONYMOUS_USERS'];
$lang['AUTH_TYPES'][AUTH_REG] = $lang['AUTH_REGISTERED_USERS'];
$lang['AUTH_TYPES'][AUTH_ACL] = $lang['AUTH_USERS_GRANTED_ACCESS'];
$lang['AUTH_TYPES'][AUTH_MOD] = $lang['AUTH_MODERATORS'];
$lang['AUTH_TYPES'][AUTH_ADMIN] = $lang['AUTH_ADMINISTRATORS'];

$lang['NEW_USER_REG_DISABLED'] = 'Spiacente, la registrazione è disabilitata in questo momento';
$lang['ONLY_NEW_POSTS'] = 'solo i nuovi post';
$lang['ONLY_NEW_TOPICS'] = 'solo nuovi argomenti';

$lang['TORHELP_TITLE'] = 'Si prega di aiutare a seminare questi torrent!';
$lang['STATISTICS'] = 'Statistiche';
$lang['STATISTIC'] = 'Statistica';
$lang['VALUE'] = 'Valore';
$lang['STATUS'] = 'Stato';
$lang['CHANGES'] = 'Modifiche';
$lang['ACTION'] = 'Azione';
$lang['REASON'] = 'Ragione';
$lang['COMMENT'] = 'Commento';

// search
$lang['SEARCH_S'] = 'la ricerca...';
$lang['FORUM_S'] = 'sul forum';
$lang['TRACKER_S'] = 'sul tracker';
$lang['HASH_S'] = 'da info_hash';

// copyright
$lang['NOTICE'] = '!ATTENZIONE!';
$lang['COPY'] = 'Il sito non fornisce versioni elettroniche dei prodotti ed è impegnato solo a raccogliere e catalogare i riferimenti inviati e pubblicati nel forum dai nostri lettori. Se sei il proprietario legale di qualsiasi materiale inviato e non desideri che il riferimento sia nel nostro catalogo, contattaci e lo rimuoveremo subito. I file da scambiare sul tracker sono forniti dagli utenti del sito, e l\'amministrazione non si assume la responsabilità per il loro contenuto. Ti preghiamo di non caricare file protetti da copyright o file con contenuti illegali!';

// FILELIST
$lang['COLLAPSE'] = 'Crollo directory';
$lang['EXPAND'] = 'Espandi';
$lang['SWITCH'] = 'Interruttore';
$lang['TOGGLE_WINDOW_FULL_SIZE'] = 'Aumenta/diminuisci la finestra';
$lang['EMPTY_ATTACH_ID'] = 'Mancanti identificatore di file!';
$lang['TOR_NOT_FOUND'] = 'Il file è mancante dal server!';
$lang['ERROR_BUILD'] = 'Il contenuto di questo file torrent non possono essere visualizzati sul sito (non è stato possibile creare un elenco di file)';
$lang['TORFILE_INVALID'] = 'Torrent file è danneggiato';

// Profile
$lang['WEBSITE_ERROR'] = 'Il sito può contenere solo http://sitename';
$lang['INVALID_DATE'] = 'Data non valida';
$lang['PROFILE_USER'] = 'Visualizzazione profilo';
$lang['GOOD_UPDATE'] = 'è stato cambiato con successo';
$lang['UCP_DOWNLOADS'] = 'Download';
$lang['HIDE_DOWNLOADS'] = 'Nascondere l\'elenco corrente di scarica sul tuo profilo';
$lang['BAN_USER'] = 'Per impedire a un utente';
$lang['USER_NOT_ALLOWED'] = 'Gli utenti non sono autorizzati';
$lang['HIDE_AVATARS'] = 'Vedi avatar';
$lang['SHOW_CAPTION'] = 'Mostra la tua firma';
$lang['DOWNLOAD_TORRENT'] = 'Download torrent';
$lang['SEND_PM'] = 'Inviare PM';
$lang['SEND_MESSAGE'] = 'Invia messaggio';
$lang['NEW_THREADS'] = 'Nuovi Thread';
$lang['PROFILE_NOT_FOUND'] = 'Profilo non trovato';

$lang['USER_DELETE'] = 'Eliminare';
$lang['USER_DELETE_EXPLAIN'] = 'Eliminare questo utente';
$lang['USER_DELETE_ME'] = 'Spiacenti, il tuo account è vietato rimuovere!';
$lang['USER_DELETE_CSV'] = 'Mi dispiace, questo account non è consentito eliminare!';
$lang['USER_DELETE_CONFIRM'] = 'Sei sicuro di voler cancellare questo utente?';
$lang['USER_DELETED'] = 'Utente è stato eliminato con successo';
$lang['DELETE_USER_ALL_POSTS'] = 'Eliminare tutti i messaggi dell\'utente';
$lang['DELETE_USER_ALL_POSTS_CONFIRM'] = 'Sei sicuro di voler cancellare tutti i messaggi e tutti i topic iniziato da questo utente?';
$lang['DELETE_USER_POSTS'] = 'Elimina tutti i messaggi tranne i primi post';
$lang['DELETE_USER_POSTS_ME'] = 'Sei sicuro di voler cancellare tutti i miei post?';
$lang['DELETE_USER_POSTS_CONFIRM'] = 'Sei sicuro di voler eliminare tutti i messaggi, tranne i primi post?';
$lang['USER_DELETED_POSTS'] = 'Post rimosso con successo';

$lang['USER'] = 'Utente';
$lang['ROLE'] = 'Ruolo:';
$lang['MEMBERSHIP_IN'] = 'L\'appartenenza';
$lang['PARTY'] = 'Partito:';
$lang['CANDIDATE'] = 'Candidato:';
$lang['INDIVIDUAL'] = 'Ha i diritti individuali';
$lang['GROUP_LIST_HIDDEN'] = 'Si non sono autorizzati a visualizzare i gruppi nascosti';

$lang['USER_ACTIVATE'] = 'Attivare';
$lang['USER_DEACTIVATE'] = 'Disattivare';
$lang['DEACTIVATE_CONFIRM'] = 'Sei sicuro di voler disattivare questo utente?';
$lang['USER_ACTIVATE_ON'] = 'Utente è stato attivato con successo';
$lang['USER_DEACTIVATE_ME'] = 'Non si può disattivare il mio account!';
$lang['ACTIVATE_CONFIRM'] = 'Sei sicuro che si desidera disattivare questo utente?';
$lang['USER_ACTIVATE_OFF'] = 'L\'utente è stato disattivato con successo';

// Register
$lang['CHOOSE_A_NAME'] = 'Si consiglia di scegliere un nome';
$lang['CHOOSE_E_MAIL'] = 'È necessario specificare l\'indirizzo e-mail';
$lang['CHOOSE_PASS'] = 'Campo per la password non deve essere vuoto!!!';
$lang['CHOOSE_PASS_ERR'] = 'Le password inserite non corrispondono';
$lang['CHOOSE_PASS_ERR_MIN'] = 'La password deve essere di almeno %d caratteri';
$lang['CHOOSE_PASS_ERR_MAX'] = 'La tua password non deve superare i %d caratteri';
$lang['CHOOSE_PASS_ERR_NUM'] = 'La password deve contenere almeno una cifra';
$lang['CHOOSE_PASS_ERR_LETTER'] = 'La password deve contenere almeno una lettera dell\'alfabeto latino';
$lang['CHOOSE_PASS_ERR_LETTER_UPPERCASE'] = 'La password deve contenere almeno una lettera maiuscola dell\'alfabeto latino';
$lang['CHOOSE_PASS_ERR_SPEC_SYMBOL'] = 'La password deve contenere almeno un carattere speciale';
$lang['CHOOSE_PASS_OK'] = 'Password corrispondono';
$lang['CHOOSE_PASS_REG_OK'] = 'Password corrispondono, si può procedere con la registrazione';
$lang['CHOOSE_PASS_FAILED'] = 'Per modificare la password, è necessario specificare correttamente la password corrente';
$lang['EMAILER_DISABLED'] = 'Mi dispiace, questa funzione è temporaneamente non funzionante';
$lang['REGISTERED_IN_TIME'] = "La registrazione è attualmente chiusa<br /><br />La registrazione è disponibile durante: %s<br />Ora attuale del server: %s<br /><br />Ci scusiamo per l'inconveniente";
$lang['AUTOCOMPLETE'] = 'Genera password';
$lang['YOUR_NEW_PASSWORD'] = 'La tua nuova password:';
$lang['REGENERATE'] = 'Rigenerare';

// Debug
$lang['EXECUTION_TIME'] = 'Tempo di esecuzione:';
$lang['SEC'] = 'sec';
$lang['ON'] = 'su';
$lang['OFF'] = 'off';
$lang['MEMORY'] = 'Memoria: ';
$lang['QUERIES'] = 'query';
$lang['LIMIT'] = 'Limite:';
$lang['SHOW_LOG'] = 'Mostra log';
$lang['EXPLAINED_LOG'] = 'Log spiegato';
$lang['CUT_LOG'] = 'Taglia query lunghe';

// Attach Guest
$lang['DOWNLOAD_INFO'] = 'Free Download alla massima velocità!';
$lang['HOW_TO_DOWNLOAD'] = 'Come Scaricare?';
$lang['WHAT_IS_A_TORRENT'] = 'Che cos\'è un torrent?';
$lang['RATINGS_AND_LIMITATIONS'] = 'Valutazioni e Limitazioni';

$lang['SCREENSHOTS_RULES'] = 'Leggere le regole previste screenshot!';
$lang['AJAX_EDIT_OPEN'] = 'Hai già aperto una modifica veloce!';
$lang['GO_TO_PAGE'] = 'Andare a pagina ...';
$lang['EDIT'] = 'Modifica';
$lang['SAVE'] = 'Salva';
$lang['NEW_WINDOW'] = 'in una nuova finestra';

// BB Code
$lang['ALIGN'] = 'Allineare:';
$lang['LEFT'] = 'A sinistra';
$lang['RIGHT'] = 'A destra';
$lang['CENTER'] = 'Centrato';
$lang['JUSTIFY'] = 'Adatta alla larghezza';
$lang['HOR_LINE'] = 'Linea orizzontale (Ctrl+8)';
$lang['NEW_LINE'] = 'Nuova linea';
$lang['BOLD'] = 'Il testo in grassetto: [b]text[/b] (Ctrl+B)';
$lang['ITALIC'] = 'Testo in corsivo: [i]text[/i] (Ctrl+I)';
$lang['UNDERLINE'] = 'Sottolineare il testo: [u]text[/u] (Ctrl+U)';
$lang['STRIKEOUT'] = 'Testo barrato: [s]text[/s] (Ctrl+S)';
$lang['BOX_TAG'] = 'Cornice attorno al testo: [box]text[/box] o [box=#333,#888]text[/box]';
$lang['INDENT_TAG'] = 'Inserisci indent: [indent]text[/indent]';
$lang['PRE_TAG'] = 'Testo preformattato: [pre]text[/pre]';
$lang['NFO_TAG'] = 'NFO: [nfo]text[/nfo]';
$lang['SUPERSCRIPT'] = 'Testo in apice: [sup]text[/sup]';
$lang['SUBSCRIPT'] = 'Testo in pedice: [sub]text[/sub]';
$lang['QUOTE_TITLE'] = 'Preventivo testo: [quote]text[/quote] (Ctrl+Q)';
$lang['IMG_TITLE'] = 'Inserisci immagine: [img]https://image_url[/img] (Ctrl+R)';
$lang['URL'] = 'URL';
$lang['URL_TITLE'] = 'Inserisci URL: [url]https://url[/url] o [url=https://url]Testo URL[/url] (Ctrl+W)';
$lang['CODE_TITLE'] = 'Codice display: [code]code[/code] (Ctrl+K)';
$lang['LIST'] = 'Elenco';
$lang['LIST_TITLE'] = 'Elenco: [list]text[/list] (Ctrl+l)';
$lang['LIST_ITEM'] = 'Elenco ordinato: [list=]text[/list] (Ctrl+O)';
$lang['ACRONYM'] = 'Acronimo';
$lang['ACRONYM_TITLE'] = 'Acronimo: [acronym=Testo completo]Testo corto[/acronym]';
$lang['QUOTE_SEL'] = 'Preventivo selezionato';
$lang['JAVASCRIPT_ON'] = 'JavaScript deve essere abilitato per inviare messaggi';

$lang['NEW'] = 'Nuovo';
$lang['NEWEST'] = 'Nuova';
$lang['LATEST'] = 'Ultima';
$lang['POST'] = 'Post';
$lang['OLD'] = 'Vecchio';

// DL-List
$lang['DL_USER'] = 'Username';
$lang['DL_PERCENT'] = 'Completo per cento';
$lang['DL_UL'] = 'UL';
$lang['DL_DL'] = 'DL';
$lang['DL_UL_SPEED'] = 'UL velocità';
$lang['DL_DL_SPEED'] = 'DL velocità';
$lang['DL_PORT'] = 'Porta';
$lang['DL_CLIENT'] = 'Cliente BitTorrent';
$lang['DL_FORMULA'] = 'Formula: Uploaded/TorrentSize';
$lang['DL_ULR'] = 'ULR';
$lang['DL_STOPPED'] = 'arrestato';
$lang['DL_UPD'] = 'tempo di aggiornamento: ';
$lang['DL_INFO'] = 'mostra i dati <i><b>only per il corrente session</b></i>';
$lang['HIDE_PEER_TORRENT_CLIENT'] = 'Nascondi il nome del mio client BitTorrent nell\'elenco dei peer';
$lang['HIDE_PEER_COUNTRY_NAME'] = 'Nascondi il nome del mio paese nell\'elenco dei peer';
$lang['HIDE_PEER_USERNAME'] = 'Nascondi il mio nome utente nell\'elenco dei peer';

// Post PIN
$lang['POST_PIN'] = 'Pin il primo post';
$lang['POST_UNPIN'] = 'Sbloccare primo post';
$lang['POST_PINNED'] = 'Primo post appuntato';
$lang['POST_UNPINNED'] = 'Primo post sbloccati';

// Management of my messages
$lang['GOTO_MY_MESSAGE'] = 'Chiudere e tornare alla lista "i Miei Messaggi"';
$lang['DEL_MY_MESSAGE'] = 'Argomenti selezionati sono stati rimossi da "i Miei Messaggi"';
$lang['NO_TOPICS_MY_MESSAGE'] = 'Argomenti non presenti nella lista dei tuoi post (forse avete già rimosso)';
$lang['EDIT_MY_MESSAGE_LIST'] = 'modifica elenco';
$lang['SELECT_INVERT'] = 'selezione / inverti';
$lang['RESTORE_ALL_POSTS'] = 'Ripristinare tutti i post';
$lang['DEL_LIST_MY_MESSAGE'] = 'Eliminare l\'argomento selezionato dall\'elenco';
$lang['DEL_LIST_MY_MESSAGE_INFO'] = 'Dopo la rimozione di aggiornare il <b>entire list</b> può essere dimostrato già eliminato thread';
$lang['DEL_LIST_INFO'] = 'Per eliminare un ordine dall\'elenco, fare clic sull\'icona a sinistra del nome di ogni sezione';

// Watched topics
$lang['WATCHED_TOPICS'] = 'Guardato argomenti';
$lang['NO_WATCHED_TOPICS'] = 'Nessun argomento osservato';

// set_die_append_msg
$lang['INDEX_RETURN'] = 'Torna alla home page';
$lang['FORUM_RETURN'] = 'Torna al forum';
$lang['TOPIC_RETURN'] = 'Torniamo al tema';
$lang['POST_RETURN'] = 'Vai al post';
$lang['PROFILE_EDIT_RETURN'] = 'Tornare a modificare';
$lang['PROFILE_RETURN'] = 'Vai al profilo';

$lang['WARNING'] = 'Avviso';
$lang['INDEXER'] = 'Il Reindex di ricerca';
$lang['INDEXER_SUCCESS'] = 'Indice di ricerca aggiornato con successo';

$lang['FORUM_STYLE'] = 'Lo stile del Forum';

$lang['LINKS_ARE_FORBIDDEN'] = 'I link sono vietati';

$lang['GENERAL'] = 'Generale Admin';
$lang['USERS'] = 'Utente Admin';
$lang['GROUPS'] = 'Gruppo Admin';
$lang['FORUMS'] = 'Admin Del Forum';
$lang['MODS'] = 'Modifiche';

$lang['CONFIGURATION'] = 'Configurazione';
$lang['MANAGE'] = 'Gestione';
$lang['DISALLOW'] = 'Disallow nomi';
$lang['PRUNE'] = 'Potatura';
$lang['MASS_EMAIL'] = 'E-Mail Di Massa';
$lang['RANKS'] = 'Classifica';
$lang['SMILIES'] = 'Faccine';
$lang['BAN_MANAGEMENT'] = 'Divieto Di Controllo';
$lang['WORD_CENSOR'] = 'Parola Censura';
$lang['EXPORT'] = 'Esportazione';
$lang['CREATE_NEW'] = 'Creare';
$lang['ADD_NEW'] = 'Aggiungere';
$lang['CRON'] = 'Task Scheduler (cron)';
$lang['REBUILD_SEARCH_INDEX'] = 'La ricostruzione dell\'indice di ricerca';
$lang['FORUM_CONFIG'] = 'Le impostazioni del Forum';
$lang['ACTIONS_LOG'] = 'Relazione sull\'azione';

// Migrations
$lang['MIGRATIONS_STATUS'] = 'Stato della migrazione del database';
$lang['MIGRATIONS_DATABASE_NAME'] = 'Nome del database';
$lang['MIGRATIONS_DATABASE_TOTAL'] = 'Tabelle totali';
$lang['MIGRATIONS_DATABASE_SIZE'] = 'Dimensione del database';
$lang['MIGRATIONS_DATABASE_INFO'] = 'Informazioni sul database';
$lang['MIGRATIONS_SYSTEM'] = 'Sistema di migrazione';
$lang['MIGRATIONS_NEEDS_SETUP'] = 'Richiesta di configurazione';
$lang['MIGRATIONS_ACTIVE'] = 'Attivo';
$lang['MIGRATIONS_NOT_INITIALIZED'] = 'Non inizializzato';
$lang['MIGRATIONS_UP_TO_DATE'] = 'Tutto aggiornato';
$lang['MIGRATIONS_PENDING_COUNT'] = 'in attesa';
$lang['MIGRATIONS_APPLIED'] = 'Migrazioni applicate';
$lang['MIGRATIONS_PENDING'] = 'Migrazioni in sospeso';
$lang['MIGRATIONS_VERSION'] = 'Versione';
$lang['MIGRATIONS_NAME'] = 'Nome della migrazione';
$lang['MIGRATIONS_FILE'] = 'File di migrazione';
$lang['MIGRATIONS_APPLIED_AT'] = 'Applicato il';
$lang['MIGRATIONS_COMPLETED_AT'] = 'Completato il';
$lang['MIGRATIONS_CURRENT_VERSION'] = 'Versione attuale';
$lang['MIGRATIONS_NOT_APPLIED'] = 'Nessuna migrazione applicata';
$lang['MIGRATIONS_INSTRUCTIONS'] = 'Istruzioni';
$lang['MIGRATIONS_SETUP_STATUS'] = 'Stato di configurazione';
$lang['MIGRATIONS_SETUP_GUIDE'] = 'Vedi la guida di configurazione qui sotto';
$lang['MIGRATIONS_ACTION_REQUIRED'] = 'Azione richiesta';

// Index
$lang['MAIN_INDEX'] = 'Indice Del Forum';
$lang['FORUM_STATS'] = 'Le Statistiche Del Forum';
$lang['ADMIN_INDEX'] = 'Admin Indice';
$lang['CREATE_PROFILE'] = 'Creare il profilo';

$lang['TP_VERSION'] = 'TorrentPier versione';
$lang['TP_RELEASE_DATE'] = 'Data di uscita';
$lang['PHP_INFO'] = 'Informazioni su PHP';

$lang['CLICK_RETURN_ADMIN_INDEX'] = 'Fare clic su %sHere%s per tornare all\'Indice di Admin';

$lang['NUMBER_POSTS'] = 'Numero di posti';
$lang['POSTS_PER_DAY'] = 'Post al giorno';
$lang['NUMBER_TOPICS'] = 'Numero di argomenti';
$lang['TOPICS_PER_DAY'] = 'Argomenti al giorno';
$lang['NUMBER_USERS'] = 'Numero di utenti';
$lang['USERS_PER_DAY'] = 'Utenti al giorno';
$lang['BOARD_STARTED'] = 'Consiglio ha iniziato';
$lang['AVATAR_DIR_SIZE'] = 'Avatar directory dimensioni';
$lang['DATABASE_SIZE'] = 'La dimensione del Database';
$lang['GZIP_COMPRESSION'] = 'Compressione GZIP';
$lang['NOT_AVAILABLE'] = 'Non disponibile';

// System information
$lang['ADMIN_SYSTEM_INFORMATION'] = 'Informazioni di sistema';
$lang['ADMIN_SYSTEM_OS'] = 'SO:';
$lang['ADMIN_SYSTEM_PHP_VER'] = 'PHP:';
$lang['ADMIN_SYSTEM_DATABASE_VER'] = 'Database:';
$lang['ADMIN_SYSTEM_PHP_MEM_LIMIT'] = 'Limite memoria:';
$lang['ADMIN_SYSTEM_DISK_SPACE_INFO_TITLE'] = 'Informazioni spazio disco:';
$lang['ADMIN_SYSTEM_DISK_SPACE_INFO'] = '%s (utilizzato: %s | libero: %s)';
$lang['ADMIN_SYSTEM_PHP_MAX_EXECUTION_TIME'] = 'Tempo di esecuzione massimo:';

// Clear Cache
$lang['DATASTORE'] = 'Datastore';
$lang['CLEAR_CACHE'] = 'Cache';
$lang['CLEAR_TEMPLATES_CACHE'] = 'Cache modelli';

// Update
$lang['USER_LEVELS'] = 'Livelli di utente';
$lang['USER_LEVELS_UPDATED'] = 'Livelli di utente sono stati aggiornati';

// Synchronize
$lang['SYNCHRONIZE'] = 'Sincronizzare';
$lang['TOPICS_DATA_SYNCHRONIZED'] = 'Argomenti dati sono stati sincronizzati';
$lang['USER_POSTS_COUNT'] = 'Utente post count';
$lang['USER_POSTS_COUNT_SYNCHRONIZED'] = 'I messaggi dell\'utente conte è stato sincronizzato';

// Online Userlist
$lang['SHOW_ONLINE_USERLIST'] = 'Mostra l\'elenco degli utenti online';

// Robots.txt editor
$lang['ROBOTS_TXT_EDITOR_TITLE'] = 'Gestisci robots.txt';
$lang['ROBOTS_TXT_UPDATED_SUCCESSFULLY'] = 'Il file robots.txt è stato aggiornato con successo';
$lang['CLICK_RETURN_ROBOTS_TXT_CONFIG'] = '%sClicca qui per tornare al gestore di robots.txt%s';

// Auth pages
$lang['USER_SELECT'] = 'Selezionare un Utente';
$lang['GROUP_SELECT'] = 'Selezionare un Gruppo di';
$lang['SELECT_A_FORUM'] = 'Seleziona un Forum';
$lang['AUTH_CONTROL_USER'] = 'Autorizzazioni Utente Controllo';
$lang['AUTH_CONTROL_GROUP'] = 'Le Autorizzazioni Del Gruppo Di Controllo';
$lang['AUTH_CONTROL_FORUM'] = 'Forum Di Autorizzazioni Di Controllo';
$lang['LOOK_UP_FORUM'] = 'Cercare Forum';

$lang['GROUP_AUTH_EXPLAIN'] = 'Qui è possibile modificare le autorizzazioni e lo status di moderatore assegnato ad ogni gruppo di utenti. Non dimenticate quando si cambiano i permessi di gruppo che singole autorizzazioni utente può comunque consentire la registrazione al forum, etc. Sarete avvertiti se questo è il caso.';
$lang['USER_AUTH_EXPLAIN'] = 'Qui è possibile modificare le autorizzazioni e moderatore stato assegnato ad ogni singolo utente. Non dimenticate quando si cambia utente autorizzazioni autorizzazioni di gruppo può comunque consentire la registrazione al forum, etc. Sarete avvertiti se questo è il caso.';
$lang['FORUM_AUTH_EXPLAIN'] = 'Qui puoi modificare i livelli di autorizzazione di ciascun forum. Avrai sia un metodo semplice che uno avanzato per farlo, dove l\'avanzato offre un maggiore controllo su ciascuna operazione del forum. Ricorda che cambiare il livello di autorizzazione dei forum influenzerà quali utenti possono svolgere le varie operazioni al loro interno.';

$lang['SIMPLE_MODE'] = 'Modalità Semplice';
$lang['ADVANCED_MODE'] = 'Modalità Avanzata';
$lang['MODERATOR_STATUS'] = 'Lo status di moderatore';

$lang['PUBLIC'] = 'Pubblico';
$lang['PRIVATE'] = 'Privato';
$lang['REGISTERED'] = 'Registrati';
$lang['ADMINISTRATORS'] = 'Gli amministratori';

// These are displayed in the drop-down boxes for advanced mode forum auth, try and keep them short!
$lang['FORUM_ALL'] = 'TUTTI';
$lang['FORUM_REG'] = 'REG';
$lang['FORUM_PRIVATE'] = 'PRIVATO';
$lang['FORUM_MOD'] = 'MOD';
$lang['FORUM_ADMIN'] = 'ADMIN';

$lang['AUTH_VIEW'] = $lang['VIEW'] = 'Vista';
$lang['AUTH_READ'] = $lang['READ'] = 'Leggi';
$lang['AUTH_POST'] = $lang['POST'] = 'Post';
$lang['AUTH_REPLY'] = $lang['REPLY'] = 'Risposta';
$lang['AUTH_EDIT'] = $lang['EDIT'] = 'Modifica';
$lang['AUTH_DELETE'] = $lang['DELETE'] = 'Eliminare';
$lang['AUTH_STICKY'] = $lang['STICKY'] = 'Appiccicoso';
$lang['AUTH_ANNOUNCE'] = $lang['ANNOUNCE'] = 'Annunciare';
$lang['AUTH_VOTE'] = $lang['VOTE'] = 'Voto';
$lang['AUTH_POLLCREATE'] = $lang['POLLCREATE'] = 'Sondaggio creare';
$lang['AUTH_ATTACHMENTS'] = $lang['AUTH_ATTACH'] = 'Post File';
$lang['AUTH_DOWNLOAD'] = 'Scarica Il File';

$lang['USER_LEVEL'] = 'A Livello Di Utente';
$lang['AUTH_USER'] = 'Utente';
$lang['AUTH_ADMIN'] = 'Amministratore';
$lang['FORUM_AUTH_UPDATED'] = 'Forum autorizzazioni sono state aggiornate';

$lang['AUTH_UPDATED'] = 'Le autorizzazioni sono state aggiornate';
$lang['AUTH_GENERAL_ERROR'] = 'Impossibile aggiornare lo stato dell\'amministratore';
$lang['AUTH_SELF_ERROR'] = 'Impossibile cambiare da amministratore a utente';
$lang['NO_FORUMS_AVAILABLE'] = 'Nessun forum disponibile. Crea prima i forum per gestire i permessi.';
$lang['CLICK_RETURN_USERAUTH'] = 'Fare clic su %sHere%s per tornare a Autorizzazioni Utente';
$lang['CLICK_RETURN_GROUPAUTH'] = 'Fare clic su %sHere%s per tornare alle Autorizzazioni di Gruppo';
$lang['CLICK_RETURN_FORUMAUTH'] = 'Fare clic su %sHere%s per tornare al Forum di Autorizzazioni';

// Banning
$lang['BAN_CONTROL'] = 'Divieto Di Controllo';
$lang['BAN_EXPLAIN'] = 'Qui puoi controllare il divieto degli utenti.';
$lang['BAN_USERNAME'] = 'Di escludere uno o più utenti specifici';
$lang['BAN_USERNAME_EXPLAIN'] = 'Si può bannare più utenti in un colpo solo usando l\'appropriata combinazione di mouse e tastiera per il vostro computer e il browser';
$lang['UNBAN_USERNAME'] = 'Disattiva uno o più utenti specifici';
$lang['UNBAN_USERNAME_EXPLAIN'] = 'È possibile unban più utenti in un colpo solo usando l\'appropriata combinazione di mouse e tastiera per il vostro computer e il browser';
$lang['NO_BANNED_USERS'] = 'No i nomi utente bannato';
$lang['BAN_UPDATE_SUCESSFUL'] = 'La lista dei bannati è stato aggiornato con successo';
$lang['CLICK_RETURN_BANADMIN'] = 'Fare clic su %sHere%s per tornare al Divieto di Controllo';

// Configuration
$lang['GENERAL_CONFIG'] = 'Configurazione Generale';
$lang['CONFIG_EXPLAIN'] = 'Il modulo qui sotto ti permetterà di personalizzare tutte le opzioni generali del forum. Per configurazioni Utente e Forum utilizza i relativi collegamenti sul lato sinistro.';

$lang['CONFIG_MODS'] = 'Modifiche alla configurazione';
$lang['MODS_EXPLAIN'] = 'Questo modulo consente di regolare le modifiche';

$lang['CLICK_RETURN_CONFIG'] = '%sClick Qui per tornare al Generale Configuration%s';
$lang['CLICK_RETURN_CONFIG_MODS'] = '%sBack alle impostazioni modifications%s';

$lang['GENERAL_SETTINGS'] = 'Consiglio Generale Delle Impostazioni';
$lang['SITE_NAME'] = 'Nome del sito';
$lang['SITE_DESC'] = 'Descrizione del sito';
$lang['FORUMS_DISABLE'] = 'Disabilitare la scheda di';
$lang['BOARD_DISABLE_EXPLAIN'] = 'Questo renderà il consiglio non disponibile per gli utenti. Gli amministratori sono in grado di accedere al Pannello di Amministrazione, mentre il bordo è disattivato.';
$lang['ACC_NONE'] = 'Nessuno'; // These three entries are the type of activation
$lang['ACC_USER'] = 'Utente';
$lang['ACC_ADMIN'] = 'Admin';

$lang['ABILITIES_SETTINGS'] = 'Utente del Forum e Impostazioni di Base';
$lang['MAX_POLL_OPTIONS'] = 'Max numero di opzioni del sondaggio';
$lang['FLOOD_INTERVAL'] = 'Alluvione Intervallo';
$lang['FLOOD_INTERVAL_EXPLAIN'] = 'Numero di secondi che un utente deve attendere tra i pali';
$lang['TOPICS_PER_PAGE'] = 'Argomenti Per Pagina';
$lang['POSTS_PER_PAGE'] = 'Messaggi Per Pagina';
$lang['HOT_THRESHOLD'] = 'Post Popolare Soglia';
$lang['DEFAULT_LANGUAGE'] = 'La Lingua Predefinita';
$lang['DATE_FORMAT'] = 'Formato Della Data';
$lang['SYSTEM_TIMEZONE'] = 'Sistema Di Fuso Orario';
$lang['ENABLE_PRUNE'] = 'Attivare Forum Di Potatura';
$lang['ALLOW_BBCODE'] = 'Consentire Il BBCode';
$lang['ALLOW_SMILIES'] = 'Consentire Faccine';
$lang['SMILIES_PATH'] = 'Faccine Percorso Di Archiviazione';
$lang['SMILIES_PATH_EXPLAIN'] = 'Percorso sotto la tua directory principale TorrentPier, ad esempio styles/images/smiles';
$lang['ALLOW_SIG'] = 'Consentire Firme';
$lang['MAX_SIG_LENGTH'] = 'Massima lunghezza di firma';
$lang['MAX_SIG_LENGTH_EXPLAIN'] = 'Numero massimo di caratteri firme';
$lang['ALLOW_NAME_CHANGE'] = 'Consentire nome utente cambia';

// Autologin Keys
$lang['ALLOW_AUTOLOGIN'] = 'Consentire il login automatico';
$lang['ALLOW_AUTOLOGIN_EXPLAIN'] = 'Determina se gli utenti sono autorizzati a selezionare per essere registrati automaticamente quando si visita il forum';
$lang['AUTOLOGIN_TIME'] = 'Il login automatico chiave di scadenza';
$lang['AUTOLOGIN_TIME_EXPLAIN'] = 'Per quanto tempo un autologin chiave è valida per giorni, se l\'utente non visitare il bordo. Set a zero per disattivare la scadenza.';

// Forum Management
$lang['FORUM_ADMIN_MAIN'] = 'Forum Amministrazione';
$lang['EDIT_FORUM'] = 'Modifica forum';
$lang['CREATE_FORUM'] = 'Creare un nuovo forum';
$lang['CREATE_SUB_FORUM'] = 'Crea sottForo';
$lang['CREATE_CATEGORY'] = 'Creare nuova categoria';
$lang['REMOVE'] = 'Rimuovere';
$lang['CONFIG_UPDATED'] = 'Forum Di Configurazione È Stato Aggiornato Con Successo';
$lang['MOVE_UP'] = 'Spostare in alto';
$lang['MOVE_DOWN'] = 'Sposta giù';
$lang['RESYNC'] = 'Risincronizza';
$lang['NO_MODE'] = 'Non era in modalità set';
$lang['FORUM_EDIT_DELETE_EXPLAIN'] = 'Il modulo qui sotto ti permetterà di personalizzare tutte le opzioni generali del forum. Per configurazioni Utente e Forum utilizza i relativi collegamenti sul lato sinistro';

$lang['MOVE_CONTENTS'] = 'Spostare tutti i contenuti';
$lang['FORUM_DELETE'] = 'Cancellare Un Forum';
$lang['FORUM_DELETE_EXPLAIN'] = 'Il modulo seguente vi permetterà di eliminare un forum (o di categoria) e decidere dove si desidera inserire tutti gli argomenti (o forum) in esso contenute.';
$lang['CATEGORY_DELETE'] = 'Eliminare Categoria';
$lang['CATEGORY_NAME_EMPTY'] = 'Nome della categoria non specificato';

$lang['STATUS_LOCKED'] = 'Bloccato';
$lang['STATUS_UNLOCKED'] = 'Sbloccato';
$lang['FORUM_SETTINGS'] = 'In Generale Le Impostazioni Del Forum';
$lang['FORUM_NAME'] = 'Nome del Forum';
$lang['FORUM_DESC'] = 'Descrizione';
$lang['FORUM_STATUS'] = 'Forum stato';
$lang['FORUM_PRUNING'] = 'Auto-potatura';

$lang['PRUNE_DAYS'] = 'Rimuovere gli argomenti che non sono state registrate in';

$lang['MOVE_AND_DELETE'] = 'Spostare ed Eliminare';

$lang['DELETE_ALL_POSTS'] = 'Eliminare tutti i post';
$lang['DELETE_ALL_TOPICS'] = 'Eliminare tutti gli argomenti, tra annunci e appiccicoso';
$lang['NOWHERE_TO_MOVE'] = 'Nulla per spostare';

$lang['EDIT_CATEGORY'] = 'Modifica Categoria';
$lang['EDIT_CATEGORY_EXPLAIN'] = 'Usa questo form per modificare il nome di una categoria.';

$lang['FORUMS_UPDATED'] = 'Forum e informazioni di Categoria aggiornato con successo';

$lang['MUST_DELETE_FORUMS'] = 'È necessario eliminare tutti i forum prima di poter eliminare questa categoria';

$lang['CLICK_RETURN_FORUMADMIN'] = 'Fare clic su %sHere%s per tornare al Forum di Amministrazione';

$lang['SHOW_ALL_FORUMS_ON_ONE_PAGE'] = 'Mostra tutti i forum in una pagina';

// Smiley Management
$lang['SMILEY_TITLE'] = 'Sorrisi Utility Per La Modifica';
$lang['SMILE_DESC'] = 'Da questa pagina è possibile aggiungere, rimuovere e modificare le emoticon o faccine che gli utenti possono utilizzare nei loro post e messaggi privati.';

$lang['SMILEY_CONFIG'] = 'Smiley Configurazione';
$lang['SMILEY_CODE'] = 'Smiley Codice';
$lang['SMILEY_URL'] = 'Smiley File Di Immagine';
$lang['SMILEY_EMOT'] = 'Smiley Emozione';
$lang['SMILE_ADD'] = 'Aggiungere un nuovo Smiley';
$lang['SMILE'] = 'Sorriso';
$lang['EMOTION'] = 'Emozione';

$lang['SELECT_PAK'] = 'Selezionare Pack (.pak) File';
$lang['REPLACE_EXISTING'] = 'Sostituire L\'Esistente Smiley';
$lang['KEEP_EXISTING'] = 'Tenere Esistenti Smiley';
$lang['SMILEY_IMPORT_INST'] = 'Si deve decomprimere il pacchetto smiley e caricare tutti i file in modo appropriato Smiley directory per l\'installazione. Quindi selezionare la corretta informazione in questo modulo per importare lo smiley pack.';
$lang['SMILEY_IMPORT'] = 'Smiley Pack Importazione';
$lang['CHOOSE_SMILE_PAK'] = 'Scegliere un Sorriso Pack .pak file';
$lang['IMPORT'] = 'Importazione Emoticon';
$lang['SMILE_CONFLICTS'] = 'Che cosa dovrebbe essere fatto in caso di conflitti';
$lang['DEL_EXISTING_SMILEYS'] = 'Eliminare esistenti smiley prima dell\'importazione';
$lang['IMPORT_SMILE_PACK'] = 'Importazione Smiley Pack';
$lang['EXPORT_SMILE_PACK'] = 'Creare Emoticon Pack';
$lang['EXPORT_SMILES'] = 'Per creare un smiley pack da quello attualmente installato smiley, fare clic su %sHere%s per scaricare i sorrisi.pak file. Il nome di questo file in modo appropriato facendo attenzione a mantenere il .pak estensione di file. Quindi creare un file zip contenente tutti i tuoi smiley immagini più questo .pak file di configurazione.';

$lang['SMILEY_ADD_SUCCESS'] = 'Lo Smiley è stato aggiunto con successo';
$lang['SMILEY_EDIT_SUCCESS'] = 'Lo Smiley è stato aggiornato con successo';
$lang['SMILEY_IMPORT_SUCCESS'] = 'Lo Smiley Pack è stato importato con successo!';
$lang['SMILEY_DEL_SUCCESS'] = 'Lo Smiley è stato rimosso con successo';
$lang['CLICK_RETURN_SMILEADMIN'] = 'Fare clic su %sHere%s per tornare a Smiley Amministrazione';

// User Management
$lang['USER_ADMIN'] = 'Amministrazione Utenti';
$lang['LOOK_UP_USER'] = 'Cercare utenti';

// Group Management
$lang['GROUP_ADMINISTRATION'] = 'Di Amministrazione Del Gruppo';
$lang['GROUP_ADMIN_EXPLAIN'] = 'Da questo pannello è possibile gestire tutti i vostri gruppi di utenti. È possibile eliminare, creare e modificare i gruppi esistenti. Si può scegliere moderatori, alterna aperto/chiuso di stato del gruppo e impostare il nome del gruppo e descrizione';
$lang['UPDATED_GROUP'] = 'Il gruppo è stato aggiornato con successo';
$lang['ADDED_NEW_GROUP'] = 'Il nuovo gruppo è stato creato con successo';
$lang['DELETED_GROUP'] = 'Il gruppo è stato eliminato con successo';
$lang['CREATE_NEW_GROUP'] = 'Creare un nuovo gruppo';
$lang['EDIT_GROUP'] = 'Modificare il gruppo';
$lang['GROUP_STATUS'] = 'Stato del gruppo';
$lang['GROUP_DELETE'] = 'Eliminare il gruppo';
$lang['GROUP_DELETE_CHECK'] = 'Eliminare questo gruppo';
$lang['NO_GROUP_NAME'] = 'È necessario specificare un nome per questo gruppo';
$lang['NO_GROUP_MODERATOR'] = 'È necessario specificare un moderatore per questo gruppo';
$lang['NO_GROUP_MODE'] = 'È necessario specificare una modalità di questo gruppo, aperto o chiuso';
$lang['NO_GROUP_ACTION'] = 'Nessuna azione è stata specificata';
$lang['DELETE_OLD_GROUP_MOD'] = 'Eliminare il vecchio moderatore del gruppo?';
$lang['DELETE_OLD_GROUP_MOD_EXPL'] = 'Se stai cambiando il moderatore del gruppo, selezionare questa casella di controllo per rimuovere il vecchio moderatore del gruppo. In caso contrario, non si controlla, e l\'utente potrà diventare un membro regolare del gruppo.';
$lang['CLICK_RETURN_GROUPSADMIN'] = 'Fare clic su %sHere%s per tornare al Gruppo di Amministrazione.';
$lang['SELECT_GROUP'] = 'Selezionare un gruppo di';
$lang['LOOK_UP_GROUP'] = 'Cercare gruppo';

// Prune Administration
$lang['FORUM_PRUNE'] = 'Forum Di Prugna';
$lang['FORUM_PRUNE_EXPLAIN'] = 'Questo consentirà di eliminare qualsiasi argomento che non è stato inviato entro il numero di giorni che si seleziona. Se non si immette un numero, quindi tutti gli argomenti verranno eliminati. Non rimuovere <b>sticky</b> argomenti e <b>announcements</b>. Sarà necessario rimuovere questi argomenti manualmente.';
$lang['DO_PRUNE'] = 'Non Potare';
$lang['ALL_FORUMS'] = 'Tutti I Forum';
$lang['PRUNE_TOPICS_NOT_POSTED'] = 'Potare i topic senza risposte in questo molti giorni';
$lang['TOPICS_PRUNED'] = 'Argomenti potati';
$lang['PRUNE_SUCCESS'] = 'Il Forum è stata potata con successo';
$lang['NOT_DAYS'] = 'Potare giorni non selezionato';

// Word censor
$lang['WORDS_TITLE'] = 'Parola Censura';
$lang['WORDS_EXPLAIN'] = 'Da questo pannello di controllo è possibile aggiungere, modificare e rimuovere parole che verranno automaticamente censurato sul forum. Inoltre la gente non sarà consentita la registrazione con username contenenti queste parole. I caratteri jolly (*) sono ammessi in campo "parola". Per esempio, *test* corrispondano detestabile, test* test match, *test match detesto.';
$lang['WORD'] = 'Parola';
$lang['EDIT_WORD_CENSOR'] = 'Modifica parola censurare';
$lang['REPLACEMENT'] = 'Sostituzione';
$lang['ADD_NEW_WORD'] = 'Aggiungi parola nuova';

$lang['MUST_ENTER_WORD'] = 'È necessario immettere una parola e la sua sostituzione';
$lang['NO_WORD_SELECTED'] = 'Nessuna parola selezionata per la modifica';

$lang['WORD_UPDATED'] = 'La parola censura è stato aggiornato con successo';
$lang['WORD_ADDED'] = 'La parola censura è stata aggiunta con successo';
$lang['WORD_REMOVED'] = 'La parola censura è stato rimosso con successo ';

$lang['CLICK_RETURN_WORDADMIN'] = 'Fare clic su %sHere%s per tornare a Word Censurare Amministrazione';

// Mass Email
$lang['MASS_EMAIL_EXPLAIN'] = 'Qui si può inviare un messaggio a tutti gli utenti o a tutti gli utenti di un gruppo specifico. Per fare questo, vi sarà inviata un\'email a amministrativo indirizzo e-mail fornito, con un blind carbon copy inviato a tutti i destinatari. Se si sta inviando un grande gruppo di persone, si prega di essere paziente dopo aver presentato e di non interrompere la pagina a metà strada attraverso. È normale che una massa di email per prendere un lungo periodo di tempo e sarai avvisato quando il completamento dello script';
$lang['COMPOSE'] = 'Comporre';

$lang['RECIPIENTS'] = 'Destinatari';
$lang['ALL_USERS'] = 'Tutti Gli Utenti';

$lang['MASS_EMAIL_MESSAGE_TYPE'] = 'Tipo di email';

// Ranks admin
$lang['RANKS_TITLE'] = 'Rango Di Amministrazione';
$lang['RANKS_EXPLAIN'] = 'Utilizzando questo modulo è possibile aggiungere, modificare, visualizzare e cancellare file. È anche possibile crearne di personalizzati classifica che può essere applicato a un utente tramite impianto di gestione';

$lang['ADD_NEW_RANK'] = 'Aggiungere un nuovo livello';
$lang['RANK_TITLE'] = 'Rank Titolo';
$lang['STYLE_COLOR'] = 'Stile di rango';
$lang['STYLE_COLOR_FAQ'] = 'Specifica una classe per stilizzare il titolo con il colore desiderato. Ad esempio: <i class="bold">colorAdmin</i>';
$lang['RANK_IMAGE'] = 'Rank Immagine';
$lang['RANK_IMAGE_EXPLAIN'] = 'Usare questo per definire una piccola immagine associata con il grado';

$lang['MUST_SELECT_RANK'] = 'È necessario selezionare una classifica';

$lang['RANK_UPDATED'] = 'La classifica è stata aggiornata con successo';
$lang['RANK_ADDED'] = 'La classifica è stata aggiunta con successo';
$lang['RANK_REMOVED'] = 'Il rango è stato eliminato con successo';
$lang['NO_UPDATE_RANKS'] = 'Il rango è stato eliminato con successo. Tuttavia, gli account utente che utilizza questo rango non sono stati aggiornati. È necessario reimpostare manualmente la traversa su questi conti';

$lang['CLICK_RETURN_RANKADMIN'] = 'Fare clic su %sHere%s per tornare al Rango di Amministrazione';

// Disallow Username Admin
$lang['DISALLOW_CONTROL'] = 'Nome Utente Disabilitare Il Controllo';
$lang['DISALLOW_EXPLAIN'] = 'Qui è possibile controllare i nomi utente che non potranno essere utilizzati. Consentiti i nomi utente possono contenere un carattere jolly *. Si prega di notare che non sarà possibile specificare il nome utente che è già stato registrato. È necessario eliminare prima che il suo nome e quindi non consentire.';

$lang['DELETE_DISALLOW'] = 'Eliminare';
$lang['DELETE_DISALLOW_TITLE'] = 'Rimuovere un nome utente non consentito';
$lang['DELETE_DISALLOW_EXPLAIN'] = 'È possibile rimuovere un non consentito nome utente selezionando il nome utente dall\'elenco e cliccando sul pulsante " invia';

$lang['ADD_DISALLOW'] = 'Aggiungere';
$lang['ADD_DISALLOW_TITLE'] = 'Aggiungere un nome utente non consentito';

$lang['NO_DISALLOWED'] = 'No Non Consentiti Nomi Utente';

$lang['DISALLOWED_DELETED'] = 'Respinte nome utente è stato rimosso con successo';
$lang['DISALLOW_SUCCESSFUL'] = 'Respinte nome utente è stato aggiunto con successo';
$lang['DISALLOWED_ALREADY'] = 'Il nome che hai inserito non può essere consentita. Essa è già presente nell\'elenco, esiste la parola moderatore di un elenco o di un corrispondente nome utente è presente.';

$lang['CLICK_RETURN_DISALLOWADMIN'] = 'Fare clic su %sHere%s di ritorno per Impedire Username Amministrazione';

// Version Check
$lang['VERSION_INFORMATION'] = 'Informazioni Sulla Versione';
$lang['UPDATE_AVAILABLE'] = 'Aggiornamento disponibile';
$lang['CHANGELOG'] = 'Registro delle modifiche';

// Login attempts configuration
$lang['MAX_LOGIN_ATTEMPTS'] = 'Permesso di tentativi di login';
$lang['MAX_LOGIN_ATTEMPTS_EXPLAIN'] = 'Il numero di ammessi consiglio di tentativi di accesso.';
$lang['LOGIN_RESET_TIME'] = 'Di accesso tempo di blocco';
$lang['LOGIN_RESET_TIME_EXPLAIN'] = 'Tempo in minuti che l\'utente deve attendere fino a che non è consentito effettuare il login dopo il superamento del numero consentito di tentativi di login.';

// Permissions List
$lang['PERMISSIONS_LIST'] = 'Elenco Di Autorizzazioni';
$lang['AUTH_CONTROL_CATEGORY'] = 'Categoria Autorizzazioni Di Controllo';
$lang['FORUM_AUTH_LIST_EXPLAIN'] = 'Questo fornisce una sintesi dei vari livelli di autorizzazione di ogni forum. È possibile modificare le autorizzazioni, utilizzando un semplice o avanzato metodo cliccando sul nome del forum. Ricordatevi che cambiare il livello di autorizzazione di forum influenzerà il quale gli utenti possono effettuare le varie operazioni all\'interno di essi.';
$lang['CAT_AUTH_LIST_EXPLAIN'] = 'Questo fornisce una sintesi dei vari livelli di autorizzazione di ogni forum all\'interno di questa categoria. È possibile modificare le autorizzazioni di singoli forum, utilizzando un semplice o avanzato metodo cliccando sul nome del forum. In alternativa, è possibile impostare le autorizzazioni per tutti i forum in questa categoria utilizzando i menu a tendina in fondo alla pagina. Ricordatevi che cambiare il livello di autorizzazione di forum influenzerà il quale gli utenti possono effettuare le varie operazioni all\'interno di essi.';
$lang['FORUM_AUTH_LIST_EXPLAIN_ALL'] = 'Tutti gli utenti';
$lang['FORUM_AUTH_LIST_EXPLAIN_REG'] = 'Tutti gli utenti registrati';
$lang['FORUM_AUTH_LIST_EXPLAIN_PRIVATE'] = 'Solo gli utenti concesso un permesso speciale';
$lang['FORUM_AUTH_LIST_EXPLAIN_MOD'] = 'Solo i moderatori di questo forum';
$lang['FORUM_AUTH_LIST_EXPLAIN_ADMIN'] = 'Solo gli amministratori';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_VIEW'] = '%s possibile visualizzare questo forum';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_READ'] = '%s in grado di leggere i post di questo forum';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_POST'] = '%s può postare in questo forum';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_REPLY'] = '%s può rispondere a post in questo forum';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_EDIT'] = '%s possono modificare i messaggi in questo forum';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_DELETE'] = '%s possono cancellare i post in questo forum';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_STICKY'] = '%s può post sticky topics in questo forum';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_ANNOUNCE'] = '%s possibile pubblicare annunci in questo forum';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_VOTE'] = '%s possono votare nei sondaggi in questo forum';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_POLLCREATE'] = '%s possibile creare sondaggi in questo forum';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_ATTACHMENTS'] = '%s possibile inviare allegati';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_DOWNLOAD'] = '%s possibile scaricare gli allegati';

// Misc
$lang['SF_SHOW_ON_INDEX'] = 'Mostra sulla pagina principale';
$lang['SF_PARENT_FORUM'] = 'Il forum';
$lang['SF_NO_PARENT'] = 'Nessun genitore forum';
$lang['TEMPLATE'] = 'Modello';
$lang['SYNC'] = 'Sync';

// Mods
$lang['MAX_NEWS_TITLE'] = 'Max. lunghezza delle notizie';
$lang['NEWS_COUNT'] = 'Quanti elementi di notizie mostrare';
$lang['NEWS_FORUM_ID'] = 'Da quali forum visualizzare <br /> <h6>Per più forum, specifica gli ID separati da virgole. Esempio: 1,2,3</h6>';
$lang['TRACKER_STATS'] = 'Statistiche sul tracker';
$lang['WHOIS_INFO'] = 'Informazioni sull\'indirizzo IP';
$lang['SHOW_MOD_HOME_PAGE'] = 'Visualizza sulla moderatori index.php';
$lang['SHOW_BOARD_STARTED_INDEX'] = 'Mostra la data di inizio del forum su index.php';
$lang['PREMOD_HELP'] = '<h4><span class="tor-icon tor-dup">&#8719;</span> Pre-moderation</h4> <h6>If non si hanno distribuzioni per lo stato di v, #, o T in questa sezione, comprese le sottosezioni, la distribuzione verrà automaticamente visualizzato questo status</h6>';
$lang['TOR_COMMENT'] = '<h4>Commento sullo stato di una distribuzione</h4> <h6>Il commento permette di segnalare gli errori commessi al releaser. Se gli stati sono incompleti, un modulo di risposta al rilascio è disponibile per il responsabile del rilascio per correggere il rilascio</h6>';
$lang['SEED_BONUS_ADD'] = '<h4>Adding seme bonus </h4> <h6> Numero di distribuzioni sono consegnati dall\'utente e la dimensione di bonus per loro (i tempi di ricarica di un\'ora) </h6>';
$lang['SEED_BONUS_RELEASE'] = 'N-numero di rilasci';
$lang['SEED_BONUS_POINTS'] = 'bonus di un\'ora';
$lang['SEED_BONUS_TOR_SIZE'] = '<h4>Minimum distribuzione per la quale saranno assegnati i bonus </h4> <h6> Se si desidera calcolare i premi per tutti di distribuzione, lasciare il campo vuoto. </h6>';
$lang['SEED_BONUS_USER_REGDATA'] = '<h4>Minimum lunghezza dell\'utente tracker, dopo di che sarà assegnato premi </h4> <h6> Se si desidera accumulare bonus per tutti gli utenti, lasciare il campo vuoto. </h6>';
$lang['SEED_BONUS_WARNING'] = 'ATTENZIONE! Seme di Bonus deve essere in ordine crescente';
$lang['SEED_BONUS_EXCHANGE'] = 'Configurazione Di Exchange Sid Bonus';
$lang['SEED_BONUS_ROPORTION'] = 'Proporzione aggiunta per uno scambio di bonus sul GB';

// Modules, this replaces the keys used
$lang['CONTROL_PANEL'] = 'Pannello Di Controllo';
$lang['EXTENSION_CONTROL'] = 'L\'Estensione Del Controllo';
$lang['EXTENSION_GROUP_MANAGE'] = 'Estensione Gruppi Di Controllo';
$lang['SPECIAL_CATEGORIES'] = 'Categorie Speciali';

// Attachments -> Management
$lang['ATTACH_SETTINGS'] = 'Allegato Impostazioni';
$lang['MANAGE_ATTACHMENTS_EXPLAIN'] = 'Qui è possibile configurare le Impostazioni Principali per l\'Allegato Mod. Se si preme il Pulsante Prova Impostazioni, l\'Allegato Mod fa un paio di Test di Sistema per assicurarsi che le Mod funzioneranno correttamente. Se avete problemi con il caricamento dei File, si prega di eseguire questo Test, per avere una dettagliata messaggio di errore.';
$lang['ATTACH_FILESIZE_SETTINGS'] = 'Impostazioni Dimensione File Allegato';
$lang['ATTACH_NUMBER_SETTINGS'] = 'Allegato Numero Di Impostazioni';
$lang['ATTACH_OPTIONS_SETTINGS'] = 'Opzioni Di Attacco';

$lang['UPLOAD_DIRECTORY'] = 'Directory Di Upload';
$lang['UPLOAD_DIRECTORY_EXPLAIN'] = 'Inserire il percorso relativo dal tuo TorrentPier di installazione per gli Allegati directory di upload. Ad esempio, immettere \'file\', se il tuo TorrentPier Installazione si trova in https://www.yourdomain.com/torrentpier e l\'Allegato Directory di Upload è situato a https://www.yourdomain.com/torrentpier/files.';
$lang['ATTACH_IMG_PATH'] = 'Allegato Invio Icona';
$lang['ATTACH_IMG_PATH_EXPLAIN'] = 'Questa Immagine viene visualizzata accanto all\'Allegato Link nel post individuali. Lasciare questo campo vuoto se non si desidera un\'icona da visualizzare. Questa Impostazione verrà sovrascritto dalle Impostazioni di Estensione per la Gestione di Gruppi.';
$lang['ATTACH_TOPIC_ICON'] = 'Allegato Argomento Icona';
$lang['ATTACH_TOPIC_ICON_EXPLAIN'] = 'Questa Immagine viene visualizzata prima di argomenti relativi Allegati. Lasciare questo campo vuoto se non si desidera un\'icona da visualizzare.';
$lang['ATTACH_DISPLAY_ORDER'] = 'Allegato Ordine Di Visualizzazione';
$lang['ATTACH_DISPLAY_ORDER_EXPLAIN'] = 'Qui si può scegliere se visualizzare gli Allegati in Messaggi/PMs, in ordine Decrescente di Filetime Ordine (Nuovo Allegato Prima) in ordine Crescente o Filetime Ordine (dal più vecchio Allegato Prima).';

$lang['MAX_FILESIZE_ATTACH'] = 'Dimensione del file';
$lang['MAX_FILESIZE_ATTACH_EXPLAIN'] = 'Dimensione massima di file per gli Allegati. Il valore 0 significa \'illimitata\'. Questa Impostazione è limitato dalla Configurazione del Server. Per esempio, se la vostra Configurazione di php consente solo un massimo di 2 MB di upload, questo non può essere sovrascritto dal Mod.';
$lang['MAX_FILESIZE_PM'] = 'Dimensione massima di file nella Cartella Messaggi Privati';
$lang['MAX_FILESIZE_PM_EXPLAIN'] = 'Il massimo Spazio su Disco Allegati può utilizzare fino in ciascun Utente Privato finestra di Messaggio. Il valore 0 significa \'illimitata\'.';

$lang['MAX_ATTACHMENTS'] = 'Numero massimo di Allegati';
$lang['MAX_ATTACHMENTS_EXPLAIN'] = 'Il numero massimo di allegati consentiti in un unico post.';
$lang['MAX_ATTACHMENTS_PM'] = 'Numero massimo di Allegati in un Messaggio Privato';
$lang['MAX_ATTACHMENTS_PM_EXPLAIN'] = 'Definire il numero massimo di allegati è consentito all\'utente di includere in un messaggio privato.';

$lang['DISABLE_MOD'] = 'Disattivare Allegato Mod';
$lang['DISABLE_MOD_EXPLAIN'] = 'Questa opzione è principalmente per la sperimentazione di nuovi modelli o temi, disabilita tutte Attaccamento Funzioni, tranne il Pannello di amministrazione.';
$lang['PM_ATTACHMENTS'] = 'Consentire gli Allegati nei Messaggi Privati';
$lang['PM_ATTACHMENTS_EXPLAIN'] = 'Consentire/non consentire allegare file ai Messaggi Privati.';

// Extensions -> Extension Control
$lang['MANAGE_EXTENSIONS'] = 'La Gestione Delle Estensioni';
$lang['MANAGE_EXTENSIONS_EXPLAIN'] = 'Qui si possono gestire le Estensioni di File. Se si desidera consentire/non consentire una Estensione per essere caricato, si prega di utilizzare l\'Estensione per la Gestione di Gruppi.';
$lang['EXPLANATION'] = 'Spiegazione';
$lang['EXTENSION_GROUP'] = 'Estensione Di Gruppo';
$lang['EXTENSION_EXIST'] = 'L\'Estensione %s già esiste'; // replace %s with the Extension

// Extensions -> Extension Groups Management
$lang['MANAGE_EXTENSION_GROUPS'] = 'Gestire Gruppi Di Estensione';
$lang['MANAGE_EXTENSION_GROUPS_EXPLAIN'] = 'Qui è possibile aggiungere, eliminare e modificare l\'Estensione Gruppi, è possibile disattivare l\'Estensione Gruppi, assegnare una Categoria speciale per loro, cambiare il meccanismo di download e si può definire una Icona di Caricamento che verrà visualizzato nella parte anteriore di un Allegato appartenenti al Gruppo.';
$lang['SPECIAL_CATEGORY'] = 'Categoria Speciale';
$lang['CATEGORY_IMAGES'] = 'Immagini';
$lang['ALLOWED'] = 'Permesso';
$lang['ALLOWED_FORUMS'] = 'Ammessi Forum';
$lang['EXT_GROUP_PERMISSIONS'] = 'Autorizzazioni Di Gruppo';
$lang['DOWNLOAD_MODE'] = 'Modalità Di Download';
$lang['UPLOAD_ICON'] = 'Icona Di Caricamento';
$lang['MAX_GROUPS_FILESIZE'] = 'Dimensione Massima Di File';
$lang['EXTENSION_GROUP_EXIST'] = 'L\'Estensione del Gruppo di %s già esiste'; // replace %s with the group name

// Extensions -> Special Categories
$lang['MANAGE_CATEGORIES'] = 'Gestione Di Particolari Categorie Di';
$lang['MANAGE_CATEGORIES_EXPLAIN'] = 'Qui puoi configurare le Categorie Speciali. Puoi impostare Parametri e Condizioni Speciali per le Categorie Speciali assegnate a un Gruppo di Estensione.';
$lang['SETTINGS_CAT_IMAGES'] = 'Impostazioni per la Categoria Speciale: Immagini';
$lang['DISPLAY_INLINED'] = 'Visualizzare le Immagini Inline';
$lang['DISPLAY_INLINED_EXPLAIN'] = 'Scegliere se visualizzare le immagini direttamente all\'interno del post (sì) o per la visualizzazione di immagini come link ?';
$lang['MAX_IMAGE_SIZE'] = 'Massima Dimensioni Dell\'Immagine';
$lang['MAX_IMAGE_SIZE_EXPLAIN'] = 'Qui è possibile definire il limite massimo consentito di Immagine Dimensione di essere attaccato (Larghezza x Altezza, in pixel).<br />If è impostato su 0 x 0, questa funzione è disabilitata. Con alcune Immagini questa Funzione non funziona a causa di limitazioni in PHP.';
$lang['IMAGE_LINK_SIZE'] = 'Link Immagine Dimensioni';
$lang['IMAGE_LINK_SIZE_EXPLAIN'] = 'Se questo definisce la Dimensione di un\'Immagine è raggiunto, l\'Immagine verrà visualizzato come un Link, piuttosto che la visualizzazione inline,<br />if Vista in linea è abilitata (Larghezza x Altezza, in pixel).<br />If è impostato su 0 x 0, questa funzione è disabilitata. Con alcune Immagini questa Funzione non funziona a causa di limitazioni in PHP.';
$lang['ASSIGNED_GROUP'] = 'Gruppo Assegnato';

$lang['IMAGE_CREATE_THUMBNAIL'] = 'Creare Miniature';
$lang['IMAGE_MIN_THUMB_FILESIZE'] = 'Dimensione Minima File Miniatura';
$lang['IMAGE_MIN_THUMB_FILESIZE_EXPLAIN'] = 'Se un\'immagine è più piccola di questa dimensione di file definita, non verrà creata alcuna miniatura, perché è abbastanza piccola.';

// Extensions -> Extension Groups Control -> Group Permissions
$lang['GROUP_PERMISSIONS_TITLE_ADMIN'] = 'Permessi di Gruppo Estensione → \'%s\''; // Replace %s with the Groups Name
$lang['GROUP_PERMISSIONS_EXPLAIN'] = 'Qui si è in grado di limitare l\'Estensione selezionato Gruppo di Forum di vostra scelta (definiti nella Ammessi Forum di Dialogo). L\'impostazione di Default è di consentire l\'Estensione Gruppi per tutti i Forum l\'Utente è in grado di Allegare File in (modo normale l\'Allegato Mod fatto dall\'inizio). Basta aggiungere quei Forum si desidera che l\'Estensione del Gruppo (le Estensioni all\'interno di questo Gruppo) per essere ammessi lì, l\'impostazione predefinita, TUTTI i FORUM scompare quando si aggiunge Forum per la Lista. Siete in grado di ri-aggiungere TUTTI i FORUM in qualsiasi Momento. Se si aggiunge un Forum per il tuo Consiglio e l\'Autorizzazione è impostata su TUTTI i FORUM non cambierà nulla. Ma se è stato modificato e limitato l\'accesso a certi Forum, devi controllare di nuovo qui per aggiungere il nuovo Forum. È facile fare questo automaticamente, ma questo vi costringerà a modificare un gruppo di File, quindi ho scelto il modo in cui è ora. Si prega di tenere a mente, che tutti i Forum sono elencate qui.';
$lang['NOTE_ADMIN_EMPTY_GROUP_PERMISSIONS'] = 'NOTA:<br />Within sotto elencati Forum gli Utenti sono normalmente consentito allegare file, ma, dato che nessuna Estensione di Gruppo può essere collegata c\', gli Utenti sono in grado di allegare nulla. Se si tenta, si riceveranno i Messaggi di Errore. Forse si desidera impostare le Autorizzazioni Post dei File di ADMIN a questi Forum.<br /><br />';
$lang['ADD_FORUMS'] = 'Aggiungere Forum';
$lang['ADD_SELECTED'] = 'Aggiungi Selezionati';
$lang['PERM_ALL_FORUMS'] = 'TUTTI I FORUM';

// Attachments -> Control Panel
$lang['CONTROL_PANEL_TITLE'] = 'File Allegato Pannello Di Controllo';
$lang['CONTROL_PANEL_EXPLAIN'] = 'Qui è possibile visualizzare e gestire tutti gli allegati, basato sugli Utenti, Allegati, Vista ecc...';

// Control Panel -> Search
$lang['SEARCH_WILDCARD_EXPLAIN'] = 'Usare * come carattere jolly per le corrispondenze parziali';
$lang['SIZE_SMALLER_THAN'] = 'Allegato dimensione minore (byte)';
$lang['SIZE_GREATER_THAN'] = 'Allegato dimensione maggiore (byte)';
$lang['COUNT_SMALLER_THAN'] = 'Scarica il conteggio è inferiore';
$lang['COUNT_GREATER_THAN'] = 'Scarica il conteggio è maggiore di';
$lang['MORE_DAYS_OLD'] = 'Più di questo, molti giorni';
$lang['NO_ATTACH_SEARCH_MATCH'] = 'Allegati incontrato i tuoi criteri di ricerca';

// Control Panel -> Statistics
$lang['NUMBER_OF_ATTACHMENTS'] = 'Numero di Allegati';
$lang['TOTAL_FILESIZE'] = 'Dimensione Totale del File';
$lang['NUMBER_POSTS_ATTACH'] = 'Numero di Messaggi con Allegati';
$lang['NUMBER_TOPICS_ATTACH'] = 'Numero di Argomenti con Allegati';
$lang['NUMBER_USERS_ATTACH'] = 'Utenze Indipendenti Inviato Gli Allegati';
$lang['NUMBER_PMS_ATTACH'] = 'Numero totale degli Allegati nei Messaggi Privati';

// Control Panel -> Attachments
$lang['STATISTICS_FOR_USER'] = 'Allegato Statistiche per %s'; // replace %s with username
$lang['DOWNLOADS'] = 'Download';
$lang['POST_TIME'] = 'Il Tempo Di Post';
$lang['POSTED_IN_TOPIC'] = 'Posted in Argomento';
$lang['SUBMIT_CHANGES'] = 'Invia Modifiche';

// Sort Types
$lang['SORT_ATTACHMENTS'] = 'Allegati';
$lang['SORT_SIZE'] = 'Dimensioni';
$lang['SORT_FILENAME'] = 'Filename';
$lang['SORT_COMMENT'] = 'Commento';
$lang['SORT_EXTENSION'] = 'Estensione';
$lang['SORT_DOWNLOADS'] = 'Download';
$lang['SORT_POSTTIME'] = 'Il Tempo Di Post';

// View Types
$lang['VIEW_STATISTIC'] = 'Statistiche';
$lang['VIEW_SEARCH'] = 'Ricerca';

// Successfully updated
$lang['ATTACH_CONFIG_UPDATED'] = 'Allegato Configurazione aggiornata correttamente';
$lang['CLICK_RETURN_ATTACH_CONFIG'] = 'Fare clic su %sHere%s per tornare all\'Allegato Configurazione';
$lang['TEST_SETTINGS_SUCCESSFUL'] = 'Impostazioni di Test è stato completato, la configurazione sembra andare tutto bene.';

// Some basic definitions
$lang['ATTACHMENTS'] = 'Allegati';
$lang['EXTENSIONS'] = 'Estensioni';
$lang['EXTENSION'] = 'Estensione';

$lang['RETURN_CONFIG'] = '%sReturn per Configuration%s';
$lang['CONFIG_UPD'] = 'Configurazione Aggiornata Correttamente';

// Forum config
$lang['BT_SELECT_FORUMS'] = 'Le opzioni del Forum:';
$lang['BT_SELECT_FORUMS_EXPL'] = 'tenere premuto <i>Ctrl</i> mentre la selezione di più forum';

$lang['REG_TORRENTS'] = 'Registrare i torrent';
$lang['DISALLOWED'] = 'Vietato';
$lang['ALLOW_REG_TRACKER'] = 'Ammessi forum per la registrazione .torrent sul tracker';
$lang['ALLOW_PORNO_TOPIC'] = 'Consenti contenuti 18+';
$lang['SELF_MODERATED'] = 'Gli utenti possono <b>move</b> loro argomenti di un altro forum';

$lang['BT_ANNOUNCE_URL_HEAD'] = 'Annunciare URL';
$lang['BT_ANNOUNCE_URL'] = 'Annunciare url';
$lang['BT_ANNOUNCE_URL_EXPL'] = 'è possibile definire ulteriori ammessi url "includes/torrent_announce_urls.php"';
$lang['BT_DISABLE_DHT'] = 'Disattivare la rete DHT';
$lang['BT_DISABLE_DHT_EXPL'] = 'Disattivare Peer Exchange e DHT (consigliato per le reti private, solo url annunciare)';
$lang['BT_PRIVATE_TRACKER'] = 'Questo tracker è privato: elenco file (per ospiti), DHT | PEX sono disabilitati';
$lang['BT_PRIVATE_TORRENT'] = 'Il creatore di questo torrent lo ha reso privato';
$lang['BT_CHECK_ANNOUNCE_URL'] = 'Verificare annunciare url';
$lang['BT_CHECK_ANNOUNCE_URL_EXPL'] = 'registrarsi sul tracker ammessi solo gli url';
$lang['BT_REPLACE_ANN_URL'] = 'Sostituire annunciare url';
$lang['BT_REPLACE_ANN_URL_EXPL'] = 'sostituire originale annunciare url predefinito .i file torrent';
$lang['BT_DEL_ADDIT_ANN_URLS'] = 'Rimuovere tutte le ulteriori annunciare url';
$lang['BT_DEL_ADDIT_ANN_URLS_EXPL'] = 'se il torrent contiene gli indirizzi di altri inseguitori, essi saranno rimossi';

$lang['BT_SHOW_PEERS_HEAD'] = 'Peer-Elenco';
$lang['BT_SHOW_PEERS'] = 'Show peers (seeders e leechers)';
$lang['BT_SHOW_PEERS_EXPL'] = 'questo mostrerà seminatrici/leechers elenco sopra l\'argomento con torrent';
$lang['BT_SHOW_PEERS_MODE'] = 'Per impostazione predefinita, mostra coetanei come:';
$lang['BT_SHOW_PEERS_MODE_COUNT'] = 'Conta solo';
$lang['BT_SHOW_PEERS_MODE_NAMES'] = 'Solo i nomi';
$lang['BT_SHOW_PEERS_MODE_FULL'] = 'I dettagli completi';
$lang['BT_ALLOW_SPMODE_CHANGE'] = 'Consenti "dettagli Completi" modalità';
$lang['BT_ALLOW_SPMODE_CHANGE_EXPL'] = 'se "no", di default peer modalità di visualizzazione sarà disponibile';
$lang['BT_SHOW_IP_ONLY_MODER'] = 'Pari <b>IP</b>s sono visibili solo ai moderatori';
$lang['BT_SHOW_PORT_ONLY_MODER'] = 'Pari <b>Port</b>s sono visibili solo ai moderatori';

$lang['BT_SHOW_DL_LIST_HEAD'] = 'DL-Elenco';
$lang['BT_SHOW_DL_LIST'] = 'Vedi DL-Elenco Scaricare argomenti';
$lang['BT_DL_LIST_ONLY_1ST_PAGE'] = 'Vedi DL-Elenco solo sulla prima pagina di argomenti';
$lang['BT_DL_LIST_ONLY_COUNT'] = 'Mostra solo il numero di utenti';
$lang['BT_SHOW_DL_LIST_BUTTONS'] = 'Mostra i pulsanti per modificare manualmente DL-stato';
$lang['BT_SHOW_DL_BUT_WILL'] = $lang['DLWILL'];
$lang['BT_SHOW_DL_BUT_DOWN'] = $lang['DLDOWN'];
$lang['BT_SHOW_DL_BUT_COMPL'] = $lang['DLCOMPLETE'];
$lang['BT_SHOW_DL_BUT_CANCEL'] = $lang['DLCANCEL'];

$lang['BT_ADD_AUTH_KEY_HEAD'] = 'Passkey';
$lang['BT_ADD_AUTH_KEY'] = 'Permettono l\'aggiunta di chiave di accesso per il torrent file prima di scaricare';

$lang['BT_TOR_BROWSE_ONLY_REG_HEAD'] = 'Torrent browser (tracker)';
$lang['BT_TOR_BROWSE_ONLY_REG'] = 'Il browser torrent (tracker.php) è accessibile solo agli utenti registrati';
$lang['BT_SEARCH_BOOL_MODE'] = 'Consentire boolean ricerche full-text';
$lang['BT_SEARCH_BOOL_MODE_EXPL'] = 'usa *, +, - nelle ricerche';

$lang['BT_SHOW_DL_STAT_ON_INDEX_HEAD'] = "Varie";
$lang['BT_SHOW_DL_STAT_ON_INDEX'] = "Mostra statistiche UL/DL dell'utente nella parte superiore della pagina principale del forum";
$lang['BT_NEWTOPIC_AUTO_REG'] = 'Automaticamente registrare il torrente sul tracker per nuovi argomenti';
$lang['BT_SET_DLTYPE_ON_TOR_REG'] = 'Cambiare stato argomento di "Scaricare" durante la registrazione sui tracker torrent';
$lang['BT_SET_DLTYPE_ON_TOR_REG_EXPL'] = 'cambia tipo di argomento per "Scaricare" a prescindere impostazioni del forum';
$lang['BT_UNSET_DLTYPE_ON_TOR_UNREG'] = 'Cambiare argomento stato "Normale", mentre l\'annullamento della registrazione da tracker torrent';

// Release
$lang['TEMPLATE_DISABLE'] = 'Modello di disabili';
$lang['FOR_NEW_TEMPLATE'] = 'per i nuovi modelli!';
$lang['CHANGED'] = 'Cambiato';
$lang['REMOVED'] = 'Rimosso';
$lang['QUESTION'] = 'Conferma: sei sicuro di voler eseguire questa azione?';

$lang['CRON_LIST'] = 'Cron elenco';
$lang['CRON_ID'] = 'ID';
$lang['CRON_ACTIVE'] = 'Su';
$lang['CRON_ACTIVE_EXPL'] = 'Le attività';
$lang['CRON_TITLE'] = 'Titolo';
$lang['CRON_SCRIPT'] = 'Script';
$lang['CRON_SCHEDULE'] = 'Pianificazione';
$lang['CRON_LAST_RUN'] = 'Ultima Esecuzione';
$lang['CRON_NEXT_RUN'] = 'Prossima Corsa';
$lang['CRON_RUN_COUNT'] = 'Corre';
$lang['CRON_MANAGE'] = 'Gestire';
$lang['CRON_DISABLED_WARNING'] = 'Avvertimento! L\'esecuzione di script cron è disabilitata. Per abilitarlo, imposta la variabile APP_CRON_ENABLED.';

$lang['CRON_ENABLED'] = 'Cron abilitato';
$lang['CRON_CHECK_INTERVAL'] = 'Cron intervallo di controllo (sec)';

$lang['WITH_SELECTED'] = 'Con una selezione di';
$lang['NOTHING'] = 'non fare nulla';
$lang['CRON_RUN'] = 'Eseguire';
$lang['CRON_DEL'] = 'Eliminare';
$lang['CRON_DISABLE'] = 'Disattivare';
$lang['CRON_ENABLE'] = 'Attivare';
$lang['DELETE_JOB'] = 'Sei sicuro di voler eliminare job di cron?';
$lang['CRON_WORKS'] = 'Il cron sta attualmente funzionando o è rotto -> ';
$lang['REPAIR_CRON'] = 'Riparazione Cron';

$lang['CRON_EDIT_HEAD_EDIT'] = 'Edit lavoro';
$lang['CRON_EDIT_HEAD_ADD'] = 'Aggiungi lavoro';
$lang['CRON_SCRIPT_EXPL'] = 'nome dello script da "include/cron/jobs/"';
$lang['SCHEDULE'] = [
    'select' => '&raquo; Selezionare start',
    'hourly' => 'orari',
    'daily' => 'quotidiano',
    'weekly' => 'settimanale',
    'monthly' => 'mensile',
    'interval' => 'intervallo di'
];
$lang['NOSELECT'] = 'Non selezionare';
$lang['RUN_DAY'] = 'Giorno di esecuzione';
$lang['RUN_DAY_EXPL'] = 'il giorno in cui questo processo di esecuzione';
$lang['RUN_TIME'] = 'Il tempo di esecuzione';
$lang['RUN_TIME_EXPL'] = 'il momento in cui questo processo di esecuzione (ad esempio, 05:00:00)';
$lang['RUN_ORDER'] = 'Eseguire ordine';
$lang['LAST_RUN'] = 'Ultima Esecuzione';
$lang['NEXT_RUN'] = 'Prossima Corsa';
$lang['RUN_INTERVAL'] = 'Intervallo di esecuzione';
$lang['RUN_INTERVAL_EXPL'] = 'ad esempio 00:10:00';
$lang['LOG_ENABLED'] = 'Registro abilitato';
$lang['LOG_FILE'] = 'File di Log';
$lang['LOG_FILE_EXPL'] = 'il file per salvare il log';
$lang['LOG_SQL_QUERIES'] = 'Log di query SQL';
$lang['FORUM_DISABLE'] = 'Disabilitare la scheda di';
$lang['BOARD_DISABLE_EXPL'] = 'disabilitare la scheda quando questo processo viene eseguito';
$lang['RUN_COUNTER'] = 'Eseguire contatore';

$lang['JOB_REMOVED'] = 'Il lavoro è stato rimosso con successo';
$lang['SCRIPT_DUPLICATE'] = 'Script <b>' . @$_POST['cron_script'] . '</b> esiste già!';
$lang['TITLE_DUPLICATE'] = 'Nome Attività <b>' . @$_POST['cron_title'] . '</b> esiste già!';
$lang['CLICK_RETURN_JOBS_ADDED'] = '%sTorna ad aggiungere lavoro%s';
$lang['CLICK_RETURN_JOBS'] = '%sBack per l\'Attività Scheduler%s';

$lang['REBUILD_SEARCH'] = 'La Ricostruzione Dell\'Indice Di Ricerca';
$lang['REBUILD_SEARCH_DESC'] = 'Questa mod vi indice ogni post nel vostro forum, a ricostruire le tabelle di ricerca. È possibile interrompere in ogni momento e la prossima volta che si esegue di nuovo, avrete la possibilità di continuare da dove avete lasciato.<br /><br />It può prendere un lungo periodo di tempo per mostrare i suoi progressi (a seconda della "Articoli per il ciclo" e "limite di Tempo"), quindi si prega di non spostare dalla sua pagina di avanzamento fino al completamento, a meno che naturalmente si desidera interrompere.';

// Input screen
$lang['STARTING_POST_ID'] = 'A partire post_id';
$lang['STARTING_POST_ID_EXPLAIN'] = 'Primo post in cui lavorazione inizierà from<br />You può scegliere di iniziare dall\'inizio o dal post è stato interrotto';

$lang['START_OPTION_BEGINNING'] = 'iniziare dall\'inizio';
$lang['START_OPTION_CONTINUE'] = 'continuare dall\'ultimo arrestato';

$lang['CLEAR_SEARCH_TABLES'] = 'Chiaro tabelle di ricerca';
$lang['CLEAR_SEARCH_TABLES_EXPLAIN'] = '';
$lang['CLEAR_SEARCH_NO'] = 'NON';
$lang['CLEAR_SEARCH_DELETE'] = 'ELIMINARE';
$lang['CLEAR_SEARCH_TRUNCATE'] = 'Il TRONCAMENTO';

$lang['NUM_OF_POSTS'] = 'Numero di posti';
$lang['NUM_OF_POSTS_EXPLAIN'] = 'Numero di messaggi totali per process<br />It è riempito automaticamente con il numero totale residuo post trovato nel database';

$lang['POSTS_PER_CYCLE'] = 'Post per ciclo';
$lang['POSTS_PER_CYCLE_EXPLAIN'] = 'Numero di posti a processo per cycle<br />Keep basso per evitare php/webserver timeout';

$lang['REFRESH_RATE'] = 'Frequenza di aggiornamento';
$lang['REFRESH_RATE_EXPLAIN'] = 'Quanto tempo (in secondi) per rimanere inattivo prima di passare alla successiva elaborazione cycle<br />Usually non è necessario modificare questa';

$lang['TIME_LIMIT'] = 'Limite di tempo';
$lang['TIME_LIMIT_EXPLAIN'] = 'Quanto tempo (in secondi) può durare l\'elaborazione di un post prima di passare al ciclo successivo';
$lang['TIME_LIMIT_EXPLAIN_WEBSERVER'] = '<i>Your webserver ha un timeout di %s secs configurato, in modo da rimanere al di sotto di questo value</i>';

$lang['DISABLE_BOARD'] = 'Disabilitare la scheda di';

// Information strings
$lang['INFO_PROCESSING_STOPPED'] = 'È stato interrotto il trattamento a post_id %s (%s trattati i messaggi) il %s';
$lang['INFO_PROCESSING_ABORTED'] = 'Ultima interrotto il trattamento a post_id %s (%s trattati i messaggi) il %s';
$lang['INFO_PROCESSING_ABORTED_SOON'] = 'Si prega di attendere alcuni minuti prima di continuare...';
$lang['INFO_PROCESSING_FINISHED'] = 'Finito con successo il trattamento (%s trattati i messaggi) il %s';
$lang['INFO_PROCESSING_FINISHED_NEW'] = 'Finito con successo il trattamento a post_id %s (%s trattati i messaggi) il %s,<br />but ci sono stati %s nuovo post(s) dopo tale data';

// Progress screen
$lang['REBUILD_SEARCH_PROGRESS'] = 'Ricostruzione Di Avanzamento Di Ricerca';

$lang['PROCESSED_POST_IDS'] = 'Post elaborati ID : %s - %s';
$lang['TIMER_EXPIRED'] = 'Il Timer è scaduto a %s sec. ';
$lang['CLEARED_SEARCH_TABLES'] = 'Cancellato tabelle di ricerca. ';
$lang['DELETED_POSTS'] = '%s post(s) sono stati eliminati dagli utenti durante la lavorazione. ';
$lang['PROCESSING_NEXT_POSTS'] = 'L\'elaborazione successiva %s post(s). Si prega di attendere...';
$lang['ALL_SESSION_POSTS_PROCESSED'] = 'Trattati tutti i post nella sessione corrente.';
$lang['ALL_POSTS_PROCESSED'] = 'Tutti i posti sono stati trattati con successo.';
$lang['ALL_TABLES_OPTIMIZED'] = 'Tutte le tabelle di ricerca sono stati ottimizzati con successo.';

$lang['PROCESSING_POST_DETAILS'] = 'Trattamento post';
$lang['PERCENT'] = 'Percento';
$lang['CURRENT_SESSION'] = 'Sessione Corrente';
$lang['TOTAL'] = 'Totale';

$lang['PROCESS_DETAILS'] = 'da <b>%s</b> per <b>%s</b> (su un totale di <b>%s</b>)';
$lang['PERCENT_COMPLETED'] = '%s %% completato';

$lang['PROCESSING_TIME_DETAILS'] = 'Sessione corrente dettagli';
$lang['PROCESSING_TIME'] = 'Il tempo di elaborazione';
$lang['TIME_LAST_POSTS'] = 'Ultima %s post(s)';
$lang['TIME_FROM_THE_BEGINNING'] = 'Dall\'inizio';
$lang['TIME_AVERAGE'] = 'La media per ciclo';
$lang['TIME_ESTIMATED'] = 'Stimato fino alla fine';

$lang['SIZE_ESTIMATED'] = 'Stimato dopo l\'arrivo';
$lang['SIZE_SEARCH_TABLES'] = 'Cerca Tavoli dimensione';

$lang['POSTS_LAST_CYCLE'] = 'Trattati post(s) ultimo ciclo';

$lang['INFO_ESTIMATED_VALUES'] = '(*) Tutti i valori stimati sono calcolati approximately<br />based corrente completato per cento e potrebbe non rappresentare il reale valore finale.<br />As completato % aumenta la stima di valori si avvicinano a quelli reali.';

$lang['CLICK_RETURN_REBUILD_SEARCH'] = 'Fare clic su %shere%s per tornare a Ricostruire Ricerca';
$lang['REBUILD_SEARCH_ABORTED'] = 'Ricerca di rigenerazione interrotta a post_id %s.<br /><br />If è interrotta durante l\'elaborazione, è necessario attendere alcuni minuti fino a quando si esegue Ricerca di rigenerazione di nuovo, in modo che l\'ultimo ciclo può finire.';
$lang['WRONG_INPUT'] = 'Si sono inseriti alcuni valori errati. Si prega di controllare il vostro ingresso e provare di nuovo.';

// Buttons
$lang['PROCESSING'] = 'L\'elaborazione...';
$lang['FINISHED'] = 'Finito';

$lang['BOT_TOPIC_MOVED_FROM_TO'] = 'Il topic è stato spostato dal forum [b]%s[/b] al forum [b]%s[/b].[br][b]Motivo per lo spostamento:[/b] %s[br][br]%s';
$lang['BOT_MESS_SPLITS'] = 'L\'argomento è stato suddiviso. Nuovo argomento - [b]%s[/b][br][br]%s';
$lang['BOT_TOPIC_SPLITS'] = 'L\'argomento è stato diviso da [b]%s[/b][br][br]%s';

$lang['CALLSEED'] = 'Chiamare i seed';
$lang['CALLSEED_EXPLAIN'] = 'Prendere nota con la richiesta di tornare alla distribuzione';
$lang['CALLSEED_SUBJECT'] = 'Scarica aiuto %s';
$lang['CALLSEED_TEXT'] = 'Ciao![br]Your aiuto necessario il rilascio [url=%s]%s[/url][br]if si decide di aiutare, ma già eliminato il file torrent, è possibile scaricare [url=%s]this[/url][br][br]i speranza per il vostro aiuto!';
$lang['CALLSEED_MSG_OK'] = 'Il messaggio è stato inviato a tutti coloro che hanno scaricato questa versione';
$lang['CALLSEED_MSG_SPAM'] = 'La richiesta è già stata inviata con successo (Probabilmente non è)<br /><br />The prossima occasione per inviare una richiesta di <b>%s</b>.';
$lang['CALLSEED_HAVE_SEED'] = 'Argomento non necessita di aiuto (<b>Seeders:</b> %d)';

$lang['LOG_ACTION']['LOG_TYPE'] = [
    'mod_topic_delete' => 'Argomento:<br /> <b>deleted</b>',
    'mod_topic_move' => 'Argomento:<br /> <b>moved</b>',
    'mod_topic_lock' => 'Argomento:<br /> <b>closed</b>',
    'mod_topic_unlock' => 'Argomento:<br /> <b>opened</b>',
    'mod_topic_split' => 'Argomento:<br /> <b>split</b>',
    'mod_topic_set_downloaded' => 'Topic:<br /> <b>impostato come scaricato</b>',
    'mod_topic_unset_downloaded' => 'Topic:<br /> <b>impostato come non scaricato</b>',
    'mod_topic_change_tor_status' => 'Topic:<br /> <b>cambiato stato torrent</b>',
    'mod_topic_change_tor_type' => 'Topic:<br /> <b>cambiato tipo torrent</b>',
    'mod_topic_tor_unregister' => 'Topic:<br /> <b>torrent disregistrato</b>',
    'mod_topic_tor_register' => 'Topic:<br /> <b>torrent registrato</b>',
    'mod_topic_tor_delete' => 'Topic:<br /> <b>torrent eliminato</b>',
    'mod_topic_renamed' => 'Topic:<br /> <b>rinominato</b>',
    'mod_topic_poll_started' => 'Topic:<br /> <b>sondaggio avviato</b>',
    'mod_topic_poll_finished' => 'Topic:<br /> <b>sondaggio terminato</b>',
    'mod_topic_poll_deleted' => 'Topic:<br /> <b>sondaggio eliminato</b>',
    'mod_topic_poll_added' => 'Topic:<br /> <b>sondaggio aggiunto</b>',
    'mod_topic_poll_edited' => 'Topic:<br /> <b>sondaggio modificato</b>',
    'mod_post_delete' => 'Post di:<br /> <b>deleted</b>',
    'mod_post_pin' => 'Post:<br /> <b>pinnato</b>',
    'mod_post_unpin' => 'Post:<br /> <b>non pinnato</b>',
    'adm_user_delete' => 'Utente:<br /> <b>deleted</b>',
    'adm_user_ban' => 'Utente:<br /> <b>ban</b>',
    'adm_user_unban' => 'Utente:<br /> <b>unban</b>',
];

$lang['ACTS_LOG_ALL_ACTIONS'] = 'Tutte le azioni';
$lang['ACTS_LOG_SEARCH_OPTIONS'] = 'Il Log delle azioni: le opzioni di Ricerca';
$lang['ACTS_LOG_FORUM'] = 'Forum';
$lang['ACTS_LOG_ACTION'] = 'Azione';
$lang['ACTS_LOG_USER'] = 'Utente';
$lang['ACTS_LOG_LOGS_FROM'] = 'Registri ';
$lang['ACTS_LOG_FIRST'] = 'inizia per';
$lang['ACTS_LOG_DAYS_BACK'] = 'giorni indietro';
$lang['ACTS_LOG_TOPIC_MATCH'] = 'Argomento match per il titolo';
$lang['ACTS_LOG_SORT_BY'] = 'Ordina per';
$lang['ACTS_LOG_LOGS_ACTION'] = 'Azione';
$lang['ACTS_LOG_USERNAME'] = 'Username';
$lang['ACTS_LOG_TIME'] = 'Tempo';
$lang['ACTS_LOG_INFO'] = 'Info';
$lang['ACTS_LOG_FILTER'] = 'Filtro';
$lang['ACTS_LOG_TOPICS'] = 'Argomenti:';
$lang['ACTS_LOG_OR'] = 'o';

$lang['RELEASE'] = 'Rilasciare Modelli';
$lang['RELEASES'] = 'Rilascia';

$lang['BACK'] = 'Indietro';
$lang['ERROR_FORM'] = 'Campi non validi';
$lang['NEW_RELEASE'] = 'Nuova release';
$lang['NEXT'] = 'Continua';
$lang['OTHER'] = 'Altri';
$lang['ALL'] = 'Tutti';

$lang['TPL_EMPTY_FIELD'] = 'È necessario compilare il campo <b>%s</b>';
$lang['TPL_EMPTY_SEL'] = 'È necessario selezionare <b>%s</b>';
$lang['TPL_NOT_NUM'] = '<b>%s</b> - Non è un numero';
$lang['TPL_NOT_URL'] = '<b>%s</b> - Deve essere l\'URL https://';
$lang['TPL_NOT_IMG_URL'] = '<b>%s</b> - Deve essere https:// IMG_URL';
$lang['TPL_PUT_INTO_SUBJECT'] = 'mettere in oggetto';
$lang['TPL_POSTER'] = 'poster';
$lang['TPL_REQ_FILLING'] = 'richiede la compilazione di';
$lang['TPL_NEW_LINE'] = 'nuova linea';
$lang['TPL_NEW_LINE_AFTER'] = 'nuova linea, dopo il titolo';
$lang['TPL_NUM'] = 'numero';
$lang['TPL_URL'] = 'URL';
$lang['TPL_IMG'] = 'immagine';
$lang['TPL_PRE'] = 'pre';
$lang['TPL_SPOILER'] = 'spoiler';
$lang['TPL_IN_LINE'] = 'nella stessa linea';
$lang['TPL_HEADER_ONLY'] = 'solo in un titolo';

$lang['SEARCH_INVALID_USERNAME'] = 'Nome utente non valido inserito per la ricerca';
$lang['SEARCH_INVALID_EMAIL'] = 'Indirizzo email non valido inserito per la ricerca';
$lang['SEARCH_INVALID_IP'] = 'Indirizzo IP non valido inserito per la ricerca';
$lang['SEARCH_INVALID_GROUP'] = 'Gruppo non valido inserito per la ricerca';
$lang['SEARCH_INVALID_RANK'] = 'Posizione non valida inserita per la ricerca';
$lang['SEARCH_INVALID_DATE'] = 'Data inserita per la ricerca non valida';
$lang['SEARCH_INVALID_POSTCOUNT'] = 'Numero di post inserito nella ricerca non valido';
$lang['SEARCH_INVALID_USERFIELD'] = 'Non valido Userfield dati inseriti';
$lang['SEARCH_INVALID_LASTVISITED'] = 'Data inserita per l\'ultima ricerca visitata non valida';
$lang['SEARCH_INVALID_LANGUAGE'] = 'Non Valido Lingua Selezionata';
$lang['SEARCH_INVALID_TIMEZONE'] = 'Non Valido Fuso Orario Selezionato';
$lang['SEARCH_INVALID_MODERATORS'] = 'Non Valido Il Forum Selezionato';
$lang['SEARCH_INVALID'] = 'Voci Di Ricerca';
$lang['SEARCH_INVALID_DAY'] = 'Il giorno che hai inserito non è valido';
$lang['SEARCH_INVALID_MONTH'] = 'Il mese che hai inserito non è valido';
$lang['SEARCH_INVALID_YEAR'] = 'L\'anno inserito non è valido';
$lang['SEARCH_FOR_USERNAME'] = 'La ricerca di nomi corrispondenti %s';
$lang['SEARCH_FOR_EMAIL'] = 'La ricerca di indirizzi e-mail corrispondenti %s';
$lang['SEARCH_FOR_IP'] = 'La ricerca di indirizzi IP corrispondenti %s';
$lang['SEARCH_FOR_DATE'] = 'Ricerca di utenti che hanno aderito %s %d/%d/%d';
$lang['SEARCH_FOR_GROUP'] = 'La ricerca di membri di un gruppo di %s';
$lang['SEARCH_FOR_RANK'] = 'La ricerca vettori rango di %s';
$lang['SEARCH_FOR_BANNED'] = 'Ricerca di utenti esclusi';
$lang['SEARCH_FOR_ADMINS'] = 'La Ricerca Di Amministratori';
$lang['SEARCH_FOR_MODS'] = 'La Ricerca Di Moderatori';
$lang['SEARCH_FOR_DISABLED'] = 'La ricerca per gli utenti disabili';
$lang['SEARCH_FOR_POSTCOUNT_GREATER'] = 'Ricerca di utenti con un numero maggiore di %d';
$lang['SEARCH_FOR_POSTCOUNT_LESSER'] = 'Ricerca di utenti con un post contare meno di %d';
$lang['SEARCH_FOR_POSTCOUNT_RANGE'] = 'Ricerca di utenti con un post contare tra %d e %d';
$lang['SEARCH_FOR_POSTCOUNT_EQUALS'] = 'Ricerca di utenti con un post il valore di conteggio di %d';
$lang['SEARCH_FOR_USERFIELD_TWITTER'] = 'Ricerca di utenti con un Twitter di corrispondenza %s';
$lang['SEARCH_FOR_USERFIELD_WEBSITE'] = 'Ricerca utenti con un sito web che corrisponde a %s';
$lang['SEARCH_FOR_USERFIELD_LOCATION'] = 'Ricerca di utenti con una Posizione corrispondente %s';
$lang['SEARCH_FOR_USERFIELD_INTERESTS'] = 'Ricerca di utenti con i loro Interessi di campo corrispondente %s';
$lang['SEARCH_FOR_USERFIELD_OCCUPATION'] = 'Ricerca di utenti con Occupazione di campo corrispondente %s';
$lang['SEARCH_FOR_LASTVISITED_INTHELAST'] = 'Ricerca di utenti che hanno visitato negli ultimi %s';
$lang['SEARCH_FOR_LASTVISITED_AFTERTHELAST'] = 'Ricerca di utenti che hanno visitato dopo l\'ultima %s';
$lang['SEARCH_FOR_LANGUAGE'] = 'Ricerca di utenti che hanno impostato %s come lingua';
$lang['SEARCH_FOR_TIMEZONE'] = 'Ricerca di utenti che hanno impostato UTC %s come il loro fuso orario';
$lang['SEARCH_FOR_MODERATORS'] = 'Di ricerca per i moderatori del Forum -> %s';
$lang['SEARCH_USERS_ADVANCED'] = 'Utente Avanzato Di Ricerca';
$lang['SEARCH_USERS_EXPLAIN'] = 'Questo Modulo permette di eseguire ricerche avanzate per gli utenti su una vasta gamma di criteri. Si prega di leggere la descrizione di ogni campo per capire ogni opzione di ricerca completamente.';
$lang['SEARCH_USERNAME_EXPLAIN'] = 'Qui si può fare una distinzione tra maiuscole e minuscole ricerca per nome utente. Se vuoi match parte del nome utente, l\'uso * (asterisco) come carattere jolly.';
$lang['SEARCH_EMAIL_EXPLAIN'] = 'Immettere un\'espressione di abbinare un indirizzo email dell\'utente. Questa distinzione tra maiuscole e minuscole. Se si desidera eseguire una corrispondenza parziale, l\'uso * (asterisco) come carattere jolly.';
$lang['SEARCH_IP_EXPLAIN'] = 'Ricerca di utenti con un determinato indirizzo IP (xxx.xxx.xxx.xxx).';
$lang['SEARCH_USERS_JOINED'] = 'Gli utenti che hanno aderito';
$lang['SEARCH_USERS_LASTVISITED'] = 'Utenti che hanno visitato';
$lang['IN_THE_LAST'] = 'negli ultimi';
$lang['AFTER_THE_LAST'] = 'dopo l\'ultima';
$lang['BEFORE'] = 'Prima';
$lang['AFTER'] = 'Dopo';
$lang['SEARCH_USERS_JOINED_EXPLAIN'] = 'Di ricerca per gli utenti di join Prima o Dopo (e su) di una data specifica. Il formato della data è GG/MM/AAAA.';
$lang['SEARCH_USERS_GROUPS_EXPLAIN'] = 'Visualizza tutti i membri del gruppo selezionato.';
$lang['SEARCH_USERS_RANKS_EXPLAIN'] = 'Visualizza tutti i vettori selezionati rango.';
$lang['BANNED_USERS'] = 'Vietato Agli Utenti';
$lang['DISABLED_USERS'] = 'Gli Utenti Disabili';
$lang['SEARCH_USERS_MISC_EXPLAIN'] = 'Amministratori - Tutti gli utenti con poteri di amministratore; Moderatori - Tutti i moderatori del forum; Utenti bannati - Tutti gli account che sono stati bannati su questi forum; Utenti Disabili - Tutti gli utenti con account disabilitati (disabilitati manualmente o mai verificati il loro indirizzo email); Utenti con PM disabilitati: seleziona gli utenti a cui sono stati rimossi i privilegi per i messaggi privati (fatto tramite Gestione utenti)';
$lang['POSTCOUNT'] = 'Conteggio messaggi';
$lang['EQUALS'] = 'Uguale';
$lang['GREATER_THAN'] = 'Maggiore';
$lang['LESS_THAN'] = 'A meno di';
$lang['SEARCH_USERS_POSTCOUNT_EXPLAIN'] = 'Puoi cercare gli utenti in base al valore del conteggio dei post. Puoi cercare per un valore specifico, maggiore o minore di un valore o tra due valori. Per eseguire la ricerca per intervallo, seleziona "Uguale a", quindi inserisci i valori iniziale e finale dell\'intervallo separati da un trattino (-), ad esempio 10-15';
$lang['USERFIELD'] = 'Campo utente';
$lang['SEARCH_USERS_USERFIELD_EXPLAIN'] = 'Ricerca di utenti in base a vari campi del profilo. I caratteri jolly sono supportati utilizzando un asterisco (*).';
$lang['SEARCH_USERS_LASTVISITED_EXPLAIN'] = 'È possibile cercare per gli utenti in base alla loro ultima data di accesso utilizzando questa opzione di ricerca';
$lang['SEARCH_USERS_LANGUAGE_EXPLAIN'] = 'Questo consentirà di visualizzare gli utenti che hanno selezionato una lingua specifica nel loro Profilo';
$lang['SEARCH_USERS_TIMEZONE_EXPLAIN'] = 'Gli utenti che hanno selezionato un determinato fuso orario nel loro profilo';
$lang['MODERATORS_OF'] = 'I moderatori di';
$lang['SEARCH_USERS_MODERATORS_EXPLAIN'] = 'Cerca utenti con autorizzazioni di moderazione per un forum specifico. Le autorizzazioni di moderazione sono riconosciute dalle autorizzazioni utente o dall\'appartenenza a un gruppo con le autorizzazioni di gruppo corrette.';

$lang['SEARCH_USERS_NEW'] = '%s ceduto %d risultato(s). Eseguire <a href="%s">another search</a>.';
$lang['BANNED'] = 'Vietato';
$lang['NOT_BANNED'] = 'Non Sono Vietate';
$lang['SEARCH_NO_RESULTS'] = 'Nessun utente corrispondono ai tuoi criteri selezionati. Si prega di provare un\'altra ricerca. Se siete alla ricerca il nome utente o l\'indirizzo email per i campi, per le corrispondenze parziali è necessario utilizzare il carattere jolly " * " (asterisco).';
$lang['ACCOUNT_STATUS'] = 'Account Stato';
$lang['SORT_OPTIONS'] = 'Opzioni di ordinamento:';
$lang['LAST_VISIT'] = 'Ultima Visita';
$lang['DAY'] = 'Giorno';

$lang['POST_EDIT_CANNOT'] = 'Ci dispiace, ma non è possibile modificare i messaggi';
$lang['FORUMS_IN_CAT'] = 'forum in che categoria';

$lang['MC_TITLE'] = 'Commento di moderazione';
$lang['MC_LEGEND'] = 'Digitare un commento';
$lang['MC_FAQ'] = 'Il testo inserito verrà visualizzato sotto questo messaggio';
$lang['MC_COMMENT_PM_SUBJECT'] = "%s nel tuo messaggio";
$lang['MC_COMMENT_PM_MSG'] = "Ciao, [b]%s[/b]\nModerator sinistra nel messaggio [url=%s][b]%s[/b][/url][quote]\n%s\n[/quote]";
$lang['MC_COMMENT'] = [
    0 => [
        'title' => '',
        'type' => 'Elimina commento',
    ],
    1 => [
        'title' => 'Commento da %s',
        'type' => 'Commento',
    ],
    2 => [
        'title' => 'Informazioni %s',
        'type' => 'Informazioni',
    ],
    3 => [
        'title' => 'Avviso da %s',
        'type' => 'Avviso',
    ],
    4 => [
        'title' => 'Violazione da %s',
        'type' => 'Violazione',
    ],
];

$lang['SITEMAP'] = 'Sitemap';
$lang['SITEMAP_ADMIN'] = 'Gestire sitemap';
$lang['SITEMAP_CREATED'] = 'Sitemap creata';
$lang['SITEMAP_AVAILABLE'] = 'ed è disponibile a';
$lang['SITEMAP_NOT_CREATED'] = 'Sitemap non è ancora creata';
$lang['SITEMAP_OPTIONS'] = 'Opzioni';
$lang['SITEMAP_CREATE'] = 'Creare / aggiornare la sitemap';
$lang['SITEMAP_WHAT_NEXT'] = 'Cosa fare dopo?';
$lang['SITEMAP_GOOGLE_1'] = 'Registra il tuo sito in <a href="https://www.google.com/webmasters/" target="_blank">Google Webmaster</a> utilizzando il tuo account Google.';
$lang['SITEMAP_GOOGLE_2'] = '<a href="https://www.google.com/webmasters/tools/sitemap-list" target="_blank">Add sitemap</a> del sito è registrato.';
$lang['SITEMAP_YANDEX_1'] = 'Registra il tuo sito in <a href="https://webmaster.yandex.ru/sites/" target="_blank">Yandex Webmaster</a> utilizzando il Yandex conto.';
$lang['SITEMAP_YANDEX_2'] = '<a href="https://webmaster.yandex.ru/site/map.xml" target="_blank">Add sitemap</a> del sito è registrato.';
$lang['SITEMAP_BING_1'] = 'Registra il tuo sito in <a href="https://www.bing.com/webmaster/" target="_blank">Bing Webmaster</a> utilizzando il tuo account Microsoft.';
$lang['SITEMAP_BING_2'] = 'Aggiungi sitemap del sito è registrato nelle sue impostazioni.';
$lang['SITEMAP_ADD_TITLE'] = 'Pagine aggiuntive per la sitemap';
$lang['SITEMAP_ADD_PAGE'] = 'Pagine aggiuntive';
$lang['SITEMAP_ADD_EXP_1'] = 'È possibile specificare altre pagine del tuo sito che dovrebbe essere incluso nel vostro file di sitemap che è la creazione.';
$lang['SITEMAP_ADD_EXP_2'] = 'Ogni riferimento deve iniziare con http(s):// e una nuova linea!';

$lang['FORUM_MAP'] = 'Forum " mappa';
$lang['ATOM_FEED'] = 'Feed';
$lang['ATOM_ERROR'] = 'Errore durante la generazione di feed';
$lang['ATOM_SUBSCRIBE'] = 'Iscriviti al feed';
$lang['ATOM_UPDATED'] = 'Aggiornato';
$lang['ATOM_GLOBAL_FEED'] = 'Feed globale per tutti i forum';

$lang['HASH_INVALID'] = 'Hash %s non è valido';
$lang['HASH_NOT_FOUND'] = 'Versione con hash %s non trovato';

$lang['TERMS_EMPTY_TEXT'] = '[align=center]Il testo di questa pagina è modificato in: [url]%s[/url]. Questa linea può vedere solo gli amministratori.[/align]';
$lang['TERMS_EXPLAIN'] = 'Su questa pagina, è possibile specificare il testo di le regole di base della risorsa viene visualizzato dagli utenti.';
$lang['TERMS_UPDATED_SUCCESSFULLY'] = 'I termini sono stati aggiornati con successo';
$lang['CLICK_RETURN_TERMS_CONFIG'] = '%sClicca qui per tornare all\'editor dei termini%s';

$lang['TR_STATS'] = [
    0 => 'gli utenti inattivi in 30 giorni',
    1 => 'gli utenti inattivi per più di 90 giorni',
    2 => 'distribuzioni di dimensioni medie sul tracker',
    3 => 'numero totale di mani sul tracker',
    4 => 'come molti live mani (c\'è almeno 1 led)',
    5 => 'quante mani che semina più di 5 semi',
    6 => 'come molti di noi uploaders (quelli che hanno riempito di almeno 1 mano)',
    7 => 'quante uploaders negli ultimi 30 giorni',
];

$lang['NEW_POLL_START'] = 'Sondaggio attivato';
$lang['NEW_POLL_END'] = 'Sondaggio completato';
$lang['NEW_POLL_ENDED'] = 'Questo sondaggio è già stato completato';
$lang['NEW_POLL_DELETE'] = 'Sondaggio eliminato';
$lang['NEW_POLL_ADDED'] = 'Sondaggio aggiunto';
$lang['NEW_POLL_ALREADY'] = 'Il tema ha già un sondaggio';
$lang['NEW_POLL_RESULTS'] = 'Sondaggio cambiato e i vecchi risultati eliminato';
$lang['NEW_POLL_VOTES'] = 'È necessario immettere una corretta opzioni di risposta (minimo 2, massimo è %s)';
$lang['NEW_POLL_DAYS'] = 'Il tempo del sondaggio (%s giorni dal momento della creazione a tema) già finito';
$lang['NEW_POLL_U_NOSEL'] = 'Non è stato selezionato voto';
$lang['NEW_POLL_U_CHANGE'] = 'Modificare il sondaggio';
$lang['NEW_POLL_U_EDIT'] = 'Modificare il sondaggio (i vecchi risultati verranno eliminati)';
$lang['NEW_POLL_U_VOTED'] = 'Votato tutti';
$lang['NEW_POLL_U_START'] = 'Attivare il sondaggio';
$lang['NEW_POLL_U_END'] = 'Fine sondaggio';
$lang['NEW_POLL_M_TITLE'] = 'Titolo del sondaggio';
$lang['NEW_POLL_M_VOTES'] = 'Opzioni';
$lang['NEW_POLL_M_EXPLAIN'] = 'Ogni riga corrisponde ad una risposta (max';

$lang['OLD_BROWSER'] = 'Stai usando un browser obsoleto. Il sito non sarà visualizzato correttamente.';
$lang['GO_BACK'] = 'Tornare indietro';

$lang['UPLOAD_ERROR_COMMON_DISABLED'] = 'Caricamento file disabilitato';
$lang['UPLOAD_ERROR_COMMON'] = 'Caricamento di File di errore';
$lang['UPLOAD_ERROR_SIZE'] = 'Il file caricato eccede la dimensione massima di %s';
$lang['UPLOAD_ERROR_FORMAT'] = 'Non valido il tipo di file di immagine';
$lang['UPLOAD_ERROR_DIMENSIONS'] = 'Le dimensioni dell\'immagine superano il massimo consentito di %sx%s pixel';
$lang['UPLOAD_ERROR_NOT_IMAGE'] = 'Il file caricato non è un\'immagine';
$lang['UPLOAD_ERROR_NOT_ALLOWED'] = 'Estensione %s per il download non è consentito';
$lang['UPLOAD_ERRORS'] = [
    UPLOAD_ERR_INI_SIZE => 'hai superato la dimensione massima del file per il server',
    UPLOAD_ERR_FORM_SIZE => 'hai superato la dimensione massima di caricamento',
    UPLOAD_ERR_PARTIAL => 'il file è stato scaricato parzialmente',
    UPLOAD_ERR_NO_FILE => 'il file non è stato caricato',
    UPLOAD_ERR_NO_TMP_DIR => 'directory temporanea non trovato',
    UPLOAD_ERR_CANT_WRITE => 'errore di scrittura',
    UPLOAD_ERR_EXTENSION => 'upload è stato fermato dall\'estensione',
];

// Captcha
$lang['CAPTCHA'] = 'Controllare che tu non sia un robot';
$lang['CAPTCHA_WRONG'] = 'Non si poteva confermare che non sei un robot';
$lang['CAPTCHA_SETTINGS'] = '<h2>Captcha non completamente configurato</h2><p>Genera le chiavi utilizzando la dashboard del tuo servizio captcha, dopo devi metterle nel file library/config.php.</p>';
$lang['CAPTCHA_OCCURS_BACKGROUND'] = 'La verifica CAPTCHA si svolge in background';

// Sending email
$lang['REPLY_TO'] = 'Rispondi a';
$lang['EMAILER_SUBJECT'] = [
    'EMPTY' => 'Nessun soggetto',
    'GROUP_ADDED' => 'Sei stato aggiunto al gruppo utenti',
    'GROUP_APPROVED' => 'La tua richiesta di adesione al gruppo utenti è stata accolta',
    'GROUP_REQUEST' => 'Una richiesta per unirti al tuo gruppo di utenti',
    'PRIVMSG_NOTIFY' => 'Nuovo messaggio privato',
    'TOPIC_NOTIFY' => 'Notifica di risposta nel thread - %s',
    'USER_ACTIVATE' => 'Riattivazione dell\'account',
    'USER_ACTIVATE_PASSWD' => 'Conferma di una nuova password',
    'USER_WELCOME' => 'Benvenuto nel sito %s',
    'USER_WELCOME_INACTIVE' => 'Benvenuto nel sito %s',
];

// Null ratio
$lang['BT_NULL_RATIO'] = 'Reimposta il rapporto';
$lang['BT_NULL_RATIO_NONE'] = 'Non hai un rapporto';
$lang['BT_NULL_RATIO_ALERT'] = "Attenzione!\n\nSei sicuro di voler reimpostare il tuo rapporto?";
$lang['BT_NULL_RATIO_AGAIN'] = 'Hai già reimpostato il tuo rapporto!';
$lang['BT_NULL_RATIO_NOT_NEEDED'] = 'Hai un buon rapporto. La reimpostazione è possibile solo con un rapporto inferiore a %s';
$lang['BT_NULL_RATIO_SUCCESS'] = 'Il rapporto è stato reimpostato con successo!';

// Releaser stats
$lang['RELEASER_STAT_SIZE'] = 'Dimensione totale:';
$lang['RELEASER_STAT'] = 'Statistiche del releaser:';
$lang['RELEASER_STAT_SHOW'] = 'Mostra statistiche';

// Dark mode
$lang['DARK_MODE_TOGGLE'] = 'Attiva modalità scura';
