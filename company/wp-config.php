<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'LAA0494216-company');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'LAA0494216');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'birthday0923');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql003.phy.lolipop.lan');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']w]yo>cr]i+E-8]-{|.-81OB%g/Cgp(TW|X4y^%==EOrIL(L#9TvxNpA|_lS2M!5');
define('SECURE_AUTH_KEY',  '$|BmI+IZeL$d,LxmGXu?KDxS9wMt3&*]S6q~WSbY2P*MKEjZq0;*uh1TNrD6DQyd');
define('LOGGED_IN_KEY',    'ys-o^b)Q4YBMS Ku}Z,7o]TgNaUYho%3=Di1X_|f1`/-Y=t4X^!OMMXqfUD)D~s?');
define('NONCE_KEY',        'Uo6g)U e%G]zS*:yZGsa7FD5L#qM3?z+[@G_JhxE)XIxyJ/VQ-7yci8cHs$HY_~/');
define('AUTH_SALT',        'SF23A$qqY|x{DuAV%Kg*}%=oy3bO:R?FE0Wv2&~82gs?;lGaLdu?E*E/7u1K50xH');
define('SECURE_AUTH_SALT', '@n<cV&?zEWN[)~?v/b^=!|UJ|$^vBoC{%4_t*kT$a8~AXMX*,R^G4Jm 9)YzLLD&');
define('LOGGED_IN_SALT',   '+K~Tlt_}(6c[|0<uuM[8*LN.^mz<lZg19E4}y%`C->heh31r+K^e:X4$/2##+1]$');
define('NONCE_SALT',       '1XyNo%uixU5e#Z8*;KX[|#-;Psc~P:CTY{0L~%p=BW_2au`AecOG>G-)sK^O^hw(');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'company_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。たとえば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定すると、ドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
