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
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'oskaorka' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Q17198511kos11' );

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
define( 'AUTH_KEY',         'Z~l~*^?dW.P9i o$t2yx4u>At$./l4:KZeKXK>5{q0!DA%nM]AYr#C_nkbEuC%?N' );
define( 'SECURE_AUTH_KEY',  'L%PE93~QeglEfzI&M166pugxqvH3Q|i}#xgsLC}+e-x#JSrHf6]ecdrn8UEyul+M' );
define( 'LOGGED_IN_KEY',    'm;}lV@,49G2nQ`$%!:,9V*~VZaKV?@IYiF}aG:m&|e<0bSiurp=xi,uLF[ROABC,' );
define( 'NONCE_KEY',        'E5+Z~5o=?tsO>4K!=Ed4eWwN2Gc!z+1GByL^;6<5OD[{3!TH{blf8u/ +7$:<x&g' );
define( 'AUTH_SALT',        '@|#yn]&e,$t8[*z*/t+^Di@>:w52QV&{dvScW##T/-9Ksi5M&H`#|6v=Y6}SJ1|[' );
define( 'SECURE_AUTH_SALT', '4??`(23,([Dpl,.i0A0c5uQgp5JR2!^ShEf#%86mQ8ZT/uQ/{Jo*SlV&9$HSk^++' );
define( 'LOGGED_IN_SALT',   'D: .a_%uln}-{ 6cKlqjLPie5C`(}^NLt|E[]35R jo-.KzbS0~8>E6V/6NhL_~2' );
define( 'NONCE_SALT',       '[&ye:8KB]?=2j+h@9]Lo@dq)W`GY(SSjDYZk%`5&^J?)mrAq=#C[]9^kth] k5EH' );

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
