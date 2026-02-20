<?php

/**
 * TorrentPier – Bull-powered BitTorrent tracker engine
 *
 * @copyright Copyright (c) 2005-2025 TorrentPier (https://torrentpier.com)
 * @link      https://github.com/torrentpier/torrentpier for the canonical source repository
 * @license   https://github.com/torrentpier/torrentpier/blob/master/LICENSE MIT License
 */

// Common, these terms are used extensively on several pages
$lang['ADMIN'] = 'Администрација';
$lang['FORUM'] = 'Форум';
$lang['CATEGORY'] = 'Категорија';
$lang['HIDE_CAT'] = 'Сакриј категорије';
$lang['HIDE_CAT_MESS'] = 'Неке категорије су скривене прилагођеним опцијама приказа';
$lang['SHOW_ALL'] = 'Покажи све';
$lang['TOPIC'] = 'Тема';
$lang['TOPICS'] = 'Теме';
$lang['TOPICS_SHORT'] = 'Теме';
$lang['REPLIES'] = 'Одговори';
$lang['REPLIES_SHORT'] = 'Одговори';
$lang['VIEWS'] = 'Погледи';
$lang['POSTS'] = 'Поруке';
$lang['POSTS_SHORT'] = 'Поруке';
$lang['POSTED'] = 'Објављено';
$lang['USERNAME'] = 'Корисничко име';
$lang['PASSWORD'] = 'Лозинка';
$lang['PASSWORD_SHOW_BTN'] = 'Прикажи лозинку';
$lang['EMAIL'] = 'Е-маил';
$lang['PM'] = 'МВ';
$lang['AUTHOR'] = 'Аутор';
$lang['MESSAGE'] = 'Порука';
$lang['TORRENT'] = 'Торент';
$lang['PERMISSIONS'] = 'Дозволе';
$lang['TYPE'] = 'Тип';

$lang['1_DAY'] = '1 дан';
$lang['7_DAYS'] = '7 дана';
$lang['2_WEEKS'] = '2 недеље';
$lang['1_MONTH'] = '1 месец';
$lang['3_MONTHS'] = '3 месеца';
$lang['6_MONTHS'] = '6 месеци';
$lang['1_YEAR'] = '1 година';

$lang['GO'] = 'Иде';
$lang['SUBMIT'] = 'Поднесите';
$lang['RESET'] = 'Откажи';
$lang['CANCEL'] = 'Прекините';
$lang['PREVIEW'] = 'Преглед';
$lang['AJAX_PREVIEW'] = 'Брз Поглед';
$lang['CONFIRM'] = 'Потврди';
$lang['YES'] = 'Да';
$lang['NO'] = 'Нема';
$lang['ENABLED'] = 'Укључен';
$lang['DISABLED'] = 'Искључен';
$lang['ERROR'] = 'Грешка';
$lang['SELECT_ACTION'] = 'Изаберите акцију';
$lang['CLEAR'] = 'Очисти';
$lang['MOVE_TO_TOP'] = 'Помери на врх';
$lang['UNKNOWN'] = 'Непознато';
$lang['COPY_TO_CLIPBOARD'] = 'Копирај у одрезак';
$lang['NO_ITEMS'] = 'Чини се да овде нема података...';
$lang['PLEASE_TRY_AGAIN'] = 'Молимо покушајте поново после неколико секунди...';

$lang['NEXT_PAGE'] = 'Даље';
$lang['PREVIOUS_PAGE'] = 'Претходна';
$lang['SHORT_PAGE'] = 'strana';
$lang['GOTO_PAGE'] = 'Страница';
$lang['GOTO_SHORT'] = 'Страница';
$lang['JOINED'] = 'Придружио';
$lang['LONGEVITY'] = 'Регистровати';
$lang['IP_ADDRESS'] = 'ИП адреса';

$lang['SELECT_FORUM'] = 'Изаберите форум';
$lang['VIEW_LATEST_POST'] = 'Гледај последњи пост';
$lang['VIEW_NEWEST_POST'] = 'Гледај нови пост';
$lang['PAGE_OF'] = 'Страница <b>%d</b> од <b>%s</b>';

$lang['TWITTER'] = 'Твитер';
$lang['TWITTER_ERROR'] = 'Унели сте неисправно корисничко име Твитера';

$lang['POST_NEW_TOPIC'] = 'Објави нову тему';
$lang['POST_NEW_RELEASE'] = 'Објави ново издање';
$lang['REPLY_TO_TOPIC'] = 'Одговори на тему';

$lang['CLICK_RETURN_TOPIC'] = 'Кликните %sHere%s да се вратите на тему.'; // %s's here are for uris, do not remove!
$lang['CLICK_RETURN_FORUM'] = 'Кликните %sHere%s да се вратите на форум.';
$lang['CLICK_RETURN_MODCP'] = 'Кликните %sHere%s за повратак на контролној табли модератора.';

$lang['ADMIN_PANEL'] = 'Идите у управу.';
$lang['ALL_CACHE_CLEARED'] = 'Кеш је очишћен.';
$lang['ALL_TEMPLATE_CLEARED'] = 'Кеш шаблона је очишћен.';
$lang['DATASTORE_CLEARED'] = 'Спремиште је очишћено.';
$lang['BOARD_DISABLE'] = 'Жао нам је, форум је онемогућен. Покушајте поново касније.';
$lang['BOARD_DISABLE_CRON'] = 'Форум је затворен за одржавање. Покушајте поново касније.';
$lang['ADMIN_DISABLE'] = 'Форум је онемогућен од стране администратора. Можете га укључити у било ком тренутку';
$lang['ADMIN_DISABLE_CRON'] = 'Форум је закључан од стране крона. Можете уклонити закључавање у било ком тренутку';
$lang['ADMIN_DISABLE_TITLE'] = 'Форум је онемогућен.';
$lang['ADMIN_DISABLE_CRON_TITLE'] = 'Форум је затворен за одржавање.';
$lang['ADMIN_UNLOCK'] = 'Омогући форум.';
$lang['ADMIN_UNLOCKED'] = 'Откључан.';
$lang['ADMIN_UNLOCK_CRON'] = 'Уклоните закључавање.';
$lang['PAGE_NOT_FOUND'] = 'Страница није пронађена';

$lang['LOADING'] = 'Учитавање...';
$lang['JUMPBOX_TITLE'] = 'Изаберите форум';
$lang['DISPLAYING_OPTIONS'] = 'Приказивање опција.';

// Global Header strings
$lang['BROWSING_FORUM'] = 'Корисници прегледају овај форум:';
$lang['ONLINE_USERS'] = 'Укупно има <b>%1$d</b> корисника онлине: %2$d регистровани и %3$d гости';
$lang['RECORD_ONLINE_USERS'] = 'Највише корисника онлине је <b>%s</b> на %s.'; // first %s = number of users, second %s is the date.

$lang['ONLINE_ADMIN'] = 'Администратор';
$lang['ONLINE_MOD'] = 'Модератор';
$lang['ONLINE_GROUP_MEMBER'] = 'Члан групе.';

$lang['CURRENT_TIME'] = 'Тренутно време је: <span class="tz_time">%s</span>.';

$lang['SEARCH_NEW'] = 'Гледај најновије поруке.';
$lang['SEARCH_SELF'] = 'Моје поруке.';
$lang['SEARCH_SELF_BY_LAST'] = 'Време последње поруке.';
$lang['SEARCH_SELF_BY_MY'] = 'Моје време поста.';
$lang['SEARCH_LATEST'] = 'Најновије теме.';
$lang['LATEST_RELEASES'] = 'Најновија издања.';

$lang['REGISTER'] = 'Пријавите.';
$lang['PROFILE'] = 'Профил.';
$lang['EDIT_PROFILE'] = 'Измените профил.';
$lang['SEARCH'] = 'Претрага.';
$lang['MEMBERLIST'] = 'Чланак.';
$lang['USERGROUPS'] = 'Групе.';
$lang['LASTPOST'] = 'Последња порука.';
$lang['MODERATOR'] = 'Модератор';
$lang['MODERATORS'] = 'Модератори';
$lang['TERMS'] = 'Услови';
$lang['NOTHING_HAS_CHANGED'] = 'Ништа се није променило';

// Stats block text
$lang['POSTED_TOPICS_TOTAL'] = 'Наши корисници су послали укупно <b>%s</b> теме'; // Number of topics
$lang['POSTED_POSTS_TOTAL'] = 'Наши корисници су укупно поставили <b>%s</b> порука'; // Number of posts
$lang['REGISTERED_USERS_TOTAL'] = 'Имамо <b>%s</b> регистрованих корисника.'; // # registered users
$lang['USERS_TOTAL_GENDER'] = 'Дечаци: <b>%d</b>, Девојке: <b>%d</b>, Други: <b>%d</b>';
$lang['NEWEST_USER'] = 'Последњи регистровани корисник <b>%s</b>'; // a href, username, /a

// Tracker stats
$lang['TORRENTS_STAT'] = 'Бујица: <b style="color: blue;">%s</b>,&nbsp; Укупан износ: <b>%s</b>'; // first %s = number of torrents, second %s is the total size.
$lang['PEERS_STAT'] = 'Вршњаци: <b>%s</b>,&nbsp; Сидери: <b class="seedmed">%s</b>,&nbsp; Личери: <b class="leechmed">%s</b>'; // first %s = number of peers, second %s = number of seeders,  third %s = number of leechers.
$lang['SPEED_STAT'] = 'Укупна брзина: <b>%s</b>&nbsp;'; // %s = total speed.

$lang['NO_NEW_POSTS'] = 'Нема нових порука';
$lang['NEW_POSTS'] = 'Нове поруке';
$lang['FORUM_LOCKED_MAIN'] = 'Форум је блокиран';

// Login
$lang['ENTER_PASSWORD'] = 'Молимо унесите ваше корисничко име и лозинку за пријављивање.';
$lang['LOGIN'] = 'Пријавите се';
$lang['LOGOUT'] = 'Изаћи';
$lang['CONFIRM_LOGOUT'] = 'Да ли сте сигурни да желите да изађете?';

$lang['FORGOTTEN_PASSWORD'] = 'Заборавили сте лозинку?';
$lang['AUTO_LOGIN'] = 'Аутоматски ме пријави на систем';
$lang['ERROR_LOGIN'] = 'Корисничко име или лозинка коју сте унели је нетачна.';
$lang['REMEMBER'] = 'Запамти';
$lang['USER_WELCOME'] = 'Добродошли,';

// Index page
$lang['HOME'] = 'Почетна страница';
$lang['NO_POSTS'] = 'Нема постова';
$lang['NO_FORUMS'] = 'Овај форум не садржи ништа';

$lang['PRIVATE_MESSAGE'] = 'Приватну Поруку';
$lang['PRIVATE_MESSAGES'] = 'Приватне Поруке';
$lang['WHOSONLINE'] = 'Ко је на мрежи';

$lang['MARK_ALL_FORUMS_READ'] = 'Означи све форуме као прочитане';

$lang['LATEST_NEWS'] = 'Најновије вести';
$lang['NETWORK_NEWS'] = 'Мрежа вести';
$lang['SUBFORUMS'] = 'Подфорумы';

$lang['FORUM_NOT_EXIST'] = 'Форум који сте изабрали не постоји.';
$lang['ERROR_PORNO_FORUM'] = 'Овај тип форума (18+) је сакривен у вашем профилу.';

$lang['DISPLAY_TOPICS'] = 'Прикажи теме';
$lang['MODERATE_FORUM'] = 'Управљајте овим форумом';
$lang['TITLE_SEARCH_HINT'] = 'претрага по имену...';

$lang['TOPIC_ANNOUNCEMENT'] = 'Оглас:';
$lang['TOPIC_MOVED'] = 'Премештена:';
$lang['TOPIC_POLL'] = '[ Анкету ]';

$lang['MARK_TOPICS_READ'] = 'Означите све теме као прочитане';
$lang['TOPICS_MARKED_READ'] = 'Теме на овом форуму су означене као прочитане.';

$lang['RULES_POST_CAN'] = 'Можете да направите нове теме у овом форуму.';
$lang['RULES_POST_CANNOT'] = 'Немојте правити нове теме у овом форуму.';
$lang['RULES_REPLY_CAN'] = 'Можете одговорити на теме у овом форуму.';
$lang['RULES_REPLY_CANNOT'] = 'Не можете одговорити на теме у овом форуму.';
$lang['RULES_EDIT_CAN'] = 'Можете изменити ваше постове у овом форуму.';
$lang['RULES_EDIT_CANNOT'] = 'Не можете изменити ваше постове у овом форуму.';
$lang['RULES_DELETE_CAN'] = 'Можете да обришете ваше постове у овом форуму.';
$lang['RULES_DELETE_CANNOT'] = 'Не можете да обришете ваше постове у овом форуму.';
$lang['RULES_VOTE_CAN'] = 'Можете да гласате у анкетама у овом форуму.';
$lang['RULES_VOTE_CANNOT'] = 'Не можете да гласате у анкетама у овом форуму.';
$lang['RULES_MODERATE'] = 'Можете да модерирате овај форум.';

$lang['NO_TOPICS_POST_ONE'] = 'У овом форуму још нема постова<br />Кликните на <b>Нова Тема</b> икону, и ваш пост ће бити први.';
$lang['NO_RELEASES_POST_ONE'] = 'У овом форуму још нема издања<br />Кликните на <b>Ново Издање</b> икону, и ваше издање ће бити прво.';

$lang['GUEST'] = 'Гост';
$lang['SUBMIT_VOTE'] = 'Поднесите глас.';

$lang['NO_NEWER_TOPICS'] = 'Нема новијих тема у овом форуму.';
$lang['NO_OLDER_TOPICS'] = 'Нема старијих тема у овом форуму.';
$lang['TOPIC_POST_NOT_EXIST'] = 'Тема или порука коју сте тражили не постоји.';
$lang['NO_POSTS_TOPIC'] = 'Нема порука у овој теми';

$lang['DISPLAY_POSTS'] = 'Прикажи постове.';
$lang['ALL_POSTS'] = 'Сви постови.';
$lang['NEWEST_FIRST'] = 'Најновије прво.';
$lang['OLDEST_FIRST'] = 'Најстарији прво.';

$lang['READ_PROFILE'] = 'Погледајте профил корисника.';

$lang['WROTE'] = 'написао.'; // proceeds the username and is followed by the quoted text
$lang['QUOTE'] = 'Цитат.'; // comes before bbcode quote output
$lang['CODE'] = 'Код.'; // comes before bbcode code output
$lang['SPOILER_HEAD'] = 'скривени текст.';
$lang['SPOILER_CLOSE'] = 'затвори';
$lang['PLAY_ON_CURPAGE'] = 'Почните да играте на тренутној страници.';

$lang['EDITED_TIME_TOTAL'] = 'Последњи пут изменио <b>%s</b> на %s; уређивање %d пута укупно'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['EDITED_TIMES_TOTAL'] = 'Последњи пут изменио <b>%s</b> на %s; уређивање %d пута укупно'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['LOCK_TOPIC'] = 'Затворите тему';
$lang['UNLOCK_TOPIC'] = 'Отворите тему.';
$lang['MOVE_TOPIC'] = 'Премести тему.';
$lang['DELETE_TOPIC'] = 'Обриши тему.';
$lang['SPLIT_TOPIC'] = 'Поделите тему.';

$lang['STOP_WATCHING_TOPIC'] = 'Стоп праћење теме.';
$lang['START_WATCHING_TOPIC'] = 'Пратите тему за одговоре.';
$lang['NO_LONGER_WATCHING'] = 'Ви више не пратите ову тему.';
$lang['YOU_ARE_WATCHING'] = 'Сада пратите ову тему.';

$lang['SEARCH_IN_TOPIC'] = 'претрага у теми...,';
$lang['HIDE_IN_TOPIC'] = 'Сакрити.';

$lang['SHOW'] = 'Показати.';
$lang['AVATARS'] = 'Аватари.';
$lang['RANK_IMAGES'] = 'Слике по рангу.';
$lang['POST_IMAGES'] = 'Слике поста.';
$lang['SIGNATURES'] = 'Потписи.';
$lang['SPOILER'] = 'Спојлер';
$lang['SHOW_OPENED'] = 'Приказано отворено.';
$lang['DOWNLOAD_PIC'] = 'Слике за преузимање.';

$lang['MODERATE_TOPIC'] = 'Управљање овом темом.';
$lang['SELECT_POSTS_PER_PAGE'] = 'порука по страници.';

// Posting/Replying (Not private messaging!)
$lang['TOPIC_REVIEW'] = 'Преглед теме.';

$lang['NO_POST_MODE'] = 'Није изабран режим поста.'; // If posting.php is called without a mode (newtopic/reply/delete/etc., shouldn't be shown normally)

$lang['POST_A_NEW_TOPIC'] = 'Пост нову тему.';
$lang['POST_A_REPLY'] = 'Објавите нови одговор.';
$lang['POST_TOPIC_AS'] = 'Пост тема као.';
$lang['EDIT_POST'] = 'Измени пост.';
$lang['EDIT_TOPIC_TITLE'] = 'Измените име теме.';

$lang['DONT_MESSAGE_TITLE'] = 'Морате да наведете наслов поруке';
$lang['INVALID_TOPIC_ID'] = 'Тема није пронађена!';
$lang['INVALID_TOPIC_ID_DB'] = 'Теме не постоји у бази података!';

$lang['NOT_EDIT_TOR_STATUS'] = 'Не можете да уређујете издање у овом статусу';

$lang['OPTIONS'] = 'Опције';

$lang['POST_ANNOUNCEMENT'] = 'Оглас';
$lang['POST_STICKY'] = 'Лепљив';
$lang['POST_NORMAL'] = 'Нормално';
$lang['POST_DOWNLOAD'] = 'Преузмите';

// Anonymous posting
$lang['ANONYMOUS'] = 'Анонимно';
$lang['ANONYMOUS_TOPIC'] = 'Објави тему анонимно';
$lang['ANONYMOUS_REPLY'] = 'Одговори анонимно';
$lang['HIDE_AUTHORSHIP'] = 'Подразумевано објављуј анонимно';
$lang['HIDE_AUTHORSHIP_EXPLAIN'] = 'Када је омогућено, нови постови ће подразумевано бити у анонимном режиму. Можете изменити подешавање за сваки пост појединачно.';
$lang['ALLOW_ANONYMOUS_POSTING'] = 'Дозволи анонимно објављивање';
$lang['ANONYMOUS_POST_LABEL'] = 'Објављено анонимно';
$lang['POSTED_ANONYMOUSLY'] = 'објављено анонимно';
$lang['ANONYMOUS_ADMIN_NOTICE'] = 'Админи и модератори могу видети правог аутора';
$lang['YOU'] = 'Ти';

$lang['PRINT_PAGE'] = 'Одштампај страницу';

$lang['CONFIRM_DELETE'] = 'Да ли сте сигурни да желите да избришете овај пост?';
$lang['CONFIRM_DELETE_POLL'] = 'Да ли сте сигурни да желите да обришете ову анкету?';

$lang['FLOOD_ERROR'] = 'Не можете да направите нови постове тако скоро након последњег; покушајте поново у кратком року.';
$lang['EMPTY_SUBJECT'] = 'Морате да одредите тему';
$lang['EMPTY_MESSAGE'] = 'Морате да унесете поруку';
$lang['FORUM_LOCKED'] = 'Форум је блокиран';
$lang['TOPIC_LOCKED'] = 'Тема је закључана';
$lang['TOPIC_LOCKED_SHORT'] = 'Тема је закључана';
$lang['NO_POST_ID'] = 'Морате да изаберете пост за уређивање';
$lang['NO_TOPIC_ID'] = 'Морате да изаберете тему за одговор';
$lang['NO_VALID_MODE'] = 'Можете само да постите, одговарате, мењате или цитирајте поруке. Молим вас, вратите се и покушајте поново.';
$lang['NO_SUCH_POST'] = 'Нема таквог поста. Молим вас, вратите се назад и покушајте поново';
$lang['EDIT_OWN_POSTS'] = 'Жао ми је, али можете да измените само своје поруке.';
$lang['DELETE_OWN_POSTS'] = 'Жао ми је, али можете да уклоните само своје поруке.';
$lang['CANNOT_DELETE_REPLIED'] = 'Жао ми је, али не можете да избришете постове на које је одговорено.';
$lang['CANNOT_DELETE_POLL'] = 'Жао ми је, али Ви не можете да избришете активну анкету';
$lang['EMPTY_POLL_TITLE'] = 'Морате да унесете назив за вашу анкету.';
$lang['POST_HAS_NO_POLL'] = 'Овај пост нема анкете';
$lang['ALREADY_VOTED'] = 'Већ сте гласали у овој анкети';
$lang['NO_VOTE_OPTION'] = 'Треба да наведете опцију приликом гласања.';
$lang['LOCKED_WARN'] = 'Постовани сте у закљученој теми!';

$lang['ADD_POLL'] = 'Додај анкету';
$lang['UPDATE'] = 'Ажурирање';
$lang['DAYS'] = 'Дана';
$lang['DELETE_POLL'] = 'Обриши анкету.';

$lang['MAX_SMILIES_PER_POST'] = 'Ограничење за смајлије од %s је премашено.';

$lang['NOTIFY'] = 'Обавестите ме о одговорима';
$lang['ALLOW_ROBOTS_INDEXING'] = 'Дозволи роботима да индексирају ову тему';

$lang['STORED'] = 'Ваша порука је успешно унесена.';
$lang['EDITED'] = 'Порука је промењена.';
$lang['DELETED'] = 'Ваша порука је успешно обрисана.';
$lang['VOTE_CAST'] = 'Ваш глас је унет.';

$lang['EMOTICONS'] = 'Смајлији';
$lang['MORE_EMOTICONS'] = 'Погледајте више смајлија.';

$lang['COLOR_DARK_RED'] = 'Тамно Црвена';
$lang['COLOR_RED'] = 'Црвена';
$lang['COLOR_ORANGE'] = 'Наранџаста';
$lang['COLOR_BROWN'] = 'Браон';
$lang['COLOR_GREEN'] = 'Зелена';
$lang['COLOR_OLIVE'] = 'Маслиново';
$lang['COLOR_BLUE'] = 'Плава';
$lang['COLOR_DARK_BLUE'] = 'Тамно Плава';
$lang['COLOR_INDIGO'] = 'Индиго';
$lang['COLOR_VIOLET'] = 'Љубичаста';

$lang['FONT_SMALL'] = 'Мали';
$lang['FONT_NORMAL'] = 'Нормално';
$lang['FONT_LARGE'] = 'Велике';
$lang['FONT_HUGE'] = 'Огроман';

$lang['NEW_POSTS_PREVIEW'] = 'Тема има нове, измењене или непрочитане поруке.';

// Private Messaging
$lang['PRIVATE_MESSAGING'] = 'Приватне Поруке';

$lang['NO_NEW_PM'] = 'Нема нових порука';

$lang['NEW_PMS_FORMAT'] = '<b>%1$s</b> %2$s'; // 1 new message
$lang['NEW_PMS_DECLENSION'] = ['нова порука', 'нове поруке'];

$lang['UNREAD_PMS_FORMAT'] = '<b>%1$s</b> %2$s'; // 1 new message
$lang['UNREAD_PMS_DECLENSION'] = ['непрочитане', 'непрочитане'];

$lang['UNREAD_MESSAGE'] = 'Непрочитане поруке.';
$lang['READ_MESSAGE'] = 'У прочитаним порука.';

$lang['READ_PM'] = 'У прочитаному посту.';
$lang['POST_NEW_PM'] = 'Порука';
$lang['POST_REPLY_PM'] = 'Одговор на поруку';
$lang['POST_QUOTE_PM'] = 'Цитирану поруку.';
$lang['EDIT_PM'] = 'Уреди поруку.';

$lang['INBOX'] = 'Поштански';
$lang['OUTBOX'] = 'Одлазећи';
$lang['SAVEBOX'] = 'Сачувај особине.';
$lang['SENTBOX'] = 'Послате';
$lang['SUBJECT'] = 'Тема';
$lang['FROM'] = 'Од';
$lang['TO'] = 'За';
$lang['DATE'] = 'Датум';
$lang['SENT'] = 'Послао';
$lang['SAVED'] = 'Спасао';
$lang['DELETE_MARKED'] = 'Обриши означене.';
$lang['DELETE_ALL'] = 'Обриши све.';
$lang['SAVE_MARKED'] = 'Сачувај означена.';
$lang['SAVE_MESSAGE'] = 'Сачувај Поруку';
$lang['DELETE_MESSAGE'] = 'Брисање Порука';

$lang['DISPLAY_MESSAGES'] = 'Прикажите поруке.'; // Followed by number of days/weeks/months

$lang['NO_MESSAGES_FOLDER'] = 'Нема порука у овој фасцикли';

$lang['CANNOT_SEND_PRIVMSG'] = 'Жао ми је, али администратор је забранио да шаље приватне поруке.';
$lang['NO_TO_USER'] = 'Морате да наведете име особе којој желите да пошаљете поруку.';
$lang['NO_SUCH_USER'] = 'Жао ми је, али ово корисничко име не постоји.';

$lang['MESSAGE_SENT'] = 'Порука <b>Ваша</b> је послата.';

$lang['CLICK_RETURN_INBOX'] = 'Повратак на:<br /><br /> %s<b>Inbox</b>%s';
$lang['CLICK_RETURN_SENTBOX'] = '&nbsp;&nbsp; %s<b>Sentbox</b>%s';
$lang['CLICK_RETURN_OUTBOX'] = '&nbsp;&nbsp; %s<b>Outbox</b>%s';
$lang['CLICK_RETURN_SAVEBOX'] = '&nbsp;&nbsp; %s<b>Savebox</b>%s';
$lang['CLICK_RETURN_INDEX'] = '%sReturn на Index%s';

$lang['SEND_A_NEW_MESSAGE'] = 'Пошаљите нову приватну поруку';
$lang['SEND_A_REPLY'] = 'Одговор на приватну поруку';
$lang['EDIT_MESSAGE'] = 'Уреди приватну поруку.';

$lang['FIND_USERNAME'] = 'Наћи корисничко име';
$lang['SELECT_USERNAME'] = 'Изаберите корисничко Име';
$lang['NO_MATCH'] = 'Нема пронађених утакмица.';

$lang['NO_PM_ID'] = 'Молимо вас да наведете ИД поста';
$lang['NO_SUCH_FOLDER'] = 'Фасцикла није пронађена';

$lang['MARK_ALL'] = 'Марк све';
$lang['UNMARK_ALL'] = 'Уклоните све';

$lang['CONFIRM_DELETE_PM'] = 'Да ли сте сигурни да желите да избришете ову поруку?';
$lang['CONFIRM_DELETE_PMS'] = 'Да ли сте сигурни да желите да избришете ове поруке?';

$lang['INBOX_SIZE'] = 'Ваш поштански сандуче је<br /><b>%d%%</b> пуно'; // e.g. Your Inbox is 50% full
$lang['SENTBOX_SIZE'] = 'Ваш послат сандуче је<br /><b>%d%%</b> пуно';
$lang['SAVEBOX_SIZE'] = 'Ваша сачувана пошта је<br /><b>%d%%</b> пуна';

$lang['OUTBOX_EXPL'] = '';

// Profiles/Registration
$lang['VIEWING_USER_PROFILE'] = 'Прегледај профил :: %s';
$lang['VIEWING_MY_PROFILE'] = 'Мој профил [ <a href="%s">Подешавања / промена профила</a> ]';

$lang['DISABLED_USER'] = 'Налог је блокиран';
$lang['MANAGE_USER'] = 'Администрација';

$lang['PREFERENCES'] = 'Преференције';
$lang['ITEMS_REQUIRED'] = 'Ставке означене са * су обавезна, осим ако није другачије назначено.';
$lang['REGISTRATION_INFO'] = 'Информације о регистрацији';
$lang['PROFILE_INFO'] = 'Информације о профилу';
$lang['AVATAR_PANEL'] = 'Контролна табла аватара';

$lang['WEBSITE'] = 'Сајт';
$lang['LOCATION'] = 'Локација';
$lang['CONTACT'] = 'Контакти';
$lang['EMAIL_ADDRESS'] = 'Адреса е-поште';
$lang['SEND_PRIVATE_MESSAGE'] = 'Пошаљи приватну поруку';
$lang['INTERESTS'] = 'Интересовања';
$lang['OCCUPATION'] = 'Занимање';
$lang['POSTER_RANK'] = 'Ранг постера';
$lang['AWARDED_RANK'] = 'Додијелите звање';
$lang['SHOT_RANK'] = 'Ранг удара';

$lang['TOTAL_POSTS'] = 'Укупно постова';
$lang['SEARCH_USER_POSTS'] = 'Пронађите поруке'; // Find all posts by username
$lang['SEARCH_USER_POSTS_SHORT'] = 'Пронађите поруке корисника';
$lang['SEARCH_USER_TOPICS'] = 'Пронађи теме корисника'; // Find all topics by username

$lang['NO_USER_ID_SPECIFIED'] = 'Жао ми је, али ово корисничко име не постоји.';
$lang['NO_SEND_ACCOUNT_INACTIVE'] = 'Жао ми је, али ваша лозинка не може бити враћена, јер је ваш налог тренутно неактиван.';
$lang['NO_SEND_ACCOUNT'] = 'Жао ми је, али ваша лозинка не може бити враћена. Молимо вас да ступите у контакт са администратором форума за више информација';

$lang['HIDE_PORN_FORUMS'] = 'Сакриј садржај 18+';
$lang['ADD_RETRACKER'] = 'Додај ретрекере у торрент датотеке';
$lang['ALWAYS_NOTIFY'] = 'Увек обавести ме о одговорима';
$lang['ALWAYS_NOTIFY_EXPLAIN'] = 'Шаље е-пошту када неко одговори на тему на коју сте одговорили. То се може променити кад год објавите.';

$lang['BOARD_LANG'] = 'Језик форума';
$lang['GENDER'] = 'Пол';
$lang['GENDER_SELECT'] = [
    0 => 'Непознато',
    1 => 'Мушкарац',
    2 => 'Жена',
];
$lang['MODULE_OFF'] = 'Модул искључен!';

$lang['BIRTHDAY'] = 'Рођендан';
$lang['HAPPY_BIRTHDAY'] = 'Срећан Рођендан!';
$lang['WRONG_BIRTHDAY_FORMAT'] = 'Формат рођендана је погрешно унета.';
$lang['AGE'] = 'Старост';
$lang['BIRTHDAY_TO_HIGH'] = 'Жао нам је, овај сајт не прихвата кориснике старије од %d година';
$lang['BIRTHDAY_TO_LOW'] = 'Жао нам је, овај сајт не прихвата кориснике млађе од %d година';
$lang['BIRTHDAY_TODAY'] = 'Корисници који данас имају рођендан: ';
$lang['BIRTHDAY_WEEK'] = 'Корисници са рођенданом у наредних %d дана: %s';
$lang['NOBIRTHDAY_WEEK'] = 'Нема корисника који имају рођендан у наредних %d дана.'; // %d is substituted with the number of days
$lang['NOBIRTHDAY_TODAY'] = 'Нема корисника који има рођендан данас.';
$lang['BIRTHDAY_ENABLE'] = 'Укључите рођендан';
$lang['BIRTHDAY_MAX_AGE'] = 'Макс старост';
$lang['BIRTHDAY_MIN_AGE'] = 'Минимална старост';
$lang['BIRTHDAY_CHECK_DAY'] = 'Дани за проверу предстојећих рођендана';
$lang['YEARS'] = 'Година';

$lang['TIMEZONE'] = 'Временска зона';
$lang['DATE_FORMAT_EXPLAIN'] = 'Синтакса која се користи је идентична PHP <a href=\'https://www.php.net/manual/en/function.date.php\' target=\'_other\'>date()</a> функцији.';
$lang['SIGNATURE'] = 'Потпис';
$lang['SIGNATURE_EXPLAIN'] = 'Ово је блок текста који може бити додат у ваше постове. Постоји ограничење од %d карактера.';
$lang['SIGNATURE_DISABLE'] = 'Потпис онемогућен због кршења правила форума';
$lang['PUBLIC_VIEW_EMAIL'] = 'Прикажите адресу е-поште у мом профилу.';

$lang['EMAIL_EXPLAIN'] = 'На ову адресу ће бити послата верификациона е-пошта да бисте довршили регистрацију';

$lang['CURRENT_PASSWORD'] = 'Тренутна лозинка';
$lang['NEW_PASSWORD'] = 'Нова лозинка.';
$lang['CONFIRM_PASSWORD'] = 'Потврда лозинке';
$lang['CONFIRM_PASSWORD_EXPLAIN'] = 'Морате да потврдите вашу тренутну лозинку ако желите да је промените или измените вашу е-пошту.';
$lang['PASSWORD_IF_CHANGED'] = 'Треба само да ставите лозинку уколико желите да је промените.';
$lang['PASSWORD_CONFIRM_IF_CHANGED'] = 'Треба само да потврдите вашу лозинку ако сте је променили.';

$lang['AUTOLOGIN'] = 'Автовход';
$lang['RESET_AUTOLOGIN'] = 'Поставите кључ за автовход.';
$lang['RESET_AUTOLOGIN_EXPL'] = 'ово ће вас одјавити са свих уређаја на којима је аутоматска пријава омогућена';

$lang['AVATAR'] = 'Аватар';
$lang['AVATAR_EXPLAIN'] = 'Приказује мали графички приказ испод ваших података у постовима. Само једна слика може бити приказана у исто време, њена ширина не може бити већа од %d пиксела, висина не већа од %d пиксела, а величина датотеке не већа од %s.';
$lang['AVATAR_DELETE'] = 'Уклонити аватар';
$lang['AVATAR_DISABLE'] = 'Поставка аватара онемогућена због кршења <a href="%s"><b>правила форума</b></a>';
$lang['UPLOAD_AVATAR_FILE'] = 'Отпремите аватар';
$lang['RETURN_PROFILE'] = 'Вратите се на профил';
$lang['DELETE_IMAGE'] = 'Брисање слике';
$lang['SET_MONSTERID_AVATAR'] = 'Подесите MonsterID аватар';

$lang['NOTIFY_ON_PRIVMSG'] = 'Обавестити о новим личним порукама';
$lang['HIDE_USER'] = 'Сакријте свој онлине статус';
$lang['HIDDEN_USER'] = 'Скривених корисника';

$lang['PROFILE_UPDATED'] = 'Ваш профил је ажуриран';
$lang['PROFILE_UPDATED_INACTIVE'] = 'Ваш профил је ажуриран. Међутим, променили сте виталне информације, па је ваш налог сада неактиван. Проверите своју е-пошту да бисте сазнали како да поново активирате свој налог, или чекајте администратора да га активира.';

$lang['PASSWORD_LONG'] = 'Ваша лозинка не сме бити дужа од %d знакова и не краћа од %d знакова.';
$lang['USERNAME_TAKEN'] = 'Жао ми је, али ово корисничко име је већ заузето.';
$lang['USERNAME_INVALID'] = 'Жао ми је, али то корисничко име садржи неважећи знак';
$lang['USERNAME_DISALLOWED'] = 'Жао ми је, али ово корисничко име није дозвољено.';
$lang['USERNAME_TOO_LONG'] = 'Ваше корисничко име је превише дуго.';
$lang['USERNAME_TOO_SMALL'] = 'Ваше корисничко име је превише кратко.';
$lang['EMAIL_TAKEN'] = 'Жао ми је, али та е-маил адреса је већ регистрована на корисника.';
$lang['EMAIL_INVALID'] = 'Извините, али ова е-маил адреса није важећа.';
$lang['EMAIL_TOO_LONG'] = 'Ваша е-пошта је превише дуга.';
$lang['SIGNATURE_TOO_LONG'] = 'Ваш потпис је предугачак.';
$lang['SIGNATURE_ERROR_HTML'] = 'Потпис може да садржи само ББ-код';
$lang['FIELDS_EMPTY'] = 'Морате да попуните обавезна поља.';

$lang['WELCOME_SUBJECT'] = 'Добродошли на %s форума';

$lang['ACCOUNT_ADDED'] = 'Хвала Вам за регистрацију. Ваш налог је креиран. Сада можете да се пријавите са својим корисничким именом и лозинком';
$lang['ACCOUNT_INACTIVE'] = 'Ваш налог је креиран. Међутим, овај форум захтева активацију налога. Кључ активације је послат на е-маил адресу коју сте навели. Молимо вас, проверите вашу е-пошту за више информација.';
$lang['ACCOUNT_ACTIVE'] = 'Ваш налог је активиран. Хвала што сте се регистровали.';
$lang['ALREADY_ACTIVATED'] = 'Већ сте активирали свој налог';

$lang['WRONG_ACTIVATION'] = 'Кључ за активирање који сте унели не поклапа се ни са једним у бази података.';
$lang['PASSWORD_UPDATED'] = 'Нова лозинка је креирана; молимо вас, проверите ваш е-маил за детаље о томе како да је активирате.';
$lang['NO_EMAIL_MATCH'] = 'Адреса е-поште коју сте унели не поклапа се са оном која је наведена за то корисничко име.';
$lang['PASSWORD_ACTIVATED'] = 'Ваш налог је поново активиран. Да бисте се пријавили, молимо вас да користите лозинку коју сте добили у е-пошти.';

$lang['SEND_EMAIL_MSG'] = 'Пошаљи поруку е-поште';
$lang['NO_USER_SPECIFIED'] = 'Ни један корисник није наведен';
$lang['USER_NOT_EXIST'] = 'Таквог корисника не постоји';
$lang['EMAIL_MESSAGE_DESC'] = 'Ова порука ће бити послата као обичан текст, па стога не укључујте никакав ХТМЛ или ББ-код. Повратна адреса за ову поруку ће бити подешена на вашу е-маил адресу.';
$lang['RECIPIENT'] = 'Прималац';
$lang['EMAIL_SENT'] = 'Е-маил је послат.';
$lang['SEND_EMAIL'] = 'Пошаљите е-маил';
$lang['EMPTY_SUBJECT_EMAIL'] = 'Морате да одредите тему поруке е-поште.';
$lang['EMPTY_MESSAGE_EMAIL'] = 'Морате да унесете поруку путем е-маила.';

$lang['USER_AGREEMENT'] = 'Кориснички споразум.';
$lang['USER_AGREEMENT_HEAD'] = 'Да бисте наставили, морате се сложити са следећим правилима';
$lang['USER_AGREEMENT_AGREE'] = 'Прочитао сам и слажем се са споразумом корисника';

$lang['COPYRIGHT_HOLDERS'] = 'За носиоца ауторских права';
$lang['ADVERT'] = 'Оглашавање на овом сајту';
$lang['NOT_FOUND'] = 'Фајл није пронађен';

// Memberslist
$lang['SORT_TOP_TEN'] = 'Десет најактивнијих.';
$lang['SORT_JOINED'] = 'Датум Ступања';
$lang['SORT_USERNAME'] = 'Корисничко име';
$lang['SORT_LOCATION'] = 'Локација';
$lang['SORT_POSTS'] = 'Укупно порука.';
$lang['SORT_EMAIL'] = 'Е-маил';
$lang['SORT_WEBSITE'] = 'Сајт';
$lang['ASC'] = 'Растући';
$lang['DESC'] = 'Опадајући';
$lang['ORDER'] = 'Наредба.';

// Thanks
$lang['THANK_TOPIC'] = 'Гласате за ову тему';
$lang['THANKS_GRATITUDE'] = 'Ценимо вашу захвалност';
$lang['LAST_LIKES'] = 'Последњи гласови';
$lang['LIKE_OWN_POST'] = 'Не можете гласати за своју тему';
$lang['NO_LIKES'] = 'Још нико није гласао';
$lang['LIKE_ALREADY'] = 'Већ сте гласали за ову тему';

// Invites
$lang['INVITE_CODE'] = 'Код позива';
$lang['INCORRECT_INVITE'] = 'Позив није нађен';
$lang['INVITE_EXPIRED'] = 'Позив је истекао';

// Group control panel
$lang['GROUP_CONTROL_PANEL'] = 'Групе корисника.';
$lang['GROUP_CONFIGURATION'] = 'Конфигурација групе.';
$lang['GROUP_GOTO_CONFIG'] = 'Идите на таблу за конфигурацију.';
$lang['GROUP_RETURN'] = 'Вратите се на страницу групе корисника.';
$lang['MEMBERSHIP_DETAILS'] = 'Детаљи о чланству у групи.';
$lang['JOIN_A_GROUP'] = 'Пријатељите се групи.';

$lang['GROUP_INFORMATION'] = 'Информације о групи.';
$lang['GROUP_NAME'] = 'Име групе.';
$lang['GROUP_DESCRIPTION'] = 'Опис групе.';
$lang['GROUP_SIGNATURE'] = 'Потпис групе.';
$lang['GROUP_MEMBERSHIP'] = 'Чланство у групи.';
$lang['GROUP_MEMBERS'] = 'Чланови групе.';
$lang['GROUP_MODERATOR'] = 'Модератор групе.';
$lang['PENDING_MEMBERS'] = 'У чекању чланова.';

$lang['GROUP_TIME'] = 'Створена';
$lang['RELEASE_GROUP'] = 'Издавање групе.';

$lang['GROUP_TYPE'] = 'Тип групе.';
$lang['GROUP_OPEN'] = 'Отворена група.';
$lang['GROUP_CLOSED'] = 'Затворена група.';
$lang['GROUP_HIDDEN'] = 'Скривене групе.';

$lang['GROUP_MEMBER_MOD'] = 'Модератор групе.';
$lang['GROUP_MEMBER_MEMBER'] = 'Чланови.';
$lang['GROUP_MEMBER_PENDING'] = 'Чланство у чекању.';
$lang['GROUP_MEMBER_OPEN'] = 'Отворене групе.';
$lang['GROUP_MEMBER_CLOSED'] = 'Затворене групе.';
$lang['GROUP_MEMBER_HIDDEN'] = 'Скривене групе.';

$lang['NO_GROUPS_EXIST'] = 'Не постоји.';
$lang['GROUP_NOT_EXIST'] = 'Твој кориснички брат не постоји.';
$lang['NO_GROUP_ID_SPECIFIED'] = 'Идентификатор групе није наведен';

$lang['NO_GROUP_MEMBERS'] = 'У овој групи нема чланова';
$lang['HIDDEN_GROUP_MEMBERS'] = 'Ова група је скривена, не можете да видите свој састав';
$lang['NO_PENDING_GROUP_MEMBERS'] = 'Ова група нема чланова који чекају.';
$lang['GROUP_JOINED'] = 'Успешно сте се пријавили за приступ овој групи.<br />Бићете обавештени када модератор групе одобри ваш члански статус.';
$lang['ALREADY_MEMBER_GROUP'] = 'Већ сте члан ове групе';
$lang['USER_IS_MEMBER_GROUP'] = '%s је већ члан ове групе';
$lang['USER_IS_MOD_GROUP'] = '%s је модератор ове групе';
$lang['EFFECTIVE_DATE'] = 'Датум Ступања На Снагу';
$lang['COULD_NOT_ADD_USER'] = 'Корисник који сте изабрали не постоји.';
$lang['UNSUB_SUCCESS'] = 'Били сте одјављени из ове групе.';

$lang['APPROVE_SELECTED'] = 'Одобри Изабране.';
$lang['DENY_SELECTED'] = 'Забрани Изабране.';
$lang['REMOVE_SELECTED'] = 'Уклоните Изабране.';
$lang['ADD_MEMBER'] = 'Додајте Члана.';
$lang['NOT_GROUP_MODERATOR'] = 'Нисте модератор ове групе, стога не можете да извршите ту акцију.';

$lang['LOGIN_TO_JOIN'] = 'Пријавите се да се придружите или управљате чланствима у групама.';
$lang['THIS_OPEN_GROUP'] = 'Ово је отворена група: кликните да затражите чланство.';
$lang['THIS_CLOSED_GROUP'] = 'Ово је затворена група: више корисника није прихваћено.';
$lang['THIS_HIDDEN_GROUP'] = 'Ово је скривена група: аутоматско додавање корисника није дозвољено.';
$lang['MEMBER_THIS_GROUP'] = 'Члан сте ове групе.';
$lang['PENDING_THIS_GROUP'] = 'Ваше чланство у овој групи је на чекању.';
$lang['ARE_GROUP_MODERATOR'] = 'Ви сте модератор групе';
$lang['NONE'] = 'Нико';

$lang['UNSUBSCRIBE_GROUP'] = 'Отписати.';
$lang['MEMBERS_IN_GROUP'] = 'Чланови у групи.';

// Release Groups
$lang['POST_RELEASE_FROM_GROUP'] = 'Пост-ослобађање из групе.';
$lang['CHOOSE_RELEASE_GROUP'] = 'Није изабран.';
$lang['ATTACH_RG_SIG'] = 'Приложите потпис издавачке групе.';
$lang['RELEASE_FROM_RG'] = 'Издање је припремио.';
$lang['GROUPS_RELEASES'] = 'Издања групе.';
$lang['MORE_RELEASES'] = 'Пронађите сва издања групе.';
$lang['NOT_A_RELEASE_GROUP'] = 'Ова група није група за издање.';

// Search
$lang['SEARCH_HELP_URL'] = 'Претрага Помоћ.';
$lang['SEARCH_OPTIONS'] = 'Опције претраге.';

$lang['SEARCH_WORDS'] = 'Претрага по кључним речима.';
$lang['SEARCH_WORDS_EXPL'] = 'Можете да користите <b>+</b> да дефинишете речи које морају бити у резултатима и <b>-</b> да дефинишете речи које не би требало да буду у резултатима (на пример: "+реч1 -реч2"). Користите * као џокер за делимичне поклапања.';
$lang['SEARCH_AUTHOR'] = 'Претрага по аутору.';
$lang['SEARCH_AUTHOR_EXPL'] = 'Користите * као џокер за делимично поклапање';

$lang['SEARCH_TITLES_ONLY'] = 'Претражите само по наслову теме.';
$lang['SEARCH_ALL_WORDS'] = 'Све речи.';
$lang['IN_MY_POSTS'] = 'У мојим постовима.';
$lang['SEARCH_MY_TOPICS'] = 'У мојим темама.';
$lang['NEW_TOPICS'] = 'Нове теме';

$lang['SEARCH_PREVIOUS'] = 'Претрага претходних.';

$lang['SORT_BY'] = 'Сортирај по.';
$lang['SORT_TIME'] = 'Време поста.';
$lang['SORT_TOPIC_TITLE'] = 'Тема име.';

$lang['DISPLAY_RESULTS_AS'] = 'Резултати су приказани као.';
$lang['ALL_AVAILABLE'] = 'Све на располагању.';
$lang['BRIEFLY'] = 'Укратко.';

$lang['NO_SEARCH_MATCH'] = 'Ни једна тема или постови не задовољавају ваше критерије претраге.';
$lang['FOUND_SEARCH_MATCH'] = 'Претрага је пронашла %d меч.'; // e.g. Search found 1 match
$lang['FOUND_SEARCH_MATCHES'] = 'Претрага је пронашла %d утакмица.'; // e.g. Search found 24 matches

$lang['CLOSE_WINDOW'] = 'Затворите прозор.';
$lang['HIDE'] = 'Сакриј.';

// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
$lang['SORRY_AUTH_VIEW'] = 'Жао нам је, али само %s може да види овај форум.';
$lang['SORRY_AUTH_READ'] = 'Жао нам је, али само %s може да чита теме на овом форуму.';
$lang['SORRY_AUTH_REPLY'] = 'Жао нам је, али само %s може да одговара на поруке у овом форуму.';
$lang['SORRY_AUTH_EDIT'] = 'Жао нам је, али само %s може да уредите поруке у овом форуму.';
$lang['SORRY_AUTH_DELETE'] = 'Жао нам је, али само %s можете да обришете поруке у овом форуму.';

// These replace the %s in the above strings
$lang['AUTH_ANONYMOUS_USERS'] = '<b>анонимни корисници</b>.';
$lang['AUTH_REGISTERED_USERS'] = '<b>регистровани корисници</b>.';
$lang['AUTH_USERS_GRANTED_ACCESS'] = '<b>корисници који су добили посебан приступ</b>.';
$lang['AUTH_MODERATORS'] = '<b>модератори</b>.';
$lang['AUTH_ADMINISTRATORS'] = '<b>администратори</b>.';

$lang['NOT_MODERATOR'] = 'Нисте модератор овог форума.';
$lang['NOT_AUTHORISED'] = 'Није Дозвољено';

$lang['YOU_BEEN_BANNED'] = 'Забрањени сте од овог форума. За више информација обратите се администратору одбора.';

// Viewonline
$lang['ONLINE_EXPLAIN'] = 'активни корисници у последњих пет минута.';
$lang['LAST_UPDATED'] = 'Последње ажурирање.';

// Moderator Control Panel
$lang['MOD_CP'] = 'Контролна Табла Модератора';
$lang['SELECT'] = 'Изаберите';
$lang['DELETE'] = 'Обриши.';
$lang['MOVE'] = 'Преместити.';
$lang['LOCK'] = 'Закључати.';
$lang['UNLOCK'] = 'Откључавање.';

$lang['TOPICS_REMOVED'] = 'Одабране теме су успешно уклоњене из базе података.';
$lang['NO_TOPICS_REMOVED'] = 'Ни једна тема није уклоњена.';
$lang['TOPICS_LOCKED'] = 'Одабране теме су закључане.';
$lang['TOPICS_MOVED'] = 'Одабране теме су премештене.';
$lang['TOPICS_UNLOCKED'] = 'Одабране теме су откључане.';
$lang['NO_TOPICS_MOVED'] = 'Ни једна тема није премештена.';

$lang['CONFIRM_DELETE_TOPIC'] = 'Да ли сте сигурни да желите да уклоните изабрану тему/е?';
$lang['CONFIRM_MOVE_TOPIC'] = 'Да ли сте сигурни да желите да преместите одабрану тему/е?';

$lang['MOVE_TO_FORUM'] = 'Иди на форум.';
$lang['LEAVE_SHADOW_TOPIC'] = 'Оставите сенку тему у старом форуму.';

$lang['SPLIT_TOPIC_EXPLAIN'] = 'Користећи форму испод, можете поделити тему на два дела, или избором порукова појединачно или делите на изабраној поруци.';
$lang['NEW_TOPIC_TITLE'] = 'Ново име теме';
$lang['FORUM_FOR_NEW_TOPIC'] = 'Форум за нову тему.';
$lang['SPLIT_POSTS'] = 'Поделите изабране постове.';
$lang['SPLIT_AFTER'] = 'Поделите од изабране поруке.';
$lang['TOPIC_SPLIT'] = 'Изабрана тема је успешно подељена.';
$lang['NONE_SELECTED'] = 'Нисте изабрали ништа за извршавање ове операције. Молим вас, вратите се и изаберите бар једну.';

$lang['THIS_POSTS_IP'] = 'ИП адреса овог поста';
$lang['OTHER_IP_THIS_USER'] = 'Друге ИП адресе са којих је овај корисник постовао.';
$lang['USERS_THIS_IP'] = 'Корисници који постају са ове ИП адресе.';
$lang['IP_INFO'] = 'Информације о ИП.';
$lang['LOOKUP_IP'] = 'Погледајте ИП адресу';

// Timezones ... for display on each page
$lang['ALL_TIMES'] = 'Све време <span class="tz_time">%s</span>'; // This is followed by UTC and the timezone offset

// Friendly dates (used in bb_date function)
$lang['DATETIME']['TODAY'] = 'Данас';
$lang['DATETIME']['YESTERDAY'] = 'Јуче';

// Country selector
$lang['COUNTRY'] = 'Држава';
$lang['SET_OWN_COUNTRY'] = 'Поставите своју државу (ручно)';

// Errors
$lang['INFORMATION'] = 'Информације';
$lang['ADMIN_REAUTHENTICATE'] = 'Да бисте управљали/умерили одбор, морате се поново аутентификовати.';

// Attachment Mod Main Language Variables
// Auth Related Entries
$lang['RULES_ATTACH_CAN'] = 'Можете приложити фајлове у овом форуму.';
$lang['RULES_ATTACH_CANNOT'] = 'Не можете приложити фајлове у овом форуму.';
$lang['RULES_DOWNLOAD_CAN'] = 'Можете преузети фајлове у овом форуму.';
$lang['RULES_DOWNLOAD_CANNOT'] = 'Не можете преузети фајлове у овом форуму.';
$lang['SORRY_AUTH_VIEW_ATTACH'] = 'Жао ми је, али нисте овлашћени за прегледања или преузимања овог прилога';

// Viewtopic -> Display of Attachments
$lang['DESCRIPTION'] = 'Опис'; // used in Administration Panel too...
$lang['DOWNLOAD'] = 'Преузми.'; // this Language Variable is defined in admin.php too, but we are unable to access it from the main Language File
$lang['FILESIZE'] = 'Величина датотеке';
$lang['MAX_FILE_SIZE'] = 'Максимална величина датотеке';
$lang['ALLOWED_EXTENSIONS'] = 'Дозвољене екстензије';

// Viewtopic -> Display of Attachments -> TorrServer integration
$lang['STREAM'] = 'Стрим';
$lang['RESOLUTION'] = 'Решење: <b>%s</b>';
$lang['CHANNELS'] = 'Канали: <b>%s</b>';
$lang['CHANNELS_LAYOUT'] = 'Изглед канала: <b>%s</b>';
$lang['BITRATE'] = 'Битрејт: <b>%s</b>';
$lang['SAMPLE_RATE'] = 'Фреквенција узорака: <b>%s</b>';
$lang['AUDIO_TRACK'] = 'Информације о аудио траци (%d):';
$lang['AUDIO_CODEC'] = 'Аудио кодек: <b title="%s">%s</b>';
$lang['VIDEO_CODEC'] = 'Видео кодек: <b title="%s">%s</b>';
$lang['SHOW_MORE_INFORMATION_FILE'] = 'Прикажи више информација о овој датотеци';
$lang['DOWNLOAD_M3U_FILE'] = 'Преузми .m3u фајл';
$lang['PLAYBACK_M3U'] = 'Плејбек .m3u фајла';
$lang['COPY_STREAM_LINK'] = 'Копирај линк потока у клипборд';
$lang['M3U_NOT_SUPPORTED'] = 'Овај фајл не може да се репродукује у прегледачу...';
$lang['M3U_FFPROBE_NO_DATA'] = 'Чини се да ffprobe неће моћи да врати податке о овом кодеку...';
$lang['M3U_NOTICE'] = 'Неки прегледачи не подржавају репродукцију одређених видео формата. У таквом случају, можете преузети .m3u фајл и репродуковати га користећи трећу страну плејер';
$lang['TORRSERVER_UNAVAILABLE'] = 'ТоррСервер није доступан';
$lang['TORRSERVER_INVALID_REQUEST'] = 'Параметри захтева нису валидни';

$lang['ATTACHMENT'] = 'Прилог';

// Posting -> Posting Attachments
$lang['ADD_ATTACHMENT'] = 'Додајте прилог.';
$lang['ADD_ATTACHMENT_EXPLAIN'] = 'Ако не желите да додате прилог у поруку, оставите поље празно';
$lang['UPDATE_ATTACHMENT'] = 'Ажурирај прилог';
$lang['FILENAME'] = 'Име фајла.';

// Posting -> Posted Attachments
$lang['POSTED_ATTACHMENTS'] = 'Објављени прилози.';
$lang['DELETE_ATTACHMENT'] = 'Обриши прилог.';

// Errors -> Download
$lang['NO_ATTACHMENT_SELECTED'] = 'Нисте изабрали прилог да преузмете и видите.';
$lang['ERROR_NO_ATTACHMENT'] = 'Изабрани прилог више не постоји.';
$lang['DOWNLOAD_LIMIT_EXCEEDED'] = 'Дневни лимит за преузимање је премашен. Покушајте поново сутра.';

//bt
$lang['BT_REG_YES'] = 'Регистрован.';
$lang['BT_REG_NO'] = 'Није регистрован.';
$lang['BT_REG_ON_TRACKER'] = 'Пријавите се на трекеру.';
$lang['BT_REG_FAIL'] = 'Не могу да се региструјем на торрент трекеру.';
$lang['BT_REG_FAIL_SAME_HASH'] = 'Други торент са истим info_hash је већ <a href="%s"><b>регистрован</b></a>';
$lang['BT_V1_ONLY_DISALLOWED'] = 'v1-само торенти су тренутно онемогућени од стране администратора, дозвољено: v2 и хибриди';
$lang['BT_V2_ONLY_DISALLOWED'] = 'v2-само торенти су тренутно онемогућени од стране администратора, дозвољено: v1 и хибриди';
$lang['BT_FLIST'] = 'Списак фајлова';
$lang['BT_FLIST_LIMIT'] = 'Подешавања тракера не дозвољавају обраду листи са више од %d датотека. Тренутни број је: %d';
$lang['BT_FLIST_BTMR_HASH'] = 'BTMR Хаш';
$lang['BT_FLIST_BTMR_NOTICE'] = 'BitTorrent Merkle Root је хаш фајла уграђеног у торенте са BitTorrent v2 подршком, корисници тракера могу да их извлаче, израчунавају, као и да преузму дупликате торената уз помоћ рачунарских алата као <a href="%s" target="_blank" referrerpolicy="origin">Торрент Merkle Root Reader</a>';
$lang['BT_FLIST_CREATION_DATE'] = 'Датум креирања';
$lang['BT_IS_PRIVATE'] = 'Приватни торент';
$lang['BT_FLIST_FILE_PATH'] = 'Путanja (%s)';
$lang['BT_FLIST_LINK_TITLE'] = 'Хашеви фајлова | .торрент мета-информације';
$lang['BT_UNREG_FROM_TRACKER'] = 'Уклоните из трекера.';
$lang['BT_UNREGISTERED'] = 'Торрент је нерегистрован.';
$lang['BT_UNREGISTERED_ALREADY'] = 'Торент је већ одјављен';
$lang['BT_REGISTERED'] = 'Торрент регистрован на трекеру.<br /><br />Сада морате <a href="%s"><b>преузети ваш торрент</b></a> и покренути га користећи ваш торрент клијент, изабравши фолдер са оригиналним фајловима који делите као пут до преузимања.';
$lang['INVALID_ANN_URL'] = 'Неважећи изворни УРЛ [%s]<br /><br />мора бити <b>%s</b>.';
$lang['PASSKEY_ERR_TOR_NOT_REG'] = 'Не могу да додам passkey<br /><br />Торрент није регистрован на трекеру.';
$lang['BT_PASSKEY'] = 'Кључ за пассе.';
$lang['BT_GEN_PASSKEY'] = 'креирајте новог.';
$lang['BT_PASSKEY_VIEW'] = 'преткривајте.';
$lang['BT_GEN_PASSKEY_NEW'] = "Пажња! Након промене вашег кључа, потребно је да поново преузмете све активне торенте! \n Да ли сте сигурни да желите да креирате нови кључ?";
$lang['BT_NO_SEARCHABLE_FORUMS'] = 'Нема форума за претрагу.';

$lang['SEEDS'] = 'Семена.';
$lang['LEECHS'] = 'Пијавице';
$lang['SPEED_UP'] = 'Убрзати';
$lang['SPEED_DOWN'] = 'Смањена брзина';

$lang['SEEDERS'] = 'Сидери';
$lang['LEECHERS'] = 'Личери';
$lang['RELEASING'] = 'Сопствено';
$lang['SEEDING'] = 'Семена';
$lang['LEECHING'] = 'Пијавице';
$lang['IS_REGISTERED'] = 'Регистрован';
$lang['MAGNET'] = 'Магнет-линк';
$lang['MAGNET_FOR_GUESTS'] = 'Прикажи магнет-линк за госте';
$lang['MAGNET_v2'] = 'Магнет-линк (BitTorrent v2 подржан)';

//torrent status mod
$lang['TOR_STATUS'] = 'Статус';
$lang['TOR_STATUS_SELECT_ACTION'] = 'Изаберите статус';
$lang['TOR_STATUS_NOT_SELECT'] = 'Нисте изабрали статус.';
$lang['TOR_STATUS_SELECT_ALL'] = 'Сви статуси';
$lang['TOR_STATUS_FORBIDDEN'] = 'Статус ове теме је: ';
$lang['TOR_STATUS_NAME'] = [
    TOR_NOT_APPROVED => 'није проверено',
    TOR_CLOSED => 'затворен',
    TOR_APPROVED => 'проверено',
    TOR_NEED_EDIT => 'потребно је уређивање',
    TOR_NO_DESC => 'непотпун',
    TOR_DUP => 'дупликат',
    TOR_CLOSED_CPHOLD => 'затворено (ауторска права)',
    TOR_CONSUMED => 'апсорбован',
    TOR_DOUBTFUL => 'сумњиво',
    TOR_CHECKING => 'у току провере',
    TOR_TMP => 'привремено',
    TOR_PREMOD => 'премодерација.',
    TOR_REPLENISH => 'допуњавање',
];
$lang['TOR_STATUS_FAILED'] = 'Овај статус не постоји!';
$lang['TORRENT_FAILED'] = 'Дистрибуција није пронађена!';
$lang['TOR_STATUS_DUB'] = 'Дистрибуција има исти статус';
$lang['TOR_DONT_CHANGE'] = 'Промена статуса није могућа!';
$lang['TOR_STATUS_OF'] = 'Дистрибуција има статус: ';
$lang['TOR_STATUS_CHANGED'] = 'Статус је промењен: ';
$lang['TOR_BACK'] = ' назад';
$lang['PROCEED'] = 'Наставите.';
$lang['CHANGE_TOR_TYPE'] = 'Тип торрента је успешно промењен';
$lang['DEL_TORRENT'] = 'Да ли сте сигурни да желите да уклоните торент?';
$lang['DEL_MOVE_TORRENT'] = 'Да ли сте сигурни да желите да уклоните и преместите тему?';
$lang['UNEXECUTED_RELEASE'] = 'Имате недовршени ослобађање. Пре него што креирате ново, завршите га!';
$lang['TOR_STATUS_LOG_ACTION'] = 'Нови статус: %s.<br/>Претходни статус: %s.';

// tor_comment
$lang['TOR_MOD_TITLE'] = 'Статус дистрибуције је промењен – %s';
$lang['TOR_MOD_MSG'] = "Здраво, %s.\n\nСтатус [url=%s]ваше[/url] дистрибуције је промењен у [b]%s[/b]";

$lang['TOR_AUTH_TITLE'] = 'Захтев за промену формата – %s';
$lang['TOR_AUTH_MSG'] = "Здраво, %s.\n\nВаша дистрибуција је промењена - [url=%s]%s[/url]\n\nМолимо проверавајте поново.";
$lang['TOR_AUTH_FIXED'] = 'фиксно.';
$lang['TOR_AUTH_SENT_COMMENT'] = ' &middot; <span class="seed bold">Информација је послата модератору. Молимо сачекајте одговор.</span>';

$lang['BT_TOPIC_TITLE'] = 'Назив теме.';
$lang['BT_SEEDER_LAST_SEEN'] = 'Сидера последњи пут видел.';
$lang['SIZE'] = 'Величина';
$lang['COMPLETED'] = 'Завршени преузимања';
$lang['ADDED'] = 'Додато';
$lang['DELETE_TORRENT'] = 'Обриши торент.';
$lang['DELETE_MOVE_TORRENT'] = 'Брисање и премести тему.';
$lang['DL_TORRENT'] = 'Довнлоад .торрент.';
$lang['BT_LAST_POST'] = 'Последња порука';
$lang['BT_CREATED'] = 'Тематика поста.';
$lang['BT_REPLIES'] = 'Одговори';
$lang['BT_VIEWS'] = 'Поглед';

// Gold/Silver releases
$lang['GOLD'] = 'Злато.';
$lang['SILVER'] = 'Сребро.';
$lang['SET_GOLD_TORRENT'] = 'Поставити злато.';
$lang['UNSET_GOLD_TORRENT'] = 'Уклони златни статус';
$lang['SET_SILVER_TORRENT'] = 'Поставити сребро.';
$lang['UNSET_SILVER_TORRENT'] = 'Уклони сребрни статус';
$lang['GOLD_STATUS'] = 'ЗЛАТНИ ТОРЕНТ! Саобраћај приликом преузимања се не рачуна!';
$lang['SILVER_STATUS'] = 'СРЕБРНИ ТОРЕНТ! Саобраћај приликом преузимања се делимично рачуна!';
$lang['TOR_TYPE_LOG_ACTION'] = 'Тип торента променјен у: %s';

$lang['TORRENT_STATUS'] = 'Претрага по статусу издања';
$lang['SEARCH_IN_FORUMS'] = 'Претрага у форумима.';
$lang['SELECT_CAT'] = 'Изаберите категорију';
$lang['GO_TO_SECTION'] = 'Идите на секцију';
$lang['TORRENTS_FROM'] = 'Пост од.';
$lang['SHOW_ONLY'] = 'Показати само.';
$lang['SHOW_COLUMN'] = 'Прикажи колону.';
$lang['SEL_CHAPTERS'] = 'Линк ка изабраним секцијама';
$lang['NOT_SEL_CHAPTERS'] = 'Нисте изабрали ниједну тему';
$lang['SEL_CHAPTERS_HELP'] = 'Можете изабрати највише %s секција';
$lang['HIDE_CONTENTS'] = 'Сакриј садржај.';
$lang['FILTER_BY_NAME'] = 'Филтер по имену.';

$lang['BT_ONLY_ACTIVE'] = 'Активно.';
$lang['BT_ONLY_MY'] = 'Моје издање.';
$lang['BT_SEED_EXIST'] = 'Постоји сејдер';
$lang['BT_ONLY_NEW'] = 'Нови са последње посете.';
$lang['BT_SHOW_CAT'] = 'Категорија';
$lang['BT_SHOW_FORUM'] = 'Форум';
$lang['BT_SHOW_AUTHOR'] = 'Аутор';
$lang['BT_SHOW_SPEED'] = 'Брзина';
$lang['SEED_NOT_SEEN'] = 'Сидера није виђен.';
$lang['TITLE_MATCH'] = 'Наслов меч.';
$lang['BT_USER_NOT_FOUND'] = 'није пронађен';
$lang['DL_SPEED'] = 'Укупна брзина преузимања.';

$lang['BT_DISREGARD'] = 'Игнорисање.';
$lang['BT_NEVER'] = 'Никада.';
$lang['BT_ALL_DAYS_FOR'] = 'Све време.';
$lang['BT_1_DAY_FOR'] = 'Последњи дан.';
$lang['BT_3_DAY_FOR'] = 'Последња три дана.';
$lang['BT_7_DAYS_FOR'] = 'Прошле недеље.';
$lang['BT_2_WEEKS_FOR'] = 'Последње двe недеље.';
$lang['BT_1_MONTH_FOR'] = 'Прошлог месеца.';
$lang['BT_1_DAY'] = '1 дан.';
$lang['BT_3_DAYS'] = '3 дана.';
$lang['BT_7_DAYS'] = 'Недељу дана.';
$lang['BT_2_WEEKS'] = '2 недеље.';
$lang['BT_1_MONTH'] = 'Месец.';

$lang['DL_LIST_AND_TORRENT_ACTIVITY'] = 'ДЛ-Листа и торент активности.';
$lang['DLWILL'] = 'Довнлоад.';
$lang['DLDOWN'] = 'Преузимање.';
$lang['DLCOMPLETE'] = 'Комплетан.';
$lang['DLCANCEL'] = 'Отмена.';

$lang['DL_LIST_DEL'] = 'Очистите ДЛ-Листу.';
$lang['DL_LIST_DEL_CONFIRM'] = 'Уклоните ДЛ-Листу за ову тему.';
$lang['SHOW_DL_LIST'] = 'Прикажи ДЛ-Листу.';
$lang['SET_DL_STATUS'] = 'Довнлоад.';
$lang['UNSET_DL_STATUS'] = 'Не преузима';
$lang['TOPICS_DOWN_SETS'] = 'Статус теме променио у <b>Download</b>.';
$lang['TOPICS_DOWN_UNSETS'] = 'Статус <b>Превземи</b> уклоњен.';

$lang['TOPIC_DL'] = 'ПР';

$lang['MY_DOWNLOADS'] = 'Моје Преузимања.';
$lang['SEARCH_DL_WILL'] = 'Планирано';
$lang['SEARCH_DL_WILL_DOWNLOADS'] = 'Планирана преузимања.';
$lang['SEARCH_DL_DOWN'] = 'Тренутно.';
$lang['SEARCH_DL_COMPLETE'] = 'Завршена';
$lang['SEARCH_DL_COMPLETE_DOWNLOADS'] = 'Завршена преузимања.';
$lang['SEARCH_DL_CANCEL'] = 'Отказан';
$lang['CUR_UPLOADS'] = 'Текућа учитавања.';
$lang['SEARCH_RELEASES'] = 'Релизе.';
$lang['TOR_SEARCH_TITLE'] = 'Торрент опције претраге';
$lang['OPEN_TOPIC'] = 'Отворите тему.';

$lang['REG_NOT_ALLOWED_IN_THIS_FORUM'] = 'Није могуће регистровати торрент на овом форуму.';
$lang['ALREADY_REG'] = 'Торент је већ регистрован';
$lang['NOT_TORRENT'] = 'Ова датотека није торрент';
$lang['VIEWING_USER_BT_PROFILE'] = 'Профил торента';
$lang['CUR_ACTIVE_DLS'] = 'Активни торенти.';

$lang['TD_TRAF'] = 'Данас';
$lang['YS_TRAF'] = 'Јуче';
$lang['TOTAL_TRAF'] = 'Укупна';

$lang['USER_RATIO'] = 'Однос';
$lang['MAX_SPEED'] = 'Брзина';
$lang['DOWNLOADED'] = 'Скинуо';
$lang['UPLOADED'] = 'Отпремљено.';
$lang['RELEASED'] = 'Објављен';
$lang['BONUS'] = 'Бонус';
$lang['IT_WILL_BE_DOWN'] = 'биће рачунато када се преузме';
$lang['SPMODE_FULL'] = 'Прикажи вршњаке у свим детаљима.';

// Seed Bonus
$lang['MY_BONUS'] = 'Мој бонус (%s поена доступно)';
$lang['BONUS_SELECT'] = 'Изаберите';
$lang['SEED_BONUS'] = 'Бонус семена.';
$lang['EXCHANGE'] = 'Размена.';
$lang['EXCHANGE_BONUS'] = 'Размена бонус поена';
$lang['BONUS_UPLOAD_DESC'] = '<b>+%s кредит за отпремање</b> <br /> Размените бонус поене за %1$s додатог промета за отпремање који ће бити додат вашем укупном билансу.';
$lang['BONUS_UPLOAD_PRICE'] = '<b class="%s">%s</b>';
$lang['PRICE'] = 'Цена';
$lang['EXCHANGE_NOT'] = 'Размена није доступна';
$lang['BONUS_SUCCES'] = '%s је успешно додато на ваш рачун';
$lang['BONUS_NOT_SUCCES'] = '<span class="leech">Немате доступне бонусе. Више семена!</span>.';
$lang['BONUS_RETURN'] = 'Вратите се на размену бонуса семена.';

$lang['TRACKER'] = 'Трацкер';
$lang['RANDOM_RELEASE'] = 'Случајно издање';
$lang['OPEN_TOPICS'] = 'Отворите теме.';
$lang['OPEN_IN_SAME_WINDOW'] = 'Отворите у истом прозору.';
$lang['SHOW_TIME_TOPICS'] = 'прикажи време креирања теме';
$lang['SHOW_CURSOR'] = 'Изааберите линију испод курсора.';

$lang['BT_LOW_RATIO_FOR_DL'] = 'Ваш коефицијент од <b>%s</b> је пренизак за преузимање торената';
$lang['BT_RATIO_WARNING_MSG'] = 'Ако ваш коефицијент падне испод %s, нећете моћи да преузимате торенте! <a href="%s"><b>Више о коефицијенту.</b></a>';

$lang['SEEDER_LAST_SEEN'] = 'Сидери нису видљиви: <b>%s</b>.';

$lang['NEED_TO_LOGIN_FIRST'] = 'Морате се пријавити прво';
$lang['ONLY_FOR_MOD'] = 'Ова опција је доступна само модераторима';
$lang['ONLY_FOR_ADMIN'] = 'Ова опција је доступна само администраторима';
$lang['ONLY_FOR_SUPER_ADMIN'] = 'Ова опција је доступна само супер администраторима';

$lang['LOGS'] = 'Историја теме.';
$lang['FORUM_LOGS'] = 'Историја форума';
$lang['AUTOCLEAN'] = 'Автоочистка';
$lang['DESIGNER'] = 'Дизајнер.';

$lang['LAST_IP'] = 'Последњи ИП:.';
$lang['REG_IP'] = 'ИП-адреса регистрације:.';
$lang['OTHER_IP'] = 'Други ИП:.';
$lang['ALREADY_REG_IP'] = 'Корисник %s је већ регистрован са вашом ИП адресом. Ако раније нисте регистровани на нашем тракеру, пошаљите имејл на <a href="mailto:%s">администратору</a>';
$lang['HIDDEN'] = 'Скривен.';

// from admin
$lang['NOT_ADMIN'] = 'Не можете да управљате овом таблом';

$lang['SESSION_EXPIRED'] = 'Сесија је истекла';

// Sort memberlist per letter
$lang['POST_LINK'] = 'Линк до поста.';
$lang['GOTO_QUOTED_POST'] = 'Идите на цитирани пост.';
$lang['LAST_VISITED'] = 'Последња Посета';
$lang['LAST_ACTIVITY'] = 'Последња активност';
$lang['NEVER'] = 'Никада';

//mpd
$lang['DELETE_POSTS'] = 'Уклоните изабране поруке.';
$lang['DELETE_POSTS_SUCCESFULLY'] = 'Изабране поруке су успешно уклоњене.';
$lang['NO_POSTS_REMOVED'] = 'Није уклоњена ниједна порука.';

//ts
$lang['TOPICS_ANNOUNCEMENT'] = 'Огласи.';
$lang['TOPICS_STICKY'] = 'Лепила.';
$lang['TOPICS_NORMAL'] = 'Теме';

//dpc
$lang['DOUBLE_POST_ERROR'] = 'Не можете да направите још један пост са истим текстом као ваш последњи.';

//upt
$lang['UPDATE_POST_TIME'] = 'Ажурирај пост време.';

$lang['TOPIC_SPLIT_NEW'] = 'Нова тема.';
$lang['TOPIC_SPLIT_OLD'] = 'Стара тема.';
$lang['BOT_LEAVE_MSG_MOVED'] = 'Додајте бот-поруку о селидби.';
$lang['BOT_REASON_MOVED'] = 'Разлог за премештање';
$lang['BOT_AFTER_SPLIT_TO_OLD'] = 'Додајте бот-поруку о распаду у <b>стару тему</b>.';
$lang['BOT_AFTER_SPLIT_TO_NEW'] = 'Додајте бот-поруку о распаду у <b>нову тему</b>.';
//qr
$lang['QUICK_REPLY'] = 'Брз Одговор';
$lang['INS_NAME_TIP'] = 'Уметните име или изабрани текст.';
$lang['QUOTE_SELECTED'] = 'Цитирајте изабрано.';
$lang['QR_NOTIFY'] = 'Обавестите о одговору.';
$lang['QR_USERNAME'] = 'Име';
$lang['QR_FONT_SEL'] = 'Фонт.';
$lang['QR_COLOR_SEL'] = 'Боја фонта.';
$lang['QR_SIZE_SEL'] = 'Величина фонта';
$lang['COLOR_STEEL_BLUE'] = 'Челична Плава.';
$lang['COLOR_GRAY'] = 'Сива.';
$lang['COLOR_DARK_GREEN'] = 'Тамно Зелена.';

// Short buttons
$lang['IP'] = 'ИП';
$lang['POLL'] = 'Анкета';
$lang['MODERATE'] = 'Модератор';
$lang['SEND_PM_SHORT'] = 'МВ';
$lang['WEBSITE_SHORT'] = 'WWW';

$lang['DECLENSION']['REPLIES'] = ['одговор.', 'одговори.'];
$lang['DECLENSION']['TIMES'] = ['време.', 'пута.'];
$lang['DECLENSION']['FILES'] = ['фајл', 'фајлови'];

$lang['AUTH_TYPES'][AUTH_ALL] = $lang['AUTH_ANONYMOUS_USERS'];
$lang['AUTH_TYPES'][AUTH_REG] = $lang['AUTH_REGISTERED_USERS'];
$lang['AUTH_TYPES'][AUTH_ACL] = $lang['AUTH_USERS_GRANTED_ACCESS'];
$lang['AUTH_TYPES'][AUTH_MOD] = $lang['AUTH_MODERATORS'];
$lang['AUTH_TYPES'][AUTH_ADMIN] = $lang['AUTH_ADMINISTRATORS'];

$lang['NEW_USER_REG_DISABLED'] = 'Жао ми је, регистрација је искључена у овом тренутку.';
$lang['ONLY_NEW_POSTS'] = 'Само нове поруке.';
$lang['ONLY_NEW_TOPICS'] = 'Само нове теме.';

$lang['TORHELP_TITLE'] = 'Молим вас, помогните у смештању ових торената!';
$lang['STATISTICS'] = 'Статистика';
$lang['STATUS'] = 'Статус';
$lang['ACTION'] = 'Акција.';
$lang['REASON'] = 'Разлог.';
$lang['COMMENT'] = 'Коментар.';

// search
$lang['SEARCH_S'] = 'тражи...';
$lang['FORUM_S'] = 'на форуму';
$lang['TRACKER_S'] = 'на тракеру';
$lang['HASH_S'] = 'по info_hash';

// copyright
$lang['NOTICE'] = '!Пажња!';
$lang['COPY'] = 'Сајт не пружа електронске верзије производа и бави се само прикупљањем и каталогизацијом упућених и објављених референци на форуму од стране наших читаоца. Ако сте законити власник било ког поднетог материјала и не желите да референца на њега буде у нашем каталогу, контактирајте нас и одмах ћемо је уклонити. Датотеке за размену на тракеру пружају корисници сајта и администрација не сноси одговорност за њихов садржај. Молимо вас да не учитавате датотеке заштићене ауторским правима или датотеке незаконитог садржаја!';

// FILELIST
$lang['COLLAPSE'] = 'Смањите каталог';
$lang['EXPAND'] = 'Растегните';
$lang['SWITCH'] = 'Прекидач';
$lang['TOGGLE_WINDOW_FULL_SIZE'] = 'Повећајте/смањите прозор';
$lang['EMPTY_TOPIC_ID'] = 'Недостаје идентификатор теме';
$lang['TOR_NOT_FOUND'] = 'Датотека недостаје на серверу';
$lang['ERROR_BUILD'] = 'Садржај овог торента се не може приказати (није било могуће направити листу датотека)';
$lang['TORFILE_INVALID'] = 'Торрент датотека је оштећена';

// Profile
$lang['WEBSITE_ERROR'] = '"Сајт" може садржати само http://sitename';
$lang['PROFILE_USER'] = 'Прегледај профил';
$lang['GOOD_UPDATE'] = 'успешно ажурирано';
$lang['UCP_DOWNLOADS'] = 'Преузимања';
$lang['HIDE_DOWNLOADS'] = 'Сакријте листу актуелних преузимања на свом профилу';
$lang['BAN_USER'] = 'Ограничења корисника';
$lang['USER_NOT_ALLOWED'] = 'Корисницима није дозвољено';
$lang['HIDE_AVATARS'] = 'Показати аватаре';
$lang['SHOW_CAPTION'] = 'Покажите свој потпис';
$lang['DOWNLOAD_TORRENT'] = 'Преузмите торрент';
$lang['SEND_PM'] = 'Пошаљите личну поруку';
$lang['SEND_MESSAGE'] = 'Пошаљи поруку';
$lang['NEW_THREADS'] = 'Нове теме';
$lang['PROFILE_NOT_FOUND'] = 'Профил није пронађен';

$lang['USER_DELETE_EXPLAIN'] = 'Уклоните овог корисника.';
$lang['USER_DELETE_ME'] = 'Жао нам је, ваш налог не може бити обрисан!';
$lang['USER_DELETE_CSV'] = 'Жао нам је, овај налог не може бити обрисан!';
$lang['USER_DELETE_CONFIRM'] = 'Да ли сте сигурни да желите да обришете овог корисника?';
$lang['USER_DELETED'] = 'Корисник је успешно обрисан';
$lang['DELETE_USER_ALL_POSTS'] = 'Да бисте обрисали све поруке корисника';
$lang['DELETE_USER_ALL_POSTS_CONFIRM'] = 'Да ли сте сигурни да желите да обришете све поруке и све теме које је започео овај корисник?';
$lang['DELETE_USER_POSTS'] = 'Обриши све поруке осим прве у свакој теми';
$lang['DELETE_USER_POSTS_ME'] = 'Да ли сте сигурни да желите да уклоните све моје поруке?';
$lang['DELETE_USER_POSTS_CONFIRM'] = 'Да ли сте сигурни да желите да обришете све поруке осим прве у свакој теми?';
$lang['USER_DELETED_POSTS'] = 'Поруке су успешно уклоњене';

$lang['USER'] = 'Корисник';
$lang['ROLE'] = 'Улога:';
$lang['MEMBERSHIP_IN'] = 'Чланство у';
$lang['PARTY'] = 'Учесник је:';
$lang['CANDIDATE'] = 'Кандидат:';
$lang['INDIVIDUAL'] = 'Има индивидуална права';
$lang['GROUP_LIST_HIDDEN'] = 'Није Вам дозвољено да видите скривене групе';

$lang['USER_ACTIVATE'] = 'Активирај';
$lang['USER_DEACTIVATE'] = 'Деактивирајте';
$lang['DEACTIVATE_CONFIRM'] = 'Да ли сте сигурни да желите да деактивирате овог корисника?';
$lang['USER_ACTIVATE_ON'] = 'Корисник је успешно активиран';
$lang['USER_DEACTIVATE_ME'] = 'Не можете деактивирати свој налог!';
$lang['ACTIVATE_CONFIRM'] = 'Да ли сте сигурни да желите да активирате овог корисника?';
$lang['USER_ACTIVATE_OFF'] = 'Корисник је успешно деактивиран';

// Register
$lang['CHOOSE_A_NAME'] = 'Молимо изаберите корисничко име';
$lang['CHOOSE_E_MAIL'] = 'Морате да наведете адресу е-поште';
$lang['CHOOSE_PASS'] = 'Поље за лозинку не сме бити празно!';
$lang['CHOOSE_PASS_ERR'] = 'Лозинке које сте унели се не поклапају';
$lang['CHOOSE_PASS_ERR_MIN'] = 'Ваша лозинка би требало да буде не мање од %d ликова';
$lang['CHOOSE_PASS_ERR_MAX'] = 'Ваша лозинка не сме бити дужа од %d карактера';
$lang['CHOOSE_PASS_ERR_NUM'] = 'Лозинка мора садржавати најмање једну цифру';
$lang['CHOOSE_PASS_ERR_LETTER'] = 'Лозинка мора садржавати најмање једно слово латиничног алфабета';
$lang['CHOOSE_PASS_ERR_LETTER_UPPERCASE'] = 'Лозинка мора садржавати најмање једно велико слово латиничног алфабета';
$lang['CHOOSE_PASS_ERR_SPEC_SYMBOL'] = 'Лозинка мора садржавати најмање један специјални знак';
$lang['CHOOSE_PASS_OK'] = 'Лозинке се поклапају';
$lang['CHOOSE_PASS_REG_OK'] = 'Лозинке се поклапају, можете да наставите са регистрацијом';
$lang['CHOOSE_PASS_FAILED'] = 'Да бисте променили лозинку, морате исправно одредити тренутну лозинку';
$lang['EMAILER_DISABLED'] = 'Жао нам је, ова функција је привремено недоступна';
$lang['REGISTERED_IN_TIME'] = 'Регистрација је тренутно затворена<br /><br />Регистрација је доступна током: %s<br />Тренутно време сервера: %s<br /><br />Жао нам је због непријатности';
$lang['AUTOCOMPLETE'] = 'Генеришите лозинку';
$lang['YOUR_NEW_PASSWORD'] = 'Ваша нова лозинка:';
$lang['REGENERATE'] = 'Регенирација';

// Debug
$lang['EXECUTION_TIME'] = 'Време извршења:';
$lang['SEC'] = 'с';
$lang['ON'] = 'на';
$lang['OFF'] = 'од';
$lang['MEMORY'] = 'Меморија: ';
$lang['QUERIES'] = 'захтеви';
$lang['SHOW_LOG'] = 'Прикажи лог';
$lang['EXPLAINED_LOG'] = 'Објашњен лог';
$lang['CUT_LOG'] = 'Сечите дуге упите';

// Attach Guest
$lang['DOWNLOAD_INFO'] = 'Преузмите бесплатно и на максималну брзину!';
$lang['HOW_TO_DOWNLOAD'] = 'Како да преузмете?';
$lang['WHAT_IS_A_TORRENT'] = 'Шта је торент?';
$lang['RATINGS_AND_LIMITATIONS'] = 'Оцене и ограничења';

$lang['SCREENSHOTS_RULES'] = 'Прочитајте правила за постављање слика екрана!';
$lang['AJAX_EDIT_OPEN'] = 'Већ имате отворену сесију за брзо уређивање!';
$lang['GO_TO_PAGE'] = 'Идите на страницу ...';
$lang['EDIT'] = 'Уреди';
$lang['SAVE'] = 'Сачувај';
$lang['NEW_WINDOW'] = 'у новом прозору';

// BB Code
$lang['ALIGN'] = 'Алина: ';
$lang['LEFT'] = 'Лево';
$lang['RIGHT'] = 'Десно';
$lang['CENTER'] = 'центриран';
$lang['JUSTIFY'] = 'Да се уклопи у ширину';
$lang['HOR_LINE'] = 'Хоризонталну линију (Ctrl+8)';
$lang['NEW_LINE'] = 'Нова линија';
$lang['BOLD'] = 'Неправилно написан текст: [b]текст[/b] (Ctrl+Б)';
$lang['ITALIC'] = 'Курсив текст: [i]текст[/i] (Ctrl+И)';
$lang['UNDERLINE'] = 'Текст подвлачења: [u]текст[/u] (Ctrl+У)';
$lang['STRIKEOUT'] = 'Прецртан текст: [s]текст[/s] (Ctrl+S)';
$lang['BOX_TAG'] = 'Рам оквир око текста: [box]текст[/box] или [box=#333,#888]текст[/box]';
$lang['INDENT_TAG'] = 'Уметните индент: [indent]текст[/indent]';
$lang['PRE_TAG'] = 'Форматирани текст: [pre]текст[/pre]';
$lang['NFO_TAG'] = 'NFO: [nfo]текст[/nfo]';
$lang['SUPERSCRIPT'] = 'Суперскрипт текст: [sup]текст[/sup]';
$lang['SUBSCRIPT'] = 'Субскрипт текст: [sub]текст[/sub]';
$lang['QUOTE_TITLE'] = 'Цитирати текст: [quote]текст[/quote] (Ctrl+Ц)';
$lang['IMG_TITLE'] = 'Уметни слику: [img]хттпс://имаге_урл[/img] (Цтрл+Р)';
$lang['URL'] = 'URL';
$lang['URL_TITLE'] = 'Уметни УРЛ: [url]хттпс://урл[/url] или [урл=хттпс://урл]УРЛ текст[/url] (Цтрл+В)';
$lang['CODE_TITLE'] = 'Дисплеј кода: [code]code[/code] (Цтрл+К)';
$lang['LIST'] = 'Списак';
$lang['LIST_TITLE'] = 'Листа: [list]text[/list] (комбинација тастера Ctrl+л)';
$lang['LIST_ITEM'] = 'Уређена листа: [list]text[/list] (Цтрл+О)';
$lang['ACRONYM'] = 'Акроним';
$lang['ACRONYM_TITLE'] = 'Акроним: [acronym=Пун текст]Кратак текст[/acronym]';
$lang['QUOTE_SEL'] = 'Цитат изабран';
$lang['JAVASCRIPT_ON'] = 'JavaScript мора бити омогућен за слање порука';

$lang['NEW'] = 'Нови';
$lang['NEWEST'] = 'Нове';
$lang['LATEST'] = 'Последњи';
$lang['POST'] = 'Пост';
$lang['OLD'] = 'Стари';

// DL-List
$lang['DL_USER'] = 'Корисничко име';
$lang['DL_PERCENT'] = 'Проценат завршетка';
$lang['DL_UL'] = 'Ст';
$lang['DL_DL'] = 'Дл';
$lang['DL_UL_SPEED'] = 'Брзина ст';
$lang['DL_DL_SPEED'] = 'Брзина дл';
$lang['DL_PORT'] = 'Лука';
$lang['DL_CLIENT'] = 'BitTorrent клијент';
$lang['DL_FORMULA'] = 'Формула: Напуњен/Величина Торента';
$lang['DL_ULR'] = 'ULR';
$lang['DL_STOPPED'] = 'стопиран';
$lang['DL_UPD'] = 'време ажурирања: ';
$lang['DL_INFO'] = 'показује податке <i><b>само за текућу сесију</b></i>';
$lang['HIDE_PEER_TORRENT_CLIENT'] = 'Сакриј име мог BitTorrent клијента у листи парова';
$lang['HIDE_PEER_COUNTRY_NAME'] = 'Сакриј име моје земље у листи парова';
$lang['HIDE_PEER_USERNAME'] = 'Сакриј корисничко име у листи парова';

// Post PIN
$lang['POST_PIN'] = 'Прикачи први пост';
$lang['POST_UNPIN'] = 'Одприј пост';
$lang['POST_PINNED'] = 'Први пост прикован';
$lang['POST_UNPINNED'] = 'Први пост одклењен';

// Management of my messages
$lang['GOTO_MY_MESSAGE'] = 'Затвори и врати се на листу "Моје поруке"';
$lang['DEL_MY_MESSAGE'] = 'Изабране теме су уклоњене из "моје поруке"';
$lang['NO_TOPICS_MY_MESSAGE'] = 'Нема постова у вашој листи постова (можда сте их већ уклонили)';
$lang['EDIT_MY_MESSAGE_LIST'] = 'списак уреди';
$lang['SELECT_INVERT'] = 'избор / инверт';
$lang['RESTORE_ALL_POSTS'] = 'Да се врати све постове';
$lang['DEL_LIST_MY_MESSAGE'] = 'Уклони изабране теме из листе';
$lang['DEL_LIST_MY_MESSAGE_INFO'] = 'Након уклањања, <b>пуна листа</b> може и даље приказивати раније избрисане теме док се не освежи';
$lang['DEL_LIST_INFO'] = 'Да бисте уклонили унос са листе, кликните на икону лево од имена било ког одељка';

// Watched topics
$lang['WATCHED_TOPICS'] = 'Гледане теме';
$lang['NO_WATCHED_TOPICS'] = 'Не пратите ниједну тему';

// set_die_append_msg
$lang['INDEX_RETURN'] = 'Вратите се на почетну страницу';
$lang['FORUM_RETURN'] = 'Назад на форум';
$lang['TOPIC_RETURN'] = 'Да се вратимо на тему.';
$lang['POST_RETURN'] = 'Иди на пост.';
$lang['PROFILE_EDIT_RETURN'] = 'Да се вратите на уређивање';
$lang['PROFILE_RETURN'] = 'Идите на профил';

$lang['INDEXER'] = 'Преиндексирана претрага';
$lang['INDEXER_SUCCESS'] = 'Индекс претраге успешно је ажуриран';

$lang['FORUM_STYLE'] = 'Стил форума';

$lang['LINKS_ARE_FORBIDDEN'] = 'Линкови су забрањени';

$lang['GENERAL'] = 'Општи Админ';
$lang['USERS'] = 'Корисник Админ';
$lang['GROUPS'] = 'Администратор Групе';
$lang['FORUMS'] = 'Администратор Форума';
$lang['MODS'] = 'Модификације';

$lang['CONFIGURATION'] = 'Конфигурације';
$lang['MANAGE'] = 'Управљање';
$lang['DISALLOW'] = 'Имена забрани';
$lang['PRUNE'] = 'Резидба';
$lang['MASS_EMAIL'] = 'Масовне Е-Маил';
$lang['RANKS'] = 'Редове';
$lang['SMILIES'] = 'Смајлије';
$lang['BAN_MANAGEMENT'] = 'Контрола Забране';
$lang['WORD_CENSOR'] = 'Реч Цензура';
$lang['CRON'] = 'Планирање таска (cron)';
$lang['REBUILD_SEARCH_INDEX'] = 'Обновите индекс претраге.';
$lang['FORUM_CONFIG'] = 'Подешавања форума';
$lang['ACTIONS_LOG'] = 'Дневник акција';

// Migrations
$lang['MIGRATIONS_STATUS'] = 'Статус миграције базе података';
$lang['MIGRATIONS_DATABASE_NAME'] = 'Име базе података';
$lang['MIGRATIONS_DATABASE_TOTAL'] = 'Укупно табела';
$lang['MIGRATIONS_DATABASE_SIZE'] = 'Величина базе података';
$lang['MIGRATIONS_DATABASE_INFO'] = 'Информације о бази података';
$lang['MIGRATIONS_SYSTEM'] = 'Систем миграције';
$lang['MIGRATIONS_NEEDS_SETUP'] = 'Потребно подешавање';
$lang['MIGRATIONS_ACTIVE'] = 'Активни';
$lang['MIGRATIONS_NOT_INITIALIZED'] = 'Није иницијализован';
$lang['MIGRATIONS_UP_TO_DATE'] = 'Све актуелно';
$lang['MIGRATIONS_PENDING_COUNT'] = 'на чекању';
$lang['MIGRATIONS_APPLIED'] = 'Пријављене миграције';
$lang['MIGRATIONS_PENDING'] = 'На чекању миграције';
$lang['MIGRATIONS_VERSION'] = 'Верзија';
$lang['MIGRATIONS_NAME'] = 'Име миграције';
$lang['MIGRATIONS_FILE'] = 'Фајл миграције';
$lang['MIGRATIONS_APPLIED_AT'] = 'Пријављено у';
$lang['MIGRATIONS_COMPLETED_AT'] = 'Завршено у';
$lang['MIGRATIONS_CURRENT_VERSION'] = 'Тренутна верзија';
$lang['MIGRATIONS_NOT_APPLIED'] = 'Ниједна миграција није примењена';
$lang['MIGRATIONS_INSTRUCTIONS'] = 'Упутства';
$lang['MIGRATIONS_SETUP_STATUS'] = 'Статус подешавања';
$lang['MIGRATIONS_SETUP_GUIDE'] = 'Видите водич за подешавање испод';
$lang['MIGRATIONS_ACTION_REQUIRED'] = 'Обавезна акција';

// Index
$lang['MAIN_INDEX'] = 'Индекс Форума';
$lang['FORUM_STATS'] = 'Статистика Форума';
$lang['ADMIN_INDEX'] = 'Број Админ';
$lang['CREATE_PROFILE'] = 'Направите профил';

$lang['TP_VERSION'] = 'Сајт torrentpier верзија';
$lang['TP_RELEASE_DATE'] = 'Датум изласка';
$lang['PHP_INFO'] = 'PHP информације';

$lang['CLICK_RETURN_ADMIN_INDEX'] = 'Кликните %sHere%s да се вратите на индекс Админ';

$lang['NUMBER_POSTS'] = 'Број постова';
$lang['POSTS_PER_DAY'] = 'Постова у дан';
$lang['NUMBER_TOPICS'] = 'Број тема';
$lang['TOPICS_PER_DAY'] = 'Теме за дан';
$lang['NUMBER_USERS'] = 'Број корисника';
$lang['USERS_PER_DAY'] = 'Корисника у дан';
$lang['BOARD_STARTED'] = 'Савет је почео';
$lang['AVATAR_DIR_SIZE'] = 'Аватар Величина каталога';
$lang['NOT_AVAILABLE'] = 'Није доступан';

// System information
$lang['ADMIN_SYSTEM_INFORMATION'] = 'Информације о систему';
$lang['ADMIN_SYSTEM_OS'] = 'ОС:';
$lang['ADMIN_SYSTEM_PHP_VER'] = 'PHP:';
$lang['ADMIN_SYSTEM_DATABASE_VER'] = 'База података:';
$lang['ADMIN_SYSTEM_PHP_MEM_LIMIT'] = 'Лимит меморије:';
$lang['ADMIN_SYSTEM_DISK_SPACE_INFO_TITLE'] = 'Информације о дисковном простору:';
$lang['ADMIN_SYSTEM_DISK_SPACE_INFO'] = '%s (употребљен: %s | слободно: %s)';
$lang['ADMIN_SYSTEM_PHP_MAX_EXECUTION_TIME'] = 'Максимално време извршења:';

// Clear Cache
$lang['DATASTORE'] = 'Складиште података';
$lang['CLEAR_CACHE'] = 'Кеш';
$lang['CLEAR_TEMPLATES_CACHE'] = 'Кеш шаблона';

// Update
$lang['USER_LEVELS'] = 'Нивои корисника';
$lang['USER_LEVELS_UPDATED'] = 'Нивои корисника су ажурирани';

// Synchronize
$lang['SYNCHRONIZE'] = 'Синхронизујете';
$lang['TOPICS_DATA_SYNCHRONIZED'] = 'Подаци теме су синхронизовани';
$lang['USER_POSTS_COUNT'] = 'Поруке корисника тачка';
$lang['USER_POSTS_COUNT_SYNCHRONIZED'] = 'Поруке корисника гроф је био синхронизован';

// Online Userlist
$lang['SHOW_ONLINE_USERLIST'] = 'Прикажи листу корисника на мрежи';

// Robots.txt editor
$lang['ROBOTS_TXT_EDITOR_TITLE'] = 'Управљај robots.txt';
$lang['ROBOTS_TXT_UPDATED_SUCCESSFULLY'] = 'Фајл robots.txt је успешно ажуриран';
$lang['CLICK_RETURN_ROBOTS_TXT_CONFIG'] = '%sКликните овде да се вратите на управљач robots.txt%s';

// Auth pages
$lang['USER_SELECT'] = 'Изаберите корисника';
$lang['GROUP_SELECT'] = 'Изаберите групу';
$lang['SELECT_A_FORUM'] = 'Изаберите форум';
$lang['AUTH_CONTROL_USER'] = 'Контрола Права Приступа Корисника';
$lang['AUTH_CONTROL_GROUP'] = 'Права Групе Контроле';
$lang['AUTH_CONTROL_FORUM'] = 'Форум Управљање Резолуцијама';
$lang['LOOK_UP_FORUM'] = 'Погледајте форум';

$lang['GROUP_AUTH_EXPLAIN'] = 'Овде можете променити дозволе и статус модератора додељен свакој групи корисника. Не заборавите да, када промените дозволе групе, индивидуална права приступа корисника могу и даље дозволити кориснику да уђе у форум, итд. Бићете обавештени ако је то случај.';
$lang['USER_AUTH_EXPLAIN'] = 'Овде можете променити дозволе и статус модератора додељен сваком појединачном кориснику. Не заборавите да, када промените дозволе корисника, групна права могу и даље дозволити кориснику улазак на форум, итд. Бићете обавештени ако је то случај.';
$lang['FORUM_AUTH_EXPLAIN'] = 'Овде можете променити нивое ауторизације сваког форума. Имаћете и једноставан и напредан метод за то, где напредни нуди већу контролу над сваком операцијом форума. Запамтите да ће промене нивоа дозвола форума утицати на то који корисници могу да обављају различите операције унутар њих.';

$lang['SIMPLE_MODE'] = 'Једноставан Режим';
$lang['ADVANCED_MODE'] = 'Напредни Мод';
$lang['MODERATOR_STATUS'] = 'Статус модератора';

$lang['PUBLIC'] = 'Јавне';
$lang['PRIVATE'] = 'Приватна';
$lang['REGISTERED'] = 'Регистрован';
$lang['ADMINISTRATORS'] = 'Администратори';

// These are displayed in the drop-down boxes for advanced mode forum auth, try and keep them short!
$lang['FORUM_ALL'] = 'Све';
$lang['FORUM_REG'] = 'Рег';
$lang['FORUM_PRIVATE'] = 'Приватна';
$lang['FORUM_MOD'] = 'Мод';
$lang['FORUM_ADMIN'] = 'Админ';

$lang['AUTH_VIEW'] = $lang['VIEW'] = 'Поглед';
$lang['AUTH_READ'] = $lang['READ'] = 'Прочитајте';
$lang['AUTH_POST'] = $lang['POST'] = 'Пост';
$lang['AUTH_REPLY'] = $lang['REPLY'] = 'Одговор';
$lang['AUTH_EDIT'] = $lang['EDIT'] = 'Уреди';
$lang['AUTH_DELETE'] = $lang['DELETE'] = 'Уклонити';
$lang['AUTH_STICKY'] = $lang['STICKY'] = 'Лепљив';
$lang['AUTH_ANNOUNCE'] = $lang['ANNOUNCE'] = 'Прогласи';
$lang['AUTH_VOTE'] = $lang['VOTE'] = 'Гласање';
$lang['AUTH_POLLCREATE'] = $lang['POLLCREATE'] = 'Креирај анкету';
$lang['AUTH_ATTACHMENTS'] = $lang['AUTH_ATTACH'] = 'Пост Датотеке';
$lang['AUTH_DOWNLOAD'] = 'Преузмите Датотеке';

$lang['USER_LEVEL'] = 'Нивоу Корисника';
$lang['AUTH_USER'] = 'Корисник';
$lang['AUTH_ADMIN'] = 'Администратор';
$lang['FORUM_AUTH_UPDATED'] = 'Дозволе форуму су ажурирани';
$lang['APPLY_TO_SUBFORUMS'] = 'Примени на подфоруме';

$lang['AUTH_UPDATED'] = 'Дозволе су ажурирани';
$lang['AUTH_GENERAL_ERROR'] = 'Није било могуће променити статус администратора';
$lang['AUTH_SELF_ERROR'] = 'Не можете себи променити статус са администратора на корисника';
$lang['NO_FORUMS_AVAILABLE'] = 'Нема доступних форума. Прво направите форума да бисте управљали дозволама.';
$lang['CLICK_RETURN_USERAUTH'] = 'Кликните %sОвде%s да се врати на права корисника.';
$lang['CLICK_RETURN_GROUPAUTH'] = 'Кликните %sОвде%s да се врати на групу дозвола.';
$lang['CLICK_RETURN_FORUMAUTH'] = 'Кликните %sОвде%s да се врати на форумске дозволе.';

// Banning
$lang['BAN_CONTROL'] = 'Контрола забрана.';
$lang['BAN_EXPLAIN'] = 'Овде можете контролисати забрану корисника.';
$lang['BAN_USERNAME'] = 'Забрана једног или више конкретних корисника.';
$lang['UNBAN_USERNAME'] = 'Деактивирајте једног или више конкретних корисника.';
$lang['UNBAN_USERNAME_EXPLAIN'] = 'Можете разбанити више корисника у једном тренутку, користећи одговарајућу комбинацију миша и тастатуре вашег рачунара и прегледача.';
$lang['NO_BANNED_USERS'] = 'Ниједан корисник није забрањен.';
$lang['BAN_UPDATE_SUCESSFUL'] = 'Банлист је успешно ажуриран.';
$lang['CLICK_RETURN_BANADMIN'] = 'Кликните %sОвде%s, да се вратимо на контролу забране.';

// Configuration
$lang['GENERAL_CONFIG'] = 'Општа Конфигурација';
$lang['CONFIG_EXPLAIN'] = 'Формулар испод ће вам омогућити да подесите све опште опције табле. За корисничке и форумске конфигурације користите релевантне везе с леве стране.';

$lang['CONFIG_MODS'] = 'Промене конфигурације';
$lang['MODS_EXPLAIN'] = 'Ова форма вам омогућава да прилагодите измене.';

$lang['CLICK_RETURN_CONFIG'] = '%sКликните овде, да се вратите у општу конфигурацију.%s';
$lang['CLICK_RETURN_CONFIG_MODS'] = '%sНазад у подешавања%s';

$lang['GENERAL_SETTINGS'] = 'Општа Подешавања';
$lang['SITE_NAME'] = 'Име сајта';
$lang['SITE_DESC'] = 'Опис сајта';
$lang['FORUMS_DISABLE'] = 'Искључи форум';
$lang['BOARD_DISABLE_EXPLAIN'] = 'Овај форум ће бити недоступан корисницима. Администратори ће моћи да приступе контролној табли док је форум искључен.';
$lang['ACC_NONE'] = 'Нико';

$lang['ABILITIES_SETTINGS'] = 'Поставке корисника и основne поставке форума';
$lang['MAX_POLL_OPTIONS'] = 'Максималан број опција за анкету';
$lang['FLOOD_INTERVAL'] = 'Интервал наводњавања';
$lang['FLOOD_INTERVAL_EXPLAIN'] = 'Број секунди које корисник мора да сачека између поста.';
$lang['TOPICS_PER_PAGE'] = 'Теме по страници';
$lang['POSTS_PER_PAGE'] = 'Поруке по страници';
$lang['HOT_THRESHOLD'] = 'Постигнуто популарно праг';
$lang['DEFAULT_LANGUAGE'] = 'Подразумевани Језик';
$lang['DATE_FORMAT'] = 'Формат Датума';
$lang['SYSTEM_TIMEZONE'] = 'Систематска временска зона';
$lang['ENABLE_PRUNE'] = 'Укључите орезивање форума';
$lang['ALLOW_BBCODE'] = 'Дозволите ББ код';
$lang['ALLOW_SMILIES'] = 'Дозволите смајлије';
$lang['SMILIES_PATH'] = 'Пут смајлија';
$lang['SMILIES_PATH_EXPLAIN'] = 'Путања унутар вашег TorrentPier јавног директоријума, нпр. assets/images/smiles';
$lang['ALLOW_SIG'] = 'Дозволите потписе';
$lang['MAX_SIG_LENGTH'] = 'Максимална дужина потписа';
$lang['MAX_SIG_LENGTH_EXPLAIN'] = 'Максималан број карактера у потписима корисника';
$lang['ALLOW_NAME_CHANGE'] = 'Дозволи промену имена корисника';

// Autologin Keys
$lang['ALLOW_AUTOLOGIN'] = 'Дозволите аутоматско пријављивање';
$lang['ALLOW_AUTOLOGIN_EXPLAIN'] = 'Одређује да ли корисници могу да одаберу аутоматско пријављивање при посети форуму.';
$lang['AUTOLOGIN_TIME'] = 'Аутоматска истека клјуча за пријављивање';
$lang['AUTOLOGIN_TIME_EXPLAIN'] = 'Колико дуго аутоматски кључ важи у данима ако корисник не посети.';

// Forum Management
$lang['FORUM_ADMIN_MAIN'] = 'Администрација Форума';
$lang['EDIT_FORUM'] = 'Уређивање форума';
$lang['CREATE_FORUM'] = 'Направите нови форум';
$lang['CREATE_SUB_FORUM'] = 'Направите подфорум';
$lang['CREATE_CATEGORY'] = 'Креирајте нову категорију';
$lang['REMOVE'] = 'Уклонити';
$lang['CONFIG_UPDATED'] = 'Форумска конфигурација је успешно ажурирана.';
$lang['MOVE_UP'] = 'Помери на горе';
$lang['MOVE_DOWN'] = 'Помери на доле';
$lang['NO_MODE'] = 'Ниједан режим није инсталиран.';
$lang['FORUM_EDIT_DELETE_EXPLAIN'] = 'Формулар испод ће вам омогућити да подесите све опште опције табле. За корисничке и форумске конфигурације користите релевантне везе с леве стране';

$lang['MOVE_CONTENTS'] = 'Преместите сав садржај';
$lang['FORUM_DELETE'] = 'Форум уклонити.';
$lang['FORUM_DELETE_EXPLAIN'] = 'Формулар испод ће вам омогућити да бришете форум.';
$lang['CATEGORY_DELETE'] = 'Уклонити Категорију';
$lang['CATEGORY_NAME_EMPTY'] = 'Име категорије није наведено';

$lang['STATUS_LOCKED'] = 'Закључана';
$lang['STATUS_UNLOCKED'] = 'Откључана';
$lang['FORUM_SETTINGS'] = 'Општа Подешавања Форума';
$lang['FORUM_NAME'] = 'Име форума';
$lang['FORUM_DESC'] = 'Опис';
$lang['FORUM_STATUS'] = 'Статус форума';
$lang['FORUM_PRUNING'] = 'Ауто-усеви.';

$lang['PRUNE_DAYS'] = 'Уклони теме које нису постављене.';

$lang['MOVE_AND_DELETE'] = 'Премештање и брисање.';

$lang['DELETE_ALL_POSTS'] = 'Брисање свих постова.';
$lang['DELETE_ALL_TOPICS'] = 'Уклоните све теме укључујући';
$lang['NOWHERE_TO_MOVE'] = 'Нигде за премештање.';

$lang['EDIT_CATEGORY'] = 'Уреди категорију.';
$lang['EDIT_CATEGORY_EXPLAIN'] = 'Користите овај формулар за измену имена категорије.';

$lang['FORUMS_UPDATED'] = 'Форум и информације о категорији успешно ажурирани.';

$lang['MUST_DELETE_FORUMS'] = 'Треба да обришете све форуме пре него што можете да избришете ову категорију.';

$lang['CLICK_RETURN_FORUMADMIN'] = 'Кликните %sТу%s да се вратите на административну управу.';

$lang['SHOW_ALL_FORUMS_ON_ONE_PAGE'] = 'Прикажи све форуме на једној страници';

// Smiley Management
$lang['SMILEY_TITLE'] = 'Смајлије софтвер за уређивање.';
$lang['SMILE_DESC'] = 'Са ове странице можете да додајете, уклањате и уређујете емотиконе или смајлије које корисници могу користити у својим порукама и личним порукама.';

$lang['SMILEY_CONFIG'] = 'Конфигурација смајлија.';
$lang['SMILEY_CODE'] = 'Код смајлија.';
$lang['SMILEY_URL'] = 'Слика смајлија.';
$lang['SMILEY_EMOT'] = 'Смајли емоције.';
$lang['SMILE_ADD'] = 'Додајте нови смајли. .';
$lang['SMILE'] = 'Осмех';
$lang['EMOTION'] = 'Емоције';

$lang['SELECT_PAK'] = 'Изаберите пакет (.pak).';
$lang['REPLACE_EXISTING'] = 'Замени постојећи смајли.';
$lang['KEEP_EXISTING'] = 'Сачувати постојећи смајли.';
$lang['SMILEY_IMPORT_INST'] = 'Морате распаковати смајли пакет.';
$lang['SMILEY_IMPORT'] = 'Увоз смајли пакета.';
$lang['CHOOSE_SMILE_PAK'] = 'Изаберите смајли пакет .пак.';
$lang['IMPORT'] = 'Увоз смајлија.';
$lang['SMILE_CONFLICTS'] = 'Шта урадити у случају конфликта.';
$lang['DEL_EXISTING_SMILEYS'] = 'Уклоните постојеће смајлије пре увоза.';
$lang['IMPORT_SMILE_PACK'] = 'Увоз смајли пакета.';
$lang['EXPORT_SMILE_PACK'] = 'Направите смајли пакет.';
$lang['EXPORT_SMILES'] = 'Да бисте направили пакет смајлија од тренутно инсталираних смајлија, кликните %sОвде%s да бисте преузели датотеку smiles.pak. Дајте овој датотеци одговарајуће име и обавезно задржите .pak екстензију. Затим направите zip-фајл који садржи све слике смајлија и овај .pak конфигурациони фајл.';

$lang['SMILEY_ADD_SUCCESS'] = 'Смајли је успешно додат';
$lang['SMILEY_EDIT_SUCCESS'] = 'Смајли је успешно ажуриран';
$lang['SMILEY_IMPORT_SUCCESS'] = 'Емотикон пакет је успешно увезена!';
$lang['SMILEY_DEL_SUCCESS'] = 'Смајли је успешно обрисан';
$lang['CLICK_RETURN_SMILEADMIN'] = 'Кликните %sТу%s да се вратите на управу смајлија.';

// User Management
$lang['USER_ADMIN'] = 'Администрација Корисника';
$lang['LOOK_UP_USER'] = 'Погледајте корисника.';

// Group Management
$lang['GROUP_ADMINISTRATION'] = 'Управа групе.';
$lang['GROUP_ADMIN_EXPLAIN'] = 'Из овог панела можете управљати свим вашим корисницима.';
$lang['UPDATED_GROUP'] = 'Група је успешно ажурирана.';
$lang['ADDED_NEW_GROUP'] = 'Нова група је успешно креирана.';
$lang['DELETED_GROUP'] = 'Група је успешно обрисана.';
$lang['CREATE_NEW_GROUP'] = 'Направите нову групу';
$lang['EDIT_GROUP'] = 'Уређивање групе';
$lang['GROUP_STATUS'] = 'Статус групе';
$lang['GROUP_DELETE'] = 'Уклонити групу';
$lang['GROUP_DELETE_CHECK'] = 'Уклоните ову групу';
$lang['NO_GROUP_NAME'] = 'Морате навести име за ову групу';
$lang['NO_GROUP_MODERATOR'] = 'Морате да наведете модератор ове групе';
$lang['NO_GROUP_ACTION'] = 'Није постављена ниједна акција.';
$lang['DELETE_OLD_GROUP_MOD'] = 'Уклањање старог модератора групе?';
$lang['DELETE_OLD_GROUP_MOD_EXPL'] = 'Ако мењате групног модератора, означите овај избор да бисте уклонили старог модератора из групе. У супротном, не означавајте и корисник ће постати редовни члан групе.';
$lang['CLICK_RETURN_GROUPSADMIN'] = 'Кликните %sHere%s за повратак у Администрацију групе.';
$lang['SELECT_GROUP'] = 'Изаберите групу';
$lang['LOOK_UP_GROUP'] = 'Потражите групу.';

// Prune Administration
$lang['FORUM_PRUNE'] = 'Чистите форум.';
$lang['FORUM_PRUNE_EXPLAIN'] = 'Ово ће избрисати све теме које нису имале одговора у року од указаног броја дана. Ако не унесете број, све теме ће бити избрисане. Неће се уклонити <b>приковане</b> теме и <b>обавештења</b>. Те теме ћете морати ручно уклонити.';
$lang['DO_PRUNE'] = 'Изврши чистку.';
$lang['PRUNE_TOPICS_NOT_POSTED'] = 'Теме чистите без одговора у том броју дана.';
$lang['TOPICS_PRUNED'] = 'Теме су исечене.';
$lang['PRUNE_SUCCESS'] = 'Форум успешно скраћен';
$lang['NOT_DAYS'] = 'Дани за чишћење нису изабрани.';

// Word censor
$lang['WORDS_TITLE'] = 'Цензурисање речи.';
$lang['WORDS_EXPLAIN'] = 'Из ове управљачке табле можете додавати, изменити и уклонити речи које ће бити аутоматски цензурисане на вашем форуму. Поред тога, људима неће бити дозвољено да се региструју са корисничkim именима која садрже ове речи. Дозвољени су џокер знакови (*) у пољу за реч. На пример, *test* ће одговарати на одвратан, test* ће одговарати на тестирање, *test ће одговарати на одвратно.';
$lang['WORD'] = 'Реч';
$lang['EDIT_WORD_CENSOR'] = 'Уредите аутоматску цензуру.';
$lang['REPLACEMENT'] = 'Замена';
$lang['ADD_NEW_WORD'] = 'Додај нову реч';

$lang['MUST_ENTER_WORD'] = 'Морате да унесете реч и њену замену.';
$lang['NO_WORD_SELECTED'] = 'Нема речи изабраних за уређивање.';

$lang['WORD_UPDATED'] = 'Изабрани аутоматски цензор је успешно обновљен.';
$lang['WORD_ADDED'] = 'Аутоматски цензор је успешно додат.';
$lang['WORD_REMOVED'] = 'Изабрани аутоматски цензор је успешно обрисан.';

$lang['CLICK_RETURN_WORDADMIN'] = 'Кликните %sHere%s да се вратите у управу цензора речи.';

// Mass Email
$lang['MASS_EMAIL_EXPLAIN'] = 'Можете поратити поруку свим корисницима или свим корисницима одређене групе. За то, е-пошта ће бити послата на административну адресу е-поште, са скривеном копијом послатом свим примаоцима. Ако шаљете велику групу људи, молим вас будите стрпљиви после подношења и немојте заустављати страницу на пола. Је нормално да масовна е-пошта дуго траје и обавестићете вас када је скрипта завршена.';
$lang['COMPOSE'] = 'Саставите.';

$lang['RECIPIENTS'] = 'Примаоци';
$lang['ALL_USERS'] = 'Свим Корисницима';

$lang['MASS_EMAIL_MESSAGE_TYPE'] = 'Врста е-поште';

// Ranks admin
$lang['RANKS_TITLE'] = 'Администрација Ранг';
$lang['RANKS_EXPLAIN'] = 'Користећи формулар можете додавати, уређивати, видети и брисати рангове. Такође можете креирати прилагођене рангове који се могу примењивати на корисника преко алата за управљање корисницима.';

$lang['ADD_NEW_RANK'] = 'Додајте нови ранг';
$lang['RANK_TITLE'] = 'Име Ранга';
$lang['STYLE_COLOR'] = 'Ранг стил.';
$lang['STYLE_COLOR_FAQ'] = 'Наведите класу да стилу наслов жељене боје. На пример: <i class="bold">colorAdmin</i>';
$lang['RANK_IMAGE'] = 'Слика ранга.';
$lang['RANK_IMAGE_EXPLAIN'] = 'Користите ово за дефинисање мале слике везане за ранг.';

$lang['MUST_SELECT_RANK'] = 'Морате да изаберете ранг.';

$lang['RANK_UPDATED'] = 'Ранг је успешно обновљен.';
$lang['RANK_ADDED'] = 'Ранг је успешно додат.';
$lang['RANK_REMOVED'] = 'Ранг је успешно обрисан.';
$lang['NO_UPDATE_RANKS'] = 'Ранг је успешно обрисан. Међутим, кориснички налози који користе овај ранг нису обновљени. Мораћете ручно поново да подесите ранг на овим рачунима.';

$lang['CLICK_RETURN_RANKADMIN'] = 'Кликните %sHere%s да се вратите у управу ранга.';

// Disallow Username Admin
$lang['DISALLOW_CONTROL'] = 'Контрола забрањених корисничких имена.';
$lang['DISALLOW_EXPLAIN'] = 'Овде можете контролисати корисничка имена која неће бити дозвољена за употребу. Забрањена корисничка имена могу садржати џокер знак *. Имајте на уму да неће бити дозвољено да наведете ни једно корисничко име које је већ регистровано. Прво морате да уклоните то име, а затим га забраните.';

$lang['DELETE_DISALLOW_TITLE'] = 'Уклоните забрањено корисничко име.';
$lang['DELETE_DISALLOW_EXPLAIN'] = 'Можете уклонити забрањено корисничко име тако што ћете изабрати корисничко име из ове листе и кликнути на поднеси.';

$lang['ADD_DISALLOW'] = 'Додајте';
$lang['ADD_DISALLOW_TITLE'] = 'Додајте неодобрено корисничко име.';

$lang['NO_DISALLOWED'] = 'Нема забрањених корисничких имена.';

$lang['DISALLOWED_DELETED'] = 'Забрањено корисничко име је успешно уклоњено.';
$lang['DISALLOW_SUCCESSFUL'] = 'Забрањено корисничко име је успешно додато.';
$lang['DISALLOWED_ALREADY'] = 'Уведена забрањена имена не могу бити одбијена. Или већ постоји на листи, постоји у списку за цензуру речи, или одговарајуће корисничко име је присутно.';

$lang['CLICK_RETURN_DISALLOWADMIN'] = 'Кликните %sHere%s да се вратите у управу забрањених корисничких имена.';

// Version Check
$lang['VERSION_INFORMATION'] = 'Информације О Верзији';
$lang['UPDATE_AVAILABLE'] = 'Ажурирање доступно';
$lang['CHANGELOG'] = 'Листа промена';

// Login attempts configuration
$lang['MAX_LOGIN_ATTEMPTS'] = 'Дозвољени покушаји пријављивања.';
$lang['MAX_LOGIN_ATTEMPTS_EXPLAIN'] = 'Број дозвољених покушаја пријављивања на систем.';
$lang['LOGIN_RESET_TIME'] = 'Време закључавања пријаве.';
$lang['LOGIN_RESET_TIME_EXPLAIN'] = 'Време у минутима које корисник мора да сачека пре него што поново може да се пријави након што је прешао дозвољени број покушаја пријаве.';

// Permissions List
$lang['PERMISSIONS_LIST'] = 'Листа Дозвола';
$lang['AUTH_CONTROL_CATEGORY'] = 'То пружа резиме нивоа овлашћења сваког форума. Можете уредити ове дозволе, користећи једноставан или напредан метод.';
$lang['FORUM_AUTH_LIST_EXPLAIN'] = 'То пружа резиме нивоа овлашћења сваког форума у овој категорији. Можете уредити дозволе индивидуалних форума, помоћу једноставног или напредног метода.';
$lang['CAT_AUTH_LIST_EXPLAIN'] = 'Можете променити дозволе појединим форумима, користећи једноставан или напредан метод.';
$lang['FORUM_AUTH_LIST_EXPLAIN_ALL'] = 'Сви корисници.';
$lang['FORUM_AUTH_LIST_EXPLAIN_REG'] = 'Сви регистровани корисници.';
$lang['FORUM_AUTH_LIST_EXPLAIN_PRIVATE'] = 'Само корисницима којима је одобрена посебна дозвола.';
$lang['FORUM_AUTH_LIST_EXPLAIN_MOD'] = 'Само модератори овог форума.';
$lang['FORUM_AUTH_LIST_EXPLAIN_ADMIN'] = 'Једино администратори.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_VIEW'] = '%s може да види овај форум.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_READ'] = '%s могу да читају писма у овом форуму.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_POST'] = '%s можете да поставите у овом форуму.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_REPLY'] = '%s може одговарати на постове у овом форуму';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_EDIT'] = '%s можете да измените поруке у овом форуму.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_DELETE'] = '%s можете брисати постове у овом форуму.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_STICKY'] = '%s можете да објавите налепљене теме у овом форуму.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_ANNOUNCE'] = '%s могу да постављају обавештења на овом форуму.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_VOTE'] = '%s можете гласати у анкетама у овом форуму.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_POLLCREATE'] = '%s можете да креирате анкете у овом форуму.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_ATTACHMENTS'] = '%s можете да шаљете прилоге.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_DOWNLOAD'] = '%s може да преузмете прилоге.';

// Tooltips for disabled permissions
$lang['AUTH_TOOLTIP_FORUM_MODE'] = 'Режим форума: %s — не може се промијенити';
$lang['AUTH_TOOLTIP_MOD_OVERRIDE'] = 'Дозвола омогућена преко "Модератора"';
$lang['AUTH_TOOLTIP_GROUP_HAS'] = 'Дозвола додељена групи';

// Misc
$lang['SF_SHOW_ON_INDEX'] = 'Прикажи на почетној страници';
$lang['SF_PARENT_FORUM'] = 'Родитељски форум';
$lang['SF_NO_PARENT'] = 'Без родитељског форума';
$lang['SYNC'] = 'Синхронизација';

// Mods
$lang['MAX_NEWS_TITLE'] = 'Максимална дужина наслова вести';
$lang['NEWS_COUNT'] = 'Колико вести да покажу';
$lang['NEWS_FORUM_ID'] = 'Из којих форума да прикажете <br /> <h6>За неколико форума, наведите ИД-ове одвојене запетама. Пример: 1,2,3</h6>';
$lang['TRACKER_STATS'] = 'Статистика трекера';
$lang['WHOIS_INFO'] = 'Информације о IP адреси';
$lang['SHOW_MOD_HOME_PAGE'] = 'Прикажи модераторе на почетној страници (index.php)';
$lang['SHOW_BOARD_STARTED_INDEX'] = 'Прикажи датум почетка форума на index.php';
$lang['PREMOD_HELP'] = '<h4><span class="tor-icon tor-dup">&#8719;</span> Предмодерација</h4> <h6>Ако нема торрентова статуса v, #, или T у овом одељку и његовим пододељцима, нове дистрибуције ће аутоматски добити овај статус</h6>';
$lang['TOR_COMMENT'] = '<h4>Коментар о статусу дистрибуције</h4> <h6>Коментар вам омогућава да укажете на грешке у издању. Ако су потребне исправке, облик за одговор постаје доступан уручиоцу да исправи издање</h6>';
$lang['SEED_BONUS_ADD'] = '<h4>Правила бонуса за сејдовање</h4> <h6>Број торрентова које корисник сејдује и одговарајући додељени бонус поени на сат</h6>';
$lang['SEED_BONUS_RELEASE'] = 'до Н издања';
$lang['SEED_BONUS_POINTS'] = 'бонус поени по сату';
$lang['SEED_BONUS_TOR_SIZE'] = '<h4>Минимална величина торрента за добијање бонус поена</h4> <h6>Оставите празно да бисте додељивали бонусе за све торенте без обзира на величину.</h6>';
$lang['SEED_BONUS_USER_REGDATA'] = '<h4>Минимална старост корисничког налога за добијање бонус поена</h4> <h6>Оставите празно да бисте додељивали бонус поене свим корисницима без обзира на старост налога.</h6>';
$lang['SEED_BONUS_WARNING'] = 'Пажња! Семе појачања морају бити у растућем редоследу';
$lang['SEED_BONUS_EXCHANGE'] = 'Подешавање размене бонус поена за сејдовање';
$lang['SEED_BONUS_ROPORTION'] = 'Курс размене: бонус поени за GB кредита за отпремање';

$lang['ALLOWED'] = 'Дозвољено';
$lang['RETURN_CONFIG'] = '%sВратити се у конфигурацију%s';
$lang['CONFIG_UPD'] = 'Конфигурација Је Успешно Ажуриран';

// Forum config
$lang['BT_SELECT_FORUMS'] = 'Опције форума:';
$lang['BT_SELECT_FORUMS_EXPL'] = 'Држите <i>Ctrl</i> током избора више форума.';

$lang['REG_TORRENTS'] = 'Регистрите торренте.';
$lang['DISALLOWED'] = 'Забрањено';
$lang['ALLOW_REG_TRACKER'] = 'Дозвољени форуми за регистровање .торрента на тракеру.';
$lang['ALLOW_PORNO_TOPIC'] = 'Дозвољено објављивање садржаја 18+';
$lang['SELF_MODERATED'] = 'Корисници могу <b>преместити</b> своје теме на други форум.';

$lang['BT_ANNOUNCE_URL_HEAD'] = 'Објавите URL адреса.';
$lang['BT_ANNOUNCE_URL'] = 'Објавите URL адреса.';
$lang['BT_ANNOUNCE_URL_EXPL'] = 'Можете дефинисати додатне дозвољене URL адресе у "includes/torrent_announce_urls.php".';
$lang['BT_DISABLE_DHT'] = 'Онемогућите DHT мрежу.';
$lang['BT_DISABLE_DHT_EXPL'] = 'Онемогућите размену пира и DHT (препоручује се за приватне мреже, само URL објави).';
$lang['BT_PRIVATE_TRACKER'] = 'Овај тракер је приватан: листа датотека (за госте), DHT | PEX су онемогућени';
$lang['BT_PRIVATE_TORRENT'] = 'Креатор ове торренте је учинио приватним';
$lang['BT_CHECK_ANNOUNCE_URL'] = 'Проверите објавите URL адресу.';
$lang['BT_CHECK_ANNOUNCE_URL_EXPL'] = 'Само дозвољени URL-ови регистровани на трекеру';
$lang['BT_REPLACE_ANN_URL'] = 'Замена објавите URL адреса.';
$lang['BT_REPLACE_ANN_URL_EXPL'] = 'Замените оригиналну објаву URL адреса са вашом подразумеваном у .торрент фајловима.';
$lang['BT_DEL_ADDIT_ANN_URLS'] = 'Уклоните све додатне објавите URL адресе.';
$lang['BT_DEL_ADDIT_ANN_URLS_EXPL'] = 'Ако торрент садржи адресе других тракача, они ће бити уклоњени.';

$lang['BT_SHOW_PEERS_HEAD'] = 'Листа-партнера.';
$lang['BT_SHOW_PEERS'] = 'Прикажите вршњаци (сидери и личери).';
$lang['BT_SHOW_PEERS_EXPL'] = 'Ово ће показати сидере/лихере листу изнад теме са торрентом.';
$lang['BT_SHOW_PEERS_MODE'] = 'Подразумевано, приказују вршњака као:';
$lang['BT_SHOW_PEERS_MODE_COUNT'] = 'Рачунати само.';
$lang['BT_SHOW_PEERS_MODE_NAMES'] = 'Имена.';
$lang['BT_SHOW_PEERS_MODE_FULL'] = 'Комплетни детаљи.';
$lang['BT_ALLOW_SPMODE_CHANGE'] = 'Дозволите "пун опис" режим.';
$lang['BT_ALLOW_SPMODE_CHANGE_EXPL'] = 'Ако "не", само подразумевани режим даљинског приказа биће доступан.';
$lang['BT_SHOW_IP_ONLY_MODER'] = '<b>IP</b>s вршњака видљиви само модератори.';
$lang['BT_SHOW_PORT_ONLY_MODER'] = '<b>Порт</b>и вршњака видљиви само модератори.';

$lang['BT_SHOW_DL_LIST_HEAD'] = 'DL-листа.';
$lang['BT_SHOW_DL_LIST'] = 'Приказује DL-листу по темама.';
$lang['BT_DL_LIST_ONLY_1ST_PAGE'] = 'Показати DL-листу само на првој страници у темама.';
$lang['BT_DL_LIST_ONLY_COUNT'] = 'Прикажи само број корисника.';
$lang['BT_SHOW_DL_LIST_BUTTONS'] = 'Прикажи дугме за ручну промену DL-статуса.';
$lang['BT_SHOW_DL_BUT_WILL'] = $lang['DLWILL'];
$lang['BT_SHOW_DL_BUT_DOWN'] = $lang['DLDOWN'];
$lang['BT_SHOW_DL_BUT_COMPL'] = $lang['DLCOMPLETE'];
$lang['BT_SHOW_DL_BUT_CANCEL'] = $lang['DLCANCEL'];

$lang['BT_ADD_AUTH_KEY_HEAD'] = 'Кључ за проверу.';
$lang['BT_ADD_AUTH_KEY'] = 'Омогућите додавање кључа за проверу у торрент-фајлове пре преузимања.';

$lang['BT_TOR_BROWSE_ONLY_REG_HEAD'] = 'Торрент прегледач (трачер).';
$lang['BT_TOR_BROWSE_ONLY_REG'] = 'Торрент прегледач (tracker.php) доступан само за пријављене кориснике';
$lang['BT_SEARCH_BOOL_MODE'] = 'Дозволи логичку пуну текстуалну претрагу.';
$lang['BT_SEARCH_BOOL_MODE_EXPL'] = 'користите *, +, - у претрагама';

$lang['BT_SHOW_DL_STAT_ON_INDEX_HEAD'] = 'Разно.';
$lang['BT_SHOW_DL_STAT_ON_INDEX'] = "Прикажите статистику УЛ/ДЛ на врху главне странице форума";
$lang['BT_NEWTOPIC_AUTO_REG'] = 'Аутоматска регистрација торрент на хттп тракеру за нову тему.';
$lang['BT_SET_DLTYPE_ON_TOR_REG'] = 'Промена статуса теме у "Преузимање" током регистрације бујице на тракеру.';
$lang['BT_SET_DLTYPE_ON_TOR_REG_EXPL'] = 'ће променити тип теме на "Преузимање" без обзира на подешавања форума.';
$lang['BT_UNSET_DLTYPE_ON_TOR_UNREG'] = 'Промена статуса теме у "Нормално" током одјаве торента са тракера.';

// Release
$lang['TEMPLATE_DISABLE'] = 'Шаблон је онемогућен.';
$lang['FOR_NEW_TEMPLATE'] = 'за нове шаблоне!';
$lang['QUESTION'] = 'Да ли сте сигурни да желите да извршите ову акцију?';

$lang['CRON_LIST'] = 'Списак хрон.';
$lang['CRON_ID'] = 'ИД.';
$lang['CRON_ACTIVE'] = 'На.';
$lang['CRON_ACTIVE_EXPL'] = 'Активни задаци.';
$lang['CRON_TITLE'] = 'Титула.';
$lang['CRON_SCRIPT'] = 'Сценарио.';
$lang['CRON_SCHEDULE'] = 'Распоред.';
$lang['CRON_LAST_RUN'] = 'Последњи покретање.';
$lang['CRON_NEXT_RUN'] = 'Следећи покретање.';
$lang['CRON_RUN_COUNT'] = 'Ради.';
$lang['CRON_EXECUTION_TIME'] = 'Време извршења';
$lang['CRON_MANAGE'] = 'Управљање.';
$lang['CRON_DISABLED_WARNING'] = 'Упозорење! Покретање црон скрипти је онемогућено. Да бисте то омогућили, подесите променљиву АПП_ЦРОН_ЕНАБЛЕД.';

$lang['CRON_ENABLED'] = 'Хрон укључено.';
$lang['CRON_CHECK_INTERVAL'] = 'Хрон интервал провере (с).';

$lang['WITH_SELECTED'] = 'Са изабраном.';
$lang['NOTHING'] = 'не раде ништа.';
$lang['CRON_RUN'] = 'Покрените.';
$lang['CRON_DEL'] = 'Уклоните.';
$lang['CRON_DISABLE'] = 'Искључите.';
$lang['CRON_ENABLE'] = 'Укључите.';
$lang['DELETE_JOB'] = 'Да ли сте сигурни да желите да избришете овај cron задатак?';
$lang['CRON_WORKS'] = 'Крон тренутно ради или је покvaren -> ';
$lang['REPAIR_CRON'] = 'Поправке Хрон.';

$lang['CRON_EDIT_HEAD_EDIT'] = 'Измените посао.';
$lang['CRON_EDIT_HEAD_ADD'] = 'Додајте посао.';
$lang['CRON_SCRIPT_EXPL'] = 'име сценарија из "укључује/крон/радна места/".';
$lang['SCHEDULE'] = [
    'select' => '&raquo; изаберите старт.',
    'hourly' => 'по сату.',
    'daily' => 'свакодневно.',
    'weekly' => 'недељни.',
    'monthly' => 'месечно.',
    'interval' => 'интервал.',
];
$lang['NOSELECT'] = 'Није изабрано';
$lang['RUN_DAY'] = 'Покрените дан.';
$lang['RUN_DAY_EXPL'] = 'дан када овај задатак ради';
$lang['RUN_TIME'] = 'Време за обављање.';
$lang['RUN_TIME_EXPL'] = 'време када овај задатак ради (нпр. 05:00:00)';
$lang['RUN_ORDER'] = 'Извршење налога.';
$lang['LAST_RUN'] = 'Последње покретање.';
$lang['NEXT_RUN'] = 'Следеће покретање';
$lang['RUN_INTERVAL'] = 'Интервал покретања';
$lang['RUN_INTERVAL_EXPL'] = 'на пример, 00:10:00';
$lang['LOG_ENABLED'] = 'Часопис је укључен';
$lang['LOG_FILE'] = 'Лог фајл';
$lang['LOG_FILE_EXPL'] = 'датотека у коју се чува дневник';
$lang['LOG_SQL_QUERIES'] = 'Лог СКЛ захтеви';
$lang['FORUM_DISABLE'] = 'Искључи форум';
$lang['BOARD_DISABLE_EXPL'] = 'Искључи форум када се овај посао извршава';
$lang['RUN_COUNTER'] = 'Број покретања';

$lang['JOB_REMOVED'] = 'Задатак је успешно уклоњен';
$lang['SCRIPT_DUPLICATE'] = 'Cron задатак са овим скриптом већ постоји';
$lang['TITLE_DUPLICATE'] = 'Cron задатак са овим насловом већ постоји';
$lang['CLICK_RETURN_JOBS_ADDED'] = '%sВратите се на додатак задатка%s';
$lang['CLICK_RETURN_JOBS'] = '%sВратите се на заказивач задатака%s';

$lang['REBUILD_SEARCH'] = 'Обновите индекс претраге';
$lang['REBUILD_SEARCH_DESC'] = 'Ова модификација ће индексирати свакој поруци на вашем форуму, обнављајући таблице за претрагу. Можете прекинути у било ком тренутку, а следећи пут када је покренете, имаћете опцију да наставите тамо где сте стали.<br /><br />Може потрајати дуго да се прикажу његови напредак (у зависности од "порука по циклусу" и "временског ограничења"), па вас молим да не напуштате своју страницу напредовања док се не заврши, осим ако, наравно, не желите да га прекинете.';

// Input screen
$lang['STARTING_POST_ID'] = 'Почевши post_id';
$lang['STARTING_POST_ID_EXPLAIN'] = 'Први пост где ће обрада почети<br />Можете изабрати да почнете од почетка или од поста где сте последњи зауставили.';

$lang['START_OPTION_BEGINNING'] = 'почети од почетка';
$lang['START_OPTION_CONTINUE'] = 'настави са места где си последњи пут стао';

$lang['CLEAR_SEARCH_TABLES'] = 'Очистите табеле за претрагу';
$lang['CLEAR_SEARCH_TABLES_EXPLAIN'] = '';
$lang['CLEAR_SEARCH_NO'] = 'Нема';
$lang['CLEAR_SEARCH_DELETE'] = 'Уклонити';
$lang['CLEAR_SEARCH_TRUNCATE'] = 'Смањити';

$lang['NUM_OF_POSTS'] = 'Број постова';
$lang['NUM_OF_POSTS_EXPLAIN'] = 'Укупан број постова за обраду<br />Аутоматски попуњава укупан број/осталих постова пронађених у бази.';

$lang['POSTS_PER_CYCLE'] = 'Број постова по циклусу';
$lang['POSTS_PER_CYCLE_EXPLAIN'] = 'Број постова за обраду по циклусу<br />Држите га низак да избегнете PHP/webserver таймаут.';

$lang['REFRESH_RATE'] = 'Фреквенција ажурирања';
$lang['REFRESH_RATE_EXPLAIN'] = 'Колико времена (с) да останете неактивни пре него што пређете на следећи циклус обраде<br />Обично не морате да промените ово.';

$lang['TIME_LIMIT'] = 'Времени лимит';
$lang['TIME_LIMIT_EXPLAIN'] = 'Колико времена (у секундама) постобработка може трајати пре него што се пређе на следећи циклус';
$lang['TIME_LIMIT_EXPLAIN_WEBSERVER'] = '<i>Ваш веб сервер има временски лимит од %s секунди, па останите испод те вредности</i>';

// Information strings
$lang['INFO_PROCESSING_STOPPED'] = 'Последњи пут сте зауставили обраду на post_id %s (%s обрађених постова) на %s.';
$lang['INFO_PROCESSING_ABORTED'] = 'Последњи пут сте прекинули обраду на post_id %s (%s обрађених постова) на %s.';
$lang['INFO_PROCESSING_ABORTED_SOON'] = 'Молимо сачекајте неколико минута пре него што наставите...';
$lang['INFO_PROCESSING_FINISHED'] = 'Успешно сте завршили обраду (%s осмишљене поруке) на %s';
$lang['INFO_PROCESSING_FINISHED_NEW'] = 'Успешно сте завршили обраду на post_id %s (%s обрађених постова) на %s,<br />али је било %s нових постова(а) након тог датума.';

// Progress screen
$lang['REBUILD_SEARCH_PROGRESS'] = 'Обновите напредак претраге.';

$lang['PROCESSED_POST_IDS'] = 'Обрађени ПОШТАНСКИ ИД: %s - %s';
$lang['TIMER_EXPIRED'] = 'Тајмер је истекао у %s сек. ';
$lang['CLEARED_SEARCH_TABLES'] = 'Очистио табеле за претрагу. ';
$lang['DELETED_POSTS'] = '%s пост(а) су избрисане од стране корисника током обраде. ';
$lang['PROCESSING_NEXT_POSTS'] = 'Обрада следећој %s пост(а). Молимо вас, сачекајте...';
$lang['ALL_SESSION_POSTS_PROCESSED'] = 'Обрађене све поруке у тренутној сесији.';
$lang['ALL_POSTS_PROCESSED'] = 'Све поруке су успешно обрађени.';
$lang['ALL_TABLES_OPTIMIZED'] = 'Све таблице за претрагу су успешно оптимизоване.';

$lang['PROCESSING_POST_DETAILS'] = 'Обрађивање поста.';
$lang['CURRENT_SESSION'] = 'Текуча сесија.';
$lang['TOTAL'] = 'Укупно.';

$lang['PROCESS_DETAILS'] = 'од <b>%s</b> до <b>%s</b> (од укупног <b>%s</b>)';
$lang['PERCENT_COMPLETED'] = '%s %% завршено.';

$lang['PROCESSING_TIME_DETAILS'] = 'Детаљи текуће сесије.';
$lang['TIME_LAST_POSTS'] = 'Последњи %s пост(а).';
$lang['TIME_FROM_THE_BEGINNING'] = 'Од самог почетка.';
$lang['TIME_AVERAGE'] = 'Просечна за циклус.';
$lang['TIME_ESTIMATED'] = 'Процењује до завршетка.';

$lang['SIZE_ESTIMATED'] = 'Процењује се, након завршетка.';
$lang['SIZE_SEARCH_TABLES'] = 'Величина таблица за претрагу.';

$lang['POSTS_LAST_CYCLE'] = 'Обрађено пост(а) у последњем циклусу.';

$lang['INFO_ESTIMATED_VALUES'] = '(*) Све процењене вредности израчунавају се приближно<br />на основу тренутно завршеног процента и не могу представљати стварне коначне вредности.<br />Како се проценат завршених повећава, процењене вредности ће се приближити стварним.';

$lang['CLICK_RETURN_REBUILD_SEARCH'] = 'Кликните %shere%s да се вратите на обнову претраге.';
$lang['REBUILD_SEARCH_ABORTED'] = 'Обновите претрагу прекинута на post_id %s.<br /><br />Ако сте абортирали током обраде, мораћете да сачекате неколико минута пре него што поново покренете обнову, тако да последњи циклус може да заврши.';
$lang['WRONG_INPUT'] = 'Сте унели погрешне вредности. Молимо вас да проверите унете податке и покушајте поново.';

// Buttons
$lang['PROCESSING'] = 'Обрада...';
$lang['FINISHED'] = 'Завршио';

$lang['BOT_TOPIC_MOVED_FROM_TO'] = 'Тема је премештена са форума [b]%s[/b] на форум [b]%s[/b].[br][b]Разлог за премештање:[/b] %s[br][br]%s';
$lang['BOT_MESS_SPLITS'] = 'Тема је подељена. Нова тема - [b]%s[/b][br][br]%s';
$lang['BOT_TOPIC_SPLITS'] = 'Тема је подељена од [b]%s[/b][br][br]%s';

$lang['CALLSEED'] = 'Позови сејдере';
$lang['CALLSEED_EXPLAIN'] = 'Обавести сејдере са захтевом да наставе сејдовање овог издања';
$lang['CALLSEED_SUBJECT'] = 'Потребна помоћ при сејдовању: %s';
$lang['CALLSEED_TEXT'] = 'Здраво![br]Потребна вам је помоћ за издање [url=%s]%s[/url][br]Ако желите да помогнете али сте већ избрисали торрент датотеку, можете је преузети [url=%s]овде[/url][br][br]Ваша помоћ би нам много значила!';
$lang['CALLSEED_MSG_OK'] = 'Захтев је послат свима који су преузели ово издање';
$lang['CALLSEED_MSG_SPAM'] = 'Захтев је већ недавно послат (можда не од вас).<br /><br />Следећи захтев се може послати на <b>%s</b>.';
$lang['CALLSEED_HAVE_SEED'] = 'Тема не захтева помоћ (<b>Seeders:</b> %d).';

$lang['LOG_ACTION']['LOG_TYPE'] = [
    'mod_topic_delete' => 'Тема:<br /> <b>deleted</b>',
    'mod_topic_move' => 'Тема:<br /> <b>moved</b>',
    'mod_topic_lock' => 'Тема:<br /> <b>closed</b>',
    'mod_topic_unlock' => 'Тема:<br /> <b>opened</b>',
    'mod_topic_split' => 'Тема:<br /> <b>split</b>',
    'mod_topic_set_downloaded' => 'Тема:<br /> <b>постављена преузета</b>',
    'mod_topic_unset_downloaded' => 'Тема:<br /> <b>уклонити преузету</b>',
    'mod_topic_change_tor_status' => 'Тема:<br /> <b>промењен статус торента</b>',
    'mod_topic_change_tor_type' => 'Тема:<br /> <b>промењен тип торента</b>',
    'mod_topic_tor_unregister' => 'Тема:<br /> <b>торент је непријављен</b>',
    'mod_topic_tor_register' => 'Тема:<br /> <b>торент је пријављен</b>',
    'mod_topic_tor_delete' => 'Тема:<br /> <b>торент је обрисан</b>',
    'mod_topic_renamed' => 'Тема:<br /> <b>преименован</b>',
    'mod_topic_poll_started' => 'Тема:<br /> <b>анкета је почела</b>',
    'mod_topic_poll_finished' => 'Тема:<br /> <b>анкету завршила</b>',
    'mod_topic_poll_deleted' => 'Тема:<br /> <b>анкету обрисана</b>',
    'mod_topic_poll_added' => 'Тема:<br /> <b>анкету додата</b>',
    'mod_topic_poll_edited' => 'Тема:<br /> <b>анкету uređena</b>',
    'mod_post_delete' => 'Пост:<br /> <b>обрисан</b>',
    'mod_post_pin' => 'Пост:<br /> <b>примећен</b>',
    'mod_post_unpin' => 'Пост:<br /> <b>уклоњен</b>',
    'adm_user_delete' => 'Корисника:<br /> <b>обрисан</b>',
    'adm_user_ban' => 'Корисник:<br /> <b>забрањен</b>',
    'adm_user_unban' => 'Корисник:<br /> <b>одзабрањен</b>',
];

$lang['ACTS_LOG_ALL_ACTIONS'] = 'Све акције';
$lang['ACTS_LOG_SEARCH_OPTIONS'] = 'Акције дневника: опције претраге';
$lang['ACTS_LOG_FORUM'] = 'Форум';
$lang['ACTS_LOG_ACTION'] = 'Акција';
$lang['ACTS_LOG_LOGS_FROM'] = 'Часописи ';
$lang['ACTS_LOG_FIRST'] = 'почевши са';
$lang['ACTS_LOG_DAYS_BACK'] = 'дана';
$lang['ACTS_LOG_TOPIC_MATCH'] = 'Тема име не одговара.';
$lang['ACTS_LOG_SORT_BY'] = 'Сортирај по';
$lang['ACTS_LOG_LOGS_ACTION'] = 'Акција';
$lang['ACTS_LOG_USERNAME'] = 'Корисничко име';
$lang['ACTS_LOG_TIME'] = 'Време';
$lang['ACTS_LOG_INFO'] = 'Информације';
$lang['ACTS_LOG_FILTER'] = 'Филтер';
$lang['ACTS_LOG_TOPICS'] = 'Теме:';
$lang['ACTS_LOG_OR'] = 'ili';

$lang['RELEASE'] = 'Шаблони Пуштања';
$lang['RELEASES'] = 'Јавност';

$lang['BACK'] = 'Назад';
$lang['NEW_RELEASE'] = 'Ново издање';
$lang['NEXT'] = 'Наставите';
$lang['ALL'] = 'Све';

$lang['TPL_EMPTY_FIELD'] = 'Морате попунити поље <b>%s</b>';
$lang['TPL_EMPTY_SEL'] = 'Морате да изаберете <b>%s</b>';
$lang['TPL_NOT_NUM'] = '<b>%s</b> - није број';
$lang['TPL_NOT_URL'] = '<b>%s</b> – Мора бити хттпс:// УРЛ';
$lang['TPL_NOT_IMG_URL'] = '<b>%s</b> – Мора бити хттпс:// ИМГ_УРЛ';
$lang['TPL_PUT_INTO_SUBJECT'] = 'да се стави у тему';
$lang['TPL_POSTER'] = 'постер';
$lang['TPL_REQ_FILLING'] = 'захтева попуњавање.';
$lang['TPL_NEW_LINE'] = 'нова линија.';
$lang['TPL_NEW_LINE_AFTER'] = 'нови ред након наслова.';
$lang['TPL_NUM'] = 'број.';
$lang['TPL_URL'] = 'URL';
$lang['TPL_IMG'] = 'слика.';
$lang['TPL_PRE'] = 'pre';
$lang['TPL_SPOILER'] = 'спојлер';
$lang['TPL_IN_LINE'] = 'у истој линији';
$lang['TPL_HEADER_ONLY'] = 'само у наслову';

$lang['SEARCH_INVALID_USERNAME'] = 'Унето је неважеће корисничко име за претрагу.';
$lang['SEARCH_INVALID_EMAIL'] = 'Унета је неважећа адреса е-поште за претрагу.';
$lang['SEARCH_INVALID_IP'] = 'Унета је неважећа ИП адреса за претрагу.';
$lang['SEARCH_INVALID_GROUP'] = 'Унета је неважећа група за претрагу.';
$lang['SEARCH_INVALID_RANK'] = 'Неважећи ранг унет за претрагу.';
$lang['SEARCH_INVALID_DATE'] = 'Унесен је неважећи датум за претрагу.';
$lang['SEARCH_INVALID_POSTCOUNT'] = 'Неважећи број постова је унет за претрагу.';
$lang['SEARCH_INVALID_USERFIELD'] = 'Нетачни подаци корисничког поља.';
$lang['SEARCH_INVALID_LASTVISITED'] = 'Унесен је неважећи датум за последњу посету.';
$lang['SEARCH_INVALID_LANGUAGE'] = 'Неважећи језик, изабрани.';
$lang['SEARCH_INVALID_TIMEZONE'] = 'Погрешна временска зона је изабрана.';
$lang['SEARCH_INVALID_MODERATORS'] = 'Погрешан форум је изабран.';
$lang['SEARCH_INVALID'] = 'Погрешан упит.';
$lang['SEARCH_INVALID_DAY'] = 'Датум који сте унели је неважећи.';
$lang['SEARCH_INVALID_MONTH'] = 'Месец који сте унели је неважећи.';
$lang['SEARCH_INVALID_YEAR'] = 'Година коју сте унeli је неважећа.';
$lang['SEARCH_FOR_USERNAME'] = 'Претрага корисничких имена која се подударају са %s.';
$lang['SEARCH_FOR_EMAIL'] = 'Тражење адреса е-поште које се подударају са %s.';
$lang['SEARCH_FOR_IP'] = 'Тражење ИП адреса које се подударају са %s.';
$lang['SEARCH_FOR_DATE'] = 'Претрага корисника који су се прикључили %s %d/%d/%d.';
$lang['SEARCH_FOR_GROUP'] = 'Претрага чланова групе %s.';
$lang['SEARCH_FOR_RANK'] = 'Претрага корисника са рангом %s';
$lang['SEARCH_FOR_BANNED'] = 'Претрага забрањених корисника.';
$lang['SEARCH_FOR_ADMINS'] = 'Претрага администатора.';
$lang['SEARCH_FOR_MODS'] = 'Претрага модератора.';
$lang['SEARCH_FOR_DISABLED'] = 'Претрага корисника са инвалидитетом.';
$lang['SEARCH_FOR_POSTCOUNT_GREATER'] = 'Претрага корисника са бројем порука већим од %d.';
$lang['SEARCH_FOR_POSTCOUNT_LESSER'] = 'Претрага корисника са бројем порука мањим од %d.';
$lang['SEARCH_FOR_POSTCOUNT_RANGE'] = 'Претрага корисника са бројем порука између %d и %d.';
$lang['SEARCH_FOR_POSTCOUNT_EQUALS'] = 'Претрага корисника са бројем порука једнаким %d.';
$lang['SEARCH_FOR_USERFIELD_TWITTER'] = 'Претрага корисника са X (Twitter) који одговара %s';
$lang['SEARCH_FOR_USERFIELD_WEBSITE'] = 'Тражење корисника са Веб страницом која одговара %s';
$lang['SEARCH_FOR_USERFIELD_LOCATION'] = 'Претрага корисника са локацијом која се подудара са %s.';
$lang['SEARCH_FOR_USERFIELD_INTERESTS'] = 'Претрага корисника према њиховим интересовањима %s.';
$lang['SEARCH_FOR_USERFIELD_OCCUPATION'] = 'Претрага корисника према њиховим занимањима %s.';
$lang['SEARCH_FOR_LASTVISITED_INTHELAST'] = 'Претрага за корисницима који су посетили у последњих %s';
$lang['SEARCH_FOR_LASTVISITED_AFTERTHELAST'] = 'Претрага за корисницима који су посетили после последњег %s';
$lang['SEARCH_FOR_LANGUAGE'] = 'Претрага корисника који су поставили %s као свој језик.';
$lang['SEARCH_FOR_TIMEZONE'] = 'Претрага корисника који су поставили UTC %s као своју временску зону.';
$lang['SEARCH_FOR_MODERATORS'] = 'Претрага за модератора форума -> %s';
$lang['SEARCH_USERS_ADVANCED'] = 'Напредна претрага корисника.';
$lang['SEARCH_USERS_EXPLAIN'] = 'Овај модул вам омогућава да извршите напредну претрагу корисника на широком спектру критеријума. Молимо вас да прочитате опис под свако поље да у потпуности разумете сваку опцију претраге.';
$lang['SEARCH_USERNAME_EXPLAIN'] = 'Овде можете да обавите претрагу имена корисника без обзира на велика и мала слова. Ако желите да парцијално подударите део имена, користите * (звездица) као подстановчно знак.';
$lang['SEARCH_EMAIL_EXPLAIN'] = 'Унесите израз за адресу електронске поште корисника. Ово је без обзира на велика и мала слова. Ако желите да учините делимично подударање, користите * (звездица) као подстановочно знак.';
$lang['SEARCH_IP_EXPLAIN'] = 'Претрага корисника по специфичној ИП адреси (xxx.xxx.xxx.xxx).';
$lang['SEARCH_USERS_JOINED'] = 'Корисници који су се придружили';
$lang['SEARCH_USERS_LASTVISITED'] = 'Корисници који су посетили';
$lang['IN_THE_LAST'] = 'у последњих неколико';
$lang['AFTER_THE_LAST'] = 'после последњег';
$lang['BEFORE'] = 'Пре';
$lang['AFTER'] = 'Након';
$lang['SEARCH_USERS_JOINED_EXPLAIN'] = 'Претрага корисника који су се придружили пре или после одређеног датума. Формат датума је ГГГГ/ММ/ДД.';
$lang['SEARCH_USERS_GROUPS_EXPLAIN'] = 'Погледајте све чланове изабране групе.';
$lang['SEARCH_USERS_RANKS_EXPLAIN'] = 'Погледајте све кориснике са изабраним рангом.';
$lang['BANNED_USERS'] = 'Забрањени корисници.';
$lang['DISABLED_USERS'] = 'Корисници са онемогућеним налозима.';
$lang['SEARCH_USERS_MISC_EXPLAIN'] = 'Администратори - Сви корисници са администраторским овлашћењима; Модератори - Сви модератори форума; Забрањени корисници – Сви налози који су забрањени на овим форумима; Корисници са инвалидитетом – Сви корисници са онемогућеним налозима (било ручно онемогућеним или никада нису верификовали своју адресу е-поште); Корисници са онемогућеним ПМ-овима – Бира кориснике који имају уклоњене привилегије за приватне поруке (урађено преко управљања корисницима)';
$lang['POSTCOUNT'] = 'Број постова';
$lang['EQUALS'] = 'Једнако.';
$lang['GREATER_THAN'] = 'Више од.';
$lang['LESS_THAN'] = 'Мање од.';
$lang['SEARCH_USERS_POSTCOUNT_EXPLAIN'] = 'Можете да тражите кориснике на основу вредности броја постова. Можете претраживати по одређеној вредности, већој или мањој од вредности или између две вредности. Да бисте извршили претрагу опсега, изаберите „Једнако“, а затим ставите почетну и крајњу вредност опсега раздвојене цртицом (-), нпр. 10-15';
$lang['USERFIELD'] = 'Полица корисника';
$lang['SEARCH_USERS_USERFIELD_EXPLAIN'] = 'Претрага корисника на основу различитих профилних поља. Шаблони су подржани употребом звездице (*).';
$lang['SEARCH_USERS_LASTVISITED_EXPLAIN'] = 'Можете да претражујете кориснике по датуму последњег пријављивања користећи ову опцију.';
$lang['SEARCH_USERS_LANGUAGE_EXPLAIN'] = 'Ово ће приказати кориснике који су изабрали одређени језик у свом профилу.';
$lang['SEARCH_USERS_TIMEZONE_EXPLAIN'] = 'Корисници који су изабрали одређену временску зону у свом профилу.';
$lang['MODERATORS_OF'] = 'Модератори.';
$lang['SEARCH_USERS_MODERATORS_EXPLAIN'] = 'Потражите кориснике са дозволама за модерирање на одређеном форуму. Дозволе за модерирање се препознају или по корисничким дозволама или по томе што сте у групи са одговарајућим групним дозволама.';

$lang['SEARCH_USERS_NEW'] = '%s је дало %d резултат(а). Извршите <a href="%s">другу претрагу</a>.';
$lang['BANNED'] = 'Забрањен';
$lang['NOT_BANNED'] = 'Није забрањен.';
$lang['SEARCH_NO_RESULTS'] = 'Нема корисника који одговарају вашим изабраним критеријумима. Молим вас, покушајте поново.';
$lang['ACCOUNT_STATUS'] = 'Статус рачуна.';
$lang['SORT_OPTIONS'] = 'Опције сортирања:';
$lang['LAST_VISIT'] = 'Последња Посета';
$lang['DAY'] = 'Дан';

$lang['POST_EDIT_CANNOT'] = 'Жао ми је, али не можете да измените поруке.';
$lang['FORUMS_IN_CAT'] = 'форуми у изабраној категорији.';

$lang['MC_TITLE'] = 'Коментар модерације';
$lang['MC_LEGEND'] = 'Унесите коментар.';
$lang['MC_FAQ'] = 'Унесени текст ће бити приказан испод ове поруке.';
$lang['MC_COMMENT_PM_SUBJECT'] = '%s у вашој поруци.';
$lang['MC_COMMENT_PM_MSG'] = "Здраво, [b]%s[/b]\nМодератор је оставио коментар на ваш пост [url=%s][b]%s[/b][/url][quote]\n%s\n[/quote]";
$lang['MC_COMMENT'] = [
    0 => [
        'title' => '',
        'type' => 'Обриши коментар.',
    ],
    1 => [
        'title' => 'Коментар од %s.',
        'type' => 'Коментар.',
    ],
    2 => [
        'title' => 'Информације од %s.',
        'type' => 'Информације.',
    ],
    3 => [
        'title' => 'Упозорење од %s.',
        'type' => 'Упозорење.',
    ],
    4 => [
        'title' => 'Кршење од %s.',
        'type' => 'Кршење.',
    ],
];

$lang['SITEMAP'] = 'Мапа сајта';
$lang['SITEMAP_ADMIN'] = 'Управљање мапа сајта.';
$lang['SITEMAP_CREATED'] = 'Мапа је креирана';
$lang['SITEMAP_AVAILABLE'] = 'Мапа је доступна на.';
$lang['SITEMAP_NOT_CREATED'] = 'Мапа сайта још увек није креирана.';
$lang['SITEMAP_OPTIONS'] = 'Опције';
$lang['SITEMAP_CREATE'] = 'Креирање/ажурирање мапе сайта.';
$lang['SITEMAP_WHAT_NEXT'] = 'Шта да радим следеће?';
$lang['SITEMAP_GOOGLE_1'] = 'Региструјте свој сајт у <a href="https://www.google.com/webmasters/" target="_blank">Google Webmaster</a> помоћу Google налога.';
$lang['SITEMAP_GOOGLE_2'] = '<a href="https://www.google.com/webmasters/tools/sitemap-list" target="_blank">Додајте мапу сајта</a> од сајта који сте регистровали.';
$lang['SITEMAP_YANDEX_1'] = 'Региструјте свој сајт у <a href="https://webmaster.yandex.ru/sites/" target="_blank">Yandex Webmaster</a> користећи свој налог Ыандекс.';
$lang['SITEMAP_YANDEX_2'] = '<a href="https://webmaster.yandex.ru/site/map.xml" target="_blank">Add sitemap</a> сајта сте регистровани.';
$lang['SITEMAP_BING_1'] = 'Региструјте свој сајт у <a href="https://www.bing.com/webmaster/" target="_blank">Bing Webmaster</a> користећи Ваш налог Микрософта.';
$lang['SITEMAP_BING_2'] = 'Додајте фајл мапе сајта, регистровани у подешавањима.';
$lang['SITEMAP_ADD_TITLE'] = 'Додатне странице за сајт.';
$lang['SITEMAP_ADD_PAGE'] = 'Додатне странице.';
$lang['SITEMAP_ADD_EXP_1'] = 'Можете да одредите додатне странице на вашем сајту које треба да буду укључене у вашем мапи сајта.';
$lang['SITEMAP_ADD_EXP_2'] = 'Свака референца мора почети са http(и):// и нова линија!';

$lang['FORUM_MAP'] = 'Карта форума.';
$lang['ATOM_FEED'] = 'Нахрани.';
$lang['ATOM_ERROR'] = 'Грешка у генерисању хране.';
$lang['ATOM_SUBSCRIBE'] = 'Претплатите се на канал.';
$lang['ATOM_UPDATED'] = 'Ажурирано.';
$lang['ATOM_GLOBAL_FEED'] = 'Глобална храна за све форуме.';

$lang['HASH_INVALID'] = 'Хаш %s је неважећи.';
$lang['HASH_NOT_FOUND'] = 'Издање са хашом %s није пронађено.';

$lang['TERMS_EMPTY_TEXT'] = '[align=center]Текст ове странице се уређује на: [url]%s[/url]. Ова линија може да види само администратори.[/align]';
$lang['TERMS_EXPLAIN'] = 'На овој страници можете да поставите текст основних правила ресурса који се приказује корисницима.';
$lang['TERMS_UPDATED_SUCCESSFULLY'] = 'Услови су успешно ажурирани';
$lang['CLICK_RETURN_TERMS_CONFIG'] = '%sКликните овде да се вратите у уредник услова%s';

$lang['TR_STATS'] = [
    0 => 'неактивни корисници у року од 30 дана.',
    1 => 'неактивни корисници за 90 дана.',
    2 => 'средње величине дистрибуције на тракеру',
    3 => 'колико укупно раздача на хттп тракеру.',
    4 => 'колико директних руку (постоји најмање 1 лед).',
    5 => 'колико руку где је сетва више од 5 семена.',
    6 => 'колико нас је аплаудера (они који су испуњени најмање 1 руку).',
    7 => 'колико аплаудера у последњих 30 дана.',
];

$lang['TORRENT_STATS_TITLE'] = 'Статистика торената';
$lang['TRACKER_STATS_TITLE'] = 'Статистика трекера';
$lang['TORRENTS'] = 'Торенти';
$lang['PEERS'] = 'Учесници';
$lang['CLIENTS'] = 'Клијенти';

$lang['NEW_POLL_START'] = 'Анкета је укључена.';
$lang['NEW_POLL_END'] = 'Анкета је завршена.';
$lang['NEW_POLL_ENDED'] = 'Ова анкета је већ завршена.';
$lang['NEW_POLL_DELETE'] = 'Анкета је уклоњена.';
$lang['NEW_POLL_ADDED'] = 'Анкета је додата.';
$lang['NEW_POLL_ALREADY'] = 'Тема већ има анкету.';
$lang['NEW_POLL_RESULTS'] = 'Анкета је промењена и стари резултати су обрисани.';
$lang['NEW_POLL_VOTES'] = 'Морате унети исправне опције за одговор (најмање 2, максимално %s).';
$lang['NEW_POLL_DAYS'] = 'Време анкете (%s дана од тренутка креирања теме) је већ завршено.';
$lang['NEW_POLL_U_NOSEL'] = 'Нисте изабрали да гласате.';
$lang['NEW_POLL_U_CHANGE'] = 'Анкета уреди';
$lang['NEW_POLL_U_EDIT'] = 'Промените анкету (старе резултате ће бити избрисани).';
$lang['NEW_POLL_U_VOTED'] = 'Сви гласали';
$lang['NEW_POLL_U_START'] = 'Укључите анкету.';
$lang['NEW_POLL_U_END'] = 'Заврши истраживање';
$lang['NEW_POLL_M_TITLE'] = 'Име анкете';
$lang['NEW_POLL_M_VOTES'] = 'Опције';
$lang['NEW_POLL_M_EXPLAIN'] = 'Сваки ред одговара једном одговору (максимум).';

$lang['UPLOAD_ERROR_COMMON_DISABLED'] = 'Учитавање фајлова онемогућено';
$lang['UPLOAD_ERROR_COMMON'] = 'Грешка при учитавању фајла.';
$lang['UPLOAD_ERROR_SIZE'] = 'Учитана датотека превазилази максималну величину %s.';
$lang['UPLOAD_ERROR_FORMAT'] = 'Неисправан тип фајла слике.';
$lang['UPLOAD_ERROR_DIMENSIONS'] = 'Димензије слике прелазе максимално дозвољене %sx%s пиксела';
$lang['UPLOAD_ERROR_NOT_IMAGE'] = 'Послата датотека није слика.';
$lang['UPLOAD_ERROR_NOT_ALLOWED'] = 'Проширење %s за преузимање није дозвољено.';
$lang['UPLOAD_ERRORS'] = [
    UPLOAD_ERR_INI_SIZE => 'Премашили сте максималну величину датотеке на серверу.',
    UPLOAD_ERR_FORM_SIZE => 'Премашили сте максималну величину учитавања фајла.',
    UPLOAD_ERR_PARTIAL => 'Датотека је делимично учитана.',
    UPLOAD_ERR_NO_FILE => 'Фајл није био учитан.',
    UPLOAD_ERR_NO_TMP_DIR => 'Привремени директоријум није пронађен.',
    UPLOAD_ERR_CANT_WRITE => 'Грешка при упису.',
    UPLOAD_ERR_EXTENSION => 'Учитавање зауставио расширење.',
];

// Captcha
$lang['CAPTCHA'] = 'Уверите се да нисте робот';
$lang['CAPTCHA_WRONG'] = 'Нисте могли да потврдите да нисте робот';
$lang['CAPTCHA_SETTINGS'] = '<h2>Captcha није потпуно конфигурисана</h2><p>Генеришите кључеве користећи контролни панел ваше captcha услуге, након тога их морате поставити у датотеку config/config.php.</p>';
$lang['CAPTCHA_OCCURS_BACKGROUND'] = 'Потврда CAPTCHA се дешава у позадини';

// Sending email
$lang['REPLY_TO'] = 'Одговорите на';
$lang['EMAILER_SUBJECT'] = [
    'EMPTY' => 'Нема предмета',
    'GROUP_ADDED' => 'Додати сте у корисничку групу',
    'GROUP_APPROVED' => 'Ваш захтев да се придружите корисничкој групи је одобрен',
    'GROUP_REQUEST' => 'Захтев за придруживање вашој корисничкој групи',
    'PRIVMSG_NOTIFY' => 'Нова приватна порука',
    'TOPIC_NOTIFY' => 'Обавештење о одговору у теми - %s',
    'USER_ACTIVATE' => 'Поновно активирање налога',
    'USER_ACTIVATE_PASSWD' => 'Потврђивање нове лозинке',
    'USER_WELCOME' => 'Добродошли на сајт %s',
    'USER_WELCOME_INACTIVE' => 'Добродошли на сајт %s',
];

// Null ratio
$lang['BT_NULL_RATIO'] = 'Ресетујте однос';
$lang['BT_NULL_RATIO_NONE'] = 'Немате однос';
$lang['BT_NULL_RATIO_ALERT'] = "Пажња!\n\nДа ли сте сигурни да желите да ресетујете ваш однос?";
$lang['BT_NULL_RATIO_AGAIN'] = 'Већ сте ресетовали ваш однос!';
$lang['BT_NULL_RATIO_NOT_NEEDED'] = 'Имате добар однос. Ресетовање је могуће само са односом мањим од %s';
$lang['BT_NULL_RATIO_SUCCESS'] = 'Однос је успешно ресетован!';

// Releaser stats
$lang['RELEASER_STAT_SIZE'] = 'Укупна величина:';
$lang['RELEASER_STAT'] = 'Статистике ослободиoca:';
$lang['RELEASER_STAT_SHOW'] = 'Прикажи статистику';

// Spam protection
$lang['REGISTRATION_DENIED'] = 'Регистрација одбијена. Молимо контактирајте администратора ако сматрате да је ово грешка.';
$lang['POST_SPAM_DENIED'] = 'Ваша порука је идентификована као спам и не може се објавити.';
$lang['PM_SPAM_DENIED'] = 'Ваша порука је идентификована као спам и не може се послати.';

// Spam log (admin)
$lang['SPAM_LOG'] = 'Дневник спама';
$lang['SPAM_LOG_DESC'] = 'Овај дневник бележи све покушаје регистрације и слања садржаја који су означени системом за заштиту од спама. <b>Одбијено</b> &mdash; акција је у потпуности блокирана (регистрација одбијена, објава/приватна порука није послата). <b>Модерирано</b> &mdash; за регистрације, налог је креиран али захтева активацију преко е-поште; за садржај, објава/приватна порука је дозвољена али је означена као сумњива.';
$lang['SPAM_LOG_CHECK_TYPE'] = 'Тип провере';
$lang['SPAM_LOG_CHECK_TYPE_DESC_REG'] = 'регистрација &mdash; нова пријава налога';
$lang['SPAM_LOG_CHECK_TYPE_DESC_CONTENT'] = 'садржај &mdash; објава или приватна порука';
$lang['SPAM_LOG_DECISION'] = 'Одлука';
$lang['SPAM_LOG_PROVIDER'] = 'Провајдер';
$lang['SPAM_LOG_REASON'] = 'Разлог.';
$lang['SPAM_LOG_RESPONSE_TIME'] = 'Време (ms)';
$lang['SPAM_LOG_ALL'] = 'Све';
$lang['SPAM_LOG_DETAILS'] = 'Детаљи';
$lang['SPAM_LOG_NO_RECORDS'] = 'Није пронађен ниједан запис у дневнику спама';
$lang['SPAM_LOG_TOTAL'] = 'Укупно записа';
$lang['SPAM_LOG_DENIED_COUNT'] = 'Одбијено';
$lang['SPAM_LOG_MODERATED_COUNT'] = 'Модерирано';

// Marketplace / Modifications
$lang['MARKETPLACE'] = 'Маркетплејс';
$lang['MODIFICATIONS_LIST'] = 'Модификације';
$lang['MODS_VERSION'] = 'Верзија';
$lang['MODS_DOWNLOADS'] = 'Преузимања';
$lang['MODS_RATING'] = 'Рејтинг';
$lang['MODS_ACTIONS'] = 'Акције';
$lang['MODS_AUTHOR'] = 'Аутор';
$lang['MODS_CATEGORY'] = 'Категорија';
$lang['MODS_LAST_UPDATED'] = 'Последње ажурирање.';
$lang['MODS_TOTAL'] = 'Укупна';
$lang['MODS_NO_RESOURCES'] = 'Ниједна модификација није пронађена.';
$lang['MODS_INSTALL'] = 'Инсталирај';
$lang['MODS_INSTALL_SOON'] = 'Опција инсталирања долази ускоро';
$lang['MODS_ALL_CATEGORIES'] = 'Све категорије';
$lang['MODS_FREE'] = 'Бесплатно';
$lang['MODS_PAID'] = 'Плаћено';
$lang['MODS_THEMES'] = 'Теме';
$lang['MODS_LANGPACKS'] = 'Језички пакети';
$lang['MODS_API_ERROR'] = 'Није било могуће учитати модификације: %s';
$lang['MODS_API_UNAVAILABLE'] = 'Сервер за модификације је тренутно недоступан.';
$lang['MODS_DESCRIPTION'] = 'Ова страница приказује све ресурсе објављене на званичном форуму TorrentPier-а. Инсталација једним кликом биће доступна у будућем ажурирању — за сада користите ову страницу као изложбу ресурса.';
$lang['MODS_REVIEW'] = 'преглед';
$lang['MODS_REVIEWS'] = 'прегледа';

// Two-factor authentication
$lang['TWO_FACTOR_AUTH'] = 'Двофакторска аутентификација';
$lang['TWO_FACTOR_VERIFICATION'] = 'Двофакторска аутентификација';
$lang['TWO_FACTOR_SECURITY'] = 'Безбедност';
$lang['TWO_FACTOR_AUTH_EXPLAIN'] = 'Додајте додатни слој безбедности на ваш налог помоћу Тотп апликације за аутентификацију';
$lang['TWO_FACTOR_ENABLE'] = 'Омогући 2ФА';
$lang['TWO_FACTOR_DISABLE'] = 'Онемогући 2ФА';
$lang['TWO_FACTOR_ENABLED'] = 'Укључен';
$lang['TWO_FACTOR_DISABLED'] = 'Искључен';
$lang['TWO_FACTOR_SETUP'] = 'Подеси двофакторску верификацију';
$lang['TWO_FACTOR_SETUP_EXPLAIN'] = 'Скенирајте овај QR код помоћу апликације за аутентификацију (Google Authenticator, Authy и сл.) или унесите кључ ручно испод.';
$lang['TWO_FACTOR_MANUAL_ENTRY'] = 'Или унесите овај кључ ручно';
$lang['TWO_FACTOR_ENTER_CODE'] = 'Унесите 6-цифрени код из ваше апликације за аутентификацију';
$lang['TWO_FACTOR_CODE'] = 'Код за аутентификацију';
$lang['TWO_FACTOR_VERIFY'] = 'Потврди';
$lang['TWO_FACTOR_VERIFY_AND_ENABLE'] = 'Потврди и омогући';
$lang['TWO_FACTOR_INVALID_CODE'] = 'Неисправан код. Покушајте поново.';
$lang['TWO_FACTOR_SESSION_EXPIRED'] = 'Сесија верификације је истекла. Молимо пријавите се поново.';
$lang['TWO_FACTOR_SETUP_EXPIRED'] = 'Сесија подешавања је истекла. Покушајте поново.';
$lang['TWO_FACTOR_ALREADY_ENABLED'] = 'Двофакторска верификација је већ омогућена на вашем налогу.';
$lang['TWO_FACTOR_NOT_ENABLED'] = 'Двофакторска верификација није омогућена на вашем налогу.';
$lang['TWO_FACTOR_FEATURE_DISABLED'] = 'Двофакторска верификација није доступна';
$lang['TWO_FACTOR_ENABLED_SUCCESS'] = 'Двофакторска верификација је омогућена';
$lang['TWO_FACTOR_DISABLED_SUCCESS'] = 'Двофакторска верификација је онемогућена';
$lang['TWO_FACTOR_RECOVERY_CODES'] = 'Резервни кодови';
$lang['TWO_FACTOR_RECOVERY_WARNING'] = 'Сачувајте ове резервне кодове на сигурном месту. Ако изгубите уређај за аутентификацију, можете користити ове кодове за пријаву.';
$lang['TWO_FACTOR_RECOVERY_EXPLAIN'] = 'Сваки код може бити коришћен само једном. Чувајте их одвојено од вашег уређаја.';
$lang['TWO_FACTOR_RECOVERY_CODE'] = 'Резервни код';
$lang['TWO_FACTOR_ENTER_RECOVERY'] = 'Унесите један од ваших резервних кодова';
$lang['TWO_FACTOR_USE_RECOVERY'] = 'Уместо тога користите резервни код';
$lang['TWO_FACTOR_USE_TOTP'] = 'Уместо тога користите аутентификациони код';
$lang['TWO_FACTOR_INVALID_RECOVERY'] = 'Неисправан резервни код. Покушајте поново.';
$lang['TWO_FACTOR_RECOVERY_CODE_USED'] = 'Резервни код је искоришћен. Имате још {count, plural, one {# код} few {# кода} other {# кодова}}.';
$lang['TWO_FACTOR_REMAINING_CODES'] = 'Preostalo vam je %d kodova za oporavak';
$lang['TWO_FACTOR_DOWNLOAD_CODES'] = 'Преузми као текстуални фајл';
$lang['TWO_FACTOR_RECOVERY_EXPIRED'] = 'Приказ резервних кодова је истекао. Ваши кодови су и даље активни.';
$lang['TWO_FACTOR_DOWNLOAD_EXPIRED'] = 'Линк за преузимање је истекао.';
$lang['TWO_FACTOR_DISABLE_WARNING'] = 'Ово ће онемогућити двофакторску верификацију на вашем налогу. Мораћете да унесете тренутни код за аутентификацију да бисте потврдили.';
$lang['TWO_FACTOR_DISABLE_CONFIRM'] = 'Онемогући двофакторску верификацију';
$lang['TWO_FACTOR_REGENERATE'] = 'Поново генериши резервне кодове';
$lang['TWO_FACTOR_REGENERATE_WARNING'] = 'Ово ће поништити све постојеће резервне кодове и генерисати нове.';
$lang['TWO_FACTOR_REGENERATE_CONFIRM'] = 'Поново генериши кодове';
$lang['TWO_FACTOR_ADMIN_DISABLE'] = 'Онемогући 2ФА кориснику';
$lang['TWO_FACTOR_ADMIN_DISABLE_CONFIRM'] = 'Да ли сте сигурни да желите да онемогућите двофакторску верификацију за овог корисника?';
$lang['TWO_FACTOR_TOO_MANY_ATTEMPTS'] = 'Превише неуспешних покушаја. Покушајте поново за {count, plural, one {# минуту} few {# минута} other {# минута}}.';
$lang['TWO_FACTOR_INVALID_TOKEN'] = 'Неисправан или истекли токен.';
$lang['TWO_FACTOR_DONE'] = 'Готово';
$lang['TWO_FACTOR_RECOVERY_ONETIME'] = 'Ову страницу можете видети само једном. Ако одељете, више нећете видети ове кодове.';
$lang['TWO_FACTOR_ADMIN_DISABLE_SELF'] = 'Не можете онемогућити своју двофакторску верификацију из административног панела. Користите поставке свог профила.';

// Dark mode
$lang['DARK_MODE_TOGGLE'] = 'Прекини тамни режим';
