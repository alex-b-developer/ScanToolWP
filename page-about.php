
<?php 

$pluginfile = ABSPATH . 'wp-content/plugins/ScanToolWP/plugin.php';
$plugindata = get_plugin_data( $pluginfile );

    echo '<h3>Autor del Plugin: ' . $plugindata['Description']. '</h3>';

    echo '<h3><a href="https://www.facebook.com/nativapps" target="_blank">Facebook</a></h3>';

    echo '<h3><a href="https://www.instagram.com/nativapps" target="_blank">Instagram</a></h3>';

    echo '<h3><a href="https://www.linkedin.com/company/nativapps-inc" target="_blank">LinkedIn</a></h3>';
?>
