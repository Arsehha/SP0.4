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
define( 'DB_NAME', 'BookShopMir' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Arseniy1' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         'Xo>OtOLK6)Ev]dq=%bi2}#979-x$nx/i1OeF.]b^-M4}qq*1qZKdBbGgS;ITaZvu' );
define( 'SECURE_AUTH_KEY',  ']&O~#v~-O4Ro==52wi%{^xhe%76CV87Y:VoEBWm*X(zrGYRFA~}4?=LgfQm6xQ#&' );
define( 'LOGGED_IN_KEY',    'S1=KCjMEnDy5~[>ikRjkh^/woN!UKMS@knZOwI=;n1`l9pZO]y>R]<u|n%$HTsc%' );
define( 'NONCE_KEY',        'UUzIey_5~;FWbUTwq)neZbPr{o$;7jzc5<woKve_mh{>=Gx:r3cyUH7NSlMGos!]' );
define( 'AUTH_SALT',        'jJOFi0 +GI|2I[~j8*iY>R#,qfFBxas5* c?Fbe=A./CAM[`o8_ab!$30WN`M&1c' );
define( 'SECURE_AUTH_SALT', '8*EpJ6pvRmAuZ;!,| G.7_NnBkdrUg 8,@$k_o}|6OeE@r4#|LVLh.B<y#T_OmP,' );
define( 'LOGGED_IN_SALT',   '-m2fj&X09*9@kop5WB0p+hgb}P85Z7C{bfvA(g8{)ZN24gUZZ5<T&fe{wkQ6F43;' );
define( 'NONCE_SALT',       'l~q6v!&55?G^-uFTf+`p%e@nAVS*(DfGB0r`EldC*)boHZWC{)otOMGQI9Tbe<wi' );

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
