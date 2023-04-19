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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'cursodefinitivowp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         ',OFnfYS_dl+l%G` ~Ql9y,Z2Tdj-{;M9D98(`+~g*^_IY}CPBvx{~H8c15}:Fhp7' );
define( 'SECURE_AUTH_KEY',  '@UAN}lYRuGlJarJH2D.i({Xw8[x6B,,31Rsx!1EB&Ir0;~K%VC8w>L/A&+ TKg}u' );
define( 'LOGGED_IN_KEY',    '^w6sNv9qoq>nTkJL(m{J0b@aDNw^at[~u;@_r&_msEi<k~=6 n6={hw7y,-+K1cr' );
define( 'NONCE_KEY',        '@zolvV)]j17pRP?QT;}0X@T$&oJJ<>azq/yo(zBpi]Onn/&rYes,w#E5 r`|TKOh' );
define( 'AUTH_SALT',        'rd G;feOjfPt`O708J.Rz}LniAn/a>lt!Lo~T+#d]2Jk:-g)-){XFMn(s7E%txkw' );
define( 'SECURE_AUTH_SALT', '}-KL:ljQ%pV&a)eEog#)r-ViRR[.v#69Va{D?dkZfOpJ_%q[jOW<J!NE?%}=w9Ep' );
define( 'LOGGED_IN_SALT',   '$4Q#bKd7)NGueD-6YCn41vOhR3?_sPC6X@VT7hf)q(Gy3cQEEU3yNJWh~GUd?zB~' );
define( 'NONCE_SALT',       'Pad~st;<<E=9Ot7$LcH;by]wkJ<bV(vmRIBs?}@|IILNYh@= :;UpVVFn 2K+xi;' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
