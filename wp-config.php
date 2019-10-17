<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'cc71652_cyber' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'cc71652_cyber' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'rhTEN44i' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8L0(kNhg` U((kaHA3fd;($[[f1=kJCV{9fsb!)]{3gV.c[~<jK324#+RT j uHL' );
define( 'SECURE_AUTH_KEY',  'Xg$eO:? #wbx~i~It(oz;S|$p<i(+cG`[54DD6L8{s]dA#OiyNJSv <n0~5`Tj1R' );
define( 'LOGGED_IN_KEY',    'mLbid3qV{](.|lySAqb|u2l1{f9f4(P$*Ff[ROX)N|[!Z/W?2e Z.r|J.z+t?k1d' );
define( 'NONCE_KEY',        '3]uURm<z^kLckQmIY|}kR`y3+!sBwcD;[9QwTF)Vvsy^C03strr`m.kvMBja4Ej`' );
define( 'AUTH_SALT',        'TBj#YVK]D1Tu2+4VU[Y&,p#Acab3#f+EI<)_KI)@{]xo/0rR3I8*;8=rKed([&UO' );
define( 'SECURE_AUTH_SALT', '*[,8X[t]C>0ron5?MA,NVo&)^dV.:u)@lUkDH-$dRsVKq3ta<+bBv8#V0dEl_ZX2' );
define( 'LOGGED_IN_SALT',   'e|^n5f`0Rw&L)i.F>{d2Aa||8kEoWlrVh(S9ebb,OOf/F&ptI@VO|0s#[P*{OS.8' );
define( 'NONCE_SALT',       '.m7+[cc]M`nu4sEJEi@aVI^)&+Coxb#14uetONGNP1Fn;;,res;2;{oOgVVzsb]8' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'cyber_wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
