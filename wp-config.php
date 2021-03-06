<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'Akihiro_Goto');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'mysy1215');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '.;#A&9]#p>@i2A40lR]fj4Xmj>?z09[Y}7T3N)N2a1uig?p0[Ov!I8h=3:!rudeg');
define('SECURE_AUTH_KEY',  'u#x2@`jWA[IHc]!<*1l<}P/1TmVyCtWhI:15&JzNe?t3+SxCH@r8H^]2tJwuVM%?');
define('LOGGED_IN_KEY',    'z,34z)<_@bisAPrFu>hWCsK!tv;_t5,@dQ@7WvLp9P%FfOMb/WD_e|^T,B@j1?-L');
define('NONCE_KEY',        '@nse.J=I>x^$:|R2D~0-5R7H>GTqirJGQlXh r;[B04h^Nj,8AP-hYMb6%~am:yU');
define('AUTH_SALT',        ':t_)DN<<B:O_Hktf!s BwOJl7#Ju-Tsn%6G.6RE$]$toAyZq_ax@D3W&GuezwT0$');
define('SECURE_AUTH_SALT', 'U]Re&&Ic,c{r?Xk1V:~bi;7ru1m:nhzVCowNVN/%B6PijB|D/4H!SyN5/fg)twTn');
define('LOGGED_IN_SALT',   '9$|36GxmB%g&Ok-%:?NrFp%AT.H>0{|AazU8GmvaSXt?,,!mwP %=Y.9o~i*Ao1E');
define('NONCE_SALT',       're: B#iM{VHnF/.gD{x1.W}RnG[OA@seZfIyzEx[p&CqKsU.@g,gy{O}n_Kwo=&V');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
