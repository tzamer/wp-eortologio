<?php 
  /*
  Plugin Name: Eortologio
  Plugin URI: http://www.techjam.gr
  Description: Plugin for displaying Greek name days in a calendar format
  Author: P. Tzamtzis
  Version: 0.1
  Author URI: http://www.techjam.gr
  */
?>

<?php 
  /* Creates the admin menu for the plugin settings */
  function eortologio_admin() {
      include('eortologio_admin.php');
  }

  /* Create Admin menu link inside "Settings" */
  function eortologio_admin_actions() {
    add_options_page("Eortologio settings", "Eortologio settings", 1, "Eortologio settings", "eortologio_admin");
  }
  add_action('admin_menu', 'eortologio_admin_actions');

?>

