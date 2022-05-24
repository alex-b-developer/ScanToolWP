<h3> NOMBRE DEL SITIO: <?php echo get_bloginfo( 'name' ); ?></h3>

<h3> URL DEL SITIO: <?php echo get_site_url(); ?></h3>

<h3> URL DE WORDPRESS: <?php echo "https://wordpress.org/"; ?></h3>

<h3> VERSION: <?php echo get_bloginfo('version'); ?></h3>

<h3>Lista de Temas instalados:</h3>
<p> 

<?php 

$all_themes = wp_get_themes();

foreach ($all_themes as $theme) {
  if ($theme->get('Name') == get_current_theme()){
  	echo "<strong>" . $theme->get('Name'). "</strong> - " ;
  }else{
  echo $theme->get('Name'). " - " ;	
	}
}


?>
</p>
<h3>Lista de Plugins instalados:</h3>

<p>
<?php 

//var_dump(get_plugins());

$all_plugins = get_plugins();


foreach ($all_plugins  as $plugindata) {

		//if(is_plugin_active( dirname(__FILE__,2).$plugindata['TextDomain']. "/".$plugindata['TextDomain'].".php" )){
		echo $plugindata['Name']. " - ";
		//echo dirname(__FILE__,2).$plugindata['TextDomain']. "/".$plugindata['TextDomain'].".php ";
		//}
}
?>
</p>

<h3>Cantidad de paginas publicadas:
<?php 
	$count_pages = wp_count_posts('page');
	$total_pages = $count_pages->publish;
	echo $total_pages;
?>
</h3>

<h3>Cantidad de post publicados: 
<?php 
	$count_pages = wp_count_posts('post');
	$total_pages = $count_pages->publish;
	echo $total_pages;
?>
</h3>