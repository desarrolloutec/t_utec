<?php

add_action( 'wp_enqueue_scripts', 'estilos_tempera' );
function estilos_tempera() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}


//*************************** Codigo Agregado ************************************

/*
 * Eliminar basura de la etiqueta <head>
 */
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

/*
 * Desactiva codigo html en los comentarios
 */
add_filter('pre_comment_content', 'wp_specialchars');




/*
 * @override
 */
function tempera_singlecolumn_output($data) {
	foreach ($data as $key => $value) { ${"$key"} = $value; /*echo ${"key"}.":".$value." - <br>";*/ } echo "\n";
	?>
	<!--<div class = "cuadrito">-->
		<div id="cuadrito<?php echo $counter; ?>" class="columna-central<?php echo ($counter > 6) ? ' cuadrito-extra' : ''; ?>">
			<div class="img-fondo" style="background-image: url(<?php echo esc_url($image); ?>)">
				<a href="<?php echo $link; ?>" <?php echo $blank; ?> >
				<img src="<?php echo getImageName(esc_url($image)); ?>" />
				</a>
			</div>
		</div>
	<!--</div> cuadrito -->	
	<?php	
} // tempera_singlecolumn_output()



/*
 * Funciones UTEC
 */
function utec_footer_extras() { ?>
	<div id="utec_footer_extras">
		<a href="" title="Aviso legal"> Aviso legal </a> | 
		<a href="" title="Aviso de privacidad"> Aviso de privacidad </a> | 
		<a href="" title="Sobre el sitio"> Sobre el sitio </a>
	</div>
<?php }

/*
 * Asigna el nombre a la imagen de la animacion (agrega el caracter 'z' entre el nombre y la extencion)
 */
function getImageName($img) {
	$aux = explode('.', $img);
	if($aux[0] == 'http://192')
		return $aux[0].'.'.$aux[1].'.'.$aux[2].'.'. $aux[count($aux)-2]."z.".$aux[count($aux)-1];
	else
		return 'http://utec-celaya.edu.'.$aux[count($aux)-2]."z.".$aux[count($aux)-1];
}