<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'restaurante' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'restaurante' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'eZHK~ofMM=D@Q[N3W|T  2^nXt[j@* SVv(cSJb[5&=6:)g-HC<@U{_oHTfmoyl-' );
define( 'SECURE_AUTH_KEY',  '6[@xwiV1Lv@T?]nc}TL/(|/_{l-(2h*I%x2o0 w!}~O)A9}6GGm&/dit:8/dgKl,' );
define( 'LOGGED_IN_KEY',    '{Br#jiUtP9[HM)/rFe)?5,d4wkg<1=lY*Xx7; [@<j}$T>n{f#TQ@-8ey=BHwwEJ' );
define( 'NONCE_KEY',        'i]`yty%k:t-V>@ERUe*;?HpH6K{s|] X>frciPp)-ka~o/$HnShI~oB)A&G&uL%m' );
define( 'AUTH_SALT',        '<Pbr;+u1Y</:hmz%[Zh|#Aej?E-EdG/+[4y-|JToWk*/&Y]BP<xNa{</^-)Z<kmI' );
define( 'SECURE_AUTH_SALT', 'Tl#!x>V1z/-IzWZ_7Y|,ATs#$zZ)&vG=b7<_yo&6p{WRw;l7FkLsIb?/F6r2n-L1' );
define( 'LOGGED_IN_SALT',   'j8X#K6eOW|%<9(*S;09z2vrt&bYcwaZjql zl6^rNeOlET_+v1dckA~7[)|%wqBm' );
define( 'NONCE_SALT',       'hd [y2N,;(RQ;U1,u*.iZi(L>,AZ=W8BsyHOZU9O)4_ :f!8N/as}k+|)L<-T7k~' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
