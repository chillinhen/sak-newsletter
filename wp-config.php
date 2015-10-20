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
 * Ersetze datenbankname_hier_einfuegen mit dem Namen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define('DB_NAME', 'newsletter-spraachen');

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */
define('DB_USER', 'root');

/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */
define('DB_PASSWORD', 'root');

/**
 * Ersetze localhost mit der MySQL-Serveradresse.
 */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'n;Lm;=%|JI)Hbvc{9|i<0tTljZVYbl+$5qCbdcRz0sBvB75E,oI!CS]uT8(Ez ]V');
define('SECURE_AUTH_KEY',  'QlfN+hGe=dXYO-s-|:$>:T2#`Bev)1J6-49+ilC%:YC_Pns:-p|v|R{[UtSA23<2');
define('LOGGED_IN_KEY',    '18sA4OI!P&7It;uxN4[mD$Fc-S+*$uM/w:OTV3_*^G+L`dt5Y47y7R`eB+OWA*xO');
define('NONCE_KEY',        ')D]kBhLfR&^cI3kW?(A}UK+zp*Ew=Xti2u~sM{2H;-mL3z>+=]+=dp#J]wB0ej9~');
define('AUTH_SALT',        'Kz-h[AVI+N?n^oqw-!(Lg$,^b)XLb0gK16r1:pU|-uS&!BG^lw/TJsK%G;3*EF{v');
define('SECURE_AUTH_SALT', 'Q%||w^8Mc{RxH^* +SLLWg*4-=jpZ|sY`Z@SyS@c^FCr}`f<cRsFjSR9q[z/j*+V');
define('LOGGED_IN_SALT',   '-ba{S>O?+:XT,3|AJ/IFY4P)6&+gaCuD<iI8DH%7lzhFS|8^U#uC%ypxn`!qte&_');
define('NONCE_SALT',       '`_NL.z_ CKw&YC4iO=Ic`O- VkXX-GdPA%9)#;Sd`IMhGBU0XpQ]!]Jst}3v!K1 ');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix  = 'nl_';

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
