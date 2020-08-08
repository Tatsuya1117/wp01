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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
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
define( 'DB_NAME', 'wp01db' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0*|TaJ`i8!0Nxg5%u)y}y4f3:`TeM+2&LwywY[8<H)7Hzf@+*}E%EMu-UkdL~w!Y' );
define( 'SECURE_AUTH_KEY',  'akAAF5gx] g}?r[3,/6aw1</7 2R#~^NE4WUK.nr0VA}gUN1C/}j]StgO:wu;0iS' );
define( 'LOGGED_IN_KEY',    'Lb$C!3>bEi]aCP) ino?,aXRt4o@Ib/Kt`o;fI`V~71aeXrWt1GOv$Kakg@,5U>4' );
define( 'NONCE_KEY',        'o:e&~A/07+#I$2+]RzC;DC.}7CCG|JUDNQ&l(QedeN*z>j.8{L[n@qBB+/o1Q*5D' );
define( 'AUTH_SALT',        'iLe]BdZ>=tzJH{ko{r`^/ofB?^-;E+#3b[yawP6.;<47@~pc(*1vDGsNHsDe+%uW' );
define( 'SECURE_AUTH_SALT', '@XD`}%^+l*z7}<3H$/9u9f!FQ1p~ihg@M>ZVriclXd8f#As3k^>S#MW~epV=^=8,' );
define( 'LOGGED_IN_SALT',   'r1,(XDhr9ad$_Ic/fNi%R3]<A.?_qt>,x1rBO6/,2+Pidy}*,k,D|}(G%bD-`CyG' );
define( 'NONCE_SALT',       'NB0>pbu<.dS|)Q-Y}-U+ zw7vH=>L2`:sU[?$?TLC }7N=E+X`<vAZH*2/AjLr!3' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
