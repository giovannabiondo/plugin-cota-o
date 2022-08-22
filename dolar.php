<?php

/**
 * Plugin Name:       Plugin cotação de dólar
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       plugin criado na aula de aw 3min itanhaém.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Ana Beatriz e Giovanna Biondo
 * Author URI:        https://author.example.com/
 *
 */

function moeda(){
	return file_get_contents(plugins_url().'/dolar/cotacao.php');
}


add_shortcode("dolar","moeda");
?>