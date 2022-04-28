<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'Internet_Store' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'F|`y2|t*<+9&N<`Qk$dM$fbhQ=oJx8kz/C5`9YT,9:2^L;{*h/MKDKj,)k)tub~9' );
define( 'SECURE_AUTH_KEY',  '9Yr0%bOOOBRfj|;nHw#brb0] i^kM5PDgeqToRSR.O[dz@6]%xeYB))(p4Oim*`D' );
define( 'LOGGED_IN_KEY',    'f97X}TK:mE|;(SG1I%xS+~iz!{pl3L[a~1u6B5$9QO+{>5#=x!W,?I0!6.7dgCqy' );
define( 'NONCE_KEY',        'T_>)o`,I!}4*st[_xR$z4e)P,}-Q&w)5R{qjnSW3cnij;x1sMn&xC-a@8]IR<tf9' );
define( 'AUTH_SALT',        '|$=ASJ7e<=^Y538TsCrZ[~6~n.jhkZWq0dWG&$;h`B*jA*6><xwn!L+6(elW4Ndz' );
define( 'SECURE_AUTH_SALT', '>#pp7 FR4N!Z7v&[YqT/u?rNwX4[6ISv7E/7`=:J3?3CiIWRVv}vqqF|#&E`Z=p%' );
define( 'LOGGED_IN_SALT',   ' 6dcW|{aY, ]J.d~,Sx>de$![$H!AT^IpmsK`=Sovcg$l(&vp#]!%48@HUixy<#@' );
define( 'NONCE_SALT',       'IOtllYPJGiwV]sNxe=#fR@%&:#p?-Z6]%o{t(%}`XO})1FJ_lF@4s=An-~Xmp[ea' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'Store';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
