<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */

// ** MySQL-Einstellungen ** //
/**   Diese Zugangsdaten bekommst du von deinem Webhoster. **/

/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define('DB_NAME', 'wa7166_db2');

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */
define('DB_USER', 'wa7166_2');

/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */
define('DB_PASSWORD', 'lvG2?Bh&51?GH$MJwS^d');

/**
 * Ersetze localhost mit der MySQL-Serveradresse.
 */
define('DB_HOST', '127.0.0.1:3306');

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define('DB_CHARSET', 'utf8mb4');

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'n>pD54U*H;$r Wy2~{jeh.cc6_e$pj5,uSd$_3OxqA84ew/[zgE;<*+{n{Jb])a8');
define('SECURE_AUTH_KEY',  '5B!?}-Q!r2U@<.n<.I{zyz0(9{k9?-mEGTH`;6tnTldLm10rd_XTHMCJGA]6LTPx');
define('LOGGED_IN_KEY',    '|9a;AD&:13&JD.)8u,&z,kJxGH%L8,HqLE] 1&]T[JRukVKTO|z4N?_-NjSb}dmC');
define('NONCE_KEY',        'eYsY7q}:6f,=h)9`-%d4xDa|Mrw;-l#S{;.BO=!GvX]!b`1Z6Z,QkyFK|cyF1S4q');
define('AUTH_SALT',        's0{Uc$l1HaJOXY/RSz=PS;W`xMncYRY&M)%vgzm@CT^tvg7:su>c7!PPpHI;pzPP');
define('SECURE_AUTH_SALT', 'R;EGC5)6dg;|T$[9w^PY3-9QfC<42b$,J^Guv$*PW|l6UtVeN3%uoyfeCF8 C3KI');
define('LOGGED_IN_SALT',   'G?iCQ(V_@4I8PrS|F:{jho4Ocoqn_z<%MGpJ{{/:YljOL,k3ZuK%^@wGkMw:~AMU');
define('NONCE_SALT',       '=;umpOkQ3Xm:~/Yki@?nBiydG -:ST1Z^5@n~K9zrl2sy.:ZH4%#%Uf(J3,E6V1B');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix  = 'wp_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß beim Bloggen. */
/* That's all, stop editing! Happy blogging. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once(ABSPATH . 'wp-settings.php');
