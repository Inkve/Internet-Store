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
define( 'DB_NAME', 'internet_store' );

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
define( 'AUTH_KEY',         '*0E&; #u~FG3 UR`z1lY~#![1|c),T`6g7oaM@hW[oE]o<^ a[&i7sEE@TGkIh3?' );
define( 'SECURE_AUTH_KEY',  'p(32U@v8OR&(G-$bksD }m2$U%n-2BLl3Lo?c4C]yY4kG&X&{d mKY0((Hu6=+P+' );
define( 'LOGGED_IN_KEY',    'P/=kjvM/-kxmpN*$hN&B`0.U)R&)SPnK#WPh9dJ:iM,}HRG^&)r&+het&sk}aeH[' );
define( 'NONCE_KEY',        'x}%FVFyefXRX._&.IJwLkTq!lU;PlB*9v9q^6.@ufT_=egOTl`y5>HbL~.RBad*x' );
define( 'AUTH_SALT',        'r]w`Tlj<~L]$(Fpg1h>gQP785HE7ffJ?x_G}?0{C.SF?Xfq{pc>_nyr#avuIryXO' );
define( 'SECURE_AUTH_SALT', ';Z=hY<cYPOS*jzL%nwE{S%W])%S=S5F4&HjRT47^ei#=5N?@GO3W@5Yip)xc#|WA' );
define( 'LOGGED_IN_SALT',   ';&H+vrfKog68k=IwK#J4-Rjmb6Xdlh5dzB{ Zz>x8DY7]j83==0qi[S%*lc7R%kl' );
define( 'NONCE_SALT',       'MxM^JC,Nknd_)F|IaU]%}p)&3nTgXBA)ku/!atAQHuAI64l^Z1dv+jXw9e~5vk10' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'store_';

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
