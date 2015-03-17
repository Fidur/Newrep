<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Ten plik zawiera konfiguracje: ustawień MySQL-a, prefiksu tabel
 * w bazie danych, tajnych kluczy i ABSPATH. Więcej informacji
 * znajduje się na stronie
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Kodeksu. Ustawienia MySQL-a możesz zdobyć
 * od administratora Twojego serwera.
 *
 * Ten plik jest używany przez skrypt automatycznie tworzący plik
 * wp-config.php podczas instalacji. Nie musisz korzystać z tego
 * skryptu, możesz po prostu skopiować ten plik, nazwać go
 * "wp-config.php" i wprowadzić do niego odpowiednie wartości.
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'word-press');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'root');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', '');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[6S9d1=bc<1+c,Ek{Y:x8bxae9Kav@W+[m;~P0G3l<RnmA/+vrLn5iR+;5Q)j*Ep');
define('SECURE_AUTH_KEY',  'Clv`?Z&Vy~KII$7$[hO@x %ICT!=`BSDTuvBVDcP|Mb(nk&Ya|]/5s}3Z}4x)G&W');
define('LOGGED_IN_KEY',    'E`z,bTUNt57-s(>uO`)+NR$^i|>7LWt:CJDyq3(&J`AJ/ 3lTZxompv4ZYYl)&_f');
define('NONCE_KEY',        'mx|N+w3a%P7,7+&Me H+9DhS45wB-AW/spOwq O1w-|#ynI`:Pi^8&e9Pf|rF_>:');
define('AUTH_SALT',        ' AA(u/pS--=5(?D+)yyD$1r;wD96#/0R{M|cGb*Q8ePVyh!HgHB-(DZ_(3@-gY7s');
define('SECURE_AUTH_SALT', 'izd5RPG| ~lrTF_.mHU!OAplJ./#L:z2W|AFYyGcAS3YkO;d(rasCWD>+NH<le2(');
define('LOGGED_IN_SALT',   ':C_o_|Zlq]bIa?iZ-/BLd-rb`& [.V+lSEuo$wv|h(Vy1sT(K@c{WLQ[-=b-yIs/');
define('NONCE_SALT',       'MN!Ty,BRtV[P3+W*tVCEFsTCnynG3*T7eL[$_S!WgvF&e#F2j++WLeb_FtyNc9^Q');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie ostrzeżeń
 * podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG w miejscach pracy nad nimi.
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
