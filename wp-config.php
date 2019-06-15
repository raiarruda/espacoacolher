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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp_mel' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'tR%*gjSep/|J&24=WZHq&o4(=9&_1$<g:Tda/RzuLr{[yzHa|45w-f<I&n/&#hT{' );
define( 'SECURE_AUTH_KEY',  'D M{nA~|N^Q#s vn<a:lXWP<FMhYiV=wH9gP)=>DTJ{h.QUL|%c],$1.C9(OZUIG' );
define( 'LOGGED_IN_KEY',    'Nb!=a28jWvgi{}IBq;kHV6NiyN?<eQ%pz!b>3Mx)<z|.d/^cr+a4)V4=AeXn{UF:' );
define( 'NONCE_KEY',        '6gao82%{Nv5sE_x*nY<Di=mtjs<V`&b2|z4!#huO-lnK2C1 4*2]Fmwau}v=HbRm' );
define( 'AUTH_SALT',        '<gTyfjbHq-3jDC/E``#-1MH*]ay.v?u>LCb3i!,o/*>Uxvy4_A*1xu@Z2+nc5mE#' );
define( 'SECURE_AUTH_SALT', 'dd-^tzo :yzb/i&rv2d|#9I[.KCpqbPPF-bdve} e4TMH`0lnQ|RP?uw:XMe:0A9' );
define( 'LOGGED_IN_SALT',   'zc}4)wT;@3m4V8=%e[X1QN%P:=bgMQ33;c#;NW07QC-ROiITg73xss%wobeC ]63' );
define( 'NONCE_SALT',       'u{lZ2ayy:{6NxPJ//Lu:Gvik|MS=ugBiU.Bbb5:^PyRwb8=8Yjnze]}Z=|TC[;W7' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
