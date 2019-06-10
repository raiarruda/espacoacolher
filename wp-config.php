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
define( 'AUTH_KEY',         'Q9ZGR%#Eb{HiY/BjTYO5{r:BxKdB};nW44Z)|>xi;VfXT&l=N=WP9/_`K5@w?v29' );
define( 'SECURE_AUTH_KEY',  ' *d?/H/B] 0wu^`+A0%+BrH]jLiiea>f5v@kYzB1PRvNo_TGL_Wtlo{<~8pNOKp]' );
define( 'LOGGED_IN_KEY',    'z;nmUILj9g gl_b(T<&|[l@A-JP9^wo*^uQXhQ1Zc[^y^~c7H4uxO21GMJwo!mlz' );
define( 'NONCE_KEY',        ',9[7[+Yf.HH,In%8R2=TvIV)tg!EBg#@$T2.LH7m{-><_GUJ4LO*}g/%#4]mL(Cs' );
define( 'AUTH_SALT',        '-:+)o4Iy;;n]kA}A2-@o/FHeXl?%^Bq^5XB.}~lH!AXm3MePusy(ym)B_y(6YReT' );
define( 'SECURE_AUTH_SALT', 'Iv`P#[j0vpdDzJ`g+$gVwEU+1<d^94F}#eB?+URHwMU+**8Sh`;z32l-v*B-p~Z[' );
define( 'LOGGED_IN_SALT',   '/<C&g B*%TsQ0B$)rr6dBJ}mcf):LUfNqY*jE40OZD|J!PU:9S{84jS-=f+kb7O5' );
define( 'NONCE_SALT',       'n5KbkE<H!$^X|4+eqlk- n6v^fT0Q1G,4O+JQ&CZiKjD7iP1%XU+k)wP@AwK-;6;' );

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
