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
 * * Настройки базы данных
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
define( 'DB_NAME', 'job board' );

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
define( 'AUTH_KEY',         '#hy70u`MHjOYp0X*`Qm_^KrCE-ffYfuhA/{u-<<q#W69@Q1dWmg:qAS;SYB9,rn_' );
define( 'SECURE_AUTH_KEY',  'VOPgufiCwL(6c&,;yRt[H~KC7a@-q};rLu>.jLAROfno+BN<TYNnL`r7W>6Ej!.S' );
define( 'LOGGED_IN_KEY',    'l;]6]-o{0Fl]@2(l(EvZeplW#Nk`t!ifKdY_nw;3o9b-C^c;rhV7*;kF~us_A3j$' );
define( 'NONCE_KEY',        '!emH#fb4<#E]$ip;|YQb![0u5,Pit];y (iMgwW(#Viv|Y^/mMz8a&S;ij>x(([*' );
define( 'AUTH_SALT',        '%M%}+aw)NSeQU>sDp x)@c!B~bChv5{KJ31|%S.Mo)~zNbp00%~iwA&CUnZ;g}cT' );
define( 'SECURE_AUTH_SALT', 'D8 Mt`IFr:Ssvg{*U~7ALHNGqXk/ +O?Xay&^=>3UJ_RzmVA{2]t8,2xG_rpbG@^' );
define( 'LOGGED_IN_SALT',   'F`FHn<KxLj[x9A6qC8><Fl}{}]ddI{3,pq`%)^l,^/gpl$W~LjuPZ%z${6gvoVY=' );
define( 'NONCE_SALT',       'S~+eu:h(qW4;vcme^e!#kq*TuRPwWUw~m&#l{gh/eD*S~Qlkj.=#z>BRK;R}cRf ' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
