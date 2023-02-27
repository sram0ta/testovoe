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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '<vp+db|Z3wTYD;$47MqeHBh2aA^-oag2u3_sk.J1Z.*Fb?/q={D;4eeM~ZMlpF$Q' );
define( 'SECURE_AUTH_KEY',  '[zNcOLYJmswT$X%jLfQ;FdzpOxdJ}.rW.]4F-|(?a>:e(Vv_%OQ{(BH9|;M_koAt' );
define( 'LOGGED_IN_KEY',    '3$v,K^=B+#T@2|,VX5y1Nrb1|mum?u!KLY3H{PJq+#d{O>aRG2G&Q,}A(v5w`;XI' );
define( 'NONCE_KEY',        '!K*hI3]]f:1kP%.avF{Bm8)^4xA(3o)UXx`vYNbe(+1YTJ]q?Lf!,xh|FU)]RLZd' );
define( 'AUTH_SALT',        '}k_?#dx:gowT-Yy{8ys~q[G[<!oJVa8`5y3kJttW8%]1PoQ2czpee[=E3r{Z&JRY' );
define( 'SECURE_AUTH_SALT', '0{45+q?ut%0VK|ceYFiN}/d%Iy}Psj(Vgo=U)D)P uWh&ru6qlm/RP&!/XpV^3%s' );
define( 'LOGGED_IN_SALT',   '%{Tr2IZ9gtUPX[|TE1<bn#O/@{yXZq~i**RE2S_Q?H6|E 6Ydb{Jlh}-nf]wBKF]' );
define( 'NONCE_SALT',       'fz8$ ,i^`<9i/ae>xR2sB+/= $N0:4kx[oST,P)gv[~LIY%_:93f)?BszZyc,O$c' );

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
