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
define( 'DB_NAME', 'dieseite_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '_;1F#0/[$%qJt}L)ot$k|5~6mk^2tYdRJ=@?$R=*J{r#aH-&F4W)_SE8~{s/Nw3S' );
define( 'SECURE_AUTH_KEY',  'n1^EjhfI)msA/%8Wka%sIu;QYO mUeM[/MeB/?[Tqs9!)z[^=:V0,VR|$O4 6fyO' );
define( 'LOGGED_IN_KEY',    'Ax:|R6.vR7W~16y^[6%jY(~r;5?Q.xGqSDG=%%UH%9hEL$W8BN~MQQ{8>KM[Aszx' );
define( 'NONCE_KEY',        '-n<IPz2DqARyExyf2E6.,]thf>AxQZwE[~e,)*1hG$yIc)>_nI+b:<1O/6B1IB7Z' );
define( 'AUTH_SALT',        'Fayi c;_elH9Gv~;fv=)Yg~N8R.?N-.X>!@?qL2sJ.a*PB8x1:@(!Q:W<,:Px^fT' );
define( 'SECURE_AUTH_SALT', '}ELO?5Budaz`Ot^<@yI ^HmGp,oEntpRm_rY)+G~n#rJ# 9!(j:/e IP(Ao2L,>=' );
define( 'LOGGED_IN_SALT',   'FKf:b .NmuQj{8U8RIG7rpPNTM+ImM<ca3nkmjNx(?6vE-mqO4[RiQ3{eev4])!>' );
define( 'NONCE_SALT',       'DDSXc!Bga3-q=)99<D(OmTo#.EFvg-m>^Bv{p*7?wYnQG*ov!6CQ[-xv~kC3N{vB' );

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
