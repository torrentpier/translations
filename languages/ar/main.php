<?php

/**
 * TorrentPier – Bull-powered BitTorrent tracker engine
 *
 * @copyright Copyright (c) 2005-2025 TorrentPier (https://torrentpier.com)
 * @link      https://github.com/torrentpier/torrentpier for the canonical source repository
 * @license   https://github.com/torrentpier/torrentpier/blob/master/LICENSE MIT License
 */

// Common, these terms are used extensively on several pages
$lang['ADMIN'] = 'الإدارة';
$lang['FORUM'] = 'المنتدى';
$lang['CATEGORY'] = 'الفئة';
$lang['HIDE_CAT'] = 'إخفاء الفئات';
$lang['HIDE_CAT_MESS'] = 'يتم إخفاء بعض الفئات عن طريق خيارات العرض المخصصة';
$lang['SHOW_ALL'] = 'عرض الكل';
$lang['TOPIC'] = 'الموضوع';
$lang['TOPICS'] = 'المواضيع';
$lang['TOPICS_SHORT'] = 'المواضيع';
$lang['REPLIES'] = 'الردود';
$lang['REPLIES_SHORT'] = 'الردود';
$lang['VIEWS'] = 'الآراء';
$lang['POSTS'] = 'المشاركات';
$lang['POSTS_SHORT'] = 'المشاركات';
$lang['POSTED'] = 'نشر';
$lang['USERNAME'] = 'اسم المستخدم';
$lang['PASSWORD'] = 'كلمة المرور';
$lang['PASSWORD_SHOW_BTN'] = 'إظهار كلمة المرور';
$lang['EMAIL'] = 'البريد الإلكتروني';
$lang['PM'] = 'رسالة خاصة';
$lang['AUTHOR'] = 'الكاتب';
$lang['MESSAGE'] = 'الرسالة';
$lang['TORRENT'] = 'سيل';
$lang['PERMISSIONS'] = 'أذونات';
$lang['TYPE'] = 'نوع';

$lang['1_DAY'] = '1 يوم';
$lang['7_DAYS'] = '7 أيام';
$lang['2_WEEKS'] = '2 أسابيع';
$lang['1_MONTH'] = '1 شهر';
$lang['3_MONTHS'] = '3 أشهر';
$lang['6_MONTHS'] = '6 أشهر';
$lang['1_YEAR'] = '1 سنة';

$lang['GO'] = 'انتقل إلى';
$lang['SUBMIT'] = 'تقدم';
$lang['RESET'] = 'إعادة تعيين';
$lang['CANCEL'] = 'إلغاء';
$lang['PREVIEW'] = 'المعاينة';
$lang['AJAX_PREVIEW'] = 'عرض سريع';
$lang['CONFIRM'] = 'تأكيد';
$lang['YES'] = 'نعم';
$lang['NO'] = 'لا';
$lang['ENABLED'] = 'تمكين';
$lang['DISABLED'] = 'تعطيل';
$lang['ERROR'] = 'خطأ';
$lang['SELECT_ACTION'] = 'اختر العمل';
$lang['CLEAR'] = 'مسح';
$lang['MOVE_TO_TOP'] = 'نقل إلى الأعلى';
$lang['UNKNOWN'] = 'غير معروف';
$lang['COPY_TO_CLIPBOARD'] = 'نسخ إلى الحافظة';
$lang['NO_ITEMS'] = 'لا توجد بيانات هنا...';
$lang['PLEASE_TRY_AGAIN'] = 'يرجى المحاولة مرة أخرى بعد ثوانٍ قليلة...';

$lang['NEXT_PAGE'] = 'القادم';
$lang['PREVIOUS_PAGE'] = 'السابقة';
$lang['SHORT_PAGE'] = 'الصفحة';
$lang['GOTO_PAGE'] = 'انتقل إلى صفحة';
$lang['GOTO_SHORT'] = 'الصفحة';
$lang['JOINED'] = 'انضم';
$lang['LONGEVITY'] = 'مسجل';
$lang['IP_ADDRESS'] = 'عنوان IP';

$lang['SELECT_FORUM'] = 'حدد المنتدى';
$lang['VIEW_LATEST_POST'] = 'عرض آخر مشاركة';
$lang['VIEW_NEWEST_POST'] = 'عرض أحدث المشاركات';
$lang['PAGE_OF'] = 'الصفحة <b>%d</b> من <b>%s</b>';

$lang['TWITTER'] = 'تويتر)';
$lang['TWITTER_ERROR'] = 'قمت بإدخال تسجيل دخول غير صالح تويتر';

$lang['POST_NEW_TOPIC'] = 'إضافة موضوع جديد';
$lang['POST_NEW_RELEASE'] = 'إصدار جديد';
$lang['REPLY_TO_TOPIC'] = 'الرد على الموضوع';

$lang['CLICK_RETURN_TOPIC'] = 'انقر فوق %sHere%s للعودة إلى الموضوع'; // %s's here are for uris, do not remove!
$lang['CLICK_RETURN_FORUM'] = 'انقر فوق %sHere%s العودة إلى المنتدى';
$lang['CLICK_RETURN_MODCP'] = 'انقر فوق %sHere%s العودة إلى مشرف لوحة التحكم';

$lang['ADMIN_PANEL'] = 'انتقل إلى لوحة الإدارة';
$lang['ALL_CACHE_CLEARED'] = 'تم مسح ذاكرة التخزين المؤقت';
$lang['ALL_TEMPLATE_CLEARED'] = 'تم مسح القالب';
$lang['DATASTORE_CLEARED'] = 'تم مسح مخزن البيانات';
$lang['BOARD_DISABLE'] = 'آسف هذا المنتدى معطل. محاولة العودة في وقت لاحق';
$lang['BOARD_DISABLE_CRON'] = 'المنتدى للصيانة. محاولة العودة في وقت لاحق';
$lang['ADMIN_DISABLE'] = 'تم تعطيل المنتدى من قبل المسؤول. يمكنك تمكينه في أي وقت.';
$lang['ADMIN_DISABLE_CRON'] = 'تم قفل المنتدى بواسطة مُشغل Cron. يمكنك إزالة القفل في أي وقت.';
$lang['ADMIN_DISABLE_TITLE'] = 'المنتدى معطل';
$lang['ADMIN_DISABLE_CRON_TITLE'] = 'المنتدى للصيانة';
$lang['ADMIN_UNLOCK'] = 'تمكين المنتدى';
$lang['ADMIN_UNLOCKED'] = 'تم إلغاء قفل';
$lang['ADMIN_UNLOCK_CRON'] = 'إزالة قفل';
$lang['PAGE_NOT_FOUND'] = 'الصفحة غير موجودة';

$lang['LOADING'] = 'تحميل...';
$lang['JUMPBOX_TITLE'] = 'حدد المنتدى';
$lang['DISPLAYING_OPTIONS'] = 'عرض الخيارات';

// Global Header strings
$lang['BROWSING_FORUM'] = 'المستخدمون المتصفحون لهذا المنتدى:';
$lang['ONLINE_USERS'] = 'في المجموع هناك <b>%1$d</b> المستخدمين على الانترنت: %2$d تسجيل %3$d الضيوف';
$lang['RECORD_ONLINE_USERS'] = 'كان أعلى عدد من المستخدمين على الإنترنت <b>%s</b> في %s.'; // first %s = number of users, second %s is the date.

$lang['ONLINE_ADMIN'] = 'مسؤول';
$lang['ONLINE_MOD'] = 'مشرف';
$lang['ONLINE_GROUP_MEMBER'] = 'عضو في المجموعة';

$lang['CURRENT_TIME'] = 'الوقت الحالي هو: <span class="tz_time">%s</span>';

$lang['SEARCH_NEW'] = 'عرض أحدث المشاركات';
$lang['SEARCH_SELF'] = 'مشاركاتي';
$lang['SEARCH_SELF_BY_LAST'] = 'آخر وقت المشاركات.';
$lang['SEARCH_SELF_BY_MY'] = 'تاريخ إرسالي.';
$lang['SEARCH_LATEST'] = 'أحدث المواضيع';
$lang['LATEST_RELEASES'] = 'أحدث الإصدارات';

$lang['REGISTER'] = 'تسجيل';
$lang['PROFILE'] = 'الملف الشخصي';
$lang['EDIT_PROFILE'] = 'تعديل الملف الشخصي';
$lang['SEARCH'] = 'البحث';
$lang['MEMBERLIST'] = 'قائمة الأعضاء.';
$lang['USERGROUPS'] = 'المجموعات';
$lang['LASTPOST'] = 'آخر مشاركة';
$lang['MODERATOR'] = 'مشرف';
$lang['MODERATORS'] = 'المشرفون.';
$lang['TERMS'] = 'الشرط.';
$lang['NOTHING_HAS_CHANGED'] = 'لا شيء قد تغير';

// Stats block text
$lang['POSTED_TOPICS_TOTAL'] = 'نحن لدينا ما مجموعه <b>%s</b> مواضيع.'; // Number of topics
$lang['POSTED_POSTS_TOTAL'] = 'لقد نشر مستخدمونا <b>%s</b> مشاركة'; // Number of posts
$lang['REGISTERED_USERS_TOTAL'] = 'نحن لدينا <b>%s</b> مستخدمين مسجلين.'; // # registered users
$lang['USERS_TOTAL_GENDER'] = 'الأولاد: <b>%d</b>، البنات: <b>%d</b>، الآخرون: <b>%d</b>.';
$lang['NEWEST_USER'] = 'أحدث مستخدم مسجل هو <b>%s</b>'; // a href, username, /a

// Tracker stats
$lang['TORRENTS_STAT'] = 'السيول: <b style="color: blue;">%s</b>,&nbsp; الحجم الإجمالي: <b>%s</b>'; // first %s = number of torrents, second %s is the total size.
$lang['PEERS_STAT'] = 'أقران: <b>%s</b>,&nbsp; بزار: <b class="seedmed">%s</b>,&nbsp; متسربون: <b class="leechmed">%s</b>'; // first %s = number of peers, second %s = number of seeders,  third %s = number of leechers.
$lang['SPEED_STAT'] = 'السرعة الإجمالية: <b>%s</b>&nbsp;'; // %s = total speed.

$lang['NO_NEW_POSTS'] = 'لا يوجد منشورات جديدة';
$lang['NEW_POSTS'] = 'وظائف جديدة';
$lang['FORUM_LOCKED_MAIN'] = 'المنتدى مقفل';

// Login
$lang['ENTER_PASSWORD'] = 'يرجى إدخال اسم المستخدم وكلمة المرور لتسجيل الدخول.';
$lang['LOGIN'] = 'تسجيل الدخول';
$lang['LOGOUT'] = 'تسجيل الخروج';
$lang['CONFIRM_LOGOUT'] = 'هل أنت متأكد من أنك تريد تسجيل الخروج ؟ ';

$lang['FORGOTTEN_PASSWORD'] = 'هل نسيت كلمة المرور؟';
$lang['AUTO_LOGIN'] = 'سجل لي تلقائيا';
$lang['ERROR_LOGIN'] = 'اسم المستخدم الذي قدمته غير صحيح أو غير صالح، أو كلمة المرور غير صالحة.';
$lang['REMEMBER'] = 'تذكر';
$lang['USER_WELCOME'] = 'مرحبًا،';

// Index page
$lang['HOME'] = 'الرئيسية';
$lang['NO_POSTS'] = 'لا توجد منشورات';
$lang['NO_FORUMS'] = 'لا تحتوي هذه اللوحة على منتديات';

$lang['PRIVATE_MESSAGE'] = 'رسالة خاصة';
$lang['PRIVATE_MESSAGES'] = 'الرسائل الخاصة';
$lang['WHOSONLINE'] = 'من هو على الانترنت';

$lang['MARK_ALL_FORUMS_READ'] = 'ضع علامة على جميع المنتديات كمقروءة';

$lang['LATEST_NEWS'] = 'آخر الأخبار';
$lang['NETWORK_NEWS'] = 'شبكة الأخبار';
$lang['SUBFORUMS'] = 'المنتديات الفرعية';

$lang['FORUM_NOT_EXIST'] = 'المنتدى المحدد غير موجود.';
$lang['ERROR_PORNO_FORUM'] = 'هذا النوع من المنتديات (18+) تم إخفاؤه في ملفك الشخصي.';

$lang['DISPLAY_TOPICS'] = 'عرض المواضيع';
$lang['MODERATE_FORUM'] = 'اعتدال هذا المنتدى';
$lang['TITLE_SEARCH_HINT'] = 'عنوان البحث...';

$lang['TOPIC_ANNOUNCEMENT'] = 'إعلان:';
$lang['TOPIC_MOVED'] = 'منقول:';
$lang['TOPIC_POLL'] = '[ استفتاء ]';

$lang['MARK_TOPICS_READ'] = 'وضع علامة على جميع المواضيع كمقروءة';
$lang['TOPICS_MARKED_READ'] = 'المواضيع في هذا المنتدى تم وضع علامة للقراءة.';

$lang['RULES_POST_CAN'] = 'يمكنك <b>المشاركة</b> في مواضيع جديدة في هذا المنتدى.';
$lang['RULES_POST_CANNOT'] = 'لا يمكنك <b>المشاركة</b> في مواضيع جديدة في هذا المنتدى.';
$lang['RULES_REPLY_CAN'] = 'يمكنك <b>الرد</b> على المواضيع في هذا المنتدى.';
$lang['RULES_REPLY_CANNOT'] = 'لا يمكنك <b>الرد</b> على المواضيع في هذا المنتدى.';
$lang['RULES_EDIT_CAN'] = 'يمكنك <b>تعديل</b> مشاركاتك في هذا المنتدى.';
$lang['RULES_EDIT_CANNOT'] = 'لا يمكنك <b>تعديل</b> مشاركاتك في هذا المنتدى.';
$lang['RULES_DELETE_CAN'] = 'يمكنك <b>حذف</b> مشاركاتك في هذا المنتدى.';
$lang['RULES_DELETE_CANNOT'] = 'لا يمكنك <b>حذف</b> مشاركاتك في هذا المنتدى.';
$lang['RULES_VOTE_CAN'] = 'يمكنك <b>التصويت</b> في الاستفتاءات في هذا المنتدى.';
$lang['RULES_VOTE_CANNOT'] = 'لا يمكنك <b>التصويت</b> في الاستفتاءات في هذا المنتدى.';
$lang['RULES_MODERATE'] = 'يمكنك <b>اعتدال</b> هذا المنتدى.';

$lang['NO_TOPICS_POST_ONE'] = 'لا توجد مواضيع في هذا المنتدى بعد<br />انقر على أيقونة <b>موضوع جديد</b>، وستكون منشورك الأول.';
$lang['NO_RELEASES_POST_ONE'] = 'لا توجد إصدارات في هذا المنتدى بعد<br />انقر على أيقونة <b>إصدار جديد</b>، وستكون إصدارك الأول.';

$lang['GUEST'] = 'ضيف';
$lang['SUBMIT_VOTE'] = 'إرسال التصويت.';

$lang['NO_NEWER_TOPICS'] = 'لا توجد مواضيع أحدث في هذا المنتدى.';
$lang['NO_OLDER_TOPICS'] = 'لا توجد مواضيع أقدم في هذا المنتدى.';
$lang['TOPIC_POST_NOT_EXIST'] = 'الموضوع أو المشاركة التي طلبتها غير موجودة.';
$lang['NO_POSTS_TOPIC'] = 'لا توجد مشاركات في هذا الموضوع.';

$lang['DISPLAY_POSTS'] = 'عرض المنشورات.';
$lang['ALL_POSTS'] = 'جميع المنشورات.';
$lang['NEWEST_FIRST'] = 'الأحدث أولاً.';
$lang['OLDEST_FIRST'] = 'الأقدم أولاً.';

$lang['READ_PROFILE'] = 'عرض ملف تعريف المستخدم.';

$lang['WROTE'] = 'كتب'; // proceeds the username and is followed by the quoted text
$lang['QUOTE'] = 'اقتباس'; // comes before bbcode quote output
$lang['CODE'] = 'رمز'; // comes before bbcode code output
$lang['SPOILER_HEAD'] = 'النص المخفي';
$lang['SPOILER_CLOSE'] = 'بدوره';
$lang['PLAY_ON_CURPAGE'] = 'بدء اللعب على الصفحة الحالية';

$lang['EDITED_TIME_TOTAL'] = 'آخر تعديل بواسطة <b>%s</b> في %s; تم التعديل %d مرة في المجموع'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['EDITED_TIMES_TOTAL'] = 'آخر تعديل بواسطة <b>%s</b> في %s; تم التعديل %d مرات في المجموع'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['LOCK_TOPIC'] = 'قفل الموضوع';
$lang['UNLOCK_TOPIC'] = 'فتح الموضوع';
$lang['MOVE_TOPIC'] = 'نقل الموضوع';
$lang['DELETE_TOPIC'] = 'حذف الموضوع';
$lang['SPLIT_TOPIC'] = 'تقسيم الموضوع';

$lang['STOP_WATCHING_TOPIC'] = 'وقف بعد هذا الموضوع';
$lang['START_WATCHING_TOPIC'] = 'لمتابعة الموضوع على الردود';
$lang['NO_LONGER_WATCHING'] = 'لم يعد بعد هذا الموضوع.';
$lang['YOU_ARE_WATCHING'] = 'كنت بعد هذا الموضوع الآن.';

$lang['SEARCH_IN_TOPIC'] = 'ابحث في الموضوع...';
$lang['HIDE_IN_TOPIC'] = 'إخفاء.';

$lang['SHOW'] = 'عرض.';
$lang['AVATARS'] = 'الصور الرمزية.';
$lang['RANK_IMAGES'] = 'صور الرتبة.';
$lang['POST_IMAGES'] = 'صور النشر.';
$lang['SIGNATURES'] = 'التوقيعات.';
$lang['SPOILER'] = 'المفسد.';
$lang['SHOW_OPENED'] = 'عرض مفتوح.';
$lang['DOWNLOAD_PIC'] = 'صور قابلة للتنزيل.';

$lang['MODERATE_TOPIC'] = 'اعتدال هذا الموضوع.';
$lang['SELECT_POSTS_PER_PAGE'] = 'المنشورات في الصفحة.';

// Posting/Replying (Not private messaging!)
$lang['TOPIC_REVIEW'] = 'مراجعة الموضوع.';

$lang['NO_POST_MODE'] = 'لم يتم تحديد وضع المشاركة.'; // If posting.php is called without a mode (newtopic/reply/delete/etc., shouldn't be shown normally)

$lang['POST_A_NEW_TOPIC'] = 'بعد موضوع جديد.';
$lang['POST_A_REPLY'] = 'بعد الرد الجديد.';
$lang['POST_TOPIC_AS'] = 'بعد هذا الموضوع.';
$lang['EDIT_POST'] = 'تحرير آخر.';
$lang['EDIT_TOPIC_TITLE'] = 'تحرير عنوان الموضوع.';

$lang['DONT_MESSAGE_TITLE'] = 'يجب عليك تحديد عنوان الرسالة.';
$lang['INVALID_TOPIC_ID'] = 'الموضوع غائب!';
$lang['INVALID_TOPIC_ID_DB'] = 'الموضوع غير موجود في قاعدة البيانات!';

$lang['NOT_EDIT_TOR_STATUS'] = 'لا يمكنك تعديل الإصدار بهذا الوضع.';

$lang['OPTIONS'] = 'خيارات';

$lang['POST_ANNOUNCEMENT'] = 'إعلان';
$lang['POST_STICKY'] = 'مثبت';
$lang['POST_NORMAL'] = 'عادي';
$lang['POST_DOWNLOAD'] = 'تحميل';

// Anonymous posting
$lang['ANONYMOUS'] = 'مجهول';
$lang['ANONYMOUS_TOPIC'] = 'انشر الموضوع مجهولاً';
$lang['ANONYMOUS_REPLY'] = 'انشر الرد مجهولاً';
$lang['HIDE_AUTHORSHIP'] = 'انشر مجهولاً كإعداد افتراضي';
$lang['HIDE_AUTHORSHIP_EXPLAIN'] = 'عند التفعيل، ستكون المشاركات الجديدة في وضع المجهول بشكل افتراضي. يمكنك تبديل هذا الإعداد لكل مشاركة.';
$lang['ALLOW_ANONYMOUS_POSTING'] = 'السماح بالنشر المجهول';
$lang['ANONYMOUS_POST_LABEL'] = 'نُشر بشكل مجهول';
$lang['POSTED_ANONYMOUSLY'] = 'نُشر بشكل مجهول';
$lang['ANONYMOUS_ADMIN_NOTICE'] = 'يمكن للمشرفين والمراقبين رؤية المؤلف الحقيقي';
$lang['YOU'] = 'أنت';

$lang['PRINT_PAGE'] = 'طباعة الصفحة';

$lang['CONFIRM_DELETE'] = 'هل أنت متأكد أنك تريد حذف هذه المشاركة؟';
$lang['CONFIRM_DELETE_POLL'] = 'هل أنت متأكد أنك تريد حذف هذا الاستطلاع؟';

$lang['FLOOD_ERROR'] = 'لا يمكنك نشر مشاركة أخرى قريبًا بعد الأخيرة. يرجى المحاولة مرة أخرى بعد قليل.';
$lang['EMPTY_SUBJECT'] = 'يجب تحديد موضوع';
$lang['EMPTY_MESSAGE'] = 'يجب إدخال رسالة';
$lang['FORUM_LOCKED'] = 'المنتدى مقفل';
$lang['TOPIC_LOCKED'] = 'الموضوع مغلق';
$lang['TOPIC_LOCKED_SHORT'] = 'الموضوع مغلق';
$lang['NO_POST_ID'] = 'يجب عليك تحديد مشاركة لتحريرها.';
$lang['NO_TOPIC_ID'] = 'يجب عليك تحديد موضوع للرد عليه.';
$lang['NO_VALID_MODE'] = 'يمكنك فقط نشر الرد أو تعديل أو اقتباس الرسائل. يرجى العودة والمحاولة مرة أخرى';
$lang['NO_SUCH_POST'] = 'لا يوجد مثل هذه المشاركة. يرجى العودة والمحاولة مرة أخرى.';
$lang['EDIT_OWN_POSTS'] = 'آسف, ولكن يمكنك فقط تحرير مشاركاتك';
$lang['DELETE_OWN_POSTS'] = 'آسف, ولكن يمكنك فقط حذف مشاركاتك';
$lang['CANNOT_DELETE_REPLIED'] = 'آسف، ولكن لا يمكنك حذف المشاركات التي تم الرد عليها.';
$lang['CANNOT_DELETE_POLL'] = 'آسف، ولكن لا يمكنك حذف استطلاع نشط.';
$lang['EMPTY_POLL_TITLE'] = 'يجب إدخال عنوان استطلاع الرأي الخاص بك';
$lang['POST_HAS_NO_POLL'] = 'هذه المشاركة لا تحتوي على استطلاع.';
$lang['ALREADY_VOTED'] = 'لديك بالفعل التصويت في هذا الاستطلاع';
$lang['NO_VOTE_OPTION'] = 'يجب تحديد خيار عند التصويت';
$lang['LOCKED_WARN'] = 'لقد نشرت في موضوع مقفل!';

$lang['ADD_POLL'] = 'إضافة استطلاع';
$lang['UPDATE'] = 'التحديث';
$lang['DAYS'] = 'أيام';
$lang['DELETE_POLL'] = 'حذف الاستطلاع';

$lang['MAX_SMILIES_PER_POST'] = 'تم تجاوز الحد الأقصى من الرموز التعبيرية %s.';

$lang['NOTIFY'] = 'أعلمني عند الردود';
$lang['ALLOW_ROBOTS_INDEXING'] = 'السماح للروبوتات بفهرسة هذا الموضوع';

$lang['STORED'] = 'رسالتك قد دخلت بنجاح.';
$lang['EDITED'] = 'تم تعديل الرسالة.';
$lang['DELETED'] = 'تم حذف رسالتك بنجاح.';
$lang['VOTE_CAST'] = 'تم الإدلاء بصوتك.';

$lang['EMOTICONS'] = 'الرموز';
$lang['MORE_EMOTICONS'] = 'عرض المزيد من الرموز';

$lang['COLOR_DARK_RED'] = 'الأحمر الداكن';
$lang['COLOR_RED'] = 'الأحمر';
$lang['COLOR_ORANGE'] = 'البرتقال';
$lang['COLOR_BROWN'] = 'البني';
$lang['COLOR_GREEN'] = 'الأخضر';
$lang['COLOR_OLIVE'] = 'الزيتون';
$lang['COLOR_BLUE'] = 'الأزرق';
$lang['COLOR_DARK_BLUE'] = 'الأزرق الداكن';
$lang['COLOR_INDIGO'] = 'نيلي';
$lang['COLOR_VIOLET'] = 'البنفسجي';

$lang['FONT_SMALL'] = 'صغيرة';
$lang['FONT_NORMAL'] = 'عادي';
$lang['FONT_LARGE'] = 'كبيرة';
$lang['FONT_HUGE'] = 'ضخمة';

$lang['NEW_POSTS_PREVIEW'] = 'موضوع جديد أو تعديل أو مشاركات غير مقروءة';

// Private Messaging
$lang['PRIVATE_MESSAGING'] = 'الرسائل الخاصة';

$lang['NO_NEW_PM'] = 'لا رسائل جديدة';

$lang['NEW_PMS_FORMAT'] = '<b>%1$s</b> %2$s'; // 1 new message
$lang['NEW_PMS_DECLENSION'] = ['رسالة جديدة', 'رسائل جديدة'];

$lang['UNREAD_PMS_FORMAT'] = '<b>%1$s</b> %2$s'; // 1 new message
$lang['UNREAD_PMS_DECLENSION'] = ['غير مقروءة', 'غير مقروءة'];

$lang['UNREAD_MESSAGE'] = 'رسالة غير مقروءة';
$lang['READ_MESSAGE'] = 'قراءة رسالة';

$lang['READ_PM'] = 'قراءة رسالة';
$lang['POST_NEW_PM'] = 'آخر رسالة';
$lang['POST_REPLY_PM'] = 'الرد على الرسالة';
$lang['POST_QUOTE_PM'] = 'اقتباس الرسالة';
$lang['EDIT_PM'] = 'تحرير الرسالة';

$lang['INBOX'] = 'صندوق الوارد';
$lang['OUTBOX'] = 'الصادر';
$lang['SAVEBOX'] = 'صندوق الحفظ.';
$lang['SENTBOX'] = 'صندوق المرسلات.';
$lang['SUBJECT'] = 'الموضوع';
$lang['FROM'] = 'من';
$lang['TO'] = 'إلى';
$lang['DATE'] = 'تاريخ';
$lang['SENT'] = 'إرسال';
$lang['SAVED'] = 'حفظ';
$lang['DELETE_MARKED'] = 'حذف علامة';
$lang['DELETE_ALL'] = 'حذف جميع';
$lang['SAVE_MARKED'] = 'حفظ المحدد';
$lang['SAVE_MESSAGE'] = 'حفظ الرسالة';
$lang['DELETE_MESSAGE'] = 'حذف الرسالة';

$lang['DISPLAY_MESSAGES'] = 'عرض الرسائل'; // Followed by number of days/weeks/months

$lang['NO_MESSAGES_FOLDER'] = 'لا توجد رسائل في هذا المجلد';

$lang['CANNOT_SEND_PRIVMSG'] = 'آسف, ولكن المشرف قد منعك من إرسال رسائل خاصة.';
$lang['NO_TO_USER'] = 'يجب تحديد اسم المستخدم الذي لإرسال هذه الرسالة.';
$lang['NO_SUCH_USER'] = 'آسف, ولكن لا يوجد مثل هذا المستخدم موجود.';

$lang['MESSAGE_SENT'] = '<b>تم إرسال رسالتك.</b>';

$lang['CLICK_RETURN_INBOX'] = 'عودة إلى:<br /><br /> %s<b>Inbox</b>%s';
$lang['CLICK_RETURN_SENTBOX'] = '&nbsp;&nbsp; %s<b>صندوق الرسائل المرسلة</b>%s';
$lang['CLICK_RETURN_OUTBOX'] = '&nbsp;&nbsp; %s<b>صندوق الصادر</b>%s';
$lang['CLICK_RETURN_SAVEBOX'] = '&nbsp;&nbsp; %s<b>صندوق الحفظ</b>%s';
$lang['CLICK_RETURN_INDEX'] = '%sعودة إلى الفهرس%s';

$lang['SEND_A_NEW_MESSAGE'] = 'إرسال رسالة خاصة جديدة';
$lang['SEND_A_REPLY'] = 'رد على رسالة خاصة';
$lang['EDIT_MESSAGE'] = 'تحرير رسالة خاصة';

$lang['FIND_USERNAME'] = 'العثور على اسم المستخدم';
$lang['SELECT_USERNAME'] = 'حدد اسم المستخدم';
$lang['NO_MATCH'] = 'لا يوجد ما يطابق.';

$lang['NO_PM_ID'] = 'يرجى تحديد معرف الوظيفة';
$lang['NO_SUCH_FOLDER'] = 'المجلد لم يتم العثور على';

$lang['MARK_ALL'] = 'تحديد جميعاً';
$lang['UNMARK_ALL'] = 'قم بإلغاء تحديد الجميع';

$lang['CONFIRM_DELETE_PM'] = 'هل أنت متأكد من أنك تريد حذف هذه الرسالة ؟ ';
$lang['CONFIRM_DELETE_PMS'] = 'هل أنت متأكد من أنك تريد حذف هذه الرسائل ؟ ';

$lang['INBOX_SIZE'] = 'صندوق البريد الوارد الخاص بك %d%% ممتلئ.'; // e.g. Your Inbox is 50% full
$lang['SENTBOX_SIZE'] = 'صندوق الرسائل المرسلة الخاص بك %d%% ممتلئ.';
$lang['SAVEBOX_SIZE'] = 'صندوق الحفظ الخاص بك %d%% ممتلئ.';

$lang['OUTBOX_EXPL'] = '';

// Profiles/Registration
$lang['VIEWING_USER_PROFILE'] = 'مشاهدة الملف الشخصي :: %s';
$lang['VIEWING_MY_PROFILE'] = 'ملفي الشخصي [ <a href="%s">الإعدادات / تغيير الملف الشخصي</a> ]';

$lang['DISABLED_USER'] = 'تعطيل الحساب';
$lang['MANAGE_USER'] = 'الإدارة';

$lang['PREFERENCES'] = 'تفضيلات';
$lang['ITEMS_REQUIRED'] = 'العناصر التي تم وضع علامة * مطلوبة الا اذا ذكر خلاف ذلك.';
$lang['REGISTRATION_INFO'] = 'معلومات التسجيل';
$lang['PROFILE_INFO'] = 'معلومات الملف الشخصي';
$lang['AVATAR_PANEL'] = 'الصورة الرمزية من لوحة التحكم';

$lang['WEBSITE'] = 'الموقع';
$lang['LOCATION'] = 'الموقع';
$lang['CONTACT'] = 'الاتصال';
$lang['EMAIL_ADDRESS'] = 'عنوان البريد الإلكتروني';
$lang['SEND_PRIVATE_MESSAGE'] = 'إرسال رسالة خاصة';
$lang['INTERESTS'] = 'مصالح';
$lang['OCCUPATION'] = 'التخصص';
$lang['POSTER_RANK'] = 'ملصق رتبة';
$lang['AWARDED_RANK'] = 'منح رتبة';
$lang['SHOT_RANK'] = 'رتبة النار';

$lang['TOTAL_POSTS'] = 'إجمالي المشاركات';
$lang['SEARCH_USER_POSTS'] = 'البحث عن المشاركات التي؛'; // Find all posts by username
$lang['SEARCH_USER_POSTS_SHORT'] = 'العثور على مشاركات المستخدم.';
$lang['SEARCH_USER_TOPICS'] = 'العثور على مواضيع المستخدم.'; // Find all topics by username

$lang['NO_USER_ID_SPECIFIED'] = 'آسف, ولكن هذا المستخدم غير موجود.';
$lang['NO_SEND_ACCOUNT_INACTIVE'] = 'آسف, ولكن كلمة المرور الخاصة بك لا يمكن استردادها لأن حسابك غير نشط حاليا';
$lang['NO_SEND_ACCOUNT'] = 'آسف, ولكن كلمة المرور الخاصة بك لا يمكن استردادها. يرجى الاتصال ادارة المنتدى لمزيد من المعلومات';

$lang['HIDE_PORN_FORUMS'] = 'إخفاء المحتوى 18+';
$lang['ADD_RETRACKER'] = 'إضافة retracker في ملفات التورنت.';
$lang['ALWAYS_NOTIFY'] = 'دائما أخطرني بالإجابات.';
$lang['ALWAYS_NOTIFY_EXPLAIN'] = 'يرسل رسالة عبر البريد الإلكتروني عندما يقوم شخص بالرد على موضوع كنت قد نشرت. هذا يمكن أن يتغير كلما قمت بنشر.';

$lang['BOARD_LANG'] = 'لغة المجلس.';
$lang['GENDER'] = 'الجنس';
$lang['GENDER_SELECT'] = [
    0 => 'غير معروف',
    1 => 'ذكر',
    2 => 'أنثى',
];
$lang['MODULE_OFF'] = 'وحدة معطل!';

$lang['BIRTHDAY'] = 'عيد ميلاد';
$lang['HAPPY_BIRTHDAY'] = 'عيد ميلاد سعيد!';
$lang['WRONG_BIRTHDAY_FORMAT'] = 'تم إدخال تاريخ عيد الميلاد بشكل غير صحيح.';
$lang['AGE'] = 'العمر';
$lang['BIRTHDAY_TO_HIGH'] = 'عذرًا، هذا الموقع لا يقبل المستخدمين الذين تزيد أعمارهم عن %d عامًا';
$lang['BIRTHDAY_TO_LOW'] = 'عذرًا، هذا الموقع لا يقبل المستخدمين الذين تقل أعمارهم عن %d عامًا';
$lang['BIRTHDAY_TODAY'] = 'المستخدمين مع عيد ميلاده اليوم: ';
$lang['BIRTHDAY_WEEK'] = 'المستخدمين مع عيد ميلاد في غضون %d أيام: %s';
$lang['NOBIRTHDAY_WEEK'] = 'لا تواجه المستخدمين عيد ميلاد في القادم %d أيام'; // %d is substituted with the number of days
$lang['NOBIRTHDAY_TODAY'] = 'لا يوجد مستخدمين لديهم عيد ميلاد اليوم.';
$lang['BIRTHDAY_ENABLE'] = 'تمكين عيد ميلاد';
$lang['BIRTHDAY_MAX_AGE'] = 'ماكس العمر';
$lang['BIRTHDAY_MIN_AGE'] = 'مين عمر';
$lang['BIRTHDAY_CHECK_DAY'] = 'أيام للتحقق من أعياد الميلاد القادمة';
$lang['YEARS'] = 'سنوات';

$lang['TIMEZONE'] = 'التوقيت';
$lang['DATE_FORMAT_EXPLAIN'] = 'بناء الجملة المستخدم مطابق PHP <a href=\'https://www.php.net/manual/en/function.date.php\' target=\'_other\'>date()</a> وظيفة.';
$lang['SIGNATURE'] = 'التوقيع';
$lang['SIGNATURE_EXPLAIN'] = 'هذا هو نص الكتلة التي يمكن إضافتها إلى المشاركات الخاصة بك. هناك حد %d من الأحرف.';
$lang['SIGNATURE_DISABLE'] = 'تم التوقيع انتهاك قواعد المنتدى.';
$lang['PUBLIC_VIEW_EMAIL'] = 'عرض عنوان البريد الإلكتروني في ملفي الشخصي';

$lang['EMAIL_EXPLAIN'] = 'سوف يتم إرسالها إلى هذا العنوان لإكمال التسجيل.';

$lang['CURRENT_PASSWORD'] = 'كلمة المرور الحالية';
$lang['NEW_PASSWORD'] = 'كلمة المرور الجديدة';
$lang['CONFIRM_PASSWORD'] = 'تأكيد كلمة المرور';
$lang['CONFIRM_PASSWORD_EXPLAIN'] = 'يجب عليك تأكيد كلمة المرور الحالية إذا كنت ترغب في تغييرها أو تعديل عنوان بريدك الإلكتروني.';
$lang['PASSWORD_IF_CHANGED'] = 'تحتاج فقط إلى توفير كلمة مرور إذا كنت ترغب في تغيير ذلك.';
$lang['PASSWORD_CONFIRM_IF_CHANGED'] = 'تحتاج فقط إلى تأكيد كلمة المرور الخاصة بك إذا كنت قد غيرتها أعلاه.';

$lang['AUTOLOGIN'] = 'تسجيل الدخول التلقائي.';
$lang['RESET_AUTOLOGIN'] = 'إعادة تعيين مفتاح تسجيل الدخول التلقائي.';
$lang['RESET_AUTOLOGIN_EXPL'] = 'بما في ذلك جميع الأماكن التي قمت بزيارتها عندما يتم تمكين تسجيل الدخول التلقائي.';

$lang['AVATAR'] = 'الصورة الرمزية';
$lang['AVATAR_EXPLAIN'] = 'يعرض صورة رسومية صغيرة أسفل تفاصيلك في المشاركات. يمكن عرض صورة واحدة فقط في كل مرة، يجب أن لا يتجاوز عرضها %d بكسل، والارتفاع لا يتجاوز %d بكسل، وحجم الملف لا يتجاوز %s.';
$lang['AVATAR_DELETE'] = 'حذف الصورة الرمزية';
$lang['AVATAR_DISABLE'] = 'تم تعطيل خيار التحكم في الصورة الرمزية بسبب انتهاك <a href="%s"><b>قوانين المنتدى</b></a>.';
$lang['UPLOAD_AVATAR_FILE'] = 'تحميل الصورة الرمزية';
$lang['RETURN_PROFILE'] = 'العودة إلى الملف الشخصي';
$lang['DELETE_IMAGE'] = 'حذف صورة';
$lang['SET_MONSTERID_AVATAR'] = 'تعيين صورة رمزية لـ MonsterID';

$lang['NOTIFY_ON_PRIVMSG'] = 'يتم الإخطار عند استلام رسالة خاصة جديدة.';
$lang['HIDE_USER'] = 'إخفاء حالة الاتصال الخاصة بك';
$lang['HIDDEN_USER'] = 'مستخدم مخفي.';

$lang['PROFILE_UPDATED'] = 'التشكيل الجانبي الخاص بك قد تم تحديثه';
$lang['PROFILE_UPDATED_INACTIVE'] = 'تم تحديث ملفك الشخصي. ومع ذلك، قمت بتغيير تفاصيل حيوية، لذا أصبح حسابك غير نشط الآن. تحقق من بريدك الإلكتروني لمعرفة كيفية إعادة تنشيط حسابك، أو إذا كان التنشيط من قبل المشرف مطلوباً، انتظر حتى يقوم المسؤول بإعادة تنشيطه.';

$lang['PASSWORD_LONG'] = 'يجب أن تكون كلمة المرور الخاصة بك لا تزيد عن %d حرفًا ولا تقل عن %d حرفًا.';
$lang['USERNAME_TAKEN'] = 'آسف، لكن اسم المستخدم هذا قد تم أخذه بالفعل.';
$lang['USERNAME_INVALID'] = 'آسف لكن هذا اسم المستخدم يحتوي على حرف غير صالح';
$lang['USERNAME_DISALLOWED'] = 'آسف، لكن اسم المستخدم هذا غير مسموح به.';
$lang['USERNAME_TOO_LONG'] = 'اسمك طويل جدا.';
$lang['USERNAME_TOO_SMALL'] = 'اسمك صغير جداً.';
$lang['EMAIL_TAKEN'] = 'آسف، ولكن هذا عنوان البريد الإلكتروني مسجل بالفعل لمستخدم.';
$lang['EMAIL_INVALID'] = 'آسف لكن هذا عنوان البريد الإلكتروني غير صالح.';
$lang['EMAIL_TOO_LONG'] = 'البريد الإلكتروني الخاص بك طويل جداً.';
$lang['SIGNATURE_TOO_LONG'] = 'التوقيع الخاص بك طويل جداً.';
$lang['SIGNATURE_ERROR_HTML'] = 'يمكن أن يحتوي التوقيع فقط على BBCode.';
$lang['FIELDS_EMPTY'] = 'يجب ملء الحقول المطلوبة.';

$lang['WELCOME_SUBJECT'] = 'مرحبا بكم %s المنتديات';

$lang['ACCOUNT_ADDED'] = 'شكرا لك على التسجيل. وقد تم إنشاء حسابك. يمكنك الآن تسجيل الدخول مع اسم المستخدم وكلمة المرور';
$lang['ACCOUNT_INACTIVE'] = 'وقد تم إنشاء حسابك. بيد أن هذا المنتدى يتطلب تفعيل الحساب. مفتاح التنشيط تم إرسالها إلى عنوان البريد الإلكتروني الذي قدمته. يرجى التحقق من البريد الإلكتروني الخاص بك للحصول على مزيد من المعلومات';
$lang['ACCOUNT_ACTIVE'] = 'حسابك قد تم تفعيله. شكرا لك على التسجيل';
$lang['ALREADY_ACTIVATED'] = 'لقد قمت بالفعل بتفعيل حسابك.';

$lang['WRONG_ACTIVATION'] = 'مفتاح التنشيط التي أدخلتها لا تتطابق مع أي في قاعدة البيانات.';
$lang['PASSWORD_UPDATED'] = 'كلمة سر جديدة تم إنشاؤها. يرجى التحقق من البريد الإلكتروني الخاص بك للحصول على تفاصيل حول كيفية تفعيلها.';
$lang['NO_EMAIL_MATCH'] = 'عنوان البريد الإلكتروني الذي أدخلته لا يتطابق مع الموجود لهذا المستخدم.';
$lang['PASSWORD_ACTIVATED'] = 'حسابك تم إعادة تفعيلها. تسجيل الدخول, الرجاء استخدام كلمة المرور المرفقة في البريد الإلكتروني التي تلقيتها.';

$lang['SEND_EMAIL_MSG'] = 'إرسال رسالة بريد إلكتروني';
$lang['NO_USER_SPECIFIED'] = 'أي مستخدم محدد';
$lang['USER_NOT_EXIST'] = 'هذا المستخدم غير موجود';
$lang['EMAIL_MESSAGE_DESC'] = 'هذه الرسالة سيتم إرسالها كنص عادي ، لذلك لا تتضمن أي HTML أو BBCode. عنوان المرسل لهذه الرسالة سيتم تعيين عنوان البريد الإلكتروني الخاص بك.';
$lang['RECIPIENT'] = 'المستلم';
$lang['EMAIL_SENT'] = 'البريد الإلكتروني تم إرسالها.';
$lang['SEND_EMAIL'] = 'وإرسال البريد الإلكتروني';
$lang['EMPTY_SUBJECT_EMAIL'] = 'يجب تحديد موضوع رسالة البريد الإلكتروني.';
$lang['EMPTY_MESSAGE_EMAIL'] = 'يجب إدخال رسالة بالبريد الإلكتروني.';

$lang['USER_AGREEMENT'] = 'اتفاقية المستخدم';
$lang['USER_AGREEMENT_HEAD'] = 'من أجل المضي قدما ، يجب أن توافق مع القواعد التالية';
$lang['USER_AGREEMENT_AGREE'] = 'لقد قرأت وأوافق على اتفاقية المستخدم أعلاه';

$lang['COPYRIGHT_HOLDERS'] = 'لحاملي حقوق الطبع والنشر';
$lang['ADVERT'] = 'الإعلان على هذا الموقع';
$lang['NOT_FOUND'] = 'لم يتم العثور على الملف';

// Memberslist
$lang['SORT_TOP_TEN'] = 'أعلى عشرة ملصقات.';
$lang['SORT_JOINED'] = 'تاريخ الانضمام.';
$lang['SORT_USERNAME'] = 'اسم المستخدم';
$lang['SORT_LOCATION'] = 'الموقع';
$lang['SORT_POSTS'] = 'إجمالي المشاركات';
$lang['SORT_EMAIL'] = 'البريد الإلكتروني';
$lang['SORT_WEBSITE'] = 'الموقع';
$lang['ASC'] = 'تصاعدي';
$lang['DESC'] = 'تنازلي';
$lang['ORDER'] = 'ترتيب.';

// Thanks
$lang['THANK_TOPIC'] = 'صوت لهذا الموضوع';
$lang['THANKS_GRATITUDE'] = 'نحن نقدر امتنانك';
$lang['LAST_LIKES'] = 'آخر الأصوات';
$lang['LIKE_OWN_POST'] = 'لا يمكنك التصويت لموضوعك الخاص';
$lang['NO_LIKES'] = 'لم يُعطَ أي صوت بعد';
$lang['LIKE_ALREADY'] = 'لقد صوتت بالفعل لهذا الموضوع';

// Invites
$lang['INVITE_CODE'] = 'رمز الدعوة';
$lang['INCORRECT_INVITE'] = 'لم يتم العثور على الدعوة';
$lang['INVITE_EXPIRED'] = 'انتهت صلاحية الدعوة';

// Group control panel
$lang['GROUP_CONTROL_PANEL'] = 'مجموعات المستخدمين';
$lang['GROUP_CONFIGURATION'] = 'تكوين المجموعة.';
$lang['GROUP_GOTO_CONFIG'] = 'اذهب إلى لوحة التكوين الجماعية.';
$lang['GROUP_RETURN'] = 'الرجوع إلى صفحة مجموعة المستخدم.';
$lang['MEMBERSHIP_DETAILS'] = 'تفاصيل عضوية المجموعة.';
$lang['JOIN_A_GROUP'] = 'الانضمام إلى مجموعة.';

$lang['GROUP_INFORMATION'] = 'معلومات المجموعة.';
$lang['GROUP_NAME'] = 'اسم المجموعة.';
$lang['GROUP_DESCRIPTION'] = 'وصف المجموعة.';
$lang['GROUP_SIGNATURE'] = 'توقيع المجموعة.';
$lang['GROUP_MEMBERSHIP'] = 'عضوية المجموعة.';
$lang['GROUP_MEMBERS'] = 'أعضاء المجموعة.';
$lang['GROUP_MODERATOR'] = 'مشرف المجموعة.';
$lang['PENDING_MEMBERS'] = 'الأعضاء المنتظرون.';

$lang['GROUP_TIME'] = 'تم الإنشاء.';
$lang['RELEASE_GROUP'] = 'مجموعة الإصدار.';

$lang['GROUP_TYPE'] = 'نوع المجموعة.';
$lang['GROUP_OPEN'] = 'مجموعة مفتوحة.';
$lang['GROUP_CLOSED'] = 'مجموعة مغلقة.';
$lang['GROUP_HIDDEN'] = 'مجموعة مخفية.';

$lang['GROUP_MEMBER_MOD'] = 'مشرف المجموعة.';
$lang['GROUP_MEMBER_MEMBER'] = 'العضويات الحالية.';
$lang['GROUP_MEMBER_PENDING'] = 'عضوية معلقة.';
$lang['GROUP_MEMBER_OPEN'] = 'فتح مجموعات.';
$lang['GROUP_MEMBER_CLOSED'] = 'مجموعات مغلقة.';
$lang['GROUP_MEMBER_HIDDEN'] = 'مخبأة مجموعات.';

$lang['NO_GROUPS_EXIST'] = 'لا توجد مجموعات.';
$lang['GROUP_NOT_EXIST'] = 'مجموعة المستخدم غير موجود';
$lang['NO_GROUP_ID_SPECIFIED'] = 'معرف المجموعة لم يتم تحديد';

$lang['NO_GROUP_MEMBERS'] = 'هذه المجموعة لا تحتوي على أعضاء.';
$lang['HIDDEN_GROUP_MEMBERS'] = 'هذه المجموعة مخفية؛ لا يمكنك عرض عضويتها.';
$lang['NO_PENDING_GROUP_MEMBERS'] = 'لا يوجد أعضاء مت Pending في هذه المجموعة.';
$lang['GROUP_JOINED'] = 'لقد اشتركت في هذه المجموعة بنجاح.<br />ستتم إبلاغك عندما يتم الموافقة على اشتراكك من قبل مسؤول المجموعة.';
$lang['ALREADY_MEMBER_GROUP'] = 'كنت بالفعل عضوا في هذه المجموعة';
$lang['USER_IS_MEMBER_GROUP'] = '%s هو بالفعل عضو في هذه المجموعة';
$lang['USER_IS_MOD_GROUP'] = '%s هو مشرف هذه المجموعة';
$lang['EFFECTIVE_DATE'] = 'تاريخ';
$lang['COULD_NOT_ADD_USER'] = 'المستخدم المحدد غير موجود.';
$lang['UNSUB_SUCCESS'] = 'لقد تم إلغاء اشتراكك من هذه المجموعة.';

$lang['APPROVE_SELECTED'] = 'الموافقة على اختيار';
$lang['DENY_SELECTED'] = 'ينكر اختيار.';
$lang['REMOVE_SELECTED'] = 'إزالة اختيار.';
$lang['ADD_MEMBER'] = 'إضافة الأعضاء';
$lang['NOT_GROUP_MODERATOR'] = 'أنت لست مشرف هذه المجموعة، ولذلك لا يمكنك تنفيذ هذا الإجراء.';

$lang['LOGIN_TO_JOIN'] = 'تسجيل الدخول إلى الانضمام أو إدارة عضويات مجموعة';
$lang['THIS_OPEN_GROUP'] = 'هذه مجموعة مفتوحة: انقر لطلب العضوية.';
$lang['THIS_CLOSED_GROUP'] = 'هذه مجموعة مغلقة: لا يتم قبول المزيد من المستخدمين.';
$lang['THIS_HIDDEN_GROUP'] = 'هذه مجموعة مخفية: لا يُسمح بالإضافة التلقائية للمستخدمين.';
$lang['MEMBER_THIS_GROUP'] = 'كنت عضوا في هذه المجموعة';
$lang['PENDING_THIS_GROUP'] = 'عضويتك في هذه المجموعة في انتظار الموافقة.';
$lang['ARE_GROUP_MODERATOR'] = 'أنت مشرف المجموعة';
$lang['NONE'] = 'لا شيء';

$lang['UNSUBSCRIBE_GROUP'] = 'إلغاء الاشتراك';
$lang['MEMBERS_IN_GROUP'] = 'الأعضاء في المجموعة';

// Release Groups
$lang['POST_RELEASE_FROM_GROUP'] = 'آخر إصدار من المجموعة.';
$lang['CHOOSE_RELEASE_GROUP'] = 'لم يتم تحديد';
$lang['ATTACH_RG_SIG'] = 'إرفاق توقيع مجموعة الإصدار.';
$lang['RELEASE_FROM_RG'] = 'الإفراج تم إعداده من قبل';
$lang['GROUPS_RELEASES'] = 'إصدارات المجموعة.';
$lang['MORE_RELEASES'] = 'إيجاد جميع إصدارات المجموعة';
$lang['NOT_A_RELEASE_GROUP'] = 'هذه المجموعة ليست مجموعة الإصدار';

// Search
$lang['SEARCH_HELP_URL'] = 'تعليمات البحث';
$lang['SEARCH_OPTIONS'] = 'خيارات البحث';

$lang['SEARCH_WORDS'] = 'البحث عن الكلمات الرئيسية';
$lang['SEARCH_WORDS_EXPL'] = 'يمكنك استخدام <b>+</b> لتحديد الكلمات التي يجب أن تكون في النتائج و <b>-</b> لتحديد الكلمات التي ينبغي ألا تكون في النتيجة (مثل: "+word1 -word2"). استخدم * كبديل غير محدد عند الحاجة.';
$lang['SEARCH_AUTHOR'] = 'البحث عن الكاتب';
$lang['SEARCH_AUTHOR_EXPL'] = '* كبديل غير محدد عند الحاجة.';

$lang['SEARCH_TITLES_ONLY'] = 'موضوع البحث في العناوين فقط';
$lang['SEARCH_ALL_WORDS'] = 'كل الكلمات';
$lang['IN_MY_POSTS'] = 'في مشاركاتي';
$lang['SEARCH_MY_TOPICS'] = 'في المواضيع';
$lang['NEW_TOPICS'] = 'مواضيع جديدة';

$lang['SEARCH_PREVIOUS'] = 'البحث السابق.';

$lang['SORT_BY'] = 'فرز حسب';
$lang['SORT_TIME'] = 'بعد الوقت.';
$lang['SORT_TOPIC_TITLE'] = 'عنوان الموضوع';

$lang['DISPLAY_RESULTS_AS'] = 'عرض النتائج';
$lang['ALL_AVAILABLE'] = 'كل ما هو متاح';
$lang['BRIEFLY'] = 'باختصار';

$lang['NO_SEARCH_MATCH'] = 'لا توجد مواضيع أو مشاركات تتوافق مع معايير البحث الخاصة بك.';
$lang['FOUND_SEARCH_MATCH'] = 'البحث وجد %d تطابق.'; // e.g. Search found 1 match
$lang['FOUND_SEARCH_MATCHES'] = 'البحث وجد %d تطابقات.'; // e.g. Search found 24 matches

$lang['CLOSE_WINDOW'] = 'إغلاق النافذة';
$lang['HIDE'] = 'إخفاء';

// Auth related entries
// Note the %s will be replaced with one of the following 'user' arrays
$lang['SORRY_AUTH_VIEW'] = 'عذرًا، ولكن فقط %s يمكنه عرض هذا المنتدى.';
$lang['SORRY_AUTH_READ'] = 'عذرًا، ولكن فقط %s يمكنه قراءة المواضيع في هذا المنتدى.';
$lang['SORRY_AUTH_REPLY'] = 'عذرًا، ولكن فقط %s يمكنه الرد على المشاركات في هذا المنتدى.';
$lang['SORRY_AUTH_EDIT'] = 'عذرًا، ولكن فقط %s يمكنه تعديل المشاركات في هذا المنتدى.';
$lang['SORRY_AUTH_DELETE'] = 'عذرًا، ولكن فقط %s يمكنه حذف المشاركات في هذا المنتدى.';

// These replace the %s in the above strings
$lang['AUTH_ANONYMOUS_USERS'] = '<b>المستخدمين المجهولين</b>.';
$lang['AUTH_REGISTERED_USERS'] = '<b>المستخدمين المسجلين</b>.';
$lang['AUTH_USERS_GRANTED_ACCESS'] = '<b>مستخدمون حصلوا على وصول خاص</b>.';
$lang['AUTH_MODERATORS'] = '<b>المشرفين</b>.';
$lang['AUTH_ADMINISTRATORS'] = '<b>المسؤولين</b>.';

$lang['NOT_MODERATOR'] = 'أنت لست مشرفًا في هذا المنتدى.';
$lang['NOT_AUTHORISED'] = 'غير مصرح';

$lang['YOU_BEEN_BANNED'] = 'لقد منعت من هذا المنتدى. يرجى الاتصال بمسؤول المجلس للحصول على مزيد من المعلومات.';

// Viewonline
$lang['ONLINE_EXPLAIN'] = 'المستخدمين النشيطين خلال الخمسة دقائق الماضية.';
$lang['LAST_UPDATED'] = 'آخر تحديث';

// Moderator Control Panel
$lang['MOD_CP'] = 'مشرف لوحة التحكم';
$lang['SELECT'] = 'حدد.';
$lang['DELETE'] = 'حذف';
$lang['MOVE'] = 'الخطوة';
$lang['LOCK'] = 'قفل';
$lang['UNLOCK'] = 'فتح';

$lang['TOPICS_REMOVED'] = 'المواضيع المختارة بنجاح إزالتها من قاعدة البيانات.';
$lang['NO_TOPICS_REMOVED'] = 'لا توجد مواضيع أزيلت.';
$lang['TOPICS_LOCKED'] = 'تم إغلاق المواضيع المختارة.';
$lang['TOPICS_MOVED'] = 'المواضيع المختارة تم نقلها.';
$lang['TOPICS_UNLOCKED'] = 'تم فتح المواضيع المختارة.';
$lang['NO_TOPICS_MOVED'] = 'لا توجد مواضيع تم نقلها.';

$lang['CONFIRM_DELETE_TOPIC'] = 'هل أنت متأكد من أنك تريد إزالة الموضوع المحدد/s ؟ ';
$lang['CONFIRM_MOVE_TOPIC'] = 'هل أنت متأكد من أنك تريد نقل الموضوع المحدد/s ؟ ';

$lang['MOVE_TO_FORUM'] = 'الانتقال إلى المنتدى';
$lang['LEAVE_SHADOW_TOPIC'] = 'ترك موضوع الظل في المنتدى القديم.';

$lang['SPLIT_TOPIC_EXPLAIN'] = 'استخدام النموذج أدناه يمكنك من تقسيم الموضوع إلى قسمين، إما عن طريق اختيار المشاركات بشكل فردي أو عن طريق تقسيمها عند اختيار مشاركة معينة.';
$lang['NEW_TOPIC_TITLE'] = 'عنوان الموضوع الجديد.';
$lang['FORUM_FOR_NEW_TOPIC'] = 'منتدى للموضوع الجديد.';
$lang['SPLIT_POSTS'] = 'تقسيم الوظائف المختارة';
$lang['SPLIT_AFTER'] = 'تقسيم بعد المشاركة المحددة.';
$lang['TOPIC_SPLIT'] = 'تم تقسيم الموضوع المحدد بنجاح.';
$lang['NONE_SELECTED'] = 'لا يوجد شيء محدد لتنفيذ هذه العملية عليه. يرجى العودة وتحديد واحد على الأقل.';

$lang['THIS_POSTS_IP'] = 'عنوان IP لهذا المنصب';
$lang['OTHER_IP_THIS_USER'] = 'عناوين IP الأخرى التي قام هذا المستخدم بالنشر منها.';
$lang['USERS_THIS_IP'] = 'المستخدمين الذين نشروا من عنوان IP هذا.';
$lang['IP_INFO'] = 'معلومات IP.';
$lang['LOOKUP_IP'] = 'ابحث عن عنوان IP.';

// Timezones ... for display on each page
$lang['ALL_TIMES'] = 'جميع الأوقات <span class="tz_time">%s</span>'; // This is followed by UTC and the timezone offset

// Friendly dates (used in bb_date function)
$lang['DATETIME']['TODAY'] = 'اليوم';
$lang['DATETIME']['YESTERDAY'] = 'أمس';

// Country selector
$lang['COUNTRY'] = 'البلد';
$lang['SET_OWN_COUNTRY'] = 'تعيين بلد خاص (يدويًا)';

// Errors
$lang['INFORMATION'] = 'المعلومات';
$lang['ADMIN_REAUTHENTICATE'] = 'لإدارة/معتدلة المجلس يجب إعادة مصادقة نفسك.';

// Attachment Mod Main Language Variables
// Auth Related Entries
$lang['RULES_ATTACH_CAN'] = 'يمكنك <b>إرفاق</b> الملفات في هذا المنتدى.';
$lang['RULES_ATTACH_CANNOT'] = 'لا يمكنك <b>إرفاق</b> الملفات في هذا المنتدى.';
$lang['RULES_DOWNLOAD_CAN'] = 'يمكنك <b>تحميل</b> الملفات في هذا المنتدى.';
$lang['RULES_DOWNLOAD_CANNOT'] = 'لا يمكنك <b>تحميل</b> الملفات في هذا المنتدى.';
$lang['SORRY_AUTH_VIEW_ATTACH'] = 'آسف ولكن لا يحق لك عرض أو تحميل هذا المرفق';

// Viewtopic -> Display of Attachments
$lang['DESCRIPTION'] = 'الوصف'; // used in Administration Panel too...
$lang['DOWNLOAD'] = 'تحميل'; // this Language Variable is defined in admin.php too, but we are unable to access it from the main Language File
$lang['FILESIZE'] = 'حجم الملف';
$lang['MAX_FILE_SIZE'] = 'أقصى حجم للملف';
$lang['ALLOWED_EXTENSIONS'] = 'الامتدادات المسموحة';

// Viewtopic -> Display of Attachments -> TorrServer integration
$lang['STREAM'] = 'بث';
$lang['RESOLUTION'] = 'الدقة: <b>%s</b>';
$lang['CHANNELS'] = 'القنوات: <b>%s</b>';
$lang['CHANNELS_LAYOUT'] = 'تخطيط القنوات: <b>%s</b>';
$lang['BITRATE'] = 'معدل البت: <b>%s</b>';
$lang['SAMPLE_RATE'] = 'معدل العينة: <b>%s</b>';
$lang['AUDIO_TRACK'] = 'معلومات مسار الصوت (%d):';
$lang['AUDIO_CODEC'] = 'ترميز الصوت: <b title="%s">%s</b>';
$lang['VIDEO_CODEC'] = 'ترميز الفيديو: <b title="%s">%s</b>';
$lang['SHOW_MORE_INFORMATION_FILE'] = 'عرض مزيد من المعلومات عن الملف';
$lang['DOWNLOAD_M3U_FILE'] = 'تنزيل ملف .m3u';
$lang['PLAYBACK_M3U'] = 'تشغيل ملف .m3u';
$lang['COPY_STREAM_LINK'] = 'نسخ رابط البث إلى الحافظة';
$lang['M3U_NOT_SUPPORTED'] = 'لا يمكن تشغيل هذا الملف في المتصفح...';
$lang['M3U_FFPROBE_NO_DATA'] = 'يبدو أن ffprobe لن يتمكن من إرجاع بيانات عن هذا الترميز...';
$lang['M3U_NOTICE'] = 'بعض المتصفحات لا تدعم تشغيل بعض تنسيقات الفيديو. في هذه الحالة، يمكنك تنزيل ملف .m3u وتشغيله باستخدام مشغل طرف ثالث';
$lang['TORRSERVER_UNAVAILABLE'] = 'تور سيرفر غير متوفر';
$lang['TORRSERVER_INVALID_REQUEST'] = 'معلمات الطلب غير صالحة';

$lang['ATTACHMENT'] = 'المرفقات';

// Posting -> Posting Attachments
$lang['ADD_ATTACHMENT'] = 'إضافة المرفقات';
$lang['ADD_ATTACHMENT_EXPLAIN'] = 'إذا كنت لا ترغب في إضافة مرفق إلى منشورك، يرجى ترك الحقول فارغة.';
$lang['UPDATE_ATTACHMENT'] = 'تحديث المرفق';
$lang['FILENAME'] = 'اسم الملف';

// Posting -> Posted Attachments
$lang['POSTED_ATTACHMENTS'] = 'نشر المرفقات';
$lang['DELETE_ATTACHMENT'] = 'حذف مرفق.';

// Errors -> Download
$lang['NO_ATTACHMENT_SELECTED'] = 'لم يتم اختيار مرفق للتحميل أو العرض.';
$lang['ERROR_NO_ATTACHMENT'] = 'المرفق المحدد غير موجود بعد الآن';
$lang['DOWNLOAD_LIMIT_EXCEEDED'] = 'تم تجاوز الحد اليومي للتحميل. يرجى المحاولة مرة أخرى غدًا.';

//bt
$lang['BT_REG_YES'] = 'مسجلة';
$lang['BT_REG_NO'] = 'غير مسجل';
$lang['BT_REG_ON_TRACKER'] = 'التسجيل في تعقب';
$lang['BT_REG_FAIL'] = 'لا يمكن تسجيل سيل على تعقب';
$lang['BT_REG_FAIL_SAME_HASH'] = 'آخر سيل مع نفسه info_hash بالفعل <a href="%s"><b>registered</b></a>';
$lang['BT_V1_ONLY_DISALLOWED'] = 'تم تعطيل التورنتات فقط v1 من قبل المسؤول في الوقت الحالي، المسموح به: v2 والهجن';
$lang['BT_V2_ONLY_DISALLOWED'] = 'تم تعطيل التورنتات فقط v2 من قبل المسؤول في الوقت الحالي، المسموح به: v1 والهجن';
$lang['BT_FLIST'] = 'قائمة الملفات';
$lang['BT_FLIST_LIMIT'] = 'إعدادات التتبع لا تسمح بمعالجة القوائم التي تحتوي على أكثر من %d ملف. العدد الحالي هو: %d';
$lang['BT_FLIST_BTMR_HASH'] = 'BTMR Hash';
$lang['BT_FLIST_BTMR_NOTICE'] = 'جذر مرخلي BitTorrent هو هاش ملف مضمّن في التورنتات التي تدعم BitTorrent v2 ، يمكن لمستخدمي المتتبع استخراجه وحسابه، وكذلك تنزيل التورنتات المكررة باستخدام أدوات سطح المكتب مثل <a href="%s" target="_blank" referrerpolicy="origin">قارئ جذر مرخلي التورنت</a>';
$lang['BT_FLIST_CREATION_DATE'] = 'تاريخ الإنشاء';
$lang['BT_IS_PRIVATE'] = 'تورنت خاص';
$lang['BT_FLIST_FILE_PATH'] = 'المسار (%s)';
$lang['BT_FLIST_LINK_TITLE'] = 'هاش الملفات | معلومات .torrent';
$lang['BT_UNREG_FROM_TRACKER'] = 'إزالة من المتعقب';
$lang['BT_UNREGISTERED'] = 'سيل غير مسجل';
$lang['BT_UNREGISTERED_ALREADY'] = 'التورنت غير مسجل بالفعل';
$lang['BT_REGISTERED'] = 'تم تسجيل التورنت على المتعقب<br /><br />الآن تحتاج إلى <a href="%s"><b>تنزيل التورنت الخاص بك</b></a> وتشغيله باستخدام عميل BitTorrent، واختر المجلد الذي يحتوي على الملفات الأصلية التي تشاركها كمسار التنزيل.';
$lang['INVALID_ANN_URL'] = 'عنوان URL للإعلان غير صالح [%s]<br /><br />يجب أن يكون <b>%s</b>.';
$lang['PASSKEY_ERR_TOR_NOT_REG'] = 'تعذر إضافة مفتاح المرور<br /><br />التورنت غير مسجل على المتعقب.';
$lang['BT_PASSKEY'] = 'مفتاح المرور';
$lang['BT_GEN_PASSKEY'] = 'إنشاء جديد';
$lang['BT_PASSKEY_VIEW'] = 'تظهر';
$lang['BT_GEN_PASSKEY_NEW'] = "انتباه! بعد تغيير المفتاح الخاص بك، ستحتاج إلى إعادة تحميل جميع السيول النشطة! \n هل أنت متأكد أنك تريد إنشاء مفتاح جديد؟";
$lang['BT_NO_SEARCHABLE_FORUMS'] = 'لا توجد منتديات قابلة للبحث.';

$lang['SEEDS'] = 'البذور';
$lang['LEECHS'] = 'علقة';
$lang['SPEED_UP'] = 'تسريع';
$lang['SPEED_DOWN'] = 'سرعة التنزيل منخفضة.';

$lang['SEEDERS'] = 'بزار';
$lang['LEECHERS'] = 'لا يمكن استخدام "Leechers".';
$lang['RELEASING'] = 'النفس';
$lang['SEEDING'] = 'البذور';
$lang['LEECHING'] = 'علقة';
$lang['IS_REGISTERED'] = 'مسجلة';
$lang['MAGNET'] = 'رابط المغناطيس';
$lang['MAGNET_FOR_GUESTS'] = 'عرض رابط المغناطيس للزوار';
$lang['MAGNET_v2'] = 'رابط المغناطيس (يدعم BitTorrent v2)';

//torrent status mod
$lang['TOR_STATUS'] = 'حالة';
$lang['TOR_STATUS_SELECT_ACTION'] = 'حدد الوضع';
$lang['TOR_STATUS_NOT_SELECT'] = 'لم يتم تحديد الحالة.';
$lang['TOR_STATUS_SELECT_ALL'] = 'جميع الحالات';
$lang['TOR_STATUS_FORBIDDEN'] = 'حالة هذا الموضوع هي: ';
$lang['TOR_STATUS_NAME'] = [
    TOR_NOT_APPROVED => 'لم يتم',
    TOR_CLOSED => 'مغلقة',
    TOR_APPROVED => 'ترجمة "checked" تحتاج إلى تعديل.',
    TOR_NEED_EDIT => '"Not formalized until" requires a more accurate translation.',
    TOR_NO_DESC => '"Not formalized" needs rephrasing.',
    TOR_DUP => 'مكرر',
    TOR_CLOSED_CPHOLD => 'مغلق (حقوق الطبع والنشر)',
    TOR_CONSUMED => 'الترجمة غير صحيحة.',
    TOR_DOUBTFUL => 'مترجم بشكل غير دقيق.',
    TOR_CHECKING => 'يتم التحقق منه',
    TOR_TMP => 'مؤقت',
    TOR_PREMOD => 'تحتاج إلى مراجعة.',
    TOR_REPLENISH => 'جديد',
];
$lang['TOR_STATUS_FAILED'] = 'هذا الوضع غير موجود!';
$lang['TORRENT_FAILED'] = 'التوزيع غير موجود!';
$lang['TOR_STATUS_DUB'] = 'توزيع لديه نفس الحالة';
$lang['TOR_DONT_CHANGE'] = 'لا يمكن تغيير الحالة!';
$lang['TOR_STATUS_OF'] = 'توزيع لديه حالة من:';
$lang['TOR_STATUS_CHANGED'] = 'تغيرت الحالة: ';
$lang['TOR_BACK'] = ' مرة أخرى';
$lang['PROCEED'] = 'ترجمة غير دقيقة.';
$lang['CHANGE_TOR_TYPE'] = 'المعنى غير صحيح.';
$lang['DEL_TORRENT'] = 'صياغة غير صحيحة.';
$lang['DEL_MOVE_TORRENT'] = 'يجب إعادة صياغته.';
$lang['UNEXECUTED_RELEASE'] = 'لديك إصدار غير مكتمل. قبل إنشاء واحد جديد، يرجى إنجازه!';
$lang['TOR_STATUS_LOG_ACTION'] = 'الحالة الجديدة: %s.<br/>الحالة السابقة: %s.';

// tor_comment
$lang['TOR_MOD_TITLE'] = 'تغيير مركز التوزيع - %s';
$lang['TOR_MOD_MSG'] = "مرحبًا، %s.\n\n تم تغيير حالة توزيعك [url=%s]إلى[/url] [b]%s[/b]";

$lang['TOR_AUTH_TITLE'] = 'التغييرات في التصميم - %s';
$lang['TOR_AUTH_MSG'] = "مرحبًا، %s.\n\n لقد تغير توزيعك - [url=%s]%s[/url]\n\n يرجى إعادة التحقق منه.";
$lang['TOR_AUTH_FIXED'] = 'ثابت';
$lang['TOR_AUTH_SENT_COMMENT'] = ' &middot; <span class="seed bold">The المعلومات التي يتم إرسالها إلى مشرف. نتوقع.</span>';

$lang['BT_TOPIC_TITLE'] = 'عنوان الموضوع';
$lang['BT_SEEDER_LAST_SEEN'] = 'البذور شوهد آخر مرة';
$lang['SIZE'] = 'حجم';
$lang['COMPLETED'] = 'التنزيلات المكتملة';
$lang['ADDED'] = 'وأضاف';
$lang['DELETE_TORRENT'] = 'حذف التورنت';
$lang['DELETE_MOVE_TORRENT'] = 'حذف ونقل الموضوع';
$lang['DL_TORRENT'] = 'تحميل .تورنت';
$lang['BT_LAST_POST'] = 'آخر مشاركة';
$lang['BT_CREATED'] = 'تم نشر الموضوع';
$lang['BT_REPLIES'] = 'الردود';
$lang['BT_VIEWS'] = 'وجهات النظر';

// Gold/Silver releases
$lang['GOLD'] = 'الذهب';
$lang['SILVER'] = 'الفضة';
$lang['SET_GOLD_TORRENT'] = 'جعل الذهب';
$lang['UNSET_GOLD_TORRENT'] = 'إلغاء تحديد الذهب';
$lang['SET_SILVER_TORRENT'] = 'جعل الفضة';
$lang['UNSET_SILVER_TORRENT'] = 'إلغاء تحديد الفضة';
$lang['GOLD_STATUS'] = 'سيل ذهبي! لا يُحسب تحميل الحركة!';
$lang['SILVER_STATUS'] = 'سيل فضي! حركة التحميل جزئياً مُحتسبة!';
$lang['TOR_TYPE_LOG_ACTION'] = 'تم تغيير نوع التورنت إلى: %s';

$lang['TORRENT_STATUS'] = 'البحث حسب حالة الإصدار';
$lang['SEARCH_IN_FORUMS'] = 'البحث في المنتديات';
$lang['SELECT_CAT'] = 'اختر الفئة';
$lang['GO_TO_SECTION'] = 'انتقل إلى القسم';
$lang['TORRENTS_FROM'] = 'المشاركات من';
$lang['SHOW_ONLY'] = 'تظهر فقط';
$lang['SHOW_COLUMN'] = 'عرض العمود';
$lang['SEL_CHAPTERS'] = 'رابط أقسام محددة';
$lang['NOT_SEL_CHAPTERS'] = 'ليس هناك موضوعات مختارة';
$lang['SEL_CHAPTERS_HELP'] = 'يمكنك تحديد الحد الأقصى %s تقسيم.';
$lang['HIDE_CONTENTS'] = 'إخفاء محتويات {...}';
$lang['FILTER_BY_NAME'] = '<i>Filter بالاسم </i>';

$lang['BT_ONLY_ACTIVE'] = 'نشط';
$lang['BT_ONLY_MY'] = 'إصداراتي';
$lang['BT_SEED_EXIST'] = 'يوجد بززر.';
$lang['BT_ONLY_NEW'] = 'جديدة منذ آخر زيارة';
$lang['BT_SHOW_CAT'] = 'الفئة';
$lang['BT_SHOW_FORUM'] = 'المنتدى';
$lang['BT_SHOW_AUTHOR'] = 'الكاتب';
$lang['BT_SHOW_SPEED'] = 'السرعة';
$lang['SEED_NOT_SEEN'] = 'لا تظهر بززر.';
$lang['TITLE_MATCH'] = 'لا يوجد تطابق في العنوان.';
$lang['BT_USER_NOT_FOUND'] = 'لم يتم العثور على.';
$lang['DL_SPEED'] = 'السرعة الثاني.';

$lang['BT_DISREGARD'] = 'تجاهل';
$lang['BT_NEVER'] = 'أبدا';
$lang['BT_ALL_DAYS_FOR'] = 'في كل وقت';
$lang['BT_1_DAY_FOR'] = 'آخر يوم';
$lang['BT_3_DAY_FOR'] = 'آخر ثلاثة أيام';
$lang['BT_7_DAYS_FOR'] = 'الأسبوع الماضي';
$lang['BT_2_WEEKS_FOR'] = 'آخر أسبوعين';
$lang['BT_1_MONTH_FOR'] = 'الشهر الماضي';
$lang['BT_1_DAY'] = '1 يوم';
$lang['BT_3_DAYS'] = '3 أيام';
$lang['BT_7_DAYS'] = 'الأسبوع';
$lang['BT_2_WEEKS'] = '2 أسابيع';
$lang['BT_1_MONTH'] = 'الشهر';

$lang['DL_LIST_AND_TORRENT_ACTIVITY'] = 'DL-قائمة والنشاط.';
$lang['DLWILL'] = 'سيقوم بالتنزيل.';
$lang['DLDOWN'] = 'تحميل.';
$lang['DLCOMPLETE'] = 'كامل.';
$lang['DLCANCEL'] = 'إلغاء.';

$lang['DL_LIST_DEL'] = 'مسح قائمة DL.';
$lang['DL_LIST_DEL_CONFIRM'] = 'حذف قائمة DL لهذا الموضوع؟';
$lang['SHOW_DL_LIST'] = 'عرض قائمة DL.';
$lang['SET_DL_STATUS'] = 'تنزيل.';
$lang['UNSET_DL_STATUS'] = 'ليس تنزيل.';
$lang['TOPICS_DOWN_SETS'] = 'تغيرت حالة الموضوع إلى <b>تنزيل</b>.';
$lang['TOPICS_DOWN_UNSETS'] = 'حالة <b>تنزيل</b> تمت إزالتها.';

$lang['TOPIC_DL'] = 'DL.';

$lang['MY_DOWNLOADS'] = 'تنزيلات.';
$lang['SEARCH_DL_WILL'] = 'المخطط.';
$lang['SEARCH_DL_WILL_DOWNLOADS'] = 'تنزيلات المخطط.';
$lang['SEARCH_DL_DOWN'] = 'الحالي.';
$lang['SEARCH_DL_COMPLETE'] = 'الاكمال.';
$lang['SEARCH_DL_COMPLETE_DOWNLOADS'] = 'تم الانتهاء من التحميل.';
$lang['SEARCH_DL_CANCEL'] = 'ملغي.';
$lang['CUR_UPLOADS'] = 'التحميلات الحالية.';
$lang['SEARCH_RELEASES'] = 'الإصدارات.';
$lang['TOR_SEARCH_TITLE'] = 'بحث السيل خيارات.';
$lang['OPEN_TOPIC'] = 'فتح الموضوع.';

$lang['REG_NOT_ALLOWED_IN_THIS_FORUM'] = 'لا يمكن تسجيل سيل في هذا المنتدى.';
$lang['ALREADY_REG'] = 'سيل مسجل بالفعل.';
$lang['NOT_TORRENT'] = 'هذا الملف ليس تورنت.';
$lang['VIEWING_USER_BT_PROFILE'] = 'ملف تورنت';
$lang['CUR_ACTIVE_DLS'] = 'السيل النشط.';

$lang['TD_TRAF'] = 'اليوم';
$lang['YS_TRAF'] = 'أمس';
$lang['TOTAL_TRAF'] = 'مجموع';

$lang['USER_RATIO'] = 'نسبة';
$lang['MAX_SPEED'] = 'السرعة';
$lang['DOWNLOADED'] = 'تحميل';
$lang['UPLOADED'] = 'تحميل';
$lang['RELEASED'] = 'صدر';
$lang['BONUS'] = 'على نحو نادر';
$lang['IT_WILL_BE_DOWN'] = 'سيبدأ النظر فيه بعد تحميله';
$lang['SPMODE_FULL'] = 'تظهر أقرانهم في التفاصيل الكاملة';

// Seed Bonus
$lang['MY_BONUS'] = 'بلدي مكافأة (%s المكافآت في الأوراق المالية)';
$lang['BONUS_SELECT'] = 'حدد';
$lang['SEED_BONUS'] = 'مكافأة لزرع البذور';
$lang['EXCHANGE'] = 'تبادل';
$lang['EXCHANGE_BONUS'] = 'تبادل مكافآت الزرع';
$lang['BONUS_UPLOAD_DESC'] = '<b>%s إلى التوزيع</b> <br /> لتبادل نقاط المكافأة لك مع حركة مرور %1$s التي ستضاف إلى إجمالي التوزيع الخاص بك.';
$lang['BONUS_UPLOAD_PRICE'] = '<b class="%s">%s</b>';
$lang['PRICE'] = 'السعر';
$lang['EXCHANGE_NOT'] = 'تبادل غير متوفر';
$lang['BONUS_SUCCES'] = 'لك فمن بنجاح جند %s';
$lang['BONUS_NOT_SUCCES'] = '<span class="leech">لا توجد مكافآت متاحة. المزيد من الزرع!</span>';
$lang['BONUS_RETURN'] = 'ارجع إلى تبادل مكافآت الزرع';

$lang['TRACKER'] = 'تعقب';
$lang['RANDOM_RELEASE'] = 'إصدار عشوائي';
$lang['OPEN_TOPICS'] = 'فتح المواضيع';
$lang['OPEN_IN_SAME_WINDOW'] = 'تفتح في نفس النافذة';
$lang['SHOW_TIME_TOPICS'] = 'تظهر وقت إنشاء المواضيع';
$lang['SHOW_CURSOR'] = 'تسليط الضوء على التوالي تحت المؤشر';

$lang['BT_LOW_RATIO_FOR_DL'] = 'مع نسبة <b>%s</b> لا يمكنك تحميل التورنت.';
$lang['BT_RATIO_WARNING_MSG'] = 'إذا كانت نسبة مشروطة أقل من %s، لن تتمكن من تحميل ملفات التورنت! <a href="%s"><b>المزيد عن النسبة.</b></a>';

$lang['SEEDER_LAST_SEEN'] = 'لا يوجد بذور: <b>%s</b>';

$lang['NEED_TO_LOGIN_FIRST'] = 'تحتاج إلى تسجيل الدخول أولاً';
$lang['ONLY_FOR_MOD'] = 'هذا الخيار فقط للمشرفين';
$lang['ONLY_FOR_ADMIN'] = 'هذا الخيار فقط للمدراء';
$lang['ONLY_FOR_SUPER_ADMIN'] = 'هذا الخيار مخصص فقط لمدراء السوبر.';

$lang['LOGS'] = 'تاريخ الموضوع غير صالح.';
$lang['FORUM_LOGS'] = 'تاريخ المنتدى.';
$lang['AUTOCLEAN'] = 'تنظيف تلقائي.';
$lang['DESIGNER'] = 'مصمم';

$lang['LAST_IP'] = 'IP آخر:';
$lang['REG_IP'] = 'تسجيل الملكية الفكرية:';
$lang['OTHER_IP'] = 'الملكية الفكرية الأخرى:';
$lang['ALREADY_REG_IP'] = 'يوجد مستخدم %s مسجل بالفعل بعنوان IP الخاص بك. إذا لم تكن قد سجلت مسبقًا على متعقبنا، أرسل بريدًا إلى <a href="mailto:%s">المسؤول</a>';
$lang['HIDDEN'] = 'مخفي.';

// from admin
$lang['NOT_ADMIN'] = 'أنت غير مصرح لك بإدارة هذا المجلس';

$lang['SESSION_EXPIRED'] = 'الدورة انتهت';

// Sort memberlist per letter
$lang['POST_LINK'] = 'رابط آخر';
$lang['GOTO_QUOTED_POST'] = 'انتقل إلى نقلا عن بعد';
$lang['LAST_VISITED'] = 'آخر زيارة';
$lang['LAST_ACTIVITY'] = 'آخر نشاط';
$lang['NEVER'] = 'أبدا';

//mpd
$lang['DELETE_POSTS'] = 'حذف المشاركات المحددة.';
$lang['DELETE_POSTS_SUCCESFULLY'] = 'تمت إزالة المشاركات المحددة بنجاح.';
$lang['NO_POSTS_REMOVED'] = 'لم تتم إزالة أي مشاركات.';

//ts
$lang['TOPICS_ANNOUNCEMENT'] = 'إعلانات';
$lang['TOPICS_STICKY'] = 'المثبتة';
$lang['TOPICS_NORMAL'] = 'المواضيع';

//dpc
$lang['DOUBLE_POST_ERROR'] = 'لا يمكنك إنشاء منشور آخر بنفس النص الخاص بك.';

//upt
$lang['UPDATE_POST_TIME'] = 'تحديث وقت المنشور.';

$lang['TOPIC_SPLIT_NEW'] = 'موضوع جديد';
$lang['TOPIC_SPLIT_OLD'] = 'الموضوع القديم';
$lang['BOT_LEAVE_MSG_MOVED'] = 'أضف رسالة بوت تتعلق بالنقل.';
$lang['BOT_REASON_MOVED'] = 'سبب النقل';
$lang['BOT_AFTER_SPLIT_TO_OLD'] = 'أضف رسالة بوت حول تشغيل <b>الموضوع القديم</b>.';
$lang['BOT_AFTER_SPLIT_TO_NEW'] = 'أضف رسالة بوت حول التشغيل <b>موضوع جديد</b>.';
//qr
$lang['QUICK_REPLY'] = 'الرد السريع';
$lang['INS_NAME_TIP'] = 'إدراج اسم أو النص المحدد.';
$lang['QUOTE_SELECTED'] = 'اقتباس مختارة';
$lang['QR_NOTIFY'] = 'إخطار عند الرد.';
$lang['QR_USERNAME'] = 'اسم';
$lang['QR_FONT_SEL'] = 'خط الوجه.';
$lang['QR_COLOR_SEL'] = 'لون الخط';
$lang['QR_SIZE_SEL'] = 'حجم الخط';
$lang['COLOR_STEEL_BLUE'] = 'الفولاذ الأزرق';
$lang['COLOR_GRAY'] = 'الرمادي';
$lang['COLOR_DARK_GREEN'] = 'الأخضر الداكن';

// Short buttons
$lang['IP'] = 'IP';
$lang['POLL'] = 'استفتاء';
$lang['MODERATE'] = 'مشرف';
$lang['SEND_PM_SHORT'] = 'رسالة خاصة';
$lang['WEBSITE_SHORT'] = 'WWW';

$lang['DECLENSION']['REPLIES'] = ['رد', 'الردود'];
$lang['DECLENSION']['TIMES'] = ['الوقت', 'مرات'];
$lang['DECLENSION']['FILES'] = ['ملف', 'الملفات'];

$lang['AUTH_TYPES'][AUTH_ALL] = $lang['AUTH_ANONYMOUS_USERS'];
$lang['AUTH_TYPES'][AUTH_REG] = $lang['AUTH_REGISTERED_USERS'];
$lang['AUTH_TYPES'][AUTH_ACL] = $lang['AUTH_USERS_GRANTED_ACCESS'];
$lang['AUTH_TYPES'][AUTH_MOD] = $lang['AUTH_MODERATORS'];
$lang['AUTH_TYPES'][AUTH_ADMIN] = $lang['AUTH_ADMINISTRATORS'];

$lang['NEW_USER_REG_DISABLED'] = 'آسف التسجيل معطل في هذا الوقت';
$lang['ONLY_NEW_POSTS'] = 'الوظائف الجديدة فقط';
$lang['ONLY_NEW_TOPICS'] = 'فقط مواضيع جديدة';

$lang['TORHELP_TITLE'] = 'الرجاء المساعدة في توزيع هذه السيول!';
$lang['STATISTICS'] = 'الإحصاءات';
$lang['STATUS'] = 'حالة';
$lang['ACTION'] = 'العمل';
$lang['REASON'] = 'السبب';
$lang['COMMENT'] = 'التعليق';

// search
$lang['SEARCH_S'] = 'البحث عن...';
$lang['FORUM_S'] = 'على المنتدى';
$lang['TRACKER_S'] = 'على المتعقب';
$lang['HASH_S'] = 'قبل info_hash';

// copyright
$lang['NOTICE'] = '!الاهتمام!';
$lang['COPY'] = 'الموقع لا يقدم نسخًا إلكترونية من المنتجات، ويعمل فقط في جمع وتصنيف المراجع المرسلة والمنشورة في المنتدى من قبل قرائنا. إذا كنت المالك القانوني لأي من المواد المقدمة ولا ترغب في أن تكون المرجع في كتالوجنا، فاتصل بنا وسنقوم بإزالته على الفور. الملفات المتاحة للتبادل على المتعقب يتم تقديمها من قبل مستخدمي الموقع، والإدارة لا تتحمل المسؤولية عن محتواها. يرجى عدم تحميل ملفات محمية بموجب حقوق الطبع والنشر، أو ملفات تحتوي على محتوى غير قانوني!';

// FILELIST
$lang['COLLAPSE'] = 'انهيار الدليل';
$lang['EXPAND'] = 'توسيع';
$lang['SWITCH'] = 'التبديل';
$lang['TOGGLE_WINDOW_FULL_SIZE'] = 'زيادة/إنقاص النافذة';
$lang['EMPTY_TOPIC_ID'] = 'معرف الموضوع مفقود';
$lang['TOR_NOT_FOUND'] = 'الملف مفقود من الخادم';
$lang['ERROR_BUILD'] = 'محتوى هذا الملف التورنت لا يمكن أن يُنظر إليه على الموقع (لم يكن بالإمكان بناء قائمة الملفات) ';
$lang['TORFILE_INVALID'] = 'ملف التورنت تالف.';

// Profile
$lang['WEBSITE_ERROR'] = 'قد يحتوي "الموقع" فقط على http://sitename';
$lang['PROFILE_USER'] = 'عرض الملف الشخصي';
$lang['GOOD_UPDATE'] = 'بنجاح تغيرت';
$lang['UCP_DOWNLOADS'] = 'تنزيلات.';
$lang['HIDE_DOWNLOADS'] = 'إخفاء القائمة الحالية من التنزيلات على ملفك الشخصي';
$lang['BAN_USER'] = 'لمنع المستخدم';
$lang['USER_NOT_ALLOWED'] = 'لا يُسمح للمستخدمين.';
$lang['HIDE_AVATARS'] = 'عرض الصور الرمزية';
$lang['SHOW_CAPTION'] = 'عرض التوقيع الخاص بك';
$lang['DOWNLOAD_TORRENT'] = 'تحميل تورنت';
$lang['SEND_PM'] = 'إرسال رسالة خاصة.';
$lang['SEND_MESSAGE'] = 'إرسال رسالة';
$lang['NEW_THREADS'] = 'مواضيع جديدة';
$lang['PROFILE_NOT_FOUND'] = 'الملف غير موجود';

$lang['USER_DELETE_EXPLAIN'] = 'حذف هذا المستخدم';
$lang['USER_DELETE_ME'] = 'آسف، حسابك ممنوع من الحذف.';
$lang['USER_DELETE_CSV'] = 'آسف، هذا الحساب غير مسموح بحذفه.';
$lang['USER_DELETE_CONFIRM'] = 'هل أنت متأكد من أنك تريد حذف هذا المستخدم ؟ ';
$lang['USER_DELETED'] = 'تم حذف المستخدم بنجاح.';
$lang['DELETE_USER_ALL_POSTS'] = 'حذف جميع المشاركات الخاصة بك.';
$lang['DELETE_USER_ALL_POSTS_CONFIRM'] = 'هل أنت متأكد من أنك تريد حذف جميع الرسائل و جميع المواضيع بدأ من قبل هذا المستخدم ؟ ';
$lang['DELETE_USER_POSTS'] = 'احذف جميع الرسائل، باستثناء الرسائل الأولى';
$lang['DELETE_USER_POSTS_ME'] = 'هل أنت متأكد من أنك تريد حذف جميع مشاركاتي؟.';
$lang['DELETE_USER_POSTS_CONFIRM'] = 'هل أنت متأكد أنك تريد حذف جميع الرسائل، باستثناء الرسائل الأولى؟';
$lang['USER_DELETED_POSTS'] = 'تمت إزالة المشاركات بنجاح.';

$lang['USER'] = 'المستخدم.';
$lang['ROLE'] = 'الدور:';
$lang['MEMBERSHIP_IN'] = 'العضوية في';
$lang['PARTY'] = 'الطرف:';
$lang['CANDIDATE'] = 'المرشح:';
$lang['INDIVIDUAL'] = 'لديه الحقوق الفردية';
$lang['GROUP_LIST_HIDDEN'] = 'لا يحق لك عرض المجموعات المخفية';

$lang['USER_ACTIVATE'] = 'تفعيل';
$lang['USER_DEACTIVATE'] = 'إلغاء';
$lang['DEACTIVATE_CONFIRM'] = 'هل أنت متأكد أنك تريد تعطيل هذا المستخدم؟';
$lang['USER_ACTIVATE_ON'] = 'تم تنشيط المستخدم بنجاح.';
$lang['USER_DEACTIVATE_ME'] = 'لا يمكنك تعطيل حسابي!';
$lang['ACTIVATE_CONFIRM'] = 'هل أنت متأكد من أنك تريد تعطيل هذا المستخدم ؟ ';
$lang['USER_ACTIVATE_OFF'] = 'تم تعطيل المستخدم بنجاح.';

// Register
$lang['CHOOSE_A_NAME'] = 'يجب عليك أن تختار اسم';
$lang['CHOOSE_E_MAIL'] = 'يجب تحديد البريد الإلكتروني';
$lang['CHOOSE_PASS'] = 'حقل كلمة السر يجب أن لا تكون فارغة!';
$lang['CHOOSE_PASS_ERR'] = 'دخلت لا تتطابق كلمات المرور';
$lang['CHOOSE_PASS_ERR_MIN'] = 'يجب أن تكون كلمة المرور على الأقل %d حرفاً.';
$lang['CHOOSE_PASS_ERR_MAX'] = 'يجب أن تكون كلمة المرور الخاصة بك أقل من %d حرف';
$lang['CHOOSE_PASS_ERR_NUM'] = 'يجب أن تحتوي كلمة المرور على رقم واحد على الأقل';
$lang['CHOOSE_PASS_ERR_LETTER'] = 'يجب أن تحتوي كلمة المرور على حرف واحد على الأقل من الأبجدية اللاتينية';
$lang['CHOOSE_PASS_ERR_LETTER_UPPERCASE'] = 'يجب أن تحتوي كلمة المرور على حرف واحد على الأقل بحرف كبير من الأبجدية اللاتينية';
$lang['CHOOSE_PASS_ERR_SPEC_SYMBOL'] = 'يجب أن تحتوي كلمة المرور على رمز خاص واحد على الأقل';
$lang['CHOOSE_PASS_OK'] = 'تتطابق كلمات المرور';
$lang['CHOOSE_PASS_REG_OK'] = 'تتطابق كلمات المرور, يمكنك المضي قدما في التسجيل';
$lang['CHOOSE_PASS_FAILED'] = 'لتغيير كلمة المرور بشكل صحيح يجب تحديد كلمة المرور الحالية';
$lang['EMAILER_DISABLED'] = 'عذراً، هذه الميزة لا تعمل مؤقتاً.';
$lang['REGISTERED_IN_TIME'] = 'التسجيل مغلق حاليًا<br /><br />التسجيل متاح خلال: %s<br />الوقت الحالي للخادم: %s<br /><br />نعتذر عن الإزعاج';
$lang['AUTOCOMPLETE'] = 'إنشاء كلمة مرور';
$lang['YOUR_NEW_PASSWORD'] = 'كلمة المرور الجديدة الخاصة بك:';
$lang['REGENERATE'] = 'تجديد';

// Debug
$lang['EXECUTION_TIME'] = 'وقت التنفيذ:';
$lang['SEC'] = 'ثانية';
$lang['ON'] = 'على';
$lang['OFF'] = 'موقف.';
$lang['MEMORY'] = 'الذاكرة: ';
$lang['QUERIES'] = 'الاستفسارات';
$lang['SHOW_LOG'] = 'عرض السجل';
$lang['EXPLAINED_LOG'] = 'سجل موضح';
$lang['CUT_LOG'] = 'قطع الاستفسارات الطويلة';

// Attach Guest
$lang['DOWNLOAD_INFO'] = 'تحميل مجانا و في أقصى سرعة!';
$lang['HOW_TO_DOWNLOAD'] = 'كيفية التحميل ؟ ';
$lang['WHAT_IS_A_TORRENT'] = 'ما هو سيل ؟ ';
$lang['RATINGS_AND_LIMITATIONS'] = 'التقييم والقيود';

$lang['SCREENSHOTS_RULES'] = 'قراءة القواعد وضعت لقطات!';
$lang['AJAX_EDIT_OPEN'] = 'هل بالفعل فتحت واحد سريع التحرير!';
$lang['GO_TO_PAGE'] = 'الذهاب إلى الصفحة ...';
$lang['EDIT'] = 'تحرير';
$lang['SAVE'] = 'حفظ';
$lang['NEW_WINDOW'] = 'في نافذة جديدة';

// BB Code
$lang['ALIGN'] = 'محاذاة:';
$lang['LEFT'] = 'إلى اليسار';
$lang['RIGHT'] = 'إلى اليمين';
$lang['CENTER'] = 'مركَزَة';
$lang['JUSTIFY'] = 'تناسب العرض';
$lang['HOR_LINE'] = 'الخط الأفقي (Ctrl+8)';
$lang['NEW_LINE'] = 'خط جديد';
$lang['BOLD'] = 'نص عريض: [b]text[/b] (Ctrl+B)';
$lang['ITALIC'] = 'نص مائل: [i]text[/i] (Ctrl+I)';
$lang['UNDERLINE'] = 'تسطير النص: [u]النص[/u] (Ctrl+U)';
$lang['STRIKEOUT'] = 'نص محذوف: [s]النص[/s] (Ctrl+S)';
$lang['BOX_TAG'] = 'إطار حول النص: [box]text[/box] أو [box=#333,#888]text[/box]';
$lang['INDENT_TAG'] = 'إدراج مسافة بادئة: [indent]text[/indent]';
$lang['PRE_TAG'] = 'نص منسق مسبقًا: [pre]text[/pre]';
$lang['NFO_TAG'] = 'معلومات: [nfo]text[/nfo]';
$lang['SUPERSCRIPT'] = 'نص مرتفع: [sup]text[/sup]';
$lang['SUBSCRIPT'] = 'نص تحت: [sub]text[/sub]';
$lang['QUOTE_TITLE'] = 'اقتبس النص: [quote]text[/quote] (Ctrl+Q)';
$lang['IMG_TITLE'] = 'إدراج صورة: [img]https://image_url[/img] (Ctrl+R)';
$lang['URL'] = 'رابط';
$lang['URL_TITLE'] = 'إدخال عنوان URL: [url]https://url[/url] أو [url=https://url]نص عنوان URL[/url] (Ctrl+W)';
$lang['CODE_TITLE'] = 'عرض الكود: [code]code[/code] (Ctrl+K)';
$lang['LIST'] = 'قائمة';
$lang['LIST_TITLE'] = 'قائمة: [list]text[/list] (Ctrl+l)';
$lang['LIST_ITEM'] = 'أمر القائمة: [list=]text[/list] (Ctrl+O)';
$lang['ACRONYM'] = 'اختصار';
$lang['ACRONYM_TITLE'] = 'اختصار: [acronym=النص الكامل]النص القصير[/acronym]';
$lang['QUOTE_SEL'] = 'اقتباس مختار';
$lang['JAVASCRIPT_ON'] = 'يجب تمكين JavaScript لإرسال الرسائل';

$lang['NEW'] = 'جديد';
$lang['NEWEST'] = 'أحدث';
$lang['LATEST'] = 'أحدث';
$lang['POST'] = 'بعد';
$lang['OLD'] = 'القديمة';

// DL-List
$lang['DL_USER'] = 'اسم المستخدم';
$lang['DL_PERCENT'] = 'النسبة المئوية الكاملة';
$lang['DL_UL'] = 'UL';
$lang['DL_DL'] = 'DL.';
$lang['DL_UL_SPEED'] = 'UL السرعة';
$lang['DL_DL_SPEED'] = 'دل السرعة';
$lang['DL_PORT'] = 'ميناء';
$lang['DL_CLIENT'] = 'عميل BitTorrent';
$lang['DL_FORMULA'] = 'الصيغة: تم التحميل/TorrentSize';
$lang['DL_ULR'] = 'ULR';
$lang['DL_STOPPED'] = 'توقفت';
$lang['DL_UPD'] = 'تحديث الوقت: ';
$lang['DL_INFO'] = 'يظهر البيانات <i><b>فقط للجلسة الحالية</b></i>.';
$lang['HIDE_PEER_TORRENT_CLIENT'] = 'إخفاء اسم عميل BitTorrent الخاص بي في قائمة النظير';
$lang['HIDE_PEER_COUNTRY_NAME'] = 'إخفاء اسم بلدي في قائمة النظير';
$lang['HIDE_PEER_USERNAME'] = 'إخفاء اسم المستخدم الخاص بي في قائمة النظير';

// Post PIN
$lang['POST_PIN'] = 'دبوس المشاركة الأولى';
$lang['POST_UNPIN'] = 'إلغاء تثبيت المشاركة الأولى.';
$lang['POST_PINNED'] = 'تم تثبيت المشاركة الأولى.';
$lang['POST_UNPINNED'] = 'الأولى غير مثبتة.';

// Management of my messages
$lang['GOTO_MY_MESSAGE'] = 'إغلاق ورجوع إلى قائمة "الرسائل"';
$lang['DEL_MY_MESSAGE'] = 'موضوعات مختارة تم إزالتها من "الرسائل"';
$lang['NO_TOPICS_MY_MESSAGE'] = 'لا توجد مواضيع وجدت في قائمة الوظائف الخاصة بك (ربما لديك بالفعل إزالتها)';
$lang['EDIT_MY_MESSAGE_LIST'] = 'تحرير قائمة';
$lang['SELECT_INVERT'] = 'حدد / عكس';
$lang['RESTORE_ALL_POSTS'] = 'استعادة جميع المشاركات';
$lang['DEL_LIST_MY_MESSAGE'] = 'لحذف الموضوع المحدد من القائمة.';
$lang['DEL_LIST_MY_MESSAGE_INFO'] = 'بعد الإزالة حتى تحديث <b>القائمة كاملة</b>، قد تظهر المواضيع المحذوفة.';
$lang['DEL_LIST_INFO'] = 'لحذف أمر من القائمة، انقر على الأيقونة على اليسار من أسماء أي قسم.';

// Watched topics
$lang['WATCHED_TOPICS'] = 'شاهد المواضيع.';
$lang['NO_WATCHED_TOPICS'] = 'لا توجد مواضيع تمت مشاهدتها';

// set_die_append_msg
$lang['INDEX_RETURN'] = 'العودة إلى الصفحة الرئيسية';
$lang['FORUM_RETURN'] = 'العودة إلى المنتدى';
$lang['TOPIC_RETURN'] = 'عودة إلى الموضوع';
$lang['POST_RETURN'] = 'اذهب إلى الوظيفة.';
$lang['PROFILE_EDIT_RETURN'] = 'العودة إلى التحرير.';
$lang['PROFILE_RETURN'] = 'انتقل إلى الملف الشخصي';

$lang['INDEXER'] = 'Reindex البحث';
$lang['INDEXER_SUCCESS'] = 'تم تحديث فهرس البحث بنجاح';

$lang['FORUM_STYLE'] = 'ستايل المنتدى';

$lang['LINKS_ARE_FORBIDDEN'] = 'الروابط ممنوعة';

$lang['GENERAL'] = 'الادارة العامة';
$lang['USERS'] = 'المستخدم Admin';
$lang['GROUPS'] = 'مجموعة الادارة';
$lang['FORUMS'] = 'منتدى الادارة';
$lang['MODS'] = 'التعديلات';

$lang['CONFIGURATION'] = 'التكوين';
$lang['MANAGE'] = 'إدارة';
$lang['DISALLOW'] = 'عدم السماح بالأسماء.';
$lang['PRUNE'] = 'التقليم.';
$lang['MASS_EMAIL'] = 'البريد الإلكتروني الشامل';
$lang['RANKS'] = 'صفوف';
$lang['SMILIES'] = 'الابتسامات';
$lang['BAN_MANAGEMENT'] = 'حظر التحكم';
$lang['WORD_CENSOR'] = 'رقباء الكلمات';
$lang['CRON'] = 'جدولة المهام (كرون)';
$lang['REBUILD_SEARCH_INDEX'] = 'إعادة إنشاء فهرس البحث';
$lang['FORUM_CONFIG'] = 'إعدادات المنتدى';
$lang['ACTIONS_LOG'] = 'تقرير عن عمل';

// Migrations
$lang['MIGRATIONS_STATUS'] = 'حالة ترحيل قاعدة البيانات';
$lang['MIGRATIONS_DATABASE_NAME'] = 'اسم قاعدة البيانات';
$lang['MIGRATIONS_DATABASE_TOTAL'] = 'إجمالي الجداول';
$lang['MIGRATIONS_DATABASE_SIZE'] = 'حجم قاعدة البيانات';
$lang['MIGRATIONS_DATABASE_INFO'] = 'معلومات قاعدة البيانات';
$lang['MIGRATIONS_SYSTEM'] = 'نظام الترحيل';
$lang['MIGRATIONS_NEEDS_SETUP'] = 'يتطلب إعداد';
$lang['MIGRATIONS_ACTIVE'] = 'نشط';
$lang['MIGRATIONS_NOT_INITIALIZED'] = 'لم يتم تهيئته';
$lang['MIGRATIONS_UP_TO_DATE'] = 'محدثة بالكامل';
$lang['MIGRATIONS_PENDING_COUNT'] = 'معلق';
$lang['MIGRATIONS_APPLIED'] = 'الترحيلات المطبقة';
$lang['MIGRATIONS_PENDING'] = 'الترحيلات المعلقة';
$lang['MIGRATIONS_VERSION'] = 'الإصدار';
$lang['MIGRATIONS_NAME'] = 'اسم الترحيل';
$lang['MIGRATIONS_FILE'] = 'ملف الترحيل';
$lang['MIGRATIONS_APPLIED_AT'] = 'تم تطبيقه في';
$lang['MIGRATIONS_COMPLETED_AT'] = 'تم الانتهاء في';
$lang['MIGRATIONS_CURRENT_VERSION'] = 'الإصدار الحالي';
$lang['MIGRATIONS_NOT_APPLIED'] = 'لم يتم تطبيق أي ترحيلات';
$lang['MIGRATIONS_INSTRUCTIONS'] = 'تعليمات';
$lang['MIGRATIONS_SETUP_STATUS'] = 'حالة الإعداد';
$lang['MIGRATIONS_SETUP_GUIDE'] = 'انظر دليل الإعداد أدناه';
$lang['MIGRATIONS_ACTION_REQUIRED'] = 'الإجراء مطلوب';

// Index
$lang['MAIN_INDEX'] = 'مؤشر المنتدى';
$lang['FORUM_STATS'] = 'إحصائيات المنتدى';
$lang['ADMIN_INDEX'] = 'مؤشر المشرف';
$lang['CREATE_PROFILE'] = 'إنشاء ملف تعريف';

$lang['TP_VERSION'] = 'إصدار TorrentPier';
$lang['TP_RELEASE_DATE'] = 'تاريخ الإصدار';
$lang['PHP_INFO'] = 'معلومات عن PHP';

$lang['CLICK_RETURN_ADMIN_INDEX'] = 'انقر %sهنا%s للعودة إلى مؤشر المشرف';

$lang['NUMBER_POSTS'] = 'عدد المشاركات';
$lang['POSTS_PER_DAY'] = 'المشاركات لكل يوم';
$lang['NUMBER_TOPICS'] = 'عدد المواضيع';
$lang['TOPICS_PER_DAY'] = 'مواضيع يومية';
$lang['NUMBER_USERS'] = 'عدد المستخدمين';
$lang['USERS_PER_DAY'] = 'عدد المستخدمين يومياً';
$lang['BOARD_STARTED'] = 'مجلس الإدارة';
$lang['AVATAR_DIR_SIZE'] = 'حجم الدليل للصور الرمزية';
$lang['NOT_AVAILABLE'] = 'لا تتوفر';

// System information
$lang['ADMIN_SYSTEM_INFORMATION'] = 'معلومات النظام';
$lang['ADMIN_SYSTEM_OS'] = 'نظام التشغيل:';
$lang['ADMIN_SYSTEM_PHP_VER'] = 'PHP:';
$lang['ADMIN_SYSTEM_DATABASE_VER'] = 'قاعدة البيانات:';
$lang['ADMIN_SYSTEM_PHP_MEM_LIMIT'] = 'حد الذاكرة:';
$lang['ADMIN_SYSTEM_DISK_SPACE_INFO_TITLE'] = 'معلومات مساحة القرص:';
$lang['ADMIN_SYSTEM_DISK_SPACE_INFO'] = '%s (المستخدم: %s | حر: %s)';
$lang['ADMIN_SYSTEM_PHP_MAX_EXECUTION_TIME'] = 'الحد الأقصى لوقت التنفيذ:';

// Clear Cache
$lang['DATASTORE'] = 'مخزن البيانات';
$lang['CLEAR_CACHE'] = 'تخزين مؤقت';
$lang['CLEAR_TEMPLATES_CACHE'] = 'ذاكرة التخزين المؤقت للقوالب';

// Update
$lang['USER_LEVELS'] = 'مستويات المستخدم';
$lang['USER_LEVELS_UPDATED'] = 'مستويات المستخدم قد تم تحديثها';

// Synchronize
$lang['SYNCHRONIZE'] = 'مزامنة';
$lang['TOPICS_DATA_SYNCHRONIZED'] = 'تمت مزامنة بيانات المواضيع';
$lang['USER_POSTS_COUNT'] = 'عد مشاركاتك';
$lang['USER_POSTS_COUNT_SYNCHRONIZED'] = 'تمت مزامنة عد مشاركاتك';

// Online Userlist
$lang['SHOW_ONLINE_USERLIST'] = 'عرض قائمة المستخدمين المتواجدين على الانترنت';

// Robots.txt editor
$lang['ROBOTS_TXT_EDITOR_TITLE'] = 'إدارة robots.txt';
$lang['ROBOTS_TXT_UPDATED_SUCCESSFULLY'] = 'تم تحديث ملف robots.txt بنجاح';
$lang['CLICK_RETURN_ROBOTS_TXT_CONFIG'] = '%sانقر هنا للعودة إلى إدارة robots.txt%s';

// Auth pages
$lang['USER_SELECT'] = 'حدد المستخدم';
$lang['GROUP_SELECT'] = 'حدد مجموعة';
$lang['SELECT_A_FORUM'] = 'اختر منتدى';
$lang['AUTH_CONTROL_USER'] = 'التحكم في أذونات المستخدم';
$lang['AUTH_CONTROL_GROUP'] = 'التحكم في أذونات المجموعة';
$lang['AUTH_CONTROL_FORUM'] = 'التحكم في أذونات المنتدى';
$lang['LOOK_UP_FORUM'] = 'بحث المنتدى';

$lang['GROUP_AUTH_EXPLAIN'] = 'إيضاح أذونات المجموعة';
$lang['USER_AUTH_EXPLAIN'] = 'إيضاح أذونات المستخدم';
$lang['FORUM_AUTH_EXPLAIN'] = 'هنا يمكنك تغيير مستويات التفويض لجميع المنتديات. سيكون لديك طريقة بسيطة وأخرى متقدمة للقيام بذلك، حيث أن المتقدمة تمنح تحكمًا أكبر في كل عملية منتدى. تذكر أن تغيير مستوى الأذونات للمنتديات سيؤثر على أي المستخدمين يمكنهم القيام بالعمليات المختلفة داخلها.';

$lang['SIMPLE_MODE'] = 'طريقة بسيطة';
$lang['ADVANCED_MODE'] = 'الوضع المتقدم';
$lang['MODERATOR_STATUS'] = 'مشرف مركز';

$lang['PUBLIC'] = 'العامة';
$lang['PRIVATE'] = 'خاصة';
$lang['REGISTERED'] = 'مسجل';
$lang['ADMINISTRATORS'] = 'المسؤولون';

// These are displayed in the drop-down boxes for advanced mode forum auth, try and keep them short!
$lang['FORUM_ALL'] = 'كل';
$lang['FORUM_REG'] = 'REG';
$lang['FORUM_PRIVATE'] = 'خاصة';
$lang['FORUM_MOD'] = 'وزارة الدفاع';
$lang['FORUM_ADMIN'] = 'المشرف';

$lang['AUTH_VIEW'] = $lang['VIEW'] = 'عرض';
$lang['AUTH_READ'] = $lang['READ'] = 'قراءة';
$lang['AUTH_POST'] = $lang['POST'] = 'نشر';
$lang['AUTH_REPLY'] = $lang['REPLY'] = 'رد';
$lang['AUTH_EDIT'] = $lang['EDIT'] = 'تحرير';
$lang['AUTH_DELETE'] = $lang['DELETE'] = 'حذف';
$lang['AUTH_STICKY'] = $lang['STICKY'] = 'مثبت';
$lang['AUTH_ANNOUNCE'] = $lang['ANNOUNCE'] = 'تعلن';
$lang['AUTH_VOTE'] = $lang['VOTE'] = 'التصويت';
$lang['AUTH_POLLCREATE'] = $lang['POLLCREATE'] = 'إنشاء استطلاع';
$lang['AUTH_ATTACHMENTS'] = $lang['AUTH_ATTACH'] = 'نشر الملفات';
$lang['AUTH_DOWNLOAD'] = 'تحميل الملفات';

$lang['USER_LEVEL'] = 'مستوى المستخدم';
$lang['AUTH_USER'] = 'المستخدم';
$lang['AUTH_ADMIN'] = 'مسؤول';
$lang['FORUM_AUTH_UPDATED'] = 'تم تحديث أذونات المنتدى.';
$lang['APPLY_TO_SUBFORUMS'] = 'تطبيق على المنتديات الفرعية';

$lang['AUTH_UPDATED'] = 'أذونات تم تحديث';
$lang['AUTH_GENERAL_ERROR'] = 'لم يكن ممكنًا تحديث حالة المسؤول';
$lang['AUTH_SELF_ERROR'] = 'لا يمكن تغيير نفسك من مسؤول إلى مستخدم';
$lang['NO_FORUMS_AVAILABLE'] = 'لا توجد منتديات متاحة. أنشئ منتديات أولاً لإدارة الأذونات.';
$lang['CLICK_RETURN_USERAUTH'] = 'انقر %s هنا %s للعودة إلى أذونات المستخدم.';
$lang['CLICK_RETURN_GROUPAUTH'] = 'انقر %s هنا %s للعودة إلى أذونات المجموعة.';
$lang['CLICK_RETURN_FORUMAUTH'] = 'انقر %s هنا %s للعودة إلى أذونات المنتدى.';

// Banning
$lang['BAN_CONTROL'] = 'تحكم الحظر.';
$lang['BAN_EXPLAIN'] = 'هنا يمكنك التحكم في حظر المستخدمين.';
$lang['BAN_USERNAME'] = 'حظر مستخدمين معينين.';
$lang['UNBAN_USERNAME'] = 'إلغاء حظر واحد أو أكثر من المستخدمين المحددين';
$lang['UNBAN_USERNAME_EXPLAIN'] = 'رفع الحظر عن العديد من المستخدمين.';
$lang['NO_BANNED_USERS'] = 'لا توجد أسماء محظورة.';
$lang['BAN_UPDATE_SUCESSFUL'] = 'تم تحديث قائمة الحظر بنجاح.';
$lang['CLICK_RETURN_BANADMIN'] = 'انقر %s هنا %s للعودة إلى التحكم في الحظر.';

// Configuration
$lang['GENERAL_CONFIG'] = 'التكوين العام.';
$lang['CONFIG_EXPLAIN'] = 'سيتيح لك النموذج أدناه تخصيص جميع الخيارات العامة للمجلس. لاستخدام تكوينات المستخدم والمنتدى، استخدم الروابط ذات الصلة على الجانب الأيسر.';

$lang['CONFIG_MODS'] = 'تعديلات التكوين.';
$lang['MODS_EXPLAIN'] = 'هذا النموذج يسمح لك بضبط التعديلات.';

$lang['CLICK_RETURN_CONFIG'] = '%s انقر هنا للعودة إلى التكوين العام %s.';
$lang['CLICK_RETURN_CONFIG_MODS'] = '%s العودة إلى إعدادات التعديلات %s.';

$lang['GENERAL_SETTINGS'] = 'إعدادات المجلس العام.';
$lang['SITE_NAME'] = 'اسم الموقع.';
$lang['SITE_DESC'] = 'وصف الموقع.';
$lang['FORUMS_DISABLE'] = 'تعطيل المجلس.';
$lang['BOARD_DISABLE_EXPLAIN'] = 'وهذا سيجعل المجلس غير متاح للمستخدمين. يمكن للمسؤولين الوصول إلى لوحة الإدارة أثناء تعطيل المجلس.';
$lang['ACC_NONE'] = 'لا يوجد.';

$lang['ABILITIES_SETTINGS'] = 'إعدادات المنتدى الأساسية للمستخدم.';
$lang['MAX_POLL_OPTIONS'] = 'أقصى عدد من خيارات الاستطلاع';
$lang['FLOOD_INTERVAL'] = 'فاصل الفيضانات.';
$lang['FLOOD_INTERVAL_EXPLAIN'] = 'عدد الثواني يجب أن ينتظر المستخدم.';
$lang['TOPICS_PER_PAGE'] = 'المواضيع في الصفحة.';
$lang['POSTS_PER_PAGE'] = 'المشاركات في الصفحة.';
$lang['HOT_THRESHOLD'] = 'المشاركات الشعبية عتبة';
$lang['DEFAULT_LANGUAGE'] = 'اللغة الافتراضية';
$lang['DATE_FORMAT'] = 'تنسيق التاريخ';
$lang['SYSTEM_TIMEZONE'] = 'نظام التوقيت';
$lang['ENABLE_PRUNE'] = 'تمكين التقليم في المنتدى';
$lang['ALLOW_BBCODE'] = 'السماح بـ BBCode';
$lang['ALLOW_SMILIES'] = 'تسمح الابتسامات';
$lang['SMILIES_PATH'] = 'الابتسامات مسار التخزين';
$lang['SMILIES_PATH_EXPLAIN'] = 'المسار تحت دليل TorrentPier العام الخاص بك، مثلاً assets/images/smiles';
$lang['ALLOW_SIG'] = 'تسمح التوقيعات';
$lang['MAX_SIG_LENGTH'] = 'أقصى طول التوقيع';
$lang['MAX_SIG_LENGTH_EXPLAIN'] = 'الحد الأقصى لعدد الأحرف في مستخدم التوقيعات';
$lang['ALLOW_NAME_CHANGE'] = 'تسمح تغيير اسم المستخدم';

// Autologin Keys
$lang['ALLOW_AUTOLOGIN'] = 'يسمح تسجيل الدخول التلقائي';
$lang['ALLOW_AUTOLOGIN_EXPLAIN'] = 'يحدد ما إذا كان يُسمح للمستخدمين باختيار تسجيل الدخول تلقائيًا عند زيارة المنتدى.';
$lang['AUTOLOGIN_TIME'] = 'انتهاء صلاحية مفتاح تسجيل الدخول التلقائي';
$lang['AUTOLOGIN_TIME_EXPLAIN'] = 'مدة صلاحية مفتاح تسجيل الدخول التلقائي بالأيام إذا لم يزر المستخدم المنتدى. تحدد إلى صفر لتعطيل انتهاء الصلاحية.';

// Forum Management
$lang['FORUM_ADMIN_MAIN'] = 'منتدى الإدارة';
$lang['EDIT_FORUM'] = 'تحرير المنتدى';
$lang['CREATE_FORUM'] = 'إنشاء منتدى جديد';
$lang['CREATE_SUB_FORUM'] = 'إنشاء قسم فرعي';
$lang['CREATE_CATEGORY'] = 'إنشاء فئة جديدة';
$lang['REMOVE'] = 'إزالة';
$lang['CONFIG_UPDATED'] = 'منتدى التكوين تم تحديث بنجاح';
$lang['MOVE_UP'] = 'تحرك للأعلى';
$lang['MOVE_DOWN'] = 'تحرك لأسفل';
$lang['NO_MODE'] = 'لا يوجد وضع تم تعيينه.';
$lang['FORUM_EDIT_DELETE_EXPLAIN'] = 'سيتيح لك النموذج أدناه تخصيص جميع الخيارات العامة للمجلس. لاستخدام إعدادات المستخدم والمنتدى، استخدم الروابط ذات الصلة من الجانب الأيسر';

$lang['MOVE_CONTENTS'] = 'نقل كافة المحتويات.';
$lang['FORUM_DELETE'] = 'حذف المنتدى';
$lang['FORUM_DELETE_EXPLAIN'] = 'النموذج أدناه سيسمح لك بحذف منتدى (أو فئة) وتحديد المكان الذي تريد وضع فيه جميع المواضيع (أو المنتديات) التي يحتوي عليها.';
$lang['CATEGORY_DELETE'] = 'حذف الفئة';
$lang['CATEGORY_NAME_EMPTY'] = 'اسم الفئة غير محدد';

$lang['STATUS_LOCKED'] = 'مؤمن';
$lang['STATUS_UNLOCKED'] = 'مفتوحة.';
$lang['FORUM_SETTINGS'] = 'إعدادات المنتدى العامة.';
$lang['FORUM_NAME'] = 'اسم المنتدى';
$lang['FORUM_DESC'] = 'الوصف';
$lang['FORUM_STATUS'] = 'حالة المنتدى.';
$lang['FORUM_PRUNING'] = 'التقليم التلقائي.';

$lang['PRUNE_DAYS'] = 'إزالة المواضيع التي لم يتم نشرها في';

$lang['MOVE_AND_DELETE'] = 'نقل وحذف.';

$lang['DELETE_ALL_POSTS'] = 'حذف جميع المشاركات';
$lang['DELETE_ALL_TOPICS'] = 'حذف كل المواضيع بما في ذلك الإعلانات المثبتة.';
$lang['NOWHERE_TO_MOVE'] = 'لا يوجد مكان للتحويل.';

$lang['EDIT_CATEGORY'] = 'تحرير الفئة';
$lang['EDIT_CATEGORY_EXPLAIN'] = 'استخدام هذا النموذج لتعديل اسم الفئة.';

$lang['FORUMS_UPDATED'] = 'المنتدى الفئة المعلومات المحدثة بنجاح';

$lang['MUST_DELETE_FORUMS'] = 'تحتاج إلى حذف جميع المنتديات قبل أن تتمكن من حذف هذه الفئة';

$lang['CLICK_RETURN_FORUMADMIN'] = 'انقر فوق %sHere%s إلى العودة إلى إدارة المنتدى';

$lang['SHOW_ALL_FORUMS_ON_ONE_PAGE'] = 'عرض جميع المنتديات في صفحة واحدة.';

// Smiley Management
$lang['SMILEY_TITLE'] = 'أداة تحرير الرموز التعبيرية.';
$lang['SMILE_DESC'] = 'من هذه الصفحة يمكنك إضافة وإزالة وتحرير الرموز أو الوجوه التي يمكن للمستخدمين استخدامها في المشاركات و الرسائل الخاصة.';

$lang['SMILEY_CONFIG'] = 'تكوين الرموز التعبيرية.';
$lang['SMILEY_CODE'] = 'رمز الرموز التعبيرية.';
$lang['SMILEY_URL'] = 'صورة ملف الرموز التعبيرية.';
$lang['SMILEY_EMOT'] = 'شعور الرموز التعبيرية.';
$lang['SMILE_ADD'] = 'إضافة رمز تعبيري جديد.';
$lang['SMILE'] = 'ابتسامة.';
$lang['EMOTION'] = 'شعور.';

$lang['SELECT_PAK'] = 'حدد حزمة (.باك) الملف.';
$lang['REPLACE_EXISTING'] = 'استبدال الرموز التعبيرية الموجودة.';
$lang['KEEP_EXISTING'] = 'الحفاظ على الرموز التعبيرية الموجودة.';
$lang['SMILEY_IMPORT_INST'] = 'يجب عليك فك حزمة الرموز التعبيرية وتحميل جميع الملفات إلى الدليل المناسب.';
$lang['SMILEY_IMPORT'] = 'استيراد حزمة الرموز التعبيرية.';
$lang['CHOOSE_SMILE_PAK'] = 'اختر ملف الحزمة.';
$lang['IMPORT'] = 'استيراد الرموز التعبيرية.';
$lang['SMILE_CONFLICTS'] = 'ما ينبغي القيام به في حالة تعارض.';
$lang['DEL_EXISTING_SMILEYS'] = 'حذف الرموز التعبيرية الموجودة قبل الاستيراد.';
$lang['IMPORT_SMILE_PACK'] = 'استيراد حزمة الرموز التعبيرية.';
$lang['EXPORT_SMILE_PACK'] = 'إنشاء حزمة الرموز التعبيرية.';
$lang['EXPORT_SMILES'] = 'لإنشاء مبتسم حزمة من المثبتة حاليا الوجوه ، انقر فوق %sHere%s لتحميل الابتسامات.الملف pak. اسم هذا الملف بشكل مناسب والتأكد من الحفاظ على .باك امتداد الملف. ثم إنشاء ملف مضغوط يحتوي على جميع مبتسم الصور بالإضافة إلى هذا .باك ملف التكوين.';

$lang['SMILEY_ADD_SUCCESS'] = 'تمت إضافة الرموز التعبيرية بنجاح.';
$lang['SMILEY_EDIT_SUCCESS'] = 'تم تحديث الرموز التعبيرية بنجاح.';
$lang['SMILEY_IMPORT_SUCCESS'] = 'تم استيراد حزمة الرموز التعبيرية بنجاح!';
$lang['SMILEY_DEL_SUCCESS'] = 'تمت إزالة الرموز التعبيرية بنجاح.';
$lang['CLICK_RETURN_SMILEADMIN'] = 'انقر فوق %s هنا%s للعودة إلى إدارة الرموز التعبيرية.';

// User Management
$lang['USER_ADMIN'] = 'إدارة المستخدم.';
$lang['LOOK_UP_USER'] = 'ابحث عن المستخدم.';

// Group Management
$lang['GROUP_ADMINISTRATION'] = 'مجموعة الإدارة';
$lang['GROUP_ADMIN_EXPLAIN'] = 'من هذه اللوحة يمكنك إدارة جميع مجموعات المستخدمين. يمكنك حذف أو إنشاء وتحرير المجموعات الموجودة. يمكنك اختيار المشرفين، تبديل حالة المجموعة المفتوحة/المغلقة، وتعيين اسم المجموعة ووصفها.';
$lang['UPDATED_GROUP'] = 'المجموعة تم تحديث بنجاح';
$lang['ADDED_NEW_GROUP'] = 'المجموعة الجديدة تم إنشاؤها بنجاح';
$lang['DELETED_GROUP'] = 'تم حذف المجموعة بنجاح.';
$lang['CREATE_NEW_GROUP'] = 'إنشاء مجموعة جديدة';
$lang['EDIT_GROUP'] = 'تحرير مجموعة';
$lang['GROUP_STATUS'] = 'حالة المجموعة';
$lang['GROUP_DELETE'] = 'حذف المجموعة';
$lang['GROUP_DELETE_CHECK'] = 'حذف هذه المجموعة';
$lang['NO_GROUP_NAME'] = 'يجب تحديد اسم هذه المجموعة';
$lang['NO_GROUP_MODERATOR'] = 'يجب تحديد المشرف على هذه المجموعة';
$lang['NO_GROUP_ACTION'] = 'لا يوجد عمل محدد';
$lang['DELETE_OLD_GROUP_MOD'] = 'هل تريد حذف المشرف القديم على المجموعة؟';
$lang['DELETE_OLD_GROUP_MOD_EXPL'] = 'إذا كنت تقوم بتغيير مشرف المجموعة، حدد مربع الاختيار هذا لإزالة المشرف القديم من المجموعة. إذا لم تكن ترغب في ذلك، فلا تقم بتحديده وسيتحول المستخدم إلى عضو عادي في المجموعة.';
$lang['CLICK_RETURN_GROUPSADMIN'] = 'انقر فوق %sHere%s للعودة إلى فريق الإدارة.';
$lang['SELECT_GROUP'] = 'حدد مجموعة';
$lang['LOOK_UP_GROUP'] = 'ابحث عن المجموعة.';

// Prune Administration
$lang['FORUM_PRUNE'] = 'منتدى تقليم';
$lang['FORUM_PRUNE_EXPLAIN'] = 'سيؤدي هذا إلى حذف أي موضوع لم يتم نشره خلال عدد الأيام التي تحددها. إذا لم تدخل عددًا، فسيتم حذف جميع المواضيع. لن يتم إزالة المواضيع <b>المثبّتة</b> و<b>الإعلانات</b>. ستحتاج إلى إزالة تلك المواضيع يدويًا.';
$lang['DO_PRUNE'] = 'هل تقليم';
$lang['PRUNE_TOPICS_NOT_POSTED'] = 'تقليم المواضيع التي لم يتم الرد عليها خلال هذا العدد من الأيام.';
$lang['TOPICS_PRUNED'] = 'تم تقليم المواضيع.';
$lang['PRUNE_SUCCESS'] = 'تم تقليم المنتدى بنجاح.';
$lang['NOT_DAYS'] = 'لم يتم تحديد أيام التقليم.';

// Word censor
$lang['WORDS_TITLE'] = 'الرقابة على الكلمات.';
$lang['WORDS_EXPLAIN'] = 'من خلال لوحة التحكم هذه يمكنك إضافة وتحرير وإزالة الكلمات التي سيتم إخفاؤها تلقائيًا في المنتديات الخاصة بك.';
$lang['WORD'] = 'كلمة';
$lang['EDIT_WORD_CENSOR'] = 'تعديل كلمة الرقيب';
$lang['REPLACEMENT'] = 'استبدال';
$lang['ADD_NEW_WORD'] = 'إضافة كلمة جديدة';

$lang['MUST_ENTER_WORD'] = 'يجب عليك إدخال كلمة واستبدالها';
$lang['NO_WORD_SELECTED'] = 'لا توجد كلمة مختارة للتحرير.';

$lang['WORD_UPDATED'] = 'الكلمة المحددة الرقيب تم تحديث بنجاح';
$lang['WORD_ADDED'] = 'كلمة الرقيب تم إضافتها بنجاح';
$lang['WORD_REMOVED'] = 'الكلمة المحددة الرقيب تم إزالتها بنجاح ';

$lang['CLICK_RETURN_WORDADMIN'] = 'انقر فوق %sهنا%s للعودة إلى إدارة الرقابة على الكلمات.';

// Mass Email
$lang['MASS_EMAIL_EXPLAIN'] = 'هنا يمكنك إرسال رسالة إلى جميع مستخدميك أو إلى جميع مستخدمي مجموعة معينة.';
$lang['COMPOSE'] = 'يؤلف';

$lang['RECIPIENTS'] = 'المستفيدين';
$lang['ALL_USERS'] = 'جميع المستخدمين';

$lang['MASS_EMAIL_MESSAGE_TYPE'] = 'نوع البريد الإلكتروني';

// Ranks admin
$lang['RANKS_TITLE'] = 'رتبة الإدارة';
$lang['RANKS_EXPLAIN'] = 'باستخدام هذا النموذج يمكنك إضافة، تحرير، عرض وحذف الرتب.';

$lang['ADD_NEW_RANK'] = 'إضافة رتبة جديدة';
$lang['RANK_TITLE'] = 'عنوان الرتبة.';
$lang['STYLE_COLOR'] = 'أسلوب الرتبة.';
$lang['STYLE_COLOR_FAQ'] = 'حدد فئة لتصميم العنوان باللون المطلوب. على سبيل المثال: <i class="bold">colorAdmin</i>';
$lang['RANK_IMAGE'] = 'صورة الرتبة.';
$lang['RANK_IMAGE_EXPLAIN'] = 'استخدم هذا لتعريف صورة صغيرة مرتبطة بالرتبة.';

$lang['MUST_SELECT_RANK'] = 'يجب تحديد رتبة';

$lang['RANK_UPDATED'] = 'رتبة تم تحديث بنجاح';
$lang['RANK_ADDED'] = 'رتبة تم إضافتها بنجاح';
$lang['RANK_REMOVED'] = 'رتبة قد تم حذفه بنجاح';
$lang['NO_UPDATE_RANKS'] = 'رتبة قد تم حذفه بنجاح. بيد أن حسابات المستخدمين باستخدام هذه رتبة لم يتم تحديثها. سوف تحتاج إلى إعادة تعيين يدويا رتبة على هذه الحسابات';

$lang['CLICK_RETURN_RANKADMIN'] = 'انقر فوق %sهنا%s للعودة إلى إدارة الرتبة.';

// Disallow Username Admin
$lang['DISALLOW_CONTROL'] = 'تحكم بعدم السماح باسم المستخدم.';
$lang['DISALLOW_EXPLAIN'] = 'هنا يمكنك التحكم في أسماء المستخدمين التي لا يُسمح باستخدامها.';

$lang['DELETE_DISALLOW_TITLE'] = 'إزالة اسم المستخدم غير مسموح';
$lang['DELETE_DISALLOW_EXPLAIN'] = 'يمكنك إزالة اسم المستخدم غير المسموح به عن طريق اختيار الاسم من هذه القائمة والنقر فوق إرسال.';

$lang['ADD_DISALLOW'] = 'إضافة';
$lang['ADD_DISALLOW_TITLE'] = 'إضافة اسم المستخدم غير مسموح';

$lang['NO_DISALLOWED'] = 'لا غير مسموح أسماء المستخدمين';

$lang['DISALLOWED_DELETED'] = 'تمت إزالة اسم المستخدم غير المسموح به بنجاح.';
$lang['DISALLOW_SUCCESSFUL'] = 'تم إضافة اسم مستخدم غير مسموح به بنجاح.';
$lang['DISALLOWED_ALREADY'] = 'لا يمكن عدم السماح بالاسم الذي أدخلته. قد يكون موجودًا بالفعل في القائمة، أو موجودًا في قائمة الرقابة بالكلمات، أو قد يكون اسم مستخدم مطابق موجودًا.';

$lang['CLICK_RETURN_DISALLOWADMIN'] = 'انقر فوق %sهنا%s للعودة إلى إدارة عدم السماح بأسماء المستخدمين.';

// Version Check
$lang['VERSION_INFORMATION'] = 'معلومات الإصدار';
$lang['UPDATE_AVAILABLE'] = 'تحديث متاح';
$lang['CHANGELOG'] = 'سجل التغيير';

// Login attempts configuration
$lang['MAX_LOGIN_ATTEMPTS'] = 'محاولات تسجيل الدخول المسموح بها';
$lang['MAX_LOGIN_ATTEMPTS_EXPLAIN'] = 'عدد محاولات تسجيل الدخول المسموح بها من قبل المجلس.';
$lang['LOGIN_RESET_TIME'] = 'وقت قفل تسجيل الدخول';
$lang['LOGIN_RESET_TIME_EXPLAIN'] = 'الوقت بالدقائق الذي يجب على المستخدم الانتظار حتى يُسمح له بتسجيل الدخول مرة أخرى بعد تجاوز العدد المسموح به من محاولات تسجيل الدخول.';

// Permissions List
$lang['PERMISSIONS_LIST'] = 'قائمة الأذونات';
$lang['AUTH_CONTROL_CATEGORY'] = 'الفئة أذونات التحكم';
$lang['FORUM_AUTH_LIST_EXPLAIN'] = 'هذا يوفر ملخصًا لمستويات التفويض لكل منتدى. يمكنك تحرير هذه الأذونات، باستخدام إما طريقة بسيطة أو متقدمة من خلال النقر على اسم المنتدى. تذكر أن تغيير مستوى الإذن من المنتديات سيؤثر على من يمكنهم إجراء العمليات المختلفة داخلها.';
$lang['CAT_AUTH_LIST_EXPLAIN'] = 'هذا يوفر ملخصًا لمستويات التفويض لكل منتدى داخل هذه الفئة. يمكنك تحرير أذونات المنتديات الفردية، باستخدام إما طريقة بسيطة أو متقدمة من خلال النقر على اسم المنتدى. بدلاً من ذلك، يمكنك تعيين الأذونات لجميع المنتديات في هذه الفئة باستخدام القوائم المنسدلة في أسفل الصفحة. تذكر أن تغيير مستوى الإذن من المنتديات سيؤثر على من يمكنهم إجراء العمليات المختلفة داخلها.';
$lang['FORUM_AUTH_LIST_EXPLAIN_ALL'] = 'جميع المستخدمين';
$lang['FORUM_AUTH_LIST_EXPLAIN_REG'] = 'جميع المستخدمين المسجلين';
$lang['FORUM_AUTH_LIST_EXPLAIN_PRIVATE'] = 'فقط المستخدمون الذين مُنحوا إذنًا خاصًا';
$lang['FORUM_AUTH_LIST_EXPLAIN_MOD'] = 'فقط مشرفي هذا المنتدى';
$lang['FORUM_AUTH_LIST_EXPLAIN_ADMIN'] = 'فقط المسؤولون';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_VIEW'] = '%s يمكن عرض هذا المنتدى';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_READ'] = '%s يمكن قراءة المشاركات في هذا المنتدى';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_POST'] = 'يتمكن %s من المشاركة في هذا المنتدى.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_REPLY'] = '%s يمكنه الرد على المشاركات في هذا المنتدى';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_EDIT'] = 'يستطيع %s تعديل مشاركاته في هذا المنتدى.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_DELETE'] = '%s يمكن حذف المشاركات في هذا المنتدى';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_STICKY'] = '%s يمكن نشر المواضيع المثبتة في هذا المنتدى';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_ANNOUNCE'] = '%s يمكن نشر إعلانات في هذا المنتدى';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_VOTE'] = 'يمكن لـ %s التصويت في استطلاعات الرأي في هذا المنتدى.';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_POLLCREATE'] = '%s يمكن إنشاء استطلاعات الرأي في هذا المنتدى';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_ATTACHMENTS'] = '%s يمكن إضافة مرفقات';
$lang['FORUM_AUTH_LIST_EXPLAIN_AUTH_DOWNLOAD'] = '%s يمكن تحميل المرفقات';

// Tooltips for disabled permissions
$lang['AUTH_TOOLTIP_FORUM_MODE'] = 'وضع المنتدى: %s — لا يمكن تغييره';
$lang['AUTH_TOOLTIP_MOD_OVERRIDE'] = 'الإذن مفعل عبر "المشرف"';
$lang['AUTH_TOOLTIP_GROUP_HAS'] = 'الإذن ممنوح بواسطة المجموعة';

// Misc
$lang['SF_SHOW_ON_INDEX'] = 'تظهر على الصفحة الرئيسية';
$lang['SF_PARENT_FORUM'] = 'المنتدى الأم';
$lang['SF_NO_PARENT'] = 'لا يوجد منتدى أم.';
$lang['SYNC'] = 'المزامنة';

// Mods
$lang['MAX_NEWS_TITLE'] = 'ماكس. طول الأخبار';
$lang['NEWS_COUNT'] = 'عدد الأخبار المراد عرضه';
$lang['NEWS_FORUM_ID'] = 'من أي منتديات لعرض <br /> <h6>لعدة منتديات، حدد المعرفات مفصولة بفواصل. مثال: 1,2,3</h6>';
$lang['TRACKER_STATS'] = 'إحصائيات حول المتعقب.';
$lang['WHOIS_INFO'] = 'معلومات عن عنوان IP';
$lang['SHOW_MOD_HOME_PAGE'] = 'تظهر على المشرفين في index.php.';
$lang['SHOW_BOARD_STARTED_INDEX'] = 'عرض تاريخ بدء اللوحة على index.php';
$lang['PREMOD_HELP'] = '<h4><span class="tor-icon tor-dup">&#8719;</span> قبل المراجعة</h4> <h6>إذا لم يكن لديك توزيع للحالة  v و # أو T في هذا القسم، بما في ذلك الأقسام الفرعية، ستتلقى التوزيع تلقائيًا هذه الحالة</h6>';
$lang['TOR_COMMENT'] = '<h4>تعليق على حالة التوزيع</h4> <h6>يمكنك استخدام التعليق للإشارة إلى الأخطاء التي ارتكبها المُحرر. إذا كانت الحالات غير مكتملة، يتوفر نموذج استجابة للإصدار لمدير الإصدار لتصحيح الإصدار.</h6>';
$lang['SEED_BONUS_ADD'] = '<h4>إضافة مكافأة البذور</h4> <h6>عدد التوزيعات المُقدمة من قبل المستخدم وحجم المكافآت لها (شحن مرات كل ساعة)</h6>';
$lang['SEED_BONUS_RELEASE'] = 'إلى N عدد الإصدارات.';
$lang['SEED_BONUS_POINTS'] = 'المكافآت في الساعة.';
$lang['SEED_BONUS_TOR_SIZE'] = '<h4>حد أدنى للتوزيع الذي سيتم منح المكافآت عليه</h4> <h6>إذا كنت تريد حساب المكافآت لجميع التوزيعات، اترك حقل المدخلات فارغًا.</h6>';
$lang['SEED_BONUS_USER_REGDATA'] = '<h4>الحد الأدنى لطول المستخدم للمتعقب، بعد ذلك ستمنح المكافآت</h4> <h6>إذا كنت ترغب في إضافة المكافآت لجميع المستخدمين، اترك حقل المدخلات فارغًا.</h6>';
$lang['SEED_BONUS_WARNING'] = 'الاهتمام! البذور المكافآت يجب أن تكون في ترتيب تصاعدي';
$lang['SEED_BONUS_EXCHANGE'] = 'تكوين Exchange سيد المكافآت';
$lang['SEED_BONUS_ROPORTION'] = 'نسبة الإضافة إلى تبادل المكافآت على GB.';

$lang['ALLOWED'] = 'مسموح.';
$lang['RETURN_CONFIG'] = '%sالعودة إلى التكوين%s';
$lang['CONFIG_UPD'] = 'التكوين تحديث بنجاح';

// Forum config
$lang['BT_SELECT_FORUMS'] = 'المنتدى خيارات:';
$lang['BT_SELECT_FORUMS_EXPL'] = 'اضغط باستمرار <i>Ctrl</i> حين اختيار عدة منتديات';

$lang['REG_TORRENTS'] = 'سجل السيول';
$lang['DISALLOWED'] = 'يحظر';
$lang['ALLOW_REG_TRACKER'] = 'يسمح المنتديات بالتسجيل على .التورنت على المتعقب.';
$lang['ALLOW_PORNO_TOPIC'] = 'السماح بنشر محتوى 18+';
$lang['SELF_MODERATED'] = 'يمكن للمستخدمين <b>نقل</b> مواضيعهم إلى منتدى آخر.';

$lang['BT_ANNOUNCE_URL_HEAD'] = 'أعلن عن عنوان URL.';
$lang['BT_ANNOUNCE_URL'] = 'أعلن عن عنوان URL.';
$lang['BT_ANNOUNCE_URL_EXPL'] = 'يمكنك تعيين المزيد من عناوين URL المسموح بها في "includes/torrent_announce_urls.php".';
$lang['BT_DISABLE_DHT'] = 'تعطيل شبكة DHT';
$lang['BT_DISABLE_DHT_EXPL'] = 'تعطيل تبادل الأقران و DHT (موصى به للشبكات الخاصة ، فقط URL تعلن).';
$lang['BT_PRIVATE_TRACKER'] = 'هذا المتعقب خاص: قائمة الملفات (للضيوف)، DHT | PEX معطلة';
$lang['BT_PRIVATE_TORRENT'] = 'قام منشئ هذا التورنت بجعله خاصاً';
$lang['BT_CHECK_ANNOUNCE_URL'] = 'تحقق من عنوان URL.';
$lang['BT_CHECK_ANNOUNCE_URL_EXPL'] = 'التسجيل في المتعقب مسموح فقط لعناوين URL.';
$lang['BT_REPLACE_ANN_URL'] = 'قم باستبدال عنوان URL الذي أعلن عنه.';
$lang['BT_REPLACE_ANN_URL_EXPL'] = 'استبدال عنوان URL الأصلي مع الافتراضي لديك في ملفات التورنت.';
$lang['BT_DEL_ADDIT_ANN_URLS'] = 'إزالة جميع عناوين الإعلان الإضافية.';
$lang['BT_DEL_ADDIT_ANN_URLS_EXPL'] = 'إذا كان التورنت يحتوي على عنوانه من متتبعين آخرين ، فسيتم إزالتها.';

$lang['BT_SHOW_PEERS_HEAD'] = 'قائمة الأقران.';
$lang['BT_SHOW_PEERS'] = 'إظهار الأقران (المغذيات و المقتحمين).';
$lang['BT_SHOW_PEERS_EXPL'] = 'هذا سوف يظهر قائمة البذور/المقتحمين فوق الموضوع.';
$lang['BT_SHOW_PEERS_MODE'] = 'افتراضي عرض الأقران كالتالي:';
$lang['BT_SHOW_PEERS_MODE_COUNT'] = 'العد فقط';
$lang['BT_SHOW_PEERS_MODE_NAMES'] = 'أسماء فقط';
$lang['BT_SHOW_PEERS_MODE_FULL'] = 'التفاصيل الكاملة';
$lang['BT_ALLOW_SPMODE_CHANGE'] = 'تسمح بوضع "التفاصيل الكاملة".';
$lang['BT_ALLOW_SPMODE_CHANGE_EXPL'] = 'إذا كان "لا" ، فقط الوضع الافتراضي لعرض الأقران سيكون متاحاً.';
$lang['BT_SHOW_IP_ONLY_MODER'] = 'IP للأقران مرئية للمشرفين فقط.';
$lang['BT_SHOW_PORT_ONLY_MODER'] = 'الموانئ للأقران مرئية للمشرفين فقط.';

$lang['BT_SHOW_DL_LIST_HEAD'] = 'DL-قائمة.';
$lang['BT_SHOW_DL_LIST'] = 'إظهار DL-قائمة في مواضيع التحميل.';
$lang['BT_DL_LIST_ONLY_1ST_PAGE'] = 'إظهار DL-قائمة فقط في الصفحة الأولى في المواضيع.';
$lang['BT_DL_LIST_ONLY_COUNT'] = 'إظهار فقط عدد المستخدمين.';
$lang['BT_SHOW_DL_LIST_BUTTONS'] = 'إظهار أزرار لتغيير حالة DL يدوياً.';
$lang['BT_SHOW_DL_BUT_WILL'] = $lang['DLWILL'];
$lang['BT_SHOW_DL_BUT_DOWN'] = $lang['DLDOWN'];
$lang['BT_SHOW_DL_BUT_COMPL'] = $lang['DLCOMPLETE'];
$lang['BT_SHOW_DL_BUT_CANCEL'] = $lang['DLCANCEL'];

$lang['BT_ADD_AUTH_KEY_HEAD'] = 'مفتاح المرور.';
$lang['BT_ADD_AUTH_KEY'] = 'تمكين إضافة مفتاح المرور إلى ملفات التورنت قبل التحميل.';

$lang['BT_TOR_BROWSE_ONLY_REG_HEAD'] = 'استعراض التورنت (المتعقب).';
$lang['BT_TOR_BROWSE_ONLY_REG'] = 'مجموعة التورنت (tracker.php) متاحة فقط للمستخدمين الذين قاموا بتسجيل الدخول';
$lang['BT_SEARCH_BOOL_MODE'] = 'تسمح بحث نص كامل منطقي.';
$lang['BT_SEARCH_BOOL_MODE_EXPL'] = 'استخدم *, +, - في البحث';

$lang['BT_SHOW_DL_STAT_ON_INDEX_HEAD'] = 'متنوعة.';
$lang['BT_SHOW_DL_STAT_ON_INDEX'] = "عرض إحصائيات UL/DL في أعلى الصفحة الرئيسية للمنتدى";
$lang['BT_NEWTOPIC_AUTO_REG'] = 'تسجيل سيل تلقائياً على المتعقب للمواضيع الجديدة.';
$lang['BT_SET_DLTYPE_ON_TOR_REG'] = 'تغيير حالة الموضوع إلى "تحميل" عند تسجيل سيل على المتعقب.';
$lang['BT_SET_DLTYPE_ON_TOR_REG_EXPL'] = 'سيتم تغيير نوع الموضوع إلى "تحميل" بغض النظر عن إعدادات المنتدى.';
$lang['BT_UNSET_DLTYPE_ON_TOR_UNREG'] = 'تغيير حالة الموضوع إلى "عادي" أثناء إلغاء تسجيل سيل من المتعقب.';

// Release
$lang['TEMPLATE_DISABLE'] = 'قالب معاق.';
$lang['FOR_NEW_TEMPLATE'] = 'أنماط جديدة!';
$lang['QUESTION'] = 'تأكيد هل أنت متأكد أنك تريد تنفيذ هذا الإجراء';

$lang['CRON_LIST'] = 'قائمة كرون.';
$lang['CRON_ID'] = 'معرف';
$lang['CRON_ACTIVE'] = 'على';
$lang['CRON_ACTIVE_EXPL'] = 'المهام النشطة';
$lang['CRON_TITLE'] = 'العنوان';
$lang['CRON_SCRIPT'] = 'السيناريو';
$lang['CRON_SCHEDULE'] = 'جدول';
$lang['CRON_LAST_RUN'] = 'تشغيل المقبل.';
$lang['CRON_NEXT_RUN'] = 'يعمل.';
$lang['CRON_RUN_COUNT'] = 'إدارة.';
$lang['CRON_EXECUTION_TIME'] = 'وقت التنفيذ';
$lang['CRON_MANAGE'] = 'تحذير! التشغيل مهمة cron تم تعطيله.';
$lang['CRON_DISABLED_WARNING'] = 'هل أنت متأكد أنك تريد حذف عمل كرون؟.';

$lang['CRON_ENABLED'] = 'كرون تمكين.';
$lang['CRON_CHECK_INTERVAL'] = 'التحقق من كرون الفاصل.';

$lang['WITH_SELECTED'] = 'مع الاختيار.';
$lang['NOTHING'] = 'لا تفعل شيئاً.';
$lang['CRON_RUN'] = 'تشغيل';
$lang['CRON_DEL'] = 'حذف';
$lang['CRON_DISABLE'] = 'تعطيل.';
$lang['CRON_ENABLE'] = 'تمكين.';
$lang['DELETE_JOB'] = 'هل أنت متأكد أنك تريد حذف مهمة كرون؟.';
$lang['CRON_WORKS'] = 'المهمة تعمل حاليًا أو معطلة -> ';
$lang['REPAIR_CRON'] = 'إصلاح كرون.';

$lang['CRON_EDIT_HEAD_EDIT'] = 'تحرير العمل.';
$lang['CRON_EDIT_HEAD_ADD'] = 'إضافة وظيفة';
$lang['CRON_SCRIPT_EXPL'] = 'اسم البرنامج النصي من "includes/cron/وظائف/"';
$lang['SCHEDULE'] = [
    'select' => '&raquo; حدد بدء',
    'hourly' => 'كل ساعة',
    'daily' => 'يوميا',
    'weekly' => 'الأسبوعية',
    'monthly' => 'الشهري',
    'interval' => 'الفاصل',
];
$lang['NOSELECT'] = 'لاختيار';
$lang['RUN_DAY'] = 'تشغيل اليوم';
$lang['RUN_DAY_EXPL'] = 'اليوم عند تشغيل هذه الوظيفة';
$lang['RUN_TIME'] = 'وقت التشغيل';
$lang['RUN_TIME_EXPL'] = 'الوقت عند تشغيل وظيفة (على سبيل المثال 05:00:00)';
$lang['RUN_ORDER'] = 'ترتيب التشغيل';
$lang['LAST_RUN'] = 'آخر تشغيل';
$lang['NEXT_RUN'] = 'تشغيل المقبل';
$lang['RUN_INTERVAL'] = 'فاصل التشغيل';
$lang['RUN_INTERVAL_EXPL'] = 'على سبيل المثال 00:10:00';
$lang['LOG_ENABLED'] = 'تمكين السجل';
$lang['LOG_FILE'] = 'ملف السجل';
$lang['LOG_FILE_EXPL'] = 'ملف لحفظ السجل';
$lang['LOG_SQL_QUERIES'] = 'سجل استعلامات SQL';
$lang['FORUM_DISABLE'] = 'تعطيل المجلس';
$lang['BOARD_DISABLE_EXPL'] = 'تعطيل المنتدى عند تشغيل هذه المهمة';
$lang['RUN_COUNTER'] = 'تشغيل العداد';

$lang['JOB_REMOVED'] = 'تمت إزالة المهمة بنجاح';
$lang['SCRIPT_DUPLICATE'] = 'وصف طابور كرون مع هذا السكريبت موجود بالفعل';
$lang['TITLE_DUPLICATE'] = 'وصف طابور كرون بنفس العنوان موجود بالفعل';
$lang['CLICK_RETURN_JOBS_ADDED'] = '%sعد إلى إضافة المهمة%s';
$lang['CLICK_RETURN_JOBS'] = '%sعودة إلى جدولة المهام%s';

$lang['REBUILD_SEARCH'] = 'إعادة إنشاء فهرس البحث';
$lang['REBUILD_SEARCH_DESC'] = 'تقوم هذه الوحدة بفهرسة كل مشاركة في منتداك، وإعادة بناء جداول البحث. يمكنك التوقف عندما تشاء وعند تشغيله مرة أخرى سيكون لديك خيار الاستمرار من حيث توقفت.<br /><br />قد يستغرق الأمر وقتًا طويلًا لإظهار تقدمه (حسب "المشاركات لكل دورة" و "حد الوقت")، لذا يرجى عدم الانتقال من صفحة تقدمه حتى يكتمل، ما لم تكن بالطبع تريد المقاطعة.';

// Input screen
$lang['STARTING_POST_ID'] = 'بداية post_id';
$lang['STARTING_POST_ID_EXPLAIN'] = 'أول مشاركة حيث ستبدأ المعالجة<br />يمكنك اختيار البدء من البداية أو من المشاركة التي توقفت عندها آخر مرة.';

$lang['START_OPTION_BEGINNING'] = 'تبدأ من البداية';
$lang['START_OPTION_CONTINUE'] = 'استمر من آخر توقف لك';

$lang['CLEAR_SEARCH_TABLES'] = 'البحث واضحة الجداول';
$lang['CLEAR_SEARCH_TABLES_EXPLAIN'] = '';
$lang['CLEAR_SEARCH_NO'] = 'لا';
$lang['CLEAR_SEARCH_DELETE'] = 'حذف';
$lang['CLEAR_SEARCH_TRUNCATE'] = 'اقتطاع';

$lang['NUM_OF_POSTS'] = 'عدد المشاركات';
$lang['NUM_OF_POSTS_EXPLAIN'] = 'عدد المشاركات الإجمالية للمعالجة<br />يتم تعبئته تلقائيًا بعدد المشاركات الإجمالية/المتبقية الموجودة في قاعدة البيانات.';

$lang['POSTS_PER_CYCLE'] = 'المشاركات في دورة';
$lang['POSTS_PER_CYCLE_EXPLAIN'] = 'عدد المشاركات المعالجة في الدورة<br />احتفظ به منخفضًا لتفادي وقت المهلة في php/خادم الويب.';

$lang['REFRESH_RATE'] = 'معدل تحديث';
$lang['REFRESH_RATE_EXPLAIN'] = 'كم من الوقت (ثوانٍ) يجب البقاء خاملاً قبل الانتقال إلى دورة المعالجة التالية<br />عادةً لا تحتاج إلى تغيير هذا.';

$lang['TIME_LIMIT'] = 'المهلة';
$lang['TIME_LIMIT_EXPLAIN'] = 'كم من الزمن (ثواني) يمكن أن تستمر المعالجة بعد المشاركة قبل الانتقال إلى الدورة التالية';
$lang['TIME_LIMIT_EXPLAIN_WEBSERVER'] = '<i>لقد قام خادم الويب الخاص بك بتعيين مهلة قدرها %s ثانية، لذا ابق تحت هذه القيمة</i>';

// Information strings
$lang['INFO_PROCESSING_STOPPED'] = 'آخر مرة توقفت المعالجة في post_id %s (%s معالجتها وظائف) على %s';
$lang['INFO_PROCESSING_ABORTED'] = 'لقد أوقفت المعالجة عند post_id %s (%s عدد المشاركات المعالجة) في %s.';
$lang['INFO_PROCESSING_ABORTED_SOON'] = 'يرجى الانتظار بعض دقائق قبل المتابعة...';
$lang['INFO_PROCESSING_FINISHED'] = 'لقد انتهيت من المعالجة بنجاح (%s عدد المشاركات المعالجة) في %s.';
$lang['INFO_PROCESSING_FINISHED_NEW'] = 'لقد انتهيت من المعالجة بنجاح عند post_id %s (%s عدد المشاركات المعالجة) في %s,<br />لكن كانت هناك %s مشاركة جديدة بعد هذا التاريخ.';

// Progress screen
$lang['REBUILD_SEARCH_PROGRESS'] = 'بناء تقدم البحث';

$lang['PROCESSED_POST_IDS'] = 'معرفات المشاركات المعالجة: %s - %s';
$lang['TIMER_EXPIRED'] = 'انتهت الموقت في %s ثانية. ';
$lang['CLEARED_SEARCH_TABLES'] = 'مسح البحث في الجداول. ';
$lang['DELETED_POSTS'] = '%s بعد(s) تم حذفها من قبل المستخدمين أثناء المعالجة. ';
$lang['PROCESSING_NEXT_POSTS'] = 'تجهيز المقبل %s بعد(s). يرجى الانتظار...';
$lang['ALL_SESSION_POSTS_PROCESSED'] = 'تتم معالجة جميع المشاركات في الدورة الحالية.';
$lang['ALL_POSTS_PROCESSED'] = 'جميع الوظائف معالجتها بنجاح.';
$lang['ALL_TABLES_OPTIMIZED'] = 'تم تحسين الجداول بنجاح.';

$lang['PROCESSING_POST_DETAILS'] = 'معالجة البريد';
$lang['CURRENT_SESSION'] = 'الدورة';
$lang['TOTAL'] = 'مجموع.';

$lang['PROCESS_DETAILS'] = 'من <b>%s</b> إلى <b>%s</b> (من مجموع <b>%s</b>)';
$lang['PERCENT_COMPLETED'] = '%s %% اكتمال.';

$lang['PROCESSING_TIME_DETAILS'] = 'الدورة الحالية التفاصيل';
$lang['TIME_LAST_POSTS'] = 'آخر %s بعد(s)';
$lang['TIME_FROM_THE_BEGINNING'] = 'من البداية';
$lang['TIME_AVERAGE'] = 'متوسط في كل دورة';
$lang['TIME_ESTIMATED'] = 'يقدر حتى النهاية';

$lang['SIZE_ESTIMATED'] = 'وتقدر بعد الانتهاء';
$lang['SIZE_SEARCH_TABLES'] = 'البحث الجداول حجم';

$lang['POSTS_LAST_CYCLE'] = 'تمت معالجة المشاركات في الدورة الأخيرة.';

$lang['INFO_ESTIMATED_VALUES'] = '(*) جميع القيم المقدرة تحسب تقريباً<br />استناداً إلى النسبة المئوية المكتملة الحالية وقد لا تمثل القيم النهائية الفعلية.<br />مع زيادة النسبة المئوية المكتملة، ستقترب القيم المقدرة من القيم الفعلية.';

$lang['CLICK_RETURN_REBUILD_SEARCH'] = 'انقر فوق %shere%s العودة إلى إعادة البحث';
$lang['REBUILD_SEARCH_ABORTED'] = 'تم إلغاء البحث عند post_id %s.<br /><br />إذا قمت بإلغاء العملية أثناء المعالجة، عليك الانتظار لبضع دقائق حتى تتمكن من تشغيل البحث مرة أخرى، حتى تكتمل الدورة الأخيرة.';
$lang['WRONG_INPUT'] = 'كنت قد دخلت بعض قيم خاطئة. يرجى التحقق من المدخلات الخاصة بك وحاول مرة أخرى.';

// Buttons
$lang['PROCESSING'] = 'تجهيز...';
$lang['FINISHED'] = 'انتهى';

$lang['BOT_TOPIC_MOVED_FROM_TO'] = 'تم نقل الموضوع من منتدى [b]%s[/b] إلى منتدى [b]%s[/b].[br][b]سبب النقل:[/b] %s[br][br]%s';
$lang['BOT_MESS_SPLITS'] = 'الموضوع تم تقسيمها. موضوع جديد - [b]%s[/b][br][br]%s';
$lang['BOT_TOPIC_SPLITS'] = 'الموضوع تم تقسيمها من [b]%s[/b][br][br]%s';

$lang['CALLSEED'] = 'استدعاء السدود';
$lang['CALLSEED_EXPLAIN'] = 'تنتبه مع طلب العودة إلى توزيع';
$lang['CALLSEED_SUBJECT'] = 'تحميل مساعدة %s';
$lang['CALLSEED_TEXT'] = 'مرحبا![br]مساعدتك مطلوبة في الإصدار [url=%s]%s[/url][br]إذا قررت المساعدة، ولكنك حذفت بالفعل ملف التورنت، يمكنك تنزيله [url=%s]هنا[/url][br][br]آمل أن تساعد!';
$lang['CALLSEED_MSG_OK'] = 'تم إرسال الرسالة إلى جميع أولئك الذين تحميل هذا الإصدار';
$lang['CALLSEED_MSG_SPAM'] = 'تم إرسال الطلب بنجاح مرة واحدة بالفعل (ربما ليس أنت)<br /><br />فرصة الإرسال التالية هي <b>%s</b>.';
$lang['CALLSEED_HAVE_SEED'] = 'الموضوع لا يحتاج مساعدة (<b>Seeders:</b> %d)';

$lang['LOG_ACTION']['LOG_TYPE'] = [
    'mod_topic_delete' => 'الموضوع:<br /> <b>محذوف</b>',
    'mod_topic_move' => 'موضوع:<br /> <b>تم نقله</b>.',
    'mod_topic_lock' => 'موضوع:<br /> <b>مغلق</b>',
    'mod_topic_unlock' => 'موضوع:<br /> <b>مفتوح</b>',
    'mod_topic_split' => 'موضوع:<br /> <b>مقسم</b>',
    'mod_topic_set_downloaded' => 'الموضوع:<br /> <b>تم تعيين كتنزيل</b>',
    'mod_topic_unset_downloaded' => 'الموضوع:<br /> <b>تم إلغاء تحميل</b>',
    'mod_topic_change_tor_status' => 'الموضوع:<br /> <b>تم تغيير حالة التورنت</b>',
    'mod_topic_change_tor_type' => 'الموضوع:<br /> <b>تم تغيير نوع التورنت</b>',
    'mod_topic_tor_unregister' => 'الموضوع:<br /> <b>تم إلغاء تسجيل التورنت</b>',
    'mod_topic_tor_register' => 'الموضوع:<br /> <b>تم تسجيل التورنت</b>',
    'mod_topic_tor_delete' => 'الموضوع:<br /> <b>تم حذف التورنت</b>',
    'mod_topic_renamed' => 'الموضوع:<br /> <b>تم إعادة تسميته</b>',
    'mod_topic_poll_started' => 'الموضوع:<br /> <b>بدأ الاستطلاع</b>',
    'mod_topic_poll_finished' => 'الموضوع:<br /> <b>تم الانتهاء من الاستطلاع</b>',
    'mod_topic_poll_deleted' => 'الموضوع:<br /> <b>تم حذف الاستطلاع</b>',
    'mod_topic_poll_added' => 'الموضوع:<br /> <b>تم إضافة الاستطلاع</b>',
    'mod_topic_poll_edited' => 'الموضوع:<br /> <b>تم تعديل الاستطلاع</b>',
    'mod_post_delete' => 'وظيفة:<br /> <b>محذوفة</b>',
    'mod_post_pin' => 'الوظيفة:<br /> <b>تم تثبيتها</b>',
    'mod_post_unpin' => 'الوظيفة:<br /> <b>تم إلغاء تثبيتها</b>',
    'adm_user_delete' => 'المستخدم:<br /> <b>محذوف</b>',
    'adm_user_ban' => 'المستخدم:<br /> <b>حظر</b>',
    'adm_user_unban' => 'المستخدم:<br /> <b>رفع الحظر</b>',
];

$lang['ACTS_LOG_ALL_ACTIONS'] = 'جميع الإجراءات';
$lang['ACTS_LOG_SEARCH_OPTIONS'] = 'إجراءات الدخول: خيارات البحث';
$lang['ACTS_LOG_FORUM'] = 'المنتدى';
$lang['ACTS_LOG_ACTION'] = 'إجراء';
$lang['ACTS_LOG_LOGS_FROM'] = 'سجلات من ';
$lang['ACTS_LOG_FIRST'] = 'بدءا ب';
$lang['ACTS_LOG_DAYS_BACK'] = 'أيام';
$lang['ACTS_LOG_TOPIC_MATCH'] = 'تطابق عنوان الموضوع';
$lang['ACTS_LOG_SORT_BY'] = 'فرز حسب';
$lang['ACTS_LOG_LOGS_ACTION'] = 'إجراء';
$lang['ACTS_LOG_USERNAME'] = 'اسم المستخدم';
$lang['ACTS_LOG_TIME'] = 'الوقت';
$lang['ACTS_LOG_INFO'] = 'معلومات';
$lang['ACTS_LOG_FILTER'] = 'فلتر';
$lang['ACTS_LOG_TOPICS'] = 'المواضيع:';
$lang['ACTS_LOG_OR'] = 'أو';

$lang['RELEASE'] = 'قوالب الإصدار';
$lang['RELEASES'] = 'النشرات';

$lang['BACK'] = 'مرة أخرى';
$lang['NEW_RELEASE'] = 'الإصدار الجديد';
$lang['NEXT'] = 'واصل';
$lang['ALL'] = 'كل';

$lang['TPL_EMPTY_FIELD'] = 'يجب ملء الحقل <b>%s</b>';
$lang['TPL_EMPTY_SEL'] = 'يجب تحديد <b>%s</b>';
$lang['TPL_NOT_NUM'] = '<b>%s</b> - ليس رقمًا';
$lang['TPL_NOT_URL'] = '<b>%s</b> - يجب أن يكون https: // URL';
$lang['TPL_NOT_IMG_URL'] = '<b>%s</b> - يجب أن يكون https: // IMG_URL';
$lang['TPL_PUT_INTO_SUBJECT'] = 'وضع في الموضوع';
$lang['TPL_POSTER'] = 'ملصق';
$lang['TPL_REQ_FILLING'] = 'يتطلب ملء';
$lang['TPL_NEW_LINE'] = 'خط جديد';
$lang['TPL_NEW_LINE_AFTER'] = 'الخط الجديد بعد العنوان';
$lang['TPL_NUM'] = 'عدد';
$lang['TPL_URL'] = 'رابط';
$lang['TPL_IMG'] = 'صورة';
$lang['TPL_PRE'] = 'pre';
$lang['TPL_SPOILER'] = 'المفسد';
$lang['TPL_IN_LINE'] = 'في نفس الخط';
$lang['TPL_HEADER_ONLY'] = 'فقط في العنوان';

$lang['SEARCH_INVALID_USERNAME'] = 'تم إدخال اسم مستخدم غير صالح للبحث';
$lang['SEARCH_INVALID_EMAIL'] = 'أدخل عنوان بريد إلكتروني غير صالح للبحث';
$lang['SEARCH_INVALID_IP'] = 'تم إدخال عنوان IP غير صالح للبحث';
$lang['SEARCH_INVALID_GROUP'] = 'تم إدخال مجموعة غير صالحة للبحث';
$lang['SEARCH_INVALID_RANK'] = 'تم إدخال رتبة غير صالحة للبحث';
$lang['SEARCH_INVALID_DATE'] = 'تم إدخال تاريخ غير صحيح للبحث';
$lang['SEARCH_INVALID_POSTCOUNT'] = 'تم إدخال عدد غير صالح للبحث';
$lang['SEARCH_INVALID_USERFIELD'] = 'بيانات Userfield غير صحيحة.';
$lang['SEARCH_INVALID_LASTVISITED'] = 'تم إدخال تاريخ غير صالح لآخر بحث تمت زيارته';
$lang['SEARCH_INVALID_LANGUAGE'] = 'اللغة المحددة غير صحيحة.';
$lang['SEARCH_INVALID_TIMEZONE'] = 'التوقيت المحدد غير صالح.';
$lang['SEARCH_INVALID_MODERATORS'] = 'المنتدى المحدد غير صالح.';
$lang['SEARCH_INVALID'] = 'البحث غير صالح.';
$lang['SEARCH_INVALID_DAY'] = 'اليوم الذي أدخلته غير صالح.';
$lang['SEARCH_INVALID_MONTH'] = 'الشهر الذي أدخلته غير صحيح.';
$lang['SEARCH_INVALID_YEAR'] = 'العام الذي أدخلته غير صحيح.';
$lang['SEARCH_FOR_USERNAME'] = 'البحث عن أسماء مطابقة %s.';
$lang['SEARCH_FOR_EMAIL'] = 'البحث عن عناوين البريد الإلكتروني مطابقة %s.';
$lang['SEARCH_FOR_IP'] = 'البحث عن عناوين IP مطابقة %s.';
$lang['SEARCH_FOR_DATE'] = 'البحث عن المستخدمين الذين انضموا %s %d/%d/%d.';
$lang['SEARCH_FOR_GROUP'] = 'البحث عن أعضاء مجموعة %s.';
$lang['SEARCH_FOR_RANK'] = 'البحث عن مستويات مرتبطة بشركات %s.';
$lang['SEARCH_FOR_BANNED'] = 'البحث عن المستخدمين الذين تم حظرهم.';
$lang['SEARCH_FOR_ADMINS'] = 'البحث عن المسؤولين';
$lang['SEARCH_FOR_MODS'] = 'البحث عن المشرفين';
$lang['SEARCH_FOR_DISABLED'] = 'البحث عن المستخدمين المعاقين.';
$lang['SEARCH_FOR_POSTCOUNT_GREATER'] = 'البحث عن المستخدمين مع عدد أكبر من %d.';
$lang['SEARCH_FOR_POSTCOUNT_LESSER'] = 'البحث عن المستخدمين مع عدد أقل من %d.';
$lang['SEARCH_FOR_POSTCOUNT_RANGE'] = 'البحث عن المستخدمين مع عدد بين %d و %d.';
$lang['SEARCH_FOR_POSTCOUNT_EQUALS'] = 'البحث عن المستخدمين مع عدد يساوي %d.';
$lang['SEARCH_FOR_USERFIELD_TWITTER'] = 'البحث عن المستخدمين مع تويتر الذي يتطابق مع %s';
$lang['SEARCH_FOR_USERFIELD_WEBSITE'] = 'البحث عن المستخدمين بوجود موقع يتناسب مع %s';
$lang['SEARCH_FOR_USERFIELD_LOCATION'] = 'البحث عن المستخدمين بالموقع المطابق %s.';
$lang['SEARCH_FOR_USERFIELD_INTERESTS'] = 'البحث عن المستخدمين بمصالحهم المطابقة %s.';
$lang['SEARCH_FOR_USERFIELD_OCCUPATION'] = 'البحث عن المستخدمين مع مطابقة %s.';
$lang['SEARCH_FOR_LASTVISITED_INTHELAST'] = 'البحث على المستخدمين الذين زاروا في الماضي %s.';
$lang['SEARCH_FOR_LASTVISITED_AFTERTHELAST'] = 'البحث على المستخدمين الذين زاروا بعد آخر %s.';
$lang['SEARCH_FOR_LANGUAGE'] = 'البحث عن المستخدمين الذين هم باللغة %s.';
$lang['SEARCH_FOR_TIMEZONE'] = 'البحث عن المستخدمين الذين لديهم UTC %s كالتوقيت الرسمي.';
$lang['SEARCH_FOR_MODERATORS'] = 'البحث عن المشرفين من المنتدى -> %s';
$lang['SEARCH_USERS_ADVANCED'] = 'البحث المتقدم عن المستخدمين.';
$lang['SEARCH_USERS_EXPLAIN'] = 'هذه الوحدة النمطية يسمح لك إجراء عمليات بحث متقدمة للمستخدمين على مجموعة واسعة من المعايير. يرجى قراءة الوصف تحت كل مجال لفهم كل خيار البحث تماما.';
$lang['SEARCH_USERNAME_EXPLAIN'] = 'البحث عن أسماء المستخدمين بشكل حساس للأحرف.';
$lang['SEARCH_EMAIL_EXPLAIN'] = 'تعبير مطابق لعنوان البريد الإلكتروني.';
$lang['SEARCH_IP_EXPLAIN'] = 'البحث عن المستخدمين عبر IP محدد.';
$lang['SEARCH_USERS_JOINED'] = 'المستخدمين التي انضمت إلى';
$lang['SEARCH_USERS_LASTVISITED'] = 'المستخدمين الذين زاروا';
$lang['IN_THE_LAST'] = 'في الماضي';
$lang['AFTER_THE_LAST'] = 'بعد آخر';
$lang['BEFORE'] = 'قبل';
$lang['AFTER'] = 'بعد';
$lang['SEARCH_USERS_JOINED_EXPLAIN'] = 'البحث عن المستخدمين الذين انضموا قبل أو بعد تاريخ معين.';
$lang['SEARCH_USERS_GROUPS_EXPLAIN'] = 'عرض كافة أعضاء المجموعة المحددة.';
$lang['SEARCH_USERS_RANKS_EXPLAIN'] = 'عرض جميع شركات مختارة.';
$lang['BANNED_USERS'] = 'حظر المستخدمين';
$lang['DISABLED_USERS'] = 'عرض جميع المستخدمين المعاقين.';
$lang['SEARCH_USERS_MISC_EXPLAIN'] = 'المشرفين وحظر المستخدمين.';
$lang['POSTCOUNT'] = 'عدد المشاركات.';
$lang['EQUALS'] = 'يساوي';
$lang['GREATER_THAN'] = 'أكبر من';
$lang['LESS_THAN'] = 'أقل من';
$lang['SEARCH_USERS_POSTCOUNT_EXPLAIN'] = 'يمكنك البحث عن المستخدمين بناءً على قيمة عدد المنشورات. يمكنك إما البحث عن طريق قيمة معينة ، أكبر من أو أقل من قيمة أو بين قيمتين. لإجراء بحث عن النطاق ، حدد "يساوي" ثم ضع قيم البداية والنهاية للنطاق مفصولة بشرطة (-) ، على سبيل المثال 10-15';
$lang['USERFIELD'] = 'حقل المستخدم';
$lang['SEARCH_USERS_USERFIELD_EXPLAIN'] = 'البحث عن المستخدمين استنادًا إلى حقول الملف الشخصي المختلفة. يتم دعم البدائل باستخدام علامة النجمة (*) .';
$lang['SEARCH_USERS_LASTVISITED_EXPLAIN'] = 'يمكنك البحث عن المستخدمين استنادا إلى آخر تاريخ الدخول باستخدام هذا خيار البحث';
$lang['SEARCH_USERS_LANGUAGE_EXPLAIN'] = 'وهذا عرض المستخدمين الذين لديهم اختيار لغة معينة في الملف الشخصي';
$lang['SEARCH_USERS_TIMEZONE_EXPLAIN'] = 'المستخدمين الذين لديهم اختيار محدد التوقيت في ملفهم الشخصي';
$lang['MODERATORS_OF'] = 'المشرفين';
$lang['SEARCH_USERS_MODERATORS_EXPLAIN'] = 'ابحث عن مستخدمين لديهم أذونات إشراف لمنتدى معين. يتم التعرف على أذونات الإشراف إما عن طريق أذونات المستخدم أو من خلال التواجد في مجموعة لها أذونات المجموعة الصحيحة.';

$lang['SEARCH_USERS_NEW'] = '%s أسفرت %d النتيجة(ق). قم بإجراء <a href="%s">بحث آخر</a>.';
$lang['BANNED'] = 'حظرت';
$lang['NOT_BANNED'] = 'غير محظور';
$lang['SEARCH_NO_RESULTS'] = 'لا يوجد أي مستخدمين يطابقون معايير البحث المحددة. يرجى تجربة بحث آخر. إذا كنت تبحث في حقول اسم المستخدم أو عنوان البريد الإلكتروني، يجب عليك استخدام الرمز البدل * (نجمة) من أجل المطابقات الجزئية.';
$lang['ACCOUNT_STATUS'] = 'حالة الحساب';
$lang['SORT_OPTIONS'] = 'فرز الخيارات:';
$lang['LAST_VISIT'] = 'آخر زيارة';
$lang['DAY'] = 'اليوم';

$lang['POST_EDIT_CANNOT'] = 'آسف, ولكن لا يمكنك تعديل مشاركاتك';
$lang['FORUMS_IN_CAT'] = 'المنتديات في هذه الفئة';

$lang['MC_TITLE'] = 'تعليق الإشراف';
$lang['MC_LEGEND'] = 'اكتب تعليق';
$lang['MC_FAQ'] = 'دخلت سيتم عرض النص في إطار هذه الرسالة';
$lang['MC_COMMENT_PM_SUBJECT'] = '%s في رسالتك';
$lang['MC_COMMENT_PM_MSG'] = "مرحبًا، [b]%s[/b]\nالمشرف ترك في رسالتك [url=%s][b]%s[/b][/url][quote]\n%s\n[/quote]";
$lang['MC_COMMENT'] = [
    0 => [
        'title' => '',
        'type' => 'حذف التعليق',
    ],
    1 => [
        'title' => 'تعليق من %s',
        'type' => 'التعليق',
    ],
    2 => [
        'title' => 'المعلومات من %s',
        'type' => 'المعلومات',
    ],
    3 => [
        'title' => 'تحذير من %s',
        'type' => 'تحذير',
    ],
    4 => [
        'title' => 'انتهاك من %s',
        'type' => 'انتهاك',
    ],
];

$lang['SITEMAP'] = 'خريطة الموقع';
$lang['SITEMAP_ADMIN'] = 'إدارة الموقع';
$lang['SITEMAP_CREATED'] = 'إنشاء خريطة الموقع';
$lang['SITEMAP_AVAILABLE'] = 'و هو متوفر في';
$lang['SITEMAP_NOT_CREATED'] = 'لم يتم إنشاء خريطة الموقع بعد.';
$lang['SITEMAP_OPTIONS'] = 'خيارات';
$lang['SITEMAP_CREATE'] = 'إنشاء / تحديث خريطة الموقع';
$lang['SITEMAP_WHAT_NEXT'] = 'ماذا تفعل بعد ذلك ؟ ';
$lang['SITEMAP_GOOGLE_1'] = 'تسجيل موقعك في <a href="https://www.google.com/webmasters/" target="_blank">Google Webmaster</a> باستخدام حساب Google الخاص بك.';
$lang['SITEMAP_GOOGLE_2'] = '<a href="https://www.google.com/webmasters/tools/sitemap-list" target="_blank">إضافة خريطة الموقع</a> من الموقع المسجل.';
$lang['SITEMAP_YANDEX_1'] = 'تسجيل موقعك في <a href="https://webmaster.yandex.ru/sites/" target="_blank">Yandex Webmaster</a> باستخدام حساب ياندكس الخاص بك.';
$lang['SITEMAP_YANDEX_2'] = '<a href="https://webmaster.yandex.ru/site/map.xml" target="_blank">إضافة خريطة الموقع</a> للموقع الذي قمت بتسجيله.';
$lang['SITEMAP_BING_1'] = 'تسجيل موقعك في <a href="https://www.bing.com/webmaster/" target="_blank">Bing Webmaster</a> باستخدام حساب Microsoft الخاص بك.';
$lang['SITEMAP_BING_2'] = 'إضافة خريطة موقع الويب التي قمت بتسجيلها في الإعدادات.';
$lang['SITEMAP_ADD_TITLE'] = 'صفحات إضافية على خريطة الموقع';
$lang['SITEMAP_ADD_PAGE'] = 'صفحات إضافية';
$lang['SITEMAP_ADD_EXP_1'] = 'يمكنك تحديد صفحات إضافية على موقع الويب الخاص بك التي ينبغي أن تدرج في ملف خريطة الموقع الذي تقوم بإنشائه.';
$lang['SITEMAP_ADD_EXP_2'] = 'يجب أن تبدأ كل إشارة ب http(s):// وخط جديد!';

$lang['FORUM_MAP'] = 'خريطة المنتديات.';
$lang['ATOM_FEED'] = 'التغذية.';
$lang['ATOM_ERROR'] = 'خطأ في إنشاء التغذية.';
$lang['ATOM_SUBSCRIBE'] = 'اشترك في التغذية.';
$lang['ATOM_UPDATED'] = 'تم تحديثه';
$lang['ATOM_GLOBAL_FEED'] = 'تغذية عالمية لجميع المنتديات';

$lang['HASH_INVALID'] = 'تجزئة %s غير صالح';
$lang['HASH_NOT_FOUND'] = 'الإفراج مع تجزئة %s لم يتم العثور على';

$lang['TERMS_EMPTY_TEXT'] = '[align=center]نص من هذه الصفحة تم تحريره في: [url]%s[/url]. هذه السطر يمكن أن يتم رؤيته فقط من قبل المسؤولين.[/align]';
$lang['TERMS_EXPLAIN'] = 'في هذه الصفحة، يمكنك تحديد نص القواعد الأساسية للموارد المعروضة للمستخدمين.';
$lang['TERMS_UPDATED_SUCCESSFULLY'] = 'تم تحديث الشروط بنجاح';
$lang['CLICK_RETURN_TERMS_CONFIG'] = '%sاضغط هنا للعودة إلى محرر الشروط%s';

$lang['TR_STATS'] = [
    0 => 'المستخدمين غير النشطين في 30 يومًا.',
    1 => 'المستخدمين غير النشطين لمدة 90 يومًا.',
    2 => 'توزيعات ذات حجم متوسط على المتعقب',
    3 => 'كم العدد الإجمالي للأيدي على المتعقب؟',
    4 => 'كم عدد الأيدي النشطة (يوجد LED واحد على الأقل)؟',
    5 => 'كم من الأيدي حيث أن البذر أكثر من 5 بذور؟',
    6 => 'كم من ناشري (أولئك الذين ملؤوا 1 على الأقل)؟',
    7 => 'كم من ناشري خلال آخر 30 يومًا؟',
];

$lang['TORRENT_STATS_TITLE'] = 'إحصائيات التورنت';
$lang['TRACKER_STATS_TITLE'] = 'إحصائيات المتتبع';
$lang['TORRENTS'] = 'التورنت';
$lang['PEERS'] = 'الأقران';
$lang['CLIENTS'] = 'العملاء';

$lang['NEW_POLL_START'] = 'استطلاع تمكين';
$lang['NEW_POLL_END'] = 'استطلاع انتهى';
$lang['NEW_POLL_ENDED'] = 'هذا الاستطلاع قد انتهى بالفعل';
$lang['NEW_POLL_DELETE'] = 'حذف الاستطلاع';
$lang['NEW_POLL_ADDED'] = 'وأضاف الاستطلاع';
$lang['NEW_POLL_ALREADY'] = 'موضوع بالفعل استطلاع للرأي';
$lang['NEW_POLL_RESULTS'] = 'تغير الاستطلاع وتم حذف النتائج القديمة';
$lang['NEW_POLL_VOTES'] = 'يجب إدخال الإجابة الصحيحة من الخيارات (الحد الأدنى 2, الحد الأقصى هو %s)';
$lang['NEW_POLL_DAYS'] = 'وقت استطلاع (%s أيام من لحظة إنشاء موضوع) انتهت بالفعل';
$lang['NEW_POLL_U_NOSEL'] = 'لم تقم بتحديد هذا التصويت';
$lang['NEW_POLL_U_CHANGE'] = 'تحرير استطلاع';
$lang['NEW_POLL_U_EDIT'] = 'تغيير الاستطلاع (النتائج القديمة سيتم حذفها)';
$lang['NEW_POLL_U_VOTED'] = 'تم التصويت جميعا';
$lang['NEW_POLL_U_START'] = 'تمكين الاستطلاع';
$lang['NEW_POLL_U_END'] = 'الانتهاء من استطلاع';
$lang['NEW_POLL_M_TITLE'] = 'عنوان الاستطلاع';
$lang['NEW_POLL_M_VOTES'] = 'خيارات';
$lang['NEW_POLL_M_EXPLAIN'] = 'كل صف يمثل إجابة واحدة (أقصى حد';

$lang['UPLOAD_ERROR_COMMON_DISABLED'] = 'تعطيل تحميل الملفات';
$lang['UPLOAD_ERROR_COMMON'] = 'خطأ في تحميل الملف';
$lang['UPLOAD_ERROR_SIZE'] = 'الملف الذي تم تحميله يتجاوز الحد الأقصى لحجم %s';
$lang['UPLOAD_ERROR_FORMAT'] = 'نوع الملف للصورة غير صالح';
$lang['UPLOAD_ERROR_DIMENSIONS'] = 'أبعاد الصورة تتجاوز الحد الأقصى المقبول %sx%s بكسل';
$lang['UPLOAD_ERROR_NOT_IMAGE'] = 'الملف الذي تم تحميله ليس صورة';
$lang['UPLOAD_ERROR_NOT_ALLOWED'] = 'الإضافة %s للتنزيلات غير مسموح بها';
$lang['UPLOAD_ERRORS'] = [
    UPLOAD_ERR_INI_SIZE => 'لقد تجاوزت الحد الأقصى لحجم الملف على الخادم',
    UPLOAD_ERR_FORM_SIZE => 'لقد تجاوزت الحد الأقصى لحجم تحميل الملف',
    UPLOAD_ERR_PARTIAL => 'تم تحميل الملف جزئياً.',
    UPLOAD_ERR_NO_FILE => 'الملف لم يتم تحميله',
    UPLOAD_ERR_NO_TMP_DIR => 'الدليل المؤقت لم يتم العثور عليه.',
    UPLOAD_ERR_CANT_WRITE => 'خطأ في الكتابة',
    UPLOAD_ERR_EXTENSION => 'توقف التحميل بواسطة الإضافة.',
];

// Captcha
$lang['CAPTCHA'] = 'تحقق من أنك لست روبوت';
$lang['CAPTCHA_WRONG'] = 'أنت لا تستطيع أن تؤكد أنك لست روبوت';
$lang['CAPTCHA_SETTINGS'] = '<h2>كابتشا غير مكونة بالكامل</h2><p>قم بتوليد المفاتيح باستخدام لوحة التحكم في خدمة الكابتشا الخاصة بك، ثم تحتاج إلى وضعها في ملف config/config.php.</p>';
$lang['CAPTCHA_OCCURS_BACKGROUND'] = 'تتم عملية التحقق من كابتشا في الخلفية';

// Sending email
$lang['REPLY_TO'] = 'رد على';
$lang['EMAILER_SUBJECT'] = [
    'EMPTY' => 'لا يوجد عنوان',
    'GROUP_ADDED' => 'لقد تمت إضافتك إلى مجموعة المستخدمين',
    'GROUP_APPROVED' => 'تم منح طلبك للانضمام إلى مجموعة المستخدمين',
    'GROUP_REQUEST' => 'طلب الانضمام إلى مجموعة المستخدمين الخاصة بك',
    'PRIVMSG_NOTIFY' => 'رسالة خاصة جديدة',
    'TOPIC_NOTIFY' => 'إشعار بالرد في الموضوع - %s',
    'USER_ACTIVATE' => 'إعادة تنشيط الحساب',
    'USER_ACTIVATE_PASSWD' => 'تأكيد كلمة المرور الجديدة',
    'USER_WELCOME' => 'مرحبا بكم في الموقع %s',
    'USER_WELCOME_INACTIVE' => 'مرحباً بكم في الموقع %s.',
];

// Null ratio
$lang['BT_NULL_RATIO'] = 'إعادة تعيين النسبة';
$lang['BT_NULL_RATIO_NONE'] = 'ليس لديك نسبة';
$lang['BT_NULL_RATIO_ALERT'] = "انتباه!\n\nهل أنت متأكد أنك تريد إعادة تعيين النسبة الخاصة بك؟";
$lang['BT_NULL_RATIO_AGAIN'] = 'لقد قمت بالفعل بإعادة تعيين النسبة الخاصة بك!';
$lang['BT_NULL_RATIO_NOT_NEEDED'] = 'لديك نسبة جيدة. إعادة التعيين ممكنة فقط مع نسبة أقل من %s';
$lang['BT_NULL_RATIO_SUCCESS'] = 'تمت إعادة تعيين النسبة بنجاح!';

// Releaser stats
$lang['RELEASER_STAT_SIZE'] = 'إجمالي الحجم:';
$lang['RELEASER_STAT'] = 'إحصائيات الموزع:';
$lang['RELEASER_STAT_SHOW'] = 'عرض الإحصائيات';

// Spam protection
$lang['REGISTRATION_DENIED'] = 'تم رفض التسجيل. يرجى الاتصال بالمشرف إذا كنت تعتقد أن هذا خطأ.';
$lang['POST_SPAM_DENIED'] = 'تم التعرف على رسالتك كبريد مزعج ولا يمكن نشرها.';
$lang['PM_SPAM_DENIED'] = 'تم التعرف على رسالتك كبريد مزعج ولا يمكن إرسالها.';

// Spam log (admin)
$lang['SPAM_LOG'] = 'سجل الرسائل المزعجة';
$lang['SPAM_LOG_DESC'] = 'يسجل هذا السجل جميع محاولات التسجيل وإرسال المحتوى التي تم تمييزها من قبل نظام حماية الرسائل المزعجة. <b>مرفوضة</b> &mdash; تم حظر الإجراء بالكامل (تم رفض التسجيل، لم يتم إرسال المشاركة/الرسالة الخاصة). <b>معتدلة</b> &mdash; بالنسبة للتسجيلات، تم إنشاء الحساب ولكنه يتطلب تفعيل البريد الإلكتروني؛ بالنسبة للمحتوى، تم السماح بالمنشور/الرسالة الخاصة ولكن تم تمييزه كمشتبه به.';
$lang['SPAM_LOG_CHECK_TYPE'] = 'نوع الفحص';
$lang['SPAM_LOG_CHECK_TYPE_DESC_REG'] = 'التسجيل &mdash; اشتراك حساب جديد';
$lang['SPAM_LOG_CHECK_TYPE_DESC_CONTENT'] = 'المحتوى &mdash; مشاركة أو رسالة خاصة';
$lang['SPAM_LOG_DECISION'] = 'القرار';
$lang['SPAM_LOG_PROVIDER'] = 'المزود';
$lang['SPAM_LOG_REASON'] = 'السبب';
$lang['SPAM_LOG_RESPONSE_TIME'] = 'الوقت (مللي ثانية)';
$lang['SPAM_LOG_ALL'] = 'كل';
$lang['SPAM_LOG_DETAILS'] = 'التفاصيل';
$lang['SPAM_LOG_NO_RECORDS'] = 'لم يتم العثور على أي سجلات بريد مزعج';
$lang['SPAM_LOG_TOTAL'] = 'إجمالي الإدخالات';
$lang['SPAM_LOG_DENIED_COUNT'] = 'مرفوضة';
$lang['SPAM_LOG_MODERATED_COUNT'] = 'معتدلة';

// Marketplace / Modifications
$lang['MARKETPLACE'] = 'السوق';
$lang['MODIFICATIONS_LIST'] = 'التعديلات';
$lang['MODS_VERSION'] = 'الإصدار';
$lang['MODS_DOWNLOADS'] = 'تنزيلات.';
$lang['MODS_RATING'] = 'التقييم';
$lang['MODS_ACTIONS'] = 'إجراءات';
$lang['MODS_AUTHOR'] = 'الكاتب';
$lang['MODS_CATEGORY'] = 'الفئة';
$lang['MODS_LAST_UPDATED'] = 'آخر تحديث';
$lang['MODS_TOTAL'] = 'مجموع';
$lang['MODS_NO_RESOURCES'] = 'لم يتم العثور على تعديلات.';
$lang['MODS_INSTALL'] = 'تثبيت';
$lang['MODS_INSTALL_SOON'] = 'ميزة التثبيت قادمة قريباً';
$lang['MODS_ALL_CATEGORIES'] = 'كل الفئات';
$lang['MODS_FREE'] = 'مجاني';
$lang['MODS_PAID'] = 'مدفوع';
$lang['MODS_THEMES'] = 'القوالب';
$lang['MODS_LANGPACKS'] = 'حزم اللغات';
$lang['MODS_API_ERROR'] = 'تعذّر تحميل التعديلات: %s';
$lang['MODS_API_UNAVAILABLE'] = 'خادم التعديلات غير متاح مؤقتاً.';
$lang['MODS_DESCRIPTION'] = 'تعرض هذه الصفحة جميع الموارد المنشورة في منتدى TorrentPier الرسمي. سيكون التثبيت بنقرة واحدة متاحًا في تحديث مستقبلي — حالياً، استخدم هذه الصفحة كعرض للموارد.';
$lang['MODS_REVIEW'] = 'تقييم';
$lang['MODS_REVIEWS'] = 'تقييمات';

// Dark mode
$lang['DARK_MODE_TOGGLE'] = 'تبديل الوضع الداكن';
