<?php
	show_admin_bar( false );

	add_theme_support( 'post-thumbnails' );
	// add_image_size( 'DestaqueHome', 9999999, 950, false );

	function custom_excerpt_length( $length ) {
        return 30;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	function favicon4admin() {
		echo '<link rel="Shortcut Icon" type="image/x-icon" href="' . get_bloginfo('wpurl') . '/wp-content/themes/RQL/img/favicon.png" />';
	}
	add_action( 'admin_head', 'favicon4admin' );

	function custom_upload_mimes ( $existing_mimes=array() ){
		$existing_mimes['svg'] = 'image/svg+xml';
		return $existing_mimes;
	}
	add_filter('upload_mimes', 'custom_upload_mimes');

	function html_email(){
		return "text/html";
	}
	add_filter( 'wp_mail_content_type','html_email' );

	function cleanTel($string){
		$tel = str_replace('(', '', $string);
		$tel = str_replace(')', '', $tel);
		$tel = str_replace('+55', '', $tel);
		$tel = str_replace('-', '', $tel);
		$tel = str_replace('.', '', $tel);
		$tel = str_replace(':', '', $tel);
		$tel = str_replace(';', '', $tel);
		$tel = str_replace(' ', '', $tel);
		return $tel;
	}

	function yoasttobottom() {
		return 'low';
	}
	add_filter( 'wpseo_metabox_prio', 'yoasttobottom');
?>
<?php
	//Relacionamentos
	function atuacoes_relacionadas( $where ) {
		global $wpdb;
		$where = str_replace("meta_key = 'atuacoes_relacionadas_%", "meta_key LIKE 'atuacoes_relacionadas_%", $wpdb->remove_placeholder_escape($where));
		return $where;
	}
	//add_filter('posts_where', 'atuacoes_relacionadas');
?>