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
define('DB_NAME', 'LAA0494216-gallery');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'LAA0494216');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'birthday0923');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql014.phy.lolipop.lan');

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
define('AUTH_KEY',         '~L-|}`PaTJ`mT +Q}&kwd.WWV`V]xD:+.6dbwuIR&tktKty(n/v1v_KU:kK1ZS<>');
define('SECURE_AUTH_KEY',  'SBwM83@oEFo+Y$MmW<;6.&qJ]CVV?35c/?M-RL85]WB#It3MT6)!~LS]6j9F8g<-');
define('LOGGED_IN_KEY',    '={%HT/M]~db/lDL|wnYZp#a3cBr84R55*Y93]^h )-[kIH|yni6SF{&kmyvq`U,{');
define('NONCE_KEY',        'z+aAoPS*4>zo+(AL5rHBG3]/=+W|kk{Fans^Sc3w9<?9S_#K{y2<Kprv0IRj:rH4');
define('AUTH_SALT',        'hcN{Ku|g!ZbfRO8oU8A!svHq]*|t@6E3$(4XH35h;FY&q-rR~d]:*EXh~5Dy,.Wi');
define('SECURE_AUTH_SALT', 'ySqt+^.A&r>0 AH#-Bx{7v#JSkNUF{ U,w-vc[(D]xYu/t){a4e9@$|;U$gUsc  ');
define('LOGGED_IN_SALT',   '`;|-/@B=s*~-S!0D4e|.WWGw2N8O7q>G%b^UTv~)-u!JI,eit]&yJCMl9~T]L}JP');
define('NONCE_SALT',       '>_YS=z]$Iv4e[7/pXi^J#(e]#BmQf ge<u6r#fGf7`LH%|>g]{YN0 yH@k@*fj(e');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'gallery_';

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
